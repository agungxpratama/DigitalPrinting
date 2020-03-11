<?php

class Jasa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_pemesanan');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->load->view('vendor/head');
        $this->load->view('templates/navbarhome1');
        $this->load->view('vendor/vendor1');
        $this->load->view('vendor/js');
        $this->load->view('templates/footer');
    }
    public function detail()
    {
        $this->load->view('templates/headutama');
        $this->load->view('templates/headdetailproduk');
        $this->load->view('templates/detailproduk');
        $this->load->view('templates/jsdetailproduk');
    }
    public function formpesan()
    {
        $this->load->view('templates/headutama');
        $this->load->view('templates/navbarhome1');
        $this->load->view('order/headfpemesanan');
        $this->load->view('order/formpemesanan');
        $this->load->view('order/jsfpemesanan');
    }
    public function tambahpesanan()
    {

        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jumlah = $this->input->post('jumlah');
        $bahan = $this->input->post('bahan');

        $data = array(
            'nama'     => $nama,
            'alamat'   => $alamat,
            'jumlah'   => $jumlah,
            'bahan'    => $bahan
        );

        $this->model_pemesanan->tambah_pesanan($data, 'tb_invoice');

        redirect('index.php/pemesanan');
    }
}
