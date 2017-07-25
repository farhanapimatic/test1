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
class EventsController extends BaseController
{
    /**
     * @var EventsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return EventsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * getEventsCollectionByStoryId
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['storyId']        The story ID.
     * @param string $options['characters']     (optional) Return only events which feature the specified characters
     *                                          (accepts a comma-separated list of ids).
     * @param string $options['comics']         (optional) Return only events which take place in the specified comics
     *                                          (accepts a comma-separated list of ids).
     * @param string $options['creators']       (optional) Return only events which feature work by the specified
     *                                          creators (accepts a comma-separated list of ids).
     * @param string $options['limit']          (optional) Limit the result set to the specified number of resources.
     * @param string $options['modifiedSince']  (optional) Return only events which have been modified since the
     *                                          specified date.
     * @param string $options['name']           (optional) Filter the event list by name.
     * @param string $options['nameStartsWith'] (optional) Return events with names that begin with the specified
     *                                          string (e.g. Sp).
     * @param string $options['offset']         (optional) Skip the specified number of resources in the result set.
     * @param string $options['orderBy']        (optional) Order the result set by a field or fields. Add a "-" to the
     *                                          value sort in descending order. Multiple values are given priority in
     *                                          the order in which they are passed. (Acceptable values are: "name",
     *                                          "startDate", "modified", "-name", "-startDate", "-modified")
     * @param string $options['series']         (optional) Return only events which are part of the specified series
     *                                          (accepts a comma-separated list of ids).
     * @param  array  $queryParameters    Additional optional query parameters are supported by this endpoint
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getEventsCollectionByStoryId(
        $options,
        $queryParameters = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/stories/{storyId}/events';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'storyId'        => $this->val($options, 'storyId'),
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'     => $this->val($options, 'characters'),
            'comics'         => $this->val($options, 'comics'),
            'creators'       => $this->val($options, 'creators'),
            'limit'          => $this->val($options, 'limit'),
            'modifiedSince'  => $this->val($options, 'modifiedSince'),
            'name'           => $this->val($options, 'name'),
            'nameStartsWith' => $this->val($options, 'nameStartsWith'),
            'offset'         => $this->val($options, 'offset'),
            'orderBy'        => $this->val($options, 'orderBy', 'name'),
            'series'         => $this->val($options, 'series'),
            'apikey' => Configuration::$apikey,
        ));

        //append optional parameters to the query
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, $queryParameters);

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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\EventDataWrapperModel');
    }

    /**
     * getEventsCollectionBySeriesId
     *
     * @param string $seriesId       The series ID.
     * @param string $characters     (optional) Return only events which feature the specified characters (accepts a
     *                               comma-separated list of ids).
     * @param string $comics         (optional) Return only events which take place in the specified comics (accepts a
     *                               comma-separated list of ids).
     * @param string $creators       (optional) Return only events which feature work by the specified creators
     *                               (accepts a comma-separated list of ids).
     * @param string $limit          (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince  (optional) Return only events which have been modified since the specified date.
     * @param string $name           (optional) Filter the event list by name.
     * @param string $nameStartsWith (optional) Return events with names that begin with the specified string (e.g. Sp).
     * @param string $offset         (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy        (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                               in descending order. Multiple values are given priority in the order in which they
     *                               are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-
     *                               startDate", "-modified")
     * @param string $stories        (optional) Return only events which contain the specified stories (accepts a comma-
     *                               separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getEventsCollectionBySeriesId(
        $seriesId,
        $characters = null,
        $comics = null,
        $creators = null,
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
        $_queryBuilder = $_queryBuilder.'/v1/public/series/{seriesId}/events';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'seriesId'       => $seriesId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'     => $characters,
            'comics'         => $comics,
            'creators'       => $creators,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\EventDataWrapperModel');
    }

    /**
     * getCreatorEventsCollection
     *
     * @param string $creatorId      The creator ID.
     * @param string $characters     (optional) Return only events which feature the specified characters (accepts a
     *                               comma-separated list of ids).
     * @param string $comics         (optional) Return only events which take place in the specified comics (accepts a
     *                               comma-separated list of ids).
     * @param string $limit          (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince  (optional) Return only events which have been modified since the specified date.
     * @param string $name           (optional) Filter the event list by name.
     * @param string $nameStartsWith (optional) Return events with names that begin with the specified string (e.g. Sp).
     * @param string $offset         (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy        (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                               in descending order. Multiple values are given priority in the order in which they
     *                               are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-
     *                               startDate", "-modified")
     * @param string $series         (optional) Return only events which are part of the specified series (accepts a
     *                               comma-separated list of ids).
     * @param string $stories        (optional) Return only events which contain the specified stories (accepts a comma-
     *                               separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCreatorEventsCollection(
        $creatorId,
        $characters = null,
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
        $_queryBuilder = $_queryBuilder.'/v1/public/creators/{creatorId}/events';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'creatorId'      => $creatorId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'     => $characters,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\EventDataWrapperModel');
    }

    /**
     * getIssueEventsCollection
     *
     * @param string $comicId        The comic ID.
     * @param string $characters     (optional) Return only events which feature the specified characters (accepts a
     *                               comma-separated list of ids).
     * @param string $creators       (optional) Return only events which feature work by the specified creators
     *                               (accepts a comma-separated list of ids).
     * @param string $limit          (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince  (optional) Return only events which have been modified since the specified date.
     * @param string $name           (optional) Filter the event list by name.
     * @param string $nameStartsWith (optional) Return events with names that begin with the specified string (e.g. Sp).
     * @param string $offset         (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy        (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                               in descending order. Multiple values are given priority in the order in which they
     *                               are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-
     *                               startDate", "-modified")
     * @param string $series         (optional) Return only events which are part of the specified series (accepts a
     *                               comma-separated list of ids).
     * @param string $stories        (optional) Return only events which contain the specified stories (accepts a comma-
     *                               separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getIssueEventsCollection(
        $comicId,
        $characters = null,
        $creators = null,
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
        $_queryBuilder = $_queryBuilder.'/v1/public/comics/{comicId}/events';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'comicId'        => $comicId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'     => $characters,
            'creators'       => $creators,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\EventDataWrapperModel');
    }

    /**
     * getCharacterEventsCollection
     *
     * @param string $characterId    The character ID.
     * @param string $comics         (optional) Return only events which take place in the specified comics (accepts a
     *                               comma-separated list of ids).
     * @param string $creators       (optional) Return only events which feature work by the specified creators
     *                               (accepts a comma-separated list of ids).
     * @param string $limit          (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince  (optional) Return only events which have been modified since the specified date.
     * @param string $name           (optional) Filter the event list by name.
     * @param string $nameStartsWith (optional) Return events with names that begin with the specified string (e.g. Sp).
     * @param string $offset         (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy        (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                               in descending order. Multiple values are given priority in the order in which they
     *                               are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-
     *                               startDate", "-modified")
     * @param string $series         (optional) Return only events which are part of the specified series (accepts a
     *                               comma-separated list of ids).
     * @param string $stories        (optional) Return only events which contain the specified stories (accepts a comma-
     *                               separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCharacterEventsCollection(
        $characterId,
        $comics = null,
        $creators = null,
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
        $_queryBuilder = $_queryBuilder.'/v1/public/characters/{characterId}/events';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'characterId'    => $characterId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'comics'         => $comics,
            'creators'       => $creators,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\EventDataWrapperModel');
    }

    /**
     * getEventIndividual
     *
     * @param string $eventId A single event.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getEventIndividual(
        $eventId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/events/{eventId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'eventId' => $eventId,
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
            throw new APIException('Event not found.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\EventModel');
    }

    /**
     * getEventsCollection
     *
     * @param string $characters     (optional) Return only events which feature the specified characters (accepts a
     *                               comma-separated list of ids).
     * @param string $comics         (optional) Return only events which take place in the specified comics (accepts a
     *                               comma-separated list of ids).
     * @param string $creators       (optional) Return only events which feature work by the specified creators
     *                               (accepts a comma-separated list of ids).
     * @param string $limit          (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince  (optional) Return only events which have been modified since the specified date.
     * @param string $name           (optional) Return only events which match the specified name.
     * @param string $nameStartsWith (optional) Return events with names that begin with the specified string (e.g. Sp).
     * @param string $offset         (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy        (optional) Order the result set by a field or fields. Add a "-" to the value sort
     *                               in descending order. Multiple values are given priority in the order in which they
     *                               are passed. (Acceptable values are: "name", "startDate", "modified", "-name", "-
     *                               startDate", "-modified")
     * @param string $series         (optional) Return only events which are part of the specified series (accepts a
     *                               comma-separated list of ids).
     * @param string $stories        (optional) Return only events which take place in the specified stories (accepts a
     *                               comma-separated list of ids).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getEventsCollection(
        $characters = null,
        $comics = null,
        $creators = null,
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
        $_queryBuilder = $_queryBuilder.'/v1/public/events';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'     => $characters,
            'comics'         => $comics,
            'creators'       => $creators,
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\EventDataWrapperModel');
    }


    /**
    * Array access utility method
     * @param  array          $arr         Array of values to read from
     * @param  string         $key         Key to get the value from the array
     * @param  mixed|null     $default     Default value to use if the key was not found
     * @return mixed
     */
    private function val($arr, $key, $default = null)
    {
        if (isset($arr[$key])) {
            return is_bool($arr[$key]) ? var_export($arr[$key], true) : $arr[$key];
        }
        return $default;
    }
}
