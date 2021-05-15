<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>

  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../style/contact.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
  <script src="../script/contactTextValidation.js" defer></script>
  <script src="../../jsFunctions.js" defer></script>
  <link rel="stylesheet" href="/style/cookie.css">
  <script src="/script/cookie.js" defer></script>
</head>

<body>
  <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->
  <?php

  include('inc/header.php');

  ?>

  <section class="contact">
    <div class="form-box">
      <h2>Contact Us</h2>
      <div class="form-item">
        <label for="Contact-purpose">Contact purpose:</label>
        <select name="reason" id="reason">
          <option value="reason1">shipping problems</option>
          <option value="reason2">payment problems</option>
        </select>
      </div>

      <form id="sectionForm">
        <div class="form-item">
          <label for="name">Your name: <em id="name-error-message"></em></label>

          <input placeholder="Enter your name" id="name" name="name" type="text" required />
        </div>
        <div class="form-item">
          <label for="email">Your E-mail: <em id="email-error-message"></em></label>
          <input placeholder="Enter your e-mail" type="email" name="email" id="email" required />
        </div>
        <div class="form-item">
          <label for="phone">Phone number: <em id="phone-error-message"></em></label>
          <input placeholder="Enter your phone number" type="tel" name="phone" id="phone" required />
        </div>
        <div class="form-item">
          <label for="Contact-method">Preferred contact method:</label>
          <select name="reason" id="reason">
            <option value="reason1">Email</option>
            <option value="reason2">Phone</option>
          </select>
          <br /><br />
          <label for="phone">Contact days:<em id="checkbox-error-message"></em></label>

          <div class="form-item">
            <div class="form-group">
              <input name="date" type="checkbox" id="day1" class="schedule-checkbox" />
              <label for="day1">Monday</label>
            </div>
            <div class="form-group">
              <input name="date" type="checkbox" id="day2" class="schedule-checkbox" />
              <label for="day2">Tuesday</label>
            </div>
            <div class="form-group">
              <input name="date" type="checkbox" id="day3" class="schedule-checkbox" />
              <label for="day3">Wednesday</label>
            </div>
            <div class="form-group">
              <input name="date" type="checkbox" id="day4" class="schedule-checkbox" />
              <label for="day4">Thursday</label>
            </div>
            <div class="form-group">
              <input name="date" type="checkbox" id="day5" class="schedule-checkbox" />
              <label for="day5">Friday</label>
            </div>
            <div class="form-group">
              <input name="date" type="checkbox" id="day6" class="schedule-checkbox" />
              <label for="day6">Saturday</label>
            </div>
            <div class="form-group">
              <input name="date" type="checkbox" id="day7" class="schedule-checkbox" />
              <label for="day7">Sunday</label>
            </div>
          </div>
          <div class="form-item">
            <label for="message">Your message:</label>
            <div>
              <p id="counter-message"></p>
            </div>

            <textarea name="message" id="message" cols="30" rows="7"></textarea>
          </div>
          <div class="form-item">
            <button class="button button1">clear</button>
            <button type="submit" class="button button2" id="contactSubmitButton">
              send
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>
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
</body>

</html>