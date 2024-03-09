<?php
class C_customer extends CI_Controller
{
    // Menampilkan Data 
    public function index()
    {
        $data['customer'] = $this->model_tiket->get_data('tb_customer')->result();
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/customer/tampil_customer', $data);
        $this->load->view('user/footer');
    }

    // tampilan data rincian data
    public function rincian($id)
    {
        $data["rincian"] = $this->db->get_where("tb_customer", ["id" => $id])->row_array();
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/customer/rincian_customer', $data);
        $this->load->view('user/footer');
    }
    // Untuk mengupdate data yang telah ada ke database
    public function ubah($id)
    {

        $where = array('id' => $id);
        $data['ubah'] = $this->db->query("SELECT * FROM tb_customer cs WHERE id='$id'")->result();
        $data['identitas'] = $this->model_tiket->get_data('tb_customer')->result();
        $data['admin'] = $this->model_tiket->get_data('tb_admin')->result();
        // ambil data dari database
        $this->load->view('user/header');
        $this->load->view('user/beranda',$data);
        $this->load->view('user/customer/edit_customer', $data);
        $this->load->view('user/footer');
    }

    public function ubah_aksi()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $no_telepon = $this->input->post('no_telepon');
        $password = $this->input->post('password');
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
        } else {
        }
        $data = array(
            'nama' => $nama,
            'username' => $username,
            'alamat' => $alamat,
            'email' => $email,
            'gender' => $gender,
            'no_telepon' => $no_telepon,
            'password' => $password,
            'status' => $status,
            'gambar' => $gambar
        );
        $where = array(
            'id' => $id
        );
        $this->model_tiket->update_data($where, $data, 'tb_customer',);
        $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-dismissible fade show" role="alert">
            Data Customer Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('admin/C_customer');
    }

    // delete data
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_tiket->delete_data($where, 'tb_customer');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success danger alert-dismissible fade show" role="alert">
            Data Customer Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('admin/C_destinasi');
    }
}
