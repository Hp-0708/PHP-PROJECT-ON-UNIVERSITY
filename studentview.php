<!DOCTYPE html>
<html>

<body>

    <?php
    $host = "localhost";

    $dbname = "auth-sys";

    $user = "root";

    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

    if ($conn == true) {
        echo "";
    } else {
        echo "connection is wrong: err";
    }

    $sql = "SELECT firstname, lastname, phone, email, city, course FROM student";
    $result = $conn->query($sql);

   /* if ($result->rowCount() > 0) {
        // output data of each row
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<br> id: " . $row["course_id"] . " Course Name: " . $row["course_name"] . " stream: " . $row["stream"] . " duration: " . $row["duration"] . " course type: " . $row["course_type"] . "<br>";
        }
    } else {
        echo "0 results";
    }
*/
    //$conn->close();
    ?>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>STUDENT DETAILS</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
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
 
<body>
    <section>
        <h3>COURSE TABLE</h3>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>PHONE</th>
                <th>EMAIL</th>
                <th>CITY</th>
                <th>COURSE</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch(PDO::FETCH_ASSOC))
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['firstname'];?></td>
                <td><?php echo $rows['lastname'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['city']?></td>
                <td><?php echo $rows['course'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>