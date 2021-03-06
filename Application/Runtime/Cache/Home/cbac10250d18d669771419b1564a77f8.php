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
	<!-- Default panel contents -->
	<div class="panel-heading">添加</div>
	<div class="panel-body">
		<?php if($error != ''): ?><div class="alert alert-danger" role="alert"><?php echo ($error); ?></div><?php endif; ?>
		<form name="article" action="<?php echo U('/Home/Article/add',array('id'=>$data['id']));?>" method="post">
			<table class="table text-center">
				<tr>
					<td>标题:</td>
					<td>
						<div class="col-sm-7">
							<input type="text" name="title" class="form-control"
								value="<?php echo ($data["title"]); ?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>作者:</td>
					<td>
						<div class="col-sm-7">
							<input type="text" name="author" class="form-control"
								placeholder="<?php echo I('session.user');?>"
								value="<?php echo ((isset($data["author"]) && ($data["author"] !== ""))?($data["author"]):I('session.user')); ?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>内容:</td>
					<td>
						<textarea name="content" class="form-control" rows="5"><?php echo ($data["content"]); ?></textarea>
					</td>
				</tr>
			</table>
			<div class="panel-footer">
				<button type="submit" class="btn btn-success col-md-offset-10">提交</button>
				<a href="<?php echo U('/Home/Index/articleShowList');?>" class="btn btn-info">返回</a>
			</div>
		</form>
	</div>
</div>