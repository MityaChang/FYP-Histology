

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrapQuiz.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <link href="css/Login.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            body{
                width: 100%;
                background-image: url("./img/loginBgImage.png");
                 -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>

    </head>

    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                    <!--                    <a href="http://localhost/c273/P05/main_page.html">
                                            <img src="img/logo3.png" alt="User Icon" id="icon"/>-->
                    <img src="img/loginLogo.png" id="image" alt=""/>
                    <!--</a>-->

                </div>

                <!-- Login Form -->
                <form name="login" action="doLogin.php" method="post">
                    <input type="text" id="login" class="fadeIn second" name="login" placeholder="username/email" >
                    <input type="password" id="password" class="fadeIn second" name="password" placeholder="password" >
                    <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
                    <h5>OR</h5>
                    <div id="formFooter">
                        <a href="https://www.facebook.com/" class="fb btn">
                            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                        </a>
                        <a href="https://twitter.com/" class="twitter btn">
                            <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                        </a>
                        <a href="https://myaccount.google.com/intro/profile?pli=1" class="google btn"><i class="fa fa-google fa-fw">
                            </i> Login with Google+
                        </a>
                    </div>
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                    <form name="login" action="login.php" method="post">
                        <a class="underlineHover" href="Register.php">Register using RP School Account</a>
                    </form>
                </div>


            </div>
        </div>

    </body>
</html>