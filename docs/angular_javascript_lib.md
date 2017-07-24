# Getting started

TODO: Add a description

## How to Build

The generated SDK requires AngularJS framework to work. If you do not already have angular downloaded, please go ahead and do it from [here](https://angularjs.org/).
If any of your models have `Date` or `Datetime` type fields or your endpoints have `Date`/`Datetime` type response, you will need to download and link [angular-moment](https://cdnjs.cloudflare.com/ajax/libs/angular-moment/1.0.1/angular-moment.min.js) and [moment.js](https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js) with your project.

## How to Use

The following section describes how to use the generated SDK in an existing/new project.

### 1. Configure Angular and Generated SDK
Perform the following steps to configure angular and the SDK:
+ Make a `scripts` folder inside the root folder of the project. If you already have a `scripts` folder, skip to the next step.
+ Move the `angular.min.js` file inside the scripts folder. 
+ Move the `APITitleLib` folder inside the scripts folder.
+ If any of the Custom Types in your API have `Date`/`Datetime` type fields or any endpoint has `Date`/`Datetime` response, you will need to download angular-moment and moment.js. Move these 2 files into the `scripts` folder as well.

![folder-structure-image](https://apidocs.io/illustration/angularjs?step=folderStructure&workspaceFolder=API%20Title-Angular&projectName=APITitleLib)

### 2. Open Project Folder
Open an IDE/Text Editor for JavaScript like Sublime Text. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.  
Click on `File` and select `Open Folder`

Select the folder of your SDK and click on `Select Folder` to open it up in Sublime Text. The folder will become visible in the bar on the left.

![open-folder-image](https://apidocs.io/illustration/angularjs?step=openFolder&workspaceFolder=API%20Title-Angular)

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

![initial-html-code-image](https://apidocs.io/illustration/angularjs?step=initialCode&workspaceFolder=API%20Title-Angular)

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
    <script src="scripts/APITitleLib/Module.js"></script>
    <script src="scripts/APITitleLib/Configuration.js"></script>
    <script src="scripts/APITitleLib/ModelFactory.js"></script>
    <script src="scripts/APITitleLib/ObjectMapper.js"></script>
    <script src="scripts/APITitleLib/APIHelper.js"></script>
    <script src="scripts/APITitleLib/Http/Client/HttpContext.js"></script>
    <script src="scripts/APITitleLib/Http/Client/RequestClient.js"></script>
    <script src="scripts/APITitleLib/Http/Request/HttpRequest.js"></script>
    <script src="scripts/APITitleLib/Http/Response/HttpResponse.js"></script>

    <!-- API Controllers -->
    <script src="scripts/APITitleLib/Controllers/BaseController.js"></script>
    <script src="scripts/APITitleLib/Controllers/NotesController.js"></script>
    <script src="scripts/APITitleLib/Controllers/UsersGggController.js"></script>
    <script src="scripts/APITitleLib/Controllers/TagsAndTaggingLongTitleController.js"></script>
    <script src="scripts/APITitleLib/Controllers/APIController.js"></script>


    <!-- Models -->
    <script src="scripts/APITitleLib/Models/BaseModel.js"></script>
    <script src="scripts/APITitleLib/Models/NoteData.js"></script>
    <script src="scripts/APITitleLib/Models/CreateNewNoteRequest.js"></script>
    <script src="scripts/APITitleLib/Models/CreateNewNoteRequest3.js"></script>
    <script src="scripts/APITitleLib/Models/UpdateANoteRequest.js"></script>
    <script src="scripts/APITitleLib/Models/UpdateANoteRequest7.js"></script>
    <script src="scripts/APITitleLib/Models/SortEnum.js"></script>
    <script src="scripts/APITitleLib/Models/GetUsersResponse.js"></script>
    <script src="scripts/APITitleLib/Models/Sample2Request.js"></script>
    <script src="scripts/APITitleLib/Models/New.js"></script>

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
var app = angular.module('myApp', ['APITitleLib']);
```
At this point, the SDK has been successfully included in your project. Further steps include using a service/factory from the generated SDK. To see working example of this, please head on [over here](#list-of-controllers) and choose any class to see its functions and example usage.  

### 10. Running The App
To run the app, simply open up the `index.html` file in a browser.

![app-running](https://apidocs.io/illustration/angularjs?step=appRunning)

## Initialization


The Angular Application can be initialized as following:
```JavaScript
var app = angular.module('myApp', [APITitleLib]);
// now controllers/services can be created which import
// the factories provided by the sdk
```
### Authentication
In order to setup authentication and initialization of the Angular App, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthAccessToken | OAuth 2.0 Access Token |



```JavaScript
var app = angular.module('myApp', [APITitleLib]);
app.factory('config', function($scope, Configuration) 
{
    return {
        setConfigVars: function() {
            // Configuration parameters and credentials
            Configuration.oAuthAccessToken = 'oAuthAccessToken'; // OAuth 2.0 Access Token
            
        }
    };
});
```



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [NotesController](#notes_controller)
* [UsersGggController](#users_ggg_controller)
* [TagsAndTaggingLongTitleController](#tags_and_tagging_long_title_controller)
* [APIController](#api_controller)

## <a name="notes_controller"></a>![Class: ](https://apidocs.io/img/class.png ".NotesController") NotesController

### Get singleton instance

The singleton instance of the ``` NotesController ``` class can be accessed via Dependency Injection.

```js
	app.controller("testController", function($scope, NotesController, NoteData){
	});
```

### <a name="get_notes"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.getNotes") getNotes

> Get a list of notes.


```javascript
function getNotes()
```

#### Example Usage

```javascript


	app.controller("testController", function($scope, NotesController, NoteData){


		var result = NotesController.getNotes();
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



### <a name="create_new_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.createNewNote") createNewNote

> Create a new note using a title and an optional content body.


```javascript
function createNewNote(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, NotesController){
        var body = new CreateNewNoteRequest({    "title": "My new note",    "body": "This is the body"});


		var result = NotesController.createNewNote(body);
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
| 400 | Unexpected error in API call. See HTTP response body for details. |




### <a name="get_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.getNote") getNote

> Get a single note.


```javascript
function getNote(id, body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Required ```  | Set to `false` to exclude note body content. |



#### Example Usage

```javascript


	app.controller("testController", function($scope, NotesController, NoteData){
        var id = '68a5sdf67';
        var body = false;


		var result = NotesController.getNote(id, body);
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
| 404 | Unexpected error in API call. See HTTP response body for details. |




### <a name="update_a_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.updateANote") updateANote

> Update a single note by setting the title and/or body.
> ::: warning
> #### <i class="fa fa-warning"></i> Caution
> If the value for `title` or `body` is `null` or `undefined`, then the corresponding value is not modified on the server. However, if you send an empty string instead then it will **permanently overwrite** the original value.
> :::


```javascript
function updateANote(id, body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, NotesController, NoteData){
        var id = '68a5sdf67';
        var body = 'body';


		var result = NotesController.updateANote(id, body);
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
| 404 | Unexpected error in API call. See HTTP response body for details. |




### <a name="delete_a_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.deleteANote") deleteANote

> Delete a single note


```javascript
function deleteANote(id, body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, NotesController){
        var id = '68a5sdf67';
        var body = 'body';


		var result = NotesController.deleteANote(id, body);
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
| 404 | Unexpected error in API call. See HTTP response body for details. |




### <a name="get_notes1"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.getNotes1") getNotes1

> Get a list of notes.


```javascript
function getNotes1()
```

#### Example Usage

```javascript


	app.controller("testController", function($scope, NotesController, NoteData){


		var result = NotesController.getNotes1();
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

## <a name="users_ggg_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UsersGggController") UsersGggController

### Get singleton instance

The singleton instance of the ``` UsersGggController ``` class can be accessed via Dependency Injection.

```js
	app.controller("testController", function($scope, UsersGggController, GetUsersResponse){
	});
```

### <a name="get_users"></a>![Method: ](https://apidocs.io/img/method.png ".UsersGggController.getUsers") getUsers

> Get a list of users. Example:
> ```no-highlight
> https://api.mywebsite.com/users?sort=joined&limit=5
> ```


```javascript
function getUsers(name, joinedBefore, joinedAfter, sort, limit)
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


	app.controller("testController", function($scope, UsersGggController, GetUsersResponse){
        var name = 'name';
        var joinedBefore = 'joinedBefore';
        var joinedAfter = 'joinedAfter';
        var sort = Object.keys(SortEnum)[0];
        var limit = 18;


		var result = UsersGggController.getUsers(name, joinedBefore, joinedAfter, sort, limit);
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

## <a name="tags_and_tagging_long_title_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TagsAndTaggingLongTitleController") TagsAndTaggingLongTitleController

### Get singleton instance

The singleton instance of the ``` TagsAndTaggingLongTitleController ``` class can be accessed via Dependency Injection.

```js
	app.controller("testController", function($scope, TagsAndTaggingLongTitleController){
	});
```

### <a name="get_tags"></a>![Method: ](https://apidocs.io/img/method.png ".TagsAndTaggingLongTitleController.getTags") getTags

> Get a list of bars


```javascript
function getTags()
```

#### Example Usage

```javascript


	app.controller("testController", function($scope, TagsAndTaggingLongTitleController){


		var result = TagsAndTaggingLongTitleController.getTags();
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



### <a name="get_get_one_tag"></a>![Method: ](https://apidocs.io/img/method.png ".TagsAndTaggingLongTitleController.getGetOneTag") getGetOneTag

> Get a single tag


```javascript
function getGetOneTag(id)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Unique tag identifier |



#### Example Usage

```javascript


	app.controller("testController", function($scope, TagsAndTaggingLongTitleController){
        var id = 'id';


		var result = TagsAndTaggingLongTitleController.getGetOneTag(id);
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

### <a name="new"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.new") new

> TODO: Add a method description


```javascript
function new(mTesting, cacheControl, contentType, postmanToken)
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


	app.controller("testController", function($scope, APIController){
        var mTesting = { "testing";
        var cacheControl = 'cache-control';
        var contentType = 'content-type';
        var postmanToken = 'postman-token';


		var result = APIController.new(mTesting, cacheControl, contentType, postmanToken);
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



### <a name="create_sample2"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createSample2") createSample2

> TODO: Add a method description


```javascript
function createSample2(body, cacheControl, contentType, postmanToken)
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
        var body = new Sample2Request({"key":"value"});
        var cacheControl = 'cache-control';
        var contentType = 'content-type';
        var postmanToken = 'postman-token';


		var result = APIController.createSample2(body, cacheControl, contentType, postmanToken);
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



