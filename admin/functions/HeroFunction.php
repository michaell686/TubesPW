<?php
    $link= include('koneksi.php');

    function getHero(){
        $link= include('koneksi.php');
        $query= "SELECT * FROM hero";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
            return $result = die ("Query Error: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        }
        return $result;
    }

    function getHeroById($id){
        $link= include('koneksi.php');
        $query = "SELECT * FROM hero WHERE id = '" . $id . "'";
        $result = mysqli_query($koneksi, $query);
        $hero = mysqli_fetch_array($result);

        if (!$hero) {
           return exit('hero doesn\'t exist with that ID!');
        }
        
        return $hero;
    }
    
    function addHero($name, $attack, $health, $description){
        $link= include('koneksi.php');
        $nameVar = isset($name) ? $name : '';
        $attackVar = isset($attack) ? $attack : '';
        $healthVar = isset($health) ? $health : '';
        $descriptionVar = isset($description) ? $description : '';
        
        $query = "INSERT INTO hero (name, attack, health, description) VALUES ('$nameVar', '$attackVar', '$healthVar', '$descriptionVar')";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Inserted Successfully!';
        } else {
            return $result = 'Failed to insert data!';
        }
    }

    function updateHero($id, $name, $attack, $health, $description) {
        $link= include('koneksi.php');
        $idVar = isset($id) ? $id : NULL;
        $nameVar = isset($name) ? $name : '';
        $attackVar = isset($attack) ? $attack : '';
        $healthVar = isset($health) ? $health : '';
        $descriptionVar = isset($description) ? $description : '';
        
        $query = "UPDATE hero set name='" . $nameVar . "', attack='" . $attackVar . "', health='" . $healthVar . "' ,description='" . $descriptionVar .  "' WHERE id='" . $idVar . "'";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Updated Successfully!';
        } else {
            return $result = 'Failed to update data!';
        }
    }
    
    function deleteHero($id){
        $link= include('koneksi.php');
        $query = "DELETE FROM hero WHERE id='" . $id . "'";

        if (mysqli_query($koneksi, $query)) {
            return $msg = "Deleted successfully <br>";
        } else {
            return $msg = "Error deleting record: " . mysqli_error($koneksi);
        }
    }
?>