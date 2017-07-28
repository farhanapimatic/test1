<?php
/*
 * HelloWorldLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HelloWorldLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class HelloWorldResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $message public property
     */
    public $message;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $message Initialization value for $this->message
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->message = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['message'] = $this->message;

        return $json;
    }
}