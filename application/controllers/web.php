
<?php
 defined('BASEPATH') OR exit('no direct script acces allowed');

class Web extends CI_Controller{

    function __construct(){
        parent::__construct();
       // $this->load->helper('url'); // load helper url .. sejauh ini belum tau kenapa dipanggil :D
        $this->load->model('m_data'); // load model --> untuk load atau menghubungkan dengan database
        $this->load->helper('url');
    }

    function index(){
        $data['judul'] = "Halaman depan aplikasi";
        $this->load->view('header',$data);
        $this->load->view('beranda',$data);
        $this->load->view('footer',$data);
    }

    function store(){

        $data['judul'] = "Data User";
        $datas['user'] = $this->m_data->ambil_data()->result();
        $this->load->view('header',$data);
        $this->load->view('store',$datas);
        $this->load->view('footer',$data);
    }

    function input(){
        $data['judul'] = "Input Data";
        $this->load->view('header',$data);
        $this->load->view('input',$data);
        $this->load->view('footer',$data);
    }

    function aksi_input(){
        $nama = $this->input->post('nama'); // $variabel = $this->load->input->methodpost('Name dalam form');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );

        $this->m_data->nambah_data($data,'user'); // nambah_data adalah method pada model ($data adalah array data,'USER adalah table tujuan')
        redirect ('web/store');
    }

    function hapus($id){
        $where = array('id' => $id); //array('field di database' => variabelpada link/anchor $id untuk menamgkap data dari link)
        $this->m_data->hapus_data($where,'user'); //($where,'tabel target')
        redirect('web/store');
    }

    function edit($id){

        $datas['judul'] = "Belajar Update Data";
        $where = array('id' => $id); // menggenerate id data menjadi array untuk mengambil id mana yang akan di update;
        $data['user'] = $this->m_data->edit_data($where,'user')->result(); // fungsi result digunakan untuk menggenerate hasil query menjadi array

        $this->load->view('header',$datas);
        $this->load->view('edit',$data);
        $this->load->view('footer',$data);

    }

    // function update(){
    //     $id = $this->input->post('id');
    //     $nama = $this->input->post('nama');
    //     $alamat = $this->input->post('alamat');
    //     $pekerjaan = $this->input->post('pekerjaan');

    //     $data = array(
    //         'nama' => $nama,
    //         'alamat' => $alamat,
    //         'pekerjaan' => $pekerjaan
    //     );

    //     $where = array(
    //         'id' => $id
    //     );

    //     $this->m_data->update_data($where,$data,'user');
    //     redirect('web/store');
    // }

    function update(){
        // post dari form
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');
    
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );
    
        $where = array(
            'id' => $id
        );
    
        $this->m_data->update_data($where,$data,'user');
        redirect('web/store');
    }

}