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
                        <span></span>Data Tipe Overview <i class="mdi mdi-alert-circle-outline icon-sm text-info align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Title Dashboard -->
        <!-- awal form -->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="mdi mdi-account"></i> Data Tipe Tempat Wisata</h4>
                    <p class="card-description">Silahkan tambahkan data tempat wisata !</p>
                    <form class="forms-sample" method="post" action="<?php echo base_url('admin/C_tipe/tambah_data_aksi') ?>" enctype="multipart/form-data">
                        <!--  -->
                        <div class="form-group">
                            <label for="">Kode Tipe Tipe</label>
                            <select name="kode_tipe" id="" class="form-control">
                                <option value="0">WSJH</option>
                                <option value="1">WCAT</option>
                                <option value="2">WSBD</option>
                                <option value="3">WSBH</option>
                                <option value="4">WSKI</option>
                            </select>
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="form-group">
                            <label for="">Nama Tipe</label>
                            <select name="nama_type" id="" class="form-control">
                                <option value="0">Wisata Sejarah</option>
                                <option value="1">Wisata Cagar Alam</option>
                                <option value="2">Wisata Budaya</option>
                                <option value="3">Wisata Bahari</option>
                                <option value="4">Wisata Konservasi</option>
                            </select>
                        </div>
                        <!--  -->
                        <button type="submit" class="btn btn-gradient-info me-2">Submit</button>
                        <button type="reset" class="btn btn-gradient-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- akhir form -->