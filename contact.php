<?php
include 'partials/header.php'
?>

    <!--Contact Form-->
    <section class="contact">
        <h1 class="contact__title">Contact Us</h1>
        <div class="container contact__container">
            <form action="" method="post" class="contact__form">
                <div class="name">
                    <input type="text" name="First Name" placeholder="First Name" required>
                    <input type="text" name="Last Name" placeholder="Last Name" required>
                </div>
                <input type="email" name="Email Address" placeholder="Your Email" required>
                <textarea name="Message" rows="8" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </section>

<?php
include 'partials/footer.php'
?>