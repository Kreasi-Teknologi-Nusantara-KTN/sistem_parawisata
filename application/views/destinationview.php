

<?php foreach ([$wisata] as $wst) : ?>
    <h1 class="heading"> <?= $wst['nama_wisata'] ?> </h1>

    <!-- course section  -->
    <section class="course">
        <div class="container">
            <div class="row" style="padding-top :2.5rem">
                <div class="col-md-12">
                    <div class="img text-center">
                        <!-- /* -------------------------------------------------------------------------- */
                    /*                             gambar dari wisata                             */
                    /* -------------------------------------------------------------------------- */ -->
                        <img src="<?= base_url('assets/images/' . $wst['gambar']) ?>" width="300" alt="">
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top :5.5rem">
                <div class="col-md-8">
                    <div class="informasi" style="font-size: 16px;">
                        <!-- /* -------------------------------------------------------------------------- */
                            /*                              deskripsi wisata                              */
                            /* -------------------------------------------------------------------------- */ -->
                        <h2><Strong>Deskripsi</Strong></h2>
                        <p><?= $wst['informasi_wisata'] ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm p-3">
                        <div class="img text-center">
                            <img src="<?= base_url('assets/admin/img/undraw_profile.svg') ?>" width="120" height="120" alt="">
                        </div>
                        <br>
                        <div class="detail text-center">
                            <h2><strong><?= $wst['nama'] ?></strong></h2>
                            <h3><?= $wst['email'] ?></h3>
                            <h3><?= $wst['alamat'] ?></h3>
                            <?php $url = prep_url($wst['link']) ?>
                            <button type="button" class="btn btn-block btn-success "><a href="<?= $url; ?>" target="_blank">Live View</a></button>
                            <?php $url1 = prep_url('https://wa.me/' . $wst['kontak']) ?>
                            <button type="button" class="btn btn-block btn-success "><a href="<?= $url1; ?>">Chat</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <!-- /* -------------------------------------------------------------------------- */
                   /*                        bagian lokas/map dari wisata                        */
                   /* -------------------------------------------------------------------------- */ -->
                    <div class="title">
                        <h1>Map</h1>
                    </div>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <?php $url = prep_url($wst['map']) ?>

                            <iframe width="600" height="500" id="gmap_canvas" src="<?= $url ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                            <br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }
                            </style>
                            <a href="https://www.embedgooglemap.net"></a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 600px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
            
            

        </div>
        <div class="container" style="padding:5px;">

          <h3>Rekomendasi Wisata</h3>
          <div class="row">

            <?php foreach ($rekomendasi as $rk) : ?>
              
                <div class="col-md-4">
                
                    <div class="card" style="padding:5px;">
                        <div class="card-header">
                            <h5><?= $rk['nama_wisata'] . ', ' . $rk['lokasi'] ?></h5>
                        </div>
                        <img src="<?= base_url('assets/images/' . $rk['gambar']) ?>" class="img-thumbnail" alt="Belum Ada Gambar">
                        <p>
                            <?= $rk['informasi_wisata'] ?>
                        </p>
                        <a href="<?= base_url('Destination/recommended/' . $rk['id_wisata']); ?>" class="btn">Visit</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>    
          </div>
        </div>
    </section>
<?php endforeach; ?>


