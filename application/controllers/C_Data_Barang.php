<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Data_Barang extends CI_Controller {

    // Load Model data lewat __construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Data_Barang');
        if(!$this->session->userdata('email')){
            redirect('c_login_user');
        }
    }

    // Load Tampilan awal data barang dari model
    public function index()
    {
        $data['data_barang'] = $this->M_Data_Barang->viewBarang();
        $this->load->view('v_dataBarang', $data);
    }

    // Fungsi menambah data barang lewat form validasi dengan rules required
    public function tambahBarang()
    {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');

        if($this->form_validation->run() == false){  // Jika gagal tampilkan kembali menu data tambah barang
            $this->load->view('v_tambahBarang');
        } else{     // Jika berhasil kembalikan ke menu utama data barang beserta data barang yang baru ditambah
            $this->M_Data_Barang->modeltambahBarang();
            redirect('c_data_barang');
        }
    }

    // Fungsi mengubah data barang yaitu mengambil data lewat id dan dikembalikan datanya agar dapat diubah kembali
    public function ubahDataBarang($id)
    {
        $data['data_barang'] = $this->M_Data_Barang->getBarangById($id);

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');

        if($this->form_validation->run() == false){
            $this->load->view('v_ubahDataBarang', $data);
        } else{
            $this->M_Data_Barang->modelubahDataBarang();
            redirect('c_data_barang');
        }
    }

    // Fungsi menghapus data barang mengambil nilai parameter id
    public function hapusDataBarang($id)
    {
        $this->M_Data_Barang->modelhapusDataBarang($id);
        redirect('c_data_barang');
    }
}