<?php

class Home extends CI_Controller
{

    public function index()
    {

        $this->load->view('templates/headutama');
        $this->load->view('templates/headerutama');
        $this->load->view('templates/navbar');
        $this->load->view('templates/jsutama');
        $this->load->view('templates/headcaradaftar');
        $this->load->view('templates/caradaftarvendor');
        $this->load->view('templates/jscaradaftar');


        // $this->load->view('order/pesan');
        $this->load->view('templates/footer');
    }
}
