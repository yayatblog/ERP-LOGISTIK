<?php

class M_grouptruck extends CI_Model{
    
    public function tampil_data(){
        return $this->db->get('grouptruck')->result_array();
    }
    
    public function tambahDataGroup(){
        $data = [
            "name" => $this->input->post('name',true),
            "level" => $this->input->post('level',true)
        ];
        $this->db->insert('grouptruck',$data);
    }
    public function getGrouptruckById($id){
        return $this->db->get_where('grouptruck',['id'=>$id])->row_array();
    }
    public function ubahDataGrouptruck(){
        $data = [
            "name" => $this->input->post('name',true),
            "level" => $this->input->post('level',true)

        ];
       
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('grouptruck',$data);
        
    }
    public function hapusDataGroup($id){
        $this->db->where('id',$id);
        $this->db->delete('grouptruck');
    }
}
?>