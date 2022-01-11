

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
                            <button type="button" class="btn btn-block btn-success "><a href="" data-toggle="modal" data-target="#liveView" target="_blank">Live View</a></button>

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




            <!-- Modal tambah data -->
<div class="modal fade" id="liveView" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="liveView">Live View Wisata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="live">
                        <div class="live_canvas">
                            <?php $url = prep_url($wst['link']) ?>
                            
                            <iframe class="responsive-iframe" width="1120" height="500" id="live_canvas" src="<?= $url ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" ><style>
                            img{widht : 640px; height : 320px;}
                              </style>
                            </iframe>
                            <br>
                            <style>
                                /* .live {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 1120px;
                                } */
                            </style>
                            <a href="https://www.embedgooglemap.net"></a>
                            <style>
                                .live_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 1920px;
                                }
                            </style>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        
                    </div>
                
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
                        <img src="<?= base_url('assets/images/' . $rk['gambar']) ?>" width="280px" height="290px" alt="Belum Ada Gambar">
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



</div>
        