# Getting started

This is a sample server Petstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).  For this sample, you can use the api key `special-key` to test the authorization filters.

## How to Build

The generated SDK relies on [Node Package Manager](https://www.npmjs.com/) (NPM) being available to resolve dependencies. If you don't already have NPM installed, please go ahead and follow instructions to install NPM from [here](https://nodejs.org/en/download/).
The SDK also requires Node to be installed. If Node isn't already installed, please install it from [here](https://nodejs.org/en/download/)
> NPM is installed by default when Node is installed

To check if node and npm have been successfully installed, write the following commands in command prompt:

* `node --version`
* `npm -version`

![Version Check](https://apidocs.io/illustration/nodejs?step=versionCheck&workspaceFolder=Swagger%20Petstore-Node)

Now use npm to resolve all dependencies by running the following command in the root directory (of the SDK folder):

```bash
npm install
```

![Resolve Dependencies](https://apidocs.io/illustration/nodejs?step=resolveDependency1&workspaceFolder=Swagger%20Petstore-Node)

![Resolve Dependencies](https://apidocs.io/illustration/nodejs?step=resolveDependency2)

This will install all dependencies in the `node_modules` folder.

Once dependencies are resolved, you will need to move the folder `SwaggerPetstoreLib ` in to your `node_modules` folder.

## How to Use

The following section explains how to use the library in a new project.

### 1. Open Project Folder
Open an IDE/Text Editor for JavaScript like Sublime Text. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

Click on `File` and select `Open Folder`.

![Open Folder](https://apidocs.io/illustration/nodejs?step=openFolder)

Select the folder of your SDK and click on `Select Folder` to open it up in Sublime Text. The folder will become visible in the bar on the left.

![Open Project](https://apidocs.io/illustration/nodejs?step=openProject&workspaceFolder=Swagger%20Petstore-Node)

### 2. Creating a Test File

Now right click on the folder name and select the `New File` option to create a new test file. Save it as `index.js` Now import the generated NodeJS library using the following lines of code:

```js
var lib = require('lib');
```

Save changes.

![Create new file](https://apidocs.io/illustration/nodejs?step=createNewFile&workspaceFolder=Swagger%20Petstore-Node)

![Save new file](https://apidocs.io/illustration/nodejs?step=saveNewFile&workspaceFolder=Swagger%20Petstore-Node)

### 3. Running The Test File

To run the `index.js` file, open up the command prompt and navigate to the Path where the SDK folder resides. Type the following command to run the file:

```
node index.js
```

![Run file](https://apidocs.io/illustration/nodejs?step=runProject&workspaceFolder=Swagger%20Petstore-Node)


## How to Test

These tests use Mocha framework for testing, coupled with Chai for assertions. These dependencies need to be installed for tests to run.
Tests can be run in a number of ways:

### Method 1 (Run all tests)

1. Navigate to the root directory of the SDK folder from command prompt.
2. Type `mocha --recursive` to run all the tests.

### Method 2 (Run all tests)

1. Navigate to the `../test/Controllers/` directory from command prompt.
2. Type `mocha *` to run all the tests.

### Method 3 (Run specific controller's tests)

1. Navigate to the `../test/Controllers/` directory from command prompt.
2. Type `mocha  Swagger PetstoreController`  to run all the tests in that controller file.

> To increase mocha's default timeout, you can change the `TEST_TIMEOUT` parameter's value in `TestBootstrap.js`.

![Run Tests](https://apidocs.io/illustration/nodejs?step=runTests&controllerName=Swagger%20PetstoreController)

## Initialization

### Authentication
In order to setup authentication in the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthClientId | OAuth 2 Client ID |
| oAuthRedirectUri | OAuth 2 Redirection endpoint or Callback Uri |



API client can be initialized as following:

```JavaScript
const lib = require('lib');

// Configuration parameters and credentials
lib.Configuration.oAuthClientId = "oAuthClientId"; // OAuth 2 Client ID
lib.Configuration.oAuthRedirectUri = "oAuthRedirectUri"; // OAuth 2 Redirection endpoint or Callback Uri

```


You must now authorize the client.

### Authorizing your client

Your application must obtain user authorization before it can execute an endpoint call.
The SDK uses *OAuth 2.0 Implicit Grant* to obtain a user's consent to perform an API request on user's behalf.

This process requires the presence of a client-side JavaScript code on the redirect URI page to 
receive the *access token* after the consent step is completed.

#### 1. Obtain consent

To obtain user's consent, you must redirect the user to the authorization page.
The `buildAuthorizationUrl()` method creates the URL to the authorization page.
 You must pass the *[scopes](#scopes)* for which you need permission to access.
```JavaScript
const oAuthManager = lib.OAuthManager;
const authUrl = oAuthManager.buildAuthorizationUrl([lib.OAuthScopeEnum.WRITEPETS, lib.OAuthScopeEnum.READPETS]);
// open up the authUrl in the browser
```

#### 2. Handle the OAuth server response

Once the user responds to the consent request, the OAuth 2.0 server responds to your application's access request by redirecting the user to the redirect URI specified set in `Configuration`.

The redirect URI will receive the *access token* as the `token` argument in the URL fragment.

```
https://example.com/oauth/callback#token=XXXXXXXXXXXXXXXXXXXXXXXXX
```

The access token must be extracted by the client-side JavaScript code. The access token can be used to authorize any further endpoint calls by the JavaScript code.

### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the `lib/Models/OAuthScopeEnum` enumeration.

| Scope Name | Description |
| --- | --- |
| `WRITEPETS` | modify pets in your account |
| `READPETS` | read your pets |



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [UserController](#user_controller)
* [StoreController](#store_controller)
* [PetController](#pet_controller)

## <a name="user_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UserController") UserController

### Get singleton instance

The singleton instance of the ``` UserController ``` class can be accessed from the API Client.

```javascript
var controller = lib.UserController;
```

### <a name="get_logout_user"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.getLogoutUser") getLogoutUser

> *Tags:*  ``` Skips Authentication ``` 

> Logs out current logged in user session


```javascript
function getLogoutUser(callback)
```

#### Example Usage

```javascript


    controller.getLogoutUser(function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | successful operation |




### <a name="create_users_with_list_input"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.createUsersWithListInput") createUsersWithListInput

> *Tags:*  ``` Skips Authentication ``` 

> Creates list of users with given input array


```javascript
function createUsersWithListInput(body, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  ``` Collection ```  | List of user object |



#### Example Usage

```javascript

    var body = [{"key":"value"}].map(function(elem) {
        return new User(elem);
    });

    controller.createUsersWithListInput(body, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | successful operation |




### <a name="create_users_with_array_input"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.createUsersWithArrayInput") createUsersWithArrayInput

> *Tags:*  ``` Skips Authentication ``` 

> Creates list of users with given input array


```javascript
function createUsersWithArrayInput(body, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  ``` Collection ```  | List of user object |



#### Example Usage

```javascript

    var body = [{"key":"value"}].map(function(elem) {
        return new User(elem);
    });

    controller.createUsersWithArrayInput(body, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | successful operation |




### <a name="create_user"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.createUser") createUser

> *Tags:*  ``` Skips Authentication ``` 

> Create user


```javascript
function createUser(body, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Created user object |



#### Example Usage

```javascript

    var body = new User({"key":"value"});

    controller.createUser(body, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | successful operation |




### <a name="get_login_user"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.getLoginUser") getLoginUser

> *Tags:*  ``` Skips Authentication ``` 

> Logs user into the system


```javascript
function getLoginUser(username, password, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| username |  ``` Required ```  | The user name for login |
| password |  ``` Required ```  | The password for login in clear text |



#### Example Usage

```javascript

    var username = 'username';
    var password = 'password';

    controller.getLoginUser(username, password, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid username/password supplied |




### <a name="get_user_by_name"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.getUserByName") getUserByName

> *Tags:*  ``` Skips Authentication ``` 

> Get user by user name


```javascript
function getUserByName(username, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| username |  ``` Required ```  | The name that needs to be fetched. Use user1 for testing. |



#### Example Usage

```javascript

    var username = 'username';

    controller.getUserByName(username, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid username supplied |
| 404 | User not found |




### <a name="update_user"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.updateUser") updateUser

> *Tags:*  ``` Skips Authentication ``` 

> Updated user


```javascript
function updateUser(username, body, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| username |  ``` Required ```  | name that need to be updated |
| body |  ``` Required ```  | Updated user object |



#### Example Usage

```javascript

    var username = 'username';
    var body = new User({"key":"value"});

    controller.updateUser(username, body, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid user supplied |
| 404 | User not found |




### <a name="delete_user"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.deleteUser") deleteUser

> *Tags:*  ``` Skips Authentication ``` 

> Delete user


```javascript
function deleteUser(username, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| username |  ``` Required ```  | The name that needs to be deleted |



#### Example Usage

```javascript

    var username = 'username';

    controller.deleteUser(username, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid username supplied |
| 404 | User not found |




[Back to List of Controllers](#list_of_controllers)

## <a name="store_controller"></a>![Class: ](https://apidocs.io/img/class.png ".StoreController") StoreController

### Get singleton instance

The singleton instance of the ``` StoreController ``` class can be accessed from the API Client.

```javascript
var controller = lib.StoreController;
```

### <a name="create_place_order"></a>![Method: ](https://apidocs.io/img/method.png ".StoreController.createPlaceOrder") createPlaceOrder

> *Tags:*  ``` Skips Authentication ``` 

> Place an order for a pet


```javascript
function createPlaceOrder(body, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | order placed for purchasing the pet |



#### Example Usage

```javascript

    var body = new Order({"key":"value"});

    controller.createPlaceOrder(body, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid Order |




### <a name="get_inventory"></a>![Method: ](https://apidocs.io/img/method.png ".StoreController.getInventory") getInventory

> Returns pet inventories by status


```javascript
function getInventory(callback)
```

#### Example Usage

```javascript


    controller.getInventory(function(error, response, context) {

    
    });
```



### <a name="get_order_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".StoreController.getOrderById") getOrderById

> *Tags:*  ``` Skips Authentication ``` 

> Find purchase order by ID


```javascript
function getOrderById(orderId, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | ID of pet that needs to be fetched |



#### Example Usage

```javascript

    var orderId = 139;

    controller.getOrderById(orderId, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid ID supplied |
| 404 | Order not found |




### <a name="delete_order"></a>![Method: ](https://apidocs.io/img/method.png ".StoreController.deleteOrder") deleteOrder

> *Tags:*  ``` Skips Authentication ``` 

> Delete purchase order by ID


```javascript
function deleteOrder(orderId, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | ID of the order that needs to be deleted |



#### Example Usage

```javascript

    var orderId = 139;

    controller.deleteOrder(orderId, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid ID supplied |
| 404 | Order not found |




[Back to List of Controllers](#list_of_controllers)

## <a name="pet_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PetController") PetController

### Get singleton instance

The singleton instance of the ``` PetController ``` class can be accessed from the API Client.

```javascript
var controller = lib.PetController;
```

### <a name="find_pets_by_tags"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.findPetsByTags") findPetsByTags

> Finds Pets by tags


```javascript
function findPetsByTags(tags, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| tags |  ``` Required ```  ``` Collection ```  | Tags to filter by |



#### Example Usage

```javascript

    var tags = ['tags'];

    controller.findPetsByTags(tags, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid tag value |




### <a name="add_pet"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.addPet") addPet

> Add a new pet to the store


```javascript
function addPet(body, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Pet object that needs to be added to the store |



#### Example Usage

```javascript

    var body = new Pet({"key":"value"});

    controller.addPet(body, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 405 | Invalid input |




### <a name="update_pet"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.updatePet") updatePet

> Update an existing pet


```javascript
function updatePet(body, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Pet object that needs to be added to the store |



#### Example Usage

```javascript

    var body = new Pet({"key":"value"});

    controller.updatePet(body, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid ID supplied |
| 404 | Pet not found |
| 405 | Validation exception |




### <a name="find_pets_by_status"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.findPetsByStatus") findPetsByStatus

> Finds Pets by status


```javascript
function findPetsByStatus(status, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| status |  ``` Required ```  ``` Collection ```  | Status values that need to be considered for filter |



#### Example Usage

```javascript

    var status = [ Object.keys(Status6)[0] ];

    controller.findPetsByStatus(status, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid status value |




### <a name="get_pet_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.getPetById") getPetById

> Find pet by ID


```javascript
function getPetById(petId, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| petId |  ``` Required ```  | ID of pet to return |



#### Example Usage

```javascript

    var petId = 139;

    controller.getPetById(petId, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid ID supplied |
| 404 | Pet not found |




### <a name="update_pet_with_form"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.updatePetWithForm") updatePetWithForm

> Updates a pet in the store with form data


```javascript
function updatePetWithForm(petId, name, status, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| petId |  ``` Required ```  | ID of pet that needs to be updated |
| name |  ``` Optional ```  | Updated name of the pet |
| status |  ``` Optional ```  | Updated status of the pet |



#### Example Usage

```javascript

    var petId = 139;
    var name = 'name';
    var status = 'status';

    controller.updatePetWithForm(petId, name, status, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 405 | Invalid input |




### <a name="delete_pet"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.deletePet") deletePet

> Deletes a pet


```javascript
function deletePet(petId, apiKey, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| petId |  ``` Required ```  | Pet id to delete |
| apiKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```javascript

    var petId = 139;
    var apiKey = api_key;

    controller.deletePet(petId, apiKey, function(error, response, context) {

    
    });
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid ID supplied |
| 404 | Pet not found |




### <a name="upload_file"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.uploadFile") uploadFile

> uploads an image


```javascript
function uploadFile(petId, additionalMetadata, file, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| petId |  ``` Required ```  | ID of pet to update |
| additionalMetadata |  ``` Optional ```  | Additional data to pass to server |
| file |  ``` Optional ```  | file to upload |



#### Example Usage

```javascript

    TestHelper.getFilePath('url', function(data) {
        var petId = 139;
    var additionalMetadata = 'additionalMetadata';
    var file = data;

        controller.uploadFile(petId, additionalMetadata, file, function(error, response, context) {

        });
    });
```



[Back to List of Controllers](#list_of_controllers)



