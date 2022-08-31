<?php
require 'config/database.php';

//fetch current user from DB
if(isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id='$id'";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Blog Application</title>
    
    <!-- SASS Style-->
    <link rel="stylesheet" href="<?= ROOT_URL ?>styles/styles.css?v=<?php echo time(); ?>">

    <!-- Iconscout cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <!-- Montserrat Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Outfit:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Navigation Bar -->
    <nav class="nav">
        <div class="container nav__container">
            <a href="<?= ROOT_URL ?>" class="nav__logo">Blogs.</a>
            <ul class="nav__items">
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL ?> contact.php">Contact</a></li>
                <?php if(isset($_SESSION['user-id'])) : ?>
                    <li class="nav__profile">
                        <div class="avatar">
                            <img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?>" alt="">
                        </div>
                        <ul>
                            <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
                            <li><a href="<?= ROOT_URL ?>logout.php">Log Out</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <a href="<?= ROOT_URL ?>signin.php">Sign in</a></li> </li>
                <?php endif ?>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>