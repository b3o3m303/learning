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
<button onclick="topFunction()" id="myBtn1" title="Go to top">Top</button>
<script>
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn1").style.display = "block";
        } else {
            document.getElementById("myBtn1").style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

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
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                   <a href="#box"> <img src="image/image6.jpg" style="width:100%;"></a>
                </div>

                <div class="item">
                    <a href="#walk"><img src="image/image7.jpg" style="width:100%;"></a>
                </div>

                <div class="item">
                    <a href="#don"><img src="image/image8.jpg"  style="width:100%;">
                    </a></div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <hr>
<!--   紙箱王 -->
    <h1 class="text-center">
        <a id="box" class="visit-main-right-title"
           href="https://www.cartonking.com.tw/stores.php?func=sd_show&sd_id=1&sdc_id=2#v2">
            ☞台中大坑紙箱王☜</a></h1>
    <!-- 幻燈片，容易不小心刪除   -->
    <div class="huanDengPicbox"></div>
<!-- 幻燈片，容易不小心刪除   -->
    <br>
    <div class="text-center">
        <a class="title_2"><h2>紙箱王-紙箱動物園</h2></a>
    </div>
    <div class="text-center">
        <img src="image/zoo.jpg">
        <br>
    <h4>紙箱動物園裡展示著各種用紙做成的珍禽猛獸,天上飛的,地上爬的全都維妙維肖的展現在紙箱動物園裡,<br>也讓每一位來到紙箱王的遊客驚呼連連,不知不覺的拿起相機與動物們合照留影
    </h4></div>
    <div class="text-center">
        <a class="title_2"><h2>紙箱王-紙箱故事館</h2></a>
    </div>

    <div class="text-center">
        <img src="image/story.jpg">
        <br>
    <h4>紙箱故事館裏頭有許多用紙做成物品，生活中的所有物品都可以用紙製作出來，可以在這裡帶些伴手禮送給朋友。
    </h4></div>
        <br>

<div class="text-center">
    <iframe width="596" height="333" src="https://www.youtube.com/embed/0zGc3JXXmBc"
            frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen>

    </iframe>
    <br><h4>地址：台中市北屯區東山路二段2巷2號</h4>
    <br><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d232948.
    8500375264!2d120.73908800000001!3d24.177842!3m2!1i1024!2i768!4f13.1!3m3!1m
    2!1s0x0%3A0xc6396f0974ae0c46!2z5aSn5Z2R4pSA57SZ566x546L5Ym15oSP5ZyS5Y2A!5e
    0!3m2!1szh-TW!2stw!4v1515065532339" width="596" height="333" frameborder="0"
                style="border:0" allowfullscreen></iframe>
</div>
    <hr>
<!--   步道-->
    <h1 class="text-center">
        <a id="walk" class="visit-main-right-title" href="https://travel.taichung.gov.tw/zh-tw/Attractions/Intro/419/%E5%A4%A7%E5%9D%91%E9%A2%A8%E6%99%AF%E5%8D%80">☞大坑風景區☜</a></h1>

    <!-- 幻燈片，容易不小心刪除   -->
    <div class="huanDengPicwalk"></div>
    <!-- 幻燈片，容易不小心刪除   -->


    <br>
    <div class="text-center">
        <img src="image/walk1.jpg">
        <br>
        <h4>大坑風景區位於台中市北屯區，擁有許多自然生態，經921後發現許多溫泉，<br>步道旁有許多獼猴，喜歡大自然的朋友不要錯過。
        </h4></div>
    <div class="text-center">
        <a class="title_2"><h2>大坑風景區-步道指南</h2></a>
    </div>

    <div class="text-center">
        <img src="image/walk2.jpg">
        <br>
        <h4>☝大坑登山步道指南，由於步道非常多條且複雜，這是指南你的好幫手。
        </h4></div>
    <br>
    <div class="text-center">
        <h4>406台中市北屯區東山路一段383巷</h4>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.8278815714625!2d120.7315165143671!3d24.177768378233857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346918387f6a82c1%3A0x41ff5be388785638!2z5aSn5Z2R5Y2B6Jmf55m75bGx5q2l6YGT!5e0!3m2!1szh-TW!2stw!4v1515070042686" width="596" height="333" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>




    <hr>
<!--東東芋圓-->
    <h1 class="text-center">
        <a id="don" class="visit-main-right-title" href="http://www.don-don.com.tw/open.html">☞東東芋圓☜</a></h1>

    <!-- 幻燈片，容易不小心刪除   -->
    <div class="huanDengPicdong"></div>
    <!-- 幻燈片，容易不小心刪除   -->


    <br>

    <div class="text-center">
        <img src="image/don1.jpg">
        <br>
        <h4><p>
            芋圓是使用大甲芋頭，番薯圓則是使用大肚山的紅番薯，
            <p>
            這兩樣靈魂主角都是使用在地食材製作，本身的Q彈咬勁是沒話說，
            <p>芋頭的香氣及蕃薯香味很明顯的感受到。
            <p>    </h4></div>
    <div class="text-center">
        <h2>

        </h2>
    </div>

    <div class="text-center">
        <img src="image/don2.jpg">
        <br>
        <h4>
        </h4></div>
    <br>
    <div class="text-center">
        <h4>台中市北屯區東山路二段48-3號</h4>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.7708639580283!2d120.73889591436713!3d24.179767478156226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691845d7370029%3A0xea50d0622d44d1eb!2zNDA25Y-w5Lit5biC5YyX5bGv5Y2A5p2x5bGx6Lev5LqM5q61NDgtM-iZnw!5e0!3m2!1szh-TW!2stw!4v1515073240659" width="596" height="333" frameborder="0" style="border:0" allowfullscreen></iframe>
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
