<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // $this->load->model('M_expense');
        $this->load->model('M_expense');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Expense';
        $data['expense'] = $this->M_expense->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['expense'] = $this->M_expense->cariDataexpense();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('expense/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Expense';

        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('expense_no','Expense_no','required');
        $this->form_validation->set_rules('branch','Branch','required');
        $this->form_validation->set_rules('total','Total','required');
        $this->form_validation->set_rules('memo','Memo','required');
        $this->form_validation->set_rules('maintenance','Maintenance','required');
        $this->form_validation->set_rules('cost_center','Cost_center','required');
        $this->form_validation->set_rules('truck_no','Truck_no','required');
        $this->form_validation->set_rules('qty','Qty','required');
        $this->form_validation->set_rules('amount','Amount','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('expense/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_expense->tambahDataExpense();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('expense');
        }
        
    }
    public function hapus($id){
        
        $this->M_expense->hapusDataExpense($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('expense');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Expense';
        $data['expense'] = $this->M_expense->getExpenseById($id);

        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('expense_no','Expense_no','required');
        $this->form_validation->set_rules('branch','Branch','required');
        $this->form_validation->set_rules('total','Total','required');
        $this->form_validation->set_rules('memo','Memo','required');
        $this->form_validation->set_rules('maintenance','Maintenance','required');
        $this->form_validation->set_rules('cost_center','Cost_center','required');
        $this->form_validation->set_rules('truck_no','Truck_no','required');
        $this->form_validation->set_rules('qty','Qty','required');
        $this->form_validation->set_rules('amount','Amount','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('expense/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_expense->ubahDataexpense();
            $this->session->set_flashdata('flash','Diubah');
            redirect('expense');
        }
}
    
    
}