# 

TODO: Add a description



## Base URL

The Base URL for this API is `https://api.example.com`



## Authentication
The type of authentication used by this API is: `OAuth v2 Bearer Token / Personal Access Token`



# <a name="api_reference"></a>API Reference

* [Notes](#notes)
* [Users ggg](#users_ggg)
* [Tags and Tagging Long Title](#tags_and_tagging_long_title)
* [API](#api)

## <a name="notes"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "Notes") Notes


### <a name="get_notes"></a>![Endpoint: ](https://apidocs.io/img/method.png "Get Notes") Get Notes


**`GET`** `/notes`

> Get a list of notes.


#### Base URL
This endpoint uses server `default`.

#### Responses
**200** 

Body (_NoteData_) 
```
[
  {
    "id": 1,
    "title": "Grocery list",
    "body": "Buy milk"
  }
]
```


### <a name="create_new_note"></a>![Endpoint: ](https://apidocs.io/img/method.png "Create New Note") Create New Note


**`POST`** `/notes`

> Create a new note using a title and an optional content body.



#### Request Headers
>Accept=application/json;
>Content-Type=application/json;

#### Request Body
Raw 

|  Type | Tags | Description |
| ------| ---- |-------------| 
| `create new note request` |  ``` Required ```  | TODO: Add a parameter description | 

 Example 
``` 
{
  "title": "My new note",
  "body": "This is the body"
}
``` 

#### Responses
**200** 



**400** 

> Unexpected error in API call. See HTTP response body for details.


### <a name="get_note"></a>![Endpoint: ](https://apidocs.io/img/method.png "Get Note") Get Note


**`GET`** `/notes/{id}`

> Get a single note.



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| id | `string` |  ``` Required ```  | The note ID | `68a5sdf67` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| body | `boolean` |  ``` Required ```  | Set to `false` to exclude note body content. | `false` | 

#### Responses
**200** 

Body (_NoteData_) 
```
{
  "id": 1,
  "title": "Grocery list",
  "body": "Buy milk"
}
```


**404** 

> Unexpected error in API call. See HTTP response body for details.


### <a name="update_a_note"></a>![Endpoint: ](https://apidocs.io/img/method.png "Update a Note") Update a Note


**`PUT`** `/notes/{id}`

> Update a single note by setting the title and/or body.
> ::: warning
> #### <i class="fa fa-warning"></i> Caution
> If the value for `title` or `body` is `null` or `undefined`, then the corresponding value is not modified on the server. However, if you send an empty string instead then it will **permanently overwrite** the original value.
> :::



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| id | `string` |  ``` Required ```  | The note ID | `68a5sdf67` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| body | `string` |  ``` Optional ```  | TODO: Add a parameter description | `"body"` | 

#### Responses
**200** 

Body (_NoteData_) 
```
{
  "id": 1,
  "title": "Grocery list",
  "body": "Buy milk"
}
```


**404** 

> Unexpected error in API call. See HTTP response body for details.


### <a name="delete_a_note"></a>![Endpoint: ](https://apidocs.io/img/method.png "Delete a Note") Delete a Note


**`DELETE`** `/notes/{id}`

> Delete a single note



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| id | `string` |  ``` Required ```  | The note ID | `68a5sdf67` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| body | `string` |  ``` Optional ```  | TODO: Add a parameter description | `"body"` | 

#### Responses
**200** 



**404** 

> Unexpected error in API call. See HTTP response body for details.


### <a name="get_notes1"></a>![Endpoint: ](https://apidocs.io/img/method.png "Get Notes1") Get Notes1


**`GET`** `/notes`

> Get a list of notes.



#### Responses
**200** 

Body (_NoteData_) 
```
[
  {
    "id": 147.545990421225,
    "title": "title",
    "body": "body"
  }
]
```


[Back to API Reference](#api_reference)

## <a name="users_ggg"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "Users ggg") Users ggg


### <a name="get_users"></a>![Endpoint: ](https://apidocs.io/img/method.png "Get users") Get users


**`GET`** `/users`

> Get a list of users. Example:
> ```no-highlight
> https://api.mywebsite.com/users?sort=joined&limit=5
> ```



#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| name | `string` |  ``` Optional ```  | Search for a user by name | `alice` | 
| joinedBefore | `string` |  ``` Optional ```  | Search by join date | `2011-01-01` | 
| joinedAfter | `string` |  ``` Optional ```  | Search by join date | `2011-01-01` | 
| sort | `sort` |  ``` Optional ```  ``` DefaultValue ```  | Which field to sort by | `name` | 
| limit | `number` |  ``` Optional ```  | The maximum number of users to return, up to `50` | `25` | 

#### Responses
**200** 

Body (_Get users response_) 
```
[
  {
    "name": "alice",
    "image": "http://example.com/alice.jpg",
    "joined": "2013-11-01"
  },
  {
    "name": "bob",
    "image": "http://example.com/bob.jpg",
    "joined": "2013-11-02"
  }
]
```


[Back to API Reference](#api_reference)

## <a name="tags_and_tagging_long_title"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "Tags and Tagging Long Title") Tags and Tagging Long Title


### <a name="tags"></a>![Endpoint: ](https://apidocs.io/img/method.png "Tags") Tags


**`GET`** `/tags`

> Get a list of bars



#### Responses
**200** 

Body (_string_) 
```
[
  "tag1",
  "tag2",
  "tag3"
]
```


### <a name="get_get_one_tag"></a>![Endpoint: ](https://apidocs.io/img/method.png "Get Get one tag") Get Get one tag


**`GET`** `/tags/{id}`

> Get a single tag



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| id | `string` |  ``` Required ```  | Unique tag identifier | `"id"` | 

#### Responses
**200** 

Body


[Back to API Reference](#api_reference)

## <a name="api"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "API") API


### <a name="new"></a>![Endpoint: ](https://apidocs.io/img/method.png "new") new


**`POST`** `/notes`

> TODO: Add a method description


#### Base URL
This endpoint uses server ``.

#### Request Headers
>Content-Type=application/x-www-form-urlencoded;
>cache-control="cache-control";
>content-type="content-type";
>postman-token="postman-token";

#### Request Body
Url Encoded

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| { "testing" | `string` |  ``` Required ```  | TODO: Add a parameter description | `"{ "testing""` | 

#### Responses
**200** 

Body


### <a name="sample_2"></a>![Endpoint: ](https://apidocs.io/img/method.png "sample 2") sample 2


**`POST`** `/'/1.1/test.php`

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
| `sample 2 request` |  ``` Required ```  | TODO: Add a parameter description | 

 Example 
``` 
{
  "arrayCount": 147
}
``` 

#### Responses
**200** 

Body


[Back to API Reference](#api_reference)

