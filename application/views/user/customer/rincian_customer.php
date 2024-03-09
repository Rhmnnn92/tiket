        <!-- in progresss tabel -->
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-success text-white me-2">
                            <i class="mdi mdi-home"></i>
                        </span> Data Customer
                    </h3>
                </div>
                <div class="row">
                    <!--  in progressss 2-->
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">Detail Data Customer</h3>
                                <h5 class="card-description">Berikut rincian dari, <span class="badge badge-gradient-success"> <?php echo $rincian["nama"]; ?></span>
                                </h5>
                                <table class="table table-hover">
                                    <!-- nama tempat -->
                                    <td>Nama :</td>
                                    <td><?php echo $rincian["nama"]; ?></td>
                                    </tr>
                                    <!-- alamat -->
                                    <tr>
                                        <td>Username</td>
                                        <td><?php echo $rincian["username"]; ?></td>
                                    </tr>

                                    <tr>
                                        <td>email</td>
                                        <td><?php echo $rincian["email"]; ?></td>
                                    </tr>

                                    <tr>
                                        <td>alamat</td>
                                        <td><?php echo $rincian["alamat"]; ?></td>
                                    </tr>
                                    <!-- fasilitas -->
                                    <!-- Jumlah tiket -->
                                    <tr>
                                        <td>no_telepon</td>
                                        <td><?php echo $rincian["no_telepon"]; ?></td>
                                    </tr>

                                    <!-- pasportd -->
                                    <tr>
                                        <td>password</td>
                                        <td><?php echo $rincian["password"]; ?></td>
                                    </tr>
                                    <!--  -->
                                    <tr>
                                        <td>Gender</td>
                                        <td>
                                            <?php
                                            if ($rincian["gender"] == "1") {
                                                echo "<span class='badge badge-gradient-info'>Laki - Laki</span>";
                                            } else {
                                                echo "<span class='badge badge-gradient-primary'>Perempuan</span>";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <!-- status -->
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            <?php
                                            if ($rincian["status"] == "0") {
                                                echo "<span class='badge badge-gradient-danger'>Tidak Login</span>";
                                            } else {
                                                echo "<span class='badge badge-gradient-warning'>Login</span>";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <!--  -->
                                    <tr>
                                        <img src="<?php echo base_url() . 'aset/upload/' . $rincian["gambar"]; ?>" class="img-fluid">
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->