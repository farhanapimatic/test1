/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated for testing by APIMATIC v2.0 ( https://apimatic.io ).
 */
package io.apimatic.examples.models;

import java.util.*;
import com.fasterxml.jackson.annotation.JsonGetter;
import com.fasterxml.jackson.annotation.JsonSetter;

public class GetCalculateInput 
        extends java.util.Observable
        implements java.io.Serializable {
    private static final long serialVersionUID = 5074864849099402867L;
    private OperationTypeEnum operation;
    private double x;
    private double y;
    /** GETTER
     * The operator to apply on the variables
     */
    @JsonGetter("operation")
    public OperationTypeEnum getOperation ( ) { 
        return this.operation;
    }
    
    /** SETTER
     * The operator to apply on the variables
     */
    @JsonSetter("operation")
    public void setOperation (OperationTypeEnum value) { 
        this.operation = value;
        notifyObservers(this.operation);
    }
 
    /** GETTER
     * The LHS value
     */
    @JsonGetter("x")
    public double getX ( ) { 
        return this.x;
    }
    
    /** SETTER
     * The LHS value
     */
    @JsonSetter("x")
    public void setX (double value) { 
        this.x = value;
        notifyObservers(this.x);
    }
 
    /** GETTER
     * The RHS value
     */
    @JsonGetter("y")
    public double getY ( ) { 
        return this.y;
    }
    
    /** SETTER
     * The RHS value
     */
    @JsonSetter("y")
    public void setY (double value) { 
        this.y = value;
        notifyObservers(this.y);
    }
 
}
 