<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>


    <div class="card mb-3" style="max-width: 640px;">
        <div class="row no-gutters">
            <div class="col-md-4 mt-3 mb-3 pl-3 pr-3">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
            </div>

            <div class="col-md-8 pl-3">
                <div class="card-body">
                    <h5 class="card-text"><?= $user['name']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <div class="my-5">
                        <p class="card-text"><small class="text-muted">Member Since : <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->