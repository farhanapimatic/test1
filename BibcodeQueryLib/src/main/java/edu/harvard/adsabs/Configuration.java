/*
 * BibcodeQueryLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */
package edu.harvard.adsabs;

import android.content.Context;
import com.android.volley.RequestQueue;
import com.android.volley.toolbox.Volley;
import java.util.EnumMap;
import java.util.HashMap;
import java.util.Map;

import edu.harvard.adsabs.models.*;

public class Configuration {

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

    /**
     * Current API environment
     */
    public static Environments environment = Environments.PRODUCTION;

    /**
     * Get base URI by current environment
     * @param server Server for which to get the base URI
     * @return Processed base URI
     */
    public static String getBaseUri(Servers server) {
        StringBuilder baseUrl = new StringBuilder(environmentsMap.get(Configuration.environment).get(server));
        Map<String, Object> parameters = new HashMap<String, Object>() {
            private static final long serialVersionUID = 4630260570430533447L;
            {
            }
        };
        APIHelper.appendUrlWithTemplateParameters(baseUrl, parameters);
        return baseUrl.toString();
    }
    
    /**
     * Get base URI by current environment
     * @return Processed base URI
     */
    public static String getBaseUri() {
        return Configuration.getBaseUri(Servers.BIBCODEQUERYPORT);
    }
    
    /**
     * Map of all base URLs by environments and server aliases 
     */
    private static EnumMap<Environments, EnumMap<Servers, String>> environmentsMap = new EnumMap<Environments, EnumMap<Servers,String>>(Environments.class) {
        private static final long serialVersionUID = 4949244841833972049L;
        {
            put(Environments.PRODUCTION , new EnumMap<Servers, String>(Servers.class) {
                private static final long serialVersionUID = 4942741757952556088L;
                {
                    put(Servers.BIBCODEQUERYPORT, "http://adsabs.harvard.edu/");
                }
            });
        }
    };
}
