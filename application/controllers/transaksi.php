<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('transaksi_model','trans');
  }

  public function index()
  {
      $data['main_view']='transaksi_view';
      $data['tampil_buku']=$this->trans->getDataBukuTrans();
      $this->load->view('template', $data);
  }
  public function addcart($id)
  {
    $detail=$this->trans->detail($id);
    $data = array(
        'id'      => $detail->kodebuku,
        'qty'     => 1,
        'price'   => $detail->harga,
        'name'    => $detail->judulbuku,
        'options' => array('genre'=>$detail->namakategori,'stok'=>$detail->stok)
      );
    $this->cart->insert($data);     
    redirect('transaksi');
  }
  public function hapuscart($id)
  {
    $data = array(
      'rowid' => $id,
      'qty'   => 0
    );
    
    $this->cart->update($data);
    redirect('transaksi');
  }
  public function ubahqty($id)
  {
    $data = array(
      'rowid' => $id,
      'qty'   => $this->input->post('qty')
    );
    
    $this->cart->update($data);
    redirect('transaksi');
  }
  public function checkout()
  { 
    $kembalian = $this->cart->total() - $this->input->post('uang');
    if ($this->input->post('uang')<$this->cart->total()) {
      $this->session->set_flashdata('pesan', 'Uang Kurang');
    }
    else{
      if ($this->trans->simpanTrans()) {
        $lastTrans=$this->trans->lastTrans()->kodetransaksi;
        $this->session->set_flashdata('pesan', 'kembaliannya : '.$kembalian);
        $this->session->set_flashdata('pesan_print', 
          '<a href="nota/cetak/'.$lastTrans.'">Cetak Nota</a>');
        $this->cart->destroy();     
      }
      else{
        $this->session->set_flashdata('pesan', 'error');
      }
    }
    redirect('transaksi');
  }
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */