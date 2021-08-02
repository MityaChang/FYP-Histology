<html>

    <head>
        <title>Register</title>
        <meta charset="UTF-8">

        <?php include 'extension.html' ?>
        <script type="text/javascript" src="./js/signup.js"></script>
        <link rel="stylesheet" href="./css/signup.css">
    </head>

    <body>
        <div id="formFooter">
            <a href="./HomePage.php"><img src="img/circle-logo.png" style="width:250; height:250" alt="Nature" class="rounded mx-auto d-block" /></a>

            <h1 style="text-align: center;">Register</h1>
            <p style="text-align: center;">Please fill in this form to register from a RP Account</p>

            <hr>
        </div>
        <div class="container">

            <form method="post" action="signUpFunc.php">
                <div class="form-group">
                    <label>Enter your username:</label>
                    <input type="text" name="username" class="form-control" placeholder="enter your username" required>
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" required placeholder="enter your email">
                </div>
                <div class="form-group">
                    <label>Enter your password:</label>
                    <input type="password" name="password" required id="password" class="form-control" placeholder="enter your password">
                </div>
                <div class="form-group">
                    <label>Confirm your password:</label>
                    <input type="password" required name="confirmPassword" class="form-control" placeholder="re-type your password">
                </div>
        </div>
        <input type="submit" name="submitBtn" value="sign-up" class="btn btn-primary btn-block btn-lg">
    </form>

</div>

<div id="formFooter">

    <form name="login" action="main_page.html" method="post">
        <a>Already have an account? </a>
        <a class="underlineHover" href="./login.php">Login Here</a>
    </form>
    <h5>OR</h5>
    <a class="underlineHover" href="./login.php">Back to Mainpage</a>

</div>
</body>

</html>