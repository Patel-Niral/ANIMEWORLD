<?php
session_start();
// include 'dbconnect.php'; // Ensure your database connection is correctly included
include 'admindatabase.php';

if (isset($_POST['register'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];

    $chtab = "SELECT * FROM $user_table WHERE username = '$username' AND mobile='$mobile'";
    $chqus = mysqli_query($conn, $chtab);

    if (mysqli_num_rows($chqus) > 0) {
        // echo "User already exists!";
        header("Location: login.php");
    } else {
        $sql = "INSERT INTO $user_table (username, password, mobile) VALUES ('$username', '$password', '$mobile')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section class="left">
        <img src="b2.jpeg" alt="">
    </section>
    <section class="right">
        <div class="tagline">Unlock Exclusive Deals and Shop Smarter <br> Join Us Today!</div>
        <form action="register.php" method="post">
            <label for="username"><i class="fas fa-user"></i><input type="text" name="username" placeholder="Username" class="form-input"></label>
            <label for="mobile"><i class="fas fa-mobile"></i><input type="number" name="mobile" placeholder="Mobile" class="form-input"></label>
            <label for="password"><i class="fas fa-lock"></i><input type="password" name="password" placeholder="Password" class="form-input"></label>
            <div class="btn-primary rl">
                <button type="submit" name="register" class="btn btn-primary loginbtn">Register</button>
            </div>
        </form>
        <div class="newacc">
            <a href="login.php">Already have an account? Log in</a>
        </div>
    </section>
</body>
</html>
