# # AttachmentDisplayBodyItinerary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**departure** | **string** | IATA Airport Code (three letters) | [optional]
**departure_city** | **string** |  | [optional]
**arrival** | **string** | IATA Airport Code (three letters) | [optional]
**arrival_city** | **string** |  | [optional]
**carrier** | **string** | IATA Airline standard (two letters or digits) | [optional]
**segment_price** | **float** | Local currency | [optional]
**departure_date** | [**\DateTime**](\DateTime.md) | ISO 8601 e.g. 2012-11-24T15:00 | [optional]
**ticket_delivery_method** | **object** |  | [optional]
**ticket_delivery_recipient** | **string** | The name of the recipient the ticket is delivered to. If email or phone, then use either the email address or the phone number. | [optional]
**passenger_id** | **int[]** |  | [optional]
**class** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
