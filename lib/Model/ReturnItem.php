<?php
/**
 * ReturnItem
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
 * ReturnItem Class Doc Comment
 *
 * @category Class
 * @description An item that Amazon accepted for return.
 * @package  Ced
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReturnItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seller_return_item_id' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'amazon_shipment_id' => 'string',
        'seller_return_reason_code' => 'string',
        'return_comment' => 'string',
        'amazon_return_reason_code' => 'string',
        'status' => '\Ced\Model\FulfillmentReturnItemStatus',
        'status_changed_date' => '\DateTime',
        'return_authorization_id' => 'string',
        'return_received_condition' => '\Ced\Model\ReturnItemDisposition',
        'fulfillment_center_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seller_return_item_id' => null,
        'seller_fulfillment_order_item_id' => null,
        'amazon_shipment_id' => null,
        'seller_return_reason_code' => null,
        'return_comment' => null,
        'amazon_return_reason_code' => null,
        'status' => null,
        'status_changed_date' => 'date-time',
        'return_authorization_id' => null,
        'return_received_condition' => null,
        'fulfillment_center_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'seller_return_item_id' => false,
		'seller_fulfillment_order_item_id' => false,
		'amazon_shipment_id' => false,
		'seller_return_reason_code' => false,
		'return_comment' => false,
		'amazon_return_reason_code' => false,
		'status' => false,
		'status_changed_date' => false,
		'return_authorization_id' => false,
		'return_received_condition' => false,
		'fulfillment_center_id' => false
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
        'seller_return_item_id' => 'sellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'amazonShipmentId',
        'seller_return_reason_code' => 'sellerReturnReasonCode',
        'return_comment' => 'returnComment',
        'amazon_return_reason_code' => 'amazonReturnReasonCode',
        'status' => 'status',
        'status_changed_date' => 'statusChangedDate',
        'return_authorization_id' => 'returnAuthorizationId',
        'return_received_condition' => 'returnReceivedCondition',
        'fulfillment_center_id' => 'fulfillmentCenterId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_return_item_id' => 'setSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'seller_return_reason_code' => 'setSellerReturnReasonCode',
        'return_comment' => 'setReturnComment',
        'amazon_return_reason_code' => 'setAmazonReturnReasonCode',
        'status' => 'setStatus',
        'status_changed_date' => 'setStatusChangedDate',
        'return_authorization_id' => 'setReturnAuthorizationId',
        'return_received_condition' => 'setReturnReceivedCondition',
        'fulfillment_center_id' => 'setFulfillmentCenterId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_return_item_id' => 'getSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'seller_return_reason_code' => 'getSellerReturnReasonCode',
        'return_comment' => 'getReturnComment',
        'amazon_return_reason_code' => 'getAmazonReturnReasonCode',
        'status' => 'getStatus',
        'status_changed_date' => 'getStatusChangedDate',
        'return_authorization_id' => 'getReturnAuthorizationId',
        'return_received_condition' => 'getReturnReceivedCondition',
        'fulfillment_center_id' => 'getFulfillmentCenterId'
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
        $this->setIfExists('seller_return_item_id', $data ?? [], null);
        $this->setIfExists('seller_fulfillment_order_item_id', $data ?? [], null);
        $this->setIfExists('amazon_shipment_id', $data ?? [], null);
        $this->setIfExists('seller_return_reason_code', $data ?? [], null);
        $this->setIfExists('return_comment', $data ?? [], null);
        $this->setIfExists('amazon_return_reason_code', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_changed_date', $data ?? [], null);
        $this->setIfExists('return_authorization_id', $data ?? [], null);
        $this->setIfExists('return_received_condition', $data ?? [], null);
        $this->setIfExists('fulfillment_center_id', $data ?? [], null);
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

        if ($this->container['seller_return_item_id'] === null) {
            $invalidProperties[] = "'seller_return_item_id' can't be null";
        }
        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if ($this->container['amazon_shipment_id'] === null) {
            $invalidProperties[] = "'amazon_shipment_id' can't be null";
        }
        if ($this->container['seller_return_reason_code'] === null) {
            $invalidProperties[] = "'seller_return_reason_code' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['status_changed_date'] === null) {
            $invalidProperties[] = "'status_changed_date' can't be null";
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
     * Gets seller_return_item_id
     *
     * @return string
     */
    public function getSellerReturnItemId()
    {
        return $this->container['seller_return_item_id'];
    }

    /**
     * Sets seller_return_item_id
     *
     * @param string $seller_return_item_id An identifier assigned by the seller to the return item.
     *
     * @return self
     */
    public function setSellerReturnItemId($seller_return_item_id)
    {
        if (is_null($seller_return_item_id)) {
            throw new \InvalidArgumentException('non-nullable seller_return_item_id cannot be null');
        }
        $this->container['seller_return_item_id'] = $seller_return_item_id;

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
     * @param string $seller_fulfillment_order_item_id The identifier assigned to the item by the seller when the fulfillment order was created.
     *
     * @return self
     */
    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        if (is_null($seller_fulfillment_order_item_id)) {
            throw new \InvalidArgumentException('non-nullable seller_fulfillment_order_item_id cannot be null');
        }
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets amazon_shipment_id
     *
     * @return string
     */
    public function getAmazonShipmentId()
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id
     *
     * @param string $amazon_shipment_id The identifier for the shipment that is associated with the return item.
     *
     * @return self
     */
    public function setAmazonShipmentId($amazon_shipment_id)
    {
        if (is_null($amazon_shipment_id)) {
            throw new \InvalidArgumentException('non-nullable amazon_shipment_id cannot be null');
        }
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    /**
     * Gets seller_return_reason_code
     *
     * @return string
     */
    public function getSellerReturnReasonCode()
    {
        return $this->container['seller_return_reason_code'];
    }

    /**
     * Sets seller_return_reason_code
     *
     * @param string $seller_return_reason_code The return reason code assigned to the return item by the seller.
     *
     * @return self
     */
    public function setSellerReturnReasonCode($seller_return_reason_code)
    {
        if (is_null($seller_return_reason_code)) {
            throw new \InvalidArgumentException('non-nullable seller_return_reason_code cannot be null');
        }
        $this->container['seller_return_reason_code'] = $seller_return_reason_code;

        return $this;
    }

    /**
     * Gets return_comment
     *
     * @return string|null
     */
    public function getReturnComment()
    {
        return $this->container['return_comment'];
    }

    /**
     * Sets return_comment
     *
     * @param string|null $return_comment An optional comment about the return item.
     *
     * @return self
     */
    public function setReturnComment($return_comment)
    {
        if (is_null($return_comment)) {
            throw new \InvalidArgumentException('non-nullable return_comment cannot be null');
        }
        $this->container['return_comment'] = $return_comment;

        return $this;
    }

    /**
     * Gets amazon_return_reason_code
     *
     * @return string|null
     */
    public function getAmazonReturnReasonCode()
    {
        return $this->container['amazon_return_reason_code'];
    }

    /**
     * Sets amazon_return_reason_code
     *
     * @param string|null $amazon_return_reason_code The return reason code that the Amazon fulfillment center assigned to the return item.
     *
     * @return self
     */
    public function setAmazonReturnReasonCode($amazon_return_reason_code)
    {
        if (is_null($amazon_return_reason_code)) {
            throw new \InvalidArgumentException('non-nullable amazon_return_reason_code cannot be null');
        }
        $this->container['amazon_return_reason_code'] = $amazon_return_reason_code;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Ced\Model\FulfillmentReturnItemStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Ced\Model\FulfillmentReturnItemStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_changed_date
     *
     * @return \DateTime
     */
    public function getStatusChangedDate()
    {
        return $this->container['status_changed_date'];
    }

    /**
     * Sets status_changed_date
     *
     * @param \DateTime $status_changed_date status_changed_date
     *
     * @return self
     */
    public function setStatusChangedDate($status_changed_date)
    {
        if (is_null($status_changed_date)) {
            throw new \InvalidArgumentException('non-nullable status_changed_date cannot be null');
        }
        $this->container['status_changed_date'] = $status_changed_date;

        return $this;
    }

    /**
     * Gets return_authorization_id
     *
     * @return string|null
     */
    public function getReturnAuthorizationId()
    {
        return $this->container['return_authorization_id'];
    }

    /**
     * Sets return_authorization_id
     *
     * @param string|null $return_authorization_id Identifies the return authorization used to return this item. See ReturnAuthorization.
     *
     * @return self
     */
    public function setReturnAuthorizationId($return_authorization_id)
    {
        if (is_null($return_authorization_id)) {
            throw new \InvalidArgumentException('non-nullable return_authorization_id cannot be null');
        }
        $this->container['return_authorization_id'] = $return_authorization_id;

        return $this;
    }

    /**
     * Gets return_received_condition
     *
     * @return \Ced\Model\ReturnItemDisposition|null
     */
    public function getReturnReceivedCondition()
    {
        return $this->container['return_received_condition'];
    }

    /**
     * Sets return_received_condition
     *
     * @param \Ced\Model\ReturnItemDisposition|null $return_received_condition return_received_condition
     *
     * @return self
     */
    public function setReturnReceivedCondition($return_received_condition)
    {
        if (is_null($return_received_condition)) {
            throw new \InvalidArgumentException('non-nullable return_received_condition cannot be null');
        }
        $this->container['return_received_condition'] = $return_received_condition;

        return $this;
    }

    /**
     * Gets fulfillment_center_id
     *
     * @return string|null
     */
    public function getFulfillmentCenterId()
    {
        return $this->container['fulfillment_center_id'];
    }

    /**
     * Sets fulfillment_center_id
     *
     * @param string|null $fulfillment_center_id The identifier for the Amazon fulfillment center that processed the return item.
     *
     * @return self
     */
    public function setFulfillmentCenterId($fulfillment_center_id)
    {
        if (is_null($fulfillment_center_id)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_center_id cannot be null');
        }
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

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


