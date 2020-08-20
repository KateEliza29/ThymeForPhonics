<?php  
    if(isset($_COOKIE['username'])) {
        $username = "Welcome ".$_COOKIE['username']."  <a href ='index.php?logout=1'><button type='submit' name='logOut' class='button-middle' id='logOut'>Log Out</button></a>";
    }
    else {
        $username = '<button class="button-left" id="logIn">Log In</button><button class="button-right" id="signUp">Sign Up</button>';
    }
    
    if (array_key_exists("logout", $_GET)) {
        setcookie("username", "", time() - 60);
        $_COOKIE["username"] = ""; 
        $username = '<button class="button-left" id="logIn">Log In</button><button class="button-right" id="signUp">Sign Up</button>';
    }
?>
