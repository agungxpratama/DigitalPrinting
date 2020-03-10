<?php

class model_pemesanan extends CI_Model
{
    public function tambah_pesanan($data)
    {
        $query = $this->db->insert('tb_invoice', $data);
        return $query;
    }
}
