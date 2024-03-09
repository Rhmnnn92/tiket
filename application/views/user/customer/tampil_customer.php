<!--  -->
<!-- awal -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-warning text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Data Customer
            </h3>
        </div>
        <?php echo $this->session->flashdata('pesan') ?>
        <!-- Title Dashboard -->
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body table-responsive">
                    <h4 class="card-title">
                        <i class="mdi mdi-airplane-landing"></i> Data Customer
                    </h4>
                    <p class="card-description">Menampilkan Data Customer
                    </p>
                    <table class="table table-hover">
                        <thead>
                            <th>NO</th>
                            <th>Nama </th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($customer as $cs) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $cs->nama ?></td>
                                    <td><?php echo $cs->username ?></td>
                                    <td><?php echo $cs->email ?></td>
                                    <td><?php
                                        if ($cs->gender == "1") {
                                            echo "<span class='badge badge-gradient-info'>Laki - Laki</span>";
                                        } else {
                                            echo "<span class='badge badge-gradient-primary'>Perempuan</span>";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/C_customer/rincian/') . $cs->id ?>" class="btn btn-sm btn-gradient-info"><i class="mdi mdi-details"></i></a>
                                        <a href="<?php echo base_url('admin/C_customer/hapus/') . $cs->id ?>" class="btn btn-sm btn-gradient-danger"><i class="mdi mdi-delete-forever"></i></a>
                                        <a href="<?php echo base_url('admin/C_customer/ubah/') . $cs->id ?>" class="btn btn-sm btn-gradient-success"><i class="mdi mdi-table-edit"></i></a>
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