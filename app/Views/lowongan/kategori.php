<?= $this->extend('layout/app.php') ?>

<?= $this->section('content') ?>
<section class="site-section">
    <div class="container">

        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2"><?= $jumlahKategoriLoker ?> Job <?= $nama ?></h2>
            </div>
        </div>

        <ul class="job-listings mb-5">
            <?php foreach ($kategoriLoker as $lowongan): ?>
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="<?= url_to('detail.lowongan', $lowongan->id) ?>"></a>
                    <div class="job-listing-logo">
                        <img src="<?= base_url() . "assets/" . $lowongan->gambar_instansi ?>" alt="Job Logo"
                            alt="Free Website Template by Free-Template.co" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2><?= $lowongan->judul ?></h2>
                            <strong><?= $lowongan->nama_instansi ?></strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span><?= $lowongan->lokasi ?>
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-danger"><?= $lowongan->type_lowongan ?></span>
                        </div>
                    </div>

                </li>
            <?php endforeach ?>
        </ul>



    </div>
</section>
<?= $this->endsection() ?>