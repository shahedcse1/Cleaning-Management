<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {

    public function index() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Appointment ";


        $this->load->view('web/header', $data);
        $this->load->view('web/appointment', $data);
        $this->load->view('web/footer', $data);
    }

    function request_save() {
        $data['base_url'] = $this->config->item('base_url');
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $service = $this->input->post('service');

        $requestData = [
            'request_by' => $name,
            'phone' => $phone,
            'email' => $email,
            'requested_service' => $service,
            'details' => $this->input->post('details'),
            'date' => date("Y-m-d")
        ];

        $status = $this->db
                ->insert('request', $requestData);

        if ($status):
            $this->session->set_userdata('add', 'Your Appointment request send Successfully.');
        else:
            $this->session->set_userdata('notadd', 'Your Appointment request send Failed,Please try Again.');
        endif;
        redirect('Appointment');
    }

}
