<?php
/**
*
* acp_moduls [Bahasa Indonesia]
*
* @package language
* @version $Id: modules.php 2010 Sastra Manurung zourbuth@gmail.com
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Di halaman ini anda dapat mengatur semua jenis modul. Mohon diingat bahwa Papan Pengaturan Administrator memiliki tiga tingkat struktur menu (Kategori -> Kategori -> Modul) dimana yang lain memiliki dua tingkat struktur menu (Kategori -> Modul) yang harus dijaga. Mohon agar berhati-hati karena anda dapat mengunci diri sendiri jika anda menonaktifkan ataupun menghapus modul-modul yang digunakan untuk manajemen.',
	'ADD_MODULE'					=> 'Tambah modul',
	'ADD_MODULE_CONFIRM'			=> 'Apakah anda yakin ingin menambahkan modul yang dipilih dengan mode yang digunakan?',
	'ADD_MODULE_TITLE'				=> 'Tambahkan modul',

	'CANNOT_REMOVE_MODULE'	=> 'Modul tidak dapat disingkirkan karena memiliki modul bawahan. Silahkan singkirkan atau pindahkan Please remove or move all children before performing this action.',
	'CATEGORY'				=> 'Kategori',
	'CHOOSE_MODE'			=> 'Pilih mode modul',
	'CHOOSE_MODE_EXPLAIN'	=> 'Pilih mode modul yang digunakan.',
	'CHOOSE_MODULE'			=> 'Pilih modul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Pilih file yang dipanggil oleh modul ini.',
	'CREATE_MODULE'			=> 'Buat modul baru',

	'DEACTIVATED_MODULE'	=> 'Penonaktifan modul',
	'DELETE_MODULE'			=> 'Hapus modul',
	'DELETE_MODULE_CONFIRM'	=> 'Apakah anda yakin ingin menyingkirkan modul ini?',

	'EDIT_MODULE'			=> 'Ubah modul',
	'EDIT_MODULE_EXPLAIN'	=> 'Di sini anda bisa memasukkan pengaturan modul yang spesifik.',

	'HIDDEN_MODULE'			=> 'Modul tersembunyi',

	'MODULE'					=> 'Modul',
	'MODULE_ADDED'				=> 'Modul telah berhsil ditambah.',
	'MODULE_DELETED'			=> 'Modul berhasil disingkirkan.',
	'MODULE_DISPLAYED'			=> 'Modul ditampilkan',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Jika anda tidak ingin untuk menampilkan modul ini, tapi masih ingin menggunkannya, buat ini menjadi tidak.',
	'MODULE_EDITED'				=> 'Modul berhasil diubah.',
	'MODULE_ENABLED'			=> 'Modul diaktifkan',
	'MODULE_LANGNAME'			=> 'Nama bahasa modul',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Masukkan nama modul yang ditampilkan. Gunakan bahasa jika nama menggunakan file bahasa.',
	'MODULE_TYPE'				=> 'Tipe modul',

	'NO_CATEGORY_TO_MODULE'	=> 'Tidak dapat membalikkan kategori ke modul. Silahkan singkirkan/pindahkan semua anakan sebelum melakukan tindakan ini.',	'NO_MODULE'				=> 'Tidak ada modul ditemukan.',
	'NO_MODULE'				=> 'Tidak ada ditemukan modul.',
	'NO_MODULE_ID'			=> 'Tidak ada id modul yang ditentukan.',
	'NO_MODULE_LANGNAME'	=> 'Tidak ada nama bahasa modul yang ditentukan.',
	'NO_PARENT'				=> 'Tidak ada induk',

	'PARENT'				=> 'Induk',
	'PARENT_NO_EXIST'		=> 'Tidak ada induk.',

	'SELECT_MODULE'			=> 'Pilih modul',
));

?>