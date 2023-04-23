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
        <a href ="adminUsers.php">Users</a>
        <a class ="active">Create</a>
        <a href ="adminContact2.php">Contact</a>
      </div>
    </h2>
</body>

<header style = "position: fixed; width: 100%;display: flex;justify-content: space-between;align-items: center;padding: 10px 25px;top: 0;right: 0">
    <h2></h2>
    <a href = "login.php">Logout <?php echo $admin_data["admin_name"] ?></a>
</header>

<!--<div>
      <form method ="post">
        <input type="submit" value="Submit"> <br><br>

        <label for="fname">Event Name</label><br>
        <input type="text" id="event" name="firstname" placeholder= "Your name.."><br><br>
    
        <label for="lname">Date</label><br>
        <input type="date" id="date" name="lastname" placeholder= "MM/DD/YYYY"><br><br>
    
        <label for="Description">Description</label><br>
        <input type="desc" id="desc" name="Description" placeholder= "Description.."><br><br>
        </select>
      </form>
    </div>-->
  <body>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    <ul id="myUL">
        <?php $sql = "SELECT * FROM request1";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo 
            /*"<li><a href = ''>", $row["id"] - 1, "Event Name: ", $row["request_name"], "     Event Date: ", $row["request_year"], "-", $row["request_month"], "-", $row["request_day"], "   Event Desc: ", $row["request_desc"], "<br>",
            "Javascript event insert <br>{'Date': new Date(", $row["request_year"], ", ", $row["request_month"] - 1, ", ", $row["request_day"], "), 'Title': '", $row["request_name"], "', 'Link': ''} </a></li>",*/
            "<li><a class='modal-button' href='#myModal", $row["id"], "'>", $row["request_name"], "</a>",
            "<div id='myModal", $row["id"], "' class='modal'>",
            "    <div class='modal-body' style = 'font-size: 30px;'>",
            "        <span class='close'>X</span>",
            "        <p>Event Name: ", $row["request_name"], "</p>",
            "        <p>Event Date: ", $row["request_year"], " - ", $row["request_month"], " - ", $row["request_day"], "</p>",
            "        <p>Event Description: ", $row["request_desc"], "</p><br>",
            "        <p>Javascript event insert <br>{'Date': new Date(", $row["request_year"], ", ", $row["request_month"] - 1, ", ", $row["request_day"], "), 'Title': '", $row["request_name"], "', 'Link': ''} </a></li>", "</p><br>",
            "    </div>",
            "</div></a></li>";
        }
        } else {
        echo "0 results";
        }

        mysqli_close($con); ?>
        <script type="text/javascript" src="js/list.js"></script>
        <script type="text/javascript" src="js/demo.js"></script>
    </body>
</html>