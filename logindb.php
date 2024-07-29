<?php

// include 'dbconnect.php';
include 'admindatabase.php';



// $database = "animedatabase_demo";
// $table = "user_details";

// $conn = mysqli_connect($server, $user, $password, $database);

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    // $_SESSION['username'] = $_POST['username'];
    // $_SESSION['mobile'] = $_POST['mobile'];

    $chtab = "SELECT * FROM  $user_table WHERE username = '$username' AND mobile = '$mobile' AND password = '$password'";
    $chqus = mysqli_query($conn, $chtab);
    // $row = mysqli_fetch_row($chqus);
    if(mysqli_num_rows($chqus) == 1) {
        $fetch = mysqli_fetch_assoc($chqus);
        $_SESSION['username'] = $fetch['username'];
        $_SESSION['mobile'] = $fetch['mobile'];
        header('location:index.php');
        exit;
    } else {
        echo "<script>alert('Account does not exist. Please register.'); window.location.href='register.php';</script>";        // echo '<a href="register.php">Register</a>';
        // header('location:register.php');
    }
    }
?>
