# # OrderLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the order line item. The possible values are:&lt;ul&gt;&lt;li&gt;&lt;em&gt;physical (physical good)&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;em&gt;discount&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;em&gt;shipping_fee&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;em&gt;sales_tax (depends on the country/city, usually called VAT)&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;em&gt;digital (digital good)&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;em&gt;gift_card&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;em&gt;store_credit (credit from the merchant)&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;em&gt;surcharge (extra charge)&lt;/em&gt;&lt;/li&gt;&lt;/ul&gt; | [optional] 
**reference** | **string** | Article number, SKU or similar. (max 64 characters) | [optional] 
**name** | **string** | Descriptive name of the order line item (max 255 characters) | 
**quantity** | **int** | Non-negative number. Quantity of the order line item. | 
**quantity_unit** | **string** | Unit used to describe the quantity, e.g. kg, pcs... If defined has to be 1-8 characters | [optional] 
**unit_price** | **int** | Minor units. Includes tax, excludes discount. (max value: 100000000).  Example: 100 Euros should be 10000. | 
**tax_rate** | **int** | Non-negative value. The percentage value is represented with two implicit decimals. (max 10000)  Example: 25% should be 2500. | 
**total_amount** | **int** | Minor units. Includes tax and discount.   Example: 25 euros should be 2500 Value &#x3D; (quantity x unit_price) - total_discount_amount. (max value: 100000000) | 
**total_discount_amount** | **int** | Non-negative minor units. Includes tax.  Example: 25 euros should be 2500 | [optional] 
**total_tax_amount** | **int** | Must be within ±1 of total_amount - total_amount \\* 10000 / (10000 + tax_rate). Negative when type is discount. | 
**merchant_data** | **string** | Property used to store additional metadata per item that will be returned whenever an order is read from Klarna. Pass through field. (max 1024 characters). | [optional] 
**product_url** | **string** | URL to the product page that can be later embedded in communications between Klarna and the customer. (max 1024 characters) | [optional] 
**image_url** | **string** | URL to an image that can be later embedded in communications between Klarna and the customer. (max 1024 characters)  Improves post-purchase customer experiences. | [optional] 
**product_identifiers** | [**\Klarna\Checkout\Model\ProductIdentifiers**](ProductIdentifiers.md) |  | [optional] 
**shipping_attributes** | [**\Klarna\Checkout\Model\ShippingAttributes**](ShippingAttributes.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


