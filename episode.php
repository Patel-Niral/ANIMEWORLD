<!DOCTYPE html>
<html lang="en">
<?php
include 'admindatabase.php';

// if (!$season_id == $_GET['id']) {
//     die("Season ID is not specified.");
// }

$season_id = $_GET['id'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>/* styles.css */

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    color: #333;
}

h1, h2 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

form {
    background-color: #fff;
    padding: 20px 30px;
    margin: 20px 0;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

form label {
    display: block;
    margin-bottom: 10px;
    font-weight: 600;
    color: #555;
}

form input[type="text"], form input[type="file"], form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
}

form input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}

.message {
    margin: 20px 0;
    padding: 15px;
    border-radius: 5px;
    background-color: #e7f3fe;
    color: #31708f;
    border: 1px solid #bce8f1;
    width: 100%;
    max-width: 500px;
    text-align: center;
}

table {
    width: 100%;
    max-width: 800px;
    margin: 20px 0;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

table th, table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: #f2f2f2;
    font-weight: 600;
}

table tr:hover {
    background-color: #f9f9f9;
}
 </style>
</head>

<body>
    <h2>Add Episode</h2>
    <form action="episode.php?id=<?php echo $season_id ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="season_id" value="<?php echo htmlspecialchars($season_id); ?>">
        <label for="episode_number">Episode Number</label>
        <input type="text" id="episode_number" name="episode_number" required>
        <label for="episode_title">Episode Title</label>
        <input type="text" id="episode_title" name="episode_title" required>
        <label for="episode_description">Episode Description</label>
        <textarea id="episode_description" name="episode_description" required></textarea>
        <label for="episode_video">Episode Video URL</label>
        <input type="file" id="episode_video" name="episode_video" required>
        <input type="submit" value="Submit" name="addepisode">
    </form>

    <?php
    if (isset($_POST['addepisode'])) {
        $season_id = $_POST['season_id'];
        $episode_number = $_POST['episode_number'];
        $episode_title = $_POST['episode_title'];
        $episode_description = $_POST['episode_description'];
        // $episode_video = $_POST['episode_video'];
        $episode_file = $_FILES['episode_video']['name'];
            $episode_file_tmp = $_FILES['episode_video']['tmp_name'];
            $episode_file_size = $_FILES['episode_video']['size'];
            $episode_file_error = $_FILES['episode_video']['error'];

            //create episode folder
            $episodeDir = "episode/";
            if (!is_dir($episodeDir)) {
                mkdir($episodeDir, 0777, true);
            }

            $folder = $episodeDir. $episode_file;
            if (move_uploaded_file($episode_file_tmp, $folder)) {
        $epins = "INSERT INTO `$episode` (`episode_number`, `episode_title`, `episode_description`, `episode_video`,`season_id`) 
                  VALUES ('$episode_number', '$episode_title', '$episode_description', '$episode_file','$season_id')";
        $epres = mysqli_query($conn, $epins);

        if ($epres) {
            // echo "Episode added successfully.";
            header("Location: episode.php?id=$season_id");
        } else {
            echo "Error adding episode: " . mysqli_error($conn);
        }
    }
    }
    ?>
     <h2>Episodes</h2>
    <table>
        <tr>
            <th>Episode Number</th>
            <th>Title</th>
            <th>Description</th>
            <th>Video</th>
        </tr>
        <?php
        $sql = "SELECT * FROM episode WHERE season_id = '$season_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($fetch = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo htmlspecialchars($fetch['episode_number']); ?></td>
                    <td><?php echo htmlspecialchars($fetch['episode_title']); ?></td>
                    <td><?php echo htmlspecialchars($fetch['episode_description']); ?></td>
                    <td><?php echo htmlspecialchars($fetch['episode_video']); ?></td>
                </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='4'>No episodes found</td></tr>";
        }
        ?>
    </table>

</body>

</html>