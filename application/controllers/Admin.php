<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    
    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('status') != 'login') 
        // {
        //     redirect(site_url('admin'));
            
        // }
        //Do your magic here
    }
    
    public function index()
    {
        $data['judul'] = "Dashboard | Kelapa Sawit"; 
        $data['isi'] = 'admin/dashboard';
        $this->load->view('admin/template/layout', $data);       
    }

    public function view_datauser()
    {
        $data['judul'] = "Data User | Kelapa Sawit"; 
        $data['isi'] = 'admin/data_user';
        $this->load->view('admin/template/layout', $data);       
    }

    public function view_adduser()
    {
        $data['judul'] = "Tambah User | Kelapa Sawit"; 
        $data['isi'] = 'admin/tambah_user';
        $this->load->view('admin/template/layout', $data);       
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('welcome'));
    }

}

/* End of file Admin.php */
