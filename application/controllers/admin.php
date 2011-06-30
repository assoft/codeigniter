<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * Main admin controller
 *
 * @author        Steve Montambeault
 * @license        Apache License v2.0
 */
class Admin extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library("ion_auth");
    }
    
    public function index()
    {
    	if (!$this->ion_auth->logged_in()){
			$this->template->set_layout("auth", "login");
    		$this->template
    			->set_partial('header', 'login/partials/header')
    			->set_partial('metadata', 'login/partials/metadata')
    			->set_partial('menu', 'login/partials/menu')
    			->set_partial('aside', 'login/partials/aside')
    			->set_partial('footer', 'login/partials/footer');
			$this->template->build("login/login");
			//redirect("admin/login", "refresh");
			
		}else{
    	$this->template->title(lang('cp_admin_title'))
            ->build('admin/dashboard');
		}
    }
    
	//log the user in
	function login()
	{
		$this->data['title'] = "Administrator Login";
		$this->template->title(lang("cp_login_title"));

		//validate form input
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true)
		{ //check to see if the user is logging in
			//check for "remember me"
			$remember = (bool) $this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember))
			{ //if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				//redirect($this->config->item('base_url'), 'refresh');
				redirect('admin', 'refresh');
			}
			else
			{ //if the login was un-successful
				//redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('admin/login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{  //the user is not logging in so display the login page
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['email'] = array('name' => 'email',
				'id' => 'email',
				'type' => 'text',
				'value' => $this->form_validation->set_value('email'),
			);
			$this->data['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
			);

			$this->template->set_layout("auth", "login");
    		$this->template
    			->set_partial('header', 'login/partials/header')
    			->set_partial('metadata', 'login/partials/metadata')
    			->set_partial('menu', 'login/partials/menu')
    			->set_partial('aside', 'login/partials/aside')
    			->set_partial('footer', 'login/partials/footer');
			$this->template->build('login/login', $this->data);
			
			//$this->template->build("login", $this->data);
		}
	}

	//log the user out
	function logout()
	{
		$this->data['title'] = "Logout";

		//log the user out
		$logout = $this->ion_auth->logout();

		//redirect them back to the page they came from
		redirect('admin', 'refresh');
	}
}
/* end of file: admin.php*/
/* Location: ./application/controllers/admin.php */

