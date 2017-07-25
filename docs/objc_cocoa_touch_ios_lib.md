# Getting started

The Marvel Comics API is a tool to help developers everywhere create amazing, uncanny and incredible web sites and applications using data from the 70-plus years of the Marvel age of comics.

**Ready to get started?** Great!

Here's the short version of what you need to do:

* **Sign up**: [Get an API key](https://developer.marvel.com/account)
* **Be a good API citizen**: read, understand, and abide by the [terms of use](https://developer.marvel.com/terms) for the Marvel Comics API
* **Link back**: observe the [attribution and linking guidelines](https://developer.marvel.com/documentation/attribution) when displaying data from the API
* **Keep in touch**: [tell us about what you're building](https://developer.marvel.com/community) and talk to other developers on our community page
* **Build cool stuff**

Finally, remember that the Marvel API suite and portal are in beta and this is an evolving project. To the extent that it is possible, we will try to communicate changes to the API before they occur and will try to limit any modifications which cause backwards incompatible changes to applications.

## How to Build


The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```PodFile``` file that comes with the SDK. 
To resolve these dependencies, we use the Cocoapods package manager.
Visit https://guides.cocoapods.org/using/getting-started.html to setup Cocoapods on your system.
Open command prompt and type ```pod --version```. This should display the current version of Cocoapods installed if the installation was successful.

Using command line, navigate to the directory containing the generated files (including ```PodFile```) for the SDK. 
Run the command ```pod install```. This should install all the required dependencies and create the ```pods``` directory in your project directory.

![Installing dependencies using Cocoapods](https://apidocs.io/illustration/objc?step=AddDependencies&workspaceFolder=MarvelComics-ObjC&workspaceName=MarvelComics&projectName=MarvelComics&rootNamespace=MarvelComics)

Open the project workspace using the (MarvelComics.xcworkspace) file. Invoke the build process using `Command(⌘)+B` shortcut key or using the `Build` menu as shown below.

![Building SDK using Xcode](https://apidocs.io/illustration/objc?step=BuildSDK&workspaceFolder=MarvelComics-ObjC&workspaceName=MarvelComics&projectName=MarvelComics&rootNamespace=MarvelComics)


## How to Use

The generated code is a Cocoa Touch Static Library which can be used in any iOS project. The support for these generated libraries go all the way back to iOS 6.

The following section explains how to use the MarvelComics library in a new iOS project.     
### 1. Starting a new project
To start a new project, left-click on the ```Create a new Xcode project```.
![Create Test Project - Step 1](https://apidocs.io/illustration/objc?step=Test1&workspaceFolder=MarvelComics-ObjC&workspaceName=MarvelComics&projectName=MarvelComics&rootNamespace=MarvelComics)

Next, choose **Single View Application** and click ```Next```.
![Create Test Project - Step 2](https://apidocs.io/illustration/objc?step=Test2&workspaceFolder=MarvelComics-ObjC&workspaceName=MarvelComics&projectName=MarvelComics&rootNamespace=MarvelComics)

Provide **Test-Project** as the product name click ```Next```.
![Create Test Project - Step 3](https://apidocs.io/illustration/objc?step=Test3&workspaceFolder=MarvelComics-ObjC&workspaceName=MarvelComics&projectName=MarvelComics&rootNamespace=MarvelComics)

Choose the desired location of your project folder and click ```Create```.
![Create Test Project - Step 4](https://apidocs.io/illustration/objc?step=Test4&workspaceFolder=MarvelComics-ObjC&workspaceName=MarvelComics&projectName=MarvelComics&rootNamespace=MarvelComics)

### 2. Adding the static library dependency
To add this dependency open a terminal and navigate to your project folder. Next, input ```pod init``` and press enter.
![Add dependency - Step 1](https://apidocs.io/illustration/objc?step=Add0&workspaceFolder=MarvelComics-ObjC&workspaceName=MarvelComics&projectName=MarvelComics&rootNamespace=MarvelComics)

Next, open the newly created ```PodFile``` in your favourite text editor. Add the following line : pod 'MarvelComics', :path => 'Vendor/MarvelComics'
![Add dependency - Step 2](https://apidocs.io/illustration/objc?step=Add1&workspaceFolder=MarvelComics-ObjC&workspaceName=MarvelComics&projectName=MarvelComics&rootNamespace=MarvelComics)

Execute `pod install` from terminal to install the dependecy in your project. This would add the dependency to the newly created test project.
![Add dependency - Step 3](https://apidocs.io/illustration/objc?step=Add2&workspaceFolder=MarvelComics-ObjC&workspaceName=MarvelComics&projectName=MarvelComics&rootNamespace=MarvelComics)


## How to Test

Unit tests in this SDK can be run using Xcode. 

First build the SDK as shown in the steps above and naivgate to the project directory and open the MarvelComics.xcworkspace file.

Go to the test explorer in Xcode as shown in the picture below and click on `run tests` from the menu. 
![Run tests](https://apidocs.io/illustration/objc?step=RunTests&workspaceFolder=MarvelComics-ObjC&workspaceName=MarvelComics&projectName=MarvelComics&rootNamespace=MarvelComics)


## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| apikey | Developer's API key |



Configuration variables can be set as following.
```Objc
// Configuration parameters and credentials
Configuration_Apikey = "Configuration_Apikey"; // Developer's API key

```

# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [EventsController](#events_controller)
* [CharactersController](#characters_controller)
* [StoriesController](#stories_controller)
* [CreatorsController](#creators_controller)
* [ComicsController](#comics_controller)
* [SeriesController](#series_controller)

## <a name="events_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EventsController") EventsController

### Get singleton instance
```objc
Events* events = [[Events alloc]init] ;
```

### <a name="get_events_collection_by_story_id_async_with_get_events_collection_by_story_id_input"></a>![Method: ](https://apidocs.io/img/method.png ".EventsController.getEventsCollectionByStoryIdAsyncWithGetEventsCollectionByStoryIdInput") getEventsCollectionByStoryIdAsyncWithGetEventsCollectionByStoryIdInput

> getEventsCollectionByStoryId


```objc
function getEventsCollectionByStoryIdAsyncWithGetEventsCollectionByStoryIdInput:(GetEventsCollectionByStoryIdInput*) input
                queryParameters:(NSDictionary*) queryParameters
                completionBlock:(CompletedGetEventsCollectionByStoryId) onCompleted(input queryParameters : queryParams)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| storyId |  ``` Required ```  | The story ID. |
| characters |  ``` Optional ```  | Return only events which feature the specified characters (accepts a comma-separated list of ids). |
| comics |  ``` Optional ```  | Return only events which take place in the specified comics (accepts a comma-separated list of ids). |
| creators |  ``` Optional ```  | Return only events which feature work by the specified creators (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only events which have been modified since the specified date. |
| name |  ``` Optional ```  | Filter the event list by name. |
| nameStartsWith |  ``` Optional ```  | Return events with names that begin with the specified string (e.g. Sp). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-startDate", "-modified") |
| series |  ``` Optional ```  | Return only events which are part of the specified series (accepts a comma-separated list of ids). |
| queryParameters | ``` Optional ``` | Additional optional query parameters are supported by this method |





#### Example Usage

```objc
    // Parameters for the API call
    GetEventsCollectionByStoryIdInput *input = [[GetEventsCollectionByStoryIdInput alloc]init];
    input.storyId = @"storyId";
    input.characters = @"characters";
    input.comics = @"comics";
    input.creators = @"creators";
    input.limit = @"limit";
    input.modifiedSince = @"modifiedSince";
    input.name = @"name";
    input.nameStartsWith = @"nameStartsWith";
    input.offset = @"offset";
    input.orderBy = @"orderBy";
    input.series = @"series";
    // Dictionary for optional query parameters
    NSMutableDictionary* queryParamsMutable = [[NSMutableDictionary alloc] init];
    NSDictionary *queryParams= [queryParamsMutable copy];

    [self.events getEventsCollectionByStoryIdAsyncWithGetEventsCollectionByStoryIdInput: input queryParameters : queryParams  completionBlock:^(BOOL success, HttpContext* context, EventDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_events_collection_by_series_id_async_with_series_id"></a>![Method: ](https://apidocs.io/img/method.png ".EventsController.getEventsCollectionBySeriesIdAsyncWithSeriesId") getEventsCollectionBySeriesIdAsyncWithSeriesId

> getEventsCollectionBySeriesId


```objc
function getEventsCollectionBySeriesIdAsyncWithSeriesId:(NSString*) seriesId
                characters:(NSString*) characters
                comics:(NSString*) comics
                creators:(NSString*) creators
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                name:(NSString*) name
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                stories:(NSString*) stories
                completionBlock:(CompletedGetEventsCollectionBySeriesId) onCompleted(seriesId characters : characters comics : comics creators : creators limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy stories : stories)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| seriesId |  ``` Required ```  | The series ID. |
| characters |  ``` Optional ```  | Return only events which feature the specified characters (accepts a comma-separated list of ids). |
| comics |  ``` Optional ```  | Return only events which take place in the specified comics (accepts a comma-separated list of ids). |
| creators |  ``` Optional ```  | Return only events which feature work by the specified creators (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only events which have been modified since the specified date. |
| name |  ``` Optional ```  | Filter the event list by name. |
| nameStartsWith |  ``` Optional ```  | Return events with names that begin with the specified string (e.g. Sp). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-startDate", "-modified") |
| stories |  ``` Optional ```  | Return only events which contain the specified stories (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* seriesId = @"seriesId";
    NSString* characters = @"characters";
    NSString* comics = @"comics";
    NSString* creators = @"creators";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* name = @"name";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* stories = @"stories";

    [self.events getEventsCollectionBySeriesIdAsyncWithSeriesId: seriesId characters : characters comics : comics creators : creators limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy stories : stories  completionBlock:^(BOOL success, HttpContext* context, EventDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_creator_events_collection_async_with_creator_id"></a>![Method: ](https://apidocs.io/img/method.png ".EventsController.getCreatorEventsCollectionAsyncWithCreatorId") getCreatorEventsCollectionAsyncWithCreatorId

> getCreatorEventsCollection


```objc
function getCreatorEventsCollectionAsyncWithCreatorId:(NSString*) creatorId
                characters:(NSString*) characters
                comics:(NSString*) comics
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                name:(NSString*) name
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                stories:(NSString*) stories
                completionBlock:(CompletedGetCreatorEventsCollection) onCompleted(creatorId characters : characters comics : comics limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| creatorId |  ``` Required ```  | The creator ID. |
| characters |  ``` Optional ```  | Return only events which feature the specified characters (accepts a comma-separated list of ids). |
| comics |  ``` Optional ```  | Return only events which take place in the specified comics (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only events which have been modified since the specified date. |
| name |  ``` Optional ```  | Filter the event list by name. |
| nameStartsWith |  ``` Optional ```  | Return events with names that begin with the specified string (e.g. Sp). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-startDate", "-modified") |
| series |  ``` Optional ```  | Return only events which are part of the specified series (accepts a comma-separated list of ids). |
| stories |  ``` Optional ```  | Return only events which contain the specified stories (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* creatorId = @"creatorId";
    NSString* characters = @"characters";
    NSString* comics = @"comics";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* name = @"name";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* stories = @"stories";

    [self.events getCreatorEventsCollectionAsyncWithCreatorId: creatorId characters : characters comics : comics limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories  completionBlock:^(BOOL success, HttpContext* context, EventDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_issue_events_collection_async_with_comic_id"></a>![Method: ](https://apidocs.io/img/method.png ".EventsController.getIssueEventsCollectionAsyncWithComicId") getIssueEventsCollectionAsyncWithComicId

> getIssueEventsCollection


```objc
function getIssueEventsCollectionAsyncWithComicId:(NSString*) comicId
                characters:(NSString*) characters
                creators:(NSString*) creators
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                name:(NSString*) name
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                stories:(NSString*) stories
                completionBlock:(CompletedGetIssueEventsCollection) onCompleted(comicId characters : characters creators : creators limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| comicId |  ``` Required ```  | The comic ID. |
| characters |  ``` Optional ```  | Return only events which feature the specified characters (accepts a comma-separated list of ids). |
| creators |  ``` Optional ```  | Return only events which feature work by the specified creators (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only events which have been modified since the specified date. |
| name |  ``` Optional ```  | Filter the event list by name. |
| nameStartsWith |  ``` Optional ```  | Return events with names that begin with the specified string (e.g. Sp). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-startDate", "-modified") |
| series |  ``` Optional ```  | Return only events which are part of the specified series (accepts a comma-separated list of ids). |
| stories |  ``` Optional ```  | Return only events which contain the specified stories (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* comicId = @"comicId";
    NSString* characters = @"characters";
    NSString* creators = @"creators";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* name = @"name";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* stories = @"stories";

    [self.events getIssueEventsCollectionAsyncWithComicId: comicId characters : characters creators : creators limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories  completionBlock:^(BOOL success, HttpContext* context, EventDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_character_events_collection_async_with_character_id"></a>![Method: ](https://apidocs.io/img/method.png ".EventsController.getCharacterEventsCollectionAsyncWithCharacterId") getCharacterEventsCollectionAsyncWithCharacterId

> getCharacterEventsCollection


```objc
function getCharacterEventsCollectionAsyncWithCharacterId:(NSString*) characterId
                comics:(NSString*) comics
                creators:(NSString*) creators
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                name:(NSString*) name
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                stories:(NSString*) stories
                completionBlock:(CompletedGetCharacterEventsCollection) onCompleted(characterId comics : comics creators : creators limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| characterId |  ``` Required ```  | The character ID. |
| comics |  ``` Optional ```  | Return only events which take place in the specified comics (accepts a comma-separated list of ids). |
| creators |  ``` Optional ```  | Return only events which feature work by the specified creators (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only events which have been modified since the specified date. |
| name |  ``` Optional ```  | Filter the event list by name. |
| nameStartsWith |  ``` Optional ```  | Return events with names that begin with the specified string (e.g. Sp). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-startDate", "-modified") |
| series |  ``` Optional ```  | Return only events which are part of the specified series (accepts a comma-separated list of ids). |
| stories |  ``` Optional ```  | Return only events which contain the specified stories (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* characterId = @"characterId";
    NSString* comics = @"comics";
    NSString* creators = @"creators";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* name = @"name";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* stories = @"stories";

    [self.events getCharacterEventsCollectionAsyncWithCharacterId: characterId comics : comics creators : creators limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories  completionBlock:^(BOOL success, HttpContext* context, EventDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_event_individual_async_with_event_id"></a>![Method: ](https://apidocs.io/img/method.png ".EventsController.getEventIndividualAsyncWithEventId") getEventIndividualAsyncWithEventId

> getEventIndividual


```objc
function getEventIndividualAsyncWithEventId:(NSString*) eventId
                completionBlock:(CompletedGetEventIndividual) onCompleted(eventId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| eventId |  ``` Required ```  | A single event. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* eventId = @"eventId";

    [self.events getEventIndividualAsyncWithEventId: eventId  completionBlock:^(BOOL success, HttpContext* context, EventModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Event not found. |



### <a name="get_events_collection_async_with_characters"></a>![Method: ](https://apidocs.io/img/method.png ".EventsController.getEventsCollectionAsyncWithCharacters") getEventsCollectionAsyncWithCharacters

> getEventsCollection


```objc
function getEventsCollectionAsyncWithCharacters:(NSString*) characters
                comics:(NSString*) comics
                creators:(NSString*) creators
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                name:(NSString*) name
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                stories:(NSString*) stories
                completionBlock:(CompletedGetEventsCollection) onCompleted(characters comics : comics creators : creators limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| characters |  ``` Optional ```  | Return only events which feature the specified characters (accepts a comma-separated list of ids). |
| comics |  ``` Optional ```  | Return only events which take place in the specified comics (accepts a comma-separated list of ids). |
| creators |  ``` Optional ```  | Return only events which feature work by the specified creators (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only events which have been modified since the specified date. |
| name |  ``` Optional ```  | Return only events which match the specified name. |
| nameStartsWith |  ``` Optional ```  | Return events with names that begin with the specified string (e.g. Sp). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-startDate", "-modified") |
| series |  ``` Optional ```  | Return only events which are part of the specified series (accepts a comma-separated list of ids). |
| stories |  ``` Optional ```  | Return only events which take place in the specified stories (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* characters = @"characters";
    NSString* comics = @"comics";
    NSString* creators = @"creators";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* name = @"name";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* stories = @"stories";

    [self.events getEventsCollectionAsyncWithCharacters: characters comics : comics creators : creators limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories  completionBlock:^(BOOL success, HttpContext* context, EventDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



[Back to List of Controllers](#list_of_controllers)

## <a name="characters_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CharactersController") CharactersController

### Get singleton instance
```objc
Characters* characters = [[Characters alloc]init] ;
```

### <a name="get_character_collection_by_story_id_async_with_story_id"></a>![Method: ](https://apidocs.io/img/method.png ".CharactersController.getCharacterCollectionByStoryIdAsyncWithStoryId") getCharacterCollectionByStoryIdAsyncWithStoryId

> getCharacterCollectionByStoryId


```objc
function getCharacterCollectionByStoryIdAsyncWithStoryId:(NSString*) storyId
                comics:(NSString*) comics
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                name:(NSString*) name
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                completionBlock:(CompletedGetCharacterCollectionByStoryId) onCompleted(storyId comics : comics events : events limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| storyId |  ``` Required ```  | The story ID. |
| comics |  ``` Optional ```  | Return only characters which appear in the specified comics (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only characters which appear comics that took place in the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only characters which have been modified since the specified date. |
| name |  ``` Optional ```  | Return only characters matching the specified full character name (e.g. Spider-Man). |
| nameStartsWith |  ``` Optional ```  | Return characters with names that begin with the specified string (e.g. Sp). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "modified", "-name", "-modified") |
| series |  ``` Optional ```  | Return only characters which appear the specified series (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* storyId = @"storyId";
    NSString* comics = @"comics";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* name = @"name";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";

    [self.characters getCharacterCollectionByStoryIdAsyncWithStoryId: storyId comics : comics events : events limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series  completionBlock:^(BOOL success, HttpContext* context, CharacterDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_series_character_wrapper_async_with_series_id"></a>![Method: ](https://apidocs.io/img/method.png ".CharactersController.getSeriesCharacterWrapperAsyncWithSeriesId") getSeriesCharacterWrapperAsyncWithSeriesId

> getSeriesCharacterWrapper


```objc
function getSeriesCharacterWrapperAsyncWithSeriesId:(NSString*) seriesId
                comics:(NSString*) comics
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                name:(NSString*) name
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                stories:(NSString*) stories
                completionBlock:(CompletedGetSeriesCharacterWrapper) onCompleted(seriesId comics : comics events : events limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy stories : stories)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| seriesId |  ``` Required ```  | The series id. |
| comics |  ``` Optional ```  | Return only characters which appear in the specified comics (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only characters which appear comics that took place in the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only characters which have been modified since the specified date. |
| name |  ``` Optional ```  | Return only characters matching the specified full character name (e.g. Spider-Man). |
| nameStartsWith |  ``` Optional ```  | Return characters with names that begin with the specified string (e.g. Sp). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "modified", "-name", "-modified") |
| stories |  ``` Optional ```  | Return only characters which appear the specified stories (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* seriesId = @"seriesId";
    NSString* comics = @"comics";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* name = @"name";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* stories = @"stories";

    [self.characters getSeriesCharacterWrapperAsyncWithSeriesId: seriesId comics : comics events : events limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy stories : stories  completionBlock:^(BOOL success, HttpContext* context, CharacterDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_event_character_collection_async_with_event_id"></a>![Method: ](https://apidocs.io/img/method.png ".CharactersController.getEventCharacterCollectionAsyncWithEventId") getEventCharacterCollectionAsyncWithEventId

> getEventCharacterCollection


```objc
function getEventCharacterCollectionAsyncWithEventId:(NSString*) eventId
                comics:(NSString*) comics
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                name:(NSString*) name
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                stories:(NSString*) stories
                completionBlock:(CompletedGetEventCharacterCollection) onCompleted(eventId comics : comics limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| eventId |  ``` Required ```  | The event ID |
| comics |  ``` Optional ```  | Return only characters which appear in the specified comics (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only characters which have been modified since the specified date. |
| name |  ``` Optional ```  | Return only characters matching the specified full character name (e.g. Spider-Man). |
| nameStartsWith |  ``` Optional ```  | Return characters with names that begin with the specified string (e.g. Sp). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "modified", "-name", "-modified") |
| series |  ``` Optional ```  | Return only characters which appear the specified series (accepts a comma-separated list of ids). |
| stories |  ``` Optional ```  | Return only characters which appear the specified stories (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* eventId = @"eventId";
    NSString* comics = @"comics";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* name = @"name";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* stories = @"stories";

    [self.characters getEventCharacterCollectionAsyncWithEventId: eventId comics : comics limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories  completionBlock:^(BOOL success, HttpContext* context, CharacterDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_comic_character_collection_async_with_comic_id"></a>![Method: ](https://apidocs.io/img/method.png ".CharactersController.getComicCharacterCollectionAsyncWithComicId") getComicCharacterCollectionAsyncWithComicId

> getComicCharacterCollection


```objc
function getComicCharacterCollectionAsyncWithComicId:(NSString*) comicId
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                name:(NSString*) name
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                stories:(NSString*) stories
                completionBlock:(CompletedGetComicCharacterCollection) onCompleted(comicId events : events limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| comicId |  ``` Required ```  | The comic id. |
| events |  ``` Optional ```  | Return only characters which appear comics that took place in the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only characters which have been modified since the specified date. |
| name |  ``` Optional ```  | Return only characters matching the specified full character name (e.g. Spider-Man). |
| nameStartsWith |  ``` Optional ```  | Return characters with names that begin with the specified string (e.g. Sp). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "modified", "-name", "-modified") |
| series |  ``` Optional ```  | Return only characters which appear the specified series (accepts a comma-separated list of ids). |
| stories |  ``` Optional ```  | Return only characters which appear the specified stories (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* comicId = @"comicId";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* name = @"name";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* stories = @"stories";

    [self.characters getComicCharacterCollectionAsyncWithComicId: comicId events : events limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories  completionBlock:^(BOOL success, HttpContext* context, CharacterDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_character_individual_async_with_character_id"></a>![Method: ](https://apidocs.io/img/method.png ".CharactersController.getCharacterIndividualAsyncWithCharacterId") getCharacterIndividualAsyncWithCharacterId

> getCharacterIndividual


```objc
function getCharacterIndividualAsyncWithCharacterId:(NSString*) characterId
                completionBlock:(CompletedGetCharacterIndividual) onCompleted(characterId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| characterId |  ``` Required ```  | A single character id. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* characterId = @"characterId";

    [self.characters getCharacterIndividualAsyncWithCharacterId: characterId  completionBlock:^(BOOL success, HttpContext* context, CharacterModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Character not found. |



### <a name="get_character_collection_async_with_comics"></a>![Method: ](https://apidocs.io/img/method.png ".CharactersController.getCharacterCollectionAsyncWithComics") getCharacterCollectionAsyncWithComics

> getCharacterCollection


```objc
function getCharacterCollectionAsyncWithComics:(NSString*) comics
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                name:(NSString*) name
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                stories:(NSString*) stories
                completionBlock:(CompletedGetCharacterCollection) onCompleted(comics events : events limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| comics |  ``` Optional ```  | Return only characters which appear in the specified comics (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only characters which appear in the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only characters which have been modified since the specified date. |
| name |  ``` Optional ```  | Return only characters matching the specified full character name (e.g. Spider-Man). |
| nameStartsWith |  ``` Optional ```  | Return characters with names that begin with the specified string (e.g. Sp). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "name", "modified", "-name", "-modified") |
| series |  ``` Optional ```  | Return only characters which appear the specified series (accepts a comma-separated list of ids). |
| stories |  ``` Optional ```  | Return only characters which appear the specified stories (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* comics = @"comics";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* name = @"name";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* stories = @"stories";

    [self.characters getCharacterCollectionAsyncWithComics: comics events : events limit : limit modifiedSince : modifiedSince name : name nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories  completionBlock:^(BOOL success, HttpContext* context, CharacterDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



[Back to List of Controllers](#list_of_controllers)

## <a name="stories_controller"></a>![Class: ](https://apidocs.io/img/class.png ".StoriesController") StoriesController

### Get singleton instance
```objc
Stories* stories = [[Stories alloc]init] ;
```

### <a name="get_story_collection_async_with_characters"></a>![Method: ](https://apidocs.io/img/method.png ".StoriesController.getStoryCollectionAsyncWithCharacters") getStoryCollectionAsyncWithCharacters

> getStoryCollection


```objc
function getStoryCollectionAsyncWithCharacters:(NSString*) characters
                comics:(NSString*) comics
                creators:(NSString*) creators
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                completionBlock:(CompletedGetStoryCollection) onCompleted(characters comics : comics creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy series : series)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| characters |  ``` Optional ```  | Return only stories which feature the specified characters (accepts a comma-separated list of ids). |
| comics |  ``` Optional ```  | Return only stories contained in the specified (accepts a comma-separated list of ids). |
| creators |  ``` Optional ```  | Return only stories which feature work by the specified creators (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only stories which take place during the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only stories which have been modified since the specified date. |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "id", "modified", "-id", "-modified") |
| series |  ``` Optional ```  | Return only stories contained the specified series (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* characters = @"characters";
    NSString* comics = @"comics";
    NSString* creators = @"creators";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";

    [self.stories getStoryCollectionAsyncWithCharacters: characters comics : comics creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy series : series  completionBlock:^(BOOL success, HttpContext* context, StoryDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_series_story_collection_async_with_series_id"></a>![Method: ](https://apidocs.io/img/method.png ".StoriesController.getSeriesStoryCollectionAsyncWithSeriesId") getSeriesStoryCollectionAsyncWithSeriesId

> getSeriesStoryCollection


```objc
function getSeriesStoryCollectionAsyncWithSeriesId:(NSString*) seriesId
                characters:(NSString*) characters
                comics:(NSString*) comics
                creators:(NSString*) creators
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                completionBlock:(CompletedGetSeriesStoryCollection) onCompleted(seriesId characters : characters comics : comics creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| seriesId |  ``` Required ```  | The series ID. |
| characters |  ``` Optional ```  | Return only stories which feature the specified characters (accepts a comma-separated list of ids). |
| comics |  ``` Optional ```  | Return only stories contained in the specified (accepts a comma-separated list of ids). |
| creators |  ``` Optional ```  | Return only stories which feature work by the specified creators (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only stories which take place during the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only stories which have been modified since the specified date. |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "id", "modified", "-id", "-modified") |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* seriesId = @"seriesId";
    NSString* characters = @"characters";
    NSString* comics = @"comics";
    NSString* creators = @"creators";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";

    [self.stories getSeriesStoryCollectionAsyncWithSeriesId: seriesId characters : characters comics : comics creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy  completionBlock:^(BOOL success, HttpContext* context, StoryDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_event_story_collection_async_with_event_id"></a>![Method: ](https://apidocs.io/img/method.png ".StoriesController.getEventStoryCollectionAsyncWithEventId") getEventStoryCollectionAsyncWithEventId

> getEventStoryCollection


```objc
function getEventStoryCollectionAsyncWithEventId:(NSString*) eventId
                characters:(NSString*) characters
                comics:(NSString*) comics
                creators:(NSString*) creators
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                completionBlock:(CompletedGetEventStoryCollection) onCompleted(eventId characters : characters comics : comics creators : creators limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy series : series)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| eventId |  ``` Required ```  | The ID of the event. |
| characters |  ``` Optional ```  | Return only stories which feature the specified characters (accepts a comma-separated list of ids). |
| comics |  ``` Optional ```  | Return only stories contained in the specified (accepts a comma-separated list of ids). |
| creators |  ``` Optional ```  | Return only stories which feature work by the specified creators (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only stories which have been modified since the specified date. |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "id", "modified", "-id", "-modified") |
| series |  ``` Optional ```  | Return only stories contained the specified series (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* eventId = @"eventId";
    NSString* characters = @"characters";
    NSString* comics = @"comics";
    NSString* creators = @"creators";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";

    [self.stories getEventStoryCollectionAsyncWithEventId: eventId characters : characters comics : comics creators : creators limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy series : series  completionBlock:^(BOOL success, HttpContext* context, StoryDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_creator_story_collection_async_with_creator_id"></a>![Method: ](https://apidocs.io/img/method.png ".StoriesController.getCreatorStoryCollectionAsyncWithCreatorId") getCreatorStoryCollectionAsyncWithCreatorId

> getCreatorStoryCollection


```objc
function getCreatorStoryCollectionAsyncWithCreatorId:(NSString*) creatorId
                characters:(NSString*) characters
                comics:(NSString*) comics
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                completionBlock:(CompletedGetCreatorStoryCollection) onCompleted(creatorId characters : characters comics : comics events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy series : series)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| creatorId |  ``` Required ```  | The ID of the creator. |
| characters |  ``` Optional ```  | Return only stories which feature the specified characters (accepts a comma-separated list of ids). |
| comics |  ``` Optional ```  | Return only stories contained in the specified comics (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only stories which take place during the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only stories which have been modified since the specified date. |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "id", "modified", "-id", "-modified") |
| series |  ``` Optional ```  | Return only stories contained the specified series (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* creatorId = @"creatorId";
    NSString* characters = @"characters";
    NSString* comics = @"comics";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";

    [self.stories getCreatorStoryCollectionAsyncWithCreatorId: creatorId characters : characters comics : comics events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy series : series  completionBlock:^(BOOL success, HttpContext* context, StoryDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_comic_story_collection_by_comic_id_async_with_comic_id"></a>![Method: ](https://apidocs.io/img/method.png ".StoriesController.getComicStoryCollectionByComicIdAsyncWithComicId") getComicStoryCollectionByComicIdAsyncWithComicId

> getComicStoryCollectionByComicId


```objc
function getComicStoryCollectionByComicIdAsyncWithComicId:(NSString*) comicId
                characters:(NSString*) characters
                creators:(NSString*) creators
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                completionBlock:(CompletedGetComicStoryCollectionByComicId) onCompleted(comicId characters : characters creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy series : series)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| comicId |  ``` Required ```  | The comic ID. |
| characters |  ``` Optional ```  | Return only stories which feature the specified characters (accepts a comma-separated list of ids). |
| creators |  ``` Optional ```  | Return only stories which feature work by the specified creators (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only stories which take place during the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only stories which have been modified since the specified date. |
| offset |  ``` Optional ```  | Skip the specified number of resources. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "id", "modified", "-id", "-modified") |
| series |  ``` Optional ```  | Return only stories contained the specified series (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* comicId = @"comicId";
    NSString* characters = @"characters";
    NSString* creators = @"creators";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";

    [self.stories getComicStoryCollectionByComicIdAsyncWithComicId: comicId characters : characters creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy series : series  completionBlock:^(BOOL success, HttpContext* context, StoryDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_character_story_collection_async_with_character_id"></a>![Method: ](https://apidocs.io/img/method.png ".StoriesController.getCharacterStoryCollectionAsyncWithCharacterId") getCharacterStoryCollectionAsyncWithCharacterId

> getCharacterStoryCollection


```objc
function getCharacterStoryCollectionAsyncWithCharacterId:(NSString*) characterId
                comics:(NSString*) comics
                creators:(NSString*) creators
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                completionBlock:(CompletedGetCharacterStoryCollection) onCompleted(characterId comics : comics creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy series : series)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| characterId |  ``` Required ```  | The character ID. |
| comics |  ``` Optional ```  | Return only stories contained in the specified (accepts a comma-separated list of ids). |
| creators |  ``` Optional ```  | Return only stories which feature work by the specified creators (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only stories which take place during the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only stories which have been modified since the specified date. |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "id", "modified", "-id", "-modified") |
| series |  ``` Optional ```  | Return only stories contained the specified series (accepts a comma-separated list of ids). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* characterId = @"characterId";
    NSString* comics = @"comics";
    NSString* creators = @"creators";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";

    [self.stories getCharacterStoryCollectionAsyncWithCharacterId: characterId comics : comics creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy series : series  completionBlock:^(BOOL success, HttpContext* context, StoryDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_story_individual_async_with_story_id"></a>![Method: ](https://apidocs.io/img/method.png ".StoriesController.getStoryIndividualAsyncWithStoryId") getStoryIndividualAsyncWithStoryId

> getStoryIndividual


```objc
function getStoryIndividualAsyncWithStoryId:(NSString*) storyId
                completionBlock:(CompletedGetStoryIndividual) onCompleted(storyId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| storyId |  ``` Required ```  | Filter by story id. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* storyId = @"storyId";

    [self.stories getStoryIndividualAsyncWithStoryId: storyId  completionBlock:^(BOOL success, HttpContext* context, StoryModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Story not found. |



[Back to List of Controllers](#list_of_controllers)

## <a name="creators_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CreatorsController") CreatorsController

### Get singleton instance
```objc
Creators* creators = [[Creators alloc]init] ;
```

### <a name="get_creator_individual_async_with_creator_id"></a>![Method: ](https://apidocs.io/img/method.png ".CreatorsController.getCreatorIndividualAsyncWithCreatorId") getCreatorIndividualAsyncWithCreatorId

> getCreatorIndividual


```objc
function getCreatorIndividualAsyncWithCreatorId:(NSString*) creatorId
                completionBlock:(CompletedGetCreatorIndividual) onCompleted(creatorId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| creatorId |  ``` Required ```  | A single creator id. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* creatorId = @"creatorId";

    [self.creators getCreatorIndividualAsyncWithCreatorId: creatorId  completionBlock:^(BOOL success, HttpContext* context, CreatorModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Creator not found. |



### <a name="get_creator_collection_by_comic_id_async_with_comic_id"></a>![Method: ](https://apidocs.io/img/method.png ".CreatorsController.getCreatorCollectionByComicIdAsyncWithComicId") getCreatorCollectionByComicIdAsyncWithComicId

> getCreatorCollectionByComicId


```objc
function getCreatorCollectionByComicIdAsyncWithComicId:(NSString*) comicId
                comics:(NSString*) comics
                firstName:(NSString*) firstName
                firstNameStartsWith:(NSString*) firstNameStartsWith
                lastName:(NSString*) lastName
                lastNameStartsWith:(NSString*) lastNameStartsWith
                limit:(NSString*) limit
                middleName:(NSString*) middleName
                middleNameStartsWith:(NSString*) middleNameStartsWith
                modifiedSince:(NSString*) modifiedSince
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                stories:(NSString*) stories
                suffix:(NSString*) suffix
                completionBlock:(CompletedGetCreatorCollectionByComicId) onCompleted(comicId comics : comics firstName : firstName firstNameStartsWith : firstNameStartsWith lastName : lastName lastNameStartsWith : lastNameStartsWith limit : limit middleName : middleName middleNameStartsWith : middleNameStartsWith modifiedSince : modifiedSince nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories suffix : suffix)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| comicId |  ``` Required ```  | The comic id. |
| comics |  ``` Optional ```  | Return only creators who worked on in the specified comics (accepts a comma-separated list of ids). |
| firstName |  ``` Optional ```  | Filter by creator first name (e.g. brian). |
| firstNameStartsWith |  ``` Optional ```  | Filter by creator first names that match critera (e.g. B, St L). |
| lastName |  ``` Optional ```  | Filter by creator last name (e.g. Bendis). |
| lastNameStartsWith |  ``` Optional ```  | Filter by creator last names that match critera (e.g. Ben). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| middleName |  ``` Optional ```  | Filter by creator middle name (e.g. Michael). |
| middleNameStartsWith |  ``` Optional ```  | Filter by creator middle names that match critera (e.g. Mi). |
| modifiedSince |  ``` Optional ```  | Return only creators which have been modified since the specified date. |
| nameStartsWith |  ``` Optional ```  | Filter by creator names that match critera (e.g. B, St L). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "lastName", "firstName", "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName", "-suffix", "-modified") |
| series |  ``` Optional ```  | Return only creators who worked on the specified series (accepts a comma-separated list of ids). |
| stories |  ``` Optional ```  | Return only creators who worked on the specified stories (accepts a comma-separated list of ids). |
| suffix |  ``` Optional ```  | Filter by suffix or honorific (e.g. Jr., Sr.). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* comicId = @"comicId";
    NSString* comics = @"comics";
    NSString* firstName = @"firstName";
    NSString* firstNameStartsWith = @"firstNameStartsWith";
    NSString* lastName = @"lastName";
    NSString* lastNameStartsWith = @"lastNameStartsWith";
    NSString* limit = @"limit";
    NSString* middleName = @"middleName";
    NSString* middleNameStartsWith = @"middleNameStartsWith";
    NSString* modifiedSince = @"modifiedSince";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* stories = @"stories";
    NSString* suffix = @"suffix";

    [self.creators getCreatorCollectionByComicIdAsyncWithComicId: comicId comics : comics firstName : firstName firstNameStartsWith : firstNameStartsWith lastName : lastName lastNameStartsWith : lastNameStartsWith limit : limit middleName : middleName middleNameStartsWith : middleNameStartsWith modifiedSince : modifiedSince nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories suffix : suffix  completionBlock:^(BOOL success, HttpContext* context, CreatorDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_creator_collection_async_with_comics"></a>![Method: ](https://apidocs.io/img/method.png ".CreatorsController.getCreatorCollectionAsyncWithComics") getCreatorCollectionAsyncWithComics

> getCreatorCollection


```objc
function getCreatorCollectionAsyncWithComics:(NSString*) comics
                events:(NSString*) events
                firstName:(NSString*) firstName
                firstNameStartsWith:(NSString*) firstNameStartsWith
                lastName:(NSString*) lastName
                lastNameStartsWith:(NSString*) lastNameStartsWith
                limit:(NSString*) limit
                middleName:(NSString*) middleName
                middleNameStartsWith:(NSString*) middleNameStartsWith
                modifiedSince:(NSString*) modifiedSince
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                stories:(NSString*) stories
                suffix:(NSString*) suffix
                completionBlock:(CompletedGetCreatorCollection) onCompleted(comics events : events firstName : firstName firstNameStartsWith : firstNameStartsWith lastName : lastName lastNameStartsWith : lastNameStartsWith limit : limit middleName : middleName middleNameStartsWith : middleNameStartsWith modifiedSince : modifiedSince nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories suffix : suffix)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| comics |  ``` Optional ```  | Return only creators who worked on in the specified comics (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only creators who worked on comics that took place in the specified events (accepts a comma-separated list of ids). |
| firstName |  ``` Optional ```  | Filter by creator first name (e.g. Brian). |
| firstNameStartsWith |  ``` Optional ```  | Filter by creator first names that match critera (e.g. B, St L). |
| lastName |  ``` Optional ```  | Filter by creator last name (e.g. Bendis). |
| lastNameStartsWith |  ``` Optional ```  | Filter by creator last names that match critera (e.g. Ben). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| middleName |  ``` Optional ```  | Filter by creator middle name (e.g. Michael). |
| middleNameStartsWith |  ``` Optional ```  | Filter by creator middle names that match critera (e.g. Mi). |
| modifiedSince |  ``` Optional ```  | Return only creators which have been modified since the specified date. |
| nameStartsWith |  ``` Optional ```  | Filter by creator names that match critera (e.g. B, St L). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "lastName", "firstName", "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName", "-suffix", "-modified") |
| series |  ``` Optional ```  | Return only creators who worked on the specified series (accepts a comma-separated list of ids). |
| stories |  ``` Optional ```  | Return only creators who worked on the specified stories (accepts a comma-separated list of ids). |
| suffix |  ``` Optional ```  | Filter by suffix or honorific (e.g. Jr., Sr.). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* comics = @"comics";
    NSString* events = @"events";
    NSString* firstName = @"firstName";
    NSString* firstNameStartsWith = @"firstNameStartsWith";
    NSString* lastName = @"lastName";
    NSString* lastNameStartsWith = @"lastNameStartsWith";
    NSString* limit = @"limit";
    NSString* middleName = @"middleName";
    NSString* middleNameStartsWith = @"middleNameStartsWith";
    NSString* modifiedSince = @"modifiedSince";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* stories = @"stories";
    NSString* suffix = @"suffix";

    [self.creators getCreatorCollectionAsyncWithComics: comics events : events firstName : firstName firstNameStartsWith : firstNameStartsWith lastName : lastName lastNameStartsWith : lastNameStartsWith limit : limit middleName : middleName middleNameStartsWith : middleNameStartsWith modifiedSince : modifiedSince nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories suffix : suffix  completionBlock:^(BOOL success, HttpContext* context, CreatorDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_creator_collection_by_event_id_async_with_event_id"></a>![Method: ](https://apidocs.io/img/method.png ".CreatorsController.getCreatorCollectionByEventIdAsyncWithEventId") getCreatorCollectionByEventIdAsyncWithEventId

> getCreatorCollectionByEventId


```objc
function getCreatorCollectionByEventIdAsyncWithEventId:(NSString*) eventId
                comics:(NSString*) comics
                firstName:(NSString*) firstName
                firstNameStartsWith:(NSString*) firstNameStartsWith
                lastName:(NSString*) lastName
                lastNameStartsWith:(NSString*) lastNameStartsWith
                limit:(NSString*) limit
                middleName:(NSString*) middleName
                middleNameStartsWith:(NSString*) middleNameStartsWith
                modifiedSince:(NSString*) modifiedSince
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                stories:(NSString*) stories
                suffix:(NSString*) suffix
                completionBlock:(CompletedGetCreatorCollectionByEventId) onCompleted(eventId comics : comics firstName : firstName firstNameStartsWith : firstNameStartsWith lastName : lastName lastNameStartsWith : lastNameStartsWith limit : limit middleName : middleName middleNameStartsWith : middleNameStartsWith modifiedSince : modifiedSince nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories suffix : suffix)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| eventId |  ``` Required ```  | The event ID. |
| comics |  ``` Optional ```  | Return only creators who worked on in the specified comics (accepts a comma-separated list of ids). |
| firstName |  ``` Optional ```  | Filter by creator first name (e.g. brian). |
| firstNameStartsWith |  ``` Optional ```  | Filter by creator first names that match critera (e.g. B, St L). |
| lastName |  ``` Optional ```  | Filter by creator last name (e.g. Bendis). |
| lastNameStartsWith |  ``` Optional ```  | Filter by creator last names that match critera (e.g. Ben). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| middleName |  ``` Optional ```  | Filter by creator middle name (e.g. Michael). |
| middleNameStartsWith |  ``` Optional ```  | Filter by creator middle names that match critera (e.g. Mi). |
| modifiedSince |  ``` Optional ```  | Return only creators which have been modified since the specified date. |
| nameStartsWith |  ``` Optional ```  | Filter by creator names that match critera (e.g. B, St L). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "lastName", "firstName", "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName", "-suffix", "-modified") |
| series |  ``` Optional ```  | Return only creators who worked on the specified series (accepts a comma-separated list of ids). |
| stories |  ``` Optional ```  | Return only creators who worked on the specified stories (accepts a comma-separated list of ids). |
| suffix |  ``` Optional ```  | Filter by suffix or honorific (e.g. Jr., Sr.). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* eventId = @"eventId";
    NSString* comics = @"comics";
    NSString* firstName = @"firstName";
    NSString* firstNameStartsWith = @"firstNameStartsWith";
    NSString* lastName = @"lastName";
    NSString* lastNameStartsWith = @"lastNameStartsWith";
    NSString* limit = @"limit";
    NSString* middleName = @"middleName";
    NSString* middleNameStartsWith = @"middleNameStartsWith";
    NSString* modifiedSince = @"modifiedSince";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* stories = @"stories";
    NSString* suffix = @"suffix";

    [self.creators getCreatorCollectionByEventIdAsyncWithEventId: eventId comics : comics firstName : firstName firstNameStartsWith : firstNameStartsWith lastName : lastName lastNameStartsWith : lastNameStartsWith limit : limit middleName : middleName middleNameStartsWith : middleNameStartsWith modifiedSince : modifiedSince nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series stories : stories suffix : suffix  completionBlock:^(BOOL success, HttpContext* context, CreatorDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_creator_collection_by_series_id_async_with_series_id"></a>![Method: ](https://apidocs.io/img/method.png ".CreatorsController.getCreatorCollectionBySeriesIdAsyncWithSeriesId") getCreatorCollectionBySeriesIdAsyncWithSeriesId

> getCreatorCollectionBySeriesId


```objc
function getCreatorCollectionBySeriesIdAsyncWithSeriesId:(NSString*) seriesId
                comics:(NSString*) comics
                events:(NSString*) events
                firstName:(NSString*) firstName
                firstNameStartsWith:(NSString*) firstNameStartsWith
                lastName:(NSString*) lastName
                lastNameStartsWith:(NSString*) lastNameStartsWith
                limit:(NSString*) limit
                middleName:(NSString*) middleName
                middleNameStartsWith:(NSString*) middleNameStartsWith
                modifiedSince:(NSString*) modifiedSince
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                stories:(NSString*) stories
                suffix:(NSString*) suffix
                completionBlock:(CompletedGetCreatorCollectionBySeriesId) onCompleted(seriesId comics : comics events : events firstName : firstName firstNameStartsWith : firstNameStartsWith lastName : lastName lastNameStartsWith : lastNameStartsWith limit : limit middleName : middleName middleNameStartsWith : middleNameStartsWith modifiedSince : modifiedSince nameStartsWith : nameStartsWith offset : offset orderBy : orderBy stories : stories suffix : suffix)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| seriesId |  ``` Required ```  | The series ID. |
| comics |  ``` Optional ```  | Return only creators who worked on in the specified comics (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only creators who worked on comics that took place in the specified events (accepts a comma-separated list of ids). |
| firstName |  ``` Optional ```  | Filter by creator first name (e.g. brian). |
| firstNameStartsWith |  ``` Optional ```  | Filter by creator first names that match critera (e.g. B, St L). |
| lastName |  ``` Optional ```  | Filter by creator last name (e.g. Bendis). |
| lastNameStartsWith |  ``` Optional ```  | Filter by creator last names that match critera (e.g. Ben). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| middleName |  ``` Optional ```  | Filter by creator middle name (e.g. Michael). |
| middleNameStartsWith |  ``` Optional ```  | Filter by creator middle names that match critera (e.g. Mi). |
| modifiedSince |  ``` Optional ```  | Return only creators which have been modified since the specified date. |
| nameStartsWith |  ``` Optional ```  | Filter by creator names that match critera (e.g. B, St L). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "lastName", "firstName", "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName", "-suffix", "-modified") |
| stories |  ``` Optional ```  | Return only creators who worked on the specified stories (accepts a comma-separated list of ids). |
| suffix |  ``` Optional ```  | Filter by suffix or honorific (e.g. Jr., Sr.). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* seriesId = @"seriesId";
    NSString* comics = @"comics";
    NSString* events = @"events";
    NSString* firstName = @"firstName";
    NSString* firstNameStartsWith = @"firstNameStartsWith";
    NSString* lastName = @"lastName";
    NSString* lastNameStartsWith = @"lastNameStartsWith";
    NSString* limit = @"limit";
    NSString* middleName = @"middleName";
    NSString* middleNameStartsWith = @"middleNameStartsWith";
    NSString* modifiedSince = @"modifiedSince";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* stories = @"stories";
    NSString* suffix = @"suffix";

    [self.creators getCreatorCollectionBySeriesIdAsyncWithSeriesId: seriesId comics : comics events : events firstName : firstName firstNameStartsWith : firstNameStartsWith lastName : lastName lastNameStartsWith : lastNameStartsWith limit : limit middleName : middleName middleNameStartsWith : middleNameStartsWith modifiedSince : modifiedSince nameStartsWith : nameStartsWith offset : offset orderBy : orderBy stories : stories suffix : suffix  completionBlock:^(BOOL success, HttpContext* context, CreatorDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_creator_collection_by_story_id_async_with_story_id"></a>![Method: ](https://apidocs.io/img/method.png ".CreatorsController.getCreatorCollectionByStoryIdAsyncWithStoryId") getCreatorCollectionByStoryIdAsyncWithStoryId

> getCreatorCollectionByStoryId


```objc
function getCreatorCollectionByStoryIdAsyncWithStoryId:(NSString*) storyId
                comics:(NSString*) comics
                events:(NSString*) events
                firstName:(NSString*) firstName
                firstNameStartsWith:(NSString*) firstNameStartsWith
                lastName:(NSString*) lastName
                lastNameStartsWith:(NSString*) lastNameStartsWith
                limit:(NSString*) limit
                middleName:(NSString*) middleName
                middleNameStartsWith:(NSString*) middleNameStartsWith
                modifiedSince:(NSString*) modifiedSince
                nameStartsWith:(NSString*) nameStartsWith
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                suffix:(NSString*) suffix
                completionBlock:(CompletedGetCreatorCollectionByStoryId) onCompleted(storyId comics : comics events : events firstName : firstName firstNameStartsWith : firstNameStartsWith lastName : lastName lastNameStartsWith : lastNameStartsWith limit : limit middleName : middleName middleNameStartsWith : middleNameStartsWith modifiedSince : modifiedSince nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series suffix : suffix)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| storyId |  ``` Required ```  | The story ID. |
| comics |  ``` Optional ```  | Return only creators who worked on in the specified comics (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only creators who worked on comics that took place in the specified events (accepts a comma-separated list of ids). |
| firstName |  ``` Optional ```  | Filter by creator first name (e.g. brian). |
| firstNameStartsWith |  ``` Optional ```  | Filter by creator first names that match critera (e.g. B, St L). |
| lastName |  ``` Optional ```  | Filter by creator last name (e.g. Bendis). |
| lastNameStartsWith |  ``` Optional ```  | Filter by creator last names that match critera (e.g. Ben). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| middleName |  ``` Optional ```  | Filter by creator middle name (e.g. Michael). |
| middleNameStartsWith |  ``` Optional ```  | Filter by creator middle names that match critera (e.g. Mi). |
| modifiedSince |  ``` Optional ```  | Return only creators which have been modified since the specified date. |
| nameStartsWith |  ``` Optional ```  | Filter by creator names that match critera (e.g. B, St L). |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "lastName", "firstName", "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName", "-suffix", "-modified") |
| series |  ``` Optional ```  | Return only creators who worked on the specified series (accepts a comma-separated list of ids). |
| suffix |  ``` Optional ```  | Filter by suffix or honorific (e.g. Jr., Sr.). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* storyId = @"storyId";
    NSString* comics = @"comics";
    NSString* events = @"events";
    NSString* firstName = @"firstName";
    NSString* firstNameStartsWith = @"firstNameStartsWith";
    NSString* lastName = @"lastName";
    NSString* lastNameStartsWith = @"lastNameStartsWith";
    NSString* limit = @"limit";
    NSString* middleName = @"middleName";
    NSString* middleNameStartsWith = @"middleNameStartsWith";
    NSString* modifiedSince = @"modifiedSince";
    NSString* nameStartsWith = @"nameStartsWith";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* suffix = @"suffix";

    [self.creators getCreatorCollectionByStoryIdAsyncWithStoryId: storyId comics : comics events : events firstName : firstName firstNameStartsWith : firstNameStartsWith lastName : lastName lastNameStartsWith : lastNameStartsWith limit : limit middleName : middleName middleNameStartsWith : middleNameStartsWith modifiedSince : modifiedSince nameStartsWith : nameStartsWith offset : offset orderBy : orderBy series : series suffix : suffix  completionBlock:^(BOOL success, HttpContext* context, CreatorDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



[Back to List of Controllers](#list_of_controllers)

## <a name="comics_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ComicsController") ComicsController

### Get singleton instance
```objc
Comics* comics = [[Comics alloc]init] ;
```

### <a name="get_comic_individual_async_with_comic_id"></a>![Method: ](https://apidocs.io/img/method.png ".ComicsController.getComicIndividualAsyncWithComicId") getComicIndividualAsyncWithComicId

> getComicIndividual


```objc
function getComicIndividualAsyncWithComicId:(NSString*) comicId
                completionBlock:(CompletedGetComicIndividual) onCompleted(comicId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| comicId |  ``` Required ```  | A single comic. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* comicId = @"comicId";

    [self.comics getComicIndividualAsyncWithComicId: comicId  completionBlock:^(BOOL success, HttpContext* context, ComicModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Comic not found. |



### <a name="get_comics_character_collection_async_with_character_id"></a>![Method: ](https://apidocs.io/img/method.png ".ComicsController.getComicsCharacterCollectionAsyncWithCharacterId") getComicsCharacterCollectionAsyncWithCharacterId

> getComicsCharacterCollection


```objc
function getComicsCharacterCollectionAsyncWithCharacterId:(NSString*) characterId
                collaborators:(NSString*) collaborators
                creators:(NSString*) creators
                dateDescriptor:(enum DateDescriptorEnum) dateDescriptor
                dateRange:(NSString*) dateRange
                diamondCode:(NSString*) diamondCode
                digitalId:(NSString*) digitalId
                ean:(NSString*) ean
                events:(NSString*) events
                format:(NSString*) format
                formatType:(enum FormatTypeEnum) formatType
                hasDigitalIssue:(NSString*) hasDigitalIssue
                isbn:(NSString*) isbn
                issn:(NSString*) issn
                issueNumber:(NSString*) issueNumber
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                noVariants:(NSString*) noVariants
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                sharedAppearances:(NSString*) sharedAppearances
                startYear:(NSString*) startYear
                stories:(NSString*) stories
                title:(NSString*) title
                titleStartsWith:(NSString*) titleStartsWith
                upc:(NSString*) upc
                completionBlock:(CompletedGetComicsCharacterCollection) onCompleted(characterId collaborators : collaborators creators : creators dateDescriptor : dateDescriptor dateRange : dateRange diamondCode : diamondCode digitalId : digitalId ean : ean events : events format : format formatType : formatType hasDigitalIssue : hasDigitalIssue isbn : isbn issn : issn issueNumber : issueNumber limit : limit modifiedSince : modifiedSince noVariants : noVariants offset : offset orderBy : orderBy series : series sharedAppearances : sharedAppearances startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith upc : upc)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| characterId |  ``` Required ```  | The character id. |
| collaborators |  ``` Optional ```  | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). |
| creators |  ``` Optional ```  | Return only comics which feature work by the specified creators (accepts a comma-separated list of ids). |
| dateDescriptor |  ``` Optional ```  | Return comics within a predefined date range. |
| dateRange |  ``` Optional ```  | Return comics within a predefined date range.  Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format. |
| diamondCode |  ``` Optional ```  | Filter by diamond code. |
| digitalId |  ``` Optional ```  | Filter by digital comic id. |
| ean |  ``` Optional ```  | Filter by EAN. |
| events |  ``` Optional ```  | Return only comics which take place in the specified events (accepts a comma-separated list of ids). |
| format |  ``` Optional ```  ``` DefaultValue ```  | Filter by the issue format (e.g. comic, digital comic, hardcover). (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") |
| formatType |  ``` Optional ```  | Filter by the issue format type (comic or collection). |
| hasDigitalIssue |  ``` Optional ```  ``` DefaultValue ```  | Include only results which are available digitally. (Acceptable values are: "true") |
| isbn |  ``` Optional ```  | Filter by ISBN. |
| issn |  ``` Optional ```  | Filter by ISSN. |
| issueNumber |  ``` Optional ```  | Return only issues in series whose issue number matches the input. |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only comics which have been modified since the specified date. |
| noVariants |  ``` Optional ```  ``` DefaultValue ```  | Exclude variant comics from the result set. (Acceptable values are: "true") |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title", "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber", "-modified") |
| series |  ``` Optional ```  | Return only comics which are part of the specified series (accepts a comma-separated list of ids). |
| sharedAppearances |  ``` Optional ```  | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). |
| startYear |  ``` Optional ```  | Return only issues in series whose start year matches the input. |
| stories |  ``` Optional ```  | Return only comics which contain the specified stories (accepts a comma-separated list of ids). |
| title |  ``` Optional ```  | Return only issues in series whose title matches the input. |
| titleStartsWith |  ``` Optional ```  | Return only issues in series whose title starts with the input. |
| upc |  ``` Optional ```  | Filter by UPC. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* characterId = @"characterId";
    NSString* collaborators = @"collaborators";
    NSString* creators = @"creators";
    DateDescriptorEnum dateDescriptor = LASTWEEK;
    NSString* dateRange = @"dateRange";
    NSString* diamondCode = @"diamondCode";
    NSString* digitalId = @"digitalId";
    NSString* ean = @"ean";
    NSString* events = @"events";
    NSString* format = @"format";
    FormatTypeEnum formatType = COLLECTION;
    NSString* hasDigitalIssue = @"hasDigitalIssue";
    NSString* isbn = @"isbn";
    NSString* issn = @"issn";
    NSString* issueNumber = @"issueNumber";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* noVariants = @"noVariants";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* sharedAppearances = @"sharedAppearances";
    NSString* startYear = @"startYear";
    NSString* stories = @"stories";
    NSString* title = @"title";
    NSString* titleStartsWith = @"titleStartsWith";
    NSString* upc = @"upc";

    [self.comics getComicsCharacterCollectionAsyncWithCharacterId: characterId collaborators : collaborators creators : creators dateDescriptor : dateDescriptor dateRange : dateRange diamondCode : diamondCode digitalId : digitalId ean : ean events : events format : format formatType : formatType hasDigitalIssue : hasDigitalIssue isbn : isbn issn : issn issueNumber : issueNumber limit : limit modifiedSince : modifiedSince noVariants : noVariants offset : offset orderBy : orderBy series : series sharedAppearances : sharedAppearances startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith upc : upc  completionBlock:^(BOOL success, HttpContext* context, ComicDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_comics_collection_async_with_characters"></a>![Method: ](https://apidocs.io/img/method.png ".ComicsController.getComicsCollectionAsyncWithCharacters") getComicsCollectionAsyncWithCharacters

> getComicsCollection


```objc
function getComicsCollectionAsyncWithCharacters:(NSString*) characters
                collaborators:(NSString*) collaborators
                creators:(NSString*) creators
                dateDescriptor:(enum DateDescriptorEnum) dateDescriptor
                dateRange:(NSString*) dateRange
                diamondCode:(NSString*) diamondCode
                digitalId:(NSString*) digitalId
                ean:(NSString*) ean
                events:(NSString*) events
                format:(NSString*) format
                formatType:(enum FormatTypeEnum) formatType
                hasDigitalIssue:(NSString*) hasDigitalIssue
                isbn:(NSString*) isbn
                issn:(NSString*) issn
                issueNumber:(NSString*) issueNumber
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                noVariants:(NSString*) noVariants
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                sharedAppearances:(NSString*) sharedAppearances
                startYear:(NSString*) startYear
                stories:(NSString*) stories
                title:(NSString*) title
                titleStartsWith:(NSString*) titleStartsWith
                upc:(NSString*) upc
                completionBlock:(CompletedGetComicsCollection) onCompleted(characters collaborators : collaborators creators : creators dateDescriptor : dateDescriptor dateRange : dateRange diamondCode : diamondCode digitalId : digitalId ean : ean events : events format : format formatType : formatType hasDigitalIssue : hasDigitalIssue isbn : isbn issn : issn issueNumber : issueNumber limit : limit modifiedSince : modifiedSince noVariants : noVariants offset : offset orderBy : orderBy series : series sharedAppearances : sharedAppearances startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith upc : upc)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| characters |  ``` Optional ```  | Return only comics which feature the specified characters (accepts a comma-separated list of ids). |
| collaborators |  ``` Optional ```  | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). Accepts a comma-separated list of ids. |
| creators |  ``` Optional ```  | Return only comics which feature work by the specified creators (accepts a comma-separated list of ids). |
| dateDescriptor |  ``` Optional ```  | Return comics within a predefined date range. |
| dateRange |  ``` Optional ```  | Return comics within a predefined date range.  Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format. |
| diamondCode |  ``` Optional ```  | Filter by diamond code. |
| digitalId |  ``` Optional ```  | Filter by digital comic id. |
| ean |  ``` Optional ```  | Filter by EAN. |
| events |  ``` Optional ```  | Return only comics which take place in the specified events (accepts a comma-separated list of ids). |
| format |  ``` Optional ```  ``` DefaultValue ```  | Filter by the issue format (e.g. comic, digital comic, hardcover). (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") |
| formatType |  ``` Optional ```  | Filter by the issue format type (comic or collection). |
| hasDigitalIssue |  ``` Optional ```  ``` DefaultValue ```  | Include only results which are available digitally. (Acceptable values are: "true") |
| isbn |  ``` Optional ```  | Filter by ISBN. |
| issn |  ``` Optional ```  | Filter by ISSN. |
| issueNumber |  ``` Optional ```  | Return only issues in series whose issue number matches the input. |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only comics which have been modified since the specified date. |
| noVariants |  ``` Optional ```  ``` DefaultValue ```  | Exclude variants (alternate covers, secondary printings, director's cuts, etc.) from the result set. (Acceptable values are: "true") |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title", "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber", "-modified") |
| series |  ``` Optional ```  | Return only comics which are part of the specified series (accepts a comma-separated list of ids). |
| sharedAppearances |  ``` Optional ```  | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). Accepts a comma-separated list of ids. |
| startYear |  ``` Optional ```  | Return only issues in series whose start year matches the input. |
| stories |  ``` Optional ```  | Return only comics which contain the specified stories (accepts a comma-separated list of ids). |
| title |  ``` Optional ```  | Return only issues in series whose title matches the input. |
| titleStartsWith |  ``` Optional ```  | Return only issues in series whose title starts with the input. |
| upc |  ``` Optional ```  | Filter by UPC. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* characters = @"characters";
    NSString* collaborators = @"collaborators";
    NSString* creators = @"creators";
    DateDescriptorEnum dateDescriptor = LASTWEEK;
    NSString* dateRange = @"dateRange";
    NSString* diamondCode = @"diamondCode";
    NSString* digitalId = @"digitalId";
    NSString* ean = @"ean";
    NSString* events = @"events";
    NSString* format = @"format";
    FormatTypeEnum formatType = COLLECTION;
    NSString* hasDigitalIssue = @"hasDigitalIssue";
    NSString* isbn = @"isbn";
    NSString* issn = @"issn";
    NSString* issueNumber = @"issueNumber";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* noVariants = @"noVariants";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* sharedAppearances = @"sharedAppearances";
    NSString* startYear = @"startYear";
    NSString* stories = @"stories";
    NSString* title = @"title";
    NSString* titleStartsWith = @"titleStartsWith";
    NSString* upc = @"upc";

    [self.comics getComicsCollectionAsyncWithCharacters: characters collaborators : collaborators creators : creators dateDescriptor : dateDescriptor dateRange : dateRange diamondCode : diamondCode digitalId : digitalId ean : ean events : events format : format formatType : formatType hasDigitalIssue : hasDigitalIssue isbn : isbn issn : issn issueNumber : issueNumber limit : limit modifiedSince : modifiedSince noVariants : noVariants offset : offset orderBy : orderBy series : series sharedAppearances : sharedAppearances startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith upc : upc  completionBlock:^(BOOL success, HttpContext* context, ComicDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_comics_collection_by_creator_id_async_with_creator_id"></a>![Method: ](https://apidocs.io/img/method.png ".ComicsController.getComicsCollectionByCreatorIdAsyncWithCreatorId") getComicsCollectionByCreatorIdAsyncWithCreatorId

> getComicsCollectionByCreatorId


```objc
function getComicsCollectionByCreatorIdAsyncWithCreatorId:(NSString*) creatorId
                characters:(NSString*) characters
                collaborators:(NSString*) collaborators
                dateDescriptor:(enum DateDescriptorEnum) dateDescriptor
                dateRange:(NSString*) dateRange
                diamondCode:(NSString*) diamondCode
                digitalId:(NSString*) digitalId
                ean:(NSString*) ean
                events:(NSString*) events
                format:(NSString*) format
                formatType:(enum FormatTypeEnum) formatType
                hasDigitalIssue:(NSString*) hasDigitalIssue
                isbn:(NSString*) isbn
                issn:(NSString*) issn
                issueNumber:(NSString*) issueNumber
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                noVariants:(NSString*) noVariants
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                sharedAppearances:(NSString*) sharedAppearances
                startYear:(NSString*) startYear
                stories:(NSString*) stories
                title:(NSString*) title
                titleStartsWith:(NSString*) titleStartsWith
                upc:(NSString*) upc
                completionBlock:(CompletedGetComicsCollectionByCreatorId) onCompleted(creatorId characters : characters collaborators : collaborators dateDescriptor : dateDescriptor dateRange : dateRange diamondCode : diamondCode digitalId : digitalId ean : ean events : events format : format formatType : formatType hasDigitalIssue : hasDigitalIssue isbn : isbn issn : issn issueNumber : issueNumber limit : limit modifiedSince : modifiedSince noVariants : noVariants offset : offset orderBy : orderBy series : series sharedAppearances : sharedAppearances startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith upc : upc)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| creatorId |  ``` Required ```  | The creator ID. |
| characters |  ``` Optional ```  | Return only comics which feature the specified characters (accepts a comma-separated list of ids). |
| collaborators |  ``` Optional ```  | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). |
| dateDescriptor |  ``` Optional ```  | Return comics within a predefined date range. |
| dateRange |  ``` Optional ```  | Return comics within a predefined date range.  Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format. |
| diamondCode |  ``` Optional ```  | Filter by diamond code. |
| digitalId |  ``` Optional ```  | Filter by digital comic id. |
| ean |  ``` Optional ```  | Filter by EAN. |
| events |  ``` Optional ```  | Return only comics which take place in the specified events (accepts a comma-separated list of ids). |
| format |  ``` Optional ```  ``` DefaultValue ```  | Filter by the issue format (e.g. comic, digital comic, hardcover). (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") |
| formatType |  ``` Optional ```  | Filter by the issue format type (comic or collection). |
| hasDigitalIssue |  ``` Optional ```  ``` DefaultValue ```  | Include only results which are available digitally. (Acceptable values are: "true") |
| isbn |  ``` Optional ```  | Filter by ISBN. |
| issn |  ``` Optional ```  | Filter by ISSN. |
| issueNumber |  ``` Optional ```  | Return only issues in series whose issue number matches the input. |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only comics which have been modified since the specified date. |
| noVariants |  ``` Optional ```  ``` DefaultValue ```  | Exclude variant comics from the result set. (Acceptable values are: "true") |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title", "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber", "-modified") |
| series |  ``` Optional ```  | Return only comics which are part of the specified series (accepts a comma-separated list of ids). |
| sharedAppearances |  ``` Optional ```  | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). |
| startYear |  ``` Optional ```  | Return only issues in series whose start year matches the input. |
| stories |  ``` Optional ```  | Return only comics which contain the specified stories (accepts a comma-separated list of ids). |
| title |  ``` Optional ```  | Return only issues in series whose title matches the input. |
| titleStartsWith |  ``` Optional ```  | Return only issues in series whose title starts with the input. |
| upc |  ``` Optional ```  | Filter by UPC. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* creatorId = @"creatorId";
    NSString* characters = @"characters";
    NSString* collaborators = @"collaborators";
    DateDescriptorEnum dateDescriptor = LASTWEEK;
    NSString* dateRange = @"dateRange";
    NSString* diamondCode = @"diamondCode";
    NSString* digitalId = @"digitalId";
    NSString* ean = @"ean";
    NSString* events = @"events";
    NSString* format = @"format";
    FormatTypeEnum formatType = COLLECTION;
    NSString* hasDigitalIssue = @"hasDigitalIssue";
    NSString* isbn = @"isbn";
    NSString* issn = @"issn";
    NSString* issueNumber = @"issueNumber";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* noVariants = @"noVariants";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* sharedAppearances = @"sharedAppearances";
    NSString* startYear = @"startYear";
    NSString* stories = @"stories";
    NSString* title = @"title";
    NSString* titleStartsWith = @"titleStartsWith";
    NSString* upc = @"upc";

    [self.comics getComicsCollectionByCreatorIdAsyncWithCreatorId: creatorId characters : characters collaborators : collaborators dateDescriptor : dateDescriptor dateRange : dateRange diamondCode : diamondCode digitalId : digitalId ean : ean events : events format : format formatType : formatType hasDigitalIssue : hasDigitalIssue isbn : isbn issn : issn issueNumber : issueNumber limit : limit modifiedSince : modifiedSince noVariants : noVariants offset : offset orderBy : orderBy series : series sharedAppearances : sharedAppearances startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith upc : upc  completionBlock:^(BOOL success, HttpContext* context, ComicDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_comics_collection_by_event_id_async_with_event_id"></a>![Method: ](https://apidocs.io/img/method.png ".ComicsController.getComicsCollectionByEventIdAsyncWithEventId") getComicsCollectionByEventIdAsyncWithEventId

> getComicsCollectionByEventId


```objc
function getComicsCollectionByEventIdAsyncWithEventId:(NSString*) eventId
                characters:(NSString*) characters
                collaborators:(NSString*) collaborators
                creators:(NSString*) creators
                dateDescriptor:(enum DateDescriptorEnum) dateDescriptor
                dateRange:(NSString*) dateRange
                diamondCode:(NSString*) diamondCode
                digitalId:(NSString*) digitalId
                ean:(NSString*) ean
                events:(NSString*) events
                format:(NSString*) format
                formatType:(enum FormatTypeEnum) formatType
                hasDigitalIssue:(NSString*) hasDigitalIssue
                isbn:(NSString*) isbn
                issn:(NSString*) issn
                issueNumber:(NSString*) issueNumber
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                noVariants:(NSString*) noVariants
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                sharedAppearances:(NSString*) sharedAppearances
                startYear:(NSString*) startYear
                stories:(NSString*) stories
                title:(NSString*) title
                titleStartsWith:(NSString*) titleStartsWith
                upc:(NSString*) upc
                completionBlock:(CompletedGetComicsCollectionByEventId) onCompleted(eventId characters : characters collaborators : collaborators creators : creators dateDescriptor : dateDescriptor dateRange : dateRange diamondCode : diamondCode digitalId : digitalId ean : ean events : events format : format formatType : formatType hasDigitalIssue : hasDigitalIssue isbn : isbn issn : issn issueNumber : issueNumber limit : limit modifiedSince : modifiedSince noVariants : noVariants offset : offset orderBy : orderBy series : series sharedAppearances : sharedAppearances startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith upc : upc)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| eventId |  ``` Required ```  | The event id. |
| characters |  ``` Optional ```  | Return only comics which feature the specified characters (accepts a comma-separated list of ids). |
| collaborators |  ``` Optional ```  | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). |
| creators |  ``` Optional ```  | Return only comics which feature work by the specified creators (accepts a comma-separated list of ids). |
| dateDescriptor |  ``` Optional ```  | Return comics within a predefined date range. |
| dateRange |  ``` Optional ```  | Return comics within a predefined date range.  Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format. |
| diamondCode |  ``` Optional ```  | Filter by diamond code. |
| digitalId |  ``` Optional ```  | Filter by digital comic id. |
| ean |  ``` Optional ```  | Filter by EAN. |
| events |  ``` Optional ```  | Return only comics which take place in the specified events (accepts a comma-separated list of ids). |
| format |  ``` Optional ```  ``` DefaultValue ```  | Filter by the issue format (e.g. comic, digital comic, hardcover). (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") |
| formatType |  ``` Optional ```  | Filter by the issue format type (comic or collection). |
| hasDigitalIssue |  ``` Optional ```  ``` DefaultValue ```  | Include only results which are available digitally. (Acceptable values are: "true") |
| isbn |  ``` Optional ```  | Filter by ISBN. |
| issn |  ``` Optional ```  | Filter by ISSN. |
| issueNumber |  ``` Optional ```  | Return only issues in series whose issue number matches the input. |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only comics which have been modified since the specified date. |
| noVariants |  ``` Optional ```  ``` DefaultValue ```  | Exclude variant comics from the result set. (Acceptable values are: "true") |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title", "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber", "-modified") |
| series |  ``` Optional ```  | Return only comics which are part of the specified series (accepts a comma-separated list of ids). |
| sharedAppearances |  ``` Optional ```  | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). |
| startYear |  ``` Optional ```  | Return only issues in series whose start year matches the input. |
| stories |  ``` Optional ```  | Return only comics which contain the specified stories (accepts a comma-separated list of ids). |
| title |  ``` Optional ```  | Return only issues in series whose title matches the input. |
| titleStartsWith |  ``` Optional ```  | Return only issues in series whose title starts with the input. |
| upc |  ``` Optional ```  | Filter by UPC. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* eventId = @"eventId";
    NSString* characters = @"characters";
    NSString* collaborators = @"collaborators";
    NSString* creators = @"creators";
    DateDescriptorEnum dateDescriptor = LASTWEEK;
    NSString* dateRange = @"dateRange";
    NSString* diamondCode = @"diamondCode";
    NSString* digitalId = @"digitalId";
    NSString* ean = @"ean";
    NSString* events = @"events";
    NSString* format = @"format";
    FormatTypeEnum formatType = COLLECTION;
    NSString* hasDigitalIssue = @"hasDigitalIssue";
    NSString* isbn = @"isbn";
    NSString* issn = @"issn";
    NSString* issueNumber = @"issueNumber";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* noVariants = @"noVariants";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* sharedAppearances = @"sharedAppearances";
    NSString* startYear = @"startYear";
    NSString* stories = @"stories";
    NSString* title = @"title";
    NSString* titleStartsWith = @"titleStartsWith";
    NSString* upc = @"upc";

    [self.comics getComicsCollectionByEventIdAsyncWithEventId: eventId characters : characters collaborators : collaborators creators : creators dateDescriptor : dateDescriptor dateRange : dateRange diamondCode : diamondCode digitalId : digitalId ean : ean events : events format : format formatType : formatType hasDigitalIssue : hasDigitalIssue isbn : isbn issn : issn issueNumber : issueNumber limit : limit modifiedSince : modifiedSince noVariants : noVariants offset : offset orderBy : orderBy series : series sharedAppearances : sharedAppearances startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith upc : upc  completionBlock:^(BOOL success, HttpContext* context, ComicDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_comics_collection_by_series_id_async_with_series_id"></a>![Method: ](https://apidocs.io/img/method.png ".ComicsController.getComicsCollectionBySeriesIdAsyncWithSeriesId") getComicsCollectionBySeriesIdAsyncWithSeriesId

> getComicsCollectionBySeriesId


```objc
function getComicsCollectionBySeriesIdAsyncWithSeriesId:(NSString*) seriesId
                characters:(NSString*) characters
                collaborators:(NSString*) collaborators
                creators:(NSString*) creators
                dateDescriptor:(enum DateDescriptorEnum) dateDescriptor
                dateRange:(NSString*) dateRange
                diamondCode:(NSString*) diamondCode
                digitalId:(NSString*) digitalId
                ean:(NSString*) ean
                events:(NSString*) events
                format:(NSString*) format
                formatType:(enum FormatTypeEnum) formatType
                hasDigitalIssue:(NSString*) hasDigitalIssue
                isbn:(NSString*) isbn
                issn:(NSString*) issn
                issueNumber:(NSString*) issueNumber
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                noVariants:(NSString*) noVariants
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                sharedAppearances:(NSString*) sharedAppearances
                startYear:(NSString*) startYear
                stories:(NSString*) stories
                title:(NSString*) title
                titleStartsWith:(NSString*) titleStartsWith
                upc:(NSString*) upc
                completionBlock:(CompletedGetComicsCollectionBySeriesId) onCompleted(seriesId characters : characters collaborators : collaborators creators : creators dateDescriptor : dateDescriptor dateRange : dateRange diamondCode : diamondCode digitalId : digitalId ean : ean events : events format : format formatType : formatType hasDigitalIssue : hasDigitalIssue isbn : isbn issn : issn issueNumber : issueNumber limit : limit modifiedSince : modifiedSince noVariants : noVariants offset : offset orderBy : orderBy sharedAppearances : sharedAppearances startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith upc : upc)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| seriesId |  ``` Required ```  | The series ID. |
| characters |  ``` Optional ```  | Return only comics which feature the specified characters (accepts a comma-separated list of ids). |
| collaborators |  ``` Optional ```  | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). |
| creators |  ``` Optional ```  | Return only comics which feature work by the specified creators (accepts a comma-separated list of ids). |
| dateDescriptor |  ``` Optional ```  | Return comics within a predefined date range. |
| dateRange |  ``` Optional ```  | Return comics within a predefined date range.  Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format. |
| diamondCode |  ``` Optional ```  | Filter by diamond code. |
| digitalId |  ``` Optional ```  | Filter by digital comic id. |
| ean |  ``` Optional ```  | Filter by EAN. |
| events |  ``` Optional ```  | Return only comics which take place in the specified events (accepts a comma-separated list of ids). |
| format |  ``` Optional ```  ``` DefaultValue ```  | Filter by the issue format (e.g. comic, digital comic, hardcover). (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") |
| formatType |  ``` Optional ```  | Filter by the issue format type (comic or collection). |
| hasDigitalIssue |  ``` Optional ```  ``` DefaultValue ```  | Include only results which are available digitally. (Acceptable values are: "true") |
| isbn |  ``` Optional ```  | Filter by ISBN. |
| issn |  ``` Optional ```  | Filter by ISSN. |
| issueNumber |  ``` Optional ```  | Return only issues in series whose issue number matches the input. |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only comics which have been modified since the specified date. |
| noVariants |  ``` Optional ```  ``` DefaultValue ```  | Exclude variant comics from the result set. (Acceptable values are: "true") |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title", "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber", "-modified") |
| sharedAppearances |  ``` Optional ```  | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). |
| startYear |  ``` Optional ```  | Return only issues in series whose start year matches the input. |
| stories |  ``` Optional ```  | Return only comics which contain the specified stories (accepts a comma-separated list of ids). |
| title |  ``` Optional ```  | Return only issues in series whose title matches the input. |
| titleStartsWith |  ``` Optional ```  | Return only issues in series whose title starts with the input. |
| upc |  ``` Optional ```  | Filter by UPC. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* seriesId = @"seriesId";
    NSString* characters = @"characters";
    NSString* collaborators = @"collaborators";
    NSString* creators = @"creators";
    DateDescriptorEnum dateDescriptor = LASTWEEK;
    NSString* dateRange = @"dateRange";
    NSString* diamondCode = @"diamondCode";
    NSString* digitalId = @"digitalId";
    NSString* ean = @"ean";
    NSString* events = @"events";
    NSString* format = @"format";
    FormatTypeEnum formatType = COLLECTION;
    NSString* hasDigitalIssue = @"hasDigitalIssue";
    NSString* isbn = @"isbn";
    NSString* issn = @"issn";
    NSString* issueNumber = @"issueNumber";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* noVariants = @"noVariants";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* sharedAppearances = @"sharedAppearances";
    NSString* startYear = @"startYear";
    NSString* stories = @"stories";
    NSString* title = @"title";
    NSString* titleStartsWith = @"titleStartsWith";
    NSString* upc = @"upc";

    [self.comics getComicsCollectionBySeriesIdAsyncWithSeriesId: seriesId characters : characters collaborators : collaborators creators : creators dateDescriptor : dateDescriptor dateRange : dateRange diamondCode : diamondCode digitalId : digitalId ean : ean events : events format : format formatType : formatType hasDigitalIssue : hasDigitalIssue isbn : isbn issn : issn issueNumber : issueNumber limit : limit modifiedSince : modifiedSince noVariants : noVariants offset : offset orderBy : orderBy sharedAppearances : sharedAppearances startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith upc : upc  completionBlock:^(BOOL success, HttpContext* context, ComicDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_comics_collection_by_story_id_async_with_story_id"></a>![Method: ](https://apidocs.io/img/method.png ".ComicsController.getComicsCollectionByStoryIdAsyncWithStoryId") getComicsCollectionByStoryIdAsyncWithStoryId

> getComicsCollectionByStoryId


```objc
function getComicsCollectionByStoryIdAsyncWithStoryId:(NSString*) storyId
                characters:(NSString*) characters
                collaborators:(NSString*) collaborators
                creators:(NSString*) creators
                dateDescriptor:(enum DateDescriptorEnum) dateDescriptor
                dateRange:(NSString*) dateRange
                diamondCode:(NSString*) diamondCode
                digitalId:(NSString*) digitalId
                ean:(NSString*) ean
                events:(NSString*) events
                format:(NSString*) format
                formatType:(enum FormatTypeEnum) formatType
                hasDigitalIssue:(NSString*) hasDigitalIssue
                isbn:(NSString*) isbn
                issn:(NSString*) issn
                issueNumber:(NSString*) issueNumber
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                noVariants:(NSString*) noVariants
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                series:(NSString*) series
                sharedAppearances:(NSString*) sharedAppearances
                startYear:(NSString*) startYear
                title:(NSString*) title
                titleStartsWith:(NSString*) titleStartsWith
                upc:(NSString*) upc
                completionBlock:(CompletedGetComicsCollectionByStoryId) onCompleted(storyId characters : characters collaborators : collaborators creators : creators dateDescriptor : dateDescriptor dateRange : dateRange diamondCode : diamondCode digitalId : digitalId ean : ean events : events format : format formatType : formatType hasDigitalIssue : hasDigitalIssue isbn : isbn issn : issn issueNumber : issueNumber limit : limit modifiedSince : modifiedSince noVariants : noVariants offset : offset orderBy : orderBy series : series sharedAppearances : sharedAppearances startYear : startYear title : title titleStartsWith : titleStartsWith upc : upc)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| storyId |  ``` Required ```  | The story ID. |
| characters |  ``` Optional ```  | Return only comics which feature the specified characters (accepts a comma-separated list of ids). |
| collaborators |  ``` Optional ```  | Return only comics in which the specified creators worked together (for example in which BOTH Stan Lee and Jack Kirby did work). |
| creators |  ``` Optional ```  | Return only comics which feature work by the specified creators (accepts a comma-separated list of ids). |
| dateDescriptor |  ``` Optional ```  | Return comics within a predefined date range. |
| dateRange |  ``` Optional ```  | Return comics within a predefined date range.  Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format. |
| diamondCode |  ``` Optional ```  | Filter by diamond code. |
| digitalId |  ``` Optional ```  | Filter by digital comic id. |
| ean |  ``` Optional ```  | Filter by EAN. |
| events |  ``` Optional ```  | Return only comics which take place in the specified events (accepts a comma-separated list of ids). |
| format |  ``` Optional ```  ``` DefaultValue ```  | Filter by the issue format (e.g. comic, digital comic, hardcover). (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") |
| formatType |  ``` Optional ```  | Filter by the issue format type (comic or collection). |
| hasDigitalIssue |  ``` Optional ```  ``` DefaultValue ```  | Include only results which are available digitally. (Acceptable values are: "true") |
| isbn |  ``` Optional ```  | Filter by ISBN. |
| issn |  ``` Optional ```  | Filter by ISSN. |
| issueNumber |  ``` Optional ```  | Return only issues in series whose issue number matches the input. |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only comics which have been modified since the specified date. |
| noVariants |  ``` Optional ```  ``` DefaultValue ```  | Exclude variant comics from the result set. (Acceptable values are: "true") |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title", "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber", "-modified") |
| series |  ``` Optional ```  | Return only comics which are part of the specified series (accepts a comma-separated list of ids). |
| sharedAppearances |  ``` Optional ```  | Return only comics in which the specified characters appear together (for example in which BOTH Spider-Man and Wolverine appear). |
| startYear |  ``` Optional ```  | Return only issues in series whose start year matches the input. |
| title |  ``` Optional ```  | Return only issues in series whose title matches the input. |
| titleStartsWith |  ``` Optional ```  | Return only issues in series whose title starts with the input. |
| upc |  ``` Optional ```  | Filter by UPC. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* storyId = @"storyId";
    NSString* characters = @"characters";
    NSString* collaborators = @"collaborators";
    NSString* creators = @"creators";
    DateDescriptorEnum dateDescriptor = LASTWEEK;
    NSString* dateRange = @"dateRange";
    NSString* diamondCode = @"diamondCode";
    NSString* digitalId = @"digitalId";
    NSString* ean = @"ean";
    NSString* events = @"events";
    NSString* format = @"format";
    FormatTypeEnum formatType = COLLECTION;
    NSString* hasDigitalIssue = @"hasDigitalIssue";
    NSString* isbn = @"isbn";
    NSString* issn = @"issn";
    NSString* issueNumber = @"issueNumber";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* noVariants = @"noVariants";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* series = @"series";
    NSString* sharedAppearances = @"sharedAppearances";
    NSString* startYear = @"startYear";
    NSString* title = @"title";
    NSString* titleStartsWith = @"titleStartsWith";
    NSString* upc = @"upc";

    [self.comics getComicsCollectionByStoryIdAsyncWithStoryId: storyId characters : characters collaborators : collaborators creators : creators dateDescriptor : dateDescriptor dateRange : dateRange diamondCode : diamondCode digitalId : digitalId ean : ean events : events format : format formatType : formatType hasDigitalIssue : hasDigitalIssue isbn : isbn issn : issn issueNumber : issueNumber limit : limit modifiedSince : modifiedSince noVariants : noVariants offset : offset orderBy : orderBy series : series sharedAppearances : sharedAppearances startYear : startYear title : title titleStartsWith : titleStartsWith upc : upc  completionBlock:^(BOOL success, HttpContext* context, ComicDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



[Back to List of Controllers](#list_of_controllers)

## <a name="series_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SeriesController") SeriesController

### Get singleton instance
```objc
Series* series = [[Series alloc]init] ;
```

### <a name="get_series_individual_async_with_series_id"></a>![Method: ](https://apidocs.io/img/method.png ".SeriesController.getSeriesIndividualAsyncWithSeriesId") getSeriesIndividualAsyncWithSeriesId

> getSeriesIndividual


```objc
function getSeriesIndividualAsyncWithSeriesId:(NSString*) seriesId
                completionBlock:(CompletedGetSeriesIndividual) onCompleted(seriesId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| seriesId |  ``` Required ```  | Filter by series title. |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* seriesId = @"seriesId";

    [self.series getSeriesIndividualAsyncWithSeriesId: seriesId  completionBlock:^(BOOL success, HttpContext* context, SeriesModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Series not found. |



### <a name="get_character_series_collection_async_with_character_id"></a>![Method: ](https://apidocs.io/img/method.png ".SeriesController.getCharacterSeriesCollectionAsyncWithCharacterId") getCharacterSeriesCollectionAsyncWithCharacterId

> getCharacterSeriesCollection


```objc
function getCharacterSeriesCollectionAsyncWithCharacterId:(NSString*) characterId
                comics:(NSString*) comics
                contains:(NSString*) contains
                creators:(NSString*) creators
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                seriesType:(NSString*) seriesType
                startYear:(NSString*) startYear
                stories:(NSString*) stories
                title:(NSString*) title
                titleStartsWith:(NSString*) titleStartsWith
                completionBlock:(CompletedGetCharacterSeriesCollection) onCompleted(characterId comics : comics contains : contains creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy seriesType : seriesType startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| characterId |  ``` Required ```  | The character ID |
| comics |  ``` Optional ```  | Return only series which contain the specified comics (accepts a comma-separated list of ids). |
| contains |  ``` Optional ```  ``` DefaultValue ```  | Return only series containing one or more comics with the specified format. (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") |
| creators |  ``` Optional ```  | Return only series which feature work by the specified creators (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only series which have comics that take place during the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only series which have been modified since the specified date. |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "title", "modified", "startYear", "-title", "-modified", "-startYear") |
| seriesType |  ``` Optional ```  ``` DefaultValue ```  | Filter the series by publication frequency type. (Acceptable values are: "collection", "one shot", "limited", "ongoing") |
| startYear |  ``` Optional ```  | Return only series matching the specified start year. |
| stories |  ``` Optional ```  | Return only series which contain the specified stories (accepts a comma-separated list of ids). |
| title |  ``` Optional ```  | Filter by series title. |
| titleStartsWith |  ``` Optional ```  | Return series with titles that begin with the specified string (e.g. Sp). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* characterId = @"characterId";
    NSString* comics = @"comics";
    NSString* contains = @"contains";
    NSString* creators = @"creators";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* seriesType = @"seriesType";
    NSString* startYear = @"startYear";
    NSString* stories = @"stories";
    NSString* title = @"title";
    NSString* titleStartsWith = @"titleStartsWith";

    [self.series getCharacterSeriesCollectionAsyncWithCharacterId: characterId comics : comics contains : contains creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy seriesType : seriesType startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith  completionBlock:^(BOOL success, HttpContext* context, SeriesDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_creator_series_collection_async_with_creator_id"></a>![Method: ](https://apidocs.io/img/method.png ".SeriesController.getCreatorSeriesCollectionAsyncWithCreatorId") getCreatorSeriesCollectionAsyncWithCreatorId

> getCreatorSeriesCollection


```objc
function getCreatorSeriesCollectionAsyncWithCreatorId:(NSString*) creatorId
                characters:(NSString*) characters
                comics:(NSString*) comics
                contains:(NSString*) contains
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                seriesType:(NSString*) seriesType
                startYear:(NSString*) startYear
                stories:(NSString*) stories
                title:(NSString*) title
                titleStartsWith:(NSString*) titleStartsWith
                completionBlock:(CompletedGetCreatorSeriesCollection) onCompleted(creatorId characters : characters comics : comics contains : contains events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy seriesType : seriesType startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| creatorId |  ``` Required ```  | The creator ID. |
| characters |  ``` Optional ```  | Return only series which feature the specified characters (accepts a comma-separated list of ids). |
| comics |  ``` Optional ```  | Return only series which contain the specified comics (accepts a comma-separated list of ids). |
| contains |  ``` Optional ```  ``` DefaultValue ```  | Return only series containing one or more comics with the specified format. (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") |
| events |  ``` Optional ```  | Return only series which have comics that take place during the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only series which have been modified since the specified date. |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "title", "modified", "startYear", "-title", "-modified", "-startYear") |
| seriesType |  ``` Optional ```  ``` DefaultValue ```  | Filter the series by publication frequency type. (Acceptable values are: "collection", "one shot", "limited", "ongoing") |
| startYear |  ``` Optional ```  | Return only series matching the specified start year. |
| stories |  ``` Optional ```  | Return only series which contain the specified stories (accepts a comma-separated list of ids). |
| title |  ``` Optional ```  | Filter by series title. |
| titleStartsWith |  ``` Optional ```  | Return series with titles that begin with the specified string (e.g. Sp). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* creatorId = @"creatorId";
    NSString* characters = @"characters";
    NSString* comics = @"comics";
    NSString* contains = @"contains";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* seriesType = @"seriesType";
    NSString* startYear = @"startYear";
    NSString* stories = @"stories";
    NSString* title = @"title";
    NSString* titleStartsWith = @"titleStartsWith";

    [self.series getCreatorSeriesCollectionAsyncWithCreatorId: creatorId characters : characters comics : comics contains : contains events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy seriesType : seriesType startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith  completionBlock:^(BOOL success, HttpContext* context, SeriesDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_event_series_collection_async_with_event_id"></a>![Method: ](https://apidocs.io/img/method.png ".SeriesController.getEventSeriesCollectionAsyncWithEventId") getEventSeriesCollectionAsyncWithEventId

> getEventSeriesCollection


```objc
function getEventSeriesCollectionAsyncWithEventId:(NSString*) eventId
                characters:(NSString*) characters
                comics:(NSString*) comics
                contains:(NSString*) contains
                creators:(NSString*) creators
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                seriesType:(NSString*) seriesType
                startYear:(NSString*) startYear
                stories:(NSString*) stories
                title:(NSString*) title
                titleStartsWith:(NSString*) titleStartsWith
                completionBlock:(CompletedGetEventSeriesCollection) onCompleted(eventId characters : characters comics : comics contains : contains creators : creators limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy seriesType : seriesType startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| eventId |  ``` Required ```  | The event ID. |
| characters |  ``` Optional ```  | Return only series which feature the specified characters (accepts a comma-separated list of ids). |
| comics |  ``` Optional ```  | Return only series which contain the specified comics (accepts a comma-separated list of ids). |
| contains |  ``` Optional ```  ``` DefaultValue ```  | Return only series containing one or more comics with the specified format. (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") |
| creators |  ``` Optional ```  | Return only series which feature work by the specified creators (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only series which have been modified since the specified date. |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "title", "modified", "startYear", "-title", "-modified", "-startYear") |
| seriesType |  ``` Optional ```  ``` DefaultValue ```  | Filter the series by publication frequency type. (Acceptable values are: "collection", "one shot", "limited", "ongoing") |
| startYear |  ``` Optional ```  | Return only series matching the specified start year. |
| stories |  ``` Optional ```  | Return only series which contain the specified stories (accepts a comma-separated list of ids). |
| title |  ``` Optional ```  | Filter by series title. |
| titleStartsWith |  ``` Optional ```  | Return series with titles that begin with the specified string (e.g. Sp). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* eventId = @"eventId";
    NSString* characters = @"characters";
    NSString* comics = @"comics";
    NSString* contains = @"contains";
    NSString* creators = @"creators";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* seriesType = @"seriesType";
    NSString* startYear = @"startYear";
    NSString* stories = @"stories";
    NSString* title = @"title";
    NSString* titleStartsWith = @"titleStartsWith";

    [self.series getEventSeriesCollectionAsyncWithEventId: eventId characters : characters comics : comics contains : contains creators : creators limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy seriesType : seriesType startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith  completionBlock:^(BOOL success, HttpContext* context, SeriesDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_series_collection_async_with_characters"></a>![Method: ](https://apidocs.io/img/method.png ".SeriesController.getSeriesCollectionAsyncWithCharacters") getSeriesCollectionAsyncWithCharacters

> getSeriesCollection


```objc
function getSeriesCollectionAsyncWithCharacters:(NSString*) characters
                comics:(NSString*) comics
                contains:(NSString*) contains
                creators:(NSString*) creators
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                seriesType:(NSString*) seriesType
                startYear:(NSString*) startYear
                stories:(NSString*) stories
                title:(NSString*) title
                titleStartsWith:(NSString*) titleStartsWith
                completionBlock:(CompletedGetSeriesCollection) onCompleted(characters comics : comics contains : contains creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy seriesType : seriesType startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| characters |  ``` Optional ```  | Return only series which feature the specified characters (accepts a comma-separated list of ids). |
| comics |  ``` Optional ```  | Return only series which contain the specified comics (accepts a comma-separated list of ids). |
| contains |  ``` Optional ```  ``` DefaultValue ```  | Return only series containing one or more comics with the specified format. (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") |
| creators |  ``` Optional ```  | Return only series which feature work by the specified creators (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only series which have comics that take place during the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only series which have been modified since the specified date. |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "title", "modified", "startYear", "-title", "-modified", "-startYear") |
| seriesType |  ``` Optional ```  ``` DefaultValue ```  | Filter the series by publication frequency type. (Acceptable values are: "collection", "one shot", "limited", "ongoing") |
| startYear |  ``` Optional ```  | Return only series matching the specified start year. |
| stories |  ``` Optional ```  | Return only series which contain the specified stories (accepts a comma-separated list of ids). |
| title |  ``` Optional ```  | Return only series matching the specified title. |
| titleStartsWith |  ``` Optional ```  | Return series with titles that begin with the specified string (e.g. Sp). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* characters = @"characters";
    NSString* comics = @"comics";
    NSString* contains = @"contains";
    NSString* creators = @"creators";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* seriesType = @"seriesType";
    NSString* startYear = @"startYear";
    NSString* stories = @"stories";
    NSString* title = @"title";
    NSString* titleStartsWith = @"titleStartsWith";

    [self.series getSeriesCollectionAsyncWithCharacters: characters comics : comics contains : contains creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy seriesType : seriesType startYear : startYear stories : stories title : title titleStartsWith : titleStartsWith  completionBlock:^(BOOL success, HttpContext* context, SeriesDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



### <a name="get_story_series_collection_async_with_story_id"></a>![Method: ](https://apidocs.io/img/method.png ".SeriesController.getStorySeriesCollectionAsyncWithStoryId") getStorySeriesCollectionAsyncWithStoryId

> getStorySeriesCollection


```objc
function getStorySeriesCollectionAsyncWithStoryId:(NSString*) storyId
                characters:(NSString*) characters
                comics:(NSString*) comics
                contains:(NSString*) contains
                creators:(NSString*) creators
                events:(NSString*) events
                limit:(NSString*) limit
                modifiedSince:(NSString*) modifiedSince
                offset:(NSString*) offset
                orderBy:(NSString*) orderBy
                seriesType:(NSString*) seriesType
                startYear:(NSString*) startYear
                title:(NSString*) title
                titleStartsWith:(NSString*) titleStartsWith
                completionBlock:(CompletedGetStorySeriesCollection) onCompleted(storyId characters : characters comics : comics contains : contains creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy seriesType : seriesType startYear : startYear title : title titleStartsWith : titleStartsWith)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| storyId |  ``` Required ```  | The story ID. |
| characters |  ``` Optional ```  | Return only series which feature the specified characters (accepts a comma-separated list of ids). |
| comics |  ``` Optional ```  | Return only series which contain the specified comics (accepts a comma-separated list of ids). |
| contains |  ``` Optional ```  ``` DefaultValue ```  | Return only series containing one or more comics with the specified format. (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover", "digest", "graphic novel", "digital comic", "infinite comic") |
| creators |  ``` Optional ```  | Return only series which feature work by the specified creators (accepts a comma-separated list of ids). |
| events |  ``` Optional ```  | Return only series which have comics that take place during the specified events (accepts a comma-separated list of ids). |
| limit |  ``` Optional ```  | Limit the result set to the specified number of resources. |
| modifiedSince |  ``` Optional ```  | Return only series which have been modified since the specified date. |
| offset |  ``` Optional ```  | Skip the specified number of resources in the result set. |
| orderBy |  ``` Optional ```  ``` DefaultValue ```  | Order the result set by a field or fields. Add a "-" to the value sort in descending order. Multiple values are given priority in the order in which they are passed. (Acceptable values are: "title", "modified", "startYear", "-title", "-modified", "-startYear") |
| seriesType |  ``` Optional ```  ``` DefaultValue ```  | Filter the series by publication frequency type. (Acceptable values are: "collection", "one shot", "limited", "ongoing") |
| startYear |  ``` Optional ```  | Return only series matching the specified start year. |
| title |  ``` Optional ```  | Filter by series title. |
| titleStartsWith |  ``` Optional ```  | Return series with titles that begin with the specified string (e.g. Sp). |





#### Example Usage

```objc
    // Parameters for the API call
    NSString* storyId = @"storyId";
    NSString* characters = @"characters";
    NSString* comics = @"comics";
    NSString* contains = @"contains";
    NSString* creators = @"creators";
    NSString* events = @"events";
    NSString* limit = @"limit";
    NSString* modifiedSince = @"modifiedSince";
    NSString* offset = @"offset";
    NSString* orderBy = @"orderBy";
    NSString* seriesType = @"seriesType";
    NSString* startYear = @"startYear";
    NSString* title = @"title";
    NSString* titleStartsWith = @"titleStartsWith";

    [self.series getStorySeriesCollectionAsyncWithStoryId: storyId characters : characters comics : comics contains : contains creators : creators events : events limit : limit modifiedSince : modifiedSince offset : offset orderBy : orderBy seriesType : seriesType startYear : startYear title : title titleStartsWith : titleStartsWith  completionBlock:^(BOOL success, HttpContext* context, SeriesDataWrapperModel* response, NSError* error) { 
       //Add code here
    }];
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 409 | Limit greater than 100. |



[Back to List of Controllers](#list_of_controllers)



