<?php

/******************************************************
 * PokeAPI - PH[P]okeAPI                              *
 * ================================================== *
 * @author       Nicolas Tournier <@n1c0l4stournier>  *
 * @version      1.0                                  *
 *****************************************************/

require "../lib/pokeAPI.php";
$api = new PokeAPI();


	/**
	 *	
	 *
	 */
	function show($data = NULL) {
		echo "<pre>"; print_r($data); echo "</pre>";
	}


echo "<h1>PH[P]okeAPI Unit Test</h1>";

//Get the whole Pokedex
//$pokedex = $api->getPokedex();
//show($pokedex)

// Get the Pokemon n°4 in the National POkedex.
echo "<h2>Pokemon Unit Test</h2>";

echo "<h3>The Pokemon</h3>";
$pokemon = $api->getPokemon(4); // Charmander, my favourite !
//show($pokemon);

echo "<h3>Ability from one ressource_uri</h3>";
// Get the ressource from an URL (ressource_uri)
$data = $api->getRessource($pokemon->abilities[0]->resource_uri);
print_r($data);

echo "<h3>Description from one ressource_uri</h3>";
$data = $api->getRessource($pokemon->descriptions[0]->resource_uri);
print_r($data);

echo "<h3>Egg Group from one ressource_uri</h3>";
$data = $api->getRessource($pokemon->egg_groups[0]->resource_uri);
print_r($data);

echo "<h3>Evolution from one ressource_uri</h3>";
$data = $api->getRessource($pokemon->evolutions[0]->resource_uri);
if (!empty($data)) // $data can be empty
	print_r($data);
else
	echo("No Evolution");

echo "<h3>Move from one ressource_uri</h3>";
$data = $api->getRessource($pokemon->moves[0]->resource_uri);
print_r($data);

echo "<h3>Sprites URL from one ressource_uri</h3>";
$data = $api->getRessource($pokemon->sprites[0]->resource_uri);
print_r($data);

echo "<h3>The Sprite from one ressource_uri</h3>";
$data = $api->getRessource($pokemon->sprites[0]->resource_uri);
print_r($data);

echo "<hr />";

echo "<h2>Types Unit Test</h2>";
$type = $api->getType(1); // normal
print_r($type);

echo "<h3>Types from one ressource_uri</h3>";
$data = $api->getRessource($type->ineffective[0]->resource_uri);
print_r($data);
if (!empty($data)) // $data can be empty
	print_r($data);
else
	echo("No Type Ineffective");

echo "<hr />";

echo "<h2>Move Unit Test</h2>";
$move = $api->getMove(1);
print_r($move);

echo "<hr />";

echo "<h2>Ability Unit Test</h2>";
$ability = $api->getAbility(1);
print_r($ability);

echo "<hr />";

echo "<h2>Egg group Unit Test</h2>";
$eggGroup = $api->getEggGroup(1);
print_r($eggGroup);

echo "<h3>Pokemon from one ressource_uri</h3>";
// Get the ressource from an URL (ressource_uri)
$data = $api->getRessource($eggGroup->pokemon[0]->resource_uri);
print_r($data);

echo "<hr />";

echo "<h2>Description Unit Test</h2>";
$description = $api->getDescription(1);
print_r($description);

echo "<hr />";

echo "<h2>Sprite Unit Test</h2>";
$sprite = $api->getSprite(1);
print_r($sprite);

$url = "http://pokeapi.co/" . $sprite->image;
echo "<br /><img src=".$url." alt =\"\"/>";

echo "<hr />";

echo "<h2>Game Unit Test</h2>";
$game = $api->getGame(1);
print_r($game);

echo "<hr />";

?>