<?php
class M_produk extends CI_Model {
  public function __construct() {
        parent::__construct();
  }

  public function input($data){
    try{
      $this->db->insert('produk', $data);
      return true;
    }catch(Exception $e){
    }
  }


public function data(){
   $this->db->select('*');
   $this->db->from('produk');
   $data = $this->db->get();
   return $data->result();
 }

 public function getid($id){
     $this->db->where('id', $id);
     return $this->db->get('produk')->result();
   }

 public function gambar($id)
   {
     $this->db->where('id', $id);
     return $this->db->get('produk')->row();
   }
 public function ubah($id, $data) {
     try{
       $this->db->where('id',$id)->limit(1)->update('produk', $data);
       return true;
     }catch(Exception $e){}
 }

 public function hapus($id){
   $this->db->where('id', $id);
   $this->db->delete('produk');
 }

}
?>
