<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repair extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_repair');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Repair';
        $data['repair'] = $this->M_repair->tampil_repair();
        
        if ($this->input->post('keyword')) {
            $data['repair'] = $this->M_repair->cariDatarepair();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('repair/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Repair';

        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('repair_no','Repair_no','required');
        $this->form_validation->set_rules('truck','Truck','required');
        $this->form_validation->set_rules('total','Total','required');
        $this->form_validation->set_rules('maintenance','Maintenance','required');
        $this->form_validation->set_rules('cost_center','Cost_center','required');
        $this->form_validation->set_rules('memo','Memo','required');
        $this->form_validation->set_rules('qty','Qty','required');
        $this->form_validation->set_rules('amount','Amount','required');



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('repair/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_repair->tambahDataRepair();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('repair');
        }
        
    }
    public function hapus($id){
        $this->M_repair->hapusDataRepair($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('repair');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data repair';
        $data['repair'] = $this->M_repair-> getRepairById($id);
        
        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('repair_no','Repair_no','required');
        $this->form_validation->set_rules('truck','Truck','required');
        $this->form_validation->set_rules('total','Total','required');
        $this->form_validation->set_rules('maintenance','Maintenance','required');
        $this->form_validation->set_rules('cost_center','Cost_center','required');
        $this->form_validation->set_rules('memo','Memo','required');
        $this->form_validation->set_rules('qty','Qty','required');
        $this->form_validation->set_rules('amount','Amount','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('repair/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_repair->ubahDatarepair();
            $this->session->set_flashdata('flash','Diubah');
            redirect('repair');
        }
}
    
    
}