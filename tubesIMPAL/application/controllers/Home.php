<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Home');
		$this->load->library('form_validation');
	}

	public function index() {
		$this->load->view('user/page_header');
		$this->load->view('user/page_index');
	}

	public function admin() {
		$this->load->view('user/page_header');
		$this->load->view('user/page_logAdm');
	}

	public function login() {
		$username= $this->input->post("username");
        $password = $this->input->post("password");
        $cek = $this->M_Home->ceklogin($username, $password);
        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            $this->load->view('user/page_homepage');
        } else {
            echo '<script type="text/javascript">
                alert("Maaf Username/Password Anda Salah");
            </script>';
            $this->load->view('user/page_header');
			$this->load->view('user/page_index');
        }	
	}

	public function logout(){
        $this->session->sess_destroy();
        $this->load->view('user/page_header');
		$this->load->view('user/page_index');
    }

	public function regbaca() {
		$this->load->view('user/page_header');
		$this->load->view('user/page_buatakunbaca');
	}

	public function register_baca() {
        $this->form_validation->set_rules('uname','Uname','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('pass','Pass','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('user/page_header');
			$this->load->view('user/page_buatakunbaca');
        } else {
        	$this->M_Home->tambahPembaca();
        	$this->load->view('user/page_header');
        }
    }

	public function regtulis() {
		$this->load->view('user/page_header');
		$this->load->view('user/page_buatakuntulis');
	}

	public function register_tulis() {
        $this->form_validation->set_rules('uname','Uname','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('pass','Pass','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('user/page_header');
			$this->load->view('user/page_buatakunbaca');
        } else {
        	$this->M_Home->tambahPenulis();
        	$this->load->view('user/page_header');
        }
    }
}