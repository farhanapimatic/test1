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
class StoryDataContainerModel implements JsonSerializable
{
    /**
     * The total number of results returned by this call.
     * @required
     * @var integer $count public property
     */
    public $count;

    /**
     * The requested result limit.
     * @required
     * @var integer $limit public property
     */
    public $limit;

    /**
     * The requested offset (number of skipped results) of the call.
     * @required
     * @var integer $offset public property
     */
    public $offset;

    /**
     * The list of stories returned by the call
     * @required
     * @var StoryModel[] $results public property
     */
    public $results;

    /**
     * The total number of resources available given the current filter set.
     * @required
     * @var integer $total public property
     */
    public $total;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $count   Initialization value for $this->count
     * @param integer $limit   Initialization value for $this->limit
     * @param integer $offset  Initialization value for $this->offset
     * @param array   $results Initialization value for $this->results
     * @param integer $total   Initialization value for $this->total
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->count   = func_get_arg(0);
            $this->limit   = func_get_arg(1);
            $this->offset  = func_get_arg(2);
            $this->results = func_get_arg(3);
            $this->total   = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['count']   = $this->count;
        $json['limit']   = $this->limit;
        $json['offset']  = $this->offset;
        $json['results'] = $this->results;
        $json['total']   = $this->total;

        return $json;
    }
}
