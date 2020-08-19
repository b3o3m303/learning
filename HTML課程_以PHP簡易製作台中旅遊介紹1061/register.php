<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>註冊</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="css/allcss.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="container">
    <form method="post" id="register_form" role="form" data-toggle="validator" action="register_finish.php"  >
        <div class="form-group">
            <label for="name">姓名：</label>
            <input id="inputName" name="name" type="text" class="form-control" placeholder="姓名" required="required">
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="email">電子信箱：</label>
            <input id="inputEmail" name="email" class="form-control" type="email"
                   placeholder="電子郵件地址" data-error="郵件格式錯誤" required="required">
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="password">密碼：</label>
            <input id="inputPassword" name="passwd" class="form-control" type="password" placeholder="設定密碼" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{6,}$"
                   data-error="請輸入含有英文字母及數字的密碼，至少六個字元。" required="required">
            <label for="tag">請輸入含有英文字母及數字的密碼，至少六個字元。</label>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="passwordche">確認密碼：</label>
            <input id="inputConfirmPassword" name="ConfirmPassword" class="form-control" type="password" placeholder="確認密碼" data-match="#inputPassword" data-error="密碼未吻合！" required="required">
            <div class="help-block with-errors"></div>
        </div>
        <input type="submit" value="註冊" class="btn btn-danger btn-block" />
    </form>
</div>



</body>
</html>


