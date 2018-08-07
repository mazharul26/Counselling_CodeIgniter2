<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $type = $this->session->userdata("type");

        if ($type != "p") {

            redirect(base_url(), "refresh");
        }
    }

    public function profile() {

        $data = array();
        $data['title'] = "profile";
        $this->load->library("form_validation");
        $id = $this->session->userdata("id");
        $data['allpatients'] = $this->am->view("*", "patient_view", array("id" => $id), array("name", "asc"));

//        echo"<pre>";
//        print_r( $data['allpatients']);
//         echo"</pre>";
        $data['content'] = $this->load->view("corporate/profile", $data, TRUE);
        $this->load->view('master', $data);
    }

    public function patient_edit() {

        $data = array();
        $data['title'] = "Edit";
        $this->load->library("form_validation");
        $id = $this->session->userdata("id");

        $data['allpatients'] = $this->am->view("*", "patient_view", array("id" => $id), array("name", "asc"));
        $data['allcountry'] = $this->am->view("*", "country", "", array("name", "asc"));
        $data['allcity'] = $this->am->view("*", "city", "", array("name", "asc"));
        $data['content'] = $this->load->view("corporate/patient_edit", $data, TRUE);
        $this->load->view('master', $data);
    }

}
