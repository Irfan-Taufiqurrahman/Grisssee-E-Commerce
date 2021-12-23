<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="header bg-transparent text-center mb-3">
        <h1>Product</h1>
    </div>
    <!-- End of Main Content -->
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">

            <div class="col-md-4">
                <img src="<?= base_url('FotoBarang/699_2.jpeg') ?>" alt="..." class="w-100 mx-auto d-block">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="card-body text-dark font-weight-normal">
                        <h5 class="card-title">Pembeli : <?= $user['name']; ?></h5>
                        <p class="text">Jumlah pesanan : 1 buah</p>
                        <p>Alamat pengiriman : <?= $user['address']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>