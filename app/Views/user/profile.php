<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Profile</h1>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url(); ?>/img/undraw_profile.svg" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <Ul class="list-group list-group-flush"></Ul>
                            <li class="list-group-item"></li>
                            <h4> <?= user()->username; ?></h4>
                            <li class="list-group-item">
                                <?= user()->email; ?>
                            </li>

                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>