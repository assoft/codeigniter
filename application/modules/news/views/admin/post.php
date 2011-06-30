<?php
    $options = array(
        "title"         => $this->input->post("title"),
        "description"   => $this->input->post("description"),
        "content"       => $this->input->post("content"),
        "cat_id"        => $this->admin_news_model->_get_catid($this->input->post("cat")),
        "insert_id"     => $this->session->userdata("id"),
        "insert_date"   => time(),
        "insert_ip"     => $_SERVER["REMOTE_ADDR"],
    );
    $this->admin_news_model->create($options);
    redirect(base_url()."admin/news/create");
?>