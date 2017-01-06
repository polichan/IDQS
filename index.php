<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/uikit.gradient.css">
<!--New feature (notify) but there is a  bug --
<link rel="stylesheet" type="text/css" href="./css/notify.css">
-->
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.js"></script>
<script src="./js/uikit.min.js"></script>
<head>
	<title>IDQS</title>
</head>
<body>
<!--New feature (notify) but there is a  bug --
<input type="button" onclick="test()" value="TEST">
-->
<div class="index-container uk-animation-scale-down">
<div class="FirstPart">
		    <h1 class="title" style="text-align:center;">ID Query System</h1>
</div>
<div class="SecondPart">
<!--Create Forms-->
    <div name="QueryForm" class="uk-form">
    <fieldset data-uk-margin>
    <!--Add controls-->
        <input type="text" name="QueryName" id="QueryName" placeholder="Please input a name." class="ui-margin-small-top">

        <button type="submit" name="submit" value="Search" class="uk-button uk-margin-small" href="#" onclick="query()">Search</button>
    </fieldset>
	</div>
		<div id="result"></div>
</div>
</div>
<!--include particle-js effect -->
<div id="particles-js">
</div>
<!--JavaScript-->
<script src="./js/particles.js"></script>
<script src="./js/app.js"></script>
<!--New feature (notify) but there is a bug --
<script type="text/javascript" src="./js/notify.js"></script>
<script type="text/javascript">
function test(){
	UIkit.notify("<i class='uk-icon-check'></i>Please enter a name ! ");
	}
		</script>
-->
<!-- AJAX -->
<script>
function query() { $.ajax({
	type:"post",
	url:"Get.php",
	data:'QueryName='+$('#QueryName').val(),
	success:function(msg){
		$("#result").html(msg);
	} ,
	error:function(XMLHttpRequest, textStatus, thrownError){}
})
}
</script>
</body>
</html>
