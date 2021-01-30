<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_bank');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Bank';
        $data['bank'] = $this->M_bank->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['bank'] = $this->M_bank->cariDatabank();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('bank/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Bank';

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('atas_nama','Atas_nama','required');
        $this->form_validation->set_rules('no_rekening','No_rekening','required');
        // $this->form_validation->set_rules('role_id','Role_id','');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('bank/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_bank->tambahDataBank();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('Bank');
        }
        
    }
    public function hapus($id){
        $this->M_bank->hapusDataBank($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('bank');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Bank';
        $data['bank'] = $this->M_bank->getBankById($id);
        
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('atas_nama','Atas_nama','required');
        $this->form_validation->set_rules('no_rekening','No_rekening','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('bank/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_bank->ubahDataBank();
            $this->session->set_flashdata('flash','Diubah');
            redirect('bank');
        }
}
    
    
}