<?php

namespace PokeApi\PokeApi;

class PokeApi
{
    var $endpoint = "http://pokeapi.co/api/v1";

    public function __construct()
    {

        if (!function_exists('curl_init')) {

            throw new Exception('The cURL module could not be loaded, and is needed to retrieve API data.');
            
        }

    }

    public function getPokedex()
    {

        $option = "pokedex";
        return $this->get(1, $option);

    }

    public function getPokemon($id = null)
    {

        $option = "pokemon";
        return $this->get($id, $option);

    }

    public function getType($id = null)
    {

        $option = "type";
        return $this->get($id, $option);

    }

    public function getMove($id = null)
    {

        $option = "move";
        return $this->get($id, $option);

    }

    public function getAbility($id = null)
    {

        $option = "ability";
        return $this->get($id, $option);

    }

    public function getEggGroup($id = null)
    {

        $option = "egg";
        return $this->get($id, $option);

    }

    public function getDescription($id = null)
    {

        $option = "description";
        return $this->get($id, $option);

    }

    public function getSprite($id = null)
    {

        $option = "sprite";
        return $this->get($id, $option);

    }

    public function getGame($id = null)
    {

        $option = "game";
        return $this->get($id, $option);

    }

    public function getRessource($uri)
    {
        
        $id = null;
        $option = null;
        $uri = explode("/", $uri);

        foreach ($uri as $d) {

            if ($d != 'api' && $d != 'v1' && !empty($d)) {

                if (is_numeric($d)) {

                    $id = $d;

                } else {

                    $option = $d;

                }
            }

        }

        return $this->get($id, $option);
    }

    private function get($id = null, $option = null)
    {

        if ($id == null || $option == null) {

            throw new Exception('Empty data.');

        } else {

            return $this->curl($this->endpoint . "/" . $option . "/" . $id . "/");

        }

    }

    private function curl($url = null)
    {

        if ($url == null) {

            return false;

        } else {

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_AUTOREFERER, true);

            // sending the request to the API
            $result = curl_exec($ch);

            // decoding the JSON data
            $result = json_decode($result);

            if (!$result) {

                return false;

            }

            return $result;
        }
    }
}
