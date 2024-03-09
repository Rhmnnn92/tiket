<?php
class C_login extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata("status") == "login") {
            redirect("admin/dashboard");
        }
        $data['title'] = 'Tampil Data';
        $this->load->view('user/login/login', $data);
    }
    public function login_aksi()
    {
        if ($this->session->userdata("status") == "login") {
            redirect("admin/dashboard");
        }
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->model_tiket->get_where($where, "tb_admin")->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("admin/dashboard"));
        } else {
            echo "<script laguage=\"javascript\">alert(\"Username dan password salah !\");document.location=\"../C_login\";</script>";
        }
    }
}
