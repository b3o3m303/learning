<!doctype html>
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
<body class="bgcolor_all"><nav class="nav navbar-inverse navbar-fixed-top navbar-default">
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

<div>
    <ul class="ul1">
        <li class="li1">
            <div class="shape">
                <a class="overlay round"></a>

                <div class="details">
                    <span class="heading">台中日光溫泉會館</span>
                    <hr/>
                    <p>紙箱故事館附近住宿</p>
                    <a href="https://sunhot.ezhotel.com.tw/" class="button">訂房點我</a>
                </div>

                <div class="bg"></div>

                <div class="base">
                    <img src="image/hotelstory.jpg" width="300" height="300" />
                </div>

            </div>

        </li>

        <li class="li1">

            <div class="shape">
                <a class="overlay hexagon"></a>

                <div class="details">
                    <span class="heading">台中香城大飯店</span>
                    <hr/>
                    <p>大坑風景區附近住宿</p>
                    <a href="http://taichung-charming-city.city-hotel.com.tw/" class="button">訂房點我</a>

                </div>
                <div class="bg"></div>

                <div class="base">
                    <img src="image/hotelwalk.jpg"  width="300" height="300" />
                </div>
            </div>

        </li>

        <li class="li1">

            <div class="shape">
                <a class="overlay pentagon"></a>
                <div class="details">
                    <span class="heading">麒麟峰溫泉旅館</span>
                    <hr />
                    <p> 東東芋圓附近住宿</p>
                    <a href="http://www.kylin-peak.com.tw/default.html" class="button">訂房點我</a>
                </div>

                <div class="bg"></div>

                <div class="base">
                    <img src="image/hoteldon.jpg" width="300" height="300" />
                </div>
            </div>
        </li>

    </ul>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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


</body>
</html>


<?php
?>

