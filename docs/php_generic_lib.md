# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=AWSECommerceService-PHP)

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

The following section explains how to use the AWSECommerceService library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=AWSECommerceService-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=AWSECommerceService-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=AWSECommerceService-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=AWSECommerceService-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=AWSECommerceService-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=AWSECommerceService-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=AWSECommerceService-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=AWSECommerceService-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=AWSECommerceService-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=AWSECommerceService-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=AWSECommerceService-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=AWSECommerceService-PHP)

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
| aFIeyt | TODO: add a description |
| b | TODO: add a description |
| c | TODO: add a description |
| oAuthClientId | OAuth 2 Client ID |
| oAuthClientSecret | OAuth 2 Client Secret |
| oAuthRedirectUri | OAuth 2 Redirection endpoint or Callback Uri |



API client can be initialized as following.

```php
$aFIeyt = 'aFIeyt';
$b = 'b';
$c = 'c';
$oAuthClientId = 'oAuthClientId'; // OAuth 2 Client ID
$oAuthClientSecret = 'oAuthClientSecret'; // OAuth 2 Client Secret
$oAuthRedirectUri = 'https://example.com/oauth/callback'; // OAuth 2 Redirection endpoint or Callback Uri

$client = new AWSECommerceServiceLib\AWSECommerceServiceClient($aFIeyt, $b, $c, $oAuthClientId, $oAuthClientSecret, $oAuthRedirectUri);
```

You must authorize now authorize the client.

### Authorizing your client

Your application must obtain user authorization before it can execute an endpoint call.
The SDK uses *OAuth 2.0 authorization* to obtain a user's consent to perform an API request on user's behalf.

#### 1. Obtain user consent

To obtain user's consent, you must redirect the user to the authorization page. The `buildAuthorizationUrl()` method creates the URL to the authorization page. You must pass
the *[scopes](#scopes)* for which you need permission to access.
```php
$authUrl = $client->auth()->buildAuthorizationUrl([OAuthScopeEnum::ASDA]);
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
} catch (AWSECommerceServiceLib\Exceptions\OAuthProviderException $ex) {
    // handle exception
}
```

### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the `AWSECommerceServiceLib\Models\OAuthScopeEnum` enumeration.

| Scope Name | Description |
| --- | --- |
| `ASDA` |  |

### Refreshing token

An access token may expire after sometime. To extend its lifetime, you must refresh the token.

```php
if ($client->auth()->isTokenExpired()) {
    try {
        $client->auth()->refreshToken();
    } catch (AWSECommerceServiceLib\Exceptions\OAuthProviderException $ex) {
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
$_SESSION['access_token'] = AWSECommerceServiceLib\Configuration::$oAuthToken;
```

However, since the the SDK will attempt to automatically refresh the token when it expires, it is recommended that you register a *token update callback* to detect any change to the access token.

```php
AWSECommerceServiceLib\Configuration::$oAuthTokenUpdateCallback = function($token) {
    // use session or some other way to persist the $token
    $_SESSION['access_token'] = $token;
};
```

The token update callback will be fired upon authorization as well as token refresh.

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token in `Configuration` along with the other configuration parameters before creating the client:

```php
// load token later...
AWSECommerceServiceLib\Configuration::$oAuthToken = $_SESSION['access_token'];

// Set other configuration, then instantiate client
$client = new AWSECommerceServiceLib\AWSECommerceServiceClient();
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
$aFIeyt = 'aFIeyt';
$b = 'b';
$c = 'c';
$oAuthClientId = 'oAuthClientId';
$oAuthClientSecret = 'oAuthClientSecret';
$oAuthRedirectUri = 'http://' . $_SERVER['HTTP_HOST'] . '/authcallback.php';

$client = new AWSECommerceServiceLib\AWSECommerceServiceClient($aFIeyt, $b, $c, $oAuthClientId, $oAuthClientSecret, $oAuthRedirectUri);

// callback stores token for reuse when token is updated
AWSECommerceServiceLib\Configuration::$oAuthTokenUpdateCallback = function($token) {
    $_SESSION['access_token'] = $token;
};

// check if a token is available
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    // set access token in configuration
    AWSECommerceServiceLib\Configuration::$oAuthToken = $_SESSION['access_token'];

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

use AWSECommerceServiceLib\Models\OAuthScopeEnum;

session_start();

// Client configuration
$aFIeyt = 'aFIeyt';
$b = 'b';
$c = 'c';
$oAuthClientId = 'oAuthClientId';
$oAuthClientSecret = 'oAuthClientSecret';
$oAuthRedirectUri = 'http://' . $_SERVER['HTTP_HOST'] . '/authcallback.php';

$client = new AWSECommerceServiceLib\AWSECommerceServiceClient($aFIeyt, $b, $c, $oAuthClientId, $oAuthClientSecret, $oAuthRedirectUri);

// callback stores token for reuse when token is updated
AWSECommerceServiceLib\Configuration::$oAuthTokenUpdateCallback = function($token) {
    $_SESSION['access_token'] = $token;
};

if (! isset($_GET['code'])) {
    // if authorization code is absent, redirect to authorization page
    $authUrl = $client->auth()->buildAuthorizationUrl([OAuthScopeEnum::ASDA]);
    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
} else {
    try {
        // authorize client (calls token update callback as well)
        $token = $client->auth()->authorize($_GET['code']);

        // resume user activity
        $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
    } catch (AWSECommerceServiceLib\Exceptions\OAuthProviderException $ex) {
        // handle exception
    }
}
```



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [AWSECommerceServiceBindingController](#awse_commerce_service_binding_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="awse_commerce_service_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AWSECommerceServiceBindingController") AWSECommerceServiceBindingController

### Get singleton instance

The singleton instance of the ``` AWSECommerceServiceBindingController ``` class can be accessed from the API Client.

```php
$aWSECommerceServiceBinding = $client->getAWSECommerceServiceBinding();
```

### <a name="create_cart_clear"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear") createCartClear

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartClear($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartClearRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartClear($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 410 | new |



### <a name="create_cart_modify"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify") createCartModify

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartModify($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartModifyRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartModify($body);

```


### <a name="create_cart_create"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate") createCartCreate

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartCreate($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartCreateRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartCreate($body);

```


### <a name="create_cart_add"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd") createCartAdd

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartAdd($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartAddRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartAdd($body);

```


### <a name="create_cart_get"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet") createCartGet

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartGet($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartGetRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartGet($body);

```


### <a name="create_similarity_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup") createSimilarityLookup

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createSimilarityLookup($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SimilarityLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createSimilarityLookup($body);

```


### <a name="create_browse_node_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup") createBrowseNodeLookup

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createBrowseNodeLookup($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new BrowseNodeLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createBrowseNodeLookup($body);

```


### <a name="create_item_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup") createItemLookup

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemLookup($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemLookup($body);

```


### <a name="create_item_search"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch") createItemSearch

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemSearch($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemSearchRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemSearch($body);

```


### <a name="create_item_search9"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch9") createItemSearch9

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemSearch9($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemSearchRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemSearch9($body);

```


### <a name="create_item_lookup10"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup10") createItemLookup10

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemLookup10($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemLookup10($body);

```


### <a name="create_browse_node_lookup11"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup11") createBrowseNodeLookup11

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createBrowseNodeLookup11($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new BrowseNodeLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createBrowseNodeLookup11($body);

```


### <a name="create_similarity_lookup12"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup12") createSimilarityLookup12

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createSimilarityLookup12($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SimilarityLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createSimilarityLookup12($body);

```


### <a name="create_cart_get13"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet13") createCartGet13

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartGet13($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartGetRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartGet13($body);

```


### <a name="create_cart_add14"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd14") createCartAdd14

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartAdd14($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartAddRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartAdd14($body);

```


### <a name="create_cart_create15"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate15") createCartCreate15

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartCreate15($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartCreateRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartCreate15($body);

```


### <a name="create_cart_modify16"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify16") createCartModify16

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartModify16($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartModifyRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartModify16($body);

```


### <a name="create_cart_clear17"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear17") createCartClear17

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartClear17($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartClearRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartClear17($body);

```


### <a name="create_item_search18"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch18") createItemSearch18

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemSearch18($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemSearchRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemSearch18($body);

```


### <a name="create_item_lookup19"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup19") createItemLookup19

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemLookup19($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemLookup19($body);

```


### <a name="create_browse_node_lookup20"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup20") createBrowseNodeLookup20

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createBrowseNodeLookup20($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new BrowseNodeLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createBrowseNodeLookup20($body);

```


### <a name="create_similarity_lookup21"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup21") createSimilarityLookup21

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createSimilarityLookup21($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SimilarityLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createSimilarityLookup21($body);

```


### <a name="create_cart_get22"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet22") createCartGet22

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartGet22($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartGetRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartGet22($body);

```


### <a name="create_cart_add23"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd23") createCartAdd23

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartAdd23($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartAddRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartAdd23($body);

```


### <a name="create_cart_create24"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate24") createCartCreate24

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartCreate24($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartCreateRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartCreate24($body);

```


### <a name="create_cart_modify25"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify25") createCartModify25

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartModify25($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartModifyRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartModify25($body);

```


### <a name="create_cart_clear26"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear26") createCartClear26

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartClear26($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartClearRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartClear26($body);

```


### <a name="create_item_search27"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch27") createItemSearch27

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemSearch27($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemSearchRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemSearch27($body);

```


### <a name="create_item_lookup28"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup28") createItemLookup28

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemLookup28($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemLookup28($body);

```


### <a name="create_browse_node_lookup29"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup29") createBrowseNodeLookup29

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createBrowseNodeLookup29($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new BrowseNodeLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createBrowseNodeLookup29($body);

```


### <a name="create_similarity_lookup30"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup30") createSimilarityLookup30

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createSimilarityLookup30($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SimilarityLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createSimilarityLookup30($body);

```


### <a name="create_cart_get31"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet31") createCartGet31

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartGet31($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartGetRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartGet31($body);

```


### <a name="create_cart_add32"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd32") createCartAdd32

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartAdd32($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartAddRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartAdd32($body);

```


### <a name="create_cart_create33"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate33") createCartCreate33

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartCreate33($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartCreateRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartCreate33($body);

```


### <a name="create_cart_modify34"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify34") createCartModify34

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartModify34($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartModifyRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartModify34($body);

```


### <a name="create_cart_clear35"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear35") createCartClear35

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartClear35($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartClearRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartClear35($body);

```


### <a name="create_item_search36"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch36") createItemSearch36

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemSearch36($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemSearchRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemSearch36($body);

```


### <a name="create_item_lookup37"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup37") createItemLookup37

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemLookup37($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemLookup37($body);

```


### <a name="create_browse_node_lookup38"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup38") createBrowseNodeLookup38

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createBrowseNodeLookup38($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new BrowseNodeLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createBrowseNodeLookup38($body);

```


### <a name="create_similarity_lookup39"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup39") createSimilarityLookup39

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createSimilarityLookup39($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SimilarityLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createSimilarityLookup39($body);

```


### <a name="create_cart_get40"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet40") createCartGet40

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartGet40($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartGetRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartGet40($body);

```


### <a name="create_cart_add41"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd41") createCartAdd41

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartAdd41($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartAddRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartAdd41($body);

```


### <a name="create_cart_create42"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate42") createCartCreate42

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartCreate42($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartCreateRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartCreate42($body);

```


### <a name="create_cart_modify43"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify43") createCartModify43

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartModify43($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartModifyRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartModify43($body);

```


### <a name="create_cart_clear44"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear44") createCartClear44

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartClear44($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartClearRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartClear44($body);

```


### <a name="create_item_search45"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch45") createItemSearch45

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemSearch45($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemSearchRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemSearch45($body);

```


### <a name="create_item_lookup46"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup46") createItemLookup46

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemLookup46($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemLookup46($body);

```


### <a name="create_browse_node_lookup47"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup47") createBrowseNodeLookup47

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createBrowseNodeLookup47($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new BrowseNodeLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createBrowseNodeLookup47($body);

```


### <a name="create_similarity_lookup48"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup48") createSimilarityLookup48

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createSimilarityLookup48($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SimilarityLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createSimilarityLookup48($body);

```


### <a name="create_cart_get49"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet49") createCartGet49

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartGet49($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartGetRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartGet49($body);

```


### <a name="create_cart_add50"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd50") createCartAdd50

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartAdd50($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartAddRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartAdd50($body);

```


### <a name="create_cart_create51"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate51") createCartCreate51

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartCreate51($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartCreateRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartCreate51($body);

```


### <a name="create_cart_modify52"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify52") createCartModify52

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartModify52($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartModifyRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartModify52($body);

```


### <a name="create_cart_clear53"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear53") createCartClear53

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartClear53($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartClearRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartClear53($body);

```


### <a name="create_item_search54"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch54") createItemSearch54

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemSearch54($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemSearchRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemSearch54($body);

```


### <a name="create_item_lookup55"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup55") createItemLookup55

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemLookup55($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemLookup55($body);

```


### <a name="create_browse_node_lookup56"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup56") createBrowseNodeLookup56

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createBrowseNodeLookup56($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new BrowseNodeLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createBrowseNodeLookup56($body);

```


### <a name="create_similarity_lookup57"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup57") createSimilarityLookup57

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createSimilarityLookup57($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SimilarityLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createSimilarityLookup57($body);

```


### <a name="create_cart_get58"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet58") createCartGet58

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartGet58($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartGetRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartGet58($body);

```


### <a name="create_cart_add59"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd59") createCartAdd59

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartAdd59($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartAddRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartAdd59($body);

```


### <a name="create_cart_create60"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate60") createCartCreate60

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartCreate60($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartCreateRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartCreate60($body);

```


### <a name="create_cart_modify61"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify61") createCartModify61

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartModify61($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartModifyRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartModify61($body);

```


### <a name="create_cart_clear62"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear62") createCartClear62

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartClear62($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartClearRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartClear62($body);

```


### <a name="create_item_search63"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch63") createItemSearch63

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemSearch63($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemSearchRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemSearch63($body);

```


### <a name="create_item_lookup64"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup64") createItemLookup64

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemLookup64($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemLookup64($body);

```


### <a name="create_browse_node_lookup65"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup65") createBrowseNodeLookup65

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createBrowseNodeLookup65($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new BrowseNodeLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createBrowseNodeLookup65($body);

```


### <a name="create_similarity_lookup66"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup66") createSimilarityLookup66

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createSimilarityLookup66($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SimilarityLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createSimilarityLookup66($body);

```


### <a name="create_cart_get67"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet67") createCartGet67

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartGet67($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartGetRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartGet67($body);

```


### <a name="create_cart_add68"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd68") createCartAdd68

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartAdd68($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartAddRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartAdd68($body);

```


### <a name="create_cart_create69"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate69") createCartCreate69

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartCreate69($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartCreateRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartCreate69($body);

```


### <a name="create_cart_modify70"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify70") createCartModify70

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartModify70($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartModifyRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartModify70($body);

```


### <a name="create_cart_clear71"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear71") createCartClear71

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartClear71($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartClearRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartClear71($body);

```


### <a name="create_item_search72"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch72") createItemSearch72

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemSearch72($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemSearchRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemSearch72($body);

```


### <a name="create_item_lookup73"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup73") createItemLookup73

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemLookup73($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemLookup73($body);

```


### <a name="create_browse_node_lookup74"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup74") createBrowseNodeLookup74

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createBrowseNodeLookup74($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new BrowseNodeLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createBrowseNodeLookup74($body);

```


### <a name="create_similarity_lookup75"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup75") createSimilarityLookup75

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createSimilarityLookup75($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SimilarityLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createSimilarityLookup75($body);

```


### <a name="create_cart_get76"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet76") createCartGet76

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartGet76($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartGetRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartGet76($body);

```


### <a name="create_cart_add77"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd77") createCartAdd77

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartAdd77($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartAddRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartAdd77($body);

```


### <a name="create_cart_create78"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate78") createCartCreate78

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartCreate78($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartCreateRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartCreate78($body);

```


### <a name="create_cart_modify79"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify79") createCartModify79

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartModify79($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartModifyRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartModify79($body);

```


### <a name="create_cart_clear80"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear80") createCartClear80

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartClear80($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartClearRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartClear80($body);

```


### <a name="create_item_search81"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch81") createItemSearch81

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemSearch81($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemSearchRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemSearch81($body);

```


### <a name="create_item_lookup82"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup82") createItemLookup82

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemLookup82($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemLookup82($body);

```


### <a name="create_browse_node_lookup83"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup83") createBrowseNodeLookup83

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createBrowseNodeLookup83($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new BrowseNodeLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createBrowseNodeLookup83($body);

```


### <a name="create_similarity_lookup84"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup84") createSimilarityLookup84

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createSimilarityLookup84($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SimilarityLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createSimilarityLookup84($body);

```


### <a name="create_cart_get85"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet85") createCartGet85

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartGet85($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartGetRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartGet85($body);

```


### <a name="create_cart_add86"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd86") createCartAdd86

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartAdd86($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartAddRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartAdd86($body);

```


### <a name="create_cart_create87"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate87") createCartCreate87

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartCreate87($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartCreateRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartCreate87($body);

```


### <a name="create_cart_modify88"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify88") createCartModify88

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartModify88($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartModifyRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartModify88($body);

```


### <a name="create_cart_clear89"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear89") createCartClear89

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartClear89($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartClearRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartClear89($body);

```


### <a name="create_item_search90"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch90") createItemSearch90

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemSearch90($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemSearchRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemSearch90($body);

```


### <a name="create_item_lookup91"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup91") createItemLookup91

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createItemLookup91($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ItemLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createItemLookup91($body);

```


### <a name="create_browse_node_lookup92"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup92") createBrowseNodeLookup92

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createBrowseNodeLookup92($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new BrowseNodeLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createBrowseNodeLookup92($body);

```


### <a name="create_similarity_lookup93"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup93") createSimilarityLookup93

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createSimilarityLookup93($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SimilarityLookupRequestMsgModel();

$result = $aWSECommerceServiceBinding->createSimilarityLookup93($body);

```


### <a name="create_cart_get94"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet94") createCartGet94

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartGet94($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartGetRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartGet94($body);

```


### <a name="create_cart_add95"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd95") createCartAdd95

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartAdd95($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartAddRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartAdd95($body);

```


### <a name="create_cart_create96"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate96") createCartCreate96

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartCreate96($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartCreateRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartCreate96($body);

```


### <a name="create_cart_modify97"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify97") createCartModify97

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartModify97($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartModifyRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartModify97($body);

```


### <a name="create_cart_clear98"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear98") createCartClear98

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCartClear98($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CartClearRequestMsgModel();

$result = $aWSECommerceServiceBinding->createCartClear98($body);

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
        $options,
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
$collect['authorization'] = $authorization;

$code = 'code';
$collect['code'] = $code;

$redirectUri = 'redirect_uri';
$collect['redirectUri'] = $redirectUri;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken($collect, $formParams, );

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
        $options,
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
$collect['authorization'] = $authorization;

$refreshToken = 'refresh_token';
$collect['refreshToken'] = $refreshToken;

$scope = 'scope';
$collect['scope'] = $scope;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken($collect, $formParams, );

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
        $options,
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
$collect['authorization'] = $authorization;

$code = 'code';
$collect['code'] = $code;

$redirectUri = 'redirect_uri';
$collect['redirectUri'] = $redirectUri;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken1($collect, $formParams, );

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
        $options,
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
$collect['authorization'] = $authorization;

$refreshToken = 'refresh_token';
$collect['refreshToken'] = $refreshToken;

$scope = 'scope';
$collect['scope'] = $scope;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken1($collect, $formParams, );

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
        $options,
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
$collect['authorization'] = $authorization;

$code = 'code';
$collect['code'] = $code;

$redirectUri = 'redirect_uri';
$collect['redirectUri'] = $redirectUri;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken2($collect, $formParams, );

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
        $options,
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
$collect['authorization'] = $authorization;

$refreshToken = 'refresh_token';
$collect['refreshToken'] = $refreshToken;

$scope = 'scope';
$collect['scope'] = $scope;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken2($collect, $formParams, );

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
        $options,
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
$collect['authorization'] = $authorization;

$code = 'code';
$collect['code'] = $code;

$redirectUri = 'redirect_uri';
$collect['redirectUri'] = $redirectUri;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken3($collect, $formParams, );

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
        $options,
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
$collect['authorization'] = $authorization;

$refreshToken = 'refresh_token';
$collect['refreshToken'] = $refreshToken;

$scope = 'scope';
$collect['scope'] = $scope;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken3($collect, $formParams, );

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token4"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken4") createRequestToken4

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```php
function createRequestToken4(
        $options,
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
$collect['authorization'] = $authorization;

$code = 'code';
$collect['code'] = $code;

$redirectUri = 'redirect_uri';
$collect['redirectUri'] = $redirectUri;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken4($collect, $formParams, );

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token4"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken4") createRefreshToken4

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```php
function createRefreshToken4(
        $options,
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
$collect['authorization'] = $authorization;

$refreshToken = 'refresh_token';
$collect['refreshToken'] = $refreshToken;

$scope = 'scope';
$collect['scope'] = $scope;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken4($collect, $formParams, );

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token5"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken5") createRequestToken5

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```php
function createRequestToken5(
        $options,
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
$collect['authorization'] = $authorization;

$code = 'code';
$collect['code'] = $code;

$redirectUri = 'redirect_uri';
$collect['redirectUri'] = $redirectUri;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken5($collect, $formParams, );

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token5"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken5") createRefreshToken5

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```php
function createRefreshToken5(
        $options,
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
$collect['authorization'] = $authorization;

$refreshToken = 'refresh_token';
$collect['refreshToken'] = $refreshToken;

$scope = 'scope';
$collect['scope'] = $scope;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken5($collect, $formParams, );

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
        $options,
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
$collect['authorization'] = $authorization;

$code = 'code';
$collect['code'] = $code;

$redirectUri = 'redirect_uri';
$collect['redirectUri'] = $redirectUri;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken1($collect, $formParams, );

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
        $options,
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
$collect['authorization'] = $authorization;

$refreshToken = 'refresh_token';
$collect['refreshToken'] = $refreshToken;

$scope = 'scope';
$collect['scope'] = $scope;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken1($collect, $formParams, );

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
        $options,
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
$collect['authorization'] = $authorization;

$code = 'code';
$collect['code'] = $code;

$redirectUri = 'redirect_uri';
$collect['redirectUri'] = $redirectUri;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRequestToken2($collect, $formParams, );

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
        $options,
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
$collect['authorization'] = $authorization;

$refreshToken = 'refresh_token';
$collect['refreshToken'] = $refreshToken;

$scope = 'scope';
$collect['scope'] = $scope;

// key-value map for optional form parameters
$formParams = array('key' => 'value');


$result = $oAuthAuthorization->createRefreshToken2($collect, $formParams, );

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



[Back to List of Controllers](#list_of_controllers)



