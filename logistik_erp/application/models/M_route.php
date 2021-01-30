<?php

class M_route extends CI_Model{
    public function tampil_data(){
        return $this->db->get('route')->result_array();
    }
    public function tampil_data2(){
        return $this->db->get('grouptruck')->result_array();
    }
    public function tambahDataRoute(){
        $data = [
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "distance" => $this->input->post('distance',true),
            "group_truck" => $this->input->post('group_truck',true),
            "amount" => $this->input->post('amount',true)


        ];
        $this->db->insert('route',$data);
    }
    public function getRouteById($id){
        return $this->db->get_where('route',['id'=>$id])->row_array();
    }
    public function getRouteById2($id){
        return $this->db->get_where('grouptruck',['id'=>$id])->row_array();
    }
    public function ubahDataroute(){
        $data = [
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "distance" => $this->input->post('distance',true),
            "group_truck" => $this->input->post('group_truck',true),
            "amount" => $this->input->post('amount',true)


        ];
       
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('route',$data);
        
    }
    public function hapusDataRoute($id){
        $this->db->where('id',$id);
        $this->db->delete('route');
    }
}
?>