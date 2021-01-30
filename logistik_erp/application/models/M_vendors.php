<?php

class M_vendors extends CI_Model{
    public function tampil_data(){
        return $this->db->get('vendors')->result_array();
    }
    public function tambahDataPengiriman(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "qty_karton" => $this->input->post('qty_karton',true),
            "qty_perkarton" => $this->input->post('qty_perkarton',true),
            "total" => $this->input->post('total',true)
        ];
        $this->db->insert('pengiriman',$data);
    }
}
?>