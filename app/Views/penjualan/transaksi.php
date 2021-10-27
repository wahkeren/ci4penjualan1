<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">



    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-2">
                    <label for="ex1"></label>
                    <input disabled class="form-control" id="invoice" type="text" value="<?= $invoice; ?>">
                </div>
                <div class="col-md-2">
                    <label for="ex3"></label>
                    <input type="date" id="date" value="<?= date('Y-m-d'); ?>" class="form-control">
                </div>
                <div class="col-md-2">

                    <label for="ex3"></label>
                    <input disabled class="form-control" id="id_user" name="id_user" type="text" value="<?= user()->username; ?>">

                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="text" class="form-control" name="kode_barang" id="kode-barang" data-toggle="modal" data-target="#transaksi" placeholder="Kode Barang">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="nama_barang" id="nama-barang" data-toggle="modal" data-target="#transaksi" placeholder="Nama Barang">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="harga_jual" id="harga-jual" data-toggle="modal" data-target="#transaksi" placeholder="Harga" readonly>
                </div>
                <div class="col-md-2">
                    <input class="form-control form-inline" type="number" placeholder="Qty">
                </div>
                <div class="col-md-2">
                    <a href="#" class="btn btn-primary" id="tambahkeranjang">Simpan</a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="transaksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-body">




                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="2%">No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($barang as $brg) : ?>
                                        <tr>
                                            <td width="2%"><?= $i++; ?></td>
                                            <td><?= $brg->kode_barang; ?></td>
                                            <td><?= $brg->nama_barang; ?></td>
                                            <td><?= $brg->stok; ?></td>
                                            <td><?= $brg->harga_jual; ?></td>
                                            <td width="14%">


                                                <a href="#" class="btn btn-primary" id="btn-tambahbarang" data-kodebarang="<?= $brg->kode_barang; ?>" data-namabarang="<?= $brg->nama_barang; ?>" data-harga="<?= $brg->harga_jual; ?>">Pilih</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    <!-- <h1 class="h3 mb-2 text-gray-800">Akun List</h1> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-1">
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th width="1%">No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>QTY</th>
                                <th>Total</th>
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
                                <td>apa</td>
                                <td width="14%">
                                    <a class="btn btn-warning" href="">Ubah</a>
                                    <a class="btn btn-warning" href="">Ubah</a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">Grand Total</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="col text-center">
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<?= $this->endSection(); ?>