<!-- home section  -->
<section class="home">
    <?= $this->session->flashdata('message') ?>
    <div class="content">
        <h3>HOLIDAY FOR HOLIYAY</h3>
        <p>Its time for holiday, with better day</p>
        <a href="<?= base_url() ?>destination" class="btn">get started</a>
    </div>
    <div class="image">
        <img src="<?= base_url('assets/images/webview.svg') ?>" alt="">
    </div>
    <div class="container">
        <h3>Rekomendasi Wisata</h3>
        <div class="row">
            <?php foreach ($rekomendasi as $rk) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5><?= $rk['nama_wisata'] . ', ' . $rk['lokasi'] ?></h5>
                        </div>
                        <img src="<?= base_url('assets/images/' . $rk['gambar']) ?>" width="100px" height="100px" alt="Belum Ada Gambar">
                        <p>
                            <?= $rk['informasi_wisata'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>