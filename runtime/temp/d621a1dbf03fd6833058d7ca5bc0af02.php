<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"/home/wwwroot/www.imxfeng.com/public/../application/admin/view/login/Login.html";i:1477988641;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录</title>
    <!-- Bootstrap -->
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
	<link href="__PUBLIC__/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="body-100">
  <div class="login-wrap">
	  <div class="login">
		<form role="form" method="post">
		  <div class="form-group">
		    <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="用户名">
		  </div>
		  <div class="form-group">
		    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="密码">
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> 自动登录
		    </label>
		  </div>
		  <button type="submit" class="btn btn-default">登录</button>
		</form>  	
	  </div>  	
  </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
  </body>
</html>