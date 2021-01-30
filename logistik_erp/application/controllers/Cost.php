<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cost extends CI_Controller {
    public function __construct(){
        parent::__construct();  
        $this->load->model('M_cost');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Cost';
        $data['cost'] = $this->M_cost->tampil_Cost();
        
        if ($this->input->post('keyword')) {
            $data['cost'] = $this->M_cost->cariDatacost();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('cost/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Cost';
        $data2['group_truck'] = $this->M_cost->tampil_data3();
        $data2['cost_center'] = $this->M_cost->tampil_data2();


        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('group_truck','Group_truck','required');
        $this->form_validation->set_rules('cost_center','Cost_center','required');
        $this->form_validation->set_rules('amount','Amount','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('cost/tambah',$data2);
            $this->load->view('templates/footer');
        }else {
            $this->M_cost->tambahDataCost();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('cost');
        }
        
    }
    public function hapus($id){
        $this->M_cost->hapusDataCost($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('cost');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Cost';
        $data['cost'] = $this->M_cost->getCostById($id);
        $data['group_truck'] = $this->M_cost->tampil_data3();
        $data['cost_center'] = $this->M_cost->tampil_data2();
        
        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('group_truck','Group_truck','required');
        $this->form_validation->set_rules('cost_center','Cost_center','required');
        $this->form_validation->set_rules('amount','Amount','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('cost/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $data['cost'] = $this->M_cost->getCostById($id);
            $data['group_truck'] = $this->M_cost->tampil_data3();
            $data['cost_center'] = $this->M_cost->tampil_data2();

            $this->M_cost->ubahDataCost();
            $this->session->set_flashdata('flash','Diubah');
            redirect('cost');
        }
}
    
    
}