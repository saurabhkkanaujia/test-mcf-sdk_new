<?php
/**
 * FulfillmentReturnItemStatus
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
use \Ced\ObjectSerializer;

/**
 * FulfillmentReturnItemStatus Class Doc Comment
 *
 * @category Class
 * @description Indicates if the return item has been processed by a fulfillment center.
 * @package  Ced
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentReturnItemStatus
{
    /**
     * Possible values of this enum
     */
    public const _NEW = 'New';

    public const PROCESSED = 'Processed';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::PROCESSED
        ];
    }
}


