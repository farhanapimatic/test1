/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated for testing by APIMATIC v2.0 ( https://apimatic.io ).
 */
package io.apimatic.examples.models;

import java.util.*;
import com.fasterxml.jackson.annotation.JsonGetter;
import com.fasterxml.jackson.annotation.JsonSetter;

public class NewRequest 
        extends java.util.Observable
        implements java.io.Serializable {
    private static final long serialVersionUID = 5066305300648156313L;
    private int counter;
    private DATA dATA;
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("counter")
    public int getCounter ( ) { 
        return this.counter;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("counter")
    public void setCounter (int value) { 
        this.counter = value;
        notifyObservers(this.counter);
    }
 
    /** GETTER
     * TODO: Write general description for this method
     */
    @JsonGetter("DATA")
    public DATA getDATA ( ) { 
        return this.dATA;
    }
    
    /** SETTER
     * TODO: Write general description for this method
     */
    @JsonSetter("DATA")
    public void setDATA (DATA value) { 
        this.dATA = value;
        notifyObservers(this.dATA);
    }
 
}
 