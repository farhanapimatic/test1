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
class ComicPriceModel implements JsonSerializable
{
    /**
     * The price (all prices in USD).
     * @required
     * @var double $price public property
     */
    public $price;

    /**
     * A description of the price (e.g. print price, digital price).
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param double $price Initialization value for $this->price
     * @param string $type  Initialization value for $this->type
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->price = func_get_arg(0);
            $this->type  = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['price'] = $this->price;
        $json['type']  = $this->type;

        return $json;
    }
}
