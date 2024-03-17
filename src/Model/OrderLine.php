<?php
/**
 * OrderLine
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
 * The checkout API is used to create a checkout with Klarna and update the checkout order during the purchase. As soon as the purchase is completed the order should be read and handled using the [`Order Management API`](https://docs.klarna.com/api/ordermanagement).\\n\\nRead more on [Klarna checkout](https://docs.klarna.com/klarna-checkout/).
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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
 * OrderLine Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Checkout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderLine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'order_line';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'reference' => 'string',
        'name' => 'string',
        'quantity' => 'int',
        'subscription' => '\Klarna\Checkout\Model\Subscription',
        'quantity_unit' => 'string',
        'unit_price' => 'int',
        'tax_rate' => 'int',
        'total_amount' => 'int',
        'total_discount_amount' => 'int',
        'total_tax_amount' => 'int',
        'merchant_data' => 'string',
        'product_url' => 'string',
        'image_url' => 'string',
        'product_identifiers' => '\Klarna\Checkout\Model\ProductIdentifiers',
        'shipping_attributes' => '\Klarna\Checkout\Model\ShippingAttributes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'reference' => null,
        'name' => null,
        'quantity' => 'int64',
        'subscription' => null,
        'quantity_unit' => null,
        'unit_price' => 'int64',
        'tax_rate' => 'int64',
        'total_amount' => 'int64',
        'total_discount_amount' => 'int64',
        'total_tax_amount' => 'int64',
        'merchant_data' => null,
        'product_url' => null,
        'image_url' => null,
        'product_identifiers' => null,
        'shipping_attributes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'reference' => false,
        'name' => false,
        'quantity' => false,
        'subscription' => false,
        'quantity_unit' => false,
        'unit_price' => false,
        'tax_rate' => false,
        'total_amount' => false,
        'total_discount_amount' => false,
        'total_tax_amount' => false,
        'merchant_data' => false,
        'product_url' => false,
        'image_url' => false,
        'product_identifiers' => false,
        'shipping_attributes' => false
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
        'type' => 'type',
        'reference' => 'reference',
        'name' => 'name',
        'quantity' => 'quantity',
        'subscription' => 'subscription',
        'quantity_unit' => 'quantity_unit',
        'unit_price' => 'unit_price',
        'tax_rate' => 'tax_rate',
        'total_amount' => 'total_amount',
        'total_discount_amount' => 'total_discount_amount',
        'total_tax_amount' => 'total_tax_amount',
        'merchant_data' => 'merchant_data',
        'product_url' => 'product_url',
        'image_url' => 'image_url',
        'product_identifiers' => 'product_identifiers',
        'shipping_attributes' => 'shipping_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'reference' => 'setReference',
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'subscription' => 'setSubscription',
        'quantity_unit' => 'setQuantityUnit',
        'unit_price' => 'setUnitPrice',
        'tax_rate' => 'setTaxRate',
        'total_amount' => 'setTotalAmount',
        'total_discount_amount' => 'setTotalDiscountAmount',
        'total_tax_amount' => 'setTotalTaxAmount',
        'merchant_data' => 'setMerchantData',
        'product_url' => 'setProductUrl',
        'image_url' => 'setImageUrl',
        'product_identifiers' => 'setProductIdentifiers',
        'shipping_attributes' => 'setShippingAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'reference' => 'getReference',
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'subscription' => 'getSubscription',
        'quantity_unit' => 'getQuantityUnit',
        'unit_price' => 'getUnitPrice',
        'tax_rate' => 'getTaxRate',
        'total_amount' => 'getTotalAmount',
        'total_discount_amount' => 'getTotalDiscountAmount',
        'total_tax_amount' => 'getTotalTaxAmount',
        'merchant_data' => 'getMerchantData',
        'product_url' => 'getProductUrl',
        'image_url' => 'getImageUrl',
        'product_identifiers' => 'getProductIdentifiers',
        'shipping_attributes' => 'getShippingAttributes'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('subscription', $data ?? [], null);
        $this->setIfExists('quantity_unit', $data ?? [], null);
        $this->setIfExists('unit_price', $data ?? [], null);
        $this->setIfExists('tax_rate', $data ?? [], null);
        $this->setIfExists('total_amount', $data ?? [], null);
        $this->setIfExists('total_discount_amount', $data ?? [], null);
        $this->setIfExists('total_tax_amount', $data ?? [], null);
        $this->setIfExists('merchant_data', $data ?? [], null);
        $this->setIfExists('product_url', $data ?? [], null);
        $this->setIfExists('image_url', $data ?? [], null);
        $this->setIfExists('product_identifiers', $data ?? [], null);
        $this->setIfExists('shipping_attributes', $data ?? [], null);
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

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 0.";
        }

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
        if (($this->container['unit_price'] > 100000000)) {
            $invalidProperties[] = "invalid value for 'unit_price', must be smaller than or equal to 100000000.";
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
        if (($this->container['total_amount'] > 100000000)) {
            $invalidProperties[] = "invalid value for 'total_amount', must be smaller than or equal to 100000000.";
        }

        if (!is_null($this->container['total_discount_amount']) && ($this->container['total_discount_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'total_discount_amount', must be bigger than or equal to 0.";
        }

        if ($this->container['total_tax_amount'] === null) {
            $invalidProperties[] = "'total_tax_amount' can't be null";
        }
        if (!is_null($this->container['merchant_data']) && (mb_strlen($this->container['merchant_data']) > 1024)) {
            $invalidProperties[] = "invalid value for 'merchant_data', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['merchant_data']) && (mb_strlen($this->container['merchant_data']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchant_data', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['product_url']) && (mb_strlen($this->container['product_url']) > 1024)) {
            $invalidProperties[] = "invalid value for 'product_url', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['product_url']) && (mb_strlen($this->container['product_url']) < 0)) {
            $invalidProperties[] = "invalid value for 'product_url', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['image_url']) && (mb_strlen($this->container['image_url']) > 1024)) {
            $invalidProperties[] = "invalid value for 'image_url', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['image_url']) && (mb_strlen($this->container['image_url']) < 0)) {
            $invalidProperties[] = "invalid value for 'image_url', the character length must be bigger than or equal to 0.";
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the order line item. The possible values are:<ul><li><em>physical (physical good)</em></li><li><em>discount</em></li><li><em>shipping_fee</em></li><li><em>sales_tax (depends on the country/city, usually called VAT)</em></li><li><em>digital (digital good)</em></li><li><em>gift_card</em></li><li><em>store_credit (credit from the merchant)</em></li><li><em>surcharge (extra charge)</em></li></ul>
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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
     * @param string|null $reference Article number, SKU or similar. (max 255 characters)
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        if ((mb_strlen($reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling OrderLine., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($reference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling OrderLine., must be bigger than or equal to 0.');
        }

        $this->container['reference'] = $reference;

        return $this;
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
     * @param string $name Descriptive name of the order line item (max 255 characters)
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling OrderLine., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling OrderLine., must be bigger than or equal to 1.');
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
     * @param int $quantity Non-negative number. Quantity of the order line item.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        if (($quantity < 0)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling OrderLine., must be bigger than or equal to 0.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets subscription
     *
     * @return \Klarna\Checkout\Model\Subscription|null
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \Klarna\Checkout\Model\Subscription|null $subscription subscription
     *
     * @return self
     */
    public function setSubscription($subscription)
    {
        if (is_null($subscription)) {
            throw new \InvalidArgumentException('non-nullable subscription cannot be null');
        }
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets quantity_unit
     *
     * @return string|null
     */
    public function getQuantityUnit()
    {
        return $this->container['quantity_unit'];
    }

    /**
     * Sets quantity_unit
     *
     * @param string|null $quantity_unit Unit used to describe the quantity, e.g. kg, pcs... If defined has to be 1-8 characters
     *
     * @return self
     */
    public function setQuantityUnit($quantity_unit)
    {
        if (is_null($quantity_unit)) {
            throw new \InvalidArgumentException('non-nullable quantity_unit cannot be null');
        }
        $this->container['quantity_unit'] = $quantity_unit;

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
     * @param int $unit_price Minor units. Includes tax, excludes discount. (max value: 100000000).  Example: 100 Euros should be 10000.
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        if (is_null($unit_price)) {
            throw new \InvalidArgumentException('non-nullable unit_price cannot be null');
        }

        if (($unit_price > 100000000)) {
            throw new \InvalidArgumentException('invalid value for $unit_price when calling OrderLine., must be smaller than or equal to 100000000.');
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
        if (is_null($tax_rate)) {
            throw new \InvalidArgumentException('non-nullable tax_rate cannot be null');
        }

        if (($tax_rate > 10000)) {
            throw new \InvalidArgumentException('invalid value for $tax_rate when calling OrderLine., must be smaller than or equal to 10000.');
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
     * @param int $total_amount Minor units. Includes tax and discount.   Example: 25 euros should be 2500 Value = (quantity x unit_price) - total_discount_amount. (max value: 100000000)
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        if (is_null($total_amount)) {
            throw new \InvalidArgumentException('non-nullable total_amount cannot be null');
        }

        if (($total_amount > 100000000)) {
            throw new \InvalidArgumentException('invalid value for $total_amount when calling OrderLine., must be smaller than or equal to 100000000.');
        }

        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets total_discount_amount
     *
     * @return int|null
     */
    public function getTotalDiscountAmount()
    {
        return $this->container['total_discount_amount'];
    }

    /**
     * Sets total_discount_amount
     *
     * @param int|null $total_discount_amount Non-negative minor units. Includes tax.  Example: 25 euros should be 2500
     *
     * @return self
     */
    public function setTotalDiscountAmount($total_discount_amount)
    {
        if (is_null($total_discount_amount)) {
            throw new \InvalidArgumentException('non-nullable total_discount_amount cannot be null');
        }

        if (($total_discount_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_discount_amount when calling OrderLine., must be bigger than or equal to 0.');
        }

        $this->container['total_discount_amount'] = $total_discount_amount;

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
     * @param int $total_tax_amount Must be within ±1 of total_amount - total_amount \\* 10000 / (10000 + tax_rate). Negative when type is discount.
     *
     * @return self
     */
    public function setTotalTaxAmount($total_tax_amount)
    {
        if (is_null($total_tax_amount)) {
            throw new \InvalidArgumentException('non-nullable total_tax_amount cannot be null');
        }
        $this->container['total_tax_amount'] = $total_tax_amount;

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
     * @param string|null $merchant_data Property used to store additional metadata per item that will be returned whenever an order is read from Klarna. Pass through field. (max 1024 characters).
     *
     * @return self
     */
    public function setMerchantData($merchant_data)
    {
        if (is_null($merchant_data)) {
            throw new \InvalidArgumentException('non-nullable merchant_data cannot be null');
        }
        if ((mb_strlen($merchant_data) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $merchant_data when calling OrderLine., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($merchant_data) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchant_data when calling OrderLine., must be bigger than or equal to 0.');
        }

        $this->container['merchant_data'] = $merchant_data;

        return $this;
    }

    /**
     * Gets product_url
     *
     * @return string|null
     */
    public function getProductUrl()
    {
        return $this->container['product_url'];
    }

    /**
     * Sets product_url
     *
     * @param string|null $product_url URL to the product page that can be later embedded in communications between Klarna and the customer. (max 1024 characters)
     *
     * @return self
     */
    public function setProductUrl($product_url)
    {
        if (is_null($product_url)) {
            throw new \InvalidArgumentException('non-nullable product_url cannot be null');
        }
        if ((mb_strlen($product_url) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $product_url when calling OrderLine., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($product_url) < 0)) {
            throw new \InvalidArgumentException('invalid length for $product_url when calling OrderLine., must be bigger than or equal to 0.');
        }

        $this->container['product_url'] = $product_url;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url URL to an image that can be later embedded in communications between Klarna and the customer. (max 1024 characters)  Improves post-purchase customer experiences.
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {
        if (is_null($image_url)) {
            throw new \InvalidArgumentException('non-nullable image_url cannot be null');
        }
        if ((mb_strlen($image_url) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $image_url when calling OrderLine., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($image_url) < 0)) {
            throw new \InvalidArgumentException('invalid length for $image_url when calling OrderLine., must be bigger than or equal to 0.');
        }

        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets product_identifiers
     *
     * @return \Klarna\Checkout\Model\ProductIdentifiers|null
     */
    public function getProductIdentifiers()
    {
        return $this->container['product_identifiers'];
    }

    /**
     * Sets product_identifiers
     *
     * @param \Klarna\Checkout\Model\ProductIdentifiers|null $product_identifiers product_identifiers
     *
     * @return self
     */
    public function setProductIdentifiers($product_identifiers)
    {
        if (is_null($product_identifiers)) {
            throw new \InvalidArgumentException('non-nullable product_identifiers cannot be null');
        }
        $this->container['product_identifiers'] = $product_identifiers;

        return $this;
    }

    /**
     * Gets shipping_attributes
     *
     * @return \Klarna\Checkout\Model\ShippingAttributes|null
     */
    public function getShippingAttributes()
    {
        return $this->container['shipping_attributes'];
    }

    /**
     * Sets shipping_attributes
     *
     * @param \Klarna\Checkout\Model\ShippingAttributes|null $shipping_attributes shipping_attributes
     *
     * @return self
     */
    public function setShippingAttributes($shipping_attributes)
    {
        if (is_null($shipping_attributes)) {
            throw new \InvalidArgumentException('non-nullable shipping_attributes cannot be null');
        }
        $this->container['shipping_attributes'] = $shipping_attributes;

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


