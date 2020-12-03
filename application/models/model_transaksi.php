<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_transaksi extends CI_Model {

		private $_table = 'tbl_transaksi';

		public $id_akunmasuk;
		public $akun;
		public $tgl;
		public $pem;
		public $saldo;
		public $ket;

		public function rules(){
			return [
				['field' 	=> 'akun',
				'label' 	=> 'Akun',
				'rules' 	=> 'required'],

				['field' 	=> 'ket',
				'label' 	=> 'Keterangan',
				'rules' 	=> 'required'],
			];
		}

		public function getAll(){
			return $this->db->get($this->tbl_transaksi)->result();
		}

		public function getByid($id){
			return $this->db->get_where($this->_table, ["id_akunmasuk" => $id])->row();
		}

		public function save(){
			$post = $this->input->post();
			$$this->id_akunmasuk = uniqid();
			$$this->akun = $post["akun"];
			$$this->ket = $post["ketetangan"];
			return $this->db->insert($this->_table, $this);
		}
		
		public function update(){
			$post = $this->input->post();
			$$this->id_akunmasuk = $post["id"];
			$$this->akun = $post["akun"];
			$$this->ket = $post["ketetangan"];
			return $this->db->update($this->_table, $this, array('id_akunmasuk' => $post['id']));
		}

		public function delete(){
			return $this->db->delete($this->_table, array("id_akunmasuk" => $id));
		}

	}

	

?>