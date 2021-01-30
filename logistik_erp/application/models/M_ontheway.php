<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_ontheway extends CI_Model
{

    // public function get_by_role(){
    //     $this->db->select('
    //     produk.*,tbl_category.id AS id_role,tbl_category.name');
    //     $this->db->join('tbl_category','produk.id_role = tbl_category.id');
    //     $this->db->from('produk');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
    public function tampil_data(){
        return $this->db->get('ontheway')->result_array();
    }
    
    public function tambahDataJurnal(){
        $data = [
            // "product_id"=>$this->input->post('product_id',true),
            "tgl"=>$this->input->post('tgl',true),
            "transaksi"=>$this->input->post('transaksi',true),
            "no_bukti"=>$this->input->post('no_bukti',true),
            "jumlah"=>$this->input->post('jumlah',true),
            "kode_debit"=>$this->input->post('kode_debit',true),
            "kode_kredit"=>$this->input->post('kode_kredit',true),
            "nama_akundebit"=>$this->input->post('nama_akundebit',true),
            "didebit"=>$this->input->post('didebit',true),
            "nama_akunkredit"=>$this->input->post('nama_akunkredit',true),
            "dikredit"=>$this->input->post('dikredit',true)
          
            // "image"=>$this->image = $this->_uploadImage()
        ];
        $this->db->insert('jurnalumum',$data);
    }
    
    public function getJurnalById($id){
        return $this->db->get_where('jurnalumum',['id'=>$id])->row_array();
    }
    public function ubahDataJurnal(){
        $data = [
            "tgl"=>$this->input->post('tgl',true),
            "transaksi"=>$this->input->post('transaksi',true),
            "no_bukti"=>$this->input->post('no_bukti',true),
            "jumlah"=>$this->input->post('jumlah',true),
            "kode_debit"=>$this->input->post('kode_debit',true),
            "kode_kredit"=>$this->input->post('kode_kredit',true),
            "nama_akundebit"=>$this->input->post('nama_akundebit',true),
            "didebit"=>$this->input->post('didebit',true),
            "nama_akunkredit"=>$this->input->post('nama_akunkredit',true),
            "dikredit"=>$this->input->post('dikredit',true)
        ];
        // if (!empty($_FILES["image"]["name"])) {
        //     $this->image = $this->_uploadImage();
        // }else{
        //     $this->image = $post["old_image"];
        // }
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('jurnalumum',$data);
        // $post = $this->input->post();
        // $this->product_id = $post["product_id"];
        // $this->name = $post["name"];
        // $this->kode = $post["kode"];
        // $this->id_role = $post["id_role"];
        // $this->hargajual = $post["hargajual"];
        // $this->hargabeli = $post["hargabeli"];
        // $this->detail = $post["detail"];
        
        
        // $this->db->update($this->_table,$this,array('id' =>$post['id']));
    }
    public function hapusDataJurnal($id){
        $this->db->where('id',$id);
        $this->db->delete('jurnalumum');
    }
    // public function cariDataBarang(){
    //     $keyword = $this->input->post('keyword',true);
    //     $this->db->like('nama',$keyword);
    //     $this->db->or_like('kode',$keyword);
    //     return $this->db->get('jurnalumum')->result_array();
    //     // $this->db->select('
    //     // produk.*,tbl_category.id AS id_role,tbl_category.name');
    //     // return $this->db->get('produk')->result_array();

    // }
}