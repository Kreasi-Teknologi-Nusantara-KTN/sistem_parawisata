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
</section>