<?php
namespace Home\Controller;
use Think\Controller;
class CodeController extends PublicController {
	public function index() {
		$this->assign("currnav","unixtime");
		$this->assign("curtime",time());
		$this->display();
	}
	public function unixtimeajax() {
		
		$this->ajaxReturn( time() );
	}
	
	public function utf8() {
		$this->assign("currnav","utf8");
		$this->display();
	}
	public function UrlEncode() {
		$this->assign("currnav","urlencode");
		$this->display();
	}
	public function unicode() {
		$this->assign("currnav","unicode");
		$this->display();
	}
	public function MD5() {
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
