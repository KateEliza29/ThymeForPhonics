<?php include("include/function/checkLogInScript.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="font" href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/thymeMaster.css">
    <link rel="stylesheet" href="include/css/day-mode.css">
    <link rel="shortcut icon" href="supporting-files/games/Build/TemplateData/favicon.ico">
    <script src="supporting-files/games/Build/TemplateData/UnityProgress.js"></script>
    <script src="supporting-files/games/Build/Build/UnityLoader.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "supporting-files/games/Build/Build/Build.json", {onProgress: UnityProgress});
    </script>

    <title>Games!</title>

    <style type="text/css">

        .webgl-content {
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }


    </style>


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


        <div class="webgl-content">
            <div id="unityContainer" style="width: 960px; height: 600px"></div>
            <div class="footer">
            <div class="webgl-logo"></div>
            <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
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