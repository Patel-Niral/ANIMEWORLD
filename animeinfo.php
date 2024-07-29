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
    <!-- <link rel="stylesheet" href="/animeinfo1.css"> -->
    <link rel="stylesheet" media="screen and (min-width:768px)" href="lanimeinfo.css">
    <link rel="stylesheet" media="screen and (max-width:768px)" href="sanimeinfo.css">
</head>

<body>
    <div class="herosection">
        <div class="animeinfo">
            <?php
            include 'admindatabase.php';
            $sql = "SELECT * FROM anime WHERE id= '$anime_id'"; // Assuming you want the most recent image
            $result = $conn->query($sql);

            // Output data of each row
            while ($fetch = mysqli_fetch_assoc($result)) {
                if ($result->num_rows > 0) {
                    $bannerimagePath = 'banner/' . $fetch['banner'];
                    $anime_id = $fetch['id'];
                    // echo "<img src='$imagePath' alt='Uploaded Image'>";
            ?>
                    <div class="animetitle"><?php echo htmlspecialchars($fetch['title']); ?></div>
                    <div class="genre gap">
                        <div class="animetitle-sub">genre :&nbsp;</div><?php echo htmlspecialchars($fetch['genre']); ?>
                    </div>
                    <!-- <div class="rating"><div class="animetitle-sub">rating </div> : IMBD 9.9</div> -->
                    <div class="languages gap">
                        <div class="animetitle-sub">languages :&nbsp;</div><?php echo htmlspecialchars($fetch['language']); ?>
                    </div>
                    <div class="subtitle gap">
                        <div class="animetitle-sub gap">Subtitle : &nbsp;</div><?php echo htmlspecialchars($fetch['subtitle']); ?>
                    </div>
                    <!-- <div class="review"><data value="350">reviews</data></div> -->
                    <!-- <div class="watchlist"><button>+ watchlist</button></div> -->

        </div>

        <div class="animeimg"><img src="<?php echo $bannerimagePath ?>" alt=""></div>
    </div>
    <div class="description">
        <div class="title">description</div>
        <div class="description_details">
            <?php echo htmlspecialchars($fetch['description']); ?>
        </div>
        <span class="more" onclick="toggleDescription()">more</span>
        <script href="animeinfo.js"></script>

    </div>
<?php
                } else {
                    echo "No data found";
                }
            }
?>
<div class="episodesection">
    <div class="seasons">
        <?php
        include 'admindatabase.php';
        $ssql = "SELECT * FROM season WHERE anime_id = '$anime_id'"; // Ensure anime_id is correctly referenced
        $sresult = $conn->query($ssql);
        $i = 1;
        if ($sresult->num_rows > 0) {
            while ($sfetch = mysqli_fetch_assoc($sresult)) {
        ?>
                <div>
                    <a href="#season<?php echo htmlspecialchars($sfetch['season_number']); ?>">
                        <button class="ss">Season<?php echo htmlspecialchars($sfetch['season_number']); ?></button>
                        <?php $sid[$i] = $sfetch['id']; ?>
                    </a>
                </div>
        <?php
                $i++;
            }
        } else {
            echo "No seasons found.";
        }
        ?>
    </div>

    <div class="episodes" id="seasons">

        <?php
        include 'admindatabase.php';
        $ssql = "SELECT * FROM season WHERE anime_id = '$anime_id'"; // Ensure anime_id is correctly referenced
        $sresult = $conn->query($ssql);
        $i = 1;
        if ($sresult->num_rows > 0) {
            while ($sfetch = mysqli_fetch_assoc($sresult)) {
                $sid[$i] = $sfetch['id'];
        ?>
                <div class="cardeck">
                    <?php
                    $esql = "SELECT * FROM episode WHERE season_id = '$sid[$i]'";
                    $eresult = $conn->query($esql);

                    if ($eresult->num_rows > 0) {
                        while ($efetch = mysqli_fetch_assoc($eresult)) {
                            $eid = $efetch['id'];
                    ?>
                            <a href="animewatchpage.php?eid=<?php echo htmlspecialchars($eid); ?>&?sid=<?php echo htmlspecialchars($sid[$i]); ?>">
                                <div class="ep" id="season<?php echo htmlspecialchars($sfetch['season_number']); ?>">
                                    <?php $scoverimagePath = 'scover/' . $sfetch['season_coverimage']; ?>
                                    <div class="episodesimg"><img src="<?php echo htmlspecialchars($scoverimagePath); ?>" alt=""></div>
                                    <div class="episodes_name">
                                        <div class="ep_no">S<?php echo htmlspecialchars($sfetch['season_number']); ?> Ep<?php echo htmlspecialchars($efetch['episode_number']); ?></div>
                                        <div class="epname"><?php echo htmlspecialchars($efetch['episode_title']); ?></div>
                                    </div>
                                </div>
                            </a>

                        <?php
                        }
                        ?>
                </div>
    <?php
                    } else {
                        echo "No episodes found for this season.";
                    }
                }
            }
    ?>

    </div>

</div>
<?php

?>
</body>

</html>