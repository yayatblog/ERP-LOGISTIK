<?php

class M_settlement extends CI_Model{
    public function tampil_data(){
        return $this->db->get('driver_settlement')->result_array();
    }
    public function tambahDataPengeluaran(){
        $data = [
            "tgl" => $this->input->post('tgl',true),
            "uraian" => $this->input->post('uraian',true),
            "reff" => $this->input->post('reff',true),
            "batasan" => $this->input->post('batasan',true),
            "jumlah" => $this->input->post('jumlah',true),
            "no_akun" => $this->input->post('no_akun',true)
            
        ];
        $this->db->insert('pengeluaran',$data);
    }
    public function getPengeluaranById($id){
        return $this->db->get_where('pengeluaran',['id'=>$id])->row_array();
    }
    public function hapusDataPengeluaran($id){
        $this->db->where('id',$id);
        $this->db->delete('pengeluaran');
    }
    public function ubahDataPengeluaran(){
        $data = [
            "tgl" => $this->input->post('tgl',true),
            "uraian" => $this->input->post('uraian',true),
            "reff" => $this->input->post('reff',true),
            "batasan" => $this->input->post('batasan',true),
            "jumlah" => $this->input->post('jumlah',true),
            "no_akun" => $this->input->post('no_akun',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('pengeluaran',$data);
    }
    // public function cariDataKaryawan(){
    //     $keyword = $this->input->post('keyword',true);
    //     $this->db->like('nama',$keyword);
    //     $this->db->or_like('jabatan',$keyword);
    //     $this->db->or_like('alamat',$keyword);
    //     return $this->db->get('pendapatanlain')->result_array();
    // }
}