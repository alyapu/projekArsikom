<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BatikNusantara - Blog</title>

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
<style>
    .pagination-link a {
        /* Gaya untuk tautan paginasi */
        color: blue;
        /* Ganti dengan warna yang Anda inginkan */
        text-decoration: none;
        padding: 5px 10px;
    }

    .pagination-link a:hover {
        /* Gaya saat tautan paginasi dihover */
        background-color: #f0f0f0;
        /* Ganti dengan warna yang Anda inginkan */
    }

    .pagination-link .active a {
        /* Gaya untuk tautan halaman aktif */
        background-color: blue;
        /* Ganti dengan warna yang Anda inginkan */
        color: white;
        /* Ganti dengan warna teks yang Anda inginkan */
    }
</style>

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
    <div id="page" class="s-pagewrap ss-home">


        <!-- # site header 
        ================================================== -->
        <header id="masthead" class="s-header">

            <div class="s-header__branding">
                <p class="site-title">
                    <a href="index.html" rel="home">BatikNusantara.</a>
                </p>
            </div>

            <div class="row s-header__navigation">

                <nav class="s-header__nav-wrap">

                    <h3 class="s-header__nav-heading">Navigate to</h3>

                    <ul class="s-header__nav">
                        <li class="current-menu-item"><a href="index.html" title="">Beranda</a></li>
                        <li class="has-children">
                            <a href="#0" title="" class="">Kategori</a>
                            <ul class="sub-menu">
                                <li><a href="single-standard.html">Sejarah Batik</a></li>
                                <!-- Sejarah Batik: Menyajikan informasi tentang asal-usul batik, perkembangannya dari masa ke masa, dan peran budaya serta tradisi dalam pembuatan batik. -->
                                <li><a href="<?php echo base_url('blog/gallery'); ?>">Jenis-Jenis Batik</a></li>
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
                        <li><a href="<?php echo base_url('blog/gallery'); ?>" title="">Galeri Batik</a></li>
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