<?php

class M_cost extends CI_Model{
    public function tampil_CostCenter(){
        return $this->db->get('cost_center')->result_array();
    }
    public function tambahDataCostCenter(){
        $data = [
            "name" => $this->input->post('name',true),
            // "role_id" => $this->input->post('role_id',true)
            
        ];
        $this->db->insert('cost_center',$data);
    }
    public function getCostCenterById($id){
        return $this->db->get_where('cost_center',['id'=>$id])->row_array();
    }
    public function ubahDataCostCenter(){
        $data = [
            "name"=>$this->input->post('name',true),
            // "role_id" => $this->input->post('role_id',true)

        ];
       
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('cost_center',$data);
        
    }
    public function hapusDataCostCenter($id){
        $this->db->where('id',$id);
        $this->db->delete('cost_center');
    }
    // Untuk Model Controller Cost
    public function tampil_Cost(){
        return $this->db->get('cost')->result_array();
    }
    public function tampil_data2(){
        return $this->db->get('cost_center')->result_array();
    }
    public function tampil_data3(){
        return $this->db->get('grouptruck')->result_array();
    }
    public function tambahDataCost(){
        $data = [
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "group_truck" => $this->input->post('group_truck',true),
            "cost_center" => $this->input->post('cost_center',true),
            "amount" => $this->input->post('amount',true)
            
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
            "group_truck" => $this->input->post('group_truck',true),
            "cost_center" => $this->input->post('cost_center',true),
            "amount" => $this->input->post('amount',true)

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