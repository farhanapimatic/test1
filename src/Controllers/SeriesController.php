<?php
/*
 * MarvelComicsLib
 *
 * This file was automatically generated for ACME Corp. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MarvelComicsLib\Controllers;

use MarvelComicsLib\APIException;
use MarvelComicsLib\APIHelper;
use MarvelComicsLib\Configuration;
use MarvelComicsLib\Models;
use MarvelComicsLib\Exceptions;
use MarvelComicsLib\Http\HttpRequest;
use MarvelComicsLib\Http\HttpResponse;
use MarvelComicsLib\Http\HttpMethod;
use MarvelComicsLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class SeriesController extends BaseController
{
    /**
     * @var SeriesController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return SeriesController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * getSeriesIndividual
     *
     * @param string $seriesId Filter by series title.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSeriesIndividual(
        $seriesId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/series/{seriesId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'seriesId' => $seriesId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 404) {
            throw new APIException('Series not found.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\SeriesModel');
    }

    /**
     * getCharacterSeriesCollection
     *
     * @param string $characterId     The character ID
     * @param string $comics          (optional) Return only series which contain the specified comics (accepts a comma-
     *                                separated list of ids).
     * @param string $contains        (optional) Return only series containing one or more comics with the specified
     *                                format. (Acceptable values are: "comic", "magazine", "trade paperback",
     *                                "hardcover", "digest", "graphic novel", "digital comic", "infinite comic")
     * @param string $creators        (optional) Return only series which feature work by the specified creators
     *                                (accepts a comma-separated list of ids).
     * @param string $events          (optional) Return only series which have comics that take place during the
     *                                specified events (accepts a comma-separated list of ids).
     * @param string $limit           (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince   (optional) Return only series which have been modified since the specified date.
     * @param string $offset          (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy         (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                                in descending order. Multiple values are given priority in the order in which
     *                                they are passed. (Acceptable values are: "title", "modified", "startYear", "-
     *                                title", "-modified", "-startYear")
     * @param string $seriesType      (optional) Filter the series by publication frequency type. (Acceptable values
     *                                are: "collection", "one shot", "limited", "ongoing")
     * @param string $startYear       (optional) Return only series matching the specified start year.
     * @param string $stories         (optional) Return only series which contain the specified stories (accepts a
     *                                comma-separated list of ids).
     * @param string $title           (optional) Filter by series title.
     * @param string $titleStartsWith (optional) Return series with titles that begin with the specified string (e.g.
     *                                Sp).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCharacterSeriesCollection(
        $characterId,
        $comics = null,
        $contains = 'comic',
        $creators = null,
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $offset = null,
        $orderBy = 'title',
        $seriesType = 'collection',
        $startYear = null,
        $stories = null,
        $title = null,
        $titleStartsWith = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/characters/{characterId}/series';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'characterId'     => $characterId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'comics'          => $comics,
            'contains'        => (null != $contains) ? $contains : 'comic',
            'creators'        => $creators,
            'events'          => $events,
            'limit'           => $limit,
            'modifiedSince'   => $modifiedSince,
            'offset'          => $offset,
            'orderBy'         => (null != $orderBy) ? $orderBy : 'title',
            'seriesType'      => (null != $seriesType) ? $seriesType : 'collection',
            'startYear'       => $startYear,
            'stories'         => $stories,
            'title'           => $title,
            'titleStartsWith' => $titleStartsWith,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 409) {
            throw new APIException('Limit greater than 100.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\SeriesDataWrapperModel');
    }

    /**
     * getCreatorSeriesCollection
     *
     * @param string $creatorId       The creator ID.
     * @param string $characters      (optional) Return only series which feature the specified characters (accepts a
     *                                comma-separated list of ids).
     * @param string $comics          (optional) Return only series which contain the specified comics (accepts a comma-
     *                                separated list of ids).
     * @param string $contains        (optional) Return only series containing one or more comics with the specified
     *                                format. (Acceptable values are: "comic", "magazine", "trade paperback",
     *                                "hardcover", "digest", "graphic novel", "digital comic", "infinite comic")
     * @param string $events          (optional) Return only series which have comics that take place during the
     *                                specified events (accepts a comma-separated list of ids).
     * @param string $limit           (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince   (optional) Return only series which have been modified since the specified date.
     * @param string $offset          (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy         (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                                in descending order. Multiple values are given priority in the order in which
     *                                they are passed. (Acceptable values are: "title", "modified", "startYear", "-
     *                                title", "-modified", "-startYear")
     * @param string $seriesType      (optional) Filter the series by publication frequency type. (Acceptable values
     *                                are: "collection", "one shot", "limited", "ongoing")
     * @param string $startYear       (optional) Return only series matching the specified start year.
     * @param string $stories         (optional) Return only series which contain the specified stories (accepts a
     *                                comma-separated list of ids).
     * @param string $title           (optional) Filter by series title.
     * @param string $titleStartsWith (optional) Return series with titles that begin with the specified string (e.g.
     *                                Sp).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCreatorSeriesCollection(
        $creatorId,
        $characters = null,
        $comics = null,
        $contains = 'comic',
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $offset = null,
        $orderBy = 'title',
        $seriesType = 'collection',
        $startYear = null,
        $stories = null,
        $title = null,
        $titleStartsWith = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/creators/{creatorId}/series';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'creatorId'       => $creatorId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'      => $characters,
            'comics'          => $comics,
            'contains'        => (null != $contains) ? $contains : 'comic',
            'events'          => $events,
            'limit'           => $limit,
            'modifiedSince'   => $modifiedSince,
            'offset'          => $offset,
            'orderBy'         => (null != $orderBy) ? $orderBy : 'title',
            'seriesType'      => (null != $seriesType) ? $seriesType : 'collection',
            'startYear'       => $startYear,
            'stories'         => $stories,
            'title'           => $title,
            'titleStartsWith' => $titleStartsWith,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 409) {
            throw new APIException('Limit greater than 100.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\SeriesDataWrapperModel');
    }

    /**
     * getEventSeriesCollection
     *
     * @param string $eventId         The event ID.
     * @param string $characters      (optional) Return only series which feature the specified characters (accepts a
     *                                comma-separated list of ids).
     * @param string $comics          (optional) Return only series which contain the specified comics (accepts a comma-
     *                                separated list of ids).
     * @param string $contains        (optional) Return only series containing one or more comics with the specified
     *                                format. (Acceptable values are: "comic", "magazine", "trade paperback",
     *                                "hardcover", "digest", "graphic novel", "digital comic", "infinite comic")
     * @param string $creators        (optional) Return only series which feature work by the specified creators
     *                                (accepts a comma-separated list of ids).
     * @param string $limit           (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince   (optional) Return only series which have been modified since the specified date.
     * @param string $offset          (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy         (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                                in descending order. Multiple values are given priority in the order in which
     *                                they are passed. (Acceptable values are: "title", "modified", "startYear", "-
     *                                title", "-modified", "-startYear")
     * @param string $seriesType      (optional) Filter the series by publication frequency type. (Acceptable values
     *                                are: "collection", "one shot", "limited", "ongoing")
     * @param string $startYear       (optional) Return only series matching the specified start year.
     * @param string $stories         (optional) Return only series which contain the specified stories (accepts a
     *                                comma-separated list of ids).
     * @param string $title           (optional) Filter by series title.
     * @param string $titleStartsWith (optional) Return series with titles that begin with the specified string (e.g.
     *                                Sp).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getEventSeriesCollection(
        $eventId,
        $characters = null,
        $comics = null,
        $contains = 'comic',
        $creators = null,
        $limit = null,
        $modifiedSince = null,
        $offset = null,
        $orderBy = 'title',
        $seriesType = 'collection',
        $startYear = null,
        $stories = null,
        $title = null,
        $titleStartsWith = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/events/{eventId}/series';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'eventId'         => $eventId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'      => $characters,
            'comics'          => $comics,
            'contains'        => (null != $contains) ? $contains : 'comic',
            'creators'        => $creators,
            'limit'           => $limit,
            'modifiedSince'   => $modifiedSince,
            'offset'          => $offset,
            'orderBy'         => (null != $orderBy) ? $orderBy : 'title',
            'seriesType'      => (null != $seriesType) ? $seriesType : 'collection',
            'startYear'       => $startYear,
            'stories'         => $stories,
            'title'           => $title,
            'titleStartsWith' => $titleStartsWith,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 409) {
            throw new APIException('Limit greater than 100.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\SeriesDataWrapperModel');
    }

    /**
     * getSeriesCollection
     *
     * @param string $characters      (optional) Return only series which feature the specified characters (accepts a
     *                                comma-separated list of ids).
     * @param string $comics          (optional) Return only series which contain the specified comics (accepts a comma-
     *                                separated list of ids).
     * @param string $contains        (optional) Return only series containing one or more comics with the specified
     *                                format. (Acceptable values are: "comic", "magazine", "trade paperback",
     *                                "hardcover", "digest", "graphic novel", "digital comic", "infinite comic")
     * @param string $creators        (optional) Return only series which feature work by the specified creators
     *                                (accepts a comma-separated list of ids).
     * @param string $events          (optional) Return only series which have comics that take place during the
     *                                specified events (accepts a comma-separated list of ids).
     * @param string $limit           (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince   (optional) Return only series which have been modified since the specified date.
     * @param string $offset          (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy         (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                                in descending order. Multiple values are given priority in the order in which
     *                                they are passed. (Acceptable values are: "title", "modified", "startYear", "-
     *                                title", "-modified", "-startYear")
     * @param string $seriesType      (optional) Filter the series by publication frequency type. (Acceptable values
     *                                are: "collection", "one shot", "limited", "ongoing")
     * @param string $startYear       (optional) Return only series matching the specified start year.
     * @param string $stories         (optional) Return only series which contain the specified stories (accepts a
     *                                comma-separated list of ids).
     * @param string $title           (optional) Return only series matching the specified title.
     * @param string $titleStartsWith (optional) Return series with titles that begin with the specified string (e.g.
     *                                Sp).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSeriesCollection(
        $characters = null,
        $comics = null,
        $contains = 'comic',
        $creators = null,
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $offset = null,
        $orderBy = 'title',
        $seriesType = 'collection',
        $startYear = null,
        $stories = null,
        $title = null,
        $titleStartsWith = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/series';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'      => $characters,
            'comics'          => $comics,
            'contains'        => (null != $contains) ? $contains : 'comic',
            'creators'        => $creators,
            'events'          => $events,
            'limit'           => $limit,
            'modifiedSince'   => $modifiedSince,
            'offset'          => $offset,
            'orderBy'         => (null != $orderBy) ? $orderBy : 'title',
            'seriesType'      => (null != $seriesType) ? $seriesType : 'collection',
            'startYear'       => $startYear,
            'stories'         => $stories,
            'title'           => $title,
            'titleStartsWith' => $titleStartsWith,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 409) {
            throw new APIException('Limit greater than 100.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\SeriesDataWrapperModel');
    }

    /**
     * getStorySeriesCollection
     *
     * @param string $storyId         The story ID.
     * @param string $characters      (optional) Return only series which feature the specified characters (accepts a
     *                                comma-separated list of ids).
     * @param string $comics          (optional) Return only series which contain the specified comics (accepts a comma-
     *                                separated list of ids).
     * @param string $contains        (optional) Return only series containing one or more comics with the specified
     *                                format. (Acceptable values are: "comic", "magazine", "trade paperback",
     *                                "hardcover", "digest", "graphic novel", "digital comic", "infinite comic")
     * @param string $creators        (optional) Return only series which feature work by the specified creators
     *                                (accepts a comma-separated list of ids).
     * @param string $events          (optional) Return only series which have comics that take place during the
     *                                specified events (accepts a comma-separated list of ids).
     * @param string $limit           (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince   (optional) Return only series which have been modified since the specified date.
     * @param string $offset          (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy         (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                                in descending order. Multiple values are given priority in the order in which
     *                                they are passed. (Acceptable values are: "title", "modified", "startYear", "-
     *                                title", "-modified", "-startYear")
     * @param string $seriesType      (optional) Filter the series by publication frequency type. (Acceptable values
     *                                are: "collection", "one shot", "limited", "ongoing")
     * @param string $startYear       (optional) Return only series matching the specified start year.
     * @param string $title           (optional) Filter by series title.
     * @param string $titleStartsWith (optional) Return series with titles that begin with the specified string (e.g.
     *                                Sp).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getStorySeriesCollection(
        $storyId,
        $characters = null,
        $comics = null,
        $contains = 'comic',
        $creators = null,
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $offset = null,
        $orderBy = 'title',
        $seriesType = 'collection',
        $startYear = null,
        $title = null,
        $titleStartsWith = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/stories/{storyId}/series';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'storyId'         => $storyId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'      => $characters,
            'comics'          => $comics,
            'contains'        => (null != $contains) ? $contains : 'comic',
            'creators'        => $creators,
            'events'          => $events,
            'limit'           => $limit,
            'modifiedSince'   => $modifiedSince,
            'offset'          => $offset,
            'orderBy'         => (null != $orderBy) ? $orderBy : 'title',
            'seriesType'      => (null != $seriesType) ? $seriesType : 'collection',
            'startYear'       => $startYear,
            'title'           => $title,
            'titleStartsWith' => $titleStartsWith,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 409) {
            throw new APIException('Limit greater than 100.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\SeriesDataWrapperModel');
    }
}
