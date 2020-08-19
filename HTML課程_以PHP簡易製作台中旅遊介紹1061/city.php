<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>大台中旅遊網</title>
<!-- InstanceEndEditable -->
<!-- Bootstrap -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="css/css_S.css" rel="stylesheet" type="text/css">
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
</head>
<body class="bgcolor_1">

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
      <h1 class="text-center">台中核心景點</h1>
    </div>
  </div>

   <!-- InstanceBeginEditable name="EditRegion3" -->
   <div>
      <ul class="ul1">
 		<li class="li1">
			<div class="shape">
	  			<a class="overlay round"></a>
	
	  			<div class="details">
					<span class="heading">逢甲商圈</span>
		 			<hr/>
	  				<p>逢甲商圈位於逢甲大學旁，從文華路一直延伸到福星路。因位於學區與市區的地緣關係，逐漸成為台中夜市集團的龍頭。</p>		
   					<a href="city_03.php" class="button">more...</a>
                </div>

				<div class="bg"></div>
	
				<div class="base">
				<img src="http://1.bp.blogspot.com/-25s_9nGyJc0/T1_0iomdRAI/AAAAAAAAAGs/WeaAqv3Revs/s1600/DSC09488.JPG" width="300" height="300" />
				</div>
	
			</div>	
	
		</li>

          <li class="li1">
	
	 		<div class="shape">
	    		<a class="overlay hexagon"></a>
      
	  			<div class="details">
					<span class="heading">台中國家歌劇院</span>
					<hr/>
		  			<p>台中國家歌劇院位於臺中市西屯區七期重劃區，是一大型公有展演空間。由日本建築師伊東豊雄設計。這完美建築內，有三座專業劇場以及一個多功能空間「角落沙龍」。</p>		
					<a href="city_01.php" class="button">more...</a>
				
                </div>
				<div class="bg"></div>	
                
                <div class="base">
					<img src="http://farm3.staticflickr.com/2868/33252976944_bbbb51863c_b.jpg"  width="300" height="300" />
				</div>
			</div>	
	
		</li>

          <li class="li1">
	
			<div class="shape">
	  			<a class="overlay pentagon"></a>
	  			<div class="details">
				<span class="heading">勤美草悟道</span>
				<hr />
		  		<p>勤美誠品綠園道至市民廣場，如行草般的行雲流水，發現生活感動；在草悟道，悠遊於綠藝之間，看見一座城市的兩種態度。</p>		
				<a href="city_02.php" class="button">more...</a>
			    </div>
			
                <div class="bg"></div>
			
            	<div class="base">
					<img src="https://pic.pimg.tw/xiung0221/1344042696-410731314_n.jpg" width="300" height="300" />
				</div>
			</div>	
		</li>

     </ul>
   </div>
   
   <!-- InstanceEndEditable -->
 
 
 

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
<!-- InstanceEnd --></html>
