<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fee plans</title>
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../style/fee.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
  <script src="../jsFunctions.js" defer></script>
  <link rel="stylesheet" href="/style/cookie.css">
  <script src="/script/cookie.js" defer></script>
</head>

<body>
  <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->
  <?php

  include('inc/header.php');

  ?>
  <div class="container">
    <h1 style="font-size: 5em; color: palevioletred; padding-top: 24px">
      Store owners
    </h1>
    <table>
      <thead>
        <tr>
          <th>Membership</th>
          <th>Renting's fees</th>
          <th>Commission</th>
          <th>Duration</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Diamond</td>
          <td>1000$</td>
          <td>0.5%</td>
          <td>1 Month</td>
        </tr>

        <tr>
          <td>Platinum</td>
          <td>900$</td>
          <td>1%</td>
          <td>1 Month</td>
        </tr>
        <tr>
          <td>Gold</td>
          <td>800$</td>
          <td>2%</td>
          <td>1 Month</td>
        </tr>
        <tr>
          <td>Silver</td>
          <td>750$</td>
          <td>2.5%</td>
          <td>1 Month</td>
        </tr>
      </tbody>
    </table>
    <h1 style="font-size: 5em; color: palevioletred; padding-top: 24px">
      Shoppers
    </h1>
    <table>
      <thead>
        <tr>
          <th>Membership</th>
          <th></th>
          <th>Parking's fee</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Diamond</td>
          <td>100$</td>
          <td>Bike</td>
          <td>1.000VND</td>
        </tr>

        <tr>
          <td>Platinum</td>
          <td>90$</td>
          <td>Electic-bike</td>
          <td>2.000VNDh</td>
        </tr>
        <tr>
          <td>Gold</td>
          <td>80$</td>
          <td>Motocycle</td>
          <td>4.000VND</td>
        </tr>
        <tr>
          <td>Silver</td>
          <td>75$</td>
          <td>Car</td>
          <td>7.000VND</td>
        </tr>
      </tbody>
    </table>
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
          <a href="https://github.com/Web-programming-sem1-2021/Group26_Asm2_Javascript"><img class="footer-icon" src="../icons/github-character.svg" />
            Source Code</a>
          <a href="https://web-programming-sem1-2021.github.io/Group26_Asm2_Javascript/"><img class="footer-icon" src="../icons/footerIcons/globe.svg" />
            Website</a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>