<?php
error_reporting(E_ALL || ~E_NOTICE);//忽略警告
if (!isset($_POST['QueryName'])){
	exit('请勿非法访问！');
}
$name = htmlspecialchars($_POST['QueryName']);//将前端数据以“POST‘形式传入‘name'变量
if ($name=='') {
		exit('请输入学生姓名！');
}
include('mysql_con.php'); //数据库连接信息分开写
$sql  = 'SELECT *  FROM `info` WHERE `name` = \''.$name.'\'';
$result = mysqli_fetch_array(mysqli_query($con, $sql)); //将对比后的结果赋值给变量 'result'
$number = $result['number']; //将数组中下标为 number 的数据赋值给变量 ‘number'

if (!isset($number)) {
	echo "抱歉，系统没有查询到「".$name."」的学籍号，请重新输入。";
} else {
	echo "您查询的学生「".$name."」的学籍号为：".$number."。";
}
mysqli_close($con);//关闭数据库连接
?>
