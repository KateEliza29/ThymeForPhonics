<?php include("include/function/checkLogInScript.php");
    
if (isset($_POST['submit'])) {
    $link = mysqli_connect("shareddb-v.hosting.stackcp.net", "ThymeForPhonics-313437e8eb", "znd6kbsmo9", "ThymeForPhonics-313437e8eb");
    
    //Check if the user is already signed up.
    $query = "SELECT `email` from `Users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST["email"])."'";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {
            echo '<script language="javascript">';
            echo 'alert("Email already exists. Please log in instead.")';
            echo '</script>';
    }
    
    //If user is not already registered, insert name, email and password. This includes a passhash.
    else if (!mysqli_num_rows($result)) {
        $password = $_POST['password1'];
        $newPass = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO `Users` (`name`, `email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $newPass)."')";
        
        if (mysqli_query($link, $query)) {
            //Once user has been added to database, create cookie, and redirect to home page.
            $username = htmlentities($_POST['name']);
            setcookie('username', $username, time()+120);
            header('location: index.php');
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("An error was encountered. Please try again later.")';
            echo '</script>';
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/thymeMaster.css">
    <link id="pageStyle" rel="stylesheet" href="include/css/day-mode.css">
    <link rel="stylesheet" href="include/css/contactLogSign.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link id="fontStyle" rel="stylesheet" href="include/css/quicksand.css">
    <title>Sign Up</title>
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


        
            <div id = "formWrapper">
                <div id = "formHeader">
                    <h2>Sign Up</h2>
                </div>

                <form method="post">
                        <label class="contact-label" id="nameLabel">Name</label> <input class="text" id="nameInput" name="name" type="text">
                        <label class="contact-label" id=emailLabel>Email</label> <input class="text" id="emailInput" name="email" type="email">
                        <label class="contact-label" id="password1Label">Password</label> <input class="text" id="password1" name="password1" type="password"><br>
                        <i id="1" class="far fa-eye icon-class"></i><br>
                        <label class="contact-label" id="password2Label">Confirm Password</label> <input class="text" id="password2" name="password2" type="password"><br>
                        <i id="2" class="far fa-eye icon-class"></i><br>
                        <input id = "submitButton" type="submit" name="submit" class="button" value="Sign Up">
                </form>
            </div>
        </div>

    <!-- Footer -->
        <footer>
            <?php include("footer.php") ?>
        </footer>


        <script src="include/function/customiseScript.js"></script>
        <script src="include/function/signInLogIn.js"></script>
        <script src="include/function/sign-up.js"></script> 



</body>
</html>