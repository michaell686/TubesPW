<?php
    function getHome(){
        $link= include('../../koneksi.php');
        $query= "SELECT * FROM home";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
            return $result = die ("Query Error: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        }
        return $result;
    }

    function getHomeById($id){
        $link= include('../../koneksi.php');
        $query = "SELECT * FROM home WHERE id = '" . $id . "'";
        $result = mysqli_query($koneksi, $query);
        $home = mysqli_fetch_array($result);

        if (!$home) {
           return exit('home doesn\'t exist with that ID!');
        }
        return $home;
    }
    
    function addHome($nama, $video_url){
        $link= include('../../koneksi.php');
        $namaVar = isset($nama) ? $nama : '';
        $video_urlVar = isset($video_url) ? $video_url : '';
        
        $query = "INSERT INTO home (nama, video_url) VALUES ('$namaVar', '$video_urlVar')";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Inserted Successfully!';
        } else {
            return $result = 'Failed to insert data!';
        }
    }

    function updateHome($id, $nama, $video_url) {
        $link= include('../../koneksi.php');
        $idVar = isset($id) ? $id : NULL;
        $namaVar = isset($nama) ? $nama : '';
        $video_urlVar = isset($video_url) ? $video_url : '';
        
        $query = "UPDATE home set nama='" . $namaVar . "', video_url='" . $video_urlVar . "' WHERE id='" . $idVar . "'";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Updated Successfully!';
        } else {
            return $result = 'Failed to update data!';
        }
    }
    
    function deleteHome($id){
        $link= include('../../koneksi.php');
        $query = "DELETE FROM home WHERE id='" . $id . "'";

        if (mysqli_query($koneksi, $query)) {
            return $msg = "Deleted successfully <br>";
        } else {
            return $msg = "Error deleting record: " . mysqli_error($koneksi);
        }
    }
?>