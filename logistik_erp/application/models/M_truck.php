<?php

class M_truck extends CI_Model
{
    public function tampil_truck(){
        return $this->db->get('truck')->result_array();
    }
    public function tampil_grouptruck(){
        return $this->db->get('grouptruck')->result_array();
    }
    public function tampil_driver(){
        return $this->db->get('driver')->result_array();
    }
    public function tampil_kernet(){
        return $this->db->get('kernet')->result_array();
    }
    public function tambahDatatruck(){
        $data = [
            "truck_no" => $this->input->post('truck_no',true),
            "group_truck" => $this->input->post('group_truck',true),
            "driver" => $this->input->post('driver',true),
            "kernet" => $this->input->post('kernet',true),
            "initial" => $this->input->post('initial',true),
            "distance" => $this->input->post('distance',true),
            "kir" => $this->input->post('kir',true),
            "stnk" => $this->input->post('stnk',true),
            "target" => $this->input->post('target',true),
            "year" => $this->input->post('year',true),
            "memo" => $this->input->post('memo',true),
            "maintenance" => $this->input->post('maintenance',true),
            "maximum" => $this->input->post('maximum',true),
            "current" => $this->input->post('current',true),
            "last" => $this->input->post('last',true),
            "date" => $this->input->post('date',true),
            "memo2" => $this->input->post('memo2',true)


        ];
        $this->db->insert('truck',$data);
    }
    
    public function getTruckById($id){
        return $this->db->get_where('truck',['id'=>$id])->row_array();
    }
    public function hapusDataTruck($id){
        $this->db->where('id',$id);
        $this->db->delete('truck');
    }
    public function ubahDataTruck(){
        $data = [
            "truck_no" => $this->input->post('truck_no',true),
            "group_truck" => $this->input->post('group_truck',true),
            "driver" => $this->input->post('driver',true),
            "kernet" => $this->input->post('kernet',true),
            "initial" => $this->input->post('initial',true),
            "distance" => $this->input->post('distance',true),
            "kir" => $this->input->post('kir',true),
            "stnk" => $this->input->post('stnk',true),
            "target" => $this->input->post('target',true),
            "year" => $this->input->post('year',true),
            "memo" => $this->input->post('memo',true),
            "maintenance" => $this->input->post('maintenance',true),
            "maximum" => $this->input->post('maximum',true),
            "current" => $this->input->post('current',true),
            "last" => $this->input->post('last',true),
            "date" => $this->input->post('date',true),
            "memo2" => $this->input->post('memo2',true)
            
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('truck',$data);
    }
}
