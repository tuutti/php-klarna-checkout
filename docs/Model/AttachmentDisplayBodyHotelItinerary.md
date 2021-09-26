# # AttachmentDisplayBodyHotelItinerary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hotel_name** | **string** | Name of hotel | [optional]
**address** | [**\Klarna\Checkout\Model\AttachmentDisplayBodyAddress**](AttachmentDisplayBodyAddress.md) |  | [optional]
**start_time** | [**\DateTime**](\DateTime.md) | ISO 8601 e.g. 2012-11-24T15:00 | [optional]
**end_time** | [**\DateTime**](\DateTime.md) | ISO 8601 e.g. 2012-11-24T15:00 | [optional]
**number_of_rooms** | **int** |  | [optional]
**passenger_id** | **int[]** |  | [optional]
**ticket_delivery_method** | **object** |  | [optional]
**ticket_delivery_recipient** | **string** | The name of the recipient the ticket is delivered to. If email or phone, then use either the email address or the phone number. | [optional]
**hotel_price** | **float** | Local currency | [optional]
**class** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
