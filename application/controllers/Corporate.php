<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $type = $this->session->userdata("type");

        if ($type == "p") {

           redirect(base_url() . "profile", "refresh");

        }
    }

    public function index() {
        redirect(base_url(), "refresh");
    }

    public function login() {
        $data = array(
        );

        $data["title"] = "login";

        $this->load->library("form_validation");
        $sub = $this->input->post("sub", TRUE);

        if ($sub != NULL) {
            $this->form_validation->set_rules('email', 'E-mail', 'trim|required|min_length[10]|max_length[30]|valid_email');

            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
            if ($this->form_validation->run() == TRUE) {
                $arrr = array(
                    "email" => $this->input->post("email", TRUE),
                    "password" => md5($this->input->post("password", TRUE))
                );
                $status = $this->am->view("id,type", "patient", $arrr);

                if ($status) {
                    foreach ($status as $value) {
                        $arrs = array(
                            "id" => $value->id,
                            "type" => $value->type
                        );
                        $this->session->set_userdata($arrs);
                        redirect(base_url(), "refresh");
                    }
                } else {

                    $this->session->set_userdata(array("msg" => "Invalid e-mail or paasword"));
                    $data['content'] = $this->load->view("corporate/login", $data, true);
                    $this->load->view('master', $data);
                }
            } else {

                $data['content'] = $this->load->view("corporate/login", $data, true);
                $this->load->view('master', $data);
            }
        } else {
            $data['content'] = $this->load->view("corporate/login", $data, true);
            $this->load->view('master', $data);
        }
    }

    public function registration() {
        
        $data = array();
        $data['title']="registration";
        $data['allcountry'] = $this->am->view("*", "country", "", array("name", "asc"));
        $data['allcity'] = $this->am->view("*", "city", "", array("name", "asc"));
        $data['alldesignation'] = $this->am->view("*", "designetion", "", array("name", "asc"));
        $data['alldegrees'] = $this->am->view("*", "degrees", "", array("name", "asc"));
        $data['allspecialist'] = $this->am->view("*", "specialist", "", array("name", "asc"));
        $this->load->library("form_validation");

        // submit form true or false        
        $patient = $this->input->post("submit-patient", true);
        $consultent = $this->input->post("submit-consultant", true);
        $employ = $this->input->post("submit-employee", true);

        /* */
        if ($patient != NULL) {
            $this->form_validation->set_rules("name", "Name", "required|alpha_numeric_spaces");
            $this->form_validation->set_rules('email', 'E-mail', 'trim|required|min_length[10]|max_length[30]|valid_email');


            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');

            $this->form_validation->set_rules('gender', 'Gender', 'required');

            $this->form_validation->set_rules('date', 'Date', 'required');

            $this->form_validation->set_rules('contact', 'Contact', 'required|min_length[4]|max_length[12]');

            $this->form_validation->set_rules('cnt', 'Country', 'trim|required');
            $this->form_validation->set_rules('ct', 'City', 'trim|required');
            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    "name" => $this->input->post("name", TRUE),
                    "email" => $this->input->post("email", TRUE),
                    "password" => md5($this->input->post("password", TRUE)),
                    "re_password" => $this->input->post("passconf", TRUE),
                    "gender" => $this->input->post("gender", TRUE),
                    "dob " => $this->input->post("date", TRUE),
                    "contact" => $this->input->post("contact", TRUE),
                    "countryid" => $this->input->post("cnt", TRUE),
                    "cityid" => $this->input->post("ct", TRUE)
                );
                if ($this->am->Save('patient', $data)) {
                    $sess = array(
                        "id" => $this->am->Id,
                        "type" => "p"
                    );
                    $this->session->set_userdata($sess);
                  redirect(base_url() . "profile", "refresh");
                }
            }
        }

        /* consultent form conditions start */
        if ($consultent != NULL) {
            //validation
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

            if ($this->form_validation->run() == TRUE) {
                // form passed validation
                $ext = "";
                if ($_FILES['conpic']['name']) {
                    $ext = pathinfo($_FILES['conpic']['name']);
                    $ext = $ext['extension'];
                    echo $ext;
                }
                $data = array(
                   
                    "name" => $this->input->post("name1", TRUE),
                    "email" => $this->input->post("email1", TRUE),
                    "password" => md5($this->input->post("password1", TRUE)),
                    "re_password" => md5($this->input->post("passconf1", TRUE)),
                    "gender" => $this->input->post("gender1", TRUE),
                    "fees " => $this->input->post("fee1", TRUE),
                    "contact" => $this->input->post("contact1", TRUE),
                    "picture" => $ext,
                    "degreesid" => $this->input->post("degreesid1", TRUE),
                    "designetionid" => $this->input->post("designationid1", TRUE),
                    "specialistid" => $this->input->post("specialistid1", TRUE)
                );

                // send it to database
                if ($this->am->Save('doctor', $data)) {

                    $id = $this->am->Id;
                    if ($ext) {
                        $this->am->UploadImg("images/doctor/", "doctor-{$id}.{$ext}", "conpic");
                    }
                    redirect(base_url() . "profile", "refresh");
                } else {
                    // error sending to database
                    echo 'Consultent Not Saved';
                }
            } else {
                // form failed validation
            }
        }

        /* consultent form conditions end */

        if ($employ != NULL) {
            echo ' $employ form';
        }
        $data['content'] = $this->load->view("corporate/registration", $data, true);
        $this->load->view('master', $data);
    }

}

