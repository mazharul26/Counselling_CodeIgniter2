<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_management extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $type = $this->session->userdata("type");

        if ($type != "p") {

            redirect(base_url(), "refresh");
        }
    }

    public function index() {
        $data = array();
        $data['title'] = "doctor";
        $data['allregistration'] = $this->am->view("*", "doctor_view", "", array("name", "asc"));
        $this->load->library("form_validation");
        $data['content'] = $this->load->view("corporate/doctors", $data, TRUE);
        $this->load->view('master', $data);
    }

    public function create() {
        echo"ok";
    }

    public function edit($id) {
        //echo $this->uri->segment(1);
        $data = array();
        $data['title'] = "Edit Jobs";
        $this->load->library("form_validation");
        $data['alldoctor'] = $this->am->view("*", "doctor", array("id" => $id));
        $data['alldegrees'] = $this->am->view("*", "degrees", "", array("name", "asc"));
        $data['alldesignation'] = $this->am->view("*", "designetion", "", array("name", "asc"));
        $data['allspecialist'] = $this->am->view("*", "specialist", "", array("name", "asc"));

        $consultent = $this->input->post("edit_sub", true);
        if ($consultent != NULL) {
            $this->form_validation->set_rules("name1", "Name", "required|alpha_numeric_spaces");
            $this->form_validation->set_rules('email1', 'E-mail', 'trim|required|min_length[10]|max_length[30]|valid_email');
            $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[8]');
            $this->form_validation->set_rules('passconf1', 'Password Confirmation', 'trim|required|matches[password1]');
            $this->form_validation->set_rules('gender1', 'Gender', 'required');
            $this->form_validation->set_rules('fee1', 'Fee', 'required');
            $this->form_validation->set_rules('contact1', 'Contact', 'required|min_length[4]|max_length[12]');
            $this->form_validation->set_rules('degreesid1', 'Degrees', 'trim|required');
            $this->form_validation->set_rules('designationid1', 'Designation', 'trim|required');
            $this->form_validation->set_rules('specialistid1', 'Specialist', 'trim|required');

//            if ($this->form_validation->run() == TRUE) {
//                $ext = "";
//                if ($_FILES['picture']['name']) {
//                    $ext = pathinfo($_FILES['picture']['name']);
//                    $ext = $ext['extension'];
//                    echo $ext;
//                }
//                $data = array(
//                    "name" => $this->input->post("name1", TRUE),
//                    "email" => $this->input->post("email1", TRUE),
//                    "password" => md5($this->input->post("password1", TRUE)),
//                    "re_password" => md5($this->input->post("passconf1", TRUE)),
//                    "gender" => $this->input->post("gender1", TRUE),
//                    "fees " => $this->input->post("fee1", TRUE),
//                    "contact" => $this->input->post("contact1", TRUE),
//                    "picture" => $ext,
//                    "degreesid" => $this->input->post("degreesid1", TRUE),
//                    "designetionid" => $this->input->post("designationid1", TRUE),
//                    "specialistid" => $this->input->post("specialistid1", TRUE)
//                );
//                if ($this->am->Save('doctor', $data)) {
//                    $id = $this->am->Id;
//                    if ($ext) {
//                        $this->am->UploadImg("images/doctor/", "doctor-{$id}.{$ext}", "picture");
//                    }
//                    redirect(base_url() . "corporate/doctor_edit", "refresh");
//                } else {
//                    echo 'Consultent Not Saved';
//                }
//            } else {
//                
//            }
        }
        $data['content'] = $this->load->view("corporate/doctor_edit", $data, TRUE);
        $this->load->view("master", $data);
    }

    public function update() {
        $id = $this->input->post("id");
        $data['alldoctor'] = $this->am->view("*", "doctor", array("id" => $id));
        $data['alldegrees'] = $this->am->view("*", "degrees", "", array("name", "asc"));
        $data['alldesignation'] = $this->am->view("*", "designetion", "", array("name", "asc"));
        $data['allspecialist'] = $this->am->view("*", "specialist", "", array("name", "asc"));
//        echo "<pre>";
//         print_r($data['alldoctor']);
//        echo "</pre>";
        $alldoctor = $this->am->view("picture", "doctor", array("id" => $id));

        foreach ($alldoctor as $value) {
            $old_ext = $value->picture;
        }

        if ($_FILES['picture']['name']) {
            $ext = pathinfo($_FILES['picture']['name']);
            $ext = $ext['extension'];

            if ($ext == "jpg" || $ext == "png" || $ext == "gif" || $ext == "jpeg") {
                if (file_exists("images/doctor/doctor-{$id}.{$old_ext}")) {
                    unlink("images/doctor/doctor-{$id}.{$old_ext}");
                }
                $this->am->UploadImg("images/doctor/", "doctor-{$id}.{$ext}", "picture");
            } else {
                $ext = $old_ext;
            }
        } else {
            $ext = $old_ext;
        }

        $sdata = array(
            "name" => $this->input->post("name1", TRUE),
            "email" => $this->input->post("email1", TRUE),
            "password" => md5($this->input->post("password1", TRUE)),
            "re_password" => md5($this->input->post("passconf1", TRUE)),
            //"gender" => $this->input->post("gender1", TRUE),
            "fees " => $this->input->post("fees1", TRUE),
            "contact" => $this->input->post("contact1", TRUE),
            "picture" => $ext,
            "degreesid" => $this->input->post("degreesid", TRUE),
            "designetionid" => $this->input->post("designetionid", TRUE),
            "specialistid" => $this->input->post("specialistid", TRUE)
        );
//           echo "<pre>";
//         print_r($sdata);
//        echo "</pre>";
        
        if ($this->am->Update("doctor", $sdata, array("id" => $id))) {





            redirect(base_url() . "doctor_management", "refresh");
        }
    }

    public function delete() {
        $data = array();
        $data['title'] = "doctor-edit";
        $data['content'] = $this->load->view("corporate/doctor_delete", $data, TRUE);
        $this->load->view('master', $data);
    }

    public function appointment() {
        $data = array();
        $data['title'] = "doctor-edit";
        $data['content'] = $this->load->view("corporate/doctor_appointment", $data, TRUE);
        $this->load->view('master', $data);
    }

}
