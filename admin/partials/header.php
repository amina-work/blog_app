<?php
require '../partials/header.php';
//check login status (cannot access any admin page without admin status)
if(!isset($_SESSION['user-id'])) {
    header('location:' . ROOT_URL . 'signin.php');
    die();
}
