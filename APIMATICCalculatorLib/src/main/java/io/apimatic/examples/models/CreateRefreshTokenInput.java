/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated for testing by APIMATIC v2.0 ( https://apimatic.io ).
 */
package io.apimatic.examples.models;

import java.util.*;
import com.fasterxml.jackson.annotation.JsonGetter;
import com.fasterxml.jackson.annotation.JsonSetter;

public class CreateRefreshTokenInput 
        extends java.util.Observable
        implements java.io.Serializable {
    private static final long serialVersionUID = 5499799725353331552L;
    private String grantType = "refresh_token";
    private String authorization;
    private String refreshToken;
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
     * Refresh token
     */
    @JsonGetter("refresh_token")
    public String getRefreshToken ( ) { 
        return this.refreshToken;
    }
    
    /** SETTER
     * Refresh token
     */
    @JsonSetter("refresh_token")
    public void setRefreshToken (String value) { 
        this.refreshToken = value;
        notifyObservers(this.refreshToken);
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
 