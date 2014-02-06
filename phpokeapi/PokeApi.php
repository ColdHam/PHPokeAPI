<?php

/**
 * Simple PHP wrappar for PokeAPI : http://pokeapi.co/
 *
 * PHP version 5
 *
 * @category Wrapper
 * @package  PokeApi
 * @author   Nicolas Tournier <nicolas.tournier@outlook.com>
 * @license  GNU General Public License version 3 (GPLv3)
 * @link     https://github.com/n1c0l4stournier/PHPokeAPI
 *
 */

namespace PokeApi\PokeApi;

/**
 * PokeAPI class
 *
 * @category Wrapper
 * @package  PokeApi
 * @author   Nicolas Tournier <nicolas.tournier@outlook.com>
 * @license  GNU General Public License version 3 (GPLv3)
 * @link     https://github.com/n1c0l4stournier/PHPokeAPI
 *
 */
class PokeApi
{

    public $endpoint = 'http://pokeapi.co/api/v1';


    /**
     * __construct
     *
     * @throws Exception
     *
     */
    public function __construct()
    {
        if (function_exists('curl_init') === false) {
            throw new Exception('The cURL module could not be loaded, and is needed to retrieve API data.');
        }

    }//end __construct()


    /**
     * getPokedex
     *
     * @return Object
     *
     */
    public function getPokedex()
    {
        $option = 'pokedex';
        return $this->_get(1, $option);

    }//end getPokedex()


    /**
     * getPokemon
     *
     * @param int $id Pokemon id in the national pokedex
     *
     * @return Object
     *
     */
    public function getPokemon($id=null)
    {
        $option = 'pokemon';
        return $this->_get($id, $option);

    }//end getPokemon()


    /**
     * getType
     *
     * @param int $id type id according to the API
     *
     * @return Object
     *
     */
    public function getType($id=null)
    {
        $option = 'type';
        return $this->_get($id, $option);

    }//end getType()


    /**
     * getMove
     *
     * @param int $id move id according to the API
     *
     * @return Object
     *
     */
    public function getMove($id=null)
    {
        $option = 'move';
        return $this->_get($id, $option);

    }//end getMove()


    /**
     * getAbility
     *
     * @param int $id Type ability id according to the API
     *
     * @return Object
     *
     */
    public function getAbility($id=null)
    {
        $option = 'ability';
        return $this->_get($id, $option);

    }//end getAbility()


    /**
     * getEggGroup
     *
     * @param int $id egg group id according to the API
     *
     * @return Object
     *
     */
    public function getEggGroup($id=null)
    {
        $option = 'egg';
        return $this->_get($id, $option);

    }//end getEggGroup()


    /**
     * getDescription
     *
     * @param int $id deescription id of a Pokemon according to the API
     *
     * @return Object
     *
     */
    public function getDescription($id=null)
    {
        $option = 'description';
        return $this->_get($id, $option);

    }//end getDescription()


    /**
     * getSprite
     *
     * @param int $id sprite id according to the API
     *
     * @return Object
     *
     */
    public function getSprite($id=null)
    {
        $option = 'sprite';
        return $this->_get($id, $option);

    }//end getSprite()


    /**
     * getGame
     *
     * @param int $id game id according to the API
     *
     * @return Object
     *
     */
    public function getGame($id=null)
    {
        $option = 'game';
        return $this->_get($id, $option);

    }//end getGame()


    /**
     * getRessource
     *
     * @param string $uri uri_ressource
     *
     * @return Object
     *
     */
    public function getRessource($uri)
    {
        $id     = null;
        $option = null;
        $uri    = explode('/', $uri);

        foreach ($uri as $d) {
            if ($d !== 'api' && $d !== 'v1' && empty($d) === false) {
                if (is_numeric($d) === true) {
                    $id = $d;
                } else {
                    $option = $d;
                }
            }
        }

        return $this->_get($id, $option);

    }//end getRessource()


    /**
     * _get
     *
     * @param int    $id     Id
     * @param string $option Option
     *
     * @throws Exception
     *
     * @return Object
     *
     */
    private function _get($id=null, $option=null)
    {
        if ($id === null || $option === null) {
            throw new Exception('Empty data.');
        } else {
            return $this->_curl($this->endpoint.'/'.$option.'/'.$id.'/');
        }

    }//end _get()


    /**
     * _curl
     *
     * @param string $url PokeAPI url.
     *
     * @return Object
     *
     */

    private function _curl($url=null)
    {
        if ($url === null) {
            return false;
        } else {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_AUTOREFERER, true);

            // Sending the request to the API.
            $result = curl_exec($ch);

            // Decoding the JSON data.
            $result = json_decode($result);

            return $result;
        }//end if

    }//end _curl()


}//end class

?>