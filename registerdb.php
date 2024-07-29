<?php
// include 'dbconnect.php';
include 'admindatabase.php';
    
// $server = "localhost";
// $user = "root";
// $password = "";
// $connect = mysqli_connect($server, $user, $password);

$table = "user_details";


if (isset($_POST['register'])) {
    // include 'db.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];



    $chtab = "SELECT * FROM  $table WHERE username = '$username' AND mobile = '$mobile' AND password = '$password'";
    $chqus = mysqli_query($connect, $chtab);

    $fetch = mysqli_fetch_assoc($chqus);

    if ($fetch) {
        if ($fetch['username'] == $username && $fetch['mobile'] == $mobile && $fetch['password'] == $password) {

            header('location:login.php');
        }
    } else {
        $sql = "INSERT INTO `$table` (`username`, `password`, `mobile`) VALUES ('$username', '$password', '$mobile')";
        $result = mysqli_query($connect, $sql);
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['mobile'] = $_POST['mobile'];
        header('location:login.php');
    }
}

// echo " username is ${username} <br><br> password is ${password} <br><br> mobile is ${mobile}";

// header('location:index.php');
?>