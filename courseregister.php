<?php require "config.php" ?>

<?php
echo "";
if (isset($_POST["btnSubmit"])) {
  if (


    $_POST['course_id'] == '' and $_POST['course_name'] == '' and $_POST['stream'] == '' and $_POST['duration'] == ''
    and $_POST['course_type'] == ''
  ) {
    echo "some inputs are empty";
  } else {


    $courseid = $_POST['course_id'];
    $coursename = $_POST['course_name'];
    $stream = $_POST['stream'];
    $duration = $_POST['duration'];
    $coursetype = $_POST['course_type'];

    //echo $coursename,$stream,$duration,$coursetype; 

    $insert = $conn->prepare("INSERT INTO course(course_id, course_name, stream, duration, course_type)
          VALUES(:course_id, :course_name, :stream, :duration, :course_type)");

    //$insert = $conn->prepare("INSERT INTO data(dname) values(:dname)");


    $insert->execute(array(
      ':course_id' => $courseid,
      ':course_name' => $coursename,
      ':stream' => $stream,
      ':duration' => $duration,
      ':course_type' => $coursetype,
    ));
    //$insert->execute(array(
    //':dname' => $coursename,

    //));

  }
}


?>





<!DOCTYPE html>
<html>
<title>Simple Sign up from</title>

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

    input[type=text] {
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
  <form method="POST" action="courseregister.php">
    <h1>Add Course</h1>

    </div>
    <div class="formcontainer">

      <div class="container">
        <label for="course_id"><strong>Course ID</strong></label>
        <input type="text" placeholder="COURSE ID" name="course_id" required>

        <label for="course_name"><strong>course name</strong></label>
        <input type="text" placeholder="COURSE NAME" name="course_name" required>

        <label for="stream"><strong>stream</strong></label>
        <input type="text" placeholder="stream" name="stream" required>

        <label for="duration"><strong>duration</strong></label>
        <input type="text" placeholder="duration" name="duration" required>

        <label for="course_type"><strong>course type</strong></label>
        <input type="text" placeholder="course type" name="course_type" required>



      </div>

      <button type="submit" name="btnSubmit"><strong>submit</strong></button>
      <div class="container" style="background-color: #eee">


        </label>

      </div>
  </form>
</body>

</html>