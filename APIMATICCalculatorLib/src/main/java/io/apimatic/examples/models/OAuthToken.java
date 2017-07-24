/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated for testing by APIMATIC v2.0 ( https://apimatic.io ).
 */
package io.apimatic.examples.models;

import java.util.*;
import com.fasterxml.jackson.annotation.JsonGetter;
import com.fasterxml.jackson.annotation.JsonSetter;

public class OAuthToken 
        extends java.util.Observable
        implements java.io.Serializable {
    private static final long serialVersionUID = 4943694783722353709L;
    private String accessToken;
    private String tokenType;
    private Long expiresIn;
    private String scope;
    private Long expiry;
    private String refreshToken;
    /** GETTER
     * Access token
     */
    @JsonGetter("access_token")
    public String getAccessToken ( ) { 
        return this.accessToken;
    }
    
    /** SETTER
     * Access token
     */
    @JsonSetter("access_token")
    public void setAccessToken (String value) { 
        this.accessToken = value;
        notifyObservers(this.accessToken);
    }
 
    /** GETTER
     * Type of access token
     */
    @JsonGetter("token_type")
    public String getTokenType ( ) { 
        return this.tokenType;
    }
    
    /** SETTER
     * Type of access token
     */
    @JsonSetter("token_type")
    public void setTokenType (String value) { 
        this.tokenType = value;
        notifyObservers(this.tokenType);
    }
 
    /** GETTER
     * Time in seconds before the access token expires
     */
    @JsonGetter("expires_in")
    public Long getExpiresIn ( ) { 
        return this.expiresIn;
    }
    
    /** SETTER
     * Time in seconds before the access token expires
     */
    @JsonSetter("expires_in")
    public void setExpiresIn (Long value) { 
        this.expiresIn = value;
        notifyObservers(this.expiresIn);
    }
 
    /** GETTER
     * List of scopes granted
     * This is a space-delimited list of strings.
     */
    @JsonGetter("scope")
    public String getScope ( ) { 
        return this.scope;
    }
    
    /** SETTER
     * List of scopes granted
     * This is a space-delimited list of strings.
     */
    @JsonSetter("scope")
    public void setScope (String value) { 
        this.scope = value;
        notifyObservers(this.scope);
    }
 
    /** GETTER
     * Time of token expiry as unix timestamp (UTC)
     */
    @JsonGetter("expiry")
    public Long getExpiry ( ) { 
        return this.expiry;
    }
    
    /** SETTER
     * Time of token expiry as unix timestamp (UTC)
     */
    @JsonSetter("expiry")
    public void setExpiry (Long value) { 
        this.expiry = value;
        notifyObservers(this.expiry);
    }
 
    /** GETTER
     * Refresh token
     * Used to get a new access token when it expires.
     */
    @JsonGetter("refresh_token")
    public String getRefreshToken ( ) { 
        return this.refreshToken;
    }
    
    /** SETTER
     * Refresh token
     * Used to get a new access token when it expires.
     */
    @JsonSetter("refresh_token")
    public void setRefreshToken (String value) { 
        this.refreshToken = value;
        notifyObservers(this.refreshToken);
    }
 
}
 