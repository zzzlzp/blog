<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>blog</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="/thinkphp/Public/css/bootstrap.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="/thinkphp/Public/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container" style="padding-top: 5px">
			<ul class="nav nav-pills">
				<li role="presentation" class="active">
					<a href="<?php echo U('index');?>">主页</a>
				</li>
				<li role="presentation">
					<a href="<?php echo U('/Home/Edit/show');?>">文章</a>
				</li>
				<li role="presentation">
					<a href="#">关于我们</a>
				</li>
				<li role="presentation" class="dropdown col-md-push-10">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"
						role="button" aria-haspopup="true" aria-expanded="false">
						登录
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">sad</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container col-md-offset-1  col-xs-10">
	<div class="panel panel-default">
		<div class="panel-heading">文章</div>
		<div class="panel-body"></div>
		<table class="table" style="text-align: center]">
			<tr>
				<th>id</th>
				<th>标题</th>
				<th>作者</th>
				<th>时间</th>
			</tr>
			<?php if(is_array($edit)): $i = 0; $__LIST__ = $edit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($data["id"]); ?></td>
			<td><?php echo ($data["title"]); ?></td>
			<td><?php echo ($data["author"]); ?></td>
			<td><?php echo ($data["create_time"]); ?></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
	</div>
</div>
</body>
</html>