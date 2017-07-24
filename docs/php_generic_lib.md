# Getting started

TODO: Add a description

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=API%20Title-PHP)

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

The following section explains how to use the APITitle library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=API%20Title-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=API%20Title-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=API%20Title-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=API%20Title-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=API%20Title-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=API%20Title-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=API%20Title-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=API%20Title-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=API%20Title-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=API%20Title-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=API%20Title-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=API%20Title-PHP)

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
| oAuthAccessToken | OAuth 2.0 Access Token |



API client can be initialized as following.

```php
$oAuthAccessToken = 'oAuthAccessToken'; // OAuth 2.0 Access Token

$client = new APITitleLib\APITitleClient($oAuthAccessToken);
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

```php
$notes = $client->getNotes();
```

### <a name="get_notes"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.getNotes") getNotes

> Get a list of notes.


```php
function getNotes()
```

#### Example Usage

```php

$result = $notes->getNotes();

```


### <a name="create_new_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.createNewNote") createNewNote

> Create a new note using a title and an optional content body.


```php
function createNewNote($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$bodyValue = "{    \"title\": \"My new note\",    \"body\": \"This is the body\"}";
$body = APIHelper::deserialize($bodyValue);

$notes->createNewNote($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Unexpected error in API call. See HTTP response body for details. |



### <a name="get_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.getNote") getNote

> Get a single note.


```php
function getNote(
        $id,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Required ```  | Set to `false` to exclude note body content. |



#### Example Usage

```php
$id = '68a5sdf67';
$body = false;

$result = $notes->getNote($id, $body);

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


```php
function updateANote(
        $id,
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = '68a5sdf67';
$body = 'body';

$result = $notes->updateANote($id, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="delete_a_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.deleteANote") deleteANote

> Delete a single note


```php
function deleteANote(
        $id,
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = '68a5sdf67';
$body = 'body';

$notes->deleteANote($id, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="get_notes1"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.getNotes1") getNotes1

> Get a list of notes.


```php
function getNotes1()
```

#### Example Usage

```php

$result = $notes->getNotes1();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="users_ggg_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UsersGggController") UsersGggController

### Get singleton instance

The singleton instance of the ``` UsersGggController ``` class can be accessed from the API Client.

```php
$usersGgg = $client->getUsersGgg();
```

### <a name="get_users"></a>![Method: ](https://apidocs.io/img/method.png ".UsersGggController.getUsers") getUsers

> Get a list of users. Example:
> ```no-highlight
> https://api.mywebsite.com/users?sort=joined&limit=5
> ```


```php
function getUsers(
        $name = null,
        $joinedBefore = null,
        $joinedAfter = null,
        $sort = Models\SortEnum::NAME,
        $limit = null)
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

```php
$name = 'name';
$joinedBefore = 'joinedBefore';
$joinedAfter = 'joinedAfter';
$sort = string::NAME;
$limit = 41;

$result = $usersGgg->getUsers($name, $joinedBefore, $joinedAfter, $sort, $limit);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="tags_and_tagging_long_title_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TagsAndTaggingLongTitleController") TagsAndTaggingLongTitleController

### Get singleton instance

The singleton instance of the ``` TagsAndTaggingLongTitleController ``` class can be accessed from the API Client.

```php
$tagsAndTaggingLongTitle = $client->getTagsAndTaggingLongTitle();
```

### <a name="get_tags"></a>![Method: ](https://apidocs.io/img/method.png ".TagsAndTaggingLongTitleController.getTags") getTags

> Get a list of bars


```php
function getTags()
```

#### Example Usage

```php

$result = $tagsAndTaggingLongTitle->getTags();

```


### <a name="get_get_one_tag"></a>![Method: ](https://apidocs.io/img/method.png ".TagsAndTaggingLongTitleController.getGetOneTag") getGetOneTag

> Get a single tag


```php
function getGetOneTag($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Unique tag identifier |



#### Example Usage

```php
$id = 'id';

$result = $tagsAndTaggingLongTitle->getGetOneTag($id);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

### Get singleton instance

The singleton instance of the ``` APIController ``` class can be accessed from the API Client.

```php
$client = $client->getClient();
```

### <a name="mnew"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.mnew") mnew

> TODO: Add a method description


```php
function mnew(
        $mTesting,
        $cacheControl,
        $contentType,
        $postmanToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mTesting |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$mTesting = '{ "testing"';
$cacheControl = 'cache-control';
$contentType = 'content-type';
$postmanToken = 'postman-token';

$result = $client->mnew($mTesting, $cacheControl, $contentType, $postmanToken);

```


### <a name="create_sample2"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createSample2") createSample2

> TODO: Add a method description


```php
function createSample2(
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
$body = new Sample2Request();
$cacheControl = 'cache-control';
$contentType = 'content-type';
$postmanToken = 'postman-token';

$result = $client->createSample2($body, $cacheControl, $contentType, $postmanToken);

```


[Back to List of Controllers](#list_of_controllers)



