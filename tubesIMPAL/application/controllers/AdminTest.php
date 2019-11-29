<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminTest extends CI_Controller {

	public function testTambah() {

		$this->load->library('unit_test');
  //       $this->load->model('M_Admin');
		// $result = $this->load->model->ceklogin('no_pegawai','passwordA');

		$result = 1+1;
		$expected_result = 2;
		$test_name = 'Test Tambah';
		// $expected_result = true;
		// $test_name = 'Test Login';
		$this->unit->run($result, $expected_result, $test_name);
		echo $this->unit->report();
	}	

}