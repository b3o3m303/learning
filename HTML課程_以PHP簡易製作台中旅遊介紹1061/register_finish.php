<?php session_start(); ?>
<?php
include("mysql_connect.inc.php");
$passwd = $_POST['passwd'];
$name = $_POST['name'];
$email = $_POST['email'];
$pw2=$_POST['ConfirmPassword'];


if($name != null && $passwd != null && $pw2 != null && $passwd == $pw2 && $email!=null ){
    $sql = "insert into member (email, passwd, name)values('$email','$passwd','$name')";
    if ($con->query($sql) === TRUE) {
        echo '新增成功!';
        header('Location: login.php');//跳轉至login.php
        exit;
    }
    else
    { echo'新增失敗!帳號重複';
    }
}
else
{
    echo '您無權限觀看此頁面!';
}
?>
