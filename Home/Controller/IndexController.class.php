<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends PublicController {
	public function index() {
		$ipaddress = new \Model\ipaddressModel();
		$ipaddress->index();
		$this->display();
	}


}
