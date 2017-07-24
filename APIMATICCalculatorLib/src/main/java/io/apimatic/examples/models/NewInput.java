/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated for testing by APIMATIC v2.0 ( https://apimatic.io ).
 */
package io.apimatic.examples.models;

import java.util.*;
import com.fasterxml.jackson.annotation.JsonGetter;
import com.fasterxml.jackson.annotation.JsonSetter;

public class NewInput 
        extends java.util.Observable
        implements java.io.Serializable {
    private static final long serialVersionUID = 4886094029907475903L;
    private NewRequest body;
    private String cacheControl;
    private String contentType;
    private String postmanToken;
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("body")
    public NewRequest getBody ( ) { 
        return this.body;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("body")
    public void setBody (NewRequest value) { 
        this.body = value;
        notifyObservers(this.body);
    }
 
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("cache-control")
    public String getCacheControl ( ) { 
        return this.cacheControl;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("cache-control")
    public void setCacheControl (String value) { 
        this.cacheControl = value;
        notifyObservers(this.cacheControl);
    }
 
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("content-type")
    public String getContentType ( ) { 
        return this.contentType;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("content-type")
    public void setContentType (String value) { 
        this.contentType = value;
        notifyObservers(this.contentType);
    }
 
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("postman-token")
    public String getPostmanToken ( ) { 
        return this.postmanToken;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("postman-token")
    public void setPostmanToken (String value) { 
        this.postmanToken = value;
        notifyObservers(this.postmanToken);
    }
 
}
 