<?php
    include_once "Tasks.php";
    $tasksModel = new PokemonFuncs("localhost", "root", "", "pokemon_table");
    $tasks = $tasksModel->getTasks();

    echo "<h2 class='my-3'>pokemonok</h2>";
    echo "<a href='?todo=new' class='btn btn-primary'>Új feladat felvétele</a>";
    echo "<table class='table table-striped'>";
    echo "<thead>";
    echo "<tr><th>ID</th><th>Név</th><th>Határidő</th><th>Kész?</th><th>Elékszült</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($tasks as $task) {
        echo "<tr>
            <td>$task->id</td>
            <td>$task->name</td>
            <td>$task->date</td>
            <td>".($task->completed?"Igen":"Nem")."</td>
            <td>".(!$task->completed?"<a href='?todo=setCompleted&id=$task->id'>Kész</a>":"")."</td>
        </tr>";
    }
    echo "</tbody>";
    echo "</table>";
?>