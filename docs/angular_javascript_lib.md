# Getting started

## How to Build

The generated SDK requires AngularJS framework to work. If you do not already have angular downloaded, please go ahead and do it from [here](https://angularjs.org/).
If any of your models have `Date` or `Datetime` type fields or your endpoints have `Date`/`Datetime` type response, you will need to download and link [angular-moment](https://cdnjs.cloudflare.com/ajax/libs/angular-moment/1.0.1/angular-moment.min.js) and [moment.js](https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js) with your project.

## How to Use

The following section describes how to use the generated SDK in an existing/new project.

### 1. Configure Angular and Generated SDK
Perform the following steps to configure angular and the SDK:
+ Make a `scripts` folder inside the root folder of the project. If you already have a `scripts` folder, skip to the next step.
+ Move the `angular.min.js` file inside the scripts folder. 
+ Move the `BibcodeQueryLib` folder inside the scripts folder.
+ If any of the Custom Types in your API have `Date`/`Datetime` type fields or any endpoint has `Date`/`Datetime` response, you will need to download angular-moment and moment.js. Move these 2 files into the `scripts` folder as well.

![folder-structure-image](https://apidocs.io/illustration/angularjs?step=folderStructure&workspaceFolder=BibcodeQuery-Angular&projectName=BibcodeQueryLib)

### 2. Open Project Folder
Open an IDE/Text Editor for JavaScript like Sublime Text. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.  
Click on `File` and select `Open Folder`

Select the folder of your SDK and click on `Select Folder` to open it up in Sublime Text. The folder will become visible in the bar on the left.

![open-folder-image](https://apidocs.io/illustration/angularjs?step=openFolder&workspaceFolder=BibcodeQuery-Angular)

### 3. Create an Angular Application
Since Angular JS is used for client-side web development, in order to use the generated library, you will have to develop an application first.
If you already have an angular application, [skip to Step 6](#6-include-sdk-references-in-html-file). Otherwise, follow these steps to create one:

+ In the IDE, click on `File` and choose `New File` to create a new file.
+ Add the following starting code in the file:
```js
var app = angular.module('myApp', []);
app.controller('testController', function($scope) 
{

});
```
+ Save it with the name `app.js` in the `scripts` folder.


### 4. Create HTML File
Skip to the next step if you are working with an existing project and already have an html file. Otherwise follow the steps to create one:
+ Inside the IDE, right click on the project folder name and select the `New File` option to create a new test file.
+ Save it with an appropriate name such as `index.html` in the root of your project folder.
`index.html` should look like this:
```html
<!DOCTYPE html>
<html>
<head>
	<title>Angular Project</title>
	<script></script>
</head>

<body>
</body>

</html>
```

![initial-html-code-image](https://apidocs.io/illustration/angularjs?step=initialCode&workspaceFolder=BibcodeQuery-Angular)

### 5. Including links to Angular in HTML file
Your HTML file needs to have a link to `angular.min.js` file to use Angular-JS. Add the link using `script` tags inside the `head` section of `index.html` like:
```html
<script src="scripts/angular.min.js" ></script>
```
If any of the Custom Types that you have defined have `Date`/`Datetime` type fields or any endpoint has `Date`/`Datetime` response, you will also need to link to angular-moment and moment.js like:
```html
<script src="scripts/angular.min.js" ></script>
<script src="scripts/moment.min.js" ></script>
<script src="scripts/angular-moment.min.js" ></script>
```

### 6. Include SDK references in HTML file
Import the reference to the generated SDK files inside your html file like:
```html
<head>
    ...
    <!-- Helper files -->
    <script src="scripts/BibcodeQueryLib/Module.js"></script>
    <script src="scripts/BibcodeQueryLib/Configuration.js"></script>
    <script src="scripts/BibcodeQueryLib/ModelFactory.js"></script>
    <script src="scripts/BibcodeQueryLib/ObjectMapper.js"></script>
    <script src="scripts/BibcodeQueryLib/APIHelper.js"></script>
    <script src="scripts/BibcodeQueryLib/Http/Client/HttpContext.js"></script>
    <script src="scripts/BibcodeQueryLib/Http/Client/RequestClient.js"></script>
    <script src="scripts/BibcodeQueryLib/Http/Request/HttpRequest.js"></script>
    <script src="scripts/BibcodeQueryLib/Http/Response/HttpResponse.js"></script>

    <!-- API Controllers -->
    <script src="scripts/BibcodeQueryLib/Controllers/BaseController.js"></script>
    <script src="scripts/BibcodeQueryLib/Controllers/BibcodeQueryBindingController.js"></script>
    <script src="scripts/BibcodeQueryLib/Controllers/APIController.js"></script>
    <script src="scripts/BibcodeQueryLib/Controllers/OAuthAuthorizationController.js"></script>


    <!-- Models -->
    <script src="scripts/BibcodeQueryLib/Models/BaseModel.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/ReturnBibcode.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/TestRequest.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/New.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/OAuthToken.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/OAuthProviderErrorEnum.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/OAuthToken.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/OAuthProviderErrorEnum.js"></script>

    ...
</head>
```
> The `Module.js` file should be imported before the other files. After `Module.js`, `Configuration.js` should be imported.
> The `ModelFactory.js` file is needed by `ObjectMapper.js` file. The `ObjectMapper` in turn, is needed by `BaseController.js`.

### 7. Including link to `app.js` in HTML file
Link your `app.js` file to your `index.html` file like:
```html
<head>
	...
	<script src="scripts/app.js"></script>
</head>
```
> The link to app.js needs to be included at the very end of the head tag, after the SDK references have been added

### 8. Initializing the Angular App
You need to initialize your app and the controller associated with your view inside your `index.html` file. Do so like:
+ Add ng-app directive to initialize your app inside the `body` tag.
```html
<body ng-app="myApp">
```
+ Add ng-controller directive to initialize your controller and bind it with your view (`index.html` file).
```html
...
<body ng-app="myApp">
	<div ng-controller="testController">
		...
	</div>
	...
</body>
...
```

### 9. Consuming the SDK 
In order to use the generated SDK's modules, controllers and factories, the project needs to be added as a dependency in your angular app's module. This will be done inside the `app.js` file.
Add the dependency like this:

```js
var app = angular.module('myApp', ['BibcodeQueryLib']);
```
At this point, the SDK has been successfully included in your project. Further steps include using a service/factory from the generated SDK. To see working example of this, please head on [over here](#list-of-controllers) and choose any class to see its functions and example usage.  

### 10. Running The App
To run the app, simply open up the `index.html` file in a browser.

![app-running](https://apidocs.io/illustration/angularjs?step=appRunning)

## Initialization


The Angular Application can be initialized as following:
```JavaScript
var app = angular.module('myApp', [BibcodeQueryLib]);
// now controllers/services can be created which import
// the factories provided by the sdk
```
### Authentication
In order to setup authentication and initialization of the Angular App, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthClientId | OAuth 2 Client ID |
| oAuthClientSecret | OAuth 2 Client Secret |
| oAuthUsername | OAuth 2 Resource Owner Username |
| oAuthPassword | OAuth 2 Resource Owner Password |



```JavaScript
var app = angular.module('myApp', [BibcodeQueryLib]);
app.factory('config', function($scope, Configuration) 
{
    return {
        setConfigVars: function() {
            // Configuration parameters and credentials
            Configuration.oAuthClientId = 'oAuthClientId'; // OAuth 2 Client ID
            Configuration.oAuthClientSecret = 'oAuthClientSecret'; // OAuth 2 Client Secret
            Configuration.oAuthUsername = 'oAuthUsername'; // OAuth 2 Resource Owner Username
            Configuration.oAuthPassword = 'oAuthPassword'; // OAuth 2 Resource Owner Password
            
        }
    };
});
```

You must now authorize the client.

### Authorizing your client


Your application must obtain user authorization before it can execute an endpoint call.
This SDK uses *OAuth 2.0 authorization* to authorize the client.

The `authorize()` method will exchange the user's credentials for an *access token*.
The access token is an object containing information for authorizing client requests and refreshing the token itself.



```JavaScript
var app = angular.module('OAuthTest', ['BibcodeQueryLib']);

app.controller('oauthClientController', function($scope, OAuthManager) {
    var scopes = [];
    var promise = OAuthManager.authorize(scopes);
    promise.then(function(success) {
        // client successfully authorized
    });
});
```

The client can now make authorized endpoint calls.



### Refreshing token

Access tokens may expire after sometime. To extend its lifetime, you must refresh the token.

```JavaScript
var app = angular.module('OAuthTest', ['BibcodeQueryLib']);

app.controller('oauthClientController', function($scope, OAuthManager) {
    var refreshPromise = OAuthManager.refreshToken();
    promise.then(function(success) {
        // token refreshed
    });
});
```

If a token expires, the SDK will attempt to automatically refresh the token before the next endpoint call which requires authentication.




### Watching for access token updates

Since the the SDK will attempt to automatically refresh the token when it expires, it is recommended that you register a **token update callback** to detect any change to the access token.

```JavaScript
var app = angular.module('OAuthTest', ['BibcodeQueryLib']);

app.controller('oauthClientController', function($scope, Configuration) {
    Configuration.oAuthTokenUpdateCallback = function(token) {
        // token passed here is the Configuration.oAuthToken
    }
});
```

The token update callback will be fired upon authorization as well as token refresh.

### Creating a client from an existing token

To authorize a client from an existing access token, just set the access token in `Configuration` along with the other configuration parameters:

```JavaScript
var app = angular.module('OAuthTest', ['BibcodeQueryLib']);

app.controller('config', function($scope, Configuration) {
    Configuration.oAuthToken = sessionStorage.getItem('token'); // the existing token stored in sessionStorage of browser
});
```


### Complete example
In this example, `app.js` will check if the access token has been obtained. If it hasn't been, the client needs to be authorized first.
After authorization, endpoint calls can be made.

#### `app.js`

```JavaScript
var app = angular.module('OAuthTest', ['BibcodeQueryLib']);

app.controller('oauthClientController', function($scope, OAuthManager, Configuration) {
    Configuration.oAuthClientId = 'oAuthClientId'; // OAuth 2 Client ID
    Configuration.oAuthClientSecret = 'oAuthClientSecret'; // OAuth 2 Client Secret
    Configuration.oAuthUsername = 'oAuthUsername'; // OAuth 2 Resource Owner Username
    Configuration.oAuthPassword = 'oAuthPassword'; // OAuth 2 Resource Owner Password

    Configuration.oAuthTokenUpdateCallback = function(token) {
        sessionStorage.setItem('token', token);
    }

    if (OAuthManager.isTokenSet()) {
        // token was already set, make API calls as required
    } else {
        // since token is not set, client needs to obtain
        // an access token first
        var scopes = [];
        var promise = OAuthManager.authorize(scopes);
        promise.then(function(success) {
            // client successfully authorized
            // make endpoint calls as required
            // client will automatically refresh the token when it expires and
            // call the token update callback
        });
    }

});
```

#### `index.html`
```html
<!DOCTYPE html>
<html>

<head>
    <title>OAuthTest</title>
    <meta charset="UTF8">

    <script src="scripts/angular.min.js"></script>

    <script src="scripts/BibcodeQueryLib/Module.js"></script>
    <script src="scripts/BibcodeQueryLib/Configuration.js"></script>
    <script src="scripts/BibcodeQueryLib/ModelFactory.js"></script>
    <script src="scripts/BibcodeQueryLib/ObjectMapper.js"></script>
    <script src="scripts/BibcodeQueryLib/APIHelper.js"></script>
    <script src="scripts/BibcodeQueryLib/Servers.js"></script>
    <script src="scripts/BibcodeQueryLib/Environments.js"></script>
    <script src="scripts/BibcodeQueryLib/Http/Client/HttpContext.js"></script>
    <script src="scripts/BibcodeQueryLib/Http/Request/HttpRequest.js"></script>
    <script src="scripts/BibcodeQueryLib/Http/Response/HttpResponse.js"></script>
    <script src="scripts/BibcodeQueryLib/Http/Client/RequestClient.js"></script>

    <!-- API Controllers -->
    <script src="scripts/BibcodeQueryLib/Controllers/BaseController.js"></script>
    <script src="scripts/BibcodeQueryLib/Controllers/BibcodeQueryBindingController.js"></script>
    <script src="scripts/BibcodeQueryLib/Controllers/APIController.js"></script>
    <script src="scripts/BibcodeQueryLib/Controllers/OAuthAuthorizationController.js"></script>


    <!-- Models -->
    <script src="scripts/BibcodeQueryLib/Models/BaseModel.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/ReturnBibcode.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/TestRequest.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/New.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/OAuthToken.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/OAuthProviderErrorEnum.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/OAuthToken.js"></script>
    <script src="scripts/BibcodeQueryLib/Models/OAuthProviderErrorEnum.js"></script>


    <script src="scripts/BibcodeQueryLib/OAuthManager.js"></script>
    <script src="scripts/app.js"></script>

</head>


<body ng-app="OAuthTest">
    <div ng-controller="oauthClientController">

    </div>
</body>

</html>
```



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [BibcodeQueryBindingController](#bibcode_query_binding_controller)
* [APIController](#api_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="bibcode_query_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png ".BibcodeQueryBindingController") BibcodeQueryBindingController

### Get singleton instance

The singleton instance of the ``` BibcodeQueryBindingController ``` class can be accessed via Dependency Injection.

```js
	app.controller("testController", function($scope, BibcodeQueryBindingController, ReturnBibcode){
	});
```

### <a name="get_bibcode"></a>![Method: ](https://apidocs.io/img/method.png ".BibcodeQueryBindingController.getBibcode") getBibcode

> *Tags:*  ``` Skips Authentication ``` 

> getBibcode


```javascript
function getBibcode(bibcode, dbKey, dataType)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| bibcode |  ``` Required ```  | TODO: Add a parameter description |
| dbKey |  ``` Required ```  | TODO: Add a parameter description |
| dataType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, BibcodeQueryBindingController, ReturnBibcode){
        var bibcode = 'bibcode';
        var dbKey = db_key;
        var dataType = data_type;


		var result = BibcodeQueryBindingController.getBibcode(bibcode, dbKey, dataType);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



[Back to List of Controllers](#list_of_controllers)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

### Get singleton instance

The singleton instance of the ``` APIController ``` class can be accessed via Dependency Injection.

```js
	app.controller("testController", function($scope, APIController){
	});
```

### <a name="create_test"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createTest") createTest

> TODO: Add a method description


```javascript
function createTest(body, cacheControl, contentType, postmanToken)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, APIController){
        var body = new TestRequest({"key":"value"});
        var cacheControl = 'cache-control';
        var contentType = 'content-type';
        var postmanToken = 'postman-token';


		var result = APIController.createTest(body, cacheControl, contentType, postmanToken);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



[Back to List of Controllers](#list_of_controllers)

## <a name="o_auth_authorization_controller"></a>![Class: ](https://apidocs.io/img/class.png ".OAuthAuthorizationController") OAuthAuthorizationController

### Get singleton instance

The singleton instance of the ``` OAuthAuthorizationController ``` class can be accessed via Dependency Injection.

```js
	app.controller("testController", function($scope, OAuthAuthorizationController, OAuthToken){
	});
```

### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken") createRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```javascript
function createRequestToken(authorization, username, password, scope, formParams)
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

```javascript


	app.controller("testController", function($scope, OAuthAuthorizationController, OAuthToken){
        var authorization = 'Authorization';
        var username = 'username';
        var password = 'password';
        var scope = 'scope';
    // key-value map for optional form parameters
    var formParams = [];


		var result = OAuthAuthorizationController.createRequestToken(authorization, username, password, scope, formParams);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken") createRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```javascript
function createRefreshToken(authorization, refreshToken, scope, formParams)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```javascript


	app.controller("testController", function($scope, OAuthAuthorizationController, OAuthToken){
        var authorization = 'Authorization';
        var refreshToken = refresh_token;
        var scope = 'scope';
    // key-value map for optional form parameters
    var formParams = [];


		var result = OAuthAuthorizationController.createRefreshToken(authorization, refreshToken, scope, formParams);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken") createRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```javascript
function createRequestToken(authorization, username, password, scope, formParams)
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

```javascript


	app.controller("testController", function($scope, OAuthAuthorizationController, OAuthToken){
        var authorization = 'Authorization';
        var username = 'username';
        var password = 'password';
        var scope = 'scope';
    // key-value map for optional form parameters
    var formParams = [];


		var result = OAuthAuthorizationController.createRequestToken(authorization, username, password, scope, formParams);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken") createRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```javascript
function createRefreshToken(authorization, refreshToken, scope, formParams)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```javascript


	app.controller("testController", function($scope, OAuthAuthorizationController, OAuthToken){
        var authorization = 'Authorization';
        var refreshToken = refresh_token;
        var scope = 'scope';
    // key-value map for optional form parameters
    var formParams = [];


		var result = OAuthAuthorizationController.createRefreshToken(authorization, refreshToken, scope, formParams);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




[Back to List of Controllers](#list_of_controllers)


