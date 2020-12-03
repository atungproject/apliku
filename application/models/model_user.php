<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function cek_user($data) {
			return $this->db->get_where('tbl_users', $data);
		}
		
		public function jumlah_user(){   
			$query = $this->db->get('tbl_users');
			if($query->num_rows()>0)
			{
			  return $query->num_rows();
			}
			else
			{
			  return 0;
			}
		}

		public function jumlah_datamasuk(){   
			$query = $this->db->get('tbl_datamasuk');
			if($query->num_rows()>0)
			{
			  return $query->num_rows();
			}
			else
			{
			  return 0;
			}
		}

		public function jumlah_datakeluar(){   
			$query = $this->db->get('tbl_datakeluar');
			if($query->num_rows()>0)
			{
			  return $query->num_rows();
			}
			else
			{
			  return 0;
			}
		}

	}

	

?>