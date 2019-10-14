<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Blog ";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/blog', $data);
        $this->load->view('web/footer', $data);
    }

}