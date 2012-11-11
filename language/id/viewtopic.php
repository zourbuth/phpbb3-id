<?php
/**
*
* viewtopic [Bahasa Indonesia]
*
* @package language
* @version $Id: viewtopic.php 2010 Sastra Manurung zourbuth@gmail.com
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
	'ATTACHMENT'						=> 'Lampiran',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Fitur lampiran telah di-disable.',

	'BOOKMARK_ADDED'		=> 'Topik telah berhasil ditandai.',
	'BOOKMARK_ERR'			=> 'Topik gagal ditandai. Mohon dicoba lagi.',
	'BOOKMARK_REMOVED'		=> 'Penandaan halaman topik telah berhasil dihilangkan.',
	'BOOKMARK_TOPIC'		=> 'Tandai halaman topik',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Singkirkan penanda topik',
	'BUMPED_BY'				=> 'Diambil terakhir kali oleh %1$s on %2$s.',
	'BUMP_TOPIC'			=> 'Ambil topik',

	'CODE'					=> 'Kode',
	'COLLAPSE_QR'			=> 'Sembunyikan Balas Cepat',

	'DELETE_TOPIC'			=> 'Hapus topik',
	'DOWNLOAD_NOTICE'		=> 'Anda tidak memiliki ijin yang dibutuhkan untuk melihat file yang dilampirkan ke post ini.',

	'EDITED_TIMES_TOTAL'	=> 'Diubah terakhir kali oleh %1$s on %2$s, total pengubahan %3$d kali.',
	'EDITED_TIME_TOTAL'		=> 'Diubah terakhir kali oleh %1$s on %2$s, total pengubahan %3$d kali.',
	'EMAIL_TOPIC'			=> 'E-mail teman',
	'ERROR_NO_ATTACHMENT'	=> 'Lampiran yang dipilih sudah tidak ada lagi.',

	'FILE_NOT_FOUND_404'	=> 'File <strong>%s</strong> tidak ada.',
	'FORK_TOPIC'			=> 'Salin topik',
	'FULL_EDITOR'			=> 'Editor Lengkap',

	'LINKAGE_FORBIDDEN'		=> 'Anda tidak diijinkan untuk melihat, mendownload ataupun memberi link dari/ke situs ini.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Anda telah diberitahukan mengenai topik ini, silahkan login untuk melihat.',
	'LOGIN_VIEWTOPIC'		=> 'Halaman ini membutuhkan anda untuk terdaftar dan logged-in guna melihat topik ini.',

	'MAKE_ANNOUNCE'				=> 'Ubah menjadi “Pengumuman”',
	'MAKE_GLOBAL'				=> 'Ubah menjadi “Global”',
	'MAKE_NORMAL'				=> 'Ubah menjadi “Topik Standar”',
	'MAKE_STICKY'				=> 'Ubah menjadi “Sticky”',
	'MAX_OPTIONS_SELECT'		=> 'Anda boleh memilih sampai <strong>%d</strong> pilihan',
	'MAX_OPTION_SELECT'			=> 'Anda boleh memilih <strong>1</strong> pilihan',
	'MISSING_INLINE_ATTACHMENT'	=> 'Lampiran <strong>%s</strong> sudah tidak tersedia',
	'MOVE_TOPIC'				=> 'Pindahkan topik',

	'NO_ATTACHMENT_SELECTED'=> 'Anda belum memilih lampiran untuk didownload atau dilihat.',
	'NO_NEWER_TOPICS'		=> 'Tidak ada topik yang baru di forum ini.',
	'NO_OLDER_TOPICS'		=> 'Tidak ada topik yang lama di forum ini.',
	'NO_UNREAD_POSTS'		=> 'Tidak ada post yang belum dibaca untuk topik ini.',
	'NO_VOTE_OPTION'		=> 'Anda harus menentukan pilihan pada saat pemungutan suara.',
	'NO_VOTES'				=> 'Tidak ada suara',

	'POLL_ENDED_AT'			=> 'Pemberian suara diakhiri pada %s',
	'POLL_RUN_TILL'			=> 'Pemberian suara berlangsung sampai %s',
	'POLL_VOTED_OPTION'		=> 'Anda memberikan suara pada pilihan ini',
	'PRINT_TOPIC'			=> 'Cetak topik',

	'QUICK_MOD'				=> 'Alat mod cepat',
	'QUICKREPLY'			=> 'Balas Cepat',
	'QUOTE'					=> 'Kutipan',

	'REPLY_TO_TOPIC'		=> 'Balas ke topik',
	'RETURN_POST'			=> '%sKembali ke post%s',

	'SHOW_QR'				=> 'Balas Cepat',
	'SUBMIT_VOTE'			=> 'Ajukan suara',

	'TOTAL_VOTES'			=> 'Total suara',

	'UNLOCK_TOPIC'			=> 'Buka topik',

	'VIEW_INFO'				=> 'Rincian post',
	'VIEW_NEXT_TOPIC'		=> 'Topik selanjutnya',
	'VIEW_PREVIOUS_TOPIC'	=> 'Topik sebelumnya',
	'VIEW_RESULTS'			=> 'Tampilkan hasil',
	'VIEW_TOPIC_POST'		=> '1 post',
	'VIEW_TOPIC_POSTS'		=> '%d post',
	'VIEW_UNREAD_POST'		=> 'Post pertama yang belum dibaca',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Suara anda telah dimasukkan.',
	'VOTE_CONVERTED'		=> 'Pengubahan suara tidak didukung oleh pemilihan suara yang diubah ke bentuk lain.',

));

?>