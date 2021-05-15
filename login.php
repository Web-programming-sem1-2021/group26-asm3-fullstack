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
    <div class="footer">
      <div class="footer-content">
        <div class="footer-section">
          <h3>Other Authorities</h3>
          <h3>
            <a href="/homepage/footer/copyright.html"> Copyright</a>
          </h3>
          <h3><a href="/homepage/footer/privacy.html">Privacy Policy</a></h3>
          <h3><a href="/homepage/footer/terms.html">Terms of Service</a></h3>
        </div>
        <div class="footer-section">
          <h3>Student contributors</h3>
          <ol>
            <li>Nguyen Thi Quynh Giang <b>[s3866617]</b></li>
            <br />
            <li>Joo Jeong-hyeon<b>[s3865746]</b></li>
            <br />
            <li>Vo Khai Minh<b>[s3879953]</b></li>
            <br />
            <li>Ramanaharan Ramcharan<b>[s3775271]</b></li>
          </ol>
        </div>
        <div class="footer-section">
          <h3>Application Information</h3>
          <a href="https://github.com/Web-programming-sem1-2021/Group26_Asm2_Javascript"><img class="footer-icon" src="../../icons/github-character.svg" />
            Source Code</a>
          <a href="https://web-programming-sem1-2021.github.io/Group26_Asm2_Javascript/"><img class="footer-icon" src="../../icons/footerIcons/globe.svg" />
            Website</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="../../jsFunctions.js"></script>
</body>

</html>