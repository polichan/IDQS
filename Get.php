<?php
error_reporting(E_ALL || ~ E_NOTICE); //Miss errors.
if (!isset($_POST['QueryName'])) {
	exit('Unauthorized Access!');
}
$name = htmlspecialchars($_POST['QueryName']); //Post 'name' from text which user entered.
if ($name == '') {
	exit("Please enter a name !");
}
include ('mysql_con.php'); //include mysql_con information.
$sql = 'SELECT *  FROM `info` WHERE `name` = \'' . $name . '\'';
$result = mysqli_fetch_array(mysqli_query($con, $sql)); //compare and assign.
$number = $result['number']; // assign data to number.
if (!isset($number)) {
	echo "Sorry,ID of「" . $name . "」can'be searched from database,please recheck!";
} else {
	echo "ID of 「" . $name . "」is : " . $number . ".";
}
mysqli_close($con); //close mysql connection.

?>
