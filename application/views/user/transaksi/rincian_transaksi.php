        <!-- in progresss tabel -->
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-success text-white me-2">
                            <i class="mdi mdi-home"></i>
                        </span> Data Transaksi
                    </h3>
                </div>
                <div class="row">
                    <!--  in progressss 2-->
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">Detail Data Transaksi</h3>
                                <h5 class="card-description">Berikut rincian transaksi dari, <span class="badge badge-gradient-success">
                                        <?php foreach ($transaksi as $tr) : ?>
                                            <?php echo $tr->nama ?>
                                        <?php endforeach; ?>
                                    </span>
                                </h5>
                                <table class="table table-hover">
                                    <tr>
                                        <!-- nama tempat -->
                                        <td>Nama </td>
                                        <td>
                                            <?php foreach ($transaksi as $tr) : ?>
                                                <?php echo $tr->nama ?>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>

                                    <!-- alamat -->
                                    <tr>
                                        <td>Username</td>
                                        <td><?php echo $rincian["username"]; ?></td>
                                    </tr>
                                    <!--  -->
                                    <!--  -->
                                    <tr>
                                        <!-- nama tempat -->
                                        <td>Nama Destinasi</td>
                                        <td>
                                            <?php foreach ($transaksi as $tr) : ?>
                                                <?php echo $tr->nama_tempat ?>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                    <!--  -->
                                    <!-- alamat -->
                                    <tr>
                                        <td>harga</td>
                                        <td><?php echo $rincian["harga"]; ?></td>
                                    </tr>
                                    <!--  -->
                                    <tr>
                                        <td>tanggal_beli</td>
                                        <td><?php echo $rincian["tanggal_beli"]; ?></td>
                                    </tr>
                                    <!--  -->
                                    <tr>
                                        <td>email</td>
                                        <td>
                                            <?php foreach ($transaksi as $tr) : ?>
                                                <?php echo $tr->email ?>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>alamat</td>
                                        <td>
                                            <?php foreach ($transaksi as $tr) : ?>
                                                <?php echo $tr->alamat ?>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                    <!-- fasilitas -->
                                    <!-- Jumlah tiket -->
                                    <tr>
                                        <td>no_telepon</td>
                                        <td>
                                            <?php foreach ($transaksi as $tr) : ?>
                                                <?php echo $tr->no_telepon ?>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                    <!--  -->
                                    <tr>
                                        <td>Gender</td>
                                        <td>
                                            <?php foreach ($transaksi as $tr) : ?>
                                                <?php
                                                if ($tr->gender == "1") {
                                                    echo "<span class='badge badge-gradient-info'>Laki - Laki</span>";
                                                } else {
                                                    echo "<span class='badge badge-gradient-primary'>Perempuan</span>";
                                                }
                                                ?>
                                            <?php endforeach; ?>

                                        </td>
                                    </tr>
                                    <!--  -->
                                    <tr>
                                        <?php foreach ($transaksi as $tr) : ?>

                                            <img src="<?php echo base_url() . 'aset/upload/' . $tr->gambar; ?>" class="img-fluid">
                                        <?php endforeach; ?>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->