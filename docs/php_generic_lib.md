# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=BibcodeQuery-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the BibcodeQuery library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=BibcodeQuery-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=BibcodeQuery-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=BibcodeQuery-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=BibcodeQuery-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=BibcodeQuery-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=BibcodeQuery-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=BibcodeQuery-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=BibcodeQuery-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=BibcodeQuery-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=BibcodeQuery-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=BibcodeQuery-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=BibcodeQuery-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

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

```php
$oAuthClientId = 'oAuthClientId'; // OAuth 2 Client ID
$oAuthClientSecret = 'oAuthClientSecret'; // OAuth 2 Client Secret
$oAuthUsername = 'oAuthUsername'; // OAuth 2 Resource Owner Username
$oAuthPassword = 'oAuthPassword'; // OAuth 2 Resource Owner Password

$client = new BibcodeQueryLib\BibcodeQueryClient($oAuthClientId, $oAuthClientSecret, $oAuthUsername, $oAuthPassword);
```

You must authorize now authorize the client.

### Authorizing your client

Your application must obtain user authorization before it can execute an endpoint call.
This SDK uses *OAuth 2.0 authorization* to authorize the client.

The `authorize()` method will exchange the user's credentials for an *access token*.
The access token is an object containing information for authorizing client requests and refreshing the token itself.


```php
try {
    $client->auth()->authorize();
} catch (BibcodeQueryLib\Exceptions\OAuthProviderException $ex) {
    // handle exception
}
```

The client can now make authorized endpoint calls.

### Refreshing token

An access token may expire after sometime. To extend its lifetime, you must refresh the token.

```php
if ($client->auth()->isTokenExpired()) {
    try {
        $client->auth()->refreshToken();
    } catch (BibcodeQueryLib\Exceptions\OAuthProviderException $ex) {
        // handle exception
    }
}
```

If a token expires, the SDK will attempt to automatically refresh the token before the next endpoint call requiring authentication.

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

You can store the access token in the `$_SESSION` global:

```php
// store token
$_SESSION['access_token'] = BibcodeQueryLib\Configuration::$oAuthToken;
```

However, since the the SDK will attempt to automatically refresh the token when it expires, it is recommended that you register a *token update callback* to detect any change to the access token.

```php
BibcodeQueryLib\Configuration::$oAuthTokenUpdateCallback = function($token) {
    // use session or some other way to persist the $token
    $_SESSION['access_token'] = $token;
};
```

The token update callback will be fired upon authorization as well as token refresh.

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token in `Configuration` along with the other configuration parameters before creating the client:

```php
// load token later...
BibcodeQueryLib\Configuration::$oAuthToken = $_SESSION['access_token'];

// Set other configuration, then instantiate client
$client = new BibcodeQueryLib\BibcodeQueryClient();
```

### Complete example

```php
<?php
require_once __DIR__.'/vendor/autoload.php';

session_start();

// Client configuration
$oAuthClientId = 'oAuthClientId';
$oAuthClientSecret = 'oAuthClientSecret';
$oAuthUsername = 'oAuthUsername';
$oAuthPassword = 'oAuthPassword';

$client = new BibcodeQueryLib\BibcodeQueryClient($oAuthClientId, $oAuthClientSecret, $oAuthUsername, $oAuthPassword);

// callback stores token for reuse when token is updated
BibcodeQueryLib\Configuration::$oAuthTokenUpdateCallback = function($token) {
    $_SESSION['access_token'] = $token;
};

// obtain access token, needed for client to be authorized
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    // restore access token from session
    BibcodeQueryLib\Configuration::$oAuthToken = $_SESSION['access_token'];
} else {
    // obtain new access token
    try {
        $client->auth()->authorize();
    } catch (BibcodeQueryLib\Exceptions\OAuthProviderException $ex) {
        // handle exception
        die();
    }
}

// the client is now authorized; you can use $client to make endpoint calls
// client will automatically refresh the token when it expires and call the token update callback
```



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [BibcodeQueryBindingController](#bibcode_query_binding_controller)
* [APIController](#api_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="bibcode_query_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png ".BibcodeQueryBindingController") BibcodeQueryBindingController

### Get singleton instance

The singleton instance of the ``` BibcodeQueryBindingController ``` class can be accessed from the API Client.

```php
$bibcodeQueryBinding = $client->getBibcodeQueryBinding();
```

### <a name="get_bibcode"></a>![Method: ](https://apidocs.io/img/method.png ".BibcodeQueryBindingController.getBibcode") getBibcode

> *Tags:*  ``` Skips Authentication ``` 

> getBibcode


```php
function getBibcode(
        $bibcode,
        $dbKey,
        $dataType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| bibcode |  ``` Required ```  | TODO: Add a parameter description |
| dbKey |  ``` Required ```  | TODO: Add a parameter description |
| dataType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$bibcode = 'bibcode';
$dbKey = 'db_key';
$dataType = 'data_type';

$result = $bibcodeQueryBinding->getBibcode($bibcode, $dbKey, $dataType);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

### Get singleton instance

The singleton instance of the ``` APIController ``` class can be accessed from the API Client.

```php
$client = $client->getClient();
```

### <a name="create_test"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createTest") createTest

> TODO: Add a method description


```php
function createTest(
        $body,
        $cacheControl,
        $contentType,
        $postmanToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new TestRequest();
$cacheControl = 'cache-control';
$contentType = 'content-type';
$postmanToken = 'postman-token';

$result = $client->createTest($body, $cacheControl, $contentType, $postmanToken);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="o_auth_authorization_controller"></a>![Class: ](https://apidocs.io/img/class.png ".OAuthAuthorizationController") OAuthAuthorizationController

### Get singleton instance

The singleton instance of the ``` OAuthAuthorizationController ``` class can be accessed from the API Client.

```php
$oAuthAuthorization = $client->getOAuthAuthorization();
```

### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken") createRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```php
function createRequestToken(
        $authorization,
        $username,
        $password,
        $scope = null,
        $fieldParameters = null)
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

```php
$authorization = 'Authorization';
$username = 'username';
$password = 'password';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken($authorization, $username, $password, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken") createRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```php
function createRefreshToken(
        $authorization,
        $refreshToken,
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$refreshToken = 'refresh_token';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken($authorization, $refreshToken, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token1"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken1") createRequestToken1

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```php
function createRequestToken1(
        $authorization,
        $username,
        $password,
        $scope = null,
        $fieldParameters = null)
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

```php
$authorization = 'Authorization';
$username = 'username';
$password = 'password';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken1($authorization, $username, $password, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token1"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken1") createRefreshToken1

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```php
function createRefreshToken1(
        $authorization,
        $refreshToken,
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$refreshToken = 'refresh_token';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken1($authorization, $refreshToken, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token2"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken2") createRequestToken2

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```php
function createRequestToken2(
        $authorization,
        $username,
        $password,
        $scope = null,
        $fieldParameters = null)
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

```php
$authorization = 'Authorization';
$username = 'username';
$password = 'password';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken2($authorization, $username, $password, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token2"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken2") createRefreshToken2

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```php
function createRefreshToken2(
        $authorization,
        $refreshToken,
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$refreshToken = 'refresh_token';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken2($authorization, $refreshToken, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token11"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken11") createRequestToken11

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```php
function createRequestToken11(
        $authorization,
        $username,
        $password,
        $scope = null,
        $fieldParameters = null)
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

```php
$authorization = 'Authorization';
$username = 'username';
$password = 'password';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken11($authorization, $username, $password, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token11"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken11") createRefreshToken11

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```php
function createRefreshToken11(
        $authorization,
        $refreshToken,
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$refreshToken = 'refresh_token';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken11($authorization, $refreshToken, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token21"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken21") createRequestToken21

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```php
function createRequestToken21(
        $authorization,
        $username,
        $password,
        $scope = null,
        $fieldParameters = null)
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

```php
$authorization = 'Authorization';
$username = 'username';
$password = 'password';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken21($authorization, $username, $password, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token21"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken21") createRefreshToken21

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```php
function createRefreshToken21(
        $authorization,
        $refreshToken,
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$refreshToken = 'refresh_token';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken21($authorization, $refreshToken, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token11"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken11") createRequestToken11

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```php
function createRequestToken11(
        $authorization,
        $username,
        $password,
        $scope = null,
        $fieldParameters = null)
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

```php
$authorization = 'Authorization';
$username = 'username';
$password = 'password';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken11($authorization, $username, $password, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token11"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken11") createRefreshToken11

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```php
function createRefreshToken11(
        $authorization,
        $refreshToken,
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$refreshToken = 'refresh_token';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken11($authorization, $refreshToken, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token1"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken1") createRequestToken1

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```php
function createRequestToken1(
        $authorization,
        $username,
        $password,
        $scope = null,
        $fieldParameters = null)
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

```php
$authorization = 'Authorization';
$username = 'username';
$password = 'password';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken1($authorization, $username, $password, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token1"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken1") createRefreshToken1

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```php
function createRefreshToken1(
        $authorization,
        $refreshToken,
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$refreshToken = 'refresh_token';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken1($authorization, $refreshToken, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token2"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken2") createRequestToken2

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```php
function createRequestToken2(
        $authorization,
        $username,
        $password,
        $scope = null,
        $fieldParameters = null)
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

```php
$authorization = 'Authorization';
$username = 'username';
$password = 'password';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken2($authorization, $username, $password, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token2"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken2") createRefreshToken2

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```php
function createRefreshToken2(
        $authorization,
        $refreshToken,
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$refreshToken = 'refresh_token';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken2($authorization, $refreshToken, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token3"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken3") createRequestToken3

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```php
function createRequestToken3(
        $authorization,
        $username,
        $password,
        $scope = null,
        $fieldParameters = null)
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

```php
$authorization = 'Authorization';
$username = 'username';
$password = 'password';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken3($authorization, $username, $password, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token3"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken3") createRefreshToken3

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```php
function createRefreshToken3(
        $authorization,
        $refreshToken,
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$refreshToken = 'refresh_token';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken3($authorization, $refreshToken, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



[Back to List of Controllers](#list_of_controllers)



