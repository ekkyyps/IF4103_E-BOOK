<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Home');
	}

	public function index() {
		$this->load->view('user/page_header');
		$this->load->view('user/page_index');
	}

	public function admin() {
		$this->load->view('user/page_header');
		$this->load->view('user/page_logAdm');
	}

	public function tulis() {
		$this->load->view('user/page_header');
		$this->load->view('user/page_buatakun');
	}
}