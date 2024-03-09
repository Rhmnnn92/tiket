<!--  -->
<!-- awal -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-warning text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Data Laporan
            </h3>
        </div>
        <?php echo $this->session->flashdata('pesan') ?>
        <!-- Title Dashboard -->
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body table-responsive">
                    <h4 class="card-title">
                        <i class="mdi mdi-airplane-landing"></i> Data Laporan
                    </h4>
                    <p class="card-description">Menampilkan Data Laporan yang tersedia
                    </p>
                    <form action="<?php echo base_url('admin/C_Laporan/rincian') ?>" method="post">
                        <div class="form-group">
                            <label for="">Tanggal Awal</label>
                            <input type="date" name="dari" class="form-control">
                            <?php echo form_error('dari', '<span class="text-small text-danger">', '</span>') ?>

                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Akhir</label>
                            <input type="date" name="sampai" class="form-control">

                            <?php echo form_error('sampai', '<span class="text-small text-danger">', '</span>') ?>
                        </div>

                        <button type="submit" class="btn btn-sm btn-gradient-info">Lanjutkan</button>
                    </form>
                </div>
            </div>
        </div>
        <!--  -->