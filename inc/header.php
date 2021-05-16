<!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->
<div class="nav" id="navbar">
    <a href="index.php" class="homeIcon">
        <img src="./icons/ICONIC MALL.svg" /></a>
    <a class="nav-section" href="about-us.php">About Us</a>
    <a class="nav-section" href="fees.php">Fees</a><a class="nav-section" href="login.php" id="nav-bar-account">Account</a>
    <details class="dropdown">
        <summary class="dropbtn">
            Browse<i class="fa fa-caret-down"></i>
        </summary>
        <div onclick="" class="dropdown-content">
            <a href="browse-stores-by-name.php">Browse Store <br />
                by name</a>
            <a href="browse-stores-by-categories.php">Browse Store <br />by Categories</a>
        </div>
    </details>
    <a class="nav-section" href="faqs.php">FAQs</a>
    <a class="nav-section" href="contact.php">Contact</a>
    <a href="javascript:void(0);" style="font-size: 15px" class="icon" onclick="handleResponsiveNavBar()">&#9776;</a>
</div>