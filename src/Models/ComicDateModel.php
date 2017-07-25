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
class ComicDateModel implements JsonSerializable
{
    /**
     * The date.
     * @required
     * @var string $date public property
     */
    public $date;

    /**
     * A description of the date (e.g. onsale date, FOC date).
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $date Initialization value for $this->date
     * @param string $type Initialization value for $this->type
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->date = func_get_arg(0);
            $this->type = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['date'] = $this->date;
        $json['type'] = $this->type;

        return $json;
    }
}
