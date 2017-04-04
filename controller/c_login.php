<?php 
	class login {
 
   		public function index() {
			// return $_SESSION;
			$state = "login";
			// var_dump($_SESSION);
			// exit();
   			if( isset($_SESSION['userid']) )
   			{
   				$state = "home";
   			}
   			return $state;
		}

		public function login_check($email,$pass) {
			return 2;
		}

		public function save_state() {
			return "state";
		}	

		public function get_userid() {
			return 1;
		}

		public function new_user_registration( $action, $arr_post ) {
			// var_dump($arr_post);
			return "aww";
		}
	}
?>