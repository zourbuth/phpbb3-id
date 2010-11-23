<?php
/**
*
* install [Bahasa Indonesia]
*
* @package language
* @version $Id: install.php 2010 Sastra Manurung zourbuth@gmail.com
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

$lang = array_merge($lang, array(
	'ADMIN_CONFIG'				=> 'Konfigurasi administrator',
	'ADMIN_PASSWORD'			=> 'Kata sandi administrator',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Konfirmasikan kata sandi administrator',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Silahkan memasukkan kata sandi dengan panjang antara 6 sampai 30 karakter.',
	'ADMIN_TEST'				=> 'Periksa pengaturan administrator',
	'ADMIN_USERNAME'			=> 'Nama pengguna administrator',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Silahkan memasukkan nama pengguna dengan panjang antara 6 sampai 20 karakter.',
	'APP_MAGICK'				=> 'Imagemagick support [ Lampiran ]',
	'AUTHOR_NOTES'				=> 'Catatan pengarang<br />» %s',
	'AVAILABLE'					=> 'Tersedia',
	'AVAILABLE_CONVERTORS'		=> 'Konvertor yang tersedia',

	'BEGIN_CONVERT'					=> 'Mulai percakapan',
	'BLANK_PREFIX_FOUND'			=> 'Penelitian atas daftar anda telah menunjukkan instalasi yang benar tanpa menggunakan daftar awalan.',
	'BOARD_NOT_INSTALLED'			=> 'Tidak ditemukan instalasi',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Agar berfungsi, phpBB Unified Convertor Framework membutuhkan instalasi phpBB3 standar, silahkan <a href="%s"> melanjutkan setelah phpBB3 terinstal</a>.',

	'CATEGORY'					=> 'Kategori',
	'CACHE_STORE'				=> 'Tipe cache',
	'CACHE_STORE_EXPLAIN'		=> 'Lokasi fisik tempat data di-cache, lokasi filesystem lebih dianjurkan.',
	'CAT_CONVERT'				=> 'Konversikan',
	'CAT_INSTALL'				=> 'Instal',
	'CAT_OVERVIEW'				=> 'Ikhtisar',
	'CAT_UPDATE'				=> 'Update',
	'CHANGE'					=> 'Ubah',
	'CHECK_TABLE_PREFIX'		=> 'Silahkan periksa daftar awalan anda dan coba lagi.',
	'CLEAN_VERIFY'				=> 'Membersihakn dan memverifikasi struktur terakhir',
	'CLEANING_USERNAMES'		=> 'Membersihkan nama pengguna',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> nama pengguna yang bersih untuk:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Bentrokan nama pengguna ditemukan di halaman anda yang lama. Untuk menyelesaikan konversi tersebut silahkan hapus atau ganti nama-nama pengguna ini sehingga hanya ada satu nama pengguna yang bersih di halaman anda.',
	'COLLIDING_USER'			=> '» id pengguna: <strong>%d</strong> nama pengguna: <strong>%s</strong> (%d posts)',
	'CONFIG_CONVERT'			=> 'Mengkonversikan konfigurasi',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Tidak memungkinkan untuk menulis file konfigurasi. Metode alternatif untuk menciptakan file ini di tampilkan dibawah.',
	'CONFIG_FILE_WRITTEN'		=> 'File konfigurasi telah ditulis. Sekarang anda dapat melangkah ke tahap instalasi selanjutnya.',
	'CONFIG_PHPBB_EMPTY'		=> 'Variable konfigurasi phpBB3 untuk “%s” kosong.',
	'CONFIG_RETRY'				=> 'Coba lagi',
	'CONTACT_EMAIL_CONFIRM'		=> 'Konfirmasikan e-mail kontak',
	'CONTINUE_CONVERT'			=> 'Lanjutkan konversi',
	'CONTINUE_CONVERT_BODY'		=> 'Percobaan konversi sebelumnya telah ditentukan. Sekarang anda dapat memilih antara memulai konversi yang baru atau melanjutkan konversi.',
	'CONTINUE_LAST'				=> 'Lanjutkan pernyataan terakhir',
	'CONTINUE_OLD_CONVERSION'	=> 'Lanjutkan konversi yang dimulai sebelumnya',
	'CONVERT'					=> 'Konversikan',
	'CONVERT_COMPLETE'			=> 'Konversi selesai',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Sekarang anda telah berhasil mengkonversikan halaman anada menjadi phpBB 3.0. Sekarang anda bisa masuk <a href="../">mengakses halaman</a>. Mohon diperiksa apakah pengaturan yang ditransfer sudah benar sebelum mengaktifkan halaman anda dengan menghapus direktori instal. Ingatlah bahwa bantuan untuk menggunakan phpBB tersedia online melalui <a href="http://www.phpbb.com/support/documentation/3.0/">Documentation</a> and the <a href="http://www.phpbb.com/community/viewforum.php?f=46">support forums</a>.',
	'CONVERT_INTRO'				=> 'Selamat datang di phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Di sini anda dapat mengimport data dari sistem halaman lain yang sudah terinstal. Daftar berikut menunjukkan modul yang sudah tersedia. Jika tidak ada konvertor yang ditampilkan pada daftar ini yang bisa dikonversikan, silahkan lihat website kami untuk modul konversi lebih lanjut yang bisa didownload.',
	'CONVERT_NEW_CONVERSION'	=> 'Konversi baru',
	'CONVERT_NOT_EXIST'			=> 'Konvertor yang dipilih tidak ada.',
	'CONVERT_OPTIONS'			=> 'Pilihan-pilihan',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Informasi yang anda masukkan telah diverifikasi. Untuk memulai proses konversi, silahkan tekan tombol berikut ini.',
	'CONV_ERR_FATAL'			=> 'Konversi error fatal',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP upload untuk lampiran diaktifkan pada halaman yang lama. Silahkan nonaktifkan pilihan FTP upload dan periksa direktori upload yang ditentukan sudah benar, lalu salin semua file lampiran ke direktori web yang bisa diakses. Lakukan restart konvertor setelah anda selesai melakukannya.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Tidak ada informasi konfigurasi yang tersedia untuk konversi tersebut.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Tidak bisa mengakses informasi.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Tidak bisa mendapatkan kategori.',
	'CONV_ERROR_GET_CONFIG'				=> 'Tidak bisa mendapatkan kembali konfigurasi halaman.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Tidak bisa mengakses/membaca “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Tidak bisa mendapatkan informasi otentifikasi grup.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Tabel grup yang tidak tetap dideteksi di add_bots() - anda harus menambahkan semua grup spesial jika anda melakukannya secara manual.',
	'CONV_ERROR_INSERT_BOT'				=> 'Tidak dapat memasukkan bot ke tabel pengguna.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Tidak dapat memasukkan bot ke tabel bot.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Tidak dapat memasukkan pengguna ke table user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Pemisah pesan error',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Catatan untuk pengembang: anda harus menentukan $convertor[\'avatar_path\'] untuk digunakan sebagai %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Lokasi relatif ke sumber halaman belum ditentukan.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Catatan untuk pengembang: anda harus menentukan $convertor[\'avatar_gallery_path\'] untuk digunakan sebagai %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Grup “%1$s” tidak ditemukan di %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Catatan untuk pengembang: anda harus menentukan $convertor[\'ranks_path\'] untuk digunakan sebagai %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Catatan untuk pengembang: anda harus menentukan $convertor[\'smilies_path\'] untuk digunakan sebagai %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Catatan untuk pengembang: anda harus menentukan $convertor[\'upload_path\'] untuk digunakan sebagai %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Tidak dapat memasukkan/memperbaharui pengaturan perijinan.',
	'CONV_ERROR_PM_COUNT'				=> 'Tidak dapat memilih folder penghitungan pesan pribadi.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Tidak dapat memasukkan forum baru yang menggantikan kategori yang lama.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Tidak dapat memasukkan forum baru yang menggantikan forum yang lama.',
	'CONV_ERROR_USER_ACCESS'			=> 'Tidak dapat mengambil informasi otentifikasi pengguna.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Grup “%1$s” yang ditentukan dalam %2$s salah.',
	'CONV_OPTIONS_BODY'					=> 'Halaman ini mengumpulkan data yang dibuthkan untuk mengakses ke sumber halaman. Masukkan keterangan database Masukkan keterangan database halaman anda yang terdahulu; konverter tidak akan mengubah apapun dalam database yang diberikan di bawah ini. Sumbar halaman seharusnya dinonaktifkan untuk mengijinkan konversi yang konsisten.',
	'CONV_SAVED_MESSAGES'				=> 'Pesan yang disimpan',

	'COULD_NOT_COPY'			=> 'Tidak dapat menyalin file <strong>%1$s</strong> ke <strong>%2$s</strong><br /><br />Silahkan periksa direktori target ada dan bisa ditulis oleh webserver.',
	'COULD_NOT_FIND_PATH'		=> 'Lokasi ke halaman anda terdahulu tidak dapat ditemukan. Silahkan periksa pengaturan anda dan coba lagi.<br />» %s ditentukan sebagai lokasi sumber.',

	'DBMS'						=> 'Tipe database',
	'DB_CONFIG'					=> 'Konfigurasi database',
	'DB_CONNECTION'				=> 'Koneksi database',
	'DB_ERR_INSERT'				=> 'Error pada saat memproses query <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Error pada saat memproses query <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Error pada saat mengeksekusi <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Error pada saat mengeksekusi <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Error pada saat menjalankan query <code>SELECT</code>.',
	'DB_HOST'					=> 'Nama host server database atau DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN adalah kepanjangan dari Data Source Name dan hanya bertalian untuk instal ODBC. Pada PostgreSQL, gunakan localhost untuk koneksi ke server lokal via soket domain UNIX dan 127.0.0.1 untuk koneksi via TCP.',
	'DB_NAME'					=> 'Nama database name',
	'DB_PASSWORD'				=> 'Kata sandi database',
	'DB_PORT'					=> 'Port server database',
	'DB_PORT_EXPLAIN'			=> 'Biarkan ini kosong kecuali jika anda mengetahui bahwa server tersebut beroperasi pada port non-standard.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Maaf, skrip ini tidak mendukung proses pembaruan dari versi phpBB karena “%1$s”. Versi yang anda gunakan sekrang adalah “%2$s”. Silahkan perbarui dengan bersi sebelumnya sebelum menjalankan skrip ini.Bantuan untuk hal ini tersedia pada Support Forum di phpBB.com.',
	'DB_USERNAME'				=> 'Nama pengguna database',
	'DB_TEST'					=> 'Coba koneksi',
	'DEFAULT_LANG'				=> 'Bahasa default halaman',
	'DEFAULT_PREFIX_IS'			=> 'Konvertor tidak dapat menemukan tabel dengan prefix yang ditentukan. Please make sure you have entered the correct details for the board you are converting from. The default table prefix for %1$s is <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Tidak ada nilai yang ditentukan untukk variabel test_file di konvertor. Jika anda pengguna konvertor ini, anda seharusnya tidak melihat error ini, silahkan laporkan pesan ini kepada pembuat konvertor, anda harus menentukan nama file yang ada pada sumber halaman untuk mengijinkan lokasi untuk diverifikasi.',
	'DIRECTORIES_AND_FILES'		=> 'Direktori dan setup file',
	'DISABLE_KEYS'				=> 'Menonaktifkan kunci',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Dukungan Remote FTP [ Instalasi ]',
	'DLL_GD'					=> 'Dukungan GD graphic [ Konfirmasi visual ]',
	'DLL_MBSTRING'				=> 'Dukungan karakter Multi-byte',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MSSQLNATIVE'         	=> 'MSSQL Server 2005+ [ Asli ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL dengan ekstensi MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Dukungan XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Dukungan Kompresi zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Download konfigurasi',
	'DL_CONFIG_EXPLAIN'			=> 'Anda boleh mendownload config.php secara lengkap ke PC anda. Kemudian anda harus mengupload file tersebut secara manual, menimpa config.php pada direktori phpBB 3.0 anda. Mohon diingat untuk mengupload file tersebuta dalam format ASCII (see your FTP application documentation if you are unsure how to achieve this). When you have uploaded the config.php please click “Done” to move to the next stage.',
	'DL_DOWNLOAD'				=> 'Download',
	'DONE'						=> 'Selesai',

	'ENABLE_KEYS'				=> 'Mengaktifkan ulang kunci. Ini bisa memakan waktu yang agak lama.',

	'FILES_OPTIONAL'			=> 'File-file dan direktori opsional',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opsional</strong> - File-file ini, direktori ataupun pengaturan perijinan tidak dibutuhkan. Sistem instalasi akan mencoba membuat dengan menggunakan teknik yang berbeda jika tidak ada ataupun tidak bisa ditulis. Akan tetapi, jika ini ada maka kecepatan instalasi akan bertambah.',
	'FILES_REQUIRED'			=> 'File Dan Direktori',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Dibuthkan</strong> - Untuk memfungsikan phpBB secara benar dibutuhkan akses untuk menulis dibutuhkan akses untuk menulis ke file dan direktori tertentu. Jika anda melihat “Tidak Ditemukan” maka anda harus membuat file dan direktori yang relevan. Jika anda melihat “Tidak Bisa Ditulisi” maka anda harus mengubah perijinan untuk file atau direktori agar bisa ditulis oleh phpBB.',
	'FILLING_TABLE'				=> 'Tabel isian <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Tabel-tabel isian',

	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'phpBB tidak lagi mendukung Firebird/Interbase versi 2.1. Silahkan perbarui instalasi Firebird anda paling tidak dengan versi 2.1.0 sebelum melanjutkan pembaruan.',
	
	'FINAL_STEP'				=> 'Langkah terakhir proses',
	'FORUM_ADDRESS'				=> 'Alamat halaman',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Ini adalah URL halaman anda yang terdahulu, sebagai contoh <samp>http://www.example.com/phpBB2/</samp>. Jika alamat diisi di sini dan tidak ditinggalkan kosong untuk setiap hal maka alamat tersebut akan digantikan dengan alamat halaman anda yang baru dalam pesan, pesan pribadi dan tanda tangan.',
	'FORUM_PATH'				=> 'Path halaman',
	'FORUM_PATH_EXPLAIN'		=> 'Ini adalah path <strong>relative</strong> di disk ke halaman terdahulu anda dari <strong>root instalasi phpBB ini</strong>.',
	'FOUND'						=> 'Ditemukan',
	'FTP_CONFIG'				=> 'Mentransfer config dengan FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB mendeteksi adanya modul FTP di server ini. Anda bisa mencoba menginstal config.php anda dengan ini jika anda mau. Anda harus menyediakan informasi yang diberikan di bawah ini. Ingatlah bahwa nama pengguna dan kata sandi anda ada di server anda! (silahkan tanya hosting provider anda untuk keterangan lebih lanjut jika anda tidak yakin dengan hal ini).',
	'FTP_PATH'					=> 'Path FTP',
	'FTP_PATH_EXPLAIN'			=> 'Ini adala path dari direktori root phpBB anda, e.g. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Upload',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'konfigurasi dasar',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Sekarang proses instal sudah menentukan bahwa server anda bisa menjalankan phpBB, anda harus menyediakan beberapa informasi yang spesifik. Jika anda tidak mengetahui cara untuk mengkoneksikan ke database anda, silahkan hubungi provider hosting anda (pada saat pertama) atau gunakan support forum phpBB. Pada saat memasukkan data silahkan periksa sebelum melanjutkan.',
	'INSTALL_CONGRATS'			=> 'Selamat!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>Anda telah berhasil menginstal %1$s. Silahkan dilanjutkan dengan pilihan berikut ini:</p>
		<h2>Konversikan halaman sudah ada menjadi phpBB3</h2>
		<p>phpBB Unified Convertor Framework mendukung untuk konversi dari phpBB 2.0.x dan sistem lainnya menjadi phpBB3. Jika anda memiliki halaman yang sebelumnya sudah ada dan ingin melakukan konversi, silahkan <a href="%2$s">proses ke konvertor</a>.</p>
		<h2>Jalankan phpBB3 anda!</h2>
		<p>Dengan mengklik tombol di bawah ini akan mengantarkan anda ke Papan Pengaturan Administrasi. Ambil beberapa waktu untuk pilihan yang tersedia untuk anda. Mohon diingat bahwa bantuan tersedia secara online melalui <a href="http://www.phpbb.com/support/documentation/3.0/">Documentation</a> dan <a href="http://www.phpbb.com/community/viewforum.php?f=46">support forums</a>, silahkan lihat <a href="%3$s">README</a> untuk informasi lebih lanjut.</p><p><strong>Silahkan hapus, singkirkan atau namai ulang sekarang direktori instal sebelum menggunakan halaman anda. Jika direktori ini masih tetap ada, maka hanya Papan Pengaturan Administrasi (PPA) yang bisa diaksese.</strong></p>',
	'INSTALL_INTRO'				=> 'Selamat Datang Ke Instalasi',

	'INSTALL_INTRO_BODY'		=> 'Dengan pilihan ini adalah memungkinkan untuk menginstall phpBB3 ke server anda.</p><p>Untuk memproses, anda membutuhkan pengaturan database. Jika anda tidak mengetahui pengaturan database anda, silahkan hubungi host anda dan tanyakan mereka. Anda tidak akan bisa melanjutkan tanpa pengaturan tersebut. Anda harus:</p>

	<ul>
		<li>Tipe Database - database yang akan anda gunakan.</li>
		<li>Nama host server database atau DSN - alamat dari server database.</li>
		<li>Port Server Database - port dari server database (biasanya tidak dibutuhkan).</li>
		<li>Nama Database - nama database di server tersebut.</li>
		<li>Nama Pengguna dan Kata Sandi Database - masukan untuk mengakses database.</li>
	</ul>

	<p><strong>Catatan:</strong> jika anda menggunakan SQLite untuk instalasi, anda harus memasukkan alamat lengkap ke file database anda pada DSN isian dan biarkan kosong isian untuk nama pengguna dan kata sandinya. Untuk alasan keamanan, anda harus yakin bahwa file database tersebut tidak disimpan di lokasi web yang dapat diakses.</p>

	<p>phpBB3 mendukung beberapa database berikut ini:</p>
	<ul>
		<li>MySQL 3.23 atau di bawahnya (Mendukung MySQLi)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 atau di bawahnya (langsung ataupun via ODBC)</li>
		<li>MS SQL Server 2005 atau ke atas (asli)</li>
		<li>Oracle</li>
	</ul>

	<p>Hanya database yang didukung pada server anda yang akan ditampilkan.',
	'INSTALL_INTRO_NEXT'		=> 'Untuk memulai instalasi, silahkan tekan tombol di bawah ini.',
	'INSTALL_LOGIN'				=> 'Masuk',
	'INSTALL_NEXT'				=> 'Tahap selanjutnya',
	'INSTALL_NEXT_FAIL'			=> 'Beberapa percobaan gagal dan anda harus membetulkan permasalahan ini sebelum melanjutkan ke tahap sebelumnya.',
	'INSTALL_NEXT_PASS'			=> 'Semua percobaan telah berhasil dan anda anda bisa melanjutkan ke tahap instalasi selanjutnya. Jika anda telah mengubah beberapa perijinan, modul-modul, dsb. dan ingin mengulangi percobaan tersebut anda bisa melakukannya lagi jika dikehendaki.',
	'INSTALL_PANEL'				=> 'Papan Instalasi',
	'INSTALL_SEND_CONFIG'		=> 'phpBB tidak bisa menulis konfigurasi informasi secara langsung ke config.php. Hal ini mungkin disebabkan karena file tersebut tidak ada atau tidak bisa ditulis. Sejumlah pilihan akan ditampilkan di bawah ini yang akan memampukan anda untuk menyelesaikan instalasi dari config.php.',
	'INSTALL_START'				=> 'Mulai instal',
	'INSTALL_TEST'				=> 'Coba lagi',
	'INST_ERR'					=> 'Instalasi error',
	'INST_ERR_DB_CONNECT'		=> 'Tidak dapat menghubungkan ke database, lihat pesan error di bawah ini.',
	'INST_ERR_DB_FORUM_PATH'	=> 'File database yang anda tentukan dalam susunan direktori halaman anda. Anda harus meletakkan file ini pada lokasi web yang tidak bisa diakses.',
	'INST_ERR_DB_NO_ERROR'		=> 'Tidak ada pesan error yang diberikan.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Versi dari MySQL yang terinstal pada mesin ini tidak cocok dengan pilihan “MySQL dengan Ekstensi MySQLi” yang anda gunakan. Silahkan coba pilihan “MySQL”.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Versi dari ekstensi SQLite yang anda miliki terlalu lama, harus di upgrade paling tidak ke versi 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Versi dari of Oracle yang diinstal pada mesin ini membutuhkan anda untuk membuat parameter <var>NLS_CHARACTERSET</var> untuk <var>UTF8</var>. Upgrade juga instalasi anda ke versi 9.2+ atau ubah parameternya.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Versi dari Firebird yang diinstal pada mesin di bawah 2.0, silahkan upgrade versi yang terbaru.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Database yang anda pilih untuk Firebird memiliki ukuran halaman kurang dari 8192, palng sedikitnya harus 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Database yang anda pilih tidak dibuat dalam coding <var>UNICODE</var> atau <var>UTF8</var>. Cobalah instal dengan database coding <var>UNICODE</var> atau <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'		=> 'Tidak ada database yang ditentukan.',
	'INST_ERR_EMAIL_INVALID'	=> 'Alamat e-mail yang anda masukkan salah.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Alamat e-mail yang anda masukkan tidak cocok.',
	'INST_ERR_FATAL'			=> 'Instalasi error fatal',
	'INST_ERR_FATAL_DB'			=> 'Sebuah kejadian fatal dan tidak dapat tertolong lagi pada error database telah terjadi. Hal ini mingkin terjadi karena pengguna tidak memiliki perijinan yang sesuai untuk <code>CREATE TABLES</code> atau <code>INSERT</code> data, dsb. Informasi lebih lanjut diberikan dibawah ini. Silahkan hubungi pengembang hosting anda atau hubungi support forums phpBB untuk pertolongan lebih lanjut.',
	'INST_ERR_FTP_PATH'			=> 'Tidak dapat mengubah ke direktori yang diberikan, silahkan periksa path tersebut.',
	'INST_ERR_FTP_LOGIN'		=> 'Tidak dapat masuk ke server FTP, silahkan periksa nama pengguna dan kata sandi anda.',
	'INST_ERR_MISSING_DATA'		=> 'Anda harus mengisikan semua isian yang ada di bagian ini.',
	'INST_ERR_NO_DB'			=> 'Tidak dapat memanggik modul PHP untuk jenis database yang dipilih.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Kata sandi yang anda masukkan tidak tepat.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Kata sandi yang anda masukkan terlalu panjang. Panjang maksimum adalah 30 karakter.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Kata sandi yang anda masukkan terlalu pendek. Panjang minimum adalah 6 karakter.',
	'INST_ERR_PREFIX'			=> 'Tabel prefik yang ditentukan sudah ada, silahkan gunakan alternatif lain.',
	'INST_ERR_PREFIX_INVALID'	=> 'Tabel prefik yang ditentukan tidak bisa digunakan untuk database anda. Silahkan Please try another, removing characters such as the hyphen.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Tabel prefik yang ditentukan terlalu besar. Panjang maksimumnya adalah %d karakter.',
	'INST_ERR_USER_TOO_LONG'	=> 'Nama pengguna yang anda masukkan terlalu panjang. Panjang maksimumnya adalah 20 karakter.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Nama pengguna yang anda masukkan terlalu pendek. Panjang minimum adalah 3 karakter.',
	'INVALID_PRIMARY_KEY'		=> 'Kunci primer tidak berlaku : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Mohon dicatat bahwa proses ini akan membutuhkan waktu untuk beberapa saat... Dimohon agar tidak menghentikan skrip ini.',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> pemeriksaan ekstensi',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Dibutuhkan</strong> - <samp>mbstring</samp> adalah sebuah ekstensi dari PHP yang menyediakan fungsi string multibyte. Beberapa fitur dari mbstring tidak cocok dengan phpBB dan harus dinonaktifkan.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Fungsi melampaui batas',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> harus di atur salah satunya menjadi 0 atau 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Enkoding karakter transparan',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> harus dibuat menjadi 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Konversi input karakter HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> harus dibuat menjadi <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Konversi output karakter HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> harus di ubah menjadi <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'			=> 'Mohon diperiksa apakah folder tersebut ada dan bisa ditulis oleh lalu coba lagi:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'			=> 'Mohon diperiksa apakah folder-folder tersebut tersebut ada dan bisa ditulis oleh lalu coba lagi:<br />»<strong>%s</strong>.',

    'MYSQL_SCHEMA_UPDATE_REQUIRED'  => 'Skema database MySQL anda untuk phpBB sudah lama. phpBB mendeteksi skema untuk MySQL 3.x/4.x, tetapi server berjalan dengan MySQL %2s.<br /><strong>Sebelum melakukan pembaruan, anda harus membarui skemanya terlebih dulu.</strong><br /><br />Silahkan lihat di <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base article about upgrading the MySQL schema</a>. Jika anda mengalami masalah, silahkan menggunakan <a href="http://www.phpbb.com/community/viewforum.php?f=46">forum support kami</a>.',

	'NAMING_CONFLICT'				=> 'Konflik penamaan: %s dan %s adalah sama-sama alias<br /><br />%s',
	'NEXT_STEP'						=> 'Lanjutkan ke langkap selanjutnya',
	'NOT_FOUND'						=> 'Tidak dapat ditemukan',
	'NOT_UNDERSTAND'				=> 'Tidak dapat dimengerti %s #%d, tabel %s (“%s”)',
	'NO_CONVERTORS'					=> 'Tidak ada konvertor yang tersedia.',
	'NO_CONVERT_SPECIFIED'			=> 'Tidak ada konvertor yang ditentukan.',
	'NO_LOCATION'					=> 'Tidak dapat menentukan lokasi. Jika anda mengetahui Imagemagick sudah terinstal, anda boleh menetukan lokasinya nanti pada papan pengaturan administrasi',
	'NO_TABLES_FOUND'				=> 'Tidak ada tabel ditemukan.',

	'OVERVIEW_BODY'					=> 'Selamat datang di phpBB3!<br /><br />phpBB™ adalah solusi halaman bulletin open source yang paling banyak digunakan di dunia. phpBB3 adalah instalasi terakhir yang dimulai pada tahun 2000. Seperti predecessornya, phpBB3 kaya akan fitur, mudah digunakan, dan dikung penuh oleh Team phpBB. phpBB3 lebih dikembangkan lagi dari hal-hal yang membuat phpBB2 popular, dan menambahkan fitur-fitur permintaan yang tidak disediakan di versi sebelumnya. Kami harap ini bisa mencapai harapan anda.<br /><br />Sistem instalasi ini akan mamandu anda dalam melakukan instalasi phpBB, memperbaharui ke versi yang terbaru dari phpBB3 dari versi sebelumnya, seperti mengkonversikan phpBB3 dari discussion board system yang berbeda (termasuk phpBB2). Untuk informasi lebih lanjut, we menyarankan agar anda membaca <a href="../docs/INSTALL.html">panduan instalasi</a>.<br /><br />Untuk membaca lisensi atau mempelajari tentang cara mendapatkan dukungan phpBB3, silahkan pilih masing-masing pilihan dari menu disamping. Untuk melanjutkan, silahkan pilih tab yang cocok diatas.',

	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 support',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>tidak</strong> akan berjalan apabila instalasi PHP anda tidak dikompilasi dengan dukungan UTF-8 pada ekstensi PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Fungsi PHP getimagesize() tersedia',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Dibutuhkan</strong> - Agar phpBB dapat berfungsi dengan baik, fungsi getimagesize harus disediakan.',
	'PHP_OPTIONAL_MODULE'			=> 'Modul-modul opsional',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opsional</strong> - Modul atau aplikasi ini adalah opsional. akan tetapi, jika tersedia akan mengaktifkan fitur tambahan.',
	'PHP_SUPPORTED_DB'				=> 'Databases yang disupport',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Dibutuhkan</strong> - anda harus memiliki support paling tidak satu database yang cocok dengan PHP. Jika tidak ada modul database yang tersedia ditampilkan, anda harus menghubungi pengembang hosting anda atau tinjau dokumentasi instalasi PHP yang relevan sebagai masukan.',
	'PHP_REGISTER_GLOBALS'			=> 'Pengaturan PHP <var>register_globals</var> tidak aktif',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB akan tetap berjalan jika pengaturan ini diaktifkan, tetapi jika memungkinkan, dan disarankan fungsi register_globals dinonaktifkan pada instal PHP anda untuk alasan keamanan.',
	'PHP_SAFE_MODE'					=> 'Safe mode',
	'PHP_SETTINGS'					=> 'Versi PHP dan pengaturan',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Dibutuhkan</strong> - Setidaknya anda harus berjalan dengan PHP versi 4.3.3 untuk menginstal phpBB. Jika <var>safe mode</var> ditampilkan pada bagian bawah instalasi PHP anda berarti anda sedang menjalankan mode tersebut. Ini akan menyebabkan pembatasan pada administarsi remote dan fitur-fitur yang serupa.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'Pengaturan PHP <var>allow_url_fopen</var> aktif',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opsional</strong> - Pengaturan ini adalah opsional, akan tetapi fungsi phpBB tertentu seperti avatar off-site tidak akan berfungsi dengan baik tanpanya. ',
	'PHP_VERSION_REQD'				=> 'Versi PHP >= 4.3.3',
	'POST_ID'						=> 'ID Post',
	'PREFIX_FOUND'					=> 'Sebuah pemeriksaan terhadap telah menunjukkan instalsi yang benar menggunakan <strong>%s</strong> sebagai prefik tabel.',
	'PREPROCESS_STEP'				=> 'Mengeksekusi fungsi/query pra-proses',
	'PRE_CONVERT_COMPLETE'			=> 'Semua tahap pra-konversi sudah berhasil diselesaikan. Sekarang anda boleh memulai proses konversi aktualnya. Mohon dicatat bahwa anda harus melakukannya secara manual dan mengatur beberapa hal. Setelah konversi, silahkan periksa perijinan yang diberikan, bangun kembali indeks pencarian anda yang tidak dikonversikan dan periksa file-file tersalin dengan benar, sebagai contoh avatar dan tanda senyuman.',
	'PROCESS_LAST'					=> 'Memproses pernyataan terakhir',

	'REFRESH_PAGE'				=> 'Refresh halaman untuk melanjutkan konversi',
	'REFRESH_PAGE_EXPLAIN'		=> 'Jika dipilih ya, konvertor akan melakukan refresh halaman untuk melanjutkan konversi setelah suatu tahap diselesaikan. Jika ini merupakan konversi pertama anda, untuk tujuan percobaan dan menentukan beberapa kesalahan nantinya, kami menyarankan untuk membuat ini menjadi Tidak.',
	'REQUIREMENTS_TITLE'		=> 'Kecocokan Instalasi',
	'REQUIREMENTS_EXPLAIN'		=> 'Sebelum memproses dengan instalasi penuh, phpBB akan melakukan beberapa percobaan pada konfigurasi server dan file-file ana untuk meyakinkan bahwa anda bisa menginstal dan menjalankan phpBB. Silahkan baca keseluruhan hasil dan jangan jangan melanjutkan sampai semua tes selesai. Jika anda berniat untuk menggunakan beberapa fitur, tergantung dari tes opsionalnya, anda harus yakinkan juga bahwa semua test ini telah selesai dilaksanakan.',
	'RETRY_WRITE'				=> 'Mencoba ulang menulis config',
	'RETRY_WRITE_EXPLAIN'		=> 'Jika anda mau, anda bisa mengubah perijinan pada config.php untuk membolehkan phpBB menulisnya. Klik tombol coba lagi jika ingin mencoba kembali. Mohon diingat untuk mengembalikan perijinan dari config.php setelah phpBB selesai diinstal.',

	'SCRIPT_PATH'				=> 'Lokasi skrip',
	'SCRIPT_PATH_EXPLAIN'		=> 'Lokasi dimana phpBB ditempatkan relatif ke nama domain, contoh: <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Pilih bahasa',
	'SERVER_CONFIG'				=> 'Konfigurasi server',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Indeks pencarian tidak dikonversikan',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Indeks pencarian anda yang lama tidak dikonversikan. Pencarian akan selalu memberikan hasil yang kosong. Untuk membuat indeks pencarian yang baru, kunjungi Papan Pengaturan Administrator, pilih Perawatan dan Indeks pencarian dari sub menunya.',
	'SOFTWARE'					=> 'Perangkat Lunak Halaman',
	'SPECIFY_OPTIONS'			=> 'Tentukan pilihan konversi',
	'STAGE_ADMINISTRATOR'		=> 'Keterangan administrator',
	'STAGE_ADVANCED'			=> 'Pengaturan Lanjutan',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Pengaturan pada halaman ini hanya diperlukan untuk diubah jika anda tahu anda membutuhkan sesuatu yang berbeda dari defaultnya. Jika anda tidak yakin, silahkan proses ke halaman berikutnya, karena pengaturan ini bisa diubah dari Papan Pengaturan Administrasi nantinya.',
	'STAGE_CONFIG_FILE'			=> 'File konfigurasi',
	'STAGE_CREATE_TABLE'		=> 'Menbuat tabel database',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Tabel database yang digunakan 3.0 telah dibuat dan dikumpulkan beberapa data asalnya. Lanjutkan ke halaman selanjutnya untuk menyelesaikan instalasi phpBB.',
	'STAGE_DATABASE'			=> 'Pengaturan database',
	'STAGE_FINAL'				=> 'Tahap akhir',
	'STAGE_INTRO'				=> 'Pengenalan',
	'STAGE_IN_PROGRESS'			=> 'Konversi sedang dalam progres',
	'STAGE_REQUIREMENTS'		=> 'Yang dibutuhkan',
	'STAGE_SETTINGS'			=> 'Pengaturan',
	'STARTING_CONVERT'			=> 'Memulai proses konversi',
	'STEP_PERCENT_COMPLETED'	=> 'Tahap <strong>%d</strong> dari <strong>%d</strong>',
	'SUB_INTRO'					=> 'Pengenalan',
	'SUB_LICENSE'				=> 'Lisensi',
	'SUB_SUPPORT'				=> 'Support',
	'SUCCESSFUL_CONNECT'		=> 'Koneksi berhasil',
	'SUPPORT_BODY'				=> 'Dukungan penuh akan diberikan untuk rilis sekarang yang stabil dari phpBB3, gratis. Ini termasuk :</p><ul><li>instalasi</li><li>konfigurasi</li><li>pertanyaan teknikal</li><li>permasalah yang berhubungan dengan bug-bug potensial pada perangkat lunak ini</li><li>memperbarui dari versi Release Candidate (RC) ke versi yang stabil</li><li>mengkonversikan dari phpBB 2.0.x ke phpBB3</li><li>mengkonversikan dari halaman diskusi yang lain ke phpBB3 (silahkan lihat <a href="http://www.phpbb.com/community/viewforum.php?f=65">Convertors Forum</a>)</li></ul><p>Kami menyarankan pengguna masih menjalankan versi beta dari phpBB3 untuk mengganti instalasi mereka dengan salinan yang fresh dari versi terbaru.</p><h2>MODs / Styles</h2><p>Untuk sesuatu yang berhubungan dengan MOD, silahkan post yang sesuai di <a href="http://www.phpbb.com/community/viewforum.php?f=81">Modifications Forum</a>.<br />Untuk sesuatu yang berhubungan dengan gaya, template dan imageset, silahkan post yang sesuai di <a href="http://www.phpbb.com/community/viewforum.php?f=80">Styles Forum</a>.<br /><br />Jika pertanyaan anda berhubungan dengan paket tertentu, silahkan post secara langsung pada topic untuk paket yang dimasksud.</p><h2>Obtaining Support</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB Welcome Package</a><br /><a href="http://www.phpbb.com/support/">Support Section</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Quick Start Guide</a><br /><br />Untuk meyakinkan anda tetap terbarukan dengan berita dan rilis terbaru, kenapa tidak <a href="http://www.phpbb.com/support/">berlangganan milis kami</a>?<br /><br />',
	'SYNC_FORUMS'				=> 'Memulai menyinkronisasi forum',
	'SYNC_POST_COUNT'			=> 'Menyinkronisasi post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Menyinkronisasi post_counts dari <var>masukan</var> %1$s ke %2$s.',
	'SYNC_TOPICS'				=> 'Memulai menyinkron topik',
	'SYNC_TOPIC_ID'				=> 'Menyinkron topik dari <var>topic_id</var> %1$s ke %2$s.',

	'TABLES_MISSING'			=> 'Tidak bisa menemukan table-table ini<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefiks untuk tabel dalam database',
	'TABLE_PREFIX_SAME'			=> 'Prefik tabel harus digunakan oleh perangkat lunak yang anda konversikan.<br />» Prefik tabel yang ditentukan adalah %s.',
	'TESTS_PASSED'				=> 'Percobaan dilalui',
	'TESTS_FAILED'				=> 'Percobaan gagal',

	'UNABLE_WRITE_LOCK'			=> 'Tidak dapat menulis file yang terkkunci.',
	'UNAVAILABLE'				=> 'Tidak tersedia',
	'UNWRITABLE'				=> 'Tidak dapat ditulis',
	'UPDATE_TOPICS_POSTED'		=> 'Menggenerasikan topik yang dipost',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Sebuah error terjadi pada saat menggenerasikan informasi topik yang dipost. Anda masih dapat mencoba tahap ini pada Papan Pengaturan Pengguna setelah proses konversi selesai.',
	'VERIFY_OPTIONS'			=> 'Memverifikasi pilihan-pilihan konversi',
	'VERSION'					=> 'Versi',

	'WELCOME_INSTALL'			=> 'Selamat Datang di Instalasi phpBB3',
	'WRITABLE'					=> 'Bisa ditulis',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Semua file sudah terbarukan dengan versi phpBB yang terbaru. Sekarang anda harus <a href="../ucp.php?mode=login">masuk ke halaman anda</a> dan periksa apakah semuanya berjalan lancar. Jangan lupa untuk menghapus, menamai atau memindahkan direktori install!',
	'ARCHIVE_FILE'				=> 'File sumber dalam arsip',

	'BACK'				=> 'Kembali',
	'BINARY_FILE'		=> 'File biner',
	'BOT'				=> 'Spider/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'Metode tersebut digunakan untuk meyakinkan bahwa nama pengguna tidak digunakan oleh berbagai pengguna yang telah diganti. Ada beberapa pengguna yang memiliki nama yang sama bila dibandingkan dengan metode yang baru. Anda harus menghapus atau menamai pengguna tersebut untuk meyakinkan setiap nama hanya digunakan oleh satu pengguna saja sebelum anda bisa memproses.',
	'CHECK_FILES'					=> 'Periksa file',
	'CHECK_FILES_AGAIN'				=> 'Periksa file lagi',
	'CHECK_FILES_EXPLAIN'			=> 'Dalam tahapa selanjutnya semua file akan diperiksa dengan file-file terbaru - ini bisa memakan waktu jika hal ini merupakan pemeriksaan yang pertama.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Menurut database anda, versi anda adalah yang terbarukan. Anda boleh melanjutkan dengan memeriksa file untuk meyakinkan bahwa data anda sudah terbarukan degan versi terbaru phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Lanjutkan ke proses pembaruan',
	'COLLECTED_INFORMATION'			=> 'Informasi file',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Daftar di bawah ini menunjukkan informasi tentang file-file yang memerlukan pembaruan. Silahkan baca informasi di depan semua blok status untuk melihat apa yang dimaksud dan yang anda inginkan agar pembaruan berhasil.',
	'COLLECTING_FILE_DIFFS'			=> 'Mengumpulkan perbedaan file',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Sekarang anda harus <a href="../ucp.php?mode=login">masuk ke halaman</a> dan periksa apakah semua berjalan lancar. Jangan lupa untuk menghapus, menamai atau memindahkan direktori install!',
	'CONTINUE_UPDATE_NOW'			=> 'Lanjutkan untuk memproses pembaruan sekarang',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Lanjutkan pembaruan sekarang',						// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Permulaan konflik - Kode file asli sebelum pembaruan',
	'CURRENT_VERSION'				=> 'Versi sekarang',

	'DATABASE_TYPE'						=> 'Tipe database',
	'DATABASE_UPDATE_INFO_OLD'			=> 'File pembaruan database dalam direktori install sudah usang. Mohon periksa bahwa anda mengupload versi file yang benar.',
	'DELETE_USER_REMOVE'				=> 'Hapus pengguna dan singkirkan post',
	'DELETE_USER_RETAIN'				=> 'Hapus pengguna tetapi tinggalkan postnya',
	'DESTINATION'						=> 'File tujuan',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'Blok kode yang digunakan pada pembaruan/file baru',
	'DIFF_SIDE_BY_SIDE'					=> 'Sisi demi sisi',
	'DIFF_UNIFIED'						=> 'Menyamakan perbedaan',
	'DO_NOT_UPDATE'						=> 'Jangan perbarui file ini',
	'DONE'								=> 'Selesai',
	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_AS'						=> 'Download sebagai',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Download file-file arsip yang dimodifikasi (disarankan)',
    'DOWNLOAD_CONFLICTS'				=> 'Download konflik untuk file ini',
    'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Cari &lt;&lt;&lt; untuk menyoroti konflik',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download file-file arsip yang dimodifikasi',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Setelah selesai di donwnload anda harus membuka file arsip. Anda akan menemukan file-file yang dimodifikasi yang harus anda upload ke direktori phpBB root directory anda. Silahkan upload file tersebut ke lokasi yang sesuai setelahnya. Setelah anda mengupload semua file, silahkan periksa lagi file dengan tombol lainnya di bawah ini.',

	'ERROR'			=> 'Error',
	'EDIT_USERNAME'	=> 'Ubah nama pengguna',

	'FILE_ALREADY_UP_TO_DATE'		=> 'File sudah yang terbarukan.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'File tidak diijinkan untuk dibedakan.',
	'FILE_USED'						=> 'Informasi yang digunakan dari',			// Single file
	'FILES_CONFLICT'				=> 'File-file konflik',
	'FILES_CONFLICT_EXPLAIN'		=> 'File berikut dimodifikasi dan bukan sebagai file asli dari versi yang lama. phpBB menentukan bahwa file-file ini menimbulkan konflik jika dicoba digabungkan. Silahkan diperiksa konflik tersebut dan cobalah menyelesaikan secara manual atau lanjutkan pembaruan dengan memilih metode penggabungan yang dikehendaki. Jika anda menyelesaikan konflik tersebut secara manual, silahkan periksa file-file tersebut kembali setelah anda memodifikasinya. Anda juga boleh memilih metode yang dikehendaki untuk menggabungkan setiap file. Yang pertama akan menghasilkan sebuah file dimana baris konflik dari file lama anda akan dihapus, sedangkan metode yang lain akan menghilangkan perubahan dari file yang baru.',
	'FILES_MODIFIED'				=> 'File-file yang dimodifikasi',
	'FILES_MODIFIED_EXPLAIN'		=> 'File-file berikut dimodifikasi yang tidak menunjukkan file-file asli anda dari versi yang lama. File yang diperbarui akan digabungkan antara modifikasi anda dan file yang baru.',
	'FILES_NEW'						=> 'File-file baru',
	'FILES_NEW_EXPLAIN'				=> 'File-file berikut tidak ada lagi pada instalasi anda. File-file ini akan ditambahkan ke pada instalasi anda.',
	'FILES_NEW_CONFLICT'			=> 'File-file konflik yang baru',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'File-file berikut ini baru pada versi terakhir anda, akan tetapi sudah ada nama file yang sama pada lokasi yang sama. File-file ini akan ditulis ulang menjadi file yang baru.',
	'FILES_NOT_MODIFIED'			=> 'Bukan file-file yang dimodifikasi',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'File-file berikut ini tidak dimodifikasi dan merupakan file phpBB yang asli dari versi yang ingin anda perbarui.',
	'FILES_UP_TO_DATE'				=> 'Sudah merupakan file-file yang terbarukan',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'File-file berikut ini sudah merupakan file-file yang terbarukan tidak memerlukan pembaruan.',
	'FTP_SETTINGS'					=> 'Pengaturan FTP',
	'FTP_UPDATE_METHOD'				=> 'FTP upload',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'File-file update yang ditemukan tidak cocok dengan versi yang anda instal. Versi yang anda instal adalah %1$s dan file pembaruannya untuk pembaruan phpBB %2$s ke %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'File-file pembaruan tidak lengkap.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Pembaruan database berhasil. Sekarang anda harus melanjutkan proses pembaruan.',

	'KEEP_OLD_NAME'		=> 'Simpan nama pengguna',

	'LATEST_VERSION'		=> 'Versi terbaru',
	'LINE'					=> 'Baris',
	'LINE_ADDED'			=> 'Ditambahkan',
	'LINE_MODIFIED'			=> 'Dimodifikasi',
	'LINE_REMOVED'			=> 'Disingkirkan',
	'LINE_UNMODIFIED'		=> 'Tidak dimodifikasi',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Untuk memperbarui instalasi anda harus masuk terlebih dahulu.',

	'MAPPING_FILE_STRUCTURE'	=> 'Untuk mempermudah, ini adalah lokasi-lokasi file anda yang memetakan instalsi phpBB anda.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Gabungkan modifikasi',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Jangan gabungkan - gunakan file baru',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Jangan gabungkan - gunakan file yang sudah di instal',
	'MERGE_MOD_FILE_OPTION'		=> 'Gabungkan modifikasi (Lepaskan phpBB yang baru pada blok konflik)',
	'MERGE_NEW_FILE_OPTION'		=> 'Gabungkan modifikasi (Lepaskan kode modifikasi pada blok konflik)',
	'MERGE_SELECT_ERROR'		=> 'Mode penggabungan file konflik tidak dipilih dengan benar.',
	'MERGING_FILES'				=> 'Menggabungkan perbedaan',
	'MERGING_FILES_EXPLAIN'		=> 'Mengumpulkan perubahan file terakhir sekarang.<br /><br />Silahkan tunggu sampai phpBB menyelesaikan semua operasi pada file yang diubah.',

	'NEW_FILE'						=> 'Akhir dari konflik',
	'NEW_USERNAME'					=> 'Nama pengguna yang baru',
	'NO_AUTH_UPDATE'				=> 'Tidak diijinkan untuk memperbarui',
	'NO_ERRORS'						=> 'Tidak ada error',
	'NO_UPDATE_FILES'				=> 'Tidak memperbarui file-file berikut ini',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'File-file berikut baru dan dimodifikasi, tetapi direktori yang biasa ditempatkan tidak  dapat ditemukan pada instalasi anda. Jika daftar ini mengandung file-file ke direktori yang lain selain direktori language/ atau styles/ maka anda harus memodifikasi struktur direktori anda dan pembaruan mungkin tidak lengkap.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Tidak ada direktori pembaruan yang ditemukan, silahkan periksa anda mengupload file-file yang berhubungan.<br /><br />Instalasi sepertinya <strong>bukan</strong> yang terbarukan. Pembaruan tersedia untuk versi phpBB %1$s anda, silahkan kunjungi <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> untuk memperoleh paket yang benar untuk memperbarui dari versi %2$s ke versi %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Versi anda sudah terbarukan. Tidak perlu untuk melakukan pembaruan. Jika anda ingin membuat sebuah pemeriksaan integritas pada file anda, silahkan upload file pembaruan yang benar.',
	'NO_UPDATE_INFO'				=> 'File informasi pembaruan tidak dapat ditemukan.',
	'NO_UPDATES_REQUIRED'			=> 'Tidak ada pembaruan yang diperlukan',
	'NO_VISIBLE_CHANGES'			=> 'Tidak ada perubahan yang terlihat',
	'NOTICE'						=> 'Pesan',
	'NUM_CONFLICTS'					=> 'Jumlah konflik',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Perbedaan %1$d dari %2$d file sudah diperiksa.<br />Silahkan tunggu sampai semua file diperiksa.',

	'OLD_UPDATE_FILES'		=> 'File-file pembaruan sudah usang. File pembaruan yang ditemukan adalah untuk pembaruan dari phpBB %1$s ke phpBB %2$s tetapi versi terbaru dari phpBB adalah %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Paket pembaruan sekarang ke versi',
	'PERFORM_DATABASE_UPDATE'			=> 'Lakukan pembaruan database',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Di bawah ini anda akan menentukan sebuah tombol menuju skrip pembaruan database. Pembaruan database dapat berlangsung lama, di mohon untuk tidak menghentikan jika kelihatan sepeti hang. Setelah pembaruan database selesai dilaksanakan, ikutilah instruksi untuk melanjutkan proses pembaruan.',
	'PREVIOUS_VERSION'					=> 'Versi sebelumnya',
	'PROGRESS'							=> 'Progres',

	'RESULT'					=> 'Hasil',
	'RUN_DATABASE_SCRIPT'		=> 'Perbarui database saya sekarang',

	'SELECT_DIFF_MODE'			=> 'Pilih mode pembedaan',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Pilih format arsip download',
	'SELECT_FTP_SETTINGS'		=> 'Pilih pengaturan FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Tampilkan perbedaan/konflik',
	'SHOW_DIFF_FINAL'			=> 'Tampilkan file hasil',
	'SHOW_DIFF_MODIFIED'		=> 'Tampilkan perbedaan yang digabungkan',
	'SHOW_DIFF_NEW'				=> 'Tampilkan isi file',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Tampilkan perbedaan-perbedaan',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Tampilkan perbedaan',
	'SOME_QUERIES_FAILED'		=> 'Beberapa query gagal, pernyataan dan error dilampirkan di bawah ini.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Ini bukanlah sesuatu yang harus dicemaskan, pembaruan akan dilanjutkan. Kegagalan ini harus diselesaikan dan anda perlu untuk mencari bantuan pada forum dukungan kamu. Lihat <a href="../docs/README.html">README</a> untuk keterangan tentang bagaimana mendapatkan saran.',
	'STAGE_FILE_CHECK'			=> 'Periksa file',
	'STAGE_UPDATE_DB'			=> 'Perbarui database',
	'STAGE_UPDATE_FILES'		=> 'Perbarui file-file',
	'STAGE_VERSION_CHECK'		=> 'Periksa versi',
	'STATUS_CONFLICT'			=> 'File yang dimodifikasi menghasilkan konflik',
	'STATUS_MODIFIED'			=> 'File dimodifikasi',
	'STATUS_NEW'				=> 'File baru',
	'STATUS_NEW_CONFLICT'		=> 'Mengkonflik file baru',
	'STATUS_NOT_MODIFIED'		=> 'Bukan file modifikasi',
	'STATUS_UP_TO_DATE'			=> 'Sudah file terbarukan',

	'TOGGLE_DISPLAY'			=> 'Tampilkan/Sembunyikan daftar file',
	'TRY_DOWNLOAD_METHOD'		=> 'Anda boleh mencoba untuk metode download file-file yang dimodifikasi.<br />Metode ini selalu berhasil dan juga path pembaruan yang disarankan.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Cobalah metode ini sekarang',

	'UPDATE_COMPLETED'				=> 'Pembaruan selesai',
	'UPDATE_DATABASE'				=> 'Perbarui database',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Pada tahap selanjutnya database akan diperbarui.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Memperbarui skema database',
	'UPDATE_FILES'					=> 'File-file pembaruan',
	'UPDATE_FILES_NOTICE'			=> 'Silahkan periksa anda sudah memperbarui file-file halaman anda juga, file ini hanya memperbarui database anda.',
	'UPDATE_INSTALLATION'			=> 'Perbarui instalasi phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Dengan pilihan ini, adalah memungkinkan untuk memperbarui instalasi phpBB anda ke versi yang terbaru.<br />Selama proses tersebut semua file anda akan diperiksa untuk integritasnya. Anda boleh meninjau semua perbedaan dan file sebelum memperbarui.<br /><br />File update tersebut bisa dilakukan dengan dua cara yang berbeda.</p><h2>Pembaruan Secara Manual</h2><p>Dengan pembaruan ini anda hanya mendownload sekumpulan pengaturan pribadi anda untuk file yang diganti untuk memastikan file modifikasi anda sudah selesai. Setelah anda mendownload paket ini, anda perlu mengupload secara manual masing-masing ke lokasi yang benar pada direktori root phpBB. Setelah selesai, anda bisa melaksanakan tahap pemeriksaan file lagi untuk melihat apakah anda sudah memindahkan file-file tersebut kelokasinya yang benar masing-masing.</p><h2>Pembaruan Otomatis dengan FTP</h2><p>Metode ini sama dengan metode yang pertama tetapi tanpa perlu mendownload file yang diganti dan menguploadnya ke tempat anda. Ini akan diselesaikan dengan sendirinya. Untuk menggunakan metode ini anda harus mengetahui informasi masuk ke FTP anda pada saat ditanyakan. Setelah selesai anda akan dialihkan ke pemeriksaan file kembali untuk memastikan semuanya sudah diperbarui dengan benar.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Pengumuman Rilis</h1>

		<p>Silahkan baca <a href="%1$s" title="%1$s"><strong>pengumuman rilis untuk versi terbaru</strong></a> sebelum anda melanjutkan proses pembaruan anda, hal tersebut mungkin mengandung informasi yang penting. Juga mengandung link download lengkap sesuai dengan log perubahannya.</p>

		<br />

		<h1>Bagaimana memperbarui instalasi anda dengan Automatic Update Package</h1>

		<p>Cara yang disarankan untuk memperbarui instalasi anda yang dijelaskan di sini hanya berguna untuk automatic update package. Anda juga bisa memperbarui instalasi anda dengan metode yang diberikan pada dokument INSTALL.html document. Tahap-tahap untuk memperbarui phpBB3 secara otomatis adalah:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Kunjungi <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com downloads page</a> dan download arsip "Automatic Update Package".<br /><br /></li>
			<li>Buka/unpack file arsip.<br /><br /></li>
			<li>Upload folder install yang yang sudah dibuka/unpack seluruhnya ke direktori root phpBB anda (dimana file config.php ditempatkan).<br /><br /></li>
		</ul>

		<p>Setelah diupload halaman anda akan menjadi offline untuk pengguna biasa yang disebabkan oleh adanya direktori install yang anda upload.<br /><br />
		<strong><a href="%2$s" title="%2$s">Mulailah proses pembaruan sekarang dengan mengarahkan browser anda ke folder install</a>.</strong><br />
		<br />
		Untuk selanjutnya anda akan dibimbing selama proses pembaruan. Anda akan segera diberitahu jika pembaruan tersebut sudah selesai.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Pembaruan yang tidak lengkap dideteksi</h1>

		<p>phpBB mendeteksi adanya pembaruan otomatis yang tidak lengkap. Silahkan periksa apakah anda sudah mengikuti semua langkah pada alat pembaruan otomatis. Berikut ini anda akan melihat tersebut lagi, atau langsung pada direktori install anda.</p>
	',
	'UPDATE_METHOD'					=> 'Metode pembaruan',
	'UPDATE_METHOD_EXPLAIN'			=> 'Anda dapat memilih metode yang anda senangi. Dengan menggunakan upload FTP akan menghadapkan anda dengan formulir isian yang harus anda lengkapi dengan memasukkan keterangan account anda. Dengan metode ini file-file secara otomatis akan dipindahkan ke lokasi yang baru dan membuat salinan dari file yang lama dengan menambahkan .bak ke nama file tersebut. Jika anda memilih untuk mendownload file yang dimodifikasi tersebut maka anda dapat membuka paket file itu dan menguploadnya ke lokasi yang benar nantinya.',
	'UPDATE_REQUIRES_FILE'			=> 'The updater requires that the following file is present: %s',
	'UPDATE_SUCCESS'				=> 'Pembaruan telah berhasil',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Berhasil memperbarui semua file. Langkah selanjutnya adalah memeriksa kembali semua file apakah file diperbarui dengan benar.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Memperbarui versi dan optimasi tabel',
	'UPDATING_DATA'					=> 'Memperbarui data',
	'UPDATING_TO_LATEST_STABLE'		=> 'Pembaruan database ke versi terbaru yang stabil',
	'UPDATED_VERSION'				=> 'Versi terbarukan',
	'UPGRADE_INSTRUCTIONS'         	=> 'Sebuah fitur baru rilis <strong>%1$s</strong> telah tersedia. Silahkan baca <a href="%2$s" title="%2$s"><strong>pengumuman rilis</strong></a> untuk mempelajari apa-apa saja yang ditawarkan, dan cara pembaruannya.',

	'UPLOAD_METHOD'					=> 'Metode upload',

	'UPDATE_DB_SUCCESS'				=> 'Pembaruan database telah berhasil.',
	'USER_ACTIVE'					=> 'Pengguna aktif',
	'USER_INACTIVE'					=> 'Pengguna nonaktif',

	'VERSION_CHECK'					=> 'Periksa versi',
	'VERSION_CHECK_EXPLAIN'			=> 'Periksa untuk melihat apakah versi phpBB yang sedang anda merupakan versi yang terbaru.',
	'VERSION_NOT_UP_TO_DATE'		=> 'Versi instalasi anda belum terbarukan. Silahkan melanjutkan proses update.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Versi instalasi anda belum terbarukan.<br />Di bawah ini akan anda temukan sebuah link mengenai pemberitahuan telah keluarnya versi yang baru beserta dengan instruksi tentang cara melakukan update.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Instalasi phpBB anda sudah terbarukan.',
	'VERSION_UP_TO_DATE'			=> 'Versi instalasi anda sudah terbarukan, tidak ada pembaruan yang tersedia untuk versi phpBB anda tersebut. Anda boleh lanjut melaksanakan pemeriksaan validasi file.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Versi instalasi anda sudah terbarukan, tidak ada pembaruan yang tersedia untuk versi phpBB anda tersebut. Anda tidak perlu memperbarui instalasi anda.',
	'VIEWING_FILE_CONTENTS'			=> 'Melihat isi file',
	'VIEWING_FILE_DIFF'				=> 'Memeriksa perbedaan file',

	'WRONG_INFO_FILE_FORMAT'	=> 'Keterangan format file salah',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Terima kasih, Manajemen',
	'CONFIG_SITE_DESC'				=> 'Teks singkat untuk menjelaskan forum anda',
	'CONFIG_SITENAME'				=> 'domainanda.com',

	'DEFAULT_INSTALL_POST'			=> 'Ini adalah post percontohan pada instalsi phpBB3 anda. Sepertinya semua berjalan lancar. Anda bisa menghapus post ini jika diingini dan melanjutkan pengaturan halaman anda. Selama proses instalasi, kategori dan forum pertama anda diberikan sekumpulan perijinan untuk pengguna yang sudah dikenal seperti administrators, bots, global moderator, tamu, pengguna terdaftar dan pengguna terdaftar COPPA. Jika anda memilih untuk menghapus kategori dan forum pertama anda, jangan lupa untuk memberikan perijinan untuk semua grup pengguna untuk semua kategori dan forum yang sudah dibuat. Disarankan agar mengganti nama kategori dan forum pertama anda dan menyalin perijinannya pada saat membuat kategori dan forum yang baru. Selamat bersenang-senang!',

	'EXT_GROUP_ARCHIVES'			=> 'Arsip',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokomen-dokumen',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'File Yang Dapat Didownloadable',
	'EXT_GROUP_FLASH_FILES'			=> 'File Flash',
	'EXT_GROUP_IMAGES'				=> 'Gambar-gambar',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Teks Biasa',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Kategori pertama anda',
	'FORUMS_TEST_FORUM_DESC'		=> 'Penjelasan tentang forum pertama anda.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Forum pertama anda',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Site Admin',
	'REPORT_WAREZ'					=> 'Post tersebut mengandung link ke perangkat lunak ilegal ataupun bajakan.',
	'REPORT_SPAM'					=> 'Post yand dilaporkan hanya mempunyai tujuan untuk mengiklankan sebuah website atau produk lain.',
	'REPORT_OFF_TOPIC'				=> 'Post yand dilaporkan diluar dari pembicaraan topik.',
	'REPORT_OTHER'					=> 'Post yand dilaporkan tidak cocok di kategori manapun, mohon gunakan isian untuk informasi lebih jelas.',

	'SMILIES_ARROW'					=> 'Panah',
	'SMILIES_CONFUSED'				=> 'Bingung',
	'SMILIES_COOL'					=> 'Keren',
	'SMILIES_CRYING'				=> 'Menangis atau Sangat Sedih',
	'SMILIES_EMARRASSED'			=> 'Bingung',
	'SMILIES_EVIL'					=> 'Jahat atau Sangat Marah',
	'SMILIES_EXCLAMATION'			=> 'Seruan',
	'SMILIES_GEEK'					=> 'Canggung',
	'SMILIES_IDEA'					=> 'Ide',
	'SMILIES_LAUGHING'				=> 'Tertawa',
	'SMILIES_MAD'					=> 'Marah',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Netral',
	'SMILIES_QUESTION'				=> 'Bertanya',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Sad',
	'SMILIES_SHOCKED'				=> 'Terkejut',
	'SMILIES_SMILE'					=> 'Senyum',
	'SMILIES_SURPRISED'				=> 'Kejutan',
	'SMILIES_TWISTED_EVIL'			=> 'Setan Belit',
	'SMILIES_UBER_GEEK'				=> 'Sangat Canggung',
	'SMILIES_VERY_HAPPY'			=> 'Sangat Senang',
	'SMILIES_WINK'					=> 'Berkedip',

	'TOPICS_TOPIC_TITLE'			=> 'Selamat datang di phpBB3',
));

?>