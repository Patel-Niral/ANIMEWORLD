<?php
// session_start();    
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
$dbname = "animeworld";

//create if db doesn't exists 
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
// $conn->select_db($dbname);
$conn = new mysqli($servername, $username, $password, $dbname);

$user_table = "user_details";

$create = "CREATE TABLE IF NOT EXISTS user_details (
id int(255) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100),
mobile int(10),
password VARCHAR(20)
)";
$tbque = mysqli_query($conn, $create);

if ($tbque) {
    // echo "<br>Table created";
}

// Create Anime table
$table = "anime";
$sql = "CREATE TABLE IF NOT EXISTS $table (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        genre VARCHAR(255) NOT NULL,
        language VARCHAR(255) NOT NULL,
        subtitle VARCHAR(255) NOT NULL,
        description TEXT NOT NULL,
        cover VARCHAR(255) NOT NULL,
        banner VARCHAR(255) NOT NULL
    )";
$taque = mysqli_query($conn, $sql);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//     if (isset($_POST['ADD'])) {
//     // Debugging: print the contents of $_FILES
//     // echo "<pre>";
//     // print_r($_FILES);
//     // echo "</pre>";

//     // File upload paths
//     $coverDir = "cover/";
//     $bannerDir = "banner/";

//     $title = $_POST['title'];
//     $genre = $_POST['genre'];
//     $languages = $_POST['languages'];
//     $subtitle = $_POST['subtitle'];
//     $description = $_POST['description'];
//     // Create directories if they don't exist
//     if (!is_dir($coverDir)) {
//         mkdir($coverDir, 0777, true);
//     }
//     if (!is_dir($bannerDir)) {
//         mkdir($bannerDir, 0777, true);
//     }

//     if (isset($_FILES["cover"]) && isset($_FILES["banner"])) {
//         $coverFile = $_FILES["cover"]["name"];
//         $bannerFile = $_FILES["banner"]["name"];
//         $coverfolder = $coverDir . $coverFile;
//         $bannerfolder = $bannerDir . $bannerFile;
//         // Move uploaded files to respective directories
//         $coverUpload = move_uploaded_file($_FILES["cover"]["tmp_name"], $coverfolder);
//         $bannerUpload = move_uploaded_file($_FILES["banner"]["tmp_name"], $bannerfolder);

//         if ($coverUpload && $bannerUpload) {
//             // Prepare and bind
//             // $stmt = $conn->prepare("INSERT INTO anime (title, genre, languages, subtitle, description, cover, banner, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
//             // $stmt->bind_param("ssssssss", $title, $genre, $languages, $subtitle, $description, $coverFile, $bannerFile, $bannerFile);
//             $ins = "INSERT INTO `$table` (`id`, `title`, `genre`, `language`, `subtitle`, `description`, `cover`, `banner`) VALUES (NULL,'$title', '$genre', '$languages', '$subtitle', '$description', '$coverFile', '$bannerFile')";
//             $inque = mysqli_query($conn, $ins);
//             // Set parameters and execute

//             if ($inque) {
//                 // echo "New record created successfully";
//                 header("Location: admindashboard.php");
//             } else {
//                 echo "Error: " . $stmt->error;
//             }

//             // $stmt->close();
//         } else {
//             echo "Sorry, there was an error uploading your files.";
//         }
//     } else {
//         echo "File inputs are not set.";
//     }

//     // $conn->close();
// }

// --------------------------------------------------------------------------------------------------------------------------------
// );                                              season
// --------------------------------------------------------------------------------------------------------------------------------


$season = "season";
$sesql = "CREATE TABLE IF NOT EXISTS $season (
    id INT PRIMARY KEY AUTO_INCREMENT,
    anime_id INT,
    season_number INT,
    season_coverimage VARCHAR(255) NOT NULL,
    FOREIGN KEY (anime_id) REFERENCES $table(id)
)";
$seque = mysqli_query($conn, $sesql);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// --------------------------------------------------------------------------------------------------------------------------------
// );                                              episode
// --------------------------------------------------------------------------------------------------------------------------------

$episode = "episode";
$esql = "CREATE TABLE IF NOT EXISTS $episode (
id INT PRIMARY KEY AUTO_INCREMENT,
 episode_number INT NOT NULL,
    episode_title VARCHAR(255) NOT NULL,
    episode_description TEXT NOT NULL,
    episode_video VARCHAR(255) NOT NULL,
    season_id INT,
    FOREIGN KEY (season_id) REFERENCES Season(id)
    )";
$equ = mysqli_query($conn, $esql);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
