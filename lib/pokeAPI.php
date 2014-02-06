<?php

/******************************************************
 * PokeAPI - PH[P]okeAPI                              *
 * ================================================== *
 * @author       Nicolas Tournier <@n1c0l4stournier>  *
 * @version      1.0                                  *
 *****************************************************/

class PokeAPI {

	public $endpoint = "http://pokeapi.co/api/v1";

	/**
	 *	testing if cURL is installed
	 *
	 */
	public function __construct() {

        if(!function_exists('curl_init'))
            throw new Exception('The cURL module could not be loaded, and is needed to retrieve API data.');

    }

	/**
	 *	
	 *
	 */
	public function getPokedex() {

		$option = "pokedex";
		return $this->get(1, $option);

	}


	/**
	 *	
	 *
	 */
	public function getPokemon($id = NULL) {

		$option = "pokemon";
		return $this->get($id, $option);

	}


	/**
	 *	
	 *
	 */
	public function getType($id = NULL) {

		$option = "type";
		return $this->get($id, $option);

	}


	/**
	 *	
	 *
	 */
	public function getMove($id = NULL) {

		$option = "move";
		return $this->get($id, $option);

	}


	/**
	 *	
	 *
	 */
	public function getAbility($id = NULL) {

		$option = "ability";
		return $this->get($id, $option);

	}


	/**
	 *	
	 *
	 */
	public function getEggGroup($id = NULL) {

		$option = "egg";
		return $this->get($id, $option);

	}


	/**
	 *	
	 *
	 */
	public function getDescription($id = NULL) {

		$option = "description";
		return $this->get($id, $option);

	}


	/**
	 *	
	 *
	 */
	public function getSprite($id = NULL) {

		$option = "sprite";
		return $this->get($id, $option);

	}


	/**
	 *	
	 *
	 */
	public function getGame($id = NULL) {

		$option = "game";
		return $this->get($id, $option);

	}


	/**
	 *	ressource_uri = /api/vi/{string}/{int}
	 *	string $option = {string}
	 *	int $id = {int}
	 */
	public function getRessource($uri)
	{
		$uri = explode("/", $uri);
		
		$id = NULL; 
		$option = NULL;
		foreach ($uri as $d) {
			if ($d != 'api' && $d != 'v1' && !empty($d)) {
				if(is_numeric($d))
					$id = $d;
				else
					$option = $d;
			}
		}
		return $this->get($id, $option);
	}


	/**
	 *	return the decoded JSON data into stdClass Object
	 *
	 */
	private function get($id = NULL, $option = NULL) {

		if ($id == NULL || $option == NULL)
            throw new Exception('Empty data.');
		else 
			return $this->curl($this->endpoint . "/" . $option . "/" . $id . "/");

	}


	/**
	 *	send request to the API and return the decoded JSON data into stdClass Object
	 *
	 */
	private function curl($url = NULL) {

		if ($url == NULL)
			return FALSE;

		else {

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

	        if (!$result)
	        	return FALSE;

	        return $result;
		}
	}

}

?>
