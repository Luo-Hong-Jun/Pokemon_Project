<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feladatkezelő</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        include_once "pokemon_stats_funcs.php";
        $todo = $_GET['todo'] ?? 'team';
        $solutions = new PokemonFuncs("localhost", "root", "", "pokemons");
        switch ($todo) {
            case 'team':
                include_once "PokemonShowTeam.php";
                break;
            case 'new':
                include_once "PokemonModifyData.php";
                break;
            case 'add':
                $name = htmlspecialchars($_POST['name']);
                $type = htmlspecialchars($_POST['type']);
                $skill1 = htmlspecialchars($_POST['skill1']);
                $skill2 = htmlspecialchars($_POST['skill2']);
                $skill3 = htmlspecialchars($_POST['skill3']);
                $skill4 = htmlspecialchars($_POST['skill4']);
                $gender = htmlspecialchars($_POST['gender']);
                $img = htmlspecialchars($_POST['img']);
                $solutions->addPokemon($name, $type,$img,$skill1,$skill2,$skill3,$skill4, $gender);
                break;
            case 'del':
                $id = htmlspecialchars($_POST['id']);
                $solutions->deletePokemon($id);
                break;
        }
        ?>
    </div>
</body>

</html>