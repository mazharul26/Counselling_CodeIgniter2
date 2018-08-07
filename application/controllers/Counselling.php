<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Counselling extends CI_Controller {

    public function index() {


        $data = array();
        $data['title'] = "Counselling";
        $data['home'] = 1;


        $data['alldepartment'] = $this->am->view("*", "department", "", array("name", "asc"));
        $data['allconsultent'] = $this->am->view("*", "consultent", "", array("name", "asc"));

        $this->load->library("form_validation");

        $appointment = $this->input->post("submit_appoinment", true);

        if ($appointment != NULL) {

            $this->form_validation->set_rules("patient_name", "Patient Name", "required|alpha_numeric_spaces");
            $this->form_validation->set_rules('department', 'Department', 'trim|required');

//           $time= date_default_timezone_set('Asia/Bangladesh');

            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    "patient_name" => $this->input->post("patient_name", TRUE),
                    "departmentid" => $this->input->post("department", TRUE),
                    "consultentid" => $this->input->post("consultent", TRUE),
                    "date" => date("y-m-d"),
                    "time" => time("H:i:s")
                );
                if ($this->am->Save('appointment', $data)) {
                    $sess = array(
                        "id" => $this->am->Id,
                        "type" => "p"
                    );
                    $this->session->set_userdata($sess);
                    redirect(base_url() . "payment", "refresh");
                }
            }
        }


        $data['allhome'] = $this->am->home();
//         echo "<pre>";
//          print_r($data['allhome']);
//          echo "</pre>";
        $data['content'] = $this->load->view("front/home", $data, true);
        $this->load->view('master', $data);
    }

    public function category() {



        $data = array();
        $data['title'] = "Catagory";
        $id = $this->uri->segment(2);
        $data['alldepartment'] = $this->am->view("*", "department", "", array("name", "asc"));
        $data['allconsultent'] = $this->am->view("*", "consultent", "", array("name", "asc"));
        $data['allCategory'] = $this->am->view("*", "doctor_view", array("id" => $id));


//        echo "<pre>";
//        print_r($data['allCourse']);
//        echo "</pre>";
        $data['content'] = $this->load->view("front/category", $data, true);
        $this->load->view('master', $data);
    }

    public function details() {
        $data = array();
        $data['title'] = "details";
        $data['content'] = $this->load->view("front/details", $data, true);
        $this->load->view('master', $data);
    }

    public function appointment() {
        $data = array();
        $data['title'] = "appointment";

        $data['content'] = $this->load->view("corporate/appointment", $data, true);
        $this->load->view('master', $data);
    }

    public function search() {
        $data = array();
        $name = trim($this->input->get("name", true));
        $data['name'] = "Search by " . ucfirst($name);
        $data['allDatas'] = $this->am->search($name);
        echo "<pre>";
        print_r($data['allDatas']);
        echo "</pre>";
        die();
        $data['content'] = $this->load->view("corporate/search", $data, TRUE);
        $this->load->view("master", $data);
    }

    public function logout() {
        $this->session->unset_userdata("id");
        $this->session->unset_userdata("type");

        redirect(base_url() . "corporate/registration", "refresh");
    }

}
