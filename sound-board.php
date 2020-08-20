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
    <link rel="stylesheet" href="include/css/sound-board.css">
    <link id="fontStyle" rel="stylesheet" href="include/css/quicksand.css">
    <title>Sound Board</title>
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


        <div id="soundBoardWrapper">
            <div id="stackedSounds"> 
                <h4 id="stackedSoundsDisplay">Type a Word</h4>
                <button id="play" onclick="speakWord()">PLAY!</button>
                <button id="clear" onclick="clearAll()">Clear</button><br>
                <label>Female Voice</label><input type="radio" name="voice" id="kateVoice" checked>
                <label>Male Voice</label><input type="radio" name="voice" id="stuVoice">
                <audio id="audioPlayer" autoplay></audio>
            </div>


            <div class="button-set" id="phase2">
                <h2>Phase 2</h2>
                    <button onclick="addSound('p2.1', 's'); playSound('p2.1')">s</button>
                    <button onclick="addSound('p2.2', 'a'); playSound('p2.2')">a</button>
                    <button onclick="addSound('p2.3', 't'); playSound('p2.3')">t</button>
                    <button onclick="addSound('p2.4', 'p'); playSound('p2.4')">p</button>
                    <button onclick="addSound('p2.5', 'i'); playSound('p2.5')">i</button>
                    <button onclick="addSound('p2.6', 'n'); playSound('p2.6')">n</button>
                    <button onclick="addSound('p2.7', 'm'); playSound('p2.7')">m</button>
                    <button onclick="addSound('p2.8', 'd'); playSound('p2.8')">d</button>
                    <button onclick="addSound('p2.9', 'g'); playSound('p2.9')">g</button>
                    <button onclick="addSound('p2.10', 'o'); playSound('p2.10')">o</button>
                    <button onclick="addSound('p2.11', 'c'); playSound('p2.11')">c</button>
                    <button onclick="addSound('p2.12', 'k'); playSound('p2.12')">k</button>
                    <button onclick="addSound('p2.13', 'ck'); playSound('p2.13')">ck</button>
                    <button onclick="addSound('p2.14', 'e'); playSound('p2.14')">e</button>
                    <button onclick="addSound('p2.15', 'u'); playSound('p2.15')">u</button>
                    <button onclick="addSound('p2.16', 'r'); playSound('p2.16')">r</button>
                    <button onclick="addSound('p2.17', 'h'); playSound('p2.17')">h</button>
                    <button onclick="addSound('p2.18', 'b'); playSound('p2.18')">b</button>
                    <button onclick="addSound('p2.19', 'f'); playSound('p2.19')">f</button>
                    <button onclick="addSound('p2.20', 'ff'); playSound('p2.20')">ff</button>
                    <button onclick="addSound('p2.21', 'l'); playSound('p2.21')">l</button>
                    <button onclick="addSound('p2.22', 'll'); playSound('p2.22')">ll</button>
                    <button onclick="addSound('p2.23', 'ss'); playSound('p2.23')">ss</button>
            </div>
            <div class="button-set" id="phase3">
                <h2>Phase 3</h2>
                    <button onclick="addSound('p3.1', 'j'); playSound('p3.1')">j</button>
                    <button onclick="addSound('p3.2', 'v'); playSound('p3.2')">v</button>
                    <button onclick="addSound('p3.3', 'w'); playSound('p3.3')">w</button>
                    <button onclick="addSound('p3.4', 'x'); playSound('p3.4')">x</button>
                    <button onclick="addSound('p3.5', 'y'); playSound('p3.5')">y</button>
                    <button onclick="addSound('p3.6', 'z'); playSound('p3.6')">z</button>
                    <button onclick="addSound('p3.7', 'zz'); playSound('p3.7')">zz</button>
                    <button onclick="addSound('p3.8', 'qu'); playSound('p3.8')">qu</button>
                    <button onclick="addSound('p3.9', 'ch'); playSound('p3.9')">ch</button>
                    <button onclick="addSound('p3.10', 'sh'); playSound('p3.10')">sh</button>
                    <button onclick="addSound('p3.11', 'th'); playSound('p3.11')">th</button>
                    <button onclick="addSound('p3.12', 'ng'); playSound('p3.12')">ng</button>
                    <button onclick="addSound('p3.13', 'ai'); playSound('p3.13')">ai</button>
                    <button onclick="addSound('p3.14', 'ee'); playSound('p3.14')">ee</button>
                    <button onclick="addSound('p3.15', 'igh'); playSound('p3.15')">igh</button>
                    <button onclick="addSound('p3.16', 'oa'); playSound('p3.16')">oa</button>
                    <button onclick="addSound('p3.17', 'oo'); playSound('p3.17')">oo (long)</button>
                    <button onclick="addSound('p3.18', 'oo'); playSound('p3.18')">oo (short)</button>
                    <button onclick="addSound('p3.19', 'ar'); playSound('p3.19')">ar</button>
                    <button onclick="addSound('p3.20', 'or'); playSound('p3.20')">or</button>
                    <button onclick="addSound('p3.21', 'ur'); playSound('p3.21')">ur</button>
                    <button onclick="addSound('p3.22', 'ow'); playSound('p3.22')">ow</button>
                    <button onclick="addSound('p3.23', 'oi'); playSound('p3.23')">oi</button>
                    <button onclick="addSound('p3.24', 'ear'); playSound('p3.24')">ear</button>
                    <button onclick="addSound('p3.25', 'air'); playSound('p3.25')">air</button>
                    <button onclick="addSound('p3.26', 'ure'); playSound('p3.26')">ure</button>
                    <button onclick="addSound('p3.27', 'er'); playSound('p3.27')">er</button>
            </div>
            <div class="button-set" id="phase5">
                <h2>Phase 5</h2>
                    <button onclick="addSound('p5.1', 'ay'); playSound('p5.1')">ay</button>
                    <button onclick="addSound('p5.2', 'ou'); playSound('p5.2')">ou</button>
                    <button onclick="addSound('p5.3', 'ie'); playSound('p5.3')">ie</button>
                    <button onclick="addSound('p5.4', 'ea'); playSound('p5.4')">ea</button>
                    <button onclick="addSound('p5.5', 'oy'); playSound('p5.5')">oy</button>
                    <button onclick="addSound('p5.6', 'ir'); playSound('p5.6')">ir</button>
                    <button onclick="addSound('p5.7', 'ue'); playSound('p5.7')">ue</button>
                    <button onclick="addSound('p5.8', 'aw'); playSound('p5.8')">aw</button>
                    <button onclick="addSound('p5.9', 'wh'); playSound('p5.9')">wh</button>
                    <button onclick="addSound('p5.10', 'ph'); playSound('p5.10')">ph</button>
                    <button onclick="addSound('p5.11', 'ew'); playSound('p5.11')">ew</button>
                    <button onclick="addSound('p5.12', 'oe'); playSound('p5.12')">oe</button>
                    <button onclick="addSound('p5.13', 'au'); playSound('p5.13')">au</button>
                    <button onclick="addSound('p5.14', 'ey'); playSound('p5.14')">ey</button>
                    <button onclick="addSound('p5.15', 'a-e'); playSound('p5.15')">a-e</button>
                    <button onclick="addSound('p5.16', 'e-e'); playSound('p5.16')">e-e</button>
                    <button onclick="addSound('p5.17', 'i-e'); playSound('p5.17')">i-e</button>
                    <button onclick="addSound('p5.18', 'o-e'); playSound('p5.18')">o-e</button>
                    <button onclick="addSound('p5.19', 'u-e'); playSound('p5.19')">u-e</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
        <footer>
            <?php include("footer.php") ?>
        </footer>


        <script src="include/function/customiseScript.js"></script>
        <script src="include/function/signInLogIn.js"></script>
        <script src="include/function/sound-board.js"></script>


    
</body>
</html>