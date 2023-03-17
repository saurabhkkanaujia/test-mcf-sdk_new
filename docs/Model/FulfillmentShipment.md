# # FulfillmentShipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_shipment_id** | **string** | A shipment identifier assigned by Amazon. |
**fulfillment_center_id** | **string** | An identifier for the fulfillment center that the shipment will be sent from. |
**fulfillment_shipment_status** | **string** | The current status of the shipment. |
**shipping_date** | **\DateTime** |  | [optional]
**estimated_arrival_date** | **\DateTime** |  | [optional]
**shipping_notes** | **string[]** | Provides additional insight into shipment timeline. Primairly used to communicate that actual delivery dates aren&#39;t available. | [optional]
**fulfillment_shipment_item** | [**\Ced\Model\FulfillmentShipmentItem[]**](FulfillmentShipmentItem.md) | An array of fulfillment shipment item information. |
**fulfillment_shipment_package** | [**\Ced\Model\FulfillmentShipmentPackage[]**](FulfillmentShipmentPackage.md) | An array of fulfillment shipment package information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
