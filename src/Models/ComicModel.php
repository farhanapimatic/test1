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
class ComicModel implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var CharacterListModel $characters public property
     */
    public $characters;

    /**
     * A list of issues collected in this comic (will generally be empty for periodical formats such as "comic" or "magazine").
     * @required
     * @var ComicSummaryModel[] $collectedIssues public property
     */
    public $collectedIssues;

    /**
     * A list of collections which include this comic (will generally be empty if the comic's format is a collection).
     * @required
     * @var ComicSummaryModel[] $collections public property
     */
    public $collections;

    /**
     * @todo Write general description for this property
     * @required
     * @var CreatorListModel $creators public property
     */
    public $creators;

    /**
     * A list of key dates for this comic.
     * @required
     * @var ComicDateModel[] $dates public property
     */
    public $dates;

    /**
     * The preferred description of the comic.
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * The Diamond code for the comic.
     * @required
     * @var string $diamondCode public property
     */
    public $diamondCode;

    /**
     * The ID of the digital comic representation of this comic. Will be 0 if the comic is not available digitally.
     * @required
     * @var integer $digitalId public property
     */
    public $digitalId;

    /**
     * The EAN barcode for the comic.
     * @required
     * @var string $ean public property
     */
    public $ean;

    /**
     * @todo Write general description for this property
     * @required
     * @var EventListModel $events public property
     */
    public $events;

    /**
     * The publication format of the comic e.g. comic, hardcover, trade paperback.
     * @required
     * @var string $format public property
     */
    public $format;

    /**
     * The unique ID of the comic resource.
     * @required
     * @var integer $id public property
     */
    public $id;

    /**
     * A list of promotional images associated with this comic.
     * @required
     * @var ImageModel[] $images public property
     */
    public $images;

    /**
     * The ISBN for the comic (generally only populated for collection formats).
     * @required
     * @var string $isbn public property
     */
    public $isbn;

    /**
     * The ISSN barcode for the comic.
     * @required
     * @var string $issn public property
     */
    public $issn;

    /**
     * The number of the issue in the series (will generally be 0 for collection formats).
     * @required
     * @var integer $issueNumber public property
     */
    public $issueNumber;

    /**
     * The date the resource was most recently modified.
     * @required
     * @var string $modified public property
     */
    public $modified;

    /**
     * The number of story pages in the comic.
     * @required
     * @var integer $pageCount public property
     */
    public $pageCount;

    /**
     * A list of prices for this comic.
     * @required
     * @var ComicPriceModel[] $prices public property
     */
    public $prices;

    /**
     * The canonical URL identifier for this resource.
     * @required
     * @var string $resourceURI public property
     */
    public $resourceURI;

    /**
     * @todo Write general description for this property
     * @required
     * @var SeriesSummaryModel $series public property
     */
    public $series;

    /**
     * @todo Write general description for this property
     * @required
     * @var StoryListModel $stories public property
     */
    public $stories;

    /**
     * A set of descriptive text blurbs for the comic.
     * @required
     * @var TextObjectModel[] $textObjects public property
     */
    public $textObjects;

    /**
     * @todo Write general description for this property
     * @required
     * @var ThumbnailModel $thumbnail public property
     */
    public $thumbnail;

    /**
     * The canonical title of the comic.
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * The UPC barcode number for the comic (generally only populated for periodical formats).
     * @required
     * @var string $upc public property
     */
    public $upc;

    /**
     * A set of public web site URLs for the resource.
     * @required
     * @var UrlModel[] $urls public property
     */
    public $urls;

    /**
     * If the issue is a variant (e.g. an alternate cover, second printing, or director’s cut), a text description of the variant.
     * @required
     * @var string $variantDescription public property
     */
    public $variantDescription;

    /**
     * A list of variant issues for this comic (includes the "original" issue if the current issue is a variant).
     * @required
     * @var ComicSummaryModel[] $variants public property
     */
    public $variants;

    /**
     * Constructor to set initial or default values of member properties
     * @param CharacterListModel $characters         Initialization value for $this->characters
     * @param array              $collectedIssues    Initialization value for $this->collectedIssues
     * @param array              $collections        Initialization value for $this->collections
     * @param CreatorListModel   $creators           Initialization value for $this->creators
     * @param array              $dates              Initialization value for $this->dates
     * @param string             $description        Initialization value for $this->description
     * @param string             $diamondCode        Initialization value for $this->diamondCode
     * @param integer            $digitalId          Initialization value for $this->digitalId
     * @param string             $ean                Initialization value for $this->ean
     * @param EventListModel     $events             Initialization value for $this->events
     * @param string             $format             Initialization value for $this->format
     * @param integer            $id                 Initialization value for $this->id
     * @param array              $images             Initialization value for $this->images
     * @param string             $isbn               Initialization value for $this->isbn
     * @param string             $issn               Initialization value for $this->issn
     * @param integer            $issueNumber        Initialization value for $this->issueNumber
     * @param string             $modified           Initialization value for $this->modified
     * @param integer            $pageCount          Initialization value for $this->pageCount
     * @param array              $prices             Initialization value for $this->prices
     * @param string             $resourceURI        Initialization value for $this->resourceURI
     * @param SeriesSummaryModel $series             Initialization value for $this->series
     * @param StoryListModel     $stories            Initialization value for $this->stories
     * @param array              $textObjects        Initialization value for $this->textObjects
     * @param ThumbnailModel     $thumbnail          Initialization value for $this->thumbnail
     * @param string             $title              Initialization value for $this->title
     * @param string             $upc                Initialization value for $this->upc
     * @param array              $urls               Initialization value for $this->urls
     * @param string             $variantDescription Initialization value for $this->variantDescription
     * @param array              $variants           Initialization value for $this->variants
     */
    public function __construct()
    {
        if (29 == func_num_args()) {
            $this->characters         = func_get_arg(0);
            $this->collectedIssues    = func_get_arg(1);
            $this->collections        = func_get_arg(2);
            $this->creators           = func_get_arg(3);
            $this->dates              = func_get_arg(4);
            $this->description        = func_get_arg(5);
            $this->diamondCode        = func_get_arg(6);
            $this->digitalId          = func_get_arg(7);
            $this->ean                = func_get_arg(8);
            $this->events             = func_get_arg(9);
            $this->format             = func_get_arg(10);
            $this->id                 = func_get_arg(11);
            $this->images             = func_get_arg(12);
            $this->isbn               = func_get_arg(13);
            $this->issn               = func_get_arg(14);
            $this->issueNumber        = func_get_arg(15);
            $this->modified           = func_get_arg(16);
            $this->pageCount          = func_get_arg(17);
            $this->prices             = func_get_arg(18);
            $this->resourceURI        = func_get_arg(19);
            $this->series             = func_get_arg(20);
            $this->stories            = func_get_arg(21);
            $this->textObjects        = func_get_arg(22);
            $this->thumbnail          = func_get_arg(23);
            $this->title              = func_get_arg(24);
            $this->upc                = func_get_arg(25);
            $this->urls               = func_get_arg(26);
            $this->variantDescription = func_get_arg(27);
            $this->variants           = func_get_arg(28);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['characters']         = $this->characters;
        $json['collectedIssues']    = $this->collectedIssues;
        $json['collections']        = $this->collections;
        $json['creators']           = $this->creators;
        $json['dates']              = $this->dates;
        $json['description']        = $this->description;
        $json['diamondCode']        = $this->diamondCode;
        $json['digitalId']          = $this->digitalId;
        $json['ean']                = $this->ean;
        $json['events']             = $this->events;
        $json['format']             = $this->format;
        $json['id']                 = $this->id;
        $json['images']             = $this->images;
        $json['isbn']               = $this->isbn;
        $json['issn']               = $this->issn;
        $json['issueNumber']        = $this->issueNumber;
        $json['modified']           = $this->modified;
        $json['pageCount']          = $this->pageCount;
        $json['prices']             = $this->prices;
        $json['resourceURI']        = $this->resourceURI;
        $json['series']             = $this->series;
        $json['stories']            = $this->stories;
        $json['textObjects']        = $this->textObjects;
        $json['thumbnail']          = $this->thumbnail;
        $json['title']              = $this->title;
        $json['upc']                = $this->upc;
        $json['urls']               = $this->urls;
        $json['variantDescription'] = $this->variantDescription;
        $json['variants']           = $this->variants;

        return $json;
    }
}
