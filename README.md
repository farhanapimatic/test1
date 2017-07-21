# Getting started

WSDL File for HelloService

## How to Build

The generated code uses a few Gradle dependencies e.g., Jackson, Volley,
and Apache HttpClient. The reference to these dependencies is already
added in the build.gradle file will be installed automatically. Therefore,
you will need internet access for a successful build.

* In order to open the client library in Android Studio click on ``` Open an Existing Android Project ```.

![Importing SDK into Android Studio - Step 1](https://apidocs.io/illustration/android?step=import1&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

* Browse to locate the folder containing the source code. Select the location of the HelloService gradle project and click ``` Ok ```.

![Importing SDK into Android Studio - Step 2](https://apidocs.io/illustration/android?step=import2&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

* Upon successful import, the project can be built by clicking on ``` Build > Make Project ``` or  pressing ``` Ctrl + F9 ```.

![Importing SDK into Android Studio - Step 3](https://apidocs.io/illustration/android?step=import3&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

## How to Use

The following section explains how to use the HelloService library in a new project.

### 1. Starting a new project 

For starting a new project, click on ``` Create New Android Studio Project ```.

![Add a new project in Android Studio - Step 1](https://apidocs.io/illustration/android?step=createNewProject0&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

Here, configure the new project by adding the name, domain and location of the sample application followed by clicking ``` Next ```.

![Create a new Android Studio Project - Step 2](https://apidocs.io/illustration/android?step=createNewProject1&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

Following this, select the ``` Phone and Tablet ```` option as shown in the illustration below and click ``` Next ```. 

![Create a new Android Studio Project - Step 3](https://apidocs.io/illustration/android?step=createNewProject2&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

In the following step, choose ``` Empty Activity ``` as the activity type and click ``` Next ```.

![Create a new Android Studio Project - Step 4](https://apidocs.io/illustration/android?step=createNewProject3&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

In this step, provide an ``` Activity Name ``` and ``` Layout Name ``` and click ``` Finish ```.  This would take you to the newly created project.

![Create a new Android Studio Project - Step 4](https://apidocs.io/illustration/android?step=createNewProject4&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

### 2. Add reference of the library project

In order to add a dependency to this sample application, click on the android button shown in the project explorer on the left side as shown in the picture. Click on ``` Project ``` in the drop down that emerges.  

![Adding dependency to the client library - Step 1](https://apidocs.io/illustration/android?step=testProject0&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

Right click the sample application in the project explorer and click on ``` New > Module ```  as shown in the picture.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/android?step=testProject1&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

Choose ``` Import Gradle Project ``` and click ``` Next ```.

![Adding dependency to the client library - Step 3](https://apidocs.io/illustration/android?step=testProject2&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

Click on ``` Finish ``` which would take you back to the sample application with the refernced SDK. 

![Adding dependency to the client library - Step 4](https://apidocs.io/illustration/android?step=testProject3&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

In the following step naigate to the ``` SampleApplication >  app > build.gradle ``` file and add the following line ```compile project(path: ':HelloService')``` to the dependencies section as shown in the illustration below.

![Adding dependency to the client library - Step 5](https://apidocs.io/illustration/android?step=testProject4&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

Finally, press ``` Sync Now ``` in the warning visible as shown in the picture below.

![Adding dependency to the client library - Step 6](https://apidocs.io/illustration/android?step=testProject5&workspaceFolder=HelloService&workspaceName=HelloService&projectName=HelloServiceLib&rootNamespace=com.examples.www)

### 3. Write sample code

Once the ``` SampleApplication ``` is created, a file named ``` SampleApplication > app > src > main > java > MainActivity ``` will be visible in the *Project Explorer* with an ``` onCreate ``` method. This is the entry point for the execution of the created project.
Here, you can add code to initialize the client library and instantiate a *Controller* class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

## How to Test

The generated code and the server can be tested using automatically generated test cases. 
JUnit is used as the testing framework and test runner.

In Android Studio, for running the tests do the following:

1. Right click on *SampleApplication > HelloServiceLib > androidTest > java)* from the project explorer.
2. Select "Run All Tests" or use "Ctrl + Shift + F10" to run the Tests.

## Initialization

### 

API client can be initialized as following. The `appContext` being passed is the Android application [`Context`](https://developer.android.com/reference/android/content/Context.html).

```java

com.examples.www.Configuration.initialize(appContext);
HelloServiceClient client = new HelloServiceClient();
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [HelloBindingController](#hello_binding_controller)

## <a name="hello_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.examples.www.controllers.HelloBindingController") HelloBindingController

### Get singleton instance

The singleton instance of the ``` HelloBindingController ``` class can be accessed from the API Client.

```java
HelloBindingController helloBinding = client.getHelloBinding();
```

### <a name="create_say_hello_async"></a>![Method: ](https://apidocs.io/img/method.png "com.examples.www.controllers.HelloBindingController.createSayHelloAsync") createSayHelloAsync

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```java
void createSayHelloAsync(
        final SayHelloRequest body,
        final APICallBack<SayHelloResponse> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    SayHelloRequest body = new SayHelloRequest();
    // Invoking the API call with sample inputs
    helloBinding.createSayHelloAsync(body, new APICallBack<SayHelloResponse>() {
        public void onSuccess(HttpContext context, SayHelloResponse response) {
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


[Back to List of Controllers](#list_of_controllers)



