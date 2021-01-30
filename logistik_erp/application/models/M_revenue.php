<?php

class M_revenue extends CI_Model{
    public function tampil_data(){
        return $this->db->get('revenue')->result_array();
    }
    public function tambahDatarevenue(){
        $data = [
            "date" => $this->input->post('date',true),
            "revenue_no" => $this->input->post('revenue_no',true),
            "customer" => $this->input->post('customer',true),
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "group_truck" => $this->input->post('group_truck',true),
            "truck" => $this->input->post('truck',true),
            "driver" => $this->input->post('driver',true),
            // "delivered" => $this->input->post('delivered',true),
            "invoice_no" => $this->input->post('invoice_no',true),
            "amount" => $this->input->post('amount',true),
            "cost" => $this->input->post('cost',true)
        ];
        $this->db->insert('revenue',$data);
    }
    public function getrevenueById($id){
        return $this->db->get_where('revenue',['id'=>$id])->row_array();
    }
    public function ubahDatarevenue(){
        $data = [
            "date" => $this->input->post('date',true),
            "revenue_no" => $this->input->post('revenue_no',true),
            "customer" => $this->input->post('customer',true),
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "group_truck" => $this->input->post('group_truck',true),
            "truck" => $this->input->post('truck',true),
            "driver" => $this->input->post('driver',true),
            // "delivered" => $this->input->post('delivered',true),
            "invoice_no" => $this->input->post('invoice_no',true),
            "amount" => $this->input->post('amount',true),
            "cost" => $this->input->post('cost',true)
        ];
       
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('revenue',$data);
        
    }
    public function hapusDatarevenue($id){
        $this->db->where('id',$id);
        $this->db->delete('revenue');
    }
}
?>