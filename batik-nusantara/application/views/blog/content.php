<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $blog['blog_title'] ?></title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?= base_url('vendor/batikNusantara/'); ?>css/vendor.css">
    <link rel="stylesheet" href="<?= base_url('vendor/batikNusantara/'); ?>css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header id="masthead" class="s-header">

            <div class="s-header__branding">
                <p class="site-title">
                    <a href="<?= base_url('blog/index'); ?>" rel="home">BatikNusantara.</a>
                </p>
            </div>

            <div class="row s-header__navigation">

                <nav class="s-header__nav-wrap">

                    <h3 class="s-header__nav-heading">Navigate to</h3>

                    <ul class="s-header__nav">
                        <li><a href="index.html" title="">Beranda</a></li>
                        <li class="has-children">
                            <a href="#0" title="" class="">Kategori</a>
                            <ul class="sub-menu">
                                <li><a href="single-standard.html">Sejarah Batik</a></li>
                                <!-- Sejarah Batik: Menyajikan informasi tentang asal-usul batik, perkembangannya dari masa ke masa, dan peran budaya serta tradisi dalam pembuatan batik. -->
                                <li><a href="single-standard.html">Jenis-Jenis Batik</a></li>
                                <!-- Jenis-jenis Batik: Memperkenalkan berbagai jenis batik dari berbagai daerah di Indonesia maupun dari negara lain yang memiliki tradisi batik, serta perbedaan dan karakteristik masing-masing. -->
                                <li><a href="single-standard.html">Teknik Pembuatan Batik</a></li>
                                <!-- Teknik Pembuatan Batik: Mendetailkan proses pembuatan batik secara tradisional maupun modern, termasuk teknik pewarnaan, penggunaan alat, dan bahan-bahan yang digunakan. -->
                                <li><a href="motif-batik.html">Motif Batik</a></li>
                                <!-- Motif Batik: Menyajikan beragam motif batik beserta maknanya, baik yang memiliki makna filosofis, simbolis, maupun motif-motif yang bersifat dekoratif. -->
                                <li><a href="event-batik.html">Event Batik</a></li>
                                <!-- Event dan Komunitas Batik: Informasi tentang acara-acara terkait batik seperti pameran, workshop, dan festival, serta menghubungkan penggemar batik dengan komunitas-komunitas batik di berbagai tempat. -->
                                <li><a href="berita.html">Berita</a></li>
                                <!-- Berita dan Artikel Terkini: Menyajikan berita dan artikel terbaru seputar dunia batik, termasuk perkembangan industri, kolaborasi seniman, dan peristiwa terkait batik di dalam dan luar negeri. -->
                            </ul>
                        </li>
                        <li><a href="galeri-batik.html" title="">Galeri Batik</a></li>
                        <!-- Galeri Batik adalah tempat di mana Anda dapat menampilkan koleksi gambar-gambar batik secara visual. Ini bisa menjadi galeri foto atau gambar-gambar yang menampilkan berbagai jenis batik, motif-motif yang beragam, serta contoh-contoh batik yang unik dan menarik. Galeri Batik ini dapat menjadi sarana untuk menginspirasi pengunjung dengan keindahan dan keragaman batik.

                        Sementara itu, submenu seperti "Jenis-jenis Batik" atau "Seni dan Desain Batik" cenderung lebih fokus pada penjelasan dan informasi tertulis tentang jenis-jenis batik, motif-motif yang ada, atau tren desain batik. Ini mungkin termasuk deskripsi tekstual, sejarah, atau konteks budaya di balik berbagai jenis batik dan motif.

                        Jadi, sementara Galeri Batik menampilkan batik dalam bentuk gambar-gambar, submenu yang lain memberikan informasi lebih mendalam dan kontekstual tentang berbagai aspek batik, seperti sejarah, teknik pembuatan, jenis-jenis, dan desain. -->
                    </ul> <!-- end s-header__nav -->

                </nav> <!-- end s-header__nav-wrap -->

            </div> <!-- end s-header__navigation -->

            <div class="s-header__search">

                <div class="s-header__search-inner">
                    <div class="row">

                        <form role="search" method="get" class="s-header__search-form" action="#">
                            <label>
                                <span class="u-screen-reader-text">Search for:</span>
                                <input type="search" class="s-header__search-field" placeholder="Search for..." value="" name="s" title="Search for:" autocomplete="off">
                            </label>
                            <input type="submit" class="s-header__search-submit" value="Search">
                        </form>

                        <a href="#0" title="Close Search" class="s-header__search-close">Close</a>

                    </div> <!-- end row -->
                </div> <!-- s-header__search-inner -->

            </div> <!-- end s-header__search -->

            <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
            <a class="s-header__search-trigger" href="#">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z">
                    </path>
                </svg>
            </a>

        </header> <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <div id="content" class="s-content s-content--blog">

            <div class="row entry-wrap">
                <div class="column lg-12">

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
                        return date('j', $timestamp) . ' ' . $month . ' ' . date('Y', $timestamp);
                    }
                    ?>

                    <article class="entry format-standard2">

                        <header class="entry__header">

                            <h1 class="entry__title">
                                <?= $blog['blog_title'] ?>.
                            </h1>

                            <div class="entry__meta">
                                <div class="entry__meta-author">
                                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <circle cx="12" cy="8" r="3.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.8475 19.25H17.1525C18.2944 19.25 19.174 18.2681 18.6408 17.2584C17.8563 15.7731 16.068 14 12 14C7.93201 14 6.14367 15.7731 5.35924 17.2584C4.82597 18.2681 5.70558 19.25 6.8475 19.25Z">
                                        </path>
                                    </svg>
                                    <a><?= $blog['writter']; ?></a>
                                </div>
                                <div class="entry__meta-date">
                                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="1.5">
                                        </circle>
                                        <path stroke="currentColor" stroke-width="1.5" d="M12 8V12L14 14"></path>
                                    </svg>
                                    <?php echo format_date($blog['date_post']); ?>
                                </div>
                            </div>
                        </header>


                        <div style="text-align: center;">
                            <img src="<?= base_url('assets/images/post/' . $blog['image']); ?>" style="max-height: 420px; width: auto; display: inline-block;" alt="image">
                        </div>


                        <div class="content-primary">

                            <div class="entry__content">

                                <?php
                                // Misalkan $blog['content'] berisi teks dari database
                                $content = $blog['content'];

                                // Konversi baris baru menjadi tag <br>
                                $content_with_br = nl2br($content);
                                ?>

                                <p class="drop-cap">
                                    <?= $content_with_br; ?>
                                </p>

                            </div> <!-- end entry-content -->



                        </div> <!-- end content-primary -->

                    </article> <!-- end entry -->

                    <!-- comments -->
                    <div class="comments-wrap">

                        <div class="comment-respond">

                            <!-- START respond -->
                            <div id="respond">

                                <h3>
                                    Tambahkan Komentar
                                </h3>

                                <form name="commentForm" id="commentForm" method="post" action="<?= base_url('blog/content/' . $blog['slug']); ?>" autocomplete="off">
                                    <fieldset class="row">

                                        <div class="column lg-12 message form-field">
                                            <textarea name="comment" id="comment" class="u-fullwidth" placeholder="Komentar"></textarea>
                                        </div>

                                        <div class="column lg-12">
                                            <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large u-fullwidth" value="Tambahkan Komentar" type="submit">
                                        </div>

                                    </fieldset>
                                </form> <!-- end form -->

                            </div>
                            <!-- END respond-->

                        </div> <!-- end comment-respond -->

                        <div id="comments">
                            <div class="large-12">

                                <?php if (count($comments) == 0) : ?>
                                    <h3>Belum ada komentar</h3>
                                <?php else : ?>
                                    <h3><?= count($comments); ?> Komentar</h3>
                                <?php endif; ?>

                                <!-- START commentlist -->
                                <ol class="commentlist">

                                    <?php foreach ($comments as $c) : ?>
                                        <li class="depth-1 comment">

                                            <div class="comment__avatar">
                                                <img class="avatar" src="<?= base_url('assets/'); ?>images/avatars/default.jpg" alt="" width="50" height="50">
                                            </div>

                                            <div class="comment__content">

                                                <div class="comment__info">
                                                    <div class="comment__author">Anonim</div>

                                                    <div class="comment__meta">
                                                        <div class="comment__time"><?php echo format_date($c['date_created']); ?></div>
                                                    </div>
                                                </div>

                                                <div class="comment__text">
                                                    <p><?= $c['comment']; ?></p>
                                                </div>

                                            </div>

                                        </li> <!-- end comment level 1 -->


                                    <?php endforeach; ?>

                                </ol>
                                <!-- END commentlist -->

                            </div> <!-- end col-full -->
                        </div> <!-- end comments -->

                    </div> <!-- end comments-wrap -->

                </div>
            </div> <!-- end entry-wrap -->
            </section> <!-- end s-content -->