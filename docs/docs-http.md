# 



## Server Configuration for Base URLs

This section provides details on the environments available and lists down the servers in each of the environment. The default environment for this API is set to `production` while the default server is set to `default`.
### Environments

An environment consists of a set of servers with base URL values. The environment can be changed programatically allowing rapid switching between different environments e.g.the user can specify a Production and Testing Environment.The available environments for this API are: 

#### production
The environment comprises of the following servers: 

| Name | Base URL | 
|-----------|-------------|
| default | http://adsabs.harvard.edu/ |

#### new
The environment comprises of the following servers: 

| Name | Base URL | 
|-----------|-------------|
| default | WWW.FOOFLE.COM |




## Authentication
The type of authentication used by this API is: `OAuth v2 Resource Owner Password Credentials Grant`



# <a name="api_reference"></a>API Reference

* [BibcodeQueryBinding](#bibcode_query_binding)
* [API](#api)
* [OAuth Authorization](#o_auth_authorization)

## <a name="bibcode_query_binding"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "BibcodeQueryBinding") BibcodeQueryBinding


### <a name="get_bibcode"></a>![Endpoint: ](https://apidocs.io/img/method.png "getBibcode") getBibcode


**`GET`** `/cgi-bin/nph-bib_query`

> *Tags:*  ``` Skips Authentication ``` 

> getBibcode



#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| bibcode | `string` |  ``` Required ```  | TODO: Add a parameter description | `"bibcode"` | 
| db_key | `string` |  ``` Required ```  | TODO: Add a parameter description | `"db_key"` | 
| data_type | `string` |  ``` Required ```  | TODO: Add a parameter description | `"data_type"` | 

#### Responses
**200** 

Body (_returnBibcode_) 
```
{
  "body": "body"
}
```


[Back to API Reference](#api_reference)

## <a name="api"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "API") API


### <a name="test"></a>![Endpoint: ](https://apidocs.io/img/method.png "Test") Test


**`POST`** `/1.1/test.php`

> TODO: Add a method description


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Accept=application/json;
>Content-Type=application/json;
>cache-control="cache-control";
>content-type="content-type";
>postman-token="postman-token";

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| `test request` |  ``` Required ```  | TODO: Add a parameter description | 

 Example 
``` 
{
  "counter": 228
}
``` 

#### Responses
**200** 

Body


[Back to API Reference](#api_reference)

## <a name="o_auth_authorization"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "OAuth Authorization") OAuth Authorization


### <a name="request_token"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token") request token


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `password` | 
| username | `string` |  ``` Required ```  | Resource owner username | `"username"` | 
| password | `string` |  ``` Required ```  | Resource owner password | `"password"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token") refresh token


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `refresh_token` | 
| refresh_token | `string` |  ``` Required ```  | Refresh token | `"refresh_token"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token1"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token1") request token1


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `password` | 
| username | `string` |  ``` Required ```  | Resource owner username | `"username"` | 
| password | `string` |  ``` Required ```  | Resource owner password | `"password"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token1"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token1") refresh token1


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `refresh_token` | 
| refresh_token | `string` |  ``` Required ```  | Refresh token | `"refresh_token"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token2"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token2") request token2


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `password` | 
| username | `string` |  ``` Required ```  | Resource owner username | `"username"` | 
| password | `string` |  ``` Required ```  | Resource owner password | `"password"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token2"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token2") refresh token2


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `refresh_token` | 
| refresh_token | `string` |  ``` Required ```  | Refresh token | `"refresh_token"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token11"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token11") request token11


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `password` | 
| username | `string` |  ``` Required ```  | Resource owner username | `"username"` | 
| password | `string` |  ``` Required ```  | Resource owner password | `"password"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token11"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token11") refresh token11


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `refresh_token` | 
| refresh_token | `string` |  ``` Required ```  | Refresh token | `"refresh_token"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token21"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token21") request token21


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `password` | 
| username | `string` |  ``` Required ```  | Resource owner username | `"username"` | 
| password | `string` |  ``` Required ```  | Resource owner password | `"password"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token21"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token21") refresh token21


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `refresh_token` | 
| refresh_token | `string` |  ``` Required ```  | Refresh token | `"refresh_token"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token11"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token11") request token11


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `password` | 
| username | `string` |  ``` Required ```  | Resource owner username | `"username"` | 
| password | `string` |  ``` Required ```  | Resource owner password | `"password"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token11"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token11") refresh token11


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `refresh_token` | 
| refresh_token | `string` |  ``` Required ```  | Refresh token | `"refresh_token"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token1"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token1") request token1


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `password` | 
| username | `string` |  ``` Required ```  | Resource owner username | `"username"` | 
| password | `string` |  ``` Required ```  | Resource owner password | `"password"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token1"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token1") refresh token1


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `refresh_token` | 
| refresh_token | `string` |  ``` Required ```  | Refresh token | `"refresh_token"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token2"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token2") request token2


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `password` | 
| username | `string` |  ``` Required ```  | Resource owner username | `"username"` | 
| password | `string` |  ``` Required ```  | Resource owner password | `"password"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token2"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token2") refresh token2


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `refresh_token` | 
| refresh_token | `string` |  ``` Required ```  | Refresh token | `"refresh_token"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token3"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token3") request token3


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `password` | 
| username | `string` |  ``` Required ```  | Resource owner username | `"username"` | 
| password | `string` |  ``` Required ```  | Resource owner password | `"password"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token3"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token3") refresh token3


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `refresh_token` | 
| refresh_token | `string` |  ``` Required ```  | Refresh token | `"refresh_token"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="request_token"></a>![Endpoint: ](https://apidocs.io/img/method.png "request token") request token


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `password` | 
| username | `string` |  ``` Required ```  | Resource owner username | `"username"` | 
| password | `string` |  ``` Required ```  | Resource owner password | `"password"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


### <a name="refresh_token"></a>![Endpoint: ](https://apidocs.io/img/method.png "refresh token") refresh token


**`POST`** `/sdf242fgc4544g4vgg4v3sfsfv3`

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>Authorization="Authorization";

#### Request Body
Url Encoded

> Additional optional form parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| grant_type | `string` |  ```Constant ```  ``` Required ```  ``` DefaultValue ```  | Grant Type | `refresh_token` | 
| refresh_token | `string` |  ``` Required ```  | Refresh token | `"refresh_token"` | 
| scope | `string` |  ``` Optional ```  | Requested scopes as a space-delimited list. | `"scope"` | 

#### Responses
**200** 

Body (_OAuthToken_) 
```
{
  "access_token": "access_token",
  "token_type": "token_type",
  "expires_in": "228",
  "scope": "scope",
  "expiry": "228",
  "refresh_token": "refresh_token"
}
```


**400** 

> OAuth 2 provider returned an error.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```
**401** 

> OAuth 2 provider says client authentication failed.
Body (_OAuthProvider_) 
```
{
  "error": "invalid_request",
  "error_description": "error_description",
  "error_uri": "error_uri"
}
```


[Back to API Reference](#api_reference)

