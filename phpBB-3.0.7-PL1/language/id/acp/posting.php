<?php
/**
*
* acp_posting [Bahasa Indonesia]
*
* @package language
* @version $Id: posting.php 2010 Sastra Manurung zourbuth@gmail.com
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode adalah implementasi dari HTML yang menawarkan kontrol untuk atau bagaimana sesuatu ditampilkan. Dari halaman ini anda dapat menambahkan, menyingkirkan dan mengubah BBCode tambahan.',
	'ADD_BBCODE'				=> 'Tambahkan sebuah BBCode yang baru',

	'BBCODE_DANGER'				=> 'BBCode yang anda coba tambahkan sepertinya menggunakan sebuah token {TEXT} di dalam sebuah atribut HTML. Hal ini memungkinkan masalah keamanan XSS. Coba gunakan yang lebih terbatas lagi seperti {SIMPLETEXT} atau {INTTEXT}. Silahkan proses jika anda mengerti resiko yang akan dihadapi jika {TEXT} harus digunakan.',
	'BBCODE_DANGER_PROCEED'		=> 'Proses', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBCode berhasil ditambahkan.',
	'BBCODE_EDITED'				=> 'BBCode berhasil diubah.',
	'BBCODE_NOT_EXIST'			=> 'BBCode yang anda pilih tidak ada.',
	'BBCODE_HELPLINE'			=> 'Baris bantuan',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Field ini berisi teks mouse over dari BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Teks garis bantu',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Garis bantu yang anda masukkan terlalu panjang.',

	'BBCODE_INVALID_TAG_NAME'	=> 'Nama tag BBCode yang anda masukkan sudah ada.',
	'BBCODE_INVALID'			=> 'BBCode anda dibangun dengan bentuk yang salah.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'BBCode custom anda harus mengandung tag pembuka dan penutup.',
	'BBCODE_TAG'				=> 'Tag',
	'BBCODE_TAG_TOO_LONG'		=> 'Nama tag yang anda pilih terlalu panjang.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Defenisi tag yang anda masukkan terlalu panjang, silahkan kurangi defenisi tag anda.',
	'BBCODE_USAGE'				=> 'Penggunaan BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Di sini anda dapat menentukan bagaimana cara menggunakan BBCode. Gantikan semua input varible dengan tanda yang berhubungan (%slihat di bawah ini%s).',

	'EXAMPLE'						=> 'Contoh:',
	'EXAMPLES'						=> 'Contoh:',

	'HTML_REPLACEMENT'				=> 'Penggantian HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Di sini anda menentukan penggantian HTML defaultnya. Jangan lupa untuk meletakkan tanda yang anda gunakan diatas!',

	'TOKEN'					=> 'Tanda',
	'TOKENS'				=> 'Tanda-tanda',
	'TOKENS_EXPLAIN'		=> 'Tanda adalah placeholder untuk masukan pengguna. Masukan tersebut akan divalidasi jika cocok dengan defenisi yang berhubungan. Jika dibutuhkan, anda dapat menomorinya dengan menambahkan angka sebagai karakter terakhir di dalam tanda kurung, contoh {TEXT1}, {TEXT2}.<br /><br />Dalam penggantian HTML, anda juga dapat menggunakan string bahasa apapun yang ada pada direktori bahasa anda/ seperti ini: {L_<em>&lt;STRINGNAME&gt;</em>} dimana <em>&lt;STRINGNAME&gt;</em> adalah nama yang diterjemahkan yang ingin anda tambahkan. Sebagai contoh, {L_WROTE} akan ditampilkan sebagai &quot;wrote&quot; ataupun terjemahannya sesuai dengan tempat pengguna.<br /><br /><strong>Mohon dicatat bahwa hanya tanda yang diberikan di bawah ini yang bisa digunakan untuk custom BBCode.</strong>',
	'TOKEN_DEFINITION'		=> 'Defenisi tanda',
	'TOO_MANY_BBCODES'		=> 'Anda tidak bisa lagi membuat BBCode yang lain. Silahkan singkirkan satu atau lebih BBCode dan coba lagi.',

	'tokens'	=>	array(
		'TEXT'			=> 'Semua teks, termasuk karakter asing, nomor, dsb… Sebaiknya anda jangan menggunakan tanda ini di tag HTML, lebih baik menggunakan IDENTIFIER atau SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Karakter baru abjad latin (A-Z), nomor, spasi, koma, titik, kurang, tambah, tanda sambung dan garis bawah',
		'INTTEXT'		=> 'Karakter abjad Unicode, nomor, spasi, koma, titik, minus, plus, tanda penghubung, garis bawah and spasi/whitespace.',
		'IDENTIFIER'	=> 'Karakter baru abjad latin (A-Z), nomor, tanda sambung dan garis bawah',
		'NUMBER'		=> 'Semua nomor',
		'EMAIL'			=> 'Sebuah alamat e-mail yang benar',
		'URL'			=> 'Sebuah URL yang benar menggunakan semua protokol (http, ftp, dsb… tidak dapat digunakan untuk javascript exploits). Jika tidak diisi, &quot;http://&quot; merupakan awalan.',
		'LOCAL_URL'		=> 'Sebuah URL lokal. URL tersebut harus The URL harus relatif terhadap halaman topik dan tidak dapat mengandung nama server ataupun protokol.',
		'COLOR'			=> 'Sebuah warna HTML, juga dapat dalam bentuk numerik <samp>#FF1234</samp> atau <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS colour keyword</a> seperti <samp>fuchsia</samp> atau <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Dari halaman ini anda dapat, menyingkirkan dan mengubah ikon yang mungkin bisa ditambahkan pengguna ke topik atau post mereka. Pada dasarnya, ikon ini selanjutnya ditampilkan ke judul topik di daftar forum, atau subjek dari post di daftar topik. Anda juga dapat menginstal dan membuat paket ikon yang baru.',
	'ACP_SMILIES_EXPLAIN'	=> 'Tanda senyuman atau tanda emosi pada dasarnya kecil, kadang dalam bentuk gambar animasi yang digunakan untuk menyampaikan emosi ataupun perasaan. Dari halam ini anda dapat menambahkan, menyingkirkan dan mengubah ikon emosi pengguna tersebut pada post dan pesan pribadi. Anda juga dapat menginstal dan membuat sebuah paket tanda senyuman.',
	'ADD_SMILIES'			=> 'Tambahkan beberapa tanda senyuman',
	'ADD_SMILEY_CODE'		=> 'Tambahkan tambahan kode senyuman',
	'ADD_ICONS'				=> 'Tambahkan beberap ikon',
	'AFTER_ICONS'			=> 'Setelah %s',
	'AFTER_SMILIES'			=> 'Setelah %s',

	'CODE'						=> 'Kode',
	'CURRENT_ICONS'				=> 'Ikon sekarang',
	'CURRENT_ICONS_EXPLAIN'		=> 'Pilih tindakan apa yang ingin dilakukan terhadap ikon yang telah terinstal.',
	'CURRENT_SMILIES'			=> 'Tanda senyuman sekarang',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Pilih tindakan apa yang ingin dilakukan terhadap tanda senyuman yang telah terinstal.',

	'DISPLAY_ON_POSTING'		=> 'Tampilkan di halaman posting',
	'DISPLAY_POSTING'			=> 'Pada halaman posting',
	'DISPLAY_POSTING_NO'		=> 'Tidak pada halaman posting',



	'EDIT_ICONS'				=> 'Ubah ikon',
	'EDIT_SMILIES'				=> 'Ubah tanda senyuman',
	'EMOTION'					=> 'Emosi',
	'EXPORT_ICONS'				=> 'Ekspor dan download icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sDengan mengklik link ini, konfigurasi untuk ikon anda yang terinstal akan dikemas menjadi <samp>icons.pak</samp> yang bisa digunakan untuk membuat sebuah file <samp>.zip</samp> atau <samp>.tgz</samp> yang mengandung semua ikon anda ditambah file konfigurasi <samp>icons.pak</samp> ini%s.',
	'EXPORT_SMILIES'			=> 'Ekspor dan download icons.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sDengan mengklik link ini, konfigurasi untuk tanda senyuman anda yang terinstal akan dikemas menjadi <samp>smilies.pak</samp> yang bisa digunakan untuk membuat sebuah file <samp>.zip</samp> atatu <samp>.tgz</samp> yang mengandung semua ikon anda ditambah file konfigurasi <samp>smilies.pak</samp> ini%s.',

	'FIRST'			=> 'Pertama',

	'ICONS_ADD'				=> 'Tambahkan ikon baru',
	'ICONS_NONE_ADDED'		=> 'Tidak ada ikon yang ditambahkan.',
	'ICONS_ONE_ADDED'		=> 'Ikon tersebut telah berhasil ditambahkan.',
	'ICONS_ADDED'			=> 'Ikon tersebut telah berhasil ditambahkan.',
	'ICONS_CONFIG'			=> 'Konfigurasi ikon',
	'ICONS_DELETED'			=> 'Ikon tersebut telah berhasil disingkirkan.',
	'ICONS_EDIT'			=> 'Ubah ikon',
	'ICONS_ONE_EDITED'		=> 'Ikon tersebut telah berhasil diubah.',
	'ICONS_NONE_EDITED'		=> 'Tidak ada ikon yang diperbarui.',
	'ICONS_EDITED'			=> 'Ikon tersebut telah berhasil diperbarui.',
	'ICONS_HEIGHT'			=> 'Tinggi ikon',
	'ICONS_IMAGE'			=> 'Gambar ikon',
	'ICONS_IMPORTED'		=> 'Paket ikon telah berhasil diinstal.',
	'ICONS_IMPORT_SUCCESS'	=> 'Paket ikon telah berhasil diimport.',
	'ICONS_LOCATION'		=> 'Lokasi ikon',
	'ICONS_NOT_DISPLAYED'	=> 'Ikon-ikon berikut tidak ditampilkan pada halaman posting',
	'ICONS_ORDER'			=> 'Susunan ikon',
	'ICONS_URL'				=> 'File gambar ikon',
	'ICONS_WIDTH'			=> 'Lebar ikon',
	'IMPORT_ICONS'			=> 'Instal kemasan ikon',
	'IMPORT_SMILIES'		=> 'Instal kemasan tanda senyuman',

	'KEEP_ALL'			=> 'Simpan semua',

	'MASS_ADD_SMILIES'	=> 'Tambahkan beberapa tanda senyuman',

	'NO_ICONS_ADD'		=> 'Tidak ada ikon yang tersedia untuk ditambahkan.',
	'NO_ICONS_EDIT'		=> 'Tidak ada ikon yang tersedia untuk dimodifikasikan.',
	'NO_ICONS_EXPORT'	=> 'Anda tidak memiliki ikon untuk membuat sebuah paket.',
	'NO_ICONS_PAK'		=> 'Tidak ada paket ikon ditemukan.',
	'NO_SMILIES_ADD'	=> 'Tidak ada tanda senyuman yang tersedia untuk ditambahkan.',
	'NO_SMILIES_EDIT'	=> 'Tidak ada tanda senyuman yang tersedia untuk diubah.',
	'NO_SMILIES_EXPORT'	=> 'Anda tidak memiliki tanda senyuman untuk membuat paket.',
	'NO_SMILIES_PAK'	=> 'Tidak ada paket tanda senyuman ditemukan.',

	'PAK_FILE_NOT_READABLE'		=> 'Tidak dapat membaca file <samp>.pak</samp>.',

	'REPLACE_MATCHES'	=> 'Gantikan yang sama',

	'SELECT_PACKAGE'			=> 'Pilih sebuah paket file',
	'SMILIES_ADD'				=> 'Tambahkan sebuah tanda senyuman yang baru',
	'SMILIES_NONE_ADDED'		=> 'Tidak ada tanda senyuman yang ditambahkan.',
	'SMILIES_ONE_ADDED'			=> 'Tanda senyuman telah berhasil ditambahkan.',
	'SMILIES_ADDED'				=> 'Tanda senyuman telah berhasil ditambahkan.',
	'SMILIES_CODE'				=> 'Kode tanda senyuman',
	'SMILIES_CONFIG'			=> 'Konfigurasi tanda senyuman',
	'SMILIES_DELETED'			=> 'Tanda senyuman telah berhasil disingkirkan.',
	'SMILIES_EDIT'				=> 'Ubah tanda senyuman',
	'SMILIE_NO_CODE'			=> 'Tanda senyuman “%s”  dibaikan, karena tidak ada kode yang dimasukkan.',
	'SMILIE_NO_EMOTION'			=> 'Tanda senyuman “%s” dibaikan, karena tidak ada tanda emosi yang dimasukkan.',
	'SMILIES_NONE_EDITED'		=> 'Tidak ada tanda senyuman yang diperbarui.',
	'SMILIES_ONE_EDITED'		=> 'Tanda senyuman telah berhasil diperbarui.',
	'SMILIES_EDITED'			=> 'Tanda senyuman telah berhasil diperbarui.',
	'SMILIES_EMOTION'			=> 'Tanda emosi',
	'SMILIES_HEIGHT'			=> 'Tinggi tanda senyuman',
	'SMILIES_IMAGE'				=> 'Gambar tanda senyuman',
	'SMILIES_IMPORTED'			=> 'Paket tanda senyuman telah berhasil diinstal.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Paket tanda bahasa telah berhasil diimport.',
	'SMILIES_LOCATION'			=> 'Lokasi tanda senyuman',
	'SMILIES_NOT_DISPLAYED'		=> 'Tanda senyuman berikut ini tidak akan ditampilkan pada halaman posting',
	'SMILIES_ORDER'				=> 'Susunan tanda senyuman',
	'SMILIES_URL'				=> 'File gambar tanda senyuman',
	'SMILIES_WIDTH'				=> 'Lebar tanda senyuman',

	'TOO_MANY_SMILIES'			=> 'batas jumlah %d tanda senyuman tercapai.',

	'WRONG_PAK_TYPE'	=> 'Paket yang ditentukan tidak mengandung data yang sesuai.',
));

// Word censors
$lang = array_merge($lang, array(
    'ACP_WORDS_EXPLAIN'      => 'Dari papan pengaturan ini anda dapat menambahkan, mengubah, dan menyingkirkan kata-kata yang secara otomatis akan disensor pada forum anda. People are still allowed to register with usernames containing these words. Wildcard (*) bisa diterima pada baris kata, contohnya: *coba* akan sama dengan kata percobaan, coba* akan sama dengan kata cobaan, *coba akan sama dengan kata dicoba.',
	'ADD_WORD'				=> 'Tambahkan kata baru',

	'EDIT_WORD'		=> 'Ubah sensor kata',
	'ENTER_WORD'	=> 'Anda harus memasukkan sebuah kata dan penggantinya.',

	'NO_WORD'	=> 'Tidak ada kata yang dipilih untuk diubah.',

	'REPLACEMENT'	=> 'Penggantian',

	'UPDATE_WORD'	=> 'Pebaharui sensor kata',

	'WORD'				=> 'Kata',
	'WORD_ADDED'		=> 'Sensor kata tersebut telah berhasil ditambahkan.',
	'WORD_REMOVED'		=> 'Sensor kata tersebut telah berhasil disingkirkan.',
	'WORD_UPDATED'		=> 'Sensor kata tersebut telah berhasil diperbarui.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Di sini anda dapat menambah, mengubah, melihat dan menghapus ranking. Anda juga dapat membuat ranking spesial yang dapat diterapkan kepada pengguna melalui fasilitas pengaturan manajemen pengguna.',
	'ADD_RANK'				=> 'Tambahkan ranking baru',

	'MUST_SELECT_RANK'		=> 'Anda harus memilih sebuah ranking.',

	'NO_ASSIGNED_RANK'		=> 'Tidak ada ranking spesian yang diterapkan.',
	'NO_RANK_TITLE'			=> 'Anda belum menentukan sebuah nama untuk ranking tersebut.',
	'NO_UPDATE_RANKS'		=> 'Ranking telah berhasil dihapus. Akan tetapi account pengguna yang memakai ranking ini tidak akan diperbarui. Anda perlu mereset secara manual ranking tersebut untuk account ini.',

	'RANK_ADDED'			=> 'Ranking berhasil ditambahkan.',
	'RANK_IMAGE'			=> 'Gambar ranking',
	'RANK_IMAGE_EXPLAIN'	=> 'Gunakan ini untuk menentukan sebuah gambar kecil yang diasosiasikan dengan ranking tersebut. Lokasinya relatif pada direktori induk phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(Masih Digunakan)',
	'RANK_MINIMUM'			=> 'Post minimum',
	'RANK_REMOVED'			=> 'Ranking tersebut berhasil ditambahkan.',
	'RANK_SPECIAL'			=> 'Jadikan sebagai ranking spesial',
	'RANK_TITLE'			=> 'Nama ranking',
	'RANK_UPDATED'			=> 'Ranking telah berhasil diperbarui.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Di sini anda dapat mengatur nama pengguna yang yang tidak akan diijinkan untuk digunakan. Nama pengguna yang tidak diijinkan boleh mengandung karakter wildcard *. Mohon dicatat bahwa anda tidak bisa menentukan nama pengguna yang sudah didaftarkan, anda harus menghapusnya terlebih dahulu kemudian mengijinkan nama tersebut.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Anda bisa tidak mengijinkan nama pengguna yang memakai karakter wildcard * untuk mencocokkan beberapa karakter.',
	'ADD_DISALLOW_TITLE'	=> 'Tambahkan nama pengguna yang tidak diijinkan',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Anda bisa menyingkirkan nama pengguna yang tidak diijinkan dengan memilih nama pengguna tersebut dari daftar dan mengklik tombol ajukan.',
	'DELETE_DISALLOW_TITLE'		=> 'Singkirkan semua nama pengguna yang tidak diijinkan',
	'DISALLOWED_ALREADY'		=> 'Nama pengguna tersebut tidak dapat dilarang karena sudah ada. Sudah ada didaftar atupun dalam daftar sensor kata, atau nama tersebut mirip dengan nama pengguna.',
	'DISALLOWED_DELETED'		=> 'Nama pengguna yang tidak dibolehkan tersebut telah berhasil disingkirkan.',
	'DISALLOW_SUCCESSFUL'		=> 'Nama pengguna yang tidak dibolehkan tersebut telah berhasil ditambahkan.',

	'NO_DISALLOWED'				=> 'Tidak ada nama pengguna yang dilarang',
	'NO_USERNAME_SPECIFIED'		=> 'Anda belum memilih ataupun memasukkan nama pengguna.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Di sini anda dapat mengatur alasan yang digunakan pada laporan dan pesan penolakan pada saat menolak post. Ada satu alasan default (ditandai dengan a *) yang tidak bisa anda singkirkan, alasan ini biasanya digunakan untuk pesan khusus jika tidak ada satu pun pesan yang cocok.',
	'ADD_NEW_REASON'		=> 'Tambahkan pesan baru',
	'AVAILABLE_TITLES'		=> 'Judul alasan yang tersedia',

	'IS_NOT_TRANSLATED'			=> 'Alasan <strong>belum</strong> dilokalkan.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Alasan <strong>belum</strong> dilokalkan. Jika anda tidak dapat memberikan bentuk pelokalan, tentukan kunci yang benar dari file bahasa di bagian laporan alasan.',
	'IS_TRANSLATED'				=> 'Alasan sudah dilokalkan.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Alasan sudah dilokalkan. Jika judul yang anda masukkan di sini ditentukan dalam file bahasa di bagian pelaporan alasan, bentuk yang dilokalkan dari keterangan dan judul yang akan digunkan.',

	'NO_REASON'					=> 'Alasan tidak dapat ditemukan.',
	'NO_REASON_INFO'			=> 'Anda harus menentukan judul dan keterangan untuk alasan ini.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Anda tidak dapat menyingkirkan alasan defaultnya “Lainnya”.',

	'REASON_ADD'				=> 'Tambahkan laporan/alasan penolakan',
	'REASON_ADDED'				=> 'Laporan/alasan penolakan berhasil ditambahkan.',
	'REASON_ALREADY_EXIST'		=> 'Sebuah alasan untuk judul ini sudah ada, silahkan masukkan judul yang lain untuk alasan ini.',
	'REASON_DESCRIPTION'		=> 'Keterangan alasan',
	'REASON_DESC_TRANSLATED'	=> 'Keterangan alasan yang ditampilkan',
	'REASON_EDIT'				=> 'Ubah laporan/alasan penyangkalan',
	'REASON_EDIT_EXPLAIN'		=> 'Di sini anda dapat menambahkan ataupun mengubah alasan. Jika alasan yang yang diterjemahlan ke versi lokal digunakan sebagai ganti keterangan yang digantikan di sini.',
	'REASON_REMOVED'			=> 'Laporan/alasan penolakan berhasil disingkirkan.',
	'REASON_TITLE'				=> 'Judul alasan',
	'REASON_TITLE_TRANSLATED'	=> 'Judul alasan yang ditampilkan',
	'REASON_UPDATED'			=> 'Laporan/alasan penolakan berhasil diperbarui.',

	'USED_IN_REPORTS'		=> 'Digunakan dilaporan',
));

?>