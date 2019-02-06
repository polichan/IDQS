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
            在这里填写内容，用来展示公告。
          </div>
        </div>

        <form class="form-search">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="请输入待查询姓名" aria-describedby="basic-addon1" required="" autofocus="" id="QueryName">
          </div>
          <!--ajax shows-->
          <div class="checkbox"><!-- user checkbox to make padding -->
        </div>
              <div  class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">查询结果</div>
                    <div class="panel-body">
                      <p>查询结果将在以下列表中展现 :)</p>
                    </div>

                    <!-- Table -->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>姓名</th>
                          <th>身份证号</th>
                          <th>家庭地址</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr id="result">
                          <th scope="row" >1</th>
                          <td>等待查询</td>
                          <td>等待查询</td>
                          <td>等待查询</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

          <div class="checkbox"><!-- user checkbox to make padding -->
        </div>
          <button class="btn btn-lg btn-primary btn-block" name="submit" onclick="query()" href="#" type="button">开始查询</button>
        </form>

        <div class="panel panel-default panel-top">
          <div class="panel-body">
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
            开发人：陈鹏宇
          </div>
          <div class="panel-footer">
            Developed on Feb.4th | Current Version: 2.0 STABLE
          </div>
        </div>
      </div>
      <!-- AJAX JS-->
      <script>
    function query() { $.ajax({
      type:"post",
      async:false,
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
