<?php
namespace Home\Controller;
use Think\Controller;
class FinancialController extends PublicController {
	public function index() {
		$this->assign("currnav","financial");
		$this->display("kline");
	}
}
