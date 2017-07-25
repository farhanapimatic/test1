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
class StoryModel implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var CharacterListModel $characters public property
     */
    public $characters;

    /**
     * @todo Write general description for this property
     * @required
     * @var ComicListModel $comics public property
     */
    public $comics;

    /**
     * @todo Write general description for this property
     * @required
     * @var CreatorListModel $creators public property
     */
    public $creators;

    /**
     * A short description of the story.
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
     * The unique ID of the story resource.
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
     * @todo Write general description for this property
     * @required
     * @var ComicSummaryModel $originalissue public property
     */
    public $originalissue;

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
     * @var ThumbnailModel $thumbnail public property
     */
    public $thumbnail;

    /**
     * The story title.
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * The story type e.g. interior story, cover, text story.
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param CharacterListModel $characters    Initialization value for $this->characters
     * @param ComicListModel     $comics        Initialization value for $this->comics
     * @param CreatorListModel   $creators      Initialization value for $this->creators
     * @param string             $description   Initialization value for $this->description
     * @param EventListModel     $events        Initialization value for $this->events
     * @param integer            $id            Initialization value for $this->id
     * @param string             $modified      Initialization value for $this->modified
     * @param ComicSummaryModel  $originalissue Initialization value for $this->originalissue
     * @param string             $resourceURI   Initialization value for $this->resourceURI
     * @param SeriesListModel    $series        Initialization value for $this->series
     * @param ThumbnailModel     $thumbnail     Initialization value for $this->thumbnail
     * @param string             $title         Initialization value for $this->title
     * @param string             $type          Initialization value for $this->type
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->characters    = func_get_arg(0);
            $this->comics        = func_get_arg(1);
            $this->creators      = func_get_arg(2);
            $this->description   = func_get_arg(3);
            $this->events        = func_get_arg(4);
            $this->id            = func_get_arg(5);
            $this->modified      = func_get_arg(6);
            $this->originalissue = func_get_arg(7);
            $this->resourceURI   = func_get_arg(8);
            $this->series        = func_get_arg(9);
            $this->thumbnail     = func_get_arg(10);
            $this->title         = func_get_arg(11);
            $this->type          = func_get_arg(12);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['characters']    = $this->characters;
        $json['comics']        = $this->comics;
        $json['creators']      = $this->creators;
        $json['description']   = $this->description;
        $json['events']        = $this->events;
        $json['id']            = $this->id;
        $json['modified']      = $this->modified;
        $json['originalissue'] = $this->originalissue;
        $json['resourceURI']   = $this->resourceURI;
        $json['series']        = $this->series;
        $json['thumbnail']     = $this->thumbnail;
        $json['title']         = $this->title;
        $json['type']          = $this->type;

        return $json;
    }
}
