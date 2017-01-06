<?php
	namespace Home\Controller;
	use Think\Controller;

	class PublicController extends Controller {
		public function _initialize() {
      /*$allow_actions = explode(',',C('ALLOW_ACTIONS')); //配置哪些操作可以不执行此函数,比如登录，验证登录
      $curr_action = CONTROLLER_NAME . '/' . ACTION_NAME;
			$is_login = $this->isLogin();
      if(!in_array($curr_action, $allow_actions) && empty($is_login)) { //未登录且是需要登录后访问的
	      if( empty(cookie('sww_reurl')) ){		//保存首次进的页面
					cookie('sww_reurl', $curr_action);
				}
				if( !empty( I("get.") ) && empty( cookie('sww_reurl_data') ) ){		//保存首次进的页面
					cookie('sww_reurl_data', json_encode(I("get.")));
				}
        $this->redirect('Index/login');
      }*/
    }

		/*public function isLogin(){
			return isset($_SESSION['user']) ? $_SESSION['user'] : null;
		}*/
	}
