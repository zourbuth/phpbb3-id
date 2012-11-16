<?php
/**
*
* acp_ban [Bahasa Indonesia]
*
* @package language
* @version $Id: ban.php 2010 Sastra Manurung zourbuth@gmail.com
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 jam',
	'30_MINS'		=> '30 menit',
	'6_HOURS'		=> '6 jam',

	'ACP_BAN_EXPLAIN'	=> 'Di sini anda dapat mengatur larangan untuk pengguna berdasarkan nama, alamat IP atau e-mail. Hal ini dibuat untuk mencegah pengguna masuk ke halaman manapun. Anda dapat memberikan alasan yang singkat (maksimum 3000 karakter) atas larangan jika anda ingin dan akan ditampilkan di log admin. Lamanya waktu larangan juga dapat ditentukan. Jika anda ingin mengakhiri larangan untuk jangka waktu yang telah ditentukan, pilih <span style="text-decoration: underline;">Sampai -&gt;</span> untuk panjang larangan dan masukkan tanggal dengan format <kbd>TTTT-BB-HH, contoh: 1999-12-31</kbd>.',

	'BAN_EXCLUDE'			=> 'Keluarkan dari larangan',
	'BAN_LENGTH'			=> 'Panjang larangan',
	'BAN_REASON'			=> 'Alasan larangan',
	'BAN_GIVE_REASON'		=> 'Alasan yang akan ditampilkan untuk larangan',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Daftar larangan telah barhasil diperbarui.',
	'BANNED_UNTIL_DATE'		=> 'sampai %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (sampai %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Larang satu atau lebih alamat e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Gunakan ini untuk menyingkirkan alamat e-mail yang dimasukkan dari larangan sekarang.',
	'EMAIL_BAN_EXPLAIN'			=> 'Untuk memilih lebih dari satu alamat e-mail, masukkan pada setiap baris baru. Untuk mencocokkan sebagian alamat, gunakan * sebagai wildcard, contoh: <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, dsb.',
	'EMAIL_NO_BANNED'			=> 'Tidak ada alamat e-mail yang dilarang',
	'EMAIL_UNBAN'				=> 'Jangan larang atau jangan singkirkan e-mail',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Anda dapat mengijinkan beberapa alamat e-mail dengan sekali perintah dengan menggunakan kombinasi mouse dan keyboard untuk komputer dan browser anda. Penyingkiran alamat e-mail ditekankan.',

	'IP_BAN'					=> 'Larang satu atau lebih alamat IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Gunakan ini untuk menyingkirkan alamat IP yang dimasukkan dari semua larangan.',
	'IP_BAN_EXPLAIN'			=> 'Gunakan baris baru untuk memasukkan beberapa alamat IP ataupun nama host. Gunakan juga tanda sambung (-) dengan memisahkan yang awal dan akhir untuk memasukkan rentang alamat IP), untuk memakai wildcard gunakan tanda “*”.',
	'IP_HOSTNAME'				=> 'Alamat IP atau nama host',
	'IP_NO_BANNED'				=> 'Tidak ada alamat IP yang dilarang',
	'IP_UNBAN'					=> 'Ijinkan alamat IP',
	'IP_UNBAN_EXPLAIN'			=> 'Anda dapat mengijinkan beberapa alamat IP untuk sekali perintah dengan menggunakan kombinasi mouse dan keyboard pada komputer dan browser anda. Penyingkiran alamat e-mail ditekankan.',

	'LENGTH_BAN_INVALID'		=> 'Tanggal sudah diformat menjadi <kbd>TTTT-BB-HH</kbd>.',

	'PERMANENT'		=> 'Tetap',
	
	'UNTIL'						=> 'Sampai',
	'USER_BAN'					=> 'Larang satu atau lebih nama pengguna',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Gunakan ini untuk mengeluarkan pengguna yang dimasukkan dari semua larangan yang sekarang.',
	'USER_BAN_EXPLAIN'			=> 'Anda dapat melarang beberapa pengguna dengan sekali perintah dengan cara memasukkan nama di setiap baris baru. Gunakan fasilitas <span style="text-decoration: underline;">Cari anggota</span> untuk melihat dan menambah satu atau lebih pengguna secara otomatis.',
	'USER_NO_BANNED'			=> 'Tidak ada nama pengguna yang dilarang',
	'USER_UNBAN'				=> 'Ijinkan nama pengguna',
	'USER_UNBAN_EXPLAIN'		=> 'Anda dapat mengijinkan beberapa pengguna dengan sekali perintah dengan menggunakan kombinasi mouse dan keyboard untuk komputer dan browser anda. Penyingkiran alamat e-mail ditekankan.',
	

));

?>