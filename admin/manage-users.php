<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Blog Application</title>
    
    <!-- SASS Style-->
    <link rel="stylesheet" href="./styles/styles.css">

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
            <a href="index.html" class="nav__logo">Blogs.</a>
            <ul class="nav__items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <!--<li><a href="signin.html">Sign in</a></li>-->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.png" alt="">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Log Out</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <!--Dashboard-->
    <section class="dashboard">
        <div class="container dashboard__container">
            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>
            <aside>
                <ul>
                    <li>
                        <a href="add-post.html">
                            <i class="uil uil-pen"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li> <!--End item 1-->
                    <li>
                        <a href="dashboard.html">
                            <i class="uil uil-postcard"></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li> <!--End item 2-->
                    <li>
                        <a href="add-user.html">
                            <i class="uil uil-user-plus"></i>
                            <h5>Add User</h5>
                        </a>
                    </li> <!--End item 3-->
                    <li>
                        <a href="manage-users.html" class="active">
                            <i class="uil uil-users-alt"></i>
                            <h5>Manage User</h5>
                        </a>
                    </li> <!--End item 4-->
                    <li>
                        <a href="add-category.html">
                            <i class="uil uil-edit"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li> <!--End item 5-->
                    <li>
                        <a href="manage-categories.html">
                            <i class="uil uil-list-ul"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li> <!--End item 6-->
                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ernest Frowl</td>
                            <td>ufrowl</td>
                            <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr> <!--End item 1-->
                        <tr>
                            <td>Forest Gump</td>
                            <td>therunner</td>
                            <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                            <td>No</td>
                        </tr> <!--End item 2-->
                        <tr>
                            <td>Catlyn Stark</td>
                            <td>stoneheart</td>
                            <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr> <!--End item 3-->
                        <tr>
                            <td>Albert Frank</td>
                            <td>frankalb</td>
                            <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr> <!--End item 4-->
                    </tbody>
                </table>
            </main>
        </div>
    </section>

    <!--Footer-->
    <footer class="footer">
        <div class="footer__socials">
            <a href="https://youtube.com" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="category-posts.html">Wild Life</a></li>
                    <li><a href="category-posts.html">Travel</a></li>
                    <li><a href="category-posts.html">Art</a></li>
                    <li><a href="category-posts.html">Food</a></li>
                    <li><a href="category-posts.html">Music</a></li>
                    <li><a href="category-posts.html">Science & Tecknology</a></li>
                </ul>
            </article> <!--End item 1-->
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article> <!--End item 2-->
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article> <!--End item 3-->
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article> <!--End item 4-->
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; 2022 Blogs.</small>
        </div>
    </footer>

    <!--JS-->
    <script src="./app.js"></script>
</body>
</html>