# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=PurchaseOrderService-PHP)

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

The following section explains how to use the PurchaseOrderService library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=PurchaseOrderService-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=PurchaseOrderService-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=PurchaseOrderService-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=PurchaseOrderService-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=PurchaseOrderService-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=PurchaseOrderService-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=PurchaseOrderService-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=PurchaseOrderService-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=PurchaseOrderService-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=PurchaseOrderService-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=PurchaseOrderService-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=PurchaseOrderService-PHP)

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



API client can be initialized as following.

```php
$oAuthClientId = 'oAuthClientId'; // OAuth 2 Client ID
$oAuthClientSecret = 'oAuthClientSecret'; // OAuth 2 Client Secret

$client = new PurchaseOrderServiceLib\PurchaseOrderServiceClient($oAuthClientId, $oAuthClientSecret);
```

You must authorize now authorize the client.

### Authorizing your client

This SDK uses *OAuth 2.0 authorization* to authorize the client.

The `authorize()` method will exchange the OAuth client credentials for an *access token*.
The access token is an object containing information for authorizing client requests.

 You must pass the *[scopes](#scopes)* for which you need permission to access.
```php
try {
    $client->auth()->authorize([OAuthScopeEnum::SF]);
} catch (PurchaseOrderServiceLib\Exceptions\OAuthProviderException $ex) {
    // handle exception
}
```

The client can now make authorized endpoint calls.


### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the `PurchaseOrderServiceLib\Models\OAuthScopeEnum` enumeration.

| Scope Name | Description |
| --- | --- |
| `SF` |  |

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

You can store the access token in the `$_SESSION` global:

```php
// store token
$_SESSION['access_token'] = PurchaseOrderServiceLib\Configuration::$oAuthToken;
```

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token in `Configuration` along with the other configuration parameters before creating the client:

```php
// load token later...
PurchaseOrderServiceLib\Configuration::$oAuthToken = $_SESSION['access_token'];

// Set other configuration, then instantiate client
$client = new PurchaseOrderServiceLib\PurchaseOrderServiceClient();
```

### Complete example

```php
<?php
require_once __DIR__.'/vendor/autoload.php';

use PurchaseOrderServiceLib\Models\OAuthScopeEnum;

session_start();

// Client configuration
$oAuthClientId = 'oAuthClientId';
$oAuthClientSecret = 'oAuthClientSecret';

$client = new PurchaseOrderServiceLib\PurchaseOrderServiceClient($oAuthClientId, $oAuthClientSecret);

// try to restore access token from session
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    PurchaseOrderServiceLib\Configuration::$oAuthToken = $_SESSION['access_token'];
} else {
    try {
        // obtain a new access token
        $token = $client->auth()->authorize([OAuthScopeEnum::SF]);
        $_SESSION['access_token'] = $token;
    } catch (PurchaseOrderServiceLib\Exceptions\OAuthProviderException $ex) {
        // handle exception
        die();
    }
}

// the client is now authorized; you can use $client to make endpoint calls
```



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [PurchaseOrderBindingController](#purchase_order_binding_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="purchase_order_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PurchaseOrderBindingController") PurchaseOrderBindingController

### Get singleton instance

The singleton instance of the ``` PurchaseOrderBindingController ``` class can be accessed from the API Client.

```php
$purchaseOrderBinding = $client->getPurchaseOrderBinding();
```

### <a name="create_order_status"></a>![Method: ](https://apidocs.io/img/method.png ".PurchaseOrderBindingController.createOrderStatus") createOrderStatus

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createOrderStatus($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new GetOrderStatus();

$result = $purchaseOrderBinding->createOrderStatus($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 500 | Error in retrieving response |



### <a name="create_order"></a>![Method: ](https://apidocs.io/img/method.png ".PurchaseOrderBindingController.createOrder") createOrder

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createOrder($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new PurchaseOrder();

$result = $purchaseOrderBinding->createOrder($body);

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
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken($authorization, $scope, $formParams);

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
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken1($authorization, $scope, $formParams);

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
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken2($authorization, $scope, $formParams);

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
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken11($authorization, $scope, $formParams);

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
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken21($authorization, $scope, $formParams);

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
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken11($authorization, $scope, $formParams);

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
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken1($authorization, $scope, $formParams);

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
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken2($authorization, $scope, $formParams);

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
        $scope = null,
        $fieldParameters = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```php
$authorization = 'Authorization';
$scope = 'scope';
// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken3($authorization, $scope, $formParams);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



[Back to List of Controllers](#list_of_controllers)



