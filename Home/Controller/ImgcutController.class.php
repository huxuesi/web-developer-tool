<?php
namespace Home\Controller;
use Think\Controller;
class ImgcutController extends PublicController {
	public function index() {
		$this->assign("currnav","Imgcut");
		$this->display("imgcut");
	}
	
	public function imgcompress() {
		$this->assign("currnav","Imgcompress");
		$this->display("imgcompress");
	}
	
	public function imgcompressfun() {
		//创建目录
		$path = C("IMGCOMPRESS");
		if(!is_dir($path)){
			mkdir($path, 0755, true);
		}
		$num = trim(I('post.compressnum'));
		$imgurl = trim(I('post.imgurl'));
		$ext = empty(pathinfo($imgurl, PATHINFO_EXTENSION))?"gif":pathinfo($imgurl, PATHINFO_EXTENSION);
		$newurl = $path.'/'.date('Ymd',time()).time().mt_rand().'.'.$ext;
		if( is_numeric( $num ) && $imgurl!='' ){
			$image = new \Think\Image(\Think\Image::IMAGE_IMAGICK);
			$image->open( './'.$imgurl );
			$image->save($newurl, null, $num);
			$this->ajaxReturn( ltrim($newurl, './') );
		}else{
			$this->ajaxReturn( 404 );
		}
	}
	
	public function imgup() {
		if( $_FILES['file']['error'] == "0" ){
			$upload = new \Think\Upload( C('HOME_UPIMG') );	// 实例化上传类
	    // 上传单个文件 
    	$info = $upload->uploadOne($_FILES['file']);
	    if(!$info) {
        //$this->error($upload->getError());
        $photo_url = 404;
	    }else{	// 上传成功
				$photo_url = $info['savepath'].$info['savename'];
	    }
		}
		$this->ajaxReturn( $photo_url );
	}
	
	public function imgcut() {
		//创建目录
		$path = C("IMGOUT");
		if(!is_dir($path)){
			mkdir($path, 0755, true);
		}
		$width = trim(I('post.width'));
		$height = trim(I('post.height'));
		$x1 = trim(I('post.x1'));
		$y1 = trim(I('post.y1'));
		$imgurl = trim(I('post.imgurl'));
		$ext = empty(pathinfo($imgurl, PATHINFO_EXTENSION))?"gif":pathinfo($imgurl, PATHINFO_EXTENSION);
		$newurl = $path.'/'.date('Ymd',time()).time().mt_rand().'.'.$ext;
		if( is_numeric( $width ) && is_numeric( $height ) && is_numeric( $x1 ) && is_numeric( $y1 ) && $imgurl!='' ){
			$image = new \Think\Image(\Think\Image::IMAGE_IMAGICK);
			$image->open( './'.$imgurl );
			$image->crop($width, $height, $x1, $y1)->save($newurl);
			$this->ajaxReturn( ltrim($newurl, './') );
		}else{
			$this->ajaxReturn( 404 );
		}
	}
	
	public function imgdown() {
		//创建目录
		$path = C("IMGDOWN");
		if(!is_dir($path)){
			mkdir($path, 0755, true);
		}
		$remoteurl = trim(I('post.remoteurl'));
		if( !empty($remoteurl) ){
			if( filter_var($remoteurl, FILTER_VALIDATE_URL) ){
				if( substr($remoteurl, 0, strlen(C('FULL_HOST'))) == C('FULL_HOST') ){
					$this->ajaxReturn( ltrim($remoteurl, C('FULL_HOST')) );
				}else{
					$ext = empty(pathinfo($remoteurl, PATHINFO_EXTENSION))?"gif":pathinfo($remoteurl, PATHINFO_EXTENSION);
					$newurl = $path.'/'.date('Ymd',time()).time().mt_rand().'.'.$ext;
					$imgdownload = new \Org\Net\Http();
					$imgdownload->curlDownload($remoteurl, $newurl);
					$this->ajaxReturn( ltrim($newurl, './') );
				}
			}else{
				$this->ajaxReturn( 404 );
			}
		}else{
			$this->ajaxReturn( 404 );
		}
	}
	
	public function imgdownload() {
		$remoteurl = trim(I('get.remoteurl'));
		if( !empty($remoteurl) ){
			if( filter_var($remoteurl, FILTER_VALIDATE_URL) ){
				$filename = pathinfo($remoteurl, PATHINFO_BASENAME);
				header("Content-type:application/octet-stream");
				header("Content-disposition:attachment;filename=".$filename.";");
				header("Content-Length:".filesize($remoteurl));
				readfile($remoteurl);
				exit;
			}else{
				$this->ajaxReturn( 404 );
			}
		}else{
			$this->ajaxReturn( 404 );
		}
	}
}
