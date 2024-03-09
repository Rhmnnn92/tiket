<?php
class C_transaksi extends CI_Controller
{
    // Menampilkan Data 
    public function index()
    {
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr,tb_customer cs, tb_wisata wt WHERE tr.id=wt.id AND tr.username=cs.username")->result();
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/transaksi/tampil_transaksi', $data);
        $this->load->view('user/footer');
    }

    // tampilan data rincian data
    public function rincian($id_transaksi)
    {
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        $data["rincian"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $id_transaksi])->row_array();
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr,tb_customer cs, tb_wisata wt WHERE tr.id=wt.id AND tr.username=cs.username")->result();

        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/transaksi/rincian_transaksi', $data);
        $this->load->view('user/footer');
    }
}
