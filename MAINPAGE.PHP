<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="http://localhost/quiz_project_final/navbar.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/quiz_project_final/mainpage.css">

        <title>Responsive sidebar submenus</title>
    </head>
    
  
   
    <body >
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZAxGNKz3_ixLUqlARNPMKou17TnITOLEhmTQ_lUHg_lMd0UyiB_fiucsXRpTmc-rU1Mg&usqp=CAU" alt="" class="header__img" >

                <a href="#" class="header__logo" style="font-size: 25px; color:blueviolet;"><u>JNTUACEP QUIZ PORTAL</u></a>
    
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
            <hr>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name">Quiz 4U</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle"><u>Profile</u></h3>
    
                            <a href="#" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>

                            
                            <div class="nav__dropdown">
                                <i class='bx bx-user nav__icon' ></i>

                                    <span class="nav__name">Users</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>


                                 
                            <br>
                                
                                <p></p>

                                <a href="http://localhost/quiz_project_final/teacherlogin.php" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Teacher</span>
                                    
                                </a>
                                <br>


                                <a href="http://localhost/quiz_project_final/stdloginnew.php" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    
                                    <span class="nav__name">Student</span>
                                    
                                </a>
                                <br>


                               
                                </div>
                            </div>

                            

                        </div>
    
    <p></p>
                        <div class="nav__items">
                            <h3 class="nav__subtitle"><u>Menu</u></h3>
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Notifications</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item">Quiz Date:  25/1/2023</a>
                                        <a href="#" class="nav__dropdown-item">Starts At: 9:30 AM</a>
                                        <a href="#" class="nav__dropdown-item">Ends At: 12:30 AM</a>
                                        <a href="#" class="nav__dropdown-item">Program</a>
                                    </div>
                                </div>

                            </div>

                           <div class="nav__items">
                            
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                   <i class='bx bx-compass nav__icon' ></i>
                                    <span class="nav__name">Explore</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="https://www.tutorialspoint.com/index.htmttvtcdE  " class="nav__dropdown-item">Tutorials point</a>
                                        <a href="https://www.javatpoint.com/" class="nav__dropdown-item">JavaT point</a>
                                        <a href="https://www.w3schools.com/" class="nav__dropdown-item">W3 Schools</a>
                                <a href="https://www.geeksforgeeks.org/" class="nav__dropdown-item">Geeks for geeks </a>
                                    </div>
                              
                                </div>
</div>

               <div> <a href="http://localhost/quiz_project_final/index.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <p>
                    
                </p>
            </section>
        </main>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>

        <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">NEVER GIVE UP!</div>
  <img src="https://c0.wallpaperflare.com/preview/264/169/201/book-read-student-students.jpg" style="width:100%">
  <div class="text">ALL THE BEST</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">NEVER GIVE UP!</div>
  <img src="https://c0.wallpaperflare.com/preview/456/435/782/book-read-student-students.jpg" style="width:100%">
  <div class="text">ALL THE BEST</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">NEVER GIVE UP!</div>
  <img src="https://c0.wallpaperflare.com/preview/516/126/529/book-read-student-students.jpg" style="width:100%">
  <div class="text">ALL THE BEST</div>
</div>

</div>
<hr>

<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 

</div>

<section class="aboutus" >
                <h4 class="footer-section-title"><u>About Us</u></h5>
                <section>
                    B.Vishnu vardhan<br>
                    K.Purushotham naidu<br>
                    D.Tarun<br>
                    Lakshmi narshimha redyy<br>
                    Kulwanth sai<br>
                    Hari Sarvothama rao<br>

                </section>
                <section class="subject">
                <h4 class="footer-section-title"><u>subjects</u></h5>

                  JAVA<br>
                    DBMS<br>
                    HTML<br>
                    PYTHON<br>
                    C-LANGUAGE<br>

                </section>

                </section>


                <section id="footer-copy-rights">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <p align="CENTER">©2023 JNTUACEP, All rights reserved.</p>
            </div>
        </div>
    </div>
</section>


<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>






    </body>
</html>



