PHPokeAPI
=========

A Basic PHP wrapper for PokeAPI (http://pokeapi.co/)


Requirements
============

* PHP 5.2+
* [cURL](http://php.net/curl) PHP Extension
* [JSON](http://php.net/json) PHP Extension


Installation
============

Simply include the `/lib/pokeAPI.php` file into your script.

<?php

	require './lib/pokeAPI.php';
	$api = new PokeAPI();

<<<<<<< HEAD
?>
=======
<<<<<<< HEAD
	?>
=======
	?>
	
Methods
=======

`$this->getPokedex();` Returns the Pokedex.

`$this->getPokemon($id);` Returns the Pokemon, where `$id` corresponds to the number in the national pokedex.

`$this->getType($id);` Returns type information

`$this->getMove($id);` 

`$this->getAbility($id);` 

`$this->getEggGroup($id);` 

`$this->getDescription($id);` 

`$this->getSprite($id);` Returns the URL of the Pokemon sprite

`$this->getGame($id);` 

`$this->getRessource($id);` Return the information corresponding to `ressource_uri` contained in an previous request.
>>>>>>> parent of 0acaea0... PHPokeAPI
>>>>>>> PHPokeAPI
