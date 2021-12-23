<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4 ">
                <img src="<?= base_url('admin_assets/img/') . $user['image']; ?>" class="w-100">
            </div>
            <div class="col-md-8">
                <div class="card-body text-dark font-weight-normal">
                    <h5 class="card-title font-weight-bolder"><?= $user['name']; ?></h5>
                    <p class="text">Email : <?= $user['email']; ?></p>
                    <p>Alamat : <?= $user['address']; ?></p>
                    <p class="card-text pt-4"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->