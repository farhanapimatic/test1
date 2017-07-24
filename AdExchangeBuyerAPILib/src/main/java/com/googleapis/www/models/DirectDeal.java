/*
 * AdExchangeBuyerAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */
package com.googleapis.www.models;

import java.util.*;
import com.fasterxml.jackson.annotation.JsonGetter;
import com.fasterxml.jackson.annotation.JsonSetter;

public class DirectDeal 
        extends java.util.Observable
        implements java.io.Serializable {
    private static final long serialVersionUID = 5257657011017038801L;
    private Integer accountId;
    private String advertiser;
    private String currencyCode;
    private String endTime;
    private String fixedCpm;
    private String id;
    private String kind = "adexchangebuyer#directDeal";
    private String name;
    private String privateExchangeMinCpm;
    private Boolean publisherBlocksOverriden;
    private String sellerNetwork;
    private String startTime;
    /** GETTER
     * The account id of the buyer this deal is for.
     */
    @JsonGetter("accountId")
    public Integer getAccountId ( ) { 
        return this.accountId;
    }
    
    /** SETTER
     * The account id of the buyer this deal is for.
     */
    @JsonSetter("accountId")
    public void setAccountId (Integer value) { 
        this.accountId = value;
        notifyObservers(this.accountId);
    }
 
    /** GETTER
     * The name of the advertiser this deal is for.
     */
    @JsonGetter("advertiser")
    public String getAdvertiser ( ) { 
        return this.advertiser;
    }
    
    /** SETTER
     * The name of the advertiser this deal is for.
     */
    @JsonSetter("advertiser")
    public void setAdvertiser (String value) { 
        this.advertiser = value;
        notifyObservers(this.advertiser);
    }
 
    /** GETTER
     * The currency code that applies to the fixed_cpm value. If not set then assumed to be USD.
     */
    @JsonGetter("currencyCode")
    public String getCurrencyCode ( ) { 
        return this.currencyCode;
    }
    
    /** SETTER
     * The currency code that applies to the fixed_cpm value. If not set then assumed to be USD.
     */
    @JsonSetter("currencyCode")
    public void setCurrencyCode (String value) { 
        this.currencyCode = value;
        notifyObservers(this.currencyCode);
    }
 
    /** GETTER
     * End time for when this deal stops being active. If not set then this deal is valid until manually disabled by the publisher. In seconds since the epoch.
     */
    @JsonGetter("endTime")
    public String getEndTime ( ) { 
        return this.endTime;
    }
    
    /** SETTER
     * End time for when this deal stops being active. If not set then this deal is valid until manually disabled by the publisher. In seconds since the epoch.
     */
    @JsonSetter("endTime")
    public void setEndTime (String value) { 
        this.endTime = value;
        notifyObservers(this.endTime);
    }
 
    /** GETTER
     * The fixed price for this direct deal. In cpm micros of currency according to currency_code. If set, then this deal is eligible for the fixed price tier of buying (highest priority, pay exactly the configured fixed price).
     */
    @JsonGetter("fixedCpm")
    public String getFixedCpm ( ) { 
        return this.fixedCpm;
    }
    
    /** SETTER
     * The fixed price for this direct deal. In cpm micros of currency according to currency_code. If set, then this deal is eligible for the fixed price tier of buying (highest priority, pay exactly the configured fixed price).
     */
    @JsonSetter("fixedCpm")
    public void setFixedCpm (String value) { 
        this.fixedCpm = value;
        notifyObservers(this.fixedCpm);
    }
 
    /** GETTER
     * Deal id.
     */
    @JsonGetter("id")
    public String getId ( ) { 
        return this.id;
    }
    
    /** SETTER
     * Deal id.
     */
    @JsonSetter("id")
    public void setId (String value) { 
        this.id = value;
        notifyObservers(this.id);
    }
 
    /** GETTER
     * Resource type.
     */
    @JsonGetter("kind")
    public String getKind ( ) { 
        return this.kind;
    }
    
    /** SETTER
     * Resource type.
     */
    @JsonSetter("kind")
    public void setKind (String value) { 
        this.kind = value;
        notifyObservers(this.kind);
    }
 
    /** GETTER
     * Deal name.
     */
    @JsonGetter("name")
    public String getName ( ) { 
        return this.name;
    }
    
    /** SETTER
     * Deal name.
     */
    @JsonSetter("name")
    public void setName (String value) { 
        this.name = value;
        notifyObservers(this.name);
    }
 
    /** GETTER
     * The minimum price for this direct deal. In cpm micros of currency according to currency_code. If set, then this deal is eligible for the private exchange tier of buying (below fixed price priority, run as a second price auction).
     */
    @JsonGetter("privateExchangeMinCpm")
    public String getPrivateExchangeMinCpm ( ) { 
        return this.privateExchangeMinCpm;
    }
    
    /** SETTER
     * The minimum price for this direct deal. In cpm micros of currency according to currency_code. If set, then this deal is eligible for the private exchange tier of buying (below fixed price priority, run as a second price auction).
     */
    @JsonSetter("privateExchangeMinCpm")
    public void setPrivateExchangeMinCpm (String value) { 
        this.privateExchangeMinCpm = value;
        notifyObservers(this.privateExchangeMinCpm);
    }
 
    /** GETTER
     * If true, the publisher has opted to have their blocks ignored when a creative is bid with for this deal.
     */
    @JsonGetter("publisherBlocksOverriden")
    public Boolean getPublisherBlocksOverriden ( ) { 
        return this.publisherBlocksOverriden;
    }
    
    /** SETTER
     * If true, the publisher has opted to have their blocks ignored when a creative is bid with for this deal.
     */
    @JsonSetter("publisherBlocksOverriden")
    public void setPublisherBlocksOverriden (Boolean value) { 
        this.publisherBlocksOverriden = value;
        notifyObservers(this.publisherBlocksOverriden);
    }
 
    /** GETTER
     * The name of the publisher offering this direct deal.
     */
    @JsonGetter("sellerNetwork")
    public String getSellerNetwork ( ) { 
        return this.sellerNetwork;
    }
    
    /** SETTER
     * The name of the publisher offering this direct deal.
     */
    @JsonSetter("sellerNetwork")
    public void setSellerNetwork (String value) { 
        this.sellerNetwork = value;
        notifyObservers(this.sellerNetwork);
    }
 
    /** GETTER
     * Start time for when this deal becomes active. If not set then this deal is active immediately upon creation. In seconds since the epoch.
     */
    @JsonGetter("startTime")
    public String getStartTime ( ) { 
        return this.startTime;
    }
    
    /** SETTER
     * Start time for when this deal becomes active. If not set then this deal is active immediately upon creation. In seconds since the epoch.
     */
    @JsonSetter("startTime")
    public void setStartTime (String value) { 
        this.startTime = value;
        notifyObservers(this.startTime);
    }
 
}
 