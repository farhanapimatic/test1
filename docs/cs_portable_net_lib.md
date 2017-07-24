# Getting started

TODO: Add a description

## How to Build

The generated code uses a few NuGet Packages e.g., Newtonsoft.Json, UniRest,
and Microsoft Base Class Library. The reference to these packages is already
added as in the packages.config file. If the automatic NuGet package restore
is enabled, these dependencies will be installed automatically. Therefore,
you will need internet access for build.

1. Open the solution (APITitle.sln) file.
2. Invoke the build process using `Ctrl+Shift+B` shortcut key or using the `Build` menu as shown below.

![Building SDK using Visual Studio](https://apidocs.io/illustration/cs?step=buildSDK&workspaceFolder=API%20Title-CSharp&workspaceName=APITitle&projectName=APITitle.Tests)

## How to Use

The build process generates a portable class library, which can be used like a normal class library. The generated library is compatible with Windows Forms, Windows RT, Windows Phone 8,
Silverlight 5, Xamarin iOS, Xamarin Android and Mono. More information on how to use can be found at the [MSDN Portable Class Libraries documentation](http://msdn.microsoft.com/en-us/library/vstudio/gg597391%28v=vs.100%29.aspx).

The following section explains how to use the APITitle library in a new console project.

### 1. Starting a new project

For starting a new project, right click on the current solution from the *solution explorer* and choose  ``` Add -> New Project ```.

![Add a new project in the existing solution using Visual Studio](https://apidocs.io/illustration/cs?step=addProject&workspaceFolder=API%20Title-CSharp&workspaceName=APITitle&projectName=APITitle.Tests)

Next, choose "Console Application", provide a ``` TestConsoleProject ``` as the project name and click ``` OK ```.

![Create a new console project using Visual Studio](https://apidocs.io/illustration/cs?step=createProject&workspaceFolder=API%20Title-CSharp&workspaceName=APITitle&projectName=APITitle.Tests)

### 2. Set as startup project

The new console project is the entry point for the eventual execution. This requires us to set the ``` TestConsoleProject ``` as the start-up project. To do this, right-click on the  ``` TestConsoleProject ``` and choose  ``` Set as StartUp Project ``` form the context menu.

![Set the new cosole project as the start up project](https://apidocs.io/illustration/cs?step=setStartup&workspaceFolder=API%20Title-CSharp&workspaceName=APITitle&projectName=APITitle.Tests)

### 3. Add reference of the library project

In order to use the APITitle library in the new project, first we must add a projet reference to the ``` TestConsoleProject ```. First, right click on the ``` References ``` node in the *solution explorer* and click ``` Add Reference... ```.

![Open references of the TestConsoleProject](https://apidocs.io/illustration/cs?step=addReference&workspaceFolder=API%20Title-CSharp&workspaceName=APITitle&projectName=APITitle.Tests)

Next, a window will be displayed where we must set the ``` checkbox ``` on ``` APITitle.Tests ``` and click ``` OK ```. By doing this, we have added a reference of the ```APITitle.Tests``` project into the new ``` TestConsoleProject ```.

![Add a reference to the TestConsoleProject](https://apidocs.io/illustration/cs?step=createReference&workspaceFolder=API%20Title-CSharp&workspaceName=APITitle&projectName=APITitle.Tests)

### 4. Write sample code

Once the ``` TestConsoleProject ``` is created, a file named ``` Program.cs ``` will be visible in the *solution explorer* with an empty ``` Main ``` method. This is the entry point for the execution of the entire solution.
Here, you can add code to initialize the client library and acquire the instance of a *Controller* class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

![Add a reference to the TestConsoleProject](https://apidocs.io/illustration/cs?step=addCode&workspaceFolder=API%20Title-CSharp&workspaceName=APITitle&projectName=APITitle.Tests)

## How to Test

The generated SDK also contain one or more Tests, which are contained in the Tests project.
In order to invoke these test cases, you will need *NUnit 3.0 Test Adapter Extension for Visual Studio*.
Once the SDK is complied, the test cases should appear in the Test Explorer window.
Here, you can click *Run All* to execute these test cases.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthAccessToken | OAuth 2.0 Access Token |



API client can be initialized as following.

```csharp
// Configuration parameters and credentials
string oAuthAccessToken = "oAuthAccessToken"; // OAuth 2.0 Access Token

APITitleClient client = new APITitleClient(oAuthAccessToken);
```



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [NotesController](#notes_controller)
* [UsersGggController](#users_ggg_controller)
* [TagsAndTaggingLongTitleController](#tags_and_tagging_long_title_controller)
* [APIController](#api_controller)

## <a name="notes_controller"></a>![Class: ](https://apidocs.io/img/class.png "APITitle.Tests.Controllers.NotesController") NotesController

### Get singleton instance

The singleton instance of the ``` NotesController ``` class can be accessed from the API Client.

```csharp
NotesController notes = client.Notes;
```

### <a name="get_notes"></a>![Method: ](https://apidocs.io/img/method.png "APITitle.Tests.Controllers.NotesController.GetNotes") GetNotes

> Get a list of notes.


```csharp
Task<List<PCL.Models.NoteData>> GetNotes()
```

#### Example Usage

```csharp

List<PCL.Models.NoteData> result = await notes.GetNotes();

```


### <a name="create_new_note"></a>![Method: ](https://apidocs.io/img/method.png "APITitle.Tests.Controllers.NotesController.CreateNewNote") CreateNewNote

> Create a new note using a title and an optional content body.


```csharp
Task CreateNewNote(PCL.Models.CreateNewNoteRequest body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```csharp
string bodyValue = "{    \"title\": \"My new note\",    \"body\": \"This is the body\"}";
var body = Newtonsoft.Json.JsonConvert.DeserializeObject<PCL.Models.CreateNewNoteRequest>(bodyValue);

await notes.CreateNewNote(body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Unexpected error in API call. See HTTP response body for details. |


### <a name="get_note"></a>![Method: ](https://apidocs.io/img/method.png "APITitle.Tests.Controllers.NotesController.GetNote") GetNote

> Get a single note.


```csharp
Task<PCL.Models.NoteData> GetNote(string id, bool body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Required ```  | Set to `false` to exclude note body content. |


#### Example Usage

```csharp
string id = "68a5sdf67";
bool body = false;

PCL.Models.NoteData result = await notes.GetNote(id, body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |


### <a name="update_a_note"></a>![Method: ](https://apidocs.io/img/method.png "APITitle.Tests.Controllers.NotesController.UpdateANote") UpdateANote

> Update a single note by setting the title and/or body.
> ::: warning
> #### <i class="fa fa-warning"></i> Caution
> If the value for `title` or `body` is `null` or `undefined`, then the corresponding value is not modified on the server. However, if you send an empty string instead then it will **permanently overwrite** the original value.
> :::


```csharp
Task<PCL.Models.NoteData> UpdateANote(string id, string body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |


#### Example Usage

```csharp
string id = "68a5sdf67";
string body = "body";

PCL.Models.NoteData result = await notes.UpdateANote(id, body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |


### <a name="delete_a_note"></a>![Method: ](https://apidocs.io/img/method.png "APITitle.Tests.Controllers.NotesController.DeleteANote") DeleteANote

> Delete a single note


```csharp
Task DeleteANote(string id, string body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |


#### Example Usage

```csharp
string id = "68a5sdf67";
string body = "body";

await notes.DeleteANote(id, body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |


### <a name="get_notes1"></a>![Method: ](https://apidocs.io/img/method.png "APITitle.Tests.Controllers.NotesController.GetNotes1") GetNotes1

> Get a list of notes.


```csharp
Task<List<PCL.Models.NoteData>> GetNotes1()
```

#### Example Usage

```csharp

List<PCL.Models.NoteData> result = await notes.GetNotes1();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="users_ggg_controller"></a>![Class: ](https://apidocs.io/img/class.png "APITitle.Tests.Controllers.UsersGggController") UsersGggController

### Get singleton instance

The singleton instance of the ``` UsersGggController ``` class can be accessed from the API Client.

```csharp
UsersGggController usersGgg = client.UsersGgg;
```

### <a name="get_users"></a>![Method: ](https://apidocs.io/img/method.png "APITitle.Tests.Controllers.UsersGggController.GetUsers") GetUsers

> Get a list of users. Example:
> ```no-highlight
> https://api.mywebsite.com/users?sort=joined&limit=5
> ```


```csharp
Task<List<PCL.Models.GetUsersResponse>> GetUsers(
        string name = null,
        string joinedBefore = null,
        string joinedAfter = null,
        PCL.Models.SortEnum? sort = SortEnum.NAME,
        int? limit = null)
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

```csharp
string name = "name";
string joinedBefore = "joinedBefore";
string joinedAfter = "joinedAfter";
var sort = PCL.Models.SortEnum?Helper.ParseString("name");
int? limit = 222;

List<PCL.Models.GetUsersResponse> result = await usersGgg.GetUsers(name, joinedBefore, joinedAfter, sort, limit);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="tags_and_tagging_long_title_controller"></a>![Class: ](https://apidocs.io/img/class.png "APITitle.Tests.Controllers.TagsAndTaggingLongTitleController") TagsAndTaggingLongTitleController

### Get singleton instance

The singleton instance of the ``` TagsAndTaggingLongTitleController ``` class can be accessed from the API Client.

```csharp
TagsAndTaggingLongTitleController tagsAndTaggingLongTitle = client.TagsAndTaggingLongTitle;
```

### <a name="get_tags"></a>![Method: ](https://apidocs.io/img/method.png "APITitle.Tests.Controllers.TagsAndTaggingLongTitleController.GetTags") GetTags

> Get a list of bars


```csharp
Task<List<string>> GetTags()
```

#### Example Usage

```csharp

List<string> result = await tagsAndTaggingLongTitle.GetTags();

```


### <a name="get_get_one_tag"></a>![Method: ](https://apidocs.io/img/method.png "APITitle.Tests.Controllers.TagsAndTaggingLongTitleController.GetGetOneTag") GetGetOneTag

> Get a single tag


```csharp
Task<dynamic> GetGetOneTag(string id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Unique tag identifier |


#### Example Usage

```csharp
string id = "id";

dynamic result = await tagsAndTaggingLongTitle.GetGetOneTag(id);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png "APITitle.Tests.Controllers.APIController") APIController

### Get singleton instance

The singleton instance of the ``` APIController ``` class can be accessed from the API Client.

```csharp
APIController client = client.Client;
```

### <a name="new"></a>![Method: ](https://apidocs.io/img/method.png "APITitle.Tests.Controllers.APIController.New") New

> TODO: Add a method description


```csharp
Task<dynamic> New(
        string mTesting,
        string cacheControl,
        string contentType,
        string postmanToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mTesting |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```csharp
string mTesting = "{ \"testing\"";
string cacheControl = "cache-control";
string contentType = "content-type";
string postmanToken = "postman-token";

dynamic result = await client.New(mTesting, cacheControl, contentType, postmanToken);

```


### <a name="create_sample2"></a>![Method: ](https://apidocs.io/img/method.png "APITitle.Tests.Controllers.APIController.CreateSample2") CreateSample2

> TODO: Add a method description


```csharp
Task<dynamic> CreateSample2(
        PCL.Models.Sample2Request body,
        string cacheControl,
        string contentType,
        string postmanToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```csharp
var body = new PCL.Models.Sample2Request();
string cacheControl = "cache-control";
string contentType = "content-type";
string postmanToken = "postman-token";

dynamic result = await client.CreateSample2(body, cacheControl, contentType, postmanToken);

```


[Back to List of Controllers](#list_of_controllers)



