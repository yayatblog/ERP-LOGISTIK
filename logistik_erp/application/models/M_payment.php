<?php

class M_payment extends CI_Model{
    public function tampil_data(){
        return $this->db->get('payment')->result_array();
    }
    public function tambahDataPayment(){
        $data = [
            "date" => $this->input->post('date',true),
            "payment_no" => $this->input->post('payment_no',true),
            "customer" => $this->input->post('customer',true),
            "payment_type" => $this->input->post('payment_type',true),
            "total" => $this->input->post('total',true),
            "date2" => $this->input->post('date2',true),
            "customer2" => $this->input->post('customer2',true),
            "invoice_no" => $this->input->post('invoice_no',true),
            "amount" => $this->input->post('amount',true),
            "outstanding" => $this->input->post('outstanding',true),
            "payment" => $this->input->post('payment',true)
        ];
        $this->db->insert('payment',$data);
    }
    public function getPaymentById($id){
        return $this->db->get_where('payment',['id'=>$id])->row_array();
    }
    public function hapusDataAsmen($id){
        $this->db->where('id',$id);
        $this->db->delete('payment');
    }
    public function ubahDataPayment(){
        $data = [
            "date" => $this->input->post('date',true),
            "payment_no" => $this->input->post('payment_no',true),
            "customer" => $this->input->post('customer',true),
            "payment_type" => $this->input->post('payment_type',true),
            "date2" => $this->input->post('date2',true),
            "customer2" => $this->input->post('customer2',true),
            "invoice_no" => $this->input->post('invoice_no',true),
            "amount" => $this->input->post('amount',true),
            "outstanding" => $this->input->post('outstanding',true),
            "payment" => $this->input->post('payment',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('payment',$data);
    }
    public function cariDataKaryawan(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('manager')->result_array();
    }
}