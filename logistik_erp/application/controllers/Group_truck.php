<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group_truck extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_grouptruck');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Group Truck';
        $data['group'] = $this->M_grouptruck->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['group'] = $this->M_grouptruck->cariDatagroup();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('grouptruck/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Group Truck';

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('level','Level','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('grouptruck/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_grouptruck->tambahDataGroup();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('group_truck');
        }
        
    }
    public function hapus($id){
        $this->M_grouptruck->hapusDataGroup($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('group_truck');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Group Truck';
        $data['group'] = $this->M_grouptruck->getGrouptruckById($id);
        
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('level','Level','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('grouptruck/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_grouptruck->ubahDataGrouptruck();
            $this->session->set_flashdata('flash','Diubah');
            redirect('group_truck');
        }
}
    
    
}