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
        <h1>Courses</h1>

    </section>
    <!--------- Courses --------->
    <section class="Courses">
        <h1>Courses We Offer</h1>
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

    <section>
       <?php include "output.php"; ?>
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