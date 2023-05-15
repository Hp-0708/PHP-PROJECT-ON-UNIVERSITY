<!DOCTYPE html>
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
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showmenu"></i>

            </nav>
            <h1>Welcome To Admin Login</h1>

        </section>

        <section class="about-us">
            <div class="row">
                <div class="about-col">
                <form action="" method="post" name="Login_Form">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
      <?php if(isset($msg)){?>
      <tr>
        <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
      </tr>
      <?php } ?>
      <tr>
        <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
      </tr>
      <tr>
        <td align="right" valign="top">Username</td>
        <td><input name="Username" type="text" class="Input"></td>
      </tr>
      <tr>
        <td align="right">Password</td>
        <td><input name="Password" type="password" class="Input"></td>
      </tr>
      <tr>
        <td> </td>
        <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
      </tr>
    </table>
  </form>

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

<html>

    <?php session_start(); /* Starts the session */
        
        /* Check Login form submitted */        
        if(isset($_POST['Submit'])){
                /* Define username and associated password array */
                $logins = array('hitarth' => 'hitarth07','username1' => 'password1','username2' => 'password2');
                
                /* Check and assign submitted Username and Password to new variable */
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                
                /* Check Username and Password existence in defined array */            
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                        /* Success: Set session variables and redirect to Protected page  */
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:adminpanel.php");
                        exit;
                } else {
                        /*Unsuccessful attempt: Set error message */
                        $msg="<span style='color:red'>Invalid Login Details</span>";
                }
        }
?>
<head>
<style>
        Table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h3 {
            
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
        tr {
            font-weight: bold;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>

</html>