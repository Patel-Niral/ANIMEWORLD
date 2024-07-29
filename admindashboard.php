<?php
// include 'admindatabase.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - Anime Watch</title>
    <link rel="stylesheet" href="adminpage.css">
    <style> </style>
</head>

<body>

    <div class="container">
        <header>
            <h1>Admin Dashboard</h1>
            <nav>
                <ul>
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li><a href="#add-anime">Add Anime</a></li>
                    <li><a href="#manage-anime">Manage Anime</a></li>
                </ul>
            </nav>
        </header>

        <section id="dashboard">
            <h2>Dashboard</h2>
            <p>Welcome to the admin dashboard. Here you can manage all anime content.</p>
        </section>

        <section id="add-anime">
            <h2>Add Anime</h2>
            <form action="admindashboard.php" method="POST" enctype="multipart/form-data">
                <!-- image -->
                <label for="image">Image URL:</label>
                <input type="file" id="image" name="cover" required>
                <label for="image">Image banner</label>
                <input type="file" id="image" name="banner">
                <!-- title -->
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
                <!-- genre -->
                <label for="genre">genre</label>
                <input type="text " id="genre" name="genre" required>
                <!-- languages -->
                <label for="languages">languages</label>
                <input type="text " id="languages" name="languages" required>
                <!-- subtitle -->
                <label for="subtitle">subtitle</label>
                <input type="text " id="subtitle" name="subtitle" required>
                <!-- description -->
                <label for="description">Description:</label>
                <input id="description" name="description" required></i>

                <!-- <input type="button" value="ADD ANIME" name="ADD"> -->
                <button type="submit" name="ADD">Add Anime</button>

            </form>
        </section>
    </div>
    <?php
    include 'admindatabase.php';

    if (isset($_POST['ADD'])) {
        // Debugging: print the contents of $_FILES
        // echo "<pre>";
        // print_r($_FILES);
        // echo "</pre>";
    
        // File upload paths
        $coverDir = "cover/";
        $bannerDir = "banner/";
        
        $title = $_POST['title'];
        $genre = $_POST['genre'];
        $languages = $_POST['languages'];
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        // Create directories if they don't exist
        if (!is_dir($coverDir)) {
            mkdir($coverDir, 0777, true);
        }
        if (!is_dir($bannerDir)) {
            mkdir($bannerDir, 0777, true);
        }
    
        if (isset($_FILES["cover"]) && isset($_FILES["banner"])) {
            $coverFile = $_FILES["cover"]["name"];
            $bannerFile = $_FILES["banner"]["name"];
            $coverfolder = $coverDir . $coverFile;
            $bannerfolder = $bannerDir . $bannerFile;
            // Move uploaded files to respective directories
            $coverUpload = move_uploaded_file($_FILES["cover"]["tmp_name"], $coverfolder);
            $bannerUpload = move_uploaded_file($_FILES["banner"]["tmp_name"], $bannerfolder);
            
            if ($coverUpload && $bannerUpload) {
                // Prepare and bind
                // $stmt = $conn->prepare("INSERT INTO anime (title, genre, languages, subtitle, description, cover, banner, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                // $stmt->bind_param("ssssssss", $title, $genre, $languages, $subtitle, $description, $coverFile, $bannerFile, $bannerFile);
                $ins = "INSERT INTO `$table` (`id`, `title`, `genre`, `language`, `subtitle`, `description`, `cover`, `banner`) VALUES (NULL,'$title', '$genre', '$languages', '$subtitle', '$description', '$coverFile', '$bannerFile')";
                $inque = mysqli_query($conn, $ins);
                // Set parameters and execute
    
                if ($inque) {
                    // echo "New record created successfully";
                    header("Location: admindashboard.php");
                } else {
                    echo "Error: ";
                }
    
                // $stmt->close();
            } else {
                echo "Sorry, there was an error uploading your files.";
            }
        } else {
            echo "File inputs are not set.";
        }
    
        // $conn->close();
    }
    ?>
    </section>

    <?php
    //$imagres = mysqli_query($connect, "select * from $table");
    //  while ($row = mysqli_fetch_assoc($imagres)) {
    ?>
    <img src="coverimage/<?php //echo $row['image'] 
                            ?>" alt="">
   
    </div>
    <section id="manage-anime">
        <h2>Manage Anime</h2>
        <?php
    //}
    ?>
    <div class="cardeck">
    <?php
    include 'admindatabase.php';
    $sql = "SELECT * FROM $table"; // Assuming you want the most recent image
    $result = $conn->query($sql);

    // Output data of each row
    while ($fetch = mysqli_fetch_assoc($result)) {
        if ($result->num_rows > 0) {
            $coverimagePath = 'cover/' . $fetch['cover'];
            $anime_id = $fetch['id'];
            $anime_name = $fetch['title'];
            // echo "<img src='$imagePath' alt='Uploaded Image'>";
    ?>
                <a href="season.php?id=<?php echo $fetch['id'] ?>">

                <div class="item_card">
                    <div class="anime_img"><img src="<?php echo $coverimagePath ?>" alt=""></div>
                    <div class="anime_name"><?php echo $fetch['title'] ?></div>
                </div>
                </a>
                <?php
        } else {
            echo "No images found";
        }
    }
    ?>   

    </section>
    </div>

    <script src="adminpage.js"></script>
</body>

</html>