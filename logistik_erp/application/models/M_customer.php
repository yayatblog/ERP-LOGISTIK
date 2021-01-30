<?php

class M_customer extends CI_Model
{
    public function tampil_customer(){
        return $this->db->get('customer')->result_array();
    }
    public function tambahDataCustomer(){
        $data = [
            "name" => $this->input->post('name',true),
            "contact_person" => $this->input->post('contact_person',true),
            "address" => $this->input->post('address',true),
            "address2" => $this->input->post('address2',true),
            "phone" => $this->input->post('phone',true),
            "phone2" => $this->input->post('phone2',true),
            "phone3" => $this->input->post('phone3',true),
            "fax" => $this->input->post('fax',true),
            "email" => $this->input->post('email',true),
            "tax_name" => $this->input->post('tax_name',true),
            "npwp" => $this->input->post('npwp',true),
            "nppkp" => $this->input->post('nppkp',true),
            "tax_address" => $this->input->post('tax_address',true),
            "tax_address2" => $this->input->post('tax_address2',true),
            "max_rittase" => $this->input->post('max_rittase',true),
            "max_amount" => $this->input->post('max_amount',true),
            "delivered" => $this->input->post('delivered',true),
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "group_truck" => $this->input->post('group_truck',true),
            "amount" => $this->input->post('amount',true)

        ];
        $this->db->insert('customer',$data);
    }
    public function getCustomerById($id){
        return $this->db->get_where('customer',['id'=>$id])->row_array();
    }
    public function hapusDatacustomer($id){
        $this->db->where('id',$id);
        $this->db->delete('customer');
    }
    public function ubahDataCustomer(){
        $data = [
            "name" => $this->input->post('name',true),
            "contact_person" => $this->input->post('contact_person',true),
            "address" => $this->input->post('address',true),
            "address2" => $this->input->post('address2',true),
            "phone" => $this->input->post('phone',true),
            "phone2" => $this->input->post('phone2',true),
            "phone3" => $this->input->post('phone3',true),
            "fax" => $this->input->post('fax',true),
            "email" => $this->input->post('email',true),
            "tax_name" => $this->input->post('tax_name',true),
            "npwp" => $this->input->post('npwp',true),
            "nppkp" => $this->input->post('nppkp',true),
            "tax_address" => $this->input->post('tax_address',true),
            "tax_address2" => $this->input->post('tax_address2',true),
            "max_rittase" => $this->input->post('max_rittase',true),
            "max_amount" => $this->input->post('max_amount',true),
            "delivered" => $this->input->post('delivered',true),
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "group_truck" => $this->input->post('group_truck',true),
            "amount" => $this->input->post('amount',true)
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('customer',$data);
    }
    public function cariDataCustomer(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('jabatan',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('customer')->result_array();
    }
}
?>