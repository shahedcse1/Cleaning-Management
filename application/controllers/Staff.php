<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

    public function index() {

        if (!in_array($this->session->userdata('user_role'), [1, 2, 3])) {
            redirect('Auth');
        }
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Our Staff List ";
        $data['allstaff'] = $this->db->query("SELECT * FROM staffs order by id desc ")->result();


        $this->load->view('admin/header', $data);
        $this->load->view('admin/staff_list', $data);
        $this->load->view('admin/footer', $data);
    }

    function add_staff() {
        if (!in_array($this->session->userdata('user_role'), [1, 2, 3])) {
            redirect('Auth');
        }
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Add Staff ";



        $this->load->view('admin/header', $data);
        $this->load->view('admin/add_staff', $data);
        $this->load->view('admin/footer', $data);
    }

    function insert_staffdata() {
        $target_dir = "assets/stafffile/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imgFile = $_FILES['fileToUpload']['name'];

        if (empty($imgFile)) :
            $image_path = 'nofile.jpg';
        else:
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) :
                $image_path = basename($_FILES["fileToUpload"]["name"]);
            else:
                $data['error'] = "Sorry, there was an error uploading your file";
            endif;
        endif;


        $staffData = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'image_path' => $image_path,
            'position' => $this->input->post('position'),
            'fb' => $this->input->post('fb'),
            'twitter' => $this->input->post('twitter'),
            'google' => $this->input->post('google'),
            'linkedin' => $this->input->post('linkedin'),
            'create_date' => date("Y-m-d")
        );

        $status = $this->db->insert('staffs', $staffData);

        if ($status):
            $this->session->set_userdata('add', 'New Staff Add Successfully.');
        else:
            $this->session->set_userdata('notadd', 'New Staff Add Failed');
        endif;
        redirect('Staff');
    }

    function staff_details() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Edit Staff ";

        $id = $this->input->get('id');
        $data['staffdetails'] = $this->db->query("SELECT * FROM staffs WHERE id='$id' ")->row();



        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_staff', $data);
        $this->load->view('admin/footer', $data);
    }

    function update_staffdata() {
        $id = $this->input->post('id');

        $target_dir = "assets/stafffile/";
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
            $staffData = array(
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'address' => $this->input->post('address'),
                'image_path' => $image_path,
                'position' => $this->input->post('position'),
                'fb' => $this->input->post('fb'),
                'twitter' => $this->input->post('twitter'),
                'google' => $this->input->post('google'),
                'linkedin' => $this->input->post('linkedin')
            );
        else:
            $staffData = array(
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'address' => $this->input->post('address'),
                'position' => $this->input->post('position'),
                'fb' => $this->input->post('fb'),
                'twitter' => $this->input->post('twitter'),
                'google' => $this->input->post('google'),
                'linkedin' => $this->input->post('linkedin')
            );
        endif;
        $this->db->where('id', $id);
        $status = $this->db->update('staffs', $staffData);

        if ($status):
            $this->session->set_userdata('add', 'Staff info Edit Successfully.');
        else:
            $this->session->set_userdata('notadd', 'Staff info Edit Failed');
        endif;
        redirect('Staff');
    }

    function delete_staff() {
        $id = $this->input->post('staffid');
        $this->db->where('id', $id);
        $status = $this->db->delete('staffs');

        if ($status):
            $this->session->set_userdata('add', 'Staff Deleted Successfully.');
        else:
            $this->session->set_userdata('notadd', 'Staff Deleted Failed');
        endif;
        redirect('Staff');
    }

}
