<?php
    function getNews(){
        $link= include('../../koneksi.php');
        $query= "SELECT * FROM news";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
            return $result = die ("Query Error: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        }
        return $result;
    }

    function getNewsById($id){
        $link= include('../../koneksi.php');
        $query = "SELECT * FROM news WHERE id = '" . $id . "'";
        $result = mysqli_query($koneksi, $query);
        $news = mysqli_fetch_array($result);

        if (!$news) {
           return exit('news doesn\'t exist with that ID!');
        }
        
        return $news;
    }
    
    function addNews($judul, $gambar, $deskripsi, $newscol){
        $link= include('../../koneksi.php');
        $judulVar = isset($judul) ? $judul : '';
        $gambarVar = isset($gambar) ? $gambar : '';
        $deskripsiVar = isset($deskripsi) ? $deskripsi : '';
        $newscolVar = isset($newscol) ? $newscol : '';
        
        $query = "INSERT INTO news (judul, gambar, deskripsi, newscol) VALUES ('$judulVar', '$gambarVar', '$deskripsiVar', '$newscolVar')";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Inserted Successfully!';
        } else {
            return $result = 'Failed to insert data!';
        }
    }

    function updateNews($id, $judul, $gambar, $deskripsi, $newscol) {
        $link= include('../../koneksi.php');
        $idVar = isset($id) ? $id : NULL;
        $judulVar = isset($judul) ? $judul : '';
        $gambarVar = isset($gambar) ? $gambar : '';
        $deskripsiVar = isset($deskripsi) ? $deskripsi : '';
        $newscolVar = isset($newscol) ? $newscol : '';
        
        $query = "UPDATE news set judul='" . $judulVar . "', gambar='" . $gambarVar . "', deskripsi='" . $deskripsiVar . "', newscol='" . $newscolVar . "' WHERE id='" . $idVar . "'";
        $result = mysqli_query($koneksi,$query);

        if($result) {
            return $result = 'Updated Successfully!';
        } else {
            return $result = 'Failed to update data!';
        }
    }
    
    function deleteNews($id){
        $link= include('../../koneksi.php');
        $query = "DELETE FROM news WHERE id='" . $id . "'";

        if (mysqli_query($koneksi, $query)) {
            return $msg = "Deleted successfully <br>";
        } else {
            return $msg = "Error deleting record: " . mysqli_error($koneksi);
        }
    }
?>