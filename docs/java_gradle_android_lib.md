# Getting started

## How to Build

The generated code uses a few Gradle dependencies e.g., Jackson, Volley,
and Apache HttpClient. The reference to these dependencies is already
added in the build.gradle file will be installed automatically. Therefore,
you will need internet access for a successful build.

* In order to open the client library in Android Studio click on ``` Open an Existing Android Project ```.

![Importing SDK into Android Studio - Step 1](https://apidocs.io/illustration/android?step=import1&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

* Browse to locate the folder containing the source code. Select the location of the PurchaseOrderService gradle project and click ``` Ok ```.

![Importing SDK into Android Studio - Step 2](https://apidocs.io/illustration/android?step=import2&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

* Upon successful import, the project can be built by clicking on ``` Build > Make Project ``` or  pressing ``` Ctrl + F9 ```.

![Importing SDK into Android Studio - Step 3](https://apidocs.io/illustration/android?step=import3&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

## How to Use

The following section explains how to use the PurchaseOrderService library in a new project.

### 1. Starting a new project 

For starting a new project, click on ``` Create New Android Studio Project ```.

![Add a new project in Android Studio - Step 1](https://apidocs.io/illustration/android?step=createNewProject0&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Here, configure the new project by adding the name, domain and location of the sample application followed by clicking ``` Next ```.

![Create a new Android Studio Project - Step 2](https://apidocs.io/illustration/android?step=createNewProject1&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Following this, select the ``` Phone and Tablet ```` option as shown in the illustration below and click ``` Next ```. 

![Create a new Android Studio Project - Step 3](https://apidocs.io/illustration/android?step=createNewProject2&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

In the following step, choose ``` Empty Activity ``` as the activity type and click ``` Next ```.

![Create a new Android Studio Project - Step 4](https://apidocs.io/illustration/android?step=createNewProject3&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

In this step, provide an ``` Activity Name ``` and ``` Layout Name ``` and click ``` Finish ```.  This would take you to the newly created project.

![Create a new Android Studio Project - Step 4](https://apidocs.io/illustration/android?step=createNewProject4&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

### 2. Add reference of the library project

In order to add a dependency to this sample application, click on the android button shown in the project explorer on the left side as shown in the picture. Click on ``` Project ``` in the drop down that emerges.  

![Adding dependency to the client library - Step 1](https://apidocs.io/illustration/android?step=testProject0&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Right click the sample application in the project explorer and click on ``` New > Module ```  as shown in the picture.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/android?step=testProject1&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Choose ``` Import Gradle Project ``` and click ``` Next ```.

![Adding dependency to the client library - Step 3](https://apidocs.io/illustration/android?step=testProject2&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Click on ``` Finish ``` which would take you back to the sample application with the refernced SDK. 

![Adding dependency to the client library - Step 4](https://apidocs.io/illustration/android?step=testProject3&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

In the following step naigate to the ``` SampleApplication >  app > build.gradle ``` file and add the following line ```compile project(path: ':PurchaseOrderService')``` to the dependencies section as shown in the illustration below.

![Adding dependency to the client library - Step 5](https://apidocs.io/illustration/android?step=testProject4&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

Finally, press ``` Sync Now ``` in the warning visible as shown in the picture below.

![Adding dependency to the client library - Step 6](https://apidocs.io/illustration/android?step=testProject5&workspaceFolder=PurchaseOrderService&workspaceName=PurchaseOrderService&projectName=PurchaseOrderServiceLib&rootNamespace=org.example)

### 3. Write sample code

Once the ``` SampleApplication ``` is created, a file named ``` SampleApplication > app > src > main > java > MainActivity ``` will be visible in the *Project Explorer* with an ``` onCreate ``` method. This is the entry point for the execution of the created project.
Here, you can add code to initialize the client library and instantiate a *Controller* class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

## How to Test

The generated code and the server can be tested using automatically generated test cases. 
JUnit is used as the testing framework and test runner.

In Android Studio, for running the tests do the following:

1. Right click on *SampleApplication > PurchaseOrderServiceLib > androidTest > java)* from the project explorer.
2. Select "Run All Tests" or use "Ctrl + Shift + F10" to run the Tests.

## Initialization

### 

API client can be initialized as following. The `appContext` being passed is the Android application [`Context`](https://developer.android.com/reference/android/content/Context.html).

```java

org.example.Configuration.initialize(appContext);
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



