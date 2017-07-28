# Getting started

## How to Build

The generated code uses a few NuGet Packages e.g., Newtonsoft.Json, UniRest,
and Microsoft Base Class Library. The reference to these packages is already
added as in the packages.config file. If the automatic NuGet package restore
is enabled, these dependencies will be installed automatically. Therefore,
you will need internet access for build.

1. Open the solution (PurchaseOrderService.sln) file.
2. Invoke the build process using `Ctrl+Shift+B` shortcut key or using the `Build` menu as shown below.

![Building SDK using Visual Studio](https://apidocs.io/illustration/cs?step=buildSDK&workspaceFolder=PurchaseOrderService-CSharp&workspaceName=PurchaseOrderService&projectName=PurchaseOrderService.PCL)

## How to Use

The build process generates a portable class library, which can be used like a normal class library. The generated library is compatible with Windows Forms, Windows RT, Windows Phone 8,
Silverlight 5, Xamarin iOS, Xamarin Android and Mono. More information on how to use can be found at the [MSDN Portable Class Libraries documentation](http://msdn.microsoft.com/en-us/library/vstudio/gg597391%28v=vs.100%29.aspx).

The following section explains how to use the PurchaseOrderService library in a new console project.

### 1. Starting a new project

For starting a new project, right click on the current solution from the *solution explorer* and choose  ``` Add -> New Project ```.

![Add a new project in the existing solution using Visual Studio](https://apidocs.io/illustration/cs?step=addProject&workspaceFolder=PurchaseOrderService-CSharp&workspaceName=PurchaseOrderService&projectName=PurchaseOrderService.PCL)

Next, choose "Console Application", provide a ``` TestConsoleProject ``` as the project name and click ``` OK ```.

![Create a new console project using Visual Studio](https://apidocs.io/illustration/cs?step=createProject&workspaceFolder=PurchaseOrderService-CSharp&workspaceName=PurchaseOrderService&projectName=PurchaseOrderService.PCL)

### 2. Set as startup project

The new console project is the entry point for the eventual execution. This requires us to set the ``` TestConsoleProject ``` as the start-up project. To do this, right-click on the  ``` TestConsoleProject ``` and choose  ``` Set as StartUp Project ``` form the context menu.

![Set the new cosole project as the start up project](https://apidocs.io/illustration/cs?step=setStartup&workspaceFolder=PurchaseOrderService-CSharp&workspaceName=PurchaseOrderService&projectName=PurchaseOrderService.PCL)

### 3. Add reference of the library project

In order to use the PurchaseOrderService library in the new project, first we must add a projet reference to the ``` TestConsoleProject ```. First, right click on the ``` References ``` node in the *solution explorer* and click ``` Add Reference... ```.

![Open references of the TestConsoleProject](https://apidocs.io/illustration/cs?step=addReference&workspaceFolder=PurchaseOrderService-CSharp&workspaceName=PurchaseOrderService&projectName=PurchaseOrderService.PCL)

Next, a window will be displayed where we must set the ``` checkbox ``` on ``` PurchaseOrderService.PCL ``` and click ``` OK ```. By doing this, we have added a reference of the ```PurchaseOrderService.PCL``` project into the new ``` TestConsoleProject ```.

![Add a reference to the TestConsoleProject](https://apidocs.io/illustration/cs?step=createReference&workspaceFolder=PurchaseOrderService-CSharp&workspaceName=PurchaseOrderService&projectName=PurchaseOrderService.PCL)

### 4. Write sample code

Once the ``` TestConsoleProject ``` is created, a file named ``` Program.cs ``` will be visible in the *solution explorer* with an empty ``` Main ``` method. This is the entry point for the execution of the entire solution.
Here, you can add code to initialize the client library and acquire the instance of a *Controller* class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

![Add a reference to the TestConsoleProject](https://apidocs.io/illustration/cs?step=addCode&workspaceFolder=PurchaseOrderService-CSharp&workspaceName=PurchaseOrderService&projectName=PurchaseOrderService.PCL)

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



API client can be initialized as following.

```csharp
// Configuration parameters and credentials
string oAuthClientId = "oAuthClientId"; // OAuth 2 Client ID
string oAuthClientSecret = "oAuthClientSecret"; // OAuth 2 Client Secret

PurchaseOrderServiceClient client = new PurchaseOrderServiceClient(oAuthClientId, oAuthClientSecret);
```


You must now authorize the client.

### Authorizing your client

This SDK uses *OAuth 2.0 authorization* to authorize the client.

The `Authorize()` method will exchange the OAuth client credentials for an *access token*.
The access token is an object containing information for authorizing client requests.

 You must pass the *[scopes](#scopes)* for which you need permission to access.
```csharp
try
{
    client.Auth.Authorize(scope=new List<OAuthScopeEnum>(){OAuthScopeEnum.SF});
}
catch (OAuthProviderException e)
{
    //handle exception here
}
```

The client can now make authorized endpoint calls.


### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the `PurchaseOrderService.PCL.Models.OAuthScopeEnum` enumeration.

| Scope Name | Description |
| --- | --- |
| `SF` |  |

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

You can store the access token in a file or a database.

```csharp
// store token
SaveTokenToDatabase(Configuration.OAuthToken);
```

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token after creating the client:

```csharp
client = PurchaseOrderServiceClient();
Configuration.UpdateAccessToken(LoadTokenFromDatabase());
```

### Complete example
```csharp
using PurchaseOrderService.PCL;
using PurchaseOrderService.PCL.Models;
using PurchaseOrderService.PCL.Exceptions;
using System.Collections.Generic;

namespace OAuthTestApplication
{
    class Program
    {
        static void Main(string[] args)
        {
            // Configuration parameters and credentials
           string oAuthClientId = "oAuthClientId"; // OAuth 2 Client ID
           string oAuthClientSecret = "oAuthClientSecret"; // OAuth 2 Client Secret
           
            PurchaseOrderServiceClient client = new PurchaseOrderServiceClient(oAuthClientId, oAuthClientSecret);

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
                    storedToken = client.Auth.Authorize(new List<OAuthScopeEnum>(){OAuthScopeEnum.SF});
                    SaveTokenToDatabase(storedToken);
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
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [PurchaseOrderBindingController](#purchase_order_binding_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="purchase_order_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png "PurchaseOrderService.PCL.Controllers.PurchaseOrderBindingController") PurchaseOrderBindingController

### Get singleton instance

The singleton instance of the ``` PurchaseOrderBindingController ``` class can be accessed from the API Client.

```csharp
PurchaseOrderBindingController purchaseOrderBinding = client.PurchaseOrderBinding;
```

### <a name="create_order"></a>![Method: ](https://apidocs.io/img/method.png "PurchaseOrderService.PCL.Controllers.PurchaseOrderBindingController.CreateOrder") CreateOrder

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```csharp
Task<Models.OrderConfirmation> CreateOrder(Models.PurchaseOrder body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```csharp
var body = new Models.PurchaseOrder();

Models.OrderConfirmation result = await purchaseOrderBinding.CreateOrder(body);

```


### <a name="create_order_status"></a>![Method: ](https://apidocs.io/img/method.png "PurchaseOrderService.PCL.Controllers.PurchaseOrderBindingController.CreateOrderStatus") CreateOrderStatus

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```csharp
Task<Models.GetOrderStatusResponse> CreateOrderStatus(
        string new2,
        string new3,
        string new1,
        Models.GetOrderStatus body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| new2 |  ``` Required ```  | TODO: Add a parameter description |
| new3 |  ``` Required ```  | TODO: Add a parameter description |
| new1 |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```csharp
string new2 = "new2";
string new3 = "new3";
string new1 = "new1";
var body = new Models.GetOrderStatus();

Models.GetOrderStatusResponse result = await purchaseOrderBinding.CreateOrderStatus(new2, new3, new1, body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 500 | Error in retrieving response |


[Back to List of Controllers](#list_of_controllers)

## <a name="o_auth_authorization_controller"></a>![Class: ](https://apidocs.io/img/class.png "PurchaseOrderService.PCL.Controllers.OAuthAuthorizationController") OAuthAuthorizationController

### Get singleton instance

The singleton instance of the ``` OAuthAuthorizationController ``` class can be accessed from the API Client.

```csharp
OAuthAuthorizationController oAuthAuthorization = client.OAuthAuthorization;
```

### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png "PurchaseOrderService.PCL.Controllers.OAuthAuthorizationController.CreateRequestToken") CreateRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```csharp
Task<Models.OAuthToken> CreateRequestToken(string authorization, string scope = null, Dictionary<string, object> fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```csharp
string authorization = "Authorization";
string scope = "scope";
// key-value map for optional form parameters
var formParams = new Dictionary<string, object>();


Models.OAuthToken result = await oAuthAuthorization.CreateRequestToken(authorization, scope, formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |


### <a name="create_request_token1"></a>![Method: ](https://apidocs.io/img/method.png "PurchaseOrderService.PCL.Controllers.OAuthAuthorizationController.CreateRequestToken1") CreateRequestToken1

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```csharp
Task<Models.OAuthToken> CreateRequestToken1(string authorization, string scope = null, Dictionary<string, object> fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```csharp
string authorization = "Authorization";
string scope = "scope";
// key-value map for optional form parameters
var formParams = new Dictionary<string, object>();


Models.OAuthToken result = await oAuthAuthorization.CreateRequestToken1(authorization, scope, formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |


### <a name="create_request_token2"></a>![Method: ](https://apidocs.io/img/method.png "PurchaseOrderService.PCL.Controllers.OAuthAuthorizationController.CreateRequestToken2") CreateRequestToken2

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```csharp
Task<Models.OAuthToken> CreateRequestToken2(string authorization, string scope = null, Dictionary<string, object> fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```csharp
string authorization = "Authorization";
string scope = "scope";
// key-value map for optional form parameters
var formParams = new Dictionary<string, object>();


Models.OAuthToken result = await oAuthAuthorization.CreateRequestToken2(authorization, scope, formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |


### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png "PurchaseOrderService.PCL.Controllers.OAuthAuthorizationController.CreateRequestToken") CreateRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```csharp
Task<Models.OAuthToken> CreateRequestToken(string authorization, string scope = null, Dictionary<string, object> fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```csharp
string authorization = "Authorization";
string scope = "scope";
// key-value map for optional form parameters
var formParams = new Dictionary<string, object>();


Models.OAuthToken result = await oAuthAuthorization.CreateRequestToken(authorization, scope, formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |


[Back to List of Controllers](#list_of_controllers)



