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
	
	public function imgcut(){
		if( is_numeric( I('post.width') ) && is_numeric( I('post.height') ) && is_numeric( I('post.x1') ) && is_numeric( I('post.y1') ) && I('post.imgurl')!='' ){
			$imgurl = I('post.imgurl');
			$image = new \Think\Image();
			$image->open( './'.$imgurl );
			//创建目录
			$path="./Public/uploads/imgout/".date("Ymd",time());
			if(!is_dir($path)){
				mkdir($path, 0755, true);
			}
			$newurl = str_replace("home", "imgout", $imgurl);
			
			$image->crop(I('post.width'), I('post.height'), I('post.x1'), I('post.y1'))->save('./'.$newurl);
			$this->ajaxReturn( $newurl );
		}else{
			$this->ajaxReturn( "Public/error.png" );
		}
	}
}
