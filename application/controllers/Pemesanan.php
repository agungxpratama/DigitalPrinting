<?php

class Pemesanan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_All');
    }

    public function index()
    {
        $data['pesanan'] = $this->M_All->get('tb_invoice')->result();
        $this->load->view('templates/headutama');
        $this->load->view('templates/navbarhome1');
        $this->load->view('order/headpesananuser');
        $this->load->view('order/pesan', $data);
        $this->load->view('order/jspesananuser');
    }

    public function form()
    {
        $this->load->view('templates/headutama');
        $this->load->view('templates/navbarhome1');
        $this->load->view('order/headpesananuser');
        $this->load->view('order/formpemesanan');
        $this->load->view('order/jspesananuser');
    }

    public function simpan_pemesanan()
    {
        $data = array(
            '' => ,
        );
    }
}
