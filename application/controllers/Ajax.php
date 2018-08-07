<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function index() {
        redirect(base_url(), "refresh");
    }

    public function apply_doctor() {
        $doctorid = $this->input->post("id", TRUE);
        $myid = $this->session->userdata('id');
        if ($myid == NULL) {
            redirect(base_url(), "refresh");
        } else {
            $data = array(
                "patient_id" => $myid,
                "doctor_id" => $doctorid
            );
            if($this->am->save("apply",$data)){
                echo"Apply Successful";
            }
        }
    }
 public function withdrow_doctor(){
        $jobid = $this->input->post("id", TRUE);
        $myid = $this->session->userdata("id");
        if ($myid == NULL) {
            redirect(base_url(), "refresh");
        } else {
            $data = array(
                "juserid" => $myid,
                "jobsid" => $jobid
            );
            if($this->am->Delete("apply", $data)){
                echo "Withdrow Successful";
            }
            else{
                echo "Some error occurs";
            }
        }
    }
}
