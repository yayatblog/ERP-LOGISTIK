<?php

class M_legal extends CI_Model{
    public function tampil_data(){
        return $this->db->get('legal')->result_array();
    }
    public function tambahDataDistri(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "location" => $this->input->post('location',true),
            "manager" => $this->input->post('manager',true),
            "profit" => $this->input->post('profit',true)

        ];
        $this->db->insert('legal',$data);
    }
}
?>