<?php

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('auth/head');
        $this->load->view('auth/masuk');
        $this->load->view('auth/js');
    }
    public function daftar()
    {
        $this->load->view('auth/head');
        $this->load->view('auth/daftar');
        $this->load->view('auth/js');
    }
}
