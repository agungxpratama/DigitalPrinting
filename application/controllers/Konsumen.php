<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {

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

	public function index()
	{
        $data['result'] = $this->M_All->get('barang')->result();
        $this->load->view('admin/header');
        $this->load->view('konsumen/dashboard', $data);
        $this->load->view('admin/footer');

	}

    public function pesan($id)
    {
        $this->load->view('admin/header');

        $this->load->view('admin/footer');
    }

    public function data_profil()
    {
        $data['result'] = $this->M_All->join('konsumen', 'user')->row();
        $this->load->view('admin/header');
        // $this->load->view('profile/headprofil');
        $this->load->view('profile/profil', $data);
        // $this->load->view('profile/jsprofil');
        $this->load->view('admin/footer');
    }

    public function pemesanan()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/footer');
    }

    public function status_pemesanan()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/footer');
    }

    public function histori_pemesansn()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/footer');// code...
    }

    public function vendor()
    {
        $data['result'] = $this->M_All->get('vendor')->result();
        $this->load->view('admin/header');
        $this->load->view('konsumen/vendor', $data);
        $this->load->view('admin/footer');
    }
}
