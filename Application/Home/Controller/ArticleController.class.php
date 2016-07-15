<?php
namespace Home\Controller;
use Think\Controller;

class ArticleController extends AdminController{
	
	 public function _initialize(){
		if (!isset($_SESSION['user'])) {
			$this->error('请登录',U('/Home/admin/login'));
		}
	}
	public function edit( $id='' ){
		$this->display();
	}
	
	public function add($id=''){
		if (IS_POST) {
			$article = D('Article');
			if ($article->create()) {
				if (empty($id)) {
					//保存
					$result = $article->add();
				}else {
					//编辑
					$result = $article->where(array('id'=>$id))->save();
				}
				if ($result) {
					$this->success('保存成功',U('Home/Index/articleShowList'));
				}else {
					$this->error("保存失败");
				}
			}else {
				$this->assign('error', $article->getError());
				$this->assign('data',$_POST);
				$this->display();
			}
		}else {
			$this->display();
		}
	}
	
	public function articleDelete($id=''){
		if (empty($id)) {
			$this->error('参数错误');
		}else {
			$article = D('Article');
			if ($article->delete($id)) {
				$this->success('删除成功', U('/Home/Index/articleShowList'));
			}else {
				$this->error('删除失败', U('/Home/Index/articleShowList'));
			}
		}
	}
	
	public function articleEdit($id=''){
		if (empty($id)) {
			$this->error('参数错误');
		}else {
			$article = D('Article');
			$result = $article->find($id);
			$this->assign('data',$result);
			$this->display('add');
		}
	}
}