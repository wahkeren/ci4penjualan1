<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>

    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="2%">No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Stok</th>
                            <th>Harga Jual</th>
                            <th>Kategori</th>
                            <th>Jenis</th>
                            <th width="14%">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($barang as $barangs) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $barangs->kode_barang; ?></td>
                                <td><?= $barangs->nama_barang; ?></td>
                                <td><?= $barangs->stok; ?></td>
                                <td>Rp<?= number_format($barangs->harga_jual, 0, ',', '.'); ?></td>
                                <td><?= $barangs->nama_kategori; ?></td>
                                <td><?= $barangs->nama_jenis; ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning" id="btn-edit" data-id=" <?= $barangs->id_barang; ?>" data-kode=" <?= $barangs->kode_barang; ?>" data-nama=" <?= $barangs->nama_barang; ?>" data-stok=" <?= $barangs->stok; ?>" data-jual=" <?= $barangs->harga_jual; ?>" data-kategori=" <?= $barangs->nama_kategori; ?>" data-jenis="<?= $barangs->nama_jenis; ?>" data-toggle="modal" data-target="#edit">Edit</button>
                                    <a class="btn btn-danger" href="/barang/delete/<?= ($barangs->{'id_barang'}); ?>">hapus</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>




</div>


<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>/barang/add" method="POST">
                    <div class="form-group">
                        <label for="kode_barang" class="col-form-label">Nama Barang:</label>
                        <input type="text" name="kode_barang" class="form-control" id="kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang" class="col-form-label">Nama Barang:</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="stok" class="col-form-label">Stok:</label>
                        <input type="text" name="stok" class="form-control" id="stok"></input>
                    </div>
                    <div class="form-group">
                        <label for="harga_jual" class="col-form-label">Harga Jual:</label>
                        <input type="text" name="harga_jual" class="form-control" id="harga_jual"></input>
                    </div>

                    <div class="form-group">
                        <label for="id_kategori">kategori</label>
                        <select class="form-control" name="id_kategori" id="id_kategori">
                            <?php foreach ($kategori as $kat) : ?>
                                <option value="<?= $kat->id_kategori; ?>"><?= $kat->nama_kategori; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id">Jenis</label>
                        <select class="form-control" name="id_jenis" id="id">
                            <?php foreach ($jenis as $jns) : ?>
                                <option value="<?= $jns->id; ?>"><?= $jns->nama_jenis; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </div>

                </form>
                </form>



            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('barang/edit'); ?>" method="POST">

                    <input type="hidden" name="id_barang" id="id-barang">
                    <div class="form-group">
                        <label for="kode_barang" class="col-form-label">Kode Barang:</label>
                        <input type="text" name="kode_barang" class="form-control" id="kode-barang">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang" class="col-form-label">Nama Barang:</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama-barang">
                    </div>
                    <div class="form-group">
                        <label for="stok" class="col-form-label">Stok:</label>
                        <input type="text" name="stok" class="form-control" id="stok"></input>
                    </div>
                    <div class="form-group">
                        <label for="harga_jual" class="col-form-label">Harga Jual:</label>
                        <input type="text" name="harga_jual" class="form-control" id="harga-jual"></input>
                    </div>

                    <div class="form-group">
                        <label for="id-kategori">kategori</label>
                        <select class="form-control" name="id_kategori" id="id-kategori">
                            <?php foreach ($kategori as $kat) : ?>
                                <option value="<?= $kat->id_kategori; ?>"><?= $kat->nama_kategori; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id">Jenis</label>
                        <select class="form-control" name="id_jenis" id="id">
                            <?php foreach ($jenis as $jns) : ?>
                                <option value="<?= $jns->id; ?>"><?= $jns->nama_jenis; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </div>

                </form>
                </form>



            </div>

        </div>
    </div>
</div>


<?= $this->endSection(); ?>