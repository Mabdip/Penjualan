<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $data['judul'] = "Login | Kelapa Sawit";
        $data['isi']   = 'login/login';
        $this->load->view('login/template/layout', $data);
    }

}

/* End of file Login.php */
