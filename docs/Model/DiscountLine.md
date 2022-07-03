# # DiscountLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Descriptive name of discount |
**quantity** | **int** | Non-negative number. Quantity of the discount line item. |
**unit_price** | **int** | Minor units. Includes tax, excludes discount. (Must be non-positive).  Example: -100 Euros should be -10000. |
**tax_rate** | **int** | Non-negative value. The percentage value is represented with two implicit decimals. (max 10000)  Example: 25% should be 2500. |
**total_amount** | **int** | Minor units. Includes tax and discount.   Example: -25 euros should be -2500 Value &#x3D; (quantity x unit_price). (Must be non-positive) |
**total_tax_amount** | **int** | Must be within ±1 of total_amount - total_amount \\* 10000 / (10000 + tax_rate). Should be non-positive |
**reference** | **string** | The CRM reference to the gift-card that was entered by the user | [optional]
**merchant_data** | **string** | The gift-card number that was entered by the user | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
