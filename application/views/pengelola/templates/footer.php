<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
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
                <a class="btn btn-primary" href="<?= base_url(
                                                        'login/logout'
                                                    ) ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal tambah data -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adddataModalLabel">Pengajuan Wisata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Pengajuan'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Wisata</label>
                            <input type="text" class="form-control" name="nama" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Fitur</label>
                            <input type="text" class="form-control" name="fitur" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Informasi Wisata</label>
                            <textarea name="informasi" id="" class="form-control"></textarea>
                            <input type="hidden" name="status" value="Belum disetujui">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(
                    'assets/admin/vendor/jquery/jquery.min.js'
                ) ?>"></script>
<script src="<?= base_url(
                    'assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js'
                ) ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(
                    'assets/admin/vendor/jquery-easing/jquery.easing.min.js'
                ) ?>"></script>
<script src="<?= base_url(
                    'assets/admin/vendor/DataTables/datatables.min.js'
                ) ?>"></script>

<script src="<?= base_url(
                    'assets/admin/vendor/DataTables/DataTables-1.11.3/js/dataTables.bootstrap4.js'
                ) ?>"></script>

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({

        });

        table.buttons().container()
            .appendTo('#table2_wrapper .col-md-5:eq(0)');
    });
</script>
<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/admin/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url(
                    'assets/admin/vendor/chart.js/Chart.min.js'
                ) ?>"></script>


</body>

</html>