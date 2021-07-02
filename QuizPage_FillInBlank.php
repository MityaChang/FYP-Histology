<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fill In Blank</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrapQuiz.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <style>
            #frame001 {
                background-color: white;
                border: 2px solid black;
                border-radius: 10px;
                width: auto;
                height: auto;
                padding: 5px;
            }

            #color001 {
                color: black;
                font-size: large;
                text-align: left;
            }

            #center001 {
                text-align: center;
            }

            .button001 {
                background-color: blue;
                color: white;
                border-radius: 10px;
                padding: 5px;
                cursor: pointer;
            }

            .button002 {
                width: 10px;
                height: 10px;
            }
        </style>
        <link href="css/Home.css" rel="stylesheet" type="text/css"/>
        <link href="css/navbar.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include("navBar.php");
        ?>
        <!-- End of Navigation Bar -->
        <br/><br/><br/><br/>
        <div id="frame001">
            <div id="color001">
                <div id="center001">
                    <!--hydroxyapatite-->
                    <!--intertubular dentin-->
                    <!--inner dental epithelium-->
                    <!--cementum than bone-->
                    <!--16th wk-->
                    <h2><strong>Fill in the blank</strong></h2>
                    <p><strong>Word Bank:</strong> hydroxyapatite - intertubular dentin - inner dental epithelium - cementum than bone - 16th week</p></div><br />
                <p>The major inorganic component of dentin is <input type="text" id="input001" size="15" /><text class="button002" id="check001"></text>.Dentin becomes harder with age because of a general increase in<input id="input002" size="15" /><text class="button002" id="check002"></text>. Ameloblasts are derived from <input id="input003" size="15" /> <text class="button002" id="check003"></text>. More principal fibers of the periodontal ligament start or end in <input id="input004" size="15" /><text class="button002" id="check004"></text>.All of the deciduous dentition has been initiated in utero by the
 <input id="input005" size="15" /><text class="button002" id="check005"></text>.</p>
                <div id="disappear001"><div id="center001"><button class="button001" onclick="submit001()">Submit</button></div></div><br />
                <div id="center001"><p id="message001"></p><p id="reload001"></p></div>
                <br />
                <br />
            </div>
        </div>
        <script>
            var g;
            var h;
            var i;
            var j;
            var k;
            function submit001() {
                b = input001.value;
                c = input002.value;
                d = input003.value;
                e = input004.value;
                f = input005.value;
                if (b == "Hydroxyapatite " || b == "hydroxyapatite ") {
                    g = 1;
                    input001.value = b;
                    check001.innerHTML = "<text class=button002>" + "✔" + "</text>";
                } else {
                    input001.value = b;
                    check001.innerHTML = "<text class=button002>" + "✖" + "</text>";
                }

                if (c == "Intertubular Dentin" || c == "intertubular dentin") {
                    h = 1
                    input002.value = c;
                    check002.innerHTML = "<text class=button002>" + "✔" + "</text>";
                } else {
                    input002.value = c;
                    check002.innerHTML = "<text class=button002>" + "✖" + "</text>";
                }

                if (d == "Inner Dental Epithelium" || d == "inner dental epithelium") {
                    i = 1;
                    input003.value = d;
                    check003.innerHTML = "<text class=button002>" + "✔" + "</text>";
                } else {
                    input003.value = d;
                    check003.innerHTML = "<text class=button002>" + "✖" + "</text>";
                }

                if (e == "Cementum Than Bone" || e == "cementum than bone") {
                    j = 1;
                    input004.value = e;
                    check004.innerHTML = "<text class=button002>" + "✔" + "</text>";
                } else {
                    input004.value = e;
                    check004.innerHTML = "<text class=button002>" + "✖" + "</text>";
                }

                if (f == "16th wk" || f == "16th week") {
                    k = 1;
                    input005.value = f;
                    check005.innerHTML = "<text class=button002>" + "✔" + "</text>";
                } else {
                    input005.value = f;
                    check005.innerHTML = "<text class=button002>" + "✖" + "</text>";
                }

                if (g == 1 && h == 1 && i == 1 && j == 1 && k == 1) {
                    message001.innerHTML = "Congratulation! You have successfully finished this quiz.";
                    disappear001.innerHTML = "";
                    reload001.innerHTML = "<div id=center001><button class=button001 onclick=repeat001()>Repeat</button></div>";
                }
            }

            function repeat001() {
                location.reload();
            }
        </script>
    </body>
</html>