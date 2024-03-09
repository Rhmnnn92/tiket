<?php
class C_destinasi extends CI_Controller
{
    public function index()
    {
        $data['wisata'] = $this->model_tiket->get_data('tb_wisata')->result();
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/tampil_destinasi', $data);
        $this->load->view('user/footer');
    }
    // tampilan data
    public function tambah_data()
    {
        $data['jenis'] = $this->model_tiket->get_data('tb_tipe')->result();
        $data['tipe'] = $this->model_tiket->get_data('tb_tipe')->result();
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/form_data_destinasi', $data);
        $this->load->view('user/footer');
    }
    // Tambah data dari destinasi
    public function tambah_data_aksi()
    {
        $kode_tipe = $this->input->post('kode_tipe');
        $nama_tempat = $this->input->post('nama_tempat');
        $alamat = $this->input->post('alamat');
        $deskripsi = $this->input->post('deskripsi');
        $harga_tiket = $this->input->post('harga_tiket');
        $fasilitas = $this->input->post('fasilitas');
        $jumlah_tiket = $this->input->post('jumlah_tiket');
        $status = $this->input->post('status');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './aset/upload';
            $config['allowed_types'] = 'jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'kode_tipe' => $kode_tipe,
            'nama_tempat' => $nama_tempat,
            'alamat' => $alamat,
            'deskripsi' => $deskripsi,
            'harga_tiket' => $harga_tiket,
            'fasilitas' => $fasilitas,
            'jumlah_tiket' => $jumlah_tiket,
            'fasilitas' => $fasilitas,
            'jumlah_tiket'    => $jumlah_tiket,
            'status' => $status,
            'gambar' => $gambar
        );
        $this->model_tiket->insert_data($data, 'tb_wisata');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Destinasi Wisata Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('admin/C_destinasi');
    }

    // tampilan data rincian data
    public function rincian($wt)
    {
        $data["rincian"] = $this->db->get_where("tb_wisata", ["id" => $wt])->row_array();
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/rincian_data_destinasi', $data);
        $this->load->view('user/footer');
    }
    // Untuk mengupdate data yang telah ada ke database
    public function ubah($id)
    {

        $where = array('id' => $id);
        $data['join'] = $this->db->query("SELECT * FROM tb_wisata wt, tb_tipe tp WHERE wt.kode_tipe=tp.kode_tipe AND wt.id='$id'")->result();
        // melakukan join 2 tabel
        $data['type'] = $this->model_tiket->get_data('tb_tipe')->result();
        $data['identitas'] = $this->model_tiket->get_data('tb_wisata')->result();
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        // ambil data dari database
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/edit_data_destinasi', $data);
        $this->load->view('user/footer');
    }

    public function ubah_aksi()
    {
        $id = $this->input->post('id');
        $kode_tipe = $this->input->post('kode_tipe');
        $nama_tempat = $this->input->post('nama_tempat');
        $alamat = $this->input->post('alamat');
        $deskripsi = $this->input->post('deskripsi');
        $harga_tiket = $this->input->post('harga_tiket');
        $fasilitas = $this->input->post('fasilitas');
        $jumlah_tiket = $this->input->post('jumlah_tiket');
        $status = $this->input->post('status');
        $gambar = $_FILES['gambar']['name'];
        
        if ($gambar) {
            $config['upload_path'] = './aset/upload';
            $config['allowed_types'] = 'jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }else{

        }
        $data = array(
            'kode_tipe' => $kode_tipe,
            'nama_tempat' => $nama_tempat,
            'alamat' => $alamat,
            'deskripsi' => $deskripsi,
            'harga_tiket' => $harga_tiket,
            'fasilitas' => $fasilitas,
            'jumlah_tiket' => $jumlah_tiket,
            'fasilitas' => $fasilitas,
            'jumlah_tiket'    => $jumlah_tiket,
            'status' => $status,
            'gambar' => $gambar
        );
        $where = array(
            'id' => $id
        );
        $this->model_tiket->update_data($where,$data,'tb_wisata',);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Tempat Wisata Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('admin/C_destinasi');
    }

    // delete data
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_tiket->delete_data($where, 'tb_wisata');
        $this->session->set_flashdata('pesan','<div class="alert alert-success danger alert-dismissible fade show" role="alert">
        Data Tempat Wisata Berhasil Dihapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/C_destinasi');
    }
    // ubah aksi untuk menghendel form HTML
    // Tambah data dari destinasi
    // public function ubah_aksi()
    // {
    // $id = $this->input->post('id');
    // $kode_tipe = $this->input->post('kode_tipe');
    // $nama_tempat = $this->input->post('nama_tempat');
    // $alamat = $this->input->post('alamat');
    // $deskripsi = $this->input->post('deskripsi');
    // $harga_tiket = $this->input->post('harga_tiket');
    // $fasilitas = $this->input->post('fasilitas');
    // $jumlah_tiket = $this->input->post('jumlah_tiket');
    // $status = $this->input->post('status');
    // $gambar = $_FILES['gambar']['name'];
    //     if ($gambar != '') {
    //     //     $config['upload_path'] = './aset/upload';
    //     //     $config['allowed_types'] = 'jpg|jpeg|png|tiff';
    //     //     $this->load->library('upload', $config);
    //     //     // masukan data ke database
    //     //     if (!$this->upload->do_upload('gambar')) {
    //     //         echo "Gambar Gagal Diupload!";
    //     //     } else {
    //     //         $gambar = $this->upload->data('file_name');
    //     //     }
    //     // }
    //        } else {
    //            $config['upload_path'] = './aset/upload';
    //            $config['allowed_types'] = 'jpg|jpeg|png|tiff';

    //            $this->load->library('upload', $config);
    //            if (!$this->upload->do_upload('gambar')) {
    //                echo "Gambar Gagal Diupload!";
    //            } else {
    //                $gambar = $this->upload->data('file_name');
    //            }
    //        }
    //     $data = array(
    // 'kode_tipe' => $kode_tipe,
    // 'nama_tempat' => $nama_tempat,
    // 'alamat' => $alamat,
    // 'deskripsi' => $deskripsi,
    // 'harga_tiket' => $harga_tiket,
    // 'fasilitas' => $fasilitas,
    // 'jumlah_tiket' => $jumlah_tiket,
    // 'fasilitas' => $fasilitas,
    // 'jumlah_tiket'    => $jumlah_tiket,
    // 'status' => $status,
    // 'gambar' => $gambar
    //     );
    //     $where = array(
    //         'id' => $id
    //     );
    //     $this->model_tiket->update_data('tb_wisata', $data,$where);
    //     $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //            Data Destinasi Berhasil Ditambahkan!
    //            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //              <span aria-hidden="true">&times;</span>
    //            </button>
    //          </div>');
    //     redirect('admin/C_destinasi');
    // }
}
