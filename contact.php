<?php include("include/function/checkLogInScript.php"); ?>

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
    <title>Contact</title>
    
    <style type="text/css">

/* Contact Form */




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


        <!--Contact Form-->
        <?php
        if(isset($_POST['submit']))
        {
    
        	$from_add = "info@kateeliza.co.uk"; 
        
        	$to_add = "thymeforphonics@gmail.com"; 
        
        	$subject = "Enquiry";
        	$message = $_POST['message']." ".$_POST['name']." ".$_POST['email'];
        	
        	$headers = "From: $from_add \r\n";
        	$headers .= "Return-Path: $from_add\r\n";
        	$headers .= "X-Mailer: PHP \r\n";
        	
    	
        	if(mail($to_add,$subject,$message,$headers)) 
        	{
        		echo "<script type='text/javascript'>alert('Your email has been sent.');</script>";
        	} 
        	else 
        	{
                echo "<script type='text/javascript'>alert('We encountered an error, please use the email link instead.');</script>";
        	}
        }
        ?>
    
    
        <div id="formWrapper">
            <div id="formHeader" class="header">
                <h2>Contact Us</h2>
            </div>    
            <form method="post" action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>'>
                    <label class="contact-label" for="name">Name:</label><input name="name" type="text" class="text short-text" placeholder="Name Namington"><br><br>
                    <label class="contact-label" for="email">Email:</label><input name="email" type="email" class="text short-text" placeholder="email@emailington.com"><br><br>
                    <label class="contact-label" for="message">Message:</label><input name="message" type="text" class="text long-text" placeholder="Hello..."><br><br>
                    <input type="submit" name="submit" class="button" value="Send!">
            </form>
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