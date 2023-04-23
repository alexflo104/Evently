<?php 
session_start();

include "connection.php";
include "functions.php";

$error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $password = $_POST['password'];

    if(!empty($admin_name) && !empty($admin_email) && !empty($password) && !is_numeric($admin_name)) {

        $query = "select * from admin where admin_name = '$admin_name' limit 1";
        $result = mysqLi_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $admin_data = mysqli_fetch_assoc($result);

                if ($admin_data['password'] === $password && $admin_data['admin_email'] === $admin_email) {
                    $_SESSION['admin_id'] = $admin_data['admin_id'];

                    header("Location: adminIndex.php");
                    die;
                }
            }
        }

    } else {
        $error = "please enter valid credentials";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Login-Signup Page</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header style = "position: fixed; width: 100%;display: flex;justify-content: space-between;align-items: center;padding: 10px 25px;top: 0;right: 0">
        <h1>Evently</h1>
        <a href = "login.php">User Login Page</a>
    </header>

    <main>
        <div class="flx-cont login">
			<h1> Admin Login</h1>
			<form method = "post">
				<input type="text" name="admin_name" placeholder="Your Name" class="form-input">
				<input type="email" name="admin_email" placeholder="Your Email" class="form-input">
				<input type="password" name="password" placeholder="Password" class="form-input">

                <p class="alert" style ="font-size: 15px;color: #fa4d4d;margin: 10px 0;text-align: center;">
                    <?php 
                        if (isset($error) && $error != "") {
                            echo $error;
                        }
                    ?>
                </p>
				<input type="submit" value="Login" class="sbmt-btn">
			</form>
		</div>
    </main>

</body>
</html>