<?php

class Home1 extends CI_Controller
{

    public function index()
    {

        $this->load->view('templates/headutama');
        $this->load->view('templates/headerhome');
        $this->load->view('templates/navbarhome1');
        $this->load->view('templates/jsutama');
    }
}
