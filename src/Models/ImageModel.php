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
class ImageModel implements JsonSerializable
{
    /**
     * The file extension for the image.
     * @required
     * @var string $extension public property
     */
    public $extension;

    /**
     * The directory path of to the image.
     * @required
     * @var string $path public property
     */
    public $path;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $extension Initialization value for $this->extension
     * @param string $path      Initialization value for $this->path
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->extension = func_get_arg(0);
            $this->path      = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['extension'] = $this->extension;
        $json['path']      = $this->path;

        return $json;
    }
}
