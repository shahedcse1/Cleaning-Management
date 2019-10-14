<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function cockroach_control() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Cockroach Control";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/cockroach_control', $data);
        $this->load->view('web/footer', $data);
    }
    
      public function commercialpest_control() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Commercial Pest Control";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/commercialpest_control', $data);
        $this->load->view('web/footer', $data);
    }
    
      public function foodpest_control() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Food Pest Control";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/foodpest_control', $data);
        $this->load->view('web/footer', $data);
    }
    
      public function hospitalpest_control() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Hospital Pest Control";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/hospitalpest_control', $data);
        $this->load->view('web/footer', $data);
    }
    
       public function propertypest_control() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Property Pest Control";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/propertypest_control', $data);
        $this->load->view('web/footer', $data);
    }
    
       public function pricing() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Our pricing";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/pricing', $data);
        $this->load->view('web/footer', $data);
    }
    
     public function rodent_control() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Rodent Control";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/rodent_control', $data);
        $this->load->view('web/footer', $data);
    }
    
      public function bedbug_control() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Bed Bug Control";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/bedbug_control', $data);
        $this->load->view('web/footer', $data);
    }
    
      public function ants_control() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Ants Control";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/ants_control', $data);
        $this->load->view('web/footer', $data);
    }
    
      public function mosquito_control() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Mosquito Control";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/mosquito_control', $data);
        $this->load->view('web/footer', $data);
    }
    
    
      public function termite_control() {
        $data['base_url'] = $this->config->item('base_url');
        $data['page_title'] = "Termite Control";
        
        
        $this->load->view('web/header', $data);
        $this->load->view('web/termite_control', $data);
        $this->load->view('web/footer', $data);
    }

}
