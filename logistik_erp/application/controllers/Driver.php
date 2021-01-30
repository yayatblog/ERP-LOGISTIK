<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_driver');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Driver';
        $data['driver'] = $this->M_driver->tampil_driver();
        
        if ($this->input->post('keyword')) {
            $data['driver'] = $this->M_driver->cariDataDriver();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('driver/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah driver';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('code','Code','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('phone2','Phone2','required');
        $this->form_validation->set_rules('phone3','Phone3','required');
        $this->form_validation->set_rules('join_date','Join_date','required');
        $this->form_validation->set_rules('address','Address','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('driver/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_driver->tambahDataDriver();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('driver');
        }
        
    }
    public function hapus($id){
        $this->M_driver->hapusDataDriver($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('driver');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Driver';
        $data['driver'] = $this->M_driver->getDriverById($id);
        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('code','Code','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('phone2','Phone2','required');
        $this->form_validation->set_rules('phone3','Phone3','required');
        $this->form_validation->set_rules('join_date','Join_date','required');
        $this->form_validation->set_rules('address','Address','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('driver/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_driver->ubahDataDriver();
            $this->session->set_flashdata('flash','Diubah');
            redirect('driver');
        }
}
    
    
}