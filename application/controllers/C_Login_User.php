<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login_User extends CI_Controller {

    // Load Model data lewat __construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login_User');
    }

    // Load Tampilan awal Login 
    public function index()
    {
        $this->load->view('v_login_user');
    }

    // Fungsi cek login user adakah di database ? Jika ada simpan dalam session dan kembalikan ke data barang
    public function loginUser()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $cek_login = $this->M_Login_User->cekUser($email, $password);
        if($cek_login->num_rows() == 1){
            foreach($cek_login->result() as $data){
                $sess_data['id'] = $data->id;
                $sess_data['email'] = $data->email;
                $this->session->set_userdata($sess_data);
            }
            redirect('c_data_barang');
        } else{
            $this->session->set_flashdata('msg', 'Maaf Email atau Password Salah.');
            redirect('c_login_user');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('c_login_user');
    }

}