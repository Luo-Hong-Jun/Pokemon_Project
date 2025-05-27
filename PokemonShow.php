<?php
    include_once "pokemon_stats_funcs.php";
    $solutions = new PokemonFuncs("localhost", "root", "", "pokemons");
    $pokemons = $solutions->Pokemons_Data();

    echo "<h2 class='my-3'>pokemonok</h2>";
    echo "<a href='?todo=new' class='btn btn-primary'>Új feladat felvétele</a>";
    echo "<table class='table table-striped'>";
    echo "<thead>";
    echo "<tr><th>ID</th><th>Név</th><th>típus</th><th>skill1</th><th>skill2</th><th>skill3</th><th>skill4</th><th>gender</th><th>kép</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($pokemons as $pokemon) {
        echo "<tr>
            <td>$pokemon->id</td>
            <td>$pokemon->name</td>
            <td>$pokemon->type</td>
            <td>$pokemon->skill1</td>
            <td>$pokemon->skill2</td>
            <td>$pokemon->skill3</td>
            <td>$pokemon->skill4</td>
            <td>$pokemon->gender</td>
        </tr>";
         //<img src='data:image/jpeg;base64,'.base64_encode($pokemon[img]).'>"// 
    }
    echo "</tbody>";
    echo "</table>";
?>