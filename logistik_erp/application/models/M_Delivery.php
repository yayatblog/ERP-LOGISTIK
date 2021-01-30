<?php

class M_delivery extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('delivery')->result_array();
    }
    public function tambahDataMitra(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "tgl_lahir" => $this->input->post('tgl_lahir',true),
            "jabatan" => $this->input->post('jabatan',true),
            "promoter" => $this->input->post('promoter',true),
            "thn_gabung" => $this->input->post('thn_gabung',true),
            "gudang" => $this->input->post('gudang',true),
            "alamat" => $this->input->post('alamat',true),
            "kota" => $this->input->post('kota',true),
            "telepon" => $this->input->post('telepon',true),
            "email" => $this->input->post('email',true)
        ];
        $this->db->insert('daftarmitra',$data);
    }
    
    public function getMitraById($id){
        return $this->db->get_where('daftarmitra',['id'=>$id])->row_array();
    }
    public function hapusDataMitra($id){
        $this->db->where('id',$id);
        $this->db->delete('daftarmitra');
    }
    public function ubahDataMitra(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "tgl_lahir" => $this->input->post('tgl_lahir',true),
            "jabatan" => $this->input->post('jabatan',true),
            "promoter" => $this->input->post('promoter',true),
            "thn_gabung" => $this->input->post('thn_gabung',true),
            "gudang" => $this->input->post('gudang',true),
            "alamat" => $this->input->post('alamat',true),
            "kota" => $this->input->post('kota',true),
            "telepon" => $this->input->post('telepon',true),
            "email" => $this->input->post('email',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('daftarmitra',$data);
    }
    public function cariDataMitra(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('kategori',$keyword);
        return $this->db->get('daftarmitra')->result_array();
        // $this->db->select('
        // produk.*,tbl_category.id AS id_role,tbl_category.name');
        // return $this->db->get('produk')->result_array();

    }
}
