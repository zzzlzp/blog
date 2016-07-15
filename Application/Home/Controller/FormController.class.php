<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{
	
	public function insert(){
		$Form = D('Form');
		if ($Form->create()) {
// 			$Form->create_time = date('y-m-d');
			if ($result = $Form->add()) {
				$this->success('数据添加成功');
			}else {
				$this->error('数据添加失败');
			}
		}else {
			$this->error($Form->getError());
		}
	}
	
	public function read($id = 0){
		$Form = M('Form');
		$date = $Form->find($id);
		if ($date) {
			$this->assign('date',$date);
		}else {
// 			var_dump($id);exit();
			$this->error('数据错误');
		}
		$this->display();
	}
}