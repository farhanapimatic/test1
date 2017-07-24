# Getting started

TODO: Add a description

## How to Build


* In order to successfully build and run your SDK files, you are required to have the following setup in your system:
    * **Go**  (Visit [https://golang.org/doc/install](https://golang.org/doc/install) for more details on how to install Go)
    * **Java VM** Version 8 or later
    * **Eclipse 4.6 (Neon)** or later ([http://www.eclipse.org/neon/](http://www.eclipse.org/neon/))
    * **GoClipse** setup within above installed Eclipse (Follow the instructions at [this link](https://github.com/GoClipse/goclipse/blob/latest/documentation/Installation.md#instructions) to setup GoClipse)
* Ensure that ```GOPATH``` environment variable is set in the system variables. If not, set it to your workspace directory where you will be adding your Go projects.
* The generated code uses unirest-go http library. Therefore, you will need internet access to resolve this dependency. If Go is properly installed and configured, run the following command to pull the dependency:

```Go
go get github.com/apimatic/unirest-go
```

This will install unirest-go in the ```GOPATH``` you specified in the system variables.

Now follow the steps mentioned below to build your SDK:

1. Open eclipse in the Go language perspective and click on the ```Import``` option in ```File``` menu.

![Importing SDK into Eclipse - Step 1](https://apidocs.io/illustration/go?step=import0)

2. Select ```General -> Existing Projects into Workspace``` option from the tree list.

![Importing SDK into Eclipse - Step 2](https://apidocs.io/illustration/go?step=import1)

3. In ```Select root directory```, provide path to the unzipped archive for the generated code. Once the path is set and the Project becomes visible under ```Projects``` click ```Finish```

![Importing SDK into Eclipse - Step 3](https://apidocs.io/illustration/go?step=import2&workspaceFolder=API%20Title-GoLang&projectName=apititle_lib)

4. The Go library will be imported and its files will be visible in the Project Explorer

![Importing SDK into Eclipse - Step 4](https://apidocs.io/illustration/go?step=import3&projectName=apititle_lib)

## How to Use

The following section explains how to use the ApititleLib library in a new project.

### 1. Add a new Test Project

Create a new project in Eclipse by ```File``` -> ```New``` -> ```Go Project```

![Add a new project in Eclipse](https://apidocs.io/illustration/go?step=createNewProject0)

Name the Project as ```Test``` and click ```Finish```

![Create a new Maven Project - Step 1](https://apidocs.io/illustration/go?step=createNewProject1)

Create a new directory in the ```src``` directory of this project

![Create a new Maven Project - Step 2](https://apidocs.io/illustration/go?step=createNewProject2&projectName=apititle_lib)

Name it ```test.com```

![Create a new Maven Project - Step 3](https://apidocs.io/illustration/go?step=createNewProject3&projectName=apititle_lib)

Now create a new file inside ```src/test.com```

![Create a new Maven Project - Step 4](https://apidocs.io/illustration/go?step=createNewProject4&projectName=apititle_lib)

Name it ```testsdk.go```

![Create a new Maven Project - Step 5](https://apidocs.io/illustration/go?step=createNewProject5&projectName=apititle_lib)

In this Go file, you can start adding code to initialize the client library. Sample code to initialize the client library and using its methods is given in the subsequent sections.

### 2. Configure the Test Project

You need to import your generated library in this project in order to make use of its functions. In order to import the library, you can add its path in the ```GOPATH``` for this project. Follow the below steps:

Right click on the project name and click on ```Properties```

![Adding dependency to the client library - Step 1](https://apidocs.io/illustration/go?step=testProject0&projectName=apititle_lib)

Choose ```Go Compiler``` from the side menu. Check ```Use project specific settings``` and uncheck ```Use same value as the GOPATH environment variable.```. By default, the GOPATH value from the environment variables will be visible in ```Eclipse GOPATH```. Do not remove this as this points to the unirest dependency.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/go?step=testProject1)

Append the library path to this GOPATH

![Adding dependency to the client library - Step 3](https://apidocs.io/illustration/go?step=testProject2&workspaceFolder=API%20Title-GoLang)

Once the path is appended, click on ```OK```

### 3. Build the Test Project

Right click on the project name and click on ```Build Project```

![Build Project](https://apidocs.io/illustration/go?step=buildProject&projectName=apititle_lib)

### 4. Run the Test Project

If the build is successful, right click on your Go file and click on ```Run As``` -> ```Go Application```

![Run Project](https://apidocs.io/illustration/go?step=runProject&projectName=apititle_lib)

## Initialization

### Authentication
In order to setup authentication of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthAccessToken | OAuth 2.0 Access Token |


To configure these for your generated code, open the file "Configuration.go" and edit it's contents.


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [notes_pkg](#notes_pkg)
* [usersggg_pkg](#usersggg_pkg)
* [tagsandtagginglongtitle_pkg](#tagsandtagginglongtitle_pkg)
* [api_pkg](#api_pkg)

## <a name="notes_pkg"></a>![Class: ](https://apidocs.io/img/class.png ".notes_pkg") notes_pkg

### Get instance

Factory for the ``` NOTES ``` interface can be accessed from the package notes_pkg.

```go
notes := notes_pkg.NewNOTES()
```

### <a name="get_notes"></a>![Method: ](https://apidocs.io/img/method.png ".notes_pkg.GetNotes") GetNotes

> Get a list of notes.


```go
func (me *NOTES_IMPL) GetNotes()([]*models_pkg.NoteData,error)
```

#### Example Usage

```go

var result []*models_pkg.NoteData
result,_ = notes.GetNotes()

```


### <a name="create_new_note"></a>![Method: ](https://apidocs.io/img/method.png ".notes_pkg.CreateNewNote") CreateNewNote

> Create a new note using a title and an optional content body.


```go
func (me *NOTES_IMPL) CreateNewNote(body *models_pkg.CreateNewNoteRequest)(,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
bodyValue := []byte("{    \"title\": \"My new note\",    \"body\": \"This is the body\"}")
var body *models_pkg.CreateNewNoteRequest
json.Unmarshal(bodyValue,&body)

var result 
result,_ = notes.CreateNewNote(body)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | Unexpected error in API call. See HTTP response body for details. |



### <a name="get_note"></a>![Method: ](https://apidocs.io/img/method.png ".notes_pkg.GetNote") GetNote

> Get a single note.


```go
func (me *NOTES_IMPL) GetNote(
            id string,
            body bool)(*models_pkg.NoteData,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Required ```  | Set to `false` to exclude note body content. |


#### Example Usage

```go
id := "68a5sdf67"
body := false

var result *models_pkg.NoteData
result,_ = notes.GetNote(id, body)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="update_a_note"></a>![Method: ](https://apidocs.io/img/method.png ".notes_pkg.UpdateANote") UpdateANote

> Update a single note by setting the title and/or body.
> ::: warning
> #### <i class="fa fa-warning"></i> Caution
> If the value for `title` or `body` is `null` or `undefined`, then the corresponding value is not modified on the server. However, if you send an empty string instead then it will **permanently overwrite** the original value.
> :::


```go
func (me *NOTES_IMPL) UpdateANote(
            id string,
            body *string)(*models_pkg.NoteData,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |


#### Example Usage

```go
id := "68a5sdf67"
body := "body"

var result *models_pkg.NoteData
result,_ = notes.UpdateANote(id, body)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="delete_a_note"></a>![Method: ](https://apidocs.io/img/method.png ".notes_pkg.DeleteANote") DeleteANote

> Delete a single note


```go
func (me *NOTES_IMPL) DeleteANote(
            id string,
            body *string)(,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |


#### Example Usage

```go
id := "68a5sdf67"
body := "body"

var result 
result,_ = notes.DeleteANote(id, body)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="get_notes1"></a>![Method: ](https://apidocs.io/img/method.png ".notes_pkg.GetNotes1") GetNotes1

> Get a list of notes.


```go
func (me *NOTES_IMPL) GetNotes1()([]*models_pkg.NoteData,error)
```

#### Example Usage

```go

var result []*models_pkg.NoteData
result,_ = notes.GetNotes1()

```


[Back to List of Controllers](#list_of_controllers)

## <a name="usersggg_pkg"></a>![Class: ](https://apidocs.io/img/class.png ".usersggg_pkg") usersggg_pkg

### Get instance

Factory for the ``` USERSGGG ``` interface can be accessed from the package usersggg_pkg.

```go
usersGgg := usersggg_pkg.NewUSERSGGG()
```

### <a name="get_users"></a>![Method: ](https://apidocs.io/img/method.png ".usersggg_pkg.GetUsers") GetUsers

> Get a list of users. Example:
> ```no-highlight
> https://api.mywebsite.com/users?sort=joined&limit=5
> ```


```go
func (me *USERSGGG_IMPL) GetUsers(
            name *string,
            joinedBefore *string,
            joinedAfter *string,
            sort models_pkg.SortEnum,
            limit *int64)([]*models_pkg.GetUsersResponse,error)
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

```go
name := "name"
joinedBefore := "joinedBefore"
joinedAfter := "joinedAfter"
sort := models_pkg.sort_NAME
limit,_ := strconv.ParseInt("174", 10, 8)

var result []*models_pkg.GetUsersResponse
result,_ = usersGgg.GetUsers(name, joinedBefore, joinedAfter, sort, limit)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="tagsandtagginglongtitle_pkg"></a>![Class: ](https://apidocs.io/img/class.png ".tagsandtagginglongtitle_pkg") tagsandtagginglongtitle_pkg

### Get instance

Factory for the ``` TAGSANDTAGGINGLONGTITLE ``` interface can be accessed from the package tagsandtagginglongtitle_pkg.

```go
tagsAndTaggingLongTitle := tagsandtagginglongtitle_pkg.NewTAGSANDTAGGINGLONGTITLE()
```

### <a name="get_tags"></a>![Method: ](https://apidocs.io/img/method.png ".tagsandtagginglongtitle_pkg.GetTags") GetTags

> Get a list of bars


```go
func (me *TAGSANDTAGGINGLONGTITLE_IMPL) GetTags()([]string,error)
```

#### Example Usage

```go

var result []string
result,_ = tagsAndTaggingLongTitle.GetTags()

```


### <a name="get_get_one_tag"></a>![Method: ](https://apidocs.io/img/method.png ".tagsandtagginglongtitle_pkg.GetGetOneTag") GetGetOneTag

> Get a single tag


```go
func (me *TAGSANDTAGGINGLONGTITLE_IMPL) GetGetOneTag(id string)(interface{},error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Unique tag identifier |


#### Example Usage

```go
id := "id"

var result interface{}
result,_ = tagsAndTaggingLongTitle.GetGetOneTag(id)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="api_pkg"></a>![Class: ](https://apidocs.io/img/class.png ".api_pkg") api_pkg

### Get instance

Factory for the ``` API ``` interface can be accessed from the package api_pkg.

```go
aPI := api_pkg.NewAPI()
```

### <a name="new"></a>![Method: ](https://apidocs.io/img/method.png ".api_pkg.New") New

> TODO: Add a method description


```go
func (me *API_IMPL) New(
            mTesting string,
            cacheControl string,
            contentType string,
            postmanToken string)(interface{},error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mTesting |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
mTesting := "{ \"testing\""
cacheControl := "cache-control"
contentType := "content-type"
postmanToken := "postman-token"

var result interface{}
result,_ = aPI.New(mTesting, cacheControl, contentType, postmanToken)

```


### <a name="create_sample2"></a>![Method: ](https://apidocs.io/img/method.png ".api_pkg.CreateSample2") CreateSample2

> TODO: Add a method description


```go
func (me *API_IMPL) CreateSample2(
            body *models_pkg.Sample2Request,
            cacheControl string,
            contentType string,
            postmanToken string)(interface{},error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.Sample2Request
cacheControl := "cache-control"
contentType := "content-type"
postmanToken := "postman-token"

var result interface{}
result,_ = aPI.CreateSample2(body, cacheControl, contentType, postmanToken)

```


[Back to List of Controllers](#list_of_controllers)



