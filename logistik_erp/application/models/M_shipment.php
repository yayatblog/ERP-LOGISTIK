<?php

class M_shipment extends CI_Model{
    public function tampil_data(){
        return $this->db->get('shipment')->result_array();
    }
    public function tambahDataPengeluaran(){
        $data = [
            "tgl" => $this->input->post('tgl',true),
            "uraian" => $this->input->post('uraian',true),
            "reff" => $this->input->post('reff',true),
            "batasan" => $this->input->post('batasan',true),
            "jumlah" => $this->input->post('jumlah',true),
            "no_akun" => $this->input->post('no_akun',true)
            
        ];
        $this->db->insert('pengeluaran',$data);
    }
}
?>