<?php

class Auth extends CI_Controller
{
    function __construct(){
		parent::__construct();

        $this->load->model('M_All');
	}

    public function index()
    {
        $this->load->view('auth/head');
        $this->load->view('auth/masuk');
        $this->load->view('auth/js');
    }

    public function cekLogin()
    {
        $username = $this->input->post('username');
        // mendapatkan variabel username dari halaman login
		$pass = $this->input->post('pass');
        // mendapatkan variabel password dari halaman login

        $where = array(
			'username' => $username,
			'password' => $pass#md5($pass)
			);
            // ditampung di array

        $cek = $this->M_All->view_where("konsumen",$where)->num_rows();

        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => 'login'
            );

            $this->session->set_userdata($data_session);
            // menerapkan data session sesuai dengan nama username
			redirect(base_url("index.php/home1"));
            // apabila berhasil maka akan langsung ke halaman welcome
		}else{
			echo "Username dan password salah !";
		}
    }

    public function daftar()
    {
        $this->load->view('auth/head');
        $this->load->view('auth/daftar');
        $this->load->view('auth/js');
    }

    public function register()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $nohp = $this->input->post('nohp');
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'no_hp' => $nohp,
            'username' => $username,
            'password' => $pass,
            'id_role' => 2,
        );

        $this->M_All->insert('konsumen', $data);
        redirect('index.php/auth/');
    }
}
