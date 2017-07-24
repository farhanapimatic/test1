# Getting started

## How to Build


* In order to successfully build and run your SDK files, you are required to have the following setup in your system:
    * **Go**  (Visit [https://golang.org/doc/install](https://golang.org/doc/install) for more details on how to install Go)
    * **Java VM** Version 8 or later
    * **Eclipse 4.6 (Neon)** or later ([http://www.eclipse.org/neon/](http://www.eclipse.org/neon/))
    * **GoClipse** setup within above installed Eclipse (Follow the instructions at [this link](https://github.com/GoClipse/goclipse/blob/latest/documentation/Installation.md#instructions) to setup GoClipse)
* Ensure that ```GOPATH``` environment variable is set in the system variables. If not, set it to your workspace directory where you will be adding your Go projects.
* The generated code uses unirest-go http library. Therefore, you will need internet access to resolve this dependency. If Go is properly installed and configured, run the following command to pull the dependency:

```Go
go get github.com/apimatic/unirest-go
```

This will install unirest-go in the ```GOPATH``` you specified in the system variables.

Now follow the steps mentioned below to build your SDK:

1. Open eclipse in the Go language perspective and click on the ```Import``` option in ```File``` menu.

![Importing SDK into Eclipse - Step 1](https://apidocs.io/illustration/go?step=import0)

2. Select ```General -> Existing Projects into Workspace``` option from the tree list.

![Importing SDK into Eclipse - Step 2](https://apidocs.io/illustration/go?step=import1)

3. In ```Select root directory```, provide path to the unzipped archive for the generated code. Once the path is set and the Project becomes visible under ```Projects``` click ```Finish```

![Importing SDK into Eclipse - Step 3](https://apidocs.io/illustration/go?step=import2&workspaceFolder=BibcodeQuery-GoLang&projectName=bibcodequery_lib)

4. The Go library will be imported and its files will be visible in the Project Explorer

![Importing SDK into Eclipse - Step 4](https://apidocs.io/illustration/go?step=import3&projectName=bibcodequery_lib)

## How to Use

The following section explains how to use the BibcodequeryLib library in a new project.

### 1. Add a new Test Project

Create a new project in Eclipse by ```File``` -> ```New``` -> ```Go Project```

![Add a new project in Eclipse](https://apidocs.io/illustration/go?step=createNewProject0)

Name the Project as ```Test``` and click ```Finish```

![Create a new Maven Project - Step 1](https://apidocs.io/illustration/go?step=createNewProject1)

Create a new directory in the ```src``` directory of this project

![Create a new Maven Project - Step 2](https://apidocs.io/illustration/go?step=createNewProject2&projectName=bibcodequery_lib)

Name it ```test.com```

![Create a new Maven Project - Step 3](https://apidocs.io/illustration/go?step=createNewProject3&projectName=bibcodequery_lib)

Now create a new file inside ```src/test.com```

![Create a new Maven Project - Step 4](https://apidocs.io/illustration/go?step=createNewProject4&projectName=bibcodequery_lib)

Name it ```testsdk.go```

![Create a new Maven Project - Step 5](https://apidocs.io/illustration/go?step=createNewProject5&projectName=bibcodequery_lib)

In this Go file, you can start adding code to initialize the client library. Sample code to initialize the client library and using its methods is given in the subsequent sections.

### 2. Configure the Test Project

You need to import your generated library in this project in order to make use of its functions. In order to import the library, you can add its path in the ```GOPATH``` for this project. Follow the below steps:

Right click on the project name and click on ```Properties```

![Adding dependency to the client library - Step 1](https://apidocs.io/illustration/go?step=testProject0&projectName=bibcodequery_lib)

Choose ```Go Compiler``` from the side menu. Check ```Use project specific settings``` and uncheck ```Use same value as the GOPATH environment variable.```. By default, the GOPATH value from the environment variables will be visible in ```Eclipse GOPATH```. Do not remove this as this points to the unirest dependency.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/go?step=testProject1)

Append the library path to this GOPATH

![Adding dependency to the client library - Step 3](https://apidocs.io/illustration/go?step=testProject2&workspaceFolder=BibcodeQuery-GoLang)

Once the path is appended, click on ```OK```

### 3. Build the Test Project

Right click on the project name and click on ```Build Project```

![Build Project](https://apidocs.io/illustration/go?step=buildProject&projectName=bibcodequery_lib)

### 4. Run the Test Project

If the build is successful, right click on your Go file and click on ```Run As``` -> ```Go Application```

![Run Project](https://apidocs.io/illustration/go?step=runProject&projectName=bibcodequery_lib)

## Initialization

### Authentication
In order to setup authentication of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthClientId | OAuth 2 Client ID |
| oAuthClientSecret | OAuth 2 Client Secret |
| oAuthUsername | OAuth 2 Resource Owner Username |
| oAuthPassword | OAuth 2 Resource Owner Password |


To configure these for your generated code, open the file "Configuration.go" and edit it's contents.


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [bibcodequerybinding_pkg](#bibcodequerybinding_pkg)
* [api_pkg](#api_pkg)
* [oauthauthorization_pkg](#oauthauthorization_pkg)

## <a name="bibcodequerybinding_pkg"></a>![Class: ](https://apidocs.io/img/class.png ".bibcodequerybinding_pkg") bibcodequerybinding_pkg

### Get instance

Factory for the ``` BIBCODEQUERYBINDING ``` interface can be accessed from the package bibcodequerybinding_pkg.

```go
bibcodeQueryBinding := bibcodequerybinding_pkg.NewBIBCODEQUERYBINDING()
```

### <a name="get_bibcode"></a>![Method: ](https://apidocs.io/img/method.png ".bibcodequerybinding_pkg.GetBibcode") GetBibcode

> *Tags:*  ``` Skips Authentication ``` 

> getBibcode


```go
func (me *BIBCODEQUERYBINDING_IMPL) GetBibcode(
            bibcode string,
            dbKey string,
            dataType string)(*models_pkg.ReturnBibcode,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| bibcode |  ``` Required ```  | TODO: Add a parameter description |
| dbKey |  ``` Required ```  | TODO: Add a parameter description |
| dataType |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
bibcode := "bibcode"
dbKey := "db_key"
dataType := "data_type"

var result *models_pkg.ReturnBibcode
result,_ = bibcodeQueryBinding.GetBibcode(bibcode, dbKey, dataType)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="api_pkg"></a>![Class: ](https://apidocs.io/img/class.png ".api_pkg") api_pkg

### Get instance

Factory for the ``` API ``` interface can be accessed from the package api_pkg.

```go
aPI := api_pkg.NewAPI()
```

### <a name="create_test"></a>![Method: ](https://apidocs.io/img/method.png ".api_pkg.CreateTest") CreateTest

> TODO: Add a method description


```go
func (me *API_IMPL) CreateTest(
            body *models_pkg.TestRequest,
            cacheControl string,
            contentType string,
            postmanToken string)(interface{},error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.TestRequest
cacheControl := "cache-control"
contentType := "content-type"
postmanToken := "postman-token"

var result interface{}
result,_ = aPI.CreateTest(body, cacheControl, contentType, postmanToken)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="oauthauthorization_pkg"></a>![Class: ](https://apidocs.io/img/class.png ".oauthauthorization_pkg") oauthauthorization_pkg

### Get instance

Factory for the ``` OAUTHAUTHORIZATION ``` interface can be accessed from the package oauthauthorization_pkg.

```go
oAuthAuthorization := oauthauthorization_pkg.NewOAUTHAUTHORIZATION()
```

### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRequestToken") CreateRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRequestToken(
            authorization string,
            username string,
            password string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
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

```go
authorization := "Authorization"
username := "username"
password := "password"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRequestToken(authorization, username, password, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRefreshToken") CreateRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRefreshToken(
            authorization string,
            refreshToken string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
authorization := "Authorization"
refreshToken := "refresh_token"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRefreshToken(authorization, refreshToken, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token1"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRequestToken1") CreateRequestToken1

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRequestToken1(
            authorization string,
            username string,
            password string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
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

```go
authorization := "Authorization"
username := "username"
password := "password"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRequestToken1(authorization, username, password, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token1"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRefreshToken1") CreateRefreshToken1

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRefreshToken1(
            authorization string,
            refreshToken string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
authorization := "Authorization"
refreshToken := "refresh_token"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRefreshToken1(authorization, refreshToken, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token2"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRequestToken2") CreateRequestToken2

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRequestToken2(
            authorization string,
            username string,
            password string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
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

```go
authorization := "Authorization"
username := "username"
password := "password"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRequestToken2(authorization, username, password, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token2"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRefreshToken2") CreateRefreshToken2

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRefreshToken2(
            authorization string,
            refreshToken string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
authorization := "Authorization"
refreshToken := "refresh_token"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRefreshToken2(authorization, refreshToken, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token11"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRequestToken11") CreateRequestToken11

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRequestToken11(
            authorization string,
            username string,
            password string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
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

```go
authorization := "Authorization"
username := "username"
password := "password"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRequestToken11(authorization, username, password, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token11"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRefreshToken11") CreateRefreshToken11

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRefreshToken11(
            authorization string,
            refreshToken string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
authorization := "Authorization"
refreshToken := "refresh_token"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRefreshToken11(authorization, refreshToken, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token21"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRequestToken21") CreateRequestToken21

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRequestToken21(
            authorization string,
            username string,
            password string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
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

```go
authorization := "Authorization"
username := "username"
password := "password"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRequestToken21(authorization, username, password, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token21"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRefreshToken21") CreateRefreshToken21

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRefreshToken21(
            authorization string,
            refreshToken string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
authorization := "Authorization"
refreshToken := "refresh_token"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRefreshToken21(authorization, refreshToken, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token1"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRequestToken1") CreateRequestToken1

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRequestToken1(
            authorization string,
            username string,
            password string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
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

```go
authorization := "Authorization"
username := "username"
password := "password"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRequestToken1(authorization, username, password, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token1"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRefreshToken1") CreateRefreshToken1

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRefreshToken1(
            authorization string,
            refreshToken string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
authorization := "Authorization"
refreshToken := "refresh_token"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRefreshToken1(authorization, refreshToken, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRequestToken") CreateRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRequestToken(
            authorization string,
            username string,
            password string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
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

```go
authorization := "Authorization"
username := "username"
password := "password"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRequestToken(authorization, username, password, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRefreshToken") CreateRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRefreshToken(
            authorization string,
            refreshToken string,
            scope *string,
                fieldParameters map[string]interface{})(*models_pkg.OAuthToken,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
authorization := "Authorization"
refreshToken := "refresh_token"
scope := "scope"
// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthToken
result,_ = oAuthAuthorization.CreateRefreshToken(authorization, refreshToken, scope, formParams)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



[Back to List of Controllers](#list_of_controllers)



