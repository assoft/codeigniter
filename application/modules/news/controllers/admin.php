<?php
class Admin extends Admin_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model("admin_news_model");
    }
    
    function dashboard(){
        
    }
    
    function create(){
        $data["categories"] = $this->admin_news_model->_get_cat();
        $data["cat_id"] =  $this->admin_news_model->_get_catid("Global");
        $this->template->build("admin/create", $data);
    }
    
    function post(){
        $this->template->build("admin/post");
    }
    
    function get_contents($options=array()){
        if(isset($options["cat_id"]))
            $this->db->where("cat_id", $options["cat_id"]);
        
        $result = $this->db->get("content");
        
    }
    
    function content_list(){
        $data["contents"] = $this->admin_news_model->get_contents();
        $this->template->build("admin/list", $data);
    }
}