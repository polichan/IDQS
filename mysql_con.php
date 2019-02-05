<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pw = '';
$db_name = 'info';
$con = mysqli_connect($db_host, $db_user, $db_pw, $db_name) or die("Eh...Something wrong with MySql conncetion :( ".mysqli_error());
?>
