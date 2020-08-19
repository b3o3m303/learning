<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//將session清空
unset($_SESSION['email']);
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" http-equiv="refresh" content="1 url=main.php"  >
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/allcss.css" rel="stylesheet" type="text/css">

    <title>logout</title>
</head>
<body class="bgcolor_all">

<div class="text-center">
    <h2><a class="footer_1">登出中....</a><p>
            <a href="main.php">回到首頁</a> <p></div></h2>
</body>
</html>