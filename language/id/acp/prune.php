<?php
/**
*
* acp_prune [Bahasa Indonesia]
*
* @package language
* @version $Id: prune.php 2010 Sastra Manurung zourbuth@gmail.com
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Di sini anda dapat menghapus (atau menonaktifkan) pengguna dari halaman anda. Hal ini dapat dilaksanakan dengan beberapa cara yaitu; dengan jumlah post, saat aktif terakhir kali dsb. Setiap kriteria ini bisa dikombinasikan, sebagi contoh anda dapat mengurangi pengguna yang terkhir aktif sebelum 2002-01-01 dengan jumlah post yang lebih kecil dari 10. Sebagai alternatif anda bisa memasukkan daftar pengguna secara langsung ke dalam kotak teks, kriteria lain yang dimasukkan akan diabaikan. Mohon berhati-hati untuk menggunakan fasilitas ini! Jika pengguna dihapus maka tidak ada satupun cara untuk mengembalikannya.',

	'DEACTIVATE_DELETE'			=> 'Nonaktifkan atau hapus',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Pilihlah pengguna yang ingin dinonaktifkan atau dihapus seluruhnya, mohon dicatat bahwa ini tidak bisa diulangi!',
	'DELETE_USERS'				=> 'Hapus',
	'DELETE_USER_POSTS'			=> 'Hapus atau kurangi post pengguna',
	'DELETE_USER_POSTS_EXPLAIN' => 'Singkirkan post yang dibuat oleh pengguna yang dihapus, tidak ada efek apa-apa apabila pengguna ini dinonaktifkan.',

	'JOINED_EXPLAIN'			=> 'Masukkan tanggal dalam format <kbd>TTTT-BB-HH</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Masukkan tanggal dalam format <kbd>TTTT-BB-HH</kbd>.',

	'PRUNE_USERS_LIST'				=> 'Pengguna yang akan dikurangi',
	'PRUNE_USERS_LIST_DELETE'		=> 'Dengan ktiteria yang dipilih untuk pengurangan pengguna maka account akan disingkirkan.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Dengan kriteria yang dipilih untuk pengurangan pengguna, account berikut ini akan dinonaktifkan.',

	'SELECT_USERS_EXPLAIN'		=> 'Masukkan nama pengguna yang ditentukan di sini, nama tersebut akan digunakan dalam pilihan kriteria di bwah ini.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Pengguna yang dipilih telah berhasil dinonaktifkan.',
	'USER_DELETE_SUCCESS'		=> 'Pengguna yang dipilih telah berhasil dihapus.',
	'USER_PRUNE_FAILURE'		=> 'Tidak ada pengguna yang cocok dengan kriteria tersebut.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Tanggal yang dimasukkan salah, format yang diharapkan adalah <kbd>TTTT-BB-HH</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Ini akan menghapus semua topik yang belum dipost atau dilihat dalam jumlah hari yang anda pilih. Jika anda tidak memasukkan jumlah hari maka semua topik akan dihapus. Secara defaultnya, topik tidak akan disingkirkan apabila ada pemungutan suara yang sedang berjalan ataupun masih ada stiky dan pengumuman.',

	'FORUM_PRUNE'		=> 'Kurangi forum',

	'NO_PRUNE'			=> 'Tidak ada forum yang dikurangi.',

	'SELECTED_FORUM'	=> 'Forum terpilih',
	'SELECTED_FORUMS'	=> 'Forum-forum terpilih',

	'POSTS_PRUNED'					=> 'Post dikurangiPosts pruned',
	'PRUNE_ANNOUNCEMENTS'			=> 'Kurangi pengumuman',
	'PRUNE_FINISHED_POLLS'			=> 'Proses pengurangan menutup pemungutan suara',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Singkirkan topik dengan pemungutan suara yang memiliki batas waktu.',
	'PRUNE_FORUM_CONFIRM'			=> 'Apakah anda yakin ingin mrngurangi forum yang dipilih dengan pengaturan yang telah ditentukan? Tidak ada cara lain untuk mengembalikan post ataupun topik yang telah dikurangi untuk sekali penyingkirkan.',
	'PRUNE_NOT_POSTED'				=> 'Hari sejak post terakhir',
	'PRUNE_NOT_VIEWED'				=> 'Hari sejak dilihat terakhir kali',
	'PRUNE_OLD_POLLS'				=> 'Kurangi pemungutan suara yang sudah lama',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Singkirkan topik dengan pemungutan suara yang sudah lama.',
	'PRUNE_STICKY'					=> 'Kurangi sticky',
	'PRUNE_SUCCESS'					=> 'Pengurangan forum telah berhasil.',

	'TOPICS_PRUNED'		=> 'Topik dikurangi',
));

?>