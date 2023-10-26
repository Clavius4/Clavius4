<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title> Christian Stewart </title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="" class="nav__logo">Stewart</a>

                <!-- Navigation Bar -->
                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class='bx bx-home-alt'></i>
                            </a>
                        </li>
                        
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class='bx bx-user'></i>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class='bx bx-book'></i>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#work" class="nav__link">
                                <i class='bx bx-briefcase-alt-2'></i>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class='bx bx-message-square-detail'></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Theme change button -->
                <i class='bx bx-moon change-theme' id="theme-button"></i>
            </nav>
        </header>

        <!--=============== MAIN ===============-->
        <main class="main">
            <!--=============== HOME ===============-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__greeting">Hello, I'm</span>
                        <h1 class="home__name">Christian Stewart</h1>
                        <h3 class="home__education">Developer</h3>

                        <div class="home__buttons">
                            <a download="" href="https://christianstewart-resume.herokuapp.com/" class="button button--ghost">
                                Download CV
                            </a>
                            <a href="#about" class="button">About Me</a>
                        </div>
                    </div>

                    <!-- Profile Image -->
                    <div class="home__handle">
                        <img src="assets/img/perfil.png" alt="My profile image" class="home__img">
                    </div>

                    <!-- Work Links -->
                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/christian-anthony-stewart/" target="_blank" class="home__social-link">
                            <i class='bx bxl-linkedin-square'></i>
                        </a>
                        <a href="https://github.com/TheLast22" target="_blank" class="home__social-link">
                            <i class='bx bxl-github' ></i>
                        </a>
                        <a href="https://codepen.io/thelast22" target="_blank" class="home__social-link">
                            <i class='bx bxl-codepen' ></i>
                        </a>
                    </div>

                    <a href="#about" class="home__scroll">
                        <i class='bx bx-mouse home__scroll-icon' ></i>
                        <span class="home__scroll-name">Scroll Down</span>
                    </a>
                </div>
            </section>
            
            <!--=============== ABOUT ===============-->
            <section class="about section" id="about">
                <span class="section__subtitle">My Intro</span>
                <h2 class="section__title">About Me</h2>

                <div class="about__container container grid">
                    <img src="assets/img/img2.png" alt="" class="about__img">

                    <div class="about__data">
                        <div class="about__info">
                            <div class="about__box">
                                <i class="bx bx-award"></i>
                                <h3 class="about__title">Experience</h3>
                                <span class="about__subtitle">3 Years</span>
                            </div>

                            <div class="about__box">
                                <i class='bx bx-briefcase' ></i>
                                <h3 class="about__title">Completed</h3>
                                <span class="about__subtitle">8 Projects</span>
                            </div>

                            <div class="about__box">
                                <i class='bx bx-support' ></i>
                                <h3 class="about__title">Support</h3>
                                <span class="about__subtitle">Online 24/7</span>
                            </div>
                        </div>

                        <p class="about__description">
                            I am currently a 3rd Year Computer Science Student from the University of San Carlos.
                            Focused mainly on creating Web designs and Graphic designs but I am open to Mobile Development projects as well.
                            I have worked with basic HTML, CSS, and JS projects. React, C#, and Xamarin have also been a part of my projects.
                            Traditional and Digital graphics are within my capabilities.
                        </p>

                        <a href="#contact" class="button">Contact Me</a>
                    </div>
                </div>
            </section>

            <!--=============== SKILLS ===============-->
            <section class="skills section" id="skills">
                <span class="section__subtitle">My Abilties</span>
                <h2 class="section__title">My Experience</h2>

                <div class="skills__container container grid">
                    <!-- Frontend -->
                    <div class="skills__content">
                        <h3 class="skills__title">Front End Development</h3>

                        <div class="skills__box">
                            <div class="skills__group">
                                <!-- HTML -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-html5' ></i>
                                    <div>
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>
                                <!-- CSS -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-css3' ></i>
                                    <div>
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>
                                <!-- JavaScript -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-javascript' ></i>
                                    <div>
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                            </div>

                            <div class="skills__group">
                                <!-- Bootstrap -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-bootstrap' ></i>
                                    <div>
                                        <h3 class="skills__name">Boostrap</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                                <!-- React -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-react' ></i>
                                    <div>
                                        <h3 class="skills__name">React</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                                <!-- Git -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-git' ></i>
                                    <div>
                                        <h3 class="skills__name">Git</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Backend -->
                    <div class="skills__content">
                        <h3 class="skills__title">Back End Development</h3>

                        <div class="skills__box">
                            <div class="skills__group">
                                <!-- PHP -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-php' ></i>
                                    <div>
                                        <h3 class="skills__name">PHP</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                                <!-- Laravel -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxs-layer' ></i>
                                    <div>
                                        <h3 class="skills__name">Laravel</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                                <!-- NodeJS -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-nodejs' ></i>
                                    <div>
                                        <h3 class="skills__name">NodeJS</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                            </div>

                            <div class="skills__group">
                                <!-- C# -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-c-plus-plus' ></i>
                                    <div>
                                        <h3 class="skills__name">C#</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                                <!-- JavaScript -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-javascript' ></i>
                                    <div>
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                                <!-- Python -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-python' ></i>
                                    <div>
                                        <h3 class="skills__name">Python</h3>
                                        <span class="skills__level">Basic</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Database Languages -->
                    <div class="skills__content">
                        <h3 class="skills__title">Database Languages</h3>

                        <div class="skills__box">
                            <div class="skills__group">
                                <!-- mySQL -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxs-coin-stack' ></i>
                                    <div>
                                        <h3 class="skills__name">mySQL</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>
                                <!-- SQL Server -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-microsoft' ></i>
                                    <div>
                                        <h3 class="skills__name">Microsoft SQL Server</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                                <!-- Firebase -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-firebase' ></i>
                                    <div>
                                        <h3 class="skills__name">Firebase</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Development -->
                    <div class="skills__content">
                        <h3 class="skills__title">Mobile Development</h3>

                        <div class="skills__box">
                            <div class="skills__group">
                                <!-- Xamarin -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bx-outline' ></i>
                                    <div>
                                        <h3 class="skills__name">Xamarin</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>
                                <!-- .NET -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-microsoft' ></i>
                                    <div>
                                        <h3 class="skills__name">.NET</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                                <!-- React Native -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-react' ></i>
                                    <div>
                                        <h3 class="skills__name">React Native</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Extras -->
                    <div class="skills__content">
                        <h3 class="skills__title">Extras</h3>

                        <div class="skills__box">
                            <div class="skills__group">
                                <!-- Google Cloud -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-google-cloud'></i>
                                    <div>
                                        <h3 class="skills__name">Google Cloud</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                                <!-- DICT Startup Pitch -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxs-microphone' ></i>
                                    <div>
                                        <h3 class="skills__name">DICT Startup Challenge</h3>
                                        <span class="skills__level">Regional Pitch Competition Top 35</span>
                                    </div>
                                </div>
                                <!-- Computing in Python -->
                                <div class="skills__data">
                                    <i class='bx bxs-badge-check'></i>
                                    <i class='bx bxl-react' ></i>
                                    <div>
                                        <h3 class="skills__name">Computing in Python</h3>
                                        <span class="skills__level">Development Academy of the Philippines</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--=============== SERVICES ===============-->
            <section class="services section">
                <span class="section__subtitle">My Services</span>
                <h2 class="section__title">What I Offer</h2>

                <div class="services__container container grid">
                    <!-- Product Design -->
                    <div class="services__card">
                        <h3 class="services__title">Product <br> Designer</h3>

                        <span class="services__button">
                            See More <i class='bx bx-right-arrow-alt services__icon' ></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close' ></i>

                                <h3 class="services__modal-title">Product Designer</h3>
                                <p class="services__modal-description">
                                    Providing Quality Work to Clients and Companies
                                    with over 3 Years of Experience
                                </p>
                                <!-- Service Features -->
                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Development of User Interface
                                        </p>
                                    </li>

                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Website Development
                                        </p>
                                    </li>

                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Development of UX Interactions
                                        </p>
                                    </li>

                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Mockup and Prototype Development
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- UI/UX Design -->
                    <div class="services__card">
                        <h3 class="services__title">UI/UX <br> Designer</h3>

                        <span class="services__button">
                            See More <i class='bx bx-right-arrow-alt services__icon' ></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close' ></i>

                                <h3 class="services__modal-title">UI/UX Designer</h3>
                                <p class="services__modal-description">
                                    Providing Quality Work to Clients and Companies
                                    with over 3 Years of Experience
                                </p>
                                <!-- Service Features -->
                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Development of Wireframes
                                        </p>
                                    </li>

                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Figma Prototyping
                                        </p>
                                    </li>

                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Development of Interactive Media
                                        </p>
                                    </li>

                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                           User-Centered Designing
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Graphic Design -->
                    <div class="services__card">
                        <h3 class="services__title">Graphic <br> Designer</h3>

                        <span class="services__button">
                            See More <i class='bx bx-right-arrow-alt services__icon' ></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close' ></i>

                                <h3 class="services__modal-title">Product Designer</h3>
                                <p class="services__modal-description">
                                    Providing Quality Work to Clients and Companies
                                    with over 3 Years of Experience
                                </p>
                                <!-- Service Features -->
                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Creative Visual Communication
                                        </p>
                                    </li>

                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                           Development of Consumer Media Products
                                        </p>
                                    </li>

                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Digital and Traditional Methods
                                        </p>
                                    </li>

                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Development of Modern Graphics
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Full-Stack Developer -->
                    <div class="services__card">
                        <h3 class="services__title">Full Stack <br> Developer</h3>

                        <span class="services__button">
                            See More <i class='bx bx-right-arrow-alt services__icon' ></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close' ></i>

                                <h3 class="services__modal-title">Full Stack Developer</h3>
                                <p class="services__modal-description">
                                    Providing Quality Work to Clients and Companies
                                    with over 3 Years of Experience
                                </p>
                                <!-- Service Features -->
                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Contemporary Client-Server Software
                                        </p>
                                    </li>

                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                           Development of Quality Web-Based Applications
                                        </p>
                                    </li>

                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Project Management-Based Process
                                        </p>
                                    </li>

                                    <li class="services__modal-item">
                                        <i class='bx bx-check services__modal-icon' ></i>
                                        <p class="services__modal-info">
                                            Development of Quality Assurance Framework
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--=============== WORK ===============-->
            <section class="work section" id="work">
                <span class="section__subtitle">My Portfolio</span>
                <h2 class="section__title">Recent Works</h2>
                <!-- Work Filters -->
                <div class="work__filters">
                    <span class="work__item active-work" data-filter='all'>All</span>
                    <span class="work__item" data-filter='.web'>Web</span>
                    <span class="work__item" data-filter='.mobile'>Mobile</span>
                    <span class="work__item" data-filter='.design'>Design</span>
                </div>

                <div class="work__container container grid">
                    <!-- BudigaApp -->
                    <div class="work__card mix web">
                        <img src="assets/img/5.png" alt="BudigaApp" class="work__img">

                        <h3 class="work__title">Budiga Application</h3>

                        <a href="https://github.com/therealmai/budiga_app" class="work__button">
                            Code <i class='bx bxs-right-arrow-circle work__icon' ></i>
                        </a>
                    </div>

                    <!-- Task Manager -->
                    <div class="work__card mix web">
                        <img src="assets/img/2.png" alt="TaskManager" class="work__img">

                        <h3 class="work__title">Task Manager</h3>

                        <a href="https://github.com/TheLast22/TaskManager" class="work__button">
                            Code <i class='bx bxs-right-arrow-circle work__icon' ></i>
                        </a>
                    </div>

                    <!-- ElectroWorx Services -->
                    <div class="work__card mix web">
                        <img src="assets/img/4.png" alt="ElectroWorx" class="work__img">

                        <h3 class="work__title">ElectroWorx Services</h3>

                        <a href="https://github.com/TheLast22/electroworx" class="work__button">
                            Frontend <i class='bx bxs-right-arrow-circle work__icon' ></i>
                        </a>
                        <a href="https://github.com/TheLast22/electroworxservices_backend" class="work__button">
                            Backend <i class='bx bxs-right-arrow-circle work__icon' ></i>
                        </a>
                    </div>

                    <!-- Jutsu -->
                    <div class="work__card mix web">
                        <img src="assets/img/3.png" alt="Jutsu" class="work__img">

                        <h3 class="work__title">Jutsu</h3>

                        <a href="https://github.com/TheLast22/Jutsu" class="work__button">
                            Code <i class='bx bxs-right-arrow-circle work__icon' ></i>
                        </a>
                    </div>

                    <!-- AppleCo -->
                    <div class="work__card mix web">
                        <img src="assets/img/1.png" alt="AppleCo" class="work__img">

                        <h3 class="work__title">AppleCo</h3>

                        <a href="https://github.com/TheLast22/AppleCo" class="work__button">
                            Code <i class='bx bxs-right-arrow-circle work__icon' ></i>
                        </a>
                    </div>

                    <!-- Kicks4Kings -->
                    <div class="work__card mix design">
                        <img src="assets/img/7.png" alt="Kicks4Kings" class="work__img">

                        <h3 class="work__title">Kicks4Kings</h3>

                        <a href="" class="work__button">
                            Mockup <i class='bx bxs-right-arrow-circle work__icon' ></i>
                        </a>
                    </div>

                    <!-- Wave App -->
                    <div class="work__card mix mobile">
                        <img src="assets/img/6.png" alt="Wave" class="work__img">

                        <h3 class="work__title">Wave Application</h3>

                        <a href="https://github.com/TheLast22/ChatApp" class="work__button">
                            Code <i class='bx bxs-right-arrow-circle work__icon' ></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--=============== TESTIMONIALS ===============-->
            <section class="testimonial section">
                <span class="section__subtitle">My Clients</span>
                <h2 class="section__title">Testimonial</h2>
                <!-- Error404 -->
                <div class="about_container container grid">
                    <div class="about__data">
                        <a href="https://christianstewart-404.herokuapp.com/" class="button">
                            View Here <i class='bx bxs-message-alt-error'></i>
                        </a>
                    </div>
                </div>

                <!-- <div class="testimonial__container container swiper">
                    <div class="swiper-wrapper">
                        <div class="testimonial__card swiper-slide">
                            <img src="assets/img/project1.jpg" alt="" class="testimonial__img">

                            <h3 class="testimonial__name">John Doe</h3>
                            <p class="testimonial__description">
                                test
                            </p>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <img src="assets/img/project2.jpg" alt="" class="testimonial__img">

                            <h3 class="testimonial__name">Jane Doe</h3>
                            <p class="testimonial__description">
                                test
                            </p>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <img src="assets/img/project3.jpg" alt="" class="testimonial__img">

                            <h3 class="testimonial__name">Juan Ponce</h3>
                            <p class="testimonial__description">
                                test
                            </p>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <img src="assets/img/project4.jpg" alt="" class="testimonial__img">

                            <h3 class="testimonial__name">Jose Rizal</h3>
                            <p class="testimonial__description">
                                test
                            </p>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div> -->
            </section>

            <!--=============== CONTACT ===============-->
            <section class="contact section" id="contact">
                <span class="section__subtitle">Get in Touch</span>
                <h2 class="section__title">Contact Me</h2>

                <div class="contact__container container grid">
                    <!-- Contact Links -->
                    <div class="contact__content">
                        <h3 class="contact__title">Talk to Me</h3>

                        <div class="contact__info">
                            <div class="contact__card">
                                <i class='bx bxl-gmail contact__card-icon' ></i>
                                <h3 class="contact__card-title">Email</h3>
                                <span class="contact__card-data">christianstewart5111@gmail.com</span>

                                <a href="mailto: christianstewart5111@gmail.com" class="contact__button">
                                    Send me an email <i class='bx bxs-chevron-right contact__button-icon' ></i>
                                </a>
                            </div>

                            <div class="contact__card">
                                <i class='bx bxl-facebook-circle contact__card-icon' ></i>
                                <h3 class="contact__card-title">Facebook</h3>
                                <span class="contact__card-data">Christian Stewart</span>

                                <a href="https://www.facebook.com/stewart.ca.8/" class="contact__button">
                                    Add me <i class='bx bxs-chevron-right contact__button-icon' ></i>
                                </a>
                            </div>

                            <div class="contact__card">
                                <i class='bx bxl-youtube contact__card-icon' ></i>
                                <h3 class="contact__card-title">Youtube</h3>
                                <span class="contact__card-data">TheLast</span>

                                <a href="https://www.youtube.com/channel/UCQ1Wu4srK7VvsEzrwzAiskg" class="contact__button">
                                    Follow me <i class='bx bxs-chevron-right contact__button-icon' ></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Inquiry -->
                    <div class="contact__content">
                        <h3 class="contact__title">Project inquiries</h3>

                        <form action="https://formsubmit.co/christianstewart5111@gmail.com" method="POST" class="contact__form">
                            <div class="contact__form-div">
                                <label for="name" class="contact__form-tag">Name</label>
                                <input type="hidden" name="_subject" value="New submission!">
                                <input type="text" placeholder="Full Name" class="contact__form-input" name="name">
                            </div>

                            <div class="contact__form-div">
                                <label for="email" class="contact__form-tag">Mail</label>
                                <input type="email" placeholder="Email Address" class="contact__form-input" name="email" required>
                            </div>

                            <div class="contact__form-div">
                                <label for="phone" class="contact__form-tag">Number</label>
                                <input type="text" placeholder="Mobile Number" class="contact__form-input" name="phone">
                            </div>

                            <div class="contact__form-div contact__form-area">
                                <label for="message" class="contact__form-tag">Project</label>
                                <input type="hidden" name="_next" value="https://christianstewart.herokuapp.com">
                                <textarea name="message" id="" cols="30" rows="10" placeholder="Describe your project" class="contact__form-input"></textarea>
                            </div>

                            <button class="button" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <!--=============== FOOTER ===============-->
        <footer class="footer">
            <div class="footer__container container">
                <h1 class="footer__title">Stewart</h1>
                <!-- Footer Navigation -->
                <ul class="footer__list">
                    <li>
                        <a href="#about" class="footer__link">About</a>
                    </li>
                    <li>
                        <a href="#work" class="footer__link">Work</a>
                    </li>
                    <li>
                        <a href="#testimonial" class="footer__link">Testimonial</a>
                    </li>
                </ul>
                <!-- Footer Social Links -->
                <ul class="footer__social">
                    <a href="https://www.facebook.com/stewart.ca.8/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-facebook' ></i>
                    </a>
                    <a href="https://www.instagram.com/stewart.ca8/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                    <a href="https://twitter.com/Stewart_ca8" target="_blank" class="footer__social-link">
                        <i class='bx bxl-twitter' ></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCQ1Wu4srK7VvsEzrwzAiskg" target="_blank" class="footer__social-link">
                        <i class='bx bxl-youtube' ></i>
                    </a>
                </ul>
                <!-- Footer Copyrights -->
                <span class="footer__copy">
                    &#169; Christian Stewart. All Rights Reserved
                </span>
            </div>
        </footer>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MIXITUP FILTER ===============-->
        <script src="assets/js/mixitup.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>