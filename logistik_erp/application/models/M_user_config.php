<?php

class M_user_config extends CI_Model{
    public function tampil_data(){
        return $this->db->get('user_config')->result_array();
    }
    public function tampil_role(){
        return $this->db->get('role')->result_array();
    }
    public function tambahDataAccount(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "jenis" => $this->input->post('jenis',true),
            "nominal" => $this->input->post('nominal',true),
            "saldo" => $this->input->post('saldo',true),
            "debit" => $this->input->post('debit',true)
        ];
        $this->db->insert('chartofaccount',$data);
    }
    public function getAccountById($id){
        return $this->db->get_where('chartofaccount',['id'=>$id])->row_array();
    }
    public function hapusDataAccount($id){
        $this->db->where('id',$id);
        $this->db->delete('chartofaccount');
    }
    public function ubahDataAccount(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "jenis" => $this->input->post('jenis',true),
            "nominal" => $this->input->post('nominal',true),
            "saldo" => $this->input->post('saldo',true),
            "debit" => $this->input->post('debit',true)

        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('chartofaccount',$data);
    }
}