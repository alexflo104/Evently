<?php 
function check_login($con){
    
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";
        
        $result = mysqLi_query($con, $query);

        if ($result && mysqLi_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: login.php");
    die;
}

function check_adminlogin($con){
    
    if (isset($_SESSION['admin_id'])) {
        $id = $_SESSION['admin_id'];
        $query = "select * from admin where admin_id = '$id' limit 1";
        
        $result = mysqLi_query($con, $query);

        if ($result && mysqLi_num_rows($result) > 0) {
            $admin_data = mysqli_fetch_assoc($result);
            return $admin_data;
        }
    }
    header("Location: adminLogin.php");
    die;
}

function random_num($length) {
    $text = "";
    if ($length < 5) {
        $length = 5;
    }
    $len = rand(4, $length);
    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0, 9);
    }
    return $text;
}