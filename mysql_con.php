<?php
mysqli_set_charset($sql,utf8);//声明数据库为'utf-8'
$con = mysqli_connect("localhost","root","","xueji") or die("数据库访问出错".mysql_error());//数据库连接，选择数据库名为‘xueji’
?>