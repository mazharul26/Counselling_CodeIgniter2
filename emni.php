<?php

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
            redirect(base_url() . "corporate/profile", "refresh");
        }

        $data['error'] = "Eror Successful";
        $data['content'] = $this->load->view("corporate/registration", $data, true);
        $this->load->view('master', $data);
    } else {



        $data['content'] = $this->load->view("corporate/registration", $data, true);
        $this->load->view('master', $data);
    }
} else {


    $data['content'] = $this->load->view("corporate/registration", $data, true);
    $this->load->view('master', $data);
}

        if ($edit_sub != NULL) {
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
                $sdata = array(
                    "name" => $this->input->post("name1", TRUE),
                    "email" => $this->input->post("email1", TRUE),
                    "password" => md5($this->input->post("password1", TRUE)),
                    "re_password" => md5($this->input->post("passconf1", TRUE)),
                    "gender" => $this->input->post("gender1", TRUE),
                    "fees " => $this->input->post("fee1", TRUE),
                    "contact" => $this->input->post("contact1", TRUE),
//            "picture" => $ext,
                    "degreesid" => $this->input->post("degreesid", TRUE),
                    "designetionid" => $this->input->post("designationid", TRUE),
                    "specialistid" => $this->input->post("specialistid", TRUE)
                );
                if ($this->am->Save('doctor', $data)) {

                    $id = $this->am->Id;
                    if ($ext) {
                        $this->am->UploadImg("images/doctor/", "doctor-{$id}.{$ext}", "picture");
                    }
                    redirect(base_url() . "corporate/doctors", "refresh");
                } else {
                    // error sending to database
                    echo 'Consultent Not Saved';
                }
            }
        }
?>
