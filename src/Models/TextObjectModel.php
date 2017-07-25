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
class TextObjectModel implements JsonSerializable
{
    /**
     * The IETF language tag denoting the language the text object is written in.
     * @required
     * @var string $language public property
     */
    public $language;

    /**
     * The text.
     * @required
     * @var string $text public property
     */
    public $text;

    /**
     * The canonical type of the text object (e.g. solicit text, preview text, etc.).
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $language Initialization value for $this->language
     * @param string $text     Initialization value for $this->text
     * @param string $type     Initialization value for $this->type
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->language = func_get_arg(0);
            $this->text     = func_get_arg(1);
            $this->type     = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['language'] = $this->language;
        $json['text']     = $this->text;
        $json['type']     = $this->type;

        return $json;
    }
}
