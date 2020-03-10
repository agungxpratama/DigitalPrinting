<?php

class Caraorder extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/head');
        $this->load->view('templates/navbarhome1');
        $this->load->view('templates/js');
        $this->load->view('templates/headcaradaftar');
        $this->load->view('templates/caradaftarvendor');
        $this->load->view('templates/jscaradaftar');
    }
}
