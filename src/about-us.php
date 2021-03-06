<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./style/aboutUs/about-us.css" />
    <link rel="stylesheet" href="./style/aboutUs/profileModal.css" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="./style/cookie.css" />
    <script src="./script/cookie.js" defer></script>
    <title>About Us</title>
    <script src="./script/modal.js" defer></script>
    <style></style>
    <script src="./jsFunctions.js" defer></script>
    <link rel="stylesheet" href="./style/cookie.css" />
    <script src="script/cookie.js" defer></script>
</head>

<body>
    <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->
    <?php include "inc/header.php"; ?>
    <!-- <br />
    <div class="profile-card">
      <div class="container">
        <div class="content">
          <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
            <div class="content-overlay"></div>
            <img
              class="content-image"
              src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362"
            />
            <div class="content-details fadeIn-right">
              <h3>This is a title</h3>
              <p>This is a short description</p>
            </div>
          </a>
        </div>
      </div>
    </div> -->

    <section class="profile-card">
        <h2 style="position: relative">Nguyễn Thị Quỳnh Giang</h2>
        <p class="modal-open" data-modal="modal-giang">
            <img class="small1" id="Giang" src="./images/team/Giang.jpg" alt="Picture of Giang" />
        </p>
        <div>
            <h3>Major: Information Technology</h3>
            <b>Date of birth:</b> May 18th, 2000 <br />
            <b>Personality type:</b> INTP <br />
            <b>Hobbies:</b>Technology, cats and dogs petting, front-end coding<br />
        </div>
        <br />
        <div class="social">
            <div>
                <a href="https://www.facebook.com/nguyenthi.quynhgiang.52">
                    <li><i class="fab fa-facebook"></i></li>
                </a>
                <a href="https://github.com/GiangNguyennhttps://github.com/GiangNguyenn">
                    <li><i class="fab fa-github"></i></li>
                </a>
            </div>
        </div>
    </section>
    <section class="profile-card">
        <h2 style="display: block; position: relative">Joo Jeong-hyeon</h2>
        <p class="modal-open" data-modal="modal-joo">
            <img class="small2" id="Jeong-hyeon" src="./images/team/Jeong-hyeon.png" alt="Picture of Jeong-hyeon" />
        </p>
        <div>
            <h3>Major: Information Technology</h3>
            <b>Date of birth:</b> April 27th, 1999 <br />
            <b>Nationality</b>: Korea<br />
            <b>Personality type:</b> ISFP <br />
            <b>Interests</b> : Playing the Ukulele and Piano. Mobile application
            development as well. <br />
        </div>
        <br />
        <div class="social">
            <div>
                <a href="https://www.facebook.com/profile.php?id=100024240333444">
                    <li><i class="fab fa-facebook"></i></li>
                </a>
                <a href="https://github.com/JooJeonghyeon99">
                    <li><i class="fab fa-github"></i></li>
                </a>
            </div>
        </div>
    </section>
    <section class="profile-card">
        <h2 style="display: block; position: relative">Ramcharan Ramacharan</h2>
        <p class="modal-open" data-modal="modal-ramcharan">
            <img class="small1" id="Ram" src="./images/team/Ram.jpg" alt="Picture of Ramcharan" />
        </p>
        <div>
            <h3>Major: Information Technology</h3>
            <b>Date of birth:</b> Octorber 10th 1998<br />
            <b>Nationality</b>: Sri Lanka<br />
            <b>Hobbies</b> : playing Game, Swimming, reading books <br />
        </div>
        <br />

        <div class="social">
            <a href="https://www.facebook.com/profile.php?id=100038263066152">
                <li><i class="fab fa-facebook"></i></li>
            </a>
            <a href="https://github.com/ramcharan10">
                <li><i class="fab fa-github"></i></li>
            </a>
        </div>
    </section>
    <section class="profile-card">
        <h2 style="display: block; position: relative">Võ Khải Minh</h2>
        <p class="modal-open" data-modal="modal-minh">
            <img class="small2" src="./images/team/Minh.png" alt="Picture of Minh" />
        </p>

        <br />
        <h3>Major: Information technology</h3>
        <p><b>Hometown:</b> Quãng Ngãi City</p>
        <p><b>Date of birth:</b> November 8th, 2002</p>
        <p><b>Hobbies:</b>Reading books, reading wikipedia, listening to music</p>
        <p>
            <b>Background:</b> Studied in Lê Khiết Specialized and gifted
            highschool, curently studing in RMIT uni and major in Information
            Technology.
        </p>

        <div class="social">
            <a href="https://www.facebook.com/vokhaiminhheo/">
                <li><i class="fab fa-facebook"></i></li>
            </a>
            <a href="https://github.com/Minh0811">
                <li><i class="fab fa-github"></i></li>
            </a>
        </div>
    </section>

    <div class="modal" id="modal-giang">
        <div class="modal-content">
            <div class="modal-header">
                <button class="icon modal-close">
                    <i class="material-icons">close</i>
                </button>
            </div>

            <div class="popup-container">
                <div class="profile">
                    <div class="profile-info">
                        <h2 class="heading heading-light">Profile</h2>
                        <p class="profile-text">
                            Hello! I’m Nguyễn Thị Quỳnh Giang, a Second-year-student in web
                            and mobile development at RMIT. fluent in JavaScript, HTML, CSS,
                            Python and Typescript.
                        </p>
                        <div class="contacts">
                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-phone-volume"></i>
                                    Phone
                                </h3>
                                <a href="tel:+(1800) 123 4567" class="contacts-text">+84397039230</a>
                            </div>
                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-envelope"></i>
                                    Email
                                </h3>
                                <a href="mailto:Robertsmith@gmail.com" class="contacts-text">quynhgiang9a1@gmail.com</a>
                            </div>

                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Home
                                </h3>
                                <address class="contacts-text">
                                    1C3-8, Skygarden 1, Nguyễn Văn Linh,<br />Ho Chi Minh City,
                                    Vietnam
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resume">
                    <div class="resume-wrap">
                        <div class="about">
                            <h1 class="name">Nguyễn Thị Quỳnh Giang</h1>
                            <p class="position">Second-year-student / RMIT</p>
                        </div>
                        <div class="experience">
                            <h2 class="heading heading_dark">About Me</h2>

                            <p class="list-item__text">
                                I used to study in Biotechnology but had swapped to
                                Information Technology discovered programming and was
                                fascinated with its beauty. I love black coffee with no sugar
                                as well as whiskey, specifically Scotch blended ones.
                            </p>
                        </div>
                        <div class="experience">
                            <h2 class="heading heading_dark">Experience</h2>
                            <h4 class="list-item__title">Web Development</h4>
                            <p class="list-item__date">2020 - present</p>
                            <p class="list-item__text">
                                I'm an intern in a computer software company called Skedulo
                                and had participated in small projects. Have experience
                                working with various programming languages such as JavaScript,
                                HTML, CSS, Python, Typescript.
                            </p>
                        </div>

                        <div class="education">
                            <h2 class="heading heading_dark">Education</h2>
                            <h4 class="list-item__title">
                                Bachelor of Information Technology
                            </h4>
                            <p class="list-item__date">2020 - 2023</p>
                            <p class="list-item__text">
                                I am expecting to graduate with a Mobile and Web Development
                                degree in 2023. A straight-A student in chemistry and biology
                                with a dream of becoming a surgeon. I studied at the
                                International University of Ho Chi Minh City but later moved
                                to the Royal Melbourne Institute of Technology for further
                                education.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modal-joo">
        <div class="modal-content">
            <div class="modal-header">
                <button class="icon modal-close">
                    <i class="material-icons">close</i>
                </button>
            </div>

            <div class="popup-container">
                <div class="profile">
                    <div class="profile-info">
                        <h2 class="heading heading-light">Profile</h2>
                        <p class="profile-text">
                            Hello! I'm Joo Jeong-hyeon, a Second-year-student in Information
                            Technology from South Korea. I have always been passionated with
                            programming since i was a kid
                        </p>
                        <div class="contacts">
                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-phone-volume"></i>
                                    Phone
                                </h3>
                                <a href="tel:+(1800) 123 4567" class="contacts-text">+8439703930</a>
                            </div>
                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-envelope"></i>
                                    Email
                                </h3>
                                <a href="mailto:Robertsmith@gmail.com" class="contacts-text">Joojeonghyeon@gmail.com</a>
                            </div>

                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Home
                                </h3>
                                <address class="contacts-text">
                                    208 Nguyễn Hữu Cảnh.st, Bình Thạnh,<br />Ho Chi Minh City,
                                    Vietnam
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resume">
                    <div class="resume-wrap">
                        <div class="about">
                            <h1 class="name">Joo Jeong-hyeon</h1>
                            <p class="position">Second-year-student / RMIT</p>
                        </div>
                        <div class="experience">
                            <h2 class="heading heading_dark">About Me</h2>

                            <p class="list-item__text">
                                I Love playing with cats and pet them but unfortunately I'm
                                allergic to cat fur. Love riding automobile such as Heileys,
                                Honda, Yamaha.
                            </p>
                        </div>
                        <div class="experience">
                            <h2 class="heading heading_dark">Experience</h2>
                            <h4 class="list-item__title">Web Development</h4>
                            <p class="list-item__date">2020 - present</p>
                            <p class="list-item__text">
                                I'm an intern at Skedulo, a computer development company. Have
                                worked with a variety of programming languages, including
                                JavaScript, HTML, CSS, Python, and Typescript.
                            </p>
                        </div>

                        <div class="education">
                            <h2 class="heading heading_dark">Education</h2>
                            <h4 class="list-item__title">
                                Bachelor of Information Technology
                            </h4>
                            <p class="list-item__date">2020 - 2023</p>
                            <p class="list-item__text">
                                I am expecting to graduate with an Information Technology
                                degree in 2023. After finish all the courses, I'm intended to
                                take a year off to relax and start my career later on.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modal-ramcharan">
        <div class="modal-content">
            <div class="modal-header">

                <button class="icon modal-close">
                    <i class="material-icons">close</i>
                </button>
            </div>

            <span style="
            display: block;
            border: 1px solid rgb(0, 107, 139);
            margin: auto 5px auto 5px;
          ">
            </span>
            <div class="popup-container">
                <div class="profile">

                    <div class="profile-info">
                        <h2 class="heading heading-light">Profile</h2>
                        <p class="profile-text">
                            Hello! I’m Ramcharan currently studying Information Technology,
                        </p>
                        <div class="contacts">
                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-phone-volume"></i>
                                    Phone
                                </h3>
                                <a href="tel:+(84) 0835901097" class="contacts-text">+(84) 0835901097</a>
                            </div>
                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-envelope"></i>
                                    Email
                                </h3>
                                <a href="mailto:Robertsmith@gmail.com" class="contacts-text">s3775271@rmit.edu.vn</a>
                            </div>
                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-globe-europe"></i>
                                    Web
                                </h3>
                                <a href="ramcharan10.github.io" class="contacts-text">ramcharan10.github.io</a>
                            </div>
                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Home
                                </h3>
                                <address class="contacts-text">
                                    No.09, 2/7 shurbbery gardens,<br />Colombo: 04
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resume">
                    <div class="resume-wrap">
                        <div class="logo">
                            <div class="logo-lines logo-lines_left">
                                <span class="logo-line"></span>
                                <span class="logo-line"></span>
                                <span class="logo-line"></span>
                            </div>
                            <div class="logo-img">R / C</div>
                            <div class="logo-lines logo-lines_right">
                                <span class="logo-line"></span>
                                <span class="logo-line"></span>
                                <span class="logo-line"></span>
                            </div>
                        </div>
                        <div class="about">
                            <h1 class="name">Ramcharan Ramanaharan</h1>
                            <p class="position"></p>
                            <address class="about-address">
                                No09, 2/7 Shurbbery Gardens Colombo 04
                            </address>
                            <div class="about-contacts">
                                <a href="" class=""><b>t</b>: (84)0835901097</a> |
                                <a href="" class=""><b>e</b>: s3775271@rmit.edu.vn</a> |
                                <a href="" class=""><b>w</b>: ramcharan10.github.io</a> |
                            </div>
                        </div>
                        <div class="experience">
                            <h2 class="heading heading_dark">Experience</h2>
                            <ul class="list">
                                <li class="list-item">
                                    <h4 class="list-item__title">
                                        Markerting Analysis Trainee
                                    </h4>
                                    <p class="list-item__date">Jan 2017 - Jan 2018</p>
                                    <p class="list-item__text">
                                        i have one year experience in Markerting Analysis.
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <div class="education">
                            <h2 class="heading heading_dark">Education</h2>
                            <ul class="list">
                                <li class="list-item list-item_non_border">
                                    <h4 class="list-item__title">
                                        Information Technology
                                    </h4>
                                    <p class="list-item__date">Oct 2019 - 0ct 2022</p>
                                    <p class="list-item__text">
                                    </p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modal-minh">
        <div class="modal-content">
            <div class="modal-header">
                <button class="icon modal-close">
                    <i class="material-icons">close</i>
                </button>
            </div>

            </span>
            <div class="popup-container">
                <div class="profile">

                    <div class="profile-info">
                        <h2 class="heading heading-light">Profile</h2>
                        <p class="profile-text">
                            Hello! I'm Võ Khải Minh, currently studying IT at RMIT
                            University. I'm expecting to graduate with my Mobile and Web
                            Development's degree in 2024. I chose that field of study
                            because I've always been interested in computers in general, and
                            the industry is appealing to me.
                        </p>
                        <div class="contacts">
                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-phone-volume"></i>
                                    Phone
                                </h3>
                                <a href="tel:+(1800) 123 4567" class="contacts-text">+84782490065</a>
                            </div>
                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-envelope"></i>
                                    Email
                                </h3>
                                <a href="mailto:Robertsmith@gmail.com" class="contacts-text">vokhaiminh0811@gmail.com</a>
                            </div>

                            <div class="contacts-item">
                                <h3 class="contacts-title">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Home
                                </h3>
                                <address class="contacts-text">
                                    360 Quang Trung.st, Trần Hưng Đạo,<br />Quảng Ngãi, Vietnam.
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resume">
                    <div class="resume-wrap">
                        <div class="about">
                            <h1 class="name">Võ Khải Minh</h1>
                            <p class="position">Junior / RMIT</p>
                        </div>
                        <div class="experience">
                            <h2 class="heading heading_dark">About Me</h2>
                            <p class="list-item__text" style="font-size: 50px im !important">
                                I am a dedicated and trustworthy person. I am a good
                                timekeeper who is still eager to pick up new skills. I am a
                                pleasant, helpful, and courteous person with a strong sense of
                                humor. I may function independently in a fast-paced
                                environment as well as in a group atmosphere. When it comes to
                                problem-solving, I am outgoing and tactful, and I am able to
                                listen effectively.
                            </p>
                        </div>
                        <br />
                        <div class="experience">
                            <br />
                            <h2 class="heading heading_dark">Experience</h2>
                            <ul class="list">
                                <li class="list-item">
                                    <p class="list-item__text">
                                        I have one year of knowledge working with photoshop and
                                        video editing in a photo editing organization; as a photo
                                        editor and an interviewer. Used to trade and selling skins
                                        to gamers and made quite a money out of it.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="education">
                            <h2 class="heading heading_dark">Education</h2>
                            <ul class="list">
                                <li class="list-item list-item_non_border">
                                    <h4 class="list-item__title">
                                        Bachelor of Information Technology
                                    </h4>
                                    <p class="list-item__date">Oct 2020 - Jan 2024</p>
                                    <p class="list-item__text">
                                        Graduated from Lê Khiết Specialized and gifted highschool
                                        in my Hometown,
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="overlay"></div>

    <?php include "inc/footer.php"; ?>
</body>

</html>