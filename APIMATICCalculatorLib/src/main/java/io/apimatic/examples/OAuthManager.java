/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated for testing by APIMATIC v2.0 ( https://apimatic.io ).
 */
package io.apimatic.examples;

import android.util.Base64;

import java.util.Collection;
import java.util.HashMap;
import java.util.Iterator;
import java.util.List;
import java.util.Map;

import io.apimatic.examples.controllers.OAuthAuthorizationController;
import io.apimatic.examples.models.OAuthToken;
import io.apimatic.examples.models.CreateRequestTokenInputBuilder;
import io.apimatic.examples.models.CreateRefreshTokenInputBuilder;
import io.apimatic.examples.exceptions.APIException;
import io.apimatic.examples.http.client.APICallBack;
import io.apimatic.examples.http.client.HttpContext;

/**
 * Utility class for OAuth 2 authorization and token management
 */
public class OAuthManager {
    /**
     * The reference to singleton instance of this class
     */
    private static OAuthManager instance;

    /**
     * Singleton instance of OAuth 2 API controller 
     */
    private OAuthAuthorizationController oAuthApi;

    /**
     * Constructor
     */
    private OAuthManager() {
        oAuthApi = OAuthAuthorizationController.getInstance();
    }

    /**
     * Returns the *Singleton* instance of this class.
     * @return Singleton instance
     */
    public static OAuthManager getInstance() {
        if (instance == null) {
            synchronized (OAuthManager.class) {
                if (instance == null) {
                    instance = new OAuthManager();
                }
            }
        }
        return instance;
    }

    /**
     * Asynchronously authorize the client with the OAuth provider
     * @param additionalParameters Additional parameters to send during authorization
     * @param callback Callback
     */
    public void authorizeAsync(final Map<String, Object> additionalParameters,
            final APICallBack<OAuthToken> callback) {
        
        final Map<String, Object> aparams = additionalParameters == null ? new HashMap<String, Object>()
                : additionalParameters;

        CreateRequestTokenInputBuilder input = new CreateRequestTokenInputBuilder();
        input.authorization(getBasicAuthForClient())
            .username(Configuration.oAuthUsername)
            .password(Configuration.oAuthPassword)
            .scope(null)
            ;
        
        oAuthApi.createRequestTokenAsync(
            input.build(),
            aparams,
            new APICallBack<OAuthToken>() {

                    public void onSuccess(HttpContext context, OAuthToken response) {
                        updateOAuthToken(response);
                        callback.onSuccess(context, response);
                    }

                    public void onFailure(HttpContext context, Throwable error) {
                        callback.onFailure(context, error);
                    }
                });
    }
    
    /**
     * Asynchronously authorize the client with the OAuth provider
     * @param callback Callback
     */
    public void authorizeAsync(final APICallBack<OAuthToken> callback) {
        authorizeAsync(null, callback);
    }

    /**
     * Refresh the OAuth token
     * @param additionalParameters Additional parameters to send during token refresh
     * @param callback Callback
     */
    public void refreshTokenAsync(final Map<String, Object> additionalParameters,
            final APICallBack<OAuthToken> callback) {
        
        final Map<String, Object> aparams = additionalParameters == null ? new HashMap<String, Object>()
                : additionalParameters;
        CreateRefreshTokenInputBuilder input = new CreateRefreshTokenInputBuilder();
        input.authorization(getBasicAuthForClient())
             .refreshToken(Configuration.oAuthToken.getRefreshToken())
             .scope(null);
        
        oAuthApi.createRefreshTokenAsync(input.build(), aparams, new APICallBack<OAuthToken>() {

                    public void onSuccess(HttpContext context, OAuthToken response) {
                        updateOAuthToken(response);
                        callback.onSuccess(context, response);
                    }

                    public void onFailure(HttpContext context, Throwable error) {
                        callback.onFailure(context, error);
                    }
                });
    }
    
    /**
     * Refresh the OAuth token
     * @param callback Callback
     */
    public void refreshTokenAsync(final APICallBack<OAuthToken> callback) {
        refreshTokenAsync(null, callback);
    }

    /**
     * Has the OAuth token expired?
     * @return True if expired
     */
    public boolean isTokenExpired() {
        return Configuration.oAuthToken != null
                && Configuration.oAuthToken.getExpiry() < (System.currentTimeMillis() / 1000L);
    }

    /**
     * Create authorization header for API calls
     * @return Authorization header
     */
    public String getAuthorizationHeader() {
        return "Bearer " + Configuration.oAuthToken.getAccessToken();
    }

    /**
     * Update OAuth token in configuration
     * @param oAuthToken OAuth token
     */
    private static void updateOAuthToken(OAuthToken oAuthToken) {
        //calculate token expiry time in unix time (UTC)
        if (oAuthToken.getExpiresIn() != null && oAuthToken.getExpiresIn() != 0) {
            oAuthToken.setExpiry((System.currentTimeMillis() / 1000L) + oAuthToken.getExpiresIn());
        }

        //update token and call callback
        Configuration.oAuthToken = oAuthToken;
        if (Configuration.oAuthTokenUpdateCallBack != null) {
            Configuration.oAuthTokenUpdateCallBack.tokenUpdate(oAuthToken);
        }
    }

    /**
     * Build authorization header value for basic auth
     * @return Authorization header value for this client
     */
    private static String getBasicAuthForClient() {
        String val = Configuration.oAuthClientId + ":" + Configuration.oAuthClientSecret;
        return "Basic " + Base64.encodeToString(val.getBytes(), Base64.NO_WRAP);
    }

}
