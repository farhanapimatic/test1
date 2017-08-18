# Getting started

This is a sample server Petstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).  For this sample, you can use the api key `special-key` to test the authorization filters.

## How to Build


The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```PodFile``` file that comes with the SDK. 
To resolve these dependencies, we use the Cocoapods package manager.
Visit https://guides.cocoapods.org/using/getting-started.html to setup Cocoapods on your system.
Open command prompt and type ```pod --version```. This should display the current version of Cocoapods installed if the installation was successful.

Using command line, navigate to the directory containing the generated files (including ```PodFile```) for the SDK. 
Run the command ```pod install```. This should install all the required dependencies and create the ```pods``` directory in your project directory.

![Installing dependencies using Cocoapods](https://apidocs.io/illustration/objc?step=AddDependencies&workspaceFolder=Swagger%20Petstore-ObjC&workspaceName=SwaggerPetstore&projectName=SwaggerPetstore&rootNamespace=SwaggerPetstore)

Open the project workspace using the (SwaggerPetstore.xcworkspace) file. Invoke the build process using `Command(⌘)+B` shortcut key or using the `Build` menu as shown below.

![Building SDK using Xcode](https://apidocs.io/illustration/objc?step=BuildSDK&workspaceFolder=Swagger%20Petstore-ObjC&workspaceName=SwaggerPetstore&projectName=SwaggerPetstore&rootNamespace=SwaggerPetstore)


## How to Use

The generated code is a Cocoa Touch Static Library which can be used in any iOS project. The support for these generated libraries go all the way back to iOS 6.

The following section explains how to use the SwaggerPetstore library in a new iOS project.     
### 1. Starting a new project
To start a new project, left-click on the ```Create a new Xcode project```.
![Create Test Project - Step 1](https://apidocs.io/illustration/objc?step=Test1&workspaceFolder=Swagger%20Petstore-ObjC&workspaceName=SwaggerPetstore&projectName=SwaggerPetstore&rootNamespace=SwaggerPetstore)

Next, choose **Single View Application** and click ```Next```.
![Create Test Project - Step 2](https://apidocs.io/illustration/objc?step=Test2&workspaceFolder=Swagger%20Petstore-ObjC&workspaceName=SwaggerPetstore&projectName=SwaggerPetstore&rootNamespace=SwaggerPetstore)

Provide **Test-Project** as the product name click ```Next```.
![Create Test Project - Step 3](https://apidocs.io/illustration/objc?step=Test3&workspaceFolder=Swagger%20Petstore-ObjC&workspaceName=SwaggerPetstore&projectName=SwaggerPetstore&rootNamespace=SwaggerPetstore)

Choose the desired location of your project folder and click ```Create```.
![Create Test Project - Step 4](https://apidocs.io/illustration/objc?step=Test4&workspaceFolder=Swagger%20Petstore-ObjC&workspaceName=SwaggerPetstore&projectName=SwaggerPetstore&rootNamespace=SwaggerPetstore)

### 2. Adding the static library dependency
To add this dependency open a terminal and navigate to your project folder. Next, input ```pod init``` and press enter.
![Add dependency - Step 1](https://apidocs.io/illustration/objc?step=Add0&workspaceFolder=Swagger%20Petstore-ObjC&workspaceName=SwaggerPetstore&projectName=SwaggerPetstore&rootNamespace=SwaggerPetstore)

Next, open the newly created ```PodFile``` in your favourite text editor. Add the following line : pod 'SwaggerPetstore', :path => 'Vendor/SwaggerPetstore'
![Add dependency - Step 2](https://apidocs.io/illustration/objc?step=Add1&workspaceFolder=Swagger%20Petstore-ObjC&workspaceName=SwaggerPetstore&projectName=SwaggerPetstore&rootNamespace=SwaggerPetstore)

Execute `pod install` from terminal to install the dependecy in your project. This would add the dependency to the newly created test project.
![Add dependency - Step 3](https://apidocs.io/illustration/objc?step=Add2&workspaceFolder=Swagger%20Petstore-ObjC&workspaceName=SwaggerPetstore&projectName=SwaggerPetstore&rootNamespace=SwaggerPetstore)


## How to Test

Unit tests in this SDK can be run using Xcode. 

First build the SDK as shown in the steps above and naivgate to the project directory and open the SwaggerPetstore.xcworkspace file.

Go to the test explorer in Xcode as shown in the picture below and click on `run tests` from the menu. 
![Run tests](https://apidocs.io/illustration/objc?step=RunTests&workspaceFolder=Swagger%20Petstore-ObjC&workspaceName=SwaggerPetstore&projectName=SwaggerPetstore&rootNamespace=SwaggerPetstore)


## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthClientId | OAuth 2 Client ID |
| oAuthRedirectUri | OAuth 2 Redirection endpoint or Callback Uri |



Configuration variables can be set as following.
```Objc
// Configuration parameters and credentials
Configuration_OAuthClientId = "Configuration_OAuthClientId"; // OAuth 2 Client ID
Configuration_OAuthRedirectUri = "Configuration_OAuthRedirectUri"; // OAuth 2 Redirection endpoint or Callback Uri

```

# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [UserController](#user_controller)
* [StoreController](#store_controller)
* [PetController](#pet_controller)

## <a name="user_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UserController") UserController

### Get singleton instance
```objc
User* user = [[User alloc]init] ;
```

### <a name="get_logout_user_with_completion_block"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.getLogoutUserWithCompletionBlock") getLogoutUserWithCompletionBlock

> *Tags:*  ``` Skips Authentication ``` 

> Logs out current logged in user session


```objc
function getLogoutUserWithCompletionBlock:(CompletedGetLogoutUser) onCompleted()
```



#### Example Usage

```objc

    [self.user getLogoutUserWithCompletionBlock:  ^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | successful operation |



### <a name="create_users_with_list_input_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.createUsersWithListInputAsyncWithBody") createUsersWithListInputAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> Creates list of users with given input array


```objc
function createUsersWithListInputAsyncWithBody:(NSArray<User> *) body
                completionBlock:(CompletedPostCreateUsersWithListInput) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  ``` Collection ```  | List of user object |





#### Example Usage

```objc
    // Parameters for the API call
    NSArray<User> * body = (NSArray<User>*) [User arrayOfModelsFromDictionaries:
                [APIHelper jsonDeserializeArray: @"nil"] error: nil];

    [self.user createUsersWithListInputAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | successful operation |



### <a name="create_users_with_array_input_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.createUsersWithArrayInputAsyncWithBody") createUsersWithArrayInputAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> Creates list of users with given input array


```objc
function createUsersWithArrayInputAsyncWithBody:(NSArray<User> *) body
                completionBlock:(CompletedPostCreateUsersWithArrayInput) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  ``` Collection ```  | List of user object |





#### Example Usage

```objc
    // Parameters for the API call
    NSArray<User> * body = (NSArray<User>*) [User arrayOfModelsFromDictionaries:
                [APIHelper jsonDeserializeArray: @"nil"] error: nil];

    [self.user createUsersWithArrayInputAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | successful operation |



### <a name="create_user_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.createUserAsyncWithBody") createUserAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> Create user


```objc
function createUserAsyncWithBody:(User*) body
                completionBlock:(CompletedPostCreateUser) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Created user object |





#### Example Usage

```objc
    // Parameters for the API call
    User* body = [[User alloc]init];

    [self.user createUserAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | successful operation |



### <a name="get_login_user_async_with_username"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.getLoginUserAsyncWithUsername") getLoginUserAsyncWithUsername

> *Tags:*  ``` Skips Authentication ``` 

> Logs user into the system


```objc
function getLoginUserAsyncWithUsername:(NSString*) username
                password:(NSString*) password
                completionBlock:(CompletedGetLoginUser) onCompleted(username password : password)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| username |  ``` Required ```  | The user name for login |
| password |  ``` Required ```  | The password for login in clear text |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* username = @"username";
    NSString* password = @"password";

    [self.user getLoginUserAsyncWithUsername: username password : password  completionBlock:^(BOOL success, HttpContext* context, NSString* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid username/password supplied |



### <a name="get_user_by_name_async_with_username"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.getUserByNameAsyncWithUsername") getUserByNameAsyncWithUsername

> *Tags:*  ``` Skips Authentication ``` 

> Get user by user name


```objc
function getUserByNameAsyncWithUsername:(NSString*) username
                completionBlock:(CompletedGetUserByName) onCompleted(username)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| username |  ``` Required ```  | The name that needs to be fetched. Use user1 for testing. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* username = @"username";

    [self.user getUserByNameAsyncWithUsername: username  completionBlock:^(BOOL success, HttpContext* context, User* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid username supplied |
| 404 | User not found |



### <a name="update_user_async_with_username"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.updateUserAsyncWithUsername") updateUserAsyncWithUsername

> *Tags:*  ``` Skips Authentication ``` 

> Updated user


```objc
function updateUserAsyncWithUsername:(NSString*) username
                body:(User*) body
                completionBlock:(CompletedPutUpdateUser) onCompleted(username body : body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| username |  ``` Required ```  | name that need to be updated |
| body |  ``` Required ```  | Updated user object |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* username = @"username";
    User* body = [[User alloc]init];

    [self.user updateUserAsyncWithUsername: username body : body  completionBlock:^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid user supplied |
| 404 | User not found |



### <a name="delete_user_async_with_username"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.deleteUserAsyncWithUsername") deleteUserAsyncWithUsername

> *Tags:*  ``` Skips Authentication ``` 

> Delete user


```objc
function deleteUserAsyncWithUsername:(NSString*) username
                completionBlock:(CompletedDeleteUser) onCompleted(username)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| username |  ``` Required ```  | The name that needs to be deleted |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* username = @"username";

    [self.user deleteUserAsyncWithUsername: username  completionBlock:^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid username supplied |
| 404 | User not found |



[Back to List of Controllers](#list_of_controllers)

## <a name="store_controller"></a>![Class: ](https://apidocs.io/img/class.png ".StoreController") StoreController

### Get singleton instance
```objc
Store* store = [[Store alloc]init] ;
```

### <a name="create_place_order_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".StoreController.createPlaceOrderAsyncWithBody") createPlaceOrderAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> Place an order for a pet


```objc
function createPlaceOrderAsyncWithBody:(Order*) body
                completionBlock:(CompletedPostPlaceOrder) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | order placed for purchasing the pet |





#### Example Usage

```objc
    // Parameters for the API call
    Order* body = [[Order alloc]init];

    [self.store createPlaceOrderAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, Order* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid Order |



### <a name="get_inventory_with_completion_block"></a>![Method: ](https://apidocs.io/img/method.png ".StoreController.getInventoryWithCompletionBlock") getInventoryWithCompletionBlock

> Returns pet inventories by status


```objc
function getInventoryWithCompletionBlock:(CompletedGetInventory) onCompleted()
```



#### Example Usage

```objc

    [self.store getInventoryWithCompletionBlock:  ^(BOOL success, HttpContext* context, NSNumber* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="get_order_by_id_async_with_order_id"></a>![Method: ](https://apidocs.io/img/method.png ".StoreController.getOrderByIdAsyncWithOrderId") getOrderByIdAsyncWithOrderId

> *Tags:*  ``` Skips Authentication ``` 

> Find purchase order by ID


```objc
function getOrderByIdAsyncWithOrderId:(long) orderId
                completionBlock:(CompletedGetOrderById) onCompleted(orderId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | ID of pet that needs to be fetched |





#### Example Usage

```objc
    // Parameters for the API call
    long orderId = 181;

    [self.store getOrderByIdAsyncWithOrderId: orderId  completionBlock:^(BOOL success, HttpContext* context, Order* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid ID supplied |
| 404 | Order not found |



### <a name="delete_order_async_with_order_id"></a>![Method: ](https://apidocs.io/img/method.png ".StoreController.deleteOrderAsyncWithOrderId") deleteOrderAsyncWithOrderId

> *Tags:*  ``` Skips Authentication ``` 

> Delete purchase order by ID


```objc
function deleteOrderAsyncWithOrderId:(long) orderId
                completionBlock:(CompletedDeleteOrder) onCompleted(orderId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | ID of the order that needs to be deleted |





#### Example Usage

```objc
    // Parameters for the API call
    long orderId = 181;

    [self.store deleteOrderAsyncWithOrderId: orderId  completionBlock:^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid ID supplied |
| 404 | Order not found |



[Back to List of Controllers](#list_of_controllers)

## <a name="pet_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PetController") PetController

### Get singleton instance
```objc
Pet* pet = [[Pet alloc]init] ;
```

### <a name="find_pets_by_tags_async_with_tags"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.findPetsByTagsAsyncWithTags") findPetsByTagsAsyncWithTags

> Finds Pets by tags


```objc
function findPetsByTagsAsyncWithTags:(NSArray*) tags
                completionBlock:(CompletedGetFindPetsByTags) onCompleted(tags)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| tags |  ``` Required ```  ``` Collection ```  | Tags to filter by |





#### Example Usage

```objc
    // Parameters for the API call
    NSArray* tags = @[@"tags",@"tags",@"tags"];

    [self.pet findPetsByTagsAsyncWithTags: tags  completionBlock:^(BOOL success, HttpContext* context, NSArray<Pet> * response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid tag value |



### <a name="add_pet_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.addPetAsyncWithBody") addPetAsyncWithBody

> Add a new pet to the store


```objc
function addPetAsyncWithBody:(Pet*) body
                completionBlock:(CompletedPostAddPet) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Pet object that needs to be added to the store |





#### Example Usage

```objc
    // Parameters for the API call
    Pet* body = [[Pet alloc]init];

    [self.pet addPetAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 405 | Invalid input |



### <a name="update_pet_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.updatePetAsyncWithBody") updatePetAsyncWithBody

> Update an existing pet


```objc
function updatePetAsyncWithBody:(Pet*) body
                completionBlock:(CompletedPutUpdatePet) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Pet object that needs to be added to the store |





#### Example Usage

```objc
    // Parameters for the API call
    Pet* body = [[Pet alloc]init];

    [self.pet updatePetAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid ID supplied |
| 404 | Pet not found |
| 405 | Validation exception |



### <a name="find_pets_by_status_async_with_status"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.findPetsByStatusAsyncWithStatus") findPetsByStatusAsyncWithStatus

> Finds Pets by status


```objc
function findPetsByStatusAsyncWithStatus:(NSArray<NSNumber*>*) status
                completionBlock:(CompletedGetFindPetsByStatus) onCompleted(status)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| status |  ``` Required ```  ``` Collection ```  | Status values that need to be considered for filter |





#### Example Usage

```objc
    // Parameters for the API call
    NSArray<NSNumber*>* status = @[available,available,available];

    [self.pet findPetsByStatusAsyncWithStatus: status  completionBlock:^(BOOL success, HttpContext* context, NSArray<Pet> * response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid status value |



### <a name="get_pet_by_id_async_with_pet_id"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.getPetByIdAsyncWithPetId") getPetByIdAsyncWithPetId

> Find pet by ID


```objc
function getPetByIdAsyncWithPetId:(long) petId
                completionBlock:(CompletedGetPetById) onCompleted(petId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| petId |  ``` Required ```  | ID of pet to return |





#### Example Usage

```objc
    // Parameters for the API call
    long petId = 181;

    [self.pet getPetByIdAsyncWithPetId: petId  completionBlock:^(BOOL success, HttpContext* context, Pet* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid ID supplied |
| 404 | Pet not found |



### <a name="update_pet_with_form_async_with_pet_id"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.updatePetWithFormAsyncWithPetId") updatePetWithFormAsyncWithPetId

> Updates a pet in the store with form data


```objc
function updatePetWithFormAsyncWithPetId:(long) petId
                name:(NSString*) name
                status:(NSString*) status
                completionBlock:(CompletedPostUpdatePetWithForm) onCompleted(petId name : name status : status)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| petId |  ``` Required ```  | ID of pet that needs to be updated |
| name |  ``` Optional ```  | Updated name of the pet |
| status |  ``` Optional ```  | Updated status of the pet |





#### Example Usage

```objc
    // Parameters for the API call
    long petId = 181;
    NSString* name = @"name";
    NSString* status = @"status";

    [self.pet updatePetWithFormAsyncWithPetId: petId name : name status : status  completionBlock:^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 405 | Invalid input |



### <a name="delete_pet_async_with_pet_id"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.deletePetAsyncWithPetId") deletePetAsyncWithPetId

> Deletes a pet


```objc
function deletePetAsyncWithPetId:(long) petId
                apiKey:(NSString*) apiKey
                completionBlock:(CompletedDeletePet) onCompleted(petId apiKey : apiKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| petId |  ``` Required ```  | Pet id to delete |
| apiKey |  ``` Optional ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    long petId = 181;
    NSString* apiKey = @"api_key";

    [self.pet deletePetAsyncWithPetId: petId apiKey : apiKey  completionBlock:^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid ID supplied |
| 404 | Pet not found |



### <a name="upload_file_async_with_pet_id"></a>![Method: ](https://apidocs.io/img/method.png ".PetController.uploadFileAsyncWithPetId") uploadFileAsyncWithPetId

> uploads an image


```objc
function uploadFileAsyncWithPetId:(long) petId
                additionalMetadata:(NSString*) additionalMetadata
                file:(NSURL*) file
                completionBlock:(CompletedPostUploadFile) onCompleted(petId additionalMetadata : additionalMetadata file : file)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| petId |  ``` Required ```  | ID of pet to update |
| additionalMetadata |  ``` Optional ```  | Additional data to pass to server |
| file |  ``` Optional ```  | file to upload |





#### Example Usage

```objc
    // Parameters for the API call
    long petId = 181;
    NSString* additionalMetadata = @"additionalMetadata";
    NSURL* file = [NSURL URLWithString: @"pathtofile"];

    [self.pet uploadFileAsyncWithPetId: petId additionalMetadata : additionalMetadata file : file  completionBlock:^(BOOL success, HttpContext* context, ApiResponse* response, NSError* error) { 
       //Add code here
    }];
```


[Back to List of Controllers](#list_of_controllers)



