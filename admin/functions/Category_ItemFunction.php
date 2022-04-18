<?php
    function getCategory_item(){
        $link= include('../../koneksi.php');
        $query= "SELECT * FROM category_item";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
            return $result = die ("Query Error: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        }
        return $result;
    }

    function getCategory_itemById($id){
        $link= include('../../koneksi.php');
        $query = "SELECT * FROM category_item WHERE id = '" . $id . "'";
        $result = mysqli_query($koneksi, $query);
        $emblem = mysqli_fetch_array($result);

        if (!$emblem) {
           return exit('emblem doesn\'t exist with that ID!');
        }
        return $emblem;
    }
    
    function addCategory_item($category_name){
        $link= include('../../koneksi.php');
        $category_NameVar = isset($category_name) ? $category_name : '';
        
        $query = "INSERT INTO category_item (category_name) VALUES ('$category_NameVar')";
        $result = mysqli_query($koneksi,$query);
        var_dump($result);

        if($result) {
            return $result = 'Inserted Successfully!';
        } else {
            return $result = 'Failed to insert data!';
        }
    }

    function updateCategory_item($id, $category_name) {
        $link= include('../../koneksi.php');
        $idVar = isset($id) ? $id : NULL;
        $category_NameVar = isset($category_name) ? $category_name : '';
        
        $query = "UPDATE category_item set category_name='" . $category_NameVar . "' WHERE id='" . $idVar . "'";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Updated Successfully!';
        } else {
            return $result = 'Failed to update data!';
        }
    }
    
    function deleteCategory_item($id){
        $link= include('../../koneksi.php');
        $query = "DELETE FROM category_item WHERE id='" . $id . "'";

        if (mysqli_query($koneksi, $query)) {
            return $msg = "Deleted successfully <br>";
        } else {
            return $msg = "Error deleting record: " . mysqli_error($koneksi);
        }
    }
?>