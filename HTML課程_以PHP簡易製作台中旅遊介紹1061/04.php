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
    <div style="width:30%;height:300px;float:left;"><img src="d.jpg" width="420" height="300"></div>
    <div style="width:70%;height:300px;float:right;background-color:#26C6EE;font-size:20px">
        <h2>高美濕地</h2>
        <hr/>
        <p>高美野生動物保護區，簡稱高美濕地，位於台中清水區西側，
            為大甲溪出海口是一座淡水住水與潮汐交替，所構成的海岸濕地，
            原為海水浴場，自台中港北岸沙堤築起後，大甲溪夾帶泥沙淤積於此，形成近日的高美濕地。
            。</p>
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
