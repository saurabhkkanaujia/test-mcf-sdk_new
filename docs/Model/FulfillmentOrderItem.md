# # FulfillmentOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. |
**seller_fulfillment_order_item_id** | **string** | A fulfillment order item identifier submitted with a call to the createFulfillmentOrder operation. |
**quantity** | **int** | The item quantity. |
**gift_message** | **string** | A message to the gift recipient, if applicable. | [optional]
**displayable_comment** | **string** | Item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip. | [optional]
**fulfillment_network_sku** | **string** | Amazon&#39;s fulfillment network SKU of the item. | [optional]
**order_item_disposition** | **string** | Indicates whether the item is sellable or unsellable. | [optional]
**cancelled_quantity** | **int** | The item quantity. |
**unfulfillable_quantity** | **int** | The item quantity. |
**estimated_ship_date** | **\DateTime** |  | [optional]
**estimated_arrival_date** | **\DateTime** |  | [optional]
**per_unit_price** | [**\Ced\Model\Money**](Money.md) |  | [optional]
**per_unit_tax** | [**\Ced\Model\Money**](Money.md) |  | [optional]
**per_unit_declared_value** | [**\Ced\Model\Money**](Money.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
