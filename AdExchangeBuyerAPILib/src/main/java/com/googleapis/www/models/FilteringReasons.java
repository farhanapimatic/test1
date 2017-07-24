/*
 * AdExchangeBuyerAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */
package com.googleapis.www.models;

import java.util.*;
import com.fasterxml.jackson.annotation.JsonGetter;
import com.fasterxml.jackson.annotation.JsonSetter;

public class FilteringReasons 
        extends java.util.Observable
        implements java.io.Serializable {
    private static final long serialVersionUID = 5051587292406187666L;
    private String date;
    private List<Reason> reasons;
    /** GETTER
     * The date in ISO 8601 format for the data. The data is collected from 00:00:00 to 23:59:59 in PST.
     */
    @JsonGetter("date")
    public String getDate ( ) { 
        return this.date;
    }
    
    /** SETTER
     * The date in ISO 8601 format for the data. The data is collected from 00:00:00 to 23:59:59 in PST.
     */
    @JsonSetter("date")
    public void setDate (String value) { 
        this.date = value;
        notifyObservers(this.date);
    }
 
    /** GETTER
     * The filtering reasons.
     */
    @JsonGetter("reasons")
    public List<Reason> getReasons ( ) { 
        return this.reasons;
    }
    
    /** SETTER
     * The filtering reasons.
     */
    @JsonSetter("reasons")
    public void setReasons (List<Reason> value) { 
        this.reasons = value;
        notifyObservers(this.reasons);
    }
 
}
 