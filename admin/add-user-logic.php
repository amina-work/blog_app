<?php
require 'config/database.php';

//get user form if submit btn was clicked
if(isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); //filter... is so no one can infiltrate sql to our form(?)
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); //confirm that the email logged in is actually an email
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $avatar = $_FILES['avatar'];

    /* echo $firstname, $lastname, $username, $email, $createpassword, $confirmpassword;
    var_dump($avatar) ==== to check if everything works ==== */


    //validate input values
    if(!$firstname){
        $_SESSION['add-user'] = "Please enter your first name";
    } else if(!$lastname){
        $_SESSION['add-user'] = "Please enter your last name";
    } else if(!$username){
        $_SESSION['add-user'] = "Please enter your username";
    } else if(!$email){
        $_SESSION['add-user'] = "Please enter a valid email address";
    } else if(strlen($createpassword) < 8 || strlen($confirmpassword) < 8){
        $_SESSION['add-user'] = "Password should be at least 8 characters long";
    } else if(!$avatar['name']){
        $_SESSION['add-user'] = "Please add an avatar";
    } else{ //if all the former conditions match then:
        //check if password don't match
        if($createpassword !== $confirmpassword){
            $_SESSION['add-user'] = "Passwords do not match";
        } else{
            //hash password
            $hashed__password = password_hash($createpassword, PASSWORD_DEFAULT); //as in save a different longer & more complicated password then the one entered in the DB

            //is userename or email already exist in DB
            $user_check_query = "SELECT * FROM users WHERE username ='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0){ //check if there's any record in DB
                $_SESSION['add-user'] = "Username or email already exist";
            } else{
                //rename avatar img open upload
                $time = time(); //time is a unique variable counting seconds from jan 1, 1970
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = '../images/' . $avatar_name; //put the avatar img in the images folder

                //make sure file is image
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);

                if(in_array($extention, $allowed_files)){
                    //make sure img is not too large (1mb)
                    if($avatar['size'] < 1000000){
                        //upload avatar
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    } else{
                        $_SESSION['add-user'] = "The image is too large";
                    }
                } else{
                    $_SESSION['add-user'] = "File should be in png, jpg, or jpeg form";
                }
            }
        }
    }

    //redirect to sign up page if errors exist
    if(isset($_SESSION['add-user'])){
        //pass form data to add user page
        $_SESSION['add-user-data'] = $_POST; //send all the invalid input back to add user page
        header('location: ' . ROOT_URL . '/admin/add-user.php');
        die();
    } else{
        //insert new user to users table
        $insert_user_query = "INSERT INTO users SET firstname='$firstname', lastname='$lastname', username='$username', email='$email', password='$hashed__password', avatar='$avatar_name', is_admin='$is_admin'";//columns from the users table
        $insert_user_result = mysqli_query($connection, $insert_user_query); //actually inserting data to the users table DB

        if(!mysqli_errno($connection)) {
            //redirect to login page sucess message
            $_SESSION['add-user-success'] = "New user $firstname $lastname added";
            header('location: ' . ROOT_URL . 'admin/manage-users.php');
            die();
        }
    }
} else {
    header('location:' . ROOT_URL . 'admin/add-user.php');
    die();
}