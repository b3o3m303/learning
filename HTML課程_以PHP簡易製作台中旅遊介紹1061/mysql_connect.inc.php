<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php

$db_server = "localhost";
$db_name = ""; //input name
$db_user = "";//input user
$db_passwd = "";//input passwd

$con = mysqli_connect($db_server,$db_user,$db_passwd,$db_name);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "";
}
/* change character set to utf8 */
$con->set_charset("utf8");

?>

