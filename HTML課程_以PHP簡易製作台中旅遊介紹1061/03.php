<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>大台中旅遊網</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="css/css_L.css" rel="stylesheet" type="text/css">

</head>
<body>


<nav class="nav navbar-inverse navbar-fixed-top navbar-default">
    <div class="container-fluid ">
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <!--三個一-->
            </button>
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home" style="color: rgb(255, 0, 0);"></span> 首頁</a>
        </div>
        <div class="collapse navbar-collapse " id="myNavbar" >
            <!--   以下縮放-->
            <ul class="nav navbar-nav ">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">景點-海線<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="sea.php">景點</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">景點-核心<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="city.php">景點</a></li>
                        <li><a href="city_stay.php">住宿</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">景點-山線<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="mountain.php">景點</a></li>
                        <li><a href="mountainhotel.php">住宿</a>  </li>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right ">


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">會員專區<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Log out</a></li>
                        <li><a href="myfoot.php"><span class="glyphicon glyphicon-user" style="color: rgb(255,0,0);"></span>我的足跡</a></li>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center">海線景點介紹</h1>
        </div>
    </div>
    <hr>
    <div style="width:30%;height:300px;float:left;"><img src="c.jpg" width="420" height="300"></div>
    <div style="width:70%;height:300px;float:right;background-color:#26C6EE;font-size:20px">
        <h2>麗水漁港</h2>
        <hr/>
        <p>位於台中龍井區的麗水漁港，具有百年的歷史，清乾隆晚期興起，成為中部僅次於鹿港的重要港口
            因鄰近大肚溪，水浪豐富，是天然河港。港口船隻進出方常方便，比梧棲港更加繁榮。
            現今以雖已沒落，但是麗水漁港具有豐富賞鳥資源，此區擁有高達24種保育鳥類，
            再搭配美麗海景與近幾年新搭建的造型休息區，心與許多愛美與看風景的地遊客前往。</p>



    </div>
    <button type="button"><a href="sea.php">回主頁</a></button>
    <hr>
    <div class="row footer_1" >
        <div class="text-center col-md-6 col-md-offset-3 time_txt">
    <p>HTML5跨平台程式開發-期末報告(僅供教育使用) &copy; 2017 &middot; <br>開發者：YF.J、YW.L、JS.S</p>
            <div style="text-align:center;">
                <!--       人數-->
                <script type="text/javascript" src="http://services.webestools.com/cpt_visits/17175-10-5.js"></script>
            </div>
            <!--時間-->
            <script>
                var Today=new Date();
                document.write("現在時間" + Today.getFullYear()+ " 年 " + (Today.getMonth()+1) + " 月 " + Today.getDate() + " 日"
                    +Today.getHours()+"點"+Today.getMinutes()+"分");


            </script>


        </div>
    </div>
    <hr>
</div>
</body>
</html>
