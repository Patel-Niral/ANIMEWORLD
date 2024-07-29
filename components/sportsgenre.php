<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="largescreen.css"> -->
</head>
<!-- <style>
    .dashboard-section {
    padding: 20px;
}


.cardeck {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    /* overflow-x: scroll; */
    gap: 1.75vmax;
    margin: 1vmax auto;
    padding: 1.5vmax;
}

.cardeck a {
    text-decoration: none;
    list-style: none;
    color: beige;
}

.item_card {
    display: flex;
    flex-direction: column;
    flex-shrink: 0;
    gap: 1vmax;
    height: 21vmax;
    width: 14vmax;
    padding: 1.5vmax;
    font-weight: 600;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-transform: capitalize;
    border: 0.15vmax solid rgba(255, 255, 255, 0.844);
    border-radius: 1.5vmax;
}

.item_card:hover {
    box-shadow: 0 0 0.80vmin 0.25vmin #908e8e;
    transition: ease 400ms;
}

.anime_img img {
    height: 17vmax;
    width: 100%;
    border-radius: 1.25vmax;
    box-shadow: 0 0 5px 1.5px #121111;
    background-size: cover;
}

.anime_name {
    font-size: 1.25vmax;
}


</style> -->

<body>
    <?php
    include 'admindatabase.php';
    // Execute the query to select all anime with the genre 'sports'
    $query = "SELECT * FROM anime WHERE genre LIKE '%sports%'";
    $result = mysqli_query($conn, $query);
    ?> <div class="cardeck">
        <?php

                        // Check if the query execution was successful
                        if (!$result) {
                            die("Query failed: " . mysqli_error($conn));
                        }

                        // Check if there are any results
                        if ($result->num_rows > 0) {
                            // Loop through each row in the result set
                            while ($gfetch = mysqli_fetch_assoc($result)) {
                                // Prepare the data for each anime
                                $coverimagePath = 'cover/' . $gfetch['cover'];
                                $anime_id = $gfetch['id'];
                                $anime_name = $gfetch['title'];
                        ?>
                <!-- Output the HTML for each anime -->
                <a href="animeinfo.php?id=<?php echo htmlspecialchars($anime_id); ?>">
                    <div class="item_card">
                        <div class="anime_img">
                            <img src="<?php echo htmlspecialchars($coverimagePath); ?>" alt="">
                        </div>
                        <div class="anime_name"><?php echo htmlspecialchars($anime_name); ?></div>
                    </div>
                </a>
    </div>
<?php
                            }
                        } else {
                            echo "No anime found in the 'action' genre.";
                        }
?>

</body>

</html>