<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){
        $this->display('hello');
    }
    
	public function articleShowList( $offset = 0 ){
		$data = D('article');
		$edit = $data->limit($offset)->select();
		$this->assign('edit',$edit);
		$this->display('show');
	}
    
	public function articleShow($id=''){
		if (empty($id)) {
			$this->error('参数错误');
		}else {
			$article = D('Article');
			$data = $article->find($id);
			$this->assign('data',$data);
			$this->display('articleShow');
		}
	}
    public function about(){
    	$this->display();
    }
}