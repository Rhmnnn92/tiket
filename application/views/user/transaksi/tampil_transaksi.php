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
                            <th>Bukti Bayar</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($transaksi as $tr) : ?>
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
                                    <td>
                                        <center>
                                            <?php
                                            if (empty($tr->bukti_pembayaran)) { ?>
                                                <button class="btn btn-sm btn-gradient-danger"><i class="mdi mdi-content-save-all"></i></button>
                                            <?php } else { ?>
                                                <a href="<?php echo base_url('admin/C_transaksi/pembayaran/' . $tr->id_transaksi) ?>" class="btn btn-success"><i class="fas fa-check-circle"></i></a>
                                            <?php } ?>
                                        </center>

                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/C_transaksi/rincian/') . $tr->id_transaksi ?>" class="btn btn-sm btn-gradient-info"><i class="mdi mdi-details"></i></a>
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