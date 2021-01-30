<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_news extends CI_Model
{
    // private $_table = "tbl_product";

    // public $id;
    // public $product_id;
    // public $nama;
    // public $kode;
    // public $id_role;
    // public $hargajual;
    // public $hargabeli;
    // public $detail;
    public $image = "default.jpg";

    // public function rules()
    // {
    //     return [
    //         ['field'=>'nama',
    //         'label'=>'Nama',
    //         'rules'=>'required'],

    //         ['field'=>'kode',
    //         'label'=>'Kode',
    //         'rules'=>'required'],

    //         ['field'=>'id_role',
    //         'label'=>'Id_role',
    //         'rules'=>'numeric'],

    //         ['field' => 'hargajual',
    //         'label' => 'Hargajual',
    //         'rules'=>'numeric'],

    //         ['field' => 'hargabeli',
    //         'label' => 'Hargabeli',
    //         'rules'=>'numeric'],

    //         ['field' => 'detail',
    //         'label' => 'Detail',
    //         'rules'=>'required'],
    //     ];
    // }
    // public function getAll(){
    //     return $this->db->get($this->_table)->result();
    // }
    public function tampil_data(){
        return $this->db->get('hotnews')->result_array();
    }
    // public function get_by_role(){
    //     $this->db->select('
    //     hotnews.*,tbl_category.id AS id_role,tbl_category.name');
    //     $this->db->join('tbl_category','hotnews.id_role = tbl_category.id');
    //     $this->db->from('hotnews');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
    
    public function tambahDataNews(){
        $data = [
            // "product_id"=>$this->input->post('product_id',true),
            "image"=>$this->image = $this->_uploadImage(),
            "nama"=>$this->input->post('nama',true),
            "manager"=>$this->input->post('manager',true),
            "subject"=>$this->input->post('subject',true),
            "date"=>$this->input->post('date',true),
            // "gudang"=>$this->input->post('gudang',true)
        ];
        $this->db->insert('hotnews',$data);
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = '';
        $config['overwrite']            = true;
        $config['max_size']             = 1024;

        $this->load->library('upload',$config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }
    public function getNewsById($id){
        return $this->db->get_where('hotnews',['id'=>$id])->row_array();
    }
    public function ubahDataNews(){
        $data = [
           // "product_id"=>$this->input->post('product_id',true),
           "image"=>$this->image = $this->_uploadImage(),
           "nama"=>$this->input->post('nama',true),
           "manager"=>$this->input->post('manager',true),
           "subject"=>$this->input->post('subject',true),
           "date"=>$this->input->post('date',true)
           // "gudang"=>$this->input->post('gudang',true)
            // "image"=>$this->image = $this->_uploadImage()
            // "image"=>$this->image = $this->_uploadImage()
        ];
        // if (!empty($_FILES["image"]["name"])) {
        //     $this->image = $this->_uploadImage();
        // }else{
        //     $this->image = $post["old_image"];
        // }
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('hotnews',$data);
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
    public function hapusDataNews($id){
        $this->db->where('id',$id);
        $this->db->delete('hotnews');
    }
    // public function cariDataBarang(){
    //     $keyword = $this->input->post('keyword',true);
    //     $this->db->like('nama',$keyword);
    //     $this->db->or_like('kode',$keyword);
    //     return $this->db->get('hotnews')->result_array();
    //     // $this->db->select('
    //     // hotnews.*,tbl_category.id AS id_role,tbl_category.name');
    //     // return $this->db->get('hotnews')->result_array();

    // }
}