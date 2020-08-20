<?php include("include/function/checkLogInScript.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/thymeMaster.css">
    <link rel="stylesheet" href="include/css/home.css">
    <link id="pageStyle" rel="stylesheet" href="include/css/day-mode.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Thyme for Phonics</title>
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

        <!--Carousel-->
        <section class="carousel-container">
            <i class="arrow-icon fas fa-arrow-circle-left" id="prevBtn"></i>
            <div class="carousel-slide">
                <div>
                    <h2>Super Fun Games!</h2>
                    <a href="games.php"><img src="include/images/children-computer.jpg" alt="A boy and a girl sitting in front of a laptop. They both look excited.
                    The girl is pointing at the screen and the boy has his arms in the air in celebration."></a>
                    <p>A whole range of games, each playable with any phoneme.</p>
                </div>
                <div>
                    <h2>Virtual Phonics Lessons!</h2>
                    <a href="videos.php"><img src="include/images/fun-game.jpg" alt="A young girl sitting on the floor with a tablet resting on her knees. 
                    She is smiling widely and looking at the screen."></a>
                    <p>Video lessons for every sound, across all phases.</p>
                </div>
                <div>
                    <h2>Dashboard for Parents</h2>
                    <a href="dashboard.php"><img src="include/images/dashboard.jpg" alt="A tablet and two pieces of paper on a wooden table. They all show 
                    a variety of graphs and tables of data."></a>
                    <p>Track your child's progress and discover their strengths.</p>
                </div>
                <div>
                    <h2>Resources for Schools</h2>
                    <a href="printables.php"><img src="include/images/teacher.jpg" alt="Seven children sitting in a circle on the floor in a brightly coloured classroom. 
                    A teacher is sitting in the circle with them and leaning forward to listen."></a>
                    <p>Download high quality phonics games and resources for use in phonics lessons and directed interventions.</p>
                </div>
                <div>
                    <h2>Cross-Platform Compatability </h2>
                    <img src="include/images/computer-tablet-phone.jpg" alt="A laptop, tablet and phone. Each shows an image of the same website.">
                    <p>Play on your phone, on your tablet, or on your computer and never lose scores or progress.</p>
                </div>
            </div>
            <i class="arrow-icon fas fa-arrow-circle-right" id="nextBtn"></i>
        </section>

        <!--App Details-->
            <section class="flex-row" id="appSection">
                <div class="info-card" id="androidCard">
                    <h2>Get the Android App</h2>
                    <a href="#"><i id="androidIcon" class="app-icon fab fa-android" alt="A larger android robot logo."></i></a>
                    <p>For best results on a mobile, download the app for free from the Google Play Store.</p>
                </div>

                <div class="info-card" id="iosCard">
                    <h2>Get the iOS App</h2>
                    <a href="#"><i id="iosIcon" class="app-icon fab fa-apple" alt="A large apple logo."></i></a>
                    <p>For best results on a mobile, download the app for free from the iOS App Store.</p>
                </div>
            </section>
    </div>

        <!--Footer -->

            <footer>
                <?php include("footer.php") ?>
            </footer>


    <script src="include/function/customiseScript.js"></script>
    <script src="include/function/signInLogIn.js"></script>
    <script src="include/function/carousel.js"></script>


    
</body>
</html>