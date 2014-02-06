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
	
	?>
