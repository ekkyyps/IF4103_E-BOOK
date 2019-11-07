<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        //load model admin
        parent::__construct();
        $this->load->model('M_Admin');
        $this->load->library('form_validation');
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url("index.php/Admin/index"));
        // }
    }

    public function index()
    {
        $this->load->view('admin/page_headerAdm');
        // $this->load->view('admin/page_homeAdm');
    }
    public function login() 
    {
        $usernameA= $this->input->post("usernameA");
        $passwordA = $this->input->post("passwordA");
        $cek = $this->M_Admin->ceklogin($usernameA, $passwordA);
        if ($cek > 0) {
            $data_session = array(
                'nama' => $usernameA,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            // echo '<script type="text/javascript">
            //     alert("SEKUTT");
            // </script>';
            redirect("index.php/Admin");
        } else {
            echo '<script type="text/javascript">
                alert("Maaf Username/Password Anda Salah");
            </script>';
            $this->load->view('user/page_header');
            $this->load->view('user/page_logAdm');
        }
    }
 
    public function logout(){
        $this->session->sess_destroy();
        echo '<script type="text/javascript">
                alert("Berhasil logout");
            </script>';
        $this->load->view('user/page_header');
        $this->load->view('user/page_logAdm');
    }
}