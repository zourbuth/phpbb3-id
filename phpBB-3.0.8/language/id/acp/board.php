<?php
/**
*
* acp_board [Bahasa Indonesia]
*
* @package language
* @version $Id: board.php 2010 Sastra Manurung zourbuth@gmail.com
* @copyright (c) 2010 Zourbuth Studio
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Di sini ini anda bisa menetukan pengaturan untuk halaman anda, memberikan penamaan dan gambaran, dan pengaturan lainnya seperti pengaturan zona waktu dan bahasa.',
	'CUSTOM_DATEFORMAT'				=> 'Custom…',
	'DEFAULT_DATE_FORMAT'			=> 'Format tanggal',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Format tanggal sama seperti format PHP <code>date</code> function.',
	'DEFAULT_LANGUAGE'				=> 'Bahasa default',
	'DEFAULT_STYLE'					=> 'Gaya default',
	'DISABLE_BOARD'					=> 'Nonaktifkan halaman',
	'DISABLE_BOARD_EXPLAIN'			=> 'Ini akan membuat halaman tidak bisa digunakan oleh pengguna. Anda juga bisa memasukkan pesan singkat (255 karakter) untuk ditampilkan.',
	'OVERRIDE_STYLE'				=> 'Kesampingkan gaya pengguna',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Ganti gaya pengguna dengan gaya default.',
	'SITE_DESC'						=> 'Gambaran Situs',
	'SITE_NAME'						=> 'Nama Situs',
	'SYSTEM_DST'					=> 'Gunakan Waktu Musim Panas/<abbr title="Daylight Saving Time">DST</abbr>',
	'SYSTEM_TIMEZONE'            => 'Zona waktu tamu',
	'SYSTEM_TIMEZONE_EXPLAIN'         => 'Zona waktu yang digunakan untuk menampilkan waktu bagi pengguna yang belum masuk (tamu, bot). Pengguna yang telah masuk mengatur zona waktunya pada saat pendaftaran  dan bisa diubah melalui kontrol panel pengguna.',
	'WARNINGS_EXPIRE'				=> 'Lama peringatan',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Jumlah hari yang akan dilalui sebelum masa waktu peringatan habis secara otomatis  dari catatan pengguna.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Di sini anda dapat mengaktifkan/menonaktifkan beberapa fitur halaman.',

	'ALLOW_ATTACHMENTS'			=> 'Ijinkan lampiran',
	'ALLOW_BIRTHDAYS'			=> 'Ijinkan ulang tahun',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Ijinkan hari ulang tahun dimasukkan dan umur akan ditampilkan di profil. Mohon diingat bahwa hari ulang tahun di halaman indeks dikontrol oleh pengaturan lain yang terpisah.',
	'ALLOW_BOOKMARKS'			=> 'Ijinkan menandai halaman topik',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Pengguna dapat menyimpan penanda halaman pribadi.',
	'ALLOW_BBCODE'				=> 'Ijinkan BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Ijinkan berlangganan forum',
	'ALLOW_NAME_CHANGE'			=> 'Ijinkan penggantian nama pengguna',
	'ALLOW_NO_CENSORS'			=> 'Ijinkan menonaktifkan sensor kata',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Pengguna dapat memilih untuk menonaktifkan sensor kata yang otomatis untuk post dan pesan pribadi.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Ijinkan lampiran di pesan pribadi',
	'ALLOW_PM_REPORT'			=> 'Ijinkan pengguna melaporkan pesan pribadi',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Jika pengaturan ini diaktifkan, pengguna memiliki pilihan untuk melaporkan pesan pribadi yang diterima ataupun dikirim ke moderator halaman. Pesan pribadi ini kemudian akan terlihat di Papan Pengaturan Moderator.',
	'ALLOW_QUICK_REPLY'			=> 'Ijinkan balas cepat',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Penggantian ini mengijinkan balas cepat untuk dinonaktifkan diseluruh halaman. Bila aktif, pengaturan spesifik forum akan digunakan untuk menentukan  apakah balas cepat ditampilkan pada forum itu sendiri.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Ajukan dan aktifkan balas cepat di semua forum',
	'ALLOW_SIG'					=> 'Ijinkan tanda tangan',
	'ALLOW_SIG_BBCODE'			=> 'Ijinkan BBCode di tanda tangan pengguna',
	'ALLOW_SIG_FLASH'			=> 'Ijinkan penggunaan <code>[FLASH]</code> di tanda tangan pengguna',
	'ALLOW_SIG_IMG'				=> 'Ijinkan penggunaan <code>[IMG]</code> di tanda tangan pengguna',
	'ALLOW_SIG_LINKS'			=> 'Ijinkan penggunaan link di tanda tangan pengguna',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Jika dinonaktifkan maka <code>[URL]</code> BBCode dan URL otomatis bisa digunakan.',
	'ALLOW_SIG_SMILIES'			=> 'Ijinkan penggunaan tanda senyuman di tanda tangan pengguna',
	'ALLOW_SMILIES'				=> 'Ijinkan tanda senyuman',
	'ALLOW_TOPIC_NOTIFY'		=> 'Ijinkan berlangganan topik',
	'BOARD_PM'					=> 'Perpesanan pribadi',
	'BOARD_PM_EXPLAIN'         => 'Aktifkan perpesanan pribadi untuk semua pengguna.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Pada umumnya ukuran avatar kecil, gambar unik pengguna bisa diasosiasikan dengan pengguna itu sendiri. Biasanya avatar tersebut ditampilkan di bawah nama pengguna ketika melihat topik. Di sini anda juga dapat menentukan bagaimana pengguna dapat menentukan avatar mereka. Mohon diingat bahwa untuk mengupload avatar anda harus membuat direktori dan dapat ditulis oleh web server. Batas ukuran file hanya bisa dipaksakan untuk avatar yang telah diupload.',

	'ALLOW_AVATARS'					=> 'Aktifkan avatar',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Ijinkan penggunaan umum avatar;<br />Jika anda menonaktifkan avatar secara umum atau dengan mode tertentu, avatar yang dinonaktifkan tidak akan terlihat di halaman, akan tetapi pengguna masih bisa mengunduh avatar mereka sendiri di Papan Pengaturan Pengguna.',
	'ALLOW_LOCAL'					=> 'Gunakan galeri avatar',
	'ALLOW_REMOTE'					=> 'Gunakan remote avatar',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatar dari website yang lain.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Aktifkan pengunduh remot avatar',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Ijinkan pengunduh avatar dari situs lain.',
	'ALLOW_UPLOAD'					=> 'Aktifkan upload avatar',
	'AVATAR_GALLERY_PATH'			=> 'Lokasi galeri avatar',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Path yang berada di bawah direktori root phpBB untuk gambar-gambar yang sudah dikenal , contoh: <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Path penyimpanan avatar',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Path yang berada di bawah direktori root phpBB, contoh: <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Ukuran dimensi maksimum avatar',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Lebar x Panjang dalam piksel.',
	'MAX_FILESIZE'					=> 'Ukuran maksimum file avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Untuk file avatar yang diupload.',
	'MIN_AVATAR_SIZE'				=> 'Ukuran dimensi manimum avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Lebar x Panjang dalam piksel.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Di sini anda dapat menentukan beberapa pengaturan default untuk perpesanan pribadi.',

	'ALLOW_BBCODE_PM'			=> 'Ijinkan penggunaan BBCode di perpesanan pribadi',
	'ALLOW_FLASH_PM'			=> 'Ijinkan penggunaan <code>[FLASH]</code> BBCode',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Mohon dicatat bahwa kemampuan pengguna flash di dalam pesan pribadi jika diaktifkan, juga tergantung pada perijinannya.',
	'ALLOW_FORWARD_PM'			=> 'Ijinkan pengalihan di perpesanan pribadi',
	'ALLOW_IMG_PM'				=> 'Ijinkan penggunaan <code>[IMG]</code> BBCode',
	'ALLOW_MASS_PM'				=> 'Ijinkan pengiriman pesan pribadi ke banyak pengguna dan grup',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Pengiriman ke grup dapat diatur per grup dalam halaman pengaturan grup.',
	'ALLOW_PRINT_PM'			=> 'Ijinkan print view di perpesanan pribadi',
	'ALLOW_QUOTE_PM'			=> 'Ijinkan petikan di perpesanan pribadi',
	'ALLOW_SIG_PM'				=> 'Ijinkan tanda tangan di perpesanan pribadi',
	'ALLOW_SMILIES_PM'			=> 'Ijinkan tanda senyuman di perpesanan pribadi',
	'BOXES_LIMIT'				=> 'Jumlah maksimum pesan pribadi per kotak',
	'BOXES_LIMIT_EXPLAIN'		=> 'Pengguna dapat menerima dengan tidak melebihi jumlah pesan ini disetiap kotak pesan pribadi mereka. Gunakan nilai 0 untuk tidak memberikan batasan jumlah pesan.',
	'BOXES_MAX'					=> 'Jumlah maksimum folder pesan pribadi',
	'BOXES_MAX_EXPLAIN'			=> 'Secara default pengguna dapat membuat folder pribadi untuk pesan pribadi.',
	'ENABLE_PM_ICONS'			=> 'Aktifkan penggunaan ikon topik di pesan pribadi',
	'FULL_FOLDER_ACTION'		=> 'Tindakan default untuk folder yang penuh',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Tindakan default yang diambil apabila folder penuh.',
	'HOLD_NEW_MESSAGES'			=> 'Tahan pesan baru',
	'PM_EDIT_TIME'				=> 'Batasi waktu pengubahan',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Batas waktu tersedia untuk mengubah sebuah pesan pesan pribadi belum terkirim. Gunakan nilai 0 untuk menonaktifkan fasilitas ini.',
	'PM_MAX_RECIPIENTS'			=> 'Jumlah maksimum penerima yang diijinkan',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Jumlah maksimum anggota yang diijinkan dalam sebuah pesan pribadi. Jika nilai yang dimasukkan 0 maka jumlah anggota yang diijinkan menjadi tidak terbatas. Pengaturan ini dapat dibuat untuk setiap grup pada halaman pengaturan grup.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Di sini anda dapat membuat pengaturan default untuk posting.',
	'ALLOW_POST_LINKS'					=> 'Ijinkan links dipost/pesan pribadi',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Jika <code>[URL]</code> BBCode tidak diijinkan maka URL otomatis juga tidak dapat digunakan.',
	'ALLOW_POST_FLASH'					=> 'Ijinkan penggunaan <code>[FLASH]</code> BBCode di post',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Jikan dinonaktifkan maka <code>[FLASH]</code> BBCode tidak dapat digunakan di post.',

	'ENABLE_QUEUE_TRIGGER'			=> 'Aktifkan antrian post',
	'ENABLE_QUEUE_TRIGGER_EXPLAIN'	=> 'Kemampuan menempatkan post dari pengguna yang terdaftar ke pengesahan post jika penghitungan jumlah post lebih kecil dari jumlah yang ditentukan. Pengaturan ini tidak memiliki efek pada pengaturan perijinan untuk pengesahan post/topik.',
	'QUEUE_TRIGGER_POSTS'			=> 'Jumlah maksimum post antrian',
	'QUEUE_TRIGGER_POSTS_EXPLAIN'	=> 'Jika antrian post di aktifkan, maka ini adalah jumlah batas post yang dibutuhkan pengguna untuk membuat post tanpa harus ada pengesahan. Jika jumlah post pengguna lebih kecil dari batas ini maka post tersebut akan disimpan di antrian secara otomatis.',

	'BUMP_INTERVAL'					=> 'Selang waktu penggeseran',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Jumlah menit, jam atau hari antar post yang terakhir untuk sebuah topik dan kemampuan untuk menggeser topik ini.',
	'CHAR_LIMIT'					=> 'Jumlah maksimum karakter per post',
	'CHAR_LIMIT_EXPLAIN'			=> 'Jumlah karakter yang diijinkan dalam sebuah post. Gunakan nilai 0 untuk tidak membatasi jumlah karakter.',
	'DELETE_TIME'					=> 'Batas waktu penghapusan',
	'DELETE_TIME_EXPLAIN'			=> 'Memberikan batas waktu untuk menghapus post. Atur nilainya menjadi 0 untuk menonaktifkan.',
	'DISPLAY_LAST_EDITED'			=> 'Tampilkan informasi waktu pengubahan terakhir',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Pilih jika informasi pengubahan terakhir ditampilkan di post.',
	'EDIT_TIME'						=> 'Batas waktu pengubahan',
	'EDIT_TIME_EXPLAIN'				=> 'Batas waktu yang tersedia untuk mengubah sebuah post baru. Gunakan nilai 0 untuk menonaktifkan fasilitas ini.',
	'FLOOD_INTERVAL'				=> 'Selang waktu flood',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Batas waktu yang harus ditunggu pengguna untuk membuat post baru lagi. Silahkan ubah perijinan pengguna untuk mengabaikan batas waktu ini.',
	'HOT_THRESHOLD'					=> 'Topik populer terdepan',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Post-post per topik terdepan untuk topik yang populer. Gunakan 0 untuk menonaktifkan topik populer.',
	'MAX_POLL_OPTIONS'				=> 'Jumlah maksimum pilihan pemungutan suara',
	'MAX_POST_FONT_SIZE'			=> 'Ukuran maksimum huruf per post',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Ukuran maksimum huruf yang diijinkan di post. Gunakan 0 untuk ukuran huruf yang tidak terbatas.',
	'MAX_POST_IMG_HEIGHT'			=> 'Ukuran maksimum gambar',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Tinggu ukuran maksimum gambar/file flash dalam post. Gunakan 0 untuk ukuran yang tidak terbatas.',
	'MAX_POST_IMG_WIDTH'			=> 'Lebar maksimum gambar per post',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Lebar maksimum dari gambar/file flash dalam post. Gunakan 0 untuk ukuran yang tidak terbatas.',
	'MAX_POST_URLS'					=> 'Jumlah link per post',
	'MAX_POST_URLS_EXPLAIN'			=> 'Jumlah maksimum URLs dalam sebuah post. Gunakan 0 untuk jumlah link yang tidak terbatas.',
	'MIN_CHAR_LIMIT'				=> 'Jumlah karakter minimum per post/message',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Jumlah karakter minimum yang harus dimasukkan pengguna dalam sebuah post/pesan pribadi.',
	'POSTING'						=> 'Posting',
	'POSTS_PER_PAGE'				=> 'Post per halaman',
	'QUOTE_DEPTH_LIMIT'            => 'Jumlah maksimum kedalaman petikan',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'      => 'Jumlah maksimum kedalaman petikan pada sebuah post. Buat menjadi 0 untuk kedalaman yang tidak terbatas.',
	'SMILIES_LIMIT'					=> 'Jumlah maksimum senyuman per post',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Jumlah maksimum senyuman dalam sebuah post. Gunakan 0 untuk jumlah tanda senyuman yang tidak terbatas.',
	'SMILIES_PER_PAGE'				=> 'Jumalah tanda senyuman per halaman',
	'TOPICS_PER_PAGE'				=> 'Topik per halaman',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Di sini anda dapat membuat pengaturan default untuk tanda tangan.',

	'MAX_SIG_FONT_SIZE'				=> 'Ukuran huruf maksimum tanda tangan',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Ukuran huruf maksimum yang diijinkan dalam tanda tangan pengguna. Gunakan 0 untuk ukuran huruf yang tidak terbatas.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Tinggi ukuran maksimum gambar tanda tangan',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Tinggi maksimum dari sebuah gambar/file flash di tanda tangan pengguna. Gunakan 0 untuk ukuran tinggi yang tidak terbatas.',
	'MAX_SIG_IMG_WIDTH'				=> 'Lebar maksimum ukuran gambar tanda tangan',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Lebar maksimum dari ukuran gambar/file flash pada tanda tangan. Gunakan 0 untuk ukuran lebar yang tidak terbatas.',
	'MAX_SIG_LENGTH'				=> 'Panjang maksimum tanda tangan',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Jumlah karakter maksimum pada tanda tangan pengguna.',
	'MAX_SIG_SMILIES'				=> 'Jumlah maksimum tanda senyuman per tanda tangan',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Jumlah maksimum tanda senyuman yang diijinkan dalam tanda tangan pengguna. Gunakan 0 untuk jumlah tanda senyuman yang tidak terbatas.',
	'MAX_SIG_URLS'					=> 'Jumlah link maksimum tanda tangan',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Jumlah link maksimum dalam tanda tangan pengguna. Gunakan 0 untuk jumlah link yang tidak terbatas.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Di sini anda dapat menentukan pengaturan pendaftaran dan profile berhubungan.',

	'ACC_ACTIVATION'				=> 'Pengaktifan account',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Di sini ditentukan pengguna yang langsung memiliki akses ke halaman atau jika konfirmasi dibutuhkan. Anda juga dapat menonaktifkan pendaftaran baru sepenuhnya.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Batas post anggota baru',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Anggota baru yang termasuk grup <em>Pengguna Terdaftar Terbaru</em> sampai mereka mencapai jumlah post ini. Anda bisa menggunakan grup ini agar bisa menjaga penggunaan sistem PM ataupun meninjau pesan mereka. <strong>Nilai ) untuk menonaktifkan fitur ini.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Set grup Pengguna Terdaftar Terbaru Newly Registered ke default',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Jika anda memilih ya dan batas post anggota baru ditentukan, pengguna terdaftar terbaru tidak hanya ditempatkan pada grup <em>Pengguna Terdaftar Terbaru</em>, tetapi juga grup ini menjadi grup default mereka. Ini akan menjadi lebih mudah jika anda ingin menentukan ranking/avatar grup default yang akan dimiliki.',

	'ACC_ADMIN'					=> 'Oleh Admin',
	'ACC_DISABLE'				=> 'Dinonaktifkan',
	'ACC_NONE'					=> 'Tidak ada',
	'ACC_USER'					=> 'Oleh User',
//	'ACC_USER_ADMIN'			=> 'Pengguna + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Ijinkan alamat e-mail yang sama digunakan kembali',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Pengguna lain bisa mendaftar dengan menggunakan e-mail yang sama.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Nomor fax COPPA',
	'COPPA_MAIL'				=> 'Alamat milis COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Ini adalah alamat milis untuk orang tua/wali yang akan mengirimkan formulir pendaftaran COPPA.',
	'ENABLE_COPPA'				=> 'Aktifkan COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Di sini dibutuhkan pernyataan dari pengguna yang berusia 13 tahun atau lebih untuk pemenuhan terhadap U.S. COPPA. Jika dinonaktifkan maka grup spesifik COPPA tidak akan ditampilkan lagi.',
	'MAX_CHARS'					=> 'Maksimum',
	'MIN_CHARS'					=> 'Minimum',
	'NO_AUTH_PLUGIN'			=> 'Tidak ada auth plugin yang ditemukan.',
	'PASSWORD_LENGTH'			=> 'Panjang kata sandi',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Panjang minimum dan maksimum karakter kata sandi.',
	'REG_LIMIT'					=> 'Percobaan pendaftaran',
	'REG_LIMIT_EXPLAIN'			=> 'Jumlah percobaan pengguna untuk memecahkan pertanyaan anti-spambot sebelum dikunci pada sesinya.',
	'USERNAME_ALPHA_ONLY'		=> 'Hanya alfanumerik',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumerik dan spasi',
	'USERNAME_ASCII'			=> 'ASCII (bukan unicode international)',
	'USERNAME_LETTER_NUM'		=> 'Semua huruf dan angaka',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Semua huruf, ankga dan spasi',
	'USERNAME_CHARS'			=> 'Batasan karakter nama pengguna',
	'USERNAME_CHARS_ANY'		=> 'Semua karakter',
	'USERNAME_CHARS_EXPLAIN'	=> 'Pembatasan tipe karakter yang boleh digunakan pada nama pengguna, pembatasnya: spasi, -, +, _, [ dan ].',
	'USERNAME_LENGTH'			=> 'Panjang nama pengguna',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Jumlah maksimum dan minimum karakter pada nama pengguna.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Pengaturan sindikasi umum pengumpan',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Modul ini menyediakan berbagai jenis pengumpan ATOM, memisahkan berbagai BBCode di post agar terbaca di pengumpan eksternal.',

	'ACP_FEED_GENERAL'					=> 'Pengaturan pengumpan umum',
	'ACP_FEED_POST_BASED'				=> 'Pengaturan pengumpan Post-based',
	'ACP_FEED_TOPIC_BASED'				=> 'Pengaturan pengumpan Topic-based',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Pengaturan dan pengumpan lainnya',

	'ACP_FEED_ENABLE'					=> 'Aktifkan pengumpan',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Hidupkan dan atau matikan pengumpan ATOM untuk keseluruhan halaman.<br />Menonaktifkan fitur ini akan mematikan semua pengumpan, tanpa memperdulikan pengaturan di bawah ini.',
	'ACP_FEED_LIMIT'					=> 'Jumlah item',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Jumlah maksimum item pengumpan yang akan ditampilkan.',

	'ACP_FEED_OVERALL'					=> 'Aktifkan pengumpan pada seluruh halaman',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Post terbaru seluruh halaman.',
	'ACP_FEED_FORUM'					=> 'Aktifkan pengumpan per forum',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Post terbaru forum tunggal dan subforum.',
	'ACP_FEED_TOPIC'					=> 'Aktifkan pengumpan per topik',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Post terbaru topik tunggal.',

	'ACP_FEED_TOPICS_NEW'				=> 'Aktifkan pengumpan topik baru',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Aktifkan pengumpan “Topik Baru”, yang akan menampilkan topik baru dibuat termasuk post pertama.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Aktifkan pengumpan topik aktif',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Aktifkan pengumpan “Topik Aktif”, yang akan menampilkan topik terakhir yang aktif termasuk post terakhir.',
	'ACP_FEED_NEWS'						=> 'Pengumpan berita',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Tarik post pertama dari forum-forum ini. Jangan pilih satupun forum untuk menonaktifkan berita pengumpan.<br />Pilih banyak forum dengan menekan tombol <samp>CTRL</samp> dan klik.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Aktifkan pengumpan forum',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Aktifkan pengumpan “Semua forum”, yang akan menampilkan semua daftar forum.',

	'ACP_FEED_HTTP_AUTH'				=> 'Ijinkan Otentifikasi HTTP',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Aktifkan otentifikasi HTTP sehingga pengguna bisa menerima konten yang tersembunyi untuk pengguna tamu dengan menambahkan parameter <samp>auth=http</samp> ke URL pengumpan. Mohon diperhatikan bahwa beberapa setup PHP membutuhkan pengubahan tambahan pada file .htaccess. Instruksi bisa ditemukan pada file tersebut.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Statistik item',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Tampilkan statistik individual dibawah item pengumpan<br />(contoh: di post oleh, tanggal dan waktu, balasan, dilihat)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Keluarkan forum ini',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Konten ini <strong>tidak akan dimasukkan dalam pengumpan</strong>. Jangan pilih forum apapun untuk menarik data dari semua forum.<br />Pilih/abaikan banyak forum dengan menekan tombol <samp>CTRL</samp> dan klik.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Di sini anda dapat memilih dan menentukan pengaturan plugin yang didesain untuk memblokir secara otomatis dari spambot. Pada dasarnya plugin ini bekerja dengan menantang pengguna melalui <em>CAPTCHA</em>, yang merupakan sebuah desain yang sulit diselesaikan oleh komputer.',
	'AVAILABLE_CAPTCHAS'					=> 'Plugin yang tersedia',
	'CAPTCHA_UNAVAILABLE'					=> 'Plugin tidak dapat dipilih karena tidak sesuai dengan persyarataran.',
	'CAPTCHA_GD'							=> 'Gambar GD',
	'CAPTCHA_GD_3D'							=> 'Gambar GD 3D',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Penggaduhan latar depan',
	'CAPTCHA_GD_EXPLAIN'					=> 'Gunakan GD untuk membuat gambar anti-spambot lebih sulit.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Gunakan penggaduhan latar depan untuk membuat gambar yang lebih sulit.',
	'CAPTCHA_GD_X_GRID'						=> ' X-axis penggaduhan latar belakang',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Gunakan pengaturan yang lebih rendah untuk membuat gambar yang lebih sulit. Nilai 0 akan menonaktifkan x-axis penggaduhan latar belakang.',
	'CAPTCHA_GD_Y_GRID'						=> 'Y-axis penggaduhan latar belakang',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Gunakan pengaturan yang lebih rendah untuk membuat gambar yang lebih sulit. Nilai 0 akan menonaktifkan y-axis latar belakang noise.',
    'CAPTCHA_GD_WAVE'						=> 'Distorsi gelombang',
    'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Ini akan membuat sebuah distorsi gelombang pada gambar.',
    'CAPTCHA_GD_3D_NOISE'					=> 'Tambahkan objek-objek penggaduhan-3D',
    'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Bagian ini akan menambahkan objek tambahan ke dalam gambar di atas huruf.',
    'CAPTCHA_GD_FONTS'						=> 'Gunakan huruf yang berbeda',
    'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Ini akan mengontrol berapa banyak bentuk huruf yang berbeda digunakan. Anda juga dapat menggunakan hanya bentuk defaultnya saja ataupun menampilkan huruf-huruf yang diubah. Menambahkan huruf kecil juga memungkinkan untuk digunakan.',
    'CAPTCHA_FONT_DEFAULT'					=> 'Default',
    'CAPTCHA_FONT_NEW'						=> 'Bentuk baru',
    'CAPTCHA_FONT_LOWER'					=> 'Gunakan juga huruf kecil',
	'CAPTCHA_NO_GD'							=> 'Gambar biasa',
	'CAPTCHA_PREVIEW_MSG'					=> 'Pengaturan anda belum disimpan. Ini hanyalah pratayang saja.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Plugin yang akan tampak dengan menggunakan pilihan yang sekarang.',

	'CAPTCHA_SELECT'						=> 'Plugin yang terinstal',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'Kotak pilihan memegang plugin yang dikenali halaman. Entri kelabu tidak tersedia sekarang ini dan mengkin membutuhkan konfigurasi yang tepat untuk digunakan.',
	'CAPTCHA_CONFIGURE'						=> 'Atur plugin',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Ubah pengaturan dari plugin yang terpilih.',
	'CONFIGURE'								=> 'Atur',
	'CAPTCHA_NO_OPTIONS'					=> 'Plugin ini tidak memiliki pilihan konfigarusi.',

	'VISUAL_CONFIRM_POST'					=> 'Aktifkan tindakan anti spambot untuk postingan tamu',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Membutuhkan pengguna tamu untuk melewati proses anti-spambot guna mencegah postingan secara otomatis.',
	'VISUAL_CONFIRM_REG'					=> 'Aktifkan anti spambot untuk pendaftaran',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Membutuhkan pengguna baru untuk melewati proses anti-spambot guna mencegah postingan secara otomatis.',
    'VISUAL_CONFIRM_REFRESH'				=> 'Ijinkan pengguna melakukan penyegaran anti spambot',
    'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Ijinkan pengguna untuk meminta anti spambot yang baru jika mereka tidak dapat menyelesaikan anti spambot yang sekarang pada saat pendaftaran. Beberapa plugin tidak mendukung pilihan ini.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Keterangan ini menunjukkan data yang digunakan untuk mengrim cookie ke browser pengguna. Dalam beberapa hal, nilai default untuk pengaturan cookie sudah mencukupi. Lakukan dengan hati-hati jika anda ingin melakukan pengubahan, pengaturan yang salah akan mencegah pengguna untuk bisa masuk.',

	'COOKIE_DOMAIN'				=> 'Domain cookie',
	'COOKIE_NAME'				=> 'Nama cookie',
	'COOKIE_PATH'				=> 'Lokasi cookie',
	'COOKIE_SECURE'				=> 'Keamanan cookie',
	'COOKIE_SECURE_EXPLAIN'		=> 'Jika server anda berjalan dengan menggunakan SSL, gunakan untuk mengaktifkan dan biarkan untuk menonaktifkan. Setelah mengaktifkan ini namun tidak berjalan dengan menggunakan SSL akan menghasilkan error server pada saat mengalihkan.',
	'ONLINE_LENGTH'				=> 'Melihat siapa yang online dalam rentang waktu',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Jumlah dalam menit setelah pengguna-pengguna tidak aktif yang akan ditampilkan pada daftar “Siapa yang online”. Semakin tinggi nilai yang diberikan maka semakin bagus pula proses yang dibutuhkan untuk menghasilkan daftar tersebut.',
	'SESSION_LENGTH'			=> 'Panjang sesi',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sesi akan berakhir setelah detik ini.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Di halaman ini anda dapat mengaktifkan dan mononaktifkan fungsi-fungsi tertentu untuk mengurangi jumlah proses yang dibutuhkan. Pada beberapa server tidak perlu menonaktifkan beberapa fungsi. Akan tetapi pada server tertentu atau di lingkungan pembagian hosting mungkin merupakan suatu keuntungan untuk menonaktifkan fungsi-fungsi tertentu yang tidak diperlukan. Anda juga dapat membatasi load dari sistem dan sesi yang aktif di sekitar halaman yang offline.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Data profil tambahan',
	'LIMIT_LOAD'					=> 'Batas load sistem',
	'LIMIT_LOAD_EXPLAIN'			=> 'Jika load 1 menit sistem terlampaui maka halaman akan menjadi offline secara otomatis. Untuk satu prosesor nilai 1.0 setara dengan ~100% utilisasi. Hanya berfungsi di server UNIX dan dimana informasi ini akan diakses. Nilai ini akan direset dengan sendirinya jika phpBB tidak dapat menempuh batasan load tersebut.',
	'LIMIT_SESSIONS'				=> 'Batas sesi',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Jika selang waktu untuk sesi melampaui batas load satu menit maka halaman tersebut akan menjadi offline. Gunakan 0 untuk tidak membatasi sesi.',
	'LOAD_CPF_MEMBERLIST'			=> 'Ijinkan gaya ditampilkan di data profil tambahan pada daftar anggota',
	'LOAD_CPF_VIEWPROFILE'			=> 'Tampilkan data profil tambahan di profil pengguna',
	'LOAD_CPF_VIEWTOPIC'			=> 'Tampilkan data profil tambahan di halaman topik',
	'LOAD_USER_ACTIVITY'			=> 'Tampilkan aktifitas pengguna',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Tampilkan topik/forum yang aktif di profil pengguna dan papan pengaturan pengguna. Sangat disarankan untuk menonaktifkan fungsi ini untuk jumlah post yang lebih dari satu juta.',
	'RECOMPILE_STYLES'				=> 'Kompilasi ulang komponen gaya yang sudang usang',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Periksa update dari komponen gaya di sistem file dan kompilasi ulang.',
	'YES_ANON_READ_MARKING'			=> 'Aktifkan penanda topik untuk tamu',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Simpan status dibaca dan belum dibaca untuk tamu. Jika dinonaktifkan maka post selalu ditandai dibaca oleh tamu.',
	'YES_BIRTHDAYS'					=> 'Aktifkan daftar yang berulang tahun',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Jika dinonaktifkan maka daftar yang berulang tahun tidak akan ditampilkan. Aktifkan fungsi ini jika fitur ulang tahun ingin digunakan.',
	'YES_JUMPBOX'					=> 'Tampilkan jumpbox',
	'YES_MODERATORS'				=> 'Tampilkan moderator',
	'YES_ONLINE'					=> 'Aktifkan daftar pengguna yang online',
	'YES_ONLINE_EXPLAIN'			=> 'Tampilkan indeks pengguna yang online, forum dan halaman topik.',
	'YES_ONLINE_GUESTS'				=> 'Aktifkan daftar tamu yang online di daftar online',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Tampilkan daftar informasi tamu di daftar online.',
	'YES_ONLINE_TRACK'				=> 'Tampilkan informasi pengguna yang online/offline',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Tampilkan informasi online dari pengguna di halaman profil dan topik.',
	'YES_POST_MARKING'				=> 'Aktifkan penandaan topik',
	'YES_POST_MARKING_EXPLAIN'		=> 'Tunjukkan apabila pengguna telah membuat post ke topik.',
	'YES_READ_MARKING'				=> 'Aktifkan penandaan topik server-side',
	'YES_READ_MARKING_EXPLAIN'		=> 'Simpan status yang sudah dibaca atau belum di database.',
	'YES_UNREAD_SEARCH'            => 'Aktifkan pencarian untuk post yang belum terbaca',

));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB mendukung otentifikasi plug-in atau modul. Di sini anda dapat menentukan cara otentifikasi pengguna pada saat masuk atau keluar dari halaman. Secara defaultnya, tiga plug-in telah disediakan; DB, LDAP dan Apache. Tidak semua metoda membutuhkan informasi tambahan, isikanlah jika cara yang digunakan saling berhubungan..',

	'AUTH_METHOD'				=> 'Pilih cara otentifikasi',

	'APACHE_SETUP_BEFORE_USE'	=> 'Anda harus membuat pengaturan otentifikasi apache sebelum anda menjalankan phpBB dengan menggunakan otentifikasi ini. Mohon dicatat bahwa nama pengguna yang yang anda pakai untuk otentifikasi apache adalah sama dengan nama pengguna di phpBB anda. Otentifikasi Apache hanya dapat digunakan dengan mod_php (bukan dengan versi CGI) dan safe_mode dinonaktifkan.',

	'LDAP_DN'						=> 'Dasar LDAP <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Ini adalah Distinguished Name atau DN, menempatkan informasi pengguna, sebagai contoh <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'Atribut e-mail LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Gunakan ini ke nama atribut e-mail pengguna anda (jika ada) agar alamat e-mail pengguna yang baru ditentukan secara otomatis. Jika dibiarkan kosong maka tidak ada alamat e-mail untuk pengguna pada saat pertama.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Binding ke server LDAP server jika nama penguna ata kata sandi salah.',
	'LDAP_NO_EMAIL'					=> 'Atribut e-mail yang ditentukan tidak ada.',
	'LDAP_NO_IDENTITY'				=> 'Tidak dapat menemukan identitas masuk untuk %s.',
	'LDAP_PASSWORD'					=> 'Kata sandi LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Biarkan kosong untuk menggunakan binding anonim. Selain itu isikan pada kata sandi untuk pengguna di bawah ini. Dibutuhkan untuk Active Directory Servers. <strong>PERINGATAN:</strong> Kata sandi ini akan disimpan sebagai teks biasa di database, yang dapat dilihat semua orang yang bisa mengakses database atau orang yang bisa melihat halaman konfigurasinya.',
	'LDAP_PORT'						=> 'Server port LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Sebagai pilihannya anda dapat menentukan sebuah port untuk menghubungkan ke server LDAP server dan sebagai gantinya port defaulnya adalah 389.',
	'LDAP_SERVER'					=> 'Nama server LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Jika menggunakan LDAP maka nama itu adalah nama host atau alamat IP dari server LDAP. Dan sebagai alternatif, anda dapat menentukan sebuah URL seperti ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Ini adalah kunci untuk mencari identitas masuk yang diberikan, contohnya: <var>uid</var>, <var>sn</var>, dsb.',
	'LDAP_USER'						=> 'Pengguna LDAP <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Biarkan kosong untuk menggunakan binding anonim. Jika diisikan dalam phpBB gunakanlah Distinguished Name pada saat percobaan masuk untuk mencari pengguna yang benar, contohnya: <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Dibutuhkan untuk Active Directory Servers.',
	'LDAP_USER_FILTER'				=> 'LDAP penyaringan pengguna',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Pada pilihannya anda dapat membatasi objek pencarian dengan saringan tambahan. Sebagai contoh <samp>objectClass=posixGroup</samp> akan menghasilkan penggunaan dari <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Di halaman ini anda dapat menentukan pengaturan server dan domain. Mohon diperiksa apakah data yang anda masukkan sudah benar, error akan menghasilkan e-mail yang mengandung informasi ygan salah. Mohon diingat pada saat memasukkan nama domain anda telah mengikutsertakan http:// atau syarat protokol yang lain. Ubahlah nomor port apabila server anda menggunakan port yang berbeda, port 80 yang biasa digunakan.',

	'ENABLE_GZIP'				=> 'Aktifkan kompresi GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Isi yang dihasilkan oleh kompresi GZip akan dikompresi dan dikirim ke pengguna. Hal ini akan mengurangi lalu lintas jaringan dan meningkatkan penggunaan CPU pada sisi server dan klien.',
	'FORCE_SERVER_VARS'			=> 'Pengaturan server URL paksaan',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Jika dipilih ya maka pengaturan server yang telah ditentukan di sini akan digunakan sebagai nilai yang telah ditentukan secara otomatis.',
	'ICONS_PATH'				=> 'Path penyimpanan ikon post',
	'ICONS_PATH_EXPLAIN'		=> 'Lokasi di bawah direktori phpBB anda, contoh: <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Pengaturan lokasi direktori',
	'RANKS_PATH'				=> 'Lokasi penyimpanan gambar ranking',
	'RANKS_PATH_EXPLAIN'		=> 'Lokasi di bawah direktori phpBB anda, contoh: <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Lokasi script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Direktori phpBB ditempatkan relatif ke nama domain, contoh: <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Nama domain',
	'SERVER_NAME_EXPLAIN'		=> 'Halaman ini berjalan dari nama domain (sebagai contoh: <samp>www.example.com</samp>).',
	'SERVER_PORT'				=> 'Port server',
	'SERVER_PORT_EXPLAIN'		=> 'Server anda biasanya berjalan dengan port 80, ubah jika berbeda.',
	'SERVER_PROTOCOL'			=> 'Protokol server',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Server protokol digunakan jika semua pengaturan ini dipaksakan. Jika kosong atau tidak dipaksakan maka protokol ditentukan dengan pengaturan keamanan cookie (<samp>http://</samp> atau <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Pengaturan server URL',
	'SMILIES_PATH'				=> 'Lokasi penyimpanan tanda senyuman',
	'SMILIES_PATH_EXPLAIN'		=> 'Lokasi di bawah direktori phpBB anda, contoh: <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Lokasi penyimapanan ikon ekstensi grup',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Lokasi di bawah direktori phpBB anda, contoh: <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Di sini anda dapat menentukan pengaturan sesi dan cara masuk ke halaman.',

	'ALL'							=> 'Semuanya',
	'ALLOW_AUTOLOGIN'				=> 'Ijinkan masuk secara ototmatis',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Menentukan apakah pengguna dapat masuk secara otomatis pada saat kunjungan ke halaman.',
	'AUTOLOGIN_LENGTH'				=> 'Lama waktu masuk secara otomatis (dalam hari)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Jumlah hari setelah masuk secara otomatis disingkirkan atau gunakan nol untuk menonaktifkannya.',
	'BROWSER_VALID'					=> 'Sahkan browser',
	'BROWSER_VALID_EXPLAIN'			=> 'Mengaktifkan pengesahan browser untuk meningkatkan keamaan untuk setiap sesi.',
	'CHECK_DNSBL'					=> 'Periksa alamat IP yang menyerang DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'			=> 'Jika diaktifkan maka alamat IP pengguna yang berusaha menyerang layanan DNSBL berikut ini pada saat pendaftaran dan pembuatan posting: <a href="http://spamcop.net">spamcop.net</a> dan <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Proses pemeriksaan ini mungkin akan memakan waktu yang cukup lama, tergantung pada konfigurasi server. Jika proses berjalan lambat dan mengalami terlalu banyak laporan kesalahan, maka dianjurkan untuk menonaktifkan fasilitas ini.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Perikasa domain e-mail untuk MX record yang sah',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Jika diaktifkan, maka domain e-mail yang diberikan pada saat pendaftaran dan perubahan profile akan diperiksa MX record yang sah.',
	'FORCE_PASS_CHANGE'				=> 'Paksa penggantian kata sandi',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Pengguna dibutuhkan untuk mengganti kata sandi mereka setelah jumlah hari yang telah ditentukan. Gunakan 0 untuk menonaktifkan fasilitas ini.',
	'FORM_TIME_MAX'					=> 'Jumlah maksimum pengajuan formulir',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Jumlah maksimum untuk pengguna yang telah mengajukan formulir. Gunakan -1 untuk menonaktifkannya. Mohon dicatat bahwa formulir mungkin menjadi tidak sah setelah sesi ini berakhir, tanpa memperhatikan pengaturan ini.',
	'FORM_SID_GUESTS'				=> 'Tutup formulir untuk sesi tamu',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Jika dinonaktifkan, formulir yang telah dikeluarkan kepada tamu akan menjadi sesi yang ekslusif. Ini bisa menyebabkan permasalah untuk beberapa ISP.',
	'FORWARDED_FOR_VALID'			=> 'Bagian judul divalidasi <var>X_FORWARDED_FOR</var>',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sesi akan dilanjutkan jika bagian kepala <var>X_FORWARDED_FOR</var> sama dengan yang diminta sebulumnya. Larangan akan diperiksa terhadap IP di <var>X_FORWARDED_FOR</var> juga.',
	'IP_VALID'						=> 'Pengesahan sesi IP',
	'IP_VALID_EXPLAIN'				=> 'Menentukan berapa banyak IP pengguna untuk mengesahkan sesi; <samp>Semua</samp> membandingkan alamat lengkap, <samp>A.B.C</samp> pertama x.x.x, <samp>A.B</samp> pertama x.x, <samp>Tidak</samp> menonaktifkan pemeriksaan. Pada alamat IPv6 <samp>A.B.C</samp> membandingkan 4 blok pertama dan <samp>A.B</samp> 3 blok pertama.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Jumlah maksimum percobaan masuk',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Setelah jumlah percobaan masuk gagal, pengguna harus menyelesaikan proses anti-spambot.',
	'NO_IP_VALIDATION'				=> 'Kosong',
	'NO_REF_VALIDATION'				=> 'Kosong',
	'PASSWORD_TYPE'					=> 'Kompleksitas kata sandi',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Menentukan bagaimana kompleksitas kata sandi dibutuhkan pada saat pengubahan, pilihan yang berikutnya mengikutsertakan yang sebelumnya.',
	'PASS_TYPE_ALPHA'				=> 'Harus mengandung angka dan huruf',
	'PASS_TYPE_ANY'					=> 'Tidak ada persyaratan',
	'PASS_TYPE_CASE'				=> 'Harus huruf campuran',
	'PASS_TYPE_SYMBOL'				=> 'Harus mengandung simbol',
	'REF_HOST'						=> 'Hanya host yang resmi',
	'REF_PATH'						=> 'Lokasi yang sah juga',
	'REFERER_VALID'					=> 'Sahkan Referer',
	'REFERER_VALID_EXPLAIN'			=> 'Jika diaktifkan, permintaan post dari referer akan diperiksa terhadap pengaturan host atau lokasi skrip. Hal ini akan menyebabkan halaman menggunakan beberapa domain.',
	'TPL_ALLOW_PHP'					=> 'Ijinkan php di template',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Jika pilihan ini diaktifkan maka pernyataan <code>PHP</code> dan <code>INCLUDEPHP</code>akan dikenali dan dipisahkan di template.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Informasi ini digunakan apabila halaman mengirim e-mail kepada pengguna. Mohon diperiksa apakah alamat e-mail yang anda masukkan sudah benar, semua pesan yang tidak sampai/terkirim akan dikirim ke alamat tersebut. Jika host anda tidak menyediakan layanan e-mail sebagai gantinya anda bisa bisa secara langsung mengirimkan e-mail dengan menggunakan SMTP. Namun hal ini membutuhkan alamat dari server yang sesuai (tanyakan provider anda jika diperlukan). Jika server membutuhkan otentifikasi (jika ada), masukkanlah nama pengguna seperlunya, kata sandi dan metode otentifikasi.',

	'ADMIN_EMAIL'					=> 'Alamat e-mail pengirim',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Ini akan digunakan sebagai alamat pengirim untuk semua e-mail, alamat e-mail kontak teknikal. Alamat ini akan selalu digunakan sebagai <samp>Lokasi Pengirim</samp> dan alamat <samp>Pengirim</samp> di e-mail.',
	'BOARD_EMAIL_FORM'				=> 'Pengguna mengirim e-mail lewat halaman',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Selain menunjukkan alamat e-mail pengguna, pengguna dapat mengirim e-mail melalui halaman.',
	'BOARD_HIDE_EMAILS'				=> 'Sembunyikan alamat e-mail',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Fungsi ini menyimpan alamat e-mail secara rahasia.',
	'CONTACT_EMAIL'					=> 'Alamat e-mail kontak',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Alamat ini akan digunakan apabila kontak spesifik dibutuhkan, contohnya: spam, error output, dsb. Akan selalu digunakan untuk alamat <samp>Dari</samp> dan <samp>Kepada</samp> pada e-mail.',
	'EMAIL_FUNCTION_NAME'			=> 'Nama fungsi e-mail',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Fungsi e-mail digunakan untuk mengirim e-mail melalui PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Ukuran paket e-mail',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Ini adalah jumlah maksimum e-mail yang dikirim dalam satu paket. Pengaturan ini dipakai untuk antrian pesan internal; Gunakan nilai 0 jika anda memiliki masalah dengan pemberitahuan e-mail yang tidak terkirim.',
	'EMAIL_SIG'						=> 'Tanda tangan e-mail',
	'EMAIL_SIG_EXPLAIN'				=> 'Teks ini akan dilampirkan ke semua e-mail yang dikirim.',
	'ENABLE_EMAIL'					=> 'Aktifkan e-mail seluruh halaman',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Jika ini dinonaktifkan maka tidak ada e-mail yang akan dikirim oleh halaman.',
	'SMTP_AUTH_METHOD'				=> 'Metode otentifikasi SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Hanya gunakan apabila nama pengguna atau kata sandi dipakai, tanya provider anda jika tidak yakin metode yang digunakan.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'MASUK',
	'SMTP_PASSWORD'					=> 'Kata sandi SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Cukup masukkan kata sandi jika server SMTP anda membutuhkannya.<br /><em><strong>Peringatan:</strong> Kata sandi ini akan disimpan sebagai teks biasa di database, yang bisa dilihat siapapun yang bisa mengakses database ataupun yang bisa melihat papan konfigurasi ini</em>.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Server port SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Hanya ubah jika anda mengetahui SMTP server berada pada port yang berbeda.',
	'SMTP_SERVER'					=> 'Alamat server SMTP',
	'SMTP_SETTINGS'					=> 'Pengaturan SMTP',
	'SMTP_USERNAME'					=> 'Nama pengguna SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Hanya masukkan nama pengguna jika SMTP server anda membutuhkannya.',
	'USE_SMTP'						=> 'Gunakan server SMTP untuk e-mail',
	'USE_SMTP_EXPLAIN'				=> 'Pilih “Ya” jika anda ingin atau harus mengirimkan e-mail melalui server lain sebagai pengganti fungsi e-mail lokal.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Di sini anda dapat mengaktifkan dan mengatur penggunaan Jabber sebagai perpesanan dan pemberitahuan halaman. Jabber merupakan protokol open source dan karenanya tersedia untuk siapa saja. Beberapa server Jabber mengikutsertakan gateway atau transportasi yang dapat menghubungkan pengguna di network yang lain. Tidak semua server memberikan transportasi. Mohon diperiksa untuk memasukkan keterangan account yang sudah terdaftar - phpBB akan menggunakan keterangan yang anda masukkan di sini.',

	'JAB_ENABLE'				=> 'Aktifkan Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Aktifkan penggunaan perpesanan Jabber dan notifikasi.',
	'JAB_GTALK_NOTE'			=> 'Mohon dicatat bahwa GTalk tidak akan bekerja karena fungsi <samp>dns_get_record</samp> tidak ditemukan. Fungsi ini tidak tersedia pada PHP4, dan tidak diimplementasikan pada platform Window. Fungsi ini juda tidak berjalan pada sistem dasar BSD, termasuk sistem operasi Mac.',
	'JAB_PACKAGE_SIZE'			=> 'Ukuran paket Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Ini adalah jumlah pesan dalam satu paket. Jika dibuat menjadi 0 maka pesan akan dikirim secepat mungkin dan tidak akan dimasukkan dalam antrian pengiriman berikutnya.',
	'JAB_PASSWORD'				=> 'Kata sandi Jabber',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Peringatan:</strong> Kata sandi ini akan disimpan sebagai teks biasa pada database, yang bisa dilihat siapapun yang bisa mengakses database anda ataupun yang bisa melihat halaman konfigurasi ini.</em>',
	'JAB_PORT'					=> 'Port Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Biarkan kosong jika anda tahu port tersebut bukan 5222.',
	'JAB_SERVER'				=> 'Server Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Lihat %sjabber.org%s untuk daftar server.',
	'JAB_SETTINGS_CHANGED'		=> 'Pengaturan Jabber berhasil diubah.',
	'JAB_USE_SSL'				=> 'Gunakan SSL untuk koneksi',
	'JAB_USE_SSL_EXPLAIN'		=> 'Jika diaktifkan maka koneksi yang aman dicoba dibangun. Port Jabber akan dimodifikasikan ke 5223 jika port 5222 ditentukan.',
	'JAB_USERNAME'				=> 'Nama pengguna Jabber atau JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Tentukan nama pengguna yang terdaftar atau JID yang sah. Nama pengguna tidak akan diperiksa kebenarannya. Jika anda hanya menentukan nama pengguna, maka JID anda akan sama dengan nama pengguna dan server yang anda tentukan diatas. Selain itu, tentukan JID yang benar, sebagi contohnya user@jabber.org.',
));

?>