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
class SeriesSummaryModel implements JsonSerializable
{
    /**
     * The canonical name of the series.
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * The path to the individual series resource.
     * @required
     * @var string $resourceURI public property
     */
    public $resourceURI;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name        Initialization value for $this->name
     * @param string $resourceURI Initialization value for $this->resourceURI
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->name        = func_get_arg(0);
            $this->resourceURI = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']        = $this->name;
        $json['resourceURI'] = $this->resourceURI;

        return $json;
    }
}
