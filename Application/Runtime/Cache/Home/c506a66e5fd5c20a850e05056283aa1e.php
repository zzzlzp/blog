<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>blog</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet"
	href="/thinkphp/Public/css/bootstrap.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="/thinkphp/Public/js/bootstrap.min.js"></script>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<title>管理员登录</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet"
	href="/thinkphp/Public/css/bootstrap.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="/thinkphp/Public/js/bootstrap.min.js"></script>
</head>


<body>
	<div class="container" style="padding-top: 200px;">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">管理员登录</div>
				<div class="panel-body">
					<form class="form-horizontal" action="<?php echo U(admin_login);?>" method="POST">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">用户名:</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" name="user"
									placeholder="请输入用户名">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">密码:</label>
							<div class="col-sm-7">
								<input type="password" class="form-control" name="passwd"
									placeholder="请输入密码">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-8 col-sm-10">
								<button type="submit" class="btn btn-default">登录</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
</body>
</html>