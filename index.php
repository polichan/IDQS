<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />  
  <title>
		IDQS
	</title> 
  <link rel="stylesheet" type="text/css" href="./css/uikit.css" /> 
  <link rel="stylesheet" type="text/css" href="./css/uikit.gradient.css" /> 
  <link rel="stylesheet" type="text/css" href="./css/style.css" /> 
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.js"></script> 
  <script type="text/javascript" src="./js/uikit.min.js"></script> 
  <script type="text/javascript" src="./js/notify.js"></script> 
 </head> 
 <body> 
  <!--Main Controller--> 
  <div class="index-main-body uk-animation-scale-down"> 
   <div class="header-text"> 
    <h1 class="uk-text-center uk-text-nowrap">IDQS</h1> 
    <h2 class="uk-text-center subtitle uk-text-nowrap">IDENTITY-QUERY-SYSTEM</h2> 
   </div> 
   <!--ajax shows--> 
   <div id="result" class="get-result uk-text-nowrap uk-text-center"> 
   </div> 
   <!--ajax shows end--> 
   <!--Functions Controller--> 
   <div class="main-ui"> 
    <div name="QueryForm" class="uk-form"> 
     <!-- Input text --> 
     <fieldset class="parent-element"> 
      <input type="text" name="QueryName" id="QueryName" placeholder="Please input a name." class="input-name" /> 
     </fieldset> 
     <!-- Input button --> 
     <div class="button-ui"> 
      <button type="submit" name="submit" value="Search" class=" search-button" href="#" onclick="query()">Search</button> 
     </div> 
    </div> 
   </div> 
   <div> 
    <p class="uk-article-meta uk-text-center bottom-text uk-text-nowrap">Developed in January 7th,2017 by CallanThorse | Source Code: <a href="https://github.com/CallanThorse/IDQS" target="_blank">Github</a></p> 
    <!--in Chinese--
	<p class="uk-article-meta uk-text-center bottom-text uk-text-nowrap">由 史瑞斯 完成于 2017年1月7日 | 开源在 <a href="https://github.com/CallanThorse/IDQS" target="_blank">Github</a></p>
	--> 
   </div> 
  </div> 
  <!--Particles--> 
  <div id="particles-js"></div> 
  <script type="text/javascript" src="./js/particles.js"></script> 
  <script type="text/javascript" src="./js/app.js"></script> 
  <!--AJAX--> 
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
  <!--AJAX end.-->   
 </body>
</html>
