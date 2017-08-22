# Getting started

## How to Build

The generated SDK requires AngularJS framework to work. If you do not already have angular downloaded, please go ahead and do it from [here](https://angularjs.org/).
If any of your models have `Date` or `Datetime` type fields or your endpoints have `Date`/`Datetime` type response, you will need to download and link [angular-moment](https://cdnjs.cloudflare.com/ajax/libs/angular-moment/1.0.1/angular-moment.min.js) and [moment.js](https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js) with your project.

## How to Use

The following section describes how to use the generated SDK in an existing/new project.

### 1. Configure Angular and Generated SDK
Perform the following steps to configure angular and the SDK:
+ Make a `scripts` folder inside the root folder of the project. If you already have a `scripts` folder, skip to the next step.
+ Move the `angular.min.js` file inside the scripts folder. 
+ Move the `AWSECommerceServiceLib` folder inside the scripts folder.
+ If any of the Custom Types in your API have `Date`/`Datetime` type fields or any endpoint has `Date`/`Datetime` response, you will need to download angular-moment and moment.js. Move these 2 files into the `scripts` folder as well.

![folder-structure-image](https://apidocs.io/illustration/angularjs?step=folderStructure&workspaceFolder=AWSECommerceService-Angular&projectName=AWSECommerceServiceLib)

### 2. Open Project Folder
Open an IDE/Text Editor for JavaScript like Sublime Text. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.  
Click on `File` and select `Open Folder`

Select the folder of your SDK and click on `Select Folder` to open it up in Sublime Text. The folder will become visible in the bar on the left.

![open-folder-image](https://apidocs.io/illustration/angularjs?step=openFolder&workspaceFolder=AWSECommerceService-Angular)

### 3. Create an Angular Application
Since Angular JS is used for client-side web development, in order to use the generated library, you will have to develop an application first.
If you already have an angular application, [skip to Step 6](#6-include-sdk-references-in-html-file). Otherwise, follow these steps to create one:

+ In the IDE, click on `File` and choose `New File` to create a new file.
+ Add the following starting code in the file:
```js
var app = angular.module('myApp', []);
app.controller('testController', function($scope) 
{

});
```
+ Save it with the name `app.js` in the `scripts` folder.


### 4. Create HTML File
Skip to the next step if you are working with an existing project and already have an html file. Otherwise follow the steps to create one:
+ Inside the IDE, right click on the project folder name and select the `New File` option to create a new test file.
+ Save it with an appropriate name such as `index.html` in the root of your project folder.
`index.html` should look like this:
```html
<!DOCTYPE html>
<html>
<head>
	<title>Angular Project</title>
	<script></script>
</head>

<body>
</body>

</html>
```

![initial-html-code-image](https://apidocs.io/illustration/angularjs?step=initialCode&workspaceFolder=AWSECommerceService-Angular)

### 5. Including links to Angular in HTML file
Your HTML file needs to have a link to `angular.min.js` file to use Angular-JS. Add the link using `script` tags inside the `head` section of `index.html` like:
```html
<script src="scripts/angular.min.js" ></script>
```
If any of the Custom Types that you have defined have `Date`/`Datetime` type fields or any endpoint has `Date`/`Datetime` response, you will also need to link to angular-moment and moment.js like:
```html
<script src="scripts/angular.min.js" ></script>
<script src="scripts/moment.min.js" ></script>
<script src="scripts/angular-moment.min.js" ></script>
```

### 6. Include SDK references in HTML file
Import the reference to the generated SDK files inside your html file like:
```html
<head>
    ...
    <!-- Helper files -->
    <script src="scripts/AWSECommerceServiceLib/Module.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Configuration.js"></script>
    <script src="scripts/AWSECommerceServiceLib/ModelFactory.js"></script>
    <script src="scripts/AWSECommerceServiceLib/ObjectMapper.js"></script>
    <script src="scripts/AWSECommerceServiceLib/APIHelper.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Http/Client/HttpContext.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Http/Client/RequestClient.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Http/Request/HttpRequest.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Http/Response/HttpResponse.js"></script>

    <!-- API Controllers -->
    <script src="scripts/AWSECommerceServiceLib/Controllers/BaseController.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Controllers/AWSECommerceServiceBindingController.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Controllers/OAuthAuthorizationController.js"></script>


    <!-- Models -->
    <script src="scripts/AWSECommerceServiceLib/Models/BaseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/NonNegativeIntegerWithUnitsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/MerchantModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SearchResultsMapModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/AncestorsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ChildrenModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/PropertiesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OtherCategoriesSimilarProductsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarViewedProductsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/NewReleasesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/TopSellersModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarProductsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/MetaDataModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ErrorsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ArgumentsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/HTTPHeadersModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/AvailabilityEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SearchBinSetsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BinParameterModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BinModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SearchBinSetModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/AudienceRatingEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ConditionEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemSearchRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemSearchModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/IdTypeEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLookupRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLookupModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarityTypeEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarityLookupRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarityLookupModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartGetRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartGetModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartAddRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartAddModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartCreateRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartCreateModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartModifyRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartModifyModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartClearRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartClearModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodeLookupRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodeLookupModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/HeaderModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ArgumentModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ErrorModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OperationRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemSearchResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLookupResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarityLookupResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/PriceModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/KeyValuePairModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartItemModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartItemsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SavedForLaterItemsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarProductModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/TopSellerModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/NewReleaseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarViewedProductModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OtherCategoriesSimilarProductModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartGetResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartAddResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartCreateResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartModifyResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartClearResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/PropertyModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/TopItemModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/TopItemSetModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodeModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodeLookupResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CorrectedQueryModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SearchIndexModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RentalListingModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RentalOfferModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RentalOffersModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLinkModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLinksModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RelationshipEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RelatedItemModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RelatedItemsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OfferSummaryModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OfferAttributesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/AvailabilityAttributesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OfferListingModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/LoyaltyPointsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SummaryModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/PromotionModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/PromotionsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OfferModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OffersModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/VariationAttributeModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/VariationSummaryModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/VariationDimensionsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/VariationsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/EditorialReviewModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/EditorialReviewsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CollectionSummaryModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CollectionParentModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CollectionItemModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CollectionModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CollectionsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CustomerReviewsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/TrackModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/DiscModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/TracksModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/AccessoryModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/AccessoriesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/DecimalWithUnitsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ImageModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ImageSetModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CatalogNumberListModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CreatorModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/EANListModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemDimensionsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/LanguageModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/LanguagesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/PackageDimensionsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/UPCListModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemAttributesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/StringWithUnitsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemSearchResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLookupResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodeLookupResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarityLookupResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartGetResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartAddResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartCreateResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartModifyResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartClearResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemSearchRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLookupRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodeLookupRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarityLookupRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartGetRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartAddRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartCreateRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartModifyRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartClearRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthScopeEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthTokenModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthProviderErrorEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthScopeEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthTokenModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthProviderErrorEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthScopeEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthTokenModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthProviderErrorEnum.js"></script>

    ...
</head>
```
> The `Module.js` file should be imported before the other files. After `Module.js`, `Configuration.js` should be imported.
> The `ModelFactory.js` file is needed by `ObjectMapper.js` file. The `ObjectMapper` in turn, is needed by `BaseController.js`.

### 7. Including link to `app.js` in HTML file
Link your `app.js` file to your `index.html` file like:
```html
<head>
	...
	<script src="scripts/app.js"></script>
</head>
```
> The link to app.js needs to be included at the very end of the head tag, after the SDK references have been added

### 8. Initializing the Angular App
You need to initialize your app and the controller associated with your view inside your `index.html` file. Do so like:
+ Add ng-app directive to initialize your app inside the `body` tag.
```html
<body ng-app="myApp">
```
+ Add ng-controller directive to initialize your controller and bind it with your view (`index.html` file).
```html
...
<body ng-app="myApp">
	<div ng-controller="testController">
		...
	</div>
	...
</body>
...
```

### 9. Consuming the SDK 
In order to use the generated SDK's modules, controllers and factories, the project needs to be added as a dependency in your angular app's module. This will be done inside the `app.js` file.
Add the dependency like this:

```js
var app = angular.module('myApp', ['AWSECommerceServiceLib']);
```
At this point, the SDK has been successfully included in your project. Further steps include using a service/factory from the generated SDK. To see working example of this, please head on [over here](#list-of-controllers) and choose any class to see its functions and example usage.  

### 10. Running The App
To run the app, simply open up the `index.html` file in a browser.

![app-running](https://apidocs.io/illustration/angularjs?step=appRunning)

## Initialization


The Angular Application can be initialized as following:
```JavaScript
var app = angular.module('myApp', [AWSECommerceServiceLib]);
// now controllers/services can be created which import
// the factories provided by the sdk
```
### Authentication
In order to setup authentication and initialization of the Angular App, you need the following information.

| Parameter | Description |
|-----------|-------------|
| aFIeyt | TODO: add a description |
| b | TODO: add a description |
| c | TODO: add a description |
| oAuthClientId | OAuth 2 Client ID |
| oAuthClientSecret | OAuth 2 Client Secret |
| oAuthRedirectUri | OAuth 2 Redirection endpoint or Callback Uri |



```JavaScript
var app = angular.module('myApp', [AWSECommerceServiceLib]);
app.factory('config', function($scope, Configuration) 
{
    return {
        setConfigVars: function() {
            // Configuration parameters and credentials
            Configuration.aFIeyt = 'aFIeyt';
            Configuration.b = 'b';
            Configuration.c = 'c';
            Configuration.oAuthClientId = 'oAuthClientId'; // OAuth 2 Client ID
            Configuration.oAuthClientSecret = 'oAuthClientSecret'; // OAuth 2 Client Secret
            Configuration.oAuthRedirectUri = 'oAuthRedirectUri'; // OAuth 2 Redirection endpoint or Callback Uri
            
        }
    };
});
```

You must now authorize the client.

### Authorizing your client


Your application must obtain user authorization before it can execute an endpoint call. The SDK uses OAuth 2.0 authorization to obtain a user's consent to perform an API request on user's behalf.

#### 1. Obtaining user consent

To obtain user's consent, you must redirect the user to the authorization page. The `buildAuthorizationUrl()` method creates the URL to the authorization page. You must pass
the **[scopes](#scopes)** for which you need permission to access.
```JavaScript
var app = angular.module('OAuthTest', ['AWSECommerceServiceLib']);

app.controller('oauthClientController', function($scope, OAuthManager, OAuthScopeEnum) {

    var scopes = [OAuthScopeEnum.ASDA];
    var authUrl = OAuthManager.buildAuthorizationUrl(scopes);
    window.open(authUrl);
});
```

#### 2. Handle the OAuth server response

Once the user responds to the consent request, the OAuth 2.0 server responds to your application's access request by using the URL specified in the request.

If the user approves the request, the authorization code will be sent as the `code` query string:

```
https://example.com/oauth/callback?code=XXXXXXXXXXXXXXXXXXXXXXXXX
```

If the user does not approve the request, the response contains an `error` query string:

```
https://example.com/oauth/callback?error=access_denied
```

#### 3. Authorize the client using the code

After the server receives the code, it can exchange this for an *access token*. The access token is an object containing information for authorizing the client and refreshing the token itself.

```JavaScript
var app = angular.module('OAuthTest', ['AWSECommerceServiceLib']);

app.controller('oauthClientController', function($scope, OAuthManager) {
    // code was passed by the server to the client
    var promise = OAuthManager.authorize(code);
    promise.then(function(success) {
        // client successfully authorized
    });
});
```



### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the `AWSECommerceServiceLib/Models/OAuthScopeEnum` enumeration.

| Scope Name | Description |
| --- | --- |
| `ASDA` |  |

### Refreshing token

Access tokens may expire after sometime. To extend its lifetime, you must refresh the token.

```JavaScript
var app = angular.module('OAuthTest', ['AWSECommerceServiceLib']);

app.controller('oauthClientController', function($scope, OAuthManager) {
    var refreshPromise = OAuthManager.refreshToken();
    promise.then(function(success) {
        // token refreshed
    });
});
```

If a token expires, the SDK will attempt to automatically refresh the token before the next endpoint call which requires authentication.




### Watching for access token updates

Since the the SDK will attempt to automatically refresh the token when it expires, it is recommended that you register a **token update callback** to detect any change to the access token.

```JavaScript
var app = angular.module('OAuthTest', ['AWSECommerceServiceLib']);

app.controller('oauthClientController', function($scope, Configuration) {
    Configuration.oAuthTokenUpdateCallback = function(token) {
        // token passed here is the Configuration.oAuthToken
    }
});
```

The token update callback will be fired upon authorization as well as token refresh.

### Creating a client from an existing token

To authorize a client from an existing access token, just set the access token in `Configuration` along with the other configuration parameters:

```JavaScript
var app = angular.module('OAuthTest', ['AWSECommerceServiceLib']);

app.controller('config', function($scope, Configuration) {
    Configuration.oAuthToken = sessionStorage.getItem('token'); // the existing token stored in sessionStorage of browser
});
```

### Complete example

In this example, app.js first checks if the token is already set. If it is, API calls can be made. If not, it builds and opens up the authorization url in a new tab. Afterwards, auth code will be sent to the registered redirect URI.  
The angular controller exposes a function which is bound to a button (in the `index.html` file). This can be called when the code is available and the client has to be authorized.


#### `app.js`

```JavaScript
var app = angular.module('OAuthTest', ['AWSECommerceServiceLib']);

app.controller('oauthClientController', function($scope, OAuthManager, Configuration, OAuthScopeEnum) {
    Configuration.aFIeyt = 'aFIeyt';
    Configuration.b = 'b';
    Configuration.c = 'c';
    Configuration.oAuthClientId = 'oAuthClientId'; // OAuth 2 Client ID
    Configuration.oAuthClientSecret = 'oAuthClientSecret'; // OAuth 2 Client Secret
    Configuration.oAuthRedirectUri = 'http://localhost:1800/callback'; // OAuth 2 Redirection endpoint or Callback Uri

    Configuration.oAuthTokenUpdateCallback = function(token) {
        sessionStorage.setItem('token', token);
    }

    if (OAuthManager.isTokenSet()) {
        // token already set, make API calls
    } else {
        var scopes = [OAuthScopeEnum.ASDA];
        var authUrl = OAuthManager.buildAuthorizationUrl(scopes);
        window.open(authUrl);
    }

    // after auth code is received, call function to authorize client
    $scope.authorizeClient = function() {
        // code was passed by the server to the client
        var promise = OAuthManager.authorize(code);
        promise.then(function(success) {
            // client successfully authorized
            // make endpoint calls as required
        });
    }
});
```

#### `index.html`
```html
<!DOCTYPE html>
<html>

<head>
    <title>OAuthTest</title>
    <meta charset="UTF8">

    <script src="scripts/angular.min.js"></script>

    <script src="scripts/AWSECommerceServiceLib/Module.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Configuration.js"></script>
    <script src="scripts/AWSECommerceServiceLib/ModelFactory.js"></script>
    <script src="scripts/AWSECommerceServiceLib/ObjectMapper.js"></script>
    <script src="scripts/AWSECommerceServiceLib/APIHelper.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Servers.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Environments.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Http/Client/HttpContext.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Http/Request/HttpRequest.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Http/Response/HttpResponse.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Http/Client/RequestClient.js"></script>

    <!-- API Controllers -->
    <script src="scripts/AWSECommerceServiceLib/Controllers/BaseController.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Controllers/AWSECommerceServiceBindingController.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Controllers/OAuthAuthorizationController.js"></script>


    <!-- Models -->
    <script src="scripts/AWSECommerceServiceLib/Models/BaseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/NonNegativeIntegerWithUnitsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/MerchantModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SearchResultsMapModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/AncestorsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ChildrenModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/PropertiesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OtherCategoriesSimilarProductsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarViewedProductsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/NewReleasesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/TopSellersModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarProductsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/MetaDataModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ErrorsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ArgumentsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/HTTPHeadersModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/AvailabilityEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SearchBinSetsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BinParameterModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BinModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SearchBinSetModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/AudienceRatingEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ConditionEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemSearchRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemSearchModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/IdTypeEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLookupRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLookupModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarityTypeEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarityLookupRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarityLookupModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartGetRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartGetModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartAddRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartAddModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartCreateRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartCreateModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartModifyRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartModifyModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartClearRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartClearModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodeLookupRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodeLookupModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/HeaderModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ArgumentModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ErrorModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OperationRequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemSearchResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLookupResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarityLookupResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RequestModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/PriceModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/KeyValuePairModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartItemModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartItemsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SavedForLaterItemsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarProductModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/TopSellerModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/NewReleaseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarViewedProductModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OtherCategoriesSimilarProductModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartGetResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartAddResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartCreateResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartModifyResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartClearResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/PropertyModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/TopItemModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/TopItemSetModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodeModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodeLookupResponseModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CorrectedQueryModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SearchIndexModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RentalListingModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RentalOfferModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RentalOffersModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLinkModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLinksModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RelationshipEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RelatedItemModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/RelatedItemsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OfferSummaryModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OfferAttributesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/AvailabilityAttributesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OfferListingModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/LoyaltyPointsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SummaryModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/PromotionModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/PromotionsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OfferModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OffersModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/VariationAttributeModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/VariationSummaryModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/VariationDimensionsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/VariationsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/EditorialReviewModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/EditorialReviewsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CollectionSummaryModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CollectionParentModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CollectionItemModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CollectionModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CollectionsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CustomerReviewsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/TrackModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/DiscModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/TracksModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/AccessoryModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/AccessoriesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/DecimalWithUnitsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ImageModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ImageSetModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CatalogNumberListModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CreatorModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/EANListModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemDimensionsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/LanguageModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/LanguagesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/PackageDimensionsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/UPCListModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemAttributesModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/StringWithUnitsModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemSearchResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLookupResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodeLookupResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarityLookupResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartGetResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartAddResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartCreateResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartModifyResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartClearResponseMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemSearchRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/ItemLookupRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/BrowseNodeLookupRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/SimilarityLookupRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartGetRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartAddRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartCreateRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartModifyRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/CartClearRequestMsgModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthScopeEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthTokenModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthProviderErrorEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthScopeEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthTokenModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthProviderErrorEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthScopeEnum.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthTokenModel.js"></script>
    <script src="scripts/AWSECommerceServiceLib/Models/OAuthProviderErrorEnum.js"></script>


    <script src="scripts/AWSECommerceServiceLib/OAuthManager.js"></script>
    <script src="scripts/app.js"></script>

</head>


<body ng-app="OAuthTest">
    <div ng-controller="oauthClientController">
         <input type="button" value = "Authorize Client" ng-click="authorizeClient()">
    </div>
</body>

</html>
```




# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [AWSECommerceServiceBindingController](#awse_commerce_service_binding_controller)
* [OAuthAuthorizationController](#o_auth_authorization_controller)

## <a name="awse_commerce_service_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AWSECommerceServiceBindingController") AWSECommerceServiceBindingController

### Get singleton instance

The singleton instance of the ``` AWSECommerceServiceBindingController ``` class can be accessed via Dependency Injection.

```js
	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartClearResponseMsgModel, CartModifyResponseMsgModel, CartCreateResponseMsgModel, CartAddResponseMsgModel, CartGetResponseMsgModel, SimilarityLookupResponseMsgModel, BrowseNodeLookupResponseMsgModel, ItemLookupResponseMsgModel, ItemSearchResponseMsgModel){
	});
```

### <a name="create_cart_clear"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear") createCartClear

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartClear(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartClearResponseMsgModel){
        var body = new CartClearRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartClear(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 410 | new |




### <a name="create_cart_modify"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify") createCartModify

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartModify(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartModifyResponseMsgModel){
        var body = new CartModifyRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartModify(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_create"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate") createCartCreate

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartCreate(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartCreateResponseMsgModel){
        var body = new CartCreateRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartCreate(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_add"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd") createCartAdd

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartAdd(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartAddResponseMsgModel){
        var body = new CartAddRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartAdd(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_get"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet") createCartGet

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartGet(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartGetResponseMsgModel){
        var body = new CartGetRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartGet(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_similarity_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup") createSimilarityLookup

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createSimilarityLookup(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, SimilarityLookupResponseMsgModel){
        var body = new SimilarityLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createSimilarityLookup(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_browse_node_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup") createBrowseNodeLookup

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createBrowseNodeLookup(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, BrowseNodeLookupResponseMsgModel){
        var body = new BrowseNodeLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createBrowseNodeLookup(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup") createItemLookup

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemLookup(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemLookupResponseMsgModel){
        var body = new ItemLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemLookup(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_search"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch") createItemSearch

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemSearch(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemSearchResponseMsgModel){
        var body = new ItemSearchRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemSearch(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_search9"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch9") createItemSearch9

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemSearch9(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemSearchResponseMsgModel){
        var body = new ItemSearchRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemSearch9(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_lookup10"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup10") createItemLookup10

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemLookup10(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemLookupResponseMsgModel){
        var body = new ItemLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemLookup10(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_browse_node_lookup11"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup11") createBrowseNodeLookup11

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createBrowseNodeLookup11(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, BrowseNodeLookupResponseMsgModel){
        var body = new BrowseNodeLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createBrowseNodeLookup11(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_similarity_lookup12"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup12") createSimilarityLookup12

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createSimilarityLookup12(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, SimilarityLookupResponseMsgModel){
        var body = new SimilarityLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createSimilarityLookup12(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_get13"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet13") createCartGet13

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartGet13(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartGetResponseMsgModel){
        var body = new CartGetRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartGet13(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_add14"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd14") createCartAdd14

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartAdd14(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartAddResponseMsgModel){
        var body = new CartAddRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartAdd14(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_create15"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate15") createCartCreate15

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartCreate15(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartCreateResponseMsgModel){
        var body = new CartCreateRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartCreate15(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_modify16"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify16") createCartModify16

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartModify16(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartModifyResponseMsgModel){
        var body = new CartModifyRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartModify16(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_clear17"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear17") createCartClear17

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartClear17(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartClearResponseMsgModel){
        var body = new CartClearRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartClear17(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_search18"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch18") createItemSearch18

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemSearch18(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemSearchResponseMsgModel){
        var body = new ItemSearchRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemSearch18(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_lookup19"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup19") createItemLookup19

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemLookup19(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemLookupResponseMsgModel){
        var body = new ItemLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemLookup19(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_browse_node_lookup20"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup20") createBrowseNodeLookup20

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createBrowseNodeLookup20(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, BrowseNodeLookupResponseMsgModel){
        var body = new BrowseNodeLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createBrowseNodeLookup20(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_similarity_lookup21"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup21") createSimilarityLookup21

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createSimilarityLookup21(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, SimilarityLookupResponseMsgModel){
        var body = new SimilarityLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createSimilarityLookup21(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_get22"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet22") createCartGet22

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartGet22(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartGetResponseMsgModel){
        var body = new CartGetRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartGet22(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_add23"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd23") createCartAdd23

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartAdd23(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartAddResponseMsgModel){
        var body = new CartAddRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartAdd23(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_create24"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate24") createCartCreate24

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartCreate24(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartCreateResponseMsgModel){
        var body = new CartCreateRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartCreate24(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_modify25"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify25") createCartModify25

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartModify25(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartModifyResponseMsgModel){
        var body = new CartModifyRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartModify25(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_clear26"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear26") createCartClear26

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartClear26(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartClearResponseMsgModel){
        var body = new CartClearRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartClear26(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_search27"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch27") createItemSearch27

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemSearch27(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemSearchResponseMsgModel){
        var body = new ItemSearchRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemSearch27(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_lookup28"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup28") createItemLookup28

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemLookup28(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemLookupResponseMsgModel){
        var body = new ItemLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemLookup28(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_browse_node_lookup29"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup29") createBrowseNodeLookup29

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createBrowseNodeLookup29(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, BrowseNodeLookupResponseMsgModel){
        var body = new BrowseNodeLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createBrowseNodeLookup29(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_similarity_lookup30"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup30") createSimilarityLookup30

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createSimilarityLookup30(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, SimilarityLookupResponseMsgModel){
        var body = new SimilarityLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createSimilarityLookup30(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_get31"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet31") createCartGet31

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartGet31(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartGetResponseMsgModel){
        var body = new CartGetRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartGet31(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_add32"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd32") createCartAdd32

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartAdd32(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartAddResponseMsgModel){
        var body = new CartAddRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartAdd32(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_create33"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate33") createCartCreate33

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartCreate33(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartCreateResponseMsgModel){
        var body = new CartCreateRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartCreate33(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_modify34"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify34") createCartModify34

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartModify34(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartModifyResponseMsgModel){
        var body = new CartModifyRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartModify34(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_clear35"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear35") createCartClear35

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartClear35(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartClearResponseMsgModel){
        var body = new CartClearRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartClear35(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_search36"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch36") createItemSearch36

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemSearch36(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemSearchResponseMsgModel){
        var body = new ItemSearchRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemSearch36(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_lookup37"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup37") createItemLookup37

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemLookup37(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemLookupResponseMsgModel){
        var body = new ItemLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemLookup37(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_browse_node_lookup38"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup38") createBrowseNodeLookup38

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createBrowseNodeLookup38(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, BrowseNodeLookupResponseMsgModel){
        var body = new BrowseNodeLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createBrowseNodeLookup38(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_similarity_lookup39"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup39") createSimilarityLookup39

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createSimilarityLookup39(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, SimilarityLookupResponseMsgModel){
        var body = new SimilarityLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createSimilarityLookup39(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_get40"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet40") createCartGet40

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartGet40(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartGetResponseMsgModel){
        var body = new CartGetRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartGet40(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_add41"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd41") createCartAdd41

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartAdd41(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartAddResponseMsgModel){
        var body = new CartAddRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartAdd41(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_create42"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate42") createCartCreate42

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartCreate42(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartCreateResponseMsgModel){
        var body = new CartCreateRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartCreate42(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_modify43"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify43") createCartModify43

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartModify43(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartModifyResponseMsgModel){
        var body = new CartModifyRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartModify43(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_clear44"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear44") createCartClear44

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartClear44(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartClearResponseMsgModel){
        var body = new CartClearRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartClear44(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_search45"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch45") createItemSearch45

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemSearch45(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemSearchResponseMsgModel){
        var body = new ItemSearchRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemSearch45(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_lookup46"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup46") createItemLookup46

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemLookup46(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemLookupResponseMsgModel){
        var body = new ItemLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemLookup46(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_browse_node_lookup47"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup47") createBrowseNodeLookup47

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createBrowseNodeLookup47(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, BrowseNodeLookupResponseMsgModel){
        var body = new BrowseNodeLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createBrowseNodeLookup47(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_similarity_lookup48"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup48") createSimilarityLookup48

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createSimilarityLookup48(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, SimilarityLookupResponseMsgModel){
        var body = new SimilarityLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createSimilarityLookup48(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_get49"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet49") createCartGet49

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartGet49(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartGetResponseMsgModel){
        var body = new CartGetRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartGet49(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_add50"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd50") createCartAdd50

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartAdd50(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartAddResponseMsgModel){
        var body = new CartAddRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartAdd50(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_create51"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate51") createCartCreate51

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartCreate51(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartCreateResponseMsgModel){
        var body = new CartCreateRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartCreate51(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_modify52"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify52") createCartModify52

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartModify52(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartModifyResponseMsgModel){
        var body = new CartModifyRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartModify52(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_clear53"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear53") createCartClear53

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartClear53(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartClearResponseMsgModel){
        var body = new CartClearRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartClear53(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_search54"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch54") createItemSearch54

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemSearch54(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemSearchResponseMsgModel){
        var body = new ItemSearchRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemSearch54(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_lookup55"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup55") createItemLookup55

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemLookup55(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemLookupResponseMsgModel){
        var body = new ItemLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemLookup55(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_browse_node_lookup56"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup56") createBrowseNodeLookup56

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createBrowseNodeLookup56(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, BrowseNodeLookupResponseMsgModel){
        var body = new BrowseNodeLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createBrowseNodeLookup56(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_similarity_lookup57"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup57") createSimilarityLookup57

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createSimilarityLookup57(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, SimilarityLookupResponseMsgModel){
        var body = new SimilarityLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createSimilarityLookup57(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_get58"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet58") createCartGet58

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartGet58(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartGetResponseMsgModel){
        var body = new CartGetRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartGet58(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_add59"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd59") createCartAdd59

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartAdd59(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartAddResponseMsgModel){
        var body = new CartAddRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartAdd59(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_create60"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate60") createCartCreate60

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartCreate60(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartCreateResponseMsgModel){
        var body = new CartCreateRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartCreate60(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_modify61"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify61") createCartModify61

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartModify61(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartModifyResponseMsgModel){
        var body = new CartModifyRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartModify61(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_clear62"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear62") createCartClear62

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartClear62(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartClearResponseMsgModel){
        var body = new CartClearRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartClear62(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_search63"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch63") createItemSearch63

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemSearch63(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemSearchResponseMsgModel){
        var body = new ItemSearchRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemSearch63(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_lookup64"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup64") createItemLookup64

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemLookup64(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemLookupResponseMsgModel){
        var body = new ItemLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemLookup64(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_browse_node_lookup65"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup65") createBrowseNodeLookup65

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createBrowseNodeLookup65(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, BrowseNodeLookupResponseMsgModel){
        var body = new BrowseNodeLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createBrowseNodeLookup65(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_similarity_lookup66"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup66") createSimilarityLookup66

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createSimilarityLookup66(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, SimilarityLookupResponseMsgModel){
        var body = new SimilarityLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createSimilarityLookup66(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_get67"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet67") createCartGet67

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartGet67(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartGetResponseMsgModel){
        var body = new CartGetRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartGet67(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_add68"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd68") createCartAdd68

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartAdd68(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartAddResponseMsgModel){
        var body = new CartAddRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartAdd68(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_create69"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate69") createCartCreate69

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartCreate69(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartCreateResponseMsgModel){
        var body = new CartCreateRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartCreate69(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_modify70"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify70") createCartModify70

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartModify70(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartModifyResponseMsgModel){
        var body = new CartModifyRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartModify70(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_clear71"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear71") createCartClear71

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartClear71(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartClearResponseMsgModel){
        var body = new CartClearRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartClear71(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_search72"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch72") createItemSearch72

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemSearch72(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemSearchResponseMsgModel){
        var body = new ItemSearchRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemSearch72(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_lookup73"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup73") createItemLookup73

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemLookup73(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemLookupResponseMsgModel){
        var body = new ItemLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemLookup73(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_browse_node_lookup74"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup74") createBrowseNodeLookup74

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createBrowseNodeLookup74(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, BrowseNodeLookupResponseMsgModel){
        var body = new BrowseNodeLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createBrowseNodeLookup74(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_similarity_lookup75"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup75") createSimilarityLookup75

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createSimilarityLookup75(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, SimilarityLookupResponseMsgModel){
        var body = new SimilarityLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createSimilarityLookup75(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_get76"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet76") createCartGet76

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartGet76(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartGetResponseMsgModel){
        var body = new CartGetRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartGet76(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_add77"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd77") createCartAdd77

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartAdd77(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartAddResponseMsgModel){
        var body = new CartAddRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartAdd77(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_create78"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate78") createCartCreate78

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartCreate78(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartCreateResponseMsgModel){
        var body = new CartCreateRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartCreate78(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_modify79"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify79") createCartModify79

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartModify79(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartModifyResponseMsgModel){
        var body = new CartModifyRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartModify79(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_clear80"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear80") createCartClear80

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartClear80(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartClearResponseMsgModel){
        var body = new CartClearRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartClear80(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_search81"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch81") createItemSearch81

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemSearch81(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemSearchResponseMsgModel){
        var body = new ItemSearchRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemSearch81(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_lookup82"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup82") createItemLookup82

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemLookup82(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemLookupResponseMsgModel){
        var body = new ItemLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemLookup82(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_browse_node_lookup83"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup83") createBrowseNodeLookup83

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createBrowseNodeLookup83(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, BrowseNodeLookupResponseMsgModel){
        var body = new BrowseNodeLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createBrowseNodeLookup83(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_similarity_lookup84"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup84") createSimilarityLookup84

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createSimilarityLookup84(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, SimilarityLookupResponseMsgModel){
        var body = new SimilarityLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createSimilarityLookup84(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_get85"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet85") createCartGet85

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartGet85(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartGetResponseMsgModel){
        var body = new CartGetRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartGet85(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_add86"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd86") createCartAdd86

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartAdd86(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartAddResponseMsgModel){
        var body = new CartAddRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartAdd86(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_create87"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate87") createCartCreate87

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartCreate87(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartCreateResponseMsgModel){
        var body = new CartCreateRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartCreate87(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_modify88"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify88") createCartModify88

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartModify88(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartModifyResponseMsgModel){
        var body = new CartModifyRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartModify88(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_clear89"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear89") createCartClear89

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartClear89(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartClearResponseMsgModel){
        var body = new CartClearRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartClear89(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_search90"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemSearch90") createItemSearch90

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemSearch90(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemSearchResponseMsgModel){
        var body = new ItemSearchRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemSearch90(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_item_lookup91"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createItemLookup91") createItemLookup91

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createItemLookup91(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, ItemLookupResponseMsgModel){
        var body = new ItemLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createItemLookup91(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_browse_node_lookup92"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createBrowseNodeLookup92") createBrowseNodeLookup92

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createBrowseNodeLookup92(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, BrowseNodeLookupResponseMsgModel){
        var body = new BrowseNodeLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createBrowseNodeLookup92(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_similarity_lookup93"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createSimilarityLookup93") createSimilarityLookup93

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createSimilarityLookup93(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, SimilarityLookupResponseMsgModel){
        var body = new SimilarityLookupRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createSimilarityLookup93(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_get94"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartGet94") createCartGet94

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartGet94(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartGetResponseMsgModel){
        var body = new CartGetRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartGet94(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_add95"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartAdd95") createCartAdd95

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartAdd95(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartAddResponseMsgModel){
        var body = new CartAddRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartAdd95(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_create96"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartCreate96") createCartCreate96

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartCreate96(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartCreateResponseMsgModel){
        var body = new CartCreateRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartCreate96(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_modify97"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartModify97") createCartModify97

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartModify97(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartModifyResponseMsgModel){
        var body = new CartModifyRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartModify97(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



### <a name="create_cart_clear98"></a>![Method: ](https://apidocs.io/img/method.png ".AWSECommerceServiceBindingController.createCartClear98") createCartClear98

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```javascript
function createCartClear98(body)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```javascript


	app.controller("testController", function($scope, AWSECommerceServiceBindingController, CartClearResponseMsgModel){
        var body = new CartClearRequestMsgModel({"key":"value"});


		var result = AWSECommerceServiceBindingController.createCartClear98(body);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```



[Back to List of Controllers](#list_of_controllers)

## <a name="o_auth_authorization_controller"></a>![Class: ](https://apidocs.io/img/class.png ".OAuthAuthorizationController") OAuthAuthorizationController

### Get singleton instance

The singleton instance of the ``` OAuthAuthorizationController ``` class can be accessed via Dependency Injection.

```js
	app.controller("testController", function($scope, OAuthAuthorizationController, OAuthTokenModel){
	});
```

### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken") createRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```javascript
function createRequestToken(input, formParams)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```javascript


	app.controller("testController", function($scope, OAuthAuthorizationController, OAuthTokenModel){
        var input = [];
        input['authorization'] = 'Authorization';
        input['code'] = 'code';
        input['redirectUri'] = redirect_uri;
    // key-value map for optional form parameters
    var formParams = [];


		var result = OAuthAuthorizationController.createRequestToken(input, formParams);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken") createRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```javascript
function createRefreshToken(input, formParams)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```javascript


	app.controller("testController", function($scope, OAuthAuthorizationController, OAuthTokenModel){
        var input = [];
        input['authorization'] = 'Authorization';
        input['refreshToken'] = refresh_token;
        input['scope'] = 'scope';
    // key-value map for optional form parameters
    var formParams = [];


		var result = OAuthAuthorizationController.createRefreshToken(input, formParams);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken") createRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```javascript
function createRequestToken(input, formParams)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```javascript


	app.controller("testController", function($scope, OAuthAuthorizationController, OAuthTokenModel){
        var input = [];
        input['authorization'] = 'Authorization';
        input['code'] = 'code';
        input['redirectUri'] = redirect_uri;
    // key-value map for optional form parameters
    var formParams = [];


		var result = OAuthAuthorizationController.createRequestToken(input, formParams);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken") createRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```javascript
function createRefreshToken(input, formParams)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```javascript


	app.controller("testController", function($scope, OAuthAuthorizationController, OAuthTokenModel){
        var input = [];
        input['authorization'] = 'Authorization';
        input['refreshToken'] = refresh_token;
        input['scope'] = 'scope';
    // key-value map for optional form parameters
    var formParams = [];


		var result = OAuthAuthorizationController.createRefreshToken(input, formParams);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRequestToken") createRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```javascript
function createRequestToken(input, formParams)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```javascript


	app.controller("testController", function($scope, OAuthAuthorizationController, OAuthTokenModel){
        var input = [];
        input['authorization'] = 'Authorization';
        input['code'] = 'code';
        input['redirectUri'] = redirect_uri;
    // key-value map for optional form parameters
    var formParams = [];


		var result = OAuthAuthorizationController.createRequestToken(input, formParams);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".OAuthAuthorizationController.createRefreshToken") createRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```javascript
function createRefreshToken(input, formParams)
```
#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |



#### Example Usage

```javascript


	app.controller("testController", function($scope, OAuthAuthorizationController, OAuthTokenModel){
        var input = [];
        input['authorization'] = 'Authorization';
        input['refreshToken'] = refresh_token;
        input['scope'] = 'scope';
    // key-value map for optional form parameters
    var formParams = [];


		var result = OAuthAuthorizationController.createRefreshToken(input, formParams);
        //Function call returns a promise
        result.then(function(success){
			//success case
			//getting context of response
			console.log(success.getContext());
		},function(err){
			//failure case
		});

	});
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |




[Back to List of Controllers](#list_of_controllers)



