<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_loan');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Loan';
        $data['loan'] = $this->M_loan->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['loan'] = $this->M_loan->cariDataLoan();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('loan/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Loan';

        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('distance','Distance','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('loan/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_loan->tambahDataLoan();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('loan');
        }
        
    }
    public function hapus($id){
        $this->M_loan->hapusDataloan($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('loan');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Loan';
        $data['loan'] = $this->M_loan->getLoanById($id);
        
        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('distance','Distance','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('loan/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_loan->ubahDataLoan();
            $this->session->set_flashdata('flash','Diubah');
            redirect('loan');
        }
}
    
    
}