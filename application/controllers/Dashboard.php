<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {

        if (!in_array($this->session->userdata('user_role'), [1, 2, 3])) {
            redirect('Auth');
        }
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Dashboard ";
        $date = date('Y-m');
        $data['allrequest'] = $this->db->query("SELECT request.*,services.name AS sname FROM request JOIN services ON services.id=request.requested_service")->result();

        $data['allmessages'] = $this->db->query("SELECT * FROM messages")->result();

        $data['request_no'] = sizeof($data['allrequest']);

        $data['request_no_received'] = $this->db->query("SELECT COUNT(id) AS total FROM request  WHERE final_status='1'")->row()->total;

        $data['request_no_month'] = $this->db->query("SELECT COUNT(id) AS total FROM request  WHERE date like '%$date%'")->row()->total;

        $data['message_no'] = sizeof($data['allmessages']);

        $monthfromdate = date('Y-m', strtotime(date('Y-m') . " -11 month"));
        $data['totaldata'] = $data['period'] = [];

        for ($m = 0; $m <= 11; $m++) {
            $subval = '+' . $m . 'month';

            $data_month_query = date('Y-m', strtotime($monthfromdate . " $subval"));
            $data_month_show = date('M-y', strtotime($monthfromdate . " $subval"));

            $totalrequest = $this->db
                            ->select('COUNT(1) as total')
                            ->from('request')
                            ->where("DATE_FORMAT(date, '%Y-%m') = '$data_month_query'")
                            ->get()
                            ->row()->total;

            array_push($data['totaldata'], $totalrequest);
            array_push($data['period'], "$data_month_show");
        }


        $this->load->view('admin/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer', $data);
    }

    function request_details() {
        if (!in_array($this->session->userdata('user_role'), [1, 2, 3])) {
            redirect('Auth');
        }
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Request Details ";

        $id = $this->input->get('id');


        $data['details_request'] = $this->db->query("SELECT request.*,services.name AS sname FROM request JOIN services ON services.id=request.requested_service WHERE request.id='$id'")->row();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/request_details', $data);
        $this->load->view('admin/footer', $data);
    }

    function message_details() {
        if (!in_array($this->session->userdata('user_role'), [1, 2, 3])) {
            redirect('Auth');
        }
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Message Details ";

        $id = $this->input->get('id');


        $data['message_details'] = $this->db->query("SELECT * FROM messages WHERE id='$id'")->row();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/message_details', $data);
        $this->load->view('admin/footer', $data);
    }

    function request_received() {
       $id = $this->input->get('id');
        $status = $this->input->get('status');
        $requestData = [
            'final_status' => $status
        ];
        $this->db->where('id', $id);
        $this->db->update('request', $requestData);
    }

}
