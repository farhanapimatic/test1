# Getting started

Accesses your bidding-account information, submits creatives for validation, finds available direct deals, and retrieves performance reports.

## How to Build

The generated code uses a few Gradle dependencies e.g., Jackson, Volley,
and Apache HttpClient. The reference to these dependencies is already
added in the build.gradle file will be installed automatically. Therefore,
you will need internet access for a successful build.

* In order to open the client library in Android Studio click on ``` Open an Existing Android Project ```.

![Importing SDK into Android Studio - Step 1](https://apidocs.io/illustration/android?step=import1&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

* Browse to locate the folder containing the source code. Select the location of the AdExchangeBuyerAPI gradle project and click ``` Ok ```.

![Importing SDK into Android Studio - Step 2](https://apidocs.io/illustration/android?step=import2&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

* Upon successful import, the project can be built by clicking on ``` Build > Make Project ``` or  pressing ``` Ctrl + F9 ```.

![Importing SDK into Android Studio - Step 3](https://apidocs.io/illustration/android?step=import3&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

## How to Use

The following section explains how to use the AdExchangeBuyerAPI library in a new project.

### 1. Starting a new project 

For starting a new project, click on ``` Create New Android Studio Project ```.

![Add a new project in Android Studio - Step 1](https://apidocs.io/illustration/android?step=createNewProject0&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

Here, configure the new project by adding the name, domain and location of the sample application followed by clicking ``` Next ```.

![Create a new Android Studio Project - Step 2](https://apidocs.io/illustration/android?step=createNewProject1&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

Following this, select the ``` Phone and Tablet ```` option as shown in the illustration below and click ``` Next ```. 

![Create a new Android Studio Project - Step 3](https://apidocs.io/illustration/android?step=createNewProject2&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

In the following step, choose ``` Empty Activity ``` as the activity type and click ``` Next ```.

![Create a new Android Studio Project - Step 4](https://apidocs.io/illustration/android?step=createNewProject3&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

In this step, provide an ``` Activity Name ``` and ``` Layout Name ``` and click ``` Finish ```.  This would take you to the newly created project.

![Create a new Android Studio Project - Step 4](https://apidocs.io/illustration/android?step=createNewProject4&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

### 2. Add reference of the library project

In order to add a dependency to this sample application, click on the android button shown in the project explorer on the left side as shown in the picture. Click on ``` Project ``` in the drop down that emerges.  

![Adding dependency to the client library - Step 1](https://apidocs.io/illustration/android?step=testProject0&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

Right click the sample application in the project explorer and click on ``` New > Module ```  as shown in the picture.

![Adding dependency to the client library - Step 2](https://apidocs.io/illustration/android?step=testProject1&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

Choose ``` Import Gradle Project ``` and click ``` Next ```.

![Adding dependency to the client library - Step 3](https://apidocs.io/illustration/android?step=testProject2&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

Click on ``` Finish ``` which would take you back to the sample application with the refernced SDK. 

![Adding dependency to the client library - Step 4](https://apidocs.io/illustration/android?step=testProject3&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

In the following step naigate to the ``` SampleApplication >  app > build.gradle ``` file and add the following line ```compile project(path: ':AdExchangeBuyerAPI')``` to the dependencies section as shown in the illustration below.

![Adding dependency to the client library - Step 5](https://apidocs.io/illustration/android?step=testProject4&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

Finally, press ``` Sync Now ``` in the warning visible as shown in the picture below.

![Adding dependency to the client library - Step 6](https://apidocs.io/illustration/android?step=testProject5&workspaceFolder=Ad%20Exchange%20Buyer%20API&workspaceName=AdExchangeBuyerAPI&projectName=AdExchangeBuyerAPILib&rootNamespace=com.googleapis.www)

### 3. Write sample code

Once the ``` SampleApplication ``` is created, a file named ``` SampleApplication > app > src > main > java > MainActivity ``` will be visible in the *Project Explorer* with an ``` onCreate ``` method. This is the entry point for the execution of the created project.
Here, you can add code to initialize the client library and instantiate a *Controller* class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

## How to Test

The generated code and the server can be tested using automatically generated test cases. 
JUnit is used as the testing framework and test runner.

In Android Studio, for running the tests do the following:

1. Right click on *SampleApplication > AdExchangeBuyerAPILib > androidTest > java)* from the project explorer.
2. Select "Run All Tests" or use "Ctrl + Shift + F10" to run the Tests.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthAccessToken | OAuth 2.0 Access Token |



API client can be initialized as following. The `appContext` being passed is the Android application [`Context`](https://developer.android.com/reference/android/content/Context.html).

```java
// Configuration parameters and credentials
String oAuthAccessToken = "oAuthAccessToken"; // OAuth 2.0 Access Token

com.googleapis.www.Configuration.initialize(appContext);
AdExchangeBuyerAPIClient client = new AdExchangeBuyerAPIClient(oAuthAccessToken);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [AccountsController](#accounts_controller)
* [BillingInfoController](#billing_info_controller)
* [BudgetController](#budget_controller)
* [CreativesController](#creatives_controller)
* [DirectDealsController](#direct_deals_controller)
* [PerformanceReportController](#performance_report_controller)
* [PretargetingConfigController](#pretargeting_config_controller)

## <a name="accounts_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.googleapis.www.controllers.AccountsController") AccountsController

### Get singleton instance

The singleton instance of the ``` AccountsController ``` class can be accessed from the API Client.

```java
AccountsController accounts = client.getAccounts();
```

### <a name="get_accounts_by_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.AccountsController.getAccountsByIdAsync") getAccountsByIdAsync

> Gets one account by ID.


```java
void getAccountsByIdAsync(
        final int id,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<Account> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The account id |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
int id = 88;
String alt = "json";
String fields = "fields";
String key = "key";
String oauthToken = "oauth_token";
Boolean prettyPrint = true;
String quotaUser = "quotaUser";
String userIp = "userIp";
// Invoking the API call with sample inputs
accounts.getAccountsByIdAsync(id, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<Account>() {
    public void onSuccess(HttpContext context, Account response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


### <a name="list_accounts_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.AccountsController.listAccountsAsync") listAccountsAsync

> Retrieves the authenticated user's list of accounts.


```java
void listAccountsAsync(final APICallBack<AccountsList> callBack)
```

#### Example Usage

```java
// Invoking the API call with sample inputs
accounts.listAccountsAsync(new APICallBack<AccountsList>() {
    public void onSuccess(HttpContext context, AccountsList response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


### <a name="patch_accounts_by_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.AccountsController.patchAccountsByIdAsync") patchAccountsByIdAsync

> Updates an existing account. This method supports patch semantics.


```java
void patchAccountsByIdAsync(
        final int id,
        final Account body,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<Account> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The account id |
| body |  ``` Required ```  | TODO: Add a parameter description |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
try {
    int id = 88;
    Account body = new Account();
    String alt = "json";
    String fields = "fields";
    String key = "key";
    String oauthToken = "oauth_token";
    Boolean prettyPrint = true;
    String quotaUser = "quotaUser";
    String userIp = "userIp";
    // Invoking the API call with sample inputs
    accounts.patchAccountsByIdAsync(id, body, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<Account>() {
        public void onSuccess(HttpContext context, Account response) {
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


### <a name="update_accounts_by_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.AccountsController.updateAccountsByIdAsync") updateAccountsByIdAsync

> Updates an existing account.


```java
void updateAccountsByIdAsync(
        final int id,
        final Account body,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<Account> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The account id |
| body |  ``` Required ```  | TODO: Add a parameter description |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
try {
    int id = 88;
    Account body = new Account();
    String alt = "json";
    String fields = "fields";
    String key = "key";
    String oauthToken = "oauth_token";
    Boolean prettyPrint = true;
    String quotaUser = "quotaUser";
    String userIp = "userIp";
    // Invoking the API call with sample inputs
    accounts.updateAccountsByIdAsync(id, body, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<Account>() {
        public void onSuccess(HttpContext context, Account response) {
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

## <a name="billing_info_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.googleapis.www.controllers.BillingInfoController") BillingInfoController

### Get singleton instance

The singleton instance of the ``` BillingInfoController ``` class can be accessed from the API Client.

```java
BillingInfoController billingInfo = client.getBillingInfo();
```

### <a name="get_billinginfo_by_account_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.BillingInfoController.getBillinginfoByAccountIdAsync") getBillinginfoByAccountIdAsync

> Returns the billing information for one account specified by account ID.


```java
void getBillinginfoByAccountIdAsync(
        final int accountId,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<BillingInfo> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | The account id. |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
int accountId = 88;
String alt = "json";
String fields = "fields";
String key = "key";
String oauthToken = "oauth_token";
Boolean prettyPrint = true;
String quotaUser = "quotaUser";
String userIp = "userIp";
// Invoking the API call with sample inputs
billingInfo.getBillinginfoByAccountIdAsync(accountId, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<BillingInfo>() {
    public void onSuccess(HttpContext context, BillingInfo response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


### <a name="list_billinginfo_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.BillingInfoController.listBillinginfoAsync") listBillinginfoAsync

> Retrieves a list of billing information for all accounts of the authenticated user.


```java
void listBillinginfoAsync(final APICallBack<BillingInfoList> callBack)
```

#### Example Usage

```java
// Invoking the API call with sample inputs
billingInfo.listBillinginfoAsync(new APICallBack<BillingInfoList>() {
    public void onSuccess(HttpContext context, BillingInfoList response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


[Back to List of Controllers](#list_of_controllers)

## <a name="budget_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.googleapis.www.controllers.BudgetController") BudgetController

### Get singleton instance

The singleton instance of the ``` BudgetController ``` class can be accessed from the API Client.

```java
BudgetController budget = client.getBudget();
```

### <a name="get_billinginfo_by_account_id_and_billing_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.BudgetController.getBillinginfoByAccountIdAndBillingIdAsync") getBillinginfoByAccountIdAndBillingIdAsync

> Returns the budget information for the adgroup specified by the accountId and billingId.


```java
void getBillinginfoByAccountIdAndBillingIdAsync(
        final String accountId,
        final String billingId,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<Budget> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | The account id to get the budget information for. |
| billingId |  ``` Required ```  | The billing id to get the budget information for. |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
String accountId = "accountId";
String billingId = "billingId";
String alt = "json";
String fields = "fields";
String key = "key";
String oauthToken = "oauth_token";
Boolean prettyPrint = true;
String quotaUser = "quotaUser";
String userIp = "userIp";
// Invoking the API call with sample inputs
budget.getBillinginfoByAccountIdAndBillingIdAsync(accountId, billingId, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<Budget>() {
    public void onSuccess(HttpContext context, Budget response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


### <a name="patch_billinginfo_by_account_id_and_billing_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.BudgetController.patchBillinginfoByAccountIdAndBillingIdAsync") patchBillinginfoByAccountIdAndBillingIdAsync

> Updates the budget amount for the budget of the adgroup specified by the accountId and billingId, with the budget amount in the request. This method supports patch semantics.


```java
void patchBillinginfoByAccountIdAndBillingIdAsync(
        final String accountId,
        final String billingId,
        final Budget body,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<Budget> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | The account id associated with the budget being updated. |
| billingId |  ``` Required ```  | The billing id associated with the budget being updated. |
| body |  ``` Required ```  | TODO: Add a parameter description |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
try {
    String accountId = "accountId";
    String billingId = "billingId";
    Budget body = new Budget();
    String alt = "json";
    String fields = "fields";
    String key = "key";
    String oauthToken = "oauth_token";
    Boolean prettyPrint = true;
    String quotaUser = "quotaUser";
    String userIp = "userIp";
    // Invoking the API call with sample inputs
    budget.patchBillinginfoByAccountIdAndBillingIdAsync(accountId, billingId, body, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<Budget>() {
        public void onSuccess(HttpContext context, Budget response) {
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


### <a name="update_billinginfo_by_account_id_and_billing_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.BudgetController.updateBillinginfoByAccountIdAndBillingIdAsync") updateBillinginfoByAccountIdAndBillingIdAsync

> Updates the budget amount for the budget of the adgroup specified by the accountId and billingId, with the budget amount in the request.


```java
void updateBillinginfoByAccountIdAndBillingIdAsync(
        final String accountId,
        final String billingId,
        final Budget body,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<Budget> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | The account id associated with the budget being updated. |
| billingId |  ``` Required ```  | The billing id associated with the budget being updated. |
| body |  ``` Required ```  | TODO: Add a parameter description |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
try {
    String accountId = "accountId";
    String billingId = "billingId";
    Budget body = new Budget();
    String alt = "json";
    String fields = "fields";
    String key = "key";
    String oauthToken = "oauth_token";
    Boolean prettyPrint = true;
    String quotaUser = "quotaUser";
    String userIp = "userIp";
    // Invoking the API call with sample inputs
    budget.updateBillinginfoByAccountIdAndBillingIdAsync(accountId, billingId, body, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<Budget>() {
        public void onSuccess(HttpContext context, Budget response) {
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

## <a name="creatives_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.googleapis.www.controllers.CreativesController") CreativesController

### Get singleton instance

The singleton instance of the ``` CreativesController ``` class can be accessed from the API Client.

```java
CreativesController creatives = client.getCreatives();
```

### <a name="get_creatives_by_account_id_and_buyer_creative_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.CreativesController.getCreativesByAccountIdAndBuyerCreativeIdAsync") getCreativesByAccountIdAndBuyerCreativeIdAsync

> Gets the status for a single creative. A creative will be available 30-40 minutes after submission.


```java
void getCreativesByAccountIdAndBuyerCreativeIdAsync(
        final int accountId,
        final String buyerCreativeId,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<Creative> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | The id for the account that will serve this creative. |
| buyerCreativeId |  ``` Required ```  | The buyer-specific id for this creative. |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
int accountId = 88;
String buyerCreativeId = "buyerCreativeId";
String alt = "json";
String fields = "fields";
String key = "key";
String oauthToken = "oauth_token";
Boolean prettyPrint = true;
String quotaUser = "quotaUser";
String userIp = "userIp";
// Invoking the API call with sample inputs
creatives.getCreativesByAccountIdAndBuyerCreativeIdAsync(accountId, buyerCreativeId, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<Creative>() {
    public void onSuccess(HttpContext context, Creative response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


### <a name="insert_creatives_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.CreativesController.insertCreativesAsync") insertCreativesAsync

> Submit a new creative.


```java
void insertCreativesAsync(
        final Creative body,
        final APICallBack<Creative> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |


#### Example Usage

```java
try {
    Creative body = new Creative();
    // Invoking the API call with sample inputs
    creatives.insertCreativesAsync(body, new APICallBack<Creative>() {
        public void onSuccess(HttpContext context, Creative response) {
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


### <a name="list_creatives_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.CreativesController.listCreativesAsync") listCreativesAsync

> Retrieves a list of the authenticated user's active creatives. A creative will be available 30-40 minutes after submission.


```java
void listCreativesAsync(
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final Integer accountId,
        final String buyerCreativeId,
        final Integer maxResults,
        final String pageToken,
        final String statusFilter,
        final APICallBack<CreativesList> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |
| accountId |  ``` Optional ```  | When specified, only creatives for the given account ids are returned. |
| buyerCreativeId |  ``` Optional ```  | When specified, only creatives for the given buyer creative ids are returned. |
| maxResults |  ``` Optional ```  | Maximum number of entries returned on one result page. If not set, the default is 100. Optional. |
| pageToken |  ``` Optional ```  | A continuation token, used to page through ad clients. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response. Optional. |
| statusFilter |  ``` Optional ```  | When specified, only creatives having the given status are returned. (Acceptable values are: "approved", "disapproved", "not_checked") |


#### Example Usage

```java
String alt = "json";
String fields = "fields";
String key = "key";
String oauthToken = "oauth_token";
Boolean prettyPrint = true;
String quotaUser = "quotaUser";
String userIp = "userIp";
Integer accountId = 88;
String buyerCreativeId = "buyerCreativeId";
Integer maxResults = 88;
String pageToken = "pageToken";
String statusFilter = "statusFilter";
// Invoking the API call with sample inputs
creatives.listCreativesAsync(alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, accountId, buyerCreativeId, maxResults, pageToken, statusFilter, new APICallBack<CreativesList>() {
    public void onSuccess(HttpContext context, CreativesList response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


[Back to List of Controllers](#list_of_controllers)

## <a name="direct_deals_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.googleapis.www.controllers.DirectDealsController") DirectDealsController

### Get singleton instance

The singleton instance of the ``` DirectDealsController ``` class can be accessed from the API Client.

```java
DirectDealsController directDeals = client.getDirectDeals();
```

### <a name="get_directdeals_by_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.DirectDealsController.getDirectdealsByIdAsync") getDirectdealsByIdAsync

> Gets one direct deal by ID.


```java
void getDirectdealsByIdAsync(
        final String id,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<DirectDeal> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The direct deal id |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
String id = "id";
String alt = "json";
String fields = "fields";
String key = "key";
String oauthToken = "oauth_token";
Boolean prettyPrint = true;
String quotaUser = "quotaUser";
String userIp = "userIp";
// Invoking the API call with sample inputs
directDeals.getDirectdealsByIdAsync(id, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<DirectDeal>() {
    public void onSuccess(HttpContext context, DirectDeal response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


### <a name="list_directdeals_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.DirectDealsController.listDirectdealsAsync") listDirectdealsAsync

> Retrieves the authenticated user's list of direct deals.


```java
void listDirectdealsAsync(final APICallBack<DirectDealsList> callBack)
```

#### Example Usage

```java
// Invoking the API call with sample inputs
directDeals.listDirectdealsAsync(new APICallBack<DirectDealsList>() {
    public void onSuccess(HttpContext context, DirectDealsList response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


[Back to List of Controllers](#list_of_controllers)

## <a name="performance_report_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.googleapis.www.controllers.PerformanceReportController") PerformanceReportController

### Get singleton instance

The singleton instance of the ``` PerformanceReportController ``` class can be accessed from the API Client.

```java
PerformanceReportController performanceReport = client.getPerformanceReport();
```

### <a name="list_performancereport_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.PerformanceReportController.listPerformancereportAsync") listPerformancereportAsync

> Retrieves the authenticated user's list of performance metrics.


```java
void listPerformancereportAsync(
        final String accountId,
        final String endDateTime,
        final String startDateTime,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final Integer maxResults,
        final String pageToken,
        final APICallBack<PerformanceReportList> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | The account id to get the reports. |
| endDateTime |  ``` Required ```  | The end time of the report in ISO 8601 timestamp format using UTC. |
| startDateTime |  ``` Required ```  | The start time of the report in ISO 8601 timestamp format using UTC. |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |
| maxResults |  ``` Optional ```  | Maximum number of entries returned on one result page. If not set, the default is 100. Optional. |
| pageToken |  ``` Optional ```  | A continuation token, used to page through performance reports. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response. Optional. |


#### Example Usage

```java
String accountId = "accountId";
String endDateTime = "endDateTime";
String startDateTime = "startDateTime";
String alt = "json";
String fields = "fields";
String key = "key";
String oauthToken = "oauth_token";
Boolean prettyPrint = true;
String quotaUser = "quotaUser";
String userIp = "userIp";
Integer maxResults = 88;
String pageToken = "pageToken";
// Invoking the API call with sample inputs
performanceReport.listPerformancereportAsync(accountId, endDateTime, startDateTime, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, maxResults, pageToken, new APICallBack<PerformanceReportList>() {
    public void onSuccess(HttpContext context, PerformanceReportList response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


[Back to List of Controllers](#list_of_controllers)

## <a name="pretargeting_config_controller"></a>![Class: ](https://apidocs.io/img/class.png "com.googleapis.www.controllers.PretargetingConfigController") PretargetingConfigController

### Get singleton instance

The singleton instance of the ``` PretargetingConfigController ``` class can be accessed from the API Client.

```java
PretargetingConfigController pretargetingConfig = client.getPretargetingConfig();
```

### <a name="delete_pretargetingconfigs_by_account_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.PretargetingConfigController.deletePretargetingconfigsByAccountIdAsync") deletePretargetingconfigsByAccountIdAsync

> Deletes an existing pretargeting config.


```java
void deletePretargetingconfigsByAccountIdAsync(
        final String accountId,
        final String configId,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<DynamicResponse> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | The account id to delete the pretargeting config for. |
| configId |  ``` Required ```  | The specific id of the configuration to delete. |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
String accountId = "accountId";
String configId = "configId";
String alt = "json";
String fields = "fields";
String key = "key";
String oauthToken = "oauth_token";
Boolean prettyPrint = true;
String quotaUser = "quotaUser";
String userIp = "userIp";
// Invoking the API call with sample inputs
pretargetingConfig.deletePretargetingconfigsByAccountIdAsync(accountId, configId, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<DynamicResponse>() {
    public void onSuccess(HttpContext context, DynamicResponse response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


### <a name="get_pretargetingconfigs_by_account_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.PretargetingConfigController.getPretargetingconfigsByAccountIdAsync") getPretargetingconfigsByAccountIdAsync

> Gets a specific pretargeting configuration


```java
void getPretargetingconfigsByAccountIdAsync(
        final String accountId,
        final String configId,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<PretargetingConfig> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | The account id to get the pretargeting config for. |
| configId |  ``` Required ```  | The specific id of the configuration to retrieve. |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
String accountId = "accountId";
String configId = "configId";
String alt = "json";
String fields = "fields";
String key = "key";
String oauthToken = "oauth_token";
Boolean prettyPrint = true;
String quotaUser = "quotaUser";
String userIp = "userIp";
// Invoking the API call with sample inputs
pretargetingConfig.getPretargetingconfigsByAccountIdAsync(accountId, configId, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<PretargetingConfig>() {
    public void onSuccess(HttpContext context, PretargetingConfig response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


### <a name="insert_pretargetingconfigs_by_account_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.PretargetingConfigController.insertPretargetingconfigsByAccountIdAsync") insertPretargetingconfigsByAccountIdAsync

> Inserts a new pretargeting configuration.


```java
void insertPretargetingconfigsByAccountIdAsync(
        final String accountId,
        final PretargetingConfig body,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<PretargetingConfig> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | The account id to insert the pretargeting config for. |
| body |  ``` Required ```  | TODO: Add a parameter description |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
try {
    String accountId = "accountId";
    PretargetingConfig body = new PretargetingConfig();
    String alt = "json";
    String fields = "fields";
    String key = "key";
    String oauthToken = "oauth_token";
    Boolean prettyPrint = true;
    String quotaUser = "quotaUser";
    String userIp = "userIp";
    // Invoking the API call with sample inputs
    pretargetingConfig.insertPretargetingconfigsByAccountIdAsync(accountId, body, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<PretargetingConfig>() {
        public void onSuccess(HttpContext context, PretargetingConfig response) {
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


### <a name="list_pretargetingconfigs_by_account_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.PretargetingConfigController.listPretargetingconfigsByAccountIdAsync") listPretargetingconfigsByAccountIdAsync

> Retrieves a list of the authenticated user's pretargeting configurations.


```java
void listPretargetingconfigsByAccountIdAsync(
        final String accountId,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<PretargetingConfigList> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | The account id to get the pretargeting configs for. |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
String accountId = "accountId";
String alt = "json";
String fields = "fields";
String key = "key";
String oauthToken = "oauth_token";
Boolean prettyPrint = true;
String quotaUser = "quotaUser";
String userIp = "userIp";
// Invoking the API call with sample inputs
pretargetingConfig.listPretargetingconfigsByAccountIdAsync(accountId, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<PretargetingConfigList>() {
    public void onSuccess(HttpContext context, PretargetingConfigList response) {
        // TODO success callback handler
    }
    public void onFailure(HttpContext context, Throwable error) {
        // TODO failure callback handler
    }
});

```


### <a name="patch_pretargetingconfigs_by_account_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.PretargetingConfigController.patchPretargetingconfigsByAccountIdAsync") patchPretargetingconfigsByAccountIdAsync

> Updates an existing pretargeting config. This method supports patch semantics.


```java
void patchPretargetingconfigsByAccountIdAsync(
        final String accountId,
        final String configId,
        final PretargetingConfig body,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<PretargetingConfig> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | The account id to update the pretargeting config for. |
| configId |  ``` Required ```  | The specific id of the configuration to update. |
| body |  ``` Required ```  | TODO: Add a parameter description |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
try {
    String accountId = "accountId";
    String configId = "configId";
    PretargetingConfig body = new PretargetingConfig();
    String alt = "json";
    String fields = "fields";
    String key = "key";
    String oauthToken = "oauth_token";
    Boolean prettyPrint = true;
    String quotaUser = "quotaUser";
    String userIp = "userIp";
    // Invoking the API call with sample inputs
    pretargetingConfig.patchPretargetingconfigsByAccountIdAsync(accountId, configId, body, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<PretargetingConfig>() {
        public void onSuccess(HttpContext context, PretargetingConfig response) {
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


### <a name="update_pretargetingconfigs_by_account_id_async"></a>![Method: ](https://apidocs.io/img/method.png "com.googleapis.www.controllers.PretargetingConfigController.updatePretargetingconfigsByAccountIdAsync") updatePretargetingconfigsByAccountIdAsync

> Updates an existing pretargeting config.


```java
void updatePretargetingconfigsByAccountIdAsync(
        final String accountId,
        final String configId,
        final PretargetingConfig body,
        final String alt,
        final String fields,
        final String key,
        final String oauthToken,
        final Boolean prettyPrint,
        final String quotaUser,
        final String userIp,
        final APICallBack<PretargetingConfig> callBack)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountId |  ``` Required ```  | The account id to update the pretargeting config for. |
| configId |  ``` Required ```  | The specific id of the configuration to update. |
| body |  ``` Required ```  | TODO: Add a parameter description |
| alt |  ``` Optional ```  ``` DefaultValue ```  | Data format for the response. (Acceptable values are: "json") |
| fields |  ``` Optional ```  | Selector specifying which fields to include in a partial response. |
| key |  ``` Optional ```  | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. |
| oauthToken |  ``` Optional ```  | OAuth 2.0 token for the current user. |
| prettyPrint |  ``` Optional ```  ``` DefaultValue ```  | Returns response with indentations and line breaks. |
| quotaUser |  ``` Optional ```  | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. |
| userIp |  ``` Optional ```  | IP address of the site where the request originates. Use this if you want to enforce per-user limits. |


#### Example Usage

```java
try {
    String accountId = "accountId";
    String configId = "configId";
    PretargetingConfig body = new PretargetingConfig();
    String alt = "json";
    String fields = "fields";
    String key = "key";
    String oauthToken = "oauth_token";
    Boolean prettyPrint = true;
    String quotaUser = "quotaUser";
    String userIp = "userIp";
    // Invoking the API call with sample inputs
    pretargetingConfig.updatePretargetingconfigsByAccountIdAsync(accountId, configId, body, alt, fields, key, oauthToken, prettyPrint, quotaUser, userIp, new APICallBack<PretargetingConfig>() {
        public void onSuccess(HttpContext context, PretargetingConfig response) {
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



