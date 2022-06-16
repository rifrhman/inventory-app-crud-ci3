<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Data_Barang extends CI_Model {

    // load table dengan private agar hanya dapat di akses di file ini
    private $_table = "data_barang";

    // Fungsi model untuk menampilkan barang yang didapat dari database
    public function viewBarang()
    {
        return $this->db->get($this->_table)->result_array();
    }

    // Fungsi model tambah data barang untuk menambah data ke dalam database
    public function modeltambahBarang()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang', true),
            'jenis_barang' => $this->input->post('jenis_barang', true),
            'stock' => $this->input->post('stock', true),
        );

        $this->db->insert($this->_table, $data);
    }


    // Fungsi getBarangById ini didapat agar dapat mengkategorikan data mana yang akan diambil
    // agar dapat diubah dan dihapus sesuai parameter id nya.
    public function getBarangById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    // Fungsi model ubah data barang untuk mengubah data yang tersimpan di database agar dapat diubah sesuai ketentuan
    public function modelubahDataBarang()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'jenis_barang' => $this->input->post('jenis_barang'),
            'stock' => $this->input->post('stock'),
        );

        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->_table, $data);
    }

    // berikut adalah fungsi delete atau hapus data barang untuk menghapus data di database
    public function modelhapusDataBarang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }

}