<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Truck extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_truck');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Truck';
        $data['truck'] = $this->M_truck->tampil_truck();
        
        if ($this->input->post('keyword')) {
            $data['truck'] = $this->M_truck->cariDatacost();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('truck/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Truck';
        $data2['group_truck'] = $this->M_truck->tampil_grouptruck();
        $data2['driver'] = $this->M_truck->tampil_driver();
        $data2['kernet'] = $this->M_truck->tampil_kernet();

        $this->form_validation->set_rules('truck_no','Truck_no','required');
        $this->form_validation->set_rules('group_truck','Group_truck','required');
        $this->form_validation->set_rules('driver','Driver','required');
        $this->form_validation->set_rules('kernet','Kernet','required');
        $this->form_validation->set_rules('initial','Initial','required');
        $this->form_validation->set_rules('distance','Distance','required');
        $this->form_validation->set_rules('kir','Kir','required');
        $this->form_validation->set_rules('stnk','Stnk','required');
        $this->form_validation->set_rules('target','Target','required');
        $this->form_validation->set_rules('year','Year','required');
        $this->form_validation->set_rules('memo','Memo','required');
        $this->form_validation->set_rules('maintenance','Maintenance','required');
        $this->form_validation->set_rules('maximum','Maximum','required');
        $this->form_validation->set_rules('current','Current','required');
        $this->form_validation->set_rules('last','Last','required');
        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('memo2','Memo2','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('truck/tambah',$data2);
            $this->load->view('templates/footer');
        }else {
            $this->M_truck->tambahDatatruck();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('truck');
        }
        
    }
    public function hapus($id){
        $this->M_truck->hapusDataTruck($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('truck');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data truck';
        $data['truck'] = $this->M_truck->getTruckById($id);
        $data['group_truck'] = $this->M_truck->tampil_grouptruck();
        $data['driver'] = $this->M_truck->tampil_driver();
        $data['kernet'] = $this->M_truck->tampil_kernet();
        
        $this->form_validation->set_rules('truck_no','Truck_no','required');
        $this->form_validation->set_rules('group_truck','Group_truck','required');
        $this->form_validation->set_rules('driver','Driver','required');
        $this->form_validation->set_rules('kernet','Kernet','required');
        $this->form_validation->set_rules('initial','Initial','required');
        $this->form_validation->set_rules('distance','Distance','required');
        $this->form_validation->set_rules('kir','Kir','required');
        $this->form_validation->set_rules('stnk','Stnk','required');
        $this->form_validation->set_rules('target','Target','required');
        $this->form_validation->set_rules('year','Year','required');
        $this->form_validation->set_rules('memo','Memo','required');
        $this->form_validation->set_rules('maintenance','Maintenance','required');
        $this->form_validation->set_rules('maximum','Maximum','required');
        $this->form_validation->set_rules('current','Current','required');
        $this->form_validation->set_rules('last','Last','required');
        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('memo2','Memo2','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('truck/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_truck->ubahDataTruck();
            $this->session->set_flashdata('flash','Diubah');
            redirect('truck');
        }
}
    
    
}