<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rent extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_rent');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Rent';
        $data['rent'] = $this->M_rent->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['rent'] = $this->M_rent->cariDatarent();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('rent/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Rent';

        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('rent_no','Rent_no','required');
        $this->form_validation->set_rules('customer','Customer','required');
        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('group_truck','Group_truck','required');
        $this->form_validation->set_rules('truck','Truck','required');
        $this->form_validation->set_rules('driver','Driver','required');
        $this->form_validation->set_rules('kernet','Kernet','required');
        $this->form_validation->set_rules('insurance','Insurance','required');
        $this->form_validation->set_rules('amount','Amount','required');
        $this->form_validation->set_rules('late_pickup','Late_Pickup','');
        $this->form_validation->set_rules('late_delivered','Late_Delivered','');
        $this->form_validation->set_rules('combine','Combine','');
        $this->form_validation->set_rules('delivered','Delivered','');
        $this->form_validation->set_rules('invoice_no','Invoice_no','required');
        $this->form_validation->set_rules('shipping_no','Shipping_no','required');
        $this->form_validation->set_rules('distance','Distance','required');
        $this->form_validation->set_rules('cost_center','Cost_center','required');
        $this->form_validation->set_rules('type','Type','required');
        $this->form_validation->set_rules('amount_cost','Amount_Cost','required');
        $this->form_validation->set_rules('date_payment','Date_Payment','required');
        $this->form_validation->set_rules('amount_payment','Amount_Payment','required');
        $this->form_validation->set_rules('date_other','Date_Other','required');
        $this->form_validation->set_rules('cost_center2','Cost_Center2','required');
        $this->form_validation->set_rules('memo','Memo','required');
        $this->form_validation->set_rules('amount_other','Amount_Other','required');
        $this->form_validation->set_rules('amount_claim','Amount_Claim','required');
        $this->form_validation->set_rules('amount_accident','Amount_Accident','required');
        $this->form_validation->set_rules('notes','Notes','required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('rent/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_rent->tambahDataRent();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('rent');
        }
        
    }
    public function hapus($id){
        $this->M_rent->hapusDatarent($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('rent');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Rent';
        $data['rent'] = $this->M_rent->getRentById($id);
        
        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('rent_no','Rent_no','required');
        $this->form_validation->set_rules('customer','Customer','required');
        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('group_truck','Group_truck','required');
        $this->form_validation->set_rules('truck','Truck','required');
        $this->form_validation->set_rules('driver','Driver','required');
        $this->form_validation->set_rules('kernet','Kernet','required');
        $this->form_validation->set_rules('insurance','Insurance','required');
        $this->form_validation->set_rules('amount','Amount','required');
        $this->form_validation->set_rules('late_pickup','Late_Pickup','');
        $this->form_validation->set_rules('late_delivered','Late_Delivered','');
        $this->form_validation->set_rules('combine','Combine','');
        $this->form_validation->set_rules('delivered','Delivered','');
        $this->form_validation->set_rules('invoice_no','Invoice_no','required');
        $this->form_validation->set_rules('shipping_no','Shipping_no','required');
        $this->form_validation->set_rules('distance','Distance','required');
        $this->form_validation->set_rules('cost_center','Cost_center','required');
        $this->form_validation->set_rules('type','Type','required');
        $this->form_validation->set_rules('amount_cost','Amount_Cost','required');
        $this->form_validation->set_rules('date_payment','Date_Payment','required');
        $this->form_validation->set_rules('amount_payment','Amount_Payment','required');
        $this->form_validation->set_rules('date_other','Date_Other','required');
        $this->form_validation->set_rules('cost_center2','Cost_Center2','required');
        $this->form_validation->set_rules('memo','Memo','required');
        $this->form_validation->set_rules('amount_other','Amount_Other','required');
        $this->form_validation->set_rules('amount_claim','Amount_Claim','required');
        $this->form_validation->set_rules('amount_accident','Amount_Accident','required');
        $this->form_validation->set_rules('notes','Notes','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('rent/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_rent->ubahDataRent();
            $this->session->set_flashdata('flash','Diubah');
            redirect('rent');
        }
}
    
    
}