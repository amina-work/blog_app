<?php 
require 'config/database.php';

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    //making a default category that all posts of a deleted category default back to
    $update_query = "UPDATE posts SET category_id=3 WHERE category_id=$id";
    $update_result = mysqli_query($connection, $update_query); //exescuting the query

    if(!mysqli_errno($connection)) {
        //delete the category
        $query = "DELETE FROM categories WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);
        $_SESSION['delete-category-success'] = "Category deleted successfully";
    } else {
        $_SESSION['delete-category'] = "Couldn't delete category";
    }
}

header('location: ' . ROOT_URL . 'admin/manage-categories.php');