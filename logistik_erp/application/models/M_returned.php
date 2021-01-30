<?php

class M_returned extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('returned')->result_array();
    }
    public function tambahDataEkspedisi(){
        $data = [
            "kode" => $this->input->post('kode',true),
            "nama" => $this->input->post('nama',true)
        ];
        $this->db->insert('daftarekspedisi',$data);
    }
}
?>