<?php include("include/function/checkLogInScript.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/about-us.css">
    <link rel="stylesheet" href="include/css/thymeMaster.css">
    <link id="pageStyle" rel="stylesheet" href="include/css/day-mode.css">
    <title>About Us</title>
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



        <!--About Grid-->
        <div id="aboutSection"> 
            <div id="aboutPic" class="aboutImage">
                <img class="left-pic landscape" id="aboutLeft" src="include/images/about-left.jpg" alt="The left side of the picture shows a toy corgi on the beach with a lego
                figure on his head.">
                <img class="right-pic landscape" id="aboutRight" src="include/images/about-right.jpg" alt="The right side of the picture shows a toy dachshund on the beach
                with a lego figure on his head.">
            </div>
            <div id="aboutInfo" class="about">
                <h2>About Us</h2>
                <p><strong>Thyme for Phonics</strong> is the brainchild of a teacher-turned-web-developer and an engineer. <br><br>
                What started as a set of phoneme spotters with custom characters soon sprouted into a much larger plan involving games, videos and 
                printables. (And a few more things- watch this space).  
                <br><br>
                We believe in giving every child the best possible chance to succeed, and the opportunity to learn in an engaging way. In lessons, 
                and at home, phonics should always be fun and full of games, and never a chore. This is why we focus on making resources that allow
                teachers and parents to make the most of their phonics sessions.
                </p>
            </div>

            <div id="aboutKate" class="about">
                <h2>Kate</h2>
                <p>Hello! For six years, I taught KS1, and phonics was always my favourite lesson. I currently work with teenagers and adults in a 
                college and I've branched out to teach adult phonics, study skills and digital skills. Over the past year, I have also begun learning
                web development, partly so that I could begin to put this project into action! 
                <br><br> 
                While I was teaching in primary schools, I always enjoyed creating personalised resources for the children, and inventing games for
                them to play, and, since teachers like to share, it seemed natural to try to share some of these.
                </p>
            </div>
            <div id="aboutKatePic" class="aboutImage">
                <img class="left-pic portrait" id="kateLeft" src="include/images/kate-left.jpg" alt="The left side of a picture of Kate. She is sitting in a wooden boat, in the middle
                of a lake, holiding oars and smiling into the camera. She has sunglasses on and there is a castle in the background.">
                <img class="right-pic portrait" id="kateRight" src="include/images/kate-right.jpg" alt="The right side of a picture of Kate. She is sitting in a wooden boat, in the middle
                of a lake, holiding oars and smiling into the camera. She has sunglasses on and there is a castle in the background.">
            </div>
            <div id="aboutStuPic" class="aboutImage">
                <img class="left-pic portrait" id="stuLeft" src="include/images/stu-left.jpg" alt="The left side of a picture of Stu. He is standing in front of an arched doorway in 
                steampink clothing, holding a walking cane.">
                <img class="right-pic portrait" id="stuRight" src="include/images/stu-right.jpg" alt="The right side of a picture of Stu. He is standing in front of an arched doorway in 
                steampink clothing, holding a walking cane.">
            </div>
            <div id="aboutStu" class="about">
                <h2>Stu</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor sed lacus in rutrum. Suspendisse magna massa, laoreet eget rhoncus vitae, pulvinar ac arcu. In elementum tellus pulvinar enim rutrum pretium. Donec tincidunt et felis ac ultricies. Nunc quis pharetra augue. Proin lectus turpis, varius in dictum semper, euismod id lacus. Curabitur fermentum biben.</p>
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