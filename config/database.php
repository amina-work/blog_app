<?php
session_start();
require 'config/constants.php';

//connect to the database
$connection = new mysqli(DB_HOST, DB_USER, DB_password, DB_NAME);

if(mysqli_errno($connection)){
    die(mysqli_error($connection));
}