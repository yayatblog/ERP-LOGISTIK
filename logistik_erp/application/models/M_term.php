<?php

class M_term extends CI_Model{
    public function tampil_data(){
        return $this->db->get('term_of_payment')->result_array();
    }
    public function tambahDataReturn_gudang(){
        $data = [
            "tanggal" => $this->input->post('tanggal',true),
            "no_faktur" => $this->input->post('no_faktur',true),
            "keterangan" => $this->input->post('keterangan',true),
            "kode" => $this->input->post('kode',true),
            "barang" => $this->input->post('barang',true),
            "gudang_asal" => $this->input->post('gudang_asal',true),
            "gudang_tujuan" => $this->input->post('gudang_tujuan',true),
            "jumlah" => $this->input->post('jumlah',true)
        ];
        $this->db->insert('return_gudang',$data);
    }
}
?>