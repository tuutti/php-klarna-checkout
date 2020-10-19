SHELL := /bin/bash
PHONY :=
COMMAND = openapi-generator-cli

include .env
export

default: all

PHONY += download-schema
download-schema:
	@curl --compressed https://developers.klarna.com/api/specs/$(NAME).json > $(NAME).json

PHONY += fix-schema
fix-schema:
	@echo "$$( jq '.security = [{ "basicAuth": [] }]' $(NAME).json )" > $(NAME).json
	@echo "$$( jq '.securityDefinitions = { "basicAuth": { "type": "basic" }}' $(NAME).json )" > $(NAME).json

PHONY += build-client
build-client:
	@$(COMMAND) generate -c $(NAME).config.json -i $(NAME).json -g php -o ../$(NAME) --skip-validate-spec \
		--git-host=github.com --git-repo-id=php-klarna-$(NAME) --git-user-id=tuutti \
		--global-property apiTests=false

PHONY += fix-models
fix-models:
	$(call fix-interfaces,php)
	$(call fix-interfaces,md)

PHONY += fix-composer-json
fix-composer-json:
	@echo "$$( jq --indent 4 '.require += {"tuutti/php-klarna-base": "~1.0"}' composer.json )" > composer.json

PHONY += fix-shared-files
fix-shared-files:
	$(call fix-shared-files,ApiException)
	$(call fix-shared-files,Configuration)
	$(call fix-shared-files,HeaderSelector)
	$(call fix-shared-files,ObjectSerializer)

PHONY += all
all: download-schema fix-schema build-client fix-models fix-composer-json fix-shared-files

define fix-shared-files
	@rm src/$(1).php || true
	@find . -type f -name '*' -exec sed -i 's|Klarna\\$(NAMESPACE)\\$(1)|Klarna\\$(1)|g' {} +
endef

define fix-interfaces
	@find . -type f -name '*.$(1)' -exec sed -i 's/interface ModelInterface$$/interface ModelInterface extends \\Klarna\\Model\\ModelInterface/g' {} +
	@find . -type f -name '*.$(1)' -exec sed -i 's|Klarna\\Model\\$(NAMESPACE)\\ModelInterface|Klarna\\Model\\ModelInterface|g' {} +
endef

.PHONY: $(PHONY)
