<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Contact;
use App\Models\Event;
use App\Models\JenisReview;
use App\Models\ObjekWisata;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Admin::create([
            'username' => 'admin',
            'password' => 'admin'
        ]);

        JenisReview::create([
            'kode_review' => 'KD-01',
            'nama_review' => 'Review Objek Wisata'
        ]);

        JenisReview::create([
            'kode_review' => 'KD-02',
            'nama_review' => 'Review Fasilitas'
        ]);

        JenisReview::create([
            'kode_review' => 'KD-03',
            'nama_review' => 'Review Event'
        ]);

        JenisReview::create([
            'kode_review' => 'KD-04',
            'nama_review' => 'Review Fasilitas'
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Makam Raja Sidabutar',
            'gambar' => 'makam-raja-sidabutara.gif',
            'deskripsi' => 'Kabupaten Samosir dikenal dengan banyaknya bukti peninggalan sejarah, salah satunya terdapat di Desa Ambarita kecamatan Simanindo, Kabupaten Samosir, Provinsi Sumatera Utara, yaitu kuburan batu Raja Sidabutar.
            Desa Ambarita menjadi satu tempat wisata sejarah yang wajib dikunjungi karena kaya akan peninggalan sejarah di masa kepemimpinan Raja Sidabutar, tokoh yang dipercaya menjadi manusia pertama yang menginjakkan kaki di Pulau Samosir.
            Di sana wisatawan bisa melihat dari dekat makam Raja Sidabutar, sang penguasa Pulau Samosir.
            Sekaligus mendengar kisah tentang Raja Sidabutar yang sangat terkenal memiliki kesaktian.
            Ambar Silalahi, penduduk sekitar menuturkan, konon Sidabutar adalah raja yang sakti dan kuat.
            Kesaktiannya pun diyakini datang dari rambutnya yang panjang dan gimbal.
            "Jika rambutnya dipangkas maka kesaktiannya bakal hilang, oleh sebab itu beliau konon sangat menjaga rambutnya," katanya.
            Uniknya, kata dia, Raja Sidabutar mempersiapkan makamnya sendiri dengan memanggil tukang pahat yang ada di Pulau Samosir.
            "Pembuatan makam Raja Sidabutar dilakukan upacara khusus. Kalau makam biasanya berhiaskan nisan, berbeda dengan makam Raja Sidabutar ini yang dihiasi simbol. Ada gambar ukiran kepala yang besar melambangkan Raja Sidabutar, sedangkan ukiran kepala yang ada di ujung satunya dengan ukuran yang lebih kecil menunjukkan permaisuri, Boru Damanik," katanya.
            "Sedangkan ukiran lelaki yang berada di bawah kepala raja adalah Panglima Guru Saung Lang Meraji."
            Selain Raja Sidabutar, ada juga makam para keturunannya dan ajudan. Makam batu tertata sangat rapi, warna merah, hitam dan putih menjadi ornamen utama yang mewarnai hampir seluruh area pekuburan.  "Sedangkan ukiran lelaki yang berada di bawah kepala raja adalah Panglima Guru Saung Lang Meraji." Selain Raja Sidabutar, ada juga makam para keturunannya dan ajudan. Makam batu tertata sangat rapi, warna merah, hitam dan putih menjadi ornamen utama yang mewarnai hampir seluruh area pekuburan. Ia menuturkan makam Raja Sidabutar merupakan makam yang terbuat dari batu utuh tanpa persambungan yang dipahat. Makam batu ini juga tidak dikuburkan di dalam tanah, melainkan diletakkan di permukaan tanah."Memasuki wilayah pekuburan juga harus mengenakan ulos. Wisatawan boleh meletakkannya di bahu," ujarnya. Seorang wisatawan, Maulita menuturkan tertarik mengunjungi makam batu Raja Sidabutar setelah direkomendasikan oleh temannya.
            Menurutnya, makam tersebut sangat unik karena seperti prasasti. Uniknya lagi makam Raja Sidabutar sendiri merupakan makam terbesar di kompleks ini dan sudah berumur sekitar lebih dari 460 tahun.',
            'lokasi' => 'Huta Siallagan Siallagan-Pindaraya, Ambarita, Simanindo, Kabupaten Samosir, Sumatera Utara',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Tuk Tuk Siadong',
            'gambar' => 'tuktuk siadong.jpg',
            'deskripsi' => 'Tidak diragukan lagi bahwa Danau Toba merupakan tujuan liburan terbaik di Sumatera Utara. Selain danau dan pulau-pulau kecilnya, ada banyak desa yang menarik di dekatnya. Tuktuk Siadong adalah salah satunya. Desa kecil ini terletak di sebuah pulau kecil di Pulau Samosir tepatnya di Simanindo, Kabupaten Samosir, Sumatera Utara. Wisatawan dapat menikmati keindahan Danau Toba dari sini. Desa ini menawarkan panorama yang mempesona dan suasana yang menyegarkan. Bagian yang terbaik adalah lokasinya. Tuktuk Siadong terletak di antara Desa Ambarita dan Tomok. Itu berarti Anda bisa menjelajahinya satu per satu.
            Wisatawan yang datang ke desa ini bisa menghabiskan waktu dengan berwisata bahari berkeliling Danau Toba sambil mencoba beragam olahraga air, seperti berenang, menyelam, berlayar, bermain kayak, memancing, dan lainnya.
            Langit biru dan cuacanya bagus. Desa Tuktuk Siadong jelas merupakan surga wisata. Hal ini telah menjadi tujuan favorit wisatawan mancanegara dan domestik. Mereka bahkan menganggapnya sebagai tempat terbaik untuk menyaksikan keindahan Danau Toba. Ada resor yang bagus dan menerapkan arsitektur khas Batak. Ada berbagai jenis pohon disekitarnya. Pengunjung bisa duduk dan bersantai di samping danau atau mengendarai speedboat untuk aktivitas petualangan danau.
            Desa Tuktuk Siadong menjadi tujuan utama wisata keluarga. Di samping itu, pengunjung punya alasan berbeda untuk datang kesini. Misalnya, mereka ingin menghabiskan liburan yang indah bersama teman atau keluarga. Namun, beberapa dari mereka datang ke desa untuk berbulan madu, tidak masalah. Lokasi ini dimaksudkan untuk semua orang. Ini juga dilengkapi dengan hutan liar dan pemukiman khas budaya batak. Karena kemewahan dan berbagai atraksinya, pemerintah telah memilihnya sebagai kawasan wisata utama di Pulau Samosir.
            Desa Tuktuk Siadong terletak di daerah Tanjung. Itu berarti Anda dapat menikmati berbagai olahraga air seperti menyelam, berenang, memancing, berkano, dll. Ketika sampai pada fasilitas, Anda dapat menemukan restoran dan hotel yang bagus. Selain itu, ada beberapa bengkel ukir. Pertemuan dengan seniman pasti merupakan pengalaman yang tak terlupakan. Jika perlu, Anda bisa belajar mengukirnya. Jangan lupa beli beberapa kenang-kenangan. Itu berarti Anda harus membawa lebih banyak uang baik untuk akomodasi maupun oleh-oleh.
            Secara keseluruhan, Anda bisa melakukan banyak hal di Tuk Tuk. Bisa aktivitas sesederhana seperti bersepeda di sekitar desa. Biasanya, dibutuhkan waktu hanya 2 jam. Waktu terbaiknya adalah di pagi atau sore hari. Lebih baik menghindari panasnya matahari di siang hari. Selanjutnya, desa tersebut menawarkan berbagai jenis makanan. Ini termasuk masakan Batak dan Barat. Beberapa wisatawan juga mencari seniman lokal. Mereka ingin membuat ukiran kayu yang indah. Bisa berupa gelang atau kalung kayu.',
            'lokasi' => 'Simanindo, Kabupaten Samosir, Sumatera Utara',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Batu Kursi Parsidangan Siallagan',
            'gambar' => 'Huta Siallagan 2.jpg',
            'deskripsi' => 'Batu Kursi Raja Siallagan merupakan objek wisata berbentuk batu kursi yang berfungsi sebagai batu persidangan dan batu parhapuran. Tempat ini berlokasi di Huta Siallagan Siallagan-Pindaraya, Ambarita, Simanindo, Kabupaten Samosir, Sumatera Utara.
            Yang merupakan tempat Raja Siallagan melakukan pengadilan terhadap tindak kejahatan. Walau telah berusia ratusan tahun, seluruh peninggalan Raja Siallagan masih terjaga dengan sangat baik. Bentuk dari batu kursi raja ini berupa batu kursi yang melingkar terdiri dari kursi raja, kursi persidangan, dan batu eksekusi.  Batu Kursi Raja ini dikelilingi oleh tembok batu setinggi 1,5 meter. Menurut pemandu wisata setempat, pada jaman dulu selain dikelilingi oleh tembok batu, batu persidangan ini juga dilindungi oleh bambu dan benteng untuk menjaga perkampungan dari serangan suku lain ataupun gangguan binatang buas.
            Batu Kursi Raja Siallagan atau Stone Chair of King Siallagan berada dalam Komplek Huta Siallagan dan dipimpin oleh Raja Siallagan. Huta merupakan kampung atau perkampunngan dimana penduduknya terdiri dari beberapa keluarga yang  terikat dalam satu kerabat. Tujuan dibangunnya Huta adalah sebagai identitas  yang menjelaskan asal usul seseorang yang nantinya akan menjadi huta marga. Sebagai peninggalan sejarah, Batu Kursi Raja Siallagan mampu menarik perhatian wisatawan untuk berkunjung. Bukan aktivitas wisata seperti bersenang-senang pada umumnya, namun ada beragam kegiatan yang dapat menambah wawasan dan pengetahuan dapat pengunjung lakukan.
            Perkampungan Siallagan ini dibangun pada masa Raja Huta pertama yakni Raja Laga Siallagan. Pucuk kepemimpinan turun temurun diberikan kepada Raja Hendrik Siallagan hingga Raja Ompu Batu Ginjang Siallagan. Seluruh penghuni Huta Siallagan memiliki marga Siallagan. Pembangunan Batu Kursi Raja sendiri berlangsung kira-kira pada generasi ke 3 dan ke 4 atau sekitar 500 tahun lalu.
            Batu Kursi Raja Siallagan terletak di tengah perkampungan. Terdapat tiga batu kursi berukuran besar, enam buah batu kursi berukuran kecil dan satu meja. Di samping kursi persidangan terdapat pohon bernama Pohon Hariara karena semua keputusan pengadilan yang diambil oleh raja disampaikan atau disumpahkan kepada pohon ini.
            Menurut penjelasan dari pemandu wisata, terdapat dua lokasi batu persidangan. Pertama berada di dekat Pohon Hariara untuk menentukan bersalah atau tidaknya seorang terdakwa. Batu persidangan kedua terletak tak jauh dari Pasar Siallagan untuk mengeksekusi terdakwa dengan hukuman pancung.',
            'lokasi' => 'Huta Siallagan Siallagan-Pindaraya, Ambarita, Simanindo, Kabupaten Samosir, Sumatera Utara',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Museum huta bolon',
            'gambar' => 'museum huta bolon.jpg',
            'deskripsi' => 'Museum Huta Bolon berlokasi di Jl. Pelabuhan Simanindo, Simanindo Sangkal, Simanindo, Kabupaten Samosir, Sumatera Utara. Berada di dalam huta bolon tradisional yang bersejarah dan masih terjaga kerapian dan keasliannya. Untuk masuk ke huta kita harus melewati gerbang dan pagar tanaman bambu. Terdapat rumah bolon warisan raja dan deretan rumah pengawal, keluarga raja dan lumbung. Konon, pada masa perang antar raja masih sering berlangsung di pulau, gerbang tersebut di jaga oleh para penjaga yang memegang tombak beracun. Dan pada saat ini bukan penjaga prajurit huta bertombak yang menyambut, melainkan para penjaga Museum Huta Bolon Simanindo yang memegang tiket masuk.
            Koleksi di museum ini terdiri dari sejumlah rumah adat dengan Huta Bolon Simanindo sebagai pemiliknya. Koleksinya berupa peninggalan leluhur orang batak dari Samosir yang terdiri antara lain parhalaan, pustaha laklak, tunggal panaluan dan solu bolo. Saat kita memasuki Museum Huta Bolon Simanindo, kita akan di bawa kepada masa lampau. Koleksi barang-barang kuno yang bersejarah dan bernilai adat tinggi miik etnis Batak Toba cukup lengkap dan terpelihara di museum ini. Kita bisa menyaksikan Perhalaan, Pustaka Laklak, Ulos adat langka, perlengkapan adat untuk upacara alat musik tradisional, aneka mainan tradisional seperti dalu putar dan janggar yang tersimpan dan tertata dengan baik.
            Bila kita perhatikan, di museum ini terdapat dua koleksi patung Sigale-gale yang disimpan dalam satu kotak yang sama. Salah satu patung tersebut menggambarkan perempuan Batak. Dari berbagai tempat yang memliki  patung Sigale-gale, agaknya Museum Huta Bolon Simanindo inilah yang memiliki patung Sigale-gale perempuan. Bagi kita yang hendak melhat tarian Sigale-gale dan seni tradisonal seperti misalnya tor-tor tunggal panaluan. Kita mesti datang bersama rombongan besar dan memesan untuk untuk dipentasakan beberapa hari sebelumnya. Selain itu, di museum Huta Bolon ini, terdapat Solu Bolon yaitu perahu adat yang disimpan di bawah rumah. 
            Waktu kunjungan museum setiap hari dari pukul 09.00 -17.00. Tiket masuk museum untuk desawa dan anak-anak sama seharga Rp 30.000,- per orang. Dengan mengunjungi Museum Huta Bolon Simanindo yang berjarak 15 kilometer dari Ambarita dan 20 kilometer dari Tomok ini, kita akan tahu bahwa pada masa lalu orang Batak Toba di Pulau Samosir juga memiliki budaya”maritim”. Karena Laut mereka adalah Danau Toba',
            'lokasi' => 'Jl. Pelabuhan Simanindo, Simanindo Sangkal, Simanindo, Kabupaten Samosir, Sumatera Utara',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Pantai Pasir Putih Parbaba',
            'gambar' => 'pantai pasir putih parbaba.jpg',
            'deskripsi' => 'Salah satu destinasi wisata yang dijual Kabupaten Samosir kepada wisatawan adalah Pantai Pasir Putih Parbaba di Desa Huta Bolon, Kecamatan Pangururan, Sumatera Utara. Saat mencoba menginjakkan kaki ke lokasi yang berjarak tak sampai setengah jam perjalanan dari Pangururan, ibu kota Kabupaten Samosir, Selasa (26/4/2016) sore, tampak bentangan pantai dengan pasir yang tak lagi putih. Sejauh mata memandang, bukit menjulang yang berdiri kukuh seakan menindih Danau Toba yang tenang. Desiran air danau yang berlari ke garis pantai, membentur tumpukan pasir menyambut rasa penasaran dengan lokasi wisata yang sering disebut-sebut orang jika berkunjung ke Samosir. Pengunjung di hari biasa tak ramai. Hanya ada beberapa sepertinya turis lokal sedang menceburkan diri di tepian pantai sambil sesekali berfoto. Beberapa pemuda sedang duduk di atas tikar sambil memetik gitar, bernyanyi mengimbangi suara air danau yang pecah tak jauh dari tempat mereka duduk. Sejumlah wahana atau transportasi danau seperti jet ski mengapung di sepanjang garis pantai. Tak ada pengunjung yang berselancar di atas danau. "Di sini ramai kalau hari Sabtu dan Minggu, atau paling ramai jika saat hari libur," ujar Ama Melda Sihaloho (62), pemilik kios yang menjual ragam askesoris, makanan dan juga menyewakan wahana permainan air. Pengunjung yang datang ke Pantai Pasir Putih Parbaba, lumayan banyak datang dari luar Samosir, seperti Kabanjahe, Medan, Siantar dan kota lainnya di Sumatera Utara. Menurut Ama Melda, lokasi wisata ini menawarkan aneka wahana permainan danau seperti, banana boat yang memuat delapan orang, jet ski, sepeda air, perahu dayung dan ban. Tarifnya sendiri bervariasi dengan durasi tertentu. Seperti banana boat dan jet ski disewa seharga Rp 200.000 untuk pemakaian setengah jam. Sepeda air disewakan seharga Rp 50.000 untuk durasi pemakaian satu jam dan pemakaian ban seharga Rp 10.000 tanpa dibatasi waktu. Tak cuma menyewakan wahana permainan, para pemilik usaha di sini juga menyewakan tikar untuk bisa duduk di atas pasir sambil menikmati suasana bersama siapa saja, dengan harga Rp 10.000 tanpa batas waktu. Cuma itu. Lalu nikmatilah desiran angin dan air danau bertalu-talu dengan lembut. Melepaskan pandangan dan menyerahkan jiwa ke atas air danau. Sampah Tapi, semua itu terasa mengganggu manakala mata tertumbuk pada serakan sampah plastik berupa botol bekas air mineral dan plastik pembungkus teronggok di bibir pantai. Air danau yang datang menumbuk pasir di tepian juga tampak kecokelatan, tak bening.  Tak cuma di situ, di samping kios milik Ama Melda tampak serakan sampah yang membuat kesan sangat jorok lokasi pantai. Sampah diduga milik pengunjung atau pemilik kios. Ama Melda seperti tak bersemangat berbicara soak serakan sampah itu. Tidak sesemangat saat kaos dan kemeja yang dia pajang coba ditawar harganya. Dia mengaku itu sampah miliknya dan pengunjung. Namun dia tak mau bicara banyak mengapa sampah seperti dibiarkan menumpuk begitu saja. Tak ada wadah, berserakan di atas tanah begitu saja. Ama Melda kembali antusias berbicara soal bagaimana dulu di pantai yang kini dipenuhi pasir itu, mereka sempat bercocok tanam bawang dan padi, yakni sekitar 1996. Namun itu tak lama karena air danau yang tak menentu naik dan surutnya, membuat tanaman tak bisa terjamin bisa bertahan. Sementara, lokasi pantai yang mulai berpasir setelah air danau surut perlahan, akhirnya dijadikan sebagai lokasi wisata sejak 2005. Warga Desa Huta Bolon yang dulunya sempat bercocok tanam akhirnya mendirikan kios-kios di sekitar pantai untuk menyewakan aneka wahana permainan air danau, dagang aneka makanan minuman, aksesoris dan wahana permainan air danau. Hingga kini, lokasi wisata pantai di Danau Toba itu merupakan salah satu dagangan Pemkab Samosir untuk destinasi wisata, kendati pengelolaannya tak seindah namanya Pantai Pasir Putih Parbaba. Sebab lokasi pantai tampak tak tertata dan serakan sampah yang menjadi bagian pemandangan biasa di sini.',
            'lokasi' => 'Desa Huta Bolon, Kecamatan Pangururan, Sumatera Utara',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Aek Rangat Pangururan',
            'gambar' => 'Aek Rangat Pangururan.png',
            'deskripsi' => 'Aek Rangat Pangururan yang berlokasi di Kec. Pangururan, Kabupaten Samosir, Sumatera Utara merupakan salah satu destinasi favorit ketika berkunjunjung ke Pulau Samosir. “Aek Rangat” memiliki arti sebagai air panas/hot spring, karena ini berlokasi tepat pada lereng Gunung Pusuk Buhit yang dikenal masih aktif. Air panas tersebut berasal dari sumber mata air yang keluar dari batuan berwarna putih atau batu kapur. Air panas tersebut dialirkan ke kolam-kolam yang dikelola oleh penduduk setempat dan didukung oleh pemerintahan Samosir.
            Bagi Anda yang berwisata dengan teman-teman atau keluarga, Anda dapat menyarankan untuk menikmati sejenak pemandian air panas disini. Ada beberapa kolam pemandian yang telah tersedia bagi para pengunjung dan diatur pula tingkat panasnya sesuai dengan selera Anda. Jika Anda ingin merasakan air panas yang tingkat panasnya lebih tinggi, maka menaiklah keatas mendekati sumber air Panas. Bagi Anda yang membawa anak-anak, jangan kuatir karena pemandian tersebut ada kok tempat yang dangkal yang cocok untuk Anak-anak.
            Tidak hanya pesona Air panasnya yang Anda dapatkan di lokasi ini, namun juga pemandangannya yang memanjakan mata menatap Indahnya Danau Toba. Batuan kapur yang putih tadi sering digunakan beberapa pengujung menjadi spot untuk berphoto bersama teman sekantor, pra-wedding karena background yang putih dan bersih seakan berphoto di salju. Ada banyak lokasi wisata lainnya yang berdekatan dengan lokasi ini diantaranya Danau Sidihoni, Aek Sipitu Dai dan lainnya.
            Berendam di air panas memanglah sangat mengasyikan dan setibanya keluar dari kolam pemandian pastinya akan merasa lapar. Namun jangan kauatir, disana tersedia berbagai pilihan makanan dan minuman ringan yang dapat meredakan lapar Anda. Anda dapat menikmati telur matang yang direbus menggunakan Aek Rangat ini. Oh iya sahabat tripelaketoba, di lokasi ini juga tersedia tempat untuk parkir kendaraan Anda, baik yang roda 4 atau roda 6 masih bisalah.
            Menikmati pemandian air panas ini tidak akan dikenakan biaya (FREE), namun sebisanya pesan/minumlah makanan yang disediakan oleh penduduk setempat sebagai rasa terima kasih kita akan usaha panataan  lokasi tersebut. Namun, jika Anda ingin menyewa kolam pemandian selama beberapa jam untuk keluarga atau teman sekantor, maka Anda akan dikenakan biaya rentang 50rb – 100rb. Aek Rangat atau dikenal dengan pemandian air panas pangururan ini tidak jauh dari jantung Ibu Kota Kabupaten Samosir ini hanya berjarak 3Km. Jarak tempuh hanya 15-20 menit dari kota penguruan.',
            'lokasi' => 'Kec. Pangururan, Kabupaten Samosir, Sumatera Utara',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Menara Pandang Tele',
            'gambar' => 'tele1.jpg',
            'deskripsi' => 'Menara Pandang Tele terletak di Turpuk Limbong, Kecamatan Harian, Kabupaten Samosir, Sumatera Utara. Menara Pandang Tele ini sering kali disebut sebagai puncak terbaik jika wisatawan ingin menikmati keindahan Danau Toba secara keseluruhan. Menara pandang ini memiliki puncak menara yang terdiri dari empat lantai. Dari menara pandang ini wisatawan dapat melihat ke segala penjuru Danau Toba, mulai dari jajaran perbukitan pinus yang mengitari Toba hingga permukaan danau di kejauhan yang tentunya pemandangannya sangat indah.
            Tingginya kunjungan wisatawan ke Menara Pandang membuat destinasi ini mendapat perhatian dari pemerintah setempat. Saat ini, sudah ada amenitas pariwisata berupa fasilitas rest area yang bisa dinikmati oleh para wisatawan yang berkunjung ke menara pandang ini.
            Rest area yang terdapat di Menara Pandang Tele ini bisa dibilang cukup unik karena hampir keseluruhan dindingnya terbuat dari kaca transparan sehingga wisatawan bisa melihat pemandangan Danau Toba secara langsung dari dalam ruangan. Selain itu, wisatawan juga bisa beristirahat dan bersantai sambil menikmati beragam kuliner khas Batak yang ada di rest area ini.
            Luas rest area Tele yang terdiri dari 2 lantai ini mencapai 214 meter dan memiliki kapasitas hingga 40 orang. Rest area ini juga dilengkapi beberapa fasilitas seperti mushola, kamar mandi yang jumlahnya cukup banyak, dan balkon.
            Menara Pandang Tele dibangun ketika Samosir masih menjadi bagian dari pemerintahan Kabupaten Tapanuli, tepatnya pada tahun 1988. Bangunan ini kemudian diresmikan oleh drg. Sinaga yang saat itu menjabat sebagai Bupati. Namun, setelah dimekarkannya Tapanuli Utara menjadi 3 kabupaten, yakni Tobasa dan Samosir, membuat Menara Pandang Tele kini masuk ke dalam wilayah Kabupaten Samosir.
            Penyediaan fasilitas sekaligus pengembangan Menara Pandang Tele ini baru dimulai pada 2018 lalu ketika Danau Toba dan "Negeri Indah Kepingan Surga" menjadi bagian dari skala prioritas pariwisata nasional. 
            Jika Anda menempuh perjalanan dari Medan, maka rute yang bisa Anda lewati adalah Kabanjahe - Sidikalang (Simpang 4) - Tele. Rute ini bisa Anda ditempuh dalam 4,5 jam perjalanan dengan jarak sekitar 168 km. Jika Anda hanya ingin singgah sejenak dan menikmati pemandangan sekitar, Anda tidak akan dikenakan biaya retribusi alias gratis. Tetapi jika Anda ingin naik ke menara maka akan dikenakan biaya sebesar Rp. 5.000 per orang.
            Wah, tentu jumlah tersebut tergolong murah jika dibandingkan dengan keindahan alam Danau Toba yang bisa Anda nikmati disini.',
            'lokasi' => 'Turpuk Limbong, Kecamatan Harian, Kabupaten Samosir, Sumatera Utara',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Dolok Holbung Sipege',
            'gambar' => 'bukit holbung.jpg',
            'deskripsi' => 'Destinasi wisata alam di Kabupaten Samosir, Sumatera Utara (Sumut) sangat beragam. Salah satu objek wisata untuk berkemah yang masih perawan adalah Dolok (Bukit) Holbung Sipege, di Desa Hariarapohan, Kecamatan Harian. 
            Objek wisata yang masih alami ini, dikelola Badan Usaha Milik Desa (BUMDes) Unit Usaha Dolok Holbung Sipege. Tiap hari perbukitan ini ramai dikunjungi wisatawan, secara khusus pada Sabtu dan Minggu pengunjung ramai sehingga membuat area parkir penuh.
            Bukit Holbung Sipege, salah satu objek wisata yang sangat indah dan tidak mendapat kunjungan oleh Presiden Joko Widodo ke Samosir belum lama ini. Padahal, Holbung Sipege tidak kalah indah dengan Taman Sipinsur Geosite di Humbang Hasuduntan.
            Wisatawan yang ingin melakukan pendakian harus melalui beberapa anak tangga, kemudian melawati jalan setapak naik turun untuk mendaki perbukitan. Wisatawan yang berkunjung ke Bukit Holbung ini, bukan hanya datang dari warga Samosir, tapi juga beberapa wisatawan lokal seperti Jakarta, Jawa Barat dan wisatawan asing dari Malaysia, Taiwan, Hongkong, Singapura, Vietnam, Filipina dan negara lainnya.
            Seorang petugas pengelola Bukit Holbung yang juga pengurus BUMDes Unit Usaha Dolok Holbung Sipege, Eljon Sihotang mengaku objek wisata itu dikelola BUMDes. Retribusi yang dikenakan kepada pengunjung Rp 5.000 per orang dan parkir sepeda motor Rp 5.000, mobil Rp 10.000.
            Dikatakan, Bukit Holbung itu selalu ramai dikunjungi pada hari Sabtu dan Minggu. Khusus hari Sabtu atau libur, banyak pengunjung berkemah di atas perbukitan. Saat pengunjung menginap dengan berkemah dikenakan biaya tambahan Rp 5.000, karena kendaraan pengunjung dijaga petugas malam.
            “Sabtu dan Minggu ramai pengunjung dan banyak berkemah. Tapi kami selalu melakukan pengawasan ke bukit untuk memastikan yang berkemah itu bukan berpasangan, kecuali suami istri diperbolehkan,” ujar Eljon Sihotang kepada Independensi.com belum lama ini.
            Kalau pengunjung ramai, kata Sihotang, pendapatan dari retribusi tersebut per harinya mencapai satu juta rupiah. “Seperti hari ini hari Minggu, pengunjung ramai, ditambah pendapatan dari retribusi semalam (Sabtu) sudah hampir mencapai Rp 2 juta pendapatan kami,” jelas Sihotang.
            Dari pendapatan yang diperoleh BUMDes tersebut untuk meningkatkan infrastruktur atau akses menuju perbuktikan tersebut. Menurut Sihotang beberapa anak tangga dengan pegangan yang dibangun tersebut bersumber dana dari retribusi dari pengunjung. Dengan anak tangga itu, pengunjung dimudahkan mendaki perbukitan.
            Ke depan, kata Sihotang, pihaknya akan membangun berbagai fasilitas di perbukitan seperti tempat berteduh atau peristirahatan, toilet dan lainnya. Sebab, ada tujuh perbukitan yang dilalui pengunjung sebelum mencapai puncak bukit di bukit ke delapan.
            “Kami mengharapkan, adanya bantuan anggaran pembangunan dari Pemkab Samosir dan pemerintah pusat. Sehingga, objek wisata alam ini bisa ditingkatkan fasilitas dan perbaikan jalan menuju Bukit Holbung,” tambahnya.
            Salah seorang pengunjung dari Kota Depok, Jawa Barat, Monang Tambunan mengakui, meski pembangunannya belum tersentuh oleh pemerintah pusat tapi objek wisata itu jauh lebih indah bila memandang ke Danau Toba. Saya terharu betapa indahnya alam ciptaan Tuhan ini,” ujarnya bangga.
            Hal yang sama yang disampaikan Tiur Gultom, warga Kota Depok yang juga putri asli Desa Sitamiang, Samosit itu mengakui, selama ini dia hanya mendengar ada Bukit Holbung yang lebih dikenal dengan Bukit Teletubbies, tapi belum pernah berkunjung ke tempat itu.',
            'lokasi' => 'Sipege, di Desa Hariarapohan, Kecamatan Harian',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Aek Sipitu Dai',
            'gambar' => 'aek sipitu dai.jpg',
            'deskripsi' => 'Salah satu tujuan wisata di Pulau Samosir yang terbilang cukup terkenal yaitu objek wisata Aek Sipitu Dai yang terdapat di Desa Limbong Mulana, Kecamatan Sianjur Mula-mula, Kabupaten Samosir, Sumatera Utara. "Objek wisata ini dikenal oleh masyarakat sekitar dengan sebuah sumber mata air yang memiliki tujuh pancuran, yang konon katanya memiliki tujuh rasa yang berbeda pula. Aek Sipitu Dai atau dikenal juga dengan air tujuh rasa ini adalah sumber mata air yang lokasinya terletak di bawah sebuah pohon rimbun. Sumber mata air ini cukup unik, pasalnya air yang keluar dari tujuh pancuran di mata air ini dipercaya memiliki rasa yang berbeda-beda.  Sementara itu, pengunjung yang datang, bisa mencicipi setiap air dari tujuh pancuran tersebut. Katanya air dari ketujuh pancuran ini ada rasanya yang seperti manis, asam, bahkan mirip soda.
            Kemudian, selain dikenal karena keunikan tujuh rasanya, siapa sangka Aek Sipitu Dai juga dipercaya oleh masyarakat sekitar memiliki banyak manfaat.
            "Masyarakat sekitar mempercainya air yang bersumber dari tujuh pancuran ini, bisa menyembuhkan berbagai penyakit. Dan yang minumnya belum menemukan jodoh, bisa dipertemukan," ujar Tamara Febiola
            Selain itu, informasi yang di peroleh lainnya, keberadaan sumber mata air ini sangat kental dengan kisah legenda yang beredar di penduduk sekitar.
            Aek Sipitu Dai dalam beberapa tahun terkahir ini memang terus mengalami peningkatan sebagai tempat objek wisata.
            Selain menjadi salah satu daya tarik wisata, mata air ini juga digunakan oleh penduduk sekitar untuk kebutuhan sehari-hari, terutama saat musim kemarau tiba. Bagi pengunjung yang berasal dari pusat Kota Medan yang ingin menyambangi lokasi, akan melakukan perjalanan darat selama lebih kurang lima jam dengan jarak tempuh sekitar 192 kilometer.',
            'lokasi' => 'Desa Limbong Mulana, Kecamatan Sianjur Mula-mula, Kabupaten Samosir, Sumatera Utara',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Batu Sawan',
            'gambar' => 'batu sawan.jpg',
            'deskripsi' => 'Kabupaten Samosir memiliki banyak situs budaya, yang hingga saat ini masih lestari dan disakralkan. Situs-situs ini diwaktu tertentu akan banyak dikunjungi para peziarah yang datang dari warga setempat maupun dari luar kota.

            Bermacam-macam motivasi para pengunjung mendatangi situs-situs budaya tersebut. Ada yang sekedar ingin tahu, berdoa, pengobatan tradisional hingga bermohon berkat daripada leluhur.
            Salah satu dari situs budaya itu adalah Mual Batu Sawan yang berada di kaki Gunung Pusuk Buhit, tempat ini memiliki kekhususan dengan adanya air terjun yang memiliki ketinggian sekira 5 meter. Dengan wadah batu yang terbentuk alami dan menyerupai sawan atau cawan.
            Keunikan dari air terjun ini adalah rasanya yang kecut persis seperti rasa air perasan jeruk purut. Di sekitar keberadaan air terjun tersebut tidak ada tumbuh Pohon Jeruk Purut. Namun rasa unik tersebut sudah bukan rahasia lagi.
            Konon, air ini dipercaya bisa menjadi obat berbagai penyakit, seperti penyakit kulit, demam, batuk dan lain sebagainya. Airnya cukup didoakan, diminumkan dan dimandikan, niscaya akan berbuah kesembuhan. Tentu kepercayaan ini kembali kepada yang meyakini. Jadi tidak heran kalau siapa saja yang datang kemari tidak sekedar mandi namun juga mengambil air tersebut untuk dibawa pulang dan dijadikan obat.
            Mual Batu Sawan ini berada di Desa Limbong-Kecamatan Sianjurmulamula, Kabupaten Samosir. Menuju tempat ini Anda harus membawa kendaraan sendiri atau menyewa kendaraan dari masyarakat setempat. Dianjurkan Anda membawa pemandu setempat ke lokasi air terjun ini. Khususnya bagi Anda yang baru pertama kali berkunjung dan ingin mengetahui latar sejarah turun-temurun tentang Batu Mual Sawan dan beberapa lokasi sakral lain yang berada dalam area lokasi tersebut.
            Dari lokasi parkiran kendaraan, Anda masih harus berjalan sekitar 500 meter hingga tiba di air terjun tersebut. Melalui jalan setapak dan tangga-tangga semen. Adapun larangan di Mual Batu Sawan, tidak diperbolehkan siapapun untuk mandi di kejatuhan air terjun. Jika ingin mandi, terdapat 2 kamar khusus untuk mandi. Satu ruangan untuk pemandian lelaki dan satu ruangan untuk pemandian perempuan, dan mandi wajib menggunakan basahan.
            Anda juga akan dihimbau untuk tidak berbicara sembarangan dan harus bersikap baik. Tujuannya adalah untuk kebaikan bersama dan kelancaran kunjungan Anda ke tempat tersebut.',
            'lokasi' => 'Kaki Gunung Pusuk Buhit, kaki Gunung Pusuk Buhit',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Air Terjun Efrata',
            'gambar' => 'air terjun efrata.jpg',
            'deskripsi' => 'Air Terjun Efrata berada di Desa Sosor Dolok, Kecamatan Harian. Berjarak 20 km lebih dari pusat kota Kabupaten Samosir. Tidak terlalu banyak wisatawan kemari, meskipun pada musim liburan, mungkin karena jaraknya cukup jauh dari objek wisata yang familiar dan cukup terkenal di Samosir yakni Danau Toba.
            Untuk menuju  hanya memerlukan waktu 15 menit dari Menara Tele, tempa   Untuk menuju  hanya memerlukan waktu 15 menit dari Menara Tele, tempat melihat keindahan danau dari atas menara. Sayang sekali jika tidak singgah sejenak untuk mandi air dingin yang turun langsung dari bukit tertinggi di sana. Air Terjun Efrata merupakan salah satu objek wisata yang ada di Samosir. Air terjun Ini memiliki daya tarik karena keberadaannya yang tidak jauh dari pasar. Hanya cukup turun tangga 10 menit, wisatawan sudah bisa melihat keindahan air terjunnya yang deras dan memiliki tebing yang indah seperti dipahat.
            Bagi penduduk lokal mungkin mendengar namanya cukup asing sebab sebelumnya air terjun ini bernama Air Terjun Sosor Dolok, sehingga apabila Anda ingin menanyakan lokasi air terjun ini, sebut saja Air Terjun Sosor Dolok. Ya, nama ‘efrata’ sendiri merupakan nama pemberian yang diberikan oleh salah satu wisatawan mancanegara yang berasal dari negara Eropa. Air Terjun Sampuran Efrata ini tak seperti Air Terjun Sipiso-piso atau pun Air Terjun Sigura-gura yang juga terletak di sekitar Danau Toba yang mudah saja ditemukan. Sebab Air Terjun Sampuran Efrata ini merupakan permata tersembunyi di balik perbukitan yang membentang di sekitar Danau Toba.
            Air terjun ini dikelilingi oleh rimbunan pepohonan yang berada dalam kawasan hutan, sehingga apabila Anda berada di sekitar objek wisata ini maka Anda akan melihat beberapa satwa seperti burung hingga beberapa jenis serangga yang terbang dan hinggap di pepohonan, dan pada malam harinya di sekitar kawasan ini pun serangga seperti kunang-kunang tampak menyala diantara gelapnya malam. Untuk menuju ke objek wisata Air Terjun Sampuran Efrata, sebelumnya Anda harus menjelajah kawasan hutan yang terdapat di perbukitan Danau Toba. Jalur perjalanan yang dilintasi sama sekali tidak terdapat medan yang berat dan jaraknya pun tidak terlalu jauh, bahkan dari jarak beberapa meter saja derasnya suara air terjun ini sudah terdengar. Ketika tiba di objek wisata air terjun ini maka panorama air terjun yang indah akan segera memanjakan mata Anda.
            Air Terjun ini tampak mempesona, dengan debit airnya yang deras. Debit air tersebut berasal dari aliran sungai yang terdapat di atasnya, dan kabarnya aliran air tersebut tidak pernah kering meskipun pada bulan-bulan tertentu terjadinya musim kemarau. Bahkan ketika musim penghujan, debit air terjunnya pun menjadi beberapa kali lipat derasnya. Air terjun tersebut turun melalui tebing-tebing yang terjal dan curam dengan debit air yang sangat deras, sehingga memenuhi sungai yang mengalir dibawahnya. Tebing-tebing tersebut pun bentuknya cukup unik, dengan tingginya yang mencapai 26 meter, tebing-tebing tersebut memiliki kontur yang bertingkat-tingkat dan di dominasi oleh bebatuan cadas berwarna hitam.  Apabila Anda ingin menikmati air terjun sembari berdiri di sekitar bebatuan tersebut pun diharapkan berhati-hati karena tentu saja sangat licin.
            Seperti halnya air terjun yang terdapat di sekitar Danau Toba, Air Terjun Sampuran Efrata ini pun cukup dingin. Ya, berendam sembari menikmati air terjun memang menjadi agenda wajib yang harus dilakukan, apalagi setelah menempuh perjalanan yang cukup melelahkan ketika menuju air terjun ini, tentu saja sangat menyegarkan. Setelah puas berkunjung ke lokasi air terjun, Anda pun juga dapat melakukan kegiatan Treking di sekitar kawasan hutan sembari menikmati panorama alam khas dataran tinggi.
            Bagi Anda yang hobbi berfotografi, Anda pun dapat menyalurkan hobbi Anda di sekitar objek wisata ini, sebab keindahan objek wisata ini memang layak Anda abadikan dalam kamera Anda. Karena eksotika yang terdapat di air terjun ini, tak jarang beberapa fotografer profesional yang berasal dari Indonesia pun juga pernah menyambangi objek wisata air terjun ini untuk memotret pesona yang terdapat di sekitarnya. Saat ini pengunjung tidak perlu mengeluarkan uang banyak untuk berkunjung ke tempat tersebut, cukup membayar uang parkir Rp 2.000 dan uang parkir Rp5000 untuk sepeda motor parkir di rumah penduduk, pengunjung dapat menikmati keindahan alam Air Terjun Efrata tersebut.
            Ya, berwisata ke air terjun ini dapat menjadi pilihan alternatif pariwisata bagi Anda sekedar untuk mengisi waktu luang setelah melakukan berbagai aktivitas. Di objek wisata Air Terjun Sampuran Efrata, Anda tak hanya dapat merasakan kesegaran airnya, Anda pun juga dapat menelusuri kawasan hutan sembari menikmati udara segar yang masih alami.',
            'lokasi' => 'Desa Sosor Dolok, Kecamatan Harian',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Air Terjun Naisogop',
            'gambar' => 'Air Terjun Naisogop.png',
            'deskripsi' => 'Air Terjun ini berada di Sarimarrihit, Sianjur Mula-mula lebih kurang 15 km dari Pusat Kabupaten Samosir, Sumatera Utara . Air terjun ini disebut-sebut juga sebagai air Terjun Efrata, karena memiliki bentuk yang sedikit mirip.
            Air Terjun ini memiliki ketinggian sekitar 7 meter dengan debit air yang cukup besar. Meskipun bisa dikatakan bahwa air terjun yang satu ini tidak terlalu besar dengan debit air cukup deras, tapi tetap memberikan keindahan yang sangat menawan bagi para wisatawan. Berada di kawasan perbukitan dengan hutan yang masih lebat, air terjun ini memang cocok untuk para pegiat petualangan di alam bebas. Karena untuk berwisata ke sana, pengunjung tentunya perlu melewati medan yang cukup ekstrem. Jalur tracking menuju ke air terjun adalah tanjakan dan turunan dengan bebatuan yang cukup terjal. Namun hal itu justru yang menjadikan air terjun ini menarik, yaitu karena sangat alami dan benar-benar menampilkan sisi keindahan alam dari danau Toba. 
            Selain bermain air, para pengunjung juga bisa berkemah di area kosong yang tersedia. Sungguh  menyenangkan bisa berkemah di kawasan air terjun. Mandi, bermain air, mencuci muka bisa dilakukan saat berada di bawah aliran air terjun. Sejuknya udara sambal menikmati panorama hutan hujan tropis di Kalimantan semakin membuat syahdu suasana.
            Berswafoto, aktivitas ini pasti bakal gak ketinggalan untuk kita lakukan dimana pun kita menjelajahi setiap keindahan alam danau toba. Gemuruh air terjun serta banyaknya lokasi spot foto menjadi daya tarik utama dari destinasi tersebut.
            Harga tiket masuk untuk menikmati pesona air terjun ini, biaya retribusi Rp7.000. Dengan harga segitu kamu akan disambut oleh aliran air yang jernih, dan tak sabar untuk langsung nyebur menikmati dingin dan segarnya air dari Air Terjun ini. Air Terjun Naisogop berada Dilingkar Pusuk Buhit Samosir, letaknya tidak terlalu jauh dari menara Tele. Untuk menuju air terjun ini, anda hanya memerlukan waktu 10 Menit dari Menara Tele.',
            'lokasi' => 'Sarimarrihit, Sianjur Mula-mula',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Batu Hobon',
            'gambar' => 'batu hobon.jpg',
            'deskripsi' => 'Wisata Batu Hobon terletak di Desa Limbong Sagala Kecamatan Sianjur Mula-Mula, Kabupaten Samosir. Hobon dalam Bahasa batak artinya Peti. Batu ini berdiameter sekitar satu meter dengan bagian bawah berongga. Diperkirakan batu ini merupakan sebuah lorong yang mungkin saja berbentuk goa. Dulunya di tempat ini kerap diadakan upacara sakral yang masih berlanjut hingga sekarang. Upacara itu diyakini sebagai penghormatan pada roh leluhur sekaligus menerima pewahyuan dari nenek moyang, dikenal dengan sebutan “Tatea Bulan”.
            Menurut Cerita yang beredar di Masyarakat Batu Hobon adalah buah tangan Raja Uti untuk menyimpan harta kekayaan orang Batak, berupa benda-benda pusaka dan alat-alat musik. Diyakini pula, di dalam Batu Hobon ini tersimpan Lak-Lak (sejenis kitab) yang berisi ajaran dan nilai-nilai luhur. Berdasarkan pewahyuan yang datang pada keturunannya, diperkirakan pada suatu saat, benda-benda yang tersimpan dalam batu itu akan di keluarkan sendiri oleh Raja Uti, yang menurut kepercayaan setempat tidak pernah mati (baca: moksa), Dia akan tetap hidup dalam pribadi-pribadi pilihan yang tentu masih keturunannya. Dipercaya ada banyak harta berharga peninggalan Raja batak di dalam Batu Hobon ini seperti Gondang Saparangguan (Seperangkat Gendang Batak), Pagar (Ramuan penangkal penyakit), hujur sumba baho (tombak bertuah), piso solom Debata (pedang bertuah), pungga Haomasan (Batu Gosok Emas), tintin Sipajadi-jadi (Cincin Ajaib), tawar Sipagabang-abang, Sipagubung-ubung, Sipangolu na Mate, Siparata Naung Busuk (Obat yang mampu menghidupkan yang sudah mati, serta menyegarkan kembali yang telah busuk). Pagar, Hujur Sumba Baho, Piso Solom Debata, Pungga Haomasan, Tintin Sipanjadi-jadi dan Tawar, semua dibungkus dengan buku lak-lak atau buku Pustaha, yaitu Buku Ilmu Pengetahuan tentang kebudayaan Batak, yang di tulis dengan aksara Batak.
            Batu Hobon ini memiliki misteri tersendiri, sebab dulunya pernah tiga kali orang-orang ingin membongkar paksa batu ini untuk menemukan harta karun didalamnya, namun sia-sia adanya. Tidak ada satupun orang atau kelompok yang bisa membukanya. Bahkan orang-orang yang mencoba membukanya akan terkena Bala atau musibah.',
            'lokasi' => 'Desa Limbong Sagala Kecamatan Sianjur Mula-Mula, Kabupaten Samosir',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Pantai Indah Situngkir',
            'gambar' => 'pantai situngkir.jpg',
            'deskripsi' => 'Pantai Indah Situngkir [PIS] adalah salah satu Objek Wisata Nasional di kawasan Danau Toba yang lokasinya berada di Desa Situngkir, Kecamatan Pangururan, Kabupatan Samosir, Sumatera Utara, Indonesia.
            Pemerintah Republik Indonesia telah mencanangkan kawasan Danau Toba sebagai Destinasi Pariwisata Nasional (DPN) dan Destinasi Pariwisata Unggul (DPU) karena keindahan alamnya yang tidak tertandingi dan yang merupakan danau vulkanik terbesar di Asia Tenggara. Danau Toba juga sudah menjadi Icon Pariwisata Nasional selain Bali yang sudah lama dikenal sebagai salah satu objek wisata favorit sejak tahun 1980-an.
            Di tengah Danau Toba, terdapat Pulau Samosir yang luasnya 1,144 km persegi dan Pulau Samosir ini adalah Kabupaten baru dari pemekaran Kabupaten Toba Samosir di tahun 2003. Ibukota Kabupaten Samosir adalah Kota Pangururan dan lokasi Pantai Indah Situngkir (PIS) berada di Desa Situngkir yang berjarak kira kira 10 km dari Kota Pangururan.
            Potensi keindahan alam Pantai Indah Situngkir (PIS) mempunyai daya tarik tersendiri sehingga Pemerintah Pusat di tahun 2019 telah  mendeklarasikan PIS sebagai Destinasi Wisata Baru di Kawasan Danau Toba. Komitment ini ditandai dengan kunjungan Presiden Joko Widodo beserta rombongan, untuk memastikan pembangunan di kawasan PIS menjadi Wisata Pantai Unggulan. Saat ini telah dibangun Jetty sebagai sarana transportasi air bagi para turis yang berkunjung melalui kapal penumpang ataupun speed boat. 
            Pantai Situngkir juga menyuguhkan beberapa penginapan di pinggir pantai yang menghadap pantai, harganya pun relative terjangkau yaitu mulai dari Rp 300.000 per malamnya dengan fasilitas yang lengkap dan nyaman. Menikmati pemandangan Danau Toba serta matahari terbenam bisa dinikmati dengan puas dari penginapan tersebut. Pemandangan di Pantai Situngkir menjelang sore hari hingga menjelang matahari terbenam akan terlihat sangat indah.
            Terdapat 3 rute yang tersedia untuk mencapai lokasi tersebut. Rute pertama adalah dari Kota Medan menuju Berastagi hingga akhirnya sampai di Kabanjahe, lalu melanjutkan perjalanan kembali menuju Tigaras, dari Tigaras Anda bisa menumpang fery atau kapal penumpang menuju ke Simanindo dan dilanjutkan ke Parbaba. Rute yang kedua bisa dicapai melalui Kota Medan menuju Siantar lalu menuju Parapat, dari parapat Anda bisa menyebrang ke Tomok Parbaba. Untuk rute yang ketiga Anda bisa menempuh Medan – Berastagi – Kabanjahe – Sidikalang – Tele – Parbaba.',
            'lokasi' => 'Desa Situngkir, Kecamatan Pangururan, Kabupatan Samosir, Sumatera Utara, Indonesia',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Air Terjun Pangaribuan',
            'gambar' => 'air terjun pangaribuan.jpg',
            'deskripsi' => 'Air Terjun Pangaribuan adalah salah satu Air terjun Indah di Kecamatan Palipi, Samosir dikembangkan menjadi salah satu Objek wisata andalan Oleh Dinas Pariwisata Samosir. Samosir memang memiliki potensi tak terhingga, baik Kekayaan Sejarah, pemandangan alam, kuliner, pasir putih dan air terjun. Salah satu kekayaan alam yang dimiliki oleh samosir adalah air terjun Pangaribuan ,yang letaknya berada di desa Pardomuan Nauli , Batu Jagar, Kecamatan Palipi yang letaknya sekitar 40 km dari Kota Pangururan.

            Air terjun Pangaribuan ini memiliki kedalaman luas limpahan air kurang lebih sekitar 400m2 dengan tinggi sekitar 35m. Air terjun Pangaribuan ini diayakini dulu adalah sebagai tempat persemayaman Raja Lontung. Air terjun ini begitu indah, dan biasanya akan memancing adrenalin pegiat pendaki. Jalan berbatu-batu dan mendaki memiliki nilai eksotis untuk paket wisata treking dan waterfal. Dinas Pariwisata Samosir juga mendokumentasikan letak strategis dan keindahan Air terjun ini untuk nantinya akan menjadi bahan referensi pembahasan Bappeda dalam waktu dekat. Objek ini adalah objek ritual, ada air terjunnya. Terus objek ini dianggap situs atau objek wisata budaya. Tempat ini masih agak jarang dikunjungi wisatawan karena pamornya yang belum begitu terkenal. Tempat wisata ini sudah dilakukan kerjasama dengan Kemenparekraf (Kementerian Pariwisata dan Ekonomi Kreatif) dengan membangun amenitas di sana. 
            Air terjun Pangaribuan ini diayakini dulu adalah sebagai tempat persemayaman Raja Lontung. Air terjun ini begitu indah, dan biasanya akan memancing adrenalin pegiat pendaki. Jalan berbatu-batu dan mendaki memiliki nilai eksotis untuk paket wisata treking dan waterfal.
            Dinas Pariwisata Samosir juga mendokumentasikan letak strategis dan keindahan Air terjun ini untuk nantinya akan menjadi bahan referensi pembahasan Bappeda dalam waktu dekat.',
            'lokasi' => 'Kecamatan Palipi, Samosir',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Aek Sipitu Dai',
            'gambar' => 'aek sipitu dai.jpg',
            'deskripsi' => 'Salah satu tujuan wisata di Pulau Samosir yang terbilang cukup terkenal yaitu objek wisata Aek Sipitu Dai yang terdapat di Desa Limbong Mulana, Kecamatan Sianjur Mula-mula, Kabupaten Samosir, Sumatera Utara. "Objek wisata ini dikenal oleh masyarakat sekitar dengan sebuah sumber mata air yang memiliki tujuh pancuran, yang konon katanya memiliki tujuh rasa yang berbeda pula. Aek Sipitu Dai atau dikenal juga dengan air tujuh rasa ini adalah sumber mata air yang lokasinya terletak di bawah sebuah pohon rimbun. Sumber mata air ini cukup unik, pasalnya air yang keluar dari tujuh pancuran di mata air ini dipercaya memiliki rasa yang berbeda-beda.  Sementara itu, pengunjung yang datang, bisa mencicipi setiap air dari tujuh pancuran tersebut. Air dari ketujuh pancuran ini memiliki rasa manis, asam, bahkan mirip soda. Kemudian, selain dikenal karena keunikan tujuh rasanya, siapa sangka Aek Sipitu Dai juga dipercaya oleh masyarakat sekitar memiliki banyak manfaat. Masyarakat sekitar mempercainya air yang bersumber dari tujuh pancuran ini, bisa menyembuhkan berbagai penyakit. Dan yang minumnya belum menemukan jodoh, bisa dipertemukan.
            Selain itu, informasi yang di peroleh lainnya, keberadaan sumber mata air ini sangat kental dengan kisah legenda yang beredar di penduduk sekitar. Aek Sipitu Dai dalam beberapa tahun terkahir ini memang terus mengalami peningkatan sebagai tempat objek wisata.
            Selain menjadi salah satu daya tarik wisata, mata air ini juga digunakan oleh penduduk sekitar untuk kebutuhan sehari-hari, terutama saat musim kemarau tiba. Bagi pengunjung yang berasal dari pusat Kota Medan yang ingin menyambangi lokasi, akan melakukan perjalanan darat selama lebih kurang lima jam dengan jarak tempuh sekitar 192 kilometer.',
            'lokasi' => 'Desa Limbong Mulana, Kecamatan Sianjur Mula-mula, Kabupaten Samosir, Sumatera Utara',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Menara Doa Sinatapan',
            'gambar' => 'menara doa sinatapan.jpg',
            'deskripsi' => 'Menara Doa Sinatapan yang berlokasi di Jl. Air Hangat No.10, Kabupaten Samosir, Sumatera Utara merupakan hasil karya putra Samosir yang telah sukses diperantauan yaitu KombesPol Jannes Sinurat. Dimana dia terinspirasi untuk membangun kampung halamannya dengan mendirikan sebuah Menara Doa untuk mendukung Pariwisata di daerahnya khususnya wilayah Samosir. Menara doa ini bukan milik saya sendiri, tetapi milik seluruh rakyat Samosir dan untuk wisatawan yang berkunjung. Tempati ini akan menjadi tempat berdoa dan menikmati alam Samosir, kata Jannes Sinurat dengan rendah hati. Jannes berharap Pemerintah Kabupaten Samosir dapat membuat menara doa tersebut sebagai ikon pariwisata. Sebanyak 8 orang pendoa akan tinggal menetap di menara dan melayani setiap pengunjung.
            Menara Doa Sinatapan dikenal dengan bangunannya yang unik. Warna kuning keemasan yang mencolok dari menara sangat mudah untuk Anda temukan. Lokasinya tidak terlalu jauh dari Aek Rangat Hot Spring. Menara ini menyuguhkan pemandangan Danau Toba yang menawan karena bangunannya yang memang menghadap langsung ke arah danau.
            Bangunan ini sebenarnya merupakan tempat untuk beribadah atau berdoa bagi umat kristiani. Pada tahun 2016, bangunan menara dibuka sebagai tempat wisata. Semua masyarakat diperbolehkan untuk masuk dan mengunjunginya. Pengunjung juga diizinkan untuk berfoto-foto di tempat ini, namun harus tetap menjaga sopan santun.',
            'lokasi' => 'Jl. Air Hangat No.10, Kabupaten Samosir, Sumatera Utara',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Pantai Pasir Putih Tandarabun',
            'gambar' => 'pantai pasir putih tandarabun.jpg',
            'deskripsi' => 'Pantai Pasir Putih Tandarabun merupakan salah satu destinasi wisata di Kabupaten Samosir yang dibentuk pada tahun 2018 lalu. Pantai yang terletak di Desa Dosroha Kecamatan Simanindo ini menyediakan banyak fasilitas, mulai dari homestay, warung kuliner, spot foto serta wahana air yang sangat digemari anak-anak.
            Pantai Parbaba sering dikunjungi oleh wisatawan mancanegara maupun lokal. Butiran pasir yang terhampar di bibir pantai kerap diburu wisatawan, dengan menyajikan warna tunggal yaitu putih lantaran bebatuan di kawasan Danau Toba diketahui banyak mengandung zat kapur. Parbaba ini bukan satu-satunya tempat yang menyajikan pantai pasir putih seperti ini. Ada pantai Tandarabun juga di Simanindo. Pasir Putih Parbaba memiliki jajaran pemandangan alam yang menarik meliputi bukit dan perairan danau terlihat begitu menawan. Biasanya pengunjung juga akan menunggu suasana sunset dan sunrise melalui pinggiran pantai ini. 
            Selain berenang di dalam danau, pengunjung bisa mencoba wahana bermain yang cukup memuaskan. Seperti Banana Boat, kapal-kapalan, yang dapat digunakan setelah membayar uang sewa. Selain itu, pengunjung bisa membentangkan tikar di pinggir pantai sambil merasakan angin yang begitu sejuk.
            Namun, wisatawan tidak diizinkan membawa tikar sendiri. Karena di pantai sudah disediakan tikar yang bisa di sewa. Harga bervariasi, mulai Rp 60 ribu. Beberapa fasilitas lainnya yang terdapat di Pantai Pasir Putih Parbaba yaitu spot kuliner. Begitu juga dengan beberapa toko yang menjual sovenir sebagai oleh-oleh atau kenangan saat berlibur di Parbaba. Bagi pengunjung yang ingin bermalam di kawasan Pantai Pasir Putih Parbaba tak perlu khawatir. Sebab terdapat Villa, Lasfayer Homestay dan Hotel Parbaba Beach. Untuk harga bervariasi dibandrol mulai dengan harga Rp 300 ribuan per malam. Pantai ini mudah di jangkau, berjarak lebih kurang 12 kilometer dari Pangururan dengan waktu tempuh 30 menit. Untuk biaya masuk, pengunjung akan diminta uang retribusi sebesar Rp 5 ribu rupiah saja.',
            'lokasi' => 'Desa Dosroha Kecamatan Simanindo',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Batu Marhosa',
            'gambar' => 'Batu marhosa.png',
            'deskripsi' => 'Mendengar tentang adanya Batu Bernapas (Batu Marhosa) di Pulau Samosir, mungkin banyak dari kita yang heran. Sebab, kita dari dulu mengetahui hanya makhluk hidup yang bisa bernapas. Namun berbeda untuk yang ini, tempat yang dikenal dengan sebutan Batu Marhosa ini memang terbilang cukup unik. 

            Batu Marhosa atau Batu Bernapas terletak di desa Parmonangan Huta Sorsortolong, Kecamatan Simanindo di Pulau Samosir. Melansir dari travellingmedan, batu marhosa atau batu bernapas ini dikatakan dengan nama tersebut karena batu ini memiliki celah yang dapat mengeluarkan hembusan angin. Celah yang terdapat pada batu tidak berdiameter luas namun celah tersebut diyakini warga setempat tembus sampai ke dasar Danau Toba.
            Jika berkunjung ke tempat ini, maka coba ulurkan tangan ke celah bebatuan untuk merasakan hembusan yang lembut oleh udara dari celah batu tersebut. Letak batu bernapas ini sedikit tersembunyi sehingga harus memperhatikan posisinya yang berada tepat di sisi kiri badan jalan. Objek wisata ini juga masih jarang disinggahi sehingga suasana sepi benar-benar menyelimuti. Batu yang ditumbuhi oleh lumut hutan batas ini ini dianggap sakral meski tak ada legenda atau misteri yang mengawali objek wisata tersebut. Batu marhosa atau batu bernapas, yaitu salah satu tempat yang unik di Samosir Danau Toba. Karena batu ini menghembuskan udara dari celahnya. Konon celah di batu tersebut katanya langsung terhubung ke Danau Toba, Dikatakan batu bernapas karena batu ini memiliki celah yang dapat mengeluarkan hembusan angin. Jika Anda berkunjung ke tempat ini, maka coba ulurkan tangan ke celah bebatuan untuk merasakan hembusan yang lembut oleh udara dari celah batu tersebut. Meski tak ada legenda atau misteri yang menyertai batu, namun batu bernapas ini ternyata dianggap sakral.Tak hanya masyarakat Indonesia, tetapi turis mancanegara juga banyak yang berkunjung ke tempat ini. Sambil menikmati keindahan batu bernapas, masyarakat juga bisa melihat pemandangan Danau Toba dari puncak tebing tersebut.',
            'lokasi' => 'Desa Parmonangan Huta Sorsortolong, Kecamatan Simanindo di Pulau Samosir',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Pantai Sibolazi',
            'gambar' => 'pantai sibolazi.jpg',
            'deskripsi' => 'Pantai Sibolazi adalah pantai yang dapat Anda temukan ketika Anda berkunjung ke Pulau Samosir-Sumatera Utara, tepatnya di Sibolazi, kecamatan Simanindo. Pulau ini memiliki keindahan tersendiri dibandingkan destinasi wisata lainnya di sekitar Danau Toba. Hal ini dikarenakan lokasinya yang berada di tengah Danau Toba. Ketika Anda mengendarai mobil, sepeda motor atau bersepeda mengelilingi pulau samosir, singgalah di pantai Sibolazi, tepatnya di 200 Meter dari Pelabuhan Simanindo arah ke Tuk-tuk. Pepohonan dan pasir yang bersih akan Anda lihat ketika sesampainya Anda di lokasi ini. Pantai ini tidak kalah indahnya dengan Pantai Pasir Putih Parbaba. Ini menjadi opsi lain ketika Anda melihat keramaian di Pantai Parbaba, bergeraklah segera menuju Pantai Sibolazi sekitar 15 Menit dengan mengendarai Mobil.
            Pantai ini menawarkan  keindahan alam, pasir putihnya dan pesona pemandangan Danau Toba yang begitu memukau. Hal ini yang menjadikan Pantai Sibolazi menjadi sebuah objek wisata yang paling diburu belakangan ini. Pantai ini sangat aman bagi anak-anak yang ingin berenang, dikarenakan pantai ini memiliki area yang dangkal kira-kira 10 meter dari tepi pantai. Udara segar yang berasal dari  pepohanan yang rindang akan semakin memanjakan Anda untuk bersantai atau berjemur di tepi pantai sambil menikmati keindahan Danau Toba.
            Masyarakat sekitar juga sangat ramah kepada setiap pengunjung yang datang.
            Berikut tips-tips berwisata dengan tertib berbudaya dan ceria di Pantai Sibolazi.
            -	Bertanyalah dengan sopan kepada masyarakat sekitar dengan menuturkan sapaan ( Tulang kepada orang tua laki-laki atau Nantulang untuk orang tua perempuan).
            -	Jika Anda keturunan batak sebaiknya terlebih dahulu berkenalan dengan memberitahukan marga /boru Anda.
            -	Jika pada musim mangga biasnya sih pada bulan Juni dan Juli, biasanya pantai Sibolazi akan banyak dipenuhi oleh buah mangga yang berjatuhan di pesisir pantai. Jika Anda ingin mencicipi buah tersebut, mintalah dengan sopan kepada masyarakat sekitar disitu dan pasti akan diberikan.
            -	Mari jaga kebersihan lingkungan pantai Sibolazi sehingga kita masih dapat mempertahankan karya yang diberikan TYME kepada generasi kita.',
            'lokasi' => 'Sibolazi, kecamatan Simanindo',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Kuburan Di atas Pohon Lumban Sijabat',
            'gambar' => 'kuburan diatas pohon.jpg',
            'deskripsi' => 'Untuk menambah daya tarik pariwisata Kabupaten Samosir yang terkenal dengan panorama Danau Toba, alam yang indah dan berhawa sejuk, kini destinasi wisata itu memiliki objek wisata baru, yaitu objek wisata budaya berupa kuburan di atas pohon di Lumban Sijabat. Objek wisata itu telah diresmikan Bupati Samosir, Rapidin Simbolon, Kamis (19/12/2019), berada di Lumban Sijabat, Desa Tomok Kecamatan Simanindo.
            Untuk sampai ketujuan objek wisata Kuburan di Atas Pohon ini, pengunjung hanya menempuh waktu 5 menit dari pelabuhan kapal wisata Tomok, baik menggunakan roda empat maupun roda dua, bahkan berjalan kaki pun, 15 – 25 menit pengunjung akan sampai di objek wisata tersebut.
            Selain melihat keunikan objek wisata baru ‘Kuburan di Atas Pohon’, pengunjung juga akan merasakan sejuk dan asrinya alam sekitar objek wisata tersebut. Sumur tua yang konon ceritanya dapat menyembuhkan segala penyakit, juga menambah kesakralan lokasi objek wisata tersebut. Begitu juga di pintu masuk, tampak menara megah setinggi 15 meter yang permanen seperti menara pandang Tele, yang mana pengunjung dapat melihat keindahan Kota Tomok dengan hamparan sawah dan perladangan dengan view Danau Toba.
            Bupati Rapidin Simbolon, menyampaikan, dengan diresmikannya objek wisata kuburan di atas pohon akan menambah objek wisata di Kabupaten Samosir, dan akan menambah kunjungan wisata domestik maupun luar negeri.
            Menurut cerita masyarakat setempat, makam itu merupakan makam dari Raja Ompu Siuluan atau Oppong Gasal, anak kesayangan dari Raja Oppu Datu. Raja Oppu Datu membangun makam ini untuk mengenang anaknya. Makam ini sudah ada sejak sekitar 450 tahun yang lalu. Oppu Gasal dikubur dalam sebuah peti batu dan di sekitarnya ditanami Pohon Hariara. Kemudian tumbuh Pohon Bitatar dan Jajabi di dekat peti.
            Seiring berjalannya waktu, makam tersebut terangkat di atas ketiga pohon dan jadilah seperti yang bisa disaksikan saat ini.',
            'lokasi' => 'Lumban Sijabat',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Pantai Pasir Putih Sipinggan,',
            'gambar' => 'pantai sipinggan.jpg',
            'deskripsi' => 'Tak satupun sudut Danau Toba ingkar janji dengan segala keindahannya. Ke mana dan di mana pun sekelilingnya, selalu memberikan suasana nyaman dan tenteram, yang sangat memanjakan mata, hati maupun pikiran setiap penikmatnya. Salah satunya di sisi bibir pantai Danau Toba di Nainggolan, ada pantai Sipinggan atau sudah dikenal dengan nama Sipinggan Beach.
            Pantai yang memanjang sekitar 100 meter ini termasuk pantai yang cukup dikenal di Pulau Samosir maupun di luar pulau. Dari Pantai Sipinggan ini, Pulau Sibandang, perbukitan Muara  di Tapanuli Utara dan Sipinsur Geosite di Perbukitan Humbang Hasundutan, jelas terlihat.
            Pantainya yang berpasir putih dan landai, sangat cocok dijadikan tempat berenang dan bermain bersama komunitas masing-masing. Warga sekitar pantai ini juga sangat ramah dan siap menyediakan ikan jika dipesan untuk dibakar di sore menjelang malam.
            Pantai Sipinggan Memiliki kemiripan dengan berbagai jenis pantai di berbagai sisi Danau Toba. Hanya saja, untuk track recordnya, lokasi pantai Sipinggan ini pernah menjadi tuan rumah acara spektakuler, yakni “Festival Tuak”, yang mengangkat nilai kearifan lokal.
            Pantai Sipinggan Nainggolan, menjadi tujuan wisata dari tiga daerah di luar Kabupaten Samosir, yaitu dari daerah Tapanuli Utara, Toba dan Humbang. Akses ketiga daerah itu ke tempat ini sangat mudah dengan menggunakan angkutan kapal feri maupun kapal wisata tradisional.
            Untuk akses ke lokasi ini, berikut pilihan cara yang dapat dilalui menuju Pantai Pasir Putih Sipinggan:
            1.	Jalur Danau ( Balige – Onan Runggu Via Ferry) hanya hitungan menit sudah nyampe kok nanti ke Pantai Sipinggan
            2.	Jalur Danau II ( Ajibata – Nainggolan , Ajibata – Tomok ) Lanjut Naik Sepeda Motor atau Mobil ke Arah Onan Runggu
            3.	Jalur Darat Dari Pangururan Naik Sepeda Motor atau Mobil ke Arah Onan Runggu sekitar 4 -5 Jam 
            Selain itu, sepanjang jalan menuju Pantai Sipinggan, dapat dijumpai berbagai aktifitas pertanian masyarakat yang menarik perhatian sesuai musimnya. Seperti membajak sawah musim tanam, melihat hamparan padi yang menghijau hingga memanen padi bila sudah tiba waktunya.',
            'lokasi' => 'Nainggolan',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Menara Pandang Sinapuran',
            'gambar' => 'Menara Pandang Sinapuran .png',
            'deskripsi' => 'Menara pandang Sinampuran atau yang biasa disebut juga dengan Menara Pandang Simanido yang berlokasi di Simanindo, Kabupaten Kabupaten Samosir. Hal ini membuat banyak pengunjung dari luar daerah berdatangan. Tak terkecuali bertambahnya destinasi berbasis desa wisata yang semakin masif. Hal tersebut membuat Pemerintah Kabupaten (Pemkab) Samosir ikut mendorong perkembangan Pariwisata. Perkembangan wisata memang terlihat selama 2019. Setidaknya beberapa desa berlomba mengembangkan potensi pariwisatanya. Begitu juga desa membangun pariwisatanya melalui Kelompok Sadar wisata (Pokdarwis) Membentuk daerahnya menjadi tujuan kunjungan wisata serta pembentukan Badan Usaha Milik Desa (Bumdes) dalam pengelolan obyek wisatanya.
            Dari Menara pandang terdapat 4 sudut pemandangan :
            -	Mengarah ke Huta (Kampung Tradisional)
            -	Mengarah ke Pulau Tao
            -	Mengarah ke Pantai Langat
            -	Pemandangan untuk berswafoto
            Menara Ini terdiri dari dua lantai. Dimana lantai paling atas digunakan sebagai balkon. Di lantai bawah terdapat tangga sebagai akses menuju lantai atas.  
            Menara pandang Sinapuran dibanguan pada tahun 2017 lalu. Keunikan menara ini terletak pada lokasinya sendiri yang menjulang diatas gundukan tanah menyerupai perbukitan kecil sejajar Pantai Langat. 
            Meskipun menara ini dibangun pribadi oleh sang empunya, namun tidak ada biaya tiket masuk jika mengunjungi tempat ini, sehingga siapapun yang ingin mengunjungi Menara Pandang Sinapuran dapat menghemat bajet. Tempat ini cukup terbilang sepi di hari biasa, namun pada hari libur atau weekend menara pandang ini akan disesaki wisatawan karena tempatnya yang luas',
            'lokasi' => 'Simanindo, Kabupaten Kabupaten Samosir',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Rumah Hela',
            'gambar' => 'rumah hela.jpg',
            'deskripsi' => 'Jabu Hela yang berada persis di atas Aek Rangat Pangunguaran, atau suka disebut Ruma Hela, sungguh nama yang masih asing bagi saya dan barangkali juga Anda. Ya, selama ini, bicara Pusuk Buhit, orang hanya disuguhi berbagai cerita mengenai situs budaya Batu Hobon, Aek Sipitu Dai, Batu Sawan, dan lain-lainnya. Padahal, seperti yang saya tahu kemudian, Jabu Hela tidak kalah pentingnya dibandingkan dengan situs lainnya itu. Ia setara dengan Parik Sabungan, perkampungan Guru Tatea Bulan yang kemudian dipindahkan dalam bentuk monumen di Sopo Guru Tatea Bulan sekarang. Sebabnya, Jabu Hela adalah perkampungan adik Guru Tatea Bulan bernama Raja Isumbaon. Kedua-duanya merupakan anak atau generasi kedua dari Siraja Batak.

            Tidak salah kenapa Jabu Hela masih asing di telinga banyak orang. Rupanya, lokasinya baru ditemukan pada tahun 2011 melalui proses pencarian supranatural yang panjang. Ya, sebelumnya orang hanya tahu perkampungan Raja Isumbaon berada di Sijambur Mula Toppa atau Huta Sijambur. Persisnya di mana, kala itu masih tanda tanya besar.
            Gunung Pusuk Buhit dalam mitologi Batak dikenal sebagai tempat asal-muasal suku Batak. Siraja Batak dan Guru Tatea Bulan disebut-sebut menempati lereng bagian barat di dua buah lembah vulkanik yang subur yaitu Limbong dan Sagala (Kecamatan Sianjurmula-mula). Raja Isumbaon memilih tempat yang jauh, di balik gunung, di sebuah lambung bagian timur di ketinggian kurang lebih 500 meter di atas permukaan Danau Toba.
            Jabu Hela berada persis di atas bongkahan belerang Aek Rangat Pangururan. Dalam peta modern sekarang, Jabu Hela berada di perbatasan Desa Siogung-ogung dan Desa Tanjung Bunga, Kecamatan Pangururan. Meski dekat, tidak ditemukan jalur dari Aek Rangat ke Jabu Hela, malah boleh dikatakan mustahil karena medannya berat, lerengnya curam dengan kemiringan ekstrem. Menuju ke sana, kami dipandu Pak Naibaho dengan Kijang tuanya mengitari jalan Pangururan-Tele yang melingkar di lereng selatan, kemudian mendaki ke dataran tinggi lereng Pusuk Buhit ke Desa Tanjung Bunga.
            Pemandangan di sini sangat indah. Dinding kaldera Toba di kawasan Dairi dan Simalungun tampak membiru di arah utara. Ke arah selatan perairan danau memperlihatkan tutupan luas yang bervariasi, lebih sempit, beberapa tanjung yang saling menjangkau membentuknya serupa selat. Pulau Samosir tampak berendam manja seolah menyurukkan kakinya ke dasar danau yang sejuk. Lanskap Toba Holbung dan pebukitan Humbang bagai melambai dari kejauhan.
            Suasana terasa hening. Padang ilalang dan tumbuhan liar berwarna kuning kehijauan tampak mendominasi seluruh tutupan gunung ke mana mata memandang. Di sela hamparan itu pohon pinus berbaris acak dari lereng sampai ke puncak dengan batang yang ramping. Saya menoleh ke atas. Puncak Pusuk Buhit tak jauh lagi dari tempat saya berdiri. Di bawah puncak terdapat sebuah ceruk yang ditumbuhi rerimbun pepohonan tropis dan matahari tepat berkacak di ubun-ubun.',
            'lokasi' => 'Pangururan',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'Pondok Remaja Lagundi',
            'gambar' => 'pondok remaja lagundi.jpg',
            'deskripsi' => 'Jika membahas keindahan Danau Toba tentu tak ada habis-habisnya. Danau terbesar di Indonesia ini menyimpan sejuta keindahan yang mampu memikat dan memanjakan mata siapa saja yang berkunjung kesana. Seperti pengalaman beberapa waktu lalu, saat berlibur ke perairan timur Danau Toba, tepatnya di Lagundi, Desa Sitamiang, Kecamatan Onan Runggu, Kabupaten Samosir, Sumatera Utara.
            Ada banyak tempat yang bisa dikunjungi di Lagundi. Di antaranya, seperti Pondok dan Perkemahan di Lagundi, Bermain Banana di Villa Vantas Sitamiang, berkeliling Danau Toba dengan kapal wisata dan melihat keindahan Air Terjun Situmurun.
            
            Contohnya Pondok Wisata Lagundi Samosir terletak di Sumatera Utara, Indonesia. Daerah atau landmark terdekat adalah Onan Runggu. Alamat Pondok Wisata Lagundi Samosir adalah Pantai Lagundi Onan Runggu Samosir, Sitamiang, Onan Runggu, Kabupaten Samosir. Pondok Wisata Lagundi Samosir memiliki cukup banyak tempat yang terdaftar di sekitarnya dan kami mencakup setidaknya 74 tempat di sekitarnya 
            Wisata Samosir di Kecamatan Onan Runggu yang menyediakan lokasi untuk perkemahan dilengkapi dengan pondok remaja ini, merupakan tempat wisata dengan airnya segar dan udara sejuk.
            Wisata ini sangat cocok untuk muda-mudi yang ingin kemping dan bermain out bound dengan view Danau Toba, yang sangat indah. Bermain Banana boat merupakan kegiatan yang tak kalah seru yang sayang untuk dilewatkan. Di Desa Sitamiang ini terdapat wahana bermain Banana Boat yang bisa disewa dengan jumlah 4-6 orang. Air danaunya yang jernih menjadi penambah keseruan dalam bermain banana boat mengitari pinggiran Danau Toba. Sesekali menyeburkan diri ke danau dari atas banana, akan terasa seru dan menguji adrenalin. Jika masih merasa kurang puas bermain Banana Boat, bisa juga menyewa kapal wisata disana. Ada 2 kapal wisata yang melayani wisatawan untuk berkeliling Danau Toba. Kapal Vantas 1 dan Vantas 2 merupakan kapal wisata dengan 3 tingkat yang terbilang besar dan cepat. Kapal ini juga mampu mengangkut kendaraan roda 2 maupun roda 4 walau bukan termasuk jenis kapal ferry. 
            Dari villa ini terlihat jelas Air Terjun Situmurun yang airnya langsung jatuh ke danau. Selain itu, di sisi timurnya terlihat tebing bebatuan yang sangat indah berdiri kokoh di pinggiran Danau Toba. Sungguh pemandangan yang sangat indah yang sayang untuk dilewatkan tentunya.
            Nah, untuk menuju Lagundi ada 2 rute yang bisa dilalui. Pertama dengan menyeberang menggunakan kapal dari Pelabuhan Ajibata ke Pelabuhan Lagundi. Kedua adalah menyeberang dari Pelabuhan Ajibata ke Tomok. Namun, pilihan kedua bisa jadi rekomendasi, karena ada tempat-tempat menarik yang bisa dilalui nantinya sepanjang perjalanan.Menuju wisata Lagundi dengan mengitari Pulau Samosir dari Tomok ternyata sangatlah indah. Akan melewati beberapa tempat wisata, seperti Air Terjun Sigarattung, Batu Marhosa dan Panatapan Dolok Nagugun Sipira. Belum lagi indahnya jalan berkelok sepanjang perjalanan akan menambah pengalaman nantinya.',
            'lokasi' => 'Pantai Lagundi Onan Runggu Samosir, Sitamiang, Onan Runggu, Kabupaten Samosir',
        ]);

        ObjekWisata::create([
            'nama_objek' => 'TOUR DE SAMOSIR',
            'gambar' => 'TOUR DE SAMOSIR.jpg',
            'deskripsi' => 'Keliling pulang Samosir, sambil menikmati sejuknya udara, indahnya pemandangan Danau Toba, dan budaya sambil gowes. Liat kanan, liat kiri suasana damai dan indah.

            Tour de Samosir 3
            23 - 24 Juli 2022',
            'lokasi' => 'TukTuk',
        ]);

        Event::create([
            'nama_event' => 'Pelatihan Pengelolaan Toilet di Destinasi Wisata',
            'gambar' => 'Pelatihan Pengelolaan Toilet di Destinasi Wisata.jpg',
            'deskripsi' => 'Telah terlaksana Pelatihan Pengeloaan Toilet kepada Pemuda Pelaku Usaha Pariwisata yang di laksanakan oleh Kementrian Pariwisata dan Ekonomi Kreatif. Pelatihan ini dilaksanakan dengan tujuan membangun kesadaran akan pentingnya toilet yang layak di daerah wisata.

            Kabupaten Samosir akan selalu berbenah untuk menyambut sobat wisata semua, untuk mendapatkan kenyamanan saat berlibur di Samosir.',
            'lokasi' => 'Pangururan'
        ]);

        Event::create([
            'nama_event' => 'Marangkat Tunjang',
            'gambar' => 'Marangkat Tunjang.jpg',
            'deskripsi' => 'DATANG DAN HADIRI!...
            Dalam rangka pelaksanaan Pekan Kebudayaan daerah, @disbudparsamosir mempersembahkan Lomba Olahraga Tradisional "MARANGKAT TUNJANG"
            
            Hari: Sabtu, 04 Juni 2022
            Pukul: 08:00 WIB s.d Selesai
            Tempat: Creative Hub Samosir, Pantai Indah Situngkir, Kecamatan Pangururan, Kabupaten Samosir
            
            yang bekerja sama dengan Komite Olahraga Rekreasi Masyarakat Kabupaten Samosir.
            
            Sampai jumpa di Pantai Indah Situngkir sobat wisata',
            'lokasi' => 'Creative Hub Samosir, PantaiIndah Situngkir, Kecamatan Pangururan, Kabupaten Samosir'
        ]);

        Event::create([
            'nama_event' => 'Penanaman Pohon dan Pemasangan Solar Panel',
            'gambar' => 'Penanaman Pohon dan Pemasangan Solar Pane2.jpg',
            'deskripsi' => 'Penanaman Pohon dan Pemasangan Solar Panel merupakan salah satu cara PT. ASTRA INTERNASIONAL untuk merayakan 65 Tahun berdirinya.
            Aksi dari PT. Astra Internasional ini merupakan salah satu langkah untuk melestarikan alam dan membantu kehidupan masyarakat semakin sejahtera.
            
            Tidak lupa juga rombongan dari PT. Astra berlibur dan menikmati indahnya Danau Toba dan Pulau Samosir. Menikmati budaya yang ada di Samosir dan masakan khas Batak menjadikan pengalaman baru untuk rombongan.
            Terima kasih kepasa Astra yang telah berinvestasi Pohon dan Solar Panel di Samosir. Mari kita jaga alam Samosir dan kita dapat terus menikmati alam ini.
            
            Untuk perusahaan perusahaan yang ada di Indonesia ini ayo liburan juga ke Samosir. Apapun profesi anda liburannya di Samosir aja.',
            'lokasi' => 'Pangururan'
        ]);

        Event::create([
            'nama_event' => 'Satu Indonesia Awards 2022',
            'gambar' => 'Satu Indonesia Awards 2022.jpg',
            'deskripsi' => 'Astra mengajak seluruh anak bangsa untuk semangat melaju bersama menjadi potret inspirasi dalam memajukan bangsa melalui SATU Indonesia Awards ke-13 tahun 2022. Apresiasi Astra yang diberikan kepada anak bangsa yang senantiasa memberi manfaat bagi masyarakat dalam lima bidang, yaitu Kesehatan, Pendidikan, Lingkungan, Kewirausahaan, dan Teknologi, serta satu kategori Kelompok yang mewakili lima bidang tersebut.

            Penerima apresiasi tingkat nasional masing-masing akan mendapatkan dana kegiatan sebesar Rp65.000.000 (enam puluh lima juta rupiah) serta pembinaan kegiatan.
            
            Periode pendaftaran 9 Maret – 9 Agustus 2022 melalui www.satu-indonesia.com
            
            Syarat dan ketentuan penerima apresiasi 13th SATU Indonesia Awards 2022*
            
            - Berusia maksimal 35 tahun
            - Individu atau kelompok (minimal 3 orang)
            - Kegiatan harus orisinal
            - Kegiatan telah berlangsung minimal 1 tahun
            - Belum pernah menerima penghargaan nasional/internasional
            - Bukan karyawan Grup Astra dan mitra SATU Indonesia Awards
            - Dapat mendaftarkan orang lain yang memenuhi persyaratan dan ketentuan mengikuti 13th SATU Indonesia Awards 2022
            - Program yang diajukan tidak pernah menerima manfaat dari Grup Astra',
            'lokasi' => 'Samosir'
        ]);

        Event::create([
            'nama_event' => 'Festival Desa Situngkir',
            'gambar' => 'Festival Desa Situngkir.jpg',
            'deskripsi' => 'Jumat sampai Sabtu, tanggal 1 - 2 Juli 2022.
            Panggung Kesenian Desa Situngkir.
            
            - Vokal Solo Remaja
            - Vokal Solo Dewasa
            - Vokal Grup / Trio
            - Tortor',
            'lokasi' => 'Panggung Kesenian Desa Situngkir'
        ]);

        Event::create([
            'nama_event' => 'Inkubasi Subsektor Kriya "Ukir Kayu"',
            'gambar' => 'Inkubasi Subsektor Kriya Ukir Kayu1.jpg',
            'deskripsi' => 'Kemenparekraf melalui kegiatan Inkubasi Subsektor Kriya "Ukir Kayu" diselenggarakan di Samosir Cottage Tuktuk, 19-23 Mei 2022 mendorong dan menumbuhkan semangat baru para pengukir kayu yang berasal dari Kabupaten Toba dan Kabupaten Samosir dibuka resmi oleh Direktur Kuliner, Kriya, Desain dan Fesyen, Ibu Yuke Sri Rahayu (19/05).
            Turut hadir Ibu Detty Silaban, Kepala Divisi Pengembangan Bisnis BPODT, memberikan arahan kepada para peserta pentingnya subsektor kriya dalam mendukung pengembangan Ekonomi Kreatif dan Pariwisata di kawasan Danau Toba yang merupakan Destinasi Pariwisata Super Prioritas.
            Kepala Dinas Kebudayaan dan Pariwisata Kabupaten Samosir yang diwakili oleh Jontiner Sinabutar, SP, MM selaku Kabid Usaha Pariwisata dan Kerjasama menyampaikan harapan atas pelaksanaan kegiatan Inkubasi Subsektor Kriya khususnya Ukir Kayu dapat menumbuhkan dan mengembangkan kreasi dimana yang saat ini sangat membutuhkan perhatian baik melalui proses kreasi, produksi hingga distribusi dalam mendukung kepariwisataan di Kabupaten Samosir khususnya.
            Jontiner Sidabutar, SP, MM juga menyampaikan harapan dengan kegiatan inkubasi ini dapat membantu dalam mengembangkan ekonomi kreatif untuk keluar dari permasalahan selama Pandemi Covid-19. 
            Kepada para peserta diharapkan untuk tetap bersemangat mengikuti seluruh rangkaian sesi kegiatan yang akan berlangsung selama 5 (lima) hari ini, agar nantinya dapat menghadapi perkembangan permintaan pasar khususnya permintaan wisatawan dan tren permintaan pasar e-commers baik lokal maupun internasional, tegas Jontiner Sinabutar.
            Dalam sambutannya sebelum membuka secara resmi kegiatan Inkubasi Subsektor Kriya "Ukir Kayu", Ibu Yuke berharap banyak untuk kepada para peserta dapat ikut menjadi pelaku ekonomi kreatif yang mendukung program pemerintah yang sudah menetapkan Danau Toba sebagai Destinasi Pariwisata Super Prioritas, dimana kegiatan ini akan ada tindak lanjut kedepannya dan tidak berhenti sampai disini.',
            'lokasi' => 'Samosir Cottage Tuktuk'
        ]);

        Event::create([
            'nama_event' => 'Samosir Jazz Culture 2022',
            'gambar' => 'Samosir Jazz Culture 2022.jpg',
            'deskripsi' => 'Buat Sobat Dispar yang udah menanti serunya Lantunan Music Jazz sambil menikmati keindahan Danau Toba, harap bersiap!

            🎸🎷🎺 Samosir Jazz Culture 2022 bakal hadir di Pulau Samosir !🤩 Mulai dari menjajal Lagu2 Batak yang di aransemen ke dalam Genre Jazz , memperkenalkan Produk2 umkm Samosir dan panorama keindahan Danau Toba yang tiada duanya, semua tersedia lengkap!
            
            Gerakan yang kita kampanyekan dalam SJC tahun ini yaitu : Ecofriendly dan Sustainibility dengan disarankan semua peserta masuk ke Lokasi event tidak membawa dan menjual botol plastik, menggunakan tumbler, refill bottle memakai kotak ecogreen umkm. Semoga dalam SJC tahun ini bisa menggerakkan ekonomi dan membuka lapangan pekerjaan seluas2nya untuk masyarakat sekitar .
            
            Samosir Jazz Culture 2022 akan digelar pada:
            📆 30 April 2022 📍Open Stage Tuktuk, Kabupaten Samosir, Sumatera Utara,
            
            Pendaftaran akan segera tutup karena tiket terbatas. Buruan daftar di website http://atourin.id/SJC sekarang! 🙌 Untuk informasi lebih lanjut, cek terus berita terbarunya di @samosirjazz',
            'lokasi' => 'Open Stage Tuktuk, Kabupaten Samosir, Sumatera Utara'
        ]);

        Event::create([
            'nama_event' => 'Lomba kuliner Tradisional',
            'gambar' => 'Lomba kuliner Tradisional.jpg',
            'deskripsi' => 'Budaya Batak adalah hal yang begitu melekat dalam pembangunan kepariwisataan Samosir. Karenanya, kami selalu merawat dan memelihara warisan budaya yang merupakan sebuah kebanggaan agar tak lekang oleh waktu dan perubahan zaman.

            Salah satu warisan budaya itu adalah kuliner tradisional. Nah, pada Kamis (28/4/2022), digelar perlombaan memasak kuliner tradisional Batak. Petunjuk teknis sudah Mimin jelaskan pada slide.
            
            So, para Sobat Samosir, ayo ikutan pada acara ini. Segera daftar, atau hadir jadi penonton, juga boleh.
            
            Kamu harus saksikan kebolehan masyarakat Batak dalam mengolah dan menyajikan kuliner tradisional yang begitu nikmat dan menggiurkan.!',
            'lokasi' => 'Komplek Tugu Raja Naibaho Tajur Pangururan'
        ]);

        Event::create([
            'nama_event' => 'Event',
            'gambar' => 'TELE.jpg',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam voluptate asperiores dolor, sed voluptates magni porro perspiciatis pariatur deserunt voluptas facere vel ad aliquid doloribus eos nam quo. Velit, perferendis animi obcaecati saepe temporibus quisquam autem! Laudantium delectus, molestiae expedita explicabo in maxime eveniet fuga vitae quia? Temporibus, architecto repellendus!',
            'lokasi' => 'random'
        ]);

        Review::create([
            'jenisreview_id' => '1',
            'nama' => 'Feby',
            'alamat' => 'Balige',
            'deskripsi' => 'Objek Wisatanya sangat menarik'
        ]);

        Review::create([
            'jenisreview_id' => '2',
            'nama' => 'Irma',
            'alamat' => 'Laguboti',
            'deskripsi' => 'Fasilitas yang ada sudah sangat baik'
        ]);

        Review::create([
            'jenisreview_id' => '4',
            'nama' => 'Yolanda',
            'alamat' => 'Samosir',
            'deskripsi' => 'Makanan yang tersedia di lokasi tempat wisata yang ada di samosir sangat beragam dan sangat enak'
        ]);

        Review::create([
            'jenisreview_id' => '3',
            'nama' => 'Yolanda',
            'alamat' => 'balige',
            'deskripsi' => 'Eventnya sangat menarik'
        ]);

        Contact::create([
            'contact' => '(0632) 22312',
            'jenis_contact' => 'Telepon',
        ]);
        Contact::create([
            'contact' => 'disbudparsamosir@gmail.com',
            'jenis_contact' => 'Email',
        ]);
        Contact::create([
            'contact' => '@disbudparsamosir',
            'jenis_contact' => 'Instagram',
        ]);
        Contact::create([
            'contact' => '@Dinas Kebudayaan dan Pariwisata Samosir',
            'jenis_contact' => 'Youtube',
        ]);
    }
}
