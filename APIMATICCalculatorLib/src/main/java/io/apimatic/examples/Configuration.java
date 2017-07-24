/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated for testing by APIMATIC v2.0 ( https://apimatic.io ).
 */
package io.apimatic.examples;

import android.content.Context;
import com.android.volley.RequestQueue;
import com.android.volley.toolbox.Volley;

import io.apimatic.examples.models.*;

public class Configuration {
    //The base Uri for API calls
    public static String baseUri = "http://examples.apimatic.io/apps/calculator";


    //retains status whether we have already initialized
    private static boolean initialized = false;
    private static RequestQueue requestQueue = null;

    //Initialization of configuration
    public static void initialize(Context context){
        requestQueue = Volley.newRequestQueue(context);
    
        initialized = true;
    }

    // volley request queue needs to be initialized before use
    public static RequestQueue getRequestQueue() {
        if(!initialized)
            throw new IllegalStateException("Must initialize before accessing request queue");
        return requestQueue;
    }

    //sd
    //TODO: Replace the gfdsfkl with an appropriate value
    public static String gfdsfkl = "";

    //TODO: Replace the dsfsdf with an appropriate value
    public static String dsfsdf = "ds";

    //OAuth 2 Client ID
    //TODO: Replace the oAuthClientId with an appropriate value
    public static String oAuthClientId = "TODO: Replace";

    //OAuth 2 Client Secret
    //TODO: Replace the oAuthClientSecret with an appropriate value
    public static String oAuthClientSecret = "TODO: Replace";

    //OAuth 2 Resource Owner Username
    //TODO: Replace the oAuthUsername with an appropriate value
    public static String oAuthUsername = "TODO: Replace";

    //OAuth 2 Resource Owner Password
    //TODO: Replace the oAuthPassword with an appropriate value
    public static String oAuthPassword = "TODO: Replace";

    /**
     * OAuth 2 token
     */
    public static OAuthToken oAuthToken = null;

    /**
     * OAuth token update callback
     */
    public static OAuthTokenUpdateCallBack oAuthTokenUpdateCallBack = null;

}
