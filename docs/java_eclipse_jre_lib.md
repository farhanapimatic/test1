# Getting started

## How to Build

The generated code uses a few Maven dependencies e.g., Jackson, UniRest,
and Apache HttpClient. The reference to these dependencies is already
added in the pom.xml file will be installed automatically. Therefore,
you will need internet access for a successful build.

* In order to open the client library in Eclipse click on ``` File -> Import ```.

![Importing SDK into Eclipse - Step 1](https://apidocs.io/illustration/java?step=import0&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

* In the import dialog, select ``` Existing Java Project ``` and click ``` Next ```.

![Importing SDK into Eclipse - Step 2](https://apidocs.io/illustration/java?step=import1&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

* Browse to locate the folder containing the source code. Select the detected location of the project and click ``` Finish ```.

![Importing SDK into Eclipse - Step 3](https://apidocs.io/illustration/java?step=import2&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

* Upon successful import, the project will be automatically built by Eclipse after automatically resolving the dependencies.

![Importing SDK into Eclipse - Step 4](https://apidocs.io/illustration/java?step=import3&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

## How to Use

The following section explains how to use the PurchaseOrderService library in a new console project.

### 1. Starting a new project

For starting a new project, click the menu command ``` File > New > Project ```.

![Add a new project in Eclipse](https://apidocs.io/illustration/java?step=createNewProject0&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Next, choose ``` Maven > Maven Project ```and click ``` Next ```.

![Create a new Maven Project - Step 1](https://apidocs.io/illustration/java?step=createNewProject1&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Here, make sure to use the current workspace by choosing ``` Use default Workspace location ```, as shown in the picture below and click ``` Next ```.

![Create a new Maven Project - Step 2](https://apidocs.io/illustration/java?step=createNewProject2&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Following this, select the *quick start* project type to create a simple project with an existing class and a ``` main ``` method. To do this, choose ``` maven-archetype-quickstart ``` item from the list and click ``` Next ```.

![Create a new Maven Project - Step 3](https://apidocs.io/illustration/java?step=createNewProject3&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

In the last step, provide a ``` Group Id ``` and ``` Artifact Id ``` as shown in the picture below and click ``` Finish ```.

![Create a new Maven Project - Step 4](https://apidocs.io/illustration/java?step=createNewProject4&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

### 2. Add reference of the library project

The created Maven project manages its dependencies using its ``` pom.xml ``` file. In order to add a dependency on the *PurchaseOrderServiceLib* client library, double click on the ``` pom.xml ``` file in the ``` Package Explorer ```. Opening the ``` pom.xml ``` file will render a graphical view on the cavas. Here, switch to the ``` Dependencies ``` tab and click the ``` Add ``` button as shown in the picture below.

![Adding dependency to the client library - Step 1](https://apidocs.io/illustration/java?step=testProject0&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Clicking the ``` Add ``` button will open a dialog where you need to specify PurchaseOrderService in ``` Group Id ``` and PurchaseOrderServiceLib in the ``` Artifact Id ``` fields. Once added click ``` OK ```. Save the ``` pom.xml ``` file.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/java?step=testProject1&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

### 3. Write sample code

Once the ``` SimpleConsoleApp ``` is created, a file named ``` App.java ``` will be visible in the *Package Explorer* with a ``` main ``` method. This is the entry point for the execution of the created project.
Here, you can add code to initialize the client library and instantiate a *Controller* class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/java?step=testProject2&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

## How to Test

The generated code and the server can be tested using automatically generated test cases. 
JUnit is used as the testing framework and test runner.

In Eclipse, for running the tests do the following:

1. Select the project *PurchaseOrderServiceLib* from the package explorer.
2. Select "Run -> Run as -> JUnit Test" or use "Alt + Shift + X" followed by "T" to run the Tests.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthClientId | OAuth 2 Client ID |
| oAuthClientSecret | OAuth 2 Client Secret |



API client can be initialized as following.

```java
// Configuration parameters and credentials
String oAuthClientId = "oAuthClientId"; // OAuth 2 Client ID
String oAuthClientSecret = "oAuthClientSecret"; // OAuth 2 Client Secret

PurchaseOrderServiceClient client = new PurchaseOrderServiceClient(oAuthClientId, oAuthClientSecret);
```

You must authorize now authorize the client.

### Authorizing your client

This SDK uses *OAuth 2.0 authorization* to authorize the client.

The `authorize()` method will exchange the OAuth client credentials for an *access token*.
The access token is an object containing information for authorizing client requests.

 You must pass the *[scopes](#scopes)* for which you need permission to access.
```java
try {
    client.auth().authorize(scopes);
} catch (Throwable e) {
    // TODO Handle exception
}
```

The client can now make authorized endpoint calls.


### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the `org.example.Models.OAuthScopeEnum` enumeration.

| Scope Name | Description |
| --- | --- |
| `SF` |  |

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

```java
// store token
storeAccessToken(org.example.Configuration.oAuthToken);
```

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token in `Configuration` along with the other configuration parameters before creating the client:

```java
// load token later...
org.example.Configuration.oAuthToken = loadAccessToken();

// Set other configuration, then instantiate client
client = new PurchaseOrderServiceClient();
```

### Complete example

```java
package com.example;

import java.util.LinkedList;
import java.util.List;

import org.example.models.OAuthScopeEnum;

public class Main {
    public Main() {
        // Configuration parameters and credentials
        String oAuthClientId = "oAuthClientId"; // OAuth 2 Client ID
        String oAuthClientSecret = "oAuthClientSecret"; // OAuth 2 Client Secret
        
        PurchaseOrderServiceClient client = new PurchaseOrderServiceClient(oAuthClientId, oAuthClientSecret);

        List<OAuthScopeEnum> scopes = new LinkedList<OAuthScopeEnum>();
        scopes.add(OAuthScopeEnum.SF);
        
        try {
            // obtain a new access token
            client.auth().authorize(scopes, null);
        } catch (Throwable e) {
            // TODO Catch auth error
        }
        
        // the client is now authorized; you can use client to make endpoint calls
    }
}
```



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [PurchaseOrderBindingController](#purchase_order_binding_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="purchase_order_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png "org.example.controllers.PurchaseOrderBindingController") PurchaseOrderBindingController

### Get singleton instance

The singleton instance of the ``` PurchaseOrderBindingController ``` class can be accessed from the API Client.

```java
PurchaseOrderBindingController purchaseOrderBinding = client.getPurchaseOrderBinding();
```

### <a name="create_order_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.PurchaseOrderBindingController.createOrderAsync") createOrderAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createOrderAsync(
        final PurchaseOrder body,
        final APICallBack<OrderConfirmation> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    PurchaseOrder body = new PurchaseOrder();
    // Invoking the API call with sample inputs
    purchaseOrderBinding.createOrderAsync(body, new APICallBack<OrderConfirmation>() {
        public void onSuccess(HttpContext context, OrderConfirmation response) {
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


### <a name="create_order_status_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.PurchaseOrderBindingController.createOrderStatusAsync") createOrderStatusAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createOrderStatusAsync(
        final String new2,
        final String new3,
        final String new1,
        final GetOrderStatus body,
        final APICallBack<GetOrderStatusResponse> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| new2 |  ``` Required ```  | TODO: Add a parameter description |
| new3 |  ``` Required ```  | TODO: Add a parameter description |
| new1 |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    String new2 = "new2";
    String new3 = "new3";
    String new1 = "new1";
    GetOrderStatus body = new GetOrderStatus();
    // Invoking the API call with sample inputs
    purchaseOrderBinding.createOrderStatusAsync(new2, new3, new1, body, new APICallBack<GetOrderStatusResponse>() {
        public void onSuccess(HttpContext context, GetOrderStatusResponse response) {
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
| 500 | Error in retrieving response |



[Back to List of Controllers](#list_of_controllers)

## <a name="o_auth_authorization_controller"></a>![Class: ](https://apidocs.io/img/class.png "org.example.controllers.OAuthAuthorizationController") OAuthAuthorizationController

### Get singleton instance

The singleton instance of the ``` OAuthAuthorizationController ``` class can be accessed from the API Client.

```java
OAuthAuthorizationController oAuthAuthorization = client.getOAuthAuthorization();
```

### <a name="create_request_token_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.OAuthAuthorizationController.createRequestTokenAsync") createRequestTokenAsync

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestTokenAsync(
        final String authorization,
        final String scope,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
String authorization = "Authorization";
String scope = "scope";
// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestTokenAsync(authorization, scope, formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token1_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.OAuthAuthorizationController.createRequestToken1Async") createRequestToken1Async

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestToken1Async(
        final String authorization,
        final String scope,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
String authorization = "Authorization";
String scope = "scope";
// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestToken1Async(authorization, scope, formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token2_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.OAuthAuthorizationController.createRequestToken2Async") createRequestToken2Async

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestToken2Async(
        final String authorization,
        final String scope,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
String authorization = "Authorization";
String scope = "scope";
// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestToken2Async(authorization, scope, formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token11_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.OAuthAuthorizationController.createRequestToken11Async") createRequestToken11Async

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestToken11Async(
        final String authorization,
        final String scope,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
String authorization = "Authorization";
String scope = "scope";
// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestToken11Async(authorization, scope, formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token21_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.OAuthAuthorizationController.createRequestToken21Async") createRequestToken21Async

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestToken21Async(
        final String authorization,
        final String scope,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
String authorization = "Authorization";
String scope = "scope";
// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestToken21Async(authorization, scope, formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token11_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.OAuthAuthorizationController.createRequestToken11Async") createRequestToken11Async

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestToken11Async(
        final String authorization,
        final String scope,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
String authorization = "Authorization";
String scope = "scope";
// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestToken11Async(authorization, scope, formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token1_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.OAuthAuthorizationController.createRequestToken1Async") createRequestToken1Async

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestToken1Async(
        final String authorization,
        final String scope,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
String authorization = "Authorization";
String scope = "scope";
// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestToken1Async(authorization, scope, formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token2_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.OAuthAuthorizationController.createRequestToken2Async") createRequestToken2Async

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestToken2Async(
        final String authorization,
        final String scope,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
String authorization = "Authorization";
String scope = "scope";
// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestToken2Async(authorization, scope, formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token3_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.OAuthAuthorizationController.createRequestToken3Async") createRequestToken3Async

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestToken3Async(
        final String authorization,
        final String scope,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
String authorization = "Authorization";
String scope = "scope";
// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestToken3Async(authorization, scope, formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.OAuthAuthorizationController.createRequestTokenAsync") createRequestTokenAsync

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestTokenAsync(
        final String authorization,
        final String scope,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
String authorization = "Authorization";
String scope = "scope";
// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestTokenAsync(authorization, scope, formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



[Back to List of Controllers](#list_of_controllers)



