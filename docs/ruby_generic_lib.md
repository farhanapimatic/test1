# Getting started

## How to Build

This client library is a Ruby gem which can be compiled and used in your Ruby and Ruby on Rails project. This library requires a few gems from the RubyGems repository.

1. Open the command line interface or the terminal and navigate to the folder containing the source code.
2. Run ``` gem build purchase_order_service.gemspec ``` to build the gem.
3. Once built, the gem can be installed on the current work environment using ``` gem install purchase_order_service-1.0.0.gem ```

![Building Gem](https://apidocs.io/illustration/ruby?step=buildSDK&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService-Ruby&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.0.0)

## How to Use

The following section explains how to use the PurchaseOrderService Ruby Gem in a new Rails project using RubyMine&trade;. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

### 1. Starting a new project

Close any existing projects in RubyMine&trade; by selecting ``` File -> Close Project ```. Next, click on ``` Create New Project ``` to create a new project from scratch.

![Create a new project in RubyMine](https://apidocs.io/illustration/ruby?step=createNewProject0&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.0.0)

Next, provide ``` TestApp ``` as the project name, choose ``` Rails Application ``` as the project type, and click ``` OK ```.

![Create a new Rails Application in RubyMine - step 1](https://apidocs.io/illustration/ruby?step=createNewProject1&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.0.0)

In the next dialog make sure that correct *Ruby SDK* is being used (minimum 2.0.0) and click ``` OK ```.

![Create a new Rails Application in RubyMine - step 2](https://apidocs.io/illustration/ruby?step=createNewProject2&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.0.0)

This will create a new Rails Application project with an existing set of files and folder.

### 2. Add reference of the gem

In order to use the PurchaseOrderService gem in the new project we must add a gem reference. Locate the ```Gemfile``` in the *Project Explorer* window under the ``` TestApp ``` project node. The file contains references to all gems being used in the project. Here, add the reference to the library gem by adding the following line: ``` gem 'purchase_order_service', '~> 1.0.0' ```

![Add references of the Gemfile](https://apidocs.io/illustration/ruby?step=addReference&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.0.0)

### 3. Adding a new Rails Controller

Once the ``` TestApp ``` project is created, a folder named ``` controllers ``` will be visible in the *Project Explorer* under the following path: ``` TestApp > app > controllers ```. Right click on this folder and select ``` New -> Run Rails Generator... ```.

![Run Rails Generator on Controllers Folder](https://apidocs.io/illustration/ruby?step=addCode0&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.0.0)

Selecting the said option will popup a small window where the generator names are displayed. Here, select the ``` controller ``` template.

![Create a new Controller](https://apidocs.io/illustration/ruby?step=addCode1&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.0.0)

Next, a popup window will ask you for a Controller name and included Actions. For controller name provide ``` Hello ``` and include an action named ``` Index ``` and click ``` OK ```.

![Add a new Controller](https://apidocs.io/illustration/ruby?step=addCode2&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.0.0)

A new controller class anmed ``` HelloController ``` will be created in a file named ``` hello_controller.rb ``` containing a method named ``` Index ```. In this method, add code for initialization and a sample for its usage.

![Initialize the library](https://apidocs.io/illustration/ruby?step=addCode3&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.0.0)

## How to Test

You can test the generated SDK and the server with automatically generated test
cases as follows:

  1. From terminal/cmd navigate to the root directory of the SDK.
  2. Invoke: `bundle exec rake`

## Initialization

### 

API client can be initialized as following.

```ruby

client = PurchaseOrderService::PurchaseOrderServiceClient.new
```

The added initlization code can be debugged by putting a breakpoint in the ``` Index ``` method and running the project in debug mode by selecting ``` Run -> Debug 'Development: TestApp' ```.

![Debug the TestApp](https://apidocs.io/illustration/ruby?step=addCode4&workspaceFolder=PurchaseOrderService-Ruby&workspaceName=PurchaseOrderService&projectName=purchase_order_service&gemName=purchase_order_service&gemVer=1.0.0&initLine=client%2520%253D%2520PurchaseOrderServiceClient.new)



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [PurchaseOrderBindingController](#purchase_order_binding_controller)

## <a name="purchase_order_binding_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PurchaseOrderBindingController") PurchaseOrderBindingController

### Get singleton instance

The singleton instance of the ``` PurchaseOrderBindingController ``` class can be accessed from the API Client.

```ruby
purchaseOrderBinding = client.purchase_order_binding
```

### <a name="create_order"></a>![Method: ](https://apidocs.io/img/method.png ".PurchaseOrderBindingController.create_order") create_order

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```ruby
def create_order(body); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```ruby
body = PurchaseOrder.new

result = purchaseOrderBinding.create_order(body)

```


### <a name="create_order_status"></a>![Method: ](https://apidocs.io/img/method.png ".PurchaseOrderBindingController.create_order_status") create_order_status

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```ruby
def create_order_status(body); end
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```ruby
body = GetOrderStatus.new

result = purchaseOrderBinding.create_order_status(body)

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 500 | Error in retrieving response |



[Back to List of Controllers](#list_of_controllers)



