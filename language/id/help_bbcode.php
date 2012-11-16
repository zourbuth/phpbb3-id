<?php
/**
*
* help_bbcode [Bahasa Indonesia]
*
* @package language
* @version $Id: help_bbcode.php 2010 Sastra Manurung zourbuth@gmail.com
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
		1 => 'Pendahuluan'
	),
	array(
		0 => 'Apa yang dimaksud dengan BBCode?',
		1 => 'BBCode adalah implementasi spesial dari HTML. Pada dasarnya, apakah anda bisa/tidak bisa menggunakan BBCode pada post anda dalam forum ditentukan oleh administrator. Sebagai tambahan, anda bisa menonaktifkan BBCode pada setiap halaman post melalui halaman posting itu sendiri. BBCode itu sendiri mempunyai kesamaan dengan HTML, tags ditutup dengan tanda kurung [ dan ] ketimbang &lt; dan &gt; dan memberikan kontrol yang besar melalui apa dan bagaimana ditampilkan. Namun tergantung pada template yang anda gunakan, anda bisa menemukan penambahan BBCode untuk post anda lebih mudah melalui sebuak interface yang bisa diklik di atas area pesan pada halaman posting. Dengan itu juga anda mungkin menemukan panduan berikutnya yang berguna.'
	),
	array(
		0 => '--',
		1 => 'Format Teks'
	),
	array(
		0 => 'Bagaiman membuat teks tebal, miring dan bergaris bawah',
		1 => 'BBCode mengeikutsertakan tag yang bisa secara cepat mengganti gaya dasar untuk teks anda. Hal ini dicapai dengan cara berikut: <ul><li>Untuk membuat sepenggal teks tebal tutup dalam <strong>[b][/b]</strong>, e.g. <br /><br /><strong>[b]</strong>Halo<strong>[/b]</strong><br /><br />akan menjadi <strong>Halo</strong></li><li>Untuk garis bawah gunakan <strong>[u][/u]</strong>, sebagi contoh:<br /><br /><strong>[u]</strong>Selamat Pagi<strong>[/u]</strong><br /><br />menjadi <span style="text-decoration: underline">Selamat Pagi</span></li><li>Untuk membuat teks miring gunakan <strong>[i][/i]</strong>, e.g.<br /><br />Ini <strong>[i]</strong>Bagus!<strong>[/i]</strong><br /><br />akan memberikan Ini <i>Bagus!</i></li></ul>'
	),
	array(
		0 => 'Bagaimana mengganti warna teks atau ukurannya',
		1 => 'Untuk mengganti atau mengubah ukuran teks anda, tag berikut dapat digunakan. Mohon diingat bagaimana hasilnya muncul terganutung pada browser dan sistem yang melihat: <ul><li>Mngubah warna teks ini diperoleh dengan membungkusnya <strong>[color=][/color]</strong>. Anda dapat menentukan apakah jenis warna tersebu dikenali (contohnya. red, blue, yellow, dsb.) atau alternatif triplet heksadesimal, seperti #FFFFFF, #000000. Sebagi contohnya, untuk membuat teks dengan warna merah anda bisa menggunakan:<br /><br /><strong>[color=red]</strong>Halo!<strong>[/color]</strong><br /><br />or<br /><br /><strong>[color=#FF0000]</strong>Halo!<strong>[/color]</strong><br /><br />Keduanya akan menghasilkan <span style="color:red">Halo!</span></li><li>Mengubah ukuran teks diperoleh dengan cara yang sama menggunakan <strong>[size=][/size]</strong>. Tag ini tergantung pada template pengguna yang telah dipilih tetapi format yang disarankan adalah nilai numerik yang menunjukkan ukuran teks dalam persen, dimulai dengan 20 (sangat kecil) sampai ke 200 (sangat besar) secara defaultnya. Sebagai contoh:<br /><br /><strong>[size=30]</strong>KECIL<strong>[/size]</strong><br /><br />biasanya akan menjadi <span style="font-size:30%;">KECIL</span><br /><br />dimana:<br /><br /><strong>[size=200]</strong>BESAR!<strong>[/size]</strong><br /><br />menjadi <span style="font-size:200%;">BESAR!</span></li></ul>'
	),
	array(
		0 => 'Bisakah saya menggabungkan tags yang berformat?',
		1 => 'ya, anda tentu bisa, sebagai contoh untuk mendapatkan perhatian orang lain anda bisa menulis dengan:<br /><br /><strong>[size=200][color=red][b]</strong>LIHAT SAYA!<strong>[/b][/color][/size]</strong><br /><br />ini akan menghasilkan <span style="color:red;font-size:200%;"><strong>LIHAT SAYA!</strong></span><br /><br />Kami tidak menyarankan anda menghasilkan teks yang banyak yang kelihatan seperti ini! Ingatlah, hal tersebut tergantung pada anda, yang mempost, untuk meyakinkan bahwa tag tertutup dengan benar. Sebagai contoh berikut ini adalah yang salah:<br /><br /><strong>[b][u]</strong>Ini salah<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Memetik dan menghasilkan teks fixed-width'
	),
	array(
		0 => 'Memetik teks pada balasan',
		1 => 'Ada dua cara untuk memetik teks, dengan ataupun tanpa referensi.<ul><li>Pada saat anda menggunakan fungsi Kutip untuk membalas post pada halaman, anda harus memperhatikan bahwa teks post ditambahkan ke kotak pesan yang ditutup dengan blok <strong>[quote=&quot;&quot;][/quote]</strong>. Metode ini membuat anda mengutip dengan referensi kepada orang atau yang lain yang anda pilih untuk digunakan! Sebagai contohnya untuk mengutip sepenggal kalimat dari Mr. Blobby anda masukkan:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Teks yang ditulis Mr. Blobby akan menjadi seperti ini<strong>[/quote]</strong><br /><br />Hasil yang diberikan secara otomatis akan menambahkan &quot;Mr. Blobby menulis:&quot; sebelum teks aktualnya. Ingatlah anda <strong>harus</strong> mengikutsertakan tanda kutipan &quot;&quot; disekeliling nama yang anda kutip.</li><li>Cara kedua adalah dengan mengutip sesuatu secara sembarangan. Untuk menggunakan ini, tutuplah semua teks dengan tag <strong>[quote][/quote]</strong>. Pada saat anda melihat pesan tersebut, maka akan ditunjukkan teks yang berada didalam blok kutipan.</li></ul>'
	),
	array(
		0 => 'Membuat kode atau ruangan data',
		1 => 'Jika anda ingin menampilkan sepenggal kode atau hal lain yang membutuhkan lebar tertentu, contoh: tipe font Courier yang teksnya anda tutup dengan tag <strong>[code][/code]</strong>, contoh:<br /><br /><strong>[code]</strong>echo &quot;Ini adalah kode&quot;;<strong>[/code]</strong><br /><br />Semua format yang digunakan didalam tag <strong>[code][/code]</strong> ditinggalkan pada saat anda melihatnya nanti. PHP syntax akan menerangi yang bisa dipakai menggunakan <strong>[code=php][/code]</strong> dan disarankan pada saat membuat contoh posting kode PHP lebih meningkatkan tempilannya.'
	),
	array(
		0 => '--',
		1 => 'Membuat daftar'
	),
	array(
		0 => 'Membuat sebuah daftar tidak berurut',
		1 => 'BBCode mendukung dua tipe daftar, yang diurutkan dan tidak diurutkan. Pada dasarnya keduanya adalah sama seperti kesamaan HTML mereka. Sebuah daftar yang tidak diurutkan menghasilkan setiap item secara sekuen satu dengan yang lainnya memberikan spasi dengan sebuah karakter titik. Untuk membuat daftar yang tidak berurutan anda gunakan <strong>[list][/list]</strong> dan tentukan setiap item dalam daftar tersebut dengan menggunakan <strong>[*]</strong>. Sebagai contohnya untuk mendaftarkan warna favorite anda gunakan:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Merah<br /><strong>[*]</strong>Biru<br /><strong>[*]</strong>Kuning<br /><strong>[/list]</strong><br /><br />Ini akan menghasilkan daftar berikut ini:<ul><li>Merah</li><li>Biru</li><li>Kuning</li></ul>'
	),
	array(
		0 => 'Membuat sebuah daftar berurut',
		1 => 'Tipe kedua dari daftar adalah daftar berurut, yang memberikan kontrol pada output sebelum setiap item. Untuk membuat sebuah daftar yang diurutkan, gunakan <strong>[list=1][/list]</strong>, untuk membuat daftar yang bernomor atau menggunakan alternatif lain <strong>[list=a][/list]</strong> untuk daftar dengan alfabet. Sebagai daftar yang tidak diurutkan, item dispesifikasikan dengan menggunakan <strong>[*]</strong>. Sebagai contoh:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Pergi ke toko<br /><strong>[*]</strong>Membeli kompupter baru<br /><strong>[*]</strong>Mencaci komputer pada saat rusak<br /><strong>[/list]</strong><br /><br />akan menghasilkan:<ol style="list-style-type: decimal;"><li>Pergi ke toko</li><li>Membeli komputer baru</li><li>Memaki komputer pada saat rusak</li></ol>Sedangkan untuk daftar alfabet anda gunakan:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Jawaban pertama yang memungkinkan<br /><strong>[*]</strong>Jawaban kedua yang memungkinkan<br /><strong>[*]</strong>Jawaban ketiga yang memungkinkan<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: lower-alpha"><li>Jawaban pertama yang memungkinkan</li><li>Jawaban kedua yang memungkinkan</li><li>Jawaban ketiga yang memungkinkan</li></ol>'
	),
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Membuat Link'
	),
	array(
		0 => 'Membuat link ke situs lain',
		1 => 'BBCode phpBB menyediakan sejumlah cara untuk membuat URI (Uniform Resource Indicators) yang lebih dikenal dengan URL.<ul><li>Yang pertama adalah penggunaan tag <strong>[url=][/url]</strong>, apapun yang anda letakkan setelah tanda = akan menyebabkan isi tag tersebut berubah menjadi sebuah URL. Sebagi contohnya untuk link ke phpBB.com anda bisa gunakan:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visit phpBB!<strong>[/url]</strong><br /><br />Ini akan menghasilkan link berikut ini, <a href="http://www.phpbb.com/">Kunjungi phpBB!</a> Mohon diperhatikan bahwa link terbuka pada jendela yang sama atau jendela baru tergantung pada pengaturan browser pengguna.</li><li>Jika anda ingin URL tersebut ditampilkan sebagai link anda dapat melakukannya dengan mudah menggunakan:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Ini akan menghasilkan link berikut ini, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Selain itu, phpBB memiliki sesuatu fitur yang disebut <i>Magic Links</i>, ini akan mengubah secara sintaktis URL menjadi sebuah link tanpa memerlukan tag ataupun awalanhttp://. Sebaga contoh mengetikkan www.phpbb.com pada pesan anda secara otomatis akan menghasilkan <a href="http://www.phpbb.com/">www.phpbb.com</a> pada saat anda melihat pesan tersebut.</li><li>Hal yang sama terjadi pada alamat e-mail, anda dapat menentukan alamat secara lengkap seperti contoh:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />yang akan menghasilkan <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> atau anda dapat mengetikkan no.one@domain.adr pada pesan anda dan secara otomatis akan mengubahnya pada saat anda melihat pesan tersebut.</li></ul>Seperti tag BBCode anda bisa membungkus URL disekeliling tag-tag yang lainnya seperti <strong>[img][/img]</strong> (lihat masukan selanjutnya), <strong>[b][/b]</strong>, dsb. Sebagai tag berformat, semuanya tergantung kepada anda untuk mengatur kebenaran urutan buka dan t
utup tag yang mengikuti, sebagai contoh:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />is <span style="text-decoration: underline">not</span> adalah benar, maka akan membuat post anda terhapus, jadi berhati-hatilah.'
	),
	array(
		0 => '--',
		1 => 'Menampilkan gambar di post'
	),
	array(
		0 => 'Manambahkan sebuah gambar ke post',
		1 => 'BBCode phpBB memasukkan sebuah tag untuk menyertakan gambar dalam post anda. Dua hal yang paling penting yang perlu diingat untuk menggunakan tag ini adalah: banyak pengguna tidak menyukai terlalu banyak gambar yang ditampilkan di post dan kedua gambar yang anda tampilkan sudah tersedia terlebih dahulu di internet (sebagai contohnya gambar terebut hanya muncul pada kumputer anda, kecuali anda menjalankan sebuah webserver!). Untuk menampilkan sebuah gambar anda harus mengapit URL gambar yang ditujukan dengan tag <strong>[img][/img]</strong>. Sebagai contohnya:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Sebagai catatan, pada bagian URL diatas anda bisa membungkus gambar dengan tag<strong>[url][/url]</strong> jika anda ingin, e.g.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />akan menghasilkan:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Menambahkan lampiran pada post',
		1 => 'Lampiran sekarang bisa ditempatkan di semua bagian pada post dengan menggunakan <strong>[attachment=][/attachment]</strong> BBCode yang baru, jika fungsi lampiran tersebut telah diaktifkan oleh administrator halaman dan jika anda diberikan perijinan yang sesuaiuntuk membuat lampiran. Within the posting screen is a drop-down box (respectively a button) for placing attachments inline.'
	),
	array(
		0 => '--',
		1 => 'Masalah lain'
	),
	array(
		0 => 'Bisakah saya membuat tag sendiri?',
		1 => 'Jika anda seorang administrator halaman ini dan anda memiliki perijinan yang dibutuhkan, anda bisa menambahkan BBCode yang lain melalui bagian Custom BBCode.'
	)
);

?>