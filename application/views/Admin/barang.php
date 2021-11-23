<html lang="en">

<head>
    <?php
    $this->load->view('Admin/_partials/head');
    ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
        $this->load->view('Admin/_partials/sidebar');
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php
                $this->load->view('Admin/_partials/navbar');
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#TambahDataBarang">
                                <span class="icon text-white-100">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add Data</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Product Price</th>
                                            <th>Product weight</th>
                                            <th>Product Image</th>
                                            <th>Description</th>
                                            <th>Stok</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Product Price</th>
                                            <th>Product weight</th>
                                            <th>Product Image</th>
                                            <th>Description</th>
                                            <th>Stok</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($barang as $x) : ?>
                                            <tr>
                                                <td><?= $x->product_id ?> </td>
                                                <td><?= $x->product_name ?></td>
                                                <td><?= number_format($x->product_price); ?></td>
                                                <td><?= $x->product_weight ?> gram</td>
                                                <td>
                                                    <img src="<?= base_url('FotoBarang/' . $x->product_images1); ?>" alt="" border=3 height="100" width="100">
                                                    <img src="<?= base_url('FotoBarang/' . $x->product_images2); ?>" alt="" border=3 height="100" width="100">
                                                    <img src="<?= base_url('FotoBarang/' . $x->product_images3); ?>" alt="" border=3 height="100" width="100">
                                                </td>
                                                <td><?= $x->product_description ?></td>
                                                <td><?= $x->product_stok ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-info btn-icon-split m-1" data-toggle="modal" data-target="#UpdateDataBarang<?= $x->product_id ?>">
                                                        <span class="icon text-white-100">
                                                            <i class="far fa-edit"></i>
                                                        </span>
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="<?= base_url('Admin/Page/deleteBarang/' . $x->product_id) ?>" class="btn btn-sm btn-outline-danger btn-icon-split m-1" onclick="return confirm('apakah anda yakin menghapus item?');">
                                                        <span class="icon text-white-100">
                                                            <i class="fas fa-trash  "></i>
                                                        </span>
                                                        <span class="text">Delete</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <?php
                $this->load->view('Admin/_partials/foot');
                ?>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambah Barang Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="TambahDataBarang">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="<?= base_url('index.php/Admin/Page/tambahBarang'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Product Name" name="product_name" aria-describedby="sizing-addon2" required="">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Price" name="product_price" aria-describedby="sizing-addon2" required="">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="weight" name="product_weight" aria-describedby="sizing-addon2" required="">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Stok Barang" name="product_stok" aria-describedby="sizing-addon2" required="">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" placeholder="Description" name="product_description" aria-describedby="sizing-addon2" style="resize:none;height:250px;" required=""></textarea>
                        </div>
                        <label>Foto 1 (Primary)</label>
                        <div class="form-group">
                            <input type="file" class="form-control" name="product_images1" required="">
                        </div>
                        <label>Foto 2</label>
                        <div class="form-group">
                            <input type="file" class="form-control" name="product_images2" required="">
                        </div>
                        <label>Foto 3</label>
                        <div class="form-group">
                            <input type="file" class="form-control" name="product_images3" required="">
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <?php foreach ($barang as $y) : ?>
        <!-- Edit Data Barang -->
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="UpdateDataBarang<?= $y->product_id ?>">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Data Barang</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="<?= base_url('index.php/Admin/Page/updateBarang'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hide" name="product_id" value="<?= $y->product_id ?>">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Product Name" name="product_name" aria-describedby="sizing-addon2" value="<?= $y->product_name ?>" required="">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Price" name="product_price" aria-describedby="sizing-addon2" value="<?= $y->product_price ?>" required="">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="weight" name="product_weight" aria-describedby="sizing-addon2" value="<?= $y->product_weight ?>" required="">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Stok Barang" name="product_stok" aria-describedby="sizing-addon2" value="<?= $y->product_stok ?>" required="">
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control" placeholder="Description" name="product_description" aria-describedby="sizing-addon2" style="resize:none;height:250px;" required=""><?= $y->product_description ?></textarea>
                            </div>
                            <label>Foto 1 (Primary)</label>
                            <div class="form-group">
                                <input type="file" class="form-control" name="product_images1" required="">
                            </div>
                            <label>Foto 2</label>
                            <div class="form-group">
                                <input type="file" class="form-control" name="product_images2" required="">
                            </div>
                            <label>Foto 3</label>
                            <div class="form-group">
                                <input type="file" class="form-control" name="product_images3" required="">
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="form-control btn btn-success"> <i class="glyphicon glyphicon-ok"></i> Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Hapus Barang Modal-->
    <!-- <div class="modal fade" id="HapusDataBarang">
        </div> -->


</body>

</html>