<?php
require 'config/database.php';

//Cheeck if button was clicked
if(isset($_POST['submit'])) {
    //get form data
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$username_email){ //if username is empty
        $_SESSION['signin'] = "Username or email required";
    } elseif (!$password) {
        $_SESSION['signin'] = "Password is required";
    } else{
        //fetch user from DB users table
        $fetch_user_query = "SELECT * FROM users WHERE username='$username_email' OR email='$username_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if(mysqli_num_rows($fetch_user_result) == 1){ //there have to be only one user found in DB
            //convert the record into associtaed array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];
            //compare form password with DB password
            if(password_verify($password, $db_password)){
                //set session for access control
                $_SESSION['user-id'] = $user_record['id']; //Getting the id from DB
                //set session if user is admin
                if($user_record['is_admin'] == 1){
                    $_SESSION['user_is_admin'] = true;
                }

                //log user in
                header('location: ' . ROOT_URL . 'admin/'); //to admin files
            } else{
                $_SESSION['signin'] = "Please check your input";
            }
        } else{
            $_SESSION['signin'] = "User not found";
        }
    }

    //if there is any problem, then redirect to sign in page with login data
    if(isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location: ' . ROOT_URL . 'signin.php');
        die();
    }
} else{
    header('location: ' . ROOT_URL . 'signin.php');
    die();
}