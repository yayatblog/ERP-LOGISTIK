<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_route');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Route';
        $data['route'] = $this->M_route->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['route'] = $this->M_route->cariDataRoute();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('route/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Route';
        $data2['grouptruck'] = $this->M_route->tampil_data2();

        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('distance','Distance','required');
        $this->form_validation->set_rules('group_truck','Group_truck','required');
        $this->form_validation->set_rules('amount','Amount','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('route/tambah',$data2);
            $this->load->view('templates/footer');
        }else {
            $this->M_route->tambahDataRoute();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('route');
        }
        
    }
    public function hapus($id){
        $this->M_route->hapusDataRoute($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('route');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Route';
        $data['route'] = $this->M_route->getRouteById($id);
        $data['grouptruck'] = $this->M_route->getRouteById2($id);
        $data['grouptruck'] = $this->M_route->tampil_data2();

        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('distance','Distance','required');
        $this->form_validation->set_rules('group_truck','Group_truck','required');
        $this->form_validation->set_rules('amount','Amount','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('route/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_route->ubahDataRoute();
            $this->session->set_flashdata('flash','Diubah');
            redirect('route');
        }
}
    
    
}