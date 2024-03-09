<?php
class Dashboard extends CI_Controller {
    public function index() {
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/menu_dashboard');
        $this->load->view('user/footer');
    }
}
