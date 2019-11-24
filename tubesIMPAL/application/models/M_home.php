<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

    public function ceklogin($username,$password) {
        $this->db->select('*');
        $this->db->from('pembaca'); //bisa penulis???
        $this->db->where('uname',$username);
        $this->db->where('pass',$password);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getAllBuku() {
        $query = $this->db->get('buku');
        return $query->result();
    }

    public function getBuku($jenis) {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->where('jenis',$jenis); 
        $query = $this->db->get();
        return $query->result();
    }

	public function tambahPembaca() {
		$data = [    	
        	'uname' => $this->input->post('uname',true),
        	'email' => $this->input->post('email',true),
        	'pass' => $this->input->post('pass',true),
        	'tgl_lahir' => $this->input->post('tanggal',true),
        	'keterangan' => 'pembaca'
    	];
    	$this->db->insert('pembaca',$data);
    }

    public function tambahPenulis() {
		$data = [    	
        	'uname' => $this->input->post('uname',true),
        	'email' => $this->input->post('email',true),
        	'pass' => $this->input->post('pass',true),
        	'tgl_lahir' => $this->input->post('tanggal',true),
        	'keterangan' => 'penulis'
    	];
    	$this->db->insert('penulis',$data);
    }
}