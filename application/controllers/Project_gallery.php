<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project_gallery extends CI_Controller {

    public function index() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Gallery ";
        $data['cleaningall'] = $this->db->query("SELECT * FROM gallery WHERE image_type='1' order by date desc ")->result();
        $data['residencall'] = $this->db->query("SELECT * FROM gallery WHERE image_type='2' order by date desc ")->result();
        $data['commercialall'] = $this->db->query("SELECT * FROM gallery WHERE image_type='3' order by date desc ")->result();

        $this->load->view('web/header', $data);
        $this->load->view('web/gallery', $data);
        $this->load->view('web/footer', $data);
    }

}
