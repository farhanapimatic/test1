# Getting started

## How to Build

The generated code uses a few Maven dependencies e.g., Jackson, UniRest,
and Apache HttpClient. The reference to these dependencies is already
added in the pom.xml file will be installed automatically. Therefore,
you will need internet access for a successful build.

* In order to open the client library in Eclipse click on ``` File -> Import ```.

![Importing SDK into Eclipse - Step 1](https://apidocs.io/illustration/java?step=import0&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

* In the import dialog, select ``` Existing Java Project ``` and click ``` Next ```.

![Importing SDK into Eclipse - Step 2](https://apidocs.io/illustration/java?step=import1&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

* Browse to locate the folder containing the source code. Select the detected location of the project and click ``` Finish ```.

![Importing SDK into Eclipse - Step 3](https://apidocs.io/illustration/java?step=import2&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

* Upon successful import, the project will be automatically built by Eclipse after automatically resolving the dependencies.

![Importing SDK into Eclipse - Step 4](https://apidocs.io/illustration/java?step=import3&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

## How to Use

The following section explains how to use the PurchaseOrderService library in a new console project.

### 1. Starting a new project

For starting a new project, click the menu command ``` File > New > Project ```.

![Add a new project in Eclipse](https://apidocs.io/illustration/java?step=createNewProject0&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Next, choose ``` Maven > Maven Project ```and click ``` Next ```.

![Create a new Maven Project - Step 1](https://apidocs.io/illustration/java?step=createNewProject1&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Here, make sure to use the current workspace by choosing ``` Use default Workspace location ```, as shown in the picture below and click ``` Next ```.

![Create a new Maven Project - Step 2](https://apidocs.io/illustration/java?step=createNewProject2&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Following this, select the *quick start* project type to create a simple project with an existing class and a ``` main ``` method. To do this, choose ``` maven-archetype-quickstart ``` item from the list and click ``` Next ```.

![Create a new Maven Project - Step 3](https://apidocs.io/illustration/java?step=createNewProject3&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

In the last step, provide a ``` Group Id ``` and ``` Artifact Id ``` as shown in the picture below and click ``` Finish ```.

![Create a new Maven Project - Step 4](https://apidocs.io/illustration/java?step=createNewProject4&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

### 2. Add reference of the library project

The created Maven project manages its dependencies using its ``` pom.xml ``` file. In order to add a dependency on the *PurchaseOrderServiceLib* client library, double click on the ``` pom.xml ``` file in the ``` Package Explorer ```. Opening the ``` pom.xml ``` file will render a graphical view on the cavas. Here, switch to the ``` Dependencies ``` tab and click the ``` Add ``` button as shown in the picture below.

![Adding dependency to the client library - Step 1](https://apidocs.io/illustration/java?step=testProject0&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Clicking the ``` Add ``` button will open a dialog where you need to specify PurchaseOrderService in ``` Group Id ``` and PurchaseOrderServiceLib in the ``` Artifact Id ``` fields. Once added click ``` OK ```. Save the ``` pom.xml ``` file.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/java?step=testProject1&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

### 3. Write sample code

Once the ``` SimpleConsoleApp ``` is created, a file named ``` App.java ``` will be visible in the *Package Explorer* with a ``` main ``` method. This is the entry point for the execution of the created project.
Here, you can add code to initialize the client library and instantiate a *Controller* class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/java?step=testProject2&workspaceFolder=PurchaseOrderService-Java&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

## How to Test

The generated code and the server can be tested using automatically generated test cases. 
JUnit is used as the testing framework and test runner.

In Eclipse, for running the tests do the following:

1. Select the project *PurchaseOrderServiceLib* from the package explorer.
2. Select "Run -> Run as -> JUnit Test" or use "Alt + Shift + X" followed by "T" to run the Tests.

## Initialization

### 

API client can be initialized as following.

```java

PurchaseOrderServiceClient client = new PurchaseOrderServiceClient();
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [PurchaseOrderBindingController](#purchase_order_binding_controller)

## <a name="purchase_order_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png "org.example.controllers.PurchaseOrderBindingController") PurchaseOrderBindingController

### Get singleton instance

The singleton instance of the ``` PurchaseOrderBindingController ``` class can be accessed from the API Client.

```java
PurchaseOrderBindingController purchaseOrderBinding = client.getPurchaseOrderBinding();
```

### <a name="create_order_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.PurchaseOrderBindingController.createOrderAsync") createOrderAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createOrderAsync(
        final PurchaseOrder body,
        final APICallBack<OrderConfirmation> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    PurchaseOrder body = new PurchaseOrder();
    // Invoking the API call with sample inputs
    purchaseOrderBinding.createOrderAsync(body, new APICallBack<OrderConfirmation>() {
        public void onSuccess(HttpContext context, OrderConfirmation response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```


### <a name="create_order_status_async"></a>![Method: ](https://apidocs.io/img/method.png "org.example.controllers.PurchaseOrderBindingController.createOrderStatusAsync") createOrderStatusAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createOrderStatusAsync(
        final GetOrderStatus body,
        final APICallBack<GetOrderStatusResponse> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    GetOrderStatus body = new GetOrderStatus();
    // Invoking the API call with sample inputs
    purchaseOrderBinding.createOrderStatusAsync(body, new APICallBack<GetOrderStatusResponse>() {
        public void onSuccess(HttpContext context, GetOrderStatusResponse response) {
            // TODO success callback handler
        }
        public void onFailure(HttpContext context, Throwable error) {
            // TODO failure callback handler
        }
    });
} catch(JsonProcessingException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
}
```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 500 | Error in retrieving response |



[Back to List of Controllers](#list_of_controllers)



