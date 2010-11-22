<?php
/**
*
* help_faq [Bahasa Indonesia]
*
* @package language
* @version $Id: help_faq.php 2010 Sastra Manurung zourbuth@gmail.com
* @copyright (c) 2010 Zourbuth Studio
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Masalah Masuk dan Pendaftaran'
	),
	array(
		0 => 'Kenapa saya tidak dapat masuk?',
		1 => 'Ada beberapa alasan mengapa ini terjadi. Pertama, pastikan nama pengguna dan kata sandi anda sudah benar. Jika memang sudah benar, silahkan hubungi pemilik halaman untuk meyakinkan bahwa anda tidak sedang dilarang. Kemungkinan lainnya adalah pemilik website memiliki konfigurasi yang mengakibatkan error, sehingga mereka perlu memperbaikinya.'
	),
	array(
		0 => 'Kenapa saya harus mendaftar?',
		1 => 'Sebenarnya tidak harus, tergantung kepada admnistrator halaman apakah anda perlu mendaftar untuk mempostkan pesan. Akan tetapi; pendaftaran akan memberikan anda akses ke fitur tambahan yang tidak tersedia untuk pengguna tamu seperti gambar avatar yang bisa ditentukan sendiri, perpesanan pribadi, mengirim e-mail kepada sahabat, berlangganan grup pengguna, dsb. Hanya membutuhkan beberapa saat untuk pendaftaran sehingga disarankan agar anda mendaftar.'
	),
	array(
		0 => 'Kenapa saya dikeluarkan secara otomatis?',
		1 => 'Jika anda tidak mencentang kotak <em>Biarkan saya masuk secara otomatis</em> pada saat anda masuk, halaman akan tetap memasukkan anda di lain waktu. Hal ini untuk mencegah penyalahgunaan account anda oleh orang lain. Untuk tetap masuk, centang kotak tersebut saat anda masuk. Tidak disarankan jika anda mengakses halaman dari komputer shared, sebagai contoh; perpustakaan, kafe internet, komputer lab univerisitas, dsb. Jika anda tidak melihat checkbox tersebut, itu berarti administrator halaman menonaktifkan fitur tersebut.'
	),
	array(
		0 => 'Bagaimana membuat agar nama pengguna saya tidak tercantum di daftar online pengguna?',
		1 => 'Di dalam Papan Pengaturan Pengguna anda, di bagian “Preferensi Halaman”, anda akan menemukan pilihan <em>Sembunyikan status online</em>. Dengan mengaktifkan pilihan ini menjadi <samp>Ya</samp> maka anda hanya akan ditampilkan untuk administrator, moderator dan anda sendiri. Anda akan dihitung sebagai pengguna tersembunyi.'
	),
	array(
		0 => 'Saya kehilangan kata sandi!',
		1 => 'Jangan panik! Ketika kata sandi anda tidak bisa diperoleh kembali, maka dengan mudahnya bisa di reset. Kunjungi halaman masuk dan klik <em>Saya lupa kata sandi</em>. Ikuti instruksinya maka anda bisa masuk lagi secepatnya.'
	),
	array(
		0 => 'Saya sudah mendaftar tetapi tidak bisa masuk!',
		1 => 'Pertama, periksa nama pengguna dan kata sandi anda. Jika sudah benar, maka satu dari dua hal bisa terjadi. Jika fasililtas COPPA diaktifkan dan anda ditentukan berumur dibawah 13 tahun pada saat pendaftaran, anda harus mengikuti instruksi yang anda terima. Beberapa halaman juga membutuhkan pendaftaran baru tersebut diaktivasi, dengan anda sendiri atau dengan administrator sebelum anda bisa masuk; informasi ini diberitahukan pada saat pendaftaran. Jika anda dikirim e-mail, ikutilah petunjuk tersebut. Jika anda tidak menerima e-mail, anda harus memberikan alamat e-mail yang benar atau e-mail tersebut telah dimasukkan ke dalam daftar spam. Jika anda yakin alamat e-mail yang anda berikan tersebut benar, silahkan coba hubungi administrator.'
	),
	array(
		0 => 'Saya sudah mendaftar sebelumnya tetapi tidak bisa masuk?!',
		1 => 'Coba periksa e-mail yang dikirimkan kepada anda pada saat pendaftaran pertama, periksa nama pengguna dan kata sandi anda dan coba lagi. Ada kemungkinan administrator menonaktifkan atau menghapus account anda untuk beberapa alasan. Selain itu, beberapa halaman secara periodik menyingkirkan pengguna yang belum membuat post untuk jangka waktu yang lama untuk mengurangi ukuran database. Jika ini terjadi, cobalah mendaftar kembali dan lebih aktif di dalam diskusi.'
	),
	array(
		0 => 'Apa yang dimaksud dengan COPPA?',
		1 => 'COPPA, atau Child Online Privacy and Protection Act 1998, adalah suatu hukum di Amerika Serikat yang mengharuskan suatu website yang secara potensial bisa mengumpulkan informasi dari yang belum dewasa dibawah umur 13 tahun harus menulis persetujuan orang tua atau metode lain dari persetujuan orang tua yang legal, mengijinkan pengumpulan informasi secara pribadi yang dapat diidentifikasi dari yang bukan untuk dewasa di bawah umur 13 tahun. Jika anda tidak yakin terhadap seseorang yang mencoba mendaftar, atau website yang anda coba daftarkan, silahkan hubungi penasehat hukum untuk mendapatkan bantuan. Mohon dicatat bahwa phpBB Group tidak dapat memberikan saran resmi dan bukan merupakan suatu pusat informasi yang resmi tentang hal tersebut, kecuali seperti yang diuraikan dibawah ini.',
	),
	array(
		0 => 'Kenapa saya tidak bisa mendaftar?',
		1 => 'Kemungkinannya adalah pemilik website telah melarang alamat IP anda atau nama pengguna yang anda coba daftarkan. Pemilik website mungkin juga menonaktifkan pendaftaran untuk mencagah datangnya pengunjung yang baru untuk mendaftar. Silahkan hubungi administrator halaman untuk pertolongan.',
	),
	array(
		0 => 'Apa yang dilakukan “Hapus semua cookie halaman”?',
		1 => '“Hapus semua cookie halaman” akan menghapus semua cookie yang dibuat oleh phpBB yang berguna untuk membuat anda tetap terhubung dengan halaman. Juga memberikan fungsi seperti membaca track jika diaktifkan oleh pemilik halaman. Jika anda memiliki masalah masuk atau keluar dari halaman, menghapus cookie halaman mungkin dapat membantu.',
	),
	array(
		0 => '--',
		1 => 'Preferensi Pengguna Dan Pengaturan'
	),
	array(
		0 => 'Bagaimana cara mengubah pengaturanku?',
		1 => 'Jika anda seorang pengguna yang sudah terdaftar, semua pengaturan anda tersimpan di database halaman. Untuk mengubahnya, kunjungi Papan Pengaturan Pengguna anda; sebuah link biasanya ditemukan pada bagian atas halaman. Sistem ini mengijinkan anda untuk mengubah semua pengaturan dan preferensi anda.'
	),
	array(
		0 => 'Penanggalannya tidak tepat!',
		1 => 'Ada kemungkinan penganggalan tersebut ditampilkan dari zona waktu yang berbeda dengan tempat anda sekarang. Jika ini adalah permasalahannya, kunjungi Papan Pengaturan Pengguna anda dan ubah zona waktu anda untuk menyamakan dengan zona waktu daerah tertentu, seperti London, Paris, New York, Sydney, dsb. Mohon dicatat bahwa dengan mengubah zona waktu, seperti kebanyakan pengaturan yang lainnya, hanya dapat dilakukan oleh pengguna yang terdaftar. Jika anda tidak terdaftar, maka sekarang ini adalah waktu yang tepat untuk melakukan pendaftaran.'
	),
	array(
		0 => 'Saya ubah zona waktunya tetapi waktunya masih tetap salah!',
		1 => 'Jika anda yakin telah mengatur zona waktu dan Summer Time/DST dengan benar dan masih salah, maka waktu yang tersimpan di server adalah salah. Silahkan beritahukan administrator untuk memperbaiki masalah ini.'
	),
	array(
		0 => 'Bahasaku tidak ada dalam daftar list!',
		1 => 'Salah satunya adalah administrator belum menginstal bahasa anda atau tak satupun orang menterjemahkan bahasa halaman ke dalam bahasa anda. Silahkan coba hubungi administrator halaman jika mereka bisa menginstal paket bahasa yang anda perlukan. Jika paket bahasa tidak ada, silahkan membuat terjemahan yang baru. Untuk informasi lebih lanjut dapat ditemukan pada webiste phpBB (lihat link pada bagian bawah halaman).'
	),
	array(
		0 => 'Bagaimana saya menampilkan gambar di bawah nama pengguna saya?',
		1 => 'Ada dua gambar yang bisa anda tampilkan dibawah nama pengguna anda pada saat melihat post. Tergantung pada gaya yang digunakan, gambar pertama mungkin adalah gambar yang diasosiasikan dengan gambar ranking anda, biasanya dalam bentuk bintang, blok atau titik, yang menggambarkan berapa banyak post yang anda buat di halaman. Yang kedua adalah, biasanya gambar yang lebih besar, yang lebih dikenal sebagai avatar dan biasanya unik dan berbeda dengan yang lain. Hal tersebut tergantung pada administrator halaman untuk mengaktifkan avatar dan memilih cara bagaimana avatar tersedia. Jika anda tidak bisa memakai avatar, silahkan hubungi administrator halaman dan tanyakan tentang alasan mereka.'
	),
	array(
		0 => 'Apa ranking saya dan bagaimana saya mengubahnya?',
		1 => 'Ranking yang tampak di bawah nama pengguna anda menunjukkan jumlah post yang sudah anda buat atau mengidentifikasikan pengguna tertentu, contohnya moderator dan administrator. Secara umum, anda tidak dapat mengubah kalimat dari semua ranking halaman karena hal tersebut diatur oleh administrator halaman. Dimohon untuk tidak menyalahgunakan halaman dengan membuat post yang tidak perlu untuk menaikkan ranking anda. Kebanyakan halaman tidak bisa mentolerir hal ini dan moderator ataupun administrator akan dengan mudah menurunkan jumlah post anda.'
	),
	array(
		0 => 'Pada saat saya mengklik link e-mail pengguna, halaman meminta saya untuk masuk?',
		1 => 'Hanya pengguna yang terdafar bisa mengirimkan e-mail kepada pengguna yang lain melalui halaman e-mail yang sudah dibuat, tetapi jika administrator mengaktifkan fitur ini. Hal ini dilakukan untuk mencagah penyalahgunaan sistem e-mail pengguna anonim.'
	),
	array(
		0 => '--',
		1 => 'Permasalahan Posting'
	),
	array(
		0 => 'Bagaiman saya mempost topik dalam sebuah forum?',
		1 => 'Untuk mempost topik yang baru, klik tombol yang relevan pada tampilan forum ataupun topik. Anda harus mendaftar terlebih dahulu sebelum anda mempostkan sebuah pesan. Sekumpulan daftar perijinan anda pada setiap forum tersedia di bagian bawah dari tampilan forum ataupun topik. Contohnya: Anda dapat mempost topik baru, Anda dapat memberikan suara di pemungutan suara, dan sebagainya.'
	),
	array(
		0 => 'Bagaimana mengubah atau menghapus sebuah post?',
		1 => 'Anda hanya bisa mengubah dan menghapus post anda, kecuali anda adalah seorang administrator halaman atapun moderator. Anda dapat mengubah sebuah post dengan mengklik tombol ubah untuk post yang relevan, terkadang hanya bisa dalam waktu yang terbatas setelah post tersebut dibuat. Jika seseorang sudah membalas post tersebut, anda akan menemukan kotak kecil berisi teks yang ditampilkan di bawah post pada saat anda kembali ke topik, yang akan ditampilkan daftar jumlah anda mengubah post tersebut beserta waktu dan tanggalnya. Ini hanya muncul apabila seseorang sudah membuat balasan, tetapi tidak akan muncul jika moderator ataupun administrator mengubah post tersebut, meskipun mereka mungkin meninggalkan sepenggal catatan mengapa mereka mengubah post tersebut. Mohon dicatat bahwa pengguna biasa tidak dapat menghapus post setelah seseorang membuat balasan.'
	),
	array(
		0 => 'Bagaimana menambahkan tanda tangan di post saya sendiri?',
		1 => 'Untuk menambahkan tanda tangan pada post anda, anda harus membuatnya terlebih dahulu melalui Papan Pengaturan Pengguna. Setelah dibuat, anda bisa mencentang kotak <em>Tampilkan tanda tangan</em> pada halaman posting untuk menambahkan tanda tangan anda. Anda juga bisa menambahkan tanda tangan untuk semua post anda dengan mencentang tombol radio yang berhubungan pada profil anda. Jika anda melakukan hal tersebut, anda masih bisa mengembalikan tanda tangan yang ditambahkan ke dalam post dengan tidak mencentang kotak tambahkan tanda tangan pada halaman posting.'
	),
	array(
		0 => 'Bagaimana saya membuat pemungutan suara?',
		1 => 'Pada saat anda membuat topik baru ataupun mengubah post pertama pada topik, kliklah tab “Penciptaan Pemungutan Suara” di bawah halaman posting; jika anda tidak melihat tab tersebut, maka anda tidak memiliki perijinan untuk membuat pemungutan suara. Masukkan sebuah judul dan paling sedikit dua pilihan pada isian yang sesuai, yakinkan bahwa setiap pilihan dipisahkan oleh baris baru pada area teks. Anda juga dapat memasukkan sejumlah pilihan yang bisa dipilih oleh pengguna selama pemungutan suara pada “Pilihan per pengguna”, batas waktu dalam hari untuk pemungutan suara (0 untuk waktu yang tidak terbatas) dan terakhir adalah pilihan untuk pengguna apakah bisa mengubah suara mereka.'
	),
	array(
		0 => 'Mengapa saya tidak dapat menambah pilihan pemungutan suara yang lain?',
		1 => 'Batas untuk pemungutan suara tersebut diatur oleh administrator halaman. Jika anda rasa ingin menambahkan pilihan yang lain untuk pemungutan suara anda melebihi jumlah pilihan yang diijinkan, silahkan hubungi administrator halaman.'
	),
	array(
		0 => 'Bagaimana mengubah atau mengahapus sebuah pemungutan suara?',
		1 => 'Seperti pada post, pemungutan suara hanya dapat diubah oleh pembuatnya, moderator ataupun administrator. Untuk mengubah pemungutan suara, klik ubah post pertama pada topik; post tersebut memiliki hubungan dengan pemungutan suara. Jika tidak satu orangpun memberikan suaranya, pengguna dapat menghapus pemungutan suara atau mengubah pemungutan suara tersebut. Akan tetapi, jika pengguna sudah memberikan suaranya, hanya administrator ataupun moderator yang bisa mengubah ataupun menghapus post tersebut. Ini mencegah agar pemungutan suara tersebut tidak diubah di tengah perjalanan.'
	),
	array(
		0 => 'Kenapa saya tidak dapat mengakses sebuah forum?',
		1 => 'Beberap forum mungkin hanya terbatas untuk pengguna ataupun grup tertentu. Untuk melihat, membaca, membuat post atau melakukan tindakan lain yang mungkin anda butuhkan untuk perijinan yang spesial, hubungi moderator administrator halaman untuk mendapatkan akses.'
	),
	array(
		0 => 'Kenapa saya tidak bisa menambahkan lampiran?',
		1 => 'Perijinan lampiran diberikan per forum, per grup, atau per basis pengguna. Administrator mungkin tidak mengijinkan lampiran ditambahkan untuk forum tertentu yang anda posting, atau mungkin hanya beberapa grup yang bisa mempostkan lampiran. Hubungi administrator halaman jika anda tidak yakin kenapa anda tidak dapat menambahkan lampiran.'
	),
	array(
		0 => 'Kenapa saya mendapatkan peringatan?',
		1 => 'Setiap administrator halaman memiliki pengaturannya masing-masing untuk situs mereka. Jika anda sudah melanggar peraturan, maka anda akan diberikan peringatan. Silahkan dicatat bahwa hal tersebut adalah keputusan administrator halaman, dan phpBB Group tidak terlibat dengan peringatan yang diberikan situs tersebut. Hubungi administrator halaman jika anda tidak yakin tentang peringatan anda tersebut.'
	),
	array(
		0 => 'Bagaiman saya bisa melaporkan post ke moderator?',
		1 => 'Jika administrator halaman mengaktifkan fasilitas tersebut, anda akan melihat tombol untuk melaporkan post di sebelah post yang ingin anda laporankan. Dengan mengkliknya, maka akan membawa anda pada tahap yang diperlukan untuk melaporkan post tersebut.'
	),
	array(
		0 => 'Apa kegunaan tombol “Simpan” pada posting topik?',
		1 => 'Tombol tersebut mengijinkan anda untuk menyimpan sepenggal pesan untuk dilengkapi dan diajukan pada waktu yang akan datang. Untuk membuka pesan yang telah disimpan, kunjungi Papan Pengaturan Pengguna anda.'
	),
	array(
		0 => 'Kenapa post saya perlu disetujui?',
		1 => 'Administrator halaman bisa memutuskan post dalam forum yang anda posting tersebut yang membutuhkan pemeriksaan sebelum diperlihatkan. Administrator juga mungkin telah menempatkan anda pada suatu grup pengguna yang membutuhkan pemeriksaan sebelum post tersebut ditampilkan. Silahkan hubungi administrator halaman untuk informasi lebih lanjut.'
	),
	array(
		0 => 'Bagaimana saya menggeser topik saya?',
		1 => 'Dengan mengklik link “Geser topik” pada saat anda melihat topik tersebut, anda bisa “menggeser” topik pada bagian atas forum di halaman pertama. Akan tetapi, jika anda tidak melihatnya, maka penggeseran topik tidak diaktifkan atau selang waktu untuk menggeser topik tersebut belum tercapai. Juga memungkinkan untuk menggeser topik secara mudah dengan membalas topiknya, akan tetapi, yakinkan untuk mengikuti peraturan halaman pada saat melakukannya.'
	),
	array(
		0 => '--',
		1 => 'Format dan Tipe Topik'
	),
	array(
		0 => 'Apa yang dimaksud dengan BBCode?',
		1 => 'BBCode adalah sebuah implementasi HTLM, yang menawarkan pengaturan format besar untuk objek yang berbeda pada sebuah post. Penggunaan BBCode diberikan oleh administrator, namun hal tersebut juga bisa dinonaktifkan per dasar post dari halaman posting. BBCode itu sendiri serupa dengan gaya HTML, tetapi tag ditutup dengan tanda kurung kotak [ dan ] yang lebih baik dari penggunaan &lt; dan &gt;. Untuk informasi lebih lanjut tentang BBCode lihat panduan yang bisa diakses dari halaman posting.'
	),
	array(
		0 => 'Bisakah saya menggunakan HTML?',
		1 => 'Tidak. Tidak mungkin untuk mempost HTML pada halaman ini yang di render sebagai HTML. Kebanyakan format yang bisa dipakai menggunakan HTML justru bisa diaplikasikan menggunakan BBCode.'
	),
	array(
		0 => 'Apa yang dimaksud tanda senyuman?',
		1 => 'Tanda senyman atau emoticon, adalah gambar kecil yang bisa digunakan untuk menyatakan perasaan menggunakan kode singkat, sebagai contoh :) yang menunjukkan kegembiraan, sementara :( menggambarkan kesedihan. Daftar lengkap dari emoticon dapat dilihat pada halaman posting. Cobalah untuk tidak berlebihan menggunakan tanda senyuman, akan tetapi, sebagaimana tanda tersebut secara cepat menterjemahkan post yang tidak terbaca dan moderator bisa mengubahnya ataupun menyingkirkan keseluruhan post. Administrator halaman juga memiliki batas pengaturan jumlah senyuman yang bisa digunakan dalam post.'
	),
	array(
		0 => 'Bisakah saya mempost gambar?',
		1 => 'Ya, gambar bisa ditampilkan pada post anda. Jika administrator mengijinkan lampiran, anda dapat mengupload gambar ke halaman. Akan tetapi, anda harus memberikan link ke gambar yang disimpan ke web server yang bisa diakses oleh publik, contohnya http://www.example.com/my-picture.gif. Anda tidak bisa memberikan link gambar yang tersimpan di PC anda (kecuali komputer tersebut merupakan server yang bisa diakses oleh publik) ataupun gambar yang disimpan dengan secara mekanisme otentifikasi, seperti contoh. hotmail atau mailbox yahoo, situs yang dilindungi kata sandi, dsb. Untuk menampilkan gambar gunakan tag [img] BBCode.'
	),
	array(
		0 => 'Apa yang dimaksud pengumuman global?',
		1 => 'Pengumuman global mengandung informasi penting dan anda seharusnya membacanya sebisa mungkin. Pengumuman tersebut akan muncul pada setiap forum dan dalam Papan Pengaturan Pengguna anda. Perijinan pengumuman gobal diberikan oleh administrator halaman.'
	),
	array(
		0 => 'Apa yang dimaksud dengan pengumuman?',
		1 => 'Pengumuman sering mengandung informasi yang penting untuk forum yang sedang anda baca dan anda harus membacanya sebisa mungkin. Pengumuan ditampilkan pada bagian atas halaman forum yang dipostkan. Sebagai pengumuman global, perijinan pengumuman diberikan oleh administrator halaman.'
	),
	array(
		0 => 'Apa yang dimaksud dengan topik sticky?',
		1 => 'Topik sticky yang berada dalam forum ditampilkan di bawah pengumuman dan hanya pada halaman pertama. Terkadang sangat penting sehingga anda harus membacanya sebisa mungkin. Seperti pengumuman dan pengumuman global, perijinan topik sticky diberikan oleh administrator halaman.'
	),
	array(
		0 => 'Apa yang dimaksud dengan topik dikunci?',
		1 => 'Topik dikunci adalah topik yang tidak bisa dibalas oleh pengguna dan yang mengandung semua pemungutan suara yang dikandungnya secara otomatis akan diakhiri. Topik mungkin dikunci untuk beberapa alasan dan di atur oleh moderator forum ataupun administrator halaman. Anda juga bisa mengunci topik anda sendiri tergantung atas perijinan yang diberikan oleh administrator halaman.'
	),
	array(
		0 => 'Apa yang dimaksud dengan ikon topik?',
		1 => 'Ikon topik adalah gambar yang dipilih penulis yang berhubungan dengan post yang menggambarkan isinya. Kemampuan untuk menggunakan ikon topik tergantung pada perijinan yang diatur oleh administrator halaman.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Peringkat Pengguna dan Grup'
	),
	array(
		0 => 'Apa yang dimaksud dengan Administrator?',
		1 => 'Administrator merupakan anggota dengan tingkat tertinggi yang mengatur keseluruhan halaman. Anggota ini dapat mengatur semua segi dari pengoperasian halaman termasuk perijinan, melarang pengguna, membuat grup pengguna ataupun moderator, dsb., tergantung atas pendiri halaman dan perijinan yang diberikan administrator yang lain. Anggota ini juga memiliki kemampuan moderator penuh pada setiap forum tergantung atas pengaturan yang diberikan pendiri halaman.'
	),
	array(
		0 => 'Apa yang dimaksud dengan Moderator?',
		1 => 'Moderator adalah individu (atau grup individu) yang menjaga forum setiap hari. Mereka memiliki wewenang untuk mengubah atau menghapus dan mengunci post, membuka, memindahkan, menghapus dan memisahkan topik di forum yang mereka moderasi. Secara umum, moderator hadir untuk mencegah pengguna supaya pembicaraan tidak keluar dari topik atau materi yang bersifat penghinaan ataupun penyerangan.'
	),
	array(
		0 => 'Apa yang dimaksud grup pengguna?',
		1 => 'Grup pengguna adalah grup dari pengguna yang membagi komunitas menjadi bagian yang bisa diatur oleh administrator halaman. Setiap pengguna bisa memiliki beberapa grup dan setiap grup dapat diberikan perijinan individu. Hal ini memberikan kemudahan bagi administrator untuk mengubah perijinan untuk banyak pengguna sekaligus, seperti mengubah perijinan moderator atau memberikan akses pengguna ke forum pribadi.'
	),
	array(
		0 => 'Apa yang maksud dengan grup pengguna dan bagaimana saya bergabung?',
		1 => 'Anda bisa melihat semua grup pengguna melalui link “Grup pengguna” di dalam Papan Pengaturan Pengguna anda. Jika anda ingin bergabung dengan salah satunya, laksanakan dengan mengklik tombol yang yang tepat. Bagaimanpun juga tidak semua pengguna memiliki akses yang terbuka. Beberapa membutuhkan persetujuan bergabung, beberapa mungkin tertutup dan beberapa mungkin memiliki keanggotaan yang tersembunyi. Jika grup tersebut terbuka, anda dapat bergabung dengan mengklik tombol yang sesuai. Jika sebuah grup membutuhkan persetujuan untuk bergabung, anda bisa memohon bergabung dengan mengklik tombol yang sesuai. Pemimpin grup akan menyetujui permohonan anda dan mungkin bertanya kenapa anda ingin bergabung dengan grup tersebut. Dimohon untuk tidak mengganggu pemimpin grup jika mereka menolak permohonan anda; mereka pasti memiliki alasan terhadap hal tersebut.'
	),
	array(
		0 => 'Bagaimana saya bisa menjadi pemimpin grup?',
		1 => 'Seorang pemimpin grup biasanya ditetapkan pada saat awal grup pengguna diciptakan oleh administrator halaman. Jika anda berniat untuk membuat grup pengguna, hal yang pertama anda lakukan adalah menghubungi administrator; cobalah untuk mengirim pesan pribadi.',
	),
	array(
		0 => 'Mengapa beberapa grup pengguna menggunakan warna yang berbeda?',
		1 => 'Administrator halaman mungkin memberikan warna kepada anggota dari grup pengguna untuk mempermudah pengenalan anggota dari grup tersebut.'
	),
	array(
		0 => 'Apa yang dimaksud dengan “Grup default pengguna”?',
		1 => 'Jika anda merupakan anggota dari beberapa grup pengguna, maka grup default anda ditentukan oleh warna grup dan ranking grup yang seharusnya muncul untuk anda sebagai defaultnya. Administrator halaman mungkin memberikan perijinan untuk mengubah grup default anda melalui Papan Pengaturan Pengguna.'
	),
	array(
		0 => 'Apa yang dimaksud dengan link “Team”?',
		1 => 'Halaman ini akan menampilkan daftar dari staf halaman, termasuk administrator halaman dan moderator dengan keterangan lain seperti forum yang mereka moderasi.'
	),
	array(
		0 => '--',
		1 => 'Perpesanan Pribadi'
	),
	array(
		0 => 'Saya tidak dapat mengirim pesan pribadi!',
		1 => 'Ada tiga alasan untuk hal tersebut; anda belum terdaftar atau masuk, administrator halaman telah menonaktifkan pesan pribadi untuk keseluruhan halaman, atau administrator halaman mencegah anda untuk mengirimkan pesan. Hubungi administrator halaman untuk informasi lebih lanjut.'
	),
	array(
		0 => 'Saya selalu menerima pesan yang tidak diinginkan!',
		1 => 'Anda bisa memblokir pengguna mengirim pesan pribadi kepada anda dengan menggunakan peraturan pesan dalam Papan Pengaturan Pengguna. Jika anda menerima pesan pribadi yang berisi penghinaan dari pengguna tertentu, silahkan beritahukan administrator halaman; mereka memiliki kuasa untuk mencegah pengguna mengirimkan pesan pribadi.'
	),
	array(
		0 => 'Saya telah menerima spam atau e-mail penghinaan dari seseorang pada halaman ini!',
		1 => 'Kami mohon maaf atas hal tersebut. Bentuk fitur e-mail pada halaman ini memiliki penjagaan untuk mencoba dan melacak pengguna yang mengirimkan post, jadi silahkan hubungi administrator halaman dengan salinan lengkap e-mail yang anda terima. Sangat penting untuk mengikutsertakan judul yang mengandung keterangan dari pengguna yang mengirimkan e-mail tersebut. Administrator halaman selanjutnya dapat mengambil tindakan.'
	),
	array(
		0 => '--',
		1 => 'Teman dan Lawan'
	),
	array(
		0 => 'Apa yang dimaksud dengan daftar Teman dan Lawan saya?',
		1 => 'Anda bisa menggunakan daftar ini untuk mengatur anggota lain. Anggota yang ditambahkan ke daftar teman anda akan ditampilkan di dalam Papan Pengaturan Pengguna agar diketahui secara cepat status online dan mengirim pesan pribadi kepada mereka. Tergantung atas template yang digunakan, post-post dari teman anda juga akan dihurufterangi. Jika anda menambahkan pengguna ke daftar lawan anda, semua post dari mereka akan disembunyikan secara default.'
	),
	array(
		0 => 'Bagaiaman saya menambahkan/menyingkirkan pengguna dari daftar Teman dan Lawan?',
		1 => 'Anda dapat menambahkan pengguna ke dalam daftar dengan dua cara. Pada setiap profil pengguna, ada sebuah link untuk menambahkan mereka ke dalam daftar Teman dan Lawan anda. Selain itu, dari Papan Pengaturan Pengguna, anda secara langsung dapat menambahkan dengan memasukkan nama anggota mereka. Anda juga dapat menyingkirkan pengguna dari daftar dengan menggunakan halaman yang sama.'
	),
	array(
		0 => '--',
		1 => 'Mencari Forum'
	),
	array(
		0 => 'Bagaimana saya mencari forum?',
		1 => 'Masukkan syarat pencarian di kotak pencarian yang terdapat pada halaman indeks, forum ataupun halaman topik. Pencarian tingkat lanjut dapat diakses dengan mengklik link “Pencarian Tingkat Lanjut” yang tersedia pada semua halaman forum. Akses pencarian bisa tergantung atas gaya yang digunakan.'
	),
	array(
		0 => 'Kenapa pencarian saya tidak mendapatkan hasil?',
		1 => 'Pencarian anda kemungkinan terlalu samar dan mengikutsertakan istilah-istilah yang umum yang tidak diindeks oleh phpBB3. Silahkan untuk lebih spesifik dan gunakanlah pilihan yang tersedia di dalam pencarian tingkat lanjut tersebut.'
	),
	array(
		0 => 'Kenapa pencarian saya menghasilkan halaman kosong!?',
		1 => 'Pencarian anda terlalu banyak hasilnya untuk ditanggulangi oleh webserver. Gunakan “Pencarian tingkat lanjut” dan lebih spesifik dalam menggunakan istilah dan forum yang anda cari.'
	),
	array(
		0 => 'Bagaimana mencari anggota?',
		1 => 'Kunjungi halaman “Daftar anggota” dan klik link “Cari anggota”.'
	),
	array(
		0 => 'Bagaiman mencari post dan topik saya sendiri?',
		1 => 'Post anda dapat dilihat kembali dengan mengklik “Cari post pengguna” dalam Papan Pengaturan Pengguna atau pada halaman profil anda. Untuk mencari topik anda sendiri, gunakan pencarian tingkat lanjut dan isikan berbagai macam pilihan lain yang sesuai.'
	),
	array(
		0 => '--',
		1 => 'Langganan Topik dan Penunjuk Halaman'
	),
	array(
		0 => 'Apa perbedaan antara penunjuk halaman dan berlangganan?',
		1 => 'Penunjuk halaman pada phpBB3 sama seperti penunjuk halaman pada browser anda. Anda tidak akan diberitahukan pada saat ada pembaruan/perubahan, tetapi anda dapat kembali ke topik tersebut nantinya. Akan tetapi, dengan berlangganan akan memberitahukan anda apabila ada pembaruan pada topik atau forum melalui cara dan metode yang anda pilih.'
	),
	array(
		0 => 'Bagaimana saya berlangganan topik atau forum?',
		1 => 'Untuk berlangganan forum yang spesifik, klik link “Berlangganan forum” pada halaman forum. Untuk berlangganan topik, balas topik tersebut dengan mencentang atau mengklik link “Berlangganan topik” pada topik itu sendri.'
	),
	array(
		0 => 'Bagaimana untuk berhenti berlangganan?',
		1 => 'Untuk berhenti berlangganan, silahkan kunjungi Papan Pengaturan Pengguna dan ikuti link ke bagian langganan anda.'
	),
	array(
		0 => '--',
		1 => 'Lampiran'
	),
	array(
		0 => 'Lampiran seperti apa yang diijinkan pada halaman?',
		1 => 'Setiap halaman bisa mengijinkan ataupun tidak untuk tipe lampiran tertentu. Jika anda tidak yakin dengan apa yang diijinkan untuk diupload, silahkan hubungi administrator halaman untuk mendapatkan bantuan.'
	),
	array(
		0 => 'Dimana saya bisa menemukan semua lampiran saya?',
		1 => 'Untuk mencari lampiran yang sudah anda upload, silahkan kunjungi Papan Pengaturan Pengguna dan ikuti link ke bagian lampiran.'
	),
	array(
		0 => '--',
		1 => 'Terbitan phpBB'
	),
	array(
		0 => 'Siapa yang menulis halaman buletin ini?',
		1 => 'Perangkat lunak ini (dengan bentuk yang tidak dimodifikasi) dibuat, dikeluarkan dan merupakan hak cipta dari <a href="http://www.phpbb.com/">phpBB Group</a>. Dibuat tersedia di bawah naungan GNU General Public License dan bisa disebarkan secara bebas. Silahkan lihat link untuk lebih jelasnya.'
	),
	array(
		0 => 'Kenapa fitur X tidak tersedia?',
		1 => 'Perangkat lunak ini ditulis oleh dan lisensi phpBB Group. Jika anda menginginkan suatu fitur perlu ditambahkan, silahkan kunjungi website phpbb.com website dan lihat apa yang phpBB Group katakan. Dimohon untuk tidak membuat post permohonan fitur pada ke halaman phpbb.com, grup tersebut menggunakan SourceForge untuk menangani fitur baru. Silahkan baca forum tersebut dan lihat jika ada dan ikutilah prosedur yang diberikan di sana.'
	),
	array(
		0 => 'Siapa yang saya hubungi tentang penghinaan dan/atau permasalahan hukum pada halaman ini?',
		1 => 'Semua administrator yang terdaftar pada halaman “Team” merupakan orang yang tepat untuk dihubungi tentang keluhan anda tersebut. Jika hal tersebut masih tidak mendapatkan respon anda harus menghubungi pemilik dari domain (lakukan <a href="http://www.google.com/search?q=whois">whois lookup</a>) atau, jika ini berjalan pada layanan gratis (contohnya Yahoo!, free.fr, f2s.com, dsb.), managemen atau departemen yang berhubungan dengan layanan tersebut. Silahkan dicatat bahwa phpBB Group <strong>tidak bertanggung jawab</strong> atas bagaimana, dimana dan siapa yang menggunakan forum ini. Jangan menghubungi phpBB Group mengenai segala sesuatu yang berhubungan dengan permasalahan hukum (penghentian, tanggung jawab, fitnah, dsb.) <strong>tidak berhubungan langsung</strong> ke website phpBB.com ataupun perangkat lunak phpBB itu sendiri. Jika anda mengirim e-mail kepada phpBB Group <strong>tentang pihak ketiga</strong> penggunaan perangkat lunak ini maka mungkin anda menerima respon yang singkat atau tidak sama sekali.'
	)
);

?>