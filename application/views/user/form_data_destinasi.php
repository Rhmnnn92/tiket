<!-- awal -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-info text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Form Tambah Data
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-info align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Title Dashboard -->
        <!-- awal form -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="mdi mdi-account"></i> Data Tempat Wisata</h4>
                    <p class="card-description">Silahkan tambahkan data tempat wisata yang tersedia !</p>
                    <form class="forms-sample" method="post" action="<?php echo base_url('admin/C_destinasi/tambah_data_aksi') ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Jenis Wisata</label>
                            <select name="kode_tipe" id="" class="form-control">
                                <option value="">Pilih Jenis Wisata</option>
                                <?php foreach ($tipe as $tp) : ?>
                                    <option value="<?php echo $tp->kode_tipe ?>">
                                        <?php
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
                                        ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Wisata</label>
                            <input name="nama_tempat" type="text" class="form-control" id="" placeholder="Nama Destinasi">
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-info" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">City</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                        </div> -->
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" placeholder="Alamat Destinasi" class="form-control" id="exampleTextarea1" rows="3"></textarea>
                        </div>
                        <!-- end alamat -->
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" placeholder="Deskripsi tempat" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                        </div>
                        <!-- end Deskripsi -->
                        <div class="form-group">
                            <label for="">Harga Tiket</label>
                            <input name="harga_tiket" min="0" type="number" class="form-control" id="" placeholder="Harga Tiket Wisata">
                        </div>
                        <!-- end harga tiket -->
                        <div class="form-group">
                            <label for="">fasilitas</label>
                            <textarea name="fasilitas" placeholder="fasilitas" class="form-control" id="exampleTextarea1" rows="3"></textarea>
                        </div>
                        <!-- end fasilitas -->
                        <div class="form-group">
                            <label for="">jumlah tiket</label>
                            <input name="jumlah_tiket" min="0" type="jumlah_tiket" class="form-control" id="" placeholder="Fasilitas Wisata">
                        </div>
                        <!-- end jumlah tiket -->
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-gradient-info me-2">Submit</button>
                        <button type="reset" class="btn btn-gradient-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- akhir form -->








        <!-- Main Content
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1 class="content-center">Form Data Mobil</h1>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tipe Mobil</label>
                                        <select name="kode_type" id="" class="form-control">
                                            <option value="">Pilih Tipe Mobil</option>
                                            <?php foreach ($jenis as $tp) : ?>
                                                <option value="<?php echo $tp->kode_tipe ?>"><?php echo $tp->nama_type ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Merk</label>
                                        <input type="text" name="merk" class="form-control">
                                        <?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nomor Plat</label>
                                        <input type="text" name="no_plat" class="form-control">
                                        <?php echo form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Warna</label>
                                        <input type="text" name="warna" class="form-control">
                                        <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">AC</label>
                                        <select name="AC" id="" class="form-control">
                                            <option value="1">Tersedia</option>
                                            <option value="0">Tidak Tersedia</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Supir</label>
                                        <select name="supir" id="" class="form-control">
                                            <option value="1">Tersedia</option>
                                            <option value="0">Tidak Tersedia</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">MP3 Player</label>
                                        <select name="mp3_player" id="" class="form-control">
                                            <option value="1">Tersedia</option>
                                            <option value="0">Tidak Tersedia</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="number" name="harga" class="form-control">
                                        <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Denda</label>
                                        <input type="number" name="denda" class="form-control">
                                        <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tahun</label>
                                        <input type="text" name="tahun" class="form-control">
                                        <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" class="form-control" id="">
                                            <option value="">== Pilih Status ==</option>
                                            <option value="1">Tersedia</option>
                                            <option value="0">Tidak Tersedia</option>
                                        </select>
                                        <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input type="file" name="gambar" class="form-control">
                                    </div>

                                    <button type="submit" class="mt-4 btn btn-primary">Simpan</button>
                                    <button type="reset" class="mt-4 btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div> -->