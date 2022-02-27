<?php
/**
 * AttachmentDisplayBodyHotelItinerary
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
 * AttachmentDisplayBodyHotelItinerary Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Checkout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AttachmentDisplayBodyHotelItinerary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'attachment_display_body_hotel_itinerary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hotel_name' => 'string',
        'address' => '\Klarna\Checkout\Model\AttachmentDisplayBodyAddress',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'number_of_rooms' => 'int',
        'passenger_id' => 'int[]',
        'ticket_delivery_method' => 'object',
        'ticket_delivery_recipient' => 'string',
        'hotel_price' => 'float',
        'class' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hotel_name' => null,
        'address' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'number_of_rooms' => null,
        'passenger_id' => null,
        'ticket_delivery_method' => null,
        'ticket_delivery_recipient' => null,
        'hotel_price' => null,
        'class' => null
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
        'hotel_name' => 'hotel_name',
        'address' => 'address',
        'start_time' => 'start_time',
        'end_time' => 'end_time',
        'number_of_rooms' => 'number_of_rooms',
        'passenger_id' => 'passenger_id',
        'ticket_delivery_method' => 'ticket_delivery_method',
        'ticket_delivery_recipient' => 'ticket_delivery_recipient',
        'hotel_price' => 'hotel_price',
        'class' => 'class'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hotel_name' => 'setHotelName',
        'address' => 'setAddress',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'number_of_rooms' => 'setNumberOfRooms',
        'passenger_id' => 'setPassengerId',
        'ticket_delivery_method' => 'setTicketDeliveryMethod',
        'ticket_delivery_recipient' => 'setTicketDeliveryRecipient',
        'hotel_price' => 'setHotelPrice',
        'class' => 'setClass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hotel_name' => 'getHotelName',
        'address' => 'getAddress',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'number_of_rooms' => 'getNumberOfRooms',
        'passenger_id' => 'getPassengerId',
        'ticket_delivery_method' => 'getTicketDeliveryMethod',
        'ticket_delivery_recipient' => 'getTicketDeliveryRecipient',
        'hotel_price' => 'getHotelPrice',
        'class' => 'getClass'
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
        $this->container['hotel_name'] = $data['hotel_name'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['end_time'] = $data['end_time'] ?? null;
        $this->container['number_of_rooms'] = $data['number_of_rooms'] ?? null;
        $this->container['passenger_id'] = $data['passenger_id'] ?? null;
        $this->container['ticket_delivery_method'] = $data['ticket_delivery_method'] ?? null;
        $this->container['ticket_delivery_recipient'] = $data['ticket_delivery_recipient'] ?? null;
        $this->container['hotel_price'] = $data['hotel_price'] ?? null;
        $this->container['class'] = $data['class'] ?? null;
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
     * Gets hotel_name
     *
     * @return string|null
     */
    public function getHotelName()
    {
        return $this->container['hotel_name'];
    }

    /**
     * Sets hotel_name
     *
     * @param string|null $hotel_name Name of hotel
     *
     * @return self
     */
    public function setHotelName($hotel_name)
    {
        $this->container['hotel_name'] = $hotel_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Klarna\Checkout\Model\AttachmentDisplayBodyAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Klarna\Checkout\Model\AttachmentDisplayBodyAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime|null $start_time ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime|null $end_time ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets number_of_rooms
     *
     * @return int|null
     */
    public function getNumberOfRooms()
    {
        return $this->container['number_of_rooms'];
    }

    /**
     * Sets number_of_rooms
     *
     * @param int|null $number_of_rooms number_of_rooms
     *
     * @return self
     */
    public function setNumberOfRooms($number_of_rooms)
    {
        $this->container['number_of_rooms'] = $number_of_rooms;

        return $this;
    }

    /**
     * Gets passenger_id
     *
     * @return int[]|null
     */
    public function getPassengerId()
    {
        return $this->container['passenger_id'];
    }

    /**
     * Sets passenger_id
     *
     * @param int[]|null $passenger_id passenger_id
     *
     * @return self
     */
    public function setPassengerId($passenger_id)
    {
        $this->container['passenger_id'] = $passenger_id;

        return $this;
    }

    /**
     * Gets ticket_delivery_method
     *
     * @return object|null
     */
    public function getTicketDeliveryMethod()
    {
        return $this->container['ticket_delivery_method'];
    }

    /**
     * Sets ticket_delivery_method
     *
     * @param object|null $ticket_delivery_method ticket_delivery_method
     *
     * @return self
     */
    public function setTicketDeliveryMethod($ticket_delivery_method)
    {
        $this->container['ticket_delivery_method'] = $ticket_delivery_method;

        return $this;
    }

    /**
     * Gets ticket_delivery_recipient
     *
     * @return string|null
     */
    public function getTicketDeliveryRecipient()
    {
        return $this->container['ticket_delivery_recipient'];
    }

    /**
     * Sets ticket_delivery_recipient
     *
     * @param string|null $ticket_delivery_recipient The name of the recipient the ticket is delivered to. If email or phone, then use either the email address or the phone number.
     *
     * @return self
     */
    public function setTicketDeliveryRecipient($ticket_delivery_recipient)
    {
        $this->container['ticket_delivery_recipient'] = $ticket_delivery_recipient;

        return $this;
    }

    /**
     * Gets hotel_price
     *
     * @return float|null
     */
    public function getHotelPrice()
    {
        return $this->container['hotel_price'];
    }

    /**
     * Sets hotel_price
     *
     * @param float|null $hotel_price Local currency
     *
     * @return self
     */
    public function setHotelPrice($hotel_price)
    {
        $this->container['hotel_price'] = $hotel_price;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string|null
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string|null $class class
     *
     * @return self
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

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


