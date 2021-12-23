<h1 class="heading"> DESTINATION </h1>

<!-- course section  -->

<section class="course">
    <?php foreach ($wisata as $wst) : ?>
        <div class="box">
            <img src="<?php echo base_url('assets/images/' . $wst['gambar']) ?>" alt="">
            <h3><?= $wst['nama_wisata'] ?></h3>
            <h4><?= $wst['lokasi'] ?></h4>
            <p><?= $wst['informasi_wisata'] ?></p>
            <a href="<?= base_url('Destination/destinasi/' . $wst['id_wisata']); ?>" class="btn">learn more</a>
            <div class="icons">
                <p> <i class="far fa-clock"></i> 2 hours </p>
                <p> <i class="far fa-calendar"></i> 6 months </p>
                <p> <i class="fas fa-book"></i> 12 modules </p>
            </div>
        </div>
    <?php endforeach; ?>
</section>