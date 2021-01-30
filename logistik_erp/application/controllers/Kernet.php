<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kernet extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_kernet');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Kernet';
        $data['kernet'] = $this->M_kernet->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['kernet'] = $this->M_kernet->cariDataKernet();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('kernet/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah kernet';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('code','Code','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('phone2','Phone2','required');
        $this->form_validation->set_rules('phone3','Phone3','required');
        $this->form_validation->set_rules('join_date','Join_date','required');
        $this->form_validation->set_rules('address','Address','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('kernet/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_kernet->tambahDatakernet();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('kernet');
        }
        
    }
    public function hapus($id){
        $this->M_kernet->hapusDatakernet($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('kernet');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data kernet';
        $data['kernet'] = $this->M_kernet->getkernetById($id);
        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('code','Code','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('phone2','Phone2','required');
        $this->form_validation->set_rules('phone3','Phone3','required');
        $this->form_validation->set_rules('join_date','Join_date','required');
        $this->form_validation->set_rules('address','Address','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('kernet/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_kernet->ubahDatakernet();
            $this->session->set_flashdata('flash','Diubah');
            redirect('kernet');
        }
    }
    
    
}