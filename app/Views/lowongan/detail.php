<?= $this->extend('layout/app.php') ?>

<?= $this->section('content') ?>
<!-- HOME -->
<section class="section-hero overlay inner-page bg-image"
    style="background-image: url('<?= base_url() ?>/assets/images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-white font-weight-bold"><?= $lowongan['judul'] ?></h1>
                <div class="custom-breadcrumbs">
                    <a href="#">Home</a> <span class="mx-2 slash">/</span>
                    <a href="#">Job</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong><?= $lowongan['judul'] ?></strong></span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="site-section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex align-items-center">
                    <div class="border p-2 d-inline-block mr-3 rounded">
                        <img src="<?= base_url() ?>/assets/<?= $lowongan['gambar_instansi'] ?>" alt="Image">
                    </div>
                    <div>
                        <h2>Product Designer</h2>
                        <div>
                            <span class="ml-0 mr-2 mb-2"><span
                                    class="icon-briefcase mr-2"></span><?= $lowongan['nama_instansi'] ?></span>
                            <span class="m-2"><span class="icon-room mr-2"></span><?= $lowongan['lokasi'] ?></span>
                            <span class="m-2"><span class="icon-clock-o mr-2"></span><span
                                    class="text-primary"><?= $lowongan['type_lowongan'] ?></span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <figure class="mb-5"><img src="<?= base_url() ?>/assets/images/job_single_img_1.jpg" alt="Image"
                                class="img-fluid rounded"></figure>
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                                class="icon-align-left mr-3"></span>Job Description</h3>
                        <p><?= $lowongan['lowongan_keterangan'] ?></p>
                    </div>
                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                                class="icon-rocket mr-3"></span>Responsibilities</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span><?= $lowongan['tanggung_jawab'] ?></span>
                            </li>

                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                                class="icon-book mr-3"></span>Education + Experience</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span><?= $lowongan['pendidikan_pengalaman'] ?></span>
                            </li>

                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                                class="icon-turned_in mr-3"></span>Other Benifits</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span><?= $lowongan['manfaat_lainnya'] ?></span>
                            </li>

                        </ul>
                    </div>

                    <div class="row mb-5">
                        <div class="col-6">
                            <button class="btn btn-block btn-light btn-md"><i class="icon-heart"></i>Save Job</button>
                            <!--add text-danger to it to make it read-->
                        </div>
                        <div class="col-6">
                            <button class="btn btn-block btn-primary btn-md">Apply Now</button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="bg-light p-3 border rounded mb-4">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                        <ul class="list-unstyled pl-3 mb-0">
                            <li class="mb-2"><strong class="text-black">Published on:</strong>
                                <?= $lowongan['publis_aktif'] ?></li>
                            <li class="mb-2"><strong class="text-black">Vacancy:</strong> <?= $lowongan['lowongan'] ?>
                            </li>
                            <li class="mb-2"><strong class="text-black">Employment Status:</strong>
                                <?= $lowongan['type_lowongan'] ?></li>
                            <li class="mb-2"><strong class="text-black">Experience:</strong>
                                <?= $lowongan['pengalaman'] ?></li>
                            <li class="mb-2"><strong class="text-black">Job Location:</strong>
                                <?= $lowongan['lokasi'] ?></li>
                            <li class="mb-2"><strong class="text-black">Salary:</strong> <?= $lowongan['gaji'] ?></li>
                            <li class="mb-2"><strong class="text-black">Gender:</strong> <?= $lowongan['jk'] ?></li>
                            <li class="mb-2"><strong class="text-black">Application Deadline:</strong>
                                <?= $lowongan['lowongan_selesai'] ?>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-light p-3 border rounded">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                        <div class="px-3">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url('lowongan/detail/') . $lowongan['id'] ?><&quote=<?= $lowongan['judul'] ?><"
                                class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://twitter.com/intent/tweet?text=<?= $lowongan['judul'] ?><&url=<?= base_url('lowongan/detail/') . $lowongan['id'] ?>"
                                class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= base_url('lowongan/detail/') . $lowongan['id'] ?>"
                                class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>

                    <div class="bg-light p-3 border rounded mb-4 mt-3">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Kategori</h3>
                        <ul class="list-unstyled pl-3 mb-0">
                            <?php foreach ($kategoris as $kategori): ?>
                                <li class="mb-2"><a href="<?= url_to('kategori.lowongan', $kategori['nama']) ?>"><strong
                                            class="text-black">
                                            <?= $kategori['nama'] ?></strong></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
</section>

<section class="site-section" id="next">
    <div class="container">

        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2"><?= $jumlahRekomLokers ?> Related Jobs</h2>
            </div>
        </div>

        <ul class="job-listings mb-5">
            <?php foreach ($rekomLokers as $value): ?>
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="<?= url_to('detail.lowongan', $value->id) ?>"></a>
                    <div class="job-listing-logo">
                        <img src="<?= base_url() ?>/assets/<?= $value->gambar_instansi ?>" alt="Image" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2><?= $value->judul ?>r</h2>
                            <strong><?= $value->nama_instansi ?></strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span><?= $value->lokasi ?>
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-danger"><?= $value->type_lowongan ?></span>
                        </div>
                    </div>

                </li>
            <?php endforeach; ?>




        </ul>



    </div>
</section>


<section class="bg-light pt-5 testimony-full">

    <div class="owl-carousel single-carousel">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center text-lg-left">
                    <blockquote>
                        <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero
                            dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum
                            repudiandae.&rdquo;</p>
                        <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
                    </blockquote>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-right">
                    <img src="<?= base_url() ?>/assets/images/person_transparent_2.png" alt="Image"
                        class="img-fluid mb-0">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center text-lg-left">
                    <blockquote>
                        <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero
                            dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum
                            repudiandae.&rdquo;</p>
                        <p><cite> &mdash; Chris Peters, @Google</cite></p>
                    </blockquote>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-right">
                    <img src="<?= base_url() ?>/assets/images/person_transparent.png" alt="Image"
                        class="img-fluid mb-0">
                </div>
            </div>
        </div>

    </div>

</section>

<section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
                <h2 class="text-white">Get The Mobile Apps</h2>
                <p class="mb-5 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci
                    impedit.</p>
                <p class="mb-0">
                    <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-apple mr-3"></span>App
                        Store</a>
                    <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span
                            class="icon-android mr-3"></span>Play Store</a>
                </p>
            </div>
            <div class="col-md-6 ml-auto align-self-end">
                <img src="<?= base_url() ?>/assets/images/apps.png" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<?= $this->endsection() ?>