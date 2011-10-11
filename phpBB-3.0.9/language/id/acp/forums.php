<?php
/**
*
* acp_forums [Bahasa Indonesia]
*
* @package language
* @version $Id: forums.php 2010 Sastra Manurung zourbuth@gmail.com
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Kurangi umur post umur post secara otomatis',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Jumlah hari sejak post terakhir setelah topik disingkirkan.',
	'AUTO_PRUNE_FREQ'			=> 'Frekuensi pengurangan otomatis',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Jumlah hari antara kegiatan pengurangan.',
	'AUTO_PRUNE_VIEWED'			=> 'Pangkas secara otomatis post yang dilihat',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Jumlah hari sejak topik dilihat setelah topik disingkirkan.',

	'CONTINUE'						=> 'Lanjutkan',
	'COPY_PERMISSIONS'				=> 'Salin perijinan dari',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Untuk melancarkan stup perijinan untuk forum baru anda, anda bisa menyalin perijinan dari forum tertentu.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Forum akan memiliki perijinan yang sama dengan yang anda tentukan untuk sekali pembuatan. Jika tidak ada forum yang dipilihm, maka forum yang baru dibuat tidak akan bisa dilihat sampai perijinan sudah dibuat.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Jika anda memilih untuk menyalin perijinan, maka forum akan memiliki perijinan yang sama dengan yang anda pilih. Proses ini akan menulis ulang semua perijinan yang telah anda buat sebelumnya untuk forum ini dengan perijinan forum yang anda pilih di sini. Jika tidak ada forum yang dipilih maka perijinan yang lama akan tetap digunakan.',
	'COPY_TO_ACL'					=> 'Sebagai alternatif, anda juga bisa %smengatur perijan baru%s untuk forum ini.',
	'CREATE_FORUM'					=> 'Buat forum baru',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Hapus isi atau pindahkan ke forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Hapus subforum atau pindahkan ke forum',
	'DEFAULT_STYLE'						=> 'Gaya default',
	'DELETE_ALL_POSTS'					=> 'Hapus post',
	'DELETE_SUBFORUMS'					=> 'Hapus subforum dan post',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Tampilkan topik yang aktif',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Jika dipilih ya maka topik yang aktif pada sebforum yang dipilih akan ditampilkan di bawah kategori ini.',

	'EDIT_FORUM'					=> 'Ubah forum',
	'ENABLE_INDEXING'				=> 'Aktifkan indeks pencarian',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Jika dipilih ya maka post yang dibuat untuk forum ini akan diindekskan untuk pencarian.',
	'ENABLE_POST_REVIEW'			=> 'Aktifkan peninjauan post',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Jika dipilih ya maka pengguna akan dapat meninjau post mereka jika post baru dibuat ke topik. Ini seharusnya dinonaktifkan untuk forum chat.',
	'ENABLE_QUICK_REPLY'			=> 'Aktifkan balas cepat',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Aktifkan balas cepat di forum ini. Pengaturan ini tidak akan dipertimbangkan jika fitur balas cepat tidak diaktifkan di seluruh halaman. Balas cepat hanya akan ditampilkan untuk pengguna yang memiliki untuk mempost di forum ini.',
	'ENABLE_RECENT'					=> 'Tampilkan topik aktif',
	'ENABLE_RECENT_EXPLAIN'			=> 'Jika dipilih ya maka topik yang dibuat di forum ini akan ditampilkan ke daftar aktif topik.',
	'ENABLE_TOPIC_ICONS'			=> 'Aktifkan ikon topik',

	'FORUM_ADMIN'						=> 'Administrasi forum',
	'FORUM_ADMIN_EXPLAIN'				=> 'Di phpbb3 tidak ada ketegori, semuanya adalah forum. Setiap forum memiliki jumlah subforum yang tidak terbatas dan anda dapat menentukan apakah setiap post bisa dibuat atau tidak. Di sini anda dapat menambah, mengubah, menghapus, menutup, membuka forum secara individu dan juga mengatur kontrol tambahan. Jika post dan topik anda sudah tidak sinkron lagi, anda dapat melakukan sinkronisasi ulang forum. <strong>Anda perlu menyalin atau membuat perijinan yang sesuai untuk forum yang baru dibuat agar bisa ditampilkan.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Aktifkan pengurangan otomatis',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Kurungi topik forum, buat frekuensinya/selang waktu parameternya di bawah ini.',
	'FORUM_CREATED'						=> 'Forum telah berhasil diciptakan.',
	'FORUM_DATA_NEGATIVE'				=> 'Parameter pengurangan tidak boleh negatif.',
	'FORUM_DESC_TOO_LONG'				=> 'Gambaran forum terlalu panjang, harus kurang dari 4000 karakter.',
	'FORUM_DELETE'						=> 'Hapus forum',
	'FORUM_DELETE_EXPLAIN'				=> 'Anda bisa menghapus forum di formulir dibawah ini. Jika forum dapat post maka anda dapat memutuskan dimana anda dapat meletakkan topik atau forum tersebut jika diisikan.',
	'FORUM_DELETED'						=> 'Forum berhasil dihapus.',
	'FORUM_DESC'						=> 'Gambaran Forum',
	'FORUM_DESC_EXPLAIN'				=> 'Semua markup HTML yang dimasukkan di sini akan ditampilkan sebagai mana adanya.',
	'FORUM_EDIT_EXPLAIN'				=> 'Formulir di bawah ini bisa anda gunakan untuk pengaturan forum. Harap dicatat bahwa kontrol moderasi dan penghitungan jumlah post diatur melalui perijinan forum untuk setiap pengguna atau grup pengguna.',
	'FORUM_IMAGE'						=> 'Gambar forum',
	'FORUM_IMAGE_EXPLAIN'				=> 'Lokasi yang relatif ke direktori root phpBB untuk gambar tambahan yang berhubungan dengan forum ini.',
    'FORUM_IMAGE_NO_EXIST'				=> 'Gambar forum yang ditentukan tidak ada',
	'FORUM_LINK_EXPLAIN'				=> 'URL Lengkap (termasuk protokol, contoh: <samp>http://</samp>) yang akan membawa pengguna ke lokasi tujuan forum yang diklik, contoh: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Lacak pengalihan link',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Rekam jumlah klik forum.',
	'FORUM_NAME'						=> 'Nama forum',
	'FORUM_NAME_EMPTY'					=> 'Anda harus memberikan nama untuk forum ini.',
	'FORUM_PARENT'						=> 'Forum induk',
	'FORUM_PASSWORD'					=> 'Kata sandi forum',
	'FORUM_PASSWORD_CONFIRM'			=> 'Konfirmasikan kata sandi forum',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Hanya perlu dibuat jika kata sandi forum dimasukkan.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Menentukan kata sandi untuk forum ini, gunakan sistem perijinan pada pilihan.',
	'FORUM_PASSWORD_UNSET'				=> 'Singkirkan kata sandi forum',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Tandai di sini jika anda ingin menyingkirkan kata sandi forum.',
	'FORUM_PASSWORD_OLD'				=> 'Kata sandi forum menggunakan enkripsi yang sudah lama dan seharusnya diganti.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Kata sandi yang anda masukkan tidak tepat.',
	'FORUM_PRUNE_SETTINGS'				=> 'Pengaturan pengurangan forum',
	'FORUM_RESYNCED'					=> 'Forum “%s” berhasil disinkronisasi ulang',
	'FORUM_RULES_EXPLAIN'				=> 'Peraturan forum ditampilkan di setiap halaman di dalam forum tersebut.',
	'FORUM_RULES_LINK'					=> 'Link ke peraturan forum',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Anda bisa memasukkan URL halaman/post tersebut yang berisikan peraturan forum anda di sini. Pengaturan ini akan mengesampingkan teks peraturan forum yang anda tentukan.',
	'FORUM_RULES_PREVIEW'				=> 'Perlihatkan peraturan forum',
	'FORUM_RULES_TOO_LONG'				=> 'Peraturan forum harus kurang dari 4000 karakter.',
	'FORUM_SETTINGS'					=> 'Pengaturan forum',
	'FORUM_STATUS'						=> 'Status forum',
	'FORUM_STYLE'						=> 'Gaya forum',
	'FORUM_TOPICS_PAGE'					=> 'Topik perhalaman',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Jika nilainya bukan nol maka akan mengesampingkan pengaturan default topik perhalaman.',
	'FORUM_TYPE'						=> 'Tipe forum',
	'FORUM_UPDATED'						=> 'Informasi forum telah berhasil diperbarui.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Anda ingin mengubah forum yang bisa dipost dan memiliki subforum ke link tertentu. Silahkan singkirkan semua subforum dari foum ini sebelum diproses, karena setelah pengubahan ke link maka anda tidak dapat melihat subforum yang terkoneksi ke forum tersebut sekarang ini.',

	'GENERAL_FORUM_SETTINGS'	=> 'Pengaturan general forum',

	'LINK'						=> 'Link',
	'LIST_INDEX'				=> 'Tampilkan subforum di daftar induk forum',
	'LIST_INDEX_EXPLAIN'		=> 'Tampilkan subforum dari forum ini di halaman indeks dan di tempat lain sebagai link di dalam lagenda induk forumnya jika induk forum tersebut “Tampilkan subforum di lagenda” mereka diaktifkan.',
	'LIST_SUBFORUMS'			=> 'Tampilkan subforum dalam lagenda',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Tampilkan subforum dari forum ini di halaman indeks dan di tempat lain sebagai link di dalam lagenda jika pilihan “Tampilkan subforum di lagenda induk forum” mereka diaktifkan.',
	'LOCKED'					=> 'Tertutup',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Forum yang anda pilih untuk meindahkan post-post tersebut adalah forum yang tidak bisa dipost. Pilihlah forum yang bisa dipost.',
	'MOVE_POSTS_TO'					=> 'Pindahkan post ke',
	'MOVE_SUBFORUMS_TO'				=> 'Pindahkan subforum ke',

	'NO_DESTINATION_FORUM'			=> 'Anda belum menentukan forum untuk memindahkan isinya.',
	'NO_FORUM_ACTION'				=> 'Tidak ada tindakan yang diambil untuk apa yang terjadi dengan isi forum.',
	'NO_PARENT'						=> 'Tidak memiliki induk',
	'NO_PERMISSIONS'				=> 'Jangan salin perijinan',
	'NO_PERMISSION_FORUM_ADD'		=> 'Anda tidak memiliki perijinan yang diperlukan untuk mengambah forum.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Anda tidak memiliki perijinan yang diperlukan untuk menghapus forum.',

	'PARENT_IS_LINK_FORUM'		=> 'Induk yang anda tentukan merupakan link forum. Link forum tidak dapat menampung forum lain, silahkan tentukan sebuath ketegori sebagai forum induk.',
	'PARENT_NOT_EXIST'			=> 'Tidak ada induk.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Kurangi pengumuman',
	'PRUNE_STICKY'				=> 'Kurangi sticky',
	'PRUNE_OLD_POLLS'			=> 'Kurangi pemilihan suara yang sudah lama',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Menyingkirkan topik dengan pemilihan suara yang belum diberikan suara selama umur post.',

	'REDIRECT_ACL'	=> 'Sekarang anda bisa %smengatur perijinan%s untuk forum ini.',

	'SYNC_IN_PROGRESS'			=> 'Melakukan sinkronisasi ulang forum',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Sekarang sinkronisasi ulang rentang %1$d/%2$d.',

	'TYPE_CAT'			=> 'Kategori',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Link',

	'UNLOCKED'			=> 'Buka',
));

?>