<?php 

$host = "localhost";

$dbname = "auth-sys";

$user = "root";

$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);
//$conn = mysqli_connect("localhost", "root", "", "auth-sys");

if($conn == true) {
    echo "";
} else{
    echo "connection is wrong: err";
}



?>
