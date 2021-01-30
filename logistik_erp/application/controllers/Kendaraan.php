<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Kendaraan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_invoice');
        $this->load->library('form_validation');
    }
    public function biaya_borongan(){
        $topik['judul'] = 'Halaman Menu ';
        $data['invoice'] = $this->M_invoice->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['invoice'] = $this->M_invoice->cariDatainvoice();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('kendaraan/biaya_borongan',$data);
        $this->load->view('templates/footer');
    }
    public function omset_perkendaraan_rekap(){
        $topik['judul'] = 'Halaman Menu Rekap Kendaraan';
        $data['invoice'] = $this->M_invoice->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['invoice'] = $this->M_invoice->cariDatainvoice();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('kendaraan/omset_kendaraan_rekap',$data);
        $this->load->view('templates/footer');
    }
    public function omset_perkendaraan_detail(){
        $topik['judul'] = 'Halaman Menu Omset Per Kendaraan';
        $data['invoice'] = $this->M_invoice->tampil_data();
        
        if ($this->input->post('keyword')) {
            $data['invoice'] = $this->M_invoice->cariDatainvoice();
        }
        $this->load->view('templates/header',$topik);
        $this->load->view('kendaraan/omset_kendaraan_detail',$data);
        $this->load->view('templates/footer');
    }
    public function laba_rugi(){
        $topik['judul'] = 'Halaman Menu Omset Per Kendaraan';
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