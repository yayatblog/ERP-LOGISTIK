<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Orders extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_barang');
        $this->load->library('form_validation');
        $this->load->library('dompdf_gen');

    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Produk';
        $data['produk'] = $this->m_barang->get_by_role();
        // if ($this->input->post('keyword')) {
        //     $data['produk'] = $this->m_barang->cariDataBarang();
        // }
        // $data['produk'] = $this->m_barang->tampil_data();
        // if ($this->input->post('keyword')) {
        //     $data['produk'] = $this->m_barang->cariDataBarang();
        // }
        $this->load->view('templates/header',$topik);
        $this->load->view('barang/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        
        $data['judul'] = 'Form Tambah Data';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('id_role','Id_Role','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('gudang','Gudang','required');
        $this->form_validation->set_rules('qty','Qty','required');
        $this->form_validation->set_rules('unitbagus','Unitbagus','required');
        $this->form_validation->set_rules('unitrusak','Unitrusak','required');
        $this->form_validation->set_rules('hpp','Hpp','required');
        $this->form_validation->set_rules('sebelumpajak','Sebelumpajak','required');
        $this->form_validation->set_rules('ppn','Ppn','required');
        $this->form_validation->set_rules('setelahpajak','Setelahpajak','required');
        $this->form_validation->set_rules('hargasetoran','Hargasetoran','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');


        // $this->form_validation->set_rules('image','Image','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('barang/tambah');
        }else {
            $this->m_barang->tambahDataProduct();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('barang');
        }
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Product';
        $data['produk'] = $this->m_barang->getProdukById($id);

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('id_role','Id_Role','required');
        $this->form_validation->set_rules('manager','Manager','required');
        $this->form_validation->set_rules('gudang','Gudang','required');
        $this->form_validation->set_rules('qty','Qty','required');
        $this->form_validation->set_rules('unitbagus','Unitbagus','required');
        $this->form_validation->set_rules('unitrusak','Unitrusak','required');
        $this->form_validation->set_rules('hpp','Hpp','required');
        $this->form_validation->set_rules('sebelumpajak','Sebelumpajak','required');
        $this->form_validation->set_rules('ppn','Ppn','required');
        $this->form_validation->set_rules('setelahpajak','Setelahpajak','required');
        $this->form_validation->set_rules('hargasetoran','Hargasetoran','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('barang/edit_form',$data);
        }else {
            $this->m_barang->ubahDataProduct();
            $this->session->set_flashdata('flash','Diubah');
            redirect('barang');
        }

    }
    public function hapus($id){
        $this->m_barang->hapusDataProduk($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('barang');
    }
    // public function print(){
    //     $data['produk'] = $this->m_mahasiswa->tampil_data('mahasiswa')->result();
    //     $this->load->view('print_mahasiswa',$data);
    // }
    // public function export_excel(){
    //     $data['produk'] = $this->m_barang->get_by_role();
    //     $this->load->view('barang/laporan_excel',$data);
    //     }
    //     public function export_excel(){
    //     // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
    //     header("Content-type: application/vnd-ms-excel");
    //     header("Content-Disposition: attachment; filename=Data_Barang.xls");
        
    //     // $data['produk'] = $this->SiswaModel->view();
    //     $data['produk'] = $this->m_barang->get_by_role();
    //     $this->load->view('barang/laporan_excel', $data);
    //   }
    public function excel()
    {
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getProperties()->setCreator('Gun Gun Priatna - re:code lab')
            ->setLastModifiedBy('Gun Gun Priatna - re:code lab')
            ->setTitle('Tes Export Excel')
            ->setSubject('Tes Export Excel')
            ->setDescription('Tes Export Excel')
            ->setKeywords(' Tes Export Excel')
            ->setCategory('Test export excel');

    //Add data
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama')
            ->setCellValue('B1', 'Kode')
            ->setCellValue('C1', 'Id_role')
            ->setCellValue('D1', 'Manager')
            ->setCellValue('E1', 'Gudang');
            // ->setCellValue('F1', 'Alamat');

        $i = 2;

        // $mahasiswa = $this->model_mahasiswa->getAll();
        $produk = $this->m_barang->get_by_role();

        foreach ($produk as $erp) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $i, $erp['nama'])
                ->setCellValue('B' . $i, $erp['kode'])
                ->setCellValue('C' . $i, $erp['id_role'])
                ->setCellValue('D' . $i, $erp['manager'])
                ->setCellValue('E' . $i, $erp['gudang']);
                // ->setCellValue('G' . $i, $erp->alamat);
            $i++;
        }

        $spreadsheet->getActiveSheet()->setTitle('Report Excel' . date('Y-m-d'));
        $spreadsheet->setActiveSheetIndex(0);

      
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Report Excel.xlsx"');
        header('Cache-Control: max-age=0');

        header('Cache-Control: max-age=1');


        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;

    }
   
       
    public function laporan_pdf(){

        // $data = array(
        //     "dataku" => array(
        //         "nama" => "Petani Kode",
        //         "url" => "http://petanikode.com"
        //     )
        // );
    
        // $this->load->library('pdf');
    
        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan-petanikode.pdf";
        // $this->pdf->load_view('laporan_pdf', $data);
        $data['produk'] = $this->m_barang->get_by_role();

        $this->load->library('pdf');
    
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('barang/laporan_pdf', $data);
    
    
    }

}