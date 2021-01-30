<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tools extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_tools');
        $this->load->library('form_validation');
    }
    public function module(){
        $topik['judul'] = 'Halaman Menu module';
        $data['module'] = $this->M_tools->tampil_module();
        
        if ($this->input->post('keyword')) {
            $data['module'] = $this->M_tools->cariDatamodule();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('module/index',$data);
        $this->load->view('templates/footer');
    }
    public function user_config(){
        $topik['judul'] = 'Halaman Menu User Config';
        $data['config'] = $this->M_tools->tampil_config();
        
        if ($this->input->post('keyword')) {
            $data['module'] = $this->M_tools->cariDatamodule();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('config/index',$data);
        $this->load->view('templates/footer');
    }
    public function role(){
        $topik['judul'] = 'Halaman Menu Role';
        $data['role'] = $this->M_tools->tampil_role();
        
        if ($this->input->post('keyword')) {
            $data['role'] = $this->M_tools->cariDatamodule();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('config/index',$data);
        $this->load->view('templates/footer');
    }
    public function user_list(){
        $topik['judul'] = 'Halaman Menu User List';
        $data['list'] = $this->M_tools->tampil_list();
        
        if ($this->input->post('keyword')) {
            $data['list'] = $this->M_tools->cariDatamodule();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('list/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah module';

        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('distance','Distance','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('module/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_tools->tambahDatamodule();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('module');
        }
        
    }
    public function hapus($id){
        $this->M_tools->hapusDatamodule($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('module');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data module';
        $data['module'] = $this->M_tools->getmoduleById($id);
        
        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('distance','Distance','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('module/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_tools->ubahDatamodule();
            $this->session->set_flashdata('flash','Diubah');
            redirect('module');
        }
}
    
    
}