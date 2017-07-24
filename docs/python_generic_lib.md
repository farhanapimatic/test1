# Getting started

TODO: Add a description

## How to Build


You must have Python 2 >=2.7.9 or Python 3 >=3.4 installed on your system to install and run this SDK. This SDK package depends on other Python packages like nose, jsonpickle etc. 
These dependencies are defined in the ```requirements.txt``` file that comes with the SDK.
To resolve these dependencies, you can use the PIP Dependency manager. Install it by following steps at [https://pip.pypa.io/en/stable/installing/](https://pip.pypa.io/en/stable/installing/).

Python and PIP executables should be defined in your PATH. Open command prompt and type ```pip --version```.
This should display the version of the PIP Dependency Manager installed if your installation was successful and the paths are properly defined.

* Using command line, navigate to the directory containing the generated files (including ```requirements.txt```) for the SDK.
* Run the command ```pip install -r requirements.txt```. This should install all the required dependencies.

![Building SDK - Step 1](https://apidocs.io/illustration/python?step=installDependencies&workspaceFolder=API%20Title-Python)


## How to Use

The following section explains how to use the Apititle SDK package in a new project.

### 1. Open Project in an IDE

Open up a Python IDE like PyCharm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PyCharm - Step 1](https://apidocs.io/illustration/python?step=pyCharm)

Click on ```Open``` in PyCharm to browse to your generated SDK directory and then click ```OK```.

![Open project in PyCharm - Step 2](https://apidocs.io/illustration/python?step=openProject0&workspaceFolder=API%20Title-Python)     

The project files will be displayed in the side bar as follows:

![Open project in PyCharm - Step 3](https://apidocs.io/illustration/python?step=openProject1&workspaceFolder=API%20Title-Python&projectName=apititle)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PyCharm - Step 1](https://apidocs.io/illustration/python?step=createDirectory&workspaceFolder=API%20Title-Python&projectName=apititle)

Name the directory as "test"

![Add a new project in PyCharm - Step 2](https://apidocs.io/illustration/python?step=nameDirectory)
   
Add a python file to this project with the name "testsdk"

![Add a new project in PyCharm - Step 3](https://apidocs.io/illustration/python?step=createFile&workspaceFolder=API%20Title-Python&projectName=apititle)

Name it "testsdk"

![Add a new project in PyCharm - Step 4](https://apidocs.io/illustration/python?step=nameFile)

In your python file you will be required to import the generated python library using the following code lines

```Python
from apititle.apititle_client import ApititleClient
```

![Add a new project in PyCharm - Step 4](https://apidocs.io/illustration/python?step=projectFiles&workspaceFolder=API%20Title-Python&libraryName=apititle.apititle_client&projectName=apititle)

After this you can write code to instantiate an API client object, get a controller object and  make API calls. Sample code is given in the subsequent sections.

### 3. Run the Test Project

To run the file within your test project, right click on your Python file inside your Test project and click on ```Run```

![Run Test Project - Step 1](https://apidocs.io/illustration/python?step=runProject&workspaceFolder=API%20Title-Python&libraryName=apititle.apititle_client&projectName=apititle)


## How to Test

You can test the generated SDK and the server with automatically generated test
cases. unittest is used as the testing framework and nose is used as the test
runner. You can run the tests as follows:

  1. From terminal/cmd navigate to the root directory of the SDK.
  2. Invoke 'pip install -r test-requirements.txt'
  3. Invoke 'nosetests'

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| o_auth_access_token | OAuth 2.0 Access Token |



API client can be initialized as following.

```python
# Configuration parameters and credentials
o_auth_access_token = 'o_auth_access_token' # OAuth 2.0 Access Token

client = ApititleClient(o_auth_access_token)
```



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [NotesController](#notes_controller)
* [UsersGggController](#users_ggg_controller)
* [TagsAndTaggingLongTitleController](#tags_and_tagging_long_title_controller)
* [APIController](#api_controller)

## <a name="notes_controller"></a>![Class: ](https://apidocs.io/img/class.png ".NotesController") NotesController

### Get controller instance

An instance of the ``` NotesController ``` class can be accessed from the API Client.

```python
 notes_client = client.notes
```

### <a name="get_notes"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.get_notes") get_notes

> Get a list of notes.

```python
def get_notes(self)
```

#### Example Usage

```python

result = notes_client.get_notes()

```


### <a name="create_new_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.create_new_note") create_new_note

> Create a new note using a title and an optional content body.

```python
def create_new_note(self,
                        body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```python
body_value = "{    \"title\": \"My new note\",    \"body\": \"This is the body\"}"
body = json.loads(body_value)

notes_client.create_new_note(body)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Unexpected error in API call. See HTTP response body for details. |




### <a name="get_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.get_note") get_note

> Get a single note.

```python
def get_note(self,
                 id,
                 body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Required ```  | Set to `false` to exclude note body content. |



#### Example Usage

```python
id = '68a5sdf67'
body = False

result = notes_client.get_note(id, body)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |




### <a name="update_a_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.update_a_note") update_a_note

> Update a single note by setting the title and/or body.
> ::: warning
> #### <i class="fa fa-warning"></i> Caution
> If the value for `title` or `body` is `null` or `undefined`, then the corresponding value is not modified on the server. However, if you send an empty string instead then it will **permanently overwrite** the original value.
> :::

```python
def update_a_note(self,
                      id,
                      body=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```python
id = '68a5sdf67'
body = 'body'

result = notes_client.update_a_note(id, body)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |




### <a name="delete_a_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.delete_a_note") delete_a_note

> Delete a single note

```python
def delete_a_note(self,
                      id,
                      body=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```python
id = '68a5sdf67'
body = 'body'

notes_client.delete_a_note(id, body)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |




### <a name="get_notes_1"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.get_notes_1") get_notes_1

> Get a list of notes.

```python
def get_notes_1(self)
```

#### Example Usage

```python

result = notes_client.get_notes_1()

```


[Back to List of Controllers](#list_of_controllers)

## <a name="users_ggg_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UsersGggController") UsersGggController

### Get controller instance

An instance of the ``` UsersGggController ``` class can be accessed from the API Client.

```python
 users_ggg_client = client.users_ggg
```

### <a name="get_users"></a>![Method: ](https://apidocs.io/img/method.png ".UsersGggController.get_users") get_users

> Get a list of users. Example:
> ```no-highlight
> https://api.mywebsite.com/users?sort=joined&limit=5
> ```

```python
def get_users(self,
                  name=None,
                  joined_before=None,
                  joined_after=None,
                  sort='name',
                  limit=None)
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

```python
name = 'name'
joined_before = 'joinedBefore'
joined_after = 'joinedAfter'
sort = SortEnum.NAME
limit = 197

result = users_ggg_client.get_users(name, joined_before, joined_after, sort, limit)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="tags_and_tagging_long_title_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TagsAndTaggingLongTitleController") TagsAndTaggingLongTitleController

### Get controller instance

An instance of the ``` TagsAndTaggingLongTitleController ``` class can be accessed from the API Client.

```python
 tags_and_tagging_long_title_client = client.tags_and_tagging_long_title
```

### <a name="get_tags"></a>![Method: ](https://apidocs.io/img/method.png ".TagsAndTaggingLongTitleController.get_tags") get_tags

> Get a list of bars

```python
def get_tags(self)
```

#### Example Usage

```python

result = tags_and_tagging_long_title_client.get_tags()

```


### <a name="get_get_one_tag"></a>![Method: ](https://apidocs.io/img/method.png ".TagsAndTaggingLongTitleController.get_get_one_tag") get_get_one_tag

> Get a single tag

```python
def get_get_one_tag(self,
                        id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Unique tag identifier |



#### Example Usage

```python
id = 'id'

result = tags_and_tagging_long_title_client.get_get_one_tag(id)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

### Get controller instance

An instance of the ``` APIController ``` class can be accessed from the API Client.

```python
 client_client = client.client
```

### <a name="new"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.new") new

> TODO: Add a method description

```python
def new(self,
                testing,
                cache_control,
                content_type,
                postman_token)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| mTesting |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```python
testing = '{ "testing"'
cache_control = 'cache-control'
content_type = 'content-type'
postman_token = 'postman-token'

result = client_client.new(testing, cache_control, content_type, postman_token)

```


### <a name="create_sample_2"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.create_sample_2") create_sample_2

> TODO: Add a method description

```python
def create_sample_2(self,
                        body,
                        cache_control,
                        content_type,
                        postman_token)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| cacheControl |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| postmanToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```python
body = Sample2Request()
cache_control = 'cache-control'
content_type = 'content-type'
postman_token = 'postman-token'

result = client_client.create_sample_2(body, cache_control, content_type, postman_token)

```


[Back to List of Controllers](#list_of_controllers)



