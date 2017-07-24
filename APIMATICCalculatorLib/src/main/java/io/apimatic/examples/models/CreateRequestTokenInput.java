/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated for testing by APIMATIC v2.0 ( https://apimatic.io ).
 */
package io.apimatic.examples.models;

import java.util.*;
import com.fasterxml.jackson.annotation.JsonGetter;
import com.fasterxml.jackson.annotation.JsonSetter;

public class CreateRequestTokenInput 
        extends java.util.Observable
        implements java.io.Serializable {
    private static final long serialVersionUID = 5020216550663839828L;
    private String grantType = "password";
    private String authorization;
    private String username;
    private String password;
    private String scope;
    /** GETTER
     * Grant Type
     */
    @JsonGetter("grant_type")
    public String getGrantType ( ) { 
        return this.grantType;
    }
    
    /** SETTER
     * Grant Type
     */
    @JsonSetter("grant_type")
    private void setGrantType (String value) { 
        this.grantType = value;
        notifyObservers(this.grantType);
    }
 
    /** GETTER
     * Authorization header in Basic auth format
     */
    @JsonGetter("Authorization")
    public String getAuthorization ( ) { 
        return this.authorization;
    }
    
    /** SETTER
     * Authorization header in Basic auth format
     */
    @JsonSetter("Authorization")
    public void setAuthorization (String value) { 
        this.authorization = value;
        notifyObservers(this.authorization);
    }
 
    /** GETTER
     * Resource owner username
     */
    @JsonGetter("username")
    public String getUsername ( ) { 
        return this.username;
    }
    
    /** SETTER
     * Resource owner username
     */
    @JsonSetter("username")
    public void setUsername (String value) { 
        this.username = value;
        notifyObservers(this.username);
    }
 
    /** GETTER
     * Resource owner password
     */
    @JsonGetter("password")
    public String getPassword ( ) { 
        return this.password;
    }
    
    /** SETTER
     * Resource owner password
     */
    @JsonSetter("password")
    public void setPassword (String value) { 
        this.password = value;
        notifyObservers(this.password);
    }
 
    /** GETTER
     * Requested scopes as a space-delimited list.
     */
    @JsonGetter("scope")
    public String getScope ( ) { 
        return this.scope;
    }
    
    /** SETTER
     * Requested scopes as a space-delimited list.
     */
    @JsonSetter("scope")
    public void setScope (String value) { 
        this.scope = value;
        notifyObservers(this.scope);
    }
 
}
 