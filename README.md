# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Hello%20world-PHP)

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

The following section explains how to use the HelloWorld library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Hello%20world-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Hello%20world-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Hello%20world-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Hello%20world-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Hello%20world-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Hello%20world-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Hello%20world-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Hello%20world-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Hello%20world-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Hello%20world-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Hello%20world-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Hello%20world-PHP)

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
| oAuthRedirectUri | OAuth 2 Redirection endpoint or Callback Uri |



API client can be initialized as following.

```php
$oAuthClientId = 'oAuthClientId'; // OAuth 2 Client ID
$oAuthClientSecret = 'oAuthClientSecret'; // OAuth 2 Client Secret
$oAuthRedirectUri = 'https://example.com/oauth/callback'; // OAuth 2 Redirection endpoint or Callback Uri

$client = new HelloWorldLib\HelloWorldClient($oAuthClientId, $oAuthClientSecret, $oAuthRedirectUri);
```

You must authorize now authorize the client.

### Authorizing your client

Your application must obtain user authorization before it can execute an endpoint call.
The SDK uses *OAuth 2.0 authorization* to obtain a user's consent to perform an API request on user's behalf.

#### 1. Obtain user consent

To obtain user's consent, you must redirect the user to the authorization page. The `buildAuthorizationUrl()` method creates the URL to the authorization page. You must pass
the *[scopes](#scopes)* for which you need permission to access.
```php
$authUrl = $client->auth()->buildAuthorizationUrl([OAuthScopeEnum::Q, OAuthScopeEnum::ASD]);
header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
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

```php
try {
    $client->auth()->authorize($_GET['code']);
} catch (HelloWorldLib\Exceptions\OAuthProviderException $ex) {
    // handle exception
}
```

### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the `HelloWorldLib\Models\OAuthScopeEnum` enumeration.

| Scope Name | Description |
| --- | --- |
| `Q` |  |
| `ASD` |  |

### Refreshing token

An access token may expire after sometime. To extend its lifetime, you must refresh the token.

```php
if ($client->auth()->isTokenExpired()) {
    try {
        $client->auth()->refreshToken();
    } catch (HelloWorldLib\Exceptions\OAuthProviderException $ex) {
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
$_SESSION['access_token'] = HelloWorldLib\Configuration::$oAuthToken;
```

However, since the the SDK will attempt to automatically refresh the token when it expires, it is recommended that you register a *token update callback* to detect any change to the access token.

```php
HelloWorldLib\Configuration::$oAuthTokenUpdateCallback = function($token) {
    // use session or some other way to persist the $token
    $_SESSION['access_token'] = $token;
};
```

The token update callback will be fired upon authorization as well as token refresh.

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token in `Configuration` along with the other configuration parameters before creating the client:

```php
// load token later...
HelloWorldLib\Configuration::$oAuthToken = $_SESSION['access_token'];

// Set other configuration, then instantiate client
$client = new HelloWorldLib\HelloWorldClient();
```

### Complete example

In this example, the `index.php` will first check if an access token is available for the user. If one is not set,
it redirects the user to `authcallback.php` which will obtain an access token and redirect the user back to the `index.php` page.
Now that an access token is set, `index.php` can use the client to make authorized calls to the server.

#### `index.php`

```php
<?php
require_once __DIR__.'/vendor/autoload.php';

session_start();

// Client configuration
$oAuthClientId = 'oAuthClientId';
$oAuthClientSecret = 'oAuthClientSecret';
$oAuthRedirectUri = 'http://' . $_SERVER['HTTP_HOST'] . '/authcallback.php';

$client = new HelloWorldLib\HelloWorldClient($oAuthClientId, $oAuthClientSecret, $oAuthRedirectUri);

// callback stores token for reuse when token is updated
HelloWorldLib\Configuration::$oAuthTokenUpdateCallback = function($token) {
    $_SESSION['access_token'] = $token;
};

// check if a token is available
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    // set access token in configuration
    HelloWorldLib\Configuration::$oAuthToken = $_SESSION['access_token'];

    // now you can use $client to make endpoint calls
    // client will automatically refresh the token when it expires and call the token update callback
} else {
    // redirect user to a page that handles authorization
    header('Location: ' . filter_var($oAuthRedirectUri, FILTER_SANITIZE_URL));
}
```

#### `authcallback.php`

```php
<?php
require_once __DIR__.'/vendor/autoload.php';

use HelloWorldLib\Models\OAuthScopeEnum;

session_start();

// Client configuration
$oAuthClientId = 'oAuthClientId';
$oAuthClientSecret = 'oAuthClientSecret';
$oAuthRedirectUri = 'http://' . $_SERVER['HTTP_HOST'] . '/authcallback.php';

$client = new HelloWorldLib\HelloWorldClient($oAuthClientId, $oAuthClientSecret, $oAuthRedirectUri);

// callback stores token for reuse when token is updated
HelloWorldLib\Configuration::$oAuthTokenUpdateCallback = function($token) {
    $_SESSION['access_token'] = $token;
};

if (! isset($_GET['code'])) {
    // if authorization code is absent, redirect to authorization page
    $authUrl = $client->auth()->buildAuthorizationUrl([OAuthScopeEnum::Q, OAuthScopeEnum::ASD]);
    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
} else {
    try {
        // authorize client (calls token update callback as well)
        $token = $client->auth()->authorize($_GET['code']);

        // resume user activity
        $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
    } catch (HelloWorldLib\Exceptions\OAuthProviderException $ex) {
        // handle exception
    }
}
```



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [HelloworldController](#helloworld_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="helloworld_controller"></a>![Class: ](https://apidocs.io/img/class.png ".HelloworldController") HelloworldController

### Get singleton instance

The singleton instance of the ``` HelloworldController ``` class can be accessed from the API Client.

```php
$helloworld = $client->getHelloworld();
```

### <a name="get_helloworld"></a>![Method: ](https://apidocs.io/img/method.png ".HelloworldController.getHelloworld") getHelloworld

> TODO: Add a method description


```php
function getHelloworld()
```

#### Example Usage

```php

$result = $helloworld->getHelloworld();

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
        $code,
        $redirectUri,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$code = 'code';
$redirectUri = 'redirect_uri';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken($authorization, $code, $redirectUri, $formParams);

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
        $code,
        $redirectUri,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$code = 'code';
$redirectUri = 'redirect_uri';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken1($authorization, $code, $redirectUri, $formParams);

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



[Back to List of Controllers](#list_of_controllers)



