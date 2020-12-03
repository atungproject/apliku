<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller{

    public function _Construct(){
        parent::_Construct();
        $this->load->model('model_transaksi'); // load model_transaksi
        $this->load->helper('url','text');
        $this->load->library('form_validition');
    }

    public function index(){
        $data["tbl_datamasuk"] = $this->model_transaksi->getAll();
        $this->load->view("data_masuk", $data);
    }

    // public function index2() {
	// 	$this->load->view('admin/data_users');
	// }

    public function add(){
        $tbl_datamasuk = $this->model_transaksi;
        $validation = $this->form_validation;
        $validation->set_rules($tbl_datamasuk->rules());

        if ($validation->run()){
            $tbl_datamasuk->save;
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
        }
        $this->load->view('data_masuk');
    }

    //Data Transaksi

	public function datamasuk(){
		$data['tbl_datamasuk']=$this->model_transaksi->show_datamasuk()->result();
		$this->load->view('data_masuk',$data);
	}

	public function datakeluar(){
		$dkeluar['data']=$this->model_transaksi->show_datakeluar();
		$this->load->view('data_keluar',$dkeluar);
    }
}