<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revenue extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_revenue');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu revenue';
        $data['revenue'] = $this->M_revenue->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['revenue'] = $this->M_revenue->cariDatarevenue();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('revenue/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah revenue';

        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('distance','Distance','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('revenue/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_revenue->tambahDatarevenue();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('revenue');
        }
        
    }
    public function hapus($id){
        $this->M_revenue->hapusDatarevenue($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('revenue');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data revenue';
        $data['revenue'] = $this->M_revenue->getrevenueById($id);
        
        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('distance','Distance','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('revenue/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_revenue->ubahDatarevenue();
            $this->session->set_flashdata('flash','Diubah');
            redirect('revenue');
        }
}
    
    
}