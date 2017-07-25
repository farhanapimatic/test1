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
class StoriesController extends BaseController
{
    /**
     * @var StoriesController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return StoriesController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * getStoryCollection
     *
     * @param string $characters    (optional) Return only stories which feature the specified characters (accepts a
     *                              comma-separated list of ids).
     * @param string $comics        (optional) Return only stories contained in the specified (accepts a comma-
     *                              separated list of ids).
     * @param string $creators      (optional) Return only stories which feature work by the specified creators
     *                              (accepts a comma-separated list of ids).
     * @param string $events        (optional) Return only stories which take place during the specified events
     *                              (accepts a comma-separated list of ids).
     * @param string $limit         (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince (optional) Return only stories which have been modified since the specified date.
     * @param string $offset        (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy       (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                              in descending order. Multiple values are given priority in the order in which they
     *                              are passed. (Acceptable values are: "id", "modified", "-id", "-modified")
     * @param string $series        (optional) Return only stories contained the specified series (accepts a comma-
     *                              separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getStoryCollection(
        $characters = null,
        $comics = null,
        $creators = null,
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $offset = null,
        $orderBy = 'id',
        $series = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/stories';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'    => $characters,
            'comics'        => $comics,
            'creators'      => $creators,
            'events'        => $events,
            'limit'         => $limit,
            'modifiedSince' => $modifiedSince,
            'offset'        => $offset,
            'orderBy'       => (null != $orderBy) ? $orderBy : 'id',
            'series'        => $series,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\StoryDataWrapperModel');
    }

    /**
     * getSeriesStoryCollection
     *
     * @param string $seriesId      The series ID.
     * @param string $characters    (optional) Return only stories which feature the specified characters (accepts a
     *                              comma-separated list of ids).
     * @param string $comics        (optional) Return only stories contained in the specified (accepts a comma-
     *                              separated list of ids).
     * @param string $creators      (optional) Return only stories which feature work by the specified creators
     *                              (accepts a comma-separated list of ids).
     * @param string $events        (optional) Return only stories which take place during the specified events
     *                              (accepts a comma-separated list of ids).
     * @param string $limit         (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince (optional) Return only stories which have been modified since the specified date.
     * @param string $offset        (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy       (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                              in descending order. Multiple values are given priority in the order in which they
     *                              are passed. (Acceptable values are: "id", "modified", "-id", "-modified")
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSeriesStoryCollection(
        $seriesId,
        $characters = null,
        $comics = null,
        $creators = null,
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $offset = null,
        $orderBy = 'id'
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/series/{seriesId}/stories';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'seriesId'      => $seriesId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'    => $characters,
            'comics'        => $comics,
            'creators'      => $creators,
            'events'        => $events,
            'limit'         => $limit,
            'modifiedSince' => $modifiedSince,
            'offset'        => $offset,
            'orderBy'       => (null != $orderBy) ? $orderBy : 'id',
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\StoryDataWrapperModel');
    }

    /**
     * getEventStoryCollection
     *
     * @param string $eventId       The ID of the event.
     * @param string $characters    (optional) Return only stories which feature the specified characters (accepts a
     *                              comma-separated list of ids).
     * @param string $comics        (optional) Return only stories contained in the specified (accepts a comma-
     *                              separated list of ids).
     * @param string $creators      (optional) Return only stories which feature work by the specified creators
     *                              (accepts a comma-separated list of ids).
     * @param string $limit         (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince (optional) Return only stories which have been modified since the specified date.
     * @param string $offset        (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy       (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                              in descending order. Multiple values are given priority in the order in which they
     *                              are passed. (Acceptable values are: "id", "modified", "-id", "-modified")
     * @param string $series        (optional) Return only stories contained the specified series (accepts a comma-
     *                              separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getEventStoryCollection(
        $eventId,
        $characters = null,
        $comics = null,
        $creators = null,
        $limit = null,
        $modifiedSince = null,
        $offset = null,
        $orderBy = 'id',
        $series = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/events/{eventId}/stories';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'eventId'       => $eventId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'    => $characters,
            'comics'        => $comics,
            'creators'      => $creators,
            'limit'         => $limit,
            'modifiedSince' => $modifiedSince,
            'offset'        => $offset,
            'orderBy'       => (null != $orderBy) ? $orderBy : 'id',
            'series'        => $series,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\StoryDataWrapperModel');
    }

    /**
     * getCreatorStoryCollection
     *
     * @param string $creatorId     The ID of the creator.
     * @param string $characters    (optional) Return only stories which feature the specified characters (accepts a
     *                              comma-separated list of ids).
     * @param string $comics        (optional) Return only stories contained in the specified comics (accepts a comma-
     *                              separated list of ids).
     * @param string $events        (optional) Return only stories which take place during the specified events
     *                              (accepts a comma-separated list of ids).
     * @param string $limit         (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince (optional) Return only stories which have been modified since the specified date.
     * @param string $offset        (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy       (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                              in descending order. Multiple values are given priority in the order in which they
     *                              are passed. (Acceptable values are: "id", "modified", "-id", "-modified")
     * @param string $series        (optional) Return only stories contained the specified series (accepts a comma-
     *                              separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCreatorStoryCollection(
        $creatorId,
        $characters = null,
        $comics = null,
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $offset = null,
        $orderBy = 'id',
        $series = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/creators/{creatorId}/stories';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'creatorId'     => $creatorId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'    => $characters,
            'comics'        => $comics,
            'events'        => $events,
            'limit'         => $limit,
            'modifiedSince' => $modifiedSince,
            'offset'        => $offset,
            'orderBy'       => (null != $orderBy) ? $orderBy : 'id',
            'series'        => $series,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\StoryDataWrapperModel');
    }

    /**
     * getComicStoryCollectionByComicId
     *
     * @param string $comicId       The comic ID.
     * @param string $characters    (optional) Return only stories which feature the specified characters (accepts a
     *                              comma-separated list of ids).
     * @param string $creators      (optional) Return only stories which feature work by the specified creators
     *                              (accepts a comma-separated list of ids).
     * @param string $events        (optional) Return only stories which take place during the specified events
     *                              (accepts a comma-separated list of ids).
     * @param string $limit         (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince (optional) Return only stories which have been modified since the specified date.
     * @param string $offset        (optional) Skip the specified number of resources.
     * @param string $orderBy       (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                              in descending order. Multiple values are given priority in the order in which they
     *                              are passed. (Acceptable values are: "id", "modified", "-id", "-modified")
     * @param string $series        (optional) Return only stories contained the specified series (accepts a comma-
     *                              separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getComicStoryCollectionByComicId(
        $comicId,
        $characters = null,
        $creators = null,
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $offset = null,
        $orderBy = 'id',
        $series = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/comics/{comicId}/stories';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'comicId'       => $comicId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'    => $characters,
            'creators'      => $creators,
            'events'        => $events,
            'limit'         => $limit,
            'modifiedSince' => $modifiedSince,
            'offset'        => $offset,
            'orderBy'       => (null != $orderBy) ? $orderBy : 'id',
            'series'        => $series,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\StoryDataWrapperModel');
    }

    /**
     * getCharacterStoryCollection
     *
     * @param string $characterId   The character ID.
     * @param string $comics        (optional) Return only stories contained in the specified (accepts a comma-
     *                              separated list of ids).
     * @param string $creators      (optional) Return only stories which feature work by the specified creators
     *                              (accepts a comma-separated list of ids).
     * @param string $events        (optional) Return only stories which take place during the specified events
     *                              (accepts a comma-separated list of ids).
     * @param string $limit         (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince (optional) Return only stories which have been modified since the specified date.
     * @param string $offset        (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy       (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                              in descending order. Multiple values are given priority in the order in which they
     *                              are passed. (Acceptable values are: "id", "modified", "-id", "-modified")
     * @param string $series        (optional) Return only stories contained the specified series (accepts a comma-
     *                              separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCharacterStoryCollection(
        $characterId,
        $comics = null,
        $creators = null,
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $offset = null,
        $orderBy = 'id',
        $series = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/characters/{characterId}/stories';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'characterId'   => $characterId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'comics'        => $comics,
            'creators'      => $creators,
            'events'        => $events,
            'limit'         => $limit,
            'modifiedSince' => $modifiedSince,
            'offset'        => $offset,
            'orderBy'       => (null != $orderBy) ? $orderBy : 'id',
            'series'        => $series,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\StoryDataWrapperModel');
    }

    /**
     * getStoryIndividual
     *
     * @param string $storyId Filter by story id.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getStoryIndividual(
        $storyId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/stories/{storyId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'storyId' => $storyId,
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
            throw new APIException('Story not found.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\StoryModel');
    }
}
