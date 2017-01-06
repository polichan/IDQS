<?php
$db_host = '';
$db_user = '';
$db_pw = '';
$db_name = '';

$con = mysqli_connect($db_host, $db_user, $db_pw, $db_name) or die("数据库访问出错".mysqli_error());
?>
