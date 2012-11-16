<?php
/**
*
* group [Bahasa Indonesia]
*
* @package language
* @version $Id: groups.php 2010 Sastra Manurung zourbuth@gmail.com
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
	'ALREADY_DEFAULT_GROUP'		=> 'Grup yang anda pilih sudah menjadi grup default anda.',
	'ALREADY_IN_GROUP'			=> 'Anda sudah menjadi anggota dari grup yang dipilih.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Anda sudah meminta untuk bergabung dalam grup yang dipilih.',

	'CANNOT_JOIN_GROUP'			=> 'Anda tidak dapat bergabung dalam grup ini. Anda hanya dapat bergabung kedalam grup yang terbuka bebas.',
	'CANNOT_RESIGN_GROUP'		=> 'anda tidak dapat berhenti dari grup ini. Anda hanya dapat berhenti dari grup yang terbuka bebas.',
	'CHANGED_DEFAULT_GROUP'		=> 'Berhasil merubah default grup.',

	'GROUP_AVATAR'						=> 'Avatar Grup',
	'GROUP_CHANGE_DEFAULT'				=> 'Apakah anda yakin ingin mengubah keanggotaan default anda menjadi grup “%s”?',
	'GROUP_CLOSED'						=> 'Tertutup',
	'GROUP_DESC'						=> 'Keterangan grup',
	'GROUP_HIDDEN'						=> 'Tersembunyi',
	'GROUP_INFORMATION'					=> 'Informasi grup pengguna',
	'GROUP_IS_CLOSED'					=> 'Ini adalah grup yang tertutup, anggota yang baru hanya dapat bergabung dengan undangan dari pimpinan grup.',
	'GROUP_IS_FREE'						=> 'Ini adalah grup yang terbuka bebas, semua anggota yang baru akan disambut.',
	'GROUP_IS_HIDDEN'					=> 'Ini adalah grup yang tersembunyi, hanya anggota dari grup ini yang dapat melihat keanggotaannya.',
	'GROUP_IS_OPEN'						=> 'Ini adalah grup yang terbuka, anggota dapat bergabung.',
	'GROUP_IS_SPECIAL'					=> 'Ini adalah grup spesial, grup spesial dikelola oleh administrator.',
	'GROUP_JOIN'						=> 'Bergabung ke grup',
	'GROUP_JOIN_CONFIRM'				=> 'apakah anda yakin ingin bergabung ke grup yang dipilih?',
	'GROUP_JOIN_PENDING'				=> 'Minta untuk bergabung dengan grup',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Apakah anda yakin meminta untuk bergabung dengan grup yang dipilih?',
	'GROUP_JOINED'						=> 'Berhasil digabungkan dengan grup yang dipilih.',
	'GROUP_JOINED_PENDING'				=> 'Berhasil meminta keanggotaan grup. Mohon menunggu pimpinan grup untuk menyetujui keangotaan anda.',
	'GROUP_LIST'						=> 'Pengaturan pengguna',
	'GROUP_MEMBERS'						=> 'Anggota-angota grup',
	'GROUP_NAME'						=> 'Nama grup',
	'GROUP_OPEN'						=> 'Buka',
	'GROUP_RANK'						=> 'Peringkat Grup',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Berhenti dari keanggotaan grup',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Apakah anda yakin ingin menghentikan keanggotaan anda dari grup yang dipilih?',
	'GROUP_RESIGN_PENDING'				=> 'Berhenti dari keanggotaan grup yang tertunda',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Apakah anda yakin ingin menghentikan keanggotaan anda yang tertunda dari grup yang dipilih?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Anda telah berhasil disingkirkan dari grup yang dipilih.',
	'GROUP_RESIGNED_PENDING'			=> 'Keanggotaan anda yang tertunda telah berhasil disingkirkan dari grup yang dipilih.',
	'GROUP_TYPE'						=> 'Jenis grup',
	'GROUP_UNDISCLOSED'					=> 'Grup yang tersembunyi',
	'FORUM_UNDISCLOSED'					=> 'Memoderat forum yang tersembunyi',

	'LOGIN_EXPLAIN_GROUP'	=> 'Anda harus masuk untuk dapat melihat keterangan grup ini.',

	'NO_LEADERS'					=> 'Anda bukan pimpinan dari grup manapun.',
	'NOT_LEADER_OF_GROUP'			=> 'Operasi yang dilakukan tidak dapat diterapkan karena anda bukan pimpinan grup dari grup yang dipilih.',
	'NOT_MEMBER_OF_GROUP'			=> 'Operasi yang dilakukan tidak dapat diterapkan karena anda bukan anggota dari grup yang dipilih ataupun keanggotaan anda belum disetujui.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Anda tidak diperkenankan untuk berhenti dari grup default anda.',
	
	'PRIMARY_GROUP'		=> 'Grup primer',

	'REMOVE_SELECTED'		=> 'Singkirkan yang dipilih',

	'USER_GROUP_CHANGE'			=> 'Dari grup “%1$s” ke “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Turunkan pangkat pempinan',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Apakah anda yakin ingin menurunkan pangkat pempinan grup dari grup yang dipilih?',
	'USER_GROUP_DEMOTED'		=> 'Berhasil menurunkan pangkat pempinan anda.',
));

?>