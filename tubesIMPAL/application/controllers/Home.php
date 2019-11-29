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

    public function pagejenis($jenis){
        $databuku = $this->M_Home->getBuku($jenis);
        // $this->load->view('user/page_headerLogin');
        $this->load->view('user/pembaca/page_headerLoginPembaca');
        $this->load->view('user/page_bacajenis',['data'=>$databuku]);
    }

    public function pageisibuku($ISBN) {
        $databuku = $this->M_Home->getBukuISBN($ISBN);
        $this->load->view('user/pembaca/page_headerLoginPembaca');
        $this->load->view('user/page_bacaisi',['data'=>$databuku]);
    }

	public function login() {
		$username = $this->input->post("username");
        $password = md5($this->input->post("password"));
        $cek1 = $this->M_Home->cekloginPembaca($username, $password);
        $cek2 = $this->M_Home->cekloginPenulis($username, $password);
        if ($cek1 == 1 AND $cek2 == 0) { //masuk ke pembaca
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('index.php/Home/setelahloginpembaca');
        } else if ($cek1 == 0 AND $cek2 == 1) { //masuk ke penulis
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );  
            $this->session->set_userdata($data_session);
            redirect('index.php/Home/setelahloginpenulis');
        } else {
            echo '<script type="text/javascript">
                alert("Maaf Username/Password Anda Salah");
            </script>';
            $this->load->view('user/page_header');
            $this->load->view('user/page_index');
        }
	}

    public function setelahloginpembaca() {
        $this->load->view('user/pembaca/page_headerLoginPembaca');
        $this->load->view('user/pembaca/page_homepagePembaca');
    }

    public function setelahloginpenulis() {
        $uname = $this->session->userdata("nama");
        $databuku = $this->M_Home->getBukuPenulis($uname);
        $this->load->view('user/penulis/page_headerLoginPenulis');
        $this->load->view('user/penulis/page_homepagePenulis',['data'=>$databuku]);
    }

	public function logout(){
        $this->session->sess_destroy();
        $this->load->view('user/page_header');
		$this->load->view('user/page_index');
    }

	public function regbaca() {
		$this->load->view('user/page_header');
		$this->load->view('user/pembaca/page_buatakunbaca');
	}

	public function register_baca() {
        $this->form_validation->set_rules('uname','Uname','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('pass','Pass','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
         if($this->form_validation->run() == FALSE) {
            $this->load->view('user/page_header');
            $this->load->view('user/pembaca/page_buatakunbaca');
        } else {
            $uname = $this->input->post("uname");
            $email = $this->input->post("email");
            $cek = $this->M_Home->getPembaca($uname,$email);
            if ($cek == 0) {
                $ceklagi = $this->M_Home->getPenulis($uname,$email);
                if ($ceklagi == 0) {
                    $this->M_Home->tambahPembaca();
                    echo '<script type="text/javascript">alert("Akun berhasil dibuat");</script>';
                    $this->load->view('user/page_header');
                    $this->load->view('user/page_index');
                } else {
                    echo '<script type="text/javascript">alert("Maaf Username/Email telah terpakai");</script>';
                    $this->load->view('user/page_header');
                    $this->load->view('user/page_buatakunbaca');    
                }
            } else {
                echo '<script type="text/javascript">alert("Maaf Username/Email telah terpakai");</script>';
                $this->load->view('user/page_header');
                $this->load->view('user/page_buatakunbaca');
            }
        }
    }

	public function regtulis() {
		$this->load->view('user/page_header');
		$this->load->view('user/penulis/page_buatakuntulis');
	}

	public function register_tulis() {
        $this->form_validation->set_rules('uname','Uname','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('pass','Pass','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('user/page_header');
            $this->load->view('user/penulis/page_buatakuntulis');
        } else {
            $uname = $this->input->post("uname");
            $email = $this->input->post("email");
            $cek = $this->M_Home->getPenulis($uname,$email);
            if ($cek == 0) {
                $ceklagi = $this->M_Home->getPembaca($uname,$email);
                if ($ceklagi == 0) {
                    $this->M_Home->tambahPenulis();
                    echo '<script type="text/javascript">alert("Akun berhasil dibuat");</script>';
                    $this->load->view('user/page_header');
                    $this->load->view('user/page_index');
                } else {
                    echo '<script type="text/javascript">alert("Maaf Username/Email telah terpakai");</script>';
                    $this->load->view('user/page_header');
                    $this->load->view('user/page_buatakuntulis');
                }
            } else {
                echo '<script type="text/javascript">alert("Maaf Username/Email telah terpakai");</script>';
                $this->load->view('user/page_header');
                $this->load->view('user/page_buatakuntulis');
            }
        }
    }

    public function tambahbukuPenulis() {
        $this->form_validation->set_rules('ISBN','ISBN','required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('user/penulis/page_headerLoginPenulis');
            $this->load->view('user/penulis/page_tambahBukuPenulis');
        } else {
            $this->M_Home->tambahDataBukuPenulis();
            redirect('index.php/Home/setelahloginpenulis');
        }
    }
}