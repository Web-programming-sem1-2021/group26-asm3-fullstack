<?php
//index.php

// function clean_text($string)
// {
//     $string = trim($string);
//     $string = stripslashes($string);
//     $string = htmlspecialchars($string);
//     return $string;
// }

// if (!isset($_GET["submit"])) {
//     $name = $_GET["name"];

//     $email = $_GET["email"];

//     $phone = $_GET["phone"];

//     $password = $_GET["password"];

//     $file_open = fopen("data/credentials.csv", "a");
//     $no_rows = count(file("data/credentials.csv"));
//     if ($no_rows > 1) {
//         $no_rows = $no_rows - 1 + 1;
//     }

//     $form_data = [
//         "sr_no" => $no_rows,
//         "name" => $name,
//         "email" => $email,
//         "phone" => $phone,
//         "password" => $password,
//     ];

//     fputcsv($file_open, $form_data);
//     // header('Location: index.php');
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>

    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./style/contact.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <script src="jsFunctions.js" defer></script>
    <!-- <script src="script/registerTextValidation.js" defer></script> -->
    <link rel="stylesheet" href="./style/cookie.css">
    <script src="./script/cookie.js" defer></script>
</head>

<body>
    <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->
    <?php include "inc/header.php"; ?>

    <section class="contact">
        <div class="form-box">
            <h2 style="text-align: center">Register Account </h2>

            <form method="get" role="form" action="registerAction.php">

                <div class="form-item">
                    <label for="email-address">Email address:<em id="email-error-message"></em></label>
                    <input type="email" name="email" id="email-address" required />
                </div>
                <div class=" form-item">
                    <label for="phone">Phone number:<em id="phone-error-message"></em></label>
                    <input type="tel" name="phone" id="phone" required />
                </div>
                <div class="form-item">
                    <label for="password">Password:<em id="password-error-message"></em></label>
                    <input type="text" name='password' id="password" required />
                </div>
                <div class=" form-item">
                    <label for="retype-password">Retype password:<em id="retype-password-error-message"></em></label>
                    <input type="password" name="retype-password" id="retype-password" required />
                </div>
                <div class="form-item">
                    <div class="form-item">Profile picture:</div>

                    <input type="file" id="myFile" name="filename" />
                </div>

                <div class="form-item">
                    <label for="first-name">First name:<em id="first-name-error-message"></em></label>
                    <input type="text" name="first-name" id="first-name" required />
                </div>
                <div class="form-item">
                    <label for="last-name">Last name:<em id="last-name-error-message"></em></label>
                    <input type="text" name="last-name" id="last-name" required />
                </div>
                <div class="form-item">
                    <label for="address">Address:<em id="address-error-message"></em></label>
                    <input type="text" name="address" id="address" required />
                </div>
                <div class="form-item">
                    <label for="city">City:<em id="city-error-message"></em></label>
                    <input type="text" name="city" id="city" required />
                </div>
                <div class="form-item">
                    <label for="zip">Zip code:<em id="zip-error-message"></em></label>
                    <input type="" name="zip" id="zip" required />
                </div>
                <div class="form-item">
                    <label for="country">Country:</label>
                    <select name="country" id="country">
                        <option value="country1">VN</option>
                        <option value="country2">CU</option>
                    </select>
                </div>

                <br />

                <div class="form-item">
                    <p>Account types:</p>
                    <p>
                        <input type="radio" id="store-owners" name="radio-group" />
                        <label for="store-owners">Store Owner</label>
                    </p>
                    <!-- <div id="store-owner-form">
                        <form action="">
                            <div class="form-item">
                                <label for="email-address">Business name:</label>
                                <input type="email" name="email" id="business-name" required />
                            </div>
                            <div class="form-item">
                                <label for="phone">Store name:</label>
                                <input type="tel" name="phone" id="store-name" required />
                            </div>
                            <div class="form-item">
                                <label for="password">Store categories:</label>

                                <div class="form-item">
                                    <div class="form-group">
                                        <input name="date" type="checkbox" class="schedule-checkbox" id="type1" />
                                        <label for="type1">Department stores</label>
                                    </div>
                                    <div class="form-group">
                                        <input name="date" type="checkbox" class="schedule-checkbox" id="type2" />
                                        <label for="type2">Grocery stores</label>
                                    </div>
                                    <div class="form-group">
                                        <input name="date" type="checkbox" class="schedule-checkbox" id="type3" />
                                        <label for="type3">Restaurants</label>
                                    </div>
                                    <div class="form-group">
                                        <input name="date" type="checkbox" class="schedule-checkbox" id="type4" />
                                        <label for="type4">Clothing stores</label>
                                    </div>
                                    <div class="form-group">
                                        <input name="date" type="checkbox" class="schedule-checkbox" id="type5" />
                                        <label for="day5">Accessory stores</label>
                                    </div>
                                    <div class="form-group">
                                        <input name="date" type="checkbox" class="schedule-checkbox" id="type6" />
                                        <label for="day6">Pharmacies</label>
                                    </div>
                                    <div class="form-group">
                                        <input name="date" type="checkbox" class="schedule-checkbox" id="type7" />
                                        <label for="type7">Technology stores</label>
                                    </div>

                                    <div class="form-group">
                                        <input name="date" type="checkbox" class="schedule-checkbox" id="type8" />
                                        <label for="type8">Technology stores</label>
                                    </div>

                                    <div class="form-group">
                                        <input name="date" type="checkbox" class="schedule-checkbox" id="type9" />
                                        <label for="type9">Pet stores</label>
                                    </div>
                                    <div class="form-group">
                                        <input name="date" type="checkbox" class="schedule-checkbox" id="type10" />
                                        <label for="type10">Toy stores</label>
                                    </div>
                                    <div class="form-group">
                                        <input name="date" type="checkbox" class="schedule-checkbox" id="type11" />
                                        <label for="type11">Specialty stores</label>
                                    </div>
                                    <div class="form-group">
                                        <input name="date" type="checkbox" class="schedule-checkbox" id="type12" />
                                        <label for="type12">Specialty stores</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> -->

                    <p>
                        <input type="radio" id="shoppers" name="radio-group" />
                        <label for="shoppers">Shopper</label>
                    </p>
                </div>

                <div class="form-item">
                    <input class="button button2" type="submit" name="submit" VALUE="Sign Up" id="registerSubmitButton">
                </div>
            </form>
        </div>
    </section>





    <footer>
        <?php include "inc/footer.php"; ?> </footer>
</body>

</html>