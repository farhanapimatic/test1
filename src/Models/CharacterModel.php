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
class CharacterModel implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var ComicListModel $comics public property
     */
    public $comics;

    /**
     * A short bio or description of the character.
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @required
     * @var EventListModel $events public property
     */
    public $events;

    /**
     * The unique ID of the character resource.
     * @required
     * @var integer $id public property
     */
    public $id;

    /**
     * The date the resource was most recently modified.
     * @required
     * @var string $modified public property
     */
    public $modified;

    /**
     * The name of the character.
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * The canonical URL identifier for this resource.
     * @required
     * @var string $resourceURI public property
     */
    public $resourceURI;

    /**
     * @todo Write general description for this property
     * @required
     * @var SeriesListModel $series public property
     */
    public $series;

    /**
     * @todo Write general description for this property
     * @required
     * @var StoryListModel $stories public property
     */
    public $stories;

    /**
     * @todo Write general description for this property
     * @required
     * @var ThumbnailModel $thumbnail public property
     */
    public $thumbnail;

    /**
     * A set of public web site URLs for the resource.
     * @required
     * @var UrlModel[] $urls public property
     */
    public $urls;

    /**
     * Constructor to set initial or default values of member properties
     * @param ComicListModel  $comics      Initialization value for $this->comics
     * @param string          $description Initialization value for $this->description
     * @param EventListModel  $events      Initialization value for $this->events
     * @param integer         $id          Initialization value for $this->id
     * @param string          $modified    Initialization value for $this->modified
     * @param string          $name        Initialization value for $this->name
     * @param string          $resourceURI Initialization value for $this->resourceURI
     * @param SeriesListModel $series      Initialization value for $this->series
     * @param StoryListModel  $stories     Initialization value for $this->stories
     * @param ThumbnailModel  $thumbnail   Initialization value for $this->thumbnail
     * @param array           $urls        Initialization value for $this->urls
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->comics      = func_get_arg(0);
            $this->description = func_get_arg(1);
            $this->events      = func_get_arg(2);
            $this->id          = func_get_arg(3);
            $this->modified    = func_get_arg(4);
            $this->name        = func_get_arg(5);
            $this->resourceURI = func_get_arg(6);
            $this->series      = func_get_arg(7);
            $this->stories     = func_get_arg(8);
            $this->thumbnail   = func_get_arg(9);
            $this->urls        = func_get_arg(10);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['comics']      = $this->comics;
        $json['description'] = $this->description;
        $json['events']      = $this->events;
        $json['id']          = $this->id;
        $json['modified']    = $this->modified;
        $json['name']        = $this->name;
        $json['resourceURI'] = $this->resourceURI;
        $json['series']      = $this->series;
        $json['stories']     = $this->stories;
        $json['thumbnail']   = $this->thumbnail;
        $json['urls']        = $this->urls;

        return $json;
    }
}
