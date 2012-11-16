<?php
/**
* acp_permissions_phpbb [Bahasa Indonesia]
*
* @package language
* @version $Id: permissions_phpbb.php 2010 Sastra Manurung zourbuth@gmail.com
* @copyright (c) 2010 Zourbuth Studio
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Tindakan',
		'content'		=> 'Konten',
		'forums'		=> 'Forum',
		'misc'			=> 'Lain-lain',
		'permissions'	=> 'Perijinan',
		'pm'			=> 'Pesan pribadi',
		'polls'			=> 'Pemungutan suara',
		'post'			=> 'Post',
		'post_actions'	=> 'Tindakan post',
		'posting'		=> 'Posting',
		'profile'		=> 'Profil',
		'settings'		=> 'Pengaturan',
		'topic_actions'	=> 'Tindakan topik',
		'user_group'	=> 'Pengguna &amp; Grup',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Perijinan pengguna',
		'a_'			=> 'Perijinan admin',
		'm_'			=> 'Perijinan moderator',
		'f_'			=> 'Perijinan forum',
		'global'		=> array(
			'm_'			=> 'Perijinan global moderator',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Dapat melihat profil, daftar anggota dan daftar online', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Dapat mengganti nama pengguna', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Dapat mengubah kata sandi', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Dapat mengubah alamat e-mail', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Dapat mengubah avatar', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Dapat mengubah grup default pengguna', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Dapat melampirkan file-file', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Dapat mendownload file-file', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Dapat menyimpan naskah', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Dapat menonaktifkan sensor kata', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Dapat menggunakan tanda tangan', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Dapat mengirim pesan pribadi', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Dapat mengirim pesan ke banyak pengguna', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Dapat mengirimkan pesan ke grup', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Dapat membaca pesan pribadi', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Dapat mengubah pesan pribadinya sendiri', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Dapat menyingkirkan pesan pribadinya dari foldernya sendiri', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Dapat mengalihkan pesan pribadi', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Dapat mengirim e-mail pesan pribadi', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Dapat mencetak pesan pribadi', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Dapat melampirkan file-file pada pesan pribadi', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Dapat mendownload file-file pada pesan pribadi', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Dapat mempost BBCode pada pesan pribadi', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Dapat mempost tanda senyuman pada pesan pribadi', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Dapat mempost gambar pada pesan pribadi', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Dapat mempost Flash pada pesan pribadi', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Dapat mengirim e-mail', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Dapat mengirim pesan singkat', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Dapat mengabaikan batas flood', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Dapat menyembunyikan status online', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Dapat melihat pengguna tersembunyi yang online', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Dapat mencari halaman', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Dapat melihat forum', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Dapat membaca forum', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Dapat memulai topik baru', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Dapat membalas topik', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Can use topic/post icons', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Dapat mempost pengumuman', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Dapat mempost sticky', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Dapat membuat pemungutan suara', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Dapat memberikan suara pada pemungutan suara', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Dapat mengubah suara yang telah diberikan', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Dapat melampirkan file-file', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Dapat mendownload file-file', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Dapat menggunakan tanda tangan', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Dapat mempost BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Dapat mempost tanda senyuman', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Dapat mempost gambar', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Dapat mempost Flash', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Dapat mengubah postnya sendiri', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Dapat menghapus postnya sendiri', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Dapat mengunci topiknya sendiri', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Dapat menggeser topik', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Dapat melaporkan post', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Dapat berlangganan forum', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Dapat mencetak post', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Dapat menge-mail topik', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Dapat mencari forum', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Dapat mengabaikan batas flood', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Kenaikan penghitung post<br /><em>Mohon dicatat bahwa pengaturan ini hanya akan bekerja pada post baru.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Dapat mempost tanpa persetujuan', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Dapat mengubah post', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Dapat menghapus post', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Dapat menyetujui bos', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Dapat menutup dan menghapus laporan', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Dapat mengubah pengarang post', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Dapat memindahkan topik', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Dapat mengunci topik', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Dapat memisahkan topik', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Dapat menggabungkan topik', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Dapat melihat keterangan post', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Dapat memberikan peringatan<br /><em>Pengaturan ini hanya diberikan secara global. Bukan berdasarkan atas forum.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Dapat mengatur larangan<br /><em>Pengaturan ini hanya diberikan secara global. Bukan berdasarkan atas forum.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Dapat mengubah pengaturan halaman/memeriksa pembaruan', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Dapat mengubah server/pengaturan komunikasi', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Dapat mengubah pengaturan Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Dapat melihat pengaturan php', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Dapat mengatur forum', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Dapat menambahkan forum baru', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Dapat menghapus forum', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Dapat mengurangi forum', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Dapat mengubah topik/ikon post dan tanda senyuman', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Dapat mengubah sensor kata', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Dapat menentukan tag BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Dapat mengubah pengaturan yang berhubungan dengan lampiran', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Dapat mengatur pengguna<br /><em>Termasuk melihat agen browser pengguna pada daftar pengguna yang online.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Dapat menghapus/mengurangi pengguna', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Dapat mengatur grup', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Dapat menambahkan grup baru', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Dapat menghapus grup', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Dapat mengatur ranking', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Dapat mengatur profil tambahan', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Dapat mengatur nama pengguna yang tidak diijinkan', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Dapat mengatur larangan', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Dapat melihat mask perijinan', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Dapat mengubah perijinan untuk grup individu', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Dapat mengubah perijinan untuk pengguna individu', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Dapat mengubah kelas perijinan forum', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Dapat mengubah kelas perijinan moderator', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Dapat mengubah kelas perijinan admin', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Dapat mengubah kelas perijinan pengguna', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Dapat mengatur peranan', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Dapat menggunakan perijinan yang lain', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Dapat mengatur gaya', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Dapat melihat log', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Dapat membersihkan log', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Dapat mengatur module', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Dapat mengatur paket bahasa', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Dapat mengirim e-mail massa', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Dapat mengatur bots', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Dapat mengatur laporan/alasan penolakan', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Dapat membackup/mengembalikan database', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Dapat mengatur backend pencarian dan pengaturan', 'cat' => 'misc'),
));

?>