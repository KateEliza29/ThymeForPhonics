<?php include("include/function/checkLogInScript.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/thymeMaster.css">
    <link id="pageStyle" rel="stylesheet" href="include/css/day-mode.css">
    <link rel="stylesheet" href="include/css/printables.css">
    <title>Printables</title>
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
        
        
        <!-- Product Grids-->

        <?php 
        
        $link = mysqli_connect("shareddb-w.hosting.stackcp.net", "ThymeForPhonics-313439ef6a", "2ziiudi2wi", "ThymeForPhonics-313439ef6a"); 
        
        $query = "SELECT * FROM `Products`";
        
        $result = mysqli_query($link, $query);
            //print_r($result);
        echo "<table>";
         $i = 0;
         while ($row = mysqli_fetch_array($result)) {
            //print_r($row);
            if ($i%3 == 0) {
                echo "<tr>";
            } 
            echo "<td><img src='supporting-files/printables/".$row['ImageURL']."'><br><p><strong>".$row['Name']."</strong></p><small>£".$row['Price']."</small><br><br><div class='button'><a href='".$row['Phase2URL']."'>Phase 2</a></div><div class='button'><a href='".$row['Phase3URL']."'>Phase 3</a></div><div class='button'><a href='".$row['Phase5URL']."'>Phase 5</a></div></td>";
            if ($i%3 == 2) {
                echo "</tr>";
            }
            $i++;
        }
        echo "</table>";
        
        ?>
    </div>
    
        <!-- Footer -->
        <footer>
            <?php include("footer.php") ?>
        </footer>


        <script src="include/function/customiseScript.js"></script>
        <script src="include/function/signInLogIn.js"></script>
    
</body>
</html>