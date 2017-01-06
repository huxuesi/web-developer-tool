<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends PublicController {
  public function index(){
  	$ipaddress = M("ipaddress");
		$res = $ipaddress->select();
		dump($res);
		
  	echo "这是首页！";
	}
}