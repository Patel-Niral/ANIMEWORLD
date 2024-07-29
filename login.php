<?php
session_start();
// include 'dbconnect.php'; // Ensure your database connection is correctly included
include 'admindatabase.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <form action="login.php" method="post">
            <label for="username"><i class="fas fa-user"></i><input type="text" name="username" placeholder="Username" class="form-input"></label>
            <label for="mobile"><i class="fas fa-mobile"></i><input type="number" name="mobile" placeholder="Mobile" class="form-input"></label>
            <label for="password"><i class="fas fa-lock"></i><input type="password" name="password" placeholder="Password" class="form-input"></label>
            <div class="btn-primary rl">
                <button type="submit" name="login" class="btn btn-primary loginbtn">Login</button>
            </div>
        </form>
        <div class="newacc">
            <a href="register.php">Create Account</a>
        </div>
        <?php
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
    </section>

</body>

</html>