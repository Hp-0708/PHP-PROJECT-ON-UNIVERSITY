<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Eduford Website</title>
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
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showmenu"></i>

            </nav>
            <h1>Newsletter</h1>

        </section>
        <!--------- newsletter --------->

        <section class="blog-content">
            <div class="row">
                <div class="blog-left">
                    <img src="images/certificate.jpg">
                    <h2>Our Certificate & Online Programs for 2023 summer</h2>
                    <p>GUNI-SSRIP will provide an opportunity for UG (final year) and PG students to explore their area of study from the research perspective.
                         The scheme will be open to the students studying at Ganpat University or elsewhere and are interested in hands-on mentored research experience during the summer months (between May – July, 2023).
                          The duration of the program will be 4 – 8 weeks at Ganpat University.
                    </p>
                    <br>
                    <p>
                        GUNI-SSRIP Summer Internship Program will also provide competitive funding that supports UG / PG research to work on cutting edge multidisciplinary research projects. 
                        Research work may involve field work or laboratory research. 
                        Internships are offered for research projects working under the guidance of a faculty adviser on campus, external subject experts, or with non-profit organizations off-campus.
                    </p>
                    <br>
                    <p>
                        This will also help students to consolidate the insights and understanding of the concepts gained from classroom learning. 
                        Students will be exposed to different types of research projects that are being pursued by the faculty members at the Ganpat University.
                        A brief proposal of the summer project is jointly developed by the student and faculty adviser. The projects will be evaluated by an expert committee. 
                        Part of the criteria for selection involves a brief written proposal for a summer project of academic merit as well as a faculty mentor who endorses the proposal
                    </p>
                </div>
                <div class="blog-right"></div>
            </div> 



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