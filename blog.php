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

    <!--Search Bar-->
    <section class="search-bar">
        <form class="container search-bar__container" action="">
            <div>
                <i class="uil uil-search"></i>
                <input type="search" name="" placeholder="Search">
            </div>
            <button type="submit" class="btn">Go</button>
        </form>
    </section>
    
    <!-- Posts Section -->
    <section class="posts">
        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbail">
                    <img src="./images/post1.jpeg" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.html">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">How to stop friends from sending voice messages all the time</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum illo distinctio eveniet itaque
                        sunt nihil tempora nesciunt accusantium alias esse obcaecati.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar1.png" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Stone</h5>
                            <small>June 10, 2022 - 7:40</small>
                        </div>
                    </div>
                </div>
            </article> <!--end item 1-->
            <article class="post">
                <div class="post__thumbail">
                    <img src="./images/post1.jpeg" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.html">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">How to stop friends from sending voice messages all the time</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum illo distinctio eveniet itaque
                        sunt nihil tempora nesciunt accusantium alias esse obcaecati.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar1.png" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Stone</h5>
                            <small>June 10, 2022 - 7:40</small>
                        </div>
                    </div>
                </div>
            </article> <!--end item 2-->
            <article class="post">
                <div class="post__thumbail">
                    <img src="./images/post1.jpeg" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.html">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">How to stop friends from sending voice messages all the time</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum illo distinctio eveniet itaque
                        sunt nihil tempora nesciunt accusantium alias esse obcaecati.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar1.png" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Stone</h5>
                            <small>June 10, 2022 - 7:40</small>
                        </div>
                    </div>
                </div>
            </article> <!--end item 3-->
            <article class="post">
                <div class="post__thumbail">
                    <img src="./images/post1.jpeg" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.html">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">How to stop friends from sending voice messages all the time</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum illo distinctio eveniet itaque
                        sunt nihil tempora nesciunt accusantium alias esse obcaecati.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar1.png" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Stone</h5>
                            <small>June 10, 2022 - 7:40</small>
                        </div>
                    </div>
                </div>
            </article> <!--end item 4-->
            <article class="post">
                <div class="post__thumbail">
                    <img src="./images/post1.jpeg" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.html">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">How to stop friends from sending voice messages all the time</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum illo distinctio eveniet itaque
                        sunt nihil tempora nesciunt accusantium alias esse obcaecati.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar1.png" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Stone</h5>
                            <small>June 10, 2022 - 7:40</small>
                        </div>
                    </div>
                </div>
            </article> <!--end item 5-->
            <article class="post">
                <div class="post__thumbail">
                    <img src="./images/post1.jpeg" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.html">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">How to stop friends from sending voice messages all the time</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum illo distinctio eveniet itaque
                        sunt nihil tempora nesciunt accusantium alias esse obcaecati.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar1.png" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Stone</h5>
                            <small>June 10, 2022 - 7:40</small>
                        </div>
                    </div>
                </div>
            </article> <!--end item 6-->
            <article class="post">
                <div class="post__thumbail">
                    <img src="./images/post1.jpeg" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.html">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">How to stop friends from sending voice messages all the time</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum illo distinctio eveniet itaque
                        sunt nihil tempora nesciunt accusantium alias esse obcaecati.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar1.png" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Stone</h5>
                            <small>June 10, 2022 - 7:40</small>
                        </div>
                    </div>
                </div>
            </article> <!--end item 7-->
            <article class="post">
                <div class="post__thumbail">
                    <img src="./images/post1.jpeg" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.html">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">How to stop friends from sending voice messages all the time</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum illo distinctio eveniet itaque
                        sunt nihil tempora nesciunt accusantium alias esse obcaecati.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar1.png" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Stone</h5>
                            <small>June 10, 2022 - 7:40</small>
                        </div>
                    </div>
                </div>
            </article> <!--end item 8-->
            <article class="post">
                <div class="post__thumbail">
                    <img src="./images/post1.jpeg" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.html">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">How to stop friends from sending voice messages all the time</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum illo distinctio eveniet itaque
                        sunt nihil tempora nesciunt accusantium alias esse obcaecati.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar1.png" alt="">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Stone</h5>
                            <small>June 10, 2022 - 7:40</small>
                        </div>
                    </div>
                </div>
            </article> <!--end item 9-->
        </div>
    </section>

    <!--Categories-->
    <section class="category-buttons">
        <div class="container category-buttons__container">
            <a href="category-posts.html" class="category__button">Wild Life</a>
            <a href="category-posts.html" class="category__button">Travel</a>
            <a href="category-posts.html" class="category__button">Art</a>
            <a href="category-posts.html" class="category__button">Food</a>
            <a href="category-posts.html" class="category__button">Music</a>
            <a href="category-posts.html" class="category__button">Science & Tecknology</a>
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