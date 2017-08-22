# Getting started

## How to Build


The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```PodFile``` file that comes with the SDK. 
To resolve these dependencies, we use the Cocoapods package manager.
Visit https://guides.cocoapods.org/using/getting-started.html to setup Cocoapods on your system.
Open command prompt and type ```pod --version```. This should display the current version of Cocoapods installed if the installation was successful.

Using command line, navigate to the directory containing the generated files (including ```PodFile```) for the SDK. 
Run the command ```pod install```. This should install all the required dependencies and create the ```pods``` directory in your project directory.

![Installing dependencies using Cocoapods](https://apidocs.io/illustration/objc?step=AddDependencies&workspaceFolder=AWSECommerceService-ObjC&workspaceName=AWSECommerceService&projectName=AWSECommerceService&rootNamespace=AWSECommerceService)

Open the project workspace using the (AWSECommerceService.xcworkspace) file. Invoke the build process using `Command(⌘)+B` shortcut key or using the `Build` menu as shown below.

![Building SDK using Xcode](https://apidocs.io/illustration/objc?step=BuildSDK&workspaceFolder=AWSECommerceService-ObjC&workspaceName=AWSECommerceService&projectName=AWSECommerceService&rootNamespace=AWSECommerceService)


## How to Use

The generated code is a Cocoa Touch Static Library which can be used in any iOS project. The support for these generated libraries go all the way back to iOS 6.

The following section explains how to use the AWSECommerceService library in a new iOS project.     
### 1. Starting a new project
To start a new project, left-click on the ```Create a new Xcode project```.
![Create Test Project - Step 1](https://apidocs.io/illustration/objc?step=Test1&workspaceFolder=AWSECommerceService-ObjC&workspaceName=AWSECommerceService&projectName=AWSECommerceService&rootNamespace=AWSECommerceService)

Next, choose **Single View Application** and click ```Next```.
![Create Test Project - Step 2](https://apidocs.io/illustration/objc?step=Test2&workspaceFolder=AWSECommerceService-ObjC&workspaceName=AWSECommerceService&projectName=AWSECommerceService&rootNamespace=AWSECommerceService)

Provide **Test-Project** as the product name click ```Next```.
![Create Test Project - Step 3](https://apidocs.io/illustration/objc?step=Test3&workspaceFolder=AWSECommerceService-ObjC&workspaceName=AWSECommerceService&projectName=AWSECommerceService&rootNamespace=AWSECommerceService)

Choose the desired location of your project folder and click ```Create```.
![Create Test Project - Step 4](https://apidocs.io/illustration/objc?step=Test4&workspaceFolder=AWSECommerceService-ObjC&workspaceName=AWSECommerceService&projectName=AWSECommerceService&rootNamespace=AWSECommerceService)

### 2. Adding the static library dependency
To add this dependency open a terminal and navigate to your project folder. Next, input ```pod init``` and press enter.
![Add dependency - Step 1](https://apidocs.io/illustration/objc?step=Add0&workspaceFolder=AWSECommerceService-ObjC&workspaceName=AWSECommerceService&projectName=AWSECommerceService&rootNamespace=AWSECommerceService)

Next, open the newly created ```PodFile``` in your favourite text editor. Add the following line : pod 'AWSECommerceService', :path => 'Vendor/AWSECommerceService'
![Add dependency - Step 2](https://apidocs.io/illustration/objc?step=Add1&workspaceFolder=AWSECommerceService-ObjC&workspaceName=AWSECommerceService&projectName=AWSECommerceService&rootNamespace=AWSECommerceService)

Execute `pod install` from terminal to install the dependecy in your project. This would add the dependency to the newly created test project.
![Add dependency - Step 3](https://apidocs.io/illustration/objc?step=Add2&workspaceFolder=AWSECommerceService-ObjC&workspaceName=AWSECommerceService&projectName=AWSECommerceService&rootNamespace=AWSECommerceService)


## How to Test

Unit tests in this SDK can be run using Xcode. 

First build the SDK as shown in the steps above and naivgate to the project directory and open the AWSECommerceService.xcworkspace file.

Go to the test explorer in Xcode as shown in the picture below and click on `run tests` from the menu. 
![Run tests](https://apidocs.io/illustration/objc?step=RunTests&workspaceFolder=AWSECommerceService-ObjC&workspaceName=AWSECommerceService&projectName=AWSECommerceService&rootNamespace=AWSECommerceService)


## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| aFIeyt | TODO: add a description |
| b | TODO: add a description |
| c | TODO: add a description |
| oAuthClientId | OAuth 2 Client ID |
| oAuthClientSecret | OAuth 2 Client Secret |
| oAuthRedirectUri | OAuth 2 Redirection endpoint or Callback Uri |



Configuration variables can be set as following.
```Objc
// Configuration parameters and credentials
Configuration_AFIeyt = "Configuration_AFIeyt";
Configuration_B = "Configuration_B";
Configuration_C = "Configuration_C";
Configuration_OAuthClientId = "Configuration_OAuthClientId"; // OAuth 2 Client ID
Configuration_OAuthClientSecret = "Configuration_OAuthClientSecret"; // OAuth 2 Client Secret
Configuration_OAuthRedirectUri = "Configuration_OAuthRedirectUri"; // OAuth 2 Redirection endpoint or Callback Uri

```

# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [AWSECommerceServiceBindingController](#awse_commerce_service_binding_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="awse_commerce_service_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AWSECommerceServiceBindingController") AWSECommerceServiceBindingController

### Get singleton instance
```objc
AWSECommerceServiceBinding* aWSECommerceServiceBinding = [[AWSECommerceServiceBinding alloc]init] ;
```

### <a name="create_cart_clear_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClearAsyncWithBody") createCartClearAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartClearAsyncWithBody:(CartClearRequestMsgModel*) body
                completionBlock:(CompletedPostCartClear) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartClearRequestMsgModel* body = [[CartClearRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartClearAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartClearResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 410 | new |



### <a name="create_cart_modify_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModifyAsyncWithBody") createCartModifyAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartModifyAsyncWithBody:(CartModifyRequestMsgModel*) body
                completionBlock:(CompletedPostCartModify) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartModifyRequestMsgModel* body = [[CartModifyRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartModifyAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartModifyResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_create_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreateAsyncWithBody") createCartCreateAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartCreateAsyncWithBody:(CartCreateRequestMsgModel*) body
                completionBlock:(CompletedPostCartCreate) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartCreateRequestMsgModel* body = [[CartCreateRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartCreateAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartCreateResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_add_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAddAsyncWithBody") createCartAddAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartAddAsyncWithBody:(CartAddRequestMsgModel*) body
                completionBlock:(CompletedPostCartAdd) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartAddRequestMsgModel* body = [[CartAddRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartAddAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartAddResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_get_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGetAsyncWithBody") createCartGetAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartGetAsyncWithBody:(CartGetRequestMsgModel*) body
                completionBlock:(CompletedPostCartGet) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartGetRequestMsgModel* body = [[CartGetRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartGetAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartGetResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_similarity_lookup_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookupAsyncWithBody") createSimilarityLookupAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createSimilarityLookupAsyncWithBody:(SimilarityLookupRequestMsgModel*) body
                completionBlock:(CompletedPostSimilarityLookup) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    SimilarityLookupRequestMsgModel* body = [[SimilarityLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createSimilarityLookupAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, SimilarityLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_browse_node_lookup_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookupAsyncWithBody") createBrowseNodeLookupAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createBrowseNodeLookupAsyncWithBody:(BrowseNodeLookupRequestMsgModel*) body
                completionBlock:(CompletedPostBrowseNodeLookup) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    BrowseNodeLookupRequestMsgModel* body = [[BrowseNodeLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createBrowseNodeLookupAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, BrowseNodeLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_lookup_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookupAsyncWithBody") createItemLookupAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemLookupAsyncWithBody:(ItemLookupRequestMsgModel*) body
                completionBlock:(CompletedPostItemLookup) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemLookupRequestMsgModel* body = [[ItemLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemLookupAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_search_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearchAsyncWithBody") createItemSearchAsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemSearchAsyncWithBody:(ItemSearchRequestMsgModel*) body
                completionBlock:(CompletedPostItemSearch) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemSearchRequestMsgModel* body = [[ItemSearchRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemSearchAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemSearchResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_search9_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch9AsyncWithBody") createItemSearch9AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemSearch9AsyncWithBody:(ItemSearchRequestMsgModel*) body
                completionBlock:(CompletedPostItemSearch9) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemSearchRequestMsgModel* body = [[ItemSearchRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemSearch9AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemSearchResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_lookup10_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup10AsyncWithBody") createItemLookup10AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemLookup10AsyncWithBody:(ItemLookupRequestMsgModel*) body
                completionBlock:(CompletedPostItemLookup10) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemLookupRequestMsgModel* body = [[ItemLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemLookup10AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_browse_node_lookup11_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup11AsyncWithBody") createBrowseNodeLookup11AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createBrowseNodeLookup11AsyncWithBody:(BrowseNodeLookupRequestMsgModel*) body
                completionBlock:(CompletedPostBrowseNodeLookup11) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    BrowseNodeLookupRequestMsgModel* body = [[BrowseNodeLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createBrowseNodeLookup11AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, BrowseNodeLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_similarity_lookup12_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup12AsyncWithBody") createSimilarityLookup12AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createSimilarityLookup12AsyncWithBody:(SimilarityLookupRequestMsgModel*) body
                completionBlock:(CompletedPostSimilarityLookup12) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    SimilarityLookupRequestMsgModel* body = [[SimilarityLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createSimilarityLookup12AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, SimilarityLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_get13_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet13AsyncWithBody") createCartGet13AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartGet13AsyncWithBody:(CartGetRequestMsgModel*) body
                completionBlock:(CompletedPostCartGet13) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartGetRequestMsgModel* body = [[CartGetRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartGet13AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartGetResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_add14_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd14AsyncWithBody") createCartAdd14AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartAdd14AsyncWithBody:(CartAddRequestMsgModel*) body
                completionBlock:(CompletedPostCartAdd14) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartAddRequestMsgModel* body = [[CartAddRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartAdd14AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartAddResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_create15_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate15AsyncWithBody") createCartCreate15AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartCreate15AsyncWithBody:(CartCreateRequestMsgModel*) body
                completionBlock:(CompletedPostCartCreate15) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartCreateRequestMsgModel* body = [[CartCreateRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartCreate15AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartCreateResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_modify16_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify16AsyncWithBody") createCartModify16AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartModify16AsyncWithBody:(CartModifyRequestMsgModel*) body
                completionBlock:(CompletedPostCartModify16) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartModifyRequestMsgModel* body = [[CartModifyRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartModify16AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartModifyResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_clear17_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear17AsyncWithBody") createCartClear17AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartClear17AsyncWithBody:(CartClearRequestMsgModel*) body
                completionBlock:(CompletedPostCartClear17) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartClearRequestMsgModel* body = [[CartClearRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartClear17AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartClearResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_search18_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch18AsyncWithBody") createItemSearch18AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemSearch18AsyncWithBody:(ItemSearchRequestMsgModel*) body
                completionBlock:(CompletedPostItemSearch18) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemSearchRequestMsgModel* body = [[ItemSearchRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemSearch18AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemSearchResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_lookup19_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup19AsyncWithBody") createItemLookup19AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemLookup19AsyncWithBody:(ItemLookupRequestMsgModel*) body
                completionBlock:(CompletedPostItemLookup19) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemLookupRequestMsgModel* body = [[ItemLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemLookup19AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_browse_node_lookup20_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup20AsyncWithBody") createBrowseNodeLookup20AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createBrowseNodeLookup20AsyncWithBody:(BrowseNodeLookupRequestMsgModel*) body
                completionBlock:(CompletedPostBrowseNodeLookup20) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    BrowseNodeLookupRequestMsgModel* body = [[BrowseNodeLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createBrowseNodeLookup20AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, BrowseNodeLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_similarity_lookup21_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup21AsyncWithBody") createSimilarityLookup21AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createSimilarityLookup21AsyncWithBody:(SimilarityLookupRequestMsgModel*) body
                completionBlock:(CompletedPostSimilarityLookup21) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    SimilarityLookupRequestMsgModel* body = [[SimilarityLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createSimilarityLookup21AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, SimilarityLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_get22_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet22AsyncWithBody") createCartGet22AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartGet22AsyncWithBody:(CartGetRequestMsgModel*) body
                completionBlock:(CompletedPostCartGet22) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartGetRequestMsgModel* body = [[CartGetRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartGet22AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartGetResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_add23_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd23AsyncWithBody") createCartAdd23AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartAdd23AsyncWithBody:(CartAddRequestMsgModel*) body
                completionBlock:(CompletedPostCartAdd23) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartAddRequestMsgModel* body = [[CartAddRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartAdd23AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartAddResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_create24_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate24AsyncWithBody") createCartCreate24AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartCreate24AsyncWithBody:(CartCreateRequestMsgModel*) body
                completionBlock:(CompletedPostCartCreate24) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartCreateRequestMsgModel* body = [[CartCreateRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartCreate24AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartCreateResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_modify25_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify25AsyncWithBody") createCartModify25AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartModify25AsyncWithBody:(CartModifyRequestMsgModel*) body
                completionBlock:(CompletedPostCartModify25) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartModifyRequestMsgModel* body = [[CartModifyRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartModify25AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartModifyResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_clear26_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear26AsyncWithBody") createCartClear26AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartClear26AsyncWithBody:(CartClearRequestMsgModel*) body
                completionBlock:(CompletedPostCartClear26) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartClearRequestMsgModel* body = [[CartClearRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartClear26AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartClearResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_search27_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch27AsyncWithBody") createItemSearch27AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemSearch27AsyncWithBody:(ItemSearchRequestMsgModel*) body
                completionBlock:(CompletedPostItemSearch27) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemSearchRequestMsgModel* body = [[ItemSearchRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemSearch27AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemSearchResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_lookup28_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup28AsyncWithBody") createItemLookup28AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemLookup28AsyncWithBody:(ItemLookupRequestMsgModel*) body
                completionBlock:(CompletedPostItemLookup28) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemLookupRequestMsgModel* body = [[ItemLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemLookup28AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_browse_node_lookup29_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup29AsyncWithBody") createBrowseNodeLookup29AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createBrowseNodeLookup29AsyncWithBody:(BrowseNodeLookupRequestMsgModel*) body
                completionBlock:(CompletedPostBrowseNodeLookup29) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    BrowseNodeLookupRequestMsgModel* body = [[BrowseNodeLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createBrowseNodeLookup29AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, BrowseNodeLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_similarity_lookup30_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup30AsyncWithBody") createSimilarityLookup30AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createSimilarityLookup30AsyncWithBody:(SimilarityLookupRequestMsgModel*) body
                completionBlock:(CompletedPostSimilarityLookup30) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    SimilarityLookupRequestMsgModel* body = [[SimilarityLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createSimilarityLookup30AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, SimilarityLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_get31_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet31AsyncWithBody") createCartGet31AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartGet31AsyncWithBody:(CartGetRequestMsgModel*) body
                completionBlock:(CompletedPostCartGet31) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartGetRequestMsgModel* body = [[CartGetRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartGet31AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartGetResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_add32_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd32AsyncWithBody") createCartAdd32AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartAdd32AsyncWithBody:(CartAddRequestMsgModel*) body
                completionBlock:(CompletedPostCartAdd32) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartAddRequestMsgModel* body = [[CartAddRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartAdd32AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartAddResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_create33_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate33AsyncWithBody") createCartCreate33AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartCreate33AsyncWithBody:(CartCreateRequestMsgModel*) body
                completionBlock:(CompletedPostCartCreate33) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartCreateRequestMsgModel* body = [[CartCreateRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartCreate33AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartCreateResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_modify34_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify34AsyncWithBody") createCartModify34AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartModify34AsyncWithBody:(CartModifyRequestMsgModel*) body
                completionBlock:(CompletedPostCartModify34) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartModifyRequestMsgModel* body = [[CartModifyRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartModify34AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartModifyResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_clear35_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear35AsyncWithBody") createCartClear35AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartClear35AsyncWithBody:(CartClearRequestMsgModel*) body
                completionBlock:(CompletedPostCartClear35) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartClearRequestMsgModel* body = [[CartClearRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartClear35AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartClearResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_search36_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch36AsyncWithBody") createItemSearch36AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemSearch36AsyncWithBody:(ItemSearchRequestMsgModel*) body
                completionBlock:(CompletedPostItemSearch36) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemSearchRequestMsgModel* body = [[ItemSearchRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemSearch36AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemSearchResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_lookup37_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup37AsyncWithBody") createItemLookup37AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemLookup37AsyncWithBody:(ItemLookupRequestMsgModel*) body
                completionBlock:(CompletedPostItemLookup37) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemLookupRequestMsgModel* body = [[ItemLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemLookup37AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_browse_node_lookup38_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup38AsyncWithBody") createBrowseNodeLookup38AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createBrowseNodeLookup38AsyncWithBody:(BrowseNodeLookupRequestMsgModel*) body
                completionBlock:(CompletedPostBrowseNodeLookup38) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    BrowseNodeLookupRequestMsgModel* body = [[BrowseNodeLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createBrowseNodeLookup38AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, BrowseNodeLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_similarity_lookup39_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup39AsyncWithBody") createSimilarityLookup39AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createSimilarityLookup39AsyncWithBody:(SimilarityLookupRequestMsgModel*) body
                completionBlock:(CompletedPostSimilarityLookup39) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    SimilarityLookupRequestMsgModel* body = [[SimilarityLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createSimilarityLookup39AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, SimilarityLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_get40_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet40AsyncWithBody") createCartGet40AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartGet40AsyncWithBody:(CartGetRequestMsgModel*) body
                completionBlock:(CompletedPostCartGet40) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartGetRequestMsgModel* body = [[CartGetRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartGet40AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartGetResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_add41_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd41AsyncWithBody") createCartAdd41AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartAdd41AsyncWithBody:(CartAddRequestMsgModel*) body
                completionBlock:(CompletedPostCartAdd41) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartAddRequestMsgModel* body = [[CartAddRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartAdd41AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartAddResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_create42_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate42AsyncWithBody") createCartCreate42AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartCreate42AsyncWithBody:(CartCreateRequestMsgModel*) body
                completionBlock:(CompletedPostCartCreate42) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartCreateRequestMsgModel* body = [[CartCreateRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartCreate42AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartCreateResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_modify43_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify43AsyncWithBody") createCartModify43AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartModify43AsyncWithBody:(CartModifyRequestMsgModel*) body
                completionBlock:(CompletedPostCartModify43) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartModifyRequestMsgModel* body = [[CartModifyRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartModify43AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartModifyResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_clear44_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear44AsyncWithBody") createCartClear44AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartClear44AsyncWithBody:(CartClearRequestMsgModel*) body
                completionBlock:(CompletedPostCartClear44) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartClearRequestMsgModel* body = [[CartClearRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartClear44AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartClearResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_search45_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch45AsyncWithBody") createItemSearch45AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemSearch45AsyncWithBody:(ItemSearchRequestMsgModel*) body
                completionBlock:(CompletedPostItemSearch45) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemSearchRequestMsgModel* body = [[ItemSearchRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemSearch45AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemSearchResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_lookup46_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup46AsyncWithBody") createItemLookup46AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemLookup46AsyncWithBody:(ItemLookupRequestMsgModel*) body
                completionBlock:(CompletedPostItemLookup46) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemLookupRequestMsgModel* body = [[ItemLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemLookup46AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_browse_node_lookup47_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup47AsyncWithBody") createBrowseNodeLookup47AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createBrowseNodeLookup47AsyncWithBody:(BrowseNodeLookupRequestMsgModel*) body
                completionBlock:(CompletedPostBrowseNodeLookup47) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    BrowseNodeLookupRequestMsgModel* body = [[BrowseNodeLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createBrowseNodeLookup47AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, BrowseNodeLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_similarity_lookup48_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup48AsyncWithBody") createSimilarityLookup48AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createSimilarityLookup48AsyncWithBody:(SimilarityLookupRequestMsgModel*) body
                completionBlock:(CompletedPostSimilarityLookup48) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    SimilarityLookupRequestMsgModel* body = [[SimilarityLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createSimilarityLookup48AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, SimilarityLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_get49_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet49AsyncWithBody") createCartGet49AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartGet49AsyncWithBody:(CartGetRequestMsgModel*) body
                completionBlock:(CompletedPostCartGet49) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartGetRequestMsgModel* body = [[CartGetRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartGet49AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartGetResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_add50_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd50AsyncWithBody") createCartAdd50AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartAdd50AsyncWithBody:(CartAddRequestMsgModel*) body
                completionBlock:(CompletedPostCartAdd50) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartAddRequestMsgModel* body = [[CartAddRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartAdd50AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartAddResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_create51_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate51AsyncWithBody") createCartCreate51AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartCreate51AsyncWithBody:(CartCreateRequestMsgModel*) body
                completionBlock:(CompletedPostCartCreate51) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartCreateRequestMsgModel* body = [[CartCreateRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartCreate51AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartCreateResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_modify52_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify52AsyncWithBody") createCartModify52AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartModify52AsyncWithBody:(CartModifyRequestMsgModel*) body
                completionBlock:(CompletedPostCartModify52) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartModifyRequestMsgModel* body = [[CartModifyRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartModify52AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartModifyResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_clear53_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear53AsyncWithBody") createCartClear53AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartClear53AsyncWithBody:(CartClearRequestMsgModel*) body
                completionBlock:(CompletedPostCartClear53) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartClearRequestMsgModel* body = [[CartClearRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartClear53AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartClearResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_search54_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch54AsyncWithBody") createItemSearch54AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemSearch54AsyncWithBody:(ItemSearchRequestMsgModel*) body
                completionBlock:(CompletedPostItemSearch54) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemSearchRequestMsgModel* body = [[ItemSearchRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemSearch54AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemSearchResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_lookup55_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup55AsyncWithBody") createItemLookup55AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemLookup55AsyncWithBody:(ItemLookupRequestMsgModel*) body
                completionBlock:(CompletedPostItemLookup55) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemLookupRequestMsgModel* body = [[ItemLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemLookup55AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_browse_node_lookup56_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup56AsyncWithBody") createBrowseNodeLookup56AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createBrowseNodeLookup56AsyncWithBody:(BrowseNodeLookupRequestMsgModel*) body
                completionBlock:(CompletedPostBrowseNodeLookup56) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    BrowseNodeLookupRequestMsgModel* body = [[BrowseNodeLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createBrowseNodeLookup56AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, BrowseNodeLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_similarity_lookup57_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup57AsyncWithBody") createSimilarityLookup57AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createSimilarityLookup57AsyncWithBody:(SimilarityLookupRequestMsgModel*) body
                completionBlock:(CompletedPostSimilarityLookup57) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    SimilarityLookupRequestMsgModel* body = [[SimilarityLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createSimilarityLookup57AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, SimilarityLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_get58_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet58AsyncWithBody") createCartGet58AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartGet58AsyncWithBody:(CartGetRequestMsgModel*) body
                completionBlock:(CompletedPostCartGet58) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartGetRequestMsgModel* body = [[CartGetRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartGet58AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartGetResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_add59_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd59AsyncWithBody") createCartAdd59AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartAdd59AsyncWithBody:(CartAddRequestMsgModel*) body
                completionBlock:(CompletedPostCartAdd59) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartAddRequestMsgModel* body = [[CartAddRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartAdd59AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartAddResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_create60_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate60AsyncWithBody") createCartCreate60AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartCreate60AsyncWithBody:(CartCreateRequestMsgModel*) body
                completionBlock:(CompletedPostCartCreate60) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartCreateRequestMsgModel* body = [[CartCreateRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartCreate60AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartCreateResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_modify61_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify61AsyncWithBody") createCartModify61AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartModify61AsyncWithBody:(CartModifyRequestMsgModel*) body
                completionBlock:(CompletedPostCartModify61) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartModifyRequestMsgModel* body = [[CartModifyRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartModify61AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartModifyResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_clear62_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear62AsyncWithBody") createCartClear62AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartClear62AsyncWithBody:(CartClearRequestMsgModel*) body
                completionBlock:(CompletedPostCartClear62) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartClearRequestMsgModel* body = [[CartClearRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartClear62AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartClearResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_search63_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch63AsyncWithBody") createItemSearch63AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemSearch63AsyncWithBody:(ItemSearchRequestMsgModel*) body
                completionBlock:(CompletedPostItemSearch63) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemSearchRequestMsgModel* body = [[ItemSearchRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemSearch63AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemSearchResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_lookup64_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup64AsyncWithBody") createItemLookup64AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemLookup64AsyncWithBody:(ItemLookupRequestMsgModel*) body
                completionBlock:(CompletedPostItemLookup64) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemLookupRequestMsgModel* body = [[ItemLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemLookup64AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_browse_node_lookup65_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup65AsyncWithBody") createBrowseNodeLookup65AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createBrowseNodeLookup65AsyncWithBody:(BrowseNodeLookupRequestMsgModel*) body
                completionBlock:(CompletedPostBrowseNodeLookup65) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    BrowseNodeLookupRequestMsgModel* body = [[BrowseNodeLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createBrowseNodeLookup65AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, BrowseNodeLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_similarity_lookup66_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup66AsyncWithBody") createSimilarityLookup66AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createSimilarityLookup66AsyncWithBody:(SimilarityLookupRequestMsgModel*) body
                completionBlock:(CompletedPostSimilarityLookup66) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    SimilarityLookupRequestMsgModel* body = [[SimilarityLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createSimilarityLookup66AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, SimilarityLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_get67_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet67AsyncWithBody") createCartGet67AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartGet67AsyncWithBody:(CartGetRequestMsgModel*) body
                completionBlock:(CompletedPostCartGet67) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartGetRequestMsgModel* body = [[CartGetRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartGet67AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartGetResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_add68_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd68AsyncWithBody") createCartAdd68AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartAdd68AsyncWithBody:(CartAddRequestMsgModel*) body
                completionBlock:(CompletedPostCartAdd68) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartAddRequestMsgModel* body = [[CartAddRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartAdd68AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartAddResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_create69_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate69AsyncWithBody") createCartCreate69AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartCreate69AsyncWithBody:(CartCreateRequestMsgModel*) body
                completionBlock:(CompletedPostCartCreate69) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartCreateRequestMsgModel* body = [[CartCreateRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartCreate69AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartCreateResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_modify70_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify70AsyncWithBody") createCartModify70AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartModify70AsyncWithBody:(CartModifyRequestMsgModel*) body
                completionBlock:(CompletedPostCartModify70) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartModifyRequestMsgModel* body = [[CartModifyRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartModify70AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartModifyResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_clear71_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear71AsyncWithBody") createCartClear71AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartClear71AsyncWithBody:(CartClearRequestMsgModel*) body
                completionBlock:(CompletedPostCartClear71) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartClearRequestMsgModel* body = [[CartClearRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartClear71AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartClearResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_search72_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch72AsyncWithBody") createItemSearch72AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemSearch72AsyncWithBody:(ItemSearchRequestMsgModel*) body
                completionBlock:(CompletedPostItemSearch72) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemSearchRequestMsgModel* body = [[ItemSearchRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemSearch72AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemSearchResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_lookup73_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup73AsyncWithBody") createItemLookup73AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemLookup73AsyncWithBody:(ItemLookupRequestMsgModel*) body
                completionBlock:(CompletedPostItemLookup73) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemLookupRequestMsgModel* body = [[ItemLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemLookup73AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_browse_node_lookup74_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup74AsyncWithBody") createBrowseNodeLookup74AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createBrowseNodeLookup74AsyncWithBody:(BrowseNodeLookupRequestMsgModel*) body
                completionBlock:(CompletedPostBrowseNodeLookup74) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    BrowseNodeLookupRequestMsgModel* body = [[BrowseNodeLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createBrowseNodeLookup74AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, BrowseNodeLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_similarity_lookup75_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup75AsyncWithBody") createSimilarityLookup75AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createSimilarityLookup75AsyncWithBody:(SimilarityLookupRequestMsgModel*) body
                completionBlock:(CompletedPostSimilarityLookup75) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    SimilarityLookupRequestMsgModel* body = [[SimilarityLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createSimilarityLookup75AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, SimilarityLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_get76_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet76AsyncWithBody") createCartGet76AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartGet76AsyncWithBody:(CartGetRequestMsgModel*) body
                completionBlock:(CompletedPostCartGet76) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartGetRequestMsgModel* body = [[CartGetRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartGet76AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartGetResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_add77_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd77AsyncWithBody") createCartAdd77AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartAdd77AsyncWithBody:(CartAddRequestMsgModel*) body
                completionBlock:(CompletedPostCartAdd77) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartAddRequestMsgModel* body = [[CartAddRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartAdd77AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartAddResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_create78_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate78AsyncWithBody") createCartCreate78AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartCreate78AsyncWithBody:(CartCreateRequestMsgModel*) body
                completionBlock:(CompletedPostCartCreate78) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartCreateRequestMsgModel* body = [[CartCreateRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartCreate78AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartCreateResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_modify79_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify79AsyncWithBody") createCartModify79AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartModify79AsyncWithBody:(CartModifyRequestMsgModel*) body
                completionBlock:(CompletedPostCartModify79) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartModifyRequestMsgModel* body = [[CartModifyRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartModify79AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartModifyResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_clear80_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear80AsyncWithBody") createCartClear80AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartClear80AsyncWithBody:(CartClearRequestMsgModel*) body
                completionBlock:(CompletedPostCartClear80) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartClearRequestMsgModel* body = [[CartClearRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartClear80AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartClearResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_search81_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch81AsyncWithBody") createItemSearch81AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemSearch81AsyncWithBody:(ItemSearchRequestMsgModel*) body
                completionBlock:(CompletedPostItemSearch81) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemSearchRequestMsgModel* body = [[ItemSearchRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemSearch81AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemSearchResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_lookup82_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup82AsyncWithBody") createItemLookup82AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemLookup82AsyncWithBody:(ItemLookupRequestMsgModel*) body
                completionBlock:(CompletedPostItemLookup82) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemLookupRequestMsgModel* body = [[ItemLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemLookup82AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_browse_node_lookup83_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup83AsyncWithBody") createBrowseNodeLookup83AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createBrowseNodeLookup83AsyncWithBody:(BrowseNodeLookupRequestMsgModel*) body
                completionBlock:(CompletedPostBrowseNodeLookup83) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    BrowseNodeLookupRequestMsgModel* body = [[BrowseNodeLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createBrowseNodeLookup83AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, BrowseNodeLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_similarity_lookup84_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup84AsyncWithBody") createSimilarityLookup84AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createSimilarityLookup84AsyncWithBody:(SimilarityLookupRequestMsgModel*) body
                completionBlock:(CompletedPostSimilarityLookup84) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    SimilarityLookupRequestMsgModel* body = [[SimilarityLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createSimilarityLookup84AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, SimilarityLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_get85_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet85AsyncWithBody") createCartGet85AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartGet85AsyncWithBody:(CartGetRequestMsgModel*) body
                completionBlock:(CompletedPostCartGet85) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartGetRequestMsgModel* body = [[CartGetRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartGet85AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartGetResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_add86_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd86AsyncWithBody") createCartAdd86AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartAdd86AsyncWithBody:(CartAddRequestMsgModel*) body
                completionBlock:(CompletedPostCartAdd86) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartAddRequestMsgModel* body = [[CartAddRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartAdd86AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartAddResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_create87_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate87AsyncWithBody") createCartCreate87AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartCreate87AsyncWithBody:(CartCreateRequestMsgModel*) body
                completionBlock:(CompletedPostCartCreate87) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartCreateRequestMsgModel* body = [[CartCreateRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartCreate87AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartCreateResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_modify88_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify88AsyncWithBody") createCartModify88AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartModify88AsyncWithBody:(CartModifyRequestMsgModel*) body
                completionBlock:(CompletedPostCartModify88) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartModifyRequestMsgModel* body = [[CartModifyRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartModify88AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartModifyResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_clear89_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear89AsyncWithBody") createCartClear89AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartClear89AsyncWithBody:(CartClearRequestMsgModel*) body
                completionBlock:(CompletedPostCartClear89) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartClearRequestMsgModel* body = [[CartClearRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartClear89AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartClearResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_search90_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch90AsyncWithBody") createItemSearch90AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemSearch90AsyncWithBody:(ItemSearchRequestMsgModel*) body
                completionBlock:(CompletedPostItemSearch90) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemSearchRequestMsgModel* body = [[ItemSearchRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemSearch90AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemSearchResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_item_lookup91_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup91AsyncWithBody") createItemLookup91AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createItemLookup91AsyncWithBody:(ItemLookupRequestMsgModel*) body
                completionBlock:(CompletedPostItemLookup91) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    ItemLookupRequestMsgModel* body = [[ItemLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createItemLookup91AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, ItemLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_browse_node_lookup92_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup92AsyncWithBody") createBrowseNodeLookup92AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createBrowseNodeLookup92AsyncWithBody:(BrowseNodeLookupRequestMsgModel*) body
                completionBlock:(CompletedPostBrowseNodeLookup92) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    BrowseNodeLookupRequestMsgModel* body = [[BrowseNodeLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createBrowseNodeLookup92AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, BrowseNodeLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_similarity_lookup93_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup93AsyncWithBody") createSimilarityLookup93AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createSimilarityLookup93AsyncWithBody:(SimilarityLookupRequestMsgModel*) body
                completionBlock:(CompletedPostSimilarityLookup93) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    SimilarityLookupRequestMsgModel* body = [[SimilarityLookupRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createSimilarityLookup93AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, SimilarityLookupResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_get94_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet94AsyncWithBody") createCartGet94AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartGet94AsyncWithBody:(CartGetRequestMsgModel*) body
                completionBlock:(CompletedPostCartGet94) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartGetRequestMsgModel* body = [[CartGetRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartGet94AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartGetResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_add95_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd95AsyncWithBody") createCartAdd95AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartAdd95AsyncWithBody:(CartAddRequestMsgModel*) body
                completionBlock:(CompletedPostCartAdd95) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartAddRequestMsgModel* body = [[CartAddRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartAdd95AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartAddResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_create96_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate96AsyncWithBody") createCartCreate96AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartCreate96AsyncWithBody:(CartCreateRequestMsgModel*) body
                completionBlock:(CompletedPostCartCreate96) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartCreateRequestMsgModel* body = [[CartCreateRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartCreate96AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartCreateResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_modify97_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify97AsyncWithBody") createCartModify97AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartModify97AsyncWithBody:(CartModifyRequestMsgModel*) body
                completionBlock:(CompletedPostCartModify97) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartModifyRequestMsgModel* body = [[CartModifyRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartModify97AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartModifyResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_cart_clear98_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear98AsyncWithBody") createCartClear98AsyncWithBody

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```objc
function createCartClear98AsyncWithBody:(CartClearRequestMsgModel*) body
                completionBlock:(CompletedPostCartClear98) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CartClearRequestMsgModel* body = [[CartClearRequestMsgModel alloc]init];

    [self.aWSECommerceServiceBinding createCartClear98AsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, CartClearResponseMsgModel* response, NSError* error) { 
       //Add code here
    }];
```


[Back to List of Controllers](#list_of_controllers)

## <a name="o_auth_authorization_controller"></a>![Class: ](https://apidocs.io/img/class.png ".OAuthAuthorizationController") OAuthAuthorizationController

### Get singleton instance
```objc
OAuthAuthorization* oAuthAuthorization = [[OAuthAuthorization alloc]init] ;
```

### <a name="create_request_token_async_with_create_request_token_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestTokenAsyncWithCreateRequestTokenInput") createRequestTokenAsyncWithCreateRequestTokenInput

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```objc
function createRequestTokenAsyncWithCreateRequestTokenInput:(CreateRequestTokenInput*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRequestToken) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRequestTokenInput *input = [[CreateRequestTokenInput alloc]init];
    input.authorization = @"Authorization";
    input.code = @"code";
    input.redirectUri = @"redirect_uri";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRequestTokenAsyncWithCreateRequestTokenInput: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token_async_with_create_refresh_token_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshTokenAsyncWithCreateRefreshTokenInput") createRefreshTokenAsyncWithCreateRefreshTokenInput

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```objc
function createRefreshTokenAsyncWithCreateRefreshTokenInput:(CreateRefreshTokenInput*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRefreshToken) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRefreshTokenInput *input = [[CreateRefreshTokenInput alloc]init];
    input.authorization = @"Authorization";
    input.refreshToken = @"refresh_token";
    input.scope = @"scope";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRefreshTokenAsyncWithCreateRefreshTokenInput: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token1_async_with_create_request_token1_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken1AsyncWithCreateRequestToken1Input") createRequestToken1AsyncWithCreateRequestToken1Input

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```objc
function createRequestToken1AsyncWithCreateRequestToken1Input:(CreateRequestToken1Input*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRequestToken1) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRequestToken1Input *input = [[CreateRequestToken1Input alloc]init];
    input.authorization = @"Authorization";
    input.code = @"code";
    input.redirectUri = @"redirect_uri";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRequestToken1AsyncWithCreateRequestToken1Input: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token1_async_with_create_refresh_token1_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken1AsyncWithCreateRefreshToken1Input") createRefreshToken1AsyncWithCreateRefreshToken1Input

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```objc
function createRefreshToken1AsyncWithCreateRefreshToken1Input:(CreateRefreshToken1Input*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRefreshToken1) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRefreshToken1Input *input = [[CreateRefreshToken1Input alloc]init];
    input.authorization = @"Authorization";
    input.refreshToken = @"refresh_token";
    input.scope = @"scope";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRefreshToken1AsyncWithCreateRefreshToken1Input: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token2_async_with_create_request_token2_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken2AsyncWithCreateRequestToken2Input") createRequestToken2AsyncWithCreateRequestToken2Input

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```objc
function createRequestToken2AsyncWithCreateRequestToken2Input:(CreateRequestToken2Input*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRequestToken2) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRequestToken2Input *input = [[CreateRequestToken2Input alloc]init];
    input.authorization = @"Authorization";
    input.code = @"code";
    input.redirectUri = @"redirect_uri";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRequestToken2AsyncWithCreateRequestToken2Input: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token2_async_with_create_refresh_token2_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken2AsyncWithCreateRefreshToken2Input") createRefreshToken2AsyncWithCreateRefreshToken2Input

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```objc
function createRefreshToken2AsyncWithCreateRefreshToken2Input:(CreateRefreshToken2Input*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRefreshToken2) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRefreshToken2Input *input = [[CreateRefreshToken2Input alloc]init];
    input.authorization = @"Authorization";
    input.refreshToken = @"refresh_token";
    input.scope = @"scope";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRefreshToken2AsyncWithCreateRefreshToken2Input: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token3_async_with_create_request_token3_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken3AsyncWithCreateRequestToken3Input") createRequestToken3AsyncWithCreateRequestToken3Input

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```objc
function createRequestToken3AsyncWithCreateRequestToken3Input:(CreateRequestToken3Input*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRequestToken3) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRequestToken3Input *input = [[CreateRequestToken3Input alloc]init];
    input.authorization = @"Authorization";
    input.code = @"code";
    input.redirectUri = @"redirect_uri";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRequestToken3AsyncWithCreateRequestToken3Input: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token3_async_with_create_refresh_token3_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken3AsyncWithCreateRefreshToken3Input") createRefreshToken3AsyncWithCreateRefreshToken3Input

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```objc
function createRefreshToken3AsyncWithCreateRefreshToken3Input:(CreateRefreshToken3Input*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRefreshToken3) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRefreshToken3Input *input = [[CreateRefreshToken3Input alloc]init];
    input.authorization = @"Authorization";
    input.refreshToken = @"refresh_token";
    input.scope = @"scope";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRefreshToken3AsyncWithCreateRefreshToken3Input: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token4_async_with_create_request_token4_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken4AsyncWithCreateRequestToken4Input") createRequestToken4AsyncWithCreateRequestToken4Input

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```objc
function createRequestToken4AsyncWithCreateRequestToken4Input:(CreateRequestToken4Input*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRequestToken4) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRequestToken4Input *input = [[CreateRequestToken4Input alloc]init];
    input.authorization = @"Authorization";
    input.code = @"code";
    input.redirectUri = @"redirect_uri";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRequestToken4AsyncWithCreateRequestToken4Input: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token4_async_with_create_refresh_token4_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken4AsyncWithCreateRefreshToken4Input") createRefreshToken4AsyncWithCreateRefreshToken4Input

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```objc
function createRefreshToken4AsyncWithCreateRefreshToken4Input:(CreateRefreshToken4Input*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRefreshToken4) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRefreshToken4Input *input = [[CreateRefreshToken4Input alloc]init];
    input.authorization = @"Authorization";
    input.refreshToken = @"refresh_token";
    input.scope = @"scope";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRefreshToken4AsyncWithCreateRefreshToken4Input: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token5_async_with_create_request_token5_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken5AsyncWithCreateRequestToken5Input") createRequestToken5AsyncWithCreateRequestToken5Input

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```objc
function createRequestToken5AsyncWithCreateRequestToken5Input:(CreateRequestToken5Input*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRequestToken5) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRequestToken5Input *input = [[CreateRequestToken5Input alloc]init];
    input.authorization = @"Authorization";
    input.code = @"code";
    input.redirectUri = @"redirect_uri";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRequestToken5AsyncWithCreateRequestToken5Input: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token5_async_with_create_refresh_token5_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken5AsyncWithCreateRefreshToken5Input") createRefreshToken5AsyncWithCreateRefreshToken5Input

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```objc
function createRefreshToken5AsyncWithCreateRefreshToken5Input:(CreateRefreshToken5Input*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRefreshToken5) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRefreshToken5Input *input = [[CreateRefreshToken5Input alloc]init];
    input.authorization = @"Authorization";
    input.refreshToken = @"refresh_token";
    input.scope = @"scope";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRefreshToken5AsyncWithCreateRefreshToken5Input: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token_async_with_create_request_token_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestTokenAsyncWithCreateRequestTokenInput") createRequestTokenAsyncWithCreateRequestTokenInput

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```objc
function createRequestTokenAsyncWithCreateRequestTokenInput:(CreateRequestTokenInput*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRequestToken) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRequestTokenInput *input = [[CreateRequestTokenInput alloc]init];
    input.authorization = @"Authorization";
    input.code = @"code";
    input.redirectUri = @"redirect_uri";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRequestTokenAsyncWithCreateRequestTokenInput: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token_async_with_create_refresh_token_input"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshTokenAsyncWithCreateRefreshTokenInput") createRefreshTokenAsyncWithCreateRefreshTokenInput

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```objc
function createRefreshTokenAsyncWithCreateRefreshTokenInput:(CreateRefreshTokenInput*) input
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRefreshToken) onCompleted(input formParameters : formParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    CreateRefreshTokenInput *input = [[CreateRefreshTokenInput alloc]init];
    input.authorization = @"Authorization";
    input.refreshToken = @"refresh_token";
    input.scope = @"scope";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRefreshTokenAsyncWithCreateRefreshTokenInput: input formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthTokenModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



[Back to List of Controllers](#list_of_controllers)



