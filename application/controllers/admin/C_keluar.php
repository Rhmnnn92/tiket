<?php
class C_keluar extends CI_Controller
{
    public function index(){
        $this->session->sess_destroy();
        redirect(base_url('admin/C_login'));
    }
}