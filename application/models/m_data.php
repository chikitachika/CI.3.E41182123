<?php 

class M_data extends CI_Model{

    //fungsi ambil_data untuk memanggil tabel 'user' dari database ci
	function ambil_data(){
		return $this->db->get('user');
	}
}