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
class CreatorsController extends BaseController
{
    /**
     * @var CreatorsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return CreatorsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * getCreatorIndividual
     *
     * @param string $creatorId A single creator id.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCreatorIndividual(
        $creatorId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/creators/{creatorId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'creatorId' => $creatorId,
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
            throw new APIException('Creator not found.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\CreatorModel');
    }

    /**
     * getCreatorCollectionByComicId
     *
     * @param string $comicId              The comic id.
     * @param string $comics               (optional) Return only creators who worked on in the specified comics
     *                                     (accepts a comma-separated list of ids).
     * @param string $firstName            (optional) Filter by creator first name (e.g. brian).
     * @param string $firstNameStartsWith  (optional) Filter by creator first names that match critera (e.g. B, St L).
     * @param string $lastName             (optional) Filter by creator last name (e.g. Bendis).
     * @param string $lastNameStartsWith   (optional) Filter by creator last names that match critera (e.g. Ben).
     * @param string $limit                (optional) Limit the result set to the specified number of resources.
     * @param string $middleName           (optional) Filter by creator middle name (e.g. Michael).
     * @param string $middleNameStartsWith (optional) Filter by creator middle names that match critera (e.g. Mi).
     * @param string $modifiedSince        (optional) Return only creators which have been modified since the specified
     *                                     date.
     * @param string $nameStartsWith       (optional) Filter by creator names that match critera (e.g. B, St L).
     * @param string $offset               (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy              (optional) Order the result set by a field or fields. Add a "-" to the value
     *                                     sort in descending order. Multiple values are given priority in the order in
     *                                     which they are passed. (Acceptable values are: "lastName", "firstName",
     *                                     "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName",
     *                                     "-suffix", "-modified")
     * @param string $series               (optional) Return only creators who worked on the specified series (accepts
     *                                     a comma-separated list of ids).
     * @param string $stories              (optional) Return only creators who worked on the specified stories (accepts
     *                                     a comma-separated list of ids).
     * @param string $suffix               (optional) Filter by suffix or honorific (e.g. Jr., Sr.).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCreatorCollectionByComicId(
        $comicId,
        $comics = null,
        $firstName = null,
        $firstNameStartsWith = null,
        $lastName = null,
        $lastNameStartsWith = null,
        $limit = null,
        $middleName = null,
        $middleNameStartsWith = null,
        $modifiedSince = null,
        $nameStartsWith = null,
        $offset = null,
        $orderBy = 'lastName',
        $series = null,
        $stories = null,
        $suffix = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/comics/{comicId}/creators';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'comicId'              => $comicId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'comics'               => $comics,
            'firstName'            => $firstName,
            'firstNameStartsWith'  => $firstNameStartsWith,
            'lastName'             => $lastName,
            'lastNameStartsWith'   => $lastNameStartsWith,
            'limit'                => $limit,
            'middleName'           => $middleName,
            'middleNameStartsWith' => $middleNameStartsWith,
            'modifiedSince'        => $modifiedSince,
            'nameStartsWith'       => $nameStartsWith,
            'offset'               => $offset,
            'orderBy'              => (null != $orderBy) ? $orderBy : 'lastName',
            'series'               => $series,
            'stories'              => $stories,
            'suffix'               => $suffix,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'APIMATIC 2.0',
            'Accept'             => 'application/json'
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\CreatorDataWrapperModel');
    }

    /**
     * getCreatorCollection
     *
     * @param string $comics               (optional) Return only creators who worked on in the specified comics
     *                                     (accepts a comma-separated list of ids).
     * @param string $events               (optional) Return only creators who worked on comics that took place in the
     *                                     specified events (accepts a comma-separated list of ids).
     * @param string $firstName            (optional) Filter by creator first name (e.g. Brian).
     * @param string $firstNameStartsWith  (optional) Filter by creator first names that match critera (e.g. B, St L).
     * @param string $lastName             (optional) Filter by creator last name (e.g. Bendis).
     * @param string $lastNameStartsWith   (optional) Filter by creator last names that match critera (e.g. Ben).
     * @param string $limit                (optional) Limit the result set to the specified number of resources.
     * @param string $middleName           (optional) Filter by creator middle name (e.g. Michael).
     * @param string $middleNameStartsWith (optional) Filter by creator middle names that match critera (e.g. Mi).
     * @param string $modifiedSince        (optional) Return only creators which have been modified since the specified
     *                                     date.
     * @param string $nameStartsWith       (optional) Filter by creator names that match critera (e.g. B, St L).
     * @param string $offset               (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy              (optional) Order the result set by a field or fields. Add a "-" to the value
     *                                     sort in descending order. Multiple values are given priority in the order in
     *                                     which they are passed. (Acceptable values are: "lastName", "firstName",
     *                                     "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName",
     *                                     "-suffix", "-modified")
     * @param string $series               (optional) Return only creators who worked on the specified series (accepts
     *                                     a comma-separated list of ids).
     * @param string $stories              (optional) Return only creators who worked on the specified stories (accepts
     *                                     a comma-separated list of ids).
     * @param string $suffix               (optional) Filter by suffix or honorific (e.g. Jr., Sr.).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCreatorCollection(
        $comics = null,
        $events = null,
        $firstName = null,
        $firstNameStartsWith = null,
        $lastName = null,
        $lastNameStartsWith = null,
        $limit = null,
        $middleName = null,
        $middleNameStartsWith = null,
        $modifiedSince = null,
        $nameStartsWith = null,
        $offset = null,
        $orderBy = 'lastName',
        $series = null,
        $stories = null,
        $suffix = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/creators';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'comics'               => $comics,
            'events'               => $events,
            'firstName'            => $firstName,
            'firstNameStartsWith'  => $firstNameStartsWith,
            'lastName'             => $lastName,
            'lastNameStartsWith'   => $lastNameStartsWith,
            'limit'                => $limit,
            'middleName'           => $middleName,
            'middleNameStartsWith' => $middleNameStartsWith,
            'modifiedSince'        => $modifiedSince,
            'nameStartsWith'       => $nameStartsWith,
            'offset'               => $offset,
            'orderBy'              => (null != $orderBy) ? $orderBy : 'lastName',
            'series'               => $series,
            'stories'              => $stories,
            'suffix'               => $suffix,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'APIMATIC 2.0',
            'Accept'             => 'application/json'
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\CreatorDataWrapperModel');
    }

    /**
     * getCreatorCollectionByEventId
     *
     * @param string $eventId              The event ID.
     * @param string $comics               (optional) Return only creators who worked on in the specified comics
     *                                     (accepts a comma-separated list of ids).
     * @param string $firstName            (optional) Filter by creator first name (e.g. brian).
     * @param string $firstNameStartsWith  (optional) Filter by creator first names that match critera (e.g. B, St L).
     * @param string $lastName             (optional) Filter by creator last name (e.g. Bendis).
     * @param string $lastNameStartsWith   (optional) Filter by creator last names that match critera (e.g. Ben).
     * @param string $limit                (optional) Limit the result set to the specified number of resources.
     * @param string $middleName           (optional) Filter by creator middle name (e.g. Michael).
     * @param string $middleNameStartsWith (optional) Filter by creator middle names that match critera (e.g. Mi).
     * @param string $modifiedSince        (optional) Return only creators which have been modified since the specified
     *                                     date.
     * @param string $nameStartsWith       (optional) Filter by creator names that match critera (e.g. B, St L).
     * @param string $offset               (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy              (optional) Order the result set by a field or fields. Add a "-" to the value
     *                                     sort in descending order. Multiple values are given priority in the order in
     *                                     which they are passed. (Acceptable values are: "lastName", "firstName",
     *                                     "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName",
     *                                     "-suffix", "-modified")
     * @param string $series               (optional) Return only creators who worked on the specified series (accepts
     *                                     a comma-separated list of ids).
     * @param string $stories              (optional) Return only creators who worked on the specified stories (accepts
     *                                     a comma-separated list of ids).
     * @param string $suffix               (optional) Filter by suffix or honorific (e.g. Jr., Sr.).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCreatorCollectionByEventId(
        $eventId,
        $comics = null,
        $firstName = null,
        $firstNameStartsWith = null,
        $lastName = null,
        $lastNameStartsWith = null,
        $limit = null,
        $middleName = null,
        $middleNameStartsWith = null,
        $modifiedSince = null,
        $nameStartsWith = null,
        $offset = null,
        $orderBy = 'lastName',
        $series = null,
        $stories = null,
        $suffix = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/events/{eventId}/creators';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'eventId'              => $eventId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'comics'               => $comics,
            'firstName'            => $firstName,
            'firstNameStartsWith'  => $firstNameStartsWith,
            'lastName'             => $lastName,
            'lastNameStartsWith'   => $lastNameStartsWith,
            'limit'                => $limit,
            'middleName'           => $middleName,
            'middleNameStartsWith' => $middleNameStartsWith,
            'modifiedSince'        => $modifiedSince,
            'nameStartsWith'       => $nameStartsWith,
            'offset'               => $offset,
            'orderBy'              => (null != $orderBy) ? $orderBy : 'lastName',
            'series'               => $series,
            'stories'              => $stories,
            'suffix'               => $suffix,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'APIMATIC 2.0',
            'Accept'             => 'application/json'
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\CreatorDataWrapperModel');
    }

    /**
     * getCreatorCollectionBySeriesId
     *
     * @param string $seriesId             The series ID.
     * @param string $comics               (optional) Return only creators who worked on in the specified comics
     *                                     (accepts a comma-separated list of ids).
     * @param string $events               (optional) Return only creators who worked on comics that took place in the
     *                                     specified events (accepts a comma-separated list of ids).
     * @param string $firstName            (optional) Filter by creator first name (e.g. brian).
     * @param string $firstNameStartsWith  (optional) Filter by creator first names that match critera (e.g. B, St L).
     * @param string $lastName             (optional) Filter by creator last name (e.g. Bendis).
     * @param string $lastNameStartsWith   (optional) Filter by creator last names that match critera (e.g. Ben).
     * @param string $limit                (optional) Limit the result set to the specified number of resources.
     * @param string $middleName           (optional) Filter by creator middle name (e.g. Michael).
     * @param string $middleNameStartsWith (optional) Filter by creator middle names that match critera (e.g. Mi).
     * @param string $modifiedSince        (optional) Return only creators which have been modified since the specified
     *                                     date.
     * @param string $nameStartsWith       (optional) Filter by creator names that match critera (e.g. B, St L).
     * @param string $offset               (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy              (optional) Order the result set by a field or fields. Add a "-" to the value
     *                                     sort in descending order. Multiple values are given priority in the order in
     *                                     which they are passed. (Acceptable values are: "lastName", "firstName",
     *                                     "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName",
     *                                     "-suffix", "-modified")
     * @param string $stories              (optional) Return only creators who worked on the specified stories (accepts
     *                                     a comma-separated list of ids).
     * @param string $suffix               (optional) Filter by suffix or honorific (e.g. Jr., Sr.).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCreatorCollectionBySeriesId(
        $seriesId,
        $comics = null,
        $events = null,
        $firstName = null,
        $firstNameStartsWith = null,
        $lastName = null,
        $lastNameStartsWith = null,
        $limit = null,
        $middleName = null,
        $middleNameStartsWith = null,
        $modifiedSince = null,
        $nameStartsWith = null,
        $offset = null,
        $orderBy = 'lastName',
        $stories = null,
        $suffix = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/series/{seriesId}/creators';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'seriesId'             => $seriesId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'comics'               => $comics,
            'events'               => $events,
            'firstName'            => $firstName,
            'firstNameStartsWith'  => $firstNameStartsWith,
            'lastName'             => $lastName,
            'lastNameStartsWith'   => $lastNameStartsWith,
            'limit'                => $limit,
            'middleName'           => $middleName,
            'middleNameStartsWith' => $middleNameStartsWith,
            'modifiedSince'        => $modifiedSince,
            'nameStartsWith'       => $nameStartsWith,
            'offset'               => $offset,
            'orderBy'              => (null != $orderBy) ? $orderBy : 'lastName',
            'stories'              => $stories,
            'suffix'               => $suffix,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'APIMATIC 2.0',
            'Accept'             => 'application/json'
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\CreatorDataWrapperModel');
    }

    /**
     * getCreatorCollectionByStoryId
     *
     * @param string $storyId              The story ID.
     * @param string $comics               (optional) Return only creators who worked on in the specified comics
     *                                     (accepts a comma-separated list of ids).
     * @param string $events               (optional) Return only creators who worked on comics that took place in the
     *                                     specified events (accepts a comma-separated list of ids).
     * @param string $firstName            (optional) Filter by creator first name (e.g. brian).
     * @param string $firstNameStartsWith  (optional) Filter by creator first names that match critera (e.g. B, St L).
     * @param string $lastName             (optional) Filter by creator last name (e.g. Bendis).
     * @param string $lastNameStartsWith   (optional) Filter by creator last names that match critera (e.g. Ben).
     * @param string $limit                (optional) Limit the result set to the specified number of resources.
     * @param string $middleName           (optional) Filter by creator middle name (e.g. Michael).
     * @param string $middleNameStartsWith (optional) Filter by creator middle names that match critera (e.g. Mi).
     * @param string $modifiedSince        (optional) Return only creators which have been modified since the specified
     *                                     date.
     * @param string $nameStartsWith       (optional) Filter by creator names that match critera (e.g. B, St L).
     * @param string $offset               (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy              (optional) Order the result set by a field or fields. Add a "-" to the value
     *                                     sort in descending order. Multiple values are given priority in the order in
     *                                     which they are passed. (Acceptable values are: "lastName", "firstName",
     *                                     "middleName", "suffix", "modified", "-lastName", "-firstName", "-middleName",
     *                                     "-suffix", "-modified")
     * @param string $series               (optional) Return only creators who worked on the specified series (accepts
     *                                     a comma-separated list of ids).
     * @param string $suffix               (optional) Filter by suffix or honorific (e.g. Jr., Sr.).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCreatorCollectionByStoryId(
        $storyId,
        $comics = null,
        $events = null,
        $firstName = null,
        $firstNameStartsWith = null,
        $lastName = null,
        $lastNameStartsWith = null,
        $limit = null,
        $middleName = null,
        $middleNameStartsWith = null,
        $modifiedSince = null,
        $nameStartsWith = null,
        $offset = null,
        $orderBy = 'lastName',
        $series = null,
        $suffix = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/stories/{storyId}/creators';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'storyId'              => $storyId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'comics'               => $comics,
            'events'               => $events,
            'firstName'            => $firstName,
            'firstNameStartsWith'  => $firstNameStartsWith,
            'lastName'             => $lastName,
            'lastNameStartsWith'   => $lastNameStartsWith,
            'limit'                => $limit,
            'middleName'           => $middleName,
            'middleNameStartsWith' => $middleNameStartsWith,
            'modifiedSince'        => $modifiedSince,
            'nameStartsWith'       => $nameStartsWith,
            'offset'               => $offset,
            'orderBy'              => (null != $orderBy) ? $orderBy : 'lastName',
            'series'               => $series,
            'suffix'               => $suffix,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'APIMATIC 2.0',
            'Accept'             => 'application/json'
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\CreatorDataWrapperModel');
    }
}
