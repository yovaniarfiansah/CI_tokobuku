<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nota_model extends CI_Model {

	public function getDataNota($id)
	{
		return $this->db->join('buku','buku.kodebuku=detiltransaksi.kodebuku')
						->join('kategori','kategori.kodekategori=buku.kodekategori')
						->where('kodetransaksi', $id)
						->get('detiltransaksi');
	}
	public function getDataTransaksi($id)
	{
		return $this->db->join('user','user.kodeuser=transaksi.kodeuser')
						->where('kodetransaksi', $id)
						->get('transaksi')->row();
	}

}

/* End of file M_nota.php */
/* Location: ./application/models/M_nota.php */