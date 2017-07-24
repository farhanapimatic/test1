# Getting started

## How to Build

The generated code uses a few NuGet Packages e.g., Newtonsoft.Json, UniRest,
and Microsoft Base Class Library. The reference to these packages is already
added as in the packages.config file. If the automatic NuGet package restore
is enabled, these dependencies will be installed automatically. Therefore,
you will need internet access for build.

1. Open the solution (BibcodeQuery.sln) file.
2. Invoke the build process using `Ctrl+Shift+B` shortcut key or using the `Build` menu as shown below.

![Building SDK using Visual Studio](https://apidocs.io/illustration/cs?step=buildSDK&workspaceFolder=BibcodeQuery-CSharp&workspaceName=BibcodeQuery&projectName=BibcodeQuery.PCL)

## How to Use

The build process generates a portable class library, which can be used like a normal class library. The generated library is compatible with Windows Forms, Windows RT, Windows Phone 8,
Silverlight 5, Xamarin iOS, Xamarin Android and Mono. More information on how to use can be found at the [MSDN Portable Class Libraries documentation](http://msdn.microsoft.com/en-us/library/vstudio/gg597391%28v=vs.100%29.aspx).

The following section explains how to use the BibcodeQuery library in a new console project.

### 1. Starting a new project

For starting a new project, right click on the current solution from the *solution explorer* and choose  ``` Add -> New Project ```.

![Add a new project in the existing solution using Visual Studio](https://apidocs.io/illustration/cs?step=addProject&workspaceFolder=BibcodeQuery-CSharp&workspaceName=BibcodeQuery&projectName=BibcodeQuery.PCL)

Next, choose "Console Application", provide a ``` TestConsoleProject ``` as the project name and click ``` OK ```.

![Create a new console project using Visual Studio](https://apidocs.io/illustration/cs?step=createProject&workspaceFolder=BibcodeQuery-CSharp&workspaceName=BibcodeQuery&projectName=BibcodeQuery.PCL)

### 2. Set as startup project

The new console project is the entry point for the eventual execution. This requires us to set the ``` TestConsoleProject ``` as the start-up project. To do this, right-click on the  ``` TestConsoleProject ``` and choose  ``` Set as StartUp Project ``` form the context menu.

![Set the new cosole project as the start up project](https://apidocs.io/illustration/cs?step=setStartup&workspaceFolder=BibcodeQuery-CSharp&workspaceName=BibcodeQuery&projectName=BibcodeQuery.PCL)

### 3. Add reference of the library project

In order to use the BibcodeQuery library in the new project, first we must add a projet reference to the ``` TestConsoleProject ```. First, right click on the ``` References ``` node in the *solution explorer* and click ``` Add Reference... ```.

![Open references of the TestConsoleProject](https://apidocs.io/illustration/cs?step=addReference&workspaceFolder=BibcodeQuery-CSharp&workspaceName=BibcodeQuery&projectName=BibcodeQuery.PCL)

Next, a window will be displayed where we must set the ``` checkbox ``` on ``` BibcodeQuery.PCL ``` and click ``` OK ```. By doing this, we have added a reference of the ```BibcodeQuery.PCL``` project into the new ``` TestConsoleProject ```.

![Add a reference to the TestConsoleProject](https://apidocs.io/illustration/cs?step=createReference&workspaceFolder=BibcodeQuery-CSharp&workspaceName=BibcodeQuery&projectName=BibcodeQuery.PCL)

### 4. Write sample code

Once the ``` TestConsoleProject ``` is created, a file named ``` Program.cs ``` will be visible in the *solution explorer* with an empty ``` Main ``` method. This is the entry point for the execution of the entire solution.
Here, you can add code to initialize the client library and acquire the instance of a *Controller* class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

![Add a reference to the TestConsoleProject](https://apidocs.io/illustration/cs?step=addCode&workspaceFolder=BibcodeQuery-CSharp&workspaceName=BibcodeQuery&projectName=BibcodeQuery.PCL)

## How to Test

The generated SDK also contain one or more Tests, which are contained in the Tests project.
In order to invoke these test cases, you will need *NUnit 3.0 Test Adapter Extension for Visual Studio*.
Once the SDK is complied, the test cases should appear in the Test Explorer window.
Here, you can click *Run All* to execute these test cases.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthClientId | OAuth 2 Client ID |
| oAuthClientSecret | OAuth 2 Client Secret |
| oAuthUsername | OAuth 2 Resource Owner Username |
| oAuthPassword | OAuth 2 Resource Owner Password |



API client can be initialized as following.

```csharp
// Configuration parameters and credentials
string oAuthClientId = "oAuthClientId"; // OAuth 2 Client ID
string oAuthClientSecret = "oAuthClientSecret"; // OAuth 2 Client Secret
string oAuthUsername = "oAuthUsername"; // OAuth 2 Resource Owner Username
string oAuthPassword = "oAuthPassword"; // OAuth 2 Resource Owner Password

BibcodeQueryClient client = new BibcodeQueryClient(oAuthClientId, oAuthClientSecret, oAuthUsername, oAuthPassword);
```


You must now authorize the client.

### Authorizing your client

This SDK uses *OAuth 2.0 authorization* to authorize the client.

The `Authorize()` method will exchange the user's credentials for an *access token*.
The access token is an object containing information for authorizing client requests and refreshing the token itself.


```csharp
try
{
    client.Auth.Authorize()
}
catch (OAuthProviderException e)
{
    //handle exception here
}
```

The client can now make authorized endpoint calls.

### Refreshing token

An access token may expire after some time. To extend its lifetime, you must refresh the token.

```csharp
try
{
    client.Auth.RefreshToken()
}
catch (OAuthProviderException e)
{
    //handle exception here
}
```

If a token expires, the SDK will attempt to automatically refresh the token before the next endpoint call requiring authentication.

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

You can store the access token in a file or a database.

```csharp
// store token
SaveTokenToDatabase(Configuration.OAuthToken);
```
 
However, since the the SDK will attempt to automatically refresh the token when it expires, it is recommended that you register a *token update delegate* to detect any change to the access token.

```csharp
client.Configuration.OAuthTokenUpdateCallback = SaveTokenToDatabase;
```

The token update callback will be fired upon authorization as well as token refresh.

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token after creating the client:

```csharp
client = BibcodeQueryClient();
Configuration.UpdateAccessToken(LoadTokenFromDatabase());
```

### Complete example

```csharp
using BibcodeQuery.PCL;
using BibcodeQuery.PCL.Models;
using BibcodeQuery.PCL.Exceptions;

namespace OAuthTestApplication
{
    class Program
    {
        static void Main(string[] args)
        {
            // Configuration parameters and credentials
           string oAuthClientId = "oAuthClientId"; // OAuth 2 Client ID
           string oAuthClientSecret = "oAuthClientSecret"; // OAuth 2 Client Secret
           string oAuthUsername = "oAuthUsername"; // OAuth 2 Resource Owner Username
           string oAuthPassword = "oAuthPassword"; // OAuth 2 Resource Owner Password
           
            BibcodeQueryClient client = new BibcodeQueryClient(oAuthClientId, oAuthClientSecret, oAuthUsername, oAuthPassword);

            //callback for storing token for reuse when token is updated
            Configuration.OAuthTokenUpdateCallback = SaveTokenToDatabase;

            //obtain access token, needed for client to be authorized
            OAuthToken storedToken = LoadTokenFromDatabase();
            if (storedToken != null)
            {
                Configuration.OAuthToken = storedToken;
            }
            else
            {
                try
                {
                    client.Auth.Authorize();
                }
                catch (OAuthProviderException e)
                {
                    //Handle Exception here
                }
            }
        }

        //function for storing token to database
        static void SaveTokenToDatabase(OAuthToken token)
        {
            //Save token here
        }

        //function for loading token from database
        static OAuthToken LoadTokenFromDatabase()
        {
            OAuthToken token = null;
            //token = Get token here
            return token;
        }
    }
}

// the client is now authorized and you can use controllers to make endpoint calls
// client will automatically refresh the token when it expires and call the token update callback
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [BibcodeQueryBindingController](#bibcode_query_binding_controller)
* [APIController](#api_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="bibcode_query_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png "BibcodeQuery.PCL.Controllers.BibcodeQueryBindingController") BibcodeQueryBindingController

### Get singleton instance

The singleton instance of the ``` BibcodeQueryBindingController ``` class can be accessed from the API Client.

```csharp
BibcodeQueryBindingController bibcodeQueryBinding = client.BibcodeQueryBinding;
```

### <a name="get_bibcode"></a>![Method: ](https://apidocs.io/img/method.png "BibcodeQuery.PCL.Controllers.BibcodeQueryBindingController.GetBibcode") GetBibcode

> *Tags:*  ``` Skips Authentication ``` 

> getBibcode


```csharp
Task<Models.ReturnBibcode> GetBibcode(string bibcode, string dbKey, string dataType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| bibcode |  ``` Required ```  | TODO: Add a parameter description |
| dbKey |  ``` Required ```  | TODO: Add a parameter description |
| dataType |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```csharp
string bibcode = "bibcode";
string dbKey = "db_key";
string dataType = "data_type";

Models.ReturnBibcode result = await bibcodeQueryBinding.GetBibcode(bibcode, dbKey, dataType);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png "BibcodeQuery.PCL.Controllers.APIController") APIController

### Get singleton instance

The singleton instance of the ``` APIController ``` class can be accessed from the API Client.

```csharp
APIController client = client.Client;
```

### <a name="create_test"></a>![Method: ](https://apidocs.io/img/method.png "BibcodeQuery.PCL.Controllers.APIController.CreateTest") CreateTest

> TODO: Add a method description


```csharp
Task<dynamic> CreateTest(
        Models.TestRequest body,
        string cacheControl,
        string contentType,
        string postmanToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```csharp
var body = new Models.TestRequest();
string cacheControl = "cache-control";
string contentType = "content-type";
string postmanToken = "postman-token";

dynamic result = await client.CreateTest(body, cacheControl, contentType, postmanToken);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="o_auth_authorization_controller"></a>![Class: ](https://apidocs.io/img/class.png "BibcodeQuery.PCL.Controllers.OAuthAuthorizationController") OAuthAuthorizationController

### Get singleton instance

The singleton instance of the ``` OAuthAuthorizationController ``` class can be accessed from the API Client.

```csharp
OAuthAuthorizationController oAuthAuthorization = client.OAuthAuthorization;
```

### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png "BibcodeQuery.PCL.Controllers.OAuthAuthorizationController.CreateRequestToken") CreateRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```csharp
Task<Models.OAuthToken> CreateRequestToken(
        string authorization,
        string username,
        string password,
        string scope = null,
        Dictionary<string, object> fieldParameters = null)
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

```csharp
string authorization = "Authorization";
string username = "username";
string password = "password";
string scope = "scope";
// key-value map for optional form parameters
var formParams = new Dictionary<string, object>();


Models.OAuthToken result = await oAuthAuthorization.CreateRequestToken(authorization, username, password, scope, formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |


### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png "BibcodeQuery.PCL.Controllers.OAuthAuthorizationController.CreateRefreshToken") CreateRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```csharp
Task<Models.OAuthToken> CreateRefreshToken(
        string authorization,
        string refreshToken,
        string scope = null,
        Dictionary<string, object> fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```csharp
string authorization = "Authorization";
string refreshToken = "refresh_token";
string scope = "scope";
// key-value map for optional form parameters
var formParams = new Dictionary<string, object>();


Models.OAuthToken result = await oAuthAuthorization.CreateRefreshToken(authorization, refreshToken, scope, formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |


### <a name="create_request_token1"></a>![Method: ](https://apidocs.io/img/method.png "BibcodeQuery.PCL.Controllers.OAuthAuthorizationController.CreateRequestToken1") CreateRequestToken1

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```csharp
Task<Models.OAuthToken> CreateRequestToken1(
        string authorization,
        string username,
        string password,
        string scope = null,
        Dictionary<string, object> fieldParameters = null)
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

```csharp
string authorization = "Authorization";
string username = "username";
string password = "password";
string scope = "scope";
// key-value map for optional form parameters
var formParams = new Dictionary<string, object>();


Models.OAuthToken result = await oAuthAuthorization.CreateRequestToken1(authorization, username, password, scope, formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |


### <a name="create_refresh_token1"></a>![Method: ](https://apidocs.io/img/method.png "BibcodeQuery.PCL.Controllers.OAuthAuthorizationController.CreateRefreshToken1") CreateRefreshToken1

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```csharp
Task<Models.OAuthToken> CreateRefreshToken1(
        string authorization,
        string refreshToken,
        string scope = null,
        Dictionary<string, object> fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```csharp
string authorization = "Authorization";
string refreshToken = "refresh_token";
string scope = "scope";
// key-value map for optional form parameters
var formParams = new Dictionary<string, object>();


Models.OAuthToken result = await oAuthAuthorization.CreateRefreshToken1(authorization, refreshToken, scope, formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |


### <a name="create_request_token2"></a>![Method: ](https://apidocs.io/img/method.png "BibcodeQuery.PCL.Controllers.OAuthAuthorizationController.CreateRequestToken2") CreateRequestToken2

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```csharp
Task<Models.OAuthToken> CreateRequestToken2(
        string authorization,
        string username,
        string password,
        string scope = null,
        Dictionary<string, object> fieldParameters = null)
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

```csharp
string authorization = "Authorization";
string username = "username";
string password = "password";
string scope = "scope";
// key-value map for optional form parameters
var formParams = new Dictionary<string, object>();


Models.OAuthToken result = await oAuthAuthorization.CreateRequestToken2(authorization, username, password, scope, formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |


### <a name="create_refresh_token2"></a>![Method: ](https://apidocs.io/img/method.png "BibcodeQuery.PCL.Controllers.OAuthAuthorizationController.CreateRefreshToken2") CreateRefreshToken2

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```csharp
Task<Models.OAuthToken> CreateRefreshToken2(
        string authorization,
        string refreshToken,
        string scope = null,
        Dictionary<string, object> fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```csharp
string authorization = "Authorization";
string refreshToken = "refresh_token";
string scope = "scope";
// key-value map for optional form parameters
var formParams = new Dictionary<string, object>();


Models.OAuthToken result = await oAuthAuthorization.CreateRefreshToken2(authorization, refreshToken, scope, formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |


### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png "BibcodeQuery.PCL.Controllers.OAuthAuthorizationController.CreateRequestToken") CreateRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```csharp
Task<Models.OAuthToken> CreateRequestToken(
        string authorization,
        string username,
        string password,
        string scope = null,
        Dictionary<string, object> fieldParameters = null)
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

```csharp
string authorization = "Authorization";
string username = "username";
string password = "password";
string scope = "scope";
// key-value map for optional form parameters
var formParams = new Dictionary<string, object>();


Models.OAuthToken result = await oAuthAuthorization.CreateRequestToken(authorization, username, password, scope, formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |


### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png "BibcodeQuery.PCL.Controllers.OAuthAuthorizationController.CreateRefreshToken") CreateRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```csharp
Task<Models.OAuthToken> CreateRefreshToken(
        string authorization,
        string refreshToken,
        string scope = null,
        Dictionary<string, object> fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```csharp
string authorization = "Authorization";
string refreshToken = "refresh_token";
string scope = "scope";
// key-value map for optional form parameters
var formParams = new Dictionary<string, object>();


Models.OAuthToken result = await oAuthAuthorization.CreateRefreshToken(authorization, refreshToken, scope, formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |


[Back to List of Controllers](#list_of_controllers)



