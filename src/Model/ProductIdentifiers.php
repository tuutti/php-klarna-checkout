<?php
/**
 * ProductIdentifiers
 *
 * PHP version 5
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
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
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
 * ProductIdentifiers Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Checkout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductIdentifiers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'product_identifiers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brand' => 'string',
        'category_path' => 'string',
        'global_trade_item_number' => 'string',
        'manufacturer_part_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'brand' => null,
        'category_path' => null,
        'global_trade_item_number' => null,
        'manufacturer_part_number' => null
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
        'brand' => 'brand',
        'category_path' => 'category_path',
        'global_trade_item_number' => 'global_trade_item_number',
        'manufacturer_part_number' => 'manufacturer_part_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brand' => 'setBrand',
        'category_path' => 'setCategoryPath',
        'global_trade_item_number' => 'setGlobalTradeItemNumber',
        'manufacturer_part_number' => 'setManufacturerPartNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brand' => 'getBrand',
        'category_path' => 'getCategoryPath',
        'global_trade_item_number' => 'getGlobalTradeItemNumber',
        'manufacturer_part_number' => 'getManufacturerPartNumber'
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
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['category_path'] = isset($data['category_path']) ? $data['category_path'] : null;
        $this->container['global_trade_item_number'] = isset($data['global_trade_item_number']) ? $data['global_trade_item_number'] : null;
        $this->container['manufacturer_part_number'] = isset($data['manufacturer_part_number']) ? $data['manufacturer_part_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['brand']) && (mb_strlen($this->container['brand']) > 70)) {
            $invalidProperties[] = "invalid value for 'brand', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['brand']) && (mb_strlen($this->container['brand']) < 0)) {
            $invalidProperties[] = "invalid value for 'brand', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['category_path']) && (mb_strlen($this->container['category_path']) > 750)) {
            $invalidProperties[] = "invalid value for 'category_path', the character length must be smaller than or equal to 750.";
        }

        if (!is_null($this->container['category_path']) && (mb_strlen($this->container['category_path']) < 0)) {
            $invalidProperties[] = "invalid value for 'category_path', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['global_trade_item_number']) && (mb_strlen($this->container['global_trade_item_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'global_trade_item_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['global_trade_item_number']) && (mb_strlen($this->container['global_trade_item_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'global_trade_item_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['manufacturer_part_number']) && (mb_strlen($this->container['manufacturer_part_number']) > 70)) {
            $invalidProperties[] = "invalid value for 'manufacturer_part_number', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['manufacturer_part_number']) && (mb_strlen($this->container['manufacturer_part_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'manufacturer_part_number', the character length must be bigger than or equal to 0.";
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
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand The product's brand name as generally recognized by consumers. If no brand is available for a product, do not supply any value.
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        if (!is_null($brand) && (mb_strlen($brand) > 70)) {
            throw new \InvalidArgumentException('invalid length for $brand when calling ProductIdentifiers., must be smaller than or equal to 70.');
        }
        if (!is_null($brand) && (mb_strlen($brand) < 0)) {
            throw new \InvalidArgumentException('invalid length for $brand when calling ProductIdentifiers., must be bigger than or equal to 0.');
        }

        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets category_path
     *
     * @return string|null
     */
    public function getCategoryPath()
    {
        return $this->container['category_path'];
    }

    /**
     * Sets category_path
     *
     * @param string|null $category_path The product's category path as used in the merchant's webshop. Include the full and most detailed category and separate the segments with ' > '. (max 750 characters)  Example: \"Electronics Store > Computers & Tablets > Desktops\"
     *
     * @return $this
     */
    public function setCategoryPath($category_path)
    {
        if (!is_null($category_path) && (mb_strlen($category_path) > 750)) {
            throw new \InvalidArgumentException('invalid length for $category_path when calling ProductIdentifiers., must be smaller than or equal to 750.');
        }
        if (!is_null($category_path) && (mb_strlen($category_path) < 0)) {
            throw new \InvalidArgumentException('invalid length for $category_path when calling ProductIdentifiers., must be bigger than or equal to 0.');
        }

        $this->container['category_path'] = $category_path;

        return $this;
    }

    /**
     * Gets global_trade_item_number
     *
     * @return string|null
     */
    public function getGlobalTradeItemNumber()
    {
        return $this->container['global_trade_item_number'];
    }

    /**
     * Sets global_trade_item_number
     *
     * @param string|null $global_trade_item_number The product's Global Trade Item Number (GTIN). Common types of GTIN are EAN, ISBN or UPC. Exclude dashes and spaces, where possible
     *
     * @return $this
     */
    public function setGlobalTradeItemNumber($global_trade_item_number)
    {
        if (!is_null($global_trade_item_number) && (mb_strlen($global_trade_item_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $global_trade_item_number when calling ProductIdentifiers., must be smaller than or equal to 50.');
        }
        if (!is_null($global_trade_item_number) && (mb_strlen($global_trade_item_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $global_trade_item_number when calling ProductIdentifiers., must be bigger than or equal to 0.');
        }

        $this->container['global_trade_item_number'] = $global_trade_item_number;

        return $this;
    }

    /**
     * Gets manufacturer_part_number
     *
     * @return string|null
     */
    public function getManufacturerPartNumber()
    {
        return $this->container['manufacturer_part_number'];
    }

    /**
     * Sets manufacturer_part_number
     *
     * @param string|null $manufacturer_part_number The product's Manufacturer Part Number (MPN), which - together with the brand - uniquely identifies a product. Only submit MPNs assigned by a manufacturer and use the most specific MPN possible
     *
     * @return $this
     */
    public function setManufacturerPartNumber($manufacturer_part_number)
    {
        if (!is_null($manufacturer_part_number) && (mb_strlen($manufacturer_part_number) > 70)) {
            throw new \InvalidArgumentException('invalid length for $manufacturer_part_number when calling ProductIdentifiers., must be smaller than or equal to 70.');
        }
        if (!is_null($manufacturer_part_number) && (mb_strlen($manufacturer_part_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $manufacturer_part_number when calling ProductIdentifiers., must be bigger than or equal to 0.');
        }

        $this->container['manufacturer_part_number'] = $manufacturer_part_number;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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


