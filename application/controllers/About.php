<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "About Us ";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/about', $data);
        $this->load->view('web/footer', $data);
    }
    
      public function ourteam() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "About Our team ";
        
        $data['allstaff']=$this->db->query("SELECT * FROM staffs")->result();
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/about_team', $data);
        $this->load->view('web/footer', $data);
    }

}
