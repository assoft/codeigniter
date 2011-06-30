<?php 
class Admin extends Admin_Controller{
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		
	}
	
	function user_list(){
		$data["users"] = $this->ion_auth->get_users();
		$this->template->build("admin/userlist", $data);
	}
	
	function edit(){
		
	}
	
	function profile($username=null){
		if(isset($username)){
			$data["user"] = $this->ion_auth->get_user_by_username($username);
			$this->template->build("admin/profile", $data);
			
		}
	}
}

?>