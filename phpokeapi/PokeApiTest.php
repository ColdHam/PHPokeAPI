<?php

//namespace PokeApi;

class PokeApiTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        include_once "PokeApi.php";
    }

    public function testGetPokedex()
    {
        $api = new PokeApi();
        $data = $api->getPokedex();


    }

    public function testGetPokemon()
    {
        $api = new PokeApi();
        $data = $api->getPokemon(1);

        $result = $data->name;
        $expected = 'Bulbasaur';

        $this->assertEquals($expected, $result);

    }

    public function testGetType()
    {
        $api = new PokeApi();
        $data = $api->getType(1);

        $result = $data->name;
        $expected = 'Normal';

        $this->assertEquals($expected, $result);
    }

    public function testGetMove()
    {
        $api = new PokeApi();
        $data = $api->getMove(1);

        $result = $data->name;
        $expected = "Pound";

        $this->assertEquals($expected, $result);
    }

    public function testGetAbility()
    {
        $api = new PokeApi();
        $data = $api->getAbility(1);
        
        $result = $data->name;
        $expected = "Stench";

        $this->assertEquals($expected, $result);
    }

    public function testGetEggGroup()
    {
        $api = new PokeApi();
        $data = $api->getEggGroup(1);
        
        $result = $data->name;
        $expected = "Monster";

        $this->assertEquals($expected, $result);
    }
    public function testGetDescription()
    {
        $api = new PokeApi();
        $data = $api->getDescription(2);
        
        $result = $data->name;
        $expected = "Bulbasaur_gen_1";

        $this->assertEquals($expected, $result);
    }

    public function testGetSprite()
    {
        $api = new PokeApi();
        $data = $api->getSprite(1);
        
        $result = $data->name;
        $expected = "Bulbasaur_red_blue";

        $this->assertEquals($expected, $result);
    }

    public function testGetGame()
    {
        $api = new PokeApi();
        $data = $api->getGame(1);
        
        $result = $data->name;
        $expected = "Red(jpn)";

        $this->assertEquals($expected, $result);
    }

    public function testGetRessource()
    {
        $api = new PokeApi();
        $uri = '';
        $data = $api->getRessource('/api/v1/egg/1/');
        
        $result = $data->name;
        $expected = "Monster";

        $this->assertEquals($expected, $result);
    }

}
