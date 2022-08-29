<?php 
include 'partials/header.php';
?>

    <section class="form-section">
        <div class="container form-section__container">
            <h2>Add Category</h2>
            <div class="alert__message error">
                <p>This is an error message</p>
            </div>
            <form class="form" action="" enctype="multipart/form-data">
                <input type="text" placeholder="Title">
                <textarea rows="4" placeholder="Description"></textarea>
                <button type="submit" class="btn">Add Category</button>
                <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
            </form>
        </div>
    </section>

<?php
include '../partials/footer.php'
?>