<?php
class C_tipe extends CI_Controller
{
    // Menampilkan Data 
    public function index()
    {
        $data['tipe'] = $this->model_tiket->get_data('tb_tipe')->result();
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/tipe/tampil_tipe', $data);
        $this->load->view('user/footer');
    }
    // tampilan data
    public function tambah_data()
    {
        $data['tipe'] = $this->model_tiket->get_data('tb_tipe')->result();
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/tipe/tambah_tipe', $data);
        $this->load->view('user/footer');
    }
        // Tambah data dari tipe
        public function tambah_data_aksi()
        {
            $kode_tipe = $this->input->post('kode_tipe');
            $nama_type = $this->input->post('nama_type');
            $data = array(
                'kode_tipe' => $kode_tipe,
                'nama_type' => $nama_type
            );
            $this->model_tiket->insert_data($data, 'tb_tipe');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Destinasi tipe Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            redirect('admin/C_tipe');
        }
}
