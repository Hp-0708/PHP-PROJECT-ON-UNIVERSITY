<!DOCTYPE html>
<html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "auth-sys";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die ("Could not connect to database: " .mysqli_connect_error());
} else {
  echo "Connection successful";
}

if (isset($_POST["submit"])){
    if($_POST['first_name'] == '' and $_POST['last_name'] == '' and $_POST['mobile_no'] == '' and $_POST['email_id'] == ''
    and $_POST['city'] == ''){
      echo "Please enter";
    } else {
    
    
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $emailid = $_POST['email_id'];
        $mobileno = $_POST['mobile_no'];
        $city = $_POST['city'];
    }

}
?>
<?php

$sql = "INSERT INTO students (first_name, last_name, mobile_no, email_id, city) VALUES (:first_name, :last_name, :email_id :mobile_no, :city)";


?>







<html>
<title>Simple Sign up form</title>

<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <style>
    html,
    body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
    }

    form {
      border: 5px solid #f1f1f1;
    }

    input[type=text]
    input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
    }

    button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
    }

    h1 {
      text-align: center;
      font-size: 18;
    }

    button:hover {
      opacity: 0.8;
    }

    .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
    }

    .container {
      padding: 16px 0;
      text-align: left;
    }

    span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
    }
  </style>
</head>

<body>
  <form action="student.php">
    <h1>Add Student</h1>

    </div>
    <div class="formcontainer">

      <div class="container">
        <label for="uname"><strong>First Name</strong></label>
        <input type="text" placeholder=" First name" name="first_name" required>

        <label for="mail"><strong>Last Name</strong></label>
        <input type="text" placeholder="Last namel" name="last_name" required>

        <label for="email"><strong>Email ID</strong></label>
        <input type="text" placeholder="email" name="email_id" required>

        <label for="Mobile No"><strong>Mobile Number</strong></label>
        <input type="text" placeholder="Enter number" name="mobile_no" required>

        <label for="city"><strong>City</strong></label>
        <input type="text" placeholder="City" name="city" required>



      </div>

      <button type="btnSubmit"><strong>submit</strong></button>
      <div class="container" style="background-color: #eee">


        </label>

      </div>
  </form>
</body>

</html>
</html>