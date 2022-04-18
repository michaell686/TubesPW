<?php
    function getPrize_life_token(){
        $link= include('../../koneksi.php');
        $query= "SELECT * FROM prize_life_token";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
            return $result = die ("Query Error: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        }
        return $result;
    }

    function getPrize_life_tokenByID($id){
        $link= include('../../koneksi.php');
        $query = "SELECT * FROM prize_life_token WHERE id = '" . $id . "'";
        $result = mysqli_query($koneksi, $query);
        $prize_chances = mysqli_fetch_array($result);

        if (!$prize_chances) {
           return exit('prize_chances doesn\'t exist with that ID!');
        }
        
        return $prize_chances;
    }
    
    function addPrize_life_token($token, $chances){
        $link= include('../../koneksi.php');
        $tokenVar = isset($token) ? $token : '';
        $chancesVar = isset($chances) ? $chances : '';
        
        $query = "INSERT INTO prize_life_token (token, chances) VALUES ('$tokenVar', '$chancesVar')";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Inserted Successfully!';
        } else {
            return $result = 'Failed to insert data!';
        }
    }

    function updatePrize_life_token($id, $token, $chances) {
        $link= include('../../koneksi.php');
        $idVar = isset($id) ? $id : NULL;
        $tokenVar = isset($token) ? $token : '';
        $chancesVar = isset($chances) ? $chances : '';
        
        $query = "UPDATE     set token='" . $tokenVar . "', chances='" . $chancesVar . "', WHERE id='" . $idVar . "'";
        $result = mysqli_query($koneksi,$query);
        var_dump($result, $query, $idVar, $tokenVar, $chancesVar);

        if($result) {
            return $result = 'Updated Successfully!';
        } else {
            return $result = 'Failed to update data!';
        }
    }
    
    function deletePrize_life_token($id){
        $link= include('../../koneksi.php');
        $query = "DELETE FROM prize_life_token WHERE id='" . $id . "'";

        if (mysqli_query($koneksi, $query)) {
            return $msg = "Deleted successfully <br>";
        } else {
            return $msg = "Error deleting record: " . mysqli_error($koneksi);
        }
    }
?>