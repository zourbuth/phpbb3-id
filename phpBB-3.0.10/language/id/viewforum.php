<?php
/**
*
* viewforum [Bahasa Indonesia]
*
* @package language
* @version $Id: viewforum.php 2010 Sastra Manurung zourbuth@gmail.com
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
	'ACTIVE_TOPICS'			=> 'Topik yang aktif',
	'ANNOUNCEMENTS'			=> 'Pengumuman',

	'FORUM_PERMISSIONS'		=> 'Perijinan Forum',

	'ICON_ANNOUNCEMENT'		=> 'Pengumuman',
	'ICON_STICKY'			=> 'Sticky',

	'LOGIN_NOTIFY_FORUM'	=> 'Anda telah diberitahukan mengenai forum ini, silahan login untuk melihat.',

	'MARK_TOPICS_READ'		=> 'Tandai topik sudah dibaca',

	'NEW_POSTS_HOT'         => 'Post baru [ Populer ]',   // Not used anymore
	'NEW_POSTS_LOCKED'      => 'Post baru [ Dikunci ]',   // Not used anymore
	'NO_NEW_POSTS_HOT'      => 'Tidak ada post baru [ Populer ]',   // Not used anymore
	'NO_NEW_POSTS_LOCKED'   => 'Tidak ada post baru [ Dikunci ]',   // Not used anymore
	'NO_READ_ACCESS'      	=> 'Anda tidak memiliki perijinan yang dibutuhkan untuk membaca topik di dalam forum ini.',
	'NO_UNREAD_POSTS_HOT'      => 'Tidak ada pesan tak terbaca [ Populer ]',
	'NO_UNREAD_POSTS_LOCKED'   => 'Tidak ada pesan tak terbaca [ Dikunci ]',

	'POST_FORUM_LOCKED'     => 'Forum dikunci',

	'TOPICS_MARKED'         => 'Topik untuk forum ini telah ditandai dibaca.',

	'UNREAD_POSTS_HOT'      => 'Post tak terbaca [ Populer ]',
	'UNREAD_POSTS_LOCKED'   => 'Post tak terbaca [ Dikunci ]',

	'VIEW_FORUM'			=> 'Lihat forum',
	'VIEW_FORUM_TOPIC'		=> '1 topik',
	'VIEW_FORUM_TOPICS'		=> '%d topik',
));

?>