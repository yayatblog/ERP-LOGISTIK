<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Invoice extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_invoice');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu invoice';
        $data['invoice'] = $this->M_invoice->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['invoice'] = $this->M_invoice->cariDatainvoice();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('invoice/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah invoice';

        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('invoice_no','Invoice_no','');
        $this->form_validation->set_rules('customer','Customer','required');
        $this->form_validation->set_rules('tax_no','Tax_no','required');
        $this->form_validation->set_rules('tax_date','Tax_date','required');
        $this->form_validation->set_rules('delivered_date','Delivered_date','required');
        $this->form_validation->set_rules('bank','Bank','required');
        $this->form_validation->set_rules('total','Total','required');
        $this->form_validation->set_rules('insurance','Insurance','required');
        $this->form_validation->set_rules('down_payment','Down_payment','required');
        $this->form_validation->set_rules('ppn','Ppn','required');
        $this->form_validation->set_rules('netto','Netto','required');
        $this->form_validation->set_rules('paid','Paid','required');
        $this->form_validation->set_rules('ppn2','Ppn2','required');
        $this->form_validation->set_rules('insurance2','Insurance2','required');
        $this->form_validation->set_rules('notes','Notes','required');
        $this->form_validation->set_rules('date2','Date2','required');
        $this->form_validation->set_rules('rent_no','Rent_no','required');
        $this->form_validation->set_rules('customer','Customer','required');
        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('group_truck','Group_truck','required');
        $this->form_validation->set_rules('truck','Truck','required');
        $this->form_validation->set_rules('insurance3','Insurance3','required');
        $this->form_validation->set_rules('amount','Amount','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('invoice/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_invoice->tambahDataInvoice();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('invoice');
        }
        
    }
    public function hapus($id){
        $this->M_invoice->hapusDataInvoice($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('invoice');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data invoice';
        $data['invoice'] = $this->M_invoice->getInvoiceById($id);
        
        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('invoice_no','Invoice_no','');
        $this->form_validation->set_rules('customer','Customer','required');
        $this->form_validation->set_rules('tax_no','Tax_no','required');
        $this->form_validation->set_rules('tax_date','Tax_date','required');
        $this->form_validation->set_rules('delivered_date','Delivered_date','required');
        $this->form_validation->set_rules('bank','Bank','required');
        $this->form_validation->set_rules('total','Total','required');
        $this->form_validation->set_rules('insurance','Insurance','required');
        $this->form_validation->set_rules('down_payment','Down_payment','required');
        $this->form_validation->set_rules('ppn','Ppn','required');
        $this->form_validation->set_rules('netto','Netto','required');
        $this->form_validation->set_rules('paid','Paid','required');
        $this->form_validation->set_rules('ppn2','Ppn2','required');
        $this->form_validation->set_rules('insurance2','Insurance2','required');
        $this->form_validation->set_rules('notes','Notes','required');
        $this->form_validation->set_rules('date2','Date2','required');
        $this->form_validation->set_rules('rent_no','Rent_no','required');
        $this->form_validation->set_rules('customer','Customer','required');
        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('group_truck','Group_truck','required');
        $this->form_validation->set_rules('truck','Truck','required');
        $this->form_validation->set_rules('insurance3','Insurance3','required');
        $this->form_validation->set_rules('amount','Amount','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('invoice/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_invoice->ubahDataInvoice();
            $this->session->set_flashdata('flash','Diubah');
            redirect('invoice');
        }
}
public function print(){

    // $data['judul'] = 'Halaman Menu invoice';
    $data['invoice'] = $this->M_invoice->tampil_data();
    $this->load->view('invoice/laporan', $data);

    // $data = array(
    //     "dataku" => array(
    //         "nama" => "Invoice",
    //         "url" => "http://logistik_erp/"
    //     )
    // );

    // $this->load->library('pdf');

    // $this->pdf->setPaper('A4', 'potrait');
    // $this->pdf->filename = "laporan-petanikode.pdf";
    // $this->pdf->load_view('barang/laporan', $data);


}
    
    
}