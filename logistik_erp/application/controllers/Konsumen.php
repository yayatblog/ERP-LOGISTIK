<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Konsumen extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_invoice');
        $this->load->library('form_validation');
    }
    public function kredit_limit_perkonsumen(){
        $topik['judul'] = 'Halaman Menu Kredit Limit Per Konsumen';
        $data['invoice'] = $this->M_invoice->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['invoice'] = $this->M_invoice->cariDatainvoice();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('kendaraan/biaya_borongan',$data);
        $this->load->view('templates/footer');
    }
    public function piutang_dagang(){
        $topik['judul'] = 'Halaman Menu Piutang Dagang';
        $data['invoice'] = $this->M_invoice->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['invoice'] = $this->M_invoice->cariDatainvoice();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('kendaraan/omset_kendaraan_rekap',$data);
        $this->load->view('templates/footer');
    }
    public function rekap(){
        $topik['judul'] = 'Halaman Menu Rekap Omset Per Konsumen';
        $data['invoice'] = $this->M_invoice->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['invoice'] = $this->M_invoice->cariDatainvoice();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('kendaraan/omset_kendaraan_detail',$data);
        $this->load->view('templates/footer');
    }
    public function transfer_list(){
        $topik['judul'] = 'Halaman Menu Transfer List';
        $data['invoice'] = $this->M_invoice->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['invoice'] = $this->M_invoice->cariDatainvoice();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('kendaraan/laba_rugi',$data);
        $this->load->view('templates/footer');
    }
    public function laba_rugi(){
        $topik['judul'] = 'Halaman Menu Laba Rugi';
        $data['invoice'] = $this->M_invoice->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['invoice'] = $this->M_invoice->cariDatainvoice();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('kendaraan/laba_rugi',$data);
        $this->load->view('templates/footer');
    }
}
?>