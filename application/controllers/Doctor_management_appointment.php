<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class doctor_management_appointment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $type = $this->session->userdata("type");

        if ($type != "p") {

            redirect(base_url(), "refresh");
        }
    }

    public function index() {
//        $data = array();
//        $data['title'] = "edit";
////        $data['allregistration'] = $this->am->view("*", "doctor_view", "", array("name", "asc"));
//        $this->load->library("form_validation");
//        $data['content'] = $this->load->view("corporate/doctor_edit", $data, TRUE);
//        $this->load->view('master', $data);
    }
    
}