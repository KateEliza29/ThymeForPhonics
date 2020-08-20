<?php include("include/function/checkLogInScript.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/thymeMaster.css">
    <link id="pageStyle" rel="stylesheet" href="include/css/day-mode.css">
    <link rel="stylesheet" href="include/css/FAQs.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link id="fontStyle" rel="stylesheet" href="include/css/quicksand.css">
    <title>FAQs</title>
</head>

<body onload= "setPage()">
    
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
    
        <!--FAQ Section-->
            <div id="FAQ">
                <div id="FAQHeader" class="header">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div id="0" class="accordion" onclick="hideShow(this)"><i id="arrow0" class="fas fa-arrow-right"></i>What is phonics?</div>
                <div id="answer0" class="panel">
                    <p>Phonics is a way of teaching children how to read and write. Although phonics has actually been around for hundreds of
                    years, it has floated in and out of popularity. Most of us were not taught phonics at school (it came back in force in the 
                    early 2000s), so it can seem a little daunting. The theory is that the English language can be divided into 44 
                    <strong>'phonemes'</strong> or sounds. Each of these sounds is represented by different letter combinations, or 
                    <strong>'graphemes'</strong>.
                    <br><br>
                    By teaching children to recognise these sounds and letter combinations, they can easily 'decode' any word. 
                    <br>
                    <small>(The ability to decode does not necessarily mean that they can read. Comprehension is a huge part and is usually 
                    taught separately in schools).</small>
                    <br><br>
                    For more information on what phonics is, visit our <a href="about-us.php">'About'</a> page. 
                    </p>
                </div>

                <div id="1" class="accordion" onclick="hideShow(this)"><i id="arrow1" class="fas fa-arrow-right"></i>Is Thyme for Phonics a scheme?</div>
                <div id= "answer1" class="panel">
                    <p>Absolutely not.
                    <br><br>
                    The government released the general <strong>'Letters and Sounds'</strong> programme for schools to follow. It contains information about 
                    the sounds to cover, and some general ideas for teaching them through games. Some schools follow this, allowing children to be taught
                    in a more flexible manner, and other schools buy into schemes such as <strong>'Jolly Phonics'</strong>, or <strong>Read, Write, Inc.</strong>,
                    which can be more regimented. Regardless of how your school teaches phonics, Thyme for Phonics can be used in conjunction as reinforcement activities,
                    intervention activities, independent reading activities, homework, or as 5 minute fillers throughout the day.
                    <br><br> 
                    Thyme for Phonics is simply a collection of resources that can be used in lessons or at home, to help your children develop their
                    reading skills, and hopefully learn to enjoy learning. The range of resources - online games, printable games and activities, 
                    the soundboard, the videos, and the other exciting things that are in the works - ensures that there is something for everyone, 
                    to be used at any time.
                    </p>
                </div>

                <div id= "2" class="accordion" onclick="hideShow(this)"><i id="arrow2" class="fas fa-arrow-right"></i>How much does Thyme for Phonics cost?</div>
                <div id= "answer2" class="panel">
                    <p>At the minute, we are offering full access to Thyme for Phonics' range of resources for free, all you need to do is sign up. The app is also 
                    free to download, and contains NO in-app purchases. It will, however, include short ads, as this enables us to generate a revenue
                    that we can reinvest to improve our services. You can purchase an ad-free version of the game.
                    </p>
                </div>

                <div id="3" class="accordion" onclick="hideShow(this)"><i id="arrow3" class="fas fa-arrow-right"></i>Who is Thyme for Phonics for?</div>
                <div id="answer3" class="panel">
                    <p>Thyme for Phonics is for anyone who is learning phonics!
                    <br><br> 
                    The key to learning phonics is repetition. Repetition can get boring, so it's important to include a wide range of activities and
                    games to keep your child motivated. So, whether your children are excelling at phonics, or they need a little extra help, 
                    the variety of resources and the engaging storyline in the games should mean that there is something for everyone!</p>
                </div>

                <div id="4" class="accordion" onclick="hideShow(this)"><i id="arrow4" class="fas fa-arrow-right"></i>Do you have a customer services phone number?</div>
                <div id= "answer4" class="panel">
                    <p>We currently do not have a Thyme for Phonics phone line. 
                    <br><br> 
                    Kate and Stu both work full time in addition to developing and running this project. Because of this, we cannot set up a customer
                    service line, as we would be unable to provide dedicated hours. 
                    <br><br>
                    We do, however, regularly check our emails. This means that, if you email us, or send us a message via the contact page, 
                    we will get back to you as quickly as we can. 
                    <br><br> 
                    Thyme for Phonics is a new venture for us, and we are dedicated to making it the best it can be, so we'll always do our best to 
                    help where we can.</p>
                </div>

                <div id="5" class="accordion" onclick="hideShow(this)"><i id="arrow5" class="fas fa-arrow-right"></i>I have some feedback.</div>
                <div id= "answer5" class="panel">
                    <p>If you have any thoughts on Thyme for Phonics, or there's something else that you'd like us to provide, go to the
                    <a href="contact.php">contact page</a> and send us a message. 
                    <br><br>
                    Thyme for Phonics was built to help teachers and parents, and we greatly appreciate any feedback (positive or negative!) that will
                    enable us to help you even more! 
                    Although Thyme for Phonics is the result of years of teaching experience, and all of the printables have been tested in classrooms, 
                    we recognise that there is always room for improvement. 
                    </p>
                </div>

                <div id= "6" class="accordion" onclick="hideShow(this)"><i id="arrow6" class="fas fa-arrow-right"></i>My question has not been answered here.</div>
                <div id= "answer6" class="panel">
                    <p>Kate and Stu are more than happy to answer any questions or help out if you're having problems with the website or the app. Just go to 
                    our <a href="contact.php">contact page</a> and send us a quick message. We like to think that we're approachable, and we'll always try our
                    best to help!
                    </p>
                </div>
            </div>

        </div>
            
        <!-- Footer -->
        <footer>
            <?php include("footer.php") ?>
        </footer>


    <script src="include/function/customiseScript.js"></script>
    <script src="include/function/signInLogIn.js"></script>

    <script type="text/javascript">

        function setPage() {
            for (let i=0; i<9; i++) {
                document.getElementById("answer" + i).style.display = "none";
            }
        }

        function hideShow(elem) {
            let answerId = "answer" + elem.id;
            let questionId = elem.id;
            let arrowId = "arrow"+elem.id;
                if (document.getElementById(answerId).style.display == "none") {
                document.getElementById(answerId).style.display = "block";
                document.getElementById(arrowId).classList.remove("fa-arrow-right")
                document.getElementById(arrowId).classList.add("fa-arrow-down");
                document.getElementById(questionId).style.background = "linear-gradient(45deg, #fe6a16, #ea3e03)";
            }
            else {
                document.getElementById(answerId).style.display = "none";
                document.getElementById(arrowId).classList.remove("fa-arrow-down")
                document.getElementById(arrowId).classList.add("fa-arrow-right");
                document.getElementById(questionId).style.background = "transparent";
            }
        }
        
    </script>
</body>
</html>