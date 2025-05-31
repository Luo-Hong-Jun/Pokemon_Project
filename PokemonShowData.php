<?php
    include_once "pokemon_stats_funcs.php";
    $id = $_GET['id'];
    $solutions = new PokemonFuncs("localhost", "root", "", "pokemons");
    $pokemon = $solutions->GetPokemon($id);
        echo "      <div class='row'> 
                        <div class='col-9'>
                            <div style='height: 50vh;'>
                                <img class='mx-auto d-block imgSize' src='$pokemon->img' alt='$pokemon->img'>
                            </div>
                            <div style='height: 49vh;'>
                            </div>
                        </div>
                        <div class='col-3'>
                            <a href='?todo=del&id=$pokemon->id'><button>Törlés</button></a></td>
                            <a href='index.php'><button>Kilépés</button></a>;
                        </div>
                    </div>";
?>
<div ></div>