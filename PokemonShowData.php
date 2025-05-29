<?php
    include_once "pokemon_stats_funcs.php";
    $id = $_GET['id'];
    $solutions = new PokemonFuncs("localhost", "root", "", "pokemons");
    $pokemon = $solutions->GetPokemon($id);
    echo "<h2 class='my-3 text-center'>$pokemon->name</h2>";
        echo "<table class='table table-striped'>";
    echo "<thead>";
    echo "<tr><th>ID</th><th>Név</th><th>típus</th><th>skill1</th><th>skill2</th><th>skill3</th><th>skill4</th><th>gender</th><th>Törlés</th></tr>";
    echo "</thead>";
    echo "<tbody>";
        echo "<tr>
        <td></td>
        <td></td>
            <img src='$pokemon->img' width='300px'>
            <td>$pokemon->type</td>
            <td>$pokemon->skill1</td>
            <td>$pokemon->skill2</td>
            <td>$pokemon->skill3</td>
            <td>$pokemon->skill4</td>
            <td>$pokemon->gender</td>
            <td><a href='?todo=del&id=$pokemon->id'><button>Törlés</button></a></td>
        </tr>";
    echo "</tbody>";
    echo "</table>";
    echo "<a href='index.php'><button>Kilépés</button></a>";
?>