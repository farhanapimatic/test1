# Getting started

TODO: Add a description

## How to Build


The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```PodFile``` file that comes with the SDK. 
To resolve these dependencies, we use the Cocoapods package manager.
Visit https://guides.cocoapods.org/using/getting-started.html to setup Cocoapods on your system.
Open command prompt and type ```pod --version```. This should display the current version of Cocoapods installed if the installation was successful.

Using command line, navigate to the directory containing the generated files (including ```PodFile```) for the SDK. 
Run the command ```pod install```. This should install all the required dependencies and create the ```pods``` directory in your project directory.

![Installing dependencies using Cocoapods](https://apidocs.io/illustration/objc?step=AddDependencies&workspaceFolder=API%20Title-ObjC&workspaceName=APITitle&projectName=APITitle&rootNamespace=APITitle)

Open the project workspace using the (APITitle.xcworkspace) file. Invoke the build process using `Command(⌘)+B` shortcut key or using the `Build` menu as shown below.

![Building SDK using Xcode](https://apidocs.io/illustration/objc?step=BuildSDK&workspaceFolder=API%20Title-ObjC&workspaceName=APITitle&projectName=APITitle&rootNamespace=APITitle)


## How to Use

The generated code is a Cocoa Touch Static Library which can be used in any iOS project. The support for these generated libraries go all the way back to iOS 6.

The following section explains how to use the APITitle library in a new iOS project.     
### 1. Starting a new project
To start a new project, left-click on the ```Create a new Xcode project```.
![Create Test Project - Step 1](https://apidocs.io/illustration/objc?step=Test1&workspaceFolder=API%20Title-ObjC&workspaceName=APITitle&projectName=APITitle&rootNamespace=APITitle)

Next, choose **Single View Application** and click ```Next```.
![Create Test Project - Step 2](https://apidocs.io/illustration/objc?step=Test2&workspaceFolder=API%20Title-ObjC&workspaceName=APITitle&projectName=APITitle&rootNamespace=APITitle)

Provide **Test-Project** as the product name click ```Next```.
![Create Test Project - Step 3](https://apidocs.io/illustration/objc?step=Test3&workspaceFolder=API%20Title-ObjC&workspaceName=APITitle&projectName=APITitle&rootNamespace=APITitle)

Choose the desired location of your project folder and click ```Create```.
![Create Test Project - Step 4](https://apidocs.io/illustration/objc?step=Test4&workspaceFolder=API%20Title-ObjC&workspaceName=APITitle&projectName=APITitle&rootNamespace=APITitle)

### 2. Adding the static library dependency
To add this dependency open a terminal and navigate to your project folder. Next, input ```pod init``` and press enter.
![Add dependency - Step 1](https://apidocs.io/illustration/objc?step=Add0&workspaceFolder=API%20Title-ObjC&workspaceName=APITitle&projectName=APITitle&rootNamespace=APITitle)

Next, open the newly created ```PodFile``` in your favourite text editor. Add the following line : pod 'APITitle', :path => 'Vendor/APITitle'
![Add dependency - Step 2](https://apidocs.io/illustration/objc?step=Add1&workspaceFolder=API%20Title-ObjC&workspaceName=APITitle&projectName=APITitle&rootNamespace=APITitle)

Execute `pod install` from terminal to install the dependecy in your project. This would add the dependency to the newly created test project.
![Add dependency - Step 3](https://apidocs.io/illustration/objc?step=Add2&workspaceFolder=API%20Title-ObjC&workspaceName=APITitle&projectName=APITitle&rootNamespace=APITitle)


## How to Test

Unit tests in this SDK can be run using Xcode. 

First build the SDK as shown in the steps above and naivgate to the project directory and open the APITitle.xcworkspace file.

Go to the test explorer in Xcode as shown in the picture below and click on `run tests` from the menu. 
![Run tests](https://apidocs.io/illustration/objc?step=RunTests&workspaceFolder=API%20Title-ObjC&workspaceName=APITitle&projectName=APITitle&rootNamespace=APITitle)


## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthAccessToken | OAuth 2.0 Access Token |



Configuration variables can be set as following.
```Objc
// Configuration parameters and credentials
Configuration_OAuthAccessToken = "Configuration_OAuthAccessToken"; // OAuth 2.0 Access Token

```

# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [UsersController](#users_controller)
* [NotesController](#notes_controller)
* [TagsAndTaggingLongTitleController](#tags_and_tagging_long_title_controller)

## <a name="users_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UsersController") UsersController

### Get singleton instance
```objc
Users* users = [[Users alloc]init] ;
```

### <a name="get_users_async_with_name"></a>![Method: ](https://apidocs.io/img/method.png ".UsersController.getUsersAsyncWithName") getUsersAsyncWithName

> Get a list of users. Example:
> ```no-highlight
> https://api.mywebsite.com/users?sort=joined&limit=5
> ```


```objc
function getUsersAsyncWithName:(NSString*) name
                joinedBefore:(NSString*) joinedBefore
                joinedAfter:(NSString*) joinedAfter
                sort:(enum SortEnum) sort
                limit:(NSNumber*) limit
                completionBlock:(CompletedGetUsers) onCompleted(name joinedBefore : joinedBefore joinedAfter : joinedAfter sort : sort limit : limit)
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

```objc
    // Parameters for the API call
    NSString* name = @"alice";
    NSString* joinedBefore = @"2011-01-01";
    NSString* joinedAfter = @"2011-01-01";
    SortEnum sort = (enum SortEnum) [SortEnumHelper sortEnumFromString: @"joined"];
    NSNumber* limit = [NSNumber numberWithInteger:[@"25" integerValue]];

    [self.users getUsersAsyncWithName: name joinedBefore : joinedBefore joinedAfter : joinedAfter sort : sort limit : limit  completionBlock:^(BOOL success, HttpContext* context, NSArray<GetUsersResponse> * response, NSError* error) { 
       //Add code here
    }];
```


[Back to List of Controllers](#list_of_controllers)

## <a name="notes_controller"></a>![Class: ](https://apidocs.io/img/class.png ".NotesController") NotesController

### Get singleton instance
```objc
Notes* notes = [[Notes alloc]init] ;
```

### <a name="get_notes_with_completion_block"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.getNotesWithCompletionBlock") getNotesWithCompletionBlock

> Get a list of notes.


```objc
function getNotesWithCompletionBlock:(CompletedGetNotes) onCompleted()
```



#### Example Usage

```objc

    [self.notes getNotesWithCompletionBlock:  ^(BOOL success, HttpContext* context, NSArray<NoteData> * response, NSError* error) { 
       //Add code here
    }];
```


### <a name="create_new_note_async_with_body"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.createNewNoteAsyncWithBody") createNewNoteAsyncWithBody

> Create a new note using a title and an optional content body.


```objc
function createNewNoteAsyncWithBody:(CreateNewNoteRequest*) body
                completionBlock:(CompletedPostCreateNewNote) onCompleted(body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    CreateNewNoteRequest* body = (CreateNewNoteRequest*) [APIHelper jsonDeserialize: @"{    \"title\": \"My new note\",    \"body\": \"This is the body\"}"
                toClass: CreateNewNoteRequest.class];

    [self.notes createNewNoteAsyncWithBody: body  completionBlock:^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Unexpected error in API call. See HTTP response body for details. |



### <a name="get_note_async_with_id"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.getNoteAsyncWithId") getNoteAsyncWithId

> Get a single note.


```objc
function getNoteAsyncWithId:(NSString*) mid
                body:(BOOL) body
                completionBlock:(CompletedGetNote) onCompleted(mid body : body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mid |  ``` Required ```  | The note ID |
| body |  ``` Required ```  | Set to `false` to exclude note body content. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* mid = @"68a5sdf67";
    BOOL body = [@"false" boolValue];

    [self.notes getNoteAsyncWithId: mid body : body  completionBlock:^(BOOL success, HttpContext* context, NoteData* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="update_a_note_async_with_id"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.updateANoteAsyncWithId") updateANoteAsyncWithId

> Update a single note by setting the title and/or body.
> ::: warning
> #### <i class="fa fa-warning"></i> Caution
> If the value for `title` or `body` is `null` or `undefined`, then the corresponding value is not modified on the server. However, if you send an empty string instead then it will **permanently overwrite** the original value.
> :::


```objc
function updateANoteAsyncWithId:(NSString*) mid
                body:(NSString*) body
                completionBlock:(CompletedPutUpdateANote) onCompleted(mid body : body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mid |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* mid = @"68a5sdf67";
    NSString* body = @"body";

    [self.notes updateANoteAsyncWithId: mid body : body  completionBlock:^(BOOL success, HttpContext* context, NoteData* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="delete_a_note_async_with_id"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.deleteANoteAsyncWithId") deleteANoteAsyncWithId

> Delete a single note


```objc
function deleteANoteAsyncWithId:(NSString*) mid
                body:(NSString*) body
                completionBlock:(CompletedDeleteANote) onCompleted(mid body : body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mid |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* mid = @"68a5sdf67";
    NSString* body = @"body";

    [self.notes deleteANoteAsyncWithId: mid body : body  completionBlock:^(BOOL success, HttpContext* context, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



[Back to List of Controllers](#list_of_controllers)

## <a name="tags_and_tagging_long_title_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TagsAndTaggingLongTitleController") TagsAndTaggingLongTitleController

### Get singleton instance
```objc
TagsAndTaggingLongTitle* tagsAndTaggingLongTitle = [[TagsAndTaggingLongTitle alloc]init] ;
```

### <a name="get_tags_with_completion_block"></a>![Method: ](https://apidocs.io/img/method.png ".TagsAndTaggingLongTitleController.getTagsWithCompletionBlock") getTagsWithCompletionBlock

> Get a list of bars


```objc
function getTagsWithCompletionBlock:(CompletedGetTags) onCompleted()
```



#### Example Usage

```objc

    [self.tagsAndTaggingLongTitle getTagsWithCompletionBlock:  ^(BOOL success, HttpContext* context, NSArray* response, NSError* error) { 
       //Add code here
    }];
```


### <a name="get_get_one_tag_async_with_id"></a>![Method: ](https://apidocs.io/img/method.png ".TagsAndTaggingLongTitleController.getGetOneTagAsyncWithId") getGetOneTagAsyncWithId

> Get a single tag


```objc
function getGetOneTagAsyncWithId:(NSString*) mid
                completionBlock:(CompletedGetGetOneTag) onCompleted(mid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mid |  ``` Required ```  | Unique tag identifier |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* mid = @"id";

    [self.tagsAndTaggingLongTitle getGetOneTagAsyncWithId: mid  completionBlock:^(BOOL success, HttpContext* context, id response, NSError* error) { 
       //Add code here
    }];
```


[Back to List of Controllers](#list_of_controllers)



