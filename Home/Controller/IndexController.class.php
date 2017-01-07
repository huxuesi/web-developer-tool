<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends PublicController {
	public function index() {
		$ipaddress = M("ipaddress");

		if (isset($_SERVER)) {
			if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
				$IPaddress = $_SERVER["HTTP_X_FORWARDED_FOR"];
			} else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
				$IPaddress = $_SERVER["HTTP_CLIENT_IP"];
			} else {
				$IPaddress = $_SERVER["REMOTE_ADDR"];
			}
		} else {
			if (getenv("HTTP_X_FORWARDED_FOR")) {
				$IPaddress = getenv("HTTP_X_FORWARDED_FOR");
			} else if (getenv("HTTP_CLIENT_IP")) {
				$IPaddress = getenv("HTTP_CLIENT_IP");
			} else {
				$IPaddress = getenv("REMOTE_ADDR");
			}
		}

		$taobaoIP = 'http://ip.taobao.com/service/getIpInfo.php?ip='.$IPaddress;
    $IPinfo = json_decode(file_get_contents($taobaoIP));
    $province = $IPinfo->data->region;
    $city = $IPinfo->data->city;
    $address = $province.$city;
		
		$data['ip'] = ip2long($IPaddress);
		$data['address'] = $address;
		$data['time'] = time();
		$ipaddress -> add($data);
		
		echo "本站提供各种工具！";
	}


}
