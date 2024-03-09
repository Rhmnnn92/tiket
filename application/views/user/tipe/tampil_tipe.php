<!--  -->
<!-- awal -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-warning text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Data Tipe Wisata
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="<?php echo base_url('admin/C_tipe/tambah_data') ?>" class="btn btn-gradient-info">Tambah Data</a>
                    </li>
                </ul>
            </nav>
        </div>
        <?php echo $this->session->flashdata('pesan') ?>
        <!-- Title Dashboard -->
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body table-responsive">
                    <h4 class="card-title">
                        <i class="mdi mdi-airplane-landing"></i> Data Tipe
                    </h4>
                    <p class="card-description">Menampilkan Data Tipe wisata yang tersedia
                    </p>
                    <table class="table table-hover">
                        <thead>
                            <th>NO</th>
                            <th>Kode </th>
                            <th>Nama</th>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($tipe as $tp) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <!--  -->
                                    <td><?php
                                        if ($tp->kode_tipe == "0") {
                                            echo "<span class='badge badge-gradient-danger'>WSJH</span>";
                                        } elseif ($tp->kode_tipe == "1") {
                                            echo "<span class='badge badge-gradient-warning'>WCAT</span>";
                                        } elseif ($tp->kode_tipe == "2") {
                                            echo "<span class='badge badge-gradient-info'>WSBD</span>";
                                        } elseif ($tp->kode_tipe == "3") {
                                            echo "<span class='badge badge-gradient-primary'>WSBH</span>";
                                        } elseif ($tp->kode_tipe == "4") {
                                            echo "<span class='badge badge-gradient-success'>WSKI</span>";
                                        } else {
                                            echo "<span class='badge badge-gradient-dark'>Tidak Ada</span>";
                                        }
                                        ?>
                                    </td>
                                    <!--  -->
                                    <!--  -->
                                    <td><?php
                                        if ($tp->nama_type == "0") {
                                            echo "<span class='badge badge-gradient-danger'>Wisata Sejarah</span>";
                                        } elseif ($tp->nama_type == "1") {
                                            echo "<span class='badge badge-gradient-warning'>Wisata Cagar Alam</span>";
                                        } elseif ($tp->nama_type == "2") {
                                            echo "<span class='badge badge-gradient-info'>Wisata Budaya</span>";
                                        } elseif ($tp->nama_type == "3") {
                                            echo "<span class='badge badge-gradient-primary'>Wisata Bahari</span>";
                                        } elseif ($tp->nama_type == "4") {
                                            echo "<span class='badge badge-gradient-success'>Wisata Konservsdi</span>";
                                        } else {
                                            echo "<span class='badge badge-gradient-dark'>Tidak Ada</span>";
                                        }
                                        ?>
                                    </td>
                                    <!--  -->
                                    <td>
                                        <a href="<?php echo base_url('admin/C_tipe/hapus/') . $tp->id_tipe ?>" class="btn btn-sm btn-gradient-danger"><i class="mdi mdi-delete-forever"></i></a>
                                        <a href="<?php echo base_url('admin/C_tipe/ubah/') . $tp->id_tipe ?>" class="btn btn-sm btn-gradient-success"><i class="mdi mdi-table-edit"></i></a>
                                    </td>
                                <?php endforeach; ?>
                                </td>
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--  -->