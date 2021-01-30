<?php

class M_branch extends CI_Model{
    public function tampil_data(){
        return $this->db->get('branch')->result_array();
    }
    public function tambahDataBranch(){
        $data = [
            "name" => $this->input->post('name',true),
        ];
        $this->db->insert('branch',$data);
    }
    public function getBranchById($id){
        return $this->db->get_where('branch',['id'=>$id])->row_array();
    }
    public function hapusDataBranch($id){
        $this->db->where('id',$id);
        $this->db->delete('branch');
    }
    public function ubahDataBranch(){
        $data = [
            "name" => $this->input->post('name',true),
            // "role_id" => $this->input->post('role_id',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('branch',$data);
    }
    public function cariDataBranch(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('branch')->result_array();
    }
}