<?php

class M_kernet extends CI_Model{
    public function tampil_data(){
        return $this->db->get('kernet')->result_array();
    }
    public function tambahDatakernet(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "code" => $this->input->post('code',true),
            "phone" => $this->input->post('phone',true),
            "phone2" => $this->input->post('phone2',true),
            "phone3" => $this->input->post('phone3',true),
            "join_date" => $this->input->post('join_date',true),
            "address" => $this->input->post('address',true)
        ];
        $this->db->insert('kernet',$data);
    }
    public function getkernetById($id){
        return $this->db->get_where('kernet',['id'=>$id])->row_array();
    }
    public function hapusDatakernet($id){
        $this->db->where('id',$id);
        $this->db->delete('kernet');
    }
    public function ubahDatakernet(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "code" => $this->input->post('code',true),
            "phone" => $this->input->post('phone',true),
            "phone2" => $this->input->post('phone2',true),
            "phone3" => $this->input->post('phone3',true),
            "join_date" => $this->input->post('join_date',true),
            "address" => $this->input->post('address',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('kernet',$data);
    }
    public function cariDataKernet(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('kernet')->result_array();
    }
}