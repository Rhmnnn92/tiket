<h3 style="text-align: center;">Laporan Data Transaksi</h3>
<br><br>
<table class="text-center">
    <tr>
        <td>Per Tanggal</td>
        <td> : </td>
        <td><?php echo date('d-M-Y', strtotime($_GET['dari'])); ?></td>
        <td>s.d</td>
        <td><?php echo date('d-M-Y', strtotime($_GET['sampai'])); ?></td>
    </tr>
</table><br>
<div class="text-center">
    <span>Berikut Data Customer yang berhasil melakukan transaksi dalam website tiket wisata ini</span>
</div><br>
<div class=" mt-3 pt-3 table-responsive">
    <table class="table table-hover">
        <thead>
            <th>NO</th>
            <th>Nama </th>
            <th>Username</th>
            <th>Tanggal Beli</th>
            <th>Status</th>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($laporan as $tr) : ?>
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
                <?php endforeach; ?>
                </td>
                </tr>

        </tbody>
    </table>
</div>

<script type="text/javascript">
    window.print();
</script>

</body>

</html>