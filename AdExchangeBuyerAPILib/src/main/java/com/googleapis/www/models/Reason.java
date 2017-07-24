/*
 * AdExchangeBuyerAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */
package com.googleapis.www.models;

import java.util.*;
import com.fasterxml.jackson.annotation.JsonGetter;
import com.fasterxml.jackson.annotation.JsonSetter;

public class Reason 
        extends java.util.Observable
        implements java.io.Serializable {
    private static final long serialVersionUID = 5711473405088122681L;
    private String filteringCount;
    private Integer filteringStatus;
    /** GETTER
     * The number of times the creative was filtered for the status. The count is aggregated across all publishers on the exchange.
     */
    @JsonGetter("filteringCount")
    public String getFilteringCount ( ) { 
        return this.filteringCount;
    }
    
    /** SETTER
     * The number of times the creative was filtered for the status. The count is aggregated across all publishers on the exchange.
     */
    @JsonSetter("filteringCount")
    public void setFilteringCount (String value) { 
        this.filteringCount = value;
        notifyObservers(this.filteringCount);
    }
 
    /** GETTER
     * The filtering status code. Please refer to the creative-status-codes.txt file for different statuses.
     */
    @JsonGetter("filteringStatus")
    public Integer getFilteringStatus ( ) { 
        return this.filteringStatus;
    }
    
    /** SETTER
     * The filtering status code. Please refer to the creative-status-codes.txt file for different statuses.
     */
    @JsonSetter("filteringStatus")
    public void setFilteringStatus (Integer value) { 
        this.filteringStatus = value;
        notifyObservers(this.filteringStatus);
    }
 
}
 