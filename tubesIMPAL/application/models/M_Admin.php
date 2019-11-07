<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model
{
    public function ceklogin($usernameA,$passwordA) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('usernameA',$usernameA);
        $this->db->where('passwordA',$passwordA);
        $query = $this->db->get();
        return $query->num_rows();
    }
}