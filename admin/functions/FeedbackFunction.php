<?php
    $link= include('koneksi.php');

    function getFeedback(){
        $link= include('koneksi.php');
        $query= "SELECT * FROM feedback";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
            return $result = die ("Query Error: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        }
        return $result;
    }

    function getFeedbackById($id){
        $link= include('koneksi.php');
        $query = "SELECT * FROM feedback WHERE id = '" . $id . "'";
        $result = mysqli_query($koneksi, $query);
        $feedback = mysqli_fetch_array($result);

        if (!$feedback) {
           return exit('feedback doesn\'t exist with that ID!');
        }
        return $feedback;
    }
    
    function addFeedback($id, $nama, $komentar){
        $link= include('koneksi.php');
        $idVar = isset($id) ? $id : '';
        $namaVar = isset($nama) ? $nama : '';
        $komentarVar = isset($komentar) ? $komentar : '';
        
        $query = "INSERT INTO feeedback (id, nama, komentar) VALUES ('$idVar', '$namaVar', '$komentarVar')";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Inserted Successfully!';
        } else {
            return $result = 'Failed to insert data!';
        }
    }

    function updateFeedback($id, $nama, $komentar) {
        $link= include('koneksi.php');
        $idVar = isset($id) ? $id : NULL;
        $namaVar = isset($nama) ? $nama : '';
        $komentarVar = isset($komentar) ? $komentar : '';
        
        $query = "UPDATE feedback set nama='" . $namaVar . "', komentar='" . $komentarVar . "' WHERE id='" . $idVar . "'";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Updated Successfully!';
        } else {
            return $result = 'Failed to update data!';
        }
    }
    
    function deleteFeedback($id){
        $link= include('koneksi.php');
        $query = "DELETE FROM feedback WHERE id='" . $id . "'";

        if (mysqli_query($koneksi, $query)) {
            return $msg = "Deleted successfully <br>";
        } else {
            return $msg = "Error deleting record: " . mysqli_error($koneksi);
        }
    }
?>