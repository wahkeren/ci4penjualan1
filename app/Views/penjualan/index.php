<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold text-primary">DataTables Example</h1>
        </div>
    </div>

    <!-- <h1 class="h3 mb-2 text-gray-800">Akun List</h1> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <a class="btn btn-primary" href="<?php base_url() ?>/penjualan/transaksi" role="button">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Kode Transaksi</th>
                            <th>Tanggal</th>
                            <th>Total</th>
                            <th>Kasir</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>123</td>
                            <td>20 oktober</td>
                            <td>wahyu</td>
                            <td>apa</td>
                            <td width="14%">
                                <a class="btn btn-warning" href="">Ubah</a>
                                <a class="btn btn-warning" href="">Ubah</a>
                            </td>

                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>