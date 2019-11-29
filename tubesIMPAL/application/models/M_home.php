<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

    public function cekloginPembaca($username,$password) {
        $this->db->select('*');
        $this->db->from('pembaca'); //bisa penulis???
        $this->db->where('uname',$username);
        $this->db->where('pass',$password);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function cekloginPenulis($username,$password) {
        $this->db->select('*');
        $this->db->from('penulis'); //bisa penulis???
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

    public function getBukuISBN($ISBN) {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->where('ISBN',$ISBN); 
        $query = $this->db->get();
        return $query->result();   
    }

    public function getBukuPenulis($uname) {
        $this->db->select('*');
        $this->db->from('bukupenulis');
        $this->db->where('uname',$uname); 
        $query = $this->db->get();
        return $query->result();
    }

    public function getPembaca($uname,$email) {
        $this->db->select('*');
        $this->db->from('pembaca');
        $this->db->where('uname',$uname)->or_where('email',$email);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getPenulis($uname,$email) {
        $this->db->select('*');
        $this->db->from('penulis');
        $this->db->where('uname',$uname)->or_where('email',$email);
        $query = $this->db->get();
        return $query->num_rows();
    }

	public function tambahPembaca() {
		$data = [    	
        	'uname' => $this->input->post('uname',true),
            'pass' => md5($this->input->post('pass',true)),
        	'email' => $this->input->post('email',true),
        	'tgl_lahir' => $this->input->post('tanggal',true),
        	'keterangan' => 'pembaca'
    	];
    	$this->db->insert('pembaca',$data);
    }

    public function tambahPenulis() {
		$data = [    	
        	'uname' => $this->input->post('uname',true),
            'pass' => md5($this->input->post('pass',true)),
        	'email' => $this->input->post('email',true),
        	'tgl_lahir' => $this->input->post('tanggal',true),
        	'keterangan' => 'penulis'
    	];
    	$this->db->insert('penulis',$data);
    }

    public function tambahDataBukuPenulis()
    {
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_error = $_FILES['image']['error'];
        $file_size = $_FILES['image']['size'];
        $file_path = "assets/uploads/cover".$_POST['ISBN'].".jpg";
        if ($file_type == "image/jpeg") {
            if ($file_size > 0 AND $file_error == 0) {
                move_uploaded_file($file_tmp, "assets/uploads/cover".$_POST['ISBN'].".jpg");
            }
        }

        $data = [
            'ISBN' => $this->input->post('ISBN',true),
            'judul' => $this->input->post('judul',true),
            'penerbit' => $this->input->post('penerbit',true),
            'penulis' => $this->input->post('penulis',true),
            'isi' => $this->input->post('isi',true),
            'jenis' => $this->input->post('jenis',true),
            'url' => $file_path,
            'type' => $file_type,
            'uname' =>  $this->session->userdata("nama")
        ];
        $this->db->insert('bukupenulis',$data);
    }
}