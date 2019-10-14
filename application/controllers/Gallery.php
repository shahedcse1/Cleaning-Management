<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function index() {
        if (!in_array($this->session->userdata('user_role'), [1, 2, 3])) {
            redirect('Auth');
        }
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "All Images";
        $data['allimages'] = $this->db->query("SELECT * FROM gallery ")->result();


        $this->load->view('admin/header', $data);
        $this->load->view('admin/gallery', $data);
        $this->load->view('admin/footer', $data);
    }

    function add_images() {
        if (!in_array($this->session->userdata('user_role'), [1, 2, 3])) {
            redirect('Auth');
        }
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Add Images ";



        $this->load->view('admin/header', $data);
        $this->load->view('admin/add_images', $data);
        $this->load->view('admin/footer', $data);
    }

    function insert_images() {
        //File upload section
        $config['upload_path'] = './assets/project_file/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '55120';
        $this->load->library('upload', $config);
        $files = $_FILES;
        $nooffile = sizeof($files['fileToUpload']['name']);
        for ($i = 0; $i < $nooffile; $i++):
            if (!empty($files['fileToUpload']['name'][$i])):
                $_FILES['problemfiletemp']['name'] = $files['fileToUpload']['name'][$i];
                $_FILES['problemfiletemp']['type'] = $files['fileToUpload']['type'][$i];
                $_FILES['problemfiletemp']['tmp_name'] = $files['fileToUpload']['tmp_name'][$i];
                $_FILES['problemfiletemp']['error'] = $files['fileToUpload']['error'][$i];
                $_FILES['problemfiletemp']['size'] = $files['fileToUpload']['size'][$i];
                $this->upload->initialize($config);
                if ($this->upload->do_upload('problemfiletemp')):
                    $upload_data = $this->upload->data();
                    $filename = $upload_data['file_name'];

                endif;
                $imageData = array(
                    'Project_name' => $this->input->post('Project_name'),
                    'image_type' => $this->input->post('image_type'),
                    'image_path' => $filename,
                    'date' => date("Y-m-d")
                );
                $status = $this->db->insert('gallery', $imageData);
            endif;
        endfor;
        if ($status):
            $this->session->set_userdata('add', 'New Images Add Successfully.');
        else:
            $this->session->set_userdata('notadd', 'New Images Add Failed');
        endif;
        redirect('Gallery');
    }

    function delete_image() {
        $id = $this->input->post('imageid');
        $this->db->where('id', $id);
        $status = $this->db->delete('gallery');

        if ($status):
            $this->session->set_userdata('add', 'Image Deleted Successfully.');
        else:
            $this->session->set_userdata('notadd', 'Image Deleted Failed');
        endif;
        redirect('Gallery');
    }

}
