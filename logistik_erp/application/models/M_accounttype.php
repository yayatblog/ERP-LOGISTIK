<?php

class M_accounttype extends CI_Model{
    public function tampil_data(){
        return $this->db->get('account')->result_array();
    }
    public function tambahDataKaryawan(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "qty" => $this->input->post('qty',true),
            "otc" => $this->input->post('otc',true),
            "totalotc" => $this->input->post('totalotc',true),
            "ftc" => $this->input->post('ftc',true),
            "totalftc" => $this->input->post('totalftc',true),

        ];
        $this->db->insert('approval',$data);
    }
}
?>