# Getting started

## How to Build

The generated code uses a few Gradle dependencies e.g., Jackson, Volley,
and Apache HttpClient. The reference to these dependencies is already
added in the build.gradle file will be installed automatically. Therefore,
you will need internet access for a successful build.

* In order to open the client library in Android Studio click on ``` Open an Existing Android Project ```.

![Importing SDK into Android Studio - Step 1](https://apidocs.io/illustration/android?step=import1&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

* Browse to locate the folder containing the source code. Select the location of the AWSECommerceService gradle project and click ``` Ok ```.

![Importing SDK into Android Studio - Step 2](https://apidocs.io/illustration/android?step=import2&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

* Upon successful import, the project can be built by clicking on ``` Build > Make Project ``` or  pressing ``` Ctrl + F9 ```.

![Importing SDK into Android Studio - Step 3](https://apidocs.io/illustration/android?step=import3&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

## How to Use

The following section explains how to use the AWSECommerceService library in a new project.

### 1. Starting a new project 

For starting a new project, click on ``` Create New Android Studio Project ```.

![Add a new project in Android Studio - Step 1](https://apidocs.io/illustration/android?step=createNewProject0&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

Here, configure the new project by adding the name, domain and location of the sample application followed by clicking ``` Next ```.

![Create a new Android Studio Project - Step 2](https://apidocs.io/illustration/android?step=createNewProject1&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

Following this, select the ``` Phone and Tablet ```` option as shown in the illustration below and click ``` Next ```. 

![Create a new Android Studio Project - Step 3](https://apidocs.io/illustration/android?step=createNewProject2&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

In the following step, choose ``` Empty Activity ``` as the activity type and click ``` Next ```.

![Create a new Android Studio Project - Step 4](https://apidocs.io/illustration/android?step=createNewProject3&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

In this step, provide an ``` Activity Name ``` and ``` Layout Name ``` and click ``` Finish ```.  This would take you to the newly created project.

![Create a new Android Studio Project - Step 4](https://apidocs.io/illustration/android?step=createNewProject4&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

### 2. Add reference of the library project

In order to add a dependency to this sample application, click on the android button shown in the project explorer on the left side as shown in the picture. Click on ``` Project ``` in the drop down that emerges.  

![Adding dependency to the client library - Step 1](https://apidocs.io/illustration/android?step=testProject0&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

Right click the sample application in the project explorer and click on ``` New > Module ```  as shown in the picture.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/android?step=testProject1&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

Choose ``` Import Gradle Project ``` and click ``` Next ```.

![Adding dependency to the client library - Step 3](https://apidocs.io/illustration/android?step=testProject2&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

Click on ``` Finish ``` which would take you back to the sample application with the refernced SDK. 

![Adding dependency to the client library - Step 4](https://apidocs.io/illustration/android?step=testProject3&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

In the following step naigate to the ``` SampleApplication >  app > build.gradle ``` file and add the following line ```compile project(path: ':AWSECommerceService')``` to the dependencies section as shown in the illustration below.

![Adding dependency to the client library - Step 5](https://apidocs.io/illustration/android?step=testProject4&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

Finally, press ``` Sync Now ``` in the warning visible as shown in the picture below.

![Adding dependency to the client library - Step 6](https://apidocs.io/illustration/android?step=testProject5&workspaceFolder=AWSECommerceService&workspaceName=AWSECommerceService&projectName=AWSECommerceServiceLib&rootNamespace=com.amazon.webservices)

### 3. Write sample code

Once the ``` SampleApplication ``` is created, a file named ``` SampleApplication > app > src > main > java > MainActivity ``` will be visible in the *Project Explorer* with an ``` onCreate ``` method. This is the entry point for the execution of the created project.
Here, you can add code to initialize the client library and instantiate a *Controller* class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

## How to Test

The generated code and the server can be tested using automatically generated test cases. 
JUnit is used as the testing framework and test runner.

In Android Studio, for running the tests do the following:

1. Right click on *SampleApplication > AWSECommerceServiceLib > androidTest > java)* from the project explorer.
2. Select "Run All Tests" or use "Ctrl + Shift + F10" to run the Tests.

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



API client can be initialized as following. The `appContext` being passed is the Android application [`Context`](https://developer.android.com/reference/android/content/Context.html).

```java
// Configuration parameters and credentials
String aFIeyt = "aFIeyt";
String b = "b";
String c = "c";
String oAuthClientId = "oAuthClientId"; // OAuth 2 Client ID
String oAuthClientSecret = "oAuthClientSecret"; // OAuth 2 Client Secret
String oAuthRedirectUri = "oAuthRedirectUri"; // OAuth 2 Redirection endpoint or Callback Uri

com.amazon.webservices.Configuration.initialize(appContext);
AWSECommerceServiceClient client = new AWSECommerceServiceClient(aFIeyt, b, c, oAuthClientId, oAuthClientSecret, oAuthRedirectUri);
```

You must authorize now authorize the client.

### Authorizing your client

Your application must obtain user authorization before it can execute an endpoint call.
The SDK uses *OAuth 2.0 authorization* to obtain a user's consent to perform an API request on user's behalf.

#### 1. Obtain user consent

To obtain user's consent, you must redirect the user to the authorization page. The `buildAuthorizationUrl()` method creates the URL to the authorization page. You must pass
the *[scopes](#scopes)* for which you need permission to access.
```java
String authUrl = client.auth().buildAuthorizationUrl(scopes); // build auth url
// show user the auth page in a browser
```

#### 2. Handle the OAuth server response

Once the user responds to the consent request, the OAuth 2.0 server responds to your application's access request by redirecting the user to the redirect URI specified set in `Configuration`.

If the user approves the request, the authorization code will be sent as the `code` query string:

```
https://example.com/oauth/callback?code=XXXXXXXXXXXXXXXXXXXXXXXXX
```

If the user does not approve the request, the response contains an `error` query string:

```
https://example.com/oauth/callback?error=access_denied
```

#### 3. Authorize the client using the code

After the server receives the code, it can exchange this for an *access token*. The access token is an object containing information for authorizing client requests and refreshing the token itself.

```java
client.auth().authorize(authorizationCode, null, new APICallBack<OAuthTokenModel>() {
                    
    @Override
    public void onSuccess(HttpContext context, OAuthTokenModel response) {
        // TODO Do something after the client is authorized
    }
                    
    @Override
    public void onFailure(HttpContext context, Throwable error) {
        // TODO Handle failure
    }
});
```

### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the `com.amazon.webservices.Models.OAuthScopeEnum` enumeration.

| Scope Name | Description |
| --- | --- |
| `ASDA` |  |

### Refreshing token

An access token may expire after sometime. To extend its lifetime, you must refresh the token.

```java
if(client.auth().isTokenExpired()) {
    client.auth().refreshToken(new APICallBack<OAuthTokenModel>() {
                    
        @Override
        public void onSuccess(HttpContext context, OAuthTokenModel response) {
            // TODO Do something after the token is refreshed
        }
                    
        @Override
        public void onFailure(HttpContext context, Throwable error) {
            // TODO Handle failure
        }
    });
}
```

If a token expires, the SDK will attempt to automatically refresh the token before the next endpoint call requiring authentication.

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

```java
// store token in some way
storeAccessToken(com.amazon.webservices.Configuration.oAuthToken);
```

However, since the the SDK will attempt to automatically refresh the token when it expires, it is recommended that you register a *token update callback* to detect any change to the access token.

```java
com.amazon.webservices.Configuration.oAuthTokenUpdateCallBack = new com.amazon.webservices.OAuthTokenUpdateCallBack() {
    public void tokenUpdate(OAuthTokenModel oAuthToken) {
        // store access token in some way
        storeAccessToken(oAuthToken);
    }
};
```

The token update callback will be fired upon authorization as well as token refresh.

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token in `Configuration` along with the other configuration parameters before creating the client:

```java
// load token later...
com.amazon.webservices.Configuration.oAuthToken = loadAccessToken();

// Set other configuration, then instantiate client
AWSECommerceServiceClient client = new AWSECommerceServiceClient();
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [AWSECommerceServiceBindingController](#awse_commerce_service_binding_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="awse_commerce_service_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController") AWSECommerceServiceBindingController

### Get singleton instance

The singleton instance of the ``` AWSECommerceServiceBindingController ``` class can be accessed from the API Client.

```java
AWSECommerceServiceBindingController aWSECommerceServiceBinding = client.getAWSECommerceServiceBinding();
```

### <a name="create_cart_clear_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartClearAsync") createCartClearAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartClearAsync(
        final CartClearRequestMsgModel body,
        final APICallBack<CartClearResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartClearRequestMsgModel body = new CartClearRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartClearAsync(body, new APICallBack<CartClearResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartClearResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 410 | new |



### <a name="create_cart_modify_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartModifyAsync") createCartModifyAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartModifyAsync(
        final CartModifyRequestMsgModel body,
        final APICallBack<CartModifyResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartModifyRequestMsgModel body = new CartModifyRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartModifyAsync(body, new APICallBack<CartModifyResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartModifyResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_create_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartCreateAsync") createCartCreateAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartCreateAsync(
        final CartCreateRequestMsgModel body,
        final APICallBack<CartCreateResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartCreateRequestMsgModel body = new CartCreateRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartCreateAsync(body, new APICallBack<CartCreateResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartCreateResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_add_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartAddAsync") createCartAddAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartAddAsync(
        final CartAddRequestMsgModel body,
        final APICallBack<CartAddResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartAddRequestMsgModel body = new CartAddRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartAddAsync(body, new APICallBack<CartAddResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartAddResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_get_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartGetAsync") createCartGetAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartGetAsync(
        final CartGetRequestMsgModel body,
        final APICallBack<CartGetResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartGetRequestMsgModel body = new CartGetRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartGetAsync(body, new APICallBack<CartGetResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartGetResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_similarity_lookup_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createSimilarityLookupAsync") createSimilarityLookupAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createSimilarityLookupAsync(
        final SimilarityLookupRequestMsgModel body,
        final APICallBack<SimilarityLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    SimilarityLookupRequestMsgModel body = new SimilarityLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createSimilarityLookupAsync(body, new APICallBack<SimilarityLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, SimilarityLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_browse_node_lookup_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createBrowseNodeLookupAsync") createBrowseNodeLookupAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createBrowseNodeLookupAsync(
        final BrowseNodeLookupRequestMsgModel body,
        final APICallBack<BrowseNodeLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    BrowseNodeLookupRequestMsgModel body = new BrowseNodeLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createBrowseNodeLookupAsync(body, new APICallBack<BrowseNodeLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, BrowseNodeLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_lookup_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemLookupAsync") createItemLookupAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemLookupAsync(
        final ItemLookupRequestMsgModel body,
        final APICallBack<ItemLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemLookupRequestMsgModel body = new ItemLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemLookupAsync(body, new APICallBack<ItemLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_search_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemSearchAsync") createItemSearchAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemSearchAsync(
        final ItemSearchRequestMsgModel body,
        final APICallBack<ItemSearchResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemSearchRequestMsgModel body = new ItemSearchRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemSearchAsync(body, new APICallBack<ItemSearchResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemSearchResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_search9_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemSearch9Async") createItemSearch9Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemSearch9Async(
        final ItemSearchRequestMsgModel body,
        final APICallBack<ItemSearchResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemSearchRequestMsgModel body = new ItemSearchRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemSearch9Async(body, new APICallBack<ItemSearchResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemSearchResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_lookup10_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemLookup10Async") createItemLookup10Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemLookup10Async(
        final ItemLookupRequestMsgModel body,
        final APICallBack<ItemLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemLookupRequestMsgModel body = new ItemLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemLookup10Async(body, new APICallBack<ItemLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_browse_node_lookup11_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createBrowseNodeLookup11Async") createBrowseNodeLookup11Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createBrowseNodeLookup11Async(
        final BrowseNodeLookupRequestMsgModel body,
        final APICallBack<BrowseNodeLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    BrowseNodeLookupRequestMsgModel body = new BrowseNodeLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createBrowseNodeLookup11Async(body, new APICallBack<BrowseNodeLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, BrowseNodeLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_similarity_lookup12_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createSimilarityLookup12Async") createSimilarityLookup12Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createSimilarityLookup12Async(
        final SimilarityLookupRequestMsgModel body,
        final APICallBack<SimilarityLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    SimilarityLookupRequestMsgModel body = new SimilarityLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createSimilarityLookup12Async(body, new APICallBack<SimilarityLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, SimilarityLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_get13_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartGet13Async") createCartGet13Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartGet13Async(
        final CartGetRequestMsgModel body,
        final APICallBack<CartGetResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartGetRequestMsgModel body = new CartGetRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartGet13Async(body, new APICallBack<CartGetResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartGetResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_add14_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartAdd14Async") createCartAdd14Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartAdd14Async(
        final CartAddRequestMsgModel body,
        final APICallBack<CartAddResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartAddRequestMsgModel body = new CartAddRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartAdd14Async(body, new APICallBack<CartAddResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartAddResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_create15_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartCreate15Async") createCartCreate15Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartCreate15Async(
        final CartCreateRequestMsgModel body,
        final APICallBack<CartCreateResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartCreateRequestMsgModel body = new CartCreateRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartCreate15Async(body, new APICallBack<CartCreateResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartCreateResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_modify16_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartModify16Async") createCartModify16Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartModify16Async(
        final CartModifyRequestMsgModel body,
        final APICallBack<CartModifyResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartModifyRequestMsgModel body = new CartModifyRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartModify16Async(body, new APICallBack<CartModifyResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartModifyResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_clear17_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartClear17Async") createCartClear17Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartClear17Async(
        final CartClearRequestMsgModel body,
        final APICallBack<CartClearResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartClearRequestMsgModel body = new CartClearRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartClear17Async(body, new APICallBack<CartClearResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartClearResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_search18_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemSearch18Async") createItemSearch18Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemSearch18Async(
        final ItemSearchRequestMsgModel body,
        final APICallBack<ItemSearchResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemSearchRequestMsgModel body = new ItemSearchRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemSearch18Async(body, new APICallBack<ItemSearchResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemSearchResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_lookup19_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemLookup19Async") createItemLookup19Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemLookup19Async(
        final ItemLookupRequestMsgModel body,
        final APICallBack<ItemLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemLookupRequestMsgModel body = new ItemLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemLookup19Async(body, new APICallBack<ItemLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_browse_node_lookup20_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createBrowseNodeLookup20Async") createBrowseNodeLookup20Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createBrowseNodeLookup20Async(
        final BrowseNodeLookupRequestMsgModel body,
        final APICallBack<BrowseNodeLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    BrowseNodeLookupRequestMsgModel body = new BrowseNodeLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createBrowseNodeLookup20Async(body, new APICallBack<BrowseNodeLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, BrowseNodeLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_similarity_lookup21_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createSimilarityLookup21Async") createSimilarityLookup21Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createSimilarityLookup21Async(
        final SimilarityLookupRequestMsgModel body,
        final APICallBack<SimilarityLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    SimilarityLookupRequestMsgModel body = new SimilarityLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createSimilarityLookup21Async(body, new APICallBack<SimilarityLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, SimilarityLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_get22_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartGet22Async") createCartGet22Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartGet22Async(
        final CartGetRequestMsgModel body,
        final APICallBack<CartGetResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartGetRequestMsgModel body = new CartGetRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartGet22Async(body, new APICallBack<CartGetResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartGetResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_add23_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartAdd23Async") createCartAdd23Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartAdd23Async(
        final CartAddRequestMsgModel body,
        final APICallBack<CartAddResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartAddRequestMsgModel body = new CartAddRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartAdd23Async(body, new APICallBack<CartAddResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartAddResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_create24_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartCreate24Async") createCartCreate24Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartCreate24Async(
        final CartCreateRequestMsgModel body,
        final APICallBack<CartCreateResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartCreateRequestMsgModel body = new CartCreateRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartCreate24Async(body, new APICallBack<CartCreateResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartCreateResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_modify25_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartModify25Async") createCartModify25Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartModify25Async(
        final CartModifyRequestMsgModel body,
        final APICallBack<CartModifyResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartModifyRequestMsgModel body = new CartModifyRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartModify25Async(body, new APICallBack<CartModifyResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartModifyResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_clear26_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartClear26Async") createCartClear26Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartClear26Async(
        final CartClearRequestMsgModel body,
        final APICallBack<CartClearResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartClearRequestMsgModel body = new CartClearRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartClear26Async(body, new APICallBack<CartClearResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartClearResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_search27_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemSearch27Async") createItemSearch27Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemSearch27Async(
        final ItemSearchRequestMsgModel body,
        final APICallBack<ItemSearchResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemSearchRequestMsgModel body = new ItemSearchRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemSearch27Async(body, new APICallBack<ItemSearchResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemSearchResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_lookup28_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemLookup28Async") createItemLookup28Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemLookup28Async(
        final ItemLookupRequestMsgModel body,
        final APICallBack<ItemLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemLookupRequestMsgModel body = new ItemLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemLookup28Async(body, new APICallBack<ItemLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_browse_node_lookup29_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createBrowseNodeLookup29Async") createBrowseNodeLookup29Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createBrowseNodeLookup29Async(
        final BrowseNodeLookupRequestMsgModel body,
        final APICallBack<BrowseNodeLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    BrowseNodeLookupRequestMsgModel body = new BrowseNodeLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createBrowseNodeLookup29Async(body, new APICallBack<BrowseNodeLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, BrowseNodeLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_similarity_lookup30_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createSimilarityLookup30Async") createSimilarityLookup30Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createSimilarityLookup30Async(
        final SimilarityLookupRequestMsgModel body,
        final APICallBack<SimilarityLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    SimilarityLookupRequestMsgModel body = new SimilarityLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createSimilarityLookup30Async(body, new APICallBack<SimilarityLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, SimilarityLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_get31_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartGet31Async") createCartGet31Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartGet31Async(
        final CartGetRequestMsgModel body,
        final APICallBack<CartGetResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartGetRequestMsgModel body = new CartGetRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartGet31Async(body, new APICallBack<CartGetResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartGetResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_add32_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartAdd32Async") createCartAdd32Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartAdd32Async(
        final CartAddRequestMsgModel body,
        final APICallBack<CartAddResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartAddRequestMsgModel body = new CartAddRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartAdd32Async(body, new APICallBack<CartAddResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartAddResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_create33_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartCreate33Async") createCartCreate33Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartCreate33Async(
        final CartCreateRequestMsgModel body,
        final APICallBack<CartCreateResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartCreateRequestMsgModel body = new CartCreateRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartCreate33Async(body, new APICallBack<CartCreateResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartCreateResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_modify34_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartModify34Async") createCartModify34Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartModify34Async(
        final CartModifyRequestMsgModel body,
        final APICallBack<CartModifyResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartModifyRequestMsgModel body = new CartModifyRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartModify34Async(body, new APICallBack<CartModifyResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartModifyResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_clear35_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartClear35Async") createCartClear35Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartClear35Async(
        final CartClearRequestMsgModel body,
        final APICallBack<CartClearResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartClearRequestMsgModel body = new CartClearRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartClear35Async(body, new APICallBack<CartClearResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartClearResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_search36_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemSearch36Async") createItemSearch36Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemSearch36Async(
        final ItemSearchRequestMsgModel body,
        final APICallBack<ItemSearchResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemSearchRequestMsgModel body = new ItemSearchRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemSearch36Async(body, new APICallBack<ItemSearchResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemSearchResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_lookup37_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemLookup37Async") createItemLookup37Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemLookup37Async(
        final ItemLookupRequestMsgModel body,
        final APICallBack<ItemLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemLookupRequestMsgModel body = new ItemLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemLookup37Async(body, new APICallBack<ItemLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_browse_node_lookup38_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createBrowseNodeLookup38Async") createBrowseNodeLookup38Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createBrowseNodeLookup38Async(
        final BrowseNodeLookupRequestMsgModel body,
        final APICallBack<BrowseNodeLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    BrowseNodeLookupRequestMsgModel body = new BrowseNodeLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createBrowseNodeLookup38Async(body, new APICallBack<BrowseNodeLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, BrowseNodeLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_similarity_lookup39_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createSimilarityLookup39Async") createSimilarityLookup39Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createSimilarityLookup39Async(
        final SimilarityLookupRequestMsgModel body,
        final APICallBack<SimilarityLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    SimilarityLookupRequestMsgModel body = new SimilarityLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createSimilarityLookup39Async(body, new APICallBack<SimilarityLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, SimilarityLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_get40_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartGet40Async") createCartGet40Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartGet40Async(
        final CartGetRequestMsgModel body,
        final APICallBack<CartGetResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartGetRequestMsgModel body = new CartGetRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartGet40Async(body, new APICallBack<CartGetResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartGetResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_add41_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartAdd41Async") createCartAdd41Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartAdd41Async(
        final CartAddRequestMsgModel body,
        final APICallBack<CartAddResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartAddRequestMsgModel body = new CartAddRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartAdd41Async(body, new APICallBack<CartAddResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartAddResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_create42_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartCreate42Async") createCartCreate42Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartCreate42Async(
        final CartCreateRequestMsgModel body,
        final APICallBack<CartCreateResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartCreateRequestMsgModel body = new CartCreateRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartCreate42Async(body, new APICallBack<CartCreateResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartCreateResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_modify43_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartModify43Async") createCartModify43Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartModify43Async(
        final CartModifyRequestMsgModel body,
        final APICallBack<CartModifyResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartModifyRequestMsgModel body = new CartModifyRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartModify43Async(body, new APICallBack<CartModifyResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartModifyResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_clear44_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartClear44Async") createCartClear44Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartClear44Async(
        final CartClearRequestMsgModel body,
        final APICallBack<CartClearResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartClearRequestMsgModel body = new CartClearRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartClear44Async(body, new APICallBack<CartClearResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartClearResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_search45_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemSearch45Async") createItemSearch45Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemSearch45Async(
        final ItemSearchRequestMsgModel body,
        final APICallBack<ItemSearchResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemSearchRequestMsgModel body = new ItemSearchRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemSearch45Async(body, new APICallBack<ItemSearchResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemSearchResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_lookup46_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemLookup46Async") createItemLookup46Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemLookup46Async(
        final ItemLookupRequestMsgModel body,
        final APICallBack<ItemLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemLookupRequestMsgModel body = new ItemLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemLookup46Async(body, new APICallBack<ItemLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_browse_node_lookup47_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createBrowseNodeLookup47Async") createBrowseNodeLookup47Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createBrowseNodeLookup47Async(
        final BrowseNodeLookupRequestMsgModel body,
        final APICallBack<BrowseNodeLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    BrowseNodeLookupRequestMsgModel body = new BrowseNodeLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createBrowseNodeLookup47Async(body, new APICallBack<BrowseNodeLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, BrowseNodeLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_similarity_lookup48_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createSimilarityLookup48Async") createSimilarityLookup48Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createSimilarityLookup48Async(
        final SimilarityLookupRequestMsgModel body,
        final APICallBack<SimilarityLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    SimilarityLookupRequestMsgModel body = new SimilarityLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createSimilarityLookup48Async(body, new APICallBack<SimilarityLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, SimilarityLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_get49_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartGet49Async") createCartGet49Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartGet49Async(
        final CartGetRequestMsgModel body,
        final APICallBack<CartGetResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartGetRequestMsgModel body = new CartGetRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartGet49Async(body, new APICallBack<CartGetResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartGetResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_add50_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartAdd50Async") createCartAdd50Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartAdd50Async(
        final CartAddRequestMsgModel body,
        final APICallBack<CartAddResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartAddRequestMsgModel body = new CartAddRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartAdd50Async(body, new APICallBack<CartAddResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartAddResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_create51_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartCreate51Async") createCartCreate51Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartCreate51Async(
        final CartCreateRequestMsgModel body,
        final APICallBack<CartCreateResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartCreateRequestMsgModel body = new CartCreateRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartCreate51Async(body, new APICallBack<CartCreateResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartCreateResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_modify52_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartModify52Async") createCartModify52Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartModify52Async(
        final CartModifyRequestMsgModel body,
        final APICallBack<CartModifyResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartModifyRequestMsgModel body = new CartModifyRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartModify52Async(body, new APICallBack<CartModifyResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartModifyResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_clear53_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartClear53Async") createCartClear53Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartClear53Async(
        final CartClearRequestMsgModel body,
        final APICallBack<CartClearResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartClearRequestMsgModel body = new CartClearRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartClear53Async(body, new APICallBack<CartClearResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartClearResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_search54_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemSearch54Async") createItemSearch54Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemSearch54Async(
        final ItemSearchRequestMsgModel body,
        final APICallBack<ItemSearchResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemSearchRequestMsgModel body = new ItemSearchRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemSearch54Async(body, new APICallBack<ItemSearchResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemSearchResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_lookup55_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemLookup55Async") createItemLookup55Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemLookup55Async(
        final ItemLookupRequestMsgModel body,
        final APICallBack<ItemLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemLookupRequestMsgModel body = new ItemLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemLookup55Async(body, new APICallBack<ItemLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_browse_node_lookup56_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createBrowseNodeLookup56Async") createBrowseNodeLookup56Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createBrowseNodeLookup56Async(
        final BrowseNodeLookupRequestMsgModel body,
        final APICallBack<BrowseNodeLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    BrowseNodeLookupRequestMsgModel body = new BrowseNodeLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createBrowseNodeLookup56Async(body, new APICallBack<BrowseNodeLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, BrowseNodeLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_similarity_lookup57_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createSimilarityLookup57Async") createSimilarityLookup57Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createSimilarityLookup57Async(
        final SimilarityLookupRequestMsgModel body,
        final APICallBack<SimilarityLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    SimilarityLookupRequestMsgModel body = new SimilarityLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createSimilarityLookup57Async(body, new APICallBack<SimilarityLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, SimilarityLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_get58_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartGet58Async") createCartGet58Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartGet58Async(
        final CartGetRequestMsgModel body,
        final APICallBack<CartGetResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartGetRequestMsgModel body = new CartGetRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartGet58Async(body, new APICallBack<CartGetResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartGetResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_add59_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartAdd59Async") createCartAdd59Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartAdd59Async(
        final CartAddRequestMsgModel body,
        final APICallBack<CartAddResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartAddRequestMsgModel body = new CartAddRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartAdd59Async(body, new APICallBack<CartAddResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartAddResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_create60_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartCreate60Async") createCartCreate60Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartCreate60Async(
        final CartCreateRequestMsgModel body,
        final APICallBack<CartCreateResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartCreateRequestMsgModel body = new CartCreateRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartCreate60Async(body, new APICallBack<CartCreateResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartCreateResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_modify61_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartModify61Async") createCartModify61Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartModify61Async(
        final CartModifyRequestMsgModel body,
        final APICallBack<CartModifyResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartModifyRequestMsgModel body = new CartModifyRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartModify61Async(body, new APICallBack<CartModifyResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartModifyResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_clear62_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartClear62Async") createCartClear62Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartClear62Async(
        final CartClearRequestMsgModel body,
        final APICallBack<CartClearResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartClearRequestMsgModel body = new CartClearRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartClear62Async(body, new APICallBack<CartClearResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartClearResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_search63_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemSearch63Async") createItemSearch63Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemSearch63Async(
        final ItemSearchRequestMsgModel body,
        final APICallBack<ItemSearchResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemSearchRequestMsgModel body = new ItemSearchRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemSearch63Async(body, new APICallBack<ItemSearchResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemSearchResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_lookup64_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemLookup64Async") createItemLookup64Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemLookup64Async(
        final ItemLookupRequestMsgModel body,
        final APICallBack<ItemLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemLookupRequestMsgModel body = new ItemLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemLookup64Async(body, new APICallBack<ItemLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_browse_node_lookup65_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createBrowseNodeLookup65Async") createBrowseNodeLookup65Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createBrowseNodeLookup65Async(
        final BrowseNodeLookupRequestMsgModel body,
        final APICallBack<BrowseNodeLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    BrowseNodeLookupRequestMsgModel body = new BrowseNodeLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createBrowseNodeLookup65Async(body, new APICallBack<BrowseNodeLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, BrowseNodeLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_similarity_lookup66_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createSimilarityLookup66Async") createSimilarityLookup66Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createSimilarityLookup66Async(
        final SimilarityLookupRequestMsgModel body,
        final APICallBack<SimilarityLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    SimilarityLookupRequestMsgModel body = new SimilarityLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createSimilarityLookup66Async(body, new APICallBack<SimilarityLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, SimilarityLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_get67_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartGet67Async") createCartGet67Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartGet67Async(
        final CartGetRequestMsgModel body,
        final APICallBack<CartGetResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartGetRequestMsgModel body = new CartGetRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartGet67Async(body, new APICallBack<CartGetResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartGetResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_add68_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartAdd68Async") createCartAdd68Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartAdd68Async(
        final CartAddRequestMsgModel body,
        final APICallBack<CartAddResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartAddRequestMsgModel body = new CartAddRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartAdd68Async(body, new APICallBack<CartAddResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartAddResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_create69_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartCreate69Async") createCartCreate69Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartCreate69Async(
        final CartCreateRequestMsgModel body,
        final APICallBack<CartCreateResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartCreateRequestMsgModel body = new CartCreateRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartCreate69Async(body, new APICallBack<CartCreateResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartCreateResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_modify70_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartModify70Async") createCartModify70Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartModify70Async(
        final CartModifyRequestMsgModel body,
        final APICallBack<CartModifyResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartModifyRequestMsgModel body = new CartModifyRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartModify70Async(body, new APICallBack<CartModifyResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartModifyResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_clear71_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartClear71Async") createCartClear71Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartClear71Async(
        final CartClearRequestMsgModel body,
        final APICallBack<CartClearResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartClearRequestMsgModel body = new CartClearRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartClear71Async(body, new APICallBack<CartClearResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartClearResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_search72_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemSearch72Async") createItemSearch72Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemSearch72Async(
        final ItemSearchRequestMsgModel body,
        final APICallBack<ItemSearchResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemSearchRequestMsgModel body = new ItemSearchRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemSearch72Async(body, new APICallBack<ItemSearchResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemSearchResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_lookup73_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemLookup73Async") createItemLookup73Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemLookup73Async(
        final ItemLookupRequestMsgModel body,
        final APICallBack<ItemLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemLookupRequestMsgModel body = new ItemLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemLookup73Async(body, new APICallBack<ItemLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_browse_node_lookup74_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createBrowseNodeLookup74Async") createBrowseNodeLookup74Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createBrowseNodeLookup74Async(
        final BrowseNodeLookupRequestMsgModel body,
        final APICallBack<BrowseNodeLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    BrowseNodeLookupRequestMsgModel body = new BrowseNodeLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createBrowseNodeLookup74Async(body, new APICallBack<BrowseNodeLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, BrowseNodeLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_similarity_lookup75_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createSimilarityLookup75Async") createSimilarityLookup75Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createSimilarityLookup75Async(
        final SimilarityLookupRequestMsgModel body,
        final APICallBack<SimilarityLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    SimilarityLookupRequestMsgModel body = new SimilarityLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createSimilarityLookup75Async(body, new APICallBack<SimilarityLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, SimilarityLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_get76_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartGet76Async") createCartGet76Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartGet76Async(
        final CartGetRequestMsgModel body,
        final APICallBack<CartGetResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartGetRequestMsgModel body = new CartGetRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartGet76Async(body, new APICallBack<CartGetResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartGetResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_add77_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartAdd77Async") createCartAdd77Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartAdd77Async(
        final CartAddRequestMsgModel body,
        final APICallBack<CartAddResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartAddRequestMsgModel body = new CartAddRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartAdd77Async(body, new APICallBack<CartAddResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartAddResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_create78_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartCreate78Async") createCartCreate78Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartCreate78Async(
        final CartCreateRequestMsgModel body,
        final APICallBack<CartCreateResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartCreateRequestMsgModel body = new CartCreateRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartCreate78Async(body, new APICallBack<CartCreateResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartCreateResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_modify79_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartModify79Async") createCartModify79Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartModify79Async(
        final CartModifyRequestMsgModel body,
        final APICallBack<CartModifyResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartModifyRequestMsgModel body = new CartModifyRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartModify79Async(body, new APICallBack<CartModifyResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartModifyResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_clear80_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartClear80Async") createCartClear80Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartClear80Async(
        final CartClearRequestMsgModel body,
        final APICallBack<CartClearResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartClearRequestMsgModel body = new CartClearRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartClear80Async(body, new APICallBack<CartClearResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartClearResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_search81_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemSearch81Async") createItemSearch81Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemSearch81Async(
        final ItemSearchRequestMsgModel body,
        final APICallBack<ItemSearchResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemSearchRequestMsgModel body = new ItemSearchRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemSearch81Async(body, new APICallBack<ItemSearchResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemSearchResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_lookup82_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemLookup82Async") createItemLookup82Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemLookup82Async(
        final ItemLookupRequestMsgModel body,
        final APICallBack<ItemLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemLookupRequestMsgModel body = new ItemLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemLookup82Async(body, new APICallBack<ItemLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_browse_node_lookup83_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createBrowseNodeLookup83Async") createBrowseNodeLookup83Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createBrowseNodeLookup83Async(
        final BrowseNodeLookupRequestMsgModel body,
        final APICallBack<BrowseNodeLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    BrowseNodeLookupRequestMsgModel body = new BrowseNodeLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createBrowseNodeLookup83Async(body, new APICallBack<BrowseNodeLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, BrowseNodeLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_similarity_lookup84_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createSimilarityLookup84Async") createSimilarityLookup84Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createSimilarityLookup84Async(
        final SimilarityLookupRequestMsgModel body,
        final APICallBack<SimilarityLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    SimilarityLookupRequestMsgModel body = new SimilarityLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createSimilarityLookup84Async(body, new APICallBack<SimilarityLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, SimilarityLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_get85_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartGet85Async") createCartGet85Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartGet85Async(
        final CartGetRequestMsgModel body,
        final APICallBack<CartGetResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartGetRequestMsgModel body = new CartGetRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartGet85Async(body, new APICallBack<CartGetResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartGetResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_add86_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartAdd86Async") createCartAdd86Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartAdd86Async(
        final CartAddRequestMsgModel body,
        final APICallBack<CartAddResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartAddRequestMsgModel body = new CartAddRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartAdd86Async(body, new APICallBack<CartAddResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartAddResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_create87_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartCreate87Async") createCartCreate87Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartCreate87Async(
        final CartCreateRequestMsgModel body,
        final APICallBack<CartCreateResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartCreateRequestMsgModel body = new CartCreateRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartCreate87Async(body, new APICallBack<CartCreateResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartCreateResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_modify88_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartModify88Async") createCartModify88Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartModify88Async(
        final CartModifyRequestMsgModel body,
        final APICallBack<CartModifyResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartModifyRequestMsgModel body = new CartModifyRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartModify88Async(body, new APICallBack<CartModifyResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartModifyResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_clear89_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartClear89Async") createCartClear89Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartClear89Async(
        final CartClearRequestMsgModel body,
        final APICallBack<CartClearResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartClearRequestMsgModel body = new CartClearRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartClear89Async(body, new APICallBack<CartClearResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartClearResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_search90_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemSearch90Async") createItemSearch90Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemSearch90Async(
        final ItemSearchRequestMsgModel body,
        final APICallBack<ItemSearchResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemSearchRequestMsgModel body = new ItemSearchRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemSearch90Async(body, new APICallBack<ItemSearchResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemSearchResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_item_lookup91_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createItemLookup91Async") createItemLookup91Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createItemLookup91Async(
        final ItemLookupRequestMsgModel body,
        final APICallBack<ItemLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    ItemLookupRequestMsgModel body = new ItemLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createItemLookup91Async(body, new APICallBack<ItemLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, ItemLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_browse_node_lookup92_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createBrowseNodeLookup92Async") createBrowseNodeLookup92Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createBrowseNodeLookup92Async(
        final BrowseNodeLookupRequestMsgModel body,
        final APICallBack<BrowseNodeLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    BrowseNodeLookupRequestMsgModel body = new BrowseNodeLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createBrowseNodeLookup92Async(body, new APICallBack<BrowseNodeLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, BrowseNodeLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_similarity_lookup93_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createSimilarityLookup93Async") createSimilarityLookup93Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createSimilarityLookup93Async(
        final SimilarityLookupRequestMsgModel body,
        final APICallBack<SimilarityLookupResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    SimilarityLookupRequestMsgModel body = new SimilarityLookupRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createSimilarityLookup93Async(body, new APICallBack<SimilarityLookupResponseMsgModel>() {
        public void onSuccess(HttpContext context, SimilarityLookupResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_get94_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartGet94Async") createCartGet94Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartGet94Async(
        final CartGetRequestMsgModel body,
        final APICallBack<CartGetResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartGetRequestMsgModel body = new CartGetRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartGet94Async(body, new APICallBack<CartGetResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartGetResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_add95_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartAdd95Async") createCartAdd95Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartAdd95Async(
        final CartAddRequestMsgModel body,
        final APICallBack<CartAddResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartAddRequestMsgModel body = new CartAddRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartAdd95Async(body, new APICallBack<CartAddResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartAddResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_create96_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartCreate96Async") createCartCreate96Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartCreate96Async(
        final CartCreateRequestMsgModel body,
        final APICallBack<CartCreateResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartCreateRequestMsgModel body = new CartCreateRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartCreate96Async(body, new APICallBack<CartCreateResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartCreateResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_modify97_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartModify97Async") createCartModify97Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartModify97Async(
        final CartModifyRequestMsgModel body,
        final APICallBack<CartModifyResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartModifyRequestMsgModel body = new CartModifyRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartModify97Async(body, new APICallBack<CartModifyResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartModifyResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_cart_clear98_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.AWSECommerceServiceBindingController.createCartClear98Async") createCartClear98Async

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createCartClear98Async(
        final CartClearRequestMsgModel body,
        final APICallBack<CartClearResponseMsgModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    CartClearRequestMsgModel body = new CartClearRequestMsgModel();
    // Invoking the API call with sample inputs
    aWSECommerceServiceBinding.createCartClear98Async(body, new APICallBack<CartClearResponseMsgModel>() {
        public void onSuccess(HttpContext context, CartClearResponseMsgModel response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


[Back to List of Controllers](#list_of_controllers)

## <a name="o_auth_authorization_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.amazon.webservices.controllers.OAuthAuthorizationController") OAuthAuthorizationController

### Get singleton instance

The singleton instance of the ``` OAuthAuthorizationController ``` class can be accessed from the API Client.

```java
OAuthAuthorizationController oAuthAuthorization = client.getOAuthAuthorization();
```

### <a name="create_request_token_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.OAuthAuthorizationController.createRequestTokenAsync") createRequestTokenAsync

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestTokenAsync(
        final CreateRequestTokenInput input,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthTokenModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
CreateRequestTokenInput collect = new CreateRequestTokenInput();

String authorization = "Authorization";
collect.setAuthorization(authorization);

String code = "code";
collect.setCode(code);

String redirectUri = "redirect_uri";
collect.setRedirectUri(redirectUri);

// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestTokenAsync(collect, , formParams, new APICallBack<OAuthTokenModel>() {
    public void onSuccess(HttpContext context, OAuthTokenModel response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
}
);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.OAuthAuthorizationController.createRefreshTokenAsync") createRefreshTokenAsync

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```java
void createRefreshTokenAsync(
        final CreateRefreshTokenInput input,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthTokenModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
CreateRefreshTokenInput collect = new CreateRefreshTokenInput();

String authorization = "Authorization";
collect.setAuthorization(authorization);

String refreshToken = "refresh_token";
collect.setRefreshToken(refreshToken);

String scope = "scope";
collect.setScope(scope);

// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRefreshTokenAsync(collect, , formParams, new APICallBack<OAuthTokenModel>() {
    public void onSuccess(HttpContext context, OAuthTokenModel response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
}
);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.OAuthAuthorizationController.createRequestTokenAsync") createRequestTokenAsync

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestTokenAsync(
        final CreateRequestTokenInput input,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthTokenModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
CreateRequestTokenInput collect = new CreateRequestTokenInput();

String authorization = "Authorization";
collect.setAuthorization(authorization);

String code = "code";
collect.setCode(code);

String redirectUri = "redirect_uri";
collect.setRedirectUri(redirectUri);

// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestTokenAsync(collect, , formParams, new APICallBack<OAuthTokenModel>() {
    public void onSuccess(HttpContext context, OAuthTokenModel response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
}
);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token_async"></a>![Method: ](https://apidocs.io/img/method.png "com.amazon.webservices.controllers.OAuthAuthorizationController.createRefreshTokenAsync") createRefreshTokenAsync

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```java
void createRefreshTokenAsync(
        final CreateRefreshTokenInput input,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthTokenModel> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
CreateRefreshTokenInput collect = new CreateRefreshTokenInput();

String authorization = "Authorization";
collect.setAuthorization(authorization);

String refreshToken = "refresh_token";
collect.setRefreshToken(refreshToken);

String scope = "scope";
collect.setScope(scope);

// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRefreshTokenAsync(collect, , formParams, new APICallBack<OAuthTokenModel>() {
    public void onSuccess(HttpContext context, OAuthTokenModel response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
}
);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



[Back to List of Controllers](#list_of_controllers)



