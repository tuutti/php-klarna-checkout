# # AttachmentDisplayBodyMarketplaceSellerInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unique_account_identifier_seller** | [**\Klarna\Checkout\Model\AttachmentDisplayBodyUniqueAccountIdentifierSeller**](AttachmentDisplayBodyUniqueAccountIdentifierSeller.md) |  | [optional]
**sub_merchant_id** | **string** | Name or unique number of the selling / delivering merchant, e.g. \&quot;Marketbrick Ltd.\&quot; | [optional]
**product_category** | **string** | Name of the overall category to which the specific good(s) belong to, according to the selling merchants categorization. E.g. \&quot;Computers\&quot; | [optional]
**product_name** | **string** | Name of the specific good purchased, e.g. \&quot;Acer 5400\&quot; | [optional]
**account_registration_date** | [**\DateTime**](\DateTime.md) | ISO 8601 e.g. 2012-11-24T15:00 | [optional]
**account_last_modified** | [**\Klarna\Checkout\Model\AttachmentDisplayBodyAccountLastModified**](AttachmentDisplayBodyAccountLastModified.md) |  | [optional]
**seller_rating** | **float** | Current rating. Partner should provide upfront their rating scale, e.g. 65 | [optional]
**number_of_trades** | **int** | Number of trades the sub-merchant did since 12 months back, e.g. 23 | [optional]
**volume_of_trades** | **int** | Volumes of trades the sub-merchant did since 12 months back, e.g. 230.5 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
