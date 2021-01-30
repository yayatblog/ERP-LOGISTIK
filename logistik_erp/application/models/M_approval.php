<?php

class M_approval extends CI_Model{
    public function tampil_data(){
        return $this->db->get('approval')->result_array();
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
    public function getKaryawanById($id){
        return $this->db->get_where('manager',['id'=>$id])->row_array();
    }
    public function hapusDataKaryawan($id){
        $this->db->where('id',$id);
        $this->db->delete('manager');
    }
    public function ubahDataKaryawan(){
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
        $this->db->update('manager',$data);
    }
    public function cariDataKaryawan(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('manager')->result_array();
    }
}