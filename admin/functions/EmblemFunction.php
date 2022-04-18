<?php
    function getEmblem(){
        $link= include('../../../koneksi.php');
        $query= "SELECT * FROM emblem";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
            return $result = die ("Query Error: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        }
        return $result;
    }

    function getEmblemById($id){
        $link= include('../../../koneksi.php');
        $query = "SELECT * FROM emblem WHERE id = '" . $id . "'";
        $result = mysqli_query($koneksi, $query);
        $emblem = mysqli_fetch_array($result);

        if (!$emblem) {
           return exit('emblem doesn\'t exist with that ID!');
        }
        return $emblem;
    }
    
    function addEmblem($nama){
        $link= include('../../../koneksi.php');
        $namaVar = isset($nama) ? $nama : '';
        
        $query = "INSERT INTO emblem (nama) VALUES ('$namaVar')";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Inserted Successfully!';
        } else {
            return $result = 'Failed to insert data!';
        }
    }

    function updateEmblem($id, $nama) {
        $link= include('../../../koneksi.php');
        $idVar = isset($id) ? $id : NULL;
        $namaVar = isset($nama) ? $nama : '';
        
        $query = "UPDATE emblem set nama='" . $namaVar . "' WHERE id='" . $idVar . "'";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Updated Successfully!';
        } else {
            return $result = 'Failed to update data!';
        }
    }
    
    function deleteEmblem($id){
        $link= include('../../../koneksi.php');
        $query = "DELETE FROM emblem WHERE id='" . $id . "'";

        if (mysqli_query($koneksi, $query)) {
            return $msg = "Deleted successfully <br>";
        } else {
            return $msg = "Error deleting record: " . mysqli_error($koneksi);
        }
    }
?>