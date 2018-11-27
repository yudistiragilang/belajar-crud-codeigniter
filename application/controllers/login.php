
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{

    function index(){
        $data['judul'] = "Login" ;
        $this->load->view('login',$data);
    }

    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );

        $cek = $this->m_login->cek_login("admin",$where)->num_rows();
        if($cek > 0){

            $data_session = array(
                'nama' => $username,
                'status' => "admin"
            );

            $this->session->sset_userdata($data_session);
            redirect(base_url("beranda"));
        }else{
            echo "Username dan password salah !";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));        
    }

}