<?php
/**
*
* acp_bots [Bahasa Indonesia]
*
* @package language
* @version $Id: bots.php 2010 Sastra Manurung zourbuth@gmail.com
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Atur bot',
	'BOTS_EXPLAIN'		=> '“Bot”, “spider” atau “crawler” adalah agen otomatis yang sering digunakan untuk mesin pencari untuk mengperbaharui database mereka. Mereka juga bisa bisa mengubah jumlah pengunjung , meningkatkan load dan kadang gagal untuk membuat indeks secara baik untuk halaman ini. Di sini anda dapat mengatur tipe spesial untuk mereka untuk menghindari permasalahan ini.',
	'BOT_ACTIVATE'		=> 'Aktifkan',
	'BOT_ACTIVE'		=> 'Bot aktif',
	'BOT_ADD'			=> 'Tambah bot',
	'BOT_ADDED'			=> 'Bot baru telah berhasil ditambahkan.',
	'BOT_AGENT'			=> 'Agen bot',
	'BOT_AGENT_EXPLAIN'	=> 'Nama bot yang cocok untuk agen browser, hanya setengah yang cocok juga diperbolehkan.',
	'BOT_DEACTIVATE'	=> 'Nonaktif',
	'BOT_DELETED'		=> 'Bot berhasil dihapus.',
	'BOT_EDIT'			=> 'Ubah bot',
	'BOT_EDIT_EXPLAIN'	=> 'Di sini anda dpat menambah atupun merubah sebuah bot yang sudah ada. Anda dapat menentukan nama agen dan/atau satu atau lebih alamat IP (atau dalam rentang alamat IP) untuk mencocokkan. Mohon berhati-hati pada saat menentukan nama agen atau alamat yang cocok. Anda dapat menentukan gaya dan bahasa yang akan dilihat bot tersebut ketika menggunakan halaman. Ini bisa mengurangi pamakain bandwith dengan menggunakan gaya yang sederhana untuk bot tersebut. Mohon diingat untuk mengatur perijinan yang sesuai untuk bot-bot yang spesial.',
	'BOT_LANG'			=> 'Bahasa bot',
	'BOT_LANG_EXPLAIN'	=> 'Bahasa yang ditampilkan untuk pada saat bot menggunakn halaman.',
	'BOT_LAST_VISIT'	=> 'Kunjungan terakhir',
	'BOT_IP'			=> 'Alamat IP bot',
	'BOT_IP_EXPLAIN'	=> 'Sebagian nomor IP yang cocok diijinkan, atau sebagian alamat dengan tanda koma.',
	'BOT_NAME'			=> 'Nama bot',
	'BOT_NAME_EXPLAIN'	=> 'Gunakan hanya untuk informasi anda sendiri.',
	'BOT_NAME_TAKEN'	=> 'Nama telah digunakan padap halaman anda dan tidak dapat digunakan untuk bot tersebut.',
	'BOT_NEVER'			=> 'Tidak pernah',
	'BOT_STYLE'			=> 'Gaya bot',
	'BOT_STYLE_EXPLAIN'	=> 'Gaya yang digunakan bot untuk melihat halaman.',
	'BOT_UPDATED'		=> 'Bot telah berhasil diperbarui.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Agen bot yang anda sediakan sama seperti bot yang sudah anda gunakan sebelumnya. Mohon diatur agen bot ini.',
	'ERR_BOT_NO_IP'				=> 'Alamat IP yang anda masukkan tidak benar dan nama host tidak dapat digunakan.',
	'ERR_BOT_NO_MATCHES'		=> 'Anda harus menyediakan palilng sedikitnya satu agen atau alamat IP untuk bot yang cocok.',

	'NO_BOT'		=> 'Tidak ada bot yang ditemukan dengan identitas tersebut.',
	'NO_BOT_GROUP'	=> 'Tidak ditemukan grup bot spesial.',
));

?>