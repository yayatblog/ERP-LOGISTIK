<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cities extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_cities');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Cities';
        $data['cities'] = $this->M_cities->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['cities'] = $this->M_cities->cariDataCities();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('cities/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah City';

        $this->form_validation->set_rules('city','City','required');
        $this->form_validation->set_rules('role_id','role_id','');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('cities/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_cities->tambahDataCity();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('cities');
        }
        
    }
    public function hapus($id){
        $this->M_cities->hapusDataCity($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('cities');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data City';
        $data['city'] = $this->M_cities->getCityById($id);
        
        $this->form_validation->set_rules('city','City','required');
        $this->form_validation->set_rules('role_id','role_id','');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('cities/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_cities->ubahDataCity();
            $this->session->set_flashdata('flash','Diubah');
            redirect('cities');
        }
}
    
    
}