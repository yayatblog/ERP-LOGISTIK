<?php

class M_invoiced extends CI_Model{
    public function tampil_data(){
        return $this->db->get('invoiced')->result_array();
    }
    public function tambahDataNeraca(){
        $data = [
            "name" => $this->input->post('name',true),
            "description" => $this->input->post('description',true),

        ];
        $this->db->insert('neraca',$data);
    }
    public function getNeracaById($id){
        return $this->db->get_where('neraca',['id'=>$id])->row_array();
    }
    public function hapusDataNeraca($id){
        $this->db->where('id',$id);
        $this->db->delete('neraca');
    }
    public function ubahDataNeraca(){
        $data = [
            "name" => $this->input->post('name',true),
            "description" => $this->input->post('description',true),

        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('neraca',$data);
    }
}