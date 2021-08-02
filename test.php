<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
            function change(src) {
                var datu = document.getElementById("datu");
                datu.src = src;
            }
        </script>
        <style type="text/css">
            #da{
                border: 1px red solid;
                width: 350px;
                height:350px;
                font-size: 50px;
                margin-left: 65px;
            }
            .xiao{
                float: left;
                margin-left: 22px;
            }
        </style>
    </head>
    <body>
        <div id="da">
            <img src="Img/Shanghai auspicious chaos.jpg" id="datu" width="350px" />
        </div>
        <img src="img/liver/f1-liver.png" alt=""/>
        <img src="img/liver/f2-liver.png"  onmouseover="change(this.src)" class="xiao" style="margin-left: 63px;" />
        <img src="img/liver/f3-liver.png"  onmouseover="change(this.src)" class="xiao" />
        <img src="img/liver/f4-liver.png" onmouseover="change(this.src)" class="xiao" />
        <img src="img/liver/liver.png" onmouseover="change(this.src)" class="xiao" />
    </body>
</html>

