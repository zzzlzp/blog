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
		文章
		<?php if(I('session.user') != ''): ?><a href="<?php echo U('/Home/Article/add');?>" class="btn btn-success col-md-offset-11">添加</a><?php endif; ?>
	</div>
	<div class="panel-body"></div>
	<table class="table text-center">
		<tr>
			<th class="text-center">id</th>
			<th class="text-center">标题</th>
			<th class="text-center">作者</th>
			<th class="text-center">时间</th>
			<th class="text-center">操作</th>
		</tr>
		<?php if(is_array($edit)): $i = 0; $__LIST__ = $edit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($data["id"]); ?></td>
			<td><?php echo ($data["title"]); ?></td>
			<td><?php echo ($data["author"]); ?></td>
			<td><?php echo ($data["create_time"]); ?></td>
			<td>
				<a type="button" class="btn btn-info btn-xs" href="<?php echo U('/Home/Index/articleShow',array('id'=>$data['id']));?>">查看</a>
				<?php if(I('session.user') != ''): ?><a type="button" class="btn btn-primary btn-xs" href="<?php echo U('/Home/Article/articleEdit',array('id'=>$data['id']));?>">编辑</a>
				<a type="button" class="btn btn-danger btn-xs" href="<?php echo U('/Home/Article/articleDelete',array('id'=>$data['id']));?>">删除</a><?php endif; ?>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</div>
</body>
</html>