<?php
    include_once "pokemon_stats_funcs.php";
    $solutions = new PokemonFuncs("localhost", "root", "", "pokemons");
    $pokemons = $solutions->Pokemons_Data();

    echo "<h2 class='my-3 text-center'>pokemonok</h2>";
    echo "<a href='?todo=new' class='btn btn-primary d-grid col-3 mx-auto blackShadow'>Új Pokemon felvétele</a>";
    echo "<div class='contain'>";
    foreach ($pokemons as $pokemon) {
        echo "<a href='?todo=data&id=$pokemon->id'> <img src='$pokemon->img' width='300px'></a>";
    }
    echo "</div>"
?>