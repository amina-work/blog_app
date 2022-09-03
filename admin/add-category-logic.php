<?php
require 'config/database.php';

if(isset($_POST['submit'])) {
    //get form data
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //validate the input
    if(!$title) {
        $_SESSION['add-category'] = "Please enter title";
    } elseif (!$description){
        $_SESSION['add-category'] = "Please enter description";
    }

    //redirect to add-category page if there was a problem with form data
    if(isset($_SESSION['add-category'])){
        $_SESSION['add-category-data'] = $_POST; //contains form
        header('location:' . ROOT_URL . 'admin/add-category.php');
        die();
    } else{
        //if no problem => insert category to DB
        $query = "INSERT INTO categories (title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($connection, $query);
        if(mysqli_errno($connection)) {
            $_SESSION['add-category'] = "Couldn't add category";
            header('location:' . ROOT_URL . 'admin/add-category.php');
            die();
        } else{
            $_SESSION['add-category-success'] = "Category '$title' added successfuly";
            header('location:' . ROOT_URL . 'admin/manage-categories.php');
            die();
        }
    }
}