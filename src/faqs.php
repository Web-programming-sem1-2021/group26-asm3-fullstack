<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQs</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style/faqs.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <script src="/jsFunctions.js"></script>
    <link rel="stylesheet" href="style/cookie.css">
    <script src="/script/cookie.js" defer></script>

</head>

<body>
    <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->
    <?php include "inc/header.php"; ?>
    <div class="hidden_box">
        <input type="checkbox" id="label1" />
        <label for="label1">How can I order?</label>
        <div class="hidden_show">
            <p>
                You can go to our mall online website and order; find a item you want,
                add It to your purchase, fill your information and buy.
            </p>
        </div>
    </div>
    <div class="hidden_box">
        <input type="checkbox" id="label2" />
        <label for="label2">What information should I input when ordering?</label>
        <div class="hidden_show">
            <p>
                When ordering online, you should put your address and your card number
                precisely in order to have the best experience using our website.
            </p>
        </div>
        <div class="hidden_box">
            <input type="checkbox" id="label3" />
            <label for="label3">What payment methods can I use?</label>
            <div class="hidden_show">
                <p>
                    There two main paying method, COD(Cash On Delivery) and online
                    banking via Mastercard or Visa. You can choose your method of paying
                    when ordering goods
                </p>
            </div>
        </div>
        <div class="hidden_box">
            <input type="checkbox" id="label4" />
            <label for="label4">How can I change delivery address?</label>
            <div class="hidden_show">
                <p>
                    Sign in to your account and go to "Account", you can change your
                    address there or change It when ordering
                </p>
            </div>
        </div>
        <div class="hidden_box">
            <input type="checkbox" id="label5" />
            <label for="label5">What are the delivery charges?</label>
            <div class="hidden_show">
                <p>Order via air banking: Free</p>
                <p>Pay ON Delivery: cost no more than 50.000VND</p>
            </div>
        </div>
        <div class="hidden_box">
            <input type="checkbox" id="label6" />
            <label for="label6">What are the mall's hours?</label>
            <div class="hidden_show">
                <p>Monday to Friday: 7am-10pm</p>
                <p>Saturday and sunday: 7am-11pm</p>
            </div>
        </div>
        <div class="hidden_box">
            <input type="checkbox" id="label7" />
            <label for="label7">What's the mall address</label>
            <div class="hidden_show">
                <p>
                    The mall address is 702 Nguyễn Van Linh.st, Distict 7, Ho Chi Minh
                    City
                </p>
            </div>
        </div>
        <div class="hidden_box">
            <input type="checkbox" id="label8" />
            <label for="label8">Are pets allowed in the mall?</label>
            <div class="hidden_show">
                <p>
                    Unfortunately, no pets are allowed in the mall except for guide or
                    service pets.
                </p>
            </div>
        </div>
        <div class="hidden_box">
            <input type="checkbox" id="label9" />
            <label for="label9">How much is the parking at the mall</label>
            <div class="hidden_show">
                <p>
                    The parking lot will be free if you make a purchase in the mall; if
                    not, the fee will be 3.000VND
                </p>
            </div>
        </div>
    </div>
    <footer>
        <?php include "inc/footer.php"; ?>
    </footer>
</body>

</html>