<?php
class C_laporan extends CI_Controller
{
    // Menampilkan Data 
    public function index()
    {
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/laporan/tampil_laporan');
        $this->load->view('user/footer');
    }
    // tampilan data rincian data
    public function rincian()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        $data['laporan'] = $this->db->query("SELECT * FROM tb_transaksi tr,tb_customer cs, tb_wisata wt WHERE tr.id=wt.id AND tr.username=cs.username AND date(tanggal_beli) >= '$dari' AND date(tanggal_beli) <= '$sampai'")->result();
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/laporan/data_laporan', $data);
        $this->load->view('user/footer');
    }
    public function cetak()
    {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');
        $data['title'] = "Print Laporan Transaksi";
        $data['laporan'] = $this->db->query("SELECT * FROM tb_transaksi tr,tb_customer cs, tb_wisata wt WHERE tr.id=wt.id AND tr.username=cs.username AND date(tanggal_beli) >= '$dari' AND date(tanggal_beli) <= '$sampai'")->result();
        $this->load->view('user/header');
        $this->load->view('user/laporan/cetak', $data);
    }
}
