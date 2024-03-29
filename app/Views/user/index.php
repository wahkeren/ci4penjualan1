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
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $user->username; ?></td>
                                <td><?= $user->email; ?></td>
                                <td><?= $user->name; ?></td>
                                <td>
                                    <a class="btn btn-warning" href="">Ubah</a>
                                    <a class="btn btn-warning" href="">Ubah</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>