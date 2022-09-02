<?php
/**
 * DiscountLine
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
 * API spec
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * DiscountLine Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Checkout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DiscountLine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'discount_line';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'quantity' => 'int',
        'unit_price' => 'int',
        'tax_rate' => 'int',
        'total_amount' => 'int',
        'total_tax_amount' => 'int',
        'reference' => 'string',
        'merchant_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'quantity' => 'int64',
        'unit_price' => 'int64',
        'tax_rate' => 'int64',
        'total_amount' => 'int64',
        'total_tax_amount' => 'int64',
        'reference' => null,
        'merchant_data' => null
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
        'name' => 'name',
        'quantity' => 'quantity',
        'unit_price' => 'unit_price',
        'tax_rate' => 'tax_rate',
        'total_amount' => 'total_amount',
        'total_tax_amount' => 'total_tax_amount',
        'reference' => 'reference',
        'merchant_data' => 'merchant_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'unit_price' => 'setUnitPrice',
        'tax_rate' => 'setTaxRate',
        'total_amount' => 'setTotalAmount',
        'total_tax_amount' => 'setTotalTaxAmount',
        'reference' => 'setReference',
        'merchant_data' => 'setMerchantData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'unit_price' => 'getUnitPrice',
        'tax_rate' => 'getTaxRate',
        'total_amount' => 'getTotalAmount',
        'total_tax_amount' => 'getTotalTaxAmount',
        'reference' => 'getReference',
        'merchant_data' => 'getMerchantData'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['total_tax_amount'] = $data['total_tax_amount'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['merchant_data'] = $data['merchant_data'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (($this->container['quantity'] < 0)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 0.";
        }

        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if (($this->container['unit_price'] > 0)) {
            $invalidProperties[] = "invalid value for 'unit_price', must be smaller than or equal to 0.";
        }

        if ($this->container['tax_rate'] === null) {
            $invalidProperties[] = "'tax_rate' can't be null";
        }
        if (($this->container['tax_rate'] > 10000)) {
            $invalidProperties[] = "invalid value for 'tax_rate', must be smaller than or equal to 10000.";
        }

        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if (($this->container['total_amount'] > 0)) {
            $invalidProperties[] = "invalid value for 'total_amount', must be smaller than or equal to 0.";
        }

        if ($this->container['total_tax_amount'] === null) {
            $invalidProperties[] = "'total_tax_amount' can't be null";
        }
        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['merchant_data']) && (mb_strlen($this->container['merchant_data']) > 1024)) {
            $invalidProperties[] = "invalid value for 'merchant_data', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['merchant_data']) && (mb_strlen($this->container['merchant_data']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchant_data', the character length must be bigger than or equal to 0.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Descriptive name of discount
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling DiscountLine., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling DiscountLine., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Non-negative number. Quantity of the discount line item.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {

        if (($quantity < 0)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling DiscountLine., must be bigger than or equal to 0.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return int
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param int $unit_price Minor units. Includes tax, excludes discount. (Must be non-positive).  Example: -100 Euros should be -10000.
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {

        if (($unit_price > 0)) {
            throw new \InvalidArgumentException('invalid value for $unit_price when calling DiscountLine., must be smaller than or equal to 0.');
        }

        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return int
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param int $tax_rate Non-negative value. The percentage value is represented with two implicit decimals. (max 10000)  Example: 25% should be 2500.
     *
     * @return self
     */
    public function setTaxRate($tax_rate)
    {

        if (($tax_rate > 10000)) {
            throw new \InvalidArgumentException('invalid value for $tax_rate when calling DiscountLine., must be smaller than or equal to 10000.');
        }

        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param int $total_amount Minor units. Includes tax and discount.   Example: -25 euros should be -2500 Value = (quantity x unit_price). (Must be non-positive)
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {

        if (($total_amount > 0)) {
            throw new \InvalidArgumentException('invalid value for $total_amount when calling DiscountLine., must be smaller than or equal to 0.');
        }

        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets total_tax_amount
     *
     * @return int
     */
    public function getTotalTaxAmount()
    {
        return $this->container['total_tax_amount'];
    }

    /**
     * Sets total_tax_amount
     *
     * @param int $total_tax_amount Must be within ±1 of total_amount - total_amount \\* 10000 / (10000 + tax_rate). Should be non-positive
     *
     * @return self
     */
    public function setTotalTaxAmount($total_tax_amount)
    {
        $this->container['total_tax_amount'] = $total_tax_amount;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference The CRM reference to the gift-card that was entered by the user
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling DiscountLine., must be smaller than or equal to 255.');
        }
        if (!is_null($reference) && (mb_strlen($reference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling DiscountLine., must be bigger than or equal to 0.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets merchant_data
     *
     * @return string|null
     */
    public function getMerchantData()
    {
        return $this->container['merchant_data'];
    }

    /**
     * Sets merchant_data
     *
     * @param string|null $merchant_data The gift-card number that was entered by the user
     *
     * @return self
     */
    public function setMerchantData($merchant_data)
    {
        if (!is_null($merchant_data) && (mb_strlen($merchant_data) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $merchant_data when calling DiscountLine., must be smaller than or equal to 1024.');
        }
        if (!is_null($merchant_data) && (mb_strlen($merchant_data) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchant_data when calling DiscountLine., must be bigger than or equal to 0.');
        }

        $this->container['merchant_data'] = $merchant_data;

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


