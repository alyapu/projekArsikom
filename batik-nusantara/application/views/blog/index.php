<!-- # site-content
        ================================================== -->
<section id="content" class="s-content">


    <!-- hero -->
    <div class="hero">

        <div class="hero__slider swiper-container">

            <div class="swiper-wrapper">
                <article class="hero__slide swiper-slide">
                    <div class="hero__entry-image" style="background-image: url('<?= base_url('vendor/batikNusantara/images/thumbs/featured/featured-04_2000.jpg'); ?>');"></div>
                    <div class="hero__entry-text">
                        <div class="hero__entry-text-inner">
                            <div class="hero__entry-meta">
                                <span class="cat-links">
                                    <a href="single-standard.html">Sejarah Batik</a>
                                </span>
                            </div>
                            <h2 class="hero__entry-title">
                                <a href="single-standard.html">
                                    Sejarah dan Perkembangan Batik di Indonesia.
                                </a>
                            </h2>
                            <p class="hero__entry-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud corporis est laudantium voluptatum consectetur adipiscing.
                            </p>
                            <a class="hero__more-link" href="single-standard.html">Read More</a>
                        </div>
                    </div>
                </article>
                <article class="hero__slide swiper-slide">
                    <div class="hero__entry-image" style="background-image: url('images/thumbs/featured/featured-02_2000.jpg');"></div>
                    <div class="hero__entry-text">
                        <div class="hero__entry-text-inner">
                            <div class="hero__entry-meta">
                                <span class="cat-links">
                                    <a href="galeri-batik.html">Jenis-Jenis Batik</a>
                                </span>
                            </div>
                            <h2 class="hero__entry-title">
                                <a href="single-standard.html">
                                    Jenis-Jenis Batik dan Pembuatannya.
                                </a>
                            </h2>
                            <p class="hero__entry-desc">
                                Voluptas harum sequi rerum quasi quisquam. Est tenetur ut doloribus in aliquid
                                animi nostrum. Tempora
                                quibusdam ad nulla. Quis autem possimus dolores est est fugiat saepe vel aut.
                                Earum consequatur.
                            </p>
                            <a class="hero__more-link" href="single-standard.html">Read More</a>
                        </div>
                    </div>
                </article>
                <article class="hero__slide swiper-slide">
                    <div class="hero__entry-image" style="background-image: url('images/thumbs/featured/featured-03_2000.jpg');"></div>
                    <div class="hero__entry-text">
                        <div class="hero__entry-text-inner">
                            <div class="hero__entry-meta">
                                <span class="cat-links">
                                    <a href="galeri-batik.html">Lifestyle</a>
                                </span>
                            </div>
                            <h2 class="hero__entry-title">
                                <a href="single-standard.html">
                                    Six Relaxation Techniques to Reduce Stress.
                                </a>
                            </h2>
                            <p class="hero__entry-desc">
                                Quasi consequatur quia excepturi ullam velit. Repellat velit vel occaecati neque
                                perspiciatis quibusdam nulla.
                                Unde et earum. Nostrum nulla optio debitis odio modi. Quis autem possimus
                                dolores est est fugiat saepe vel aut.
                            </p>
                            <a class="hero__more-link" href="single-standard.html">Read More</a>
                        </div>
                    </div>
                </article>
            </div> <!-- swiper-wrapper -->

            <div class="swiper-pagination"></div>

        </div> <!-- end hero slider -->

        <a href="#bricks" class="hero__scroll-down smoothscroll">
            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></path>
            </svg>
            <span>Scroll</span>
        </a>

    </div> <!-- end hero -->


    <!--  masonry -->
    <div id="bricks" class="bricks">

        <div class="masonry">

            <div class="bricks-wrapper" data-animate-block>

                <div class="grid-sizer"></div>


                <?php
                $i = 1;
                function format_date($timestamp)
                {
                    date_default_timezone_set('Asia/Jakarta');
                    $days_in_indonesian = array(
                        'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'
                    );

                    $months_in_indonesian = array(
                        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                    );

                    $day = $days_in_indonesian[date('w', $timestamp)];
                    $month = $months_in_indonesian[date('n', $timestamp) - 1];

                    return $day . ', ' . date('j', $timestamp) . ' ' . $month . ' ' . date('Y, H:i', $timestamp) . ' WIB';
                }

                ?>

                <?php foreach ($blog as $b) : ?>
                    <article class="brick entry" data-animate-el>

                        <div class="entry__thumb" style="height: 250px; overflow: hidden;">
                            <a href="<?= base_url('blog/content/' . $b['slug']); ?>" class="thumb-link" style="display: block; height: 100%;">
                                <img src="<?= base_url('assets/images/post/' . $b['image']); ?>" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                            </a>
                        </div> <!-- end entry__thumb -->


                        <div class="entry__text">
                            <div class="entry__header">
                                <div class="entry__meta">
                                    <span class="byline">
                                        <a href="#0"><?php echo format_date($b['date_post']); ?></a>
                                    </span>
                                </div>
                                <h1 class="entry__title"><a href="<?= base_url('blog/content/' . $b['slug']); ?>"><?= $b['blog_title']; ?>.</a></h1>
                            </div>
                            <div class="entry__excerpt">
                                <p><a href="<?= base_url('blog/content/' . $b['slug']); ?>" style="color: black"><?= $b['preview']; ?>...</a>
                                </p>
                            </div>
                            <a class="entry__more-link" href="<?= base_url('blog/content/' . $b['slug']); ?>">Read More</a>
                        </div> <!-- end entry__text -->

                    </article> <!-- end article -->
                <?php endforeach; ?>


            </div> <!-- end bricks-wrapper -->

        </div> <!-- end masonry-->


        <!-- pagination -->
        <div class="row pagination">
            <div class="column lg-12">
                <nav class="pgn">
                    <ul>
                        <?= $pagination; ?>
                    </ul>
                </nav> <!-- end pgn -->
            </div> <!-- end column -->
        </div> <!-- end pagination -->

    </div> <!-- end bricks -->

</section> <!-- end s-content -->