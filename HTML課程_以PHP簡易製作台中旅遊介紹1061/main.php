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
    <link href="css/allcss.css" rel="stylesheet" type="text/css">


</head>
<body class="bgcolor_all">
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
        <h1 class="text-center taichung"><b>大台中旅遊網&nbsp;</h1></b>
    </div>
  </div>
   <hr>

    <div class="center"> <img src="image/pic.png" width="1920" height="960" usemap="#Map">
        <map name="Map">
            <area class="effect-zoom-in" shape="poly" coords="179,427,192,415,214,418,241,416,262,416,281,417,301,417,319,418,337,418,348,418,347,389,323,388,284,387,250,387,217,387,200,388,189,375,178,373,173,376,165,377,161,388,159,389,156,401" href="03.php">
            <area shape="poly" coords="554,282,532,254,534,240,544,232,554,230,565,232,570,239,587,240,607,240,627,239,650,239,667,239,691,239,710,239,727,239,744,239,764,238,784,239,809,238,824,252,821,268,773,271,737,270,699,271,665,272,633,271,590,270,565,269,557,275" href="02.php">
            <area shape="poly" coords="397,233,375,205,379,189,387,183,398,180,410,186,418,194,443,194,482,194,517,195,550,195,560,195,569,214,569,219,535,223,498,223,461,223,429,223,409,222" href="04.php">
            <area shape="poly" coords="593,119,576,93,574,77,580,69,590,65,601,65,610,72,618,78,638,76,675,74,712,73,749,72,781,71,795,79,792,101,746,102,711,104,672,104,636,104,608,103" href="01.php">
            <area shape="poly" coords="793,543,772,510,777,493,787,488,797,487,805,492,818,500,840,497,875,500,912,495,950,496,960,496,960,526,935,527,902,527,876,526,849,526,825,527,807,524,794,537" href="city_03.php">
            <area shape="poly" coords="733,607,716,589,711,576,714,567,719,561,730,555,747,560,756,572,771,572,801,572,829,573,863,572,885,572,908,571,932,572,960,572,982,572,997,572,1003,585,1007,603,763,602,736,601" href="city_01.php">
            <area shape="poly" coords="835,734,815,710,815,699,820,688,832,682,846,681,850,689,856,695,875,692,904,691,932,691,956,690,986,690,1019,692,1032,691,1038,720,866,723,841,723,837,730" href="city_02.php">
            <area shape="poly" coords="1288,568,1265,541,1267,525,1272,519,1279,512,1293,514,1301,517,1310,525,1315,527,1335,525,1368,528,1392,525,1409,525,1445,524,1452,524,1454,555,1392,556,1354,555,1317,555,1296,555" href="mountain.php#walk">
            <area shape="poly" coords="1190,645,1167,611,1172,596,1185,590,1201,595,1209,597,1209,601,1246,600,1274,600,1314,600,1352,599,1388,599,1417,599,1444,601,1466,600,1468,628,1430,630,1384,631,1335,627,1294,625,1261,625,1229,625,1206,625,1199,634" href="mountain.php#box">
            <area shape="poly" coords="1230,696,1211,670,1210,655,1218,647,1228,643,1239,643,1247,650,1250,659,1271,660,1305,661,1343,660,1379,660,1390,660,1391,688,1341,689,1306,689,1270,691,1236,691" href="mountain.php#don">
        </map>
    </div>
    <hr>
<!--    footer-->
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
  
</div>
</body>
</html>
