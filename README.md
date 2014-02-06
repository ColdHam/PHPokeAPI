PHPokeAPI
=========

A Basic PHP wrapper for PokeAPI (http://pokeapi.co/)

[![Build Status](https://travis-ci.org/n1c0l4stournier/PHPokeAPI.png?branch=master)](https://travis-ci.org/n1c0l4stournier/PHPokeAPI)

Requirements
============

* PHP 5.2+
* [cURL](http://php.net/curl) PHP Extension
* [JSON](http://php.net/json) PHP Extension


Installation
============

Simply include the `/phpokeapi/pokeAPI.php` file into your script.

	<?php

	require './phpokeapi/PokeApi.php';
	$api = new PokeAPI();
	
	?>
