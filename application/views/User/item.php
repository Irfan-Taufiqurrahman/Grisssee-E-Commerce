<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="header bg-transparent text-center mb-3">
        <h1>Deskripsi</h1>
    </div>
    <!-- End of Main Content -->

    <div class="row">
        <?php foreach ($barang as $b) : ?>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?= base_url('FotoBarang/') . $b->product_images1; ?>" alt="" class="w-75 mx-auto d-block my-4">
                        <label for="Stok" class="ml-5 text-warning">Stok : <?= $b->product_stok; ?></label>
                        <div class="harga">
                            <label for="Harga" class="ml-5 text-dark" style="font-size: 20px;">Harga : Rp<?= $b->product_price; ?>,00-</label>
                        </div>
                        <div class="berat">
                            <label for="Harga" class="ml-5 text-dark" style="font-size: 20px;">Berat : <?= $b->product_weight; ?> gram</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="desc text-justify">
                            <h2 class="text-dark"><?= $b->product_name; ?></h2>
                            <p><?= $b->product_description; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="col-md-4">
            <div class="btn-toolbar my-5 ml-4" role="toolbar" aria-label="Toolbar with button groups">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text" id="btnGroupAddon">Total</div>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah Pesanan" aria-label="Input group example" aria-describedby="btnGroupAddon">
                    <a href="<?= base_url('user/Checkout') ?>" class="btn btn-outline-success ml-3" role="button" aria-pressed="true">Beli</a>
                </div>
            </div>
        </div>
    </div>