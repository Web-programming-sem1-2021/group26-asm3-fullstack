<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Account</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./style/login.css" />
    <link rel="stylesheet" href="./style/cookie.css">
    <script src="./script/cookie.js" defer></script>

</head>

<body>
    <?php include "inc/header.php"; ?>

    <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp"-->


    <div class="form">
        <form class="login-form" action="loginAction.php" method="POST">
            <input type="text" placeholder="Enter Username" id="username" name="username" />
            <input type="password" placeholder="Enter Password" id="passcode" name="password" />
            <input class="login-button" id="login-submit" type="submit" name="submit" VALUE="Log in">
            <div id="wrong-password-message"></div>
            <p class="message">
                Not registered? <a href="./register.php">Create an account</a>
            </p>
            <p class="message">
                Forgot password?
                <a href="./forgot-password.php"> Recover now</a>
            </p>
        </form>
    </div>
    <footer>
        <?php include "inc/footer.php"; ?>
    </footer>

    <script src="../../jsFunctions.js"></script>
</body>

</html>