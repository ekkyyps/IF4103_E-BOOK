<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model
{
    public function ceklogin($no_pegawai,$passwordA) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('no_pegawai',$no_pegawai);
        $this->db->where('passwordA',$passwordA);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getAllBuku() {
    	$query = $this->db->get('buku');
    	return $query->result();
    }

    public function tambahDataBuku()
    {
        $data = [
            'ISBN' => $this->input->post('ISBN',true),
            'judul' => $this->input->post('judul',true),
            'penerbit' => $this->input->post('penerbit',true),
            'penulis' => $this->input->post('penulis',true),
            'isi' => $this->input->post('isi',true),
            'no_pegawai' =>  $this->session->userdata("no_pegawai")
        ];
        $this->db->insert('buku',$data);
    }

    public function editBuku($ISBN) {
        $data = [
            'ISBN' => $ISBN,
            'judul' => $this->input->post('judul',true),
            'penerbit' => $this->input->post('penerbit',true),
            'penulis' => $this->input->post('penulis',true),
            'isi' => $this->input->post('isi',true),
            'no_pegawai' =>  $this->session->userdata("no_pegawai")
        ];
        $this->db->where('ISBN', $data['ISBN']);
        $this->db->update('buku',$data);
    }

    public function hapusBuku($ISBN) {
        $this->db->where('ISBN',$ISBN); 
        $this->db->delete('buku');
        return;
    }

    
}