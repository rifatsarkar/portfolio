<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Portfolio </title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/5851a1aa77.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Pe-icon-7-stroke.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('front-end') }}/css/style.css" />

</head>
<body>

<!-- Navigation -->
<section class="top-section" id="home">
    <header class="header">
        <div class="container">
            <nav class="navbar rakib-nav navbar-expand-lg navbar-light">
                <a href="#" class="navbar-brand brand-logo"><span class="a-brand">
                         R
                    </span>
                        akib
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-3">
                            <a id="home-link" href="#home" class="nav-link active-section-link">Home</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a id="about-link" href="#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a id="resume-link" href="#resume" class="nav-link">Resume</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a id="services-link" href="#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a id="projects-link" href="#projects" class="nav-link">Projects</a>
                        </li>

                        <li class="nav-item mx-4">
                            <a id="contact-link" href="#contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="banner">
        <div class="container text-center">
            <h3 class="first-text">HEY! I AM</h3>
            <h1 class="second-text"> Md. Rakibul Islam </h1>
            <h2 class="third-text">I'm A
                <u class="dev-txt">
                    Developer.
                </u>
            </h2>
            <div class="diamond">
                <p class="mouse-wheel">
                    <img class="arrow" src="svg-icon/arrow-thin-down.svg" alt="">
                </p>
            </div>
        </div>
    </div>

</section>

<!-- About Section -->
<section class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-6 profile-pic">

            </div>
            <div class="col-6">
                <div class="information">
                    <h1 class="about-txt">About Me</h1>
                    <p class="sprit-txt">A small river named Duden flows by their place and supplies it with the
                        necessary regelialia.
                    </p>
                    <div class="row description">
                        <dt class="col-sm-3">Name:</dt>
                        <dd class="col-sm-9"> Md. Rakibul Islam </dd>

                        <dt class="col-sm-3">Date of birth:</dt>
                        <dd class="col-sm-9">June 15, 1996</dd>

                        <dt class="col-sm-3">Address:</dt>
                        <dd class="col-sm-9">House #00, Khazi Office Road, East Mollartek, Dakshin Khan, Dhaka</dd>

                        <dt class="col-sm-3">Zip code:</dt>
                        <dd class="col-sm-9">1205</dd>

                        <dt class="col-sm-3">Email:</dt>
                        <dd class="col-sm-9">2016000000228@seu.edu.bd; rakib.seu.cse@gmail.com</dd>

                        <dt class="col-sm-3">Phone:</dt>
                        <dd class="col-sm-9">+8801302245730</dd>
                    </div>
                    <h5 class="project-txt"><span class="project-number">10</span> Project Complete</h5>
                    <button type="button" class="cv-download-btn">DOWNLOAD CV</button>
                </div>
            </div>
        </div>

        <div class="platform-section row">
            <div class="col platform-section-img text-center"><img src="{{asset('front-end')}}/images/microsoft.png" alt=""></div>
            <div class="col platform-section-img text-center"><img src="{{asset('front-end')}}/images/android.png" alt=""></div>
            <div class="col platform-section-img text-center"><img src="{{asset('front-end')}}/images/php.jpg" alt=""></div>
            <div class="col platform-section-img text-center"><img src="{{asset('front-end')}}/images/google.png" alt=""></div>
            <div class="col platform-section-img text-center"><img src="{{asset('front-end')}}/images/adobe.png" alt=""></div>
            <div class="col platform-section-img text-center"><img src="{{asset('front-end')}}/images/laravel.png" alt=""></div>
        </div>
    </div>
</section>

<!-- Bio Section -->
<section class="bio-section" id="resume">
    <div class="container">
        <div class="bio">
            <aside class="side-bar">
                <div class="side-bar-nav">
                    <a href="#education" class="education">Education</a>
                    <a href="#experience" class="experience">Experience</a>
                    <a href="#skill" class="skills">Skills</a>
                    <a href="#award" class="award">Award</a>
                </div>
            </aside>
            <article class="bio-contetn-elements">
                <!-- Education -->
                <div class="bio-content education-content" id="education">
                    <h2 class="heading">Education</h2>
                    <div class="header-content">
                        <div class="resume-icon">
                            <p class="book">
                                <i class="fas fa-book-reader book-icon"></i>
                            </p>
                        </div>
                        <div class="bio-info">
                            <p class="date">2016-2020</p>
                            <h2 class="degree">
                                Bachelor of Science in Computer Science and Engineering.
                            </h2>
                            <p class="university-name">
                                Southeast University.
                            </p>
                            <p class="about-seu">
                                A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                into your mouth.
                            </p>
                        </div>
                    </div>
                    <hr>

                    <div class="header-content">
                        <div class="resume-icon">
                            <p class="book">
                                <i class="fas fa-book-reader book-icon"></i>
                            </p>
                        </div>
                        <div class="bio-info">
                            <p class="date">2013-2014</p>
                            <h2 class="degree">
                                Higher Secondary School Certificate.
                            </h2>
                            <p class="university-name">
                                Residential Laboratory College.
                            </p>
                            <p class="about-seu">
                                A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                into your mouth.
                            </p>
                        </div>
                    </div>
                    <hr>

                    <div class="header-content">
                        <div class="resume-icon">
                            <p class="book">
                                <i class="fas fa-book-reader book-icon"></i>
                            </p>
                        </div>
                        <div class="bio-info">
                            <p class="date">2011-2012</p>
                            <h2 class="degree">
                                Secondary School Certificate.
                            </h2>
                            <p class="university-name">
                                Armed Police Battalion High School.
                            </p>
                            <p class="about-seu">
                                A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                into your mouth.
                            </p>
                        </div>
                    </div>
                    <hr>
                </div>

                <!-- Experience -->
                <div class="bio-content experience-content" id="experience">
                    <h2 class="heading">Experience</h2>
                    <div class="header-content">
                        <div class="resume-icon">
                            <p class="book">
                                <i class="fas fa-book-reader book-icon"></i>
                            </p>
                        </div>
                        <div class="bio-info">
                            <p class="date">Demo Date</p>
                            <h2 class="degree position">
                                Demo Position
                            </h2>
                            <p class="university-name company-name">
                                Demo Company
                            </p>
                            <p class="about-seu">
                                A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                into your mouth.
                            </p>
                        </div>
                    </div>
                    <hr>
                </div>

                <!-- Skills -->
                <div class="bio-content skills-content" id="skill">
                    <h2 class="heading">Skills</h2>
                    <div class="progress-card-content">
                        <div class="card progress-card">
                            <div class="card-body">
                                <h4 class="card-title text-center card-title-text">
                                    HTML
                                </h4>
                                <div class="progress-content">
                                    <div class="percentage percent-cal-one">
                                        <svg>
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                        </svg>
                                        <div class="number">
                                            <h4>95<span>%</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="info">
                                    <h4 class="text-one">28% <p>Last Week</p>
                                    </h4>
                                    <h4 class="text-two">60% <p>Last Month</p>
                                    </h4>
                                </div>
                            </div>
                        </div>


                        <div class="card progress-card">
                            <div class="card-body">
                                <h4 class="card-title text-center card-title-text">
                                    Laravel
                                </h4>
                                <div class="progress-content">
                                    <div class="percentage percent-cal-two">
                                        <svg>
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                        </svg>
                                        <div class="number">
                                            <h4>75<span>%</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="info">
                                    <h4 class="text-one">28% <p>Last Week</p>
                                    </h4>
                                    <h4 class="text-two">60% <p>Last Month</p>
                                    </h4>
                                </div>
                            </div>
                        </div>


                        <div class="card progress-card">
                            <div class="card-body">
                                <h4 class="card-title text-center card-title-text">
                                    Java Script
                                </h4>
                                <div class="progress-content">
                                    <div class="percentage percent-cal-three">
                                        <svg>
                                            <circle cx="70" cy="70" r="70"></circle>
                                            <circle cx="70" cy="70" r="70"></circle>
                                        </svg>
                                        <div class="number">
                                            <h4>60<span>%</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="info">
                                    <h4 class="text-one">28% <p>Last Week</p>
                                    </h4>
                                    <h4 class="text-two">60% <p>Last Month</p>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skill-progress-bar">
                        <div class="left">
                            <h3 class="html-skill">HTML5</h3>
                            <div class="progress mb-3 progress-div">
                                <div class="progress-bar progress-bar-div" role="progressbar" style="width: 90%;"
                                     aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">95%</div>
                            </div>

                            <h3 class="css-skill">CSS4</h3>
                            <div class="progress mb-3 progress-div">
                                <div class="progress-bar progress-bar-div" role="progressbar" style="width: 80%"
                                     aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                            </div>

                            <h3 class="java-script-skill">Java Script</h3>
                            <div class="progress progress-div">
                                <div class="progress-bar progress-bar-div" role="progressbar" style="width: 30%"
                                     aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">60%</div>
                            </div>
                        </div>

                        <div class="right">
                            <h3 class="angular-skill">Laravel</h3>
                            <div class="progress progress-div">
                                <div class="progress-bar progress-bar-div" role="progressbar" style="width: 50%"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Award -->
                <div class="bio-content award-content" id="award">
                    <h2 class="heading">Award</h2>
                     <div class="header-content">
                        <div class="resume-icon">
                            <p class="book">
                                <i class="fas fa-book-reader book-icon"></i>
                            </p>
                        </div>
                        <div class="bio-info">
                            <p class="date">Demo Date</p>
                            <h2 class="degree award-name">
                                Demo Award
                            </h2>
                            <p class="university-name company-name">
                                Demo Company
                            </p>
                            <p class="about-seu">
                                A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                into your mouth.
                            </p>
                        </div>
                    </div>
                    <hr>
                </div>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="container">
        <h1 class="service-txt text-center">Services</h1>
        <p class="about-our-service-txt text-center">Far far away, behind the word mountains, far from the countries
            Vokalia and
            Consonantia</p>


        <div class="service-card">
            <div class="top">
                <div class="card card-content">
                    <div class="card-body">
                        <i class="pe-7s-compass"></i>
                        <h5 class="card-title">Web Design</h5>
                        <p class="card-text">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                    </div>
                </div>

                <div class="card card-content">
                    <div class="card-body">
                        <i class="pe-7s-science"></i>
                        <h5 class="card-title">Web Developer</h5>
                        <p class="card-text">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                    </div>
                </div>

                <div class="card card-content">
                    <div class="card-body">
                        <i class="pe-7s-camera"></i>
                        <h5 class="card-title">Photography</h5>
                        <p class="card-text">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                    </div>
                </div>
            </div>

            <div class="bottom">
                <div class="card card-content">
                    <div class="card-body">
                        <i class="pe-7s-magic-wand"></i>
                        <h5 class="card-title">App Developing</h5>
                        <p class="card-text">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                    </div>
                </div>

                <div class="card card-content">
                    <div class="card-body">
                        <i class="pe-7s-light"></i>
                        <h5 class="card-title">Product Strategy</h5>
                        <p class="card-text">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                    </div>
                </div>

                <div class="card card-content">
                    <div class="card-body">
                        <i class="pe-7s-plane"></i>
                        <h5 class="card-title">Branding</h5>
                        <p class="card-text">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="projects" id="projects">
    <h1 class="project-txt text-center">Projects</h1>
    <p class="about-our-project-txt text-center">Far far away, behind the word mountains, far from the countries
        Vokalia and
        Consonantia</p>


    <div class="project-card">
        <div class="top">
            <div class="card card-content work-1">
                <div class="card-body card-body-text">
                    <h5 class="card-title">Branding & Illustration Design</h5>
                    <p class="card-text">Web Design</p>
                </div>
            </div>

            <div class="card card-content work-2">
                <div class="card-body card-body-text">
                    <h5 class="card-title">Branding & Illustration Design</h5>
                    <p class="card-text">Web Design</p>
                </div>
            </div>

            <div class="card card-content work-3">
                <div class="card-body card-body-text">
                    <h5 class="card-title">Branding & Illustration Design</h5>
                    <p class="card-text">Web Design</p>
                </div>
            </div>
        </div>

        <div class="bottom">
            <div class="card card-content work-4">
                <div class="card-body card-body-text">
                    <h5 class="card-title">Branding & Illustration Design</h5>
                    <p class="card-text">Web Design</p>
                </div>
            </div>

            <div class="card card-content work-5">
                <div class="card-body card-body-text">
                    <h5 class="card-title">Branding & Illustration Design</h5>
                    <p class="card-text">Web Design</p>
                </div>
            </div>

            <div class="card card-content work-6">
                <div class="card-body card-body-text">
                    <h5 class="card-title">Branding & Illustration Design</h5>
                    <p class="card-text">Web Design</p>
                </div>
            </div>
        </div>
    </div>

    <div class="cmpleted-project-card">
        <div class="container">
            <div class="cmpleted-project-card-content">
                <div class="card card-content">
                    <div class="card-body card-content-text">
                        <h3 class="card-title">100</h3>
                        <p class="card-text">Award</p>
                    </div>
                </div>

                <div class="card card-content">
                    <div class="card-body card-content-text">
                        <h3 class="card-title">1,200</h3>
                        <p class="card-text">Complete Projcet</p>
                    </div>
                </div>

                <div class="card card-content">
                    <div class="card-body card-content-text">
                        <h3 class="card-title">1,200</h3>
                        <p class="card-text">Happy Customers</p>
                    </div>
                </div>

                <div class="card card-content">
                    <div class="card-body card-content-text">
                        <h3 class="card-title">500</h3>
                        <p class="card-text">Cups of Coffee</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Contact Section -->
<section class="contact" id="contact">

    <div class="theme-section">
        <div class="theme-content text-center">
            <h1 class="theme-heading">I'm <span>Available</span> for freelancing</h1>
            <p class="theme-text">A small river named Duden flows by their place and supplies it <br>with the necessary
                regelialia.</p>
            <button class="btn hire-button">HIRE ME</button>
        </div>
    </div>

    <div class="container">
        <h1 class="contact-heading text-center">Contact Me</h1>
        <p class="about-our-contact-txt text-center">Far far away, behind the word mountains, far from the countries
            Vokalia and
            Consonantia</p>

        <div class="row contact-info">
            <div class="col col-md-3">
                <div class="card contact-card">
                    <div class="card-body card-content">
                        <p class="contact-icon-container">
                            <i class="fas fa-map-signs contact-icon"></i>
                        </p>
                        <h6 class="card-title">Address</h6>
                        <p class="card-text">House #00, Khazi Office Road, East Mollertak, Dakshin Khan, Dhaka</p>
                    </div>
                </div>
            </div>

            <div class="col col-md-3">
                <div class="card contact-card">
                    <div class="card-body card-content">
                        <p class="contact-icon-container">
                            <i class="fas fa-phone-alt contact-icon"></i>
                        </p>
                        <h6 class="card-title">Contact Number</h6>
                        <a href="#" class="card-text">+8801302245730</a>
                    </div>
                </div>
            </div>

            <div class="col col-md-3">
                <div class="card contact-card">
                    <div class="card-body card-content">
                        <p class="contact-icon-container">
                            <i class="fas fa-paper-plane contact-icon"></i>
                        </p>
                        <h6 class="card-title">Email Address</h6>
                        <a href="#" class="card-text">rakib.seu.cse<br>@gmail.com</a>
                    </div>
                </div>
            </div>

            <div class="col col-md-3">
                <div class="card contact-card">
                    <div class="card-body card-content">
                        <p class="contact-icon-container">
                            <i class="fas fa-globe-asia contact-icon"></i>
                        </p>
                        <h6 class="card-title">Website</h6>
                        <a href="#" class="card-text">rsc.com</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col profile-pic">
            </div>

            <div class="col contact-form">
                <form>
                    <div class="form-group form-elements">
                        <input type="text" class="form-control name" placeholder="Your Name">
                        <input type="email" class="form-control email" placeholder="Your Email">
                        <input type="text" class="form-control subject" placeholder="Subjcet">
                        <textarea name="" id="" cols="30" rows="10" class="form-control text-area"
                                  placeholder="Message"></textarea>
                        <button class="btn send-message-btn">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer-section">
    <div class="container">
        <div class="row footer-content">
            <div class="col">
                <h2 class="footer-about-headeing">About</h2>
                <p class="footer-about-text">Far far away, behind the word mountains, far from the countries
                    Vokalia
                    and
                    Consonantia, there live the blind texts.</p>
                <ul class="about-list-group">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>

            <div class="col">
                <h2 class="footer-link-heading">Links</h2>
                <ul class="footer-list-group">
                    <li>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span>Home</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span>About</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span>Services</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span>Projects</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span>Contact</span></a>
                    </li>
                </ul>
            </div>

            <div class="col">
                <h2 class="footer-services-heading">Services</h2>
                <ul class="footer-list-group">
                    <li>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span>Web Design</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span>Web Development</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span>Business
                                    Strategy</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span>Data Analysis</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span>Graphic Design</span></a>
                    </li>
                </ul>
            </div>

            <div class="col">
                <h2 class="question-heading">Have a Questions?</h2>
                <ul class="question-list-group">
                    <li><i class="fas fa-map-marker-alt"></i><span> sector 2, Uttara, Dhaka-1230, Bangladesh</span> </li>
                    <li><i class="fas fa-phone-alt"></i><span>+880 1302245730</span></li>
                    <li></i><i class="far fa-envelope"></i><span>rakib@rsc.com</span></li>
                </ul>
            </div>
        </div>
        <p class="copyright">Copyright &copy;2020 All rights reserved | By <strong> Md. Rakibul Islam.</strong></p>
    </div>
</footer>




    <script src="{{asset('front-end')}}/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</body>
</html>
