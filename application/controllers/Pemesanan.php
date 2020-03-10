<?php

class Pemesanan extends CI_Controller
{

    public function index()
    {

        $this->load->view('templates/headutama');
        $this->load->view('templates/navbarhome1');
        $this->load->view('order/headpesananuser');
        $this->load->view('order/pesan');
        $this->load->view('order/jspesananuser');
    }
}
