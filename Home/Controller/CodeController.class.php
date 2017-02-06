<?php
namespace Home\Controller;
use Think\Controller;
class CodeController extends PublicController {
	public function index() {
		$this->assign("currnav","unixtime");
		$this->assign("curtime",time());
		$this->display("unix");
	}
	public function unixtimeajax() {
		if( I('post.type') == '1' ){
			$date = I('post.date')." ".I('post.time');
			$res = strtotime($date);
			$this->ajaxReturn( $res );
		}else if( I('post.type') == '2' ){
			$time = date('Y-m-d H:i:s', I('post.timestamp'));
			$this->ajaxReturn( $time );
		}else{
			$this->ajaxReturn( 404 );
		}
	}
	
	public function utf8() {
		$this->assign("currnav","utf8");
		$this->display();
	}
	public function chinese() {
		$this->assign("currnav","chinese");
		$this->display();
	}
	public function UrlEncode() {
		if( I('post.type') == '1' ){
			$this->assign("oldstr", I('post.urlencode'));
			$this->assign("newstr", urlencode(I('post.urlencode')));
		}else if( I('post.type') == '2' ){
			$this->assign("newstr", I('post.urldecode'));
			$this->assign("oldstr", urldecode(I('post.urldecode')));
		}
		$this->assign("currnav","urlencode");
		$this->display();
	}
	public function unicode() {
		$this->assign("currnav","unicode");
		$this->display();
	}
	public function MD5() {
		/*if( isset($_POST["oldstr"]) ){
			$this->assign("oldstr", $_POST["oldstr"]);
			$this->assign("md5str", md5($_POST["oldstr"]));
		}*/
		$this->assign("currnav","md5");
		$this->display();
	}
	public function base64() {
		$this->assign("currnav","base64");
		$this->display();
	}
	public function escape() {
		$this->assign("currnav","escape");
		$this->display();
	}
}
