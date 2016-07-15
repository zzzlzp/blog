<?php
namespace Home\Model;
use Think\Model;

class ArticleModel extends Model{
	
	protected $_validate = array(
		array('title','require','标题不能为空'),
		array('author','require','作者不能为空'),
		array('content','require','内容不能为空'),
	);
	
	protected $_auto = array(
		array('create_time','date',1,'function',array('Y-m-d h:i:s')),
		array('update_time','date',2,'function',array('Y-m-d h:i:s')),
	);
}