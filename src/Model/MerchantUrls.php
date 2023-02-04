<?php
/**
 * MerchantUrls
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Klarna\Checkout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klarna Checkout API V3
 *
 * The checkout API is used to create a checkout with Klarna and update the checkout order during the purchase. As soon as the purchase is completed the order should be read and handled using the [`Order Management API`](https://docs.klarna.com/api/ordermanagement).  Read more on [Klarna checkout](https://docs.klarna.com/klarna-checkout/).
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Klarna\Checkout\Model;

use \ArrayAccess;
use \Klarna\ObjectSerializer;

/**
 * MerchantUrls Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Checkout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantUrls implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'merchant_urls';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'terms' => 'string',
        'checkout' => 'string',
        'confirmation' => 'string',
        'push' => 'string',
        'validation' => 'string',
        'notification' => 'string',
        'cancellation_terms' => 'string',
        'shipping_option_update' => 'string',
        'address_update' => 'string',
        'country_change' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'terms' => null,
        'checkout' => null,
        'confirmation' => null,
        'push' => null,
        'validation' => null,
        'notification' => null,
        'cancellation_terms' => null,
        'shipping_option_update' => null,
        'address_update' => null,
        'country_change' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'terms' => false,
		'checkout' => false,
		'confirmation' => false,
		'push' => false,
		'validation' => false,
		'notification' => false,
		'cancellation_terms' => false,
		'shipping_option_update' => false,
		'address_update' => false,
		'country_change' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'terms' => 'terms',
        'checkout' => 'checkout',
        'confirmation' => 'confirmation',
        'push' => 'push',
        'validation' => 'validation',
        'notification' => 'notification',
        'cancellation_terms' => 'cancellation_terms',
        'shipping_option_update' => 'shipping_option_update',
        'address_update' => 'address_update',
        'country_change' => 'country_change'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terms' => 'setTerms',
        'checkout' => 'setCheckout',
        'confirmation' => 'setConfirmation',
        'push' => 'setPush',
        'validation' => 'setValidation',
        'notification' => 'setNotification',
        'cancellation_terms' => 'setCancellationTerms',
        'shipping_option_update' => 'setShippingOptionUpdate',
        'address_update' => 'setAddressUpdate',
        'country_change' => 'setCountryChange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terms' => 'getTerms',
        'checkout' => 'getCheckout',
        'confirmation' => 'getConfirmation',
        'push' => 'getPush',
        'validation' => 'getValidation',
        'notification' => 'getNotification',
        'cancellation_terms' => 'getCancellationTerms',
        'shipping_option_update' => 'getShippingOptionUpdate',
        'address_update' => 'getAddressUpdate',
        'country_change' => 'getCountryChange'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('terms', $data ?? [], null);
        $this->setIfExists('checkout', $data ?? [], null);
        $this->setIfExists('confirmation', $data ?? [], null);
        $this->setIfExists('push', $data ?? [], null);
        $this->setIfExists('validation', $data ?? [], null);
        $this->setIfExists('notification', $data ?? [], null);
        $this->setIfExists('cancellation_terms', $data ?? [], null);
        $this->setIfExists('shipping_option_update', $data ?? [], null);
        $this->setIfExists('address_update', $data ?? [], null);
        $this->setIfExists('country_change', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['terms'] === null) {
            $invalidProperties[] = "'terms' can't be null";
        }
        if ((mb_strlen($this->container['terms']) > 2000)) {
            $invalidProperties[] = "invalid value for 'terms', the character length must be smaller than or equal to 2000.";
        }

        if ((mb_strlen($this->container['terms']) < 0)) {
            $invalidProperties[] = "invalid value for 'terms', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['checkout'] === null) {
            $invalidProperties[] = "'checkout' can't be null";
        }
        if ((mb_strlen($this->container['checkout']) > 2000)) {
            $invalidProperties[] = "invalid value for 'checkout', the character length must be smaller than or equal to 2000.";
        }

        if ((mb_strlen($this->container['checkout']) < 0)) {
            $invalidProperties[] = "invalid value for 'checkout', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['confirmation'] === null) {
            $invalidProperties[] = "'confirmation' can't be null";
        }
        if ((mb_strlen($this->container['confirmation']) > 2000)) {
            $invalidProperties[] = "invalid value for 'confirmation', the character length must be smaller than or equal to 2000.";
        }

        if ((mb_strlen($this->container['confirmation']) < 0)) {
            $invalidProperties[] = "invalid value for 'confirmation', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['push'] === null) {
            $invalidProperties[] = "'push' can't be null";
        }
        if ((mb_strlen($this->container['push']) > 2000)) {
            $invalidProperties[] = "invalid value for 'push', the character length must be smaller than or equal to 2000.";
        }

        if ((mb_strlen($this->container['push']) < 0)) {
            $invalidProperties[] = "invalid value for 'push', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['validation']) && (mb_strlen($this->container['validation']) > 2000)) {
            $invalidProperties[] = "invalid value for 'validation', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['validation']) && (mb_strlen($this->container['validation']) < 0)) {
            $invalidProperties[] = "invalid value for 'validation', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['notification']) && (mb_strlen($this->container['notification']) > 2000)) {
            $invalidProperties[] = "invalid value for 'notification', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['notification']) && (mb_strlen($this->container['notification']) < 0)) {
            $invalidProperties[] = "invalid value for 'notification', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['cancellation_terms']) && (mb_strlen($this->container['cancellation_terms']) > 2000)) {
            $invalidProperties[] = "invalid value for 'cancellation_terms', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['cancellation_terms']) && (mb_strlen($this->container['cancellation_terms']) < 0)) {
            $invalidProperties[] = "invalid value for 'cancellation_terms', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['shipping_option_update']) && (mb_strlen($this->container['shipping_option_update']) > 2000)) {
            $invalidProperties[] = "invalid value for 'shipping_option_update', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['shipping_option_update']) && (mb_strlen($this->container['shipping_option_update']) < 0)) {
            $invalidProperties[] = "invalid value for 'shipping_option_update', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['address_update']) && (mb_strlen($this->container['address_update']) > 2000)) {
            $invalidProperties[] = "invalid value for 'address_update', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['address_update']) && (mb_strlen($this->container['address_update']) < 0)) {
            $invalidProperties[] = "invalid value for 'address_update', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['country_change']) && (mb_strlen($this->container['country_change']) > 2000)) {
            $invalidProperties[] = "invalid value for 'country_change', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['country_change']) && (mb_strlen($this->container['country_change']) < 0)) {
            $invalidProperties[] = "invalid value for 'country_change', the character length must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets terms
     *
     * @return string
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param string $terms URL for the terms and conditions page of the merchant. The URL will be displayed inside the Klarna Checkout iFrame.(max 2000 characters) Example: \"https://merchant.com/terms\"
     *
     * @return self
     */
    public function setTerms($terms)
    {
        if (is_null($terms)) {
            throw new \InvalidArgumentException('non-nullable terms cannot be null');
        }
        if ((mb_strlen($terms) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $terms when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($terms) < 0)) {
            throw new \InvalidArgumentException('invalid length for $terms when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets checkout
     *
     * @return string
     */
    public function getCheckout()
    {
        return $this->container['checkout'];
    }

    /**
     * Sets checkout
     *
     * @param string $checkout URL for the checkout page of the merchant. (max 2000 characters) Example: \"https://merchant.com/checkout\"
     *
     * @return self
     */
    public function setCheckout($checkout)
    {
        if (is_null($checkout)) {
            throw new \InvalidArgumentException('non-nullable checkout cannot be null');
        }
        if ((mb_strlen($checkout) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $checkout when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($checkout) < 0)) {
            throw new \InvalidArgumentException('invalid length for $checkout when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['checkout'] = $checkout;

        return $this;
    }

    /**
     * Gets confirmation
     *
     * @return string
     */
    public function getConfirmation()
    {
        return $this->container['confirmation'];
    }

    /**
     * Sets confirmation
     *
     * @param string $confirmation URL of the merchant confirmation page. The consumer will be redirected back to the confirmation page if the authorization is successful after the customer clicks on the ‘Place Order’ button inside checkout. The special characters of the confirmation URL should be encoded, e.g. the \"space\" character should be written as \"%20\". Then, on top of that, the whole confirmation URL should be encoded. E.g. the \"space\" character should become \"%2520\". (max 2000 characters) Example: \"https://merchant.com/confirmation\"
     *
     * @return self
     */
    public function setConfirmation($confirmation)
    {
        if (is_null($confirmation)) {
            throw new \InvalidArgumentException('non-nullable confirmation cannot be null');
        }
        if ((mb_strlen($confirmation) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $confirmation when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($confirmation) < 0)) {
            throw new \InvalidArgumentException('invalid length for $confirmation when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['confirmation'] = $confirmation;

        return $this;
    }

    /**
     * Gets push
     *
     * @return string
     */
    public function getPush()
    {
        return $this->container['push'];
    }

    /**
     * Sets push
     *
     * @param string $push URL that will be used for push notification when an order is completed. Should be different than checkout and confirmation URLs. (max 2000 characters) Example: \"https://merchant.com/push\"
     *
     * @return self
     */
    public function setPush($push)
    {
        if (is_null($push)) {
            throw new \InvalidArgumentException('non-nullable push cannot be null');
        }
        if ((mb_strlen($push) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $push when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($push) < 0)) {
            throw new \InvalidArgumentException('invalid length for $push when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['push'] = $push;

        return $this;
    }

    /**
     * Gets validation
     *
     * @return string|null
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param string|null $validation URL that will be requested for final merchant validation. (must be https, max 2000 characters) Example: \"https://merchant.com/validation\"
     *
     * @return self
     */
    public function setValidation($validation)
    {
        if (is_null($validation)) {
            throw new \InvalidArgumentException('non-nullable validation cannot be null');
        }
        if ((mb_strlen($validation) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $validation when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($validation) < 0)) {
            throw new \InvalidArgumentException('invalid length for $validation when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['validation'] = $validation;

        return $this;
    }

    /**
     * Gets notification
     *
     * @return string|null
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     *
     * @param string|null $notification URL for notifications on pending orders. (max 2000 characters) Example: \"https://merchant.com/notification/{checkout.order.id}\"
     *
     * @return self
     */
    public function setNotification($notification)
    {
        if (is_null($notification)) {
            throw new \InvalidArgumentException('non-nullable notification cannot be null');
        }
        if ((mb_strlen($notification) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $notification when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($notification) < 0)) {
            throw new \InvalidArgumentException('invalid length for $notification when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['notification'] = $notification;

        return $this;
    }

    /**
     * Gets cancellation_terms
     *
     * @return string|null
     */
    public function getCancellationTerms()
    {
        return $this->container['cancellation_terms'];
    }

    /**
     * Sets cancellation_terms
     *
     * @param string|null $cancellation_terms URL for the cancellation terms page of the merchant. The URL will be displayed in the email that is sent to the customer after the order is captured.(max 2000 characters) Example: \"https://merchant.com/terms/cancelation\"
     *
     * @return self
     */
    public function setCancellationTerms($cancellation_terms)
    {
        if (is_null($cancellation_terms)) {
            throw new \InvalidArgumentException('non-nullable cancellation_terms cannot be null');
        }
        if ((mb_strlen($cancellation_terms) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $cancellation_terms when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($cancellation_terms) < 0)) {
            throw new \InvalidArgumentException('invalid length for $cancellation_terms when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['cancellation_terms'] = $cancellation_terms;

        return $this;
    }

    /**
     * Gets shipping_option_update
     *
     * @return string|null
     */
    public function getShippingOptionUpdate()
    {
        return $this->container['shipping_option_update'];
    }

    /**
     * Sets shipping_option_update
     *
     * @param string|null $shipping_option_update URL for shipping option update. (must be https, max 2000 characters) Example: \"https://merchant.com/shippingoptionupdate\"
     *
     * @return self
     */
    public function setShippingOptionUpdate($shipping_option_update)
    {
        if (is_null($shipping_option_update)) {
            throw new \InvalidArgumentException('non-nullable shipping_option_update cannot be null');
        }
        if ((mb_strlen($shipping_option_update) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $shipping_option_update when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($shipping_option_update) < 0)) {
            throw new \InvalidArgumentException('invalid length for $shipping_option_update when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['shipping_option_update'] = $shipping_option_update;

        return $this;
    }

    /**
     * Gets address_update
     *
     * @return string|null
     */
    public function getAddressUpdate()
    {
        return $this->container['address_update'];
    }

    /**
     * Sets address_update
     *
     * @param string|null $address_update URL for shipping, tax and purchase currency updates. Will be called on address changes. (must be https, max 2000 characters) Example: \"https://merchant.com/addressupdate\"
     *
     * @return self
     */
    public function setAddressUpdate($address_update)
    {
        if (is_null($address_update)) {
            throw new \InvalidArgumentException('non-nullable address_update cannot be null');
        }
        if ((mb_strlen($address_update) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $address_update when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($address_update) < 0)) {
            throw new \InvalidArgumentException('invalid length for $address_update when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['address_update'] = $address_update;

        return $this;
    }

    /**
     * Gets country_change
     *
     * @return string|null
     */
    public function getCountryChange()
    {
        return $this->container['country_change'];
    }

    /**
     * Sets country_change
     *
     * @param string|null $country_change URL for shipping, tax and purchase currency updates. Will be called on billing or shipping country changes. (must be https, max 2000 characters) Example: \"https://merchant.com/countrychange\"
     *
     * @return self
     */
    public function setCountryChange($country_change)
    {
        if (is_null($country_change)) {
            throw new \InvalidArgumentException('non-nullable country_change cannot be null');
        }
        if ((mb_strlen($country_change) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $country_change when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($country_change) < 0)) {
            throw new \InvalidArgumentException('invalid length for $country_change when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['country_change'] = $country_change;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


