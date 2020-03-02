<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//digunakan untuk meng-extends controller baru
//"Belajar" merupakan nama class dan harus diawali huruf kapital
class Belajar extends CI_Controller {
    
    
	function __construct(){
        parent::__construct();
        //$this->load->helper('html');
			//untuk menampilkan data dari tabel
		$this->load->model('m_data');
	}
//fungsi untuk menampilkan view user atau data dari tabel
	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);
	}

}
    //memanggil view_belajar2
    public function index(){		
		$this->load->view('view_belajar2');
	}
//ini adalah method index
	public function index(){
		echo "ini method index pada controller belajar";
	}
//ini adalah method halo
	public function halo(){
		echo "ini method halo pada controller belajar";
    }
//ini adalah method yang akan menampilkan view_belajar.php 
    public function hai(){
		$this->load->view('view_belajar');
    }
    public function index(){		
		$this->load->view('view_belajar');
    }
    
    
}
