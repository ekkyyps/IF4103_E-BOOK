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
            'jenis' => $this->input->post('jenis',true),
            'no_pegawai' =>  $this->session->userdata("no_pegawai")
        ];
        $this->db->where('ISBN', $data['ISBN']);
        $this->db->update('buku',$data);
    }

    public function ambilgambar($ISBN) {
        $this->db->from('buku');
        $this->db->where('ISBN', $ISBN);
        $result = $this->db->get();
        if ($result->num_rows() > 0){
            return $result->row();
        }
    }

    public function hapusBuku($ISBN) {
        $data = $this->M_Admin->ambilgambar($ISBN);
        @unlink($data->url);
        $this->db->where('ISBN',$ISBN); 
        $this->db->delete('buku');
        return;
    }

    
}