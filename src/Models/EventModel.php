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
class EventModel implements JsonSerializable
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
     * A description of the event.
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * The date of publication of the last issue in this event.
     * @required
     * @var string $end public property
     */
    public $end;

    /**
     * The unique ID of the event resource.
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
     * @var EventSummaryModel $next public property
     */
    public $next;

    /**
     * @todo Write general description for this property
     * @required
     * @var EventSummaryModel $previous public property
     */
    public $previous;

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
     * The date of publication of the first issue in this event.
     * @required
     * @var string $start public property
     */
    public $start;

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
     * The title of the event.
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * A set of public web site URLs for the event.
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
     * @param string             $end         Initialization value for $this->end
     * @param integer            $id          Initialization value for $this->id
     * @param string             $modified    Initialization value for $this->modified
     * @param EventSummaryModel  $next        Initialization value for $this->next
     * @param EventSummaryModel  $previous    Initialization value for $this->previous
     * @param string             $resourceURI Initialization value for $this->resourceURI
     * @param SeriesListModel    $series      Initialization value for $this->series
     * @param string             $start       Initialization value for $this->start
     * @param StoryListModel     $stories     Initialization value for $this->stories
     * @param ThumbnailModel     $thumbnail   Initialization value for $this->thumbnail
     * @param string             $title       Initialization value for $this->title
     * @param array              $urls        Initialization value for $this->urls
     */
    public function __construct()
    {
        if (16 == func_num_args()) {
            $this->characters  = func_get_arg(0);
            $this->comics      = func_get_arg(1);
            $this->creators    = func_get_arg(2);
            $this->description = func_get_arg(3);
            $this->end         = func_get_arg(4);
            $this->id          = func_get_arg(5);
            $this->modified    = func_get_arg(6);
            $this->next        = func_get_arg(7);
            $this->previous    = func_get_arg(8);
            $this->resourceURI = func_get_arg(9);
            $this->series      = func_get_arg(10);
            $this->start       = func_get_arg(11);
            $this->stories     = func_get_arg(12);
            $this->thumbnail   = func_get_arg(13);
            $this->title       = func_get_arg(14);
            $this->urls        = func_get_arg(15);
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
        $json['end']         = $this->end;
        $json['id']          = $this->id;
        $json['modified']    = $this->modified;
        $json['next']        = $this->next;
        $json['previous']    = $this->previous;
        $json['resourceURI'] = $this->resourceURI;
        $json['series']      = $this->series;
        $json['start']       = $this->start;
        $json['stories']     = $this->stories;
        $json['thumbnail']   = $this->thumbnail;
        $json['title']       = $this->title;
        $json['urls']        = $this->urls;

        return $json;
    }
}
