<?php
session_start();

include "connection.php";
include "functions.php";

$user_data = check_login($con);

$error = "";

/*if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $request_name = $_POST['request_name'];
    $request_date = $_POST['request_date'];
    $user_desc = $_POST['user_desc'];

    if(!empty($request_name) && !empty($request_date) && !empty($user_desc) && !is_numeric($request_name)) {
        $request_id = random_num(20);
        $query = "insert into request (request_id,request_name,request_date,user_desc) values ('$request_id','$request_name','$request_date','$user_desc')"
            ;

        mysqli_query($con, $query);

    } else {
        $error = "please enter correct information";
    }
} */

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $request_name = $_POST['request_name'];
  $request_year = $_POST['request_year'];
  $request_month = $_POST['request_month'];
  $request_day = $_POST['request_day'];
  $request_desc = $_POST['request_desc'];

  if(!empty($request_name) && !empty($request_year) && !empty($request_month) && !empty($request_day) && !empty($request_desc) && !is_numeric($request_name)) {
      $request_id = random_num(20);
      $query = "insert into request1 (request_id,request_name,request_year,request_month,request_day,request_desc) values ('$request_id','$request_name','$request_year','$request_month','$request_day','$request_desc')"
          ;

      mysqli_query($con, $query);

  } else {
      $error = "please enter correct information";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width-device-width, initial-scale=1">
    <title>Home</title>

    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/demo.css"/>
    <link rel="stylesheet" href="css/theme3.css"/>

    <style type = "text/css">
        /* rgb(230,60,231) */
    </style>

</head>
<body>
    <h2>
      <div class ="topnav">
      <a class = "title">Evently</a>
        <a href="index.php">Home</a>
        <a class = "active">Request Access to Make Event</a>
        <a href="Contact1.php">Contact</a>
      </div>
    </h2>
</body>

<header style = "position: fixed; width: 100%;display: flex;justify-content: space-between;align-items: center;padding: 10px 25px;top: 0;right: 0">
    <h2></h2>
    <a href = "login.php">Logout <?php echo $user_data["user_name"] ?></a>
</header>

<body>
    <div>
      <form method = "post">
        <input type="submit" value="Request"> <br><br>
        <label for="event" style="font-size: 25px;">Event Name</label><br>
        <input type="text" name="request_name" id="event" name="firstname" placeholder= "Event name.."><br><br>
    
        <!--<label for="date" style="font-size: 25px;">Date</label><br>
        <input type="date" name="request_date" id="date" name="lastname" placeholder= "MM/DD/YYYY"><br><br>-->

        <label for="date" style="font-size: 25px;">Date</label><br>
        <input type="text" name="request_year" id="date" name="lastname" placeholder= "year">

        <input type="text" name="request_month" id="date" name="lastname" placeholder= "month">

        <input type="text" name="request_day" id="date" name="lastname" placeholder= "day"><br><br>
    
        <label for="Description" style="font-size: 25px;">Description</label><br>
        <textarea type="desc" name="request_desc" id="desc" name="Description" placeholder= "Description.."></textarea><br><br>
        </select>
        <p class="alert" style ="font-size: 15px;color: #fa4d4d;margin: 10px 0;text-align: center;">
          <?php 
            if (isset($error) && $error != "") {
              echo $error;
            }
          ?>
        </p>
      </form>
    </div>
</body>
</html>