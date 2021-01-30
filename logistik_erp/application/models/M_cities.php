<?php

class M_cities extends CI_Model{
    public function tampil_data(){
        return $this->db->get('city')->result_array();
    }
    public function tambahDataCity(){
        $data = [
            "city" => $this->input->post('city',true),
            // "role_id" => $this->input->post('role_id',true)
            
        ];
        $this->db->insert('city',$data);
    }
    public function getCityById($id){
        return $this->db->get_where('city',['id'=>$id])->row_array();
    }
    public function ubahDataCity(){
        $data = [
            "city"=>$this->input->post('city',true),
            // "role_id" => $this->input->post('role_id',true)

        ];
       
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('city',$data);
        
    }
    public function hapusDataCity($id){
        $this->db->where('id',$id);
        $this->db->delete('city');
    }
}
?>