<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('model_user'); // load model_user
		$this->load->helper('url');
		$this->load->helper('text');
	}

	public function index() {
		$this->load->view('index');
	}

	public function index2() {
		$this->load->view('data_masuk');
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Login';
                $sess_data['user_id']   = $sess->user_id;
                $sess_data['user_nama'] = $sess->user_nama;
				$sess_data['username']  = $sess->username;
				$sess_data['password']  = $sess->password;
				$sess_data['role'] 		= $sess->role;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('role')=='admin') {
                $data['user_nama']  = $this->session->userdata('user_nama');
				$data['username']   = $this->session->userdata('username');
				$data['total_user'] = $this->model_user->jumlah_user();
				$data['total_datamasuk'] = $this->model_user->jumlah_datamasuk();
				$data['total_datakeluar'] = $this->model_user->jumlah_datakeluar();
		        $this->load->view('admin/index', $data);
			}
			elseif ($this->session->userdata('role')=='teknisi') {
                $data['user_nama']  = $this->session->userdata('user_nama');
				$data['username']   = $this->session->userdata('username');
		        $this->load->view('teknisi/index', $data);
            }
            else {
                echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
            }		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
    }
    
    public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		session_destroy();
		redirect('auth');
	}

}

?>