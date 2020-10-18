# php-klarna-checkout

API spec

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://gitlab.com/tuutti/php-klarna-checkout.git"
    }
  ],
  "require": {
    "tuutti/php-klarna-checkout": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/php-klarna-checkout/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = Klarna\Checkout\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\Checkout\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Klarna\Checkout\Model\Order(); // \Klarna\Checkout\Model\Order | 

try {
    $result = $apiInstance->createOrderMerchant($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrderMerchant: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.klarna.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderApi* | [**createOrderMerchant**](docs/Api/OrderApi.md#createordermerchant) | **POST** /checkout/v3/orders | Create a new order
*OrderApi* | [**readOrderMerchant**](docs/Api/OrderApi.md#readordermerchant) | **GET** /checkout/v3/orders/{order_id} | Retrieve an order
*OrderApi* | [**updateOrderMerchant**](docs/Api/OrderApi.md#updateordermerchant) | **POST** /checkout/v3/orders/{order_id} | Update an order


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Attachment](docs/Model/Attachment.md)
 - [Checkbox](docs/Model/Checkbox.md)
 - [CheckboxV2](docs/Model/CheckboxV2.md)
 - [Customer](docs/Model/Customer.md)
 - [DeliveryDetailsV1](docs/Model/DeliveryDetailsV1.md)
 - [Dimensions](docs/Model/Dimensions.md)
 - [Gui](docs/Model/Gui.md)
 - [MerchantRequested](docs/Model/MerchantRequested.md)
 - [MerchantRequestedCheckbox](docs/Model/MerchantRequestedCheckbox.md)
 - [MerchantUrls](docs/Model/MerchantUrls.md)
 - [Options](docs/Model/Options.md)
 - [Order](docs/Model/Order.md)
 - [OrderLine](docs/Model/OrderLine.md)
 - [PaymentProvider](docs/Model/PaymentProvider.md)
 - [PickupLocationV1](docs/Model/PickupLocationV1.md)
 - [ProductIdentifiers](docs/Model/ProductIdentifiers.md)
 - [ProductV1](docs/Model/ProductV1.md)
 - [ShippingAttributes](docs/Model/ShippingAttributes.md)
 - [ShippingOption](docs/Model/ShippingOption.md)
 - [TimeslotV1](docs/Model/TimeslotV1.md)


## Documentation For Authorization



## basicAuth


- **Type**: HTTP basic authentication


## Author



