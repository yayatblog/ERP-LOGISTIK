<?php

class M_rent extends CI_Model{
    public function tampil_data(){
        return $this->db->get('rent')->result_array();
    }
    public function tambahDataRent(){
        $data = [
            "date" => $this->input->post('date',true),
            "rent_no" => $this->input->post('rent_no',true),
            "customer" => $this->input->post('customer',true),
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "group_truck" => $this->input->post('group_truck',true),
            "truck" => $this->input->post('truck',true),
            "driver" => $this->input->post('driver',true),
            "kernet" => $this->input->post('kernet',true),
            "insurance" => $this->input->post('insurance',true),
            "amount" => $this->input->post('amount',true),
            "late_pickup" => $this->input->post('late_pickup',true),
            "late_delivered" => $this->input->post('late_delivered',true),
            "combine" => $this->input->post('combine',true),
            "delivered" => $this->input->post('delivered',true),
            "invoice_no" => $this->input->post('invoice_no',true),
            "shipping_no" => $this->input->post('shipping_no',true),
            "distance" => $this->input->post('distance',true),
            "cost_center" => $this->input->post('cost_center',true),
            "type" => $this->input->post('type',true),
            "amount_cost" => $this->input->post('amount_cost',true),
            "date_payment" => $this->input->post('date_payment',true),
            "amount_payment" => $this->input->post('amount_payment',true),
            "date_other" => $this->input->post('date_other',true),
            "cost_center2" => $this->input->post('cost_center2',true),
            "memo" => $this->input->post('memo',true),
            "amount_other" => $this->input->post('amount_other',true),
            "amount_claim" => $this->input->post('amount_claim',true),
            "amount_accident" => $this->input->post('amount_accident',true),
            "notes" => $this->input->post('notes',true)
        ];
        
        $this->db->insert('rent',$data);
    }
    public function getRentById($id){
        return $this->db->get_where('rent',['id'=>$id])->row_array();
    }
    public function ubahDataRent(){
        $data = [
            "date" => $this->input->post('date',true),
            "rent_no" => $this->input->post('rent_no',true),
            "customer" => $this->input->post('customer',true),
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "group_truck" => $this->input->post('group_truck',true),
            "truck" => $this->input->post('truck',true),
            "driver" => $this->input->post('driver',true),
            "kernet" => $this->input->post('kernet',true),
            "insurance" => $this->input->post('insurance',true),
            "amount" => $this->input->post('amount',true),
            "late_pickup" => $this->input->post('late_pickup',true),
            "late_delivered" => $this->input->post('late_delivered',true),
            "combine" => $this->input->post('combine',true),
            "delivered" => $this->input->post('delivered',true),
            "invoice_no" => $this->input->post('invoice_no',true),
            "shipping_no" => $this->input->post('shipping_no',true),
            "distance" => $this->input->post('distance',true),
            "cost_center" => $this->input->post('cost_center',true),
            "type" => $this->input->post('type',true),
            "amount_cost" => $this->input->post('amount_cost',true),
            "date_payment" => $this->input->post('date_payment',true),
            "amount_payment" => $this->input->post('amount_payment',true),
            "date_other" => $this->input->post('date_other',true),
            "cost_center2" => $this->input->post('cost_center2',true),
            "memo" => $this->input->post('memo',true),
            "amount_other" => $this->input->post('amount_other',true),
            "amount_claim" => $this->input->post('amount_claim',true),
            "amount_accident" => $this->input->post('amount_accident',true),
            "notes" => $this->input->post('notes',true)
        ];
       
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('rent',$data);
        
    }
    public function hapusDatarent($id){
        $this->db->where('id',$id);
        $this->db->delete('rent');
    }
}
?>