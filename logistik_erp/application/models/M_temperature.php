<?php

class M_temperature extends CI_Model{
    public function tampil_data(){
        return $this->db->get('temperature')->result_array();
    }
    public function tambahDataBukubesar(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "jenis" => $this->input->post('jenis',true),
            "nominal" => $this->input->post('nominal',true),
            "saldo" => $this->input->post('saldo',true),
            "debit" => $this->input->post('debit',true)
        ];
        $this->db->insert('bukubesar',$data);
    }
    public function getBukubesarById($id){
        return $this->db->get_where('bukubesar',['id'=>$id])->row_array();
    }
    public function hapusDataBukubesar($id){
        $this->db->where('id',$id);
        $this->db->delete('bukubesar');
    }
    public function ubahDataBukubesar(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "jenis" => $this->input->post('jenis',true),
            "nominal" => $this->input->post('nominal',true),
            "saldo" => $this->input->post('saldo',true),
            "debit" => $this->input->post('debit',true)

        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('bukubesar',$data);
    }
}