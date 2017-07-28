# Getting started

## How to Build

This client library is a Ruby gem which can be compiled and used in your Ruby and Ruby on Rails project. This library requires a few gems from the RubyGems repository.

1. Open the command line interface or the terminal and navigate to the folder containing the source code.
2. Run ``` gem build purchase_order_service.gemspec ``` to build the gem.
3. Once built, the gem can be installed on the current work environment using ``` gem install purchase_order_service-1.1.0.gem ```

![Building Gem](https://apidocs.io/illustration/ruby?step=buildSDK&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService-Ruby&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.1.0)

## How to Use

The following section explains how to use the PurchaseOrderService Ruby Gem in a new Rails project using RubyMine&trade;. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

### 1. Starting a new project

Close any existing projects in RubyMine&trade; by selecting ``` File -> Close Project ```. Next, click on ``` Create New Project ``` to create a new project from scratch.

![Create a new project in RubyMine](https://apidocs.io/illustration/ruby?step=createNewProject0&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.1.0)

Next, provide ``` TestApp ``` as the project name, choose ``` Rails Application ``` as the project type, and click ``` OK ```.

![Create a new Rails Application in RubyMine - step 1](https://apidocs.io/illustration/ruby?step=createNewProject1&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.1.0)

In the next dialog make sure that correct *Ruby SDK* is being used (minimum 2.0.0) and click ``` OK ```.

![Create a new Rails Application in RubyMine - step 2](https://apidocs.io/illustration/ruby?step=createNewProject2&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.1.0)

This will create a new Rails Application project with an existing set of files and folder.

### 2. Add reference of the gem

In order to use the PurchaseOrderService gem in the new project we must add a gem reference. Locate the ```Gemfile``` in the *Project Explorer* window under the ``` TestApp ``` project node. The file contains references to all gems being used in the project. Here, add the reference to the library gem by adding the following line: ``` gem 'purchase_order_service', '~> 1.1.0' ```

![Add references of the Gemfile](https://apidocs.io/illustration/ruby?step=addReference&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.1.0)

### 3. Adding a new Rails Controller

Once the ``` TestApp ``` project is created, a folder named ``` controllers ``` will be visible in the *Project Explorer* under the following path: ``` TestApp > app > controllers ```. Right click on this folder and select ``` New -> Run Rails Generator... ```.

![Run Rails Generator on Controllers Folder](https://apidocs.io/illustration/ruby?step=addCode0&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.1.0)

Selecting the said option will popup a small window where the generator names are displayed. Here, select the ``` controller ``` template.

![Create a new Controller](https://apidocs.io/illustration/ruby?step=addCode1&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.1.0)

Next, a popup window will ask you for a Controller name and included Actions. For controller name provide ``` Hello ``` and include an action named ``` Index ``` and click ``` OK ```.

![Add a new Controller](https://apidocs.io/illustration/ruby?step=addCode2&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.1.0)

A new controller class anmed ``` HelloController ``` will be created in a file named ``` hello_controller.rb ``` containing a method named ``` Index ```. In this method, add code for initialization and a sample for its usage.

![Initialize the library](https://apidocs.io/illustration/ruby?step=addCode3&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.1.0)

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



API client can be initialized as following.

```ruby
# Configuration parameters and credentials
o_auth_client_id = 'o_auth_client_id' # OAuth 2 Client ID
o_auth_client_secret = 'o_auth_client_secret' # OAuth 2 Client Secret

client = PurchaseOrderService::PurchaseOrderServiceClient.new(
  o_auth_client_id: o_auth_client_id,
  o_auth_client_secret: o_auth_client_secret
)
```

The added initlization code can be debugged by putting a breakpoint in the ``` Index ``` method and running the project in debug mode by selecting ``` Run -> Debug 'Development: TestApp' ```.

![Debug the TestApp](https://apidocs.io/illustration/ruby?step=addCode4&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.1.0&initLine=client%2520%253D%2520PurchaseOrderServiceClient.new%2528%2527o_auth_client_id%2527%252C%2520%2527o_auth_client_secret%2527%2529)


You must now authorize the client.

### Authorizing your client

This SDK uses *OAuth 2.0 authorization* to authorize the client.

The `authorize()` method will exchange the OAuth client credentials for an *access token*.
The access token is an object containing information for authorizing client requests.

 You must pass the *[scopes](#scopes)* for which you need permission to access.
```ruby
begin
  client.auth.authorize(scope: [PurchaseOrderService::OAuthScopeEnum::SF])
rescue PurchaseOrderService::OAuthProviderException => ex
  # handle exception
end
```

The client can now make authorized endpoint calls.


### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the `OAuthScopeEnum` enumeration.

| Scope Name | Description |
| --- | --- |
| `SF` |  |

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

You can store the access token in a file or a database.

```ruby
# store token
save_token_to_database(client.config.o_auth_token)
```

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token after creating the client:

```ruby
client = PurchaseOrderService::PurchaseOrderServiceClient.new
client.config.o_auth_token = load_token_from_database
```

### Complete example

```ruby
require 'purchase_order_service'

include PurchaseOrderService

# function for storing token to database
def save_token_to_database(token)
  # code to save the token to database
end

# function for loading token from database
def load_token_from_database
  # load token from database and return it (return None if no token exists)
end

# Configuration parameters and credentials
o_auth_client_id = 'o_auth_client_id' # OAuth 2 Client ID
o_auth_client_secret = 'o_auth_client_secret' # OAuth 2 Client Secret

#  create a new client
client = PurchaseOrderServiceClient.new(
  o_auth_client_id: o_auth_client_id,
  o_auth_client_secret: o_auth_client_secret
)

# obtain access token, needed for client to be authorized
previous_token = load_token_from_database
if previous_token
  # restore previous access token
  client.config.o_auth_token = previous_token
else
  # obtain new access token
  begin
    token = client.auth.authorize(scope: [OAuthScopeEnum::SF])
    save_token_to_database(token)
  rescue OAuthProviderException => ex
    # handle exception
  end
end

# the client is now authorized and you can use controllers to make endpoint calls
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [PurchaseOrderBindingController](#purchase_order_binding_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="purchase_order_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PurchaseOrderBindingController") PurchaseOrderBindingController

### Get singleton instance

The singleton instance of the ``` PurchaseOrderBindingController ``` class can be accessed from the API Client.

```ruby
purchaseOrderBinding = client.purchase_order_binding
```

### <a name="create_order_status"></a>![Method: ](https://apidocs.io/img/method.png ".PurchaseOrderBindingController.create_order_status") create_order_status

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```ruby
def create_order_status(body); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```ruby
body = GetOrderStatus.new

result = purchaseOrderBinding.create_order_status(body)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 500 | Error in retrieving response |



### <a name="create_order"></a>![Method: ](https://apidocs.io/img/method.png ".PurchaseOrderBindingController.create_order") create_order

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```ruby
def create_order(body); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```ruby
body = PurchaseOrder.new

result = purchaseOrderBinding.create_order(body)

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
                             scope = nil,
                             _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_request_token(authorization, scope, formParams)

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
                               scope = nil,
                               _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_request_token_1(authorization, scope, formParams)

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
                               scope = nil,
                               _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_request_token_2(authorization, scope, formParams)

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
                               scope = nil,
                               _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_request_token_1(authorization, scope, formParams)

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
                               scope = nil,
                               _field_parameters = nil); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _field_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```ruby
authorization = 'Authorization'
scope = 'scope'
# key-value map for optional form parameters
formParams = { 'key' => 'value' }

result = oAuthAuthorization.create_request_token_2(authorization, scope, formParams)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



[Back to List of Controllers](#list_of_controllers)



