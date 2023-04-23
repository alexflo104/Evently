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

    <style type = "text/css">
        /* rgb(230,60,231) */
    </style>

</head>
<body>
    <h2>
      <div class ="topnav">
        <a class = "title">Evently</a>
        <a href ="index.php">Home</a>
        <a href ="RequestAccess.php">Request Access to Make Event</a>
        <a class = "active">Contact</a>
      </div>
    </h2>
</body>

<header style = "position: fixed; width: 100%;display: flex;justify-content: space-between;align-items: center;padding: 10px 25px;top: 0;right: 0">
    <h2></h2>
    <a href = "login.php">Logout <?php echo $user_data["user_name"] ?></a>
</header>

<body>
    <h2 style = "font-size: 20px;">
        <div class="space"></div>
        <a>Name: Alexis Flores</a><br>
        <a>Student e-mail: <a href = "mailto:floresa0554@UHCL.edu">floresa0554@UHCL.edu</a></a>

        <div class="space"></div>

        <a>Name: Johnathon Torres</a><br>
        <a>Student e-mail: <a href = "mailto:torresj5595@UHCL.edu">torresj5595@UHCL.edu</a></a>

        <div class="space"></div>

        <a>Name: Rylan Turner</a><br>
        <a>Student e-mail: <a href = "mailto:turnerr4599@UHCL.edu">turnerr4599@UHCL.edu</a></a>

        <div class="space"></div>

        <a>Name: Ke Zhou</a><br>
        <a>Student e-mail: <a href = "mailto:zhouk4229@UHCL.edu">zhouk4229@UHCL.edu</a></a>
    </h2>
</body>
</html>