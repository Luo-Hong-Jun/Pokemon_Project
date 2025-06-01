<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feladatkezelő</title>
    <link href="https://fonts.cdnfonts.com/css/pokemon-hollow" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php
        include_once "pokemon_stats_funcs.php";
        $todo = $_GET['todo'] ?? 'show';
        $solutions = new PokemonFuncs("localhost", "root", "", "pokemons");
        switch ($todo) {
            case 'show':
                include_once "PokemonShowImgs.php";
                break;
            case 'new':
                include_once "PokemonModifyData.php";
                break;
            case 'modify':
                $id = htmlspecialchars($_POST['id']);
                $name = htmlspecialchars($_POST['name']);
                $type = htmlspecialchars($_POST['type']);
                $skill1 = htmlspecialchars($_POST['skill1']);
                $skill2 = htmlspecialchars($_POST['skill2']);
                $skill3 = htmlspecialchars($_POST['skill3']);
                $skill4 = htmlspecialchars($_POST['skill4']);
                $gender = htmlspecialchars($_POST['gender']);
                $img = "";
                if (isset($_FILES['img']) && $_FILES['img']['error'] === 0) {
                    $uploadDir = 'uploads/';
                    $filename = basename($_FILES['img']['name']);
                    $targetPath = $uploadDir . $filename;
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755, true);
                    }
                    if (move_uploaded_file($_FILES['img']['tmp_name'], $targetPath)) {
                        $img = $targetPath;
                    } else {
                        echo "A kép feltöltése nem sikerült.";
                        exit;
                    }
                }
                $solutions->ModifyPokemon($id,$name, $type,$img,$skill1,$skill2,$skill3,$skill4, $gender);
                header("Location: index.php");
                break;
            case 'data':
                include_once "PokemonShowData.php";
                break;
            case 'add':
                $name = htmlspecialchars($_POST['name']);
                $type = htmlspecialchars($_POST['type']);
                $skill1 = htmlspecialchars($_POST['skill1']);
                $skill2 = htmlspecialchars($_POST['skill2']);
                $skill3 = htmlspecialchars($_POST['skill3']);
                $skill4 = htmlspecialchars($_POST['skill4']);
                $gender = htmlspecialchars($_POST['gender']);
                $img = "";
                if (isset($_FILES['img']) && $_FILES['img']['error'] === 0) {
                    $uploadDir = 'uploads/';
                    $filename = basename($_FILES['img']['name']);
                    $targetPath = $uploadDir . $filename;
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755, true);
                    }
                    if (move_uploaded_file($_FILES['img']['tmp_name'], $targetPath)) {
                        $img = $targetPath;
                    } else {
                        echo "A kép feltöltése nem sikerült.";
                        exit;
                    }
                }
                $solutions->addPokemon($name, $type,$img,$skill1,$skill2,$skill3,$skill4, $gender);
                header("Location: index.php");
                break;
            case 'del':
                $id = htmlspecialchars($_GET['id']);
                $solutions->deletePokemon($id);
                header("Location: index.php");
                break;
        }
        ?>
    </div>
</body>

</html>