<?php include("include/function/checkLogInScript.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/thymeMaster.css">
    <link id="pageStyle" rel="stylesheet" href="include/css/day-mode.css">
    <link id="fontStyle" rel="stylesheet" href="include/css/quicksand.css">
    <title>Videos</title>

</head>
<body>

    <div id="contentWrapper">
        <!--Navigation Bar-->
        <nav class="flex-row" id="nav1">
            <?php include("header1.php"); ?>
        </nav>

        <div class="flex-row" id="nav2">
            <?php include("header2.php"); ?>
        </div>

        <!--Customise Bar-->
        <?php include("customise.php"); ?>


        <!--About Grid-->
        <div id="placeholder">
            <h2>Watch this space- content is coming soon!</h2>
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