<?php

class M_login extends CI_Model
{
    public function cek_login($where){
        return $this->db->get_where('tbl_user', $where);
    }
    public function tampil_data(){
        
    }    
}






?>