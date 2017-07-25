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
class CreatorModel implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var ComicListModel $comics public property
     */
    public $comics;

    /**
     * @todo Write general description for this property
     * @required
     * @var EventListModel $events public property
     */
    public $events;

    /**
     * The first name of the creator.
     * @required
     * @var string $firstName public property
     */
    public $firstName;

    /**
     * The full name of the creator (a space-separated concatenation of the above four fields).
     * @required
     * @var string $fullName public property
     */
    public $fullName;

    /**
     * The unique ID of the creator resource.
     * @required
     * @var integer $id public property
     */
    public $id;

    /**
     * The last name of the creator.
     * @required
     * @var string $lastName public property
     */
    public $lastName;

    /**
     * The middle name of the creator.
     * @required
     * @var string $middleName public property
     */
    public $middleName;

    /**
     * The date the resource was most recently modified.
     * @required
     * @var string $modified public property
     */
    public $modified;

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
     * The suffix or honorific for the creator.
     * @required
     * @var string $suffix public property
     */
    public $suffix;

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
     * @param EventListModel  $events      Initialization value for $this->events
     * @param string          $firstName   Initialization value for $this->firstName
     * @param string          $fullName    Initialization value for $this->fullName
     * @param integer         $id          Initialization value for $this->id
     * @param string          $lastName    Initialization value for $this->lastName
     * @param string          $middleName  Initialization value for $this->middleName
     * @param string          $modified    Initialization value for $this->modified
     * @param string          $resourceURI Initialization value for $this->resourceURI
     * @param SeriesListModel $series      Initialization value for $this->series
     * @param StoryListModel  $stories     Initialization value for $this->stories
     * @param string          $suffix      Initialization value for $this->suffix
     * @param ThumbnailModel  $thumbnail   Initialization value for $this->thumbnail
     * @param array           $urls        Initialization value for $this->urls
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->comics      = func_get_arg(0);
            $this->events      = func_get_arg(1);
            $this->firstName   = func_get_arg(2);
            $this->fullName    = func_get_arg(3);
            $this->id          = func_get_arg(4);
            $this->lastName    = func_get_arg(5);
            $this->middleName  = func_get_arg(6);
            $this->modified    = func_get_arg(7);
            $this->resourceURI = func_get_arg(8);
            $this->series      = func_get_arg(9);
            $this->stories     = func_get_arg(10);
            $this->suffix      = func_get_arg(11);
            $this->thumbnail   = func_get_arg(12);
            $this->urls        = func_get_arg(13);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['comics']      = $this->comics;
        $json['events']      = $this->events;
        $json['firstName']   = $this->firstName;
        $json['fullName']    = $this->fullName;
        $json['id']          = $this->id;
        $json['lastName']    = $this->lastName;
        $json['middleName']  = $this->middleName;
        $json['modified']    = $this->modified;
        $json['resourceURI'] = $this->resourceURI;
        $json['series']      = $this->series;
        $json['stories']     = $this->stories;
        $json['suffix']      = $this->suffix;
        $json['thumbnail']   = $this->thumbnail;
        $json['urls']        = $this->urls;

        return $json;
    }
}
