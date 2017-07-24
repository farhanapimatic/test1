# Getting started

TODO: Add a description

## How to Build

This client library is a Ruby gem which can be compiled and used in your Ruby and Ruby on Rails project. This library requires a few gems from the RubyGems repository.

1. Open the command line interface or the terminal and navigate to the folder containing the source code.
2. Run ``` gem build api_title.gemspec ``` to build the gem.
3. Once built, the gem can be installed on the current work environment using ``` gem install api_title-1.0.0.gem ```

![Building Gem](https://apidocs.io/illustration/ruby?step=buildSDK&workspaceFolder=API%20Title-Ruby&workspaceName=API%20Title-Ruby&projectName=api_title&gemName=api_title&gemVer=1.0.0)

## How to Use

The following section explains how to use the ApiTitle Ruby Gem in a new Rails project using RubyMine&trade;. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

### 1. Starting a new project

Close any existing projects in RubyMine&trade; by selecting ``` File -> Close Project ```. Next, click on ``` Create New Project ``` to create a new project from scratch.

![Create a new project in RubyMine](https://apidocs.io/illustration/ruby?step=createNewProject0&workspaceFolder=API%20Title-Ruby&workspaceName=ApiTitle&projectName=api_title&gemName=api_title&gemVer=1.0.0)

Next, provide ``` TestApp ``` as the project name, choose ``` Rails Application ``` as the project type, and click ``` OK ```.

![Create a new Rails Application in RubyMine - step 1](https://apidocs.io/illustration/ruby?step=createNewProject1&workspaceFolder=API%20Title-Ruby&workspaceName=ApiTitle&projectName=api_title&gemName=api_title&gemVer=1.0.0)

In the next dialog make sure that correct *Ruby SDK* is being used (minimum 2.0.0) and click ``` OK ```.

![Create a new Rails Application in RubyMine - step 2](https://apidocs.io/illustration/ruby?step=createNewProject2&workspaceFolder=API%20Title-Ruby&workspaceName=ApiTitle&projectName=api_title&gemName=api_title&gemVer=1.0.0)

This will create a new Rails Application project with an existing set of files and folder.

### 2. Add reference of the gem

In order to use the ApiTitle gem in the new project we must add a gem reference. Locate the ```Gemfile``` in the *Project Explorer* window under the ``` TestApp ``` project node. The file contains references to all gems being used in the project. Here, add the reference to the library gem by adding the following line: ``` gem 'api_title', '~> 1.0.0' ```

![Add references of the Gemfile](https://apidocs.io/illustration/ruby?step=addReference&workspaceFolder=API%20Title-Ruby&workspaceName=ApiTitle&projectName=api_title&gemName=api_title&gemVer=1.0.0)

### 3. Adding a new Rails Controller

Once the ``` TestApp ``` project is created, a folder named ``` controllers ``` will be visible in the *Project Explorer* under the following path: ``` TestApp > app > controllers ```. Right click on this folder and select ``` New -> Run Rails Generator... ```.

![Run Rails Generator on Controllers Folder](https://apidocs.io/illustration/ruby?step=addCode0&workspaceFolder=API%20Title-Ruby&workspaceName=ApiTitle&projectName=api_title&gemName=api_title&gemVer=1.0.0)

Selecting the said option will popup a small window where the generator names are displayed. Here, select the ``` controller ``` template.

![Create a new Controller](https://apidocs.io/illustration/ruby?step=addCode1&workspaceFolder=API%20Title-Ruby&workspaceName=ApiTitle&projectName=api_title&gemName=api_title&gemVer=1.0.0)

Next, a popup window will ask you for a Controller name and included Actions. For controller name provide ``` Hello ``` and include an action named ``` Index ``` and click ``` OK ```.

![Add a new Controller](https://apidocs.io/illustration/ruby?step=addCode2&workspaceFolder=API%20Title-Ruby&workspaceName=ApiTitle&projectName=api_title&gemName=api_title&gemVer=1.0.0)

A new controller class anmed ``` HelloController ``` will be created in a file named ``` hello_controller.rb ``` containing a method named ``` Index ```. In this method, add code for initialization and a sample for its usage.

![Initialize the library](https://apidocs.io/illustration/ruby?step=addCode3&workspaceFolder=API%20Title-Ruby&workspaceName=ApiTitle&projectName=api_title&gemName=api_title&gemVer=1.0.0)

## How to Test

You can test the generated SDK and the server with automatically generated test
cases as follows:

  1. From terminal/cmd navigate to the root directory of the SDK.
  2. Invoke: `bundle exec rake`

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| o_auth_access_token | OAuth 2.0 Access Token |



API client can be initialized as following.

```ruby
# Configuration parameters and credentials
o_auth_access_token = 'o_auth_access_token' # OAuth 2.0 Access Token

client = ApiTitle::ApiTitleClient.new(
  o_auth_access_token: o_auth_access_token
)
```

The added initlization code can be debugged by putting a breakpoint in the ``` Index ``` method and running the project in debug mode by selecting ``` Run -> Debug 'Development: TestApp' ```.

![Debug the TestApp](https://apidocs.io/illustration/ruby?step=addCode4&workspaceFolder=API%20Title-Ruby&workspaceName=ApiTitle&projectName=api_title&gemName=api_title&gemVer=1.0.0&initLine=client%2520%253D%2520ApiTitleClient.new%2528%2527o_auth_access_token%2527%2529)



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [NotesController](#notes_controller)
* [UsersGggController](#users_ggg_controller)
* [TagsAndTaggingLongTitleController](#tags_and_tagging_long_title_controller)
* [APIController](#api_controller)

## <a name="notes_controller"></a>![Class: ](https://apidocs.io/img/class.png ".NotesController") NotesController

### Get singleton instance

The singleton instance of the ``` NotesController ``` class can be accessed from the API Client.

```ruby
notes = client.notes
```

### <a name="get_notes"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.get_notes") get_notes

> Get a list of notes.


```ruby
def get_notes; end
```

#### Example Usage

```ruby

result = notes.get_notes()

```


### <a name="create_new_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.create_new_note") create_new_note

> Create a new note using a title and an optional content body.


```ruby
def create_new_note(body); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```ruby
body_value = "{    \"title\": \"My new note\",    \"body\": \"This is the body\"}";
body = JSON.parse(body_value);

notes.create_new_note(body)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Unexpected error in API call. See HTTP response body for details. |



### <a name="get_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.get_note") get_note

> Get a single note.


```ruby
def get_note(id,
                 body); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Required ```  | Set to `false` to exclude note body content. |


#### Example Usage

```ruby
id = '68a5sdf67'
body = false

result = notes.get_note(id, body)

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


```ruby
def update_a_note(id,
                      body = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |


#### Example Usage

```ruby
id = '68a5sdf67'
body = 'body'

result = notes.update_a_note(id, body)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="delete_a_note"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.delete_a_note") delete_a_note

> Delete a single note


```ruby
def delete_a_note(id,
                      body = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The note ID |
| body |  ``` Optional ```  | TODO: Add a parameter description |


#### Example Usage

```ruby
id = '68a5sdf67'
body = 'body'

notes.delete_a_note(id, body)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Unexpected error in API call. See HTTP response body for details. |



### <a name="get_notes_1"></a>![Method: ](https://apidocs.io/img/method.png ".NotesController.get_notes_1") get_notes_1

> Get a list of notes.


```ruby
def get_notes_1; end
```

#### Example Usage

```ruby

result = notes.get_notes_1()

```


[Back to List of Controllers](#list_of_controllers)

## <a name="users_ggg_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UsersGggController") UsersGggController

### Get singleton instance

The singleton instance of the ``` UsersGggController ``` class can be accessed from the API Client.

```ruby
usersGgg = client.users_ggg
```

### <a name="get_users"></a>![Method: ](https://apidocs.io/img/method.png ".UsersGggController.get_users") get_users

> Get a list of users. Example:
> ```no-highlight
> https://api.mywebsite.com/users?sort=joined&limit=5
> ```


```ruby
def get_users(name = nil,
                  joined_before = nil,
                  joined_after = nil,
                  sort = SortEnum::NAME,
                  limit = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | Search for a user by name |
| joined_before |  ``` Optional ```  | Search by join date |
| joined_after |  ``` Optional ```  | Search by join date |
| sort |  ``` Optional ```  ``` DefaultValue ```  | Which field to sort by |
| limit |  ``` Optional ```  | The maximum number of users to return, up to `50` |


#### Example Usage

```ruby
name = 'name'
joined_before = 'joinedBefore'
joined_after = 'joinedAfter'
sort = ApiTitle::SortEnum::NAME
limit = 224

result = usersGgg.get_users(name, joined_before, joined_after, sort, limit)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="tags_and_tagging_long_title_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TagsAndTaggingLongTitleController") TagsAndTaggingLongTitleController

### Get singleton instance

The singleton instance of the ``` TagsAndTaggingLongTitleController ``` class can be accessed from the API Client.

```ruby
tagsAndTaggingLongTitle = client.tags_and_tagging_long_title
```

### <a name="get_tags"></a>![Method: ](https://apidocs.io/img/method.png ".TagsAndTaggingLongTitleController.get_tags") get_tags

> Get a list of bars


```ruby
def get_tags; end
```

#### Example Usage

```ruby

result = tagsAndTaggingLongTitle.get_tags()

```


### <a name="get_get_one_tag"></a>![Method: ](https://apidocs.io/img/method.png ".TagsAndTaggingLongTitleController.get_get_one_tag") get_get_one_tag

> Get a single tag


```ruby
def get_get_one_tag(id); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Unique tag identifier |


#### Example Usage

```ruby
id = 'id'

result = tagsAndTaggingLongTitle.get_get_one_tag(id)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

### Get singleton instance

The singleton instance of the ``` APIController ``` class can be accessed from the API Client.

```ruby
client = client.client
```

### <a name="new"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.new") new

> TODO: Add a method description


```ruby
def new(testing,
            cache_control,
            content_type,
            postman_token); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| testing |  ``` Required ```  | TODO: Add a parameter description |
| cache_control |  ``` Required ```  | TODO: Add a parameter description |
| content_type |  ``` Required ```  | TODO: Add a parameter description |
| postman_token |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```ruby
testing = '{ "testing"'
cache_control = 'cache-control'
content_type = 'content-type'
postman_token = 'postman-token'

result = client.new(testing, cache_control, content_type, postman_token)

```


### <a name="create_sample_2"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.create_sample_2") create_sample_2

> TODO: Add a method description


```ruby
def create_sample_2(body,
                        cache_control,
                        content_type,
                        postman_token); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| cache_control |  ``` Required ```  | TODO: Add a parameter description |
| content_type |  ``` Required ```  | TODO: Add a parameter description |
| postman_token |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```ruby
body = Sample2Request.new
cache_control = 'cache-control'
content_type = 'content-type'
postman_token = 'postman-token'

result = client.create_sample_2(body, cache_control, content_type, postman_token)

```


[Back to List of Controllers](#list_of_controllers)



