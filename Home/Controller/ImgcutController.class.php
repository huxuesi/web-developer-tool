<?php
namespace Home\Controller;
use Think\Controller;
class ImgcutController extends PublicController {
	public function index() {
		$this->assign("currnav","Imgcut");
		$this->display();
	}
	
	public function imgup() {
		if( $_FILES['file']['error'] == "0" ){
			$upload = new \Think\Upload( C('HOME_UPIMG') );	// 实例化上传类
	    // 上传单个文件 
    	$info = $upload->uploadOne($_FILES['file']);
	    if(!$info) {
        //$this->error($upload->getError());
	    }else{	// 上传成功
				$photo_url = $info['savepath'].$info['savename'];
	    }
		}
		$this->ajaxReturn( $photo_url );
	}
}
