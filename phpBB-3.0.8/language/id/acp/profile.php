<?php
/**
*
* acp_profile [Bahasa Indonesia]
*
* @package language
* @version $Id: profile.php 2010 Sastra Manurung zourbuth@gmail.com
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Berhasil menambahkan isian custom profil.',
	'ALPHA_ONLY'			=> 'Hanya alpanumerik',
	'ALPHA_SPACERS'			=> 'Spasi dan alpanumerik',
	'ALWAYS_TODAY'			=> 'Selalu tanggal sekarang',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Masukkan pilihan anda sekarang',
	'BOOL_TYPE_EXPLAIN'		=> 'Tentukan tipenya, juga checkbox atau radio button. Checkbox hanya akan ditampilkan jika dicek untuk pengguna yang diberikan. Untuk hal tersebut, pilihan bahasa <strong>kedua</strong> akan digunakan. Radio button akan ditampilkan terlepas dari nilainya.',

	'CHANGED_PROFILE_FIELD'		=> 'Isian profil berhasil diubah.',
	'CHARS_ANY'					=> 'Semua karakter',
	'CHECKBOX'					=> 'Checkbox',
	'COLUMNS'					=> 'Kolom',
	'CP_LANG_DEFAULT_VALUE'		=> 'Nilai default',
	'CP_LANG_EXPLAIN'			=> 'Keterangan isian',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Penjelasan mengenai isian ini untuk pengguna.',
	'CP_LANG_NAME'				=> 'Nama isian/judul yang ditampilkan untuk pengguna',
	'CP_LANG_OPTIONS'			=> 'Pilihan',
	'CREATE_NEW_FIELD'			=> 'Buat isian yang baru',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Paling sedikitnya satu profil khusus yang belum diterjemahkan. Silahkan masukkan informasi yang dibutuhkan dengan mengklik link “Terjemahkan” .',

	'DEFAULT_ISO_LANGUAGE'			=> 'Bahasa default [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Masukan-masukan bahasa untuk bahasa defaultnya belum diisi pada isian ini.',
	'DEFAULT_VALUE'					=> 'Nilai default',
	'DELETE_PROFILE_FIELD'			=> 'Singkirkan isian profil',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Apakan anda yakin ingin menyingkirkan isian profil ini?',
	'DISPLAY_AT_PROFILE'			=> 'Tampilkan di papan pengaturan pengguna',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Pengguna ini dapat mengganti isian profil melalui papan pengaturan pengguna.',
	'DISPLAY_AT_REGISTER'			=> 'Tampilkan di halaman pendaftaran',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Jika pilihan ini diaktifkan, maka isian akan ditampilkan pada halaman pendaftaran dan dapat diganti melalui papan pengaturan pengguna.',
	'DISPLAY_ON_VT'					=> 'Tampilan pada layat viewtopic',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'JIka pilihan ini diaktifkan, maka isian akan ditampilkan pada mini-profile pada layar topik.',
	'DISPLAY_PROFILE_FIELD'			=> 'Publikasikan tampilan isian profil',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Isian profil akan ditampilkan pada semua tempat yang dibolehkan dalam pengaturan load. Dengan membuat ini menjadi “tidak” akan menyembunyikan isian profil dari halaman topik, profil dan daftar anggota.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Masukkan pilihan anda sekarang, setiap pilihan pada satu baris.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Mohon dicatat bahwa anda bisa mengubah teks pilihan dan dapat menambahkan pilihan baru pada baris akhir. Tidak disarankan untuk menambah pilihan baru diantara pilihan yang sudah ada - hal ini akan menyebabkan kesalahan pilihan yang diberikan kepada pengguna. Hal ini juga bisa terjadi jika anda menyingkirkan pilihan yang berada diantaranya. Menyingkirkan pilihan dari hasil diakhir pada pengguna yang telah diberikan item ini sekarang akan dikembalikan ke defaultnya.',
	'EMPTY_FIELD_IDENT'				=> 'Kosongkan identifikasi isian',
	'EMPTY_USER_FIELD_NAME'			=> 'Silahkan masukkan sebuah judul/nama isian',
	'ENTRIES'						=> 'Masukan',
	'EVERYTHING_OK'					=> 'Semuanya bagus',

	'FIELD_BOOL'				=> 'Boolean (Ya/Tidak)',
	'FIELD_DATE'				=> 'Tanggal',
	'FIELD_DESCRIPTION'			=> 'Keterangan Isian',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Keterangan untuk isian ini yang ditampilkan kepada pengguna.',
	'FIELD_DROPDOWN'			=> 'Dropdown box',
	'FIELD_IDENT'				=> 'Identifikasi isian',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Identifikasi isian yang dipilih sudah ada. Silahkan pilih nama yang lain.',
	'FIELD_IDENT_EXPLAIN'		=> 'Identifikasi isian adalah sebuah nama untuk mengidentifikasikan isian profil dalam database dan template.',
	'FIELD_INT'					=> 'Nomor',
	'FIELD_LENGTH'				=> 'panjang input box',
	'FIELD_NOT_FOUND'			=> 'Isian profil tidak ditemukan.',
	'FIELD_STRING'				=> 'Isian Singletext',
	'FIELD_TEXT'				=> 'Textarea',
	'FIELD_TYPE'				=> 'Tipe isian',
	'FIELD_TYPE_EXPLAIN'		=> 'Anda tidak dapat tipe isian nantinya.',
	'FIELD_VALIDATION'			=> 'Validasi isian',
	'FIRST_OPTION'				=> 'Pilihan pertama',

	'HIDE_PROFILE_FIELD'			=> 'Sembunyikan isian profil',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Hanya administrator dan moderator yang dapat melihat/mengisikan isian profil ini. Jika pilihan ini diaktifkan, isian profil hanya akan ditampilkan pada halaman profil pengguna.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Identifikasi isian hanya bisa mengandung huruf kecil a-z dan _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Identifikasi isian hanya bisa mengandung panjang 17 karakter',
	'ISO_LANGUAGE'				=> 'Bahasa [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Pilihan spesifik bahasa [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Jumlah maksimum karakter',
	'MAX_FIELD_NUMBER'		=> 'Nomor tertinggi yang diijinkan',
	'MIN_FIELD_CHARS'		=> 'Jumlah minimum karakter yang diijinkan',
	'MIN_FIELD_NUMBER'		=> 'Nomor terendah yang diijinkan',

	'NO_FIELD_ENTRIES'			=> 'Tidak ada masukan yang ditentukan',
	'NO_FIELD_ID'				=> 'Tidak ada Id isian yang ditentukan.',
	'NO_FIELD_TYPE'				=> 'Tidak ada isian yang ditentukan.',
	'NO_VALUE_OPTION'			=> 'Pilihan sama dengan niilai yang tidak dimasukkan',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Nilai yang bukan entri. Jika isian dibutuhkan, pengguna memperoleh error jika mereka memilih pilihan ini.',
	'NUMBERS_ONLY'				=> 'Hanya nomor (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Pilihan dasar',
	'PROFILE_FIELD_ACTIVATED'	=> 'Isian profil berhasil diaktifkan.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Isian profil berhasil dinonaktifkan.',
	'PROFILE_LANG_OPTIONS'		=> 'Pilihan spesifik bahasa',
	'PROFILE_TYPE_OPTIONS'		=> 'Pilihan spesifik tipe profil',

	'RADIO_BUTTONS'				=> 'Radio buttons',
	'REMOVED_PROFILE_FIELD'		=> 'Isian profil berhasil disingkirkan.',
	'REQUIRED_FIELD'			=> 'Isian yang dibutuhkan',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Paksakan isian profil untuk diisikan atau ditentukan oleh pengguna. Ini akan menampilkan isian profil pada halaman registrasi dan papan pengaturan pengguna.',
	'ROWS'						=> 'Baris',

	'SAVE'							=> 'Simpan',
	'SECOND_OPTION'					=> 'Pilihan kedua',
	'STEP_1_EXPLAIN_CREATE'			=> 'Di sini anda dapat memasukkan parameter dasar pertama dari isian profil anda yang baru. Informasi ini dibutuhkan pada langkah kedua dimana anda akan mengatur sisa pilihan dan mengubahnya nanti.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Di sini anda dapat mengubah paramater dasar pertama dari isian profil anda. Pilihan yang relevan dihitung pada step kedua.',
	'STEP_1_TITLE_CREATE'			=> 'Tambahkan isian profil',
	'STEP_1_TITLE_EDIT'				=> 'Ubah isian profil',
	'STEP_2_EXPLAIN_CREATE'			=> 'Di sini anda dapat menentukan beberapa pilihan dasar yang masih ingin anda ubah.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Di sini adnda dapat mengubah beberapa pilihan dasar.<br /><strong>Mohon dicatat bahwa pengubahan terhadap isian profil tidak akan mempengaruhi isian profil yang ada yang dimasukkan pengguna.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Pilihan dasar tipe profil',
	'STEP_2_TITLE_EDIT'				=> 'Pilihan spesifik tipe profil',
	'STEP_3_EXPLAIN_CREATE'			=> 'Jika anda memiliki lebih dari satu bahasa yang terinstal, anda harus mengisikan item bahasa yang tersisa juga. Isian profil akan bekerja dengan default bahasa yang aktif, anda dapat mengisikan item bahasa yang tersisa nantinya.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Jika anda memiliki lebih dari satu bahasa yang terinstal, sekarang anda dapat mengubah atau menambah item bahasa yang tertinggal juga. Isian profil akan bekerja dengan default bahasa yang aktif.',
	'STEP_3_TITLE_CREATE'			=> 'Defenisi bahasa yang tersisa',
	'STEP_3_TITLE_EDIT'				=> 'Defenisi bahasa',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Masukkan sebuah frase yang ditampilkan, sebuah nilai default. Biarkan kosong jika anda ingin menunjukkan pada tempat pertama.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Masukkan sebuah teks default yang ditampilkan, sebuah nilai default. Biarkan kosong jika anda ingin menunjukkan pada tempat pertama..',
	'TRANSLATE'						=> 'Terjemahkan',

	'USER_FIELD_NAME'	=> 'Judul/nama isian ditampilkan ke pengguna',

	'VISIBILITY_OPTION'				=> 'Pilihan tampilan',
));

?>