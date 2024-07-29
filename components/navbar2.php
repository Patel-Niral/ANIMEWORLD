<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar 1</title>
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="./styles.css" rel="stylesheet" /> -->
  <style>
    /* .body {
      background-color: purple;
    } */

    .logo {
      height: 2vmax;
      display: flex;
      place-items: center;
      place-content: center;
    }

    .logo img {
      height: 3.2vmax;
    }

    .profile {
      display: flex;
      place-content: center;
      place-items: center;
      gap: 2vmax;
    }

    .profile img {
      height: 3.6vmax;
      width: 3.6vmax;
      place-content: center;
      place-items: center;
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <nav class="navbar">
    <div class="navbar-overlay" onclick="toggleMenuOpen()"></div>

    <button type="button" class="navbar-burger" onclick="toggleMenuOpen()">
      <span class="material-icons">menu</span>
    </button>
    <div class="logo"><img src="images/logo2.png" alt=""></div>
    <nav class="navbar-menu">
        <div class="navlinks">
        <button type="button">home</button>
        <button type="button">categories</button>
        <button type="button">aboutsus</button>
        </div>

        <div class="profile">
          <img src="images/landing_img01.jpg" alt=""><?php echo $_SESSION['username'];
                                                      ?>
        </div>
      </nav>
  </nav>
  <script type="text/javascript" src="components/main.js"></script>
</body>

</html>