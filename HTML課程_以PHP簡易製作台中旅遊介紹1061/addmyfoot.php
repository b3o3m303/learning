<?php session_start(); ?>

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
    <body class="bgcolor_all">
    <button onclick="topFunction()" id="myBtn1" title="Go to top">Top</button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn1").style.display = "block";
            } else {
                document.getElementById("myBtn1").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>


    <nav class="nav navbar-inverse navbar-fixed-top">
        <div class="container-fluid ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <!--三個一-->
                </button>
                <a class="navbar-brand" href="index.php">首頁</a>
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
                            <li><a href="myfoot.php"><span class="glyphicon glyphicon-user" style="color: rgb(255, 140, 60);"></span>我的足跡</a></li>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <form method="post" role="form" data-toggle="validator" action="addmyfoot_fin.php"  >
    <div class="form-group">
        <label for="loc">請輸入旅遊景點</label>
        <input type="text" class="form-control" id="loc" name="loc" placeholder="請輸入景點">
    </div>
    <div class="form-group">
        <label for="bookdate">日期：</label>
        <input type="date" name="date" class="form-control" id="bookdate" placeholder="2018-01-05">
    </div>

    <button type="submit" class="btn btn-default">新增</button>
    </form>
    </body>
    <div class="text-center col-md-6 col-md-offset-3">
        

        <div style="text-align:center;">
            <!--       人數-->
            <script type="text/javascript" src="http://services.webestools.com/cpt_visits/17169-17-5.js">
            </script>
        </div>
        <!--時間-->
        <script>
            var Today=new Date();
            document.write("現在時間" + Today.getFullYear()+ " 年 " + (Today.getMonth()+1) + " 月 " + Today.getDate() + " 日"
                +Today.getHours()+"點"+Today.getMinutes()+"分"+Today.getSeconds()+"秒");


        </script>


    </div>
</html>
