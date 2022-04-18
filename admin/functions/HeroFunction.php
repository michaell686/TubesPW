<?php
    function getHero(){
        $link= include('../koneksi.php');
        $query= "SELECT * FROM hero";   
        $result = mysqli_query($koneksi, $query);
        if(!$result){
            return $result = die ("Query Error: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        }
        return $result;
    }

    function getHeroById($id){
        $link= include('../koneksi.php');
        $query = "SELECT * FROM hero WHERE id = '" . $id . "'";
        $result = mysqli_query($koneksi, $query);
        $hero = mysqli_fetch_array($result);

        if (!$hero) {
           return exit('hero doesn\'t exist with that ID!');
        }
        
        return $hero;
    }
    
    function getHeroByName($name){
        $link= include('../koneksi.php');
        $query = "SELECT * FROM hero WHERE name = '" . $name . "'";
        $result = mysqli_query($koneksi, $query);
        $hero = mysqli_fetch_array($result);

        if (!$hero) {
           return exit('hero doesn\'t exist with that Name!');
        }
        
        return $hero;
    }
    
    function addHero($name, $attack, $health, $description, $path, $temp){
        $link= include('../koneksi.php');
        $nameVar = isset($name) ? $name : '';
        $attackVar = isset($attack) ? $attack : '';
        $healthVar = isset($health) ? $health : '';
        $descriptionVar = isset($description) ? $description : '';
        $path = isset($path) ? $path : '';

        if($path != "") { 
            $ekstensi_diperbolehkan = array('png','jpg', 'gif');
            $x = explode('.', $path);
            $ekstensi = strtolower(end($x));
            $angka_acak = rand(1,999); 
            $nama_gambar_baru = 'picture/'.$angka_acak.'-'.$path;  
                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {      
                        move_uploaded_file($temp, $nama_gambar_baru);  
        
                        $query = "INSERT INTO hero (name, attack, health, description, picture) VALUES ('$nameVar', '$attackVar', '$healthVar', '$descriptionVar', '$nama_gambar_baru')";
                        $result = mysqli_query($koneksi,$query);

                        if($result) {
                            return $result = 'Inserted Successfully!';
                        } else {
                            return $result = 'Failed to insert data!';
                        }
                    } else {      
                        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='add.php';</script>"; 
                    } 
        } else { 
            $query = "INSERT INTO hero (name, attack, health, description) VALUES ('$nameVar', '$attackVar', '$healthVar', '$descriptionVar')"; 
            $result = mysqli_query($koneksi, $query); 
            
            if($result) {
                return $result = 'Inserted Successfully!';
            } else {
                return $result = 'Failed to insert data!';
            }
            if(!$result){ 
                return die ("Query gagal dijalankan: ".mysqli_errno($koneksi). 
                " - ".mysqli_error($koneksi)); 
            }
        } 
    }

    function updateHero($id, $name, $attack, $health, $description, $path, $temp) {
        $link= include('../koneksi.php');
        $idVar = isset($id) ? $id : NULL;
        $nameVar = isset($name) ? $name : '';
        $attackVar = isset($attack) ? $attack : '';
        $healthVar = isset($health) ? $health : '';
        $descriptionVar = isset($description) ? $description : '';
        $path = isset($path) ? $path : '';

        if($path != "") { 
            
            $ekstensi_diperbolehkan = array('png','jpg', 'gif');
            $x = explode('.', $path);
            $ekstensi = strtolower(end($x));
            $angka_acak = rand(1,999); 
            $nama_gambar_baru = 'picture/'.$angka_acak.'-'.$path;  
                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {      
                        move_uploaded_file($temp, $nama_gambar_baru);  
        
                        $query = "UPDATE hero set name='" . $nameVar . "', attack='" . $attackVar . "', health='" . $healthVar . "' ,description='" . $descriptionVar . "' , picture='" . $nama_gambar_baru . "' WHERE id='" . $idVar . "'";
                        $result = mysqli_query($koneksi,$query);

                        if($result) {
                            return $result = 'Updated Successfully!';
                        } else {
                            return $result = 'Failed to update data!';
                        }
                    } else {      
                        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='add.php';</script>"; 
                    } 
        } else { 
            $query = "UPDATE hero set name='" . $nameVar . "', attack='" . $attackVar . "', health='" . $healthVar . "' ,description='" . $descriptionVar . "' WHERE id='" . $idVar . "'";
            $result = mysqli_query($koneksi, $query); 
            
            if($result) {
                return $result = 'Updated Successfully!';
            } else {
                return $result = 'Failed to update data!';
            }
            if(!$result){ 
                return die ("Query gagal dijalankan: ".mysqli_errno($koneksi). 
                " - ".mysqli_error($koneksi)); 
            }
        } 
    }
    
    function deleteHero($id){
        $link= include('../koneksi.php');
        $query = "DELETE FROM hero WHERE id='" . $id . "'";

        if (mysqli_query($koneksi, $query)) {
            return $msg = "Deleted successfully <br>";
        } else {
            return $msg = "Error deleting record: " . mysqli_error($koneksi);
        }
    }
?>