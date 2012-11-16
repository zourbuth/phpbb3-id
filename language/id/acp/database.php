<?php
/**
*
* acp_database [Bahasa Indonesia]
*
* @package language
* @version $Id: database.php 2010 Sastra Manurung zourbuth@gmail.com
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Di sini anda dapat menyalin semua data yang berhubungan dengan phpBB. Anda dapat menyimpan hasil arsip di folder <samp>store/</samp> atau dengan mendownloadnya langsung. Anda juga dapat mengkompresi file dengan beberapa format tergantung dari konfigurasi server anda.',
	'ACP_RESTORE_EXPLAIN'	=> 'Proses ini akan merestore semua tabel phpBB dari file yang tersimpan. Jika server anda mendukung layanan ini anda boleh menggunakan kompresi file teks gzip or bzip2 dan akan didekompresi secara otomatis. <strong>PERINGATAN</strong> Proses ini akan menulis ulang data yang sudah ada. Jangan berpindah dari halaman ini sampai selesai karena proses restore akan berlangsung lama. Semua backup akan disimpan di folder <samp>store/</samp> dan dianggap sebagai fungsi backup yang dihasilkan oleh phpBB. Proses backup yang dibuat dari fasilitas sistem belum tentu bisa berfungsi.',

	'BACKUP_DELETE'		=> 'File backup telah berhasil dihapus.',
	'BACKUP_INVALID'	=> 'File yang dipilih untuk membackup salah.',
	'BACKUP_OPTIONS'	=> 'Pilihan-pilihan backup',
	'BACKUP_SUCCESS'	=> 'File backup telah berhasil dibuat.',
	'BACKUP_TYPE'		=> 'Tipe salinan',

	'DATABASE'			=> 'Utilitas database',
	'DATA_ONLY'			=> 'Hanya data',
	'DELETE_BACKUP'		=> 'Hapus backup',
	'DELETE_SELECTED_BACKUP'	=> 'Apakah anda yakin ingin menghapus backup yang dipilih?',
	'DESELECT_ALL'		=> 'Jangan pilih semua',
	'DOWNLOAD_BACKUP'	=> 'Download backup',

	'FILE_TYPE'			=> 'Tipe file',
	'FILE_WRITE_FAIL'	=> 'Tidak bisa menulis file ke folder penyimpanan.',
	'FULL_BACKUP'		=> 'Seluruhnya',

	'RESTORE_FAILURE'		=> 'File backup mungkin rusak.',
	'RESTORE_OPTIONS'		=> 'Pilihan-pilihan restore',
	'RESTORE_SUCCESS'		=> 'Database telah berhasil dikembalikan.<br /><br />Halaman anda akan kembali ke keadaan ketika backup dibuat.',

	'SELECT_ALL'			=> 'Pilih semua',
	'SELECT_FILE'			=> 'Pilih file',
	'START_BACKUP'			=> 'Mulai backup',
	'START_RESTORE'			=> 'Mulai restore',
	'STORE_AND_DOWNLOAD'	=> 'Simpan dan download',
	'STORE_LOCAL'			=> 'Simpan file di lokal',
	'STRUCTURE_ONLY'		=> 'Hanya struktur',

	'TABLE_SELECT'		=> 'Tabel pilihan',
	'TABLE_SELECT_ERROR'=> 'Anda harus memilih satu tabel paling sedikitnya.',
));

?>