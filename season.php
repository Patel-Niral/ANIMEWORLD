<!DOCTYPE html>
<html lang="en">
<?php
include 'admindatabase.php';
$anime_id = $_GET['id'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            margin-top: 20px;
        }

        form {
            background-color: #fff;
            padding: 3vmax;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            width: 300px;
            font-size: 2rem;
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="file"],
        form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        form input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        table th,
        table td {
            padding: 12px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        table a {
            color: #3498db;
            text-decoration: none;
        }

        table a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Form for adding a season -->
    <form action="season.php?id=<?php echo $anime_id ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="anime_id" value="<?php echo htmlspecialchars($anime_id); ?>">
        <label for="season_number">Season Number</label>
        <input type="text" id="season_number" name="season_number" required>
        <label for="scover">Season cover image</label>
        <input type="file" id="season_cover" name="scover" required>
        <input type="submit" value="Submit" name="addseason">
    </form>

    <?php
    if (isset($_POST['addseason'])) {
        $anime_id = $_POST['anime_id'];
        $season_num = $_POST['season_number'];
        $scoverDir = "scover/";

        if (!is_dir($scoverDir)) {
            mkdir($scoverDir, 0777, true);
        }

        if (isset($_FILES["scover"])) {
            $scoverFile = $_FILES["scover"]["name"];
            $scoverfolder = $scoverDir . $scoverFile;
            $scoverUpload = move_uploaded_file($_FILES["scover"]["tmp_name"], $scoverfolder);

            if ($scoverUpload) {
                $seins = "INSERT INTO `season` (`anime_id`, `season_number`, `season_coverimage`) VALUES ('$anime_id', '$season_num', '$scoverFile')";
                $seres = mysqli_query($conn, $seins);

                if ($seres) {
                    header("Location: season.php?id=$anime_id");
                    // exit();
                } else {
                    echo "Error adding season: " . mysqli_error($conn);
                }
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "No file uploaded.";
        }
    } else {
        echo "Form not submitted.";
    }
    ?>

    <table>
        <tr>
            <td>Season Number</td>
            <td>Anime</td>
            <td>Season Cover</td>
            <td>Episodes</td>
            <td>Delete</td>
        </tr>
        <?php
        $sql = "SELECT season.id, season.season_number,season.season_coverimage, anime.title as anime_name 
                FROM season 
                JOIN anime ON season.anime_id = anime.id 
                WHERE anime_id = $anime_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($fetch = mysqli_fetch_assoc($result)) {
                $sid = $fetch['id'];
        ?>
                <tr>
                    <td>Season <?php echo htmlspecialchars($fetch['season_number']); ?></td>
                    <td><?php echo htmlspecialchars($fetch['anime_name']); ?></td>
                    <td><?php echo htmlspecialchars($fetch['season_coverimage']); ?></td>
                    <td><a href="episode.php?id=<?php echo htmlspecialchars($sid); ?>">episode</a></td>
                    <td>Delete</td>
                </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='4'>No seasons found</td></tr>";
        }
        ?>
    </table>



</body>

</html>