<?php

class M_fragh extends CI_Model{
    public function tampil_data(){
        return $this->db->get('fragh')->result_array();
    }
    // public function tampil_data2(){
    //     return $this->db->get('fleet_type')->result_array();
    // }
    public function tambahDataJuice(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "lokasi" => $this->input->post('lokasi',true),
            "point" => $this->input->post('point',true),
            "omzet" => $this->input->post('omzet',true)

        ];
        $this->db->insert('juice',$data);
    }
}
?>