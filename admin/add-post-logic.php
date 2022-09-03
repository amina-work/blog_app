<?php
require 'config/database.php';

if(isset($_POST['submit'])) {
    $author_id = $_SESSION['user-id']; // user-id from the signin-logic session
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
    $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);
    $thumbnail = $_FILES['thumbnail'];

    //set is_featured to 0 if uncheked
    $is_featured = $is_featured == 1 ?: 0;

    //validate form data
    if(!$title){
        $_SESSION['add-post'] = "Please add a post title";
    } elseif(!$body){
        $_SESSION['add-post'] = "Please enter a post body";
    } elseif (!$category_id){
        $_SESSION['add-post'] = "Please select a post category";
    } elseif (!$thumbnail['name']){
        $_SESSION['add-post'] = "Please choose a post thumbnail";
    } else{
        //Work on thumbnail
        ////work on name of thumbnail
        $time = time();
        $thumbnail_name = $time . $thumbnail['name'];
        $thumbnail_tmp_name = $thumbnail['tmp_name'];
        $thumbnail_destination_path = '../images/' . $thumbnail_name;

        //make sure if file is rlly an image
        $allowed_files = ['png', 'jpg', 'jpeg'];
        $extention = explode('.', $thumbnail_name);
        $extention = end($extention);
        if(in_array($extention, $allowed_files)) {
            //make sure img is not too large (2mb)
            if($thumbnail['size'] < 2000000) {
                //upload thumbnail
                move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
            } else{
                $_SESSION['add-post'] = "Image is too large";
            }
        } else{
            $_SESSION['add-post'] = "File should be png or jpg or jpeg";
        }
    }

    //redirect to form
    if(isset($_SESSION['add-post'])) {
        $_SESSION['add-post-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/add-post.php');
        die();
    } else{
        //set is_featured to all posts to 0 if this one is 1
        if($is_featured == 1){
            $zero_all_is_featured_query = "UPDATE posts SET is_featured=0";
            $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);
        }

        //insert post into DB
        $query = "INSERT INTO posts (title, body, thumbnail, category_id, author_id, is_featured) VALUES ('$title', '$body', '$thumbnail_name', $category_id, $author_id, $is_featured)";
        $result = mysqli_query($connection, $query);

        if(!mysqli_errno($connection)) {
            $_SESSION['add-post-success'] = "New post added successfully";
            header('location:' . ROOT_URL . 'admin/');
            die();
        }
    }
}

header('location: ' . ROOT_URL . 'admin/add-post.php');
die();