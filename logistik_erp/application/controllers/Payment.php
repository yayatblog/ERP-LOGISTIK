<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_payment');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Payment';
        $data['payment'] = $this->M_payment->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['payment'] = $this->M_payment->cariDataPayment();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('payment/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Payment';

        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('payment_no','Payment_No','required');
        $this->form_validation->set_rules('customer','Customer','required');
        $this->form_validation->set_rules('payment_type','Payment_type','required');
        $this->form_validation->set_rules('payment_type','Payment_type','required');
        $this->form_validation->set_rules('date2','Date2','required');
        $this->form_validation->set_rules('customer2','Customer2','required');
        $this->form_validation->set_rules('invoice_no','invoice_no','required');
        $this->form_validation->set_rules('amount','Amount','required');
        $this->form_validation->set_rules('outstanding','Outsatnding','required');
        $this->form_validation->set_rules('payment','Payment','required');




        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('Payment/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_payment->tambahDataPayment();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('payment');
        }
        
    }
    public function hapus($id){
        $this->M_payment->hapusDataPayment($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('payment');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Payment';
        $data['payment'] = $this->M_payment->getPaymentById($id);
        
        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('payment_no','Payment_No','required');
        $this->form_validation->set_rules('customer','Customer','required');
        $this->form_validation->set_rules('payment_type','Payment_type','required');
        $this->form_validation->set_rules('date2','Date2','required');
        $this->form_validation->set_rules('customer','Customer','required');
        $this->form_validation->set_rules('invoice_no','invoice_no','required');
        $this->form_validation->set_rules('amount','Amount','required');
        $this->form_validation->set_rules('outstanding','Outsatnding','required');
        $this->form_validation->set_rules('payment','Payment','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('payment/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_payment->ubahDataPayment();
            $this->session->set_flashdata('flash','Diubah');
            redirect('payment');
        }
}
    
    
}