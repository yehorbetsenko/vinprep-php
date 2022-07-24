<?php
    session_start();
    
    if(!$_SESSION['user']) {
        header('Location: /');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Poppins:wght@500;600;700&family=Work+Sans:wght@500;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../scss/second.css">
    <title>VINPREP</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <div class="header__logo">VinPREP</div>
                <div class="header__navigation">
                    <div class="burger"><span></span></div>
                    <nav class="header__nav nav">
                        <a href="#" class="nav__item"><div class="nav__item-div goto-home">Home</div></a>
                        <a href="#" class="nav__item"><div class="nav__item-div goto-aboutus">About us</div></a>
                        <a href="#" class="nav__item"><div class="nav__item-div goto-timeline">Timeline</div></a>
                        <a href="#" class="nav__item"><div class="nav__item-div goto-leaderboard">Leaderboard</div></a>
                        <a href="#" class="nav__item"><div class="nav__item-div goto-contact">Contact</div></a>
                        <!-- <button class="btn-530">Register</button>
                        <button class="header__login btn-410">Login</button> -->
                    </nav>
                    <div class="header__enter">
                        <!-- <a href="enter.php" class="header__login btn-not-410">Login</a>
                        <a href="register.php" class="header__register btn btn-not-530">Register</a> -->
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="first" id="home">
                <div class="first__container">
                    <div class="first__title"><h1>Vinprep’21</h1></div>
                    <div class="first__sub-title">Online Mock Placements</div>
                    <div class="first__btn-div first__btn-div-2">
                        <button class="first__btn-2"></button>
                    </div>
                    <div class="first__devices-2">
                        <img src="../img/devices/laptop.svg" alt="laptop" class="first__device first__laptop">
                        <img src="../img/devices/iphone.svg" alt="iphone" class="first__device first__iphone">
                        <img src="../img/devices/bulb.svg" alt="bulb" class="first__device first__bulb">
                        <img src="../img/devices/mouse.svg" alt="mouse" class="first__device first__mouse">
                        <img src="../img/devices/imac.svg" alt="imac" class="first__device first__imac">
                    </div>
                </div>
            </div>
            <div class="schedule" id="timeline">
                <div class="schedule__container">
                    <div class="schedule__block-text">
                        <div class="schedule__block-title">
                            <div class="schedule__title title"><p>Schedule</p></div>
                            <div class="schedule__sub-title sub-title">2021</div>
                        </div>
                    </div>
                    <div class="schedule__shapes">
                        <div class="schedule__rectangle"></div>
                        <div class="schedule__ellipse ellipse1"></div>
                        <div class="schedule__ellipse ellipse2"></div>
                        <div class="schedule__ellipse ellipse3"></div>
                        <div class="schedule__ellipse ellipse4"></div>
                        <div class="schedule__ellipse ellipse5"></div>
                        <div class="schedule__ellipse ellipse6"></div>
                        <div class="schedule__ellipse ellipse7"></div>
                    </div>
                    <div class="schedule__list">
                        <div class="schedule__date date1">19th July 2021</div>
                        <div class="schedule__date date2">19th July 2021</div>
                        <div class="schedule__date date3">19th July 2021</div>
                        <div class="schedule__card-block card-block1">
                            <div class="schedule__card">
                                <div class="schedule__time"><p>4:00pm-5:00pm</p></div>
                                <div class="schedule__event">
                                    <div class="schedule__text">Webinar & instructions</div>
                                    <div class="schedule__content">By Mr.shivay lamba</div>
                                </div>
                            </div>
                        </div>
                        <div class="schedule__card-block card-block2">
                            <div class="schedule__card">
                                <div class="schedule__time"><p>4:00pm-5:00pm</p></div>
                                <div class="schedule__event">
                                    <div class="schedule__text">Webinar & instructions</div>
                                    <div class="schedule__content">By Mr.shivay lamba</div>
                                </div>
                            </div>
                            <div class="schedule__card">
                                <div class="schedule__time"><p>4:00pm-5:00pm</p></div>
                                <div class="schedule__event">
                                    <div class="schedule__text">Webinar & instructions</div>
                                    <div class="schedule__content">By Mr.shivay lamba</div>
                                </div>
                            </div>
                        </div>
                        <div class="schedule__card-block card-block3">
                            <div class="schedule__card">
                                <div class="schedule__time"><p>4:00pm-5:00pm</p></div>
                                <div class="schedule__event">
                                    <div class="schedule__text">Webinar & instructions</div>
                                    <div class="schedule__content">By Mr.shivay lamba</div>
                                </div>
                            </div>
                        </div>
                        <div class="schedule__card-block card-block4">
                            <div class="schedule__card">
                                <div class="schedule__time"><p>4:00pm-5:00pm</p></div>
                                <div class="schedule__event">
                                    <div class="schedule__text">Webinar & instructions</div>
                                    <div class="schedule__content">By Mr.shivay lamba</div>
                                </div>
                            </div>
                        </div>
                        <div class="schedule__card-block card-block5">
                            <div class="schedule__card">
                                <div class="schedule__time"><p>4:00pm-5:00pm</p></div>
                                <div class="schedule__event">
                                    <div class="schedule__text">Webinar & instructions</div>
                                    <div class="schedule__content">By Mr.shivay lamba</div>
                                </div>
                            </div>
                            <div class="schedule__card">
                                <div class="schedule__time"><p>4:00pm-5:00pm</p></div>
                                <div class="schedule__event">
                                    <div class="schedule__text">Webinar & instructions</div>
                                    <div class="schedule__content">By Mr.shivay lamba</div>
                                </div>
                            </div>
                        </div>
                        <div class="schedule__card-block card-block6">
                            <div class="schedule__card">
                                <div class="schedule__time"><p>4:00pm-5:00pm</p></div>
                                <div class="schedule__event">
                                    <div class="schedule__text">Webinar & instructions</div>
                                    <div class="schedule__content">By Mr.shivay lamba</div>
                                </div>
                            </div>
                            <div class="schedule__card">
                                <div class="schedule__time"><p>4:00pm-5:00pm</p></div>
                                <div class="schedule__event">
                                    <div class="schedule__text">Webinar & instructions</div>
                                    <div class="schedule__content">By Mr.shivay lamba</div>
                                </div>
                            </div>
                        </div>
                        <div class="schedule__card-block card-block7">
                            <div class="schedule__card">
                                <div class="schedule__time"><p>4:00pm-5:00pm</p></div>
                                <div class="schedule__event">
                                    <div class="schedule__text">Webinar & instructions</div>
                                    <div class="schedule__content">By Mr.shivay lamba</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq" id="aboutus">
                <div class="faq__container">
                    <div class="faq__block-text">
                        <div class="faq__block-title">
                            <div class="faq__title title"><p>Faq</p></div>
                            <div class="faq__sub-title sub-title">Frequently Asked Questions</div>
                        </div>
                    </div>
                    <div class="faq__accordions">
                        <div class="faq__accordion">
                            <button class="faq__question faq__question-1">
                                Question number 01 goes in here? <div class="faq__question-span"><span></span></div>
                            </button>
                            <div class="faq__content faq__content-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.
                            </div>
                        </div>
                        <div class="faq__accordion">
                            <button class="faq__question faq__question-2">
                                Question number 02 goes in here? <div class="faq__question-span"><span></span></div>
                            </button>
                            <div class="faq__content faq__content-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.
                            </div>
                        </div>
                        <div class="faq__accordion">
                            <button class="faq__question faq__question-3">
                                Question number 03 goes in here? <div class="faq__question-span"><span></span></div>
                            </button>
                            <div class="faq__content faq__content-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.
                            </div>
                        </div>
                        <div class="faq__accordion">
                            <button class="faq__question faq__question-4">
                                Question number 04 goes in here? <div class="faq__question-span"><span></span></div>
                            </button>
                            <div class="faq__content faq__content-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panelists" id="leaderboard">
                <div class="panelists__container">
                    <div class="panelists__block-title">
                        <div class="panelists__title title"><p>panelists</p></div>
                        <div class="panelists__sub-title sub-title">Who is Conducting?</div>
                    </div>
                    <!-- Slider main container -->
                    <div class="swiper panelists__swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/panelists.jpg" alt="photo" class="panelists__picture-img">
                                <div class="panelists__picture-text">
                                    <div class="panelists__picture-sup-title">Web Designer</div>
                                    <div class="panelists__picture-title">Person Name</div>
                                    <div class="panelists__picture-sub-title">XYZ Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/panelists.jpg" alt="photo" class="panelists__picture-img">
                                <div class="panelists__picture-text">
                                    <div class="panelists__picture-sup-title">Web Designer</div>
                                    <div class="panelists__picture-title">Person Name</div>
                                    <div class="panelists__picture-sub-title">XYZ Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/panelists.jpg" alt="photo" class="panelists__picture-img">
                                <div class="panelists__picture-text">
                                    <div class="panelists__picture-sup-title">Web Designer</div>
                                    <div class="panelists__picture-title">Person Name</div>
                                    <div class="panelists__picture-sub-title">XYZ Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/panelists.jpg" alt="photo" class="panelists__picture-img">
                                <div class="panelists__picture-text">
                                    <div class="panelists__picture-sup-title">Web Designer</div>
                                    <div class="panelists__picture-title">Person Name</div>
                                    <div class="panelists__picture-sub-title">XYZ Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/panelists.jpg" alt="photo" class="panelists__picture-img">
                                <div class="panelists__picture-text">
                                    <div class="panelists__picture-sup-title">Web Designer</div>
                                    <div class="panelists__picture-title">Person Name</div>
                                    <div class="panelists__picture-sub-title">XYZ Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/panelists.jpg" alt="photo" class="panelists__picture-img">
                                <div class="panelists__picture-text">
                                    <div class="panelists__picture-sup-title">Web Designer</div>
                                    <div class="panelists__picture-title">Person Name</div>
                                    <div class="panelists__picture-sub-title">XYZ Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/panelists.jpg" alt="photo" class="panelists__picture-img">
                                <div class="panelists__picture-text">
                                    <div class="panelists__picture-sup-title">Web Designer</div>
                                    <div class="panelists__picture-title">Person Name</div>
                                    <div class="panelists__picture-sub-title">XYZ Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/panelists.jpg" alt="photo" class="panelists__picture-img">
                                <div class="panelists__picture-text">
                                    <div class="panelists__picture-sup-title">Web Designer</div>
                                    <div class="panelists__picture-title">Person Name</div>
                                    <div class="panelists__picture-sub-title">XYZ Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/panelists.jpg" alt="photo" class="panelists__picture-img">
                                <div class="panelists__picture-text">
                                    <div class="panelists__picture-sup-title">Web Designer</div>
                                    <div class="panelists__picture-title">Person Name</div>
                                    <div class="panelists__picture-sub-title">XYZ Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/panelists.jpg" alt="photo" class="panelists__picture-img">
                                <div class="panelists__picture-text">
                                    <div class="panelists__picture-sup-title">Web Designer</div>
                                    <div class="panelists__picture-title">Person Name</div>
                                    <div class="panelists__picture-sub-title">XYZ Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/panelists.jpg" alt="photo" class="panelists__picture-img">
                                <div class="panelists__picture-text">
                                    <div class="panelists__picture-sup-title">Web Designer</div>
                                    <div class="panelists__picture-title">Person Name</div>
                                    <div class="panelists__picture-sub-title">XYZ Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/panelists.jpg" alt="photo" class="panelists__picture-img">
                                <div class="panelists__picture-text">
                                    <div class="panelists__picture-sup-title">Web Designer</div>
                                    <div class="panelists__picture-title">Person Name</div>
                                    <div class="panelists__picture-sub-title">XYZ Company</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="sponsors">
                <div class="sponsors__container">
                    <div class="sponsors__block-title">
                        <div class="sponsors__title title"><p>OUR SPONSORS</p></div>
                        <div class="sponsors__sub-title sub-title">Our Partners & Sponsors</div>
                    </div>
                    <div class="sponsors__card">
                    <div class="sponsors__card-title">GOLD SPONSORS</div>
                    <div class="sponsors__card-items">
                        <div class="sponsors__card-item"><img src="../img/sponsors/1.svg" alt="sponsor"></div>
                        <div class="sponsors__card-item"><img src="../img/sponsors/2.svg" alt="sponsor"></div>
                        <div class="sponsors__card-item"><img src="../img/sponsors/3.svg" alt="sponsor"></div>
                        <div class="sponsors__card-item"><img src="../img/sponsors/4.svg" alt="sponsor"></div>
                    </div>
                    <!-- Slider main container -->
                    <div class="sponsors__swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="sponsors__picture">
                                <img src="../img/sponsors/1.svg" alt="sponsor" class="sponsors__picture-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/sponsors/2.svg" alt="sponsor" class="sponsors__picture-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/sponsors/3.svg" alt="sponsor" class="sponsors__picture-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="panelists__picture">
                                <img src="../img/sponsors/4.svg" alt="sponsor" class="sponsors__picture-img">
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- <div class="sponsors__apply">
                        <div class="sponsors__question">Want to be a sponsor?</div>
                        <button class="sponsors__btn btn">APPLY Now</button>
                    </div> -->
                    </div>
                </div>
            </div>
            <div class="prizes">
                <div class="prizes__container">
                    <div class="prizes__block-title">
                        <div class="prizes__title title"><p>PRIZES</p></div>
                        <div class="prizes__sub-title sub-title">Cash Prizes and goodies</div>
                    </div>
                    <div class="prizes__cards">
                        <div class="prizes__card">
                            <img src="../img/prizes/1.svg" alt="prize" class="prizes__img">
                            <div class="prizes__card-sup-title">Top 5</div>
                            <div class="prizes__card-title">Technical Mock</div>
                            <div class="prizes__card-sub-title">2K each + Tshirt + Goodies</div>
                        </div>
                        <div class="prizes__card">
                            <img src="../img/prizes/2.svg" alt="prize" class="prizes__img">
                            <div class="prizes__card-sup-title">Top 2</div>
                            <div class="prizes__card-title">Design Mock</div>
                            <div class="prizes__card-sub-title">2K each + Tshirt + Goodies</div>
                        </div>
                        <div class="prizes__card">
                            <img src="../img/prizes/3.svg" alt="prize" class="prizes__img">
                            <div class="prizes__card-sup-title">Top 3</div>
                            <div class="prizes__card-title">CC Round</div>
                            <div class="prizes__card-sub-title">Tshirt + Goodies</div>
                        </div>
                        <div class="prizes__card">
                            <img src="../img/prizes/4.svg" alt="prize" class="prizes__img">
                            <div class="prizes__card-sup-title prizes__card-sup-title-4">Best Fresher</div>
                            <div class="prizes__card-sub-title prizes__card-sub-title-4">2K each + Tshirt + Goodies</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="webinar" id="contact">
                <div class="webinar__container">
                    <div class="webinar__block-title">
                        <div class="webinar__title title"><p>WEBINAR</p></div>
                        <div class="webinar__sub-title sub-title">and pannel discussion</div>
                    </div>
                    <div class="webinar__resume">
                        <img class="webinar__resume-img" src="../img/webinar/main.png" alt="photo">
                        <div class="webinar__resume-text">
                            <div class="webinar__resume-main">
                                <div class="title webinar__resume-title "><p>Resume.pdf</p></div>
                                <div class="webinar__resume-name">by Dhairya Gangwani</div>
                            </div>
                            <div class="webinar__resume-second">
                                <div class="webinar__resume-instagram">
                                    <img src="../img/instagram.svg" alt="instagram">
                                    <p>Live on Instagram</p>
                                </div>
                                <div class="webinar__resume-calendar">
                                    <img src="../img/calendar.svg" alt="calendar">
                                    <p>20st July</p>
                                </div>
                                <div class="webinar__resume-clock">
                                    <img src="../img/clock.svg" alt="clock">
                                    <p>8pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="webinar__ment">
                        <div class="webinar__ment-text">
                            <div class="webinar__ment-title title"><p>A Place-ment To Be</p></div>
                            <div class="webinar__ment-sub-title sub-title">1 Placement: 5 different scenarios</div>
                        </div>
                        <div class="webinar__ment-cards">
                            <div class="webinar__ment-card">
                                <img src="../img/webinar/1.png" alt="photo" class="webinar__ment-img">
                                <div class="webinar__ment-person">
                                    <div class="webinar__ment-name">Sehaj Maheshwari</div>
                                    <div class="webinar__ment-profession">Data science Engineer</div>
                                    <div class="webinar__ment-company">Wipro</div>
                                </div>
                            </div>
                            <div class="webinar__ment-card">
                                <img src="../img/webinar/2.png" alt="photo" class="webinar__ment-img">
                                <div class="webinar__ment-person">
                                    <div class="webinar__ment-name">Navdeesh Ahuja</div>
                                    <div class="webinar__ment-profession">Co-founder</div>
                                    <div class="webinar__ment-company">Pocketly</div>
                                </div>
                            </div>
                            <div class="webinar__ment-card">
                                <img src="../img/webinar/3.png" alt="photo" class="webinar__ment-img">
                                <div class="webinar__ment-person">
                                    <div class="webinar__ment-name">Meet Shukla</div>
                                    <div class="webinar__ment-profession">Technology Analyst</div>
                                    <div class="webinar__ment-company">Deutsche Bank</div>
                                </div>
                            </div>
                            <div class="webinar__ment-card">
                                <img src="../img/webinar/4.png" alt="photo" class="webinar__ment-img">
                                <div class="webinar__ment-person">
                                    <div class="webinar__ment-name">Roshan Shah</div>
                                    <div class="webinar__ment-profession">Software engineer</div>
                                    <div class="webinar__ment-company">Boa</div>
                                </div>
                            </div>
                            <div class="webinar__ment-card">
                                <img src="../img/webinar/5.png" alt="photo" class="webinar__ment-img">
                                <div class="webinar__ment-person">
                                    <div class="webinar__ment-name">Vinit Shahdeo</div>
                                    <div class="webinar__ment-profession">SDE-II</div>
                                    <div class="webinar__ment-company">Postman</div>
                                </div>
                            </div>
                        </div>
                        <div class="webinar__ment-content">
                            <div class="webinar__ment-youtube">
                                <img src="../img/youtube.svg" alt="youtube">
                                <p>Live on VinnovateIT VIT</p>
                            </div>
                            <div class="webinar__ment-date">
                                <img src="../img/calendar.svg" alt="calendar">
                                <p>21st July</p>
                            </div>
                            <div class="webinar__ment-time">
                                <img src="../img/clock.svg" alt="clock">
                                <p>8pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>