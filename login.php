<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Account</title>
  <link rel="stylesheet" href="../../style.css" />
  <link rel="stylesheet" href="../../style/login.css" />
  <script src="../../script/login.js" defer></script>
  <link rel="stylesheet" href="/style/cookie.css">
  <script src="/script/cookie.js" defer></script>
  <!-- <script>
      function redirect() {
        location.replace("../myAccount/my-account.html");
      }
    </script> -->
</head>

<body>
  <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->
  <?php

  include('inc/header.php');

  ?>

  <div class="form">
    <form class="login-form">
      <input type="text" placeholder="Enter Username" id="usrname" />
      <input type="password" placeholder="Enter Password" id="passcode" />
      <button class="login-button" id="login-submit" action="submit">
        login
        <em style="color: navy">(Click here to see user's profile page)</em>
      </button>
      <div id="wrong-password-message"></div>
      <p class="message">
        Not registered? <a href="../register.html">Create an account</a>
      </p>
      <p class="message">
        Forgot password?
        <a href="./forgot-password.html"> Recover now</a>
      </p>
    </form>
  </div>
  <footer>
  <?php include('inc/footer.php'); ?>
  </footer>

  <script src="../../jsFunctions.js"></script>
</body>

</html>