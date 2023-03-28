<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--====================Primary Meta Tags=========-->
    <title>EDU LAB</title>
    <meta name="title" content="Education Is Key Of Succsessful Youth">
    <meta name="Description" content="Best Online Courses & Programs">
        <!--====================Fav ICONS=========-->
        <link rel="shortcut-icon" href="favicon.svg" type="image/svg+xml">
        <!--====================Google Font=========-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        
         <!--====================Style Sheet Link=========-->
         <link rel="stylesheet" href="Style.css">
         <!--====================Preload Images=========-->

</head>
<body>
<!--====================Header=========-->
<header class="header">
    <div class="container">
        <a href="#" class="logo">
            <img src="images/edulab.png" alt="Edulab home" height="20" width="150">
        </a>
        <nav class="navbar" data-navbar>
       
            <ul class="navbar-list">
               <li>
                <a href="index.php" target="_blank" class="navbar-link">Home</a>
               </li>
               <li>
                <a href="about.php" target="_blank" class="navbar-link">About</a>
               </li>
                 <li>
                <a href="course.php" target="_blank" class="navbar-link">Course</a>
               </li>  
               <li>
                <a href="Contact-Form.php" target="_blank" class="navbar-link">Contact Us</a>
               </li>
            </ul>

        </nav>
        <a href="signin.php" target="_blank" class="btn btn-secondary">Sign In</a>
        <button class="nav-open-btn" aria-label="toggle menu" data-nav-toggle-btn>
                            <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
                            <ion-icon name="close-outline" aria-hidden="true" class="close-icon"></ion-icon>
                            <div class="overlay" data-overlay></div>
                        </button>
                        <div class="overlay" data-overlay></div>   
    </div>
</header>

<!--====================Main=========-->
<main>
    <article>
        <!-- HERO -->
        <section class="secion hero" aria-label="hero">
            <div class="container">
             <div class="hero-content">
                <h1 class="h1 title hero-title">
                    Education Is Key <br> Of Succsessful Youth
                </h1>
                 <p class="hero-text">
                    Learn Technical Skills Faster Through Immersive Experience Based On Demand Training.
                 </p>
                 <div class="input-wrapper">
                    <input class="input-field" type="email" name="email-address" placeholder="Enter Your Email">
                    <button type="submit" class="btn btn-primary">Let's Talk</button>
                 </div>
            </div>
            <figure class="hero-banner">
               <img src="images/Header.png" alt="Header" class="w-100" width="835" height="960" data-parralax data-parralax-speed="10">
            </figure>

            </div>
        </section>
        <!-- -----------Process---------------------- -->
        <section class="section process text-center" aria-labelledby="process-label">
         <div class="container">
            <h2 class="h2 title section-title" id="process-label">How It Works</h2>
            <p class="section-text">
                EDU-LAB is an online platform that educates people, 
                either by imparting niche-specific knowledge or teaching new skills.
            </p>
            <div class="wrapper">
                <figure class="process-banner">
                    <img src="images/process-banner.png" width="734" height="854" loading="lazy" alt="process banner" class="w-100">
                </figure>
                <ul class="grid-list">
                    <li class="process-item">
                     <img src="images/process-icon-1.png" alt="" class="item-icon" width="60" height="60" loading="lazy">
                     <h3 class="h3 title item-title">Ideation</h3>
                     <p class="item-text">EDU-LAB lets you plan, manage, deliver, 
                        and evaluate personalized and blended learning programs.</p>
                    </li>
                    <li class="process-item">
                        <img src="images/process-icon-2.png" alt="" class="item-icon" width="60" height="60" loading="lazy">
                        <h3 class="h3 title item-title">Budget</h3>
                     <p class="item-text">EDU-LAB lets you plan, manage, deliver, 
                        and evaluate personalized and blended learning programs.</p>
                       </li>
                       <li class="process-item">
                        <img src="images/process-icon-3.png" alt="" class="item-icon" width="60" height="60" loading="lazy">
                        <h3 class="h3 title item-title">Performance</h3>
                     <p class="item-text">EDU-LAB lets you plan, manage, deliver, 
                        and evaluate personalized and blended learning programs.</p>
                       </li>
                       <li class="process-item">
                        <img src="images/process-icon-4.png" alt="" class="item-icon" width="60" height="60" loading="lazy">
                        <h3 class="h3 title item-title">Speed</h3>
                     <p class="item-text">EDU-LAB lets you plan, manage, deliver, 
                        and evaluate personalized and blended learning programs.</p>
                       </li>

                </ul>

            </div>
         </div>
        </section>
        <section class="section works text-center" aria-labelledby="work-label" >
             <div class="container">
                <h2 class="h2 title section-title">POPULAR COURSES </h2>
                <p class="section-text">
                    EDU-LAB is the best IT institution in Pakistan that conducts different training programs aimed at helping young career seekers understand the basic information 
                   technology functioning of the sector. 
                </p>
                <ul class="grid-list">
                    <li>
                        <div class="work-card">
                            <figure class="card-banner  img-holder" style="--width:580; --heigt:700;">
                                <img src="images/teaching.jpg" alt="Product Design" 
                                class="img-cover" width="580" height="700" loading="lazy">
                            </figure>
                            <h3 class="h3 title">
                                <a href="Teaching.php" target="_blank" class="card-title">Teaching & Acedamic</a>
                            </h3>
                            <p class="card-text">Teaching is the process of attending to people's needs, experiences and feelings, and intervening 
                                so that they learn particular things, and go beyond the given.</p>
                        </div>
                    </li>
                    <li>
                        <div class="work-card">
                            <figure class="card-banner  img-holder" style="--width:580; --heigt:700;">
                                <img src="images/It Course.jpg" alt="Product Design" 
                                class="img-cover" width="580" height="700" loading="lazy">
                            </figure>
                            <h3 class="h3 title">
                                <a href="IT-Course.php" target="_blank" class="card-title">IT Courses</a>
                            </h3>
                            <p class="card-text">You must consider pursuing a course in Information Technology.If you are looking for short-term programs in this field, 
                                then the Diploma in IT is the right one for you.</p>
                        </div>
                    </li>
                    <li>
                        <div class="work-card">
                            <figure class="card-banner  img-holder" style="--width:580; --heigt:700;">
                                <img src="images/Health care.jpg" alt="Product Design" 
                                class="img-cover" width="580" height="700" loading="lazy">
                            </figure>
                            <h3 class="h3 title">
                                <a href="Healthcare.php" target="_blank" class="card-title">Health Courses</a>
                            </h3>
                            <p class="card-text">Teaching is the process of attending to people's needs, experiences and feelings, and intervening 
                                so that they learn particular things, and go beyond the given.</p>
                        </div>
                    </li>
                    <li>
                        <div class="work-card">
                            <figure class="card-banner  img-holder" style="--width:580; --heigt:700;">
                                <img src="images/Language-Courses.jfif" alt="Product Design" 
                                class="img-cover" width="580" height="700" loading="lazy">
                            </figure>
                            <h3 class="h3 title">
                                <a href="languages.php" target="_blank" class="card-title">Language Courses</a>
                            </h3>
                            <p class="card-text">Language is the basic building block of every culture. Every country has its culture and
                                 the citizens of the country are identified on the basis of the language they speak.</p>
                        </div>
                    </li>        
                    <li>
                        <div class="work-card">
                            <figure class="card-banner  img-holder" style="--width:580; --heigt:700;">
                                <img src="images/management.jpg" alt="Product Design" 
                                class="img-cover" width="580" height="700" loading="lazy">
                            </figure>
                            <h3 class="h3 title">
                                <a href="management.php" target="_blank" class="card-title">Management Courses</a>
                            </h3>
                            <p class="card-text">Management can neither be replaced nor substituted by anything else.
                                Even the computer which is the wonderful invention of the twentieth century  
                                 management.</p>
                        </div>
                    </li>
                    <li>
                        <div class="work-card">
                            <figure class="card-banner  img-holder" style="--width:580; --heigt:700;">
                                <img src="images/business-management.jpg" alt="Product Design" 
                                class="img-cover" width="580" height="700" loading="lazy">
                            </figure>
                            <h3 class="h3 title">
                                <a href="business.php" target="_blank" class="card-title">Business courses</a>
                            </h3>
                            <p class="card-text">Management can neither be replaced nor substituted by anything else.
                                Even the computer which is the wonderful invention of the twentieth century  
                                 management.</p>
                        </div>
                    </li>           
                </ul>
                <a href="#" class="btn btn-primary">See More</a>
             </div>
        </section>
    </article>
</main>
<!--====================Footer=========-->
<footer class="footer">
    <div class="section footer-top">
        <div class="container">
            <div class="footer-brand">
                <a href="#" class="logo">
                    <img src="images/edulab.png" alt="Edulab Home" width="150" height="20" loading="lazy">
                </a>
                <address class="footer-text">
                    Modal Town,Q-Block,Lahore
                </address>
                <ul class="social-list">
                    <li >
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li >
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>
                    <li >
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>
                </ul>
                <a href="#" class="btn btn-primary">Contact Us</a>
            </div>

            <ul class="footer-list">
                <li>
                <a href="#" class="footer-link">IT Course</a>
                </li>
                <li>
                <a href="#" class="footer-link">Health Course</a>
                </li>
                <li>
                <a href="#" class="footer-link">Language Course</a>
                </li>
                <li>
                <a href="#" class="footer-link">Business Course</a>
                </li>
                <li>
                <a href="#" class="footer-link">Personal Development</a>
                </li>
                <li>
                <a href="#" class="footer-link">Law And Politics</a>
                </li>
                <li>
                <a href="#" class="footer-link">About Us</a>
                </li>
                <li>
                <a href="#" class="footer-link">FAQs</a>
                </li>
                <li>
                <a href="#" class="footer-link">Report a Bugs</a>
                </li>
            </ul>
           
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <p class="copyright">
                &copy; 2023 EDU-LAB, Inc. - Developed By <a 
                href="https://www.youtube.com/channel/UCXZevs0FaOHaK-Z0BPKjVKQ" class="link" > Muhammad Waqas</a>
            </p>
            <ul class="footer-bottom-list">
                <li>
                <a href="#" class="footer-link">Terms of use</a>
                </li>  
                <li> 
                <a href="#" class="footer-link">Privacy policy</a>
                 </li>
            </ul>
           
        </div>
    </div>
</footer>





     <!--====================Custom Js Link=========-->
      <script src="Script.js"></script>
      <!--====================Ion Icon=========-->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

     
</body>
</html>