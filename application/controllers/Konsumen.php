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
        $where = array('idbarang' => $id, );
        $data['result'] = $this->M_All->view_where('barang', $where)->row();
        $this->load->view('admin/header');
        $this->load->view('konsumen/view', $data);
        $this->load->view('admin/footer');
    }

    public function simpan_pesanan()
    {
        $harga = $this->input->post('harga');
        $idbarang = $this->input->post('id_barang');
        $tglpesan = $this->input->post('tgl_pesan');
        $tglbayar = $this->input->post('tgl_bayar');
        $jumlahbarang = $this->input->post('jumlahbarang');

        $cari_data = array(
            'username' => $this->session->userdata('nama'), );
        $dataKonsumen = $this->M_All->view_where('user', $cari_data)->row();
        $cari_data2 = array(
            'iduser' => $dataKonsumen->iduser, );
        $dataKon = $this->M_All->view_where('konsumen', $cari_data2)->row();
        $data = array(
            'idbarang' => $idbarang,
            'tglpesan' => $tglpesan,
            'tglbayar' => $tglbayar,
            'jumlahbarang' => $jumlahbarang,
            'jumlahbayar' => $harga.$jumlahbarang,
            'idkonsumen' => $dataKon->idkon,

        );

        $this->M_All->insert('invoice', $data);
        redirect('index.php/konsumen/');
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
        $data['result'] = $this->M_All->get('invoice')->result();
        $this->load->view('admin/header');
        $this->load->view('konsumen/pesanan', $data);
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

    function Logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/auth'));
    }
}
