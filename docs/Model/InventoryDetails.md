# # InventoryDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fulfillable_quantity** | **int** | The item quantity that can be picked, packed, and shipped. | [optional]
**inbound_working_quantity** | **int** | The number of units in an inbound shipment for which you have notified Amazon. | [optional]
**inbound_shipped_quantity** | **int** | The number of units in an inbound shipment that you have notified Amazon about and have provided a tracking number. | [optional]
**inbound_receiving_quantity** | **int** | The number of units that have not yet been received at an Amazon fulfillment center for processing, but are part of an inbound shipment with some units that have already been received and processed. | [optional]
**reserved_quantity** | [**\Ced\Model\ReservedQuantity**](ReservedQuantity.md) |  | [optional]
**researching_quantity** | [**\Ced\Model\ResearchingQuantity**](ResearchingQuantity.md) |  | [optional]
**unfulfillable_quantity** | [**\Ced\Model\UnfulfillableQuantity**](UnfulfillableQuantity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
