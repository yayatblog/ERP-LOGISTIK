<?php

class M_invoice extends CI_Model{
    public function tampil_data(){
        return $this->db->get('invoice')->result_array();
    }
    public function tambahDataInvoice(){
        $data = [
            "date" => $this->input->post('date',true),
            "invoice_no" => $this->input->post('invoice_no',true),
            "customer" => $this->input->post('customer',true),
            "tax_no" => $this->input->post('tax_no',true),
            "tax_date" => $this->input->post('tax_date',true),
            "delivered_date" => $this->input->post('delivered_date',true),
            "bank" => $this->input->post('bank',true),
            "total" => $this->input->post('total',true),
            "insurance" => $this->input->post('insurance',true),
            "down_payment" => $this->input->post('down_payment',true),
            "ppn" => $this->input->post('ppn',true),
            "netto" => $this->input->post('netto',true),
            "paid" => $this->input->post('paid',true),
            "ppn2" => $this->input->post('ppn2',true),
            "insurance2" => $this->input->post('insurance2',true),
            "notes" => $this->input->post('notes',true),
            "date2" => $this->input->post('date2',true),
            "rent_no" => $this->input->post('rent_no',true),
            "customer2" => $this->input->post('customer2',true),
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "group_truck" => $this->input->post('group_truck',true),
            "truck" => $this->input->post('truck',true),
            "insurance3" => $this->input->post('insurance3',true),
            "amount" => $this->input->post('amount',true)
        ];
        $this->db->insert('invoice',$data);
    }
    public function getInvoiceById($id){
        return $this->db->get_where('invoice',['id'=>$id])->row_array();
    }
    public function hapusDataInvoice($id){
        $this->db->where('id',$id);
        $this->db->delete('invoice');
    }
    public function ubahDataInvoice(){
        $data = [
            "date" => $this->input->post('date',true),
            "invoice_no" => $this->input->post('invoice_no',true),
            "customer" => $this->input->post('customer',true),
            "tax_no" => $this->input->post('tax_no',true),
            "tax_date" => $this->input->post('tax_date',true),
            "delivered_date" => $this->input->post('delivered_date',true),
            "bank" => $this->input->post('bank',true),
            "total" => $this->input->post('total',true),
            "insurance" => $this->input->post('insurance',true),
            "down_payment" => $this->input->post('down_payment',true),
            "ppn" => $this->input->post('ppn',true),
            "netto" => $this->input->post('netto',true),
            "paid" => $this->input->post('paid',true),
            "ppn2" => $this->input->post('ppn2',true),
            "insurance2" => $this->input->post('insurance2',true),
            "notes" => $this->input->post('notes',true),
            "date2" => $this->input->post('date2',true),
            "rent_no" => $this->input->post('rent_no',true),
            "customer2" => $this->input->post('customer2',true),
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "group_truck" => $this->input->post('group_truck',true),
            "truck" => $this->input->post('truck',true),
            "insurance3" => $this->input->post('insurance3',true),
            "amount" => $this->input->post('amount',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('invoice',$data);
    }
}