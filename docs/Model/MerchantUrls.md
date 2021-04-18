# # MerchantUrls

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terms** | **string** | URL for the terms and conditions page of the merchant. The URL will be displayed inside the Klarna Checkout iFrame.(max 2000 characters) Example: \&quot;https://merchant.com/terms\&quot; | 
**checkout** | **string** | URL for the checkout page of the merchant. (max 2000 characters) Example: \&quot;https://merchant.com/checkout\&quot; | 
**confirmation** | **string** | URL of the merchant confirmation page. The consumer will be redirected back to the confirmation page if the authorization is successful after the customer clicks on the ‘Place Order’ button inside checkout. The special characters of the confirmation URL should be encoded, e.g. the \&quot;space\&quot; character should be written as \&quot;%20\&quot;. Then, on top of that, the whole confirmation URL should be encoded. E.g. the \&quot;space\&quot; character should become \&quot;%2520\&quot;. (max 2000 characters) Example: \&quot;https://merchant.com/confirmation\&quot; | 
**push** | **string** | URL that will be used for push notification when an order is completed. Should be different than checkout and confirmation URLs. (max 2000 characters) Example: \&quot;https://merchant.com/push\&quot; | 
**validation** | **string** | URL that will be requested for final merchant validation. (must be https, max 2000 characters) Example: \&quot;https://merchant.com/validation\&quot; | [optional] 
**notification** | **string** | URL for notifications on pending orders. (max 2000 characters) Example: \&quot;https://merchant.com/notification/{checkout.order.id}\&quot; | [optional] 
**cancellation_terms** | **string** | URL for the cancellation terms page of the merchant. The URL will be displayed in the email that is sent to the customer after the order is captured.(max 2000 characters) Example: \&quot;https://merchant.com/terms/cancelation\&quot; | [optional] 
**shipping_option_update** | **string** | URL for shipping option update. (must be https, max 2000 characters) Example: \&quot;https://merchant.com/shippingoptionupdate\&quot; | [optional] 
**address_update** | **string** | URL for shipping, tax and purchase currency updates. Will be called on address changes. (must be https, max 2000 characters) Example: \&quot;https://merchant.com/addressupdate\&quot; | [optional] 
**country_change** | **string** | URL for shipping, tax and purchase currency updates. Will be called on billing or shipping country changes. (must be https, max 2000 characters) Example: \&quot;https://merchant.com/countrychange\&quot; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


