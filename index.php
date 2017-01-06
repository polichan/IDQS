<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/uikit.gradient.css">
<link rel="stylesheet" type="text/css" href="./css/notify.css">
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.js"></script>
<script type="text/javascript" src="./js/notify.js"></script>
<script src="./js/uikit.min.js"></script>
<head>
	<title>三林中学学籍号查询系统</title>
</head>
<body>
<div class="index-container uk-animation-scale-down">
<div class="FirstPart">
		    <h1 class="title">ID Query System</h1>
</div>
<div class="SecondPart">
<!--创建form-->
    <form name="QueryForm" method="post" action="Get.php" class="uk-form" onsubmit="return InputCheck(this)">
    <fieldset data-uk-margin>
    <!--添加控件-->
        <input type="text" name="QueryName" id="QueryName" placeholder="请输入查询学生姓名" class="ui-margin-small-top">
        <button type="submit" name="submit" value="查询" class="uk-button uk-margin-small">查询</button>
    </fieldset>
    </form>
</div>
</div>
<!--引入粒子效果-->
<div id="particles-js">
</div>
<!--引入粒子JS-->
<script src="./js/particles.js"></script>
<script src="./js/app.js"></script>
</body>
</html>
