<?php
return array(
	//'配置项'=>'配置值'
	'FULL_HOST' => $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/',
	'TITLE' => '前端常用工具合集',

	//允许上传图片最大值  M
	'MAX_UPLOAD_SIZE' => 20,
	//允许处理图片最大值  M
	'MAX_CUT_SIZE' => 7,
	//生成的目录
	'IMGOUT' => './Public/uploads/imgout/'.date('Ymd',time()),
	'IMGDOWN' => './Public/uploads/download/'.date('Ymd',time()),
	'IMGCOMPRESS' => './Public/uploads/compress/'.date('Ymd',time()),
	//生成随机不重复文件名
	'DNRTFN' => date('YmdHis',time()).mt_rand(),

	//显示调试信息
	'SHOW_PAGE_TRACE' => false,
	
	//后台账号密码
	//'ADMIN_USER' => 'admin',
	//'ADMIN_PWD' => 'admin',

	//不需要登录验证的控制器
	//'ALLOW_ACTIONS' => 'Index/login,Index/oauth,Admin/Index/login',
	
	//静态资源目录
	'TMPL_PARSE_STRING' => array(
		'_CSSPATH_' => __ROOT__.'/Public/css',
		'_JSPATH_' => __ROOT__.'/Public/js',
		'_IMGPATH_' => __ROOT__.'/Public/images'
	),

	//设置前台图片上传格式
	'HOME_UPIMG' => array(
		'maxSize' => C('MAX_CUT_SIZE'),					//设置文件上传大小
		'exts' => array('jpg', 'gif', 'png', 'jpeg'),			//设置文件上传类型
		'rootPath' => "./",																//设置文件上传根目录
		'savePath' => 'Public/uploads/home/',							//设置附件上传（子）目录
		'subName' => array('date','Ymd'),									//子目录命名格式
		'saveName' => C('DNRTFN')													//文件命名防重复
	),

	'DEFAULT_MODULE' => 'Home',		//设置请求的默认分组
	'MODULE_ALLOW_LIST' => array('Home','Admin'),	//设置对比的分组列表

	// 数据库设置
	'DB_TYPE'               =>  'mysql',     	// 数据库类型
	'DB_HOST'               =>  'localhost', 	// 服务器地址
	'DB_NAME'               =>  'tool',   			// 数据库名
	'DB_USER'               =>  'tool',      	// 用户名
	'DB_PWD'                =>  '1R7c&etxKTafkc9r-tool',      	// 密码
	'DB_PORT'               =>  '3306',      	// 端口
	'DB_PREFIX'             =>  'hxs_',     		// 数据库表前缀
	'DB_CHARSET'			  		=>  'utf8',	 		 	//数据库编码

	//开启Smarty模板引擎
	//'TMPL_ENGINE_TYPE' => 'Smarty',
	//Smarty相关配置
	/*'TMPL_ENGINE_CONFIG' => array(
		'left_delimiter' => '<%%%',
		'right_delimiter' => '%%%>',
	),*/
);