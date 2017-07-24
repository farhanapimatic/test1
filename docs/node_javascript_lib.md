# Getting started

TODO: Add a description

## How to Build

The generated SDK relies on [Node Package Manager](https://www.npmjs.com/) (NPM) being available to resolve dependencies. If you don't already have NPM installed, please go ahead and follow instructions to install NPM from [here](https://nodejs.org/en/download/).
The SDK also requires Node to be installed. If Node isn't already installed, please install it from [here](https://nodejs.org/en/download/)
> NPM is installed by default when Node is installed

To check if node and npm have been successfully installed, write the following commands in command prompt:
* `node --version`
* `npm -version` 
![Version Check](https://apidocs.io/illustration/nodejs?step=versionCheck&workspaceFolder=API%20Title-Node)  

Now use npm to resolve all dependencies by running the following command in the root directory (of the SDK folder):
* `npm install`
![Resolve Dependencies](https://apidocs.io/illustration/nodejs?step=resolveDependency1&workspaceFolder=API%20Title-Node)
![Resolve Dependencies](https://apidocs.io/illustration/nodejs?step=resolveDependency2)

This will install all dependencies in the `node_modules` folder. 

Once dependencies are resolved, you will need to move the folder `APITitleLib ` in to your `node_modules` folder.

## How to Use

The following section explains how to use the library in a new project.

### 1. Open Project Folder
Open an IDE/Text Editor for JavaScript like Sublime Text. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.  
Click on `File` and select `Open Folder`
![Open Folder](https://apidocs.io/illustration/nodejs?step=openFolder)

Select the folder of your SDK and click on `Select Folder` to open it up in Sublime Text. The folder will become visible in the bar on the left.
![Open Project](https://apidocs.io/illustration/nodejs?step=openProject&workspaceFolder=API%20Title-Node)


### 2. Creating a Test File
Now right click on the folder name and select the `New File` option to create a new test file.    Save it as `index.js` Now import the generated NodeJS library using the following lines of code:
```JavaScript
var lib = require('lib');
```
Save changes.

![Create new file](https://apidocs.io/illustration/nodejs?step=createNewFile&workspaceFolder=API%20Title-Node)
![Save new file](https://apidocs.io/illustration/nodejs?step=saveNewFile&workspaceFolder=API%20Title-Node)

### 3. Running The Test File
To run the `index.js` file, open up the command prompt and navigate to the Path where the SDK folder resides. Type the following command to run the file:  
`node index.js`
![Run file](https://apidocs.io/illustration/nodejs?step=runProject&workspaceFolder=API%20Title-Node)


## How to Test

These tests use Mocha framework for testing, coupled with Chai for assertions. These dependencies need to be installed for tests to run.
Tests can be run in a number of ways:

### Method 1 
###### (Run all tests)

1. Navigate to the root directory of the SDK folder from command prompt.
2. Type `mocha --recursive` to run all the tests.

### Method 2
###### (Run all tests)

1. Navigate to the `../test/Controllers/` directory from command prompt.
2. Type `mocha *` to run all the tests.

### Method 3
###### (Run specific controller's tests)

1. Navigate to the `../test/Controllers/` directory from command prompt.
2. Type `mocha  API TitleController`  to run all the tests in that controller file.

> To increase mocha's default timeout, you can change the `TEST_TIMEOUT` parameter's value in `TestBootstrap.js`.  

![Run Tests](https://apidocs.io/illustration/nodejs?step=runTests&controllerName=API%20TitleController)

## Initialization

### Authentication
In order to setup authentication in the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthAccessToken | OAuth 2.0 Access Token |



API client can be initialized as following:

```JavaScript
const lib = require('lib');

// Configuration parameters and credentials
lib.Configuration.oAuthAccessToken = "oAuthAccessToken"; // OAuth 2.0 Access Token

```



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [NotesController](#notes_controller)
* [UsersGggController](#users_ggg_controller)
* [TagsAndTaggingLongTitleController](#tags_and_tagging_long_title_controller)
* [APIController](#api_controller)

## <a name="notes_controller"></a>![Class: ](https://apidocs.io/img/class.png ".NotesController") NotesController

### Get singleton instance

The singleton instance of the ``` NotesController ``` class can be accessed from the API Client.

```javascript
var controller = lib.NotesController;
```

### <a name="get_notes"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.getNotes") getNotes

> Get a list of notes.


```javascript
function getNotes(callback)
```

#### Example Usage

```javascript


    controller.getNotes(function(error, response, context) {

    
	});
```



### <a name="create_new_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.createNewNote") createNewNote

> Create a new note using a title and an optional content body.


```javascript
function createNewNote(body, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript

    var body = new CreateNewNoteRequest({    "title": "My new note",    "body": "This is the body"});

    controller.createNewNote(body, function(error, response, context) {

    
	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Unexpected error in API call. See HTTP response body for details. |




### <a name="get_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.getNote") getNote

> Get a single note.


```javascript
function getNote(id, body, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Required ```  | Set to `false` to exclude note body content. |



#### Example Usage

```javascript

    var id = '68a5sdf67';
    var body = false;

    controller.getNote(id, body, function(error, response, context) {

    
	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |




### <a name="update_a_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.updateANote") updateANote

> Update a single note by setting the title and/or body.
> ::: warning
> #### <i class="fa fa-warning"></i> Caution
> If the value for `title` or `body` is `null` or `undefined`, then the corresponding value is not modified on the server. However, if you send an empty string instead then it will **permanently overwrite** the original value.
> :::


```javascript
function updateANote(id, body, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```javascript

    var id = '68a5sdf67';
    var body = 'body';

    controller.updateANote(id, body, function(error, response, context) {

    
	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |




### <a name="delete_a_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.deleteANote") deleteANote

> Delete a single note


```javascript
function deleteANote(id, body, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```javascript

    var id = '68a5sdf67';
    var body = 'body';

    controller.deleteANote(id, body, function(error, response, context) {

    
	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |




### <a name="get_notes1"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.getNotes1") getNotes1

> Get a list of notes.


```javascript
function getNotes1(callback)
```

#### Example Usage

```javascript


    controller.getNotes1(function(error, response, context) {

    
	});
```



[Back to List of Controllers](#list_of_controllers)

## <a name="users_ggg_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UsersGggController") UsersGggController

### Get singleton instance

The singleton instance of the ``` UsersGggController ``` class can be accessed from the API Client.

```javascript
var controller = lib.UsersGggController;
```

### <a name="get_users"></a>![Method: ](https://apidocs.io/img/method.png ".UsersGggController.getUsers") getUsers

> Get a list of users. Example:
> ```no-highlight
> https://api.mywebsite.com/users?sort=joined&limit=5
> ```


```javascript
function getUsers(name, joinedBefore, joinedAfter, sort, limit, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | Search for a user by name |
| joinedBefore |  ``` Optional ```  | Search by join date |
| joinedAfter |  ``` Optional ```  | Search by join date |
| sort |  ``` Optional ```  ``` DefaultValue ```  | Which field to sort by |
| limit |  ``` Optional ```  | The maximum number of users to return, up to `50` |



#### Example Usage

```javascript

    var name = 'name';
    var joinedBefore = 'joinedBefore';
    var joinedAfter = 'joinedAfter';
    var sort = Object.keys(sort)[0];
    var limit = 83;

    controller.getUsers(name, joinedBefore, joinedAfter, sort, limit, function(error, response, context) {

    
	});
```



[Back to List of Controllers](#list_of_controllers)

## <a name="tags_and_tagging_long_title_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TagsAndTaggingLongTitleController") TagsAndTaggingLongTitleController

### Get singleton instance

The singleton instance of the ``` TagsAndTaggingLongTitleController ``` class can be accessed from the API Client.

```javascript
var controller = lib.TagsAndTaggingLongTitleController;
```

### <a name="get_tags"></a>![Method: ](https://apidocs.io/img/method.png ".TagsAndTaggingLongTitleController.getTags") getTags

> Get a list of bars


```javascript
function getTags(callback)
```

#### Example Usage

```javascript


    controller.getTags(function(error, response, context) {

    
	});
```



### <a name="get_get_one_tag"></a>![Method: ](https://apidocs.io/img/method.png ".TagsAndTaggingLongTitleController.getGetOneTag") getGetOneTag

> Get a single tag


```javascript
function getGetOneTag(id, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Unique tag identifier |



#### Example Usage

```javascript

    var id = 'id';

    controller.getGetOneTag(id, function(error, response, context) {

    
	});
```



[Back to List of Controllers](#list_of_controllers)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

### Get singleton instance

The singleton instance of the ``` APIController ``` class can be accessed from the API Client.

```javascript
var controller = lib.APIController;
```

### <a name="new"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.new") new

> TODO: Add a method description


```javascript
function new(mTesting, cacheControl, contentType, postmanToken, callback)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mTesting |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript

    var mTesting = { "testing";
    var cacheControl = 'cache-control';
    var contentType = 'content-type';
    var postmanToken = 'postman-token';

    controller.new(mTesting, cacheControl, contentType, postmanToken, function(error, response, context) {

    
	});
```



### <a name="create_sample2"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createSample2") createSample2

> TODO: Add a method description


```javascript
function createSample2(body, cacheControl, contentType, postmanToken, callback)
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

    var body = new Sample2Request({"key":"value"});
    var cacheControl = 'cache-control';
    var contentType = 'content-type';
    var postmanToken = 'postman-token';

    controller.createSample2(body, cacheControl, contentType, postmanToken, function(error, response, context) {

    
	});
```



[Back to List of Controllers](#list_of_controllers)



