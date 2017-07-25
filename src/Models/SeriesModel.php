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
class SeriesModel implements JsonSerializable
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
     * A description of the series.
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * The last year of publication for the series (conventionally, 2099 for ongoing series) .
     * @required
     * @var integer $endYear public property
     */
    public $endYear;

    /**
     * @todo Write general description for this property
     * @required
     * @var EventListModel $events public property
     */
    public $events;

    /**
     * The unique ID of the series resource.
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
     * @var SeriesSummaryModel $next public property
     */
    public $next;

    /**
     * @todo Write general description for this property
     * @required
     * @var SeriesSummaryModel $previous public property
     */
    public $previous;

    /**
     * The age-appropriateness rating for the series.
     * @required
     * @var string $rating public property
     */
    public $rating;

    /**
     * The canonical URL identifier for this resource.
     * @required
     * @var string $resourceURI public property
     */
    public $resourceURI;

    /**
     * The first year of publication for the series.
     * @required
     * @var integer $startYear public property
     */
    public $startYear;

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
     * The canonical title of the series.
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * A set of public web site URLs for the resource.
     * @required
     * @var UrlModel[] $urls public property
     */
    public $urls;

    /**
     * Constructor to set initial or default values of member properties
     * @param CharacterListModel $characters  Initialization value for $this->characters
     * @param ComicListModel     $comics      Initialization value for $this->comics
     * @param CreatorListModel   $creators    Initialization value for $this->creators
     * @param string             $description Initialization value for $this->description
     * @param integer            $endYear     Initialization value for $this->endYear
     * @param EventListModel     $events      Initialization value for $this->events
     * @param integer            $id          Initialization value for $this->id
     * @param string             $modified    Initialization value for $this->modified
     * @param SeriesSummaryModel $next        Initialization value for $this->next
     * @param SeriesSummaryModel $previous    Initialization value for $this->previous
     * @param string             $rating      Initialization value for $this->rating
     * @param string             $resourceURI Initialization value for $this->resourceURI
     * @param integer            $startYear   Initialization value for $this->startYear
     * @param StoryListModel     $stories     Initialization value for $this->stories
     * @param ThumbnailModel     $thumbnail   Initialization value for $this->thumbnail
     * @param string             $title       Initialization value for $this->title
     * @param array              $urls        Initialization value for $this->urls
     */
    public function __construct()
    {
        if (17 == func_num_args()) {
            $this->characters  = func_get_arg(0);
            $this->comics      = func_get_arg(1);
            $this->creators    = func_get_arg(2);
            $this->description = func_get_arg(3);
            $this->endYear     = func_get_arg(4);
            $this->events      = func_get_arg(5);
            $this->id          = func_get_arg(6);
            $this->modified    = func_get_arg(7);
            $this->next        = func_get_arg(8);
            $this->previous    = func_get_arg(9);
            $this->rating      = func_get_arg(10);
            $this->resourceURI = func_get_arg(11);
            $this->startYear   = func_get_arg(12);
            $this->stories     = func_get_arg(13);
            $this->thumbnail   = func_get_arg(14);
            $this->title       = func_get_arg(15);
            $this->urls        = func_get_arg(16);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['characters']  = $this->characters;
        $json['comics']      = $this->comics;
        $json['creators']    = $this->creators;
        $json['description'] = $this->description;
        $json['endYear']     = $this->endYear;
        $json['events']      = $this->events;
        $json['id']          = $this->id;
        $json['modified']    = $this->modified;
        $json['next']        = $this->next;
        $json['previous']    = $this->previous;
        $json['rating']      = $this->rating;
        $json['resourceURI'] = $this->resourceURI;
        $json['startYear']   = $this->startYear;
        $json['stories']     = $this->stories;
        $json['thumbnail']   = $this->thumbnail;
        $json['title']       = $this->title;
        $json['urls']        = $this->urls;

        return $json;
    }
}
