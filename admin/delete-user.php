<?php
require 'config/database.php';

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    //fetch user from the DB users
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);
    
    // make sure we got back only & user
    if(mysqli_num_rows($result) == 1){
        //delete the user avatar
        $avatar_name = $user['avatar'];
        $avatar_path = '../images/' . $avatar_name;
        if($avatar_path){
            unlink($avatar_path); //delete the img is available
        }
    }

    //fetch all user's posts thumbnails & delete them


    //delete user from DB
    $delete_user_query = "DELETE FROM users WHERE id=$id";
    $delete_user_result = mysqli_query($connection, $delete_user_query);
    if(mysqli_errno($connection)){
        $_SESSION['delete-user'] = "Couldn't delete user";
    } else {
        $_SESSION['delete-user-success'] = "User '{$user['firstname']} {$user['lastname']}' was deleted";
    }
}

header('location:' . ROOT_URL . 'admin/manage-users.php');
die();