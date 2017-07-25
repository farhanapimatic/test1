# 

The Marvel Comics API is a tool to help developers everywhere create amazing, uncanny and incredible web sites and applications using data from the 70-plus years of the Marvel age of comics.

**Ready to get started?** Great!

Here's the short version of what you need to do:

* **Sign up**: [Get an API key](https://developer.marvel.com/account)
* **Be a good API citizen**: read, understand, and abide by the [terms of use](https://developer.marvel.com/terms) for the Marvel Comics API
* **Link back**: observe the [attribution and linking guidelines](https://developer.marvel.com/documentation/attribution) when displaying data from the API
* **Keep in touch**: [tell us about what you're building](https://developer.marvel.com/community) and talk to other developers on our community page
* **Build cool stuff**

Finally, remember that the Marvel API suite and portal are in beta and this is an evolving project. To the extent that it is possible, we will try to communicate changes to the API before they occur and will try to limit any modifications which cause backwards incompatible changes to applications.



## Base URL

The Base URL for this API is `http://gateway.marvel.com/`



## Authentication
The type of authentication used by this API is: `Custom Query Parameter`
### Authentication Parameters

The parameters required for authentication are listed below:

| Parameter | Description | Example | 
|-----------|-------------| ------- |
| apikey | Developer's API key | 4d883edc9e6eba86bf1cc2dd4024d612 |





# <a name="api_reference"></a>API Reference

* [Events](#events)
* [Characters](#characters)
* [Stories](#stories)
* [Creators](#creators)
* [Comics](#comics)
* [Series](#series)

## <a name="events"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "Events") Events


### <a name="get_events_collection_by_story_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getEventsCollectionByStoryId") getEventsCollectionByStoryId


**`GET`** `/v1/public/stories/{storyId}/events`

> getEventsCollectionByStoryId



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| storyId | `string` |  ``` Required ```  | The story ID. | `"storyId"` | 

#### Query Parameters
> Additional optional query parameters are allowed

| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only events which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| comics | `string` |  ``` Optional ```  | Return only events which take place in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| creators | `string` |  ``` Optional ```  | Return only events which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only events which have been modified since the specified date. | `"modifiedSince"` | 
| name | `string` |  ``` Optional ```  | Filter the event list by name. | `"name"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Return events with names that begin with the specified string (e.g. Sp). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-startDate", "-modified") | `name` | 
| series | `string` |  ``` Optional ```  | Return only events which are part of the specified series (accepts a comma-separated list of ids). | `"series"` | 

#### Responses
**200** 

Body (_EventDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 58,
  "copyright": "copyright",
  "data": {
    "count": 58,
    "limit": 58,
    "offset": 58,
    "results": [
      {
        "characters": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 58
        },
        "comics": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 58
        },
        "creators": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 58
        },
        "description": "description",
        "end": "2017-07-25T07:21:09.9287596Z",
        "id": 58,
        "modified": "2017-07-25T07:21:09.9287596Z",
        "next": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "previous": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "resourceURI": "resourceURI",
        "series": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 58
        },
        "start": "2017-07-25T07:21:09.9287596Z",
        "stories": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 58
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 58
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_events_collection_by_series_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getEventsCollectionBySeriesId") getEventsCollectionBySeriesId


**`GET`** `/v1/public/series/{seriesId}/events`

> getEventsCollectionBySeriesId



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| seriesId | `string` |  ``` Required ```  | The series ID. | `"seriesId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only events which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| comics | `string` |  ``` Optional ```  | Return only events which take place in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| creators | `string` |  ``` Optional ```  | Return only events which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only events which have been modified since the specified date. | `"modifiedSince"` | 
| name | `string` |  ``` Optional ```  | Filter the event list by name. | `"name"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Return events with names that begin with the specified string (e.g. Sp). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-startDate", "-modified") | `name` | 
| stories | `string` |  ``` Optional ```  | Return only events which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 

#### Responses
**200** 

Body (_EventDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 58,
  "copyright": "copyright",
  "data": {
    "count": 58,
    "limit": 58,
    "offset": 58,
    "results": [
      {
        "characters": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 58
        },
        "comics": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 58
        },
        "creators": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 58
        },
        "description": "description",
        "end": "2017-07-25T07:21:09.9287596Z",
        "id": 58,
        "modified": "2017-07-25T07:21:09.9287596Z",
        "next": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "previous": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "resourceURI": "resourceURI",
        "series": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 58
        },
        "start": "2017-07-25T07:21:09.9287596Z",
        "stories": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 58
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 58
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_creator_events_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCreatorEventsCollection") getCreatorEventsCollection


**`GET`** `/v1/public/creators/{creatorId}/events`

> getCreatorEventsCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| creatorId | `string` |  ``` Required ```  | The creator ID. | `"creatorId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only events which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| comics | `string` |  ``` Optional ```  | Return only events which take place in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only events which have been modified since the specified date. | `"modifiedSince"` | 
| name | `string` |  ``` Optional ```  | Filter the event list by name. | `"name"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Return events with names that begin with the specified string (e.g. Sp). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-startDate", "-modified") | `name` | 
| series | `string` |  ``` Optional ```  | Return only events which are part of the specified series (accepts a comma-separated list of ids). | `"series"` | 
| stories | `string` |  ``` Optional ```  | Return only events which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 

#### Responses
**200** 

Body (_EventDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 58,
  "copyright": "copyright",
  "data": {
    "count": 58,
    "limit": 58,
    "offset": 58,
    "results": [
      {
        "characters": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 58
        },
        "comics": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 58
        },
        "creators": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 58
        },
        "description": "description",
        "end": "2017-07-25T07:21:09.9287596Z",
        "id": 58,
        "modified": "2017-07-25T07:21:09.9287596Z",
        "next": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "previous": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "resourceURI": "resourceURI",
        "series": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 58
        },
        "start": "2017-07-25T07:21:09.9287596Z",
        "stories": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 58
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 58
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_issue_events_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getIssueEventsCollection") getIssueEventsCollection


**`GET`** `/v1/public/comics/{comicId}/events`

> getIssueEventsCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comicId | `string` |  ``` Required ```  | The comic ID. | `"comicId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only events which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| creators | `string` |  ``` Optional ```  | Return only events which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only events which have been modified since the specified date. | `"modifiedSince"` | 
| name | `string` |  ``` Optional ```  | Filter the event list by name. | `"name"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Return events with names that begin with the specified string (e.g. Sp). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-startDate", "-modified") | `name` | 
| series | `string` |  ``` Optional ```  | Return only events which are part of the specified series (accepts a comma-separated list of ids). | `"series"` | 
| stories | `string` |  ``` Optional ```  | Return only events which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 

#### Responses
**200** 

Body (_EventDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 58,
  "copyright": "copyright",
  "data": {
    "count": 58,
    "limit": 58,
    "offset": 58,
    "results": [
      {
        "characters": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 58
        },
        "comics": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 58
        },
        "creators": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 58
        },
        "description": "description",
        "end": "2017-07-25T07:21:09.9287596Z",
        "id": 58,
        "modified": "2017-07-25T07:21:09.9287596Z",
        "next": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "previous": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "resourceURI": "resourceURI",
        "series": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 58
        },
        "start": "2017-07-25T07:21:09.9287596Z",
        "stories": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 58
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 58
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_character_events_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCharacterEventsCollection") getCharacterEventsCollection


**`GET`** `/v1/public/characters/{characterId}/events`

> getCharacterEventsCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characterId | `string` |  ``` Required ```  | The character ID. | `"characterId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comics | `string` |  ``` Optional ```  | Return only events which take place in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| creators | `string` |  ``` Optional ```  | Return only events which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only events which have been modified since the specified date. | `"modifiedSince"` | 
| name | `string` |  ``` Optional ```  | Filter the event list by name. | `"name"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Return events with names that begin with the specified string (e.g. Sp). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-startDate", "-modified") | `name` | 
| series | `string` |  ``` Optional ```  | Return only events which are part of the specified series (accepts a comma-separated list of ids). | `"series"` | 
| stories | `string` |  ``` Optional ```  | Return only events which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 

#### Responses
**200** 

Body (_EventDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 58,
  "copyright": "copyright",
  "data": {
    "count": 58,
    "limit": 58,
    "offset": 58,
    "results": [
      {
        "characters": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 58
        },
        "comics": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 58
        },
        "creators": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 58
        },
        "description": "description",
        "end": "2017-07-25T07:21:09.9287596Z",
        "id": 58,
        "modified": "2017-07-25T07:21:09.9287596Z",
        "next": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "previous": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "resourceURI": "resourceURI",
        "series": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 58
        },
        "start": "2017-07-25T07:21:09.9287596Z",
        "stories": {
          "available": 58,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 58
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 58
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_event_individual"></a>![Endpoint: ](https://apidocs.io/img/method.png "getEventIndividual") getEventIndividual


**`GET`** `/v1/public/events/{eventId}`

> getEventIndividual



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| eventId | `string` |  ``` Required ```  | A single event. | `"eventId"` | 

#### Responses
**200** 

Body (_Event_) 
```
{
  "characters": {
    "available": 222,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "role": "role"
      }
    ],
    "returned": 222
  },
  "comics": {
    "available": 222,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 222
  },
  "creators": {
    "available": 222,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "role": "role"
      }
    ],
    "returned": 222
  },
  "description": "description",
  "end": "2017-07-25T07:21:09.9443832Z",
  "id": 222,
  "modified": "2017-07-25T07:21:09.9443832Z",
  "next": {
    "name": "name",
    "resourceURI": "resourceURI"
  },
  "previous": {
    "name": "name",
    "resourceURI": "resourceURI"
  },
  "resourceURI": "resourceURI",
  "series": {
    "available": 222,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 222
  },
  "start": "2017-07-25T07:21:09.9443832Z",
  "stories": {
    "available": 222,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "type": "type"
      }
    ],
    "returned": 222
  },
  "thumbnail": {
    "extension": "extension",
    "path": "path"
  },
  "title": "title",
  "urls": [
    {
      "type": "type",
      "url": "url"
    }
  ]
}
```


**404** 

> Event not found.


### <a name="get_events_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getEventsCollection") getEventsCollection


**`GET`** `/v1/public/events`

> getEventsCollection



#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only events which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| comics | `string` |  ``` Optional ```  | Return only events which take place in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| creators | `string` |  ``` Optional ```  | Return only events which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only events which have been modified since the specified date. | `"modifiedSince"` | 
| name | `string` |  ``` Optional ```  | Return only events which match the specified name. | `"name"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Return events with names that begin with the specified string (e.g. Sp). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-startDate", "-modified") | `name` | 
| series | `string` |  ``` Optional ```  | Return only events which are part of the specified series (accepts a comma-separated list of ids). | `"series"` | 
| stories | `string` |  ``` Optional ```  | Return only events which take place in the specified stories (accepts a comma-separated list of ids). | `"stories"` | 

#### Responses
**200** 

Body (_EventDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 222,
  "copyright": "copyright",
  "data": {
    "count": 222,
    "limit": 222,
    "offset": 222,
    "results": [
      {
        "characters": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 222
        },
        "comics": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "creators": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 222
        },
        "description": "description",
        "end": "2017-07-25T07:21:09.9443832Z",
        "id": 222,
        "modified": "2017-07-25T07:21:09.9443832Z",
        "next": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "previous": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "resourceURI": "resourceURI",
        "series": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "start": "2017-07-25T07:21:09.9443832Z",
        "stories": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 222
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 222
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


[Back to API Reference](#api_reference)

## <a name="characters"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "Characters") Characters


### <a name="get_character_collection_by_story_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCharacterCollectionByStoryId") getCharacterCollectionByStoryId


**`GET`** `/v1/public/stories/{storyId}/characters`

> getCharacterCollectionByStoryId



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| storyId | `string` |  ``` Required ```  | The story ID. | `"storyId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comics | `string` |  ``` Optional ```  | Return only characters which appear in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| events | `string` |  ``` Optional ```  | Return only characters which appear comics that took place in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only characters which have been modified since the specified date. | `"modifiedSince"` | 
| name | `string` |  ``` Optional ```  | Return only characters matching the specified full character name (e.g. Spider-Man). | `"name"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Return characters with names that begin with the specified string (e.g. Sp). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "modified", "-name", "-modified") | `name` | 
| series | `string` |  ``` Optional ```  | Return only characters which appear the specified series (accepts a comma-separated list of ids). | `"series"` | 

#### Responses
**200** 

Body (_CharacterDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 222,
  "copyright": "copyright",
  "data": {
    "count": 222,
    "limit": 222,
    "offset": 222,
    "results": [
      {
        "comics": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "description": "description",
        "events": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "id": 222,
        "modified": "2017-07-25T07:21:09.9443832Z",
        "name": "name",
        "resourceURI": "resourceURI",
        "series": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "stories": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 222
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 222
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_series_character_wrapper"></a>![Endpoint: ](https://apidocs.io/img/method.png "getSeriesCharacterWrapper") getSeriesCharacterWrapper


**`GET`** `/v1/public/series/{seriesId}/characters`

> getSeriesCharacterWrapper



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| seriesId | `string` |  ``` Required ```  | The series id. | `"seriesId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comics | `string` |  ``` Optional ```  | Return only characters which appear in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| events | `string` |  ``` Optional ```  | Return only characters which appear comics that took place in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only characters which have been modified since the specified date. | `"modifiedSince"` | 
| name | `string` |  ``` Optional ```  | Return only characters matching the specified full character name (e.g. Spider-Man). | `"name"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Return characters with names that begin with the specified string (e.g. Sp). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "modified", "-name", "-modified") | `name` | 
| stories | `string` |  ``` Optional ```  | Return only characters which appear the specified stories (accepts a comma-separated list of ids). | `"stories"` | 

#### Responses
**200** 

Body (_CharacterDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 222,
  "copyright": "copyright",
  "data": {
    "count": 222,
    "limit": 222,
    "offset": 222,
    "results": [
      {
        "comics": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "description": "description",
        "events": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "id": 222,
        "modified": "2017-07-25T07:21:09.9443832Z",
        "name": "name",
        "resourceURI": "resourceURI",
        "series": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "stories": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 222
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 222
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_event_character_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getEventCharacterCollection") getEventCharacterCollection


**`GET`** `/v1/public/events/{eventId}/characters`

> getEventCharacterCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| eventId | `string` |  ``` Required ```  | The event ID | `"eventId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comics | `string` |  ``` Optional ```  | Return only characters which appear in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only characters which have been modified since the specified date. | `"modifiedSince"` | 
| name | `string` |  ``` Optional ```  | Return only characters matching the specified full character name (e.g. Spider-Man). | `"name"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Return characters with names that begin with the specified string (e.g. Sp). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "modified", "-name", "-modified") | `name` | 
| series | `string` |  ``` Optional ```  | Return only characters which appear the specified series (accepts a comma-separated list of ids). | `"series"` | 
| stories | `string` |  ``` Optional ```  | Return only characters which appear the specified stories (accepts a comma-separated list of ids). | `"stories"` | 

#### Responses
**200** 

Body (_CharacterDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 222,
  "copyright": "copyright",
  "data": {
    "count": 222,
    "limit": 222,
    "offset": 222,
    "results": [
      {
        "comics": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "description": "description",
        "events": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "id": 222,
        "modified": "2017-07-25T07:21:09.9443832Z",
        "name": "name",
        "resourceURI": "resourceURI",
        "series": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "stories": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 222
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 222
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_comic_character_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getComicCharacterCollection") getComicCharacterCollection


**`GET`** `/v1/public/comics/{comicId}/characters`

> getComicCharacterCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comicId | `string` |  ``` Required ```  | The comic id. | `"comicId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| events | `string` |  ``` Optional ```  | Return only characters which appear comics that took place in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only characters which have been modified since the specified date. | `"modifiedSince"` | 
| name | `string` |  ``` Optional ```  | Return only characters matching the specified full character name (e.g. Spider-Man). | `"name"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Return characters with names that begin with the specified string (e.g. Sp). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "modified", "-name", "-modified") | `name` | 
| series | `string` |  ``` Optional ```  | Return only characters which appear the specified series (accepts a comma-separated list of ids). | `"series"` | 
| stories | `string` |  ``` Optional ```  | Return only characters which appear the specified stories (accepts a comma-separated list of ids). | `"stories"` | 

#### Responses
**200** 

Body (_CharacterDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 222,
  "copyright": "copyright",
  "data": {
    "count": 222,
    "limit": 222,
    "offset": 222,
    "results": [
      {
        "comics": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "description": "description",
        "events": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "id": 222,
        "modified": "2017-07-25T07:21:09.9443832Z",
        "name": "name",
        "resourceURI": "resourceURI",
        "series": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "stories": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 222
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 222
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_character_individual"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCharacterIndividual") getCharacterIndividual


**`GET`** `/v1/public/characters/{characterId}`

> getCharacterIndividual



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characterId | `string` |  ``` Required ```  | A single character id. | `"characterId"` | 

#### Responses
**200** 

Body (_Character_) 
```
{
  "comics": {
    "available": 222,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 222
  },
  "description": "description",
  "events": {
    "available": 222,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 222
  },
  "id": 222,
  "modified": "2017-07-25T07:21:09.9443832Z",
  "name": "name",
  "resourceURI": "resourceURI",
  "series": {
    "available": 222,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 222
  },
  "stories": {
    "available": 222,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "type": "type"
      }
    ],
    "returned": 222
  },
  "thumbnail": {
    "extension": "extension",
    "path": "path"
  },
  "urls": [
    {
      "type": "type",
      "url": "url"
    }
  ]
}
```


**404** 

> Character not found.


### <a name="get_character_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCharacterCollection") getCharacterCollection


**`GET`** `/v1/public/characters`

> getCharacterCollection



#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comics | `string` |  ``` Optional ```  | Return only characters which appear in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| events | `string` |  ``` Optional ```  | Return only characters which appear in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only characters which have been modified since the specified date. | `"modifiedSince"` | 
| name | `string` |  ``` Optional ```  | Return only characters matching the specified full character name (e.g. Spider-Man). | `"name"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Return characters with names that begin with the specified string (e.g. Sp). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "modified", "-name", "-modified") | `name` | 
| series | `string` |  ``` Optional ```  | Return only characters which appear the specified series (accepts a comma-separated list of ids). | `"series"` | 
| stories | `string` |  ``` Optional ```  | Return only characters which appear the specified stories (accepts a comma-separated list of ids). | `"stories"` | 

#### Responses
**200** 

Body (_CharacterDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 222,
  "copyright": "copyright",
  "data": {
    "count": 222,
    "limit": 222,
    "offset": 222,
    "results": [
      {
        "comics": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "description": "description",
        "events": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "id": 222,
        "modified": "2017-07-25T07:21:09.9443832Z",
        "name": "name",
        "resourceURI": "resourceURI",
        "series": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "stories": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 222
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 222
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


[Back to API Reference](#api_reference)

## <a name="stories"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "Stories") Stories


### <a name="get_story_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getStoryCollection") getStoryCollection


**`GET`** `/v1/public/stories`

> getStoryCollection



#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only stories which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| comics | `string` |  ``` Optional ```  | Return only stories contained in the specified (accepts a comma-separated list of ids). | `"comics"` | 
| creators | `string` |  ``` Optional ```  | Return only stories which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| events | `string` |  ``` Optional ```  | Return only stories which take place during the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only stories which have been modified since the specified date. | `"modifiedSince"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "id", "modified", "-id", "-modified") | `id` | 
| series | `string` |  ``` Optional ```  | Return only stories contained the specified series (accepts a comma-separated list of ids). | `"series"` | 

#### Responses
**200** 

Body (_StoryDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 222,
  "copyright": "copyright",
  "data": {
    "count": 222,
    "limit": 222,
    "offset": 222,
    "results": [
      {
        "characters": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 222
        },
        "comics": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "creators": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 222
        },
        "description": "description",
        "events": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "id": 222,
        "modified": "2017-07-25T07:21:09.9443832Z",
        "originalissue": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "resourceURI": "resourceURI",
        "series": {
          "available": 222,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 222
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "type": "type"
      }
    ],
    "total": 222
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_series_story_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getSeriesStoryCollection") getSeriesStoryCollection


**`GET`** `/v1/public/series/{seriesId}/stories`

> getSeriesStoryCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| seriesId | `string` |  ``` Required ```  | The series ID. | `"seriesId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only stories which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| comics | `string` |  ``` Optional ```  | Return only stories contained in the specified (accepts a comma-separated list of ids). | `"comics"` | 
| creators | `string` |  ``` Optional ```  | Return only stories which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| events | `string` |  ``` Optional ```  | Return only stories which take place during the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only stories which have been modified since the specified date. | `"modifiedSince"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "id", "modified", "-id", "-modified") | `id` | 

#### Responses
**200** 

Body (_StoryDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 8,
  "copyright": "copyright",
  "data": {
    "count": 8,
    "limit": 8,
    "offset": 8,
    "results": [
      {
        "characters": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 8
        },
        "comics": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "creators": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 8
        },
        "description": "description",
        "events": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "id": 8,
        "modified": "2017-07-25T07:21:09.9600083Z",
        "originalissue": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "resourceURI": "resourceURI",
        "series": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "type": "type"
      }
    ],
    "total": 8
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_event_story_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getEventStoryCollection") getEventStoryCollection


**`GET`** `/v1/public/events/{eventId}/stories`

> getEventStoryCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| eventId | `string` |  ``` Required ```  | The ID of the event. | `"eventId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only stories which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| comics | `string` |  ``` Optional ```  | Return only stories contained in the specified (accepts a comma-separated list of ids). | `"comics"` | 
| creators | `string` |  ``` Optional ```  | Return only stories which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only stories which have been modified since the specified date. | `"modifiedSince"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "id", "modified", "-id", "-modified") | `id` | 
| series | `string` |  ``` Optional ```  | Return only stories contained the specified series (accepts a comma-separated list of ids). | `"series"` | 

#### Responses
**200** 

Body (_StoryDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 8,
  "copyright": "copyright",
  "data": {
    "count": 8,
    "limit": 8,
    "offset": 8,
    "results": [
      {
        "characters": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 8
        },
        "comics": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "creators": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 8
        },
        "description": "description",
        "events": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "id": 8,
        "modified": "2017-07-25T07:21:09.9600083Z",
        "originalissue": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "resourceURI": "resourceURI",
        "series": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "type": "type"
      }
    ],
    "total": 8
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_creator_story_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCreatorStoryCollection") getCreatorStoryCollection


**`GET`** `/v1/public/creators/{creatorId}/stories`

> getCreatorStoryCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| creatorId | `string` |  ``` Required ```  | The ID of the creator. | `"creatorId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only stories which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| comics | `string` |  ``` Optional ```  | Return only stories contained in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| events | `string` |  ``` Optional ```  | Return only stories which take place during the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only stories which have been modified since the specified date. | `"modifiedSince"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "id", "modified", "-id", "-modified") | `id` | 
| series | `string` |  ``` Optional ```  | Return only stories contained the specified series (accepts a comma-separated list of ids). | `"series"` | 

#### Responses
**200** 

Body (_StoryDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 8,
  "copyright": "copyright",
  "data": {
    "count": 8,
    "limit": 8,
    "offset": 8,
    "results": [
      {
        "characters": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 8
        },
        "comics": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "creators": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 8
        },
        "description": "description",
        "events": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "id": 8,
        "modified": "2017-07-25T07:21:09.9600083Z",
        "originalissue": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "resourceURI": "resourceURI",
        "series": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "type": "type"
      }
    ],
    "total": 8
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_comic_story_collection_by_comic_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getComicStoryCollectionByComicId") getComicStoryCollectionByComicId


**`GET`** `/v1/public/comics/{comicId}/stories`

> getComicStoryCollectionByComicId



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comicId | `string` |  ``` Required ```  | The comic ID. | `"comicId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only stories which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| creators | `string` |  ``` Optional ```  | Return only stories which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| events | `string` |  ``` Optional ```  | Return only stories which take place during the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only stories which have been modified since the specified date. | `"modifiedSince"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "id", "modified", "-id", "-modified") | `id` | 
| series | `string` |  ``` Optional ```  | Return only stories contained the specified series (accepts a comma-separated list of ids). | `"series"` | 

#### Responses
**200** 

Body (_StoryDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 8,
  "copyright": "copyright",
  "data": {
    "count": 8,
    "limit": 8,
    "offset": 8,
    "results": [
      {
        "characters": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 8
        },
        "comics": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "creators": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 8
        },
        "description": "description",
        "events": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "id": 8,
        "modified": "2017-07-25T07:21:09.9600083Z",
        "originalissue": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "resourceURI": "resourceURI",
        "series": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "type": "type"
      }
    ],
    "total": 8
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_character_story_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCharacterStoryCollection") getCharacterStoryCollection


**`GET`** `/v1/public/characters/{characterId}/stories`

> getCharacterStoryCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characterId | `string` |  ``` Required ```  | The character ID. | `"characterId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comics | `string` |  ``` Optional ```  | Return only stories contained in the specified (accepts a comma-separated list of ids). | `"comics"` | 
| creators | `string` |  ``` Optional ```  | Return only stories which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| events | `string` |  ``` Optional ```  | Return only stories which take place during the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only stories which have been modified since the specified date. | `"modifiedSince"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "id", "modified", "-id", "-modified") | `id` | 
| series | `string` |  ``` Optional ```  | Return only stories contained the specified series (accepts a comma-separated list of ids). | `"series"` | 

#### Responses
**200** 

Body (_StoryDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 8,
  "copyright": "copyright",
  "data": {
    "count": 8,
    "limit": 8,
    "offset": 8,
    "results": [
      {
        "characters": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 8
        },
        "comics": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "creators": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 8
        },
        "description": "description",
        "events": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "id": 8,
        "modified": "2017-07-25T07:21:09.9600083Z",
        "originalissue": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "resourceURI": "resourceURI",
        "series": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "type": "type"
      }
    ],
    "total": 8
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_story_individual"></a>![Endpoint: ](https://apidocs.io/img/method.png "getStoryIndividual") getStoryIndividual


**`GET`** `/v1/public/stories/{storyId}`

> getStoryIndividual



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| storyId | `string` |  ``` Required ```  | Filter by story id. | `"storyId"` | 

#### Responses
**200** 

Body (_Story_) 
```
{
  "characters": {
    "available": 8,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "role": "role"
      }
    ],
    "returned": 8
  },
  "comics": {
    "available": 8,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 8
  },
  "creators": {
    "available": 8,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "role": "role"
      }
    ],
    "returned": 8
  },
  "description": "description",
  "events": {
    "available": 8,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 8
  },
  "id": 8,
  "modified": "2017-07-25T07:21:09.9600083Z",
  "originalissue": {
    "name": "name",
    "resourceURI": "resourceURI"
  },
  "resourceURI": "resourceURI",
  "series": {
    "available": 8,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 8
  },
  "thumbnail": {
    "extension": "extension",
    "path": "path"
  },
  "title": "title",
  "type": "type"
}
```


**404** 

> Story not found.


[Back to API Reference](#api_reference)

## <a name="creators"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "Creators") Creators


### <a name="get_creator_individual"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCreatorIndividual") getCreatorIndividual


**`GET`** `/v1/public/creators/{creatorId}`

> getCreatorIndividual



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| creatorId | `string` |  ``` Required ```  | A single creator id. | `"creatorId"` | 

#### Responses
**200** 

Body (_Creator_) 
```
{
  "comics": {
    "available": 8,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 8
  },
  "events": {
    "available": 8,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 8
  },
  "firstName": "firstName",
  "fullName": "fullName",
  "id": 8,
  "lastName": "lastName",
  "middleName": "middleName",
  "modified": "2017-07-25T07:21:09.9600083Z",
  "resourceURI": "resourceURI",
  "series": {
    "available": 8,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 8
  },
  "stories": {
    "available": 8,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "type": "type"
      }
    ],
    "returned": 8
  },
  "suffix": "suffix",
  "thumbnail": {
    "extension": "extension",
    "path": "path"
  },
  "urls": [
    {
      "type": "type",
      "url": "url"
    }
  ]
}
```


**404** 

> Creator not found.


### <a name="get_creator_collection_by_comic_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCreatorCollectionByComicId") getCreatorCollectionByComicId


**`GET`** `/v1/public/comics/{comicId}/creators`

> getCreatorCollectionByComicId



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comicId | `string` |  ``` Required ```  | The comic id. | `"comicId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comics | `string` |  ``` Optional ```  | Return only creators who worked on in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| firstName | `string` |  ``` Optional ```  | Filter by creator first name (e.g. brian). | `"firstName"` | 
| firstNameStartsWith | `string` |  ``` Optional ```  | Filter by creator first names that match critera (e.g. B, St L). | `"firstNameStartsWith"` | 
| lastName | `string` |  ``` Optional ```  | Filter by creator last name (e.g. Bendis). | `"lastName"` | 
| lastNameStartsWith | `string` |  ``` Optional ```  | Filter by creator last names that match critera (e.g. Ben). | `"lastNameStartsWith"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| middleName | `string` |  ``` Optional ```  | Filter by creator middle name (e.g. Michael). | `"middleName"` | 
| middleNameStartsWith | `string` |  ``` Optional ```  | Filter by creator middle names that match critera (e.g. Mi). | `"middleNameStartsWith"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only creators which have been modified since the specified date. | `"modifiedSince"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Filter by creator names that match critera (e.g. B, St L). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "lastName", "firstName", "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName", "-suffix", "-modified") | `lastName` | 
| series | `string` |  ``` Optional ```  | Return only creators who worked on the specified series (accepts a comma-separated list of ids). | `"series"` | 
| stories | `string` |  ``` Optional ```  | Return only creators who worked on the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| suffix | `string` |  ``` Optional ```  | Filter by suffix or honorific (e.g. Jr., Sr.). | `"suffix"` | 

#### Responses
**200** 

Body (_CreatorDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 8,
  "copyright": "copyright",
  "data": {
    "count": 8,
    "limit": 8,
    "offset": 8,
    "results": [
      {
        "comics": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "events": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "firstName": "firstName",
        "fullName": "fullName",
        "id": 8,
        "lastName": "lastName",
        "middleName": "middleName",
        "modified": "2017-07-25T07:21:09.9600083Z",
        "resourceURI": "resourceURI",
        "series": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 8
        },
        "stories": {
          "available": 8,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 8
        },
        "suffix": "suffix",
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 172
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_creator_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCreatorCollection") getCreatorCollection


**`GET`** `/v1/public/creators`

> getCreatorCollection



#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comics | `string` |  ``` Optional ```  | Return only creators who worked on in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| events | `string` |  ``` Optional ```  | Return only creators who worked on comics that took place in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| firstName | `string` |  ``` Optional ```  | Filter by creator first name (e.g. Brian). | `"firstName"` | 
| firstNameStartsWith | `string` |  ``` Optional ```  | Filter by creator first names that match critera (e.g. B, St L). | `"firstNameStartsWith"` | 
| lastName | `string` |  ``` Optional ```  | Filter by creator last name (e.g. Bendis). | `"lastName"` | 
| lastNameStartsWith | `string` |  ``` Optional ```  | Filter by creator last names that match critera (e.g. Ben). | `"lastNameStartsWith"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| middleName | `string` |  ``` Optional ```  | Filter by creator middle name (e.g. Michael). | `"middleName"` | 
| middleNameStartsWith | `string` |  ``` Optional ```  | Filter by creator middle names that match critera (e.g. Mi). | `"middleNameStartsWith"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only creators which have been modified since the specified date. | `"modifiedSince"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Filter by creator names that match critera (e.g. B, St L). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "lastName", "firstName", "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName", "-suffix", "-modified") | `lastName` | 
| series | `string` |  ``` Optional ```  | Return only creators who worked on the specified series (accepts a comma-separated list of ids). | `"series"` | 
| stories | `string` |  ``` Optional ```  | Return only creators who worked on the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| suffix | `string` |  ``` Optional ```  | Filter by suffix or honorific (e.g. Jr., Sr.). | `"suffix"` | 

#### Responses
**200** 

Body (_CreatorDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 172,
  "copyright": "copyright",
  "data": {
    "count": 172,
    "limit": 172,
    "offset": 172,
    "results": [
      {
        "comics": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "events": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "firstName": "firstName",
        "fullName": "fullName",
        "id": 172,
        "lastName": "lastName",
        "middleName": "middleName",
        "modified": "2017-07-25T07:21:09.9756339Z",
        "resourceURI": "resourceURI",
        "series": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "stories": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 172
        },
        "suffix": "suffix",
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 172
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_creator_collection_by_event_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCreatorCollectionByEventId") getCreatorCollectionByEventId


**`GET`** `/v1/public/events/{eventId}/creators`

> getCreatorCollectionByEventId



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| eventId | `string` |  ``` Required ```  | The event ID. | `"eventId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comics | `string` |  ``` Optional ```  | Return only creators who worked on in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| firstName | `string` |  ``` Optional ```  | Filter by creator first name (e.g. brian). | `"firstName"` | 
| firstNameStartsWith | `string` |  ``` Optional ```  | Filter by creator first names that match critera (e.g. B, St L). | `"firstNameStartsWith"` | 
| lastName | `string` |  ``` Optional ```  | Filter by creator last name (e.g. Bendis). | `"lastName"` | 
| lastNameStartsWith | `string` |  ``` Optional ```  | Filter by creator last names that match critera (e.g. Ben). | `"lastNameStartsWith"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| middleName | `string` |  ``` Optional ```  | Filter by creator middle name (e.g. Michael). | `"middleName"` | 
| middleNameStartsWith | `string` |  ``` Optional ```  | Filter by creator middle names that match critera (e.g. Mi). | `"middleNameStartsWith"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only creators which have been modified since the specified date. | `"modifiedSince"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Filter by creator names that match critera (e.g. B, St L). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "lastName", "firstName", "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName", "-suffix", "-modified") | `lastName` | 
| series | `string` |  ``` Optional ```  | Return only creators who worked on the specified series (accepts a comma-separated list of ids). | `"series"` | 
| stories | `string` |  ``` Optional ```  | Return only creators who worked on the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| suffix | `string` |  ``` Optional ```  | Filter by suffix or honorific (e.g. Jr., Sr.). | `"suffix"` | 

#### Responses
**200** 

Body (_CreatorDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 172,
  "copyright": "copyright",
  "data": {
    "count": 172,
    "limit": 172,
    "offset": 172,
    "results": [
      {
        "comics": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "events": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "firstName": "firstName",
        "fullName": "fullName",
        "id": 172,
        "lastName": "lastName",
        "middleName": "middleName",
        "modified": "2017-07-25T07:21:09.9756339Z",
        "resourceURI": "resourceURI",
        "series": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "stories": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 172
        },
        "suffix": "suffix",
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 172
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_creator_collection_by_series_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCreatorCollectionBySeriesId") getCreatorCollectionBySeriesId


**`GET`** `/v1/public/series/{seriesId}/creators`

> getCreatorCollectionBySeriesId



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| seriesId | `string` |  ``` Required ```  | The series ID. | `"seriesId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comics | `string` |  ``` Optional ```  | Return only creators who worked on in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| events | `string` |  ``` Optional ```  | Return only creators who worked on comics that took place in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| firstName | `string` |  ``` Optional ```  | Filter by creator first name (e.g. brian). | `"firstName"` | 
| firstNameStartsWith | `string` |  ``` Optional ```  | Filter by creator first names that match critera (e.g. B, St L). | `"firstNameStartsWith"` | 
| lastName | `string` |  ``` Optional ```  | Filter by creator last name (e.g. Bendis). | `"lastName"` | 
| lastNameStartsWith | `string` |  ``` Optional ```  | Filter by creator last names that match critera (e.g. Ben). | `"lastNameStartsWith"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| middleName | `string` |  ``` Optional ```  | Filter by creator middle name (e.g. Michael). | `"middleName"` | 
| middleNameStartsWith | `string` |  ``` Optional ```  | Filter by creator middle names that match critera (e.g. Mi). | `"middleNameStartsWith"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only creators which have been modified since the specified date. | `"modifiedSince"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Filter by creator names that match critera (e.g. B, St L). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "lastName", "firstName", "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName", "-suffix", "-modified") | `lastName` | 
| stories | `string` |  ``` Optional ```  | Return only creators who worked on the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| suffix | `string` |  ``` Optional ```  | Filter by suffix or honorific (e.g. Jr., Sr.). | `"suffix"` | 

#### Responses
**200** 

Body (_CreatorDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 172,
  "copyright": "copyright",
  "data": {
    "count": 172,
    "limit": 172,
    "offset": 172,
    "results": [
      {
        "comics": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "events": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "firstName": "firstName",
        "fullName": "fullName",
        "id": 172,
        "lastName": "lastName",
        "middleName": "middleName",
        "modified": "2017-07-25T07:21:09.9756339Z",
        "resourceURI": "resourceURI",
        "series": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "stories": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 172
        },
        "suffix": "suffix",
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 172
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_creator_collection_by_story_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCreatorCollectionByStoryId") getCreatorCollectionByStoryId


**`GET`** `/v1/public/stories/{storyId}/creators`

> getCreatorCollectionByStoryId



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| storyId | `string` |  ``` Required ```  | The story ID. | `"storyId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comics | `string` |  ``` Optional ```  | Return only creators who worked on in the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| events | `string` |  ``` Optional ```  | Return only creators who worked on comics that took place in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| firstName | `string` |  ``` Optional ```  | Filter by creator first name (e.g. brian). | `"firstName"` | 
| firstNameStartsWith | `string` |  ``` Optional ```  | Filter by creator first names that match critera (e.g. B, St L). | `"firstNameStartsWith"` | 
| lastName | `string` |  ``` Optional ```  | Filter by creator last name (e.g. Bendis). | `"lastName"` | 
| lastNameStartsWith | `string` |  ``` Optional ```  | Filter by creator last names that match critera (e.g. Ben). | `"lastNameStartsWith"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| middleName | `string` |  ``` Optional ```  | Filter by creator middle name (e.g. Michael). | `"middleName"` | 
| middleNameStartsWith | `string` |  ``` Optional ```  | Filter by creator middle names that match critera (e.g. Mi). | `"middleNameStartsWith"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only creators which have been modified since the specified date. | `"modifiedSince"` | 
| nameStartsWith | `string` |  ``` Optional ```  | Filter by creator names that match critera (e.g. B, St L). | `"nameStartsWith"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "lastName", "firstName", "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName", "-suffix", "-modified") | `lastName` | 
| series | `string` |  ``` Optional ```  | Return only creators who worked on the specified series (accepts a comma-separated list of ids). | `"series"` | 
| suffix | `string` |  ``` Optional ```  | Filter by suffix or honorific (e.g. Jr., Sr.). | `"suffix"` | 

#### Responses
**200** 

Body (_CreatorDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 172,
  "copyright": "copyright",
  "data": {
    "count": 172,
    "limit": 172,
    "offset": 172,
    "results": [
      {
        "comics": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "events": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "firstName": "firstName",
        "fullName": "fullName",
        "id": 172,
        "lastName": "lastName",
        "middleName": "middleName",
        "modified": "2017-07-25T07:21:09.9756339Z",
        "resourceURI": "resourceURI",
        "series": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "stories": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 172
        },
        "suffix": "suffix",
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 172
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


[Back to API Reference](#api_reference)

## <a name="comics"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "Comics") Comics


### <a name="get_comic_individual"></a>![Endpoint: ](https://apidocs.io/img/method.png "getComicIndividual") getComicIndividual


**`GET`** `/v1/public/comics/{comicId}`

> getComicIndividual



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comicId | `string` |  ``` Required ```  | A single comic. | `"comicId"` | 

#### Responses
**200** 

Body (_Comic_) 
```
{
  "characters": {
    "available": 172,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "role": "role"
      }
    ],
    "returned": 172
  },
  "collectedIssues": [
    {
      "name": "name",
      "resourceURI": "resourceURI"
    }
  ],
  "collections": [
    {
      "name": "name",
      "resourceURI": "resourceURI"
    }
  ],
  "creators": {
    "available": 172,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "role": "role"
      }
    ],
    "returned": 172
  },
  "dates": [
    {
      "date": "2017-07-25T07:21:09.9756339Z",
      "type": "type"
    }
  ],
  "description": "description",
  "diamondCode": "diamondCode",
  "digitalId": 172,
  "ean": "ean",
  "events": {
    "available": 172,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 172
  },
  "format": "format",
  "id": 172,
  "images": [
    {
      "extension": "extension",
      "path": "path"
    }
  ],
  "isbn": "isbn",
  "issn": "issn",
  "issueNumber": 172,
  "modified": "2017-07-25T07:21:09.9756339Z",
  "pageCount": 172,
  "prices": [
    {
      "price": 172.419300890723,
      "type": "type"
    }
  ],
  "resourceURI": "resourceURI",
  "series": {
    "name": "name",
    "resourceURI": "resourceURI"
  },
  "stories": {
    "available": 172,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "type": "type"
      }
    ],
    "returned": 172
  },
  "textObjects": [
    {
      "language": "language",
      "text": "text",
      "type": "type"
    }
  ],
  "thumbnail": {
    "extension": "extension",
    "path": "path"
  },
  "title": "title",
  "upc": "upc",
  "urls": [
    {
      "type": "type",
      "url": "url"
    }
  ],
  "variantDescription": "variantDescription",
  "variants": [
    {
      "name": "name",
      "resourceURI": "resourceURI"
    }
  ]
}
```


**404** 

> Comic not found.


### <a name="get_comics_character_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getComicsCharacterCollection") getComicsCharacterCollection


**`GET`** `/v1/public/characters/{characterId}/comics`

> getComicsCharacterCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characterId | `string` |  ``` Required ```  | The character id. | `"characterId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| collaborators | `string` |  ``` Optional ```  | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). | `"collaborators"` | 
| creators | `string` |  ``` Optional ```  | Return only comics which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| dateDescriptor | `dateDescriptor` |  ``` Optional ```  | Return comics within a predefined date range. | `"lastWeek"` | 
| dateRange | `string` |  ``` Optional ```  | Return comics within a predefined date range.  Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format. | `"dateRange"` | 
| diamondCode | `string` |  ``` Optional ```  | Filter by diamond code. | `"diamondCode"` | 
| digitalId | `string` |  ``` Optional ```  | Filter by digital comic id. | `"digitalId"` | 
| ean | `string` |  ``` Optional ```  | Filter by EAN. | `"ean"` | 
| events | `string` |  ``` Optional ```  | Return only comics which take place in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| format | `string` |  ``` Optional ```  ``` DefaultValue ```  | Filter by the issue format (e.g. comic, digital comic, hardcover). (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") | `comic` | 
| formatType | `formatType` |  ``` Optional ```  | Filter by the issue format type (comic or collection). | `"collection"` | 
| hasDigitalIssue | `string` |  ``` Optional ```  ``` DefaultValue ```  | Include only results which are available digitally. (Acceptable values are: "true") | `true` | 
| isbn | `string` |  ``` Optional ```  | Filter by ISBN. | `"isbn"` | 
| issn | `string` |  ``` Optional ```  | Filter by ISSN. | `"issn"` | 
| issueNumber | `string` |  ``` Optional ```  | Return only issues in series whose issue number matches the input. | `"issueNumber"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only comics which have been modified since the specified date. | `"modifiedSince"` | 
| noVariants | `string` |  ``` Optional ```  ``` DefaultValue ```  | Exclude variant comics from the result set. (Acceptable values are: "true") | `true` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title", "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber", "-modified") | `focDate` | 
| series | `string` |  ``` Optional ```  | Return only comics which are part of the specified series (accepts a comma-separated list of ids). | `"series"` | 
| sharedAppearances | `string` |  ``` Optional ```  | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). | `"sharedAppearances"` | 
| startYear | `string` |  ``` Optional ```  | Return only issues in series whose start year matches the input. | `"startYear"` | 
| stories | `string` |  ``` Optional ```  | Return only comics which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| title | `string` |  ``` Optional ```  | Return only issues in series whose title matches the input. | `"title"` | 
| titleStartsWith | `string` |  ``` Optional ```  | Return only issues in series whose title starts with the input. | `"titleStartsWith"` | 
| upc | `string` |  ``` Optional ```  | Filter by UPC. | `"upc"` | 

#### Responses
**200** 

Body (_ComicDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 172,
  "copyright": "copyright",
  "data": {
    "count": 172,
    "limit": 172,
    "offset": 172,
    "results": [
      {
        "characters": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 172
        },
        "collectedIssues": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ],
        "collections": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ],
        "creators": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 172
        },
        "dates": [
          {
            "date": "2017-07-25T07:21:09.9756339Z",
            "type": "type"
          }
        ],
        "description": "description",
        "diamondCode": "diamondCode",
        "digitalId": 172,
        "ean": "ean",
        "events": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "format": "format",
        "id": 172,
        "images": [
          {
            "extension": "extension",
            "path": "path"
          }
        ],
        "isbn": "isbn",
        "issn": "issn",
        "issueNumber": 172,
        "modified": "2017-07-25T07:21:09.9756339Z",
        "pageCount": 172,
        "prices": [
          {
            "price": 172.419300890723,
            "type": "type"
          }
        ],
        "resourceURI": "resourceURI",
        "series": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "stories": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 172
        },
        "textObjects": [
          {
            "language": "language",
            "text": "text",
            "type": "type"
          }
        ],
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "upc": "upc",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ],
        "variantDescription": "variantDescription",
        "variants": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ]
      }
    ],
    "total": 172
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_comics_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getComicsCollection") getComicsCollection


**`GET`** `/v1/public/comics`

> getComicsCollection



#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only comics which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| collaborators | `string` |  ``` Optional ```  | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). Accepts a comma-separated list of ids. | `"collaborators"` | 
| creators | `string` |  ``` Optional ```  | Return only comics which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| dateDescriptor | `dateDescriptor` |  ``` Optional ```  | Return comics within a predefined date range. | `"lastWeek"` | 
| dateRange | `string` |  ``` Optional ```  | Return comics within a predefined date range.  Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format. | `"dateRange"` | 
| diamondCode | `string` |  ``` Optional ```  | Filter by diamond code. | `"diamondCode"` | 
| digitalId | `string` |  ``` Optional ```  | Filter by digital comic id. | `"digitalId"` | 
| ean | `string` |  ``` Optional ```  | Filter by EAN. | `"ean"` | 
| events | `string` |  ``` Optional ```  | Return only comics which take place in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| format | `string` |  ``` Optional ```  ``` DefaultValue ```  | Filter by the issue format (e.g. comic, digital comic, hardcover). (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") | `comic` | 
| formatType | `formatType` |  ``` Optional ```  | Filter by the issue format type (comic or collection). | `"collection"` | 
| hasDigitalIssue | `string` |  ``` Optional ```  ``` DefaultValue ```  | Include only results which are available digitally. (Acceptable values are: "true") | `true` | 
| isbn | `string` |  ``` Optional ```  | Filter by ISBN. | `"isbn"` | 
| issn | `string` |  ``` Optional ```  | Filter by ISSN. | `"issn"` | 
| issueNumber | `string` |  ``` Optional ```  | Return only issues in series whose issue number matches the input. | `"issueNumber"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only comics which have been modified since the specified date. | `"modifiedSince"` | 
| noVariants | `string` |  ``` Optional ```  ``` DefaultValue ```  | Exclude variants (alternate covers, secondary printings, director's cuts, etc.) from the result set. (Acceptable values are: "true") | `true` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title", "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber", "-modified") | `focDate` | 
| series | `string` |  ``` Optional ```  | Return only comics which are part of the specified series (accepts a comma-separated list of ids). | `"series"` | 
| sharedAppearances | `string` |  ``` Optional ```  | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). Accepts a comma-separated list of ids. | `"sharedAppearances"` | 
| startYear | `string` |  ``` Optional ```  | Return only issues in series whose start year matches the input. | `"startYear"` | 
| stories | `string` |  ``` Optional ```  | Return only comics which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| title | `string` |  ``` Optional ```  | Return only issues in series whose title matches the input. | `"title"` | 
| titleStartsWith | `string` |  ``` Optional ```  | Return only issues in series whose title starts with the input. | `"titleStartsWith"` | 
| upc | `string` |  ``` Optional ```  | Filter by UPC. | `"upc"` | 

#### Responses
**200** 

Body (_ComicDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 172,
  "copyright": "copyright",
  "data": {
    "count": 172,
    "limit": 172,
    "offset": 172,
    "results": [
      {
        "characters": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 172
        },
        "collectedIssues": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ],
        "collections": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ],
        "creators": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 172
        },
        "dates": [
          {
            "date": "2017-07-25T07:21:09.9756339Z",
            "type": "type"
          }
        ],
        "description": "description",
        "diamondCode": "diamondCode",
        "digitalId": 172,
        "ean": "ean",
        "events": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 172
        },
        "format": "format",
        "id": 172,
        "images": [
          {
            "extension": "extension",
            "path": "path"
          }
        ],
        "isbn": "isbn",
        "issn": "issn",
        "issueNumber": 172,
        "modified": "2017-07-25T07:21:09.9756339Z",
        "pageCount": 172,
        "prices": [
          {
            "price": 172.419300890723,
            "type": "type"
          }
        ],
        "resourceURI": "resourceURI",
        "series": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "stories": {
          "available": 172,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 172
        },
        "textObjects": [
          {
            "language": "language",
            "text": "text",
            "type": "type"
          }
        ],
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "upc": "upc",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ],
        "variantDescription": "variantDescription",
        "variants": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ]
      }
    ],
    "total": 172
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_comics_collection_by_creator_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getComicsCollectionByCreatorId") getComicsCollectionByCreatorId


**`GET`** `/v1/public/creators/{creatorId}/comics`

> getComicsCollectionByCreatorId



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| creatorId | `string` |  ``` Required ```  | The creator ID. | `"creatorId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only comics which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| collaborators | `string` |  ``` Optional ```  | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). | `"collaborators"` | 
| dateDescriptor | `dateDescriptor` |  ``` Optional ```  | Return comics within a predefined date range. | `"lastWeek"` | 
| dateRange | `string` |  ``` Optional ```  | Return comics within a predefined date range.  Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format. | `"dateRange"` | 
| diamondCode | `string` |  ``` Optional ```  | Filter by diamond code. | `"diamondCode"` | 
| digitalId | `string` |  ``` Optional ```  | Filter by digital comic id. | `"digitalId"` | 
| ean | `string` |  ``` Optional ```  | Filter by EAN. | `"ean"` | 
| events | `string` |  ``` Optional ```  | Return only comics which take place in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| format | `string` |  ``` Optional ```  ``` DefaultValue ```  | Filter by the issue format (e.g. comic, digital comic, hardcover). (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") | `comic` | 
| formatType | `formatType` |  ``` Optional ```  | Filter by the issue format type (comic or collection). | `"collection"` | 
| hasDigitalIssue | `string` |  ``` Optional ```  ``` DefaultValue ```  | Include only results which are available digitally. (Acceptable values are: "true") | `true` | 
| isbn | `string` |  ``` Optional ```  | Filter by ISBN. | `"isbn"` | 
| issn | `string` |  ``` Optional ```  | Filter by ISSN. | `"issn"` | 
| issueNumber | `string` |  ``` Optional ```  | Return only issues in series whose issue number matches the input. | `"issueNumber"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only comics which have been modified since the specified date. | `"modifiedSince"` | 
| noVariants | `string` |  ``` Optional ```  ``` DefaultValue ```  | Exclude variant comics from the result set. (Acceptable values are: "true") | `true` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title", "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber", "-modified") | `focDate` | 
| series | `string` |  ``` Optional ```  | Return only comics which are part of the specified series (accepts a comma-separated list of ids). | `"series"` | 
| sharedAppearances | `string` |  ``` Optional ```  | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). | `"sharedAppearances"` | 
| startYear | `string` |  ``` Optional ```  | Return only issues in series whose start year matches the input. | `"startYear"` | 
| stories | `string` |  ``` Optional ```  | Return only comics which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| title | `string` |  ``` Optional ```  | Return only issues in series whose title matches the input. | `"title"` | 
| titleStartsWith | `string` |  ``` Optional ```  | Return only issues in series whose title starts with the input. | `"titleStartsWith"` | 
| upc | `string` |  ``` Optional ```  | Filter by UPC. | `"upc"` | 

#### Responses
**200** 

Body (_ComicDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 214,
  "copyright": "copyright",
  "data": {
    "count": 214,
    "limit": 214,
    "offset": 214,
    "results": [
      {
        "characters": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 214
        },
        "collectedIssues": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ],
        "collections": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ],
        "creators": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 214
        },
        "dates": [
          {
            "date": "2017-07-25T07:21:09.9912586Z",
            "type": "type"
          }
        ],
        "description": "description",
        "diamondCode": "diamondCode",
        "digitalId": 214,
        "ean": "ean",
        "events": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 214
        },
        "format": "format",
        "id": 214,
        "images": [
          {
            "extension": "extension",
            "path": "path"
          }
        ],
        "isbn": "isbn",
        "issn": "issn",
        "issueNumber": 214,
        "modified": "2017-07-25T07:21:09.9912586Z",
        "pageCount": 214,
        "prices": [
          {
            "price": 214.14247411729,
            "type": "type"
          }
        ],
        "resourceURI": "resourceURI",
        "series": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "stories": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 214
        },
        "textObjects": [
          {
            "language": "language",
            "text": "text",
            "type": "type"
          }
        ],
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "upc": "upc",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ],
        "variantDescription": "variantDescription",
        "variants": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ]
      }
    ],
    "total": 214
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_comics_collection_by_event_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getComicsCollectionByEventId") getComicsCollectionByEventId


**`GET`** `/v1/public/events/{eventId}/comics`

> getComicsCollectionByEventId



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| eventId | `string` |  ``` Required ```  | The event id. | `"eventId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only comics which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| collaborators | `string` |  ``` Optional ```  | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). | `"collaborators"` | 
| creators | `string` |  ``` Optional ```  | Return only comics which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| dateDescriptor | `dateDescriptor` |  ``` Optional ```  | Return comics within a predefined date range. | `"lastWeek"` | 
| dateRange | `string` |  ``` Optional ```  | Return comics within a predefined date range.  Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format. | `"dateRange"` | 
| diamondCode | `string` |  ``` Optional ```  | Filter by diamond code. | `"diamondCode"` | 
| digitalId | `string` |  ``` Optional ```  | Filter by digital comic id. | `"digitalId"` | 
| ean | `string` |  ``` Optional ```  | Filter by EAN. | `"ean"` | 
| events | `string` |  ``` Optional ```  | Return only comics which take place in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| format | `string` |  ``` Optional ```  ``` DefaultValue ```  | Filter by the issue format (e.g. comic, digital comic, hardcover). (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") | `comic` | 
| formatType | `formatType` |  ``` Optional ```  | Filter by the issue format type (comic or collection). | `"collection"` | 
| hasDigitalIssue | `string` |  ``` Optional ```  ``` DefaultValue ```  | Include only results which are available digitally. (Acceptable values are: "true") | `true` | 
| isbn | `string` |  ``` Optional ```  | Filter by ISBN. | `"isbn"` | 
| issn | `string` |  ``` Optional ```  | Filter by ISSN. | `"issn"` | 
| issueNumber | `string` |  ``` Optional ```  | Return only issues in series whose issue number matches the input. | `"issueNumber"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only comics which have been modified since the specified date. | `"modifiedSince"` | 
| noVariants | `string` |  ``` Optional ```  ``` DefaultValue ```  | Exclude variant comics from the result set. (Acceptable values are: "true") | `true` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title", "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber", "-modified") | `focDate` | 
| series | `string` |  ``` Optional ```  | Return only comics which are part of the specified series (accepts a comma-separated list of ids). | `"series"` | 
| sharedAppearances | `string` |  ``` Optional ```  | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). | `"sharedAppearances"` | 
| startYear | `string` |  ``` Optional ```  | Return only issues in series whose start year matches the input. | `"startYear"` | 
| stories | `string` |  ``` Optional ```  | Return only comics which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| title | `string` |  ``` Optional ```  | Return only issues in series whose title matches the input. | `"title"` | 
| titleStartsWith | `string` |  ``` Optional ```  | Return only issues in series whose title starts with the input. | `"titleStartsWith"` | 
| upc | `string` |  ``` Optional ```  | Filter by UPC. | `"upc"` | 

#### Responses
**200** 

Body (_ComicDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 214,
  "copyright": "copyright",
  "data": {
    "count": 214,
    "limit": 214,
    "offset": 214,
    "results": [
      {
        "characters": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 214
        },
        "collectedIssues": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ],
        "collections": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ],
        "creators": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 214
        },
        "dates": [
          {
            "date": "2017-07-25T07:21:09.9912586Z",
            "type": "type"
          }
        ],
        "description": "description",
        "diamondCode": "diamondCode",
        "digitalId": 214,
        "ean": "ean",
        "events": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 214
        },
        "format": "format",
        "id": 214,
        "images": [
          {
            "extension": "extension",
            "path": "path"
          }
        ],
        "isbn": "isbn",
        "issn": "issn",
        "issueNumber": 214,
        "modified": "2017-07-25T07:21:09.9912586Z",
        "pageCount": 214,
        "prices": [
          {
            "price": 214.14247411729,
            "type": "type"
          }
        ],
        "resourceURI": "resourceURI",
        "series": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "stories": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 214
        },
        "textObjects": [
          {
            "language": "language",
            "text": "text",
            "type": "type"
          }
        ],
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "upc": "upc",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ],
        "variantDescription": "variantDescription",
        "variants": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ]
      }
    ],
    "total": 214
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_comics_collection_by_series_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getComicsCollectionBySeriesId") getComicsCollectionBySeriesId


**`GET`** `/v1/public/series/{seriesId}/comics`

> getComicsCollectionBySeriesId



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| seriesId | `string` |  ``` Required ```  | The series ID. | `"seriesId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only comics which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| collaborators | `string` |  ``` Optional ```  | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). | `"collaborators"` | 
| creators | `string` |  ``` Optional ```  | Return only comics which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| dateDescriptor | `dateDescriptor` |  ``` Optional ```  | Return comics within a predefined date range. | `"lastWeek"` | 
| dateRange | `string` |  ``` Optional ```  | Return comics within a predefined date range.  Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format. | `"dateRange"` | 
| diamondCode | `string` |  ``` Optional ```  | Filter by diamond code. | `"diamondCode"` | 
| digitalId | `string` |  ``` Optional ```  | Filter by digital comic id. | `"digitalId"` | 
| ean | `string` |  ``` Optional ```  | Filter by EAN. | `"ean"` | 
| events | `string` |  ``` Optional ```  | Return only comics which take place in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| format | `string` |  ``` Optional ```  ``` DefaultValue ```  | Filter by the issue format (e.g. comic, digital comic, hardcover). (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") | `comic` | 
| formatType | `formatType` |  ``` Optional ```  | Filter by the issue format type (comic or collection). | `"collection"` | 
| hasDigitalIssue | `string` |  ``` Optional ```  ``` DefaultValue ```  | Include only results which are available digitally. (Acceptable values are: "true") | `true` | 
| isbn | `string` |  ``` Optional ```  | Filter by ISBN. | `"isbn"` | 
| issn | `string` |  ``` Optional ```  | Filter by ISSN. | `"issn"` | 
| issueNumber | `string` |  ``` Optional ```  | Return only issues in series whose issue number matches the input. | `"issueNumber"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only comics which have been modified since the specified date. | `"modifiedSince"` | 
| noVariants | `string` |  ``` Optional ```  ``` DefaultValue ```  | Exclude variant comics from the result set. (Acceptable values are: "true") | `true` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title", "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber", "-modified") | `focDate` | 
| sharedAppearances | `string` |  ``` Optional ```  | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). | `"sharedAppearances"` | 
| startYear | `string` |  ``` Optional ```  | Return only issues in series whose start year matches the input. | `"startYear"` | 
| stories | `string` |  ``` Optional ```  | Return only comics which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| title | `string` |  ``` Optional ```  | Return only issues in series whose title matches the input. | `"title"` | 
| titleStartsWith | `string` |  ``` Optional ```  | Return only issues in series whose title starts with the input. | `"titleStartsWith"` | 
| upc | `string` |  ``` Optional ```  | Filter by UPC. | `"upc"` | 

#### Responses
**200** 

Body (_ComicDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 214,
  "copyright": "copyright",
  "data": {
    "count": 214,
    "limit": 214,
    "offset": 214,
    "results": [
      {
        "characters": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 214
        },
        "collectedIssues": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ],
        "collections": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ],
        "creators": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 214
        },
        "dates": [
          {
            "date": "2017-07-25T07:21:09.9912586Z",
            "type": "type"
          }
        ],
        "description": "description",
        "diamondCode": "diamondCode",
        "digitalId": 214,
        "ean": "ean",
        "events": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 214
        },
        "format": "format",
        "id": 214,
        "images": [
          {
            "extension": "extension",
            "path": "path"
          }
        ],
        "isbn": "isbn",
        "issn": "issn",
        "issueNumber": 214,
        "modified": "2017-07-25T07:21:09.9912586Z",
        "pageCount": 214,
        "prices": [
          {
            "price": 214.14247411729,
            "type": "type"
          }
        ],
        "resourceURI": "resourceURI",
        "series": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "stories": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 214
        },
        "textObjects": [
          {
            "language": "language",
            "text": "text",
            "type": "type"
          }
        ],
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "upc": "upc",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ],
        "variantDescription": "variantDescription",
        "variants": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ]
      }
    ],
    "total": 214
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_comics_collection_by_story_id"></a>![Endpoint: ](https://apidocs.io/img/method.png "getComicsCollectionByStoryId") getComicsCollectionByStoryId


**`GET`** `/v1/public/stories/{storyId}/comics`

> getComicsCollectionByStoryId



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| storyId | `string` |  ``` Required ```  | The story ID. | `"storyId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only comics which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| collaborators | `string` |  ``` Optional ```  | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). | `"collaborators"` | 
| creators | `string` |  ``` Optional ```  | Return only comics which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| dateDescriptor | `dateDescriptor` |  ``` Optional ```  | Return comics within a predefined date range. | `"lastWeek"` | 
| dateRange | `string` |  ``` Optional ```  | Return comics within a predefined date range.  Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format. | `"dateRange"` | 
| diamondCode | `string` |  ``` Optional ```  | Filter by diamond code. | `"diamondCode"` | 
| digitalId | `string` |  ``` Optional ```  | Filter by digital comic id. | `"digitalId"` | 
| ean | `string` |  ``` Optional ```  | Filter by EAN. | `"ean"` | 
| events | `string` |  ``` Optional ```  | Return only comics which take place in the specified events (accepts a comma-separated list of ids). | `"events"` | 
| format | `string` |  ``` Optional ```  ``` DefaultValue ```  | Filter by the issue format (e.g. comic, digital comic, hardcover). (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") | `comic` | 
| formatType | `formatType` |  ``` Optional ```  | Filter by the issue format type (comic or collection). | `"collection"` | 
| hasDigitalIssue | `string` |  ``` Optional ```  ``` DefaultValue ```  | Include only results which are available digitally. (Acceptable values are: "true") | `true` | 
| isbn | `string` |  ``` Optional ```  | Filter by ISBN. | `"isbn"` | 
| issn | `string` |  ``` Optional ```  | Filter by ISSN. | `"issn"` | 
| issueNumber | `string` |  ``` Optional ```  | Return only issues in series whose issue number matches the input. | `"issueNumber"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only comics which have been modified since the specified date. | `"modifiedSince"` | 
| noVariants | `string` |  ``` Optional ```  ``` DefaultValue ```  | Exclude variant comics from the result set. (Acceptable values are: "true") | `true` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title", "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber", "-modified") | `focDate` | 
| series | `string` |  ``` Optional ```  | Return only comics which are part of the specified series (accepts a comma-separated list of ids). | `"series"` | 
| sharedAppearances | `string` |  ``` Optional ```  | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). | `"sharedAppearances"` | 
| startYear | `string` |  ``` Optional ```  | Return only issues in series whose start year matches the input. | `"startYear"` | 
| title | `string` |  ``` Optional ```  | Return only issues in series whose title matches the input. | `"title"` | 
| titleStartsWith | `string` |  ``` Optional ```  | Return only issues in series whose title starts with the input. | `"titleStartsWith"` | 
| upc | `string` |  ``` Optional ```  | Filter by UPC. | `"upc"` | 

#### Responses
**200** 

Body (_ComicDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 214,
  "copyright": "copyright",
  "data": {
    "count": 214,
    "limit": 214,
    "offset": 214,
    "results": [
      {
        "characters": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 214
        },
        "collectedIssues": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ],
        "collections": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ],
        "creators": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 214
        },
        "dates": [
          {
            "date": "2017-07-25T07:21:09.9912586Z",
            "type": "type"
          }
        ],
        "description": "description",
        "diamondCode": "diamondCode",
        "digitalId": 214,
        "ean": "ean",
        "events": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 214
        },
        "format": "format",
        "id": 214,
        "images": [
          {
            "extension": "extension",
            "path": "path"
          }
        ],
        "isbn": "isbn",
        "issn": "issn",
        "issueNumber": 214,
        "modified": "2017-07-25T07:21:09.9912586Z",
        "pageCount": 214,
        "prices": [
          {
            "price": 214.14247411729,
            "type": "type"
          }
        ],
        "resourceURI": "resourceURI",
        "series": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "stories": {
          "available": 214,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 214
        },
        "textObjects": [
          {
            "language": "language",
            "text": "text",
            "type": "type"
          }
        ],
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "upc": "upc",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ],
        "variantDescription": "variantDescription",
        "variants": [
          {
            "name": "name",
            "resourceURI": "resourceURI"
          }
        ]
      }
    ],
    "total": 214
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


[Back to API Reference](#api_reference)

## <a name="series"></a>![Endpoint Group: ](https://apidocs.io/img/class.png "Series") Series


### <a name="get_series_individual"></a>![Endpoint: ](https://apidocs.io/img/method.png "getSeriesIndividual") getSeriesIndividual


**`GET`** `/v1/public/series/{seriesId}`

> getSeriesIndividual



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| seriesId | `string` |  ``` Required ```  | Filter by series title. | `"seriesId"` | 

#### Responses
**200** 

Body (_Series_) 
```
{
  "characters": {
    "available": 214,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "role": "role"
      }
    ],
    "returned": 214
  },
  "comics": {
    "available": 214,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 214
  },
  "creators": {
    "available": 214,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "role": "role"
      }
    ],
    "returned": 214
  },
  "description": "description",
  "endYear": 214,
  "events": {
    "available": 214,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI"
      }
    ],
    "returned": 214
  },
  "id": 214,
  "modified": "2017-07-25T07:21:09.9912586Z",
  "next": {
    "name": "name",
    "resourceURI": "resourceURI"
  },
  "previous": {
    "name": "name",
    "resourceURI": "resourceURI"
  },
  "rating": "rating",
  "resourceURI": "resourceURI",
  "startYear": 214,
  "stories": {
    "available": 214,
    "collectionURI": "collectionURI",
    "items": [
      {
        "name": "name",
        "resourceURI": "resourceURI",
        "type": "type"
      }
    ],
    "returned": 214
  },
  "thumbnail": {
    "extension": "extension",
    "path": "path"
  },
  "title": "title",
  "urls": [
    {
      "type": "type",
      "url": "url"
    }
  ]
}
```


**404** 

> Series not found.


### <a name="get_character_series_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCharacterSeriesCollection") getCharacterSeriesCollection


**`GET`** `/v1/public/characters/{characterId}/series`

> getCharacterSeriesCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characterId | `string` |  ``` Required ```  | The character ID | `"characterId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| comics | `string` |  ``` Optional ```  | Return only series which contain the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| contains | `string` |  ``` Optional ```  ``` DefaultValue ```  | Return only series containing one or more comics with the specified format. (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") | `comic` | 
| creators | `string` |  ``` Optional ```  | Return only series which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| events | `string` |  ``` Optional ```  | Return only series which have comics that take place during the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only series which have been modified since the specified date. | `"modifiedSince"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "title", "modified", "startYear", "-title", "-modified", "-startYear") | `title` | 
| seriesType | `string` |  ``` Optional ```  ``` DefaultValue ```  | Filter the series by publication frequency type. (Acceptable values are: "collection", "one shot", "limited", "ongoing") | `collection` | 
| startYear | `string` |  ``` Optional ```  | Return only series matching the specified start year. | `"startYear"` | 
| stories | `string` |  ``` Optional ```  | Return only series which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| title | `string` |  ``` Optional ```  | Filter by series title. | `"title"` | 
| titleStartsWith | `string` |  ``` Optional ```  | Return series with titles that begin with the specified string (e.g. Sp). | `"titleStartsWith"` | 

#### Responses
**200** 

Body (_SeriesDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 122,
  "copyright": "copyright",
  "data": {
    "count": 122,
    "limit": 122,
    "offset": 122,
    "results": [
      {
        "characters": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 122
        },
        "comics": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 122
        },
        "creators": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 122
        },
        "description": "description",
        "endYear": 122,
        "events": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 122
        },
        "id": 122,
        "modified": "2017-07-25T07:21:10.0068841Z",
        "next": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "previous": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "rating": "rating",
        "resourceURI": "resourceURI",
        "startYear": 122,
        "stories": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 122
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 122
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_creator_series_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getCreatorSeriesCollection") getCreatorSeriesCollection


**`GET`** `/v1/public/creators/{creatorId}/series`

> getCreatorSeriesCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| creatorId | `string` |  ``` Required ```  | The creator ID. | `"creatorId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only series which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| comics | `string` |  ``` Optional ```  | Return only series which contain the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| contains | `string` |  ``` Optional ```  ``` DefaultValue ```  | Return only series containing one or more comics with the specified format. (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") | `comic` | 
| events | `string` |  ``` Optional ```  | Return only series which have comics that take place during the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only series which have been modified since the specified date. | `"modifiedSince"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "title", "modified", "startYear", "-title", "-modified", "-startYear") | `title` | 
| seriesType | `string` |  ``` Optional ```  ``` DefaultValue ```  | Filter the series by publication frequency type. (Acceptable values are: "collection", "one shot", "limited", "ongoing") | `collection` | 
| startYear | `string` |  ``` Optional ```  | Return only series matching the specified start year. | `"startYear"` | 
| stories | `string` |  ``` Optional ```  | Return only series which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| title | `string` |  ``` Optional ```  | Filter by series title. | `"title"` | 
| titleStartsWith | `string` |  ``` Optional ```  | Return series with titles that begin with the specified string (e.g. Sp). | `"titleStartsWith"` | 

#### Responses
**200** 

Body (_SeriesDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 122,
  "copyright": "copyright",
  "data": {
    "count": 122,
    "limit": 122,
    "offset": 122,
    "results": [
      {
        "characters": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 122
        },
        "comics": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 122
        },
        "creators": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 122
        },
        "description": "description",
        "endYear": 122,
        "events": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 122
        },
        "id": 122,
        "modified": "2017-07-25T07:21:10.0068841Z",
        "next": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "previous": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "rating": "rating",
        "resourceURI": "resourceURI",
        "startYear": 122,
        "stories": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 122
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 122
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_event_series_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getEventSeriesCollection") getEventSeriesCollection


**`GET`** `/v1/public/events/{eventId}/series`

> getEventSeriesCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| eventId | `string` |  ``` Required ```  | The event ID. | `"eventId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only series which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| comics | `string` |  ``` Optional ```  | Return only series which contain the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| contains | `string` |  ``` Optional ```  ``` DefaultValue ```  | Return only series containing one or more comics with the specified format. (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") | `comic` | 
| creators | `string` |  ``` Optional ```  | Return only series which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only series which have been modified since the specified date. | `"modifiedSince"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "title", "modified", "startYear", "-title", "-modified", "-startYear") | `title` | 
| seriesType | `string` |  ``` Optional ```  ``` DefaultValue ```  | Filter the series by publication frequency type. (Acceptable values are: "collection", "one shot", "limited", "ongoing") | `collection` | 
| startYear | `string` |  ``` Optional ```  | Return only series matching the specified start year. | `"startYear"` | 
| stories | `string` |  ``` Optional ```  | Return only series which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| title | `string` |  ``` Optional ```  | Filter by series title. | `"title"` | 
| titleStartsWith | `string` |  ``` Optional ```  | Return series with titles that begin with the specified string (e.g. Sp). | `"titleStartsWith"` | 

#### Responses
**200** 

Body (_SeriesDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 122,
  "copyright": "copyright",
  "data": {
    "count": 122,
    "limit": 122,
    "offset": 122,
    "results": [
      {
        "characters": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 122
        },
        "comics": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 122
        },
        "creators": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 122
        },
        "description": "description",
        "endYear": 122,
        "events": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 122
        },
        "id": 122,
        "modified": "2017-07-25T07:21:10.0068841Z",
        "next": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "previous": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "rating": "rating",
        "resourceURI": "resourceURI",
        "startYear": 122,
        "stories": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 122
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 122
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_series_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getSeriesCollection") getSeriesCollection


**`GET`** `/v1/public/series`

> getSeriesCollection



#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only series which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| comics | `string` |  ``` Optional ```  | Return only series which contain the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| contains | `string` |  ``` Optional ```  ``` DefaultValue ```  | Return only series containing one or more comics with the specified format. (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") | `comic` | 
| creators | `string` |  ``` Optional ```  | Return only series which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| events | `string` |  ``` Optional ```  | Return only series which have comics that take place during the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only series which have been modified since the specified date. | `"modifiedSince"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "title", "modified", "startYear", "-title", "-modified", "-startYear") | `title` | 
| seriesType | `string` |  ``` Optional ```  ``` DefaultValue ```  | Filter the series by publication frequency type. (Acceptable values are: "collection", "one shot", "limited", "ongoing") | `collection` | 
| startYear | `string` |  ``` Optional ```  | Return only series matching the specified start year. | `"startYear"` | 
| stories | `string` |  ``` Optional ```  | Return only series which contain the specified stories (accepts a comma-separated list of ids). | `"stories"` | 
| title | `string` |  ``` Optional ```  | Return only series matching the specified title. | `"title"` | 
| titleStartsWith | `string` |  ``` Optional ```  | Return series with titles that begin with the specified string (e.g. Sp). | `"titleStartsWith"` | 

#### Responses
**200** 

Body (_SeriesDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 122,
  "copyright": "copyright",
  "data": {
    "count": 122,
    "limit": 122,
    "offset": 122,
    "results": [
      {
        "characters": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 122
        },
        "comics": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 122
        },
        "creators": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 122
        },
        "description": "description",
        "endYear": 122,
        "events": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 122
        },
        "id": 122,
        "modified": "2017-07-25T07:21:10.0068841Z",
        "next": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "previous": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "rating": "rating",
        "resourceURI": "resourceURI",
        "startYear": 122,
        "stories": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 122
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 122
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


### <a name="get_story_series_collection"></a>![Endpoint: ](https://apidocs.io/img/method.png "getStorySeriesCollection") getStorySeriesCollection


**`GET`** `/v1/public/stories/{storyId}/series`

> getStorySeriesCollection



#### Path Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| storyId | `string` |  ``` Required ```  | The story ID. | `"storyId"` | 

#### Query Parameters
| Parameter | Type | Tags | Description | Example |
|-----------|------| ---- |-------------| ------- |
| characters | `string` |  ``` Optional ```  | Return only series which feature the specified characters (accepts a comma-separated list of ids). | `"characters"` | 
| comics | `string` |  ``` Optional ```  | Return only series which contain the specified comics (accepts a comma-separated list of ids). | `"comics"` | 
| contains | `string` |  ``` Optional ```  ``` DefaultValue ```  | Return only series containing one or more comics with the specified format. (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") | `comic` | 
| creators | `string` |  ``` Optional ```  | Return only series which feature work by the specified creators (accepts a comma-separated list of ids). | `"creators"` | 
| events | `string` |  ``` Optional ```  | Return only series which have comics that take place during the specified events (accepts a comma-separated list of ids). | `"events"` | 
| limit | `string` |  ``` Optional ```  | Limit the result set to the specified number of resources. | `"limit"` | 
| modifiedSince | `string` |  ``` Optional ```  | Return only series which have been modified since the specified date. | `"modifiedSince"` | 
| offset | `string` |  ``` Optional ```  | Skip the specified number of resources in the result set. | `"offset"` | 
| orderBy | `string` |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "title", "modified", "startYear", "-title", "-modified", "-startYear") | `title` | 
| seriesType | `string` |  ``` Optional ```  ``` DefaultValue ```  | Filter the series by publication frequency type. (Acceptable values are: "collection", "one shot", "limited", "ongoing") | `collection` | 
| startYear | `string` |  ``` Optional ```  | Return only series matching the specified start year. | `"startYear"` | 
| title | `string` |  ``` Optional ```  | Filter by series title. | `"title"` | 
| titleStartsWith | `string` |  ``` Optional ```  | Return series with titles that begin with the specified string (e.g. Sp). | `"titleStartsWith"` | 

#### Responses
**200** 

Body (_SeriesDataWrapper_) 
```
{
  "attributionHTML": "attributionHTML",
  "attributionText": "attributionText",
  "code": 122,
  "copyright": "copyright",
  "data": {
    "count": 122,
    "limit": 122,
    "offset": 122,
    "results": [
      {
        "characters": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 122
        },
        "comics": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 122
        },
        "creators": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "role": "role"
            }
          ],
          "returned": 122
        },
        "description": "description",
        "endYear": 122,
        "events": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI"
            }
          ],
          "returned": 122
        },
        "id": 122,
        "modified": "2017-07-25T07:21:10.0068841Z",
        "next": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "previous": {
          "name": "name",
          "resourceURI": "resourceURI"
        },
        "rating": "rating",
        "resourceURI": "resourceURI",
        "startYear": 122,
        "stories": {
          "available": 122,
          "collectionURI": "collectionURI",
          "items": [
            {
              "name": "name",
              "resourceURI": "resourceURI",
              "type": "type"
            }
          ],
          "returned": 122
        },
        "thumbnail": {
          "extension": "extension",
          "path": "path"
        },
        "title": "title",
        "urls": [
          {
            "type": "type",
            "url": "url"
          }
        ]
      }
    ],
    "total": 122
  },
  "etag": "etag",
  "status": "status"
}
```


**409** 

> Limit greater than 100.


[Back to API Reference](#api_reference)

