<?php
/**
 * AttachmentDisplayBodyBusReservationDetails
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Klarna\Checkout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klarna Checkout API V3
 *
 * API spec
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
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
 * AttachmentDisplayBodyBusReservationDetails Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Checkout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AttachmentDisplayBodyBusReservationDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'attachment_display_body_bus_reservation_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pnr' => 'string',
        'itinerary' => '\Klarna\Checkout\Model\AttachmentDisplayBodyItinerary1[]',
        'insurance' => '\Klarna\Checkout\Model\AttachmentDisplayBodyInsurance[]',
        'passengers' => '\Klarna\Checkout\Model\AttachmentDisplayBodyPassengers[]',
        'affiliate_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pnr' => null,
        'itinerary' => null,
        'insurance' => null,
        'passengers' => null,
        'affiliate_name' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pnr' => 'pnr',
        'itinerary' => 'itinerary',
        'insurance' => 'insurance',
        'passengers' => 'passengers',
        'affiliate_name' => 'affiliate_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pnr' => 'setPnr',
        'itinerary' => 'setItinerary',
        'insurance' => 'setInsurance',
        'passengers' => 'setPassengers',
        'affiliate_name' => 'setAffiliateName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pnr' => 'getPnr',
        'itinerary' => 'getItinerary',
        'insurance' => 'getInsurance',
        'passengers' => 'getPassengers',
        'affiliate_name' => 'getAffiliateName'
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
        $this->container['pnr'] = $data['pnr'] ?? null;
        $this->container['itinerary'] = $data['itinerary'] ?? null;
        $this->container['insurance'] = $data['insurance'] ?? null;
        $this->container['passengers'] = $data['passengers'] ?? null;
        $this->container['affiliate_name'] = $data['affiliate_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets pnr
     *
     * @return string|null
     */
    public function getPnr()
    {
        return $this->container['pnr'];
    }

    /**
     * Sets pnr
     *
     * @param string|null $pnr Trip booking number, e.g. VH67899
     *
     * @return self
     */
    public function setPnr($pnr)
    {
        $this->container['pnr'] = $pnr;

        return $this;
    }

    /**
     * Gets itinerary
     *
     * @return \Klarna\Checkout\Model\AttachmentDisplayBodyItinerary1[]|null
     */
    public function getItinerary()
    {
        return $this->container['itinerary'];
    }

    /**
     * Sets itinerary
     *
     * @param \Klarna\Checkout\Model\AttachmentDisplayBodyItinerary1[]|null $itinerary Itinerary data, one per segment
     *
     * @return self
     */
    public function setItinerary($itinerary)
    {
        $this->container['itinerary'] = $itinerary;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \Klarna\Checkout\Model\AttachmentDisplayBodyInsurance[]|null
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \Klarna\Checkout\Model\AttachmentDisplayBodyInsurance[]|null $insurance Insurance data
     *
     * @return self
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets passengers
     *
     * @return \Klarna\Checkout\Model\AttachmentDisplayBodyPassengers[]|null
     */
    public function getPassengers()
    {
        return $this->container['passengers'];
    }

    /**
     * Sets passengers
     *
     * @param \Klarna\Checkout\Model\AttachmentDisplayBodyPassengers[]|null $passengers Passengers data
     *
     * @return self
     */
    public function setPassengers($passengers)
    {
        $this->container['passengers'] = $passengers;

        return $this;
    }

    /**
     * Gets affiliate_name
     *
     * @return string|null
     */
    public function getAffiliateName()
    {
        return $this->container['affiliate_name'];
    }

    /**
     * Sets affiliate_name
     *
     * @param string|null $affiliate_name Name of the affiliate that originated the purchase. If none, leave blank.
     *
     * @return self
     */
    public function setAffiliateName($affiliate_name)
    {
        $this->container['affiliate_name'] = $affiliate_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
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
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
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


