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

                    <?php foreach ($ubah as $mb) : ?>
                        <form method="post" action="<?php echo base_url('admin/C_customer/ubah_aksi') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $mb->id ?>">
                                    </div>
                                    <!-- 1 -->
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $mb->nama ?>">
                                        <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <!--  2-->

                                    <div class="form-group">
                                        <label for="">username</label>
                                        <input type="text" name="username" class="form-control" value="<?php echo $mb->username ?>">
                                        <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <!--  3-->
                                    <div class="form-group">
                                        <label for="">email</label>
                                        <input type="text" name="email" class="form-control" value="<?php echo $mb->email ?>">
                                        <?php echo form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <!--4  -->
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="<?php echo $mb->alamat ?>">
                                        <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <!-- 5 -->
                                    <div class="form-group">
                                        <label for="">no_telepon</label>
                                        <input type="text" name="no_telepon" class="form-control" value="<?php echo $mb->no_telepon ?>">
                                        <?php echo form_error('no_telepon', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <!-- 6 -->
                                    <div class="form-group">
                                        <label for="">password</label>
                                        <input type="text" name="password" class="form-control" value="<?php echo $mb->password ?>">
                                        <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <!-- 7 -->
                                    <div class="form-group">
                                        <label for="">gender</label>
                                        <select name="gender" class="form-control" id="">
                                            <option <?php if ($mb->gender == "1") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->gender; ?> value="1">Laki - Laki</option>
                                            <option <?php if ($mb->gender == "0") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->gender; ?> value="0">Perempuan</option>
                                        </select>
                                        <?php echo form_error('gender', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <!-- 8 -->

                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" class="form-control" id="">
                                            <option <?php if ($mb->status == "1") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->status; ?> value="1">Login</option>
                                            <option <?php if ($mb->status == "0") {
                                                        echo "selected='selected'";
                                                    }
                                                    echo $mb->status; ?> value="0">Tidak Login</option>
                                        </select>
                                        <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <!-- 9 -->

                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input type="file" name="gambar" class="form-control mb-4">
                                        <img width="200px" height="auto" src="<?php echo base_url() . 'aset/upload/' . $mb->gambar ?>" alt="">
                                    </div>
                                    <!-- 10 -->

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