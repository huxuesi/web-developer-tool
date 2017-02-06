<?php
namespace Home\Controller;
use Think\Controller;
class GeekController extends PublicController {
	public function index() {
		$this->assign("currnav","jschange");
		$this->display("jschange");
	}
}
