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
class ComicsController extends BaseController
{
    /**
     * @var ComicsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ComicsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * getComicIndividual
     *
     * @param string $comicId A single comic.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getComicIndividual(
        $comicId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/comics/{comicId}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'comicId' => $comicId,
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
            throw new APIException('Comic not found.', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\ComicModel');
    }

    /**
     * getComicsCharacterCollection
     *
     * @param string $characterId       The character id.
     * @param string $collaborators     (optional) Return only comics in which the specified creators worked together
     *                                  (for example in which BOTH Stan Lee and Jack Kirby did work).
     * @param string $creators          (optional) Return only comics which feature work by the specified creators
     *                                  (accepts a comma-separated list of ids).
     * @param string $dateDescriptor    (optional) Return comics within a predefined date range.
     * @param string $dateRange         (optional) Return comics within a predefined date range.  Dates must be
     *                                  specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably
     *                                  formatted as YYYY-MM-DD but may be sent as any common date format.
     * @param string $diamondCode       (optional) Filter by diamond code.
     * @param string $digitalId         (optional) Filter by digital comic id.
     * @param string $ean               (optional) Filter by EAN.
     * @param string $events            (optional) Return only comics which take place in the specified events (accepts
     *                                  a comma-separated list of ids).
     * @param string $format            (optional) Filter by the issue format (e.g. comic, digital comic, hardcover).
     *                                  (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover",
     *                                  "digest", "graphic novel", "digital comic", "infinite comic")
     * @param string $formatType        (optional) Filter by the issue format type (comic or collection).
     * @param string $hasDigitalIssue   (optional) Include only results which are available digitally. (Acceptable
     *                                  values are: "true")
     * @param string $isbn              (optional) Filter by ISBN.
     * @param string $issn              (optional) Filter by ISSN.
     * @param string $issueNumber       (optional) Return only issues in series whose issue number matches the input.
     * @param string $limit             (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince     (optional) Return only comics which have been modified since the specified date.
     * @param string $noVariants        (optional) Exclude variant comics from the result set. (Acceptable values are:
     *                                  "true")
     * @param string $offset            (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy           (optional) Order the result set by a field or fields. Add a "-" to the value
     *                                  sort in descending order. Multiple values are given priority in the order in
     *                                  which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title",
     *                                  "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber",
     *                                  "-modified")
     * @param string $series            (optional) Return only comics which are part of the specified series (accepts a
     *                                  comma-separated list of ids).
     * @param string $sharedAppearances (optional) Return only comics in which the specified characters appear together
     *                                  (for example in which BOTH Spider-Man and Wolverine appear).
     * @param string $startYear         (optional) Return only issues in series whose start year matches the input.
     * @param string $stories           (optional) Return only comics which contain the specified stories (accepts a
     *                                  comma-separated list of ids).
     * @param string $title             (optional) Return only issues in series whose title matches the input.
     * @param string $titleStartsWith   (optional) Return only issues in series whose title starts with the input.
     * @param string $upc               (optional) Filter by UPC.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getComicsCharacterCollection(
        $characterId,
        $collaborators = null,
        $creators = null,
        $dateDescriptor = null,
        $dateRange = null,
        $diamondCode = null,
        $digitalId = null,
        $ean = null,
        $events = null,
        $format = 'comic',
        $formatType = null,
        $hasDigitalIssue = 'true',
        $isbn = null,
        $issn = null,
        $issueNumber = null,
        $limit = null,
        $modifiedSince = null,
        $noVariants = 'true',
        $offset = null,
        $orderBy = 'focDate',
        $series = null,
        $sharedAppearances = null,
        $startYear = null,
        $stories = null,
        $title = null,
        $titleStartsWith = null,
        $upc = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/characters/{characterId}/comics';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'characterId'       => $characterId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'collaborators'     => $collaborators,
            'creators'          => $creators,
            'dateDescriptor'    => $dateDescriptor,
            'dateRange'         => $dateRange,
            'diamondCode'       => $diamondCode,
            'digitalId'         => $digitalId,
            'ean'               => $ean,
            'events'            => $events,
            'format'            => (null != $format) ? $format : 'comic',
            'formatType'        => $formatType,
            'hasDigitalIssue'   => (null != $hasDigitalIssue) ? $hasDigitalIssue : 'true',
            'isbn'              => $isbn,
            'issn'              => $issn,
            'issueNumber'       => $issueNumber,
            'limit'             => $limit,
            'modifiedSince'     => $modifiedSince,
            'noVariants'        => (null != $noVariants) ? $noVariants : 'true',
            'offset'            => $offset,
            'orderBy'           => (null != $orderBy) ? $orderBy : 'focDate',
            'series'            => $series,
            'sharedAppearances' => $sharedAppearances,
            'startYear'         => $startYear,
            'stories'           => $stories,
            'title'             => $title,
            'titleStartsWith'   => $titleStartsWith,
            'upc'               => $upc,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'APIMATIC 2.0',
            'Accept'          => 'application/json'
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\ComicDataWrapperModel');
    }

    /**
     * getComicsCollection
     *
     * @param string $characters        (optional) Return only comics which feature the specified characters (accepts a
     *                                  comma-separated list of ids).
     * @param string $collaborators     (optional) Return only comics in which the specified creators worked together
     *                                  (for example in which BOTH Stan Lee and Jack Kirby did work). Accepts a comma-
     *                                  separated list of ids.
     * @param string $creators          (optional) Return only comics which feature work by the specified creators
     *                                  (accepts a comma-separated list of ids).
     * @param string $dateDescriptor    (optional) Return comics within a predefined date range.
     * @param string $dateRange         (optional) Return comics within a predefined date range.  Dates must be
     *                                  specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably
     *                                  formatted as YYYY-MM-DD but may be sent as any common date format.
     * @param string $diamondCode       (optional) Filter by diamond code.
     * @param string $digitalId         (optional) Filter by digital comic id.
     * @param string $ean               (optional) Filter by EAN.
     * @param string $events            (optional) Return only comics which take place in the specified events (accepts
     *                                  a comma-separated list of ids).
     * @param string $format            (optional) Filter by the issue format (e.g. comic, digital comic, hardcover).
     *                                  (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover",
     *                                  "digest", "graphic novel", "digital comic", "infinite comic")
     * @param string $formatType        (optional) Filter by the issue format type (comic or collection).
     * @param string $hasDigitalIssue   (optional) Include only results which are available digitally. (Acceptable
     *                                  values are: "true")
     * @param string $isbn              (optional) Filter by ISBN.
     * @param string $issn              (optional) Filter by ISSN.
     * @param string $issueNumber       (optional) Return only issues in series whose issue number matches the input.
     * @param string $limit             (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince     (optional) Return only comics which have been modified since the specified date.
     * @param string $noVariants        (optional) Exclude variants (alternate covers, secondary printings, director's
     *                                  cuts, etc.) from the result set. (Acceptable values are: "true")
     * @param string $offset            (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy           (optional) Order the result set by a field or fields. Add a "-" to the value
     *                                  sort in descending order. Multiple values are given priority in the order in
     *                                  which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title",
     *                                  "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber",
     *                                  "-modified")
     * @param string $series            (optional) Return only comics which are part of the specified series (accepts a
     *                                  comma-separated list of ids).
     * @param string $sharedAppearances (optional) Return only comics in which the specified characters appear together
     *                                  (for example in which BOTH Spider-Man and Wolverine appear). Accepts a comma-
     *                                  separated list of ids.
     * @param string $startYear         (optional) Return only issues in series whose start year matches the input.
     * @param string $stories           (optional) Return only comics which contain the specified stories (accepts a
     *                                  comma-separated list of ids).
     * @param string $title             (optional) Return only issues in series whose title matches the input.
     * @param string $titleStartsWith   (optional) Return only issues in series whose title starts with the input.
     * @param string $upc               (optional) Filter by UPC.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getComicsCollection(
        $characters = null,
        $collaborators = null,
        $creators = null,
        $dateDescriptor = null,
        $dateRange = null,
        $diamondCode = null,
        $digitalId = null,
        $ean = null,
        $events = null,
        $format = 'comic',
        $formatType = null,
        $hasDigitalIssue = 'true',
        $isbn = null,
        $issn = null,
        $issueNumber = null,
        $limit = null,
        $modifiedSince = null,
        $noVariants = 'true',
        $offset = null,
        $orderBy = 'focDate',
        $series = null,
        $sharedAppearances = null,
        $startYear = null,
        $stories = null,
        $title = null,
        $titleStartsWith = null,
        $upc = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/comics';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'        => $characters,
            'collaborators'     => $collaborators,
            'creators'          => $creators,
            'dateDescriptor'    => $dateDescriptor,
            'dateRange'         => $dateRange,
            'diamondCode'       => $diamondCode,
            'digitalId'         => $digitalId,
            'ean'               => $ean,
            'events'            => $events,
            'format'            => (null != $format) ? $format : 'comic',
            'formatType'        => $formatType,
            'hasDigitalIssue'   => (null != $hasDigitalIssue) ? $hasDigitalIssue : 'true',
            'isbn'              => $isbn,
            'issn'              => $issn,
            'issueNumber'       => $issueNumber,
            'limit'             => $limit,
            'modifiedSince'     => $modifiedSince,
            'noVariants'        => (null != $noVariants) ? $noVariants : 'true',
            'offset'            => $offset,
            'orderBy'           => (null != $orderBy) ? $orderBy : 'focDate',
            'series'            => $series,
            'sharedAppearances' => $sharedAppearances,
            'startYear'         => $startYear,
            'stories'           => $stories,
            'title'             => $title,
            'titleStartsWith'   => $titleStartsWith,
            'upc'               => $upc,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'APIMATIC 2.0',
            'Accept'          => 'application/json'
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\ComicDataWrapperModel');
    }

    /**
     * getComicsCollectionByCreatorId
     *
     * @param string $creatorId         The creator ID.
     * @param string $characters        (optional) Return only comics which feature the specified characters (accepts a
     *                                  comma-separated list of ids).
     * @param string $collaborators     (optional) Return only comics in which the specified creators worked together
     *                                  (for example in which BOTH Stan Lee and Jack Kirby did work).
     * @param string $dateDescriptor    (optional) Return comics within a predefined date range.
     * @param string $dateRange         (optional) Return comics within a predefined date range.  Dates must be
     *                                  specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably
     *                                  formatted as YYYY-MM-DD but may be sent as any common date format.
     * @param string $diamondCode       (optional) Filter by diamond code.
     * @param string $digitalId         (optional) Filter by digital comic id.
     * @param string $ean               (optional) Filter by EAN.
     * @param string $events            (optional) Return only comics which take place in the specified events (accepts
     *                                  a comma-separated list of ids).
     * @param string $format            (optional) Filter by the issue format (e.g. comic, digital comic, hardcover).
     *                                  (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover",
     *                                  "digest", "graphic novel", "digital comic", "infinite comic")
     * @param string $formatType        (optional) Filter by the issue format type (comic or collection).
     * @param string $hasDigitalIssue   (optional) Include only results which are available digitally. (Acceptable
     *                                  values are: "true")
     * @param string $isbn              (optional) Filter by ISBN.
     * @param string $issn              (optional) Filter by ISSN.
     * @param string $issueNumber       (optional) Return only issues in series whose issue number matches the input.
     * @param string $limit             (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince     (optional) Return only comics which have been modified since the specified date.
     * @param string $noVariants        (optional) Exclude variant comics from the result set. (Acceptable values are:
     *                                  "true")
     * @param string $offset            (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy           (optional) Order the result set by a field or fields. Add a "-" to the value
     *                                  sort in descending order. Multiple values are given priority in the order in
     *                                  which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title",
     *                                  "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber",
     *                                  "-modified")
     * @param string $series            (optional) Return only comics which are part of the specified series (accepts a
     *                                  comma-separated list of ids).
     * @param string $sharedAppearances (optional) Return only comics in which the specified characters appear together
     *                                  (for example in which BOTH Spider-Man and Wolverine appear).
     * @param string $startYear         (optional) Return only issues in series whose start year matches the input.
     * @param string $stories           (optional) Return only comics which contain the specified stories (accepts a
     *                                  comma-separated list of ids).
     * @param string $title             (optional) Return only issues in series whose title matches the input.
     * @param string $titleStartsWith   (optional) Return only issues in series whose title starts with the input.
     * @param string $upc               (optional) Filter by UPC.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getComicsCollectionByCreatorId(
        $creatorId,
        $characters = null,
        $collaborators = null,
        $dateDescriptor = null,
        $dateRange = null,
        $diamondCode = null,
        $digitalId = null,
        $ean = null,
        $events = null,
        $format = 'comic',
        $formatType = null,
        $hasDigitalIssue = 'true',
        $isbn = null,
        $issn = null,
        $issueNumber = null,
        $limit = null,
        $modifiedSince = null,
        $noVariants = 'true',
        $offset = null,
        $orderBy = 'focDate',
        $series = null,
        $sharedAppearances = null,
        $startYear = null,
        $stories = null,
        $title = null,
        $titleStartsWith = null,
        $upc = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/creators/{creatorId}/comics';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'creatorId'         => $creatorId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'        => $characters,
            'collaborators'     => $collaborators,
            'dateDescriptor'    => $dateDescriptor,
            'dateRange'         => $dateRange,
            'diamondCode'       => $diamondCode,
            'digitalId'         => $digitalId,
            'ean'               => $ean,
            'events'            => $events,
            'format'            => (null != $format) ? $format : 'comic',
            'formatType'        => $formatType,
            'hasDigitalIssue'   => (null != $hasDigitalIssue) ? $hasDigitalIssue : 'true',
            'isbn'              => $isbn,
            'issn'              => $issn,
            'issueNumber'       => $issueNumber,
            'limit'             => $limit,
            'modifiedSince'     => $modifiedSince,
            'noVariants'        => (null != $noVariants) ? $noVariants : 'true',
            'offset'            => $offset,
            'orderBy'           => (null != $orderBy) ? $orderBy : 'focDate',
            'series'            => $series,
            'sharedAppearances' => $sharedAppearances,
            'startYear'         => $startYear,
            'stories'           => $stories,
            'title'             => $title,
            'titleStartsWith'   => $titleStartsWith,
            'upc'               => $upc,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'APIMATIC 2.0',
            'Accept'          => 'application/json'
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\ComicDataWrapperModel');
    }

    /**
     * getComicsCollectionByEventId
     *
     * @param string $eventId           The event id.
     * @param string $characters        (optional) Return only comics which feature the specified characters (accepts a
     *                                  comma-separated list of ids).
     * @param string $collaborators     (optional) Return only comics in which the specified creators worked together
     *                                  (for example in which BOTH Stan Lee and Jack Kirby did work).
     * @param string $creators          (optional) Return only comics which feature work by the specified creators
     *                                  (accepts a comma-separated list of ids).
     * @param string $dateDescriptor    (optional) Return comics within a predefined date range.
     * @param string $dateRange         (optional) Return comics within a predefined date range.  Dates must be
     *                                  specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably
     *                                  formatted as YYYY-MM-DD but may be sent as any common date format.
     * @param string $diamondCode       (optional) Filter by diamond code.
     * @param string $digitalId         (optional) Filter by digital comic id.
     * @param string $ean               (optional) Filter by EAN.
     * @param string $events            (optional) Return only comics which take place in the specified events (accepts
     *                                  a comma-separated list of ids).
     * @param string $format            (optional) Filter by the issue format (e.g. comic, digital comic, hardcover).
     *                                  (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover",
     *                                  "digest", "graphic novel", "digital comic", "infinite comic")
     * @param string $formatType        (optional) Filter by the issue format type (comic or collection).
     * @param string $hasDigitalIssue   (optional) Include only results which are available digitally. (Acceptable
     *                                  values are: "true")
     * @param string $isbn              (optional) Filter by ISBN.
     * @param string $issn              (optional) Filter by ISSN.
     * @param string $issueNumber       (optional) Return only issues in series whose issue number matches the input.
     * @param string $limit             (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince     (optional) Return only comics which have been modified since the specified date.
     * @param string $noVariants        (optional) Exclude variant comics from the result set. (Acceptable values are:
     *                                  "true")
     * @param string $offset            (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy           (optional) Order the result set by a field or fields. Add a "-" to the value
     *                                  sort in descending order. Multiple values are given priority in the order in
     *                                  which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title",
     *                                  "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber",
     *                                  "-modified")
     * @param string $series            (optional) Return only comics which are part of the specified series (accepts a
     *                                  comma-separated list of ids).
     * @param string $sharedAppearances (optional) Return only comics in which the specified characters appear together
     *                                  (for example in which BOTH Spider-Man and Wolverine appear).
     * @param string $startYear         (optional) Return only issues in series whose start year matches the input.
     * @param string $stories           (optional) Return only comics which contain the specified stories (accepts a
     *                                  comma-separated list of ids).
     * @param string $title             (optional) Return only issues in series whose title matches the input.
     * @param string $titleStartsWith   (optional) Return only issues in series whose title starts with the input.
     * @param string $upc               (optional) Filter by UPC.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getComicsCollectionByEventId(
        $eventId,
        $characters = null,
        $collaborators = null,
        $creators = null,
        $dateDescriptor = null,
        $dateRange = null,
        $diamondCode = null,
        $digitalId = null,
        $ean = null,
        $events = null,
        $format = 'comic',
        $formatType = null,
        $hasDigitalIssue = 'true',
        $isbn = null,
        $issn = null,
        $issueNumber = null,
        $limit = null,
        $modifiedSince = null,
        $noVariants = 'true',
        $offset = null,
        $orderBy = 'focDate',
        $series = null,
        $sharedAppearances = null,
        $startYear = null,
        $stories = null,
        $title = null,
        $titleStartsWith = null,
        $upc = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/events/{eventId}/comics';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'eventId'           => $eventId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'        => $characters,
            'collaborators'     => $collaborators,
            'creators'          => $creators,
            'dateDescriptor'    => $dateDescriptor,
            'dateRange'         => $dateRange,
            'diamondCode'       => $diamondCode,
            'digitalId'         => $digitalId,
            'ean'               => $ean,
            'events'            => $events,
            'format'            => (null != $format) ? $format : 'comic',
            'formatType'        => $formatType,
            'hasDigitalIssue'   => (null != $hasDigitalIssue) ? $hasDigitalIssue : 'true',
            'isbn'              => $isbn,
            'issn'              => $issn,
            'issueNumber'       => $issueNumber,
            'limit'             => $limit,
            'modifiedSince'     => $modifiedSince,
            'noVariants'        => (null != $noVariants) ? $noVariants : 'true',
            'offset'            => $offset,
            'orderBy'           => (null != $orderBy) ? $orderBy : 'focDate',
            'series'            => $series,
            'sharedAppearances' => $sharedAppearances,
            'startYear'         => $startYear,
            'stories'           => $stories,
            'title'             => $title,
            'titleStartsWith'   => $titleStartsWith,
            'upc'               => $upc,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'APIMATIC 2.0',
            'Accept'          => 'application/json'
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\ComicDataWrapperModel');
    }

    /**
     * getComicsCollectionBySeriesId
     *
     * @param string $seriesId          The series ID.
     * @param string $characters        (optional) Return only comics which feature the specified characters (accepts a
     *                                  comma-separated list of ids).
     * @param string $collaborators     (optional) Return only comics in which the specified creators worked together
     *                                  (for example in which BOTH Stan Lee and Jack Kirby did work).
     * @param string $creators          (optional) Return only comics which feature work by the specified creators
     *                                  (accepts a comma-separated list of ids).
     * @param string $dateDescriptor    (optional) Return comics within a predefined date range.
     * @param string $dateRange         (optional) Return comics within a predefined date range.  Dates must be
     *                                  specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably
     *                                  formatted as YYYY-MM-DD but may be sent as any common date format.
     * @param string $diamondCode       (optional) Filter by diamond code.
     * @param string $digitalId         (optional) Filter by digital comic id.
     * @param string $ean               (optional) Filter by EAN.
     * @param string $events            (optional) Return only comics which take place in the specified events (accepts
     *                                  a comma-separated list of ids).
     * @param string $format            (optional) Filter by the issue format (e.g. comic, digital comic, hardcover).
     *                                  (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover",
     *                                  "digest", "graphic novel", "digital comic", "infinite comic")
     * @param string $formatType        (optional) Filter by the issue format type (comic or collection).
     * @param string $hasDigitalIssue   (optional) Include only results which are available digitally. (Acceptable
     *                                  values are: "true")
     * @param string $isbn              (optional) Filter by ISBN.
     * @param string $issn              (optional) Filter by ISSN.
     * @param string $issueNumber       (optional) Return only issues in series whose issue number matches the input.
     * @param string $limit             (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince     (optional) Return only comics which have been modified since the specified date.
     * @param string $noVariants        (optional) Exclude variant comics from the result set. (Acceptable values are:
     *                                  "true")
     * @param string $offset            (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy           (optional) Order the result set by a field or fields. Add a "-" to the value
     *                                  sort in descending order. Multiple values are given priority in the order in
     *                                  which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title",
     *                                  "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber",
     *                                  "-modified")
     * @param string $sharedAppearances (optional) Return only comics in which the specified characters appear together
     *                                  (for example in which BOTH Spider-Man and Wolverine appear).
     * @param string $startYear         (optional) Return only issues in series whose start year matches the input.
     * @param string $stories           (optional) Return only comics which contain the specified stories (accepts a
     *                                  comma-separated list of ids).
     * @param string $title             (optional) Return only issues in series whose title matches the input.
     * @param string $titleStartsWith   (optional) Return only issues in series whose title starts with the input.
     * @param string $upc               (optional) Filter by UPC.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getComicsCollectionBySeriesId(
        $seriesId,
        $characters = null,
        $collaborators = null,
        $creators = null,
        $dateDescriptor = null,
        $dateRange = null,
        $diamondCode = null,
        $digitalId = null,
        $ean = null,
        $events = null,
        $format = 'comic',
        $formatType = null,
        $hasDigitalIssue = 'true',
        $isbn = null,
        $issn = null,
        $issueNumber = null,
        $limit = null,
        $modifiedSince = null,
        $noVariants = 'true',
        $offset = null,
        $orderBy = 'focDate',
        $sharedAppearances = null,
        $startYear = null,
        $stories = null,
        $title = null,
        $titleStartsWith = null,
        $upc = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/series/{seriesId}/comics';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'seriesId'          => $seriesId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'        => $characters,
            'collaborators'     => $collaborators,
            'creators'          => $creators,
            'dateDescriptor'    => $dateDescriptor,
            'dateRange'         => $dateRange,
            'diamondCode'       => $diamondCode,
            'digitalId'         => $digitalId,
            'ean'               => $ean,
            'events'            => $events,
            'format'            => (null != $format) ? $format : 'comic',
            'formatType'        => $formatType,
            'hasDigitalIssue'   => (null != $hasDigitalIssue) ? $hasDigitalIssue : 'true',
            'isbn'              => $isbn,
            'issn'              => $issn,
            'issueNumber'       => $issueNumber,
            'limit'             => $limit,
            'modifiedSince'     => $modifiedSince,
            'noVariants'        => (null != $noVariants) ? $noVariants : 'true',
            'offset'            => $offset,
            'orderBy'           => (null != $orderBy) ? $orderBy : 'focDate',
            'sharedAppearances' => $sharedAppearances,
            'startYear'         => $startYear,
            'stories'           => $stories,
            'title'             => $title,
            'titleStartsWith'   => $titleStartsWith,
            'upc'               => $upc,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'APIMATIC 2.0',
            'Accept'          => 'application/json'
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\ComicDataWrapperModel');
    }

    /**
     * getComicsCollectionByStoryId
     *
     * @param string $storyId           The story ID.
     * @param string $characters        (optional) Return only comics which feature the specified characters (accepts a
     *                                  comma-separated list of ids).
     * @param string $collaborators     (optional) Return only comics in which the specified creators worked together
     *                                  (for example in which BOTH Stan Lee and Jack Kirby did work).
     * @param string $creators          (optional) Return only comics which feature work by the specified creators
     *                                  (accepts a comma-separated list of ids).
     * @param string $dateDescriptor    (optional) Return comics within a predefined date range.
     * @param string $dateRange         (optional) Return comics within a predefined date range.  Dates must be
     *                                  specified as date1,date2 (e.g. 2013-01-01,2013-01-02).  Dates are preferably
     *                                  formatted as YYYY-MM-DD but may be sent as any common date format.
     * @param string $diamondCode       (optional) Filter by diamond code.
     * @param string $digitalId         (optional) Filter by digital comic id.
     * @param string $ean               (optional) Filter by EAN.
     * @param string $events            (optional) Return only comics which take place in the specified events (accepts
     *                                  a comma-separated list of ids).
     * @param string $format            (optional) Filter by the issue format (e.g. comic, digital comic, hardcover).
     *                                  (Acceptable values are: "comic", "magazine", "trade paperback", "hardcover",
     *                                  "digest", "graphic novel", "digital comic", "infinite comic")
     * @param string $formatType        (optional) Filter by the issue format type (comic or collection).
     * @param string $hasDigitalIssue   (optional) Include only results which are available digitally. (Acceptable
     *                                  values are: "true")
     * @param string $isbn              (optional) Filter by ISBN.
     * @param string $issn              (optional) Filter by ISSN.
     * @param string $issueNumber       (optional) Return only issues in series whose issue number matches the input.
     * @param string $limit             (optional) Limit the result set to the specified number of resources.
     * @param string $modifiedSince     (optional) Return only comics which have been modified since the specified date.
     * @param string $noVariants        (optional) Exclude variant comics from the result set. (Acceptable values are:
     *                                  "true")
     * @param string $offset            (optional) Skip the specified number of resources in the result set.
     * @param string $orderBy           (optional) Order the result set by a field or fields. Add a "-" to the value
     *                                  sort in descending order. Multiple values are given priority in the order in
     *                                  which they are passed. (Acceptable values are: "focDate", "onsaleDate", "title",
     *                                  "issueNumber", "modified", "-focDate", "-onsaleDate", "-title", "-issueNumber",
     *                                  "-modified")
     * @param string $series            (optional) Return only comics which are part of the specified series (accepts a
     *                                  comma-separated list of ids).
     * @param string $sharedAppearances (optional) Return only comics in which the specified characters appear together
     *                                  (for example in which BOTH Spider-Man and Wolverine appear).
     * @param string $startYear         (optional) Return only issues in series whose start year matches the input.
     * @param string $title             (optional) Return only issues in series whose title matches the input.
     * @param string $titleStartsWith   (optional) Return only issues in series whose title starts with the input.
     * @param string $upc               (optional) Filter by UPC.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getComicsCollectionByStoryId(
        $storyId,
        $characters = null,
        $collaborators = null,
        $creators = null,
        $dateDescriptor = null,
        $dateRange = null,
        $diamondCode = null,
        $digitalId = null,
        $ean = null,
        $events = null,
        $format = 'comic',
        $formatType = null,
        $hasDigitalIssue = 'true',
        $isbn = null,
        $issn = null,
        $issueNumber = null,
        $limit = null,
        $modifiedSince = null,
        $noVariants = 'true',
        $offset = null,
        $orderBy = 'focDate',
        $series = null,
        $sharedAppearances = null,
        $startYear = null,
        $title = null,
        $titleStartsWith = null,
        $upc = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/public/stories/{storyId}/comics';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'storyId'           => $storyId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'characters'        => $characters,
            'collaborators'     => $collaborators,
            'creators'          => $creators,
            'dateDescriptor'    => $dateDescriptor,
            'dateRange'         => $dateRange,
            'diamondCode'       => $diamondCode,
            'digitalId'         => $digitalId,
            'ean'               => $ean,
            'events'            => $events,
            'format'            => (null != $format) ? $format : 'comic',
            'formatType'        => $formatType,
            'hasDigitalIssue'   => (null != $hasDigitalIssue) ? $hasDigitalIssue : 'true',
            'isbn'              => $isbn,
            'issn'              => $issn,
            'issueNumber'       => $issueNumber,
            'limit'             => $limit,
            'modifiedSince'     => $modifiedSince,
            'noVariants'        => (null != $noVariants) ? $noVariants : 'true',
            'offset'            => $offset,
            'orderBy'           => (null != $orderBy) ? $orderBy : 'focDate',
            'series'            => $series,
            'sharedAppearances' => $sharedAppearances,
            'startYear'         => $startYear,
            'title'             => $title,
            'titleStartsWith'   => $titleStartsWith,
            'upc'               => $upc,
            'apikey' => Configuration::$apikey,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'APIMATIC 2.0',
            'Accept'          => 'application/json'
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

        return $mapper->mapClass($response->body, 'MarvelComicsLib\\Models\\ComicDataWrapperModel');
    }
}
