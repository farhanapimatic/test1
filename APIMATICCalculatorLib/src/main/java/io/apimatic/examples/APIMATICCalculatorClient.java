/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated for testing by APIMATIC v2.0 ( https://apimatic.io ).
 */
package io.apimatic.examples;

import io.apimatic.examples.controllers.*;
import io.apimatic.examples.http.client.HttpClient;

public class APIMATICCalculatorClient {
    /**
     * Singleton access to Client controller
     * @return	Returns the APIController instance 
     */
    public APIController getClient() {
        return APIController.getInstance();
    }

    /**
     * Singleton access to SimpleCalculator controller
     * @return	Returns the SimpleCalculatorController instance 
     */
    public SimpleCalculatorController getSimpleCalculator() {
        return SimpleCalculatorController.getInstance();
    }

    /**
     * Singleton access to OAuthAuthorization controller
     * @return	Returns the OAuthAuthorizationController instance 
     */
    public OAuthAuthorizationController getOAuthAuthorization() {
        return OAuthAuthorizationController.getInstance();
    }

    /**
     * Get the shared http client currently being used for API calls
     * @return The http client instance currently being used
     */
    public HttpClient getSharedHttpClient() {
        return BaseController.getClientInstance();
    }
    
    /**
     * Set a shared http client to be used for API calls
     * @param httpClient The http client to use
     */
    public void setSharedHttpClient(HttpClient httpClient) {
        BaseController.setClientInstance(httpClient);
    }

    /**
     * Get authentication manager
     */
    public OAuthManager auth() {
        return OAuthManager.getInstance();
    }

    /**
     * Default constructor 
     */     
    public APIMATICCalculatorClient() {
        Configuration.dsfsdf = "ds";
    }

    /**
     * Client initialization constructor 
     */     
    public APIMATICCalculatorClient(String gfdsfkl, String dsfsdf, String oAuthClientId, String oAuthClientSecret, String oAuthUsername, String oAuthPassword) {
        this();
        Configuration.gfdsfkl = gfdsfkl;
        if(dsfsdf != null) Configuration.dsfsdf = dsfsdf;
        Configuration.oAuthClientId = oAuthClientId;
        Configuration.oAuthClientSecret = oAuthClientSecret;
        Configuration.oAuthUsername = oAuthUsername;
        Configuration.oAuthPassword = oAuthPassword;
    }
}