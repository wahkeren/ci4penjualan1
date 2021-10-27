<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">kategori Barang</h1>

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
                            <th>No</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kategori as $kat) : ?>
                            <tr>
                                <td width="1%"><?= $i++; ?></td>
                                <td><?= $kat->nama_kategori; ?></td>
                                <td width="14%">
                                    <button type="button" class="btn btn-warning" id="btn-edit-kategori" data-id="<?= $kat->id_kategori; ?>" data-nama="<?= $kat->nama_kategori; ?>" data-toggle="modal" data-target="#edit">Edit</button>
                                    <a class="btn btn-danger" href="">Hapus</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
                <form action="<?= base_url('kategori/edit'); ?>" method="POST">

                    <input type="hidden" name="id_kategori" id="id-kategori">
                    <div class="form-group">
                        <label for="nama_kategori" class="col-form-label">Nama kategori:</label>
                        <input type="text" name="nama_kategori" class="form-control" id="nama-kategori">
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

<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('kategori/add'); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama_kategori" class="col-form-label">Nama kategori:</label>
                        <input type="text" name="nama_kategori" class="form-control" id="nama_kategori">
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