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
        $databuku = $this->M_Admin->getAllBuku();
        $this->load->view('admin/page_headerAdm');
        $this->load->view('admin/page_homeAdm',['data'=>$databuku]);
    }

    public function login() 
    {
        $no_pegawai= $this->input->post("no_pegawai");
        $passwordA = $this->input->post("passwordA");
        $cek = $this->M_Admin->ceklogin($no_pegawai, $passwordA);
        if ($cek > 0) {
            $data_session = array(
                'no_pegawai' => $no_pegawai,
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
        // echo '<script type="text/javascript">
        //         alert("Berhasil logout");
        //     </script>';
        $this->load->view('user/page_header');
        $this->load->view('user/page_logAdm');
    }

    public function tambahbuku()    {
        $this->form_validation->set_rules('ISBN','ISBN','required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('Admin/page_headerAdm');
            $this->load->view('Admin/page_tambahBuku');
        } else {
            $this->M_Admin->tambahDataBuku();
            redirect('index.php/Admin');
        }
    }

    public function editbuku($ISBN) {
        $this->form_validation->set_rules('ISBN','ISBN','true');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('Admin/page_headerAdm');
            $this->load->view('Admin/page_editBuku',['data'=>$ISBN]);
        } else {
            $this->M_Admin->editBuku($ISBN);
            redirect('index.php/Admin');
        }
    }
}