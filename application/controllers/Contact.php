<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Contact Details ";


        $this->load->view('web/header', $data);
        $this->load->view('web/contact', $data);
        $this->load->view('web/footer', $data);
    }

    function send_message() {
        $name = $this->input->get('name');
        $phone = $this->input->get('phone');
        $email = $this->input->get('email');
        $subject = $this->input->get('subject');
        $message = $this->input->get('message');

        $messageData = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'date' => date("Y-m-d")
        ];

        $status = $this->db
                ->insert('messages', $messageData);
    }

}
