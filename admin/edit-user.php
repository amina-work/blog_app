<?php 
include 'partials/header.php';
?>

    <section class="form-section">
        <div class="container form-section__container">
            <h2>Edit User</h2>
            <form class="form" action="" enctype="multipart/form-data">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <select>
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <button type="submit" class="btn">Update User</button>
            </form>
        </div>
    </section>

<?php
include '../partials/footer.php'
?>