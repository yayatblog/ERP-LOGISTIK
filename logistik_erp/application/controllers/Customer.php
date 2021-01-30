<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_customer');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Customer';
        $data['customer'] = $this->M_customer->tampil_customer();
        
        if ($this->input->post('keyword')) {
            $data['customer'] = $this->M_customer->cariDatacustomer();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('customer/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Customer';

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('contact_person','Contact_Person','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('address2','Address2','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('phone2','Phone2','required');
        $this->form_validation->set_rules('phone3','Phone3','required');
        $this->form_validation->set_rules('fax','Fax','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('tax_name','Tax_name','required');
        $this->form_validation->set_rules('npwp','Npwp','required');
        $this->form_validation->set_rules('nppkp','Nppkp','required');
        $this->form_validation->set_rules('tax_address','Tax_Address','required');
        $this->form_validation->set_rules('tax_address2','Tax_Address2','required');
        $this->form_validation->set_rules('max_rittase','Max_rittase','required');
        $this->form_validation->set_rules('max_amount','Max_amount','required');
        $this->form_validation->set_rules('delivered','Delivered','');
        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('group_truck','Group_truck','required');
        $this->form_validation->set_rules('amount','Amount','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('customer/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_customer->tambahDataCustomer();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('customer');
        }
        
    }
    public function hapus($id){
        $this->M_customer->hapusDatacustomer($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('customer');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Customer';
        $data['customer'] = $this->M_customer->getCustomerById($id);
        
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('contact_person','Contact_Person','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('address2','Address2','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('phone2','Phone2','required');
        $this->form_validation->set_rules('phone3','Phone3','required');
        $this->form_validation->set_rules('fax','Fax','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('tax_name','Tax_name','required');
        $this->form_validation->set_rules('npwp','Npwp','required');
        $this->form_validation->set_rules('nppkp','Nppkp','required');
        $this->form_validation->set_rules('tax_address','Tax_Address','required');
        $this->form_validation->set_rules('tax_address2','Tax_Address2','required');
        $this->form_validation->set_rules('max_rittase','Max_rittase','required');
        $this->form_validation->set_rules('max_amount','Max_amount','required');
        $this->form_validation->set_rules('delivered','Delivered','');
        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('group_truck','Group_truck','required');
        $this->form_validation->set_rules('amount','Amount','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('customer/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_customer->ubahDataCustomer();
            $this->session->set_flashdata('flash','Diubah');
            redirect('customer');
        }
}
    
    
}