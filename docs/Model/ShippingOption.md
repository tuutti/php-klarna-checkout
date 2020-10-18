# # ShippingOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | id | 
**name** | **string** | Name. | 
**description** | **string** | Description. | [optional] 
**promo** | **string** | Promotion name. To be used if this shipping option is promotional. | [optional] 
**price** | **int** | Price including tax. | 
**preselected** | **bool** | If true, this option will be preselected when checkout loads. Default: false | [optional] [default to false]
**tax_amount** | **int** | Tax amount. | 
**tax_rate** | **int** | Non-negative. In percent, two implicit decimals. I.e 2500 &#x3D; 25%. | 
**shipping_method** | **string** | Shipping method. Possible values:&lt;ul&gt;&lt;li&gt;PickUpStore&lt;/li&gt;&lt;li&gt;Home&lt;/li&gt;&lt;li&gt;BoxReg&lt;/li&gt;&lt;li&gt;BoxUnreg&lt;/li&gt;&lt;li&gt;PickUpPoint&lt;/li&gt;&lt;li&gt;Own&lt;/li&gt;&lt;li&gt;Postal&lt;/li&gt;&lt;li&gt;DHLPackstation&lt;/li&gt;&lt;li&gt;Digital&lt;/li&gt;&lt;/ul&gt; If DHLPackstation is selected the correct form will be displayed. | [optional] 
**delivery_details** | [**\Klarna\Checkout\Model\DeliveryDetailsV1**](DeliveryDetailsV1.md) |  | [optional] 
**tms_reference** | **string** | TMS reference. Required to map completed orders to shipments reserved in TMS. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


