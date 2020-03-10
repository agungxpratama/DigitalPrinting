<?php

class Profile extends CI_Controller
{

    public function index()
    {

        $this->load->view('profile/headprofil');
        $this->load->view('profile/profil');
        $this->load->view('profile/jsprofil');
    }
}
