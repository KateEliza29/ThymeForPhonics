<?php include("include/function/checkLogInScript.php");

    if (array_key_exists("email", $_POST) and array_key_exists("password", $_POST)) {
        $link = mysqli_connect("shareddb-v.hosting.stackcp.net", "ThymeForPhonics-313437e8eb", "znd6kbsmo9", "ThymeForPhonics-313437e8eb");
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $password = $_POST['password'];
        

        $query = "SELECT `password`, `name` from `Users` WHERE `email` = '$email'";
        $result = mysqli_query($link, $query);
        
        $resultArray = mysqli_fetch_array($result);
        $dbPass = $resultArray['password'];
        
        if (mysqli_num_rows($result) == 1) {
            
            if (password_verify($password, $dbPass)) {
                $username = $resultArray['name'];
                setcookie('username', $username, time()+120);
                header('location: index.php');
            }
               
            else {
                echo '<script language="javascript">';
                echo 'alert("Your email or password is incorrect. Please try again or sign up.")';
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
    <link rel="stylesheet" href="include/css/contactLogSign.css">
    <link id="pageStyle" rel="stylesheet" href="include/css/day-mode.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link id="fontStyle" rel="stylesheet" href="include/css/quicksand.css">
    <title>Log In</title>

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
				<h2>Log In</h2>
			</div>
            <form method="post">
                <label class="contact-label" for="email">Email</label> <input class="text" name = "email" type = "email">
                <label class="contact-label" for="password">Password</label> <input class="text" id="password1" name = "password" type = "password"><br>
                <i id="1" class="far fa-eye icon-class"></i><br>
                <input id="submitButton" type="submit" class="button" name="submit" value="Log In">
            </form>
		</div>
	
    </div>
        <!-- Footer -->
        <footer>
            <?php include("footer.php") ?>
        </footer>


    <script src="include/function/customiseScript.js"></script>
    <script src="include/function/signInLogIn.js"></script>



    <script>
        document.querySelector(".icon-class").addEventListener("click", function() {
			var passId = "password"+this.id;
			if (document.getElementById(passId).type === "password") {
				document.getElementById(passId).type = "text";
				document.getElementById(this.id).className = "fas fa-eye-slash icon-class";
			}
			else {
				document.getElementById(passId).type = "password";
				document.getElementById(this.id).className = "far fa-eye icon-class";
			}			
		});
    </script> 
	


</body>
</html>