<?php

class M_maintenance extends CI_Model{
    public function tampil_data(){
        return $this->db->get('maintenance')->result_array();
    }
    public function tambahDataMaintenance(){
        $data = [
            "name" => $this->input->post('name',true),
            // "role_id" => $this->input->post('role_id',true)
            
        ];
        $this->db->insert('maintenance',$data);
    }
    public function getMaintenanceById($id){
        return $this->db->get_where('maintenance',['id'=>$id])->row_array();
    }
    public function ubahDataMaintenance(){
        $data = [
            "name"=>$this->input->post('name',true)
            // "role_id" => $this->input->post('role_id',true)

        ];
       
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('maintenance',$data);
        
    }
    public function hapusDataMaintenance($id){
        $this->db->where('id',$id);
        $this->db->delete('maintenance');
    }
    // Untuk Model Controller Cost
    public function tampil_Cost(){
        return $this->db->get('cost')->result_array();
    }
    public function tambahDataCost(){
        $data = [
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "group_truck" => $this->input->post('group_truck',true)

            
        ];
        $this->db->insert('cost',$data);
    }
    public function getCostById($id){
        return $this->db->get_where('cost',['id'=>$id])->row_array();
    }
    public function ubahDataCost(){
        $data = [
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "group_truck" => $this->input->post('group_truck',true)

        ];
       
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('cost',$data);
        
    }
    public function hapusDataCost($id){
        $this->db->where('id',$id);
        $this->db->delete('cost');
    }
}
?>