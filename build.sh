#!/bin/bash
NAMESPACE=Checkout
NAME=${NAMESPACE,,}

curl --compressed https://developers.klarna.com/api/specs/$NAME.json | jq > $NAME.json

# Fix security headers schema.
echo "$( jq '.security = [{ "basicAuth": [] }]' $NAME.json )" > $NAME.json
echo "$( jq '.securityDefinitions = { "basicAuth": { "type": "basic" }}' $NAME.json )" > $NAME.json

# Generate the client.
openapi-generator-cli generate -c $NAME.config.json -i $NAME.json -g php -o ../$NAME --skip-validate-spec --git-host=gitlab.com --git-repo-id=php-klarna-$NAME --git-user-id=tuutti --global-property apiTests=false

# Convert all Models to extend and use same interface.
find . -type f -name "*" -print0 | xargs -0 sed -i'' -e 's/\<interface ModelInterface extends \Klarna\Model\ModelInterface\>/interface ModelInterface extends \Klarna\Model\ModelInterface extends \\Klarna\\Model\\ModelInterface/g'
find . -type f -name "*" -exec sed -i 's|Klarna\\Model\\'"$NAMESPACE"'\\ModelInterface|Klarna\\Model\\ModelInterface|g' {} +

composer install
composer require "tuutti/php-klarna-base:~1.0"

for FILE in ApiException Configuration HeaderSelector ObjectSerializer
do
  rm src/$FILE.php || true
  # Convert all Api clients to use same base classes.
  find . -type f -name "*" -exec sed -i 's|Klarna\\'"$NAMESPACE"'\\'"$FILE"'|Klarna\\'"$FILE"'|g' {} +
done
