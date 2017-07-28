# 



## Base URL

The Base URL for this API is `http://example.org/IPurchaseOrder`






# <a name="api_reference"></a>API Reference

* [PurchaseOrderBinding](#purchase_order_binding)

## <a name="purchase_order_binding"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "PurchaseOrderBinding") PurchaseOrderBinding


### <a name="order"></a>![Endpoint: ](https://apidocs.io/img/method.png "Order") Order


**`POST`** `/Order`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description



#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| `purchaseorder` |  ``` Required ```  | TODO: Add a parameter description | 

 Example 
``` 
{
  "parameters": {
    "quantity": 85,
    "productName": "productName"
  }
}
``` 

#### Responses
**200** 

Body (_OrderConfirmation_) 
```
{
  "parameters": {
    "orderID": 248,
    "expectedShipDate": "expectedShipDate"
  }
}
```


### <a name="order_status"></a>![Endpoint: ](https://apidocs.io/img/method.png "OrderStatus") OrderStatus


**`POST`** `/OrderStatus`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description



#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| `getorderstatus` |  ``` Required ```  | TODO: Add a parameter description | 

 Example 
``` 
{
  "parameters": {
    "orderID": 248
  }
}
``` 

#### Responses
**200** 

Body (_GetOrderStatusResponse_) 
```
{
  "parameters": {
    "orderID": 248,
    "status": "status"
  }
}
```


**500** 

> Error in retrieving response
Body (_OrderNotFoundFault_) 
```
{
  "parameters": {
    "orderID": 248
  }
}
```


[Back to API Reference](#api_reference)

