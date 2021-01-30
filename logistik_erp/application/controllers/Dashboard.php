<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang');
        $this->load->model('M_kategori');
        $this->load->model('M_gudang');
        $this->load->model('M_karyawan');
        // $this->check_login();
        if ($this->session->userdata('id_role') != 1) {
            redirect('auth/login', 'refresh');
        }
    }
    // publics function index2()
	// {
    //     $topik['judul'] = 'Halaman Dashboard';
	// 	$this->load->view('layouts/header',$topik);
    //     $this->load->view('');
    //     $this->load->view('');
	// }
	public function index()
	{
        // $topik['judul'] = 'Halaman Dashboard';
		    $this->load->view('templates/header');
            $this->load->view('dashboard/index2');
            $this->load->view('templates/footer');
            
            // $this->load->view('');
            // $this->load->view('');
        // $topik['judul'] = 'Halaman Dashboard';
        // $data['invoice'] = $this->M_barang->hitungJumlahInvoice();
        // $data['rent'] = $this->M_kategori->hitungJumlahRent();
        // $data['driver'] = $this->M_karyawan->hitungJumlahDriver();
        // $data['customer'] = $this->M_karyawan->hitungJumlahCustomer();

		// $this->load->view('templates/header',$topik);
        // $this->load->view('dashboard/index',$data);
        // // $this->load->view('dashboard/index');
        // $this->load->view('templates/footer');
    }
   
}
