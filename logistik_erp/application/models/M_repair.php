<?php

class M_repair extends CI_Model{
    public function tampil_repair(){
        return $this->db->get('repair')->result_array();
    }
    public function tambahDataRepair(){
        $data = [
            "date" => $this->input->post('date',true),
            "repair_no" => $this->input->post('repair_no',true),
            "truck" => $this->input->post('truck',true),
            "total" => $this->input->post('total',true),
            "maintenance" => $this->input->post('maintenance',true),
            "cost_center" => $this->input->post('cost_center',true),
            "memo" => $this->input->post('memo',true),
            "qty" => $this->input->post('qty',true),
            "amount" => $this->input->post('amount',true)
        ];
        $this->db->insert('repair',$data);
    }
    public function getRepairById($id){
        return $this->db->get_where('repair',['id'=>$id])->row_array();
    }
    public function ubahDataRepair(){
        $data = [
            "date" => $this->input->post('date',true),
            "repair_no" => $this->input->post('repair_no',true),
            "truck" => $this->input->post('truck',true),
            "total" => $this->input->post('total',true),
            "maintenance" => $this->input->post('maintenance',true),
            "cost_center" => $this->input->post('cost_center',true),
            "memo" => $this->input->post('memo',true),
            "qty" => $this->input->post('qty',true),
            "amount" => $this->input->post('amount',true)

        ];
       
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('repair',$data);
        
    }
    public function hapusDataRepair($id){
        $this->db->where('id',$id);
        $this->db->delete('repair');
    }
    
   
   
   
}
?>