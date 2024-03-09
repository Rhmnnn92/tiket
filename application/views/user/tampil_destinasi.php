<!--  -->
<!-- awal -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-warning text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Data Tempat Wisata
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="<?php echo base_url('admin/C_destinasi/tambah_data') ?>" class="btn btn-gradient-info">Tambah Data</a>
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
                        <i class="mdi mdi-airplane-landing"></i> Data Destinasi
                    </h4>
                    <p class="card-description">Menampilkan tempat wisata yang tersedia
                    </p>
                    <table class="table table-hover">
                        <thead>
                            <th>NO</th>
                            <th>Nama Tempat</th>
                            <th>Kode Wisata</th>
                            <th>Alamat</th>
                            <th>Harga Tiket</th>
                            <th>gambar</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($wisata as $wt) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $wt->nama_tempat ?></td><!--  -->
                                    <td><?php
                                        if ($wt->kode_tipe == "0") {
                                            echo "<span class='badge badge-gradient-danger'>WSJH</span>";
                                        } elseif ($wt->kode_tipe == "1") {
                                            echo "<span class='badge badge-gradient-warning'>WCAT</span>";
                                        } elseif ($wt->kode_tipe == "2") {
                                            echo "<span class='badge badge-gradient-info'>WSBD</span>";
                                        } elseif ($wt->kode_tipe == "3") {
                                            echo "<span class='badge badge-gradient-primary'>WSBH</span>";
                                        } elseif ($wt->kode_tipe == "4") {
                                            echo "<span class='badge badge-gradient-success'>WSKI</span>";
                                        } else {
                                            echo "<span class='badge badge-gradient-dark'>Tidak Ada</span>";
                                        }
                                        ?>
                                    </td>
                                    <!--  -->
                                    <td><?php echo $wt->alamat ?></td>
                                    <td><?php echo $wt->harga_tiket ?></td>
                                    <td><img width="100%" height="auto" src="<?php echo base_url() . 'aset/upload/' . $wt->gambar ?>" alt=""></td>
                                    <td><?php
                                        if ($wt->status == "1") {
                                            echo "<span class='badge badge-gradient-success'>Tersedia</span>";
                                        } else {
                                            echo "<span class='badge badge-gradient-danger'>Tidak tersedia</span>";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/C_destinasi/rincian/') . $wt->id ?>" class="btn btn-sm btn-gradient-info"><i class="mdi mdi-details"></i></a>
                                        <a href="<?php echo base_url('admin/C_destinasi/hapus/') . $wt->id ?>" class="btn btn-sm btn-gradient-danger"><i class="mdi mdi-delete-forever"></i></a>
                                        <a href="<?php echo base_url('admin/C_destinasi/ubah/') . $wt->id ?>" class="btn btn-sm btn-gradient-success"><i class="mdi mdi-table-edit"></i></a>
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