<?php

class M_tools extends CI_Model{
    public function tampil_module(){
        return $this->db->get('module')->result_array();
    }
    public function tampil_config(){
        return $this->db->get('user_config')->result_array();
    }
    public function tampil_tools(){
        return $this->db->get('tools')->result_array();
    }
    public function tampil_role(){
        return $this->db->get('role')->result_array();
    }
    public function tambahDataRoute(){
        $data = [
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "distance" => $this->input->post('distance',true)

        ];
        $this->db->insert('route',$data);
    }
    public function getRouteById($id){
        return $this->db->get_where('route',['id'=>$id])->row_array();
    }
    public function ubahDataroute(){
        $data = [
            "departure" => $this->input->post('departure',true),
            "arrival" => $this->input->post('arrival',true),
            "distance" => $this->input->post('distance',true)
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