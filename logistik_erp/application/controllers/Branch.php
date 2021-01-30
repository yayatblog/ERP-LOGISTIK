<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_branch');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Branch';
        $data['branch'] = $this->M_branch->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['branch'] = $this->M_branch->cariDatabranch();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('branch/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Branch';

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('role_id','Role_id','');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('branch/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_branch->tambahDataBranch();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('branch');
        }
        
    }
    public function hapus($id){
        $this->M_branch->hapusDataBranch($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('branch');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Branch';
        $data['branch'] = $this->M_branch->getBranchById($id);
        
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('role_id','Role_id','');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('branch/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_branch->ubahDataBranch();
            $this->session->set_flashdata('flash','Diubah');
            redirect('branch');
        }
}
    
    
}