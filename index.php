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
            上海市三林中学存在重大数据安全泄漏风险，本系统已搜集大量泄漏内容，请及时查询是否在泄漏名单之内！
          </div>
        </div>

        <form class="form-search">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="请输入待查询姓名" aria-describedby="basic-addon1" required="" autofocus="" id="QueryName">
          </div>
          <!--ajax shows-->
              <div  class="panel panel-default" style="
    margin-top: 20px;">
                    <!-- Default panel contents -->
                    <div class="panel-heading">FAQ</div>
                    <div class="panel-body">
                      <p>注意：查询结果将在以下列表中显示。<br/> 1. 如果您遇到查询结果中身份证号为 1 打头且 1 结尾，则代表身份证数据不存在，即身份证号可能没有被泄漏。<br/>2. 同理当户籍地址出现“无“时，则代表户籍地址可能没有被泄漏。</p>
                    </div>

                    <!-- Table -->
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>姓名</th>
                          <th>身份证号</th>
                          <th>户籍地址</th>
                        </tr>
                      </thead>
                      <tbody id = 'result'>
                        <tr>
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

        <div class="panel panel-info" style="
margin-top: 20px;">
          <div class="panel-heading">
            <h3 class="panel-title">
              <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
              &nbsp更新日志</h3>
          </div>
          <div class="panel-body">
            v2.0.1 :
            <br/>
            <li>优化了数据库</li>
            <li>修正了出现重复名字时，不能全部显示的问题</li>
            v2.0.0 :
            <br/>
            <li>新版本上线</li>
          </div>
        </div>

        <div class="panel panel-default panel-top">
          <div class="panel-body">
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
            开发人：陈鹏宇
          </div>
          <div class="panel-footer">
            如果你不嫌烦的话，可以考虑看看&nbsp<a href="https://7float.com/">我的博客</a>
            <br/>
            Developed on Feb.4th | Current Version: 2.0.1 STABLE &nbsp
            <!--CNZZ数据统计 -->
            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? "https://" : "http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1276109567'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s5.cnzz.com/z_stat.php%3Fid%3D1276109567%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>

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
