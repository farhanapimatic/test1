# Getting started

## How to Build

This client library is a Ruby gem which can be compiled and used in your Ruby and Ruby on Rails project. This library requires a few gems from the RubyGems repository.

1. Open the command line interface or the terminal and navigate to the folder containing the source code.
2. Run ``` gem build bibcode_query.gemspec ``` to build the gem.
3. Once built, the gem can be installed on the current work environment using ``` gem install bibcode_query-1.0.0.gem ```

![Building Gem](https://apidocs.io/illustration/ruby?step=buildSDK&workspaceFolder=BibcodeQuery-Ruby&workspaceName=BibcodeQuery-Ruby&projectName=bibcode_query&gemName=bibcode_query&gemVer=1.0.0)

## How to Use

The following section explains how to use the BibcodeQuery Ruby Gem in a new Rails project using RubyMine&trade;. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

### 1. Starting a new project

Close any existing projects in RubyMine&trade; by selecting ``` File -> Close Project ```. Next, click on ``` Create New Project ``` to create a new project from scratch.

![Create a new project in RubyMine](https://apidocs.io/illustration/ruby?step=createNewProject0&workspaceFolder=BibcodeQuery-Ruby&workspaceName=BibcodeQuery&projectName=bibcode_query&gemName=bibcode_query&gemVer=1.0.0)

Next, provide ``` TestApp ``` as the project name, choose ``` Rails Application ``` as the project type, and click ``` OK ```.

![Create a new Rails Application in RubyMine - step 1](https://apidocs.io/illustration/ruby?step=createNewProject1&workspaceFolder=BibcodeQuery-Ruby&workspaceName=BibcodeQuery&projectName=bibcode_query&gemName=bibcode_query&gemVer=1.0.0)

In the next dialog make sure that correct *Ruby SDK* is being used (minimum 2.0.0) and click ``` OK ```.

![Create a new Rails Application in RubyMine - step 2](https://apidocs.io/illustration/ruby?step=createNewProject2&workspaceFolder=BibcodeQuery-Ruby&workspaceName=BibcodeQuery&projectName=bibcode_query&gemName=bibcode_query&gemVer=1.0.0)

This will create a new Rails Application project with an existing set of files and folder.

### 2. Add reference of the gem

In order to use the BibcodeQuery gem in the new project we must add a gem reference. Locate the ```Gemfile``` in the *Project Explorer* window under the ``` TestApp ``` project node. The file contains references to all gems being used in the project. Here, add the reference to the library gem by adding the following line: ``` gem 'bibcode_query', '~> 1.0.0' ```

![Add references of the Gemfile](https://apidocs.io/illustration/ruby?step=addReference&workspaceFolder=BibcodeQuery-Ruby&workspaceName=BibcodeQuery&projectName=bibcode_query&gemName=bibcode_query&gemVer=1.0.0)

### 3. Adding a new Rails Controller

Once the ``` TestApp ``` project is created, a folder named ``` controllers ``` will be visible in the *Project Explorer* under the following path: ``` TestApp > app > controllers ```. Right click on this folder and select ``` New -> Run Rails Generator... ```.

![Run Rails Generator on Controllers Folder](https://apidocs.io/illustration/ruby?step=addCode0&workspaceFolder=BibcodeQuery-Ruby&workspaceName=BibcodeQuery&projectName=bibcode_query&gemName=bibcode_query&gemVer=1.0.0)

Selecting the said option will popup a small window where the generator names are displayed. Here, select the ``` controller ``` template.

![Create a new Controller](https://apidocs.io/illustration/ruby?step=addCode1&workspaceFolder=BibcodeQuery-Ruby&workspaceName=BibcodeQuery&projectName=bibcode_query&gemName=bibcode_query&gemVer=1.0.0)

Next, a popup window will ask you for a Controller name and included Actions. For controller name provide ``` Hello ``` and include an action named ``` Index ``` and click ``` OK ```.

![Add a new Controller](https://apidocs.io/illustration/ruby?step=addCode2&workspaceFolder=BibcodeQuery-Ruby&workspaceName=BibcodeQuery&projectName=bibcode_query&gemName=bibcode_query&gemVer=1.0.0)

A new controller class anmed ``` HelloController ``` will be created in a file named ``` hello_controller.rb ``` containing a method named ``` Index ```. In this method, add code for initialization and a sample for its usage.

![Initialize the library](https://apidocs.io/illustration/ruby?step=addCode3&workspaceFolder=BibcodeQuery-Ruby&workspaceName=BibcodeQuery&projectName=bibcode_query&gemName=bibcode_query&gemVer=1.0.0)

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
| o_auth_client_id | OAuth 2 Client ID |
| o_auth_client_secret | OAuth 2 Client Secret |
| o_auth_username | OAuth 2 Resource Owner Username |
| o_auth_password | OAuth 2 Resource Owner Password |



API client can be initialized as following.

```ruby
# Configuration parameters and credentials
o_auth_client_id = 'o_auth_client_id' # OAuth 2 Client ID
o_auth_client_secret = 'o_auth_client_secret' # OAuth 2 Client Secret
o_auth_username = 'o_auth_username' # OAuth 2 Resource Owner Username
o_auth_password = 'o_auth_password' # OAuth 2 Resource Owner Password

client = BibcodeQuery::BibcodeQueryClient.new(
  o_auth_client_id: o_auth_client_id,
  o_auth_client_secret: o_auth_client_secret,
  o_auth_username: o_auth_username,
  o_auth_password: o_auth_password
)
```

The added initlization code can be debugged by putting a breakpoint in the ``` Index ``` method and running the project in debug mode by selecting ``` Run -> Debug 'Development: TestApp' ```.

![Debug the TestApp](https://apidocs.io/illustration/ruby?step=addCode4&workspaceFolder=BibcodeQuery-Ruby&workspaceName=BibcodeQuery&projectName=bibcode_query&gemName=bibcode_query&gemVer=1.0.0&initLine=client%2520%253D%2520BibcodeQueryClient.new%2528%2527o_auth_client_id%2527%252C%2520%2527o_auth_client_secret%2527%252C%2520%2527o_auth_username%2527%252C%2520%2527o_auth_password%2527%2529)


You must now authorize the client.

### Authorizing your client

This SDK uses *OAuth 2.0 authorization* to authorize the client.

The `authorize()` method will exchange the user's credentials for an *access token*.
The access token is an object containing information for authorizing client requests and refreshing the token itself.


```ruby
begin
  client.auth.authorize()
rescue BibcodeQuery::OAuthProviderException => ex
  # handle exception
end
```

The client can now make authorized endpoint calls.

### Refreshing token

An access token may expire after some time. To extend its lifetime, you must refresh the token.

```ruby
if client.auth.is_token_expired
  begin
    client.auth.refresh_token
  rescue BibcodeQuery::OAuthProviderException => ex
    # handle exception
  end
end
```

If a token expires, the SDK will attempt to automatically refresh the token before the next endpoint call requiring authentication.

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

You can store the access token in a file or a database.

```ruby
# store token
save_token_to_database(client.config.o_auth_token)
```
 
However, since the the SDK will attempt to automatically refresh the token when it expires, it is recommended that you register a *token update callback* to detect any change to the access token.

```ruby
client.config.o_auth_callback = Proc.new { |token| save_token_to_database(token) }
```

The token update callback will be fired upon authorization as well as token refresh.

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token after creating the client:

```ruby
client = BibcodeQuery::BibcodeQueryClient.new
client.config.o_auth_token = load_token_from_database
```

### Complete example

```ruby
require 'bibcode_query'

include BibcodeQuery

# function for storing token to database
def save_token_to_database(token)
  # code to save the token to database
end

# function for loading token from database
def load_token_from_database
  # load token from database and return it (return nil if no token exists)
end

# Configuration parameters and credentials
o_auth_client_id = 'o_auth_client_id' # OAuth 2 Client ID
o_auth_client_secret = 'o_auth_client_secret' # OAuth 2 Client Secret
o_auth_username = 'o_auth_username' # OAuth 2 Resource Owner Username
o_auth_password = 'o_auth_password' # OAuth 2 Resource Owner Password

#  create a new client
client = BibcodeQuery::BibcodeQueryClient.new(
  o_auth_client_id: o_auth_client_id,
  o_auth_client_secret: o_auth_client_secret,
  o_auth_username: o_auth_username,
  o_auth_password: o_auth_password
)

# callback for storing token for reuse when token is updated
client.config.o_auth_callback =  Proc.new { |token| save_token_to_database(token) }

# obtain access token, needed for client to be authorized
previous_token = load_token_from_database
if previous_token
  # restore previous access token
  client.config.o_auth_token = previous_token
else
  # obtain new access token
  begin
    client.auth.authorize()
  rescue OAuthProviderException => ex
    # handle exception
  end
end

# the client is now authorized and you can use controllers to make endpoint calls
# client will automatically refresh the token when it expires and call the token update callback
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [BibcodeQueryBindingController](#bibcode_query_binding_controller)
* [APIController](#api_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="bibcode_query_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png ".BibcodeQueryBindingController") BibcodeQueryBindingController

### Get singleton instance

The singleton instance of the ``` BibcodeQueryBindingController ``` class can be accessed from the API Client.

```ruby
bibcodeQueryBinding = client.bibcode_query_binding
```

### <a name="get_bibcode"></a>![Method: ](https://apidocs.io/img/method.png ".BibcodeQueryBindingController.get_bibcode") get_bibcode

> *Tags:*  ``` Skips Authentication ``` 

> getBibcode


```ruby
def get_bibcode(bibcode,
                    db_key,
                    data_type); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| bibcode |  ``` Required ```  | TODO: Add a parameter description |
| db_key |  ``` Required ```  | TODO: Add a parameter description |
| data_type |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```ruby
bibcode = 'bibcode'
db_key = 'db_key'
data_type = 'data_type'

result = bibcodeQueryBinding.get_bibcode(bibcode, db_key, data_type)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

### Get singleton instance

The singleton instance of the ``` APIController ``` class can be accessed from the API Client.

```ruby
client = client.client
```

### <a name="create_test"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.create_test") create_test

> TODO: Add a method description


```ruby
def create_test(body,
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
body = TestRequest.new
cache_control = 'cache-control'
content_type = 'content-type'
postman_token = 'postman-token'

result = client.create_test(body, cache_control, content_type, postman_token)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="o_auth_authorization_controller"></a>![Class: ](https://apidocs.io/img/class.png ".OAuthAuthorizationController") OAuthAuthorizationController

### Get singleton instance

The singleton instance of the ``` OAuthAuthorizationController ``` class can be accessed from the API Client.

```ruby
oAuthAuthorization = client.o_auth_authorization
```

### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_request_token") create_request_token

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```ruby
def create_request_token(authorization,
                             username,
                             password,
                             scope = nil,
                             _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
username = 'username'
password = 'password'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_request_token(authorization, username, password, scope, formParams)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_refresh_token") create_refresh_token

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```ruby
def create_refresh_token(authorization,
                             refresh_token,
                             scope = nil,
                             _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refresh_token |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
refresh_token = 'refresh_token'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_refresh_token(authorization, refresh_token, scope, formParams)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token_1"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_request_token_1") create_request_token_1

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```ruby
def create_request_token_1(authorization,
                               username,
                               password,
                               scope = nil,
                               _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
username = 'username'
password = 'password'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_request_token_1(authorization, username, password, scope, formParams)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token_1"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_refresh_token_1") create_refresh_token_1

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```ruby
def create_refresh_token_1(authorization,
                               refresh_token,
                               scope = nil,
                               _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refresh_token |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
refresh_token = 'refresh_token'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_refresh_token_1(authorization, refresh_token, scope, formParams)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token_2"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_request_token_2") create_request_token_2

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```ruby
def create_request_token_2(authorization,
                               username,
                               password,
                               scope = nil,
                               _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
username = 'username'
password = 'password'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_request_token_2(authorization, username, password, scope, formParams)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token_2"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_refresh_token_2") create_refresh_token_2

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```ruby
def create_refresh_token_2(authorization,
                               refresh_token,
                               scope = nil,
                               _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refresh_token |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
refresh_token = 'refresh_token'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_refresh_token_2(authorization, refresh_token, scope, formParams)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token_1"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_request_token_1") create_request_token_1

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```ruby
def create_request_token_1(authorization,
                               username,
                               password,
                               scope = nil,
                               _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
username = 'username'
password = 'password'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_request_token_1(authorization, username, password, scope, formParams)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token_1"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_refresh_token_1") create_refresh_token_1

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```ruby
def create_refresh_token_1(authorization,
                               refresh_token,
                               scope = nil,
                               _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refresh_token |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
refresh_token = 'refresh_token'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_refresh_token_1(authorization, refresh_token, scope, formParams)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token_2"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_request_token_2") create_request_token_2

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```ruby
def create_request_token_2(authorization,
                               username,
                               password,
                               scope = nil,
                               _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
username = 'username'
password = 'password'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_request_token_2(authorization, username, password, scope, formParams)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token_2"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_refresh_token_2") create_refresh_token_2

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```ruby
def create_refresh_token_2(authorization,
                               refresh_token,
                               scope = nil,
                               _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refresh_token |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
refresh_token = 'refresh_token'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_refresh_token_2(authorization, refresh_token, scope, formParams)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



[Back to List of Controllers](#list_of_controllers)



