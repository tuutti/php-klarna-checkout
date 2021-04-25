# # Options

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**require_validate_callback_success** | **bool** | If true, validate callback must get a positive response to not stop purchase. Default: false. | [optional] [default to false]
**acquiring_channel** | **string** | Acquiring channel for the order. The possible values are: &lt;ul&gt;&lt;li&gt;&lt;em&gt;MOTO for \&quot;Mail Order Telephone Order\&quot;&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;em&gt;ECOMMERCE for \&quot;E-commerce\&quot;&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;em&gt;IN_STORE for \&quot;Purchase in boutique\&quot;&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;em&gt;TELESALES for \&quot;Telesales/telemarketing\&quot;&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;em&gt;Default : ECOMMERCE&lt;/em&gt;&lt;/li&gt;&lt;/ul&gt; | [optional] 
**vat_removed** | **bool** | If true, VAT is not displayed in Checkout&#39;s Order Summary page. | [optional] [default to false]
**allow_separate_shipping_address** | **bool** | If true, the consumer can enter different billing and shipping addresses. Default: false, except for purchase_country DE where default is: true | [optional] [default to false]
**color_button** | **string** | Color for the buttons within the iFrame. Value should be a CSS hex color, e.g. \&quot;#FF9900\&quot; | [optional] 
**color_button_text** | **string** | Color for the text inside the buttons within the iFrame. Value should be a CSS hex color, e.g. \&quot;#FF9900\&quot; | [optional] 
**color_checkbox** | **string** | Color for the checkboxes within the iFrame. Value should be a CSS hex color, e.g. \&quot;#FF9900\&quot; | [optional] 
**color_checkbox_checkmark** | **string** | Color for the checkboxes checkmark within the iFrame. Value should be a CSS hex color, e.g. \&quot;#FF9900\&quot; | [optional] 
**color_header** | **string** | Color for the headers within the iFrame. Value should be a CSS hex color, e.g. \&quot;#FF9900\&quot; | [optional] 
**color_link** | **string** | Color for the hyperlinks within the iFrame. Value should be a CSS hex color, e.g. \&quot;#FF9900\&quot; | [optional] 
**date_of_birth_mandatory** | **bool** | If true, the consumer cannot skip date of birth. Default: false | [optional] [default to false]
**shipping_details** | **string** | A message that will be presented on the confirmation page under the headline \&quot;Delivery\&quot; (max 255 characters). | [optional] 
**title_mandatory** | **bool** | If specified to false, title becomes optional. Only available for orders for country GB. | [optional] [default to false]
**additional_checkbox** | [**\Klarna\Checkout\Model\Checkbox**](Checkbox.md) |  | [optional] 
**national_identification_number_mandatory** | **bool** | If true, the user cannot skip national identification number in SE, NO, FI and DK. Default: false. In order to read the national identification number in the validation callback, please contact Klarna’s merchant support. | [optional] [default to false]
**additional_merchant_terms** | **string** | Additional merchant defined field. e.g. Extra terms and conditions to show.  Example: \&quot;ADDITIONAL MERCHANT TERMS! \\[terms link\\](https://merchant.com/extra_terms)\&quot; | [optional] 
**phone_mandatory** | **bool** | If false, the consumer can skip the phone. Only available for orders in DACH countries. | [optional] [default to false]
**radius_border** | **string** | Radius for the border of elements within the iFrame. | [optional] 
**allowed_customer_types** | **string[]** | A list of allowed customer types. Supported types: &lt;b&gt;person&lt;/b&gt; &amp; &lt;b&gt;organization&lt;/b&gt;. Example: [\&quot;person\&quot;,\&quot;organization\&quot;] | [optional] 
**show_subtotal_detail** | **bool** | If true, the Order Detail subtotals view is expanded when the Klarna Checkout iFrame is loaded. Default: false | [optional] [default to false]
**additional_checkboxes** | [**\Klarna\Checkout\Model\CheckboxV2[]**](CheckboxV2.md) |  | [optional] 
**verify_national_identification_number** | **bool** | Enable verification of National Identification Numbers in Sweden, Finland and Norway.This option also make the national identification number mandatory | [optional] [default to false]
**show_vat_registration_number_field** | **bool** | If true, a optional VAT registration number field will be shown in the address form. Only applies for b2b orders. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


