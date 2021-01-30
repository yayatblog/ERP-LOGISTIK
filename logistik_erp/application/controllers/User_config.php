<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_config extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_user_config');
        $this->load->library('form_validation');
    }
    public function index(){
        $data['judul'] = 'Halaman Menu User Config';
        $data['user_config'] = $this->M_user_config->tampil_data();
        
        // if ($this->input->post('keyword')) 
        //     $data['loan'] = $this->M_loan->cariDataLoan();
        // }
        $this->load->view('templates/header',$data);
        $this->load->view('user_config/index',$data);
        $this->load->view('templates/footer');
    }
    public function profile(){
        $data['judul'] = 'Halaman Menu User';
        // $data['user_config'] = $this->M_user_config->tampil_data();
        
        // if ($this->input->post('keyword')) 
        //     $data['loan'] = $this->M_loan->cariDataLoan();
        // }
        $this->load->view('templates/header',$data);
        $this->load->view('user_config/profil');
        $this->load->view('templates/footer');
    }
    public function holiday(){
        $data['judul'] = 'Halaman Hari Cuti Saya';
        // $data['user_config'] = $this->M_user_config->tampil_data();
        
        // if ($this->input->post('keyword')) 
        //     $data['loan'] = $this->M_loan->cariDataLoan();
        // }
        $this->load->view('templates/header',$data);
        $this->load->view('user_config/holiday');
        $this->load->view('templates/footer');
    }
    public function backup(){
        $topik['judul'] = 'Halaman Back Up Data'; 
        $this->load->view('templates/header',$topik);
        $this->load->view('user_config/backup');
        $this->load->view('templates/footer');
    }
    public function role_permission(){
        $topik['judul'] = 'Halaman Role Permission';
        $this->load->view('templates/header',$topik);
        $this->load->view('user_config/role_permission');
        $this->load->view('templates/footer');

    }
    public function backupdb(){
        // Load class utilities from database; 
        $this->load->dbutil();
        // Aturan file ketika file terdownload
        $config = array(
        			'format'	=> 'zip',
        			'filename' => 'erpekspedisi.sql'
        		);
        $backup =& $this->dbutil->backup($config);

        // Nama database sudah ada tanggal downloadnya4
        // $nama_database = 'backup-on-' . date("Y-m-d-H-i-s") . '.zip';
        // $simpan = '/backup'.$nama_database;
        $save = FCPATH.'data/backup-'.date("ymdHis").'-db.zip';

        write_file($save,$backup);
        

        // $this->load->helper('file');
        // write_file($simpan,$backup);

        $this->load->helper('download');
		force_download($save,$backup);        
		// force_download($nama_database,$backup);        
    }
    public function role(){
        $data['judul'] = 'Halaman Menu Role';
        $data['role'] = $this->M_user_config->tampil_role();
        
        // if ($this->input->post('keyword')) 
        //     $data['loan'] = $this->M_loan->cariDataLoan();
        // }
        $this->load->view('templates/header',$data);
        $this->load->view('role/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Loan';

        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('distance','Distance','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('loan/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->M_loan->tambahDataLoan();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('loan');
        }
        
    }
    public function hapus($id){
        $this->M_loan->hapusDataloan($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('loan');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Loan';
        $data['user_config'] = $this->M_loan->getLoanById($id);
        
        $this->form_validation->set_rules('departure','Departure','required');
        $this->form_validation->set_rules('arrival','Arrival','required');
        $this->form_validation->set_rules('distance','Distance','required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('loan/edit',$data);
            $this->load->view('templates/footer');

        }else {
            $this->M_loan->ubahDataLoan();
            $this->session->set_flashdata('flash','Diubah');
            redirect('loan');
        }
}
    
    
}