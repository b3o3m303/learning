<?php session_start(); ?>
<?php
include ("mysql_connect.inc.php");
$loc=$_POST['loc'];
$date=$_POST['date'];
if($_SESSION['email']!=null){
    $email=$_SESSION['email'];

    $sql="insert into myfoot (email,date,foot) VALUES ('$email','$date','$loc')";
    if ($con->query($sql) === TRUE) {
        echo '新增成功!';
        header('Location: IP/myfoot.php');
        exit;

    }
}else{
    echo"很抱歉，請先登入會員";

}
?>