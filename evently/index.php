<?php
session_start();

include "connection.php";
include "functions.php";

$user_data = check_login($con);

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

    <style type = "text/css"></style>

</head>
<body>
    <h2>
      <div class ="topnav">
        <a class = "title">Evently</a>
        <a class ="active">Home</a>
        <a href ="RequestAccess.php">Request Access to Make Event</a>
        <a href ="Contact1.php">Contact</a>
      </div>
    </h2>
</body>

<header style = "position: fixed; width: 100%;display: flex;justify-content: space-between;align-items: center;padding: 10px 25px;top: 0;right: 0">
    <h2></h2>
    <a href = "login.php">Logout <?php echo $user_data["user_name"] ?></a>
</header>

<main>
    <h1>UHCL Calendar </h1>
</main>

<body>
    <div id="caleandar">
    </div>
    <script type="text/javascript" src="js/calendar.js"></script>
    <script type="text/javascript" src="js/demo.js"></script>
</body>
</html>