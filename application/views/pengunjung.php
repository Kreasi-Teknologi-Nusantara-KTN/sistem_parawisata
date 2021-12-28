<!-- home section  -->
<section class="home">
    <?= $this->session->flashdata('message') ?>
    <div class="content">
        <h3>HOLIDAY FOR HOLIYAY</h3>
        <p>Its time for holiday, with better day</p>
        <a href="<?= base_url() ?>destination/pengunjung" class="btn">get started</a>
    </div>
    <div class="image">
        <img src="<?= base_url('assets/images/webview.svg') ?>" alt="">
    </div>

    <style>
        p {
            font-size: 16px;
        }

        h3 {
            font-size: 20px;
        }

        img .img-thumbnail {
            display: block;
            max-width: 200px;
            max-height: 200px;
            width: auto;
            height: auto;

        }
    </style>
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
                        <a href="<?= base_url('Destination/recommended1/' . $rk['id_wisata']); ?>" class="btn">Visit</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>