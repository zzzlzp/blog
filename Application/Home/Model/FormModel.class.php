<?php
namespace Home\Model;
use Think\Model;

class FormModel extends Model{
	protected $_validate = array(
		array('user','require','用户名不能为空'),
		array('passwd','require','密码不能为空'),
	);
	
	protected $_auto = array(
		array('create_time','time','1','function')
	);
}