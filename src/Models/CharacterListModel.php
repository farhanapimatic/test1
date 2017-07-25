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
class CharacterListModel implements JsonSerializable
{
    /**
     * The number of total available characters in this list. Will always be greater than or equal to the "returned" value.
     * @required
     * @var integer $available public property
     */
    public $available;

    /**
     * The path to the full list of characters in this collection.
     * @required
     * @var string $collectionURI public property
     */
    public $collectionURI;

    /**
     * The list of returned characters in this collection.
     * @required
     * @var CharacterSummaryModel[] $items public property
     */
    public $items;

    /**
     * The number of characters returned in this collection (up to 20).
     * @required
     * @var integer $returned public property
     */
    public $returned;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $available     Initialization value for $this->available
     * @param string  $collectionURI Initialization value for $this->collectionURI
     * @param array   $items         Initialization value for $this->items
     * @param integer $returned      Initialization value for $this->returned
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->available     = func_get_arg(0);
            $this->collectionURI = func_get_arg(1);
            $this->items         = func_get_arg(2);
            $this->returned      = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['available']     = $this->available;
        $json['collectionURI'] = $this->collectionURI;
        $json['items']         = $this->items;
        $json['returned']      = $this->returned;

        return $json;
    }
}
