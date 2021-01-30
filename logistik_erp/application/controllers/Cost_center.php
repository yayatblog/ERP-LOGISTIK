<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cost_center extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_cost');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Cost Center';
        $data['costcenter'] = $this->M_cost->tampil_CostCenter();
        
        if ($this->input->post('keyword')) {
            $data['costcenter'] = $this->M_cost->cariDatacost();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('costcenter/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Cost Center';

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('role_id','role_id','');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('costcenter/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_cost->tambahDataCostCenter();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('cost_center');
        }
        
    }
    public function hapus($id){
        $this->M_cost->hapusDataCostCenter($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('cost_center');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data CostCenter';
        $data['costcenter'] = $this->M_cost->getCostCenterById($id);
        
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('role_id','role_id','');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('costcenter/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_cost->ubahDataCostCenter();
            $this->session->set_flashdata('flash','Diubah');
            redirect('cost_center');
        }
}
    
    
}