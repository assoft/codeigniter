<?php
class Admin_News_Model extends CI_Model {
    
    /**
    * Create News Method
    * ----------------------
    * @param $options array
    * 
    * @return insert_id int
    */
    function create($options=array()){
        if($this->db->insert("content", $options))
        {
            $insert_id = $this->db->insert_id();
            return $insert_id;
        }
    }
    
    
    function update($options=array()){
        
    }
    
    
    function delete($id){
        
    }
    
    function _get_cat(){
        $query = $this->db->get("content_categories");
        $result = $query->result();
        foreach ($result as $row){
            $data[] = $row->title;
        }
        return $data;
    }
    
    function _get_catid($title){
        $this->db->where("title", $title);
        $result = $this->db->get("content_categories");
        foreach($result->result() as $row){
            return $row->id;
        }
    }
    
    function get_contents($options=array()){
        $result = $this->db->get("content");
        foreach($result->result() as $row){
            $data[] = $row;
        }
        return $data;
    }
    
    function count_contents(){
        return $this->db->count_all_results("content");
    }
    
}