<?php

class M_driver extends CI_Model{
    public function tampil_driver(){
        return $this->db->get('driver')->result_array();
    }
    public function tambahDataDriver(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "code" => $this->input->post('code',true),
            "phone" => $this->input->post('phone',true),
            "phone2" => $this->input->post('phone2',true),
            "phone3" => $this->input->post('phone3',true),
            "join_date" => $this->input->post('join_date',true),
            "address" => $this->input->post('address',true)
        ];
        $this->db->insert('driver',$data);
    }
    public function getDriverById($id){
        return $this->db->get_where('driver',['id'=>$id])->row_array();
    }
    public function hapusDatadriver($id){
        $this->db->where('id',$id);
        $this->db->delete('driver');
    }
    public function ubahDataDriver(){
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
        $this->db->update('driver',$data);
    }
    public function cariDataKaryawan(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('driver')->result_array();
    }
}