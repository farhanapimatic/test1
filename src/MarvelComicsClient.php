<?php
/*
 * MarvelComicsLib
 *
 * This file was automatically generated for ACME Corp. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MarvelComicsLib;

use MarvelComicsLib\Controllers;

/**
 * MarvelComicsLib client class
 */
class MarvelComicsClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $apikey = null
    ) {
        Configuration::$apikey = $apikey ? $apikey : Configuration::$apikey;
    }
    /**
     * Singleton access to Events controller
     * @return Controllers\EventsController The *Singleton* instance
     */
    public function getEvents()
    {
        return Controllers\EventsController::getInstance();
    }
    /**
     * Singleton access to Characters controller
     * @return Controllers\CharactersController The *Singleton* instance
     */
    public function getCharacters()
    {
        return Controllers\CharactersController::getInstance();
    }
    /**
     * Singleton access to Stories controller
     * @return Controllers\StoriesController The *Singleton* instance
     */
    public function getStories()
    {
        return Controllers\StoriesController::getInstance();
    }
    /**
     * Singleton access to Creators controller
     * @return Controllers\CreatorsController The *Singleton* instance
     */
    public function getCreators()
    {
        return Controllers\CreatorsController::getInstance();
    }
    /**
     * Singleton access to Comics controller
     * @return Controllers\ComicsController The *Singleton* instance
     */
    public function getComics()
    {
        return Controllers\ComicsController::getInstance();
    }
    /**
     * Singleton access to Series controller
     * @return Controllers\SeriesController The *Singleton* instance
     */
    public function getSeries()
    {
        return Controllers\SeriesController::getInstance();
    }
}
