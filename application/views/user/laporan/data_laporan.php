<!--  -->
<!-- awal -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-warning text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Data Transaksi
            </h3>
        </div>
        <?php echo $this->session->flashdata('pesan') ?>
        <!-- Title Dashboard -->
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body table-responsive">
                    <h4 class="card-title">
                        <i class="mdi mdi-airplane-landing"></i> Data Transaksi
                    </h4>
                    <p class="card-description">Menampilkan Data Transaksi
                    </p>
                    <table class="table table-hover">
                        <thead>
                            <th>NO</th>
                            <th>Nama </th>
                            <th>Username</th>
                            <th>Tanggal Beli</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($laporan as $tr) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $tr->nama ?></td>
                                    <td><?php echo $tr->username ?></td>
                                    <td><?php echo $tr->tanggal_beli ?></td>
                                    <td><?php
                                        if ($tr->status_beli == "1") {
                                            echo "<span class='badge badge-gradient-info'>Berhasil</span>";
                                        } else {
                                            echo "<span class='badge badge-gradient-primary'>Gagal</span>";
                                        }
                                        ?>
                                    </td>
                                <?php endforeach; ?>
                                <div class="btn-group mb-2 pb-2">
                                    <a href="<?php echo base_url() . 'admin/C_laporan/cetak/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai') ?>" class="btn btn-sm btn-info" target="_blank">
                                        Print</a>
                                </div>
                                </td>
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--  -->