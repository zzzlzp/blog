<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>blog</title>
<link rel="stylesheet" href="/thinkphp/Public/css/bootstrap.min.css">
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="/thinkphp/Public/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="padding-top: 200px;">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">管理员登录</div>
			<div class="panel-body">
			<?php if($error != ''): ?><div class="alert alert-danger" role="alert"><?php echo ($error); ?></div><?php endif; ?>
				<form class="form-horizontal" action="<?php echo U(admin_login);?>"
					method="POST">
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