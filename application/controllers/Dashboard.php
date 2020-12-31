<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['barang'] = $this->admin->count('barang');
        $data['data_masuk'] = $this->admin->count('data_masuk');
        $data['data_keluar'] = $this->admin->count('data_keluar');
        $data['supplier'] = $this->admin->count('supplier');
        $data['alokasi'] = $this->admin->count('alokasi');
        $data['user'] = $this->admin->count('user');
        $data['stok'] = $this->admin->sum('barang', 'stok');
        $data['barang_min'] = $this->admin->min('barang', 'stok', 10);
        $data['transaksi'] = [
            'data_masuk' => $this->admin->getDataMasuk(5),
            'data_keluar' => $this->admin->getDataKeluar(5)
        ];

        // Line Chart
        $bln = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        $data['cbm'] = [];
        $data['cbk'] = [];

        foreach ($bln as $b) {
            $data['cbm'][] = $this->admin->chartDataMasuk($b);
            $data['cbk'][] = $this->admin->chartDataKeluar($b);
        }

        $this->template->load('templates/dashboard', 'dashboard', $data);
    }
}
