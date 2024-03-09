        <!-- in progresss tabel -->
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-success text-white me-2">
                            <i class="mdi mdi-home"></i>
                        </span> Data Tempat Wisata
                    </h3>
                </div>
                <div class="row">
                    <!--  in progressss 2-->
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">Detail Data Destinasi</h3>
                                <h5 class="card-description">Berikut rincian dari tempat wisata, <span class="badge badge-gradient-success"> <?php echo $rincian["nama_tempat"]; ?></span>
                                </h5>
                                <table class="table table-hover">
                                    <tr>
                                        <td>Jenis Tempat Wisata :</td>
                                        <td><?php
                                        if ($rincian['kode_tipe'] == "0") {
                                            echo "<span class='badge badge-gradient-danger'>Wisata Sejarah</span>";
                                        } elseif ($rincian['kode_tipe'] == "1") {
                                            echo "<span class='badge badge-gradient-warning'>Wisata Cagar Alam</span>";
                                        } elseif ($rincian['kode_tipe'] == "2") {
                                            echo "<span class='badge badge-gradient-info'>Wisata Budaya</span>";
                                        } elseif ($rincian['kode_tipe'] == "3") {
                                            echo "<span class='badge badge-gradient-primary'>Wisata Bahari</span>";
                                        } elseif ($rincian['kode_tipe'] == "4") {
                                            echo "<span class='badge badge-gradient-success'>Wisata konservasi</span>";
                                        } else {
                                            echo "<span class='badge badge-gradient-dark'>Tidak Ada</span>";
                                        }
                                        ?>
                                    </td>
                                    </tr>
                                    <!-- nama tempat -->
                                    <td>Nama Tempat :</td>
                                    <td><?php echo $rincian["nama_tempat"]; ?></td>
                                    </tr>
                                    <!-- alamat -->
                                    <tr>
                                        <td>Alamat</td>
                                        <td><?php echo $rincian["alamat"]; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Deskipsi</td>
                                        <td><?php echo $rincian["deskripsi"]; ?></td>
                                    </tr>

                                    <tr>
                                        <td>harga_tiket</td>
                                        <td><?php echo $rincian["harga_tiket"]; ?></td>
                                    </tr>
                                    <!-- fasilitas -->
                                    <tr>
                                        <td>fasilitas</td>
                                        <td><?php echo $rincian["fasilitas"]; ?></td>
                                    </tr>
                                    <!-- Jumlah tiket -->
                                    <tr>
                                        <td>jumlah_tiket</td>
                                        <td><?php echo $rincian["jumlah_tiket"]; ?></td>
                                    </tr>
                                    <!-- status -->
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            <?php
                                            if ($rincian["status"] == "0") {
                                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                            } else {
                                                echo "<span class='badge badge-gradient-success'>Tersedia</span>";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                    <img src="<?php echo base_url().'aset/upload/'.$rincian["gambar"];?>" class="img-fluid">
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->