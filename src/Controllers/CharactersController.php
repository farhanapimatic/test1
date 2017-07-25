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
class CharactersController extends BaseController
{
    /**
     * @var CharactersController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return CharactersController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * getCharacterCollectionByStoryId
     *
     * @param string $storyId        The story ID.
     * @param string $comics         (optional) Return only characters which appear in the specified comics (accepts a
     *                               comma-separated list of ids).
     * @param string $events         (optional) Return only characters which appear comics that took place in the
     *                               specified events (accepts a comma-separated list of ids).
     * @param string $limit          (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince  (optional) Return only characters which have been modified since the specified
     *                               date.
     * @param string $name           (optional) Return only characters matching the specified full character name (e.g.
     *                               Spider-Man).
     * @param string $nameStartsWith (optional) Return characters with names that begin with the specified string (e.g.
     *                               Sp).
     * @param string $offset         (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy        (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                               in descending order. Multiple values are given priority in the order in which they
     *                               are passed. (Acceptable values are: "name", "modified", "-name", "-modified")
     * @param string $series         (optional) Return only characters which appear the specified series (accepts a
     *                               comma-separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCharacterCollectionByStoryId(
        $storyId,
        $comics = null,
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $name = null,
        $nameStartsWith = null,
        $offset = null,
        $orderBy = 'name',
        $series = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/stories/{storyId}/characters';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'storyId'        => $storyId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'comics'         => $comics,
            'events'         => $events,
            'limit'          => $limit,
            'modifiedSince'  => $modifiedSince,
            'name'           => $name,
            'nameStartsWith' => $nameStartsWith,
            'offset'         => $offset,
            'orderBy'        => (null != $orderBy) ? $orderBy : 'name',
            'series'         => $series,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\CharacterDataWrapperModel');
    }

    /**
     * getSeriesCharacterWrapper
     *
     * @param string $seriesId       The series id.
     * @param string $comics         (optional) Return only characters which appear in the specified comics (accepts a
     *                               comma-separated list of ids).
     * @param string $events         (optional) Return only characters which appear comics that took place in the
     *                               specified events (accepts a comma-separated list of ids).
     * @param string $limit          (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince  (optional) Return only characters which have been modified since the specified
     *                               date.
     * @param string $name           (optional) Return only characters matching the specified full character name (e.g.
     *                               Spider-Man).
     * @param string $nameStartsWith (optional) Return characters with names that begin with the specified string (e.g.
     *                               Sp).
     * @param string $offset         (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy        (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                               in descending order. Multiple values are given priority in the order in which they
     *                               are passed. (Acceptable values are: "name", "modified", "-name", "-modified")
     * @param string $stories        (optional) Return only characters which appear the specified stories (accepts a
     *                               comma-separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSeriesCharacterWrapper(
        $seriesId,
        $comics = null,
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $name = null,
        $nameStartsWith = null,
        $offset = null,
        $orderBy = 'name',
        $stories = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/series/{seriesId}/characters';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'seriesId'       => $seriesId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'comics'         => $comics,
            'events'         => $events,
            'limit'          => $limit,
            'modifiedSince'  => $modifiedSince,
            'name'           => $name,
            'nameStartsWith' => $nameStartsWith,
            'offset'         => $offset,
            'orderBy'        => (null != $orderBy) ? $orderBy : 'name',
            'stories'        => $stories,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\CharacterDataWrapperModel');
    }

    /**
     * getEventCharacterCollection
     *
     * @param string $eventId        The event ID
     * @param string $comics         (optional) Return only characters which appear in the specified comics (accepts a
     *                               comma-separated list of ids).
     * @param string $limit          (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince  (optional) Return only characters which have been modified since the specified
     *                               date.
     * @param string $name           (optional) Return only characters matching the specified full character name (e.g.
     *                               Spider-Man).
     * @param string $nameStartsWith (optional) Return characters with names that begin with the specified string (e.g.
     *                               Sp).
     * @param string $offset         (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy        (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                               in descending order. Multiple values are given priority in the order in which they
     *                               are passed. (Acceptable values are: "name", "modified", "-name", "-modified")
     * @param string $series         (optional) Return only characters which appear the specified series (accepts a
     *                               comma-separated list of ids).
     * @param string $stories        (optional) Return only characters which appear the specified stories (accepts a
     *                               comma-separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getEventCharacterCollection(
        $eventId,
        $comics = null,
        $limit = null,
        $modifiedSince = null,
        $name = null,
        $nameStartsWith = null,
        $offset = null,
        $orderBy = 'name',
        $series = null,
        $stories = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/events/{eventId}/characters';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'eventId'        => $eventId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'comics'         => $comics,
            'limit'          => $limit,
            'modifiedSince'  => $modifiedSince,
            'name'           => $name,
            'nameStartsWith' => $nameStartsWith,
            'offset'         => $offset,
            'orderBy'        => (null != $orderBy) ? $orderBy : 'name',
            'series'         => $series,
            'stories'        => $stories,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\CharacterDataWrapperModel');
    }

    /**
     * getComicCharacterCollection
     *
     * @param string $comicId        The comic id.
     * @param string $events         (optional) Return only characters which appear comics that took place in the
     *                               specified events (accepts a comma-separated list of ids).
     * @param string $limit          (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince  (optional) Return only characters which have been modified since the specified
     *                               date.
     * @param string $name           (optional) Return only characters matching the specified full character name (e.g.
     *                               Spider-Man).
     * @param string $nameStartsWith (optional) Return characters with names that begin with the specified string (e.g.
     *                               Sp).
     * @param string $offset         (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy        (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                               in descending order. Multiple values are given priority in the order in which they
     *                               are passed. (Acceptable values are: "name", "modified", "-name", "-modified")
     * @param string $series         (optional) Return only characters which appear the specified series (accepts a
     *                               comma-separated list of ids).
     * @param string $stories        (optional) Return only characters which appear the specified stories (accepts a
     *                               comma-separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getComicCharacterCollection(
        $comicId,
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $name = null,
        $nameStartsWith = null,
        $offset = null,
        $orderBy = 'name',
        $series = null,
        $stories = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/comics/{comicId}/characters';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'comicId'        => $comicId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'events'         => $events,
            'limit'          => $limit,
            'modifiedSince'  => $modifiedSince,
            'name'           => $name,
            'nameStartsWith' => $nameStartsWith,
            'offset'         => $offset,
            'orderBy'        => (null != $orderBy) ? $orderBy : 'name',
            'series'         => $series,
            'stories'        => $stories,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\CharacterDataWrapperModel');
    }

    /**
     * getCharacterIndividual
     *
     * @param string $characterId A single character id.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCharacterIndividual(
        $characterId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/characters/{characterId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'characterId' => $characterId,
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
            throw new APIException('Character not found.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\CharacterModel');
    }

    /**
     * getCharacterCollection
     *
     * @param string $comics         (optional) Return only characters which appear in the specified comics (accepts a
     *                               comma-separated list of ids).
     * @param string $events         (optional) Return only characters which appear in the specified events (accepts a
     *                               comma-separated list of ids).
     * @param string $limit          (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince  (optional) Return only characters which have been modified since the specified
     *                               date.
     * @param string $name           (optional) Return only characters matching the specified full character name (e.g.
     *                               Spider-Man).
     * @param string $nameStartsWith (optional) Return characters with names that begin with the specified string (e.g.
     *                               Sp).
     * @param string $offset         (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy        (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                               in descending order. Multiple values are given priority in the order in which they
     *                               are passed. (Acceptable values are: "name", "modified", "-name", "-modified")
     * @param string $series         (optional) Return only characters which appear the specified series (accepts a
     *                               comma-separated list of ids).
     * @param string $stories        (optional) Return only characters which appear the specified stories (accepts a
     *                               comma-separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCharacterCollection(
        $comics = null,
        $events = null,
        $limit = null,
        $modifiedSince = null,
        $name = null,
        $nameStartsWith = null,
        $offset = null,
        $orderBy = 'name',
        $series = null,
        $stories = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/characters';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'comics'         => $comics,
            'events'         => $events,
            'limit'          => $limit,
            'modifiedSince'  => $modifiedSince,
            'name'           => $name,
            'nameStartsWith' => $nameStartsWith,
            'offset'         => $offset,
            'orderBy'        => (null != $orderBy) ? $orderBy : 'name',
            'series'         => $series,
            'stories'        => $stories,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\CharacterDataWrapperModel');
    }
}
