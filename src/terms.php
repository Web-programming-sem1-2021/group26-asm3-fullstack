<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Copyright</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
  <script src="../../jsFunctions.js" async></script>
  <link rel="stylesheet" href="/style/cookie.css">
  <script src="/script/cookie.js" defer></script>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Terms of Service</title>
        <link rel="stylesheet" href="../../style.css" />
        <style>
        .content {
            width: 600px;
            margin: 50px auto;
            background-color: white;
        }

        .main {
            text-align: center;
            color: #000;
            background-color: #fff;
            width: 90%;
            margin: 0px auto;
            font-family: Monospace, Verdana, sans-serif;
        }

        .space {
            width: 600px;
            margin: 50px auto;
            padding: 10px;
        }

        .icon {
            height: 500px;
            width: 500px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        p,
        li,
        .heading {
            text-align: left;
            list-style: none;
            margin: 20px;
        }
        </style>
    </head>

    <body>
        <?php include "inc/header.php"; ?>

    <head>
      <title>Terms of service</title>
    </head>
    <img src="./icons/handshake.svg" alt="" class="icon" />

    <div class="space"></div>
    <div class="main">
      <h1 class="heading">Terms and Conditions</h1>
      <p>Last updated: April 13, 2021</p>
      <p>
        Please read these terms and conditions carefully before using Our
        Service.


        <div class="copyright_C" id="terms">
            <?php readfile("../src/data/terms.html"); ?>
        </div>
    <footer>
    <?php include "inc/footer.php"; ?>
    </footer>
  </body>

    </html>
</body>

</html>