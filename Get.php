<?php
include ('mysql_con.php');
include ('function/encrypt.php');
include ('function/check.php');
include ('function/XSSProtection.php');
error_reporting(E_ALL || ~ E_NOTICE); //Miss errors.

if (!isset($_POST['QueryName'])) {
	exit('Unauthorized Access!');
}

$name =($_POST['QueryName']); //Post 'name' from text which user entered.
$name = RemoveXSS($name);//防止XSS注入
$name = htmlspecialchars($name);
if ($name == '') {//判断名字是否为空
	echo "<tr>";
	echo '<th scope="row" >注意</th>
				<td>查询失败，姓名为空</td>
	      <td>查询失败，姓名为空</td>
				<td>查询失败，姓名为空</td>';
	echo "</tr>";
	exit;
}else if (!isAllChinese($name)) {//如果不为空则判断是不是中文
  echo "<tr>";
	echo '<th scope="row" >注意</th>
				<td>请输入中文姓名</td>
				<td>请输入中文姓名</td>
				<td>请输入中文姓名</td>';
	echo "</tr>";
	exit;
}
// 设置编码，防止中文乱码
mysqli_set_charset($con, "utf8");
$sql="SELECT * FROM sldata WHERE name = '".$name."'";//SQL语句拼接
$result = mysqli_query($con,$sql);
if ($result->num_rows ==0) {
	  echo "<tr>";
		echo '<th scope="row" >恭喜你</th>
					<td>未查询到相关记录</td>
					<td>未查询到相关记录</td>
					<td>未查询到相关记录</td>';
		echo "</tr>";
		exit;
}
$column = 1;
while($row = mysqli_fetch_array($result))
{
	$id = $row['id'];//去除数组中的身份证号
	$add = $row['address'];
	//相关数据脱敏
	$idcard = func_substr_replace($id);
	$address = func_substr_replace($add,$replacement = '*', $start =5, $length = 10);
	echo "<tr>";
	echo '<th scope="row" >'.$column.'</th>';
	echo "<td>" . $row['name']."</td>";
  echo "<td>".$idcard."</td>";
	echo "<td>".$address."</td>";
	echo "</tr>";
	$column = $column +1;
}
mysqli_close($con); //close mysql connection.
?>
