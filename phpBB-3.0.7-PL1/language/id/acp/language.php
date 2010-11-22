<?php
/**
*
* acp_language [Bahasa Indonesia]
*
* @package language
* @version $Id: language.php 2010 Sastra Manurung zourbuth@gmail.com
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
	'ACP_FILES'						=> 'File-file bahasa admin',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Di sini anda bisa menginstal/menyingkirkan file bahasa.',

	'EMAIL_FILES'			=> 'Template E-mail',

	'FILE_CONTENTS'				=> 'Isi file',
	'FILE_FROM_STORAGE'			=> 'File dari folder penyimpanan',

	'HELP_FILES'				=> 'File-file pertolongan',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Paket bahasa yang diinstall',
	'INVALID_LANGUAGE_PACK'		=> 'Paket bahasa yang dipilih sepertinya rusak. Silahkan Please periksa file bahasa tersebut dan upload kembali bila diperlukan.',
	'INVALID_UPLOAD_METHOD'		=> 'Cara upload yang dipilih salah, silahkan pilih cara yang lain.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Keterangan-keterangan bahasa telah berhasil diperbarui.',
	'LANGUAGE_ENTRIES'					=> 'Catatan bahasa',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Di sini anda dapat mengganti paket bahasa yang sudah ada atau yang sudah diterjemahkan.<br /><strong>Catatan:</strong> Sekali anda mengubah file bahasa, maka pengubahan tersebut akan disimpan dalam folder terpisah untuk download. Pengubahan tersebut tidak dpat dilihat oleh pengguna lain sebelum anda menimpa file asli ke workspace anda (dengan mengupload).',
	'LANGUAGE_FILES'					=> 'File-file bahasa',
	'LANGUAGE_KEY'						=> 'Tanda bahasa',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Paket bahasa ini telah diinstal.',
	'LANGUAGE_PACK_DELETED'				=> 'Paket bahasa <strong>%s</strong> telah berhasil disingkirkan. Semua pengguna yang memakai bahasa ini akan diubah menjadi bahasa default halaman.',
	'LANGUAGE_PACK_DETAILS'				=> 'Keterangan paket bahasa',
	'LANGUAGE_PACK_INSTALLED'			=> 'Paket bahasa <strong>%s</strong> telah berhasil diinstal.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nama lokal',
	'LANGUAGE_PACK_NAME'				=> 'Nama',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Paket bahasa yang dipilih tidak ada.',
	'LANGUAGE_PACK_USED_BY'				=> 'Digunakan oleh (termasuk robot)',
	'LANGUAGE_VARIABLE'					=> 'Variabel bahasa',
	'LANG_AUTHOR'						=> 'Pencipta paket bahasa',
	'LANG_ENGLISH_NAME'					=> 'Nama dalam bahasa Inggris',
	'LANG_ISO_CODE'						=> 'Kode ISO',
	'LANG_LOCAL_NAME'					=> 'Nama lokal',

	'MISSING_LANGUAGE_FILE'		=> 'File bahasa hilang: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Variable bahasa hilang',
	'MODS_FILES'				=> 'File-file bahasa MOD',

	'NO_FILE_SELECTED'				=> 'Anda belum menentukan file bahasa.',
	'NO_LANG_ID'					=> 'Anda belum menentukan paket bahasa.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Anda tidak dapat menyingkirkan pake bahasa default.<br />Jika anda ingin menyingkirkan paket bahasa ini, silahkan ubah bahasa default halaman terlebih dahulu.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Tidak ada paket bahasa yang diuninstal',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Singkirkan dari folder penyimpanan',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Pilih format download',
	'SUBMIT_AND_DOWNLOAD'		=> 'Ajukan dan download file',
	'SUBMIT_AND_UPLOAD'			=> 'Ajukan dan upload file',

	'THOSE_MISSING_LANG_FILES'			=> 'File bahasa berikut ini hilang dari %s folder bahasa',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Variabel bahasa berikut ini hilang dari <strong>%s</strong> paket bahasa',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Paket bahasa diuninstal',

	'UNABLE_TO_WRITE_FILE'		=> 'File tersebut tidak dapat ditulis ke %s.',
	'UPLOAD_COMPLETED'			=> 'Upload telah berhasil.',
	'UPLOAD_FAILED'				=> 'Upload telah gagal dengan alasan yang tidak diketahui. Anda perlu mengganti file tersebut secara manual.',
	'UPLOAD_METHOD'				=> 'Metode upload',
	'UPLOAD_SETTINGS'			=> 'Upload pengaturan',

	'WRONG_LANGUAGE_FILE'		=> 'File bahasa yang dipilih salah.',
));

?>