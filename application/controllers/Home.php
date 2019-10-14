<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "cleanAid BD ";
        $data['allclient'] = $this->db->query("SELECT * FROM clients order by id desc")->result();



        $this->load->view('web/header', $data);
        $this->load->view('web/home', $data);
        $this->load->view('web/footer', $data);
    }

}
