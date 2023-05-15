<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>University Website</title>
    <link rel="stylesheet" href="stylehome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>

<body>

    <section class="header">
        <nav>
            <a href="index.php"><img src="Images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times-circle" onclick="hidemenu"></i>

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="indexlogin.php">Admin Login</a></li>
                    
                    
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu"></i>

        </nav>
        <div class="text-box">
            <h1>World's Best University</h1>
            <p>Welcome to the World of MySchool. This is the place where you can find your future at the
                right time and right place.<br>The Place where Student meet success.</p>
            <a href="about.php" class="hero-btn">About Us</a>

    </section>

    <section class="Courses">
        <h1>Courses WE Offer</h1>
        <p>Choose course which you want to enroll</p>
        <div class="row">
            <div class="Courses-col">
                <h3>Intermidiate</h3>
                <p>
                    Intermediate education is the part of the education which is in between School education and graduation.
                    As you finished our school education i.e 10th and we wish to study further then you can go for secondary education.
                    Secondary education consists of class 11th and 12th. It's the two-year period between your highschool and college.
                </p>
            </div>
            <div class="Courses-col">
                <h3>Degree</h3>
                <p>
                    Intermediate education is the part of the education which is in between School education and graduation.
                    As you finished our school education i.e 10th and we wish to study further then you can go for secondary education.
                    Secondary education consists of class 11th and 12th. It's the two-year period between your highschool and college.
                </p>
            </div>
            <div class="Courses-col">
                <h3>Master's</h3>
                <p>
                    Intermediate education is the part of the education which is in between School education and graduation.
                    As you finished our school education i.e 10th and we wish to study further then you can go for secondary education.
                    Secondary education consists of class 11th and 12th. It's the two-year period between your highschool and college.
                </p>
            </div>
        </div>


    </section>

    <section class="campus">
        <h1>Our Global Campus</h1>
        <p> Let's Make some amazing future here</p>
        <div class="row">
            <div class="campus-col">
                <img src="images/GUMAIN.webp" alt="">
                <div class="layer">
                    <h3>Main Campus</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/GUAHM.jpg" alt="">
                <div class="layer">
                    <h3>Ahmedabd Campus</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/Gandhinagar.jpg" alt="">
                <div class="layer">
                    <h3>Gandhinagar Campus</h3>
                </div>
            </div>
        </div>

    </section>


    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Great Facilities provide By our University</p>

        <div class="row">
            <div class="facilities-col">
                <img src="images/library.png">
                <h3> Welcome to the sea of Knowledge</h3>
                <p> This is digital a digital playground of knowledge</p>
            </div>
            <div class="facilities-col">
                <img src="images/basketball.png">
                <h3> Large play ground</h3>
                <p> where all students can chech their ability to be an ethlet</p>
            </div>
            <div class="facilities-col">
                <img src="images/cafeteria.png">
                <h3> Tasty and Healthy Food</h3>
                <p> where all students can take a sip of freshness</p>
            </div>
        </div>

    </section>

    <!----- testimonials --------->

    <section class="testimonial">
        <h1>What are student's voice</h1>
        <p>Let's here some feedback from our students</p>

        <div class="row">
            <div class="testimonial-col">
                <img src="images/user1.jpg">
                <div>
                    <p>
                        A great experience studying at Ganpat University, a memory to cherish for lifetime.
                        My experience at Ganpat was full of learning and grooming.
                        Being a global university It gave me an opportunity to meet different kind of people from around the world and learnt many things from them.
                        I am thankful to all the faculties, mentors and entire SET department for providing us with quality education.
                    </p>
                    <h3>Christine berley</h3>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>

            <div class="testimonial-col">
                <img src="images/user2.jpg">
                <div>
                    <p>
                        A great experience studying at Ganpat University, a memory to cherish for lifetime.
                        My experience at Ganpat was full of learning and grooming.
                        Being a global university It gave me an opportunity to meet different kind of people from around the world and learnt many things from them.
                        I am thankful to all the faculties, mentors and entire SET department for providing us with quality education.
                    </p>
                    <h3>David Bombal</h3>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
        </div>
    </section>

    <!--------- Call to Action --------->
    <section class="cta">
        <h1>Enroll for Our Various Courses <br> Anywhere
            in world </h1>
        <a href="about.php" class="hero-btn">ABOUT US</a>
    </section>

    <!--------- About Us Content ---------->




    <!--------- Footer --------->

    <section class="footer">
        <h4>About Us</h4>
        <p>
            Ganpat University offers various unique, quality, industry-linked and sector-focused
            Diploma,<br> Undergraduate, Postgraduate and Research level programs
            <br>(Professional and Non-professional)
        </p>
    </section>




    <script>
        var navLinks = document.getElementById("navLinks");

        function showmenu() {
            navLinks.style.right = "0";
        }

        function hidemenu() {
            navLinks.style.right = "-200px";
        }
    </script>


</body>

</html>