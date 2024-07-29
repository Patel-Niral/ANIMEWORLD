<?php
// include 'dbconnect.php';
include 'admindatabase.php';


// $_SESSION['username'];
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: register.php");
    exit();
}
// echo $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ---------------navbar--------------------------- -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link href="./styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="components/snavbar.css">   
    <!-- ----x-------x----navbar-------x-----------x--------- -->
    <link rel="stylesheet" media="screen and (min-width:475px)" href="largescreen.css">
    <!-- <link rel="stylesheet" media="screen and (min-width:400px)" href="smallscreen.css"> -->
</head>

<body>
    <!-- ------------------------------------------------navbar------------------------------------------------- -->
     <div>
    <?php  include 'components/navbar2.php'; ?>

    <script href="components/main.js"></script>
    </div>
    <!-- ----------x--------------x--------------------navbar------------x--------------------x----------------- -->
    <div class="herosection">

        <div class="herosection_content">
            watch your favorate <span class="htitle">anime</span> any time any where!
        </div>
        <div class="herosection_img"><img src="images/landing_img01.jpg" alt=""></div>
    </div>
    <hr>
    <div class="section">
        <div class="section_title">Action</div>
        <?php include 'components/actiongenre.php'; ?>
        <hr>
    </div>
    <div class="section">
        <div class="section_title">Sports</div>
        <?php include 'components/sportsgenre.php'; ?>
        <hr>
    </div>


    <!-- ------------------------------------------------aboutus------------------------------------------------- -->

    <div id="aboutus">
        <div class="aboutus">about us</div>
        <div class="abtus">
            <b>Welcome to our anime watching website!</b> We are dedicated to providing anime enthusiasts
            with a premium streaming experience, offering a vast library of the latest and greatest anime titles
            from around the world. Whether you're a seasoned otaku or just discovering the world of anime, our
            platform is designed to cater to your every need.
        </div>
        <div class="abtus">
            <b>At our website</b>, we pride ourselves on offering a diverse selection of anime genres, from
            action-packed shonen adventures to heartwarming slice-of-life stories and everything in between. With
            curated collections, personalized recommendations, and user-friendly navigation, finding your next
            favorite anime has never been easier. Our intuitive interface allows you to browse by genre, popularity,
            release date, and more, ensuring that you always have access to the anime content that interests you
            most.
        </div>
        <div class="abtus">
            <b>Join our community of passionate anime fans</b> and embark on a journey through the
            captivating worlds of anime! Whether you're binge-watching your favorite series, discovering hidden
            gems, or engaging in lively discussions with fellow fans, our website is your ultimate destination for
            all things anime. With high-quality streaming, exclusive content, and a commitment to customer
            satisfaction, we invite you to explore, discover, and indulge in the wonderful world of anime with us.
        </div>
    </div>
    <!-- --------------x--------------x--------------------aboutus------------x--------------------x----------------- -->

</body>

</html>