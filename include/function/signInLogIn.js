        //Add function to log in and sign up buttons.
        let logInBtn = document.getElementById("logIn");
        let signUpBtn = document.getElementById("signUp");
        
        if (logInBtn != null) {
            document.getElementById("logIn").onclick = function() {
                window.location.href = "log-in.php";
            }
        }

        if (signUpBtn != null) {
            document.getElementById("signUp").onclick = function() {
                window.location.href = "sign-up.php";
            }
        }
