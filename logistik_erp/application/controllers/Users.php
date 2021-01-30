<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_users');
        $this->load->library('form_validation');
    }
    public function index(){
        $data['judul'] = 'Halaman Menu Users';
        $data['users'] = $this->M_users->tampil_anggota();
        
        // if ($this->input->post('keyword')) 
        //     $data['loan'] = $this->M_loan->cariDataLoan();
        // }
        $this->load->view('templates/header',$data);
        $this->load->view('users/index',$data);
        $this->load->view('templates/footer');
    }
    public function role(){
        $data['judul'] = 'Halaman Menu Role';
        $data['role'] = $this->M_users->tampil_role();
        
        // if ($this->input->post('keyword')) 
        //     $data['loan'] = $this->M_loan->cariDataLoan();
        // }
        $this->load->view('templates/header',$data);
        $this->load->view('role/index',$data);
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
        $data['user_config'] = $this->M_loan->getLoanById($id);
        
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