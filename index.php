<?php
include 'partials/header.php';

//fetch featured post from DB
$featured_query = "SELECT * FROM posts WHERE is_featured=1";
$featured_result = mysqli_query($connection, $featured_query);
$featured = mysqli_fetch_assoc($featured_result);
?>

<?php if(mysqli_num_rows($featured_result) == 1) : ?>
    <!-- Feautured Section -->
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbail">
                <img src="./images/<?= $featured['thumbnail'] ?>">
            </div>
            <div class="post__info">
                <?php
                //Fetch category from category_id of post
                $category_id = $featured['category_id'];
                $category_query = "SELECT * FROM categories WHERE id=$category_id";
                $category_result = mysqli_query($connection, $category_query);
                $category = mysqli_fetch_assoc($category_result);
                ?>
                <a class="category__button" href="<?= ROOT_URL ?>category-posts.php?id=<?= $category['id'] ?>"><?= $category['title'] ?></a>
                <h2 class="post__title"><a href="<?= ROOT_URL ?>post.php?id=<?= $featured['id'] ?>"><?= $featured['title'] ?></a></h2>
                <p><?= substr($featured['body'], 0, 250) ?>...</p>
                <div class="post__author">
                    <?php
                    //fetch author from users table by using author_id
                    $author_id = $featured['author_id'];
                    $author_query = "SELECT * FROM users WHERE id=$author_id";
                    $author_result = mysqli_query($connection, $author_query);
                    $author = mysqli_fetch_assoc($author_result);
                    ?>
                    <div class="post__author-avatar">
                        <img src="./images/<?= $author['avatar'] ?>" alt="">
                    </div>
                    <div class="post__author-info">
                        <h5>By: <?= "{$author['firstname']} {$author['lastname']}" ?></h5>
                        <small><?= date("M d, Y - H:i", strtotime($featured['date_time'])) ?></small>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
    
    <!-- Posts Section -->
    <section class="posts">
        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbail">
                    <img src="./images/post1.jpeg" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.php">Wild Life</a>
                    <h3 class="post__title"><a href="post.php">How to stop friends from sending voice messages all the time</a></h3>
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
                    <img src="./images/post2.png" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.php">Wild Life</a>
                    <h3 class="post__title"><a href="post.php">The ultimate twitter guide: everything you need to know about Twitter</a></h3>
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
                    <img src="./images/post3.jpg" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.php">Art</a>
                    <h3 class="post__title"><a href="post.php">How to start taking good instagram pictures: 5 tips to try now</a></h3>
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
                    <img src="./images/post4.png" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.php">Travel</a>
                    <h3 class="post__title"><a href="post.php">Top 10 places you need to visit in your twenties</a></h3>
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
                    <img src="./images/post5.png" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.php">Art</a>
                    <h3 class="post__title"><a href="post.php">Coming up with new ideas and how to go through with them</a></h3>
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
                    <img src="./images/post6.png" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.php">Music</a>
                    <h3 class="post__title"><a href="post.php">The most new and hip music that you can find for 2022!</a></h3>
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
                    <img src="./images/post7.jpg" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.php">Travel</a>
                    <h3 class="post__title"><a href="post.php">Where to travel next? See new exciting location you can visit for the summer</a></h3>
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
                    <img src="./images/post8.png" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.php">Art</a>
                    <h3 class="post__title"><a href="post.php">Finding inspiration in others, and including them in your creativity</a></h3>
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
                    <img src="" alt="">
                </div>
                <div class="post__info">
                    <a class="category__button" href="category-posts.php">Science & Tecknology</a>
                    <h3 class="post__title"><a href="post.php">Finding happeniss at work, and pushing your capabilities further</a></h3>
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
            <a href="category-posts.php" class="category__button">Wild Life</a>
            <a href="category-posts.php" class="category__button">Travel</a>
            <a href="category-posts.php" class="category__button">Art</a>
            <a href="category-posts.php" class="category__button">Food</a>
            <a href="category-posts.php" class="category__button">Music</a>
            <a href="category-posts.php" class="category__button">Science & Tecknology</a>
        </div>
    </section>


<?php
include 'partials/footer.php'
?>