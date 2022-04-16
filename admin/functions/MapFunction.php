<?php
    $link= include('koneksi.php');

    function getMap(){
        $link= include('koneksi.php');
        $query= "SELECT * FROM map";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
            return $result = die ("Query Error: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        }
        return $result;
    }

    function getMapByID($id){
        $link= include('koneksi.php');
        $query = "SELECT * FROM map WHERE id = '" . $id . "'";
        $result = mysqli_query($koneksi, $query);
        $map = mysqli_fetch_array($result);

        if (!$map) {
           return exit('map doesn\'t exist with that ID!');
        }
        
        return $map;
    }
    
    function addMap($id, $nama, $shape, $coords){
        $link= include('koneksi.php');
        $idVAr = isset($id) ? $id : '';
        $namaVar = isset($nama) ? $nama : '';
        $shapeVar = isset($shape) ? $shape : '';
        $coordsVar = isset($coords) ? $coords : '';
        
        $query = "INSERT INTO map (id, nama, shape, coords) VALUES ('$idVAr', '$namaVar', '$shapeVar', '$coordsVar')";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Inserted Successfully!';
        } else {
            return $result = 'Failed to insert data!';
        }
    }

    function updateMap($id, $nama, $shape, $coords) {
        $link= include('koneksi.php');
        $idVar = isset($id) ? $id : NULL;
        $namaVar = isset($nama) ? $nama : '';
        $shapeVar = isset($shape) ? $shape : '';
        $coordsVar = isset($coords) ? $coords : '';
        
        $query = "UPDATE map set nama='" . $nameVar . "', shape='" . $shapeVar . "', coords='" . $coordsVar . "' WHERE id='" . $idVar . "'";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Updated Successfully!';
        } else {
            return $result = 'Failed to update data!';
        }
    }
    
    function deleteMap($id){
        $link= include('koneksi.php');
        $query = "DELETE FROM map WHERE id='" . $id . "'";

        if (mysqli_query($koneksi, $query)) {
            return $msg = "Deleted successfully <br>";
        } else {
            return $msg = "Error deleting record: " . mysqli_error($koneksi);
        }
    }
?>