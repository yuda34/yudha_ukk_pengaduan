<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->



    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex aling-item-center">
                <h5 class="m-0 font-weight-bold text-primary mt-2">Kategori</h5>

            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width='5%'>No</th>
                            <th width='70%'>Kategori</th>


                        </tr>
                    </thead>



                    <tbody>
                        <?php
                        $count = 0;

                        foreach ($kategori as $k) :
                            $count = $count + 1;
                        ?>
                            <tr>
                                <td><?php echo $count ?></td>
                                <td><?php echo $k['kategori']; ?></td>


                            </tr>


                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex aling-item-center">
                <h5 class="m-0 font-weight-bold text-primary mt-2">SubKategori</h5>

            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width='1%'>No</th>
                            <th width='20%'>Kategori</th>
                            <th width='20%'>SubKategori</th>
                            <th width='10%'>Aksi</th>


                        </tr>
                    </thead>



                    <tbody>
                        <?php
                        $count = 0;

                        foreach ($subkategori as $sk) :
                            $count = $count + 1;
                        ?>
                            <tr>
                                <td><?php echo $count ?></td>
                                <td><?php echo $sk['kategori']; ?></td>
                                <td><?php echo $sk['subkategori']; ?></td>

                                <th><a class="btn btn-danger" href="<?php echo base_url('C_yuda_Update/hapusPetugasSubKategori/') . $sk['id_subkategori'] ?>"><i class="fa fa-trash"></i></a> <a class="btn btn-warning" href="" data-toggle="modal" data-target="#editSubKategori<?= $sk['id_subkategori'] ?>"><i class="fa fa-edit"></i></a>
                                </th>

                            </tr>


                        <?php endforeach ?>
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
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; HARDIANSYAH CAESAR YUDHA PRATAMA<?= date('Y') ?></span>
        </div>
    </div>
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
<div class="modal fade" id="logoutModalpetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-primary" href="<?= base_url('logout_admin') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Tambah Kategori Modal -->


<!-- Modal -->
<div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('tambah_kategori') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="kategori" name="kategori" placeholder="Kategori">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">+ Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Tambah SubKategori Modal -->


<!-- Modal -->
<?php foreach ($subkategori as $sk) : ?>
    <div class="modal fade" id="editSubKategori<?= $sk["id_subkategori"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit SubKategori</h5>
                    <form action="<?php echo base_url('C_yuda_Update/editPetugasSubkategori/' . $sk["id_subkategori"]) ?>" method="post">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h6>Kategori</h6>
                        <td><input type="text" class="form-control form-control-user" id="kategori" name="kategori" value="<?= $sk['kategori'] ?>" disabled></td>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h6>Subkategori</h6>
                        <td><input type="text" class="form-control form-control-user" id="subkategori" name="subkategori" value="<?= $sk['subkategori'] ?>"></td>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>