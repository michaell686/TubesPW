<?php
    function getPrize_chances(){
        $link= include('../../koneksi.php');
        $query= "SELECT * FROM prize_chances";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
            return $result = die ("Query Error: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        }
        return $result;
    }

    function getPrize_chancesById($id){
        $link= include('../../koneksi.php');
        $query = "SELECT * FROM prize_chances WHERE id = '" . $id . "'";
        $result = mysqli_query($koneksi, $query);
        $prize_chances = mysqli_fetch_array($result);

        if (!$prize_chances) {
           return exit('prize_chances doesn\'t exist with that ID!');
        }
        
        return $prize_chances;
    }
    
    function addPrize_chances($prize_id, $type_chances_id){
        $link= include('../../koneksi.php');
        $prize_idVar = isset($prize_id) ? $prize_id : '';
        $type_chances_idVar = isset($type_chances_id) ? $type_chances_id : '';
        
        $query = "INSERT INTO prize_chances (prize_id, type_chances_id) VALUES ('$prize_idVar', '$type_chances_idVar')";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Inserted Successfully!';
        } else {
            return $result = 'Failed to insert data!';
        }
    }

    function updatePrize_chances($id, $prize_id, $type_chances_id) {
        $link= include('../../koneksi.php');
        $idVar = isset($id) ? $id : NULL;
        $prize_idVar = isset($prize_id) ? $prize_id : '';
        $type_chances_idVar = isset($type_chances_id) ? $type_chances_id : '';
        
        $query = "UPDATE prize_chances set  prize_id='" . $prize_idVar . "', type_chances_idVar='" . $deskripsiVar . "', WHERE id='" . $idVar . "'";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Updated Successfully!';
        } else {
            return $result = 'Failed to update data!';
        }
    }
    
    function deletePrize_chances($id){
        $link= include('../../koneksi.php');
        $query = "DELETE FROM prize_chances WHERE id='" . $id . "'";

        if (mysqli_query($koneksi, $query)) {
            return $msg = "Deleted successfully <br>";
        } else {
            return $msg = "Error deleting record: " . mysqli_error($koneksi);
        }
    }
?>