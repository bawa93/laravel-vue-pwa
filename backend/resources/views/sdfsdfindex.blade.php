<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Oswald,Raleway" rel="stylesheet">
<link rel="stylesheet"  href="{{ asset('css/app.css') }}">
<title>Lakhveer Bawa - Full Stack Web Developer</title>
</head>
<body>
<div id="app">

    <div class="wrapper">
        <header id="header">
            <img id="logo-container" alt="Logo Image" src="images/Logo-container.svg" style="text-align:center; height:50px;">
            <button id="menuButton" class=""></button>
            <nav id="mainMenu" class="box1">
                <h1 class="hidden">Main Navigation</h1>

                <!-- <img src="icons/menu.svg" style="display:inline; width:16px; height: 16px;"> -->
                <ul class="" id="navContainer">
                    <li><a href="#">Home</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#aboutme">About Me</a></li>
                    <li><a href="#footer">Conact Me</a></li>
                </ul>
            </nav>
        </header>
        <section id="hero-section" style="">
            <h2 class="hidden">Main Section</h2>

            <div id="hero-section__image" class="box2">
                <img src="images/profile.svg" alt="profile image">
            </div>
            <div id="hero-section__body" class="box3">
                <div id="hero-section__title">Hello, my name is Lakhveer Bawa, I am basically backend Web developer with experience of PHP, Javascript, HTML, CSS Linux Server Management and Laravel web framework</div>
                <div style="     font-size: 20px;   margin-bottom: 20px;display:none;">I speak PHP and javascript while i can understand most of the web development lanaguages</div>
                <div style="margin-bottom: 20px;" class="main-button"><a href="#projects" style="color:#fff;">Look at my Projects</a></div>
            </div>
        </section>
        <section class="skills" id="skills">
            <h2 class="hidden">Skills</h2>
            <div class="section-title">
                My Skills
            </div>
            <div class="flex-items-container">



                <div class="skills__item">
                    PHP            </div>


                <div class="skills__item">
                    Javascript            </div>


                <div class="skills__item">
                    Vue js            </div>


                <div class="skills__item">
                    Laravel            </div>


                <div class="skills__item">
                    HTML            </div>


                <div class="skills__item">
                    Agile            </div>

            </div>
        </section>
        <section class="projects" id="projects">
            <div class="section-title">
                Recent Projects
            </div>

            <h2 class="hidden">Recent Projects</h2>

            <div class="projects__item">
                <div class="projects__item-image-container">
                    <div class="projects__item-image">
                        LocateMyarea                        </div>
                </div>
                <div class="projects__item-desc-container">
                    <div class="projects__item-title">LocateMyArea - Property buy and Sell Website</div>
                    <div class="projects__item-body">Property buy sell website is a platform where users can look for the properties for sell or rent in their nearby areas, Whereas the owners have ability to post the ad about their properties.</div>
                    <div class="projects__item-technologies"><strong>Technologies:</strong> Laravel5, PHP7.1, JQuery,Bootstrap Google Charts</div>
                </div>
            </div>
            <div class="projects__item">
                <div class="projects__item-image-container">
                    <div class="projects__item-image">
                        SingleJatt                        </div>
                </div>
                <div class="projects__item-desc-container">
                    <div class="projects__item-title">SingleJatt - Music Listen and Download</div>
                    <div class="projects__item-body">Singejatt is a music download website, that allows the users to download and listen the open domain songs for free.</div>
                    <div class="projects__item-technologies"><strong>Technologies:</strong> Laravel4.2, PHP 5.6, JQuery, Bootstrap</div>
                </div>
            </div>
            <div class="projects__item">
                <div class="projects__item-image-container">
                    <div class="projects__item-image">
                        LocateMyarea                        </div>
                </div>
                <div class="projects__item-desc-container">
                    <div class="projects__item-title">LocateMyArea - Property buy and Sell Website</div>
                    <div class="projects__item-body">Property buy sell website is a platform where users can look for the properties for sell or rent in their nearby areas, Whereas the owners have ability to post the ad about their properties.</div>
                    <div class="projects__item-technologies"><strong>Technologies:</strong> Laravel5, PHP7.1, JQuery, Google Charts</div>
                </div>
            </div>

            <div id="projects__see-more-projects-container">
                <button class="main-button">See More Projects</button>
            </div>
        </section>
        <section id="aboutme">
            <h2 class="hidden">About Me</h2>
            <div class="section-title">
                About Me
            </div>
            <div id="aboutme__image-container">

                <img alt="profile image" src="images/profile-image-sitting.svg">
            </div>
            <div id="aboutme__info-container">
                <div id="aboutme__info">
                    Lakhveer Bawa is backend web Developer with experience of working with PHP, JavaScript, HTML, CSS and Linux Server Management. He learnt these technologies on his own. Currently, He is doing Interactive media specialist program at Fanshawe College, London to further furnish his skills.
                </div>
                <div id="aboutme__download-resume">
                    <a href="#" style="color: #fff;">
                        <img alt="download resume" src="icons/save_icon.svg" style="width: 16px; height: 16px;vertical-align: bottom;"> Download My Resume
                    </a>
                </div>
                <div id="aboutme__social-links"> Social Links:
                    <a href="#"><img src="icons/facebook-brands.svg"></a>
                    <a href="#"><img src="icons/twitter-square-brands.svg"></a>
                    <a href="#"><img src="icons/linkedin-brands.svg"></a>
                </div>
            </div>
        </section>

        <footer class="footer">

            <h2 class="hidden">Footer Links</h2>
            <ul class="footer-links">
                <li class="footer__item">
                    <a href="#">Home</a>
                </li>
                <li class="footer__item">
                    <a href="#skills">Skills</a>
                </li>
                <li class="footer__item">
                    <a href="#projects">Projects</a>
                </li>
                <li class="footer__item">
                    <a href="#aboutme">About Us</a>

                </li>
                <li class="footer__item">
                    <a href="#">Contact us</a>

                </li>
            </ul>
        </footer>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>