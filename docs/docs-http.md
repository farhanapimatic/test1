# 

This is a sample server Petstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).  For this sample, you can use the api key `special-key` to test the authorization filters.



## Server Configuration for Base URLs

This section provides details on the environments available and lists down the servers in each of the environment. The default environment for this API is set to `production` while the default server is set to `default`.
### Environments

An environment consists of a set of servers with base URL values. The environment can be changed programatically allowing rapid switching between different environments e.g.the user can specify a Production and Testing Environment.The available environments for this API are: 

#### production
The environment comprises of the following servers: 

| Name | Base URL | 
|-----------|-------------|
| default | http://petstore.swagger.io/v2 |
| auth server | http://petstore.swagger.io/oauth |




## Authentication
This API uses `OAuth v2.0` with `Implicit` grant type.

#### Authorization Endpoint
Authorization grant can be obtained from the authorization endpoint at path `/dialog`. It will use server `auth server` which will serve as the base URL for this endpoint. 


### Scopes

The API makes use of the following OAuth scopes: 

| Name | Value | Description |
| ---- | ----- | ----------- |
| writepets | write:pets | modify pets in your account |
| readpets | read:pets | read your pets |





# <a name="api_reference"></a>API Reference

* [user](#user)
* [store](#store)
* [pet](#pet)

## <a name="user"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "user") user


### <a name="logout_user"></a>![Endpoint: ](https://apidocs.io/img/method.png "logoutUser") logoutUser


**`GET`** `/user/logout`

> *Tags:*  ``` Skips Authentication ``` 

> Logs out current logged in user session




#### Responses
**200** 



**Default** 

> successful operation


### <a name="create_users_with_list_input"></a>![Endpoint: ](https://apidocs.io/img/method.png "createUsersWithListInput") createUsersWithListInput


**`POST`** `/user/createWithList`

> *Tags:*  ``` Skips Authentication ``` 

> Creates list of users with given input array




#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [User](#user) |  ``` Required ```  ``` Collection ```  | List of user object | 

 Example 
``` 
[
  {
    "id": 3,
    "username": "username",
    "firstName": "firstName",
    "lastName": "lastName",
    "email": "email",
    "password": "password",
    "phone": "phone",
    "userStatus": 3
  }
]
``` 

#### Responses
**200** 



**Default** 

> successful operation


### <a name="create_users_with_array_input"></a>![Endpoint: ](https://apidocs.io/img/method.png "createUsersWithArrayInput") createUsersWithArrayInput


**`POST`** `/user/createWithArray`

> *Tags:*  ``` Skips Authentication ``` 

> Creates list of users with given input array




#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [User](#user) |  ``` Required ```  ``` Collection ```  | List of user object | 

 Example 
``` 
[
  {
    "id": 3,
    "username": "username",
    "firstName": "firstName",
    "lastName": "lastName",
    "email": "email",
    "password": "password",
    "phone": "phone",
    "userStatus": 3
  }
]
``` 

#### Responses
**200** 



**Default** 

> successful operation


### <a name="create_user"></a>![Endpoint: ](https://apidocs.io/img/method.png "createUser") createUser


**`POST`** `/user`

> *Tags:*  ``` Skips Authentication ``` 

> Create user




#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [User](#user) |  ``` Required ```  | Created user object | 

 Example 
``` 
{
  "id": 3,
  "username": "username",
  "firstName": "firstName",
  "lastName": "lastName",
  "email": "email",
  "password": "password",
  "phone": "phone",
  "userStatus": 3
}
``` 

#### Responses
**200** 



**Default** 

> successful operation


### <a name="login_user"></a>![Endpoint: ](https://apidocs.io/img/method.png "loginUser") loginUser


**`GET`** `/user/login`

> *Tags:*  ``` Skips Authentication ``` 

> Logs user into the system




#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| -------------------------------- |
| username | [string](#api_types) |  ``` Required ```  | The user name for login | `"username"` | 
| password | [string](#api_types) |  ``` Required ```  | The password for login in clear text | `"password"` | 

#### Responses
**200** 

> successful operation

Body ([String](#api_types)) 
```
"body"
```


**400** 

> Invalid username/password supplied


### <a name="get_user_by_name"></a>![Endpoint: ](https://apidocs.io/img/method.png "getUserByName") getUserByName


**`GET`** `/user/{username}`

> *Tags:*  ``` Skips Authentication ``` 

> Get user by user name




#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ----------------------------------- |
| username | [string](#api_types) |  ``` Required ```  | The name that needs to be fetched. Use user1 for testing. | `"username"` | 

#### Responses
**200** 

> successful operation

Body ([User](#user)) 
```
{
  "id": 3,
  "username": "username",
  "firstName": "firstName",
  "lastName": "lastName",
  "email": "email",
  "password": "password",
  "phone": "phone",
  "userStatus": 3
}
```


**400** 

> Invalid username supplied
**404** 

> User not found


### <a name="update_user"></a>![Endpoint: ](https://apidocs.io/img/method.png "updateUser") updateUser


**`PUT`** `/user/{username}`

> *Tags:*  ``` Skips Authentication ``` 

> Updated user




#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ----------------------------------- |
| username | [string](#api_types) |  ``` Required ```  | name that need to be updated | `"username"` | 

#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [User](#user) |  ``` Required ```  | Updated user object | 

 Example 
``` 
{
  "id": 3,
  "username": "username",
  "firstName": "firstName",
  "lastName": "lastName",
  "email": "email",
  "password": "password",
  "phone": "phone",
  "userStatus": 3
}
``` 

#### Responses
**200** 



**400** 

> Invalid user supplied
**404** 

> User not found


### <a name="delete_user"></a>![Endpoint: ](https://apidocs.io/img/method.png "deleteUser") deleteUser


**`DELETE`** `/user/{username}`

> *Tags:*  ``` Skips Authentication ``` 

> Delete user




#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ----------------------------------- |
| username | [string](#api_types) |  ``` Required ```  | The name that needs to be deleted | `"username"` | 

#### Responses
**200** 



**400** 

> Invalid username supplied
**404** 

> User not found


[Back to API Reference](#api_reference)

## <a name="store"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "store") store


### <a name="place_order"></a>![Endpoint: ](https://apidocs.io/img/method.png "placeOrder") placeOrder


**`POST`** `/store/order`

> *Tags:*  ``` Skips Authentication ``` 

> Place an order for a pet




#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [Order](#order) |  ``` Required ```  | order placed for purchasing the pet | 

 Example 
``` 
{
  "id": 3,
  "petId": 3,
  "quantity": 3,
  "shipDate": "2017-08-18T09:21:41.2765835Z",
  "status": "placed",
  "complete": false
}
``` 

#### Responses
**200** 

> successful operation

Body ([Order](#order)) 
```
{
  "id": 3,
  "petId": 3,
  "quantity": 3,
  "shipDate": "2017-08-18T09:21:41.2765835Z",
  "status": "placed",
  "complete": false
}
```


**400** 

> Invalid Order


### <a name="get_inventory"></a>![Endpoint: ](https://apidocs.io/img/method.png "getInventory") getInventory


**`GET`** `/store/inventory`

> Returns pet inventories by status




#### Responses
**200** 

> successful operation

Body ([Number](#api_types)) 
```
3
```


### <a name="get_order_by_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getOrderById") getOrderById


**`GET`** `/store/order/{orderId}`

> *Tags:*  ``` Skips Authentication ``` 

> Find purchase order by ID




#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ----------------------------------- |
| orderId | [long](#api_types) |  ``` Required ```  | ID of pet that needs to be fetched | `3` | 

#### Responses
**200** 

> successful operation

Body ([Order](#order)) 
```
{
  "id": 3,
  "petId": 3,
  "quantity": 3,
  "shipDate": "2017-08-18T09:21:41.2765835Z",
  "status": "placed",
  "complete": false
}
```


**400** 

> Invalid ID supplied
**404** 

> Order not found


### <a name="delete_order"></a>![Endpoint: ](https://apidocs.io/img/method.png "deleteOrder") deleteOrder


**`DELETE`** `/store/order/{orderId}`

> *Tags:*  ``` Skips Authentication ``` 

> Delete purchase order by ID




#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ----------------------------------- |
| orderId | [long](#api_types) |  ``` Required ```  | ID of the order that needs to be deleted | `3` | 

#### Responses
**200** 



**400** 

> Invalid ID supplied
**404** 

> Order not found


[Back to API Reference](#api_reference)

## <a name="pet"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "pet") pet


### <a name="find_pets_by_tags"></a>![Endpoint: ](https://apidocs.io/img/method.png "findPetsByTags") findPetsByTags


**`GET`** `/pet/findByTags`

> Finds Pets by tags



#### Scopes
The list of required scopes for this endpoint are:

- [`writepets`](#scopes)
- [`readpets`](#scopes)



#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| -------------------------------- |
| tags | [string](#api_types) |  ``` Required ```  ``` Collection ```  | Tags to filter by | `["tags"]` | 

#### Responses
**200** 

> successful operation

Body ([Pet](#pet)) 
```
[
  {
    "name": "name",
    "photoUrls": [
      "photoUrls"
    ],
    "id": 3,
    "category": {
      "id": 3,
      "name": "name"
    },
    "tags": [
      {
        "id": 3,
        "name": "name"
      }
    ],
    "status": "available"
  }
]
```


**400** 

> Invalid tag value


### <a name="add_pet"></a>![Endpoint: ](https://apidocs.io/img/method.png "addPet") addPet


**`POST`** `/pet`

> Add a new pet to the store



#### Scopes
The list of required scopes for this endpoint are:

- [`writepets`](#scopes)
- [`readpets`](#scopes)



#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [Pet](#pet) |  ``` Required ```  | Pet object that needs to be added to the store | 

 Example 
``` 
{
  "name": "name",
  "photoUrls": [
    "photoUrls"
  ],
  "id": 3,
  "category": {
    "id": 3,
    "name": "name"
  },
  "tags": [
    {
      "id": 3,
      "name": "name"
    }
  ],
  "status": "available"
}
``` 

#### Responses
**200** 



**405** 

> Invalid input


### <a name="update_pet"></a>![Endpoint: ](https://apidocs.io/img/method.png "updatePet") updatePet


**`PUT`** `/pet`

> Update an existing pet



#### Scopes
The list of required scopes for this endpoint are:

- [`writepets`](#scopes)
- [`readpets`](#scopes)



#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| [Pet](#pet) |  ``` Required ```  | Pet object that needs to be added to the store | 

 Example 
``` 
{
  "name": "name",
  "photoUrls": [
    "photoUrls"
  ],
  "id": 3,
  "category": {
    "id": 3,
    "name": "name"
  },
  "tags": [
    {
      "id": 3,
      "name": "name"
    }
  ],
  "status": "available"
}
``` 

#### Responses
**200** 



**400** 

> Invalid ID supplied
**404** 

> Pet not found
**405** 

> Validation exception


### <a name="find_pets_by_status"></a>![Endpoint: ](https://apidocs.io/img/method.png "findPetsByStatus") findPetsByStatus


**`GET`** `/pet/findByStatus`

> Finds Pets by status



#### Scopes
The list of required scopes for this endpoint are:

- [`writepets`](#scopes)
- [`readpets`](#scopes)



#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| -------------------------------- |
| status | [Status6](#status6) |  ``` Required ```  ``` Collection ```  | Status values that need to be considered for filter | `["available"]` | 

#### Responses
**200** 

> successful operation

Body ([Pet](#pet)) 
```
[
  {
    "name": "name",
    "photoUrls": [
      "photoUrls"
    ],
    "id": 3,
    "category": {
      "id": 3,
      "name": "name"
    },
    "tags": [
      {
        "id": 3,
        "name": "name"
      }
    ],
    "status": "available"
  }
]
```


**400** 

> Invalid status value


### <a name="get_pet_by_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getPetById") getPetById


**`GET`** `/pet/{petId}`

> Find pet by ID




#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ----------------------------------- |
| petId | [long](#api_types) |  ``` Required ```  | ID of pet to return | `3` | 

#### Responses
**200** 

> successful operation

Body ([Pet](#pet)) 
```
{
  "name": "name",
  "photoUrls": [
    "photoUrls"
  ],
  "id": 3,
  "category": {
    "id": 3,
    "name": "name"
  },
  "tags": [
    {
      "id": 3,
      "name": "name"
    }
  ],
  "status": "available"
}
```


**400** 

> Invalid ID supplied
**404** 

> Pet not found


### <a name="update_pet_with_form"></a>![Endpoint: ](https://apidocs.io/img/method.png "updatePetWithForm") updatePetWithForm


**`POST`** `/pet/{petId}`

> Updates a pet in the store with form data



#### Scopes
The list of required scopes for this endpoint are:

- [`writepets`](#scopes)
- [`readpets`](#scopes)



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ----------------------------------- |
| petId | [long](#api_types) |  ``` Required ```  | ID of pet that needs to be updated | `3` | 

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;

#### Request Body
Url Encoded

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| name | [string](#api_types) |  ``` Optional ```  | Updated name of the pet |  | 
| status | [string](#api_types) |  ``` Optional ```  | Updated status of the pet |  | 

##### Example
```
 name = "name" 
 status = "status" 
```

#### Responses
**200** 



**405** 

> Invalid input


### <a name="delete_pet"></a>![Endpoint: ](https://apidocs.io/img/method.png "deletePet") deletePet


**`DELETE`** `/pet/{petId}`

> Deletes a pet



#### Scopes
The list of required scopes for this endpoint are:

- [`writepets`](#scopes)
- [`readpets`](#scopes)



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ----------------------------------- |
| petId | [long](#api_types) |  ``` Required ```  | Pet id to delete | `3` | 

#### Request Headers
>api_key="api_key";

#### Responses
**200** 



**400** 

> Invalid ID supplied
**404** 

> Pet not found


### <a name="upload_file"></a>![Endpoint: ](https://apidocs.io/img/method.png "uploadFile") uploadFile


**`POST`** `/pet/{petId}/uploadImage`

> uploads an image



#### Scopes
The list of required scopes for this endpoint are:

- [`writepets`](#scopes)
- [`readpets`](#scopes)



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ----------------------------------- |
| petId | [long](#api_types) |  ``` Required ```  | ID of pet to update | `3` | 

#### Request Headers
>Content-Type=multipart/form-data;

#### Request Body
Multipart Form Data

| Parameter | Type | Tags | Description | Default Value |
|-----------|------| ---- |-------------| ------------- | 
| additionalMetadata | [string](#api_types) |  ``` Optional ```  | Additional data to pass to server |  | 
| file | [file](#api_types) |  ``` Optional ```  | file to upload |  | 

##### Example
```
 additionalMetadata = "additionalMetadata" 
 file =  
```

#### Responses
**200** 

> successful operation

Body ([ApiResponse](#api_response)) 
```
{
  "code": 3,
  "type": "type",
  "message": "message"
}
```


[Back to API Reference](#api_reference)

## <a name="api_types"></a>![Models: ](https://apidocs.io/img/class.png "API Types") API Types

This section provides details on the available types. The primitive types available are:

| Type | Example |
| ---- | -------- |
| **string** | `hello world` |
| **boolean** |	`true` |
| **number** | `1` |
| **precision** | `1.5` |
| **datetime** | `2016-03-13T12:52:32.123Z` |
| **date** | `2016-03-13` |
|**void** | |
| **dynamic** | |
| **binary** | |
| **long** | `12345678910` |
| **file** | |
| **uuid** | `0f8fad5b-d9cb-469f-a165-70867728950e` |


In addition to the above types, the following complex types are also available:
### <a name="api_response"></a>![Model: ](https://apidocs.io/img/method.png "ApiResponse") ApiResponse



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| code | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| type | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| message | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




### <a name="status6"></a>![Model: ](https://apidocs.io/img/method.png "Status6") Status6



> TODO: Add a method description




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `available` | TODO: Add description | 
| `pending` | TODO: Add description | 
| `sold` | TODO: Add description | 




### <a name="tag"></a>![Model: ](https://apidocs.io/img/method.png "Tag") Tag



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| id | [long](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| name | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




### <a name="category"></a>![Model: ](https://apidocs.io/img/method.png "Category") Category



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| id | [long](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| name | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




### <a name="status"></a>![Model: ](https://apidocs.io/img/method.png "Status") Status



> TODO: Add a method description




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `placed` | TODO: Add description | 
| `approved` | TODO: Add description | 
| `delivered` | TODO: Add description | 




### <a name="pet"></a>![Model: ](https://apidocs.io/img/method.png "Pet") Pet



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| name | [string](#api_types) |  ``` Required ```  | TODO: Add a property description | 
| photoUrls | [string](#api_types) |  ``` Required ```  ``` Collection ```  | TODO: Add a property description | 
| id | [long](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| category | [Category](#category) |  ``` Optional ```  | TODO: Add a property description | 
| tags | [Tag](#tag) |  ``` Optional ```  ``` Collection ```  | TODO: Add a property description | 
| status | [Status6](#status6) |  ``` Optional ```  | pet status in the store | 




### <a name="user"></a>![Model: ](https://apidocs.io/img/method.png "User") User



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| id | [long](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| username | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| firstName | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| lastName | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| email | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| password | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| phone | [string](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| userStatus | [number](#api_types) |  ``` Optional ```  | User Status | 




### <a name="order"></a>![Model: ](https://apidocs.io/img/method.png "Order") Order



> TODO: Add a method description




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| id | [long](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| petId | [long](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| quantity | [number](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| shipDate | [datetime](#api_types) |  ``` Optional ```  | TODO: Add a property description | 
| status | [Status](#status) |  ``` Optional ```  | Order Status | 
| complete | [boolean](#api_types) |  ``` Optional ```  | TODO: Add a property description | 




### <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `write:pets` | modify pets in your account | 
| `read:pets` | read your pets | 




### <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `write:pets` | modify pets in your account | 
| `read:pets` | read your pets | 




### <a name="o_auth_token"></a>![Model: ](https://apidocs.io/img/method.png "OAuthToken") OAuthToken



> OAuth 2 Authorization endpoint response




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| access_token | [string](#api_types) |  ``` Required ```  | Access token | 
| token_type | [string](#api_types) |  ``` Required ```  | Type of access token | 
| expires_in | [long](#api_types) |  ``` Optional ```  | Time in seconds before the access token expires | 
| scope | [string](#api_types) |  ``` Optional ```  | List of scopes granted<br>This is a space-delimited list of strings. | 
| expiry | [long](#api_types) |  ``` Optional ```  | Time of token expiry as unix timestamp (UTC) | 




### <a name="o_auth_provider"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProvider") OAuthProvider



> OAuth 2 Authorization endpoint exception




| Name | Type | Tags | Description |
|-----------|------| ---- |-------------| 
| error | [OAuthProviderError](#o_auth_provider_error) |  ``` Required ```  | Error code | 
| error_description | [string](#api_types) |  ``` Optional ```  | Human-readable text providing additional information on error.<br>Used to assist the client developer in understanding the error that occurred. | 
| error_uri | [string](#api_types) |  ``` Optional ```  | A URI identifying a human-readable web page with information about the error, used to provide the client developer with additional information about the error | 




### <a name="o_auth_provider_error"></a>![Model: ](https://apidocs.io/img/method.png "OAuthProviderError") OAuthProviderError



> OAuth 2 Authorization error codes




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `invalid_request` | The request is missing a required parameter, includes an unsupported parameter value (other than grant type), repeats a parameter, includes multiple credentials, utilizes more than one mechanism for authenticating the client, or is otherwise malformed. | 
| `invalid_client` | Client authentication failed (e.g., unknown client, no client authentication included, or unsupported authentication method). | 
| `invalid_grant` | The provided authorization grant (e.g., authorization code, resource owner credentials) or refresh token is invalid, expired, revoked, does not match the redirection URI used in the authorization request, or was issued to another client. | 
| `unauthorized_client` | The authenticated client is not authorized to use this authorization grant type. | 
| `unsupported_grant_type` | The authorization grant type is not supported by the authorization server. | 
| `invalid_scope` | The requested scope is invalid, unknown, malformed, or exceeds the scope granted by the resource owner. | 




### <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `write:pets` | modify pets in your account | 
| `read:pets` | read your pets | 




### <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `write:pets` | modify pets in your account | 
| `read:pets` | read your pets | 




### <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `write:pets` | modify pets in your account | 
| `read:pets` | read your pets | 




### <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `write:pets` | modify pets in your account | 
| `read:pets` | read your pets | 




### <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `write:pets` | modify pets in your account | 
| `read:pets` | read your pets | 




### <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `write:pets` | modify pets in your account | 
| `read:pets` | read your pets | 




### <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `write:pets` | modify pets in your account | 
| `read:pets` | read your pets | 




### <a name="o_auth_scope"></a>![Model: ](https://apidocs.io/img/method.png "OAuth Scope") OAuth Scope



> OAuth 2 scopes supported by the API




This type must take a value from the following [string](#api_types) enumeration of values:

| Value | Description |
| ----- | --------------- |
| `write:pets` | modify pets in your account | 
| `read:pets` | read your pets |

