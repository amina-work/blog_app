<?php 
require 'config/database.php';

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    //making a default category that all posts of a deleted category default back to


    //delete the category
    $query = "DELETE FROM categories WHERE id=$id LIMIT 1";
    $result = mysqli_query($connection, $query);
    $_SESSION['delete-category-success'] = "Category deleted successfully";
    if(mysqli_errno($connection)){
        $_SESSION['delete-category'] = "Couldn't delete category";
    } else {
        $_SESSION['delete-category-success'] = "Category deleted successfully";
    }
}

header('location: ' . ROOT_URL . 'admin/manage-categories.php');