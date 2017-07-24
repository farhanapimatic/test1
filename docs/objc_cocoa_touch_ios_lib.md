# Getting started

## How to Build


The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```PodFile``` file that comes with the SDK. 
To resolve these dependencies, we use the Cocoapods package manager.
Visit https://guides.cocoapods.org/using/getting-started.html to setup Cocoapods on your system.
Open command prompt and type ```pod --version```. This should display the current version of Cocoapods installed if the installation was successful.

Using command line, navigate to the directory containing the generated files (including ```PodFile```) for the SDK. 
Run the command ```pod install```. This should install all the required dependencies and create the ```pods``` directory in your project directory.

![Installing dependencies using Cocoapods](https://apidocs.io/illustration/objc?step=AddDependencies&workspaceFolder=BibcodeQuery-ObjC&workspaceName=BibcodeQuery&projectName=BibcodeQuery&rootNamespace=BibcodeQuery)

Open the project workspace using the (BibcodeQuery.xcworkspace) file. Invoke the build process using `Command(⌘)+B` shortcut key or using the `Build` menu as shown below.

![Building SDK using Xcode](https://apidocs.io/illustration/objc?step=BuildSDK&workspaceFolder=BibcodeQuery-ObjC&workspaceName=BibcodeQuery&projectName=BibcodeQuery&rootNamespace=BibcodeQuery)


## How to Use

The generated code is a Cocoa Touch Static Library which can be used in any iOS project. The support for these generated libraries go all the way back to iOS 6.

The following section explains how to use the BibcodeQuery library in a new iOS project.     
### 1. Starting a new project
To start a new project, left-click on the ```Create a new Xcode project```.
![Create Test Project - Step 1](https://apidocs.io/illustration/objc?step=Test1&workspaceFolder=BibcodeQuery-ObjC&workspaceName=BibcodeQuery&projectName=BibcodeQuery&rootNamespace=BibcodeQuery)

Next, choose **Single View Application** and click ```Next```.
![Create Test Project - Step 2](https://apidocs.io/illustration/objc?step=Test2&workspaceFolder=BibcodeQuery-ObjC&workspaceName=BibcodeQuery&projectName=BibcodeQuery&rootNamespace=BibcodeQuery)

Provide **Test-Project** as the product name click ```Next```.
![Create Test Project - Step 3](https://apidocs.io/illustration/objc?step=Test3&workspaceFolder=BibcodeQuery-ObjC&workspaceName=BibcodeQuery&projectName=BibcodeQuery&rootNamespace=BibcodeQuery)

Choose the desired location of your project folder and click ```Create```.
![Create Test Project - Step 4](https://apidocs.io/illustration/objc?step=Test4&workspaceFolder=BibcodeQuery-ObjC&workspaceName=BibcodeQuery&projectName=BibcodeQuery&rootNamespace=BibcodeQuery)

### 2. Adding the static library dependency
To add this dependency open a terminal and navigate to your project folder. Next, input ```pod init``` and press enter.
![Add dependency - Step 1](https://apidocs.io/illustration/objc?step=Add0&workspaceFolder=BibcodeQuery-ObjC&workspaceName=BibcodeQuery&projectName=BibcodeQuery&rootNamespace=BibcodeQuery)

Next, open the newly created ```PodFile``` in your favourite text editor. Add the following line : pod 'BibcodeQuery', :path => 'Vendor/BibcodeQuery'
![Add dependency - Step 2](https://apidocs.io/illustration/objc?step=Add1&workspaceFolder=BibcodeQuery-ObjC&workspaceName=BibcodeQuery&projectName=BibcodeQuery&rootNamespace=BibcodeQuery)

Execute `pod install` from terminal to install the dependecy in your project. This would add the dependency to the newly created test project.
![Add dependency - Step 3](https://apidocs.io/illustration/objc?step=Add2&workspaceFolder=BibcodeQuery-ObjC&workspaceName=BibcodeQuery&projectName=BibcodeQuery&rootNamespace=BibcodeQuery)


## How to Test

Unit tests in this SDK can be run using Xcode. 

First build the SDK as shown in the steps above and naivgate to the project directory and open the BibcodeQuery.xcworkspace file.

Go to the test explorer in Xcode as shown in the picture below and click on `run tests` from the menu. 
![Run tests](https://apidocs.io/illustration/objc?step=RunTests&workspaceFolder=BibcodeQuery-ObjC&workspaceName=BibcodeQuery&projectName=BibcodeQuery&rootNamespace=BibcodeQuery)


## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthClientId | OAuth 2 Client ID |
| oAuthClientSecret | OAuth 2 Client Secret |
| oAuthUsername | OAuth 2 Resource Owner Username |
| oAuthPassword | OAuth 2 Resource Owner Password |



Configuration variables can be set as following.
```Objc
// Configuration parameters and credentials
Configuration_OAuthClientId = "Configuration_OAuthClientId"; // OAuth 2 Client ID
Configuration_OAuthClientSecret = "Configuration_OAuthClientSecret"; // OAuth 2 Client Secret
Configuration_OAuthUsername = "Configuration_OAuthUsername"; // OAuth 2 Resource Owner Username
Configuration_OAuthPassword = "Configuration_OAuthPassword"; // OAuth 2 Resource Owner Password

```

# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [BibcodeQueryBindingController](#bibcode_query_binding_controller)
* [APIController](#api_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="bibcode_query_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png ".BibcodeQueryBindingController") BibcodeQueryBindingController

### Get singleton instance
```objc
BibcodeQueryBinding* bibcodeQueryBinding = [[BibcodeQueryBinding alloc]init] ;
```

### <a name="get_bibcode_async_with_bibcode"></a>![Method: ](https://apidocs.io/img/method.png ".BibcodeQueryBindingController.getBibcodeAsyncWithBibcode") getBibcodeAsyncWithBibcode

> *Tags:*  ``` Skips Authentication ``` 

> getBibcode


```objc
function getBibcodeAsyncWithBibcode:(NSString*) bibcode
                dbKey:(NSString*) dbKey
                dataType:(NSString*) dataType
                completionBlock:(CompletedGetBibcode) onCompleted(bibcode dbKey : dbKey dataType : dataType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| bibcode |  ``` Required ```  | TODO: Add a parameter description |
| dbKey |  ``` Required ```  | TODO: Add a parameter description |
| dataType |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* bibcode = @"bibcode";
    NSString* dbKey = @"db_key";
    NSString* dataType = @"data_type";

    [self.bibcodeQueryBinding getBibcodeAsyncWithBibcode: bibcode dbKey : dbKey dataType : dataType  completionBlock:^(BOOL success, HttpContext* context, ReturnBibcode* response, NSError* error) { 
       //Add code here
    }];
```


[Back to List of Controllers](#list_of_controllers)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

### Get singleton instance
```objc
Client* client = [[Client alloc]init] ;
```

### <a name="create_test_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createTestAsyncWithBody") createTestAsyncWithBody

> TODO: Add a method description


```objc
function createTestAsyncWithBody:(TestRequest*) body
                cacheControl:(NSString*) cacheControl
                contentType:(NSString*) contentType
                postmanToken:(NSString*) postmanToken
                completionBlock:(CompletedPostTest) onCompleted(body cacheControl : cacheControl contentType : contentType postmanToken : postmanToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    TestRequest* body = [[TestRequest alloc]init];
    NSString* cacheControl = @"cache-control";
    NSString* contentType = @"content-type";
    NSString* postmanToken = @"postman-token";

    [self.client createTestAsyncWithBody: body cacheControl : cacheControl contentType : contentType postmanToken : postmanToken  completionBlock:^(BOOL success, HttpContext* context, id response, NSError* error) { 
       //Add code here
    }];
```


[Back to List of Controllers](#list_of_controllers)

## <a name="o_auth_authorization_controller"></a>![Class: ](https://apidocs.io/img/class.png ".OAuthAuthorizationController") OAuthAuthorizationController

### Get singleton instance
```objc
OAuthAuthorization* oAuthAuthorization = [[OAuthAuthorization alloc]init] ;
```

### <a name="create_request_token_async_with_authorization"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestTokenAsyncWithAuthorization") createRequestTokenAsyncWithAuthorization

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```objc
function createRequestTokenAsyncWithAuthorization:(NSString*) authorization
                username:(NSString*) username
                password:(NSString*) password
                scope:(NSString*) scope
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRequestToken) onCompleted(authorization username : username password : password scope : scope  formParameters : formParams)
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

```objc
    // Parameters for the API call
    NSString* authorization = @"Authorization";
    NSString* username = @"username";
    NSString* password = @"password";
    NSString* scope = @"scope";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRequestTokenAsyncWithAuthorization: authorization username : username password : password scope : scope  formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthToken* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token_async_with_authorization"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshTokenAsyncWithAuthorization") createRefreshTokenAsyncWithAuthorization

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```objc
function createRefreshTokenAsyncWithAuthorization:(NSString*) authorization
                refreshToken:(NSString*) refreshToken
                scope:(NSString*) scope
                fieldParameters:(NSDictionary*) fieldParameters
                completionBlock:(CompletedPostRefreshToken) onCompleted(authorization refreshToken : refreshToken scope : scope  formParameters : formParams)
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
    NSString* authorization = @"Authorization";
    NSString* refreshToken = @"refresh_token";
    NSString* scope = @"scope";
    // Dictionary for optional form parameters
    NSMutableDictionary* formParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *formParams= [formParamsMutable copy];

    [self.oAuthAuthorization createRefreshTokenAsyncWithAuthorization: authorization refreshToken : refreshToken scope : scope  formParameters : formParams  completionBlock:^(BOOL success, HttpContext* context, OAuthToken* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



[Back to List of Controllers](#list_of_controllers)



