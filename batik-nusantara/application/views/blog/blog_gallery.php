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
                    <a href="index.html" rel="home">BatikNusantara.</a>
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
                        <li class="current-menu-item"><a href=" galeri-batik.html" title="">Galeri Batik</a></li>
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
                                <input type="search" class="s-header__search-field" placeholder="Search for..." value=""
                                    name="s" title="Search for:" autocomplete="off">
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
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z">
                    </path>
                </svg>
            </a>

        </header> <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <section id="content" class="s-content">


            <!-- pageheader -->
            <div class="s-pageheader">
                <div class="row">
                    <div class="column large-12">
                        <h1 class="page-title pt-5">
                            Galeri Batik
                        </h1>
                    </div>
                </div>
            </div> <!-- end s-pageheader-->

            

            <!-- Masonry Layout -->
            <div id="bricks" class="bricks">
                <div class="masonry">
                    <div class="bricks-wrapper" data-animate-block>
                        <div class="grid-sizer"></div>
                        <?php foreach ($gallery as $g): ?>
                            <article class="brick entry" data-animate-el>
                                <div class="entry__thumb">
                                    <a href="single-standard.html" class="thumb-link" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal<?= $g['id']; ?>">
                                        <img src="<?= base_url('assets/assets/img/gallery/' . $g['gpict']); ?>" alt="<?= $g['gname']; ?>">
                                    </a>
                                </div> <!-- end entry__thumb -->
                                <div class="entry__text">
                                    <div class="entry__header">
                                        <h1 class="entry__title"><a href="single-standard.html"><?= $g['gname']; ?></a></h1>
                                    </div>
                                </div> <!-- end entry__text -->
                            </article> <!-- end article -->

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $g['id']; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel<?= $g['id']; ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= base_url('assets/assets/img/gallery/' . $g['gpict']); ?>" alt="<?= $g['gname']; ?>">
                                            <p><?= $g['gdesc']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div> <!-- end bricks-wrapper -->
                </div> <!-- end masonry -->

                <!-- Pagination (if needed) -->
                <div class="row pagination">
                    <div class="column lg-12">
                        <nav class="pgn">
                            <ul>
                                <li><a class="pgn__prev" href="#0">Prev</a></li>
                                <li><a class="pgn__num current" href="#0">1</a></li>
                                <li><span class="pgn__num ">2</span></li>
                                <li><a class="pgn__num" href="#0">3</a></li>
                                <li><a class="pgn__next" href="#0">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> 
            <!-- end bricks -->

        </section> <!-- end s-content -->


        <!-- # site-footer
        ================================================== -->
        <footer id="colophon" class="s-footer">

            <div class="row s-footer__main">

                <div class="column lg-5 md-6 tab-12 s-footer__about">
                    <h4>BatikNusantara</h4>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo
                    </p>
                </div> <!-- end s-footer__about -->

                <div class="column lg-5 md-6 tab-12">
                    <div class="row">
                        <div class="column lg-12">
                            <h4>Tautan</h4>
                            <ul class="link-list">
                                <li><a href="index.html">Beranda</a></li>
                                <li><a href="single-standard.html">Sejarah Batik</a></li>
                                <li><a href="single-standard.html">Jenis-Jenis Batik</a></li>
                                <li><a href="single-standard.html">Teknik Pembuatan Batik</a></li>
                                <li><a href="motif-batik.html">Motif Batik</a></li>
                                <li><a href="event-batik.html">Event Batik</a></li>
                                <li><a href="berita.html">Berita</a></li>
                                <li><a href="galeri-batik.html">Galeri Batik</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div> <!-- end s-footer__main -->

            <div class="row s-footer__bottom">

                <div class="column lg-7 md-6 tab-12">
                    <ul class="s-footer__social">
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z">
                                    </path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column lg-5 md-6 tab-12">
                    <div class="ss-copyright">
                        <span>© Copyright BatikNusantara 2024</span>
                    </div>
                </div>

            </div> <!-- end s-footer__bottom -->

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17.25 10.25L12 4.75L6.75 10.25" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 19.25V5.75" />
                    </svg>
                </a>
            </div> <!-- end ss-go-top -->

        </footer><!-- end s-footer -->


        <!-- Java Script
    ================================================== -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

</body>

</html>