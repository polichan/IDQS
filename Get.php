<?php
error_reporting(E_ALL || ~ E_NOTICE); //Miss errors.
if (!isset($_POST['QueryName'])) {
	exit('Unauthorized Access!');
}
$name =($_POST['QueryName']); //Post 'name' from text which user entered.
 //XSS Protection
include ('XSSProtection.php');
$name = RemoveXSS($name);
$name = htmlspecialchars($name);
if ($name == '') {
	exit ("请填写姓名字段!");
}
include ('mysql_con.php'); // After checking the $name,start to connect MYSQL.
$sql = "SELECT *  FROM `sldata` WHERE `name` = '$name'";
$result = mysqli_fetch_array(mysqli_query($con, $sql)); //compare and assign.
$id = $result['id']; // assign data to number.
echo $id;
if (!isset($id)) {
	echo ("恭喜你，你的账号信息并没有被泄漏。");
} else {
	//echo ("ID of 「" . $name . "」is : " . $number . ".");
	echo "你的个人信息已经泄漏！姓名为：「" . $name . "」，身份证号：「" . $name . "」；";
}
mysqli_close($con); //close mysql connection.
?>
