<?php
    include_once "pokemon_stats_funcs.php";
    $id = $_GET['id'];
    $solutions = new PokemonFuncs("localhost", "root", "", "pokemons");
    $pokemon = $solutions->GetPokemon($id);
    $genderIMG;
    if ($pokemon->gender == 0) {
         $genderIMG = "<img class='mx-auto d-block imgSize' src='imgs/male.png' alt='/imgs/male.png'>";
                                        }
    else if ($pokemon->gender == 1) {
         $genderIMG = "<img class='mx-auto d-block imgSize' src='imgs/female.jpg' alt='/imgs/female.jpg'>";
    }
   else{
             $genderIMG = "<img class='mx-auto d-block imgSize' src='imgs/unknown.png' alt='/imgs/unknown.png'>";
    }
        echo "      <div class='row'> 
                        <div class='col-9 texts'>
                            <div style='height: 50vh;'>
                                <img class='mx-auto d-block imgSize borderIMG' src='$pokemon->img' alt='$pokemon->img'>
                            </div>
                            <div class='row' style='height: 49vh;'>
                            <div class='col-2'></div>
                                 <div class='col-8 text-center' style='height: inherit;'>
                                    <div class='row'>
                                        <div class='col-9'>
                                            <p class='pokemonName'>$pokemon->name</p>
                                        </div>
                                        <div class='col-3' style='margin: auto;'>".
                                        $genderIMG
                                        . "</div>                                    
                                    </div>
                                        <p class='text-start'>type: $pokemon->type<p>
                                    <div class='row text-start'>
                                        <div class='col-6'>
                                            <p>skill 1: $pokemon->skill1<p>
                                        </div>
                                        <div class='col-6'>
                                            <p>skill 2: $pokemon->skill2<p>                                            
                                        </div>
                                    </div>
                                    <div class='row text-start'>
                                        <div class='col-6'>
                                            <p class=''>skill 3: $pokemon->skill3<p>
                                        </div>
                                        <div class='col-6'>
                                            <p>skill 4: $pokemon->skill4<p>
                                        </div>
                                    </div>
                                 </div>
                            <div class='col-2'></div>
                            </div>
                        </div>
                        <div class='col-3'>
                            <div class='row'>
                                <a href='?todo=del&id=$pokemon->id'><button  class='btn btn-primary blackShadow'>Törlés</button></a></td>
                            </div>
                            <div class='row'>
                                <a href='?todo=new&M_id=$pokemon->id&M_name=$pokemon->name&M_type=$pokemon->type&M_skill1=$pokemon->skill1&M_skill2=$pokemon->skill2&M_skill3=$pokemon->skill3&M_skill4=$pokemon->skill4&M_gender=$pokemon->gender'><button class='btn btn-primary blackShadow'>Módosítás</button></a>
                            </div>
                            <div class='row'>
                                <a href='index.php'><button class='btn btn-primary blackShadow'>Kilépés</button></a>
                            </div>                                                        
                        </div>
                    </div>";
?>
<div style="height: inherit;"></div>