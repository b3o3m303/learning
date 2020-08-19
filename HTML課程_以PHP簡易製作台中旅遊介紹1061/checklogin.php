<?php session_start(); ?>
<?php
include("mysql_connect.inc.php");
$email = $_POST['email'];
$passwd = $_POST['passwd'];
//搜尋資料庫資料
$sql = "SELECT * FROM member where email = '$email' and passwd='$passwd'";
$result = mysqli_query($con,$sql);

if($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $temp_array[] = $row;
        echo "成功登入等待跳轉";
        header('Location: IP/main.php');

        $_SESSION['email'] = $email;
        exit;
    }

} else{echo "Login Failed";}

?>