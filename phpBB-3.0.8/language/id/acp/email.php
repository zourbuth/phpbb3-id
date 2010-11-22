<?php
/**
*
* acp_email [Bahasa Indonesia]
*
* @package language
* @version $Id: email.php 2010 Sastra Manurung zourbuth@gmail.com
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Di sini anda dapat mengirimkan pesan e-mail ke semua pengguna dan pengguna dari grup spesifik <strong>setelah pilihan untuk menerima e-mail massa telah diaktifkan</strong>. Untuk mencapai ini sebuah e-mail akan dikirm ke e-mail administratif yang disediakan, dengan blind carbon copy (bcc) yang dikirimkan ke semua penerima. Pengaturan defaultnya hanya mengikutsertakan 50 penerima e-mail, gunakan lebih untuk mengirim e-mail lebih banyak. Jika anda mengirimkan e-mail ke grup yang besar, mohon bersabar sebentar setelah mengajukan pengiriman e-mail tersebut dan jangan berpindah ke halaman lain. Adalah normal jikaa pengiriman e-mail memakan waktu yang cukup lama, dan anada akan diberitahukan apabila skrip ini sudah selesai.',
	'ALL_USERS'						=> 'Semua pengguna',

	'COMPOSE'				=> 'Buat e-mail',

	'EMAIL_SEND_ERROR'		=> 'Ada beberapa error pada saat pengiriman e-mail. Mohon periksa %sLog error%s untuk keterangan dari pesan yang error.',
	'EMAIL_SENT'			=> 'Pesan ini telah terkirim.',
	'EMAIL_SENT_QUEUE'		=> 'Pesan ini masih menunggu antrian pengiriman.',

	'LOG_SESSION'			=> 'Sesi log pesan ke log kritikal',

	'SEND_IMMEDIATELY'		=> 'Kirim secepatnya',
	'SEND_TO_GROUP'			=> 'Kirim ke grup',
	'SEND_TO_USERS'			=> 'Kirim ke pengguna',
	'SEND_TO_USERS_EXPLAIN'	=> 'Dengan memasukkan nama maka akan mengesampingkan semua grup yang dipilih di atase. Masukkan nama pengguna pada setiap baris baru.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Tinggi',
	'MAIL_LOW_PRIORITY'		=> 'Rendah',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioritas pesan',
	'MASS_MESSAGE'			=> 'Pesan anda',
	'MASS_MESSAGE_EXPLAIN'	=> 'Mohon dicatat bahwa anda hanya bisa memasukkan teks biasa dan yang lainnya akan dihapus.',
	
	'NO_EMAIL_MESSAGE'		=> 'Anda harus memasukkan pesan.',
	'NO_EMAIL_SUBJECT'		=> 'Anda harus menentukan subjek dari pesan.',
));

?>