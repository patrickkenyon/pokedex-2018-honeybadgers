<?php

session_start();

if (!$_SESSION['loggedIn']) {
    header('Location:login.php');
}

require_once ('vendor/autoload.php');

use Pokedex\DbConnection;
use Pokedex\PokeList;

$db = new DbConnection();
$pokeList = new PokeList($db->getDB(), $_SESSION['userID']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Cantarell:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Pokédex</title>
</head>
<body>
<main>
    <form>
        <div id="scroll">
            <ul>
                <?php
                foreach ($pokeList->getPokemon() as $pokemon) {
                    require 'pokemonEntryTemplate.phtml';
                }
                ?>
            </ul>
        </div>
        <footer>
            <input type="submit" value="Save" id="save">
        </footer>
    </form>
</main>
</body>
</html>