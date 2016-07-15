<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>blog</title>
<link rel="stylesheet" href="/thinkphp/Public/css/bootstrap.min.css">
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="/thinkphp/Public/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
	<div class="container" style="padding-top: 5px">
		<ul class="nav nav-pills">
			<li role="presentation">
				<a href="<?php echo U('/Home/index');?>">主页</a>
			</li>
			<li role="presentation">
				<a href="<?php echo U('/Home/Index/articleShowList');?>">文章</a>
			</li>
			<li role="presentation">
				<a href="<?php echo U('/Home/Index/about');?>">关于</a>
			</li>
			<?php if(I('session.user') == ''): ?><li role="presentation" class="col-md-push-9">
				<a href="<?php echo U('/Home/Admin/login');?>">登录</a>
			</li>
			<?php else: ?>
			<li role="presentation" class="dropdown col-md-push-9">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"
					role="button" aria-haspopup="true" aria-expanded="false">
					欢迎&nbsp<?php echo I('session.user');?>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo U('/Home/Admin/logout');?>">退出登录</a>
					</li>
				</ul>
			</li><?php endif; ?>
		</ul>
	</div>
</nav>
<div class="container col-md-offset-1  col-xs-10">
<div class="panel panel-default">
	<div class="panel-heading">
	后台管理
	</div>
	<div class="panel-body"></div>

</body>
</html>