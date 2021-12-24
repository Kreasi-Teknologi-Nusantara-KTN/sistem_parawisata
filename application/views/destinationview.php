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
                            <button type="button" class="btn btn-block btn-success "><a href="">Live View</a></button>
                            <button type="button" class="btn btn-block btn-success "><a href="">Chat</a></button>
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
                    <div class="map">
                        <?php $url = prep_url("//www.facebook.com"); ?>
                        <iframe width="480" heigth="320" class="embed-responsive-item" src="<?= ($url) ?>" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php endforeach; ?>