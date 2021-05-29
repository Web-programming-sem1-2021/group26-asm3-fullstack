<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Account</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./style/login.css" />
    <link rel="stylesheet" href="style/cookie.css">
    <script src="script/cookie.js" defer></script>
</head>

<body>
    <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->
    <?php include "inc/header.php"; ?>

    <div class="form">
        <form class="login-form">
            <h3 style="text-transform: uppercase; color: darkslategray">
                Enter your email to recover your password
            </h3>
            <input type="email" placeholder="Enter your email" />
            <a class="login-button" href="#">Send recovery link</a>
            <p class="message">
                Not registered? <a href="./register.php">Create an account</a>
            </p>
        </form>
    </div>
    <footer>
        <?php include "inc/footer.php"; ?>
    </footer>

    <script src="../../jsFunctions.js"></script>
</body>

</html>