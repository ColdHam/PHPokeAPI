<?php

/**
 * Simple PHP wrapper for PokeAPI : http://pokeapi.co/
 *
 * PHP version 5
 *
 * @category TestUnit
 * @package  PokeApi
 * @author   Nicolas Tournier <nicolas.tournier@outlook.com>
 * @license  GNU General Public License version 3 (GPLv3)
 * @link     https://github.com/n1c0l4stournier/PHPokeAPI
 *
 */

/**
 * PokeApiTest class
 *
 * @category TestUnit
 * @package  PokeApi
 * @author   Nicolas Tournier <nicolas.tournier@outlook.com>
 * @license  GNU General Public License version 3 (GPLv3)
 * @link     https://github.com/n1c0l4stournier/PHPokeAPI
 *
 */
class PokeApiTest extends PHPUnit_Framework_TestCase
{


    /**
     * setUp()
     *
     * @return void
     */
    public function setUp()
    {
        include_once 'PokeApi.php';

    }//end setUp()


    /**
     * testGetPokedex()
     *
     * @return void
     */
    public function testGetPokedex()
    {
        $api  = new PokeApi();
        $data = $api->getPokedex();

    }//end testGetPokedex()


    /**
     * testGetPokemon()
     *
     * @return void
     */
    public function testGetPokemon()
    {
        $api      = new PokeApi();
        $data     = $api->getPokemon(1);
        $result   = $data->name;
        $expected = 'Bulbasaur';
        $this->assertEquals($expected, $result);

    }//end testGetPokemon()


    /**
     * testGetType()
     *
     * @return void
     */
    public function testGetType()
    {
        $api      = new PokeApi();
        $data     = $api->getType(1);
        $result   = $data->name;
        $expected = 'Normal';
        $this->assertEquals($expected, $result);

    }//end testGetType()


    /**
     * testGetMove()
     *
     * @return void
     */
    public function testGetMove()
    {
        $api      = new PokeApi();
        $data     = $api->getMove(1);
        $result   = $data->name;
        $expected = 'Pound';
        $this->assertEquals($expected, $result);

    }//end testGetMove()


    /**
     * testGetAbility()
     *
     * @return void
     */
    public function testGetAbility()
    {
        $api      = new PokeApi();
        $data     = $api->getAbility(1);
        $result   = $data->name;
        $expected = 'Stench';
        $this->assertEquals($expected, $result);

    }//end testGetAbility()


    /**
     * testGetEggGroup()
     *
     * @return void
     */
    public function testGetEggGroup()
    {
        $api      = new PokeApi();
        $data     = $api->getEggGroup(1);
        $result   = $data->name;
        $expected = 'Monster';
        $this->assertEquals($expected, $result);

    }//end testGetEggGroup()


    /**
     * testGetDescription()
     *
     * @return void
     */
    public function testGetDescription()
    {
        $api      = new PokeApi();
        $data     = $api->getDescription(2);
        $result   = $data->name;
        $expected = 'Bulbasaur_gen_1';
        $this->assertEquals($expected, $result);

    }//end testGetDescription()


    /**
     * testGetSprite()
     *
     * @return void
     */
    public function testGetSprite()
    {
        $api      = new PokeApi();
        $data     = $api->getSprite(1);
        $result   = $data->name;
        $expected = 'Bulbasaur_red_blue';
        $this->assertEquals($expected, $result);

    }//end testGetSprite()


    /**
     * testGetGame()
     *
     * @return void
     */
    public function testGetGame()
    {
        $api      = new PokeApi();
        $data     = $api->getGame(1);
        $result   = $data->name;
        $expected = 'Red(jpn)';
        $this->assertEquals($expected, $result);

    }//end testGetGame()


    /**
     * testGetRessource()
     *
     * @return void
     */
    public function testGetRessource()
    {
        $api      = new PokeApi();
        $uri      = '';
        $data     = $api->getRessource('/api/v1/egg/1/');
        $result   = $data->name;
        $expected = 'Monster';
        $this->assertEquals($expected, $result);

    }//end testGetRessource()


}//end class

?>
