<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-8 col-md-6 mb-4">
            <div class="row d-flex align-items-center h-100">
                <div class="col-8">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-3">Profile
                            </div>
                            <div class="d-flex text-black">

                                <div class="flex-shrink-0 mr-4 mt-2">
                                    <img src="<?= base_url('assets/img/undraw_profile.svg') ?>" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;" />
                                </div><br>
                                <div class="flex-grow-1 ms-4 mt-2">
                                    <div class="col-md-12">
                                        <h6>NIK</h6>
                                        <div class="form-control mb-3">

                                            <?= $masyarakat['nik'] ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h6>Nama User</h6>
                                        <div class="form-control mb-3">

                                            <?= $masyarakat['nama_lengkap'] ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="ml-auto btn btn-outline-primary" href="" data-toggle="modal" data-target="#editProfile<?= $masyarakat["id"] ?>">

                                            Edit Profile
                                        </button>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-4 mt-2">

                                    <div class="col-md-12">
                                        <h6>Username</h6>
                                        <div class="form-control mb-3">

                                            <?= $masyarakat['username'] ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h6>Telepone</h6>
                                        <div class="form-control mb-3">

                                            <?= $masyarakat['telepon'] ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="ml-auto btn btn-outline-danger" href="" data-toggle="modal" data-target="#resetPassword<?= $masyarakat["id"] ?>">
                                            Reset Password
                                        </button>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
<div class="modal fade" id="logoutModalmasyarakat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-primary" href="<?= base_url('logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editProfile<?= $masyarakat["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Your Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('C_yuda_Update/editProfile/'. $masyarakat["nik"]) ?>" method="post" >
                <div class="pt-3 pl-3 pr-3 pb-3">



                    <div class="mb-3">
                        <h6>NIK</h6>
                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $masyarakat['nik'] ?>" readonly>
                    </div>
                    <div class="mb-3 ">
                        <h6>Nama</h6>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $masyarakat['nama_lengkap'] ?>">
                    </div>
                    <div class="mb-3">
                        <h6>Username</h6>
                        <input class="form-control" id="username" name="username" value="<?= $masyarakat['username'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <h6>Telepone</h6>
                        <input class="form-control" id="telepon" name="telepon" value="<?= $masyarakat['telepon'] ?>">
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="resetPassword<?= $masyarakat["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('C_yuda_Update/resetPassword/'. $masyarakat["nik"]) ?>" method="post" >
                <div class="pt-3 pl-3 pr-3 pb-3">

                    <div class="mb-3">
                        <h6>New Password</h6>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>