<?php include("include/function/checkLogInScript.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/thymeMaster.css">
    <link id="pageStyle" rel="stylesheet" href="include/css/day-mode.css">
    <link rel="stylesheet" href="include/css/resources.css">    
    <title>Resources</title>
</head>

<body>

    <div id="contentWrapper">
        <!--Navigation Bars-->
        <nav class="flex-row" id="nav1">
            <?php include("header1.php"); ?>
        </nav>

        <div class="flex-row" id="nav2">
            <?php include("header2.php"); ?>
        </div>

        <!--Customise Bar-->
        <?php include("customise.php"); ?>


        <!--Grid-->
        <div id="resourcesWrapper">
            <div class="card">
                <h2>Games</h2>
                <a href="games.php"><img src="include/images/child-tablet.jpg" alt="A young boy holding a tablet. He is staring intently at the screen."></a>
                <p>Play a huge range of games, targeting a phoneme or a whole phase. Progress through levels, earn rewards and level up!</p>
            </div>
            
            <div class="card">
                <h2>Printables</h2>
                <a href="printables.php"><img src="include/images/printables.png" alt="A screenshot of one of the printable activities."></a>
                <p>Looking for physical activities to play with your child? We have games, activities and other printable resources to help improve
                    your child's skills.</p>
            </div>
            
            <div class="card">
                <h2>Videos</h2>
                <a href="videos.php"><img src="include/images/youtube.png" alt="The YouTube logo."></a>
                <p>Click here for online phonics lessons. These are being constantly updated and will cover all phases.</p>
            </div>
            
            <div class="card">
                <h2>Sound Board</h2>
                <a href="sound-board.php"><img src="include/images/soundboard.jpg" alt="A photograph of a mixing board from a recording studio."></a>
                <p>Try our sound board! A page filled with all phonemes. Click on each sound to create a word, then listen to it back!</p>
            </div>
        </div>
    </div>

        <!-- Footer -->
        <footer>
            <?php include("footer.php") ?>
        </footer>


        <script src="include/function/customiseScript.js"></script>
        <script src="include/function/signInLogIn.js"></script>







    
</body>
</html>