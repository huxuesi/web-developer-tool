<?php
return array(
	//'配置项'=>'配置值'
	//显示调试信息
	'SHOW_PAGE_TRACE' => true,
	
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