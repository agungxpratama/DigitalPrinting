<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
		parent::__construct();

		// memuat model yang bertujuan tuntuk mendapatkan data admin
		$this->load->model('M_All');

			// if($this->session->userdata('status') != "login"){
			// 	// redirect(base_url("index.php/"));
			// }
		// if($this->session->userdata('role') != "admin"){
		// 	redirect(base_url("index.php/"));
		// }
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

    public function pemesanan()
    {
        $data['result'] = $this->M_All->get('tb_invoice')->result();
        $this->load->view('admin/header');
        $this->load->view('pemesanan/data_pemesanan', $data);
		// $this->load->view('admin/footer');
    }

    public function data_konsumen()
    {
        $data['result'] = $this->M_All->get('konsumen')->result();
        $this->load->view('admin/header');
        $this->load->view('pemesanan/konsumen', $data);
		// $this->load->view('admin/footer');
    }

    public function status_pemesanan()
    {
        $this->load->view('admin/header');
		$this->load->view('admin/footer');
    }

    public function history_pemesanan()
    {
        $this->load->view('admin/header');
		$this->load->view('admin/footer');
    }


}
