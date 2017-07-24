# Getting started

## How to Build


You must have Python 2 >=2.7.9 or Python 3 >=3.4 installed on your system to install and run this SDK. This SDK package depends on other Python packages like nose, jsonpickle etc. 
These dependencies are defined in the ```requirements.txt``` file that comes with the SDK.
To resolve these dependencies, you can use the PIP Dependency manager. Install it by following steps at [https://pip.pypa.io/en/stable/installing/](https://pip.pypa.io/en/stable/installing/).

Python and PIP executables should be defined in your PATH. Open command prompt and type ```pip --version```.
This should display the version of the PIP Dependency Manager installed if your installation was successful and the paths are properly defined.

* Using command line, navigate to the directory containing the generated files (including ```requirements.txt```) for the SDK.
* Run the command ```pip install -r requirements.txt```. This should install all the required dependencies.

![Building SDK - Step 1](https://apidocs.io/illustration/python?step=installDependencies&workspaceFolder=BibcodeQuery-Python)


## How to Use

The following section explains how to use the Bibcodequery SDK package in a new project.

### 1. Open Project in an IDE

Open up a Python IDE like PyCharm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PyCharm - Step 1](https://apidocs.io/illustration/python?step=pyCharm)

Click on ```Open``` in PyCharm to browse to your generated SDK directory and then click ```OK```.

![Open project in PyCharm - Step 2](https://apidocs.io/illustration/python?step=openProject0&workspaceFolder=BibcodeQuery-Python)     

The project files will be displayed in the side bar as follows:

![Open project in PyCharm - Step 3](https://apidocs.io/illustration/python?step=openProject1&workspaceFolder=BibcodeQuery-Python&projectName=bibcodequery)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PyCharm - Step 1](https://apidocs.io/illustration/python?step=createDirectory&workspaceFolder=BibcodeQuery-Python&projectName=bibcodequery)

Name the directory as "test"

![Add a new project in PyCharm - Step 2](https://apidocs.io/illustration/python?step=nameDirectory)
   
Add a python file to this project with the name "testsdk"

![Add a new project in PyCharm - Step 3](https://apidocs.io/illustration/python?step=createFile&workspaceFolder=BibcodeQuery-Python&projectName=bibcodequery)

Name it "testsdk"

![Add a new project in PyCharm - Step 4](https://apidocs.io/illustration/python?step=nameFile)

In your python file you will be required to import the generated python library using the following code lines

```Python
from bibcodequery.bibcodequery_client import BibcodequeryClient
```

![Add a new project in PyCharm - Step 4](https://apidocs.io/illustration/python?step=projectFiles&workspaceFolder=BibcodeQuery-Python&libraryName=bibcodequery.bibcodequery_client&projectName=bibcodequery)

After this you can write code to instantiate an API client object, get a controller object and  make API calls. Sample code is given in the subsequent sections.

### 3. Run the Test Project

To run the file within your test project, right click on your Python file inside your Test project and click on ```Run```

![Run Test Project - Step 1](https://apidocs.io/illustration/python?step=runProject&workspaceFolder=BibcodeQuery-Python&libraryName=bibcodequery.bibcodequery_client&projectName=bibcodequery)


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
| o_auth_client_id | OAuth 2 Client ID |
| o_auth_client_secret | OAuth 2 Client Secret |
| o_auth_username | OAuth 2 Resource Owner Username |
| o_auth_password | OAuth 2 Resource Owner Password |



API client can be initialized as following.

```python
# Configuration parameters and credentials
o_auth_client_id = 'o_auth_client_id' # OAuth 2 Client ID
o_auth_client_secret = 'o_auth_client_secret' # OAuth 2 Client Secret
o_auth_username = 'o_auth_username' # OAuth 2 Resource Owner Username
o_auth_password = 'o_auth_password' # OAuth 2 Resource Owner Password

client = BibcodequeryClient(o_auth_client_id, o_auth_client_secret, o_auth_username, o_auth_password)
```


You must now authorize the client.

### Authorizing your client

This SDK uses *OAuth 2.0 authorization* to authorize the client.

The `authorize()` method will exchange the user's credentials for an *access token*.
The access token is an object containing information for authorizing client requests and refreshing the token itself.


```python
try:
    client.auth.authorize()
except OAuthProviderException as ex:
    # handle exception
```

The client can now make authorized endpoint calls.

### Refreshing token

An access token may expire after some time. To extend its lifetime, you must refresh the token.

```python
if client.auth.is_token_expired():
    try:
        client.auth.refresh_token()
    except OAuthProviderException as ex:
        # handle exception
```

If a token expires, the SDK will attempt to automatically refresh the token before the next endpoint call requiring authentication.

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

You can store the access token in a file or a database.

```python
# store token
save_token_to_database(client.config.o_auth_token)
```
 
However, since the the SDK will attempt to automatically refresh the token when it expires, it is recommended that you register a *token update callback* to detect any change to the access token.

```python
client.config.o_auth_callback = save_token_to_database
```

The token update callback will be fired upon authorization as well as token refresh.

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token after creating the client:

```python
client = BibcodequeryClient()
client.config.o_auth_token = load_token_from_database()
```

### Complete example

```python
from bibcodequery.bibcodequery_client import BibcodequeryClient
from bibcodequery.exceptions.o_auth_provider_exception import OAuthProviderException

# function for storing token to database
def save_token_to_database(token):
    # code to save the token to database

# function for loading token from database
def load_token_from_database():
    # load token from database and return it (return None if no token exists)

# Configuration parameters and credentials
o_auth_client_id = 'o_auth_client_id' # OAuth 2 Client ID
o_auth_client_secret = 'o_auth_client_secret' # OAuth 2 Client Secret
o_auth_username = 'o_auth_username' # OAuth 2 Resource Owner Username
o_auth_password = 'o_auth_password' # OAuth 2 Resource Owner Password

#  create a new client
client = BibcodequeryClient(o_auth_client_id, o_auth_client_secret, o_auth_username, o_auth_password)

# callback for storing token for reuse when token is updated
client.config.o_auth_callback = save_token_to_database

# obtain access token, needed for client to be authorized
previous_token = load_token_from_database()
if previous_token:
    # restore previous access token
    client.config.o_auth_token = previous_token
else:
    # obtain new access token
    try:
        client.auth.authorize()
    except OAuthProviderException as ex:
        # handle exception

# the client is now authorized and you can use controllers to make endpoint calls
# client will automatically refresh the token when it expires and call the token update callback
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [BibcodeQueryBindingController](#bibcode_query_binding_controller)
* [APIController](#api_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="bibcode_query_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png ".BibcodeQueryBindingController") BibcodeQueryBindingController

### Get controller instance

An instance of the ``` BibcodeQueryBindingController ``` class can be accessed from the API Client.

```python
 bibcode_query_binding_client = client.bibcode_query_binding
```

### <a name="get_bibcode"></a>![Method: ](https://apidocs.io/img/method.png ".BibcodeQueryBindingController.get_bibcode") get_bibcode

> *Tags:*  ``` Skips Authentication ``` 

> getBibcode

```python
def get_bibcode(self,
                    bibcode,
                    db_key,
                    data_type)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| bibcode |  ``` Required ```  | TODO: Add a parameter description |
| dbKey |  ``` Required ```  | TODO: Add a parameter description |
| dataType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```python
bibcode = 'bibcode'
db_key = 'db_key'
data_type = 'data_type'

result = bibcode_query_binding_client.get_bibcode(bibcode, db_key, data_type)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

### Get controller instance

An instance of the ``` APIController ``` class can be accessed from the API Client.

```python
 client_client = client.client
```

### <a name="create_test"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.create_test") create_test

> TODO: Add a method description

```python
def create_test(self,
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
body = TestRequest()
cache_control = 'cache-control'
content_type = 'content-type'
postman_token = 'postman-token'

result = client_client.create_test(body, cache_control, content_type, postman_token)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="o_auth_authorization_controller"></a>![Class: ](https://apidocs.io/img/class.png ".OAuthAuthorizationController") OAuthAuthorizationController

### Get controller instance

An instance of the ``` OAuthAuthorizationController ``` class can be accessed from the API Client.

```python
 o_auth_authorization_client = client.o_auth_authorization
```

### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_request_token") create_request_token

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.

```python
def create_request_token(self,
                             authorization,
                             username,
                             password,
                             scope=None,
                             _optional_form_parameters=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _optional_form_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```python
authorization = 'Authorization'
username = 'username'
password = 'password'
scope = 'scope'
# key-value map for optional form parameters
optional_form_parameters = { }


result = o_auth_authorization_client.create_request_token(authorization, username, password, scope, optional_form_parameters)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_refresh_token") create_refresh_token

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token

```python
def create_refresh_token(self,
                             authorization,
                             refresh_token,
                             scope=None,
                             _optional_form_parameters=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _optional_form_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```python
authorization = 'Authorization'
refresh_token = 'refresh_token'
scope = 'scope'
# key-value map for optional form parameters
optional_form_parameters = { }


result = o_auth_authorization_client.create_refresh_token(authorization, refresh_token, scope, optional_form_parameters)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_request_token_1"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_request_token_1") create_request_token_1

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.

```python
def create_request_token_1(self,
                               authorization,
                               username,
                               password,
                               scope=None,
                               _optional_form_parameters=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _optional_form_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```python
authorization = 'Authorization'
username = 'username'
password = 'password'
scope = 'scope'
# key-value map for optional form parameters
optional_form_parameters = { }


result = o_auth_authorization_client.create_request_token_1(authorization, username, password, scope, optional_form_parameters)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_refresh_token_1"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_refresh_token_1") create_refresh_token_1

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token

```python
def create_refresh_token_1(self,
                               authorization,
                               refresh_token,
                               scope=None,
                               _optional_form_parameters=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _optional_form_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```python
authorization = 'Authorization'
refresh_token = 'refresh_token'
scope = 'scope'
# key-value map for optional form parameters
optional_form_parameters = { }


result = o_auth_authorization_client.create_refresh_token_1(authorization, refresh_token, scope, optional_form_parameters)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_request_token_2"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_request_token_2") create_request_token_2

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.

```python
def create_request_token_2(self,
                               authorization,
                               username,
                               password,
                               scope=None,
                               _optional_form_parameters=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _optional_form_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```python
authorization = 'Authorization'
username = 'username'
password = 'password'
scope = 'scope'
# key-value map for optional form parameters
optional_form_parameters = { }


result = o_auth_authorization_client.create_request_token_2(authorization, username, password, scope, optional_form_parameters)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_refresh_token_2"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_refresh_token_2") create_refresh_token_2

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token

```python
def create_refresh_token_2(self,
                               authorization,
                               refresh_token,
                               scope=None,
                               _optional_form_parameters=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _optional_form_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```python
authorization = 'Authorization'
refresh_token = 'refresh_token'
scope = 'scope'
# key-value map for optional form parameters
optional_form_parameters = { }


result = o_auth_authorization_client.create_refresh_token_2(authorization, refresh_token, scope, optional_form_parameters)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_request_token_11"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_request_token_11") create_request_token_11

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.

```python
def create_request_token_11(self,
                                authorization,
                                username,
                                password,
                                scope=None,
                                _optional_form_parameters=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _optional_form_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```python
authorization = 'Authorization'
username = 'username'
password = 'password'
scope = 'scope'
# key-value map for optional form parameters
optional_form_parameters = { }


result = o_auth_authorization_client.create_request_token_11(authorization, username, password, scope, optional_form_parameters)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_refresh_token_11"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_refresh_token_11") create_refresh_token_11

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token

```python
def create_refresh_token_11(self,
                                authorization,
                                refresh_token,
                                scope=None,
                                _optional_form_parameters=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _optional_form_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```python
authorization = 'Authorization'
refresh_token = 'refresh_token'
scope = 'scope'
# key-value map for optional form parameters
optional_form_parameters = { }


result = o_auth_authorization_client.create_refresh_token_11(authorization, refresh_token, scope, optional_form_parameters)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_request_token_21"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_request_token_21") create_request_token_21

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.

```python
def create_request_token_21(self,
                                authorization,
                                username,
                                password,
                                scope=None,
                                _optional_form_parameters=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _optional_form_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```python
authorization = 'Authorization'
username = 'username'
password = 'password'
scope = 'scope'
# key-value map for optional form parameters
optional_form_parameters = { }


result = o_auth_authorization_client.create_request_token_21(authorization, username, password, scope, optional_form_parameters)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_refresh_token_21"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_refresh_token_21") create_refresh_token_21

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token

```python
def create_refresh_token_21(self,
                                authorization,
                                refresh_token,
                                scope=None,
                                _optional_form_parameters=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _optional_form_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```python
authorization = 'Authorization'
refresh_token = 'refresh_token'
scope = 'scope'
# key-value map for optional form parameters
optional_form_parameters = { }


result = o_auth_authorization_client.create_refresh_token_21(authorization, refresh_token, scope, optional_form_parameters)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_request_token_1"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_request_token_1") create_request_token_1

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.

```python
def create_request_token_1(self,
                               authorization,
                               username,
                               password,
                               scope=None,
                               _optional_form_parameters=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| username |  ``` Required ```  | Resource owner username |
| password |  ``` Required ```  | Resource owner password |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _optional_form_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```python
authorization = 'Authorization'
username = 'username'
password = 'password'
scope = 'scope'
# key-value map for optional form parameters
optional_form_parameters = { }


result = o_auth_authorization_client.create_request_token_1(authorization, username, password, scope, optional_form_parameters)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_refresh_token_1"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.create_refresh_token_1") create_refresh_token_1

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token

```python
def create_refresh_token_1(self,
                               authorization,
                               refresh_token,
                               scope=None,
                               _optional_form_parameters=None)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| _optional_form_parameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```python
authorization = 'Authorization'
refresh_token = 'refresh_token'
scope = 'scope'
# key-value map for optional form parameters
optional_form_parameters = { }


result = o_auth_authorization_client.create_refresh_token_1(authorization, refresh_token, scope, optional_form_parameters)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




[Back to List of Controllers](#list_of_controllers)



