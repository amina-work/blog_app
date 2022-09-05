<?php
require 'config/database.php';

//make sure the edit btn was clicked
if(isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    //the previous_thumbnail_name will be used to delete the older thumbnail in case a new one is chosen
    $previous_thumbnail_name = filter_var($_POST['previous_thumbnail_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
    $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);
    $thumbnail = $_FILES['thumbnail'];

    //set is_featured to 0 when unchecked
    $is_featured = $is_featured == 1 ?: 0;

    //check validate input values
    if(!$title){
        $_SESSION['edit-post'] = "Couldn't update post. Invalid form input.";
    } elseif (!$body){
        $_SESSION['edit-post'] = "Couldn't update post. Invalid form input.";
    } elseif (!$category_id){
        $_SESSION['edit-post'] = "Couldn't update post. Invalid form input.";
    } else{
        //delte existing thumbnail if a new one is added
        if($thumbnail['name']) {
            $previous_thumbnail_path = '../images/' . $previous_thumbnail_name;
            if($previous_thumbnail_path){
                unlink($previous_thumbnail_path);
            }

            //rename new img
            $time = time();
            $thumbnail_name = $time . $thumbnail['name'];
            $thumbnail_tmp_name = $thumbnail['tmp_name'];
            $thumbnail_destination_path = '../images/' . $thumbnail_name;

            //make sure file is img
            $allowed_files = ['png', 'jpg', 'jpeg'];
            $extention = explode('.', $thumbnail_name);
            $extention = end($extention);
            if(in_array($extention, $allowed_files)) {
                //make sure img is not too large (2mb)
                if($thumbnail['size'] < 2000000) {
                    //upload thumbnail
                    move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
                } else{
                    $_SESSION['edit-post'] = "Couldn't update post. Image is too large";
                }
            } else{
                $_SESSION['edit-post'] = "Couldn't update post. File should be png, jpg or jpeg";
            }
        }
    }

    if($_SESSION['edit-post']) {
        //redirect to manage posts if form is invalid
        header('location: ' . ROOT_URL . 'admin/');
        die();
    } else {
        //set all is_featured to 0 if is_featured to this post is 1
        if($is_featured == 1){
            $zero_all_is_featured_query = "UPDATE posts SET is_featured=0";
            $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);
        }

        // set thumbnail name if new one was uploaded, else keep the same name
        $thumbnail_to_insert = $thumbnail_name ?? $previous_thumbnail_name;

        //updating the post in DB
        $query = "UPDATE posts SET title='$title', body='$body', thumbnail='$thumbnail_to_insert', category_id=$category_id, is_featured=$is_featured WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);
    }

    if(!mysqli_errno($connection)) {
        $_SESSION['edit-post-success'] = "Post updated successfully.";
    }
}

header('location: ' . ROOT_URL . 'admin/');
die();