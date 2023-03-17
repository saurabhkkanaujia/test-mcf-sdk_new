<?php
/**
 * UpdateFulfillmentOrderItem
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Ced
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ced\Model;

use \ArrayAccess;
use \Ced\ObjectSerializer;

/**
 * UpdateFulfillmentOrderItem Class Doc Comment
 *
 * @category Class
 * @description Item information for updating a fulfillment order.
 * @package  Ced
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateFulfillmentOrderItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateFulfillmentOrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seller_sku' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'quantity' => 'int',
        'gift_message' => 'string',
        'displayable_comment' => 'string',
        'fulfillment_network_sku' => 'string',
        'order_item_disposition' => 'string',
        'per_unit_declared_value' => '\Ced\Model\Money',
        'per_unit_price' => '\Ced\Model\Money',
        'per_unit_tax' => '\Ced\Model\Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seller_sku' => null,
        'seller_fulfillment_order_item_id' => null,
        'quantity' => 'int32',
        'gift_message' => null,
        'displayable_comment' => null,
        'fulfillment_network_sku' => null,
        'order_item_disposition' => null,
        'per_unit_declared_value' => null,
        'per_unit_price' => null,
        'per_unit_tax' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'seller_sku' => false,
		'seller_fulfillment_order_item_id' => false,
		'quantity' => false,
		'gift_message' => false,
		'displayable_comment' => false,
		'fulfillment_network_sku' => false,
		'order_item_disposition' => false,
		'per_unit_declared_value' => false,
		'per_unit_price' => false,
		'per_unit_tax' => false
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
        'seller_sku' => 'sellerSku',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'quantity' => 'quantity',
        'gift_message' => 'giftMessage',
        'displayable_comment' => 'displayableComment',
        'fulfillment_network_sku' => 'fulfillmentNetworkSku',
        'order_item_disposition' => 'orderItemDisposition',
        'per_unit_declared_value' => 'perUnitDeclaredValue',
        'per_unit_price' => 'perUnitPrice',
        'per_unit_tax' => 'perUnitTax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'quantity' => 'setQuantity',
        'gift_message' => 'setGiftMessage',
        'displayable_comment' => 'setDisplayableComment',
        'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
        'order_item_disposition' => 'setOrderItemDisposition',
        'per_unit_declared_value' => 'setPerUnitDeclaredValue',
        'per_unit_price' => 'setPerUnitPrice',
        'per_unit_tax' => 'setPerUnitTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'quantity' => 'getQuantity',
        'gift_message' => 'getGiftMessage',
        'displayable_comment' => 'getDisplayableComment',
        'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
        'order_item_disposition' => 'getOrderItemDisposition',
        'per_unit_declared_value' => 'getPerUnitDeclaredValue',
        'per_unit_price' => 'getPerUnitPrice',
        'per_unit_tax' => 'getPerUnitTax'
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
        $this->setIfExists('seller_sku', $data ?? [], null);
        $this->setIfExists('seller_fulfillment_order_item_id', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('gift_message', $data ?? [], null);
        $this->setIfExists('displayable_comment', $data ?? [], null);
        $this->setIfExists('fulfillment_network_sku', $data ?? [], null);
        $this->setIfExists('order_item_disposition', $data ?? [], null);
        $this->setIfExists('per_unit_declared_value', $data ?? [], null);
        $this->setIfExists('per_unit_price', $data ?? [], null);
        $this->setIfExists('per_unit_tax', $data ?? [], null);
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

        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if ((mb_strlen($this->container['seller_fulfillment_order_item_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'seller_fulfillment_order_item_id', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (!is_null($this->container['gift_message']) && (mb_strlen($this->container['gift_message']) > 512)) {
            $invalidProperties[] = "invalid value for 'gift_message', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['displayable_comment']) && (mb_strlen($this->container['displayable_comment']) > 250)) {
            $invalidProperties[] = "invalid value for 'displayable_comment', the character length must be smaller than or equal to 250.";
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
     * Gets seller_sku
     *
     * @return string|null
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string|null $seller_sku The seller SKU of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku)
    {
        if (is_null($seller_sku)) {
            throw new \InvalidArgumentException('non-nullable seller_sku cannot be null');
        }
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_item_id
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id
     *
     * @param string $seller_fulfillment_order_item_id Identifies the fulfillment order item to update. Created with a previous call to the createFulfillmentOrder operation.
     *
     * @return self
     */
    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        if (is_null($seller_fulfillment_order_item_id)) {
            throw new \InvalidArgumentException('non-nullable seller_fulfillment_order_item_id cannot be null');
        }
        if ((mb_strlen($seller_fulfillment_order_item_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $seller_fulfillment_order_item_id when calling UpdateFulfillmentOrderItem., must be smaller than or equal to 50.');
        }

        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

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
     * @param int $quantity The item quantity.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets gift_message
     *
     * @return string|null
     */
    public function getGiftMessage()
    {
        return $this->container['gift_message'];
    }

    /**
     * Sets gift_message
     *
     * @param string|null $gift_message A message to the gift recipient, if applicable.
     *
     * @return self
     */
    public function setGiftMessage($gift_message)
    {
        if (is_null($gift_message)) {
            throw new \InvalidArgumentException('non-nullable gift_message cannot be null');
        }
        if ((mb_strlen($gift_message) > 512)) {
            throw new \InvalidArgumentException('invalid length for $gift_message when calling UpdateFulfillmentOrderItem., must be smaller than or equal to 512.');
        }

        $this->container['gift_message'] = $gift_message;

        return $this;
    }

    /**
     * Gets displayable_comment
     *
     * @return string|null
     */
    public function getDisplayableComment()
    {
        return $this->container['displayable_comment'];
    }

    /**
     * Sets displayable_comment
     *
     * @param string|null $displayable_comment Item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip.
     *
     * @return self
     */
    public function setDisplayableComment($displayable_comment)
    {
        if (is_null($displayable_comment)) {
            throw new \InvalidArgumentException('non-nullable displayable_comment cannot be null');
        }
        if ((mb_strlen($displayable_comment) > 250)) {
            throw new \InvalidArgumentException('invalid length for $displayable_comment when calling UpdateFulfillmentOrderItem., must be smaller than or equal to 250.');
        }

        $this->container['displayable_comment'] = $displayable_comment;

        return $this;
    }

    /**
     * Gets fulfillment_network_sku
     *
     * @return string|null
     */
    public function getFulfillmentNetworkSku()
    {
        return $this->container['fulfillment_network_sku'];
    }

    /**
     * Sets fulfillment_network_sku
     *
     * @param string|null $fulfillment_network_sku Amazon's fulfillment network SKU of the item.
     *
     * @return self
     */
    public function setFulfillmentNetworkSku($fulfillment_network_sku)
    {
        if (is_null($fulfillment_network_sku)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_network_sku cannot be null');
        }
        $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

        return $this;
    }

    /**
     * Gets order_item_disposition
     *
     * @return string|null
     */
    public function getOrderItemDisposition()
    {
        return $this->container['order_item_disposition'];
    }

    /**
     * Sets order_item_disposition
     *
     * @param string|null $order_item_disposition Indicates whether the item is sellable or unsellable.
     *
     * @return self
     */
    public function setOrderItemDisposition($order_item_disposition)
    {
        if (is_null($order_item_disposition)) {
            throw new \InvalidArgumentException('non-nullable order_item_disposition cannot be null');
        }
        $this->container['order_item_disposition'] = $order_item_disposition;

        return $this;
    }

    /**
     * Gets per_unit_declared_value
     *
     * @return \Ced\Model\Money|null
     */
    public function getPerUnitDeclaredValue()
    {
        return $this->container['per_unit_declared_value'];
    }

    /**
     * Sets per_unit_declared_value
     *
     * @param \Ced\Model\Money|null $per_unit_declared_value per_unit_declared_value
     *
     * @return self
     */
    public function setPerUnitDeclaredValue($per_unit_declared_value)
    {
        if (is_null($per_unit_declared_value)) {
            throw new \InvalidArgumentException('non-nullable per_unit_declared_value cannot be null');
        }
        $this->container['per_unit_declared_value'] = $per_unit_declared_value;

        return $this;
    }

    /**
     * Gets per_unit_price
     *
     * @return \Ced\Model\Money|null
     */
    public function getPerUnitPrice()
    {
        return $this->container['per_unit_price'];
    }

    /**
     * Sets per_unit_price
     *
     * @param \Ced\Model\Money|null $per_unit_price per_unit_price
     *
     * @return self
     */
    public function setPerUnitPrice($per_unit_price)
    {
        if (is_null($per_unit_price)) {
            throw new \InvalidArgumentException('non-nullable per_unit_price cannot be null');
        }
        $this->container['per_unit_price'] = $per_unit_price;

        return $this;
    }

    /**
     * Gets per_unit_tax
     *
     * @return \Ced\Model\Money|null
     */
    public function getPerUnitTax()
    {
        return $this->container['per_unit_tax'];
    }

    /**
     * Sets per_unit_tax
     *
     * @param \Ced\Model\Money|null $per_unit_tax per_unit_tax
     *
     * @return self
     */
    public function setPerUnitTax($per_unit_tax)
    {
        if (is_null($per_unit_tax)) {
            throw new \InvalidArgumentException('non-nullable per_unit_tax cannot be null');
        }
        $this->container['per_unit_tax'] = $per_unit_tax;

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


