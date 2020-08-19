<?php session_start(); ?>
    <!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>登入</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="css/allcss.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="container">
        <div class="col-md-offset-4 col-md-4">
            <form method="post" role="form" action="checklogin.php">
                <div class="form-group">
                    <label for="email">帳號</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="請輸入帳號">
                </div>
                <div class="form-group">
                    <label for="passwd">密碼</label>
                    <input type="password" class="form-control" id="passwd" name="passwd" placeholder="請輸入密碼">
                </div>
                <button type="submit"class="btn btn-default">登入</button><a href="register.php"class="btn btn-info"role="button">註冊</a>
            </form>

        </div>
    </div>
</body>

</html>