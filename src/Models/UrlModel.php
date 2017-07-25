<?php
/*
 * MarvelComicsLib
 *
 * This file was automatically generated for ACME Corp. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MarvelComicsLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class UrlModel implements JsonSerializable
{
    /**
     * A text identifier for the URL.
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * A full URL (including scheme, domain, and path).
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $type Initialization value for $this->type
     * @param string $url  Initialization value for $this->url
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->type = func_get_arg(0);
            $this->url  = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type'] = $this->type;
        $json['url']  = $this->url;

        return $json;
    }
}
