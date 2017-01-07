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
		$curl = curl_init();
	  curl_setopt($curl, CURLOPT_URL, $taobaoIP);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	  $output = curl_exec($curl);
	  curl_close($curl);
    $IPinfo = json_decode($output);
    $province = $IPinfo->data->region;
    $city = $IPinfo->data->city;
    $address = $province.$city;
		
		echo $address;
		
		$data['ip'] = ip2long($IPaddress);
		$data['address'] = $address;
		$data['time'] = time();
		$ipaddress -> add($data);
		
		echo "本站提供各种工具！";
	}


}
