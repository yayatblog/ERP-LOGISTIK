<?php

class M_external extends CI_Model{
    public function tampil_data(){
        return $this->db->get('external')->result_array();
    }
    public function tambahDataJuice(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "lokasi" => $this->input->post('lokasi',true),
            "point" => $this->input->post('point',true),
            "omzet" => $this->input->post('omzet',true)

        ];
        $this->db->insert('juice',$data);
    }
    public function getJuiceById($id){
        return $this->db->get_where('juice',['id'=>$id])->row_array();
    }
    public function hapusDataJuice($id){
        $this->db->where('id',$id);
        $this->db->delete('juice');
    }
    public function ubahDataJuice(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "tgl_lahir" => $this->input->post('tgl_lahir',true),
            "jabatan" => $this->input->post('jabatan',true),
            "thn_gabung" => $this->input->post('thn_gabung',true),
            "alamat" => $this->input->post('alamat',true),
            "kota" => $this->input->post('kota',true),
            "no_telp" => $this->input->post('no_telp',true),
            "email" => $this->input->post('email',true),
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('juice',$data);
    }
    public function cariDataJuice(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('juice')->result_array();
    }
}