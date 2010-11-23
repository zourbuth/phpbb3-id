<?php
/**
*
* acp_users [Bahasa Indonesia]
*
* @package language
* @version $Id: users.php 2010 Sastra Manurung zourbuth@gmail.com
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
	'ADMIN_SIG_PREVIEW'		=> 'Tampilan tanda tangan',
	'AT_LEAST_ONE_FOUNDER'	=> 'Anda tidak bisa mengubah pendiri ini menjadi pengguna biasa. Paling sedikitnya ada satu pendiri yang dibuat di sini. Jika anda ingin mengubah status pendiri, silahkan promosikan pengguna yang lain terlebih dahulu.',

	'BAN_ALREADY_ENTERED'	=> 'Larangan telah berhasil dibuat sebelumnya. Daftar larangan tidak akan diperbarui.',
	'BAN_SUCCESSFUL'		=> 'Larangan berhasil dimasukkan.',
	
	'CANNOT_BAN_ANONYMOUS'         	=> 'Anda tidak diijinkan melarang akun anonim. Perijinan untuk pengguna anonim bisa diatur di tab Perijinan.',
	'CANNOT_BAN_FOUNDER'			=> 'Anda tidak diijinkan untuk melarang account pendiri.',
	'CANNOT_BAN_YOURSELF'			=> 'Anda tidak diijinkan untuk melarang diri anda sendiri.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Anda tidak diijinkan untuk menonaktifkan accout bot. Silahkan nonaktifkan bot tersebut dari halaman bot.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Anda tidak diijinkan untuk menonaktifkan account pengguna.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Anda tidak diijinkan untuk menonaktifkan account anda sendiri.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Anda tidak diijinkan untuk memaksakan pengaktifan kembali untuk account bot. Silahkan aktifkan kembali bot tersebut dari halaman bot.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Anda tidak diijinkan untuk memaksakan pengaktifan kembali untuk account pendiri.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Anda tidak diijinkan untuk memaksakan pengaktifan kembali untuk account anda.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Anda tidak dapat menyingkirkan account tamu.',
	'CANNOT_REMOVE_YOURSELF'		=> 'anda tidak dapat menyingkirkan account anda sendiri.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'anda tidak dapat mempromosikan pengguna yang diabaikan menjadi pendiri.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Anda harus mengaktifkan pengguna sebelum mempromosikan mereka menjadi pendiri, hanya pengguna yang aktif yang bisa dipromosikan.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Anda harus mengisi ini jika anda ingin mengubah alamat e-mail pengguna.',

	'DELETE_POSTS'			=> 'Hapus post',
	'DELETE_USER'			=> 'Hapus pengguna',
	'DELETE_USER_EXPLAIN'	=> 'Mohon dicatat bahwa penghapusan user adalah mutlak, dan tidak dapat dikembalikan lagi.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Telah berhasil diaktifan kembali secara paksa.',
	'FOUNDER'						=> 'Pendiri',
	'FOUNDER_EXPLAIN'				=> 'Pendiri memiliki semua perijinan administrasi dan tidak bisa dilarang, dihapus ataupun diubah oleh anggota yang bukan pendiri.',

	'GROUP_APPROVE'					=> 'Setujui anggota',
	'GROUP_DEFAULT'					=> 'Buat grup default untuk pengguna',
	'GROUP_DELETE'					=> 'Singkirkan pengguna dari grup',
	'GROUP_DEMOTE'					=> 'Turunkan pangkat pimpinan',
	'GROUP_PROMOTE'					=> 'Promosikan menjadi pemimpin grup',

	'IP_WHOIS_FOR'			=> 'Alamat IP whois untuk %s',

	'LAST_ACTIVE'			=> 'Aktif terakhir pada',

	'MOVE_POSTS_EXPLAIN'	=> 'Silahkan pilih forum untuk memindahkan semua post yang telah dibuat pengguna ini.',

	'NO_SPECIAL_RANK'		=> 'Jangan gunakan ranking spesial',
	'NO_WARNINGS'			=> 'Tidak ada peringatan.',
	'NOT_MANAGE_FOUNDER'	=> 'anda mencoba untuk mengatur pengguna dengan status pendiri. Hanya pendiri yang bisa mengatur pendiri yang lainnya.',

	'QUICK_TOOLS'			=> 'Alat cepat',

	'REGISTERED'			=> 'Terdaftar',
	'REGISTERED_IP'			=> 'Terdaftar dari alamat IP',
	'RETAIN_POSTS'			=> 'Pertahankan post',

	'SELECT_FORM'			=> 'Pilih halaman',
	'SELECT_USER'			=> 'Pilih pengguna',

	'USER_ADMIN'					=> 'Pengaturan pengguna',
	'USER_ADMIN_ACTIVATE'			=> 'Aktifasi account',
	'USER_ADMIN_ACTIVATED'			=> 'Pengguna telah berhasil diaktifasi.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar telah berhasil disingkirkan dari account pengguna.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Larang e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Alamat e-mail dilarang melalui manajemen pengguna',
	'USER_ADMIN_BAN_IP'				=> 'Larang alamat IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Alamat IP dilarang melalui manajemen pengguna',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Nama pengguna dilarang melalui manajemen pengguna',
	'USER_ADMIN_BAN_USER'			=> 'Larang nama pengguna',
	'USER_ADMIN_DEACTIVATE'			=> 'Nonaktifkan account',
	'USER_ADMIN_DEACTIVED'			=> 'Pengguna telah berhasil dinonaktifkan.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Hapus semua lampiran',
	'USER_ADMIN_DEL_AVATAR'			=> 'Hapus avatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Hapus kotak keluar pesan pribadi',
	'USER_ADMIN_DEL_POSTS'			=> 'Hapus semua post',
	'USER_ADMIN_DEL_SIG'			=> 'Hapus tanda tangan',
	'USER_ADMIN_EXPLAIN'			=> 'Di halaman ini anda dapat mengubah informasi pengguna dengan menggunakan pilihan tertentu.',
	'USER_ADMIN_FORCE'				=> 'Paksa pengaktifan ulang',
	'USER_ADMIN_LEAVE_NR'			=> 'Singkirkan dari Baru Terdaftar',
	'USER_ADMIN_MOVE_POSTS'			=> 'Singkirkan semua post',
	'USER_ADMIN_SIG_REMOVED'		=> 'Tanda tangan dari account pengguna telah berhasil disingkirkan.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Semua lampiran yang dibuat pengguna telah berhasil disingkirkan.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Avatar yang sekarang tidak bisa ditampilkan karena avatar tersebut tidak diijinkan.',
	'USER_AVATAR_UPDATED'			=> 'Keterangan avatar pengguna telah berhasil diperbarui.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Avatar yang sekarang tidak bisa ditampilkan karena tipe avatar tersebut tidak diijinkan.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Isian custom profil',
	'USER_DELETED'					=> 'Pengguna berhasil dihapus.',
	'USER_GROUP_ADD'				=> 'Tambahkan pengguna ke group',
	'USER_GROUP_NORMAL'				=> 'Pengguna yang ditentukan adalah anggota dari',
	'USER_GROUP_PENDING'			=> 'Grup pengguna sedang ditunda',
	'USER_GROUP_SPECIAL'			=> 'Pengguna adalah anggota dari',
	'USER_LIFTED_NR'				=> 'Berhasil menyingkirkan status pengguna yang baru terdaftar.',
	'USER_NO_ATTACHMENTS'			=> 'Tidak ada file lampiran yang ditampilkan.',
	'USER_OUTBOX_EMPTIED'			=> 'Berhasil mengosongkan kotak keluar pesan pribadi pengguna.',
	'USER_OUTBOX_EMPTY'				=> 'Kotak masuk pesan pribadi pengguna sudah kosong.',
	'USER_OVERVIEW_UPDATED'			=> 'Keterangan pengguna berhasil diperbarui.',
	'USER_POSTS_DELETED'			=> 'Semua post yang dibuat pengguna ini telah berhasil dihapus.',
	'USER_POSTS_MOVED'				=> 'Post-post pengguna telah berhasil dipindahkan ke forum target.',
	'USER_PREFS_UPDATED'			=> 'Pilihan pengguna diperbarui.',
	'USER_PROFILE'					=> 'Profil pengguna',
	'USER_PROFILE_UPDATED'			=> 'Profil pengguna diperbarui.',
	'USER_RANK'						=> 'Ranking pengguna',
	'USER_RANK_UPDATED'				=> 'Ranking pengguna diperbarui.',
	'USER_SIG_UPDATED'				=> 'Tanda tangan pengguna berhasil diperbarui.',
	'USER_WARNING_LOG_DELETED'		=> 'Tidak ada informasi yang tersedia. Kemungkinan entri log sudah dihapus.',
	'USER_TOOLS'					=> 'Alat dasar',
));

?>