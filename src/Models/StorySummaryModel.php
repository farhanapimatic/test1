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
class StorySummaryModel implements JsonSerializable
{
    /**
     * The canonical name of the story.
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * The path to the individual story resource.
     * @required
     * @var string $resourceURI public property
     */
    public $resourceURI;

    /**
     * The type of the story (interior or cover).
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name        Initialization value for $this->name
     * @param string $resourceURI Initialization value for $this->resourceURI
     * @param string $type        Initialization value for $this->type
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->name        = func_get_arg(0);
            $this->resourceURI = func_get_arg(1);
            $this->type        = func_get_arg(2);
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
        $json['type']        = $this->type;

        return $json;
    }
}
