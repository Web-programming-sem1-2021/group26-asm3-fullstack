<?php

session_start();

if (isset($_POST["logout"])) {
    unset($_SESSION["user"]);
}

if (!isset($_SESSION["user"])) {
    header("Location: CMS_login.php");
    exit();
}

function content()
{
    $content = $_POST["content"];
    $page = $_POST["content_page"];
    switch ($page) {
        case "privacy":
            $page = "data/privacy.html";
            break;
        case "terms":
            $page = "data/terms.html";
            break;
        case "copyright":
            $page = "data/copyright.html";
            break;
    }
    file_put_contents($page, $content);
}

if (isset($_POST["content_page"])) {
    content();
    echo '<script type="text/JavaScript">
    function display_toast() {
    document.querySelector("#toast").style.display = "flex";
    setTimeout(function(){
        document.querySelector("#toast").style.display = "none"
        }, 2000);
    }
    </script>';
}

function update_photo()
{
    $photo = $_FILES["profilepic"];
    $location = $_POST["photo_location"];
    switch ($location) {
        case "Giang":
            $photo_name = "Giang.jpg";
            break;
        case "Jeong-hyeon":
            $photo_name = "Jeong-hyeon.png";
            break;
        case "Ram":
            $photo_name = "Ram.jpg";
            break;
        case "Minh":
            $photo_name = "Minh.png";
            break;
    }
    move_uploaded_file(
        $photo["tmp_name"],
        $_SERVER["DOCUMENT_ROOT"] . "images/team" . $photo_name
    );
}

if (isset($_POST["photo_location"])) {
    update_photo();
    echo '<script type="text/JavaScript">
        function display_toast() {
        document.querySelector("#toast").style.display = "flex";
        setTimeout(function(){
            document.querySelector("#toast").style.display = "none"
            }, 2000);
        }
        </script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>CMS For Administor</title>
    <meta name="description" content="CMS For Administor" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/CMS.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <?php include "inc/header.php"; ?>

    <div class="body_spacing">


        <div class="toast-large" id="toast">
            <div class="toast-large-elements">

            </div>
        </div>
        <script>
        display_toast()
        </script>


        <div class="HeaderH1_Left_With_Spacing">
            <h1>Content Management System</h1>

        </div>


        <div class="card">
            <div class="card1">
                <h3>Manage Content</h3>
                <form action="CMS.php" method="post" enctype="application/x-www-form-urlencoded">

                    <div class="styled-textarea bottom-24">
                        <label for="content">Input</label><br />
                        <textarea name="content" id="content" placeholder="Write new information here"
                            required></textarea>
                    </div>


                    <div class="styled-radio">

                        <input type="radio" name="content_page" id="privacy" value="privacy" required checked />
                        <label for="privacy">Privacy Policy</label>
                        <br />
                        <input type="radio" name="content_page" id="terms" value="terms" required />
                        <label for="terms">Terms of Service</label>
                        <br>
                        <input type="radio" name="content_page" id="copyright" value="copyright" required />
                        <label for="copyright">Copyright</label>
                    </div>

                    <input type="submit" />

                </form>
            </div>

        </div>


        <div class="card">
            <h3>Upload Team Photo</h3>
            <form action="CMS.php" method="post" enctype="multipart/form-data">

                <div class="upload_file">
                    <input type="file" name="profilepic" id="profilepic" required
                        accept="image/png, image/jpeg, image/jpg" />
                </div>

                <div class="styled-radio">
                    <p>Replace photos of the Team Member</p>
                    <input type="radio" name="photo_location" id="Giang" value="Giang" required />
                    <label for="Giang">Nguy???n Th??? Qu???nh Giang</label>
                    <br />
                    <input type="radio" name="photo_location" id="Jeong-hyeon" value="Jeong-hyeon" required />
                    <label for="Jeong-hyeon">Joo Jeong-hyeon</label>
                    <br>
                    <input type="radio" name="photo_location" id="Ram" value="Ram" required />
                    <label for="Ram">Ramcharan Ramanaharan</label>
                    <br />
                    <input type="radio" name="photo_location" id="Minh" value="Minh" required />
                    <label for="Minh">V?? Kh???i Minh</label>
                </div>


                <input type="submit" />


            </form>



        </div>


    </div>
</body>

</html>