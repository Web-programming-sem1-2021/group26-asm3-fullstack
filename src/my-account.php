<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Account</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./style/account.css" />
    <script src="./script/myAccount.js" defer></script>
    <link rel="stylesheet" href="./style/cookie.css">
    <script src="./script/cookie.js" defer></script>
</head>

<body>
    <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->
    <?php include "inc/header.php"; ?>
    <div class="card">
        <div class="avatar">
            <img src="https://randomuser.me/api/portraits/men/75.jpg" />
        </div>
        <div class="title">
            <h2>Helen Mccory</h2>
        </div>
        <div class="description">
            <em><b>Username:&nbsp;&nbsp;</b></em>
            my-user-name
        </div>
        <div class="description" id="email">
            <em><b>Email: &nbsp;&nbsp; </b></em>
        </div>
        <div class="description">
            <em><b>Date of Birth:&nbsp;&nbsp; </b> </em> 18/05/2000
        </div>
        <div class="social">
            <ul>
                <li><i class="fab fa-facebook"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-github"></i></li>
                <li><i class="fab fa-dev"></i></li>
                <li><i class="fas fa-link"></i></li>
            </ul>
        </div>
    </div>

    <footer>
        <?php include "inc/footer.php"; ?>
    </footer>

    <script src="../../jsFunctions.js"></script>
</body>

</html>