# # PaymentProvider

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the payment provider. (max 255 characters) |
**fee** | **int** | Minor units. Includes tax. | [optional]
**description** | **string** | Short description of the payment method. This is displayed below the selected payment method. (max 500 characters) | [optional]
**countries** | **string[]** | If specified, limits the method to the listed countries (alpha 2 codes). | [optional]
**label** | **string** | Controls label of buy button&lt;ul&gt;&lt;li&gt;continue&lt;/li&gt;&lt;li&gt;complete&lt;/li&gt;&lt;/ul&gt; | [optional]
**redirect_url** | **string** | URL to redirect to. (must be https, min 7, max 2000 characters) |
**image_url** | **string** | URL to an image to display. (must be https, max 2000 characters) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
