<?php 
include 'partials/header.php';
?>

    <section class="form-section">
        <div class="container form-section__container">
            <h2>Edit Category</h2>
            <form class="form" action="" enctype="multipart/form-data">
                <input type="text" placeholder="Title">
                <textarea rows="4" placeholder="Description"></textarea>
                <button type="submit" class="btn">Update Category</button>
            </form>
        </div>
    </section>

<?php
include '../partials/footer.php'
?>