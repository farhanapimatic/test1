# 



## Base URL

The Base URL for this API is `http://example.org/IPurchaseOrder`



## Authentication
The type of authentication used by this API is: `OAuth v2 Client Credentials Grant`



# <a name="api_reference"></a>API Reference

* [PurchaseOrderBinding](#purchase_order_binding)
* [OAuth Authorization](#o_auth_authorization)

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
    "quantity": 130,
    "productName": "productName",
    "etyry": "etyry"
  }
}
``` 

#### Responses
**200** 

Body (_OrderConfirmation_) 
```
{
  "parameters": {
    "orderID": 171,
    "expectedShipDate": "expectedShipDate"
  }
}
```


### <a name="order_status"></a>![Endpoint: ](https://apidocs.io/img/method.png "OrderStatus") OrderStatus


**`POST`** `/OrderStatus`

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description



#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| new2 | `string` |  ``` Required ```  | TODO: Add a parameter description | `"new2"` | 
| new3 | `string` |  ``` Required ```  | TODO: Add a parameter description | `"new3"` | 
| new1 | `string` |  ``` Required ```  | TODO: Add a parameter description | `"new1"` | 

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
    "orderID": 171
  }
}
``` 

#### Responses
**200** 

Body (_GetOrderStatusResponse_) 
```
{
  "parameters": {
    "orderID": 171,
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
    "orderID": 171
  }
}
```


[Back to API Reference](#api_reference)

## <a name="o_auth_authorization"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "OAuth Authorization") OAuth Authorization


### <a name="request_token"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token") request token


**`POST`** `/sdfsdfsdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.



#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `client_credentials` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "171",
  "scope": "scope",
  "expiry": "171"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token1"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token1") request token1


**`POST`** `/sdfsdfsdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.



#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `client_credentials` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "171",
  "scope": "scope",
  "expiry": "171"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token2"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token2") request token2


**`POST`** `/sdfsdfsdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.



#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `client_credentials` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "171",
  "scope": "scope",
  "expiry": "171"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token11"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token11") request token11


**`POST`** `/sdfsdfsdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.



#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `client_credentials` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "171",
  "scope": "scope",
  "expiry": "171"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token21"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token21") request token21


**`POST`** `/sdfsdfsdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.



#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `client_credentials` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "171",
  "scope": "scope",
  "expiry": "171"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token11"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token11") request token11


**`POST`** `/sdfsdfsdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.



#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `client_credentials` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "171",
  "scope": "scope",
  "expiry": "171"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token1"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token1") request token1


**`POST`** `/sdfsdfsdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.



#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `client_credentials` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "171",
  "scope": "scope",
  "expiry": "171"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token2"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token2") request token2


**`POST`** `/sdfsdfsdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.



#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `client_credentials` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "171",
  "scope": "scope",
  "expiry": "171"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token3"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token3") request token3


**`POST`** `/sdfsdfsdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.



#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `client_credentials` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "171",
  "scope": "scope",
  "expiry": "171"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token") request token


**`POST`** `/sdfsdfsdfsdf`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.



#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `client_credentials` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "171",
  "scope": "scope",
  "expiry": "171"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


[Back to API Reference](#api_reference)

