<?php

class M_bank extends CI_Model{
    public function tampil_data(){
        return $this->db->get('bank')->result_array();
    }
    public function tambahDataBank(){
        $data = [
            "name" => $this->input->post('name',true),
            "atas_nama" => $this->input->post('atas_nama',true),
            "no_rekening" => $this->input->post('no_rekening',true)
        ];
        $this->db->insert('bank',$data);
    }
    public function getBankById($id){
        return $this->db->get_where('bank',['id'=>$id])->row_array();
    }
    public function hapusDataBank($id){
        $this->db->where('id',$id);
        $this->db->delete('bank');
    }
    public function ubahDataBank(){
        $data = [
            "name" => $this->input->post('name',true),
            "atas_nama" => $this->input->post('atas_nama',true),
            "no_rekening" => $this->input->post('no_rekening',true)
            // "role_id" => $this->input->post('role_id',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('bank',$data);
    }
    public function cariDatabank(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('bank')->result_array();
    }
}