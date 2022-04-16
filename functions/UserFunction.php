
<?php
function login($username, $password){
    $link= include('../koneksi.php');
    $query = "SELECT * FROM user WHERE username = '" . $username . "' AND password = '" . $password . "'";
    $result = mysqli_query($koneksi,$query);
    $user = mysqli_fetch_array($result);
    return $user;
}

// function fetchUser()
// {
//     $link = createConnection();
//     $query = "SELECT * FROM me_user";
//     $result = $link->query($query);
//     closeConnection($link);
//     return $result;
// }

// function updateProfileData($id, $name, $profilePhoto = null)
// {
//     $result = 0;
//     $link = createConnection();
//     $fileExtension = pathinfo($_FILES['profilePhoto']['name'], PATHINFO_EXTENSION);
//     if ($fileExtension == null) {
//         $query = "UPDATE me_user SET name = ? WHERE id = ?";
//         $stmt = $link->prepare($query);
//         $stmt->bindParam(1, $name);
//         $stmt->bindParam(2, $id);
//         $link->beginTransaction();
//         if ($stmt->execute()) {
//             $link->commit();
//             $result = 1;
//         } else {
//             $link->rollBack();
//         }
//         closeConnection($link);
//         return $result;
//     } else {
//         $query = "UPDATE me_user SET name = ?, photo = ? WHERE id = ?";
//         $stmt = $link->prepare($query);
//         $stmt->bindParam(1, $name);
//         $stmt->bindParam(2, $profilePhoto);
//         $stmt->bindParam(3, $id);
//         $link->beginTransaction();
//         if ($stmt->execute()) {
//             $link->commit();
//             $result = 1;
//         } else {
//             $link->rollBack();
//         }
//         closeConnection($link);
//         return $result;
//     }
// }

// function changePassword($md5NewPassword, $id)
// {
//     $result = 0;
//     $link = createConnection();
//     $query = "UPDATE me_user SET password = ? WHERE id = ?";
//     $stmt = $link->prepare($query);
//     $stmt->bindParam(1, $md5NewPassword);
//     $stmt->bindParam(2, $id);
//     $link->beginTransaction();
//     if ($stmt->execute()) {
//         $link->commit();
//         $result = 1;
//     } else {
//         $link->rollBack();
//     }
//     closeConnection($link);
//     return $result;

// }