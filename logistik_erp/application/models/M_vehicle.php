<?php

class M_vehicle extends CI_Model{
    public function tampil_data(){
        return $this->db->get('vehicle')->result_array();
    }
    public function tambahDataPengiriman(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "qty_karton" => $this->input->post('qty_karton',true),
            "qty_perkarton" => $this->input->post('qty_perkarton',true),
            "total" => $this->input->post('total',true)
        ];
        $this->db->insert('pengiriman',$data);
    }
    public function getPengirimanById($id){
        return $this->db->get_where('pengiriman',['id'=>$id])->row_array();
    }
    public function hapusDataPengiriman($id){
        $this->db->where('id',$id);
        $this->db->delete('pengiriman');
    }
    public function ubahDataPengiriman(){
        $data = [
            "kode_id" => $this->input->post('kode_id',true),
            "nama" => $this->input->post('nama',true),
            "qty_karton" => $this->input->post('qty_karton',true),
            "qty_perkarton" => $this->input->post('qty_perkarton',true),
            "total" => $this->input->post('total',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('pengiriman',$data);
    }
    public function cariDataKaryawan(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('pengiriman')->result_array();
    }
}