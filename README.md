# php-klarna-checkout

The checkout API is used to create a checkout with Klarna and update the checkout order during the purchase. As soon as the purchase is completed the order should be read and handled using the [`Order Management API`](https://docs.klarna.com/api/ordermanagement).\\n\\nRead more on [Klarna checkout](https://docs.klarna.com/klarna-checkout/).


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/tuutti/php-klarna-checkout.git"
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
<?php
require_once('/path/to/php-klarna-checkout/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\Checkout\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->abortOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->abortOrder: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.klarna.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderApi* | [**abortOrder**](docs/Api/OrderApi.md#abortorder) | **POST** /checkout/v3/orders/{order_id}/abort | Abort an order
*OrderApi* | [**createOrderMerchant**](docs/Api/OrderApi.md#createordermerchant) | **POST** /checkout/v3/orders | Create an order
*OrderApi* | [**readOrderMerchant**](docs/Api/OrderApi.md#readordermerchant) | **GET** /checkout/v3/orders/{order_id} | Get order details
*OrderApi* | [**updateOrderMerchant**](docs/Api/OrderApi.md#updateordermerchant) | **POST** /checkout/v3/orders/{order_id} | Update an order

## Models

- [Address](docs/Model/Address.md)
- [Attachment](docs/Model/Attachment.md)
- [Checkbox](docs/Model/Checkbox.md)
- [CheckboxV2](docs/Model/CheckboxV2.md)
- [Customer](docs/Model/Customer.md)
- [DeliveryDetailsV1](docs/Model/DeliveryDetailsV1.md)
- [Dimensions](docs/Model/Dimensions.md)
- [DiscountLine](docs/Model/DiscountLine.md)
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
- [SelectedAddon](docs/Model/SelectedAddon.md)
- [ShippingAttributes](docs/Model/ShippingAttributes.md)
- [ShippingOption](docs/Model/ShippingOption.md)
- [Subscription](docs/Model/Subscription.md)
- [TimeslotV1](docs/Model/TimeslotV1.md)

## Authorization

Authentication schemes defined for the API:
### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.4.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
