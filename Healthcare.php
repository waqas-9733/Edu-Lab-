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
        <a href="signin.php" class="btn btn-secondary">Sign In</a>
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

        <section class="section works text-center" aria-labelledby="work-label" >
            <div class="container">
               <h2 class="h2 title section-title">Health Care Courses </h2>
               <p class="section-text">
                   EDU-LAB is the best IT institution in Pakistan that conducts different training programs aimed at helping young career seekers understand the basic information 
                   technology functioning of the sector and the job role they aspire to take on. 
               </p>
               <ul class="grid-list">
                   <li>
                       <div class="work-card">
                           <figure class="card-banner  img-holder" style="--width:580; --heigt:700;">
                               <img src="images/Healthcare1.png" alt="Product Design" 
                               class="img-cover" width="580" height="700" loading="lazy">
                           </figure>
                           <h3 class="h3 title">
                               <a href="" class="card-title">Introduction to Healthcare</a>
                           </h3>
                           <p class="card-text">Solving the problems and challenges within the U.S. healthcare system requires a deep understanding of how the system works. Successful solutions 
                            and strategies must take into account the realities of the current system. </p>
                       </div>
                       <button type="submit" class="btn btn-primary"><a href="pricing.php">Enroll Now</a></button>
                   </li>
                   <li>
                       <div class="work-card">
                           <figure class="card-banner  img-holder" style="--width:580; --heigt:700;">
                               <img src="images/Ai In Health.png" alt="Product Design" 
                               class="img-cover" width="580" height="700" loading="lazy">
                           </figure>
                           <h3 class="h3 title">
                               <a href="" class="card-title">AI in Healthcare </a>
                           </h3>
                           <p class="card-text">Artificial intelligence (AI) has transformed industries around the world, 
                            and has the potential to radically alter the field of healthcare.AI in healthcare with the goal of learning to bring AI technologies into the clinic.  </p>
                       </div>
                       <button type="submit" class="btn btn-primary"><a href="pricing.php">Enroll Now</a></button>
                   </li>
                   <li>
                       <div class="work-card">
                           <figure class="card-banner  img-holder" style="--width:580; --heigt:700;">
                               <img src="images/Health Business.png" alt="Product Design" 
                               class="img-cover" width="580" height="700" loading="lazy">
                           </figure>
                           <h3 class="h3 title">
                               <a href="" class="card-title">Business of Health Care</a>
                           </h3>
                           <p class="card-text">This Specialization was designed to help you keep pace with the rapidly changing world of health and health  care. Through partnership with Wharton and Penn Medicine, 
                            you’ll learn from experts in health care management.</p>
                       </div>
                       <button type="submit" class="btn btn-primary"><a href="pricing.php">Enroll Now</a></button>
                   </li>       
               </ul>
               
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