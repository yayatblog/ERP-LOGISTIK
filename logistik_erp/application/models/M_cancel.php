<?php

class M_cancel extends CI_Model{
    public function tampil_data(){
        return $this->db->get('cancel')->result_array();
    }
    public function tambahDataToplead(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "manager" => $this->input->post('manager',true),
            "poin_sendiri" => $this->input->post('poin_sendiri',true),
            "poin_tim" => $this->input->post('poin_tim',true),
            "peringkat_langsung" => $this->input->post('peringkat_langsung',true),
            "peringkat_tidaklangsung" => $this->input->post('peringkat_tidaklangsung',true),
            "jumlah_leader" => $this->input->post('jumlah_leader',true),
            "jumlah_distributor" => $this->input->post('jumlah_distributor',true),
            "jumlah_retrain" => $this->input->post('jumlah_retrain',true),
            "jumlah_observasi" => $this->input->post('jumlah_observasi',true),
            "jumlah_team" => $this->input->post('jumlah_team',true)

        ];
        $this->db->insert('toplead',$data);
    }
    public function getKaryawanById($id){
        return $this->db->get_where('manager',['id'=>$id])->row_array();
    }
    public function hapusDataToplead($id){
        $this->db->where('id',$id);
        $this->db->delete('toplead');
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