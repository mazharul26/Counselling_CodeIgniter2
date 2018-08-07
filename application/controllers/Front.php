<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

    public function index() {
        redirect(base_url(), "refresh");
    }

    public function bannar1() {
        
    }

//    public function details() {
//        $data = array();
//        $data['title'] = "details";
//        $data['content'] = $this->load->view("front/details", $data, true);
//        $this->load->view('master', $data);
//    }

    public function laboratory() {
        $data = array();
        $data['title'] = "laboratory";
        $data['alltest'] = $this->am->view("*", "test", "", array("test_name", "asc"));


//        echo"<pre>";
//        print_r($data['alltotal']);
//        echo"</pre>";
        $data['content'] = $this->load->view("corporate/laboratory", $data, true);
        $this->load->view('master', $data);
    }

    public function blog() {
        $data = array();
        $data['title'] = "blog";
        $this->load->library("form_validation");
        $blog = $this->input->post("blog_sub", true);

        if ($blog != NULL) {
            $this->form_validation->set_rules("title", "Title", "trim|required|alpha_numeric_spaces");
            $this->form_validation->set_rules('date', 'Date', 'required');
            if ($this->form_validation->run() == TRUE) {
                // form passed validation
                $ext = "";
                if ($_FILES['picture']['name']) {
                    $ext = pathinfo($_FILES['picture']['name']);
                    $ext = $ext['extension'];
                    echo $ext;
                }

                $data = array(
                    "title" => $this->input->post("title", TRUE),
                    "picture" => $ext,
                    "date" => date('Y-m-d H:i:s')
                );
//                echo"<pre>";
//                print_r($data);
//                echo"</pre>";
//                die();


                if ($this->am->Save('blog', $data)) {

                    $id = $this->am->Id;

                    if ($ext) {
                        $this->am->UploadImg("images/blog/", "blog-{$id}.{$ext}", "picture");
                    }
                    write_file("./files/descr-{$id}.txt", $this->input->post("content"));
                    redirect(base_url() . "blog-view", "refresh");
                } else {

                    $data['error'] = "Error Successful";
                }
            } else {
                $data['content'] = $this->load->view("corporate/blog", $data, true);
                $this->load->view('master', $data);
            }
        } else {
            $data['content'] = $this->load->view("corporate/blog", $data, true);
            $this->load->view('master', $data);
        }


        $data['content'] = $this->load->view("corporate/blog", $data, true);
        $this->load->view('master', $data);
    }

    public function blog_view() {
        $data = array();
        $id = $this->uri->segment(1);
        $config['base_url'] = base_url() . $this->uri->segment(1) . "/$id";
        $id = $this->am->Id;
        $data['title'] = "blog-view";
        $this->load->library("form_validation");
        $start = 0;
        $page = $this->uri->segment(1);
        if ($page != NULL) {
            $start = $page;
        }

        $config["uri_segment"] = 1;
        $config['per_page'] = 1;
        $data['allData'] = $this->am->category($id, $start, $config['per_page']);

        $this->load->library('pagination');
        foreach ($data['allData'] as $value) {
            $config['total_rows'] = $value->totalJobs;
        }
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul><!--pagination-->';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>' . "\n";
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>' . "\n";
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>' . "\n";
        $config['prev_link'] = '&larr; Previous';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>' . "\n";
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>' . "\n";

        $this->pagination->initialize($config);

        read_file("files/descr-{$id}.txt");
        $data['allblog'] = $this->am->view("*", "blog", "", array("title", "asc"));
//        echo"<pre>";
//        print_r($data['allblog']);
//        echo"</pre>";

        $data['content'] = $this->load->view("corporate/blog_view", $data, true);
//        read_file("files/descr-{$id}.txt");
        $this->load->view('master', $data);
    }

    public function payment() {
        $data = array();
        $ids = $this->session->userdata("id");
        $data['title'] = "payment";
        $this->load->library("form_validation");
        $data['allpatient'] = $this->am->view("*", "appointment_view", array("id" => $ids), array("patient_name", "asc"));
        $data['allpayment'] = $this->am->view("*", "payment", "", array("name", "asc"));
        $appointment = $this->input->post("payment_details", true);
        if ($appointment != NULL) {

//            $this->form_validation->set_rules("firstname", "Name", "trim|required|alpha_numeric_spaces");
//            $this->form_validation->set_rules('doctor_name', 'Doctor', 'trim|required|min_length[3]|max_length[30]|alpha_numeric_spaces');
//
//
//            $this->form_validation->set_rules('department_name', 'department', 'trim|required|alpha_numeric_spaces');
//            $this->form_validation->set_rules('payment_amount', 'payment', 'trim|required|alpha_numeric_spaces');
//
//            $this->form_validation->set_rules('paymentid', 'payment', 'trim|required|alpha_numeric_spaces');
//
//            $this->form_validation->set_rules('date', 'Date', 'required');
//
//            $this->form_validation->set_rules('cardnumber', 'cardnumber', 'trim|required|min_length[4]|max_length[11]');

            if ($this->form_validation->run() == TRUE) {

                $data = array(
                    "name" => $this->input->post("firstname", TRUE),
                    "doctor_name" => $this->input->post("doctor_name", TRUE),
                    "department_name" => md5($this->input->post("department_name", TRUE)),
                    "payment_name" => $this->input->post("paymentid", TRUE),
                    "payment_amount" => $this->input->post("payment_amount", TRUE),
                    "date " => $this->input->post->date("Y-m-d H:i:s"),
                    "transect" => $this->input->post("cardnumber", TRUE)
                );
                if ($this->am->Save('apply_details', $data)) {
                  
                    echo"Appoinment Successful";
                    redirect(base_url() . "profile", "refresh");
                } else {
                    echo"appointment Something Error";
                }
            }
        }




        $data['content'] = $this->load->view("corporate/payment", $data, true);
        $this->load->view('master', $data);
    }

}
