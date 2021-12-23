<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="header bg-transparent text-center mb-3">
        <h1>Grisse</h1>
    </div>
    <!-- End of Main Content -->
    <div class="row mx-md-5 mb-3">
        <div class="col px-md-4">
            <a href="#barang">
                <div class="col-md-12 mx-auto d-block" style="width: 250px;"><img src="<?= base_url('admin_assets/img/Gelas.png') ?>" alt="Minuman" class="w-100"></div>
            </a>
            <div class="col-md-12 text-center">
                <div class="p-3 border bg-light">Minuman</div>
            </div>
        </div>
        <div class="col px-md-4">
            <a href="#barang">
                <div class="col-md-12 mx-auto d-block" style="width: 275px;"><img src="<?= base_url('admin_assets/img/SendokGarpu.png') ?>" alt="Food" class="w-100"></div>
            </a>
            <div class="col-md-12 text-center">
                <div class="p-3 border bg-light">Makanan</div>
            </div>
        </div>
        <div class="col px-md-4">
            <a href="#barang">
                <div class="col-md-12 mx-auto d-block" style="width: 250px"><img src="<?= base_url('admin_assets/img/HandMade.png') ?>" alt="Hand Made" class="w-100"></div>
            </a>
            <div class="col-md-12 text-center">
                <div class="p-3 border bg-light">Kerajinan Tangan</div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-6 col-md-4 mt-5 text-right" id="pembuka">
            <h1 style="font-size: 50px;"> Gresik?</h1> kota seperti apakah itu? daripada penasaran langsung cek barang asli Gresik, <span> #BanggaBuatanIndonesia </span>
        </div>
        <div class="col-md-8"><img src="<?= base_url('admin_assets/img/market.jpg') ?>" alt="" class="w-75 mx-auto d-block mt-5"></div>
    </div>

    <div class="row">
        <div class="col-md-6"><img src=" <?= base_url('admin_assets/img/Bath.jpg') ?>" alt="" class="w-75 mx-auto d-block mt-5">
            <div class="text-dark pl-5 ml-4">
                <h1> </h1>
            </div>
        </div>
        <div class="col-md-6"><img src=" <?= base_url('admin_assets/img/Etalase.jpg') ?>" alt="" class="w-75 mx-auto d-block mt-5">
            <div class="text-dark pl-5 pt-4 ml-4">
                <h1> </h1>
            </div>
        </div>
    </div>

    <div class="BarangDagang">
        <div class="row">
            <?php foreach ($barang as $b) : ?>

                <div class="col p-4 text-dark">
                    <a href="<?= base_url('user/item/') . $b->product_id ?>">
                        <div class="col-md-12" id="barang">
                            <img src="<?= base_url('FotoBarang/') . $b->product_images1; ?>" alt="Siwalan" class="w-75 mx-auto d-block my-4">
                        </div>
                    </a>
                    <div class="col-md-12">
                        <label for="Harga" style="font-size: 30px; color:#F78812;">Rp<?= $b->product_price; ?>,00-</label>
                        <h4><?= $b->product_name; ?></h4>
                        <p class="text-justify"><?= $b->product_description; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</div>
<!-- /.container-fluid -->