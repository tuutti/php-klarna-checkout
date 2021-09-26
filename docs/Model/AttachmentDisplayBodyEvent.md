# # AttachmentDisplayBodyEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_name** | **string** | Name of the event, e.g. \&quot;Fancy Singer\&quot; | [optional]
**event_company** | **string** | Name of the company arranging the event, e.g. \&quot;Happy Parties Ltd.\&quot; | [optional]
**genre_of_event** | **string** | Category or type of venue, \&quot;Pop\&quot; | [optional]
**arena_name** | **string** | Name of the venue, \&quot;Song Arena\&quot; | [optional]
**arena_location** | [**\Klarna\Checkout\Model\AttachmentDisplayBodyArenaLocation**](AttachmentDisplayBodyArenaLocation.md) |  | [optional]
**start_time** | [**\DateTime**](\DateTime.md) | ISO 8601 e.g. 2012-11-24T15:00 | [optional]
**end_time** | [**\DateTime**](\DateTime.md) | ISO 8601 e.g. 2012-11-24T15:00 | [optional]
**access_controlled_venue** | **bool** | Tickets are digitally checked when enetering the venue | [optional]
**ticket_delivery_method** | **object** |  | [optional]
**ticket_delivery_recipient** | **string** | The name of the recipient the ticket is delivered to. If email or phone, then use either the email address or the phone number. | [optional]
**affiliate_name** | **string** | Name of the affiliate that originated the purchase. If none, leave blank. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
