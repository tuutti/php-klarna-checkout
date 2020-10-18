# Klarna\Checkout\OrderApi

All URIs are relative to *https://api.klarna.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderMerchant**](OrderApi.md#createOrderMerchant) | **POST** /checkout/v3/orders | Create a new order
[**readOrderMerchant**](OrderApi.md#readOrderMerchant) | **GET** /checkout/v3/orders/{order_id} | Retrieve an order
[**updateOrderMerchant**](OrderApi.md#updateOrderMerchant) | **POST** /checkout/v3/orders/{order_id} | Update an order



## createOrderMerchant

> \Klarna\Checkout\Model\Order createOrderMerchant($body)

Create a new order

To create a new order simply provide a JSON object with the applicable properties.<br>The location of the newly created checkout order can be found in the location header of the response.<br>Please note: This is the url that should be used for future interactions (read and update) with the order, i.e. do not construct the order url based on the order id.

### Example

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
$body = new \Klarna\Checkout\Model\Order(); // \Klarna\Checkout\Model\Order | 

try {
    $result = $apiInstance->createOrderMerchant($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrderMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Klarna\Checkout\Model\Order**](../Model/Order.md)|  | [optional]

### Return type

[**\Klarna\Checkout\Model\Order**](../Model/Order.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## readOrderMerchant

> \Klarna\Checkout\Model\Order readOrderMerchant($order_id)

Retrieve an order

Retrieve the full checkout order resource content

### Example

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
$order_id = 'order_id_example'; // string | 

try {
    $result = $apiInstance->readOrderMerchant($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->readOrderMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |

### Return type

[**\Klarna\Checkout\Model\Order**](../Model/Order.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateOrderMerchant

> \Klarna\Checkout\Model\Order updateOrderMerchant($order_id, $body)

Update an order

To update an order simply provide a JSON object with the properties you want to update. Properties not provided in the request will stay the same.<br>Please note: an order can only be updated when the status is checkout_incomplete

### Example

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
$order_id = 'order_id_example'; // string | 
$body = new \Klarna\Checkout\Model\Order(); // \Klarna\Checkout\Model\Order | 

try {
    $result = $apiInstance->updateOrderMerchant($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateOrderMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |
 **body** | [**\Klarna\Checkout\Model\Order**](../Model/Order.md)|  | [optional]

### Return type

[**\Klarna\Checkout\Model\Order**](../Model/Order.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

