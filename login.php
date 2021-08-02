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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            .icon {
                padding: 10px;
                background: linear-gradient(to right, #ec008c, #fc6767); 
                color: white;
                min-width: 20px;
                text-align: center;
                 border-radius: 15%;
            }
            .soft-field {
                width: 100%;
                padding: 10px;
                outline: none;
                border:2px solid #fc6767;
               
            }
            .soft-field:focus {
                border: 2px solid #ec008c;
                
            }


        </style>

    </head>

    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="img/histologyicon.png" style="width:200px; height: 200px" id="image" alt=""/>
                </div>

                <!-- Login Form -->
                <form name="login" action="doLogin.php" method="post">
                    <div class="soft-codeon">
                        <i class="fa fa-user icon fadeIn second" style="width:35px"></i>
                        <input type="text" id="login" class="fadeIn second" name="login" placeholder="Username/Email" style="height:37px; width:350px">
                    </div>
                      <div class="soft-codeon">
                       <i class="fa fa-key icon fadeIn second"></i>
                    <input type="password" id="password" class="fadeIn second" name="password" placeholder="Password" style="height:37px; width: 350px">
                      </div>
                    <br>
                    <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
                </form>
                <br><br>
                <a class="underlineHover" href="Register.php">Create new account</a>
                <br><br>
            </div>

        </div>
    </body>
</html>