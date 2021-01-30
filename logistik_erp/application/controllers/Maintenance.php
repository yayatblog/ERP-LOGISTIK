<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_maintenance');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Maintenance';
        $data['maintenance'] = $this->M_maintenance->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['maintenance'] = $this->M_maintenance->cariDataMaintenance();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('maintenance/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Maintenance';

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('role_id','role_id','');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('maintenance/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_maintenance->tambahDataMaintenance();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('maintenance');
        }
        
    }
    public function hapus($id){
        $this->M_maintenance->hapusDataMaintenance($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('maintenance');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Maintenance';
        $data['maintenance'] = $this->M_maintenance->getMaintenanceById($id);
        
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('role_id','role_id','');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('maintenance/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_maintenance->ubahDataMaintenance();
            $this->session->set_flashdata('flash','Diubah');
            redirect('Maintenance');
        }
}
    
    
}