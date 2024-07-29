<!DOCTYPE html>
<html lang="en">
<?php
include 'admindatabase.php';
$episode_id = $_GET['eid'];
// $sid = $_GET['sid'];

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="animewatchpage.css">
</head>

<body>
    <?php
    $sql = "SELECT * FROM episode WHERE id = '$episode_id'";
    $result = $conn->query($sql);
    $fetch = mysqli_fetch_assoc($result);
    $animevideo = 'episode/' . $fetch['episode_video'];
    $sid = $fetch['season_id']
    ?>
    <div class="ws">
        <?php //echo "$episode_id"; 
        ?>
        <div class="animevideo a">
            <video width="250" height="250" controls preload="auto">
                <source src="<?php echo htmlspecialchars($animevideo); ?>" type="video/mp4">
                <source src="<?php echo htmlspecialchars($animevideo); ?>" type="video/ogg">
                <source src="<?php echo htmlspecialchars($animevideo); ?>" type="video/webm">
                Your browser does not support the video tag.
            </video>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/8jhxbTa81Zg?si=kmLmrkHd5OjtTKGf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
        </div>
        <div class="description">
            <div class="animetitle"><?php echo htmlspecialchars($fetch['episode_title']); ?></div>
            <div class="details"><?php echo htmlspecialchars($fetch['episode_description']); ?></div>
        </div>
        <div class="episode-section">
            <?php
            include 'admindatabase.php';
            $ssql = "SELECT * FROM season WHERE id = '$sid'"; // Ensure anime_id is correctly referenced
            $sresult = $conn->query($ssql);
            if ($sresult->num_rows > 0) {
                while ($sfetch = mysqli_fetch_assoc($sresult)) {
                    $scoverimagePath = 'scover/' . $sfetch['season_coverimage'];
                    $esql = "SELECT * FROM episode WHERE season_id = '$sid'";
                    $eresult = $conn->query($esql);

                    if ($eresult->num_rows > 0) {
                        while ($efetch = mysqli_fetch_assoc($eresult)) {
                            $eid = $efetch['id'];
            ?>
                            <a href="animewatchpage.php?eid=<?php echo htmlspecialchars($eid); ?>">
                                <div class="episode">
                                <?php //$scoverimagePath = 'scover/' . $fetch['season_coverimage']; ?>
                                    <div class="epimage"><img src="<?php echo $scoverimagePath; ?>" alt=""></div>
                                    <div class="epdetails">
                                        <div class="epno">Season <?php echo htmlspecialchars($sfetch['season_number']); ?> Episode <?php echo htmlspecialchars($efetch['episode_number']); ?></div>

                                        <div class="epname"><?php echo htmlspecialchars($efetch['episode_title']); ?></div>
                                    </div>
                                </div>
                            </a>
            <?php
                        }
                    }
                }
            }
            ?>
        </div>


</body>

</html>
<!-- -------------------------------------------------------------------------------------------------------------------------------- -->