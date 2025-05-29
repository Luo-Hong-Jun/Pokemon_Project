<?php
include_once "pokemon.php";

class PokemonFuncs{

    private $conn;
    function __construct($server, $user, $password, $database) {
        $this->conn = new mysqli($server, $user, $password, $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function Pokemons_Data() {
        $sql = "SELECT * FROM pokemon_table";
        $result = $this->conn->query($sql);
        $pokemons = [];
        while ($row = $result->fetch_object()) {
            $pokemons[] = new Pokemon($row->id, $row->name, $row->type, $row->img, $row->skill1, $row -> skill2,$row->skill3, $row->skill4, $row->gender);
        }
        return $pokemons;
    }

        function GetPokemon($id) {
        $sql = "SELECT * FROM pokemon_table WHERE id = $id";
        $result = $this->conn->query($sql);
        while ($row = $result->fetch_object()) {
            $pokemon = new Pokemon($row->id, $row->name, $row->type, $row->img, $row->skill1, $row -> skill2,$row->skill3, $row->skill4, $row->gender);
        }
        return $pokemon;
    }

    function addPokemon($name,  $type,  $img,  $skill1, $skill2, $skill3, $skill4,  $gender) {
        $sql = "INSERT INTO pokemon_table (name,  type,  img,  skill1, skill2, skill3, skill4,  gender ) VALUES ('$name', '$type', '$img', '$skill1', '$skill2','$skill3','$skill4', ' $gender')";
        $this->conn->query($sql);
    }

    function deletePokemon($id) {
        $sql = "DELETE FROM pokemon_table WHERE id = $id";
        $this->conn->query($sql);
    }

    function UpdatePokemon($id){
        
    }
}
?>