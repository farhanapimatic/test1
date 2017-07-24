# Getting started

Simple calculator API hosted on APIMATIC

## How to Build

The generated code uses a few Gradle dependencies e.g., Jackson, Volley,
and Apache HttpClient. The reference to these dependencies is already
added in the build.gradle file will be installed automatically. Therefore,
you will need internet access for a successful build.

* In order to open the client library in Android Studio click on ``` Open an Existing Android Project ```.

![Importing SDK into Android Studio - Step 1](https://apidocs.io/illustration/android?step=import1&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

* Browse to locate the folder containing the source code. Select the location of the APIMATICCalculator gradle project and click ``` Ok ```.

![Importing SDK into Android Studio - Step 2](https://apidocs.io/illustration/android?step=import2&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

* Upon successful import, the project can be built by clicking on ``` Build > Make Project ``` or  pressing ``` Ctrl + F9 ```.

![Importing SDK into Android Studio - Step 3](https://apidocs.io/illustration/android?step=import3&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

## How to Use

The following section explains how to use the APIMATICCalculator library in a new project.

### 1. Starting a new project 

For starting a new project, click on ``` Create New Android Studio Project ```.

![Add a new project in Android Studio - Step 1](https://apidocs.io/illustration/android?step=createNewProject0&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

Here, configure the new project by adding the name, domain and location of the sample application followed by clicking ``` Next ```.

![Create a new Android Studio Project - Step 2](https://apidocs.io/illustration/android?step=createNewProject1&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

Following this, select the ``` Phone and Tablet ```` option as shown in the illustration below and click ``` Next ```. 

![Create a new Android Studio Project - Step 3](https://apidocs.io/illustration/android?step=createNewProject2&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

In the following step, choose ``` Empty Activity ``` as the activity type and click ``` Next ```.

![Create a new Android Studio Project - Step 4](https://apidocs.io/illustration/android?step=createNewProject3&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

In this step, provide an ``` Activity Name ``` and ``` Layout Name ``` and click ``` Finish ```.  This would take you to the newly created project.

![Create a new Android Studio Project - Step 4](https://apidocs.io/illustration/android?step=createNewProject4&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

### 2. Add reference of the library project

In order to add a dependency to this sample application, click on the android button shown in the project explorer on the left side as shown in the picture. Click on ``` Project ``` in the drop down that emerges.  

![Adding dependency to the client library - Step 1](https://apidocs.io/illustration/android?step=testProject0&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

Right click the sample application in the project explorer and click on ``` New > Module ```  as shown in the picture.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/android?step=testProject1&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

Choose ``` Import Gradle Project ``` and click ``` Next ```.

![Adding dependency to the client library - Step 3](https://apidocs.io/illustration/android?step=testProject2&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

Click on ``` Finish ``` which would take you back to the sample application with the refernced SDK. 

![Adding dependency to the client library - Step 4](https://apidocs.io/illustration/android?step=testProject3&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

In the following step naigate to the ``` SampleApplication >  app > build.gradle ``` file and add the following line ```compile project(path: ':APIMATICCalculator')``` to the dependencies section as shown in the illustration below.

![Adding dependency to the client library - Step 5](https://apidocs.io/illustration/android?step=testProject4&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

Finally, press ``` Sync Now ``` in the warning visible as shown in the picture below.

![Adding dependency to the client library - Step 6](https://apidocs.io/illustration/android?step=testProject5&workspaceFolder=APIMATIC%20Calculator&workspaceName=APIMATICCalculator&projectName=APIMATICCalculatorLib&rootNamespace=io.apimatic.examples)

### 3. Write sample code

Once the ``` SampleApplication ``` is created, a file named ``` SampleApplication > app > src > main > java > MainActivity ``` will be visible in the *Project Explorer* with an ``` onCreate ``` method. This is the entry point for the execution of the created project.
Here, you can add code to initialize the client library and instantiate a *Controller* class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

## How to Test

The generated code and the server can be tested using automatically generated test cases. 
JUnit is used as the testing framework and test runner.

In Android Studio, for running the tests do the following:

1. Right click on *SampleApplication > APIMATICCalculatorLib > androidTest > java)* from the project explorer.
2. Select "Run All Tests" or use "Ctrl + Shift + F10" to run the Tests.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| gfdsfkl | sd |
| dsfsdf | TODO: add a description |
| oAuthClientId | OAuth 2 Client ID |
| oAuthClientSecret | OAuth 2 Client Secret |
| oAuthUsername | OAuth 2 Resource Owner Username |
| oAuthPassword | OAuth 2 Resource Owner Password |



API client can be initialized as following. The `appContext` being passed is the Android application [`Context`](https://developer.android.com/reference/android/content/Context.html).

```java
// Configuration parameters and credentials
String gfdsfkl = "gfdsfkl"; // sd
String dsfsdf = "ds";
String oAuthClientId = "oAuthClientId"; // OAuth 2 Client ID
String oAuthClientSecret = "oAuthClientSecret"; // OAuth 2 Client Secret
String oAuthUsername = "oAuthUsername"; // OAuth 2 Resource Owner Username
String oAuthPassword = "oAuthPassword"; // OAuth 2 Resource Owner Password

io.apimatic.examples.Configuration.initialize(appContext);
APIMATICCalculatorClient client = new APIMATICCalculatorClient(gfdsfkl, dsfsdf, oAuthClientId, oAuthClientSecret, oAuthUsername, oAuthPassword);
```

You must authorize now authorize the client.

### Authorizing your client

Your application must obtain user authorization before it can execute an endpoint call.
This SDK uses *OAuth 2.0 authorization* to authorize the client.

The `authorize()` method will exchange the user's credentials for an *access token*.
The access token is an object containing information for authorizing client requests and refreshing the token itself.


```java
client.auth().authorize(null, new APICallBack<OAuthToken>() {
                    
    @Override
    public void onSuccess(HttpContext context, OAuthToken response) {
        // TODO Do something after the client is authorized
    }
                    
    @Override
    public void onFailure(HttpContext context, Throwable error) {
        // TODO Handle failure
    }
});
```

The client can now make authorized endpoint calls.

### Refreshing token

An access token may expire after sometime. To extend its lifetime, you must refresh the token.

```java
if(client.auth().isTokenExpired()) {
    client.auth().refreshToken(new APICallBack<OAuthToken>() {
                    
        @Override
        public void onSuccess(HttpContext context, OAuthToken response) {
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
storeAccessToken(io.apimatic.examples.Configuration.oAuthToken);
```

However, since the the SDK will attempt to automatically refresh the token when it expires, it is recommended that you register a *token update callback* to detect any change to the access token.

```java
io.apimatic.examples.Configuration.oAuthTokenUpdateCallBack = new io.apimatic.examples.OAuthTokenUpdateCallBack() {
    public void tokenUpdate(OAuthToken oAuthToken) {
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
io.apimatic.examples.Configuration.oAuthToken = loadAccessToken();

// Set other configuration, then instantiate client
APIMATICCalculatorClient client = new APIMATICCalculatorClient();
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [APIController](#api_controller)
* [SimpleCalculatorController](#simple_calculator_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png "io.apimatic.examples.controllers.APIController") APIController

### Get singleton instance

The singleton instance of the ``` APIController ``` class can be accessed from the API Client.

```java
APIController client = client.getClient();
```

### <a name="new_async"></a>![Method: ](https://apidocs.io/img/method.png "io.apimatic.examples.controllers.APIController.newAsync") newAsync

> TODO: Add a method description


```java
void newAsync(
        final NewInput input,
        final APICallBack<DynamicResponse> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
NewInput collect = new NewInput();

    NewRequest body = new NewRequest();
collect.setBody(body);

    String cacheControl = "cache-control";
collect.setCacheControl(cacheControl);

    String contentType = "content-type";
collect.setContentType(contentType);

    String postmanToken = "postman-token";
collect.setPostmanToken(postmanToken);

    // Invoking the API call with sample inputs
    client.newAsync(collect, new APICallBack<DynamicResponse>() {
        public void onSuccess(HttpContext context, DynamicResponse response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    }
);
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


[Back to List of Controllers](#list_of_controllers)

## <a name="simple_calculator_controller"></a>![Class: ](https://apidocs.io/img/class.png "io.apimatic.examples.controllers.SimpleCalculatorController") SimpleCalculatorController

### Get singleton instance

The singleton instance of the ``` SimpleCalculatorController ``` class can be accessed from the API Client.

```java
SimpleCalculatorController simpleCalculator = client.getSimpleCalculator();
```

### <a name="get_calculate_async"></a>![Method: ](https://apidocs.io/img/method.png "io.apimatic.examples.controllers.SimpleCalculatorController.getCalculateAsync") getCalculateAsync

> Calculates the expression using the specified operation.


```java
void getCalculateAsync(
        final GetCalculateInput input,
        final APICallBack<Double> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| operation |  ``` Required ```  | The operator to apply on the variables |
| x |  ``` Required ```  | The LHS value |
| y |  ``` Required ```  | The RHS value |


#### Example Usage

```java
GetCalculateInput collect = new GetCalculateInput();

OperationTypeEnum operation = OperationTypeEnum.fromString("MULTIPLY");
collect.setOperation(operation);

double x = 4;
collect.setX(x);

double y = 5;
collect.setY(y);

// Invoking the API call with sample inputs
simpleCalculator.getCalculateAsync(collect, new APICallBack<Double>() {
    public void onSuccess(HttpContext context, Double response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
}
);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="o_auth_authorization_controller"></a>![Class: ](https://apidocs.io/img/class.png "io.apimatic.examples.controllers.OAuthAuthorizationController") OAuthAuthorizationController

### Get singleton instance

The singleton instance of the ``` OAuthAuthorizationController ``` class can be accessed from the API Client.

```java
OAuthAuthorizationController oAuthAuthorization = client.getOAuthAuthorization();
```

### <a name="create_request_token_async"></a>![Method: ](https://apidocs.io/img/method.png "io.apimatic.examples.controllers.OAuthAuthorizationController.createRequestTokenAsync") createRequestTokenAsync

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestTokenAsync(
        final CreateRequestTokenInput input,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
CreateRequestTokenInput collect = new CreateRequestTokenInput();

String authorization = "Authorization";
collect.setAuthorization(authorization);

String username = "username";
collect.setUsername(username);

String password = "password";
collect.setPassword(password);

String scope = "scope";
collect.setScope(scope);

// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestTokenAsync(collect, , formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
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



### <a name="create_refresh_token_async"></a>![Method: ](https://apidocs.io/img/method.png "io.apimatic.examples.controllers.OAuthAuthorizationController.createRefreshTokenAsync") createRefreshTokenAsync

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```java
void createRefreshTokenAsync(
        final CreateRefreshTokenInput input,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
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
oAuthAuthorization.createRefreshTokenAsync(collect, , formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
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



### <a name="create_request_token_async"></a>![Method: ](https://apidocs.io/img/method.png "io.apimatic.examples.controllers.OAuthAuthorizationController.createRequestTokenAsync") createRequestTokenAsync

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```java
void createRequestTokenAsync(
        final CreateRequestTokenInput input,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```java
CreateRequestTokenInput collect = new CreateRequestTokenInput();

String authorization = "Authorization";
collect.setAuthorization(authorization);

String username = "username";
collect.setUsername(username);

String password = "password";
collect.setPassword(password);

String scope = "scope";
collect.setScope(scope);

// key-value map for optional form parameters
Map<String, Object> formParams = new LinkedHashMap<String, Object>();
// Invoking the API call with sample inputs
oAuthAuthorization.createRequestTokenAsync(collect, , formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
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



### <a name="create_refresh_token_async"></a>![Method: ](https://apidocs.io/img/method.png "io.apimatic.examples.controllers.OAuthAuthorizationController.createRefreshTokenAsync") createRefreshTokenAsync

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```java
void createRefreshTokenAsync(
        final CreateRefreshTokenInput input,
        Map<String, Object> fieldParameters,
        final APICallBack<OAuthToken> callBack)
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
oAuthAuthorization.createRefreshTokenAsync(collect, , formParams, new APICallBack<OAuthToken>() {
    public void onSuccess(HttpContext context, OAuthToken response) {
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



