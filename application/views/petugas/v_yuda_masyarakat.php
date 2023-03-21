<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->



    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex aling-item-center">
                <h5 class="m-0 font-weight-bold text-primary mt-2">Masyarakat</h5>

            </div>
        </div>

        <div class="card-body">
            <?= $this->session->flashdata('is_active'); ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width='1%'>No</th>
                            <th width='5%'>NIK</th>
                            <th width='20%'>Nama Lengkap</th>
                            <th width='20%'>Username</th>
                            <th width='10%'>Telepone</th>
                            <th width='10%'>Status</th>
                            <th width='10%'>Aksi</th>

                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        $count = 0;

                        foreach ($masyarakat as $m) :
                            $count = $count + 1;
                        ?>

                            <tr>
                                <td><?= $count ?></td>
                                <td><?= $m['nik']  ?></td>
                                <td><?= $m['nama_lengkap']  ?></td>
                                <td><?= $m['username']  ?></td>
                                <td><?= $m['telepon']  ?></td>
                                <td><?= $m['is_active']  ?></td>
                                <th><a class="btn btn-danger" href="<?= base_url('C_yuda_Update/petugasbanMasyarakat/') . $m['id'] ?>" onclick="return confirm('Apa anda yakin akan ban masyarakat ini?')"><i class="fa fa-lock"></i></a>
                                    <a class="btn btn-success" href="<?= base_url('C_yuda_Update/petugasaktifMasyarakat/') . $m['id'] ?>" onclick="return confirm('Apa anda yakin akan aktivasi masyarakat ini?')"><i class="fa fa-unlock"></i></a>
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
<div class="modal fade" id="tambahPetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('tambah_petugas') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama_petugas" name="nama_petugas" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control form-control-user" id="telpon" name="telpon" placeholder="Telepone">
                    </div>
                    <div class="form-group">
                        <select name="level" id="level" type="text" class="form-control form-control-user">
                            <option selected value="">-- Pilih --</option>
                            <option>admin</option>
                            <option>petugas</option>




                        </select>
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