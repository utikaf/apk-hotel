<?php
    class Transaksi extends CI_Controller{
        public function index(){
            $add =
            [
                'nama_tamu'          => $this->input->post('nama_tamu'),
                'tanggal_cek_in'     => $this->input->post('tanggal_cek_in'),
                'tanggal_cek_out'    => $this->input->post('tanggal_cek_out'),
                'id_jenis'          => $this->input->post('id_jenis'),
            ];
            $this->db->insert('tbl_transaksi', $add);
            redirect('Pesan/detail_booking');
        }
    }