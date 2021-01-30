<?php

class M_expense extends CI_Model{
    public function tampil_data(){
        return $this->db->get('expense')->result_array();
    }
    public function tambahDataExpense(){
        $data = [
            "date" => $this->input->post('date',true),
            "expense_no" => $this->input->post('expense_no',true),
            "branch" => $this->input->post('branch',true),
            "total" => $this->input->post('total',true),
            "memo" => $this->input->post('memo',true),
            "maintenance" => $this->input->post('maintenance',true),
            "cost_center" => $this->input->post('cost_center',true),
            "truck_no" => $this->input->post('truck_no',true),
            "Qty" => $this->input->post('qty',true),
            "amount" => $this->input->post('amount',true)

        ];
        
        $this->db->insert('expense',$data);
    }
    public function getExpenseById($id){
        return $this->db->get_where('expense',['id'=>$id])->row_array();
    }
    public function ubahDataexpense(){
        $data = [
            "date" => $this->input->post('date',true),
            "expense_no" => $this->input->post('expense_no',true),
            "branch" => $this->input->post('branch',true),
            "total" => $this->input->post('total',true),
            "memo" => $this->input->post('memo',true),
            "maintenance" => $this->input->post('maintenance',true),
            "cost_center" => $this->input->post('cost_center',true),
            "truck_no" => $this->input->post('truck_no',true),
            "Qty" => $this->input->post('qty',true),
            "amount" => $this->input->post('amount',true)
        ];
       
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('expense',$data);
        
    }
    public function hapusDataExpense($id){
        $this->db->where('id',$id);
        $this->db->delete('expense');
    }
}
?>