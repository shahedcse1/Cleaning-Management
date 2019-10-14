<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    public function index() {
        if (!in_array($this->session->userdata('user_role'), [1, 2, 3])) {
            redirect('Auth');
        }
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Our Client List ";
        $data['allclient'] = $this->db->query("SELECT * FROM clients ")->result();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/client_list', $data);
        $this->load->view('admin/footer', $data);
    }

    function add_client() {
        if (!in_array($this->session->userdata('user_role'), [1, 2, 3])) {
            redirect('Auth');
        }
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Add Client ";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/add_client', $data);
        $this->load->view('admin/footer', $data);
    }

    function insert_clientdata() {
        $target_dir = "assets/clientfile/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imgFile = $_FILES['fileToUpload']['name'];

        if (empty($imgFile)) :
            $image_path = '';
        else:
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) :
                $image_path = basename($_FILES["fileToUpload"]["name"]);
            else:
                $data['error'] = "Sorry, there was an error uploading your file";
            endif;
        endif;


        $clientData = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'link' => $this->input->post('link'),
            'image_path' => $image_path,
            'create_date' => date("Y-m-d")
        );

        $status = $this->db->insert('clients', $clientData);

        if ($status):
            $this->session->set_userdata('add', 'New Client Add Successfully.');
        else:
            $this->session->set_userdata('notadd', 'New Client Add Failed');
        endif;
        redirect('Client');
    }

    function client_details() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Edit Client ";

        $id = $this->input->get('id');
        $data['clientdetails'] = $this->db->query("SELECT * FROM clients WHERE id='$id' ")->row();



        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_client', $data);
        $this->load->view('admin/footer', $data);
    }

    function update_clientdata() {
        $id = $this->input->post('id');

        $target_dir = "assets/clientfile/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imgFile = $_FILES['fileToUpload']['name'];

        if (empty($imgFile)) :
            $image_path = '';
        else:
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) :
                $image_path = basename($_FILES["fileToUpload"]["name"]);
            else:
                $data['error'] = "Sorry, there was an error uploading your file";
            endif;
        endif;
        if (!empty($image_path)):
            $clientData = array(
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'link' => $this->input->post('link'),
                'image_path' => $image_path
            );
        else:
            $clientData = array(
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'link' => $this->input->post('link')
            );
        endif;
        $this->db->where('id', $id);
        $status = $this->db->update('clients', $clientData);

        if ($status):
            $this->session->set_userdata('add', 'Client info Edit Successfully.');
        else:
            $this->session->set_userdata('notadd', 'Client info Edit Failed');
        endif;
        redirect('Client');
    }
    
        function delete_client() {
        $id = $this->input->post('clientid');
        $this->db->where('id', $id);
        $status = $this->db->delete('clients');

        if ($status):
            $this->session->set_userdata('add', 'Client info Deleted Successfully.');
        else:
            $this->session->set_userdata('notadd', 'Client info Deleted Failed');
        endif;
        redirect('Client');
    }

}
