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

    <section class="form-section">
        <div class="container form-section__container">
            <h2>Sign In</h2>
            <div class="alert__message success">
                <p>This is an success message</p>
            </div>
            <form class="form" action=""  enctype="multipart/form-data">
                <input type="text" placeholder="Username or Email">
                <input type="password" placeholder="Password">
                <button type="submit" class="btn">Sign In</button>
                <small>Don't have an account? <a href="signup.html">Sign Up</a></small>
            </form>
        </div>
    </section>

</body>
</html>