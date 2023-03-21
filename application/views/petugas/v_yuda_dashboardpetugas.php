       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->

           <div class="row">

               <!-- Earnings (Monthly) Card Example -->
               <div class="col-xl-4 col-md-6 mb-4">
                   <div class="card border-left-primary shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                       Data Laporan</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengaduan ?></div>
                               </div>
                               <div class="col-auto">

                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Earnings (Monthly) Card Example -->
               <div class="col-xl-4 col-md-6 mb-4">
                   <div class="card border-left-warning shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                       Data Proses</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $proses ?></div>
                               </div>
                               <div class="col-auto">

                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Earnings (Monthly) Card Example -->
               <div class="col-xl-4 col-md-6 mb-4">
                   <div class="card border-left-success shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Selesai
                                   </div>
                                   <div class="row no-gutters align-items-center">
                                       <div class="col-auto">
                                           <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $selesai ?></div>
                                       </div>

                                   </div>
                               </div>
                               <div class="col-auto">

                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               


           </div>
           <div class="row">
               <div class="col-xl-6 mb-4">

                   <div class="col-12">
                       <div class="card" style="border-radius: 15px;">
                           <div class="card-body p-4">
                               <div class="text-xs font-weight-bold text-info text-uppercase mb-3">Profile <?= $petugas['level'] ?>
                               </div>

                               <div class="flex-shrink-0 mr-4 mt-4">
                                   <img src="<?= base_url('assets/img/undraw_profile.svg') ?>" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;" />
                               </div><br>
                               <div class="d-flex text-black">


                                   <div class="flex-grow-1 ms-4">
                                       <div class="col-md-10">
                                           <h6>Nama Petugas</h6>
                                           <div class="form-control mb-3">

                                               <?= $petugas['nama_petugas'] ?>
                                           </div>
                                       </div>
                                       <div class="col-md-10">
                                           <h6>Status</h6>
                                           <div class="form-control mb-3">

                                               <?= $petugas['level'] ?>
                                           </div>
                                       </div>
                                       <div class="col-md-10">
                                           <h6>Telephone</h6>
                                           <div class="form-control mb-3">

                                               <?= $petugas['telpon'] ?>
                                           </div>
                                       </div>




                                   </div>

                               </div>
                           </div>
                       </div>
                   </div>

               </div>

               <div class="col-xl-6 mb-4">

                   <div class="col-12">
                       <div class="card" style="border-radius: 15px;">
                           <div class="card-body p-4">
                               <div class="text-xs font-weight-bold text-info text-uppercase mb-3">Info Aplikasi
                               </div>
                               <div class="text-black">

                                   <h6>Nama Aplikasi &nbsp; : Aplikasi Pengaduan Masyarakat </h6>
                                   <hr>
                                   <h6>Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Beta</h6>
                                   <hr>
                                   <h6>Pembuat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp; : Hardiansyah</h6>

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