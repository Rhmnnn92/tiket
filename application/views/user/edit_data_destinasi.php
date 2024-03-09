<!-- awal -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-info text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Form Update Data
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
                    <p class="card-description">Silahkan update data tempat wisata yang tersedia !</p>

                    <?php foreach ($join as $mb) : ?>
                        <form method="post" action="<?php echo base_url('admin/C_destinasi/ubah_aksi') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $mb->id ?>">
                                        <label for="">Jenis Destinasi</label>
                                        <select name="kode_tipe" id="" class="form-control">
                                        <?php foreach ($type as $tp) : ?>
                                            
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
                                        <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Tempat</label>
                                        <input type="text" name="nama_tempat" class="form-control" value="<?php echo $mb->nama_tempat ?>">
                                        <?php echo form_error('nama_tempat', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="<?php echo $mb->alamat ?>">
                                        <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control" value="<?php echo $mb->deskripsi ?>">
                                        <?php echo form_error('deskripsi', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>


                                    <div class="form-group">
                                        <label for="">fasilitas</label>
                                        <input type="text" name="fasilitas" class="form-control" value="<?php echo $mb->fasilitas ?>">
                                        <?php echo form_error('fasilitas', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Harga Tiket</label>
                                        <input min="0" type="number" name="harga_tiket" class="form-control" value="<?php echo $mb->harga_tiket ?>">
                                        <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Jumlah Tiket</label>
                                        <input min="0" type="number" name="jumlah_tiket" class="form-control" value="<?php echo $mb->jumlah_tiket ?>">
                                        <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" class="form-control" id="">
                                            <option <?php if ($mb->status == "1") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->status; ?> value="1">Tersedia</option>
                                            <option <?php if ($mb->status == "0") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->status; ?> value="0">Tidak Tersedia</option>
                                        </select>
                                        <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input type="file" name="gambar" class="form-control mb-4">
                                        <img width="200px" height="auto" src="<?php echo base_url() . 'aset/upload/' . $mb->gambar ?>" alt="">
                                    </div>

                                    <button type="submit" class="mt-4 btn btn-primary">Simpan</button>
                                    <button type="reset" class="mt-4 btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </form>

                    <?php endforeach; ?>
                </div>
            </div>
            </section>
        </div>








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
                                            <?php foreach ($jenis as $mb) : ?>
                                                <option value="<?php echo $tp->kode_tipe ?>"><?php echo $tp->nama_type ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="">alamat</label>
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