/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated for testing by APIMATIC v2.0 ( https://apimatic.io ).
 */
package io.apimatic.examples.models;

import java.util.*;
import com.fasterxml.jackson.annotation.JsonGetter;
import com.fasterxml.jackson.annotation.JsonSetter;

public class DATA 
        extends java.util.Observable
        implements java.io.Serializable {
    private static final long serialVersionUID = 5596048646449184765L;
    private double latitude;
    private double longitude;
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("latitude")
    public double getLatitude ( ) { 
        return this.latitude;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("latitude")
    public void setLatitude (double value) { 
        this.latitude = value;
        notifyObservers(this.latitude);
    }
 
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("longitude")
    public double getLongitude ( ) { 
        return this.longitude;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("longitude")
    public void setLongitude (double value) { 
        this.longitude = value;
        notifyObservers(this.longitude);
    }
 
}
 