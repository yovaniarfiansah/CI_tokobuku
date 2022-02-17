<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_model extends CI_Model {
  
  public function getDataBukuTrans()
  {
    return $this->db->join('kategori','kategori.kodekategori=buku.kodekategori')
    ->where('stok != 0')
    ->get('buku')->result();
  }
  public function detail($id)
  {
    return $this->db->join('kategori','kategori.kodekategori=buku.kodekategori')
    ->where('kodebuku',$id)
    ->get('buku')
    ->row();
  }
  public function simpanTrans()
  {
    $object = array(
      'kodeuser'=>$this->session->userdata('id'),
      'namapembeli' => $this->input->post('namapembeli') , 
      'total' => $this->cart->total(),
      'tanggalbeli'=>date('Y-m-d') 
    );
    $this->db->insert('transaksi', $object);
    $tm_nota=$this->db->order_by('kodetransaksi','desc')
              ->where('namapembeli',$this->input->post('namapembeli'))
              ->limit(1)
              ->get('transaksi')
              ->row();
    for($i=0;$i<count($this->input->post('kodebuku'));$i++){
      $hasil[]=array(
        'kodetransaksi'=>$tm_nota->kodetransaksi,       
        'jumlah'=>$this->input->post('qty')[$i],
        'kodebuku'=>$this->input->post('kodebuku')[$i],
      );
      $stok = array(
        'stok' => $this->input->post('stok')[$i]-$this->input->post('qty')[$i],
      );
      $this->db->where('kodebuku',$this->input->post('kodebuku')[$i])
           ->update('buku', $stok);
    }   
    $proses=$this->db->insert_batch('detiltransaksi', $hasil);
    if($proses){
      return $tm_nota->kodetransaksi;
    } else {
      return 0;
    }
  }
  public function lastTrans()
  {
    return $this->db->order_by('kodetransaksi','desc')
              ->where('namapembeli',$this->input->post('namapembeli'))
              ->limit(1)
              ->get('transaksi')
              ->row();
  }
}