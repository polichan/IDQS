<!DOCTYPE html>
<html lang="zh-CN">
 <head>
  <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title>
		IDQS - 三中信息泄漏查询系统
	</title>
  <link href="./style/css/style.css" rel="stylesheet">
  <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </head>
    <body>
      <div class="container">
        <h2 class="form-signin-heading">个人信息泄漏查询系统</h2>
        <div class="panel panel-danger">
          <div class="panel-heading">
            <h3 class="panel-title">
              <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>
              &nbsp公告</h3>
          </div>
          <div class="panel-body">
            经本人于2019年02月02日挖掘发现，上海市三林中学某旁站存在 SQL 注入漏洞；且种种迹象表面服务器于2011年已被入侵植入木马，因此强烈怀疑大量教职工及学生信息已经遭到泄漏，所以开发此个人信息泄漏查询系统。以警醒各位。
          </div>
        </div>

        <form class="form-search">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="请输入待查询姓名" aria-describedby="basic-addon1" required="" autofocus="" id="QueryName">
          </div>
          <!--ajax shows-->
          <div  class="panel panel-default panel-top">
            <div id="result" class="panel-body">
              <span class="glyphicon glyphicon glyphicon-minus-sign" aria-hidden="true"></span>
              等待查询中...
            </div>
          </div>

          <div class="checkbox"><!-- user checkbox to make padding -->
        </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" onclick="query()" href="#" >开始查询</button>
        </form>

        <div class="panel panel-default panel-top">
          <div class="panel-body">
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
            开发人：陈鹏宇
          </div>
          <div class="panel-footer">
            Developed on Feb.4th | Current Version: 0.0.1 STABLE
          </div>
        </div>
      </div>
      <div>
      </div>
      <!-- AJAX JS-->
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
<!--Particles-->
<div id="particles-js"></div>
<script type="text/javascript" src="./style/js/particles.js"></script>
<script type="text/javascript" src="./style/js/app.js"></script>
    </body>
  </html>
