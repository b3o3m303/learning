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

<p>
<p>
<p>
<p>
<p>

        <?php
        include ("mysql_connect.inc.php");
        if($_SESSION['email']!=null){
            ?>
            <a href="addmyfoot.php" class="btn btn-success left_1" role="button"> 新增我的足跡</a>

            <?php $email=$_SESSION['email'];
            $sql="select * from myfoot where email='$email'";
            $result = $con->query($sql);
            echo '<br>';
            echo '<div class="left_1"><h2>親愛的會員你好:</h2></div> ';

            if ($result->num_rows > 0) {
                echo '<div class="left_1"><h3>你在</h3></div>';
                while($row = $result->fetch_assoc()) {
                    echo '<div class="left_1"><h4> 日期 ：' . $row["date"]. "去了" . $row["foot"]. "<br></h4></div>";
                }
            } else {
                echo "沒有資料";
            }
        }else{
            echo'<br>';
            echo'<br>';
            echo'<br>';
            echo'<br>';
            echo'<br>';
            echo'<div class=" text-center"><a href="login.php" class="footer_1">
        <h2>很抱歉，請先登入會員</h2></a></div>';

        }
        ?>


    </body>
</html>

