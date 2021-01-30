<?php

class M_backup extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('backup')->result_array();
    }
    public function tambahDataChart(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "manager" => $this->input->post('manager',true),
            "profit_sabtu" => $this->input->post('profit_sabtu',true),
            "profit_minggu" => $this->input->post('profit_minggu',true),
            "profit_senin" => $this->input->post('profit_senin',true),
            "profit_selasa" => $this->input->post('profit_selasa',true),
            "profit_rabu" => $this->input->post('profit_rabu',true),
            "profit_kamis" => $this->input->post('profit_kamis',true),
            "profit_jumat" => $this->input->post('profit_jumat',true),
            "total_profit" => $this->input->post('total_profit',true),
            "total_poin" => $this->input->post('total_poin',true)
        ];
        $this->db->insert('product_chart',$data);
    }
}
?>