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

        $cek = $this->M_All->view_where("user",$where)->num_rows();

        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => 'login'
            );

            $this->session->set_userdata($data_session);
            // menerapkan data session sesuai dengan nama username
			redirect(base_url("index.php/konsumen"));
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
        $config['upload_path']          = './assets_admin/img/';
		$config['overwrite']        = true;
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 1024;
		// $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar')){
            $error = array('error' => $this->upload->display_errors());
            // $this->load->view('upload_form', $error);
            echo print_r($error);
			echo "<script> alert('Foto Konsumen Gagal diunggah');</script>";
        }else{
            $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $nohp = $this->input->post('nohp');
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            $gambar = $this->upload->data('file_name');


            $data2 = array(
                'username' => $username,
                'password' => $pass,
                'email' => $email,
            );
			if ($this->M_All->insert('user', $data2) != true) {
                $where = array(
                    'username' => $username, );
                $username = $this->M_All->view_where('user', $where)->row();
                $data = array(
                    // 'nama' => $nama,
                    'alamat' => $alamat,
                    'noHp' => $nohp,
                    'idrole' => 2,
                    'gambar' => $gambar,
                    'iduser' => $username->iduser
                );
                if ($this->M_All->insert('konsumen', $data) != true) {

                    redirect('index.php/auth');
                }
				// echo "<script> alert('Data KOnsumen berhasil ditambah');</script>";
			}else{
				redirect('index.php/auth/register');
				echo "<script> alert('Data konsumen gagal ditambah');</script>";
			}
        }

    }
}
