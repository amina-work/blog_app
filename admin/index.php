<?php 
include 'partials/header.php';
?>

    <!--Dashboard-->
    <section class="dashboard">
        <div class="container dashboard__container">
            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>
            <aside>
                <ul>
                    <li>
                        <a href="add-post.php">
                            <i class="uil uil-pen"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li> <!--End item 1-->
                    <li>
                        <a href="index.php" class="active">
                            <i class="uil uil-postcard"></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li> <!--End item 2-->

                    <!-- removing the add & manage user/cateories priviliges if user is not admin (is_admin == 0)  -->
                    <?php if(isset($_SESSION['user_is_admin'])): ?>

                        <li>
                            <a href="add-user.php">
                                <i class="uil uil-user-plus"></i>
                                <h5>Add User</h5>
                            </a>
                        </li> <!--End item 3-->
                        <li>
                            <a href="manage-users.php">
                                <i class="uil uil-users-alt"></i>
                                <h5>Manage User</h5>
                            </a>
                        </li> <!--End item 4-->
                        <li>
                            <a href="add-category.php">
                                <i class="uil uil-edit"></i>
                                <h5>Add Category</h5>
                            </a>
                        </li> <!--End item 5-->
                        <li>
                            <a href="manage-categories.php">
                                <i class="uil uil-list-ul"></i>
                                <h5>Manage Categories</h5>
                            </a>
                        </li> <!--End item 6-->

                    <?php endif ?>
                </ul>
            </aside>
            <main>
                <h2>Manage Posts</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur elit.</td>
                            <td>Wild Life</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        </tr> <!--End item 1-->
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Art</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        </tr> <!--End item 2-->
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Science & Tecknology</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        </tr> <!--End item 3-->
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Art</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        </tr> <!--End item 4-->
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Travail</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        </tr> <!--End item 5-->
                    </tbody>
                </table>
            </main>
        </div>
    </section>

<?php
include '../partials/footer.php'
?>