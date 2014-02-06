<?php

namespace PokeApi\PokeApiTest;

$file_to_include = "../vendor/phpunit/phpunit/PHPUnit/Autoload.php";
if (file_exists($file_to_include)) {
    include_once $file_to_include;
}

$file_to_include = "../phpokeapi/PokeApi.php";
if (file_exists($file_to_include)) {
    include_once $file_to_include;
}

class PokeApiTest extends PHPUnit_Framework_TestCase
{

    public function testGetPokedex()
    {

    }

    public function testGetPokemon($id = null)
    {

    }

    public function testGetType($id = null)
    {

    }

    public function testGetMove($id = null)
    {

    }

    public function testGetAbility($id = null)
    {

    }

    public function testGetEggGroup($id = null)
    {

    }
    public function testGetDescription($id = null)
    {

    }

    public function testGetSprite($id = null)
    {

    }

    public function testGetGame($id = null)
    {

    }

    public function testGetRessource($uri)
    {

    }

}
