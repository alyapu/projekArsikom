-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 04:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batik_nusantara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(256) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `preview` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `writter` varchar(128) NOT NULL,
  `date_post` int(11) DEFAULT NULL,
  `date_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `slug`, `preview`, `content`, `image`, `writter`, `date_post`, `date_edit`) VALUES
(18, 'Kejari Palembang Kembali Tetapkan 1 Tersangka Baru Korupsi Batik Perangkat Desa', 'kejari-palembang-kembali-tetapkan-1-tersangka-baru-korupsi-batik-perangkat-desa', 'Kejaksaan Negeri (Kejari) Palembang kembali menetapkan satu tersangka baru terlibat kasus dugaan korupsi pengadaan bahan pakaian batik', 'Palembang - Kejaksaan Negeri (Kejari) Palembang kembali menetapkan satu tersangka baru terlibat kasus dugaan korupsi pengadaan bahan pakaian batik perangkat desa di Dinas Pemberdayaan Masyarakat (PMD) tahun 2021. Tersangka yakni berinisial PP yang merupakan oknum Aparatur Sipil Negara (ASN) Pemprov Sumatera Selatan.\r\n\r\nKasi Penyidikan Bidang Tindak Pidana Khusus Kejari Palembang, Ario Apriyanto Gopar mengatakan PP ditetapkan tersangka berdasarkan hasil pengembangan penyidikan.\r\n\r\n&quot;Ya penyidik tindak pidana khusus Kejaksaan Negeri Palembang menetapkan satu orang tersangka baru sehubungan dari hasil pengembangan penyidikan dalam perkara dugaan tindak pidana korupsi, pengadaan bahan baju batik perangkat desa Dinas Pemberdayaan Masyarakat Desa Pemprov Sumsel tahun anggaran 2021,&quot; katanya kepada awak media, Rabu (24/4/2024).\r\n\r\nArio menjelaskan tersangka PP merupakan pejabat pembuat komitmen (PPK) dalam pengadaan bahan pakaian batik perangkat desa di PMD 2021 dengan nilai kontrak pengadaan batik tersebut yakni Rp 2.559.783.600.\r\n\r\n&quot;Setelah ditemukan alat bukti yang kuat, status PP yang merupakan PPK dalam pengadaan bahan pakaian batik tersebut, kita tetapkan tersangka dan langsung dilakukan penahanan selama 20 hari ke depan di Rutan Tipikor Pakjo Palembang guna penyidikan lebih lanjut,&quot; ungkapnya\r\n\r\nArio mengatakan sebelum menetapak PP sebagai tersangka, pihaknya sudah lebih dulu menetapkan 2 tersangka lain yakni JN yang merupakan sub kontraktor dari pihak pelaksana pengadaan, dan AS merupakan Ketua PPDI Sumatera Selatan periode 2020-2025.\r\n\r\n&quot;Jadi kasus perkara dugaan korupsi pengadaan bahan pakaian batik perangkat desa sudah ada 3 tersangka yang merugikan negara sebesar Rp 883 juta,&quot; jelasnya.\r\n\r\nSaat ini, kata dia, tim penyidik Kejari Palembang masih mendalami alat bukti keterlibatan pihak-pihak lain yang dapat diminta pertanggungjawaban pidananya.\r\n\r\n&quot;Serta akan segera melakukan tindakan hukum lainnya, seperti penggeledahan, penyitaan aset-aset yang diduga kuat diperoleh dari hasil tindak pidana korupsi pada perkara ini,&quot; tegasnya.\r\n\r\nAtas perbuatannya, para tersangka ini dikenakan Pasal 2 Ayat (1) Jo Pasal 18 Undang-undang Republik Indonesia Nomor 31 Tahun 1999 tentang Pemberantasan Tindak Pidana Korupsi sebagaimana telah diubah dan ditambah dengan Undang-undang Republik Indonesia Nomor 20 Tahun 2001 tentang Pemberantasan Tindak Pidana Korupsi jo Pasal 55 Ayat (1) ke-1 KUHPidana', 'kejari-palembang-kembali-menetapkan-1-tersangka-baru-kasus-korupsi-batik-perangkat-desa_169.jpeg', 'admin', 1716692276, 1716692276),
(19, 'Pemkab Serang Ajak Puluhan Warga Latihan Membatik di Bandung', 'pemkab-serang-ajak-puluhan-warga-latihan-membatik-di-bandung', 'Dinas Koperasi UMKM Perindustrian dan Perdagangan (Diskoumperindag) Pemkab Serang kembali melatih puluhan warga untuk memiliki keahlian membatik', 'Jakarta - Dinas Koperasi UMKM Perindustrian dan Perdagangan (Diskoumperindag) Pemkab Serang kembali melatih puluhan warga untuk memiliki keahlian membatik. Program yang sudah berjalan tiga tahun ini bekerja sama dengan Rumah Batik Komar, Bandung, Jawa Barat.\r\n\r\n&quot;Alhamdulillah, kami jajaran Pemkab Serang dengan masyarakat perajin kembali hadir di Rumah Batik komar. Sudah sejak tiga tahun lalu kami memulai, dalam rangka melatih masyarakat agar bisa membatik,&quot; ujar Bupati Serang Ratu Tatu Chasanah dalam keterangan tertulis, Selasa (30/4/2024).\r\n\r\nSetiap perajin dilatih dengan tingkatan yang berbeda, mulai dari dasar, menengah, dan rumit. Meskipun begitu, Tatu bangga karena warga memiliki kemauan yang besar dalam pelatihan ini.\r\n\r\n&quot;Ke depan mudah-mudahan punya batik yang semakin bagus dan luar biasa. Kami bangga dengan upaya masyarakat dan kemauan yang kuat untuk mau dilatih membatik,&quot; tambahnya.\r\n\r\nSebagai informasi, total ada 12 motif batik khas Kabupaten Serang yang diciptakan melalui penelitian dengan melihat seni budaya, serta kearifan lokal. Adapun ke-12 motif hasil kerja sama dengan Rumah Batik Komar di antaranya motif Bandung Pamarayan &amp; Padi, Gandaria, dan Gerabah Bumijaya.\r\n\r\nKemudian ada motif Karang Bolong, Mercusuar Cikoneng, Burung Paok Pancawarna &amp; Jamblang, Pencak Silat &amp; Golok, Pulau Sangiang, Rawa Danau &amp; Elang Jawa, Buah Jamblang, Wisata Bahari Pulau Tunda, serta Pencak Silat &amp; Ornamen Gerabah. Sejumlah motif batik dari hasil penelitian tersebut sudah dibuat buku.\r\n\r\nMenurut Tatu, pengembangan batik khas Kabupaten Serang tidak hanya untuk melestarikan budaya Indonesia yang sudah diakui UNESCO. Pengembangan batik juga bisa menjadi sumber penghasilan ekonomi masyarakat.\r\n\r\n&quot;Rasanya dari sisi ekonomi tidak akan habis oleh waktu, karena batik selain seni, juga kebutuhan sandang yang bisa digunakan setiap waktu,&quot; ujarnya.\r\n\r\nTahun ini, ada 20 warga dari 7 kecamatan yang dilatih di Rumah Batik Komar. Diharapkan, para warga yang dilatih bisa menularkan kemampuannya kepada warga lain.\r\n\r\n&quot;Membuat batik memang bukan hal yang mudah, tapi jika keinginan kuat, Insyaallah menghasilkan yang kita inginkan,&quot; ujar Tatu.\r\n\r\nSementara itu, Owner Rumah Batik Komar yang juga Ketua Asosiasi Perajin dan Pengusaha Batik Indonesia (APPBI) Komarudin Kudiya berharap para perajin batik Kabupaten Serang terus meningkatkan kemampuan agar bisa bersaing di kancah nasional.\r\n\r\n&quot;Kami yakin, dengan dukungan Ibu Bupati, dan kemauan dari masyarakat, perajin bisa bersaing di kancah nasional dan semakin menghasilkan batik berkualitas,&quot; pungkas Komarudin.', 'pemkab-serang_169.jpeg', 'admin', 1716692561, 1716692561),
(20, 'Ikut Workshop Batik Lukis di Batik Seno Painting, Yuk!', 'ikut-workshop-batik-lukis-di-batik-seno-painting-yuk', 'Traveler bisa menjajal membatik di Batik Seno Painting. Seru dan menegangkan, tetapi juga menyenangkan dan menenangkan!', 'Yogyakarta - Traveler bisa menjajal membatik di Batik Seno Painting. Seru dan menegangkan, tetapi juga menyenangkan dan menenangkan!\r\nTidak melulu wisata alam, Jogja juga menggaet wisatawan dengan budayanya yang kental. Salah satunya adalah batik.\r\n\r\nBatik biasanya dikenal dalam wujud fashion atau pakaian. Namun, ternyata ada satu produk unik yang masih jarang orang ketahui yaitu lukisan batik.\r\n\r\nBatik Seno berdiri sebagai galeri batik lukis terbesar di Jogja sejak tahun 1979. Kini, mereka telah berkiprah sebagai rumah produksi bagi belasan pelukis batik sekaligus galeri seni yang bisa dikunjungi oleh wisatawan.\r\n\r\n&quot;Membatik itu bukan sekadar melukis atau menggambar, tapi tentang ketenangan hati dan pikiran. Jadi kalau membatik harus benar-benar rileks, harus sabar, santai, fokus. Kalau dalam kondisi emosi misal sedang marah atau terlalu senang, biasanya tidak akan berhasil. Itu akan mempengaruhi konsistensi garis. Makanya orang membatik cenderung diam,&quot; kata Melinda, pemilik Batik Seno, saat ditemui detikTravel di galerinya.\r\n\r\nFilosofi tersebut yang akhirnya membawa Melinda membuka adanya kelas workshop bagi wisatawan yang berminat belajar langsung. Selain melestarikan budaya bangsa, Melinda ingin mengajak wisatawan mencari ketenangan batin lewat seni lukis batik.\r\n\r\nMelinda juga berharap melalui workshop pembeli semakin paham value yang dimiliki oleh batik. Alasan mengapa harga batik cenderung mahal akan terjawab melalui setiap proses yang dilalui. Dari situ akhirnya wisatawan lebih menghargai batik sebagai warisan budaya Indonesia.\r\n\r\nBerlokasi di Mantrijeron MJ 3/ 801, Kota Yogyakarta, Batik Seno dekat dengan kampung turis Prawirotaman. Menuju lokasi ini sangat mudah, dari Stasiun Tugu hanya butuh waktu sekitar 15 menit perjalanan dengan motor.\r\n\r\n&quot;Tamu yang datang tidak ditarik HTM, kami jelaskan, tidak beli juga tidak apa-apa. Cuma kalau untuk rombongan sekolah kami agak membatasi, terutama untuk musim ramai, karena ga cukup tempatnya,&quot; kata Melinda.\r\n\r\nTidak perlu takut dan sungkan jika hanya ingin berkunjung dan melihat secara langsung proses produksi batik lukis. Namun, sangat disayangkan bukan jika tidak merasakan langsung pengalaman mencipta karya lukis batik milik sendiri?\r\n\r\n&quot;Untuk workshop mulai 75k-300k. Tapi tidak harus diselesaikan dalam sehari, bisa berangsur. Harganya sama untuk penyelesaian sehari, tiga hari, bahkan sebulan,&quot; kata Melinda\r\n\r\nWorkshop batik lukis di Batik Seno terbuka untuk umum di hari Senin hingga Sabtu, dan membutuhkan reservasi jika ingin datang di Hari Minggu. Harga workshop mulai dari Rp 75.000 hingga Rp 300.000 dengan penawaran gratis kain lukis, properti membatik, juga minuman.', 'workshop-batik-lukis-di-batik-seno-painting-yogyakarta_169.jpeg', 'admin', 1716693678, 1716693678),
(21, 'Obin, Si Tukang Kain yang Tak Peduli Tren Tapi Prestasinya Mendunia', 'obin-si-tukang-kain-yang-tak-peduli-tren-tapi-prestasinya-mendunia', 'Bagi mereka yang suka menilai seseorang dari penampilan, mungkin sulit menerima bahwa sosok satu ini', 'Jakarta - Bagi mereka yang suka menilai seseorang dari penampilan, mungkin sulit menerima bahwa sosok satu ini adalah perancang ternama Indonesia. Apalagi ia berpredikat \'Harta Karun Nasional\'. Begitulah Obin, perempuan yang tidak neko-neko tapi karya dan prestasinya mendapat pengakuan dunia.\r\n\r\nJosephine Werratie Komara, demikian nama lengkapnya, hanya memakai kebaya putih polos tanpa hiasan brokat atau payet heboh. Bawahannya kain batik sogan motif anak parang nuansa sogan (kecoklatan) dipadu sepasang sepatu chelsea boots senada.\r\n\r\n&quot;Banyak teman-teman dekat yang bilang ke saya, \'kamu tuh nggak kayak desainer, lebih mirip mbok-mbok deh\',&quot; ungkap Obin saat ditemui Wolipop seusai acara peluncuran koleksi terbaru BINhouse dan One Fine Sky di Jakarta Selatan belum lama ini.\r\n\r\nDalam berkarya pun, Obin apa adanya. Sejak mendirikan BINhouse pada akhir 1970-an, Obin setia mengangkat keindahan kain-kain tradisional Indonesia.\r\n\r\nTak sekadar melestarikan, ia pun berinovasi. Tidak pernah ada kain tenun yang dibatik jika bukan berkat Obin.\r\n\r\nKaryanya tidak pernah neko-neko dengan segala pernak-pernik yang berkilauan. Cukup dengan keindahan motif batiknya serta kombinasi warna, berpadu sentuhan kontemporer pada siluet kebaya yang makin memancarkan aura anggun pemakainya, buah karya Obin dan perajinnya sudah menawarkan daya tarik tersendiri.\r\n\r\n&quot;Saya selalu membuat sesuatu yang memang ingin saya pakai. Tidak pernah peduli dengan tren,&quot; kata Obin blak-blakan.\r\n\r\nDi luar kreasinya yang indah, kejujuran dan ketulusan Obin dalam berkarya dengan misi mulia marayakan keindonesiaanya mungkin salah satu yang memikat banyak orang.\r\n\r\nTak hanya di negeri sendiri, Obin juga diapresiasi hingga ke mancanegara. Bahkan, butik BINhouse pernah hadir di sejumlah negara seperti Singapura, Jepang, dan Belanda.\r\n\r\nBaru-baru ini, Obin yang 16 Juli mendatang akan genap berusia 69 tahun, mendapat kehormatan bergabung dengan para perempuan paruh baya sukses dan inspiratif se-Asia dalam daftar Forbes 50 Over 50 Asia.\r\n\r\nHanya tiga perempuan Indonesia yang masuk daftar keluaran majalah ekonomi Forbes tersebut. Ada Obin, aktris senior Christine Hakim, dan Presiden Direktur PT XL Axiata Tbk Dian Siswarini.\r\n\r\nPengakuan tersebut tentu membanggakan, tapi bukan ukuran kebahagiaan bagi Obin. &quot;Just be the way you are,&quot; ungkap Obin ketika ditanya resep hidup bahagianya.\r\n\r\nObin, yang lebih nyaman disebut sebagai \'tukang kain\' ketimbang desainer, sepenuhnya menjadi diri sendiri saat menghabiskan waktu dengan menenun atau membatik. Segala hal yang merayakan keindahan budaya Indonesia.\r\n\r\nMeski sempat menghabiskan masa kecil di Hong Kong, ia tak pernah melupakan identitasnya sebagai orang Indonesia. Tak hanya kain Nusantara, kekayaan kuliner Indonesia ikut dilestarikannya dengan menjamu para sahabat dan klien di rumahnya hampir setiap hari besar agama atau budaya.\r\n\r\n&quot;Saya Indonesia. Indonesia is my mother, but also my daughter. I will love it and respect it, as a daughter, but I will care for it as a mother. Saya tidak pernah mengatakan ini sebelumnya,&quot; kata Obin.\r\n\r\nModern vs. Tradisi\r\n\r\nIa tak pernah lelah mengingatkan kepada generasi muda untuk selalu ingat kepada akar budayanya. Entah itu saat menjadi pembicara di sebuah seminar, talkshow, atau saat peluncuran koleksi baru di hadapan pewarta yang didominasi jurnalis muda.\r\n\r\nObin berpendapat, zaman boleh semakin modern dengan segala kecanggihahnya, tapi budaya sebagai identitas diri akan selalu melekat kapan pun dan di mana pun. &quot;Tradition is the way we are, modern is the way we think,&quot; ujarnya.\r\n\r\nTak heran bila beragam musik, mulai dari lagu-lagu penyanyi barat hingga himne Indonesia, memawarnai peragaan busananya. Fashion show terkininya di Plaza Indonesia Fashion Week pada Februari lalu, suara khas penyanyi legendaris Amerika Serikat Nina Simone dalam lagu \'See-Line Women\' menjadi pembuka. Sebagai pamungkas, peragaan ditutup dengan lagu \'Rayuan Pulau Kelapa\' karya Ismail Marzuki.\r\n\r\nObin mengaku, hidupnya hambar tanpa musik. Akan tetapi, sajian lagu-lagu tersebut cukup menggambarkan betapa Obin yang tak lekang oleh waktu.\r\n\r\n&quot;Just remember, tradisi dan modernitas tidak saling bertentangan. You are traditional, but you are modern as well,&quot; katanya.', 'desainer-obin-7.jpeg', 'admin', 1716694150, 1716694501),
(22, 'Gaya Chris Martin Beskapan, Motif Batik Bintang Terinspirasi Filosofi Jawa', 'gaya-chris-martin-beskapan-motif-batik-bintang-terinspirasi-filosofi-jawa', 'Menyusul euforia fashion Jeng Yah, karakter yang diperankan Dian Sastrowardoyo di serial Netflix \'Gadis Kretek\', beskap mendunia', 'Jakarta - Tren busana bergaya beskap masih terus berlanjut. Menyusul euforia fashion Jeng Yah, karakter yang diperankan Dian Sastrowardoyo di serial Netflix \'Gadis Kretek\', beskap mendunia lagi lewat penampilan teranyar Chris Martin.\r\n\r\nPentolan Coldplay itu kedapatan memakai atasan hitam dalam potongan beskap saat menghadiri HEART (Health + Art) Gala yang digelar Venice Family Clinic di Los Angeles, California, Amerika Serikat, pada Sabtu (11/5/2024).\r\n\r\nBeskap yang dipakainya merupakan keluaran jenama lokal Sukkha Citta yang didirikan oleh Denica Riadini-Flesch pada 2016 setelah mengundurkan diri sebagai pegawai Bank Dunia demi fokus merintis usaha yang memberdayakan perempuan Indonesia.\r\n\r\nDijelaskan di situs Sukkha Citta, koleksi Angkasa terinspirasi dari filosofi Jawa \'Urip Iku Urup\' yang menjadi pedoman para perajin batik dan kapas yang didominasi oleh para ibu.\r\n\r\nFilosofi tersebut tentang esensi kehidupan manusia untuk menerangi sesamanya atau bermanfaat bagi orang-orang di sekitarnya.\r\n\r\n&quot;Saat kita memberanikan diri untuk bersinar, kita menyalakan api dan bersama-sama menjadi lebih terang benderang. Menyinari jalan ke depan, untuk masa depan yang kita yakini,&quot; demikian dijelaskan di situs tersebut.', 'gaya-chris-martin-pakai-beskap.jpeg', 'admin', 1716694423, 1716694423),
(23, 'Wisata Tak Biasa di Bandung, Bisa Sambil Belajar Membatik', 'wisata-tak-biasa-di-bandung-bisa-sambil-belajar-membatik', 'Ragam destinasi wisata bisa ditemui di Kota Bandung. Mulai dari wisata alam hingga wisat edukasi. Salah satunya Rumah Batik Komar', 'Bandung - Ragam destinasi wisata bisa ditemui di Kota Bandung. Mulai dari wisata alam hingga wisat edukasi. Salah satunya Rumah Batik Komar.\r\nBerlokasi di Jalan Cigadung Raya Timur, Kota Bandung, Rumah Batik Komar bisa jadi alternatif wisata bagi wisatawan yang ingin merasakan sensasi berbeda saat ke Bandung.\r\n\r\nBagi pecinta batik, tentunya Rumah Batik Komar bisa jadi list nomor satu saat berkunjung ke Bandung. Selain punya ragam koleksi produk batik, di sini juga ada wisata edukasi untuk mempelajari lebih dalam seluk beluk kain batik.\r\n\r\n&quot;Triggernya adalah ketika batik itu diakui oleh UNESCO sebagai kekayaan tak benda dari Indonesia dan itu masuk ke kurikulum sekolah. Berhubung pak Komar dari keluarga pembatik nih dan beliau juga akademiknya itu berkecimpung di dunia batik. Nah dimana ketika lulus S3 beliau punya semacam tanggung jawab lebih lah untuk menyebarluaskan batik ini dalam upaya melestarikan batik,&quot; kata Humas Rumah Batik Komar, Recksha Ferdha Herditya kepada detikJabar, Jumat (17/5/2024).\r\n\r\nWisata edukasi ini terdapat beberapa kegiatan antara lain tur proses membatik, penyampaian materi mengenai batik, tanya jawab, praktik batik tulis dan batik cap. Harga wisata edukasi batik Komar dikatagorikan jadi 5 paket yang dapat dipilih, mulai dari harga Rp. 50 ribu-Rp. 6 juta.\r\n\r\n&quot;Tenaga pengajar disini itu udah tersertifikasi lah paling nggak setiap divisinya itu ada yang udah tersertifikasi sebagai tenaga pengajar batik kayak gitu. Jadi banyak sih ragamnya dari yang ingin belajar, ingin kenal sampai ingin fokus atau ingin concern di bidang batik, ada paketnya disini,&quot; ucapnya.\r\n\r\nSejarah Rumah Batik Komar\r\n\r\nRumah Batik Komar sudah ada sejak tahun 1998. Nama Batik Komar sendiri diambil dari nama pemiliknya yaitu Komarudin Kudiya.\r\n\r\n&quot;Nama itu pemberian dari dosennya setelah diskusi panjang. Jadi memang disarankan untuk branding namanya pake ini aja rumah batik Komar kayak gitu,&quot; kata Recksha.\r\n\r\nKomarudin Kudiya beserta istri berasal dari Cirebon. Recksha bercerita terdapat beberapa faktor sehingga beliau memilih membuka bisnis di Bandung, salah satunya karena kota Udang itu salah satu penghasil batik terbesar dan terdapat banyak pengusaha batik.\r\n\r\n&quot;Bapak selalu bilang kalau misalnya bapak mulai bisnis di Cirebon, kan Cirebon salah satu batik juga nih. Bapak selalu bilang kalau misalnya bapak mulai bisnis disana, bapak itu di ibaratkan bintang kecil diantara bintang-bintang yang besar. Dalam artian disana udah banyak yang bergerak di bisnis batik, si bintang kecil ini tidak akan bisa bersaing langsung sama bisnis yang sudah besar. Akhirnya si bintang kecil ini harus pindah dan mulai bisnisnya yaitu pilihannya di Bandung. Selain itu juga Bandung sebagai salah satu trendsetter untuk dunia fesyen juga kan,&quot; tuturnya.\r\n\r\nJam operasional edukasi wisata batik Komar buka tiap hari Senin hingga Sabtu dari pukul 08.00 WIB sampai pukul 16.00 WIB. Selain di sini juga tempatnya ada yang di Jalan Sumbawa, namun untuk workshop hanya yang berada di Jalan Cigadung Raya No.5. Bagi anda yang berkunjung kesini, dapat melihat pilihan paketnya di media sosial instagram @batikkomar.', 'rumah-batik-komar_169.jpeg', 'admin', 1716694645, 1716694645),
(24, 'Gaya Elon Musk Resmikan Starlink di Bali, Pakai Batik Bomba Lagi', 'gaya-elon-musk-resmikan-starlink-di-bali-pakai-batik-bomba-lagi', 'Elon Musk lebih suka bergaya kasual. Namun ketika berkunjung ke Indonesia, ia membuat pengecualian', 'Denpasar - Seperti bos tekno umumnya, Elon Musk lebih suka bergaya kasual. Namun ketika berkunjung ke Indonesia, ia membuat pengecualian.\r\n\r\nKemeja hijau lengan panjang bermotif etnik menjadi andalan sang pendiri Tesla, salah satu pabrikan mobil listrik terbesar di dunia. Ia memakainya saat meresmikan kehadiran Starlink, layanan internet besutannya, di salah satu puskesmas di Denpasar, Bali, pada Minggu (19/5/2024). Turut hadir dalam kesempatan tersebut, Menteri Kesehatan Budi Gunadi Sadikin dan Menteri Komunikasi dan Informatika Budi Arie Setiadi.\r\n\r\nTerasa familier? Memang bukan baru pertama kali kemeja tersebut menemani penampilan Elon Musk. Menghadiri B20 Summit secara virtual di KTT G20 dua tahun lalu, ia mengenakan kemeja yang sama.\r\n\r\nKTT G20 juga berlangsung di Bali. Elon akhirnya berkesempatan dapat menunjukkan penghormatannya kepada budaya Indonesia secara langsung di tempatnya.\r\n\r\nAnindya Bakrie yang bertindak sebagai moderator forum B20 kala itu menyebut Elon menggunakan kemeja batik Bomba. &quot;Batik Bomba, batik yang Anda gunakan berasal dari sebuah desa kecil di Sulawesi Tengah,&quot; kata Anindya Bakrie setelah mengaku mengirimnya secara khusus untuk Elon Musk.\r\n\r\nPemilihan kemeja tersebut boleh dibilang kontekstual mengingat Bomba merupakan salah satu daerah penghasil nikel terbesar di Indonesia. Nikel merupakan komponen utama dalam pembuatan baterai kendaraan listrik, salah satu bisnis yang membesarkan nama pemilik media sosial X itu.\r\n\r\nNamun untuk wastra atau kain tradisional, Sulawesi sebenarnya lebih terkenal dengan kerajinan tenunnya. Ada tenun Sengkang dari Sulawesi Selatan, juga Wajo yang mulai langka. Sulawesi Tengah sendiri bahkan memiliki tenun khas Donggala.\r\n\r\nTak heran bila batik Bomba terasa asing di telinga Syamsidar Isa, pegiat tenun serta salah satu pengurus Cita Tenun Indonesia (CTI). Namun secara sepintas, motif kemeja Elon mengingatkannya pada salah satu kain Nusantara dari Bali.\r\n\r\n&quot;Mirip endek Bali, tenun ikat,&quot; ujarnya kepada Wolipop, Senin (20/5/2024).\r\n\r\nMaka penampilan Elon kali ini terasa lebih relevan dengan kunjungannya ke Bali. Selain itu, dua kali memakai kemeja yang sama cukup untuk membuktikan keseriusannya berbisnis di Indonesia.', 'elon-musk-dan-menteri-kesehatan-ri.jpeg', 'admin', 1716694919, 1716694919);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment_id`, `comment`, `date_created`) VALUES
(3, 13, 'wahhh keren banget blognya', 1716534243),
(4, 13, 'iya ya, keren banget', 1716534253),
(5, 15, 'hi', 1716534293),
(6, 19, 'keren banget blognya', 1716693178),
(7, 19, 'iya ya keren banget', 1716693200),
(8, 19, 'hauhahaha', 1716693441),
(9, 21, 'wahh keren ya', 1716694275);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
