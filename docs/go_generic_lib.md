# Getting started

## How to Build


* In order to successfully build and run your SDK files, you are required to have the following setup in your system:
    * **Go**  (Visit [https://golang.org/doc/install](https://golang.org/doc/install) for more details on how to install Go)
    * **Java VM** Version 8 or later
    * **Eclipse 4.6 (Neon)** or later ([http://www.eclipse.org/neon/](http://www.eclipse.org/neon/))
    * **GoClipse** setup within above installed Eclipse (Follow the instructions at [this link](https://github.com/GoClipse/goclipse/blob/latest/documentation/Installation.md#instructions) to setup GoClipse)
* Ensure that ```GOPATH``` environment variable is set in the system variables. If not, set it to your workspace directory where you will be adding your Go projects.
* The generated code uses unirest-go http library. Therefore, you will need internet access to resolve this dependency. If Go is properly installed and configured, run the following command to pull the dependency:

```Go
go get github.com/apimatic/unirest-go
```

This will install unirest-go in the ```GOPATH``` you specified in the system variables.

Now follow the steps mentioned below to build your SDK:

1. Open eclipse in the Go language perspective and click on the ```Import``` option in ```File``` menu.

![Importing SDK into Eclipse - Step 1](https://apidocs.io/illustration/go?step=import0)

2. Select ```General -> Existing Projects into Workspace``` option from the tree list.

![Importing SDK into Eclipse - Step 2](https://apidocs.io/illustration/go?step=import1)

3. In ```Select root directory```, provide path to the unzipped archive for the generated code. Once the path is set and the Project becomes visible under ```Projects``` click ```Finish```

![Importing SDK into Eclipse - Step 3](https://apidocs.io/illustration/go?step=import2&workspaceFolder=AWSECommerceService-GoLang&projectName=awsecommerceservice_lib)

4. The Go library will be imported and its files will be visible in the Project Explorer

![Importing SDK into Eclipse - Step 4](https://apidocs.io/illustration/go?step=import3&projectName=awsecommerceservice_lib)

## How to Use

The following section explains how to use the AwsecommerceserviceLib library in a new project.

### 1. Add a new Test Project

Create a new project in Eclipse by ```File``` -> ```New``` -> ```Go Project```

![Add a new project in Eclipse](https://apidocs.io/illustration/go?step=createNewProject0)

Name the Project as ```Test``` and click ```Finish```

![Create a new Maven Project - Step 1](https://apidocs.io/illustration/go?step=createNewProject1)

Create a new directory in the ```src``` directory of this project

![Create a new Maven Project - Step 2](https://apidocs.io/illustration/go?step=createNewProject2&projectName=awsecommerceservice_lib)

Name it ```test.com```

![Create a new Maven Project - Step 3](https://apidocs.io/illustration/go?step=createNewProject3&projectName=awsecommerceservice_lib)

Now create a new file inside ```src/test.com```

![Create a new Maven Project - Step 4](https://apidocs.io/illustration/go?step=createNewProject4&projectName=awsecommerceservice_lib)

Name it ```testsdk.go```

![Create a new Maven Project - Step 5](https://apidocs.io/illustration/go?step=createNewProject5&projectName=awsecommerceservice_lib)

In this Go file, you can start adding code to initialize the client library. Sample code to initialize the client library and using its methods is given in the subsequent sections.

### 2. Configure the Test Project

You need to import your generated library in this project in order to make use of its functions. In order to import the library, you can add its path in the ```GOPATH``` for this project. Follow the below steps:

Right click on the project name and click on ```Properties```

![Adding dependency to the client library - Step 1](https://apidocs.io/illustration/go?step=testProject0&projectName=awsecommerceservice_lib)

Choose ```Go Compiler``` from the side menu. Check ```Use project specific settings``` and uncheck ```Use same value as the GOPATH environment variable.```. By default, the GOPATH value from the environment variables will be visible in ```Eclipse GOPATH```. Do not remove this as this points to the unirest dependency.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/go?step=testProject1)

Append the library path to this GOPATH

![Adding dependency to the client library - Step 3](https://apidocs.io/illustration/go?step=testProject2&workspaceFolder=AWSECommerceService-GoLang)

Once the path is appended, click on ```OK```

### 3. Build the Test Project

Right click on the project name and click on ```Build Project```

![Build Project](https://apidocs.io/illustration/go?step=buildProject&projectName=awsecommerceservice_lib)

### 4. Run the Test Project

If the build is successful, right click on your Go file and click on ```Run As``` -> ```Go Application```

![Run Project](https://apidocs.io/illustration/go?step=runProject&projectName=awsecommerceservice_lib)

## Initialization

### Authentication
In order to setup authentication of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| aFIeyt | TODO: add a description |
| b | TODO: add a description |
| c | TODO: add a description |
| oAuthClientId | OAuth 2 Client ID |
| oAuthClientSecret | OAuth 2 Client Secret |
| oAuthRedirectUri | OAuth 2 Redirection endpoint or Callback Uri |


To configure these for your generated code, open the file "Configuration.go" and edit it's contents.


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [awsecommerceservicebinding_pkg](#awsecommerceservicebinding_pkg)
* [oauthauthorization_pkg](#oauthauthorization_pkg)

## <a name="awsecommerceservicebinding_pkg"></a>![Class: ](https://apidocs.io/img/class.png ".awsecommerceservicebinding_pkg") awsecommerceservicebinding_pkg

### Get instance

Factory for the ``` AWSECOMMERCESERVICEBINDING ``` interface can be accessed from the package awsecommerceservicebinding_pkg.

```go
aWSECommerceServiceBinding := awsecommerceservicebinding_pkg.NewAWSECOMMERCESERVICEBINDING()
```

### <a name="create_cart_clear"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartClear") CreateCartClear

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartClear(body *models_pkg.CartClearRequestMsgModel)(*models_pkg.CartClearResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartClearRequestMsgModel

var result *models_pkg.CartClearResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartClear(body)

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 410 | new |



### <a name="create_cart_modify"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartModify") CreateCartModify

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartModify(body *models_pkg.CartModifyRequestMsgModel)(*models_pkg.CartModifyResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartModifyRequestMsgModel

var result *models_pkg.CartModifyResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartModify(body)

```


### <a name="create_cart_create"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartCreate") CreateCartCreate

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartCreate(body *models_pkg.CartCreateRequestMsgModel)(*models_pkg.CartCreateResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartCreateRequestMsgModel

var result *models_pkg.CartCreateResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartCreate(body)

```


### <a name="create_cart_add"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartAdd") CreateCartAdd

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartAdd(body *models_pkg.CartAddRequestMsgModel)(*models_pkg.CartAddResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartAddRequestMsgModel

var result *models_pkg.CartAddResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartAdd(body)

```


### <a name="create_cart_get"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartGet") CreateCartGet

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartGet(body *models_pkg.CartGetRequestMsgModel)(*models_pkg.CartGetResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartGetRequestMsgModel

var result *models_pkg.CartGetResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartGet(body)

```


### <a name="create_similarity_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateSimilarityLookup") CreateSimilarityLookup

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateSimilarityLookup(body *models_pkg.SimilarityLookupRequestMsgModel)(*models_pkg.SimilarityLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.SimilarityLookupRequestMsgModel

var result *models_pkg.SimilarityLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateSimilarityLookup(body)

```


### <a name="create_browse_node_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateBrowseNodeLookup") CreateBrowseNodeLookup

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateBrowseNodeLookup(body *models_pkg.BrowseNodeLookupRequestMsgModel)(*models_pkg.BrowseNodeLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.BrowseNodeLookupRequestMsgModel

var result *models_pkg.BrowseNodeLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateBrowseNodeLookup(body)

```


### <a name="create_item_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemLookup") CreateItemLookup

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemLookup(body *models_pkg.ItemLookupRequestMsgModel)(*models_pkg.ItemLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemLookupRequestMsgModel

var result *models_pkg.ItemLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemLookup(body)

```


### <a name="create_item_search"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemSearch") CreateItemSearch

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemSearch(body *models_pkg.ItemSearchRequestMsgModel)(*models_pkg.ItemSearchResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemSearchRequestMsgModel

var result *models_pkg.ItemSearchResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemSearch(body)

```


### <a name="create_item_search9"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemSearch9") CreateItemSearch9

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemSearch9(body *models_pkg.ItemSearchRequestMsgModel)(*models_pkg.ItemSearchResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemSearchRequestMsgModel

var result *models_pkg.ItemSearchResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemSearch9(body)

```


### <a name="create_item_lookup10"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemLookup10") CreateItemLookup10

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemLookup10(body *models_pkg.ItemLookupRequestMsgModel)(*models_pkg.ItemLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemLookupRequestMsgModel

var result *models_pkg.ItemLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemLookup10(body)

```


### <a name="create_browse_node_lookup11"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateBrowseNodeLookup11") CreateBrowseNodeLookup11

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateBrowseNodeLookup11(body *models_pkg.BrowseNodeLookupRequestMsgModel)(*models_pkg.BrowseNodeLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.BrowseNodeLookupRequestMsgModel

var result *models_pkg.BrowseNodeLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateBrowseNodeLookup11(body)

```


### <a name="create_similarity_lookup12"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateSimilarityLookup12") CreateSimilarityLookup12

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateSimilarityLookup12(body *models_pkg.SimilarityLookupRequestMsgModel)(*models_pkg.SimilarityLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.SimilarityLookupRequestMsgModel

var result *models_pkg.SimilarityLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateSimilarityLookup12(body)

```


### <a name="create_cart_get13"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartGet13") CreateCartGet13

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartGet13(body *models_pkg.CartGetRequestMsgModel)(*models_pkg.CartGetResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartGetRequestMsgModel

var result *models_pkg.CartGetResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartGet13(body)

```


### <a name="create_cart_add14"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartAdd14") CreateCartAdd14

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartAdd14(body *models_pkg.CartAddRequestMsgModel)(*models_pkg.CartAddResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartAddRequestMsgModel

var result *models_pkg.CartAddResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartAdd14(body)

```


### <a name="create_cart_create15"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartCreate15") CreateCartCreate15

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartCreate15(body *models_pkg.CartCreateRequestMsgModel)(*models_pkg.CartCreateResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartCreateRequestMsgModel

var result *models_pkg.CartCreateResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartCreate15(body)

```


### <a name="create_cart_modify16"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartModify16") CreateCartModify16

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartModify16(body *models_pkg.CartModifyRequestMsgModel)(*models_pkg.CartModifyResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartModifyRequestMsgModel

var result *models_pkg.CartModifyResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartModify16(body)

```


### <a name="create_cart_clear17"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartClear17") CreateCartClear17

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartClear17(body *models_pkg.CartClearRequestMsgModel)(*models_pkg.CartClearResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartClearRequestMsgModel

var result *models_pkg.CartClearResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartClear17(body)

```


### <a name="create_item_search18"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemSearch18") CreateItemSearch18

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemSearch18(body *models_pkg.ItemSearchRequestMsgModel)(*models_pkg.ItemSearchResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemSearchRequestMsgModel

var result *models_pkg.ItemSearchResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemSearch18(body)

```


### <a name="create_item_lookup19"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemLookup19") CreateItemLookup19

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemLookup19(body *models_pkg.ItemLookupRequestMsgModel)(*models_pkg.ItemLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemLookupRequestMsgModel

var result *models_pkg.ItemLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemLookup19(body)

```


### <a name="create_browse_node_lookup20"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateBrowseNodeLookup20") CreateBrowseNodeLookup20

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateBrowseNodeLookup20(body *models_pkg.BrowseNodeLookupRequestMsgModel)(*models_pkg.BrowseNodeLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.BrowseNodeLookupRequestMsgModel

var result *models_pkg.BrowseNodeLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateBrowseNodeLookup20(body)

```


### <a name="create_similarity_lookup21"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateSimilarityLookup21") CreateSimilarityLookup21

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateSimilarityLookup21(body *models_pkg.SimilarityLookupRequestMsgModel)(*models_pkg.SimilarityLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.SimilarityLookupRequestMsgModel

var result *models_pkg.SimilarityLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateSimilarityLookup21(body)

```


### <a name="create_cart_get22"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartGet22") CreateCartGet22

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartGet22(body *models_pkg.CartGetRequestMsgModel)(*models_pkg.CartGetResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartGetRequestMsgModel

var result *models_pkg.CartGetResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartGet22(body)

```


### <a name="create_cart_add23"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartAdd23") CreateCartAdd23

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartAdd23(body *models_pkg.CartAddRequestMsgModel)(*models_pkg.CartAddResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartAddRequestMsgModel

var result *models_pkg.CartAddResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartAdd23(body)

```


### <a name="create_cart_create24"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartCreate24") CreateCartCreate24

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartCreate24(body *models_pkg.CartCreateRequestMsgModel)(*models_pkg.CartCreateResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartCreateRequestMsgModel

var result *models_pkg.CartCreateResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartCreate24(body)

```


### <a name="create_cart_modify25"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartModify25") CreateCartModify25

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartModify25(body *models_pkg.CartModifyRequestMsgModel)(*models_pkg.CartModifyResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartModifyRequestMsgModel

var result *models_pkg.CartModifyResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartModify25(body)

```


### <a name="create_cart_clear26"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartClear26") CreateCartClear26

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartClear26(body *models_pkg.CartClearRequestMsgModel)(*models_pkg.CartClearResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartClearRequestMsgModel

var result *models_pkg.CartClearResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartClear26(body)

```


### <a name="create_item_search27"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemSearch27") CreateItemSearch27

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemSearch27(body *models_pkg.ItemSearchRequestMsgModel)(*models_pkg.ItemSearchResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemSearchRequestMsgModel

var result *models_pkg.ItemSearchResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemSearch27(body)

```


### <a name="create_item_lookup28"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemLookup28") CreateItemLookup28

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemLookup28(body *models_pkg.ItemLookupRequestMsgModel)(*models_pkg.ItemLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemLookupRequestMsgModel

var result *models_pkg.ItemLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemLookup28(body)

```


### <a name="create_browse_node_lookup29"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateBrowseNodeLookup29") CreateBrowseNodeLookup29

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateBrowseNodeLookup29(body *models_pkg.BrowseNodeLookupRequestMsgModel)(*models_pkg.BrowseNodeLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.BrowseNodeLookupRequestMsgModel

var result *models_pkg.BrowseNodeLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateBrowseNodeLookup29(body)

```


### <a name="create_similarity_lookup30"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateSimilarityLookup30") CreateSimilarityLookup30

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateSimilarityLookup30(body *models_pkg.SimilarityLookupRequestMsgModel)(*models_pkg.SimilarityLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.SimilarityLookupRequestMsgModel

var result *models_pkg.SimilarityLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateSimilarityLookup30(body)

```


### <a name="create_cart_get31"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartGet31") CreateCartGet31

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartGet31(body *models_pkg.CartGetRequestMsgModel)(*models_pkg.CartGetResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartGetRequestMsgModel

var result *models_pkg.CartGetResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartGet31(body)

```


### <a name="create_cart_add32"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartAdd32") CreateCartAdd32

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartAdd32(body *models_pkg.CartAddRequestMsgModel)(*models_pkg.CartAddResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartAddRequestMsgModel

var result *models_pkg.CartAddResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartAdd32(body)

```


### <a name="create_cart_create33"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartCreate33") CreateCartCreate33

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartCreate33(body *models_pkg.CartCreateRequestMsgModel)(*models_pkg.CartCreateResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartCreateRequestMsgModel

var result *models_pkg.CartCreateResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartCreate33(body)

```


### <a name="create_cart_modify34"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartModify34") CreateCartModify34

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartModify34(body *models_pkg.CartModifyRequestMsgModel)(*models_pkg.CartModifyResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartModifyRequestMsgModel

var result *models_pkg.CartModifyResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartModify34(body)

```


### <a name="create_cart_clear35"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartClear35") CreateCartClear35

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartClear35(body *models_pkg.CartClearRequestMsgModel)(*models_pkg.CartClearResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartClearRequestMsgModel

var result *models_pkg.CartClearResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartClear35(body)

```


### <a name="create_item_search36"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemSearch36") CreateItemSearch36

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemSearch36(body *models_pkg.ItemSearchRequestMsgModel)(*models_pkg.ItemSearchResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemSearchRequestMsgModel

var result *models_pkg.ItemSearchResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemSearch36(body)

```


### <a name="create_item_lookup37"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemLookup37") CreateItemLookup37

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemLookup37(body *models_pkg.ItemLookupRequestMsgModel)(*models_pkg.ItemLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemLookupRequestMsgModel

var result *models_pkg.ItemLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemLookup37(body)

```


### <a name="create_browse_node_lookup38"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateBrowseNodeLookup38") CreateBrowseNodeLookup38

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateBrowseNodeLookup38(body *models_pkg.BrowseNodeLookupRequestMsgModel)(*models_pkg.BrowseNodeLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.BrowseNodeLookupRequestMsgModel

var result *models_pkg.BrowseNodeLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateBrowseNodeLookup38(body)

```


### <a name="create_similarity_lookup39"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateSimilarityLookup39") CreateSimilarityLookup39

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateSimilarityLookup39(body *models_pkg.SimilarityLookupRequestMsgModel)(*models_pkg.SimilarityLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.SimilarityLookupRequestMsgModel

var result *models_pkg.SimilarityLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateSimilarityLookup39(body)

```


### <a name="create_cart_get40"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartGet40") CreateCartGet40

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartGet40(body *models_pkg.CartGetRequestMsgModel)(*models_pkg.CartGetResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartGetRequestMsgModel

var result *models_pkg.CartGetResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartGet40(body)

```


### <a name="create_cart_add41"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartAdd41") CreateCartAdd41

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartAdd41(body *models_pkg.CartAddRequestMsgModel)(*models_pkg.CartAddResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartAddRequestMsgModel

var result *models_pkg.CartAddResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartAdd41(body)

```


### <a name="create_cart_create42"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartCreate42") CreateCartCreate42

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartCreate42(body *models_pkg.CartCreateRequestMsgModel)(*models_pkg.CartCreateResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartCreateRequestMsgModel

var result *models_pkg.CartCreateResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartCreate42(body)

```


### <a name="create_cart_modify43"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartModify43") CreateCartModify43

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartModify43(body *models_pkg.CartModifyRequestMsgModel)(*models_pkg.CartModifyResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartModifyRequestMsgModel

var result *models_pkg.CartModifyResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartModify43(body)

```


### <a name="create_cart_clear44"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartClear44") CreateCartClear44

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartClear44(body *models_pkg.CartClearRequestMsgModel)(*models_pkg.CartClearResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartClearRequestMsgModel

var result *models_pkg.CartClearResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartClear44(body)

```


### <a name="create_item_search45"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemSearch45") CreateItemSearch45

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemSearch45(body *models_pkg.ItemSearchRequestMsgModel)(*models_pkg.ItemSearchResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemSearchRequestMsgModel

var result *models_pkg.ItemSearchResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemSearch45(body)

```


### <a name="create_item_lookup46"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemLookup46") CreateItemLookup46

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemLookup46(body *models_pkg.ItemLookupRequestMsgModel)(*models_pkg.ItemLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemLookupRequestMsgModel

var result *models_pkg.ItemLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemLookup46(body)

```


### <a name="create_browse_node_lookup47"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateBrowseNodeLookup47") CreateBrowseNodeLookup47

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateBrowseNodeLookup47(body *models_pkg.BrowseNodeLookupRequestMsgModel)(*models_pkg.BrowseNodeLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.BrowseNodeLookupRequestMsgModel

var result *models_pkg.BrowseNodeLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateBrowseNodeLookup47(body)

```


### <a name="create_similarity_lookup48"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateSimilarityLookup48") CreateSimilarityLookup48

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateSimilarityLookup48(body *models_pkg.SimilarityLookupRequestMsgModel)(*models_pkg.SimilarityLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.SimilarityLookupRequestMsgModel

var result *models_pkg.SimilarityLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateSimilarityLookup48(body)

```


### <a name="create_cart_get49"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartGet49") CreateCartGet49

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartGet49(body *models_pkg.CartGetRequestMsgModel)(*models_pkg.CartGetResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartGetRequestMsgModel

var result *models_pkg.CartGetResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartGet49(body)

```


### <a name="create_cart_add50"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartAdd50") CreateCartAdd50

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartAdd50(body *models_pkg.CartAddRequestMsgModel)(*models_pkg.CartAddResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartAddRequestMsgModel

var result *models_pkg.CartAddResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartAdd50(body)

```


### <a name="create_cart_create51"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartCreate51") CreateCartCreate51

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartCreate51(body *models_pkg.CartCreateRequestMsgModel)(*models_pkg.CartCreateResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartCreateRequestMsgModel

var result *models_pkg.CartCreateResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartCreate51(body)

```


### <a name="create_cart_modify52"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartModify52") CreateCartModify52

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartModify52(body *models_pkg.CartModifyRequestMsgModel)(*models_pkg.CartModifyResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartModifyRequestMsgModel

var result *models_pkg.CartModifyResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartModify52(body)

```


### <a name="create_cart_clear53"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartClear53") CreateCartClear53

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartClear53(body *models_pkg.CartClearRequestMsgModel)(*models_pkg.CartClearResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartClearRequestMsgModel

var result *models_pkg.CartClearResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartClear53(body)

```


### <a name="create_item_search54"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemSearch54") CreateItemSearch54

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemSearch54(body *models_pkg.ItemSearchRequestMsgModel)(*models_pkg.ItemSearchResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemSearchRequestMsgModel

var result *models_pkg.ItemSearchResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemSearch54(body)

```


### <a name="create_item_lookup55"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemLookup55") CreateItemLookup55

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemLookup55(body *models_pkg.ItemLookupRequestMsgModel)(*models_pkg.ItemLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemLookupRequestMsgModel

var result *models_pkg.ItemLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemLookup55(body)

```


### <a name="create_browse_node_lookup56"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateBrowseNodeLookup56") CreateBrowseNodeLookup56

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateBrowseNodeLookup56(body *models_pkg.BrowseNodeLookupRequestMsgModel)(*models_pkg.BrowseNodeLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.BrowseNodeLookupRequestMsgModel

var result *models_pkg.BrowseNodeLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateBrowseNodeLookup56(body)

```


### <a name="create_similarity_lookup57"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateSimilarityLookup57") CreateSimilarityLookup57

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateSimilarityLookup57(body *models_pkg.SimilarityLookupRequestMsgModel)(*models_pkg.SimilarityLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.SimilarityLookupRequestMsgModel

var result *models_pkg.SimilarityLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateSimilarityLookup57(body)

```


### <a name="create_cart_get58"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartGet58") CreateCartGet58

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartGet58(body *models_pkg.CartGetRequestMsgModel)(*models_pkg.CartGetResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartGetRequestMsgModel

var result *models_pkg.CartGetResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartGet58(body)

```


### <a name="create_cart_add59"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartAdd59") CreateCartAdd59

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartAdd59(body *models_pkg.CartAddRequestMsgModel)(*models_pkg.CartAddResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartAddRequestMsgModel

var result *models_pkg.CartAddResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartAdd59(body)

```


### <a name="create_cart_create60"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartCreate60") CreateCartCreate60

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartCreate60(body *models_pkg.CartCreateRequestMsgModel)(*models_pkg.CartCreateResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartCreateRequestMsgModel

var result *models_pkg.CartCreateResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartCreate60(body)

```


### <a name="create_cart_modify61"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartModify61") CreateCartModify61

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartModify61(body *models_pkg.CartModifyRequestMsgModel)(*models_pkg.CartModifyResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartModifyRequestMsgModel

var result *models_pkg.CartModifyResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartModify61(body)

```


### <a name="create_cart_clear62"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartClear62") CreateCartClear62

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartClear62(body *models_pkg.CartClearRequestMsgModel)(*models_pkg.CartClearResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartClearRequestMsgModel

var result *models_pkg.CartClearResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartClear62(body)

```


### <a name="create_item_search63"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemSearch63") CreateItemSearch63

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemSearch63(body *models_pkg.ItemSearchRequestMsgModel)(*models_pkg.ItemSearchResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemSearchRequestMsgModel

var result *models_pkg.ItemSearchResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemSearch63(body)

```


### <a name="create_item_lookup64"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemLookup64") CreateItemLookup64

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemLookup64(body *models_pkg.ItemLookupRequestMsgModel)(*models_pkg.ItemLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemLookupRequestMsgModel

var result *models_pkg.ItemLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemLookup64(body)

```


### <a name="create_browse_node_lookup65"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateBrowseNodeLookup65") CreateBrowseNodeLookup65

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateBrowseNodeLookup65(body *models_pkg.BrowseNodeLookupRequestMsgModel)(*models_pkg.BrowseNodeLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.BrowseNodeLookupRequestMsgModel

var result *models_pkg.BrowseNodeLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateBrowseNodeLookup65(body)

```


### <a name="create_similarity_lookup66"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateSimilarityLookup66") CreateSimilarityLookup66

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateSimilarityLookup66(body *models_pkg.SimilarityLookupRequestMsgModel)(*models_pkg.SimilarityLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.SimilarityLookupRequestMsgModel

var result *models_pkg.SimilarityLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateSimilarityLookup66(body)

```


### <a name="create_cart_get67"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartGet67") CreateCartGet67

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartGet67(body *models_pkg.CartGetRequestMsgModel)(*models_pkg.CartGetResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartGetRequestMsgModel

var result *models_pkg.CartGetResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartGet67(body)

```


### <a name="create_cart_add68"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartAdd68") CreateCartAdd68

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartAdd68(body *models_pkg.CartAddRequestMsgModel)(*models_pkg.CartAddResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartAddRequestMsgModel

var result *models_pkg.CartAddResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartAdd68(body)

```


### <a name="create_cart_create69"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartCreate69") CreateCartCreate69

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartCreate69(body *models_pkg.CartCreateRequestMsgModel)(*models_pkg.CartCreateResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartCreateRequestMsgModel

var result *models_pkg.CartCreateResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartCreate69(body)

```


### <a name="create_cart_modify70"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartModify70") CreateCartModify70

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartModify70(body *models_pkg.CartModifyRequestMsgModel)(*models_pkg.CartModifyResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartModifyRequestMsgModel

var result *models_pkg.CartModifyResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartModify70(body)

```


### <a name="create_cart_clear71"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartClear71") CreateCartClear71

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartClear71(body *models_pkg.CartClearRequestMsgModel)(*models_pkg.CartClearResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartClearRequestMsgModel

var result *models_pkg.CartClearResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartClear71(body)

```


### <a name="create_item_search72"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemSearch72") CreateItemSearch72

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemSearch72(body *models_pkg.ItemSearchRequestMsgModel)(*models_pkg.ItemSearchResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemSearchRequestMsgModel

var result *models_pkg.ItemSearchResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemSearch72(body)

```


### <a name="create_item_lookup73"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemLookup73") CreateItemLookup73

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemLookup73(body *models_pkg.ItemLookupRequestMsgModel)(*models_pkg.ItemLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemLookupRequestMsgModel

var result *models_pkg.ItemLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemLookup73(body)

```


### <a name="create_browse_node_lookup74"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateBrowseNodeLookup74") CreateBrowseNodeLookup74

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateBrowseNodeLookup74(body *models_pkg.BrowseNodeLookupRequestMsgModel)(*models_pkg.BrowseNodeLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.BrowseNodeLookupRequestMsgModel

var result *models_pkg.BrowseNodeLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateBrowseNodeLookup74(body)

```


### <a name="create_similarity_lookup75"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateSimilarityLookup75") CreateSimilarityLookup75

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateSimilarityLookup75(body *models_pkg.SimilarityLookupRequestMsgModel)(*models_pkg.SimilarityLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.SimilarityLookupRequestMsgModel

var result *models_pkg.SimilarityLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateSimilarityLookup75(body)

```


### <a name="create_cart_get76"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartGet76") CreateCartGet76

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartGet76(body *models_pkg.CartGetRequestMsgModel)(*models_pkg.CartGetResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartGetRequestMsgModel

var result *models_pkg.CartGetResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartGet76(body)

```


### <a name="create_cart_add77"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartAdd77") CreateCartAdd77

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartAdd77(body *models_pkg.CartAddRequestMsgModel)(*models_pkg.CartAddResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartAddRequestMsgModel

var result *models_pkg.CartAddResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartAdd77(body)

```


### <a name="create_cart_create78"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartCreate78") CreateCartCreate78

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartCreate78(body *models_pkg.CartCreateRequestMsgModel)(*models_pkg.CartCreateResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartCreateRequestMsgModel

var result *models_pkg.CartCreateResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartCreate78(body)

```


### <a name="create_cart_modify79"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartModify79") CreateCartModify79

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartModify79(body *models_pkg.CartModifyRequestMsgModel)(*models_pkg.CartModifyResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartModifyRequestMsgModel

var result *models_pkg.CartModifyResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartModify79(body)

```


### <a name="create_cart_clear80"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartClear80") CreateCartClear80

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartClear80(body *models_pkg.CartClearRequestMsgModel)(*models_pkg.CartClearResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartClearRequestMsgModel

var result *models_pkg.CartClearResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartClear80(body)

```


### <a name="create_item_search81"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemSearch81") CreateItemSearch81

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemSearch81(body *models_pkg.ItemSearchRequestMsgModel)(*models_pkg.ItemSearchResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemSearchRequestMsgModel

var result *models_pkg.ItemSearchResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemSearch81(body)

```


### <a name="create_item_lookup82"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemLookup82") CreateItemLookup82

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemLookup82(body *models_pkg.ItemLookupRequestMsgModel)(*models_pkg.ItemLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemLookupRequestMsgModel

var result *models_pkg.ItemLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemLookup82(body)

```


### <a name="create_browse_node_lookup83"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateBrowseNodeLookup83") CreateBrowseNodeLookup83

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateBrowseNodeLookup83(body *models_pkg.BrowseNodeLookupRequestMsgModel)(*models_pkg.BrowseNodeLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.BrowseNodeLookupRequestMsgModel

var result *models_pkg.BrowseNodeLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateBrowseNodeLookup83(body)

```


### <a name="create_similarity_lookup84"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateSimilarityLookup84") CreateSimilarityLookup84

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateSimilarityLookup84(body *models_pkg.SimilarityLookupRequestMsgModel)(*models_pkg.SimilarityLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.SimilarityLookupRequestMsgModel

var result *models_pkg.SimilarityLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateSimilarityLookup84(body)

```


### <a name="create_cart_get85"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartGet85") CreateCartGet85

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartGet85(body *models_pkg.CartGetRequestMsgModel)(*models_pkg.CartGetResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartGetRequestMsgModel

var result *models_pkg.CartGetResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartGet85(body)

```


### <a name="create_cart_add86"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartAdd86") CreateCartAdd86

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartAdd86(body *models_pkg.CartAddRequestMsgModel)(*models_pkg.CartAddResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartAddRequestMsgModel

var result *models_pkg.CartAddResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartAdd86(body)

```


### <a name="create_cart_create87"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartCreate87") CreateCartCreate87

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartCreate87(body *models_pkg.CartCreateRequestMsgModel)(*models_pkg.CartCreateResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartCreateRequestMsgModel

var result *models_pkg.CartCreateResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartCreate87(body)

```


### <a name="create_cart_modify88"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartModify88") CreateCartModify88

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartModify88(body *models_pkg.CartModifyRequestMsgModel)(*models_pkg.CartModifyResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartModifyRequestMsgModel

var result *models_pkg.CartModifyResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartModify88(body)

```


### <a name="create_cart_clear89"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartClear89") CreateCartClear89

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartClear89(body *models_pkg.CartClearRequestMsgModel)(*models_pkg.CartClearResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartClearRequestMsgModel

var result *models_pkg.CartClearResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartClear89(body)

```


### <a name="create_item_search90"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemSearch90") CreateItemSearch90

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemSearch90(body *models_pkg.ItemSearchRequestMsgModel)(*models_pkg.ItemSearchResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemSearchRequestMsgModel

var result *models_pkg.ItemSearchResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemSearch90(body)

```


### <a name="create_item_lookup91"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateItemLookup91") CreateItemLookup91

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateItemLookup91(body *models_pkg.ItemLookupRequestMsgModel)(*models_pkg.ItemLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.ItemLookupRequestMsgModel

var result *models_pkg.ItemLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateItemLookup91(body)

```


### <a name="create_browse_node_lookup92"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateBrowseNodeLookup92") CreateBrowseNodeLookup92

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateBrowseNodeLookup92(body *models_pkg.BrowseNodeLookupRequestMsgModel)(*models_pkg.BrowseNodeLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.BrowseNodeLookupRequestMsgModel

var result *models_pkg.BrowseNodeLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateBrowseNodeLookup92(body)

```


### <a name="create_similarity_lookup93"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateSimilarityLookup93") CreateSimilarityLookup93

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateSimilarityLookup93(body *models_pkg.SimilarityLookupRequestMsgModel)(*models_pkg.SimilarityLookupResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.SimilarityLookupRequestMsgModel

var result *models_pkg.SimilarityLookupResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateSimilarityLookup93(body)

```


### <a name="create_cart_get94"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartGet94") CreateCartGet94

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartGet94(body *models_pkg.CartGetRequestMsgModel)(*models_pkg.CartGetResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartGetRequestMsgModel

var result *models_pkg.CartGetResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartGet94(body)

```


### <a name="create_cart_add95"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartAdd95") CreateCartAdd95

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartAdd95(body *models_pkg.CartAddRequestMsgModel)(*models_pkg.CartAddResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartAddRequestMsgModel

var result *models_pkg.CartAddResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartAdd95(body)

```


### <a name="create_cart_create96"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartCreate96") CreateCartCreate96

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartCreate96(body *models_pkg.CartCreateRequestMsgModel)(*models_pkg.CartCreateResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartCreateRequestMsgModel

var result *models_pkg.CartCreateResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartCreate96(body)

```


### <a name="create_cart_modify97"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartModify97") CreateCartModify97

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartModify97(body *models_pkg.CartModifyRequestMsgModel)(*models_pkg.CartModifyResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartModifyRequestMsgModel

var result *models_pkg.CartModifyResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartModify97(body)

```


### <a name="create_cart_clear98"></a>![Method: ](https://apidocs.io/img/method.png ".awsecommerceservicebinding_pkg.CreateCartClear98") CreateCartClear98

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```go
func (me *AWSECOMMERCESERVICEBINDING_IMPL) CreateCartClear98(body *models_pkg.CartClearRequestMsgModel)(*models_pkg.CartClearResponseMsgModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```go
var body *models_pkg.CartClearRequestMsgModel

var result *models_pkg.CartClearResponseMsgModel
result,_ = aWSECommerceServiceBinding.CreateCartClear98(body)

```


[Back to List of Controllers](#list_of_controllers)

## <a name="oauthauthorization_pkg"></a>![Class: ](https://apidocs.io/img/class.png ".oauthauthorization_pkg") oauthauthorization_pkg

### Get instance

Factory for the ``` OAUTHAUTHORIZATION ``` interface can be accessed from the package oauthauthorization_pkg.

```go
oAuthAuthorization := oauthauthorization_pkg.NewOAUTHAUTHORIZATION()
```

### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRequestToken") CreateRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRequestToken(input *CreateRequestTokenInput, fieldParameters map[string]interface{})(*models_pkg.OAuthTokenModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
collect := new (oauthauthorization_pkg.CreateRequestTokenInput)

authorization := "Authorization"
collect.Authorization = authorization

code := "code"
collect.Code = code

redirectUri := "redirect_uri"
collect.RedirectUri = redirectUri

// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthTokenModel
result,_ = oAuthAuthorization.CreateRequestToken(collect, formParams, )

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRefreshToken") CreateRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRefreshToken(input *CreateRefreshTokenInput, fieldParameters map[string]interface{})(*models_pkg.OAuthTokenModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
collect := new (oauthauthorization_pkg.CreateRefreshTokenInput)

authorization := "Authorization"
collect.Authorization = authorization

refreshToken := "refresh_token"
collect.RefreshToken = refreshToken

scope := "scope"
collect.Scope = scope

// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthTokenModel
result,_ = oAuthAuthorization.CreateRefreshToken(collect, formParams, )

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRequestToken") CreateRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRequestToken(input *CreateRequestTokenInput, fieldParameters map[string]interface{})(*models_pkg.OAuthTokenModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
collect := new (oauthauthorization_pkg.CreateRequestTokenInput)

authorization := "Authorization"
collect.Authorization = authorization

code := "code"
collect.Code = code

redirectUri := "redirect_uri"
collect.RedirectUri = redirectUri

// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthTokenModel
result,_ = oAuthAuthorization.CreateRequestToken(collect, formParams, )

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRefreshToken") CreateRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRefreshToken(input *CreateRefreshTokenInput, fieldParameters map[string]interface{})(*models_pkg.OAuthTokenModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
collect := new (oauthauthorization_pkg.CreateRefreshTokenInput)

authorization := "Authorization"
collect.Authorization = authorization

refreshToken := "refresh_token"
collect.RefreshToken = refreshToken

scope := "scope"
collect.Scope = scope

// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthTokenModel
result,_ = oAuthAuthorization.CreateRefreshToken(collect, formParams, )

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRequestToken") CreateRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRequestToken(input *CreateRequestTokenInput, fieldParameters map[string]interface{})(*models_pkg.OAuthTokenModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
collect := new (oauthauthorization_pkg.CreateRequestTokenInput)

authorization := "Authorization"
collect.Authorization = authorization

code := "code"
collect.Code = code

redirectUri := "redirect_uri"
collect.RedirectUri = redirectUri

// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthTokenModel
result,_ = oAuthAuthorization.CreateRequestToken(collect, formParams, )

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRefreshToken") CreateRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRefreshToken(input *CreateRefreshTokenInput, fieldParameters map[string]interface{})(*models_pkg.OAuthTokenModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
collect := new (oauthauthorization_pkg.CreateRefreshTokenInput)

authorization := "Authorization"
collect.Authorization = authorization

refreshToken := "refresh_token"
collect.RefreshToken = refreshToken

scope := "scope"
collect.Scope = scope

// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthTokenModel
result,_ = oAuthAuthorization.CreateRefreshToken(collect, formParams, )

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRequestToken") CreateRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRequestToken(input *CreateRequestTokenInput, fieldParameters map[string]interface{})(*models_pkg.OAuthTokenModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
collect := new (oauthauthorization_pkg.CreateRequestTokenInput)

authorization := "Authorization"
collect.Authorization = authorization

code := "code"
collect.Code = code

redirectUri := "redirect_uri"
collect.RedirectUri = redirectUri

// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthTokenModel
result,_ = oAuthAuthorization.CreateRequestToken(collect, formParams, )

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRefreshToken") CreateRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRefreshToken(input *CreateRefreshTokenInput, fieldParameters map[string]interface{})(*models_pkg.OAuthTokenModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
collect := new (oauthauthorization_pkg.CreateRefreshTokenInput)

authorization := "Authorization"
collect.Authorization = authorization

refreshToken := "refresh_token"
collect.RefreshToken = refreshToken

scope := "scope"
collect.Scope = scope

// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthTokenModel
result,_ = oAuthAuthorization.CreateRefreshToken(collect, formParams, )

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_request_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRequestToken") CreateRequestToken

> *Tags:*  ``` Skips Authentication ``` 

> Create a new OAuth 2 token.


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRequestToken(input *CreateRequestTokenInput, fieldParameters map[string]interface{})(*models_pkg.OAuthTokenModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| code |  ``` Required ```  | Authorization Code |
| redirectUri |  ``` Required ```  | Redirect Uri |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
collect := new (oauthauthorization_pkg.CreateRequestTokenInput)

authorization := "Authorization"
collect.Authorization = authorization

code := "code"
collect.Code = code

redirectUri := "redirect_uri"
collect.RedirectUri = redirectUri

// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthTokenModel
result,_ = oAuthAuthorization.CreateRequestToken(collect, formParams, )

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



### <a name="create_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".oauthauthorization_pkg.CreateRefreshToken") CreateRefreshToken

> *Tags:*  ``` Skips Authentication ``` 

> Obtain a new access token using a refresh token


```go
func (me *OAUTHAUTHORIZATION_IMPL) CreateRefreshToken(input *CreateRefreshTokenInput, fieldParameters map[string]interface{})(*models_pkg.OAuthTokenModel,error)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| authorization |  ``` Required ```  | Authorization header in Basic auth format |
| refreshToken |  ``` Required ```  | Refresh token |
| scope |  ``` Optional ```  | Requested scopes as a space-delimited list. |
| fieldParameters | ``` Optional ``` | Additional optional form parameters are supported by this method |


#### Example Usage

```go
collect := new (oauthauthorization_pkg.CreateRefreshTokenInput)

authorization := "Authorization"
collect.Authorization = authorization

refreshToken := "refresh_token"
collect.RefreshToken = refreshToken

scope := "scope"
collect.Scope = scope

// key-value map for optional form parameters
	formParams := map[string]interface{}{"key" : "value"}


var result *models_pkg.OAuthTokenModel
result,_ = oAuthAuthorization.CreateRefreshToken(collect, formParams, )

```

#### Errors
 
| Error Code | Error Description |
|------------|-------------------|
| 400 | OAuth 2 provider returned an error. |
| 401 | OAuth 2 provider says client authentication failed. |



[Back to List of Controllers](#list_of_controllers)



