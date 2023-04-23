<?php
session_start();

include "connection.php";
include "functions.php";

$admin_data = check_adminlogin($con);

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
    <link rel="stylesheet" href="css/list.css"/>

    <style type = "text/css">
    </style>

</head>
<body>
    <h2>
      <div class ="topnav">
      <a class = "title">Evently</a>
        <a href ="adminIndex.php">Home</a>
        <a class ="active">Users</a>
        <a href ="adminCreate.php">Create</a>
        <a href ="adminContact2.php">Contact</a>
      </div>
    </h2>
</body>

<header style = "position: fixed; width: 100%;display: flex;justify-content: space-between;align-items: center;padding: 10px 25px;top: 0;right: 0">
    <h2></h2>
    <a href = "login.php">Logout <?php echo $admin_data["admin_name"] ?></a>
</header>

<body>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    <ul id="myUL">
        <?php $sql = "SELECT user_name FROM users";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "  <li><a href = #>", $row["user_name"], "</a></li>";
        }
        } else {
        echo "0 results";
        }

        mysqli_close($con); ?>
        <script type="text/javascript" src="js/list.js"></script>
</body>
</html>