# Getting started

TODO: Add a description

## How to Build

The generated code uses a few Gradle dependencies e.g., Jackson, Volley,
and Apache HttpClient. The reference to these dependencies is already
added in the build.gradle file will be installed automatically. Therefore,
you will need internet access for a successful build.

* In order to open the client library in Android Studio click on ``` Open an Existing Android Project ```.

![Importing SDK into Android Studio - Step 1](https://apidocs.io/illustration/android?step=import1&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

* Browse to locate the folder containing the source code. Select the location of the APITitle gradle project and click ``` Ok ```.

![Importing SDK into Android Studio - Step 2](https://apidocs.io/illustration/android?step=import2&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

* Upon successful import, the project can be built by clicking on ``` Build > Make Project ``` or  pressing ``` Ctrl + F9 ```.

![Importing SDK into Android Studio - Step 3](https://apidocs.io/illustration/android?step=import3&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

## How to Use

The following section explains how to use the APITitle library in a new project.

### 1. Starting a new project 

For starting a new project, click on ``` Create New Android Studio Project ```.

![Add a new project in Android Studio - Step 1](https://apidocs.io/illustration/android?step=createNewProject0&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

Here, configure the new project by adding the name, domain and location of the sample application followed by clicking ``` Next ```.

![Create a new Android Studio Project - Step 2](https://apidocs.io/illustration/android?step=createNewProject1&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

Following this, select the ``` Phone and Tablet ```` option as shown in the illustration below and click ``` Next ```. 

![Create a new Android Studio Project - Step 3](https://apidocs.io/illustration/android?step=createNewProject2&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

In the following step, choose ``` Empty Activity ``` as the activity type and click ``` Next ```.

![Create a new Android Studio Project - Step 4](https://apidocs.io/illustration/android?step=createNewProject3&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

In this step, provide an ``` Activity Name ``` and ``` Layout Name ``` and click ``` Finish ```.  This would take you to the newly created project.

![Create a new Android Studio Project - Step 4](https://apidocs.io/illustration/android?step=createNewProject4&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

### 2. Add reference of the library project

In order to add a dependency to this sample application, click on the android button shown in the project explorer on the left side as shown in the picture. Click on ``` Project ``` in the drop down that emerges.  

![Adding dependency to the client library - Step 1](https://apidocs.io/illustration/android?step=testProject0&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

Right click the sample application in the project explorer and click on ``` New > Module ```  as shown in the picture.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/android?step=testProject1&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

Choose ``` Import Gradle Project ``` and click ``` Next ```.

![Adding dependency to the client library - Step 3](https://apidocs.io/illustration/android?step=testProject2&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

Click on ``` Finish ``` which would take you back to the sample application with the refernced SDK. 

![Adding dependency to the client library - Step 4](https://apidocs.io/illustration/android?step=testProject3&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

In the following step naigate to the ``` SampleApplication >  app > build.gradle ``` file and add the following line ```compile project(path: ':APITitle')``` to the dependencies section as shown in the illustration below.

![Adding dependency to the client library - Step 5](https://apidocs.io/illustration/android?step=testProject4&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

Finally, press ``` Sync Now ``` in the warning visible as shown in the picture below.

![Adding dependency to the client library - Step 6](https://apidocs.io/illustration/android?step=testProject5&workspaceFolder=API%20Title&workspaceName=APITitle&projectName=APITitleLib&rootNamespace=com.example.api)

### 3. Write sample code

Once the ``` SampleApplication ``` is created, a file named ``` SampleApplication > app > src > main > java > MainActivity ``` will be visible in the *Project Explorer* with an ``` onCreate ``` method. This is the entry point for the execution of the created project.
Here, you can add code to initialize the client library and instantiate a *Controller* class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

## How to Test

The generated code and the server can be tested using automatically generated test cases. 
JUnit is used as the testing framework and test runner.

In Android Studio, for running the tests do the following:

1. Right click on *SampleApplication > APITitleLib > androidTest > java)* from the project explorer.
2. Select "Run All Tests" or use "Ctrl + Shift + F10" to run the Tests.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthAccessToken | OAuth 2.0 Access Token |



API client can be initialized as following. The `appContext` being passed is the Android application [`Context`](https://developer.android.com/reference/android/content/Context.html).

```java
// Configuration parameters and credentials
String oAuthAccessToken = "oAuthAccessToken"; // OAuth 2.0 Access Token

com.example.api.Configuration.initialize(appContext);
APITitleClient client = new APITitleClient(oAuthAccessToken);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [UsersController](#users_controller)
* [NotesController](#notes_controller)
* [TagsAndTaggingLongTitleController](#tags_and_tagging_long_title_controller)

## <a name="users_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.example.api.controllers.UsersController") UsersController

### Get singleton instance

The singleton instance of the ``` UsersController ``` class can be accessed from the API Client.

```java
UsersController users = client.getUsers();
```

### <a name="get_users_async"></a>![Method: ](https://apidocs.io/img/method.png "com.example.api.controllers.UsersController.getUsersAsync") getUsersAsync

> Get a list of users. Example:
> ```no-highlight
> https://api.mywebsite.com/users?sort=joined&limit=5
> ```


```java
void getUsersAsync(
        final String name,
        final String joinedBefore,
        final String joinedAfter,
        final SortEnum sort,
        final Integer limit,
        final APICallBack<List<GetUsersResponse>> callBack)
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

```java
String name = "alice";
String joinedBefore = "2011-01-01";
String joinedAfter = "2011-01-01";
SortEnum sort = SortEnum.fromString("joined");
Integer limit = 25;
// Invoking the API call with sample inputs
users.getUsersAsync(name, joinedBefore, joinedAfter, sort, limit, new APICallBack<List<GetUsersResponse>>() {
    public void onSuccess(HttpContext context, List<GetUsersResponse> response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


[Back to List of Controllers](#list_of_controllers)

## <a name="notes_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.example.api.controllers.NotesController") NotesController

### Get singleton instance

The singleton instance of the ``` NotesController ``` class can be accessed from the API Client.

```java
NotesController notes = client.getNotes();
```

### <a name="get_notes_async"></a>![Method: ](https://apidocs.io/img/method.png "com.example.api.controllers.NotesController.getNotesAsync") getNotesAsync

> Get a list of notes.


```java
void getNotesAsync(final APICallBack<List<NoteData>> callBack)
```

#### Example Usage

```java
// Invoking the API call with sample inputs
notes.getNotesAsync(new APICallBack<List<NoteData>>() {
    public void onSuccess(HttpContext context, List<NoteData> response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


### <a name="create_new_note_async"></a>![Method: ](https://apidocs.io/img/method.png "com.example.api.controllers.NotesController.createNewNoteAsync") createNewNoteAsync

> Create a new note using a title and an optional content body.


```java
void createNewNoteAsync(
        final CreateNewNoteRequest body,
        final APICallBack<Object> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    String bodyValue = "{    \"title\": \"My new note\",    \"body\": \"This is the body\"}";
    CreateNewNoteRequest body = mapper.readValue(bodyValue,new TypeReference<CreateNewNoteRequest> (){});
    // Invoking the API call with sample inputs
    notes.createNewNoteAsync(body, new APICallBack<void>() {
        public void onSuccess(HttpContext context, void response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Unexpected error in API call. See HTTP response body for details. |



### <a name="get_note_async"></a>![Method: ](https://apidocs.io/img/method.png "com.example.api.controllers.NotesController.getNoteAsync") getNoteAsync

> Get a single note.


```java
void getNoteAsync(
        final String id,
        final boolean body,
        final APICallBack<NoteData> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Required ```  | Set to `false` to exclude note body content. |


#### Example Usage

```java
String id = "68a5sdf67";
boolean body = false;
// Invoking the API call with sample inputs
notes.getNoteAsync(id, body, new APICallBack<NoteData>() {
    public void onSuccess(HttpContext context, NoteData response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="update_a_note_async"></a>![Method: ](https://apidocs.io/img/method.png "com.example.api.controllers.NotesController.updateANoteAsync") updateANoteAsync

> Update a single note by setting the title and/or body.
> ::: warning
> #### <i class="fa fa-warning"></i> Caution
> If the value for `title` or `body` is `null` or `undefined`, then the corresponding value is not modified on the server. However, if you send an empty string instead then it will **permanently overwrite** the original value.
> :::


```java
void updateANoteAsync(
        final String id,
        final String body,
        final APICallBack<NoteData> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |


#### Example Usage

```java
String id = "68a5sdf67";
String body = "body";
// Invoking the API call with sample inputs
notes.updateANoteAsync(id, body, new APICallBack<NoteData>() {
    public void onSuccess(HttpContext context, NoteData response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="delete_a_note_async"></a>![Method: ](https://apidocs.io/img/method.png "com.example.api.controllers.NotesController.deleteANoteAsync") deleteANoteAsync

> Delete a single note


```java
void deleteANoteAsync(
        final String id,
        final String body,
        final APICallBack<Object> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |


#### Example Usage

```java
String id = "68a5sdf67";
String body = "body";
// Invoking the API call with sample inputs
notes.deleteANoteAsync(id, body, new APICallBack<void>() {
    public void onSuccess(HttpContext context, void response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



[Back to List of Controllers](#list_of_controllers)

## <a name="tags_and_tagging_long_title_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.example.api.controllers.TagsAndTaggingLongTitleController") TagsAndTaggingLongTitleController

### Get singleton instance

The singleton instance of the ``` TagsAndTaggingLongTitleController ``` class can be accessed from the API Client.

```java
TagsAndTaggingLongTitleController tagsAndTaggingLongTitle = client.getTagsAndTaggingLongTitle();
```

### <a name="get_tags_async"></a>![Method: ](https://apidocs.io/img/method.png "com.example.api.controllers.TagsAndTaggingLongTitleController.getTagsAsync") getTagsAsync

> Get a list of bars


```java
void getTagsAsync(final APICallBack<List<String>> callBack)
```

#### Example Usage

```java
// Invoking the API call with sample inputs
tagsAndTaggingLongTitle.getTagsAsync(new APICallBack<List<String>>() {
    public void onSuccess(HttpContext context, List<String> response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


### <a name="get_get_one_tag_async"></a>![Method: ](https://apidocs.io/img/method.png "com.example.api.controllers.TagsAndTaggingLongTitleController.getGetOneTagAsync") getGetOneTagAsync

> Get a single tag


```java
void getGetOneTagAsync(
        final String id,
        final APICallBack<DynamicResponse> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Unique tag identifier |


#### Example Usage

```java
String id = "id";
// Invoking the API call with sample inputs
tagsAndTaggingLongTitle.getGetOneTagAsync(id, new APICallBack<DynamicResponse>() {
    public void onSuccess(HttpContext context, DynamicResponse response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


[Back to List of Controllers](#list_of_controllers)



