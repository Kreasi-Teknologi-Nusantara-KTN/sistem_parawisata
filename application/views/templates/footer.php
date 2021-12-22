<a href="#" class="float">
    <i class="fa fa-envelope my-float"></i>
</a>
<div class="label-container">
    <div class="label-text">Chat</div>
    <i class="fa fa-play label-arrow"></i>
</div>
<!-- footer section  -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, maxime!</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="home.html">home</a>
            <a href="destination.html">destination</a>
            <a href="login.html">login</a>
        </div>
        <div class="box">
            <h3>contact us</h3>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
            <p> <i class="fas fa-envelope"></i> abc@gmail.com </p>
            <p> <i class="fas fa-map-marker-alt"></i> Indonesia </p>
        </div>
    </div>
    <div class="credit"> all rights reserved </div>
</section>
</div>
<!-- Modal tambah data -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="font-size: 1.5rem;">
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
<!-- custom js file link -->
<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>