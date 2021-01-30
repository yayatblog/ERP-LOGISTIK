<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logistik extends CI_Controller {
    
    public function index(){
        $topik['judul'] = 'Halaman Info Perusahaan';
        // $data['maintenance'] = $this->M_maintenance->tampil_data();
        
        // if ($this->input->post('keyword')) {
        //     $data['maintenance'] = $this->M_maintenance->cariDataMaintenance();
        // }
        $this->load->view('templates/header',$topik);
        $this->load->view('logistik/index');
        $this->load->view('templates/footer');
    }
    public function read_me(){
        $topik['judul'] = 'Vitrans Logistik';
        // $data['maintenance'] = $this->M_maintenance->tampil_data();
        
        // if ($this->input->post('keyword')) {
        //     $data['maintenance'] = $this->M_maintenance->cariDataMaintenance();
        // }
        $this->load->view('templates/header',$topik);
        $this->load->view('logistik/read_me');
        $this->load->view('templates/footer');
    }
}

?>