<?php
/**
*
* captcha_qa [Bahasa Indonesia]
*
* @package language
* @version $Id: captcha_qa.php 2010 Sastra Manurung zourbuth@gmail.com
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
	'CAPTCHA_QA'				=> 'Q&amp;A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Pertanyaan ini dimaksudkan untuk identifikasi dan pencegahan submisi otomatis.',
	'CONFIRM_QUESTION_WRONG'	=> 'Anda memberikan jawaban yang salah atas pertanyaan konfirmasi.',

	'QUESTION_ANSWERS'			=> 'Jawaban',
	'ANSWERS_EXPLAIN'			=> 'Silahkan masukkan jawaban valid atas pertanyaan, satu setiap baris.',
	'CONFIRM_QUESTION'			=> 'Pertanyaan',

	'ANSWER'					=> 'Jawabn',
	'EDIT_QUESTION'				=> 'Ubah Pertanyaan',
	'QUESTIONS'					=> 'Pertanyaan',
	'QUESTIONS_EXPLAIN'			=> 'Selama registrasi, pengguna akan ditanyakan salah satu dari pertanyaan yang diberikan disini. Untuk menggunakan plugin ini, setidaknya ada satu satu pertanyaan yang harus diset pada bahasa defaultnya. Pertanyaan ini harus semudah mungkin untuk dijawab audien, tetapi diluar dari kemampuan sebuah bot yang mampu menjalankan pencari Google™. Dengan menggunakan banyak dan perubahan secara terus-menerus akan memberikan hasil yang lebih baik. Aktifkan pengaturan yang tepat jika pertanyaan anda mengandalkan pada tanda baca atau kapitalisasi.',
	'QUESTION_DELETED'			=> 'Pertanyaan dihapus',
	'QUESTION_LANG'				=> 'Bahasa',
	'QUESTION_LANG_EXPLAIN'		=> 'Bahasa dari pertanyaan dan jawabannya yang ditulis.',
	'QUESTION_STRICT'			=> 'Periksa dengan seksama',
	'QUESTION_STRICT_EXPLAIN'	=> 'Jika tidak aktif, kapitalisasi dan spasi juga dipaksakan.',

	'QUESTION_TEXT'				=> 'Pertanyaan',
	'QUESTION_TEXT_EXPLAIN'		=> 'Pertanyaan yang akan ditanyakan pada saat registrasi.',

	'QA_ERROR_MSG'				=> 'Mohon diisi semua isian dan masukkan paling sedikit satu jawaban.',
	'QA_LAST_QUESTION'			=> 'Anda tidak dapat menghapus semua pertanyaan pada saat plugin aktif.',

));

?>