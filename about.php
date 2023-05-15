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

        <section class="sub-header">
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
            <h1>About Us</h1>

        </section>

        <section class="about-us">
            <div class="row">
                <div class="about-col">
                    <h1>We Are One Of the Leading Technical Institution</h1>
                    <p>
                        Ganpat University and the township of Ganpat Vidyanagar, a high-tech education campus is a joint initiative, purely philanthropic in nature, 
                        by a large number of industrialists and technocrats, noble farmers and affluent businessmen for the mission of Social Upliftment through Education. 
                        The University is established by the State Government by the enactment of Act No.19/2005 on 12th April 2005.                    </p>
                    <a href="" class="hero-btn red-btn">EXPLORE NOW</a>

                </div>
                <div class="about-col">
                    <img src="images/about.jpg">
                </div>

            </div>
            
              

        </section>
        

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
            function showmenu(){
                navLinks.style.right = "0";
            }
            function hidemenu(){
                navLinks.style.right = "-200px";
            }
        </script>


    </body>
</html>