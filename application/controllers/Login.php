<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Login ";
        if ($this->session->userdata('user_role') != NULL && $this->session->userdata('user_pin') != NULL) {
            redirect('dashboard');
        } else {

            $this->load->view('web/header', $data);
            $this->load->view('login', $data);
            $this->load->view('web/footer', $data);
        }
    }

}
