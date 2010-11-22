<?php
/**
*
* posting [Bahasa Indonesia]
*
* @package language
* @version $Id: posting.php 2010 Sastra Manurung zourbuth@gmail.com
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
	'ADD_ATTACHMENT'			=> 'Upload lampiran',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Masukkan beberapa perincian di bawah ini apabila anda ingin melampirkan satu file atau lebih.',
	'ADD_FILE'					=> 'Lampirkan file',
	'ADD_POLL'					=> 'Penciptaan pemungutan suara',
	'ADD_POLL_EXPLAIN'			=> 'Kosongkan isian ini apabila anda tidak ingin menambahan pemungutan suara ataupun topik anda.',
	'ALREADY_DELETED'			=> 'Maaf, pesan ini sadah dihapus.',
	'ATTACH_QUOTA_REACHED'		=> 'Maaf, jatah lampiran halaman sudah tercapai.',
	'ATTACH_SIG'				=> 'Lampirkan tanda tangan (tanda tangan dapat diubah lewat Papan Pengaturan Pengguna (PPP)',

	'BBCODE_A_HELP'				=> 'Inline uploaded attachment: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Tulisan tebal: [b]teks[/b]',
	'BBCODE_C_HELP'				=> 'Tampilan kode: [code]kode[/code]',
	'BBCODE_E_HELP'				=> 'Daftar: Tambahkan elemen daftar',
	'BBCODE_F_HELP'				=> 'Ukuran huruf: [size=85]teks kecil[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>Mati</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>Hidup</em>',
	'BBCODE_I_HELP'				=> 'Tulisan miring: [i]teks[/i]',
	'BBCODE_L_HELP'				=> 'Daftar: [list]teks[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Daftar item: [*]teks[/*]',
	'BBCODE_O_HELP'				=> 'Daftar yang diurutkan: [list=]teks[/list]',
	'BBCODE_P_HELP'				=> 'Masukkan gambar: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Kutip teks: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Warna huruf: [color=red]text[/color]  Tips: anda dapat menggunakan color=#FF0000',
	'BBCODE_U_HELP'				=> 'Huruf bergaris bawah: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Masukkan URL: [url]http://url[/url] or [url=http://url]URL text[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'				=> 'Anda tidak dapat menggeser topik ini sebagimana adanya setelah pos terakhir.',

	'CANNOT_DELETE_REPLIED'		=> 'Maaf anda hanya dapat menghapus pos yang belum dibalas.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Pos ini sudah dikunci. Anda tidak lagi bisa mengubahnya.',
	'CANNOT_EDIT_TIME'			=> 'Anda tidak dapat lagi mengubah ataupun menghapus pos ini.',
	'CANNOT_POST_ANNOUNCE'		=> 'Maaf, anda tidak dapat memposkan pengumuman.',
	'CANNOT_POST_STICKY'		=> 'Maaf, anda tidak dapat melekatkan topik.',
	'CHANGE_TOPIC_TO'			=> 'Ubah jenis topik ke',
	'CLOSE_TAGS'				=> 'Tutup kartu',
	'CURRENT_TOPIC'				=> 'Topik sekarang',

	'DELETE_FILE'				=> 'Hapus file',
	'DELETE_MESSAGE'			=> 'Hapus pesan',
	'DELETE_MESSAGE_CONFIRM'	=> 'Apakah anda yakin ingin menghapus pesan ini?',
	'DELETE_OWN_POSTS'			=> 'Maaf, anda hanya dapat menghapus pos anda sendiri.',
	'DELETE_POST_CONFIRM'		=> 'Apakah anda yakin ingin menghapus post ini?',
	'DELETE_POST_WARN'			=> 'Pesan yang sudah dihapus tidak dapat dikembalikan lagi',
	'DISABLE_BBCODE'			=> 'Matikan BBCode',
	'DISABLE_MAGIC_URL'			=> 'Jangan uraikan URL secara otomatis',
	'DISABLE_SMILIES'			=> 'Matikan tanda senyuman',
	'DISALLOWED_CONTENT'		=> 'Upload telah ditolak karena file yang diupload diidentifikasikan sebagai kemungkinan penyerangan.',
	'DISALLOWED_EXTENSION'		=> 'ekstensi file %s tidak diperbolehkan.',
	'DRAFT_LOADED'				=> 'Naskah dimuat ke dalam post, anda boleh menyelesaikan post anda sekarang.<br />Naskah anda akan segera dihapus setelah post diajukan.',
	'DRAFT_LOADED_PM'			=> 'Naskah dimuat ke dalam pesan, anda boleh menyelesaikan post anda sekarang.<br />Naskah anda akan segera dihapus setelah pesan pribadi diajukan.',
	'DRAFT_SAVED'				=> 'Naskah berhasil disimpan.',
	'DRAFT_TITLE'				=> 'Judul naskah',

	'EDIT_REASON'				=> 'Alasan untuk mengubah post',
	'EMPTY_FILEUPLOAD'			=> 'File yang diupload kosong.',
	'EMPTY_MESSAGE'				=> 'Anda harus memasukkan pesan ketika memposting.',
	'EMPTY_REMOTE_DATA'			=> 'File tidak dapat diupload, silahkan upload file tersebut secara manual.',

	'FLASH_IS_OFF'				=> '[flash] <em>mati</em>',
	'FLASH_IS_ON'				=> '[flash] <em>hidup</em>',
	'FLOOD_ERROR'				=> 'Anda tidak dapat membuat post yang lain secepat ini sebelum post anda yang lama diselesaikan.',
	'FONT_COLOR'				=> 'Warna huruf',
	'FONT_COLOR_HIDE'			=> 'Sembunyikan warna huruf',
	'FONT_HUGE'					=> 'Sangat besar',
	'FONT_LARGE'				=> 'Besar',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Besar huruf',
	'FONT_SMALL'				=> 'Kecil',
	'FONT_TINY'					=> 'Sangat kecil',

	'GENERAL_UPLOAD_ERROR'		=> 'Tidak dapat mengupload lampiran ke  %s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>mati</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>hidup</em>',
	'INVALID_FILENAME'			=> '%s nama file yang salah.',

	'LOAD'						=> 'Muat',
	'LOAD_DRAFT'				=> 'Muat naskah',
	'LOAD_DRAFT_EXPLAIN'		=> 'Disin anda dapat memilih naskah untuk dilanjutkan ditulis. Post anda yang beru akan dibatalkan, semua isi post yang baru akan dihapus. Gunakan Papan Pengaturan Pengguna untuk melihat, merubah dan menghapus naskah.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Anda harus masuk untuk menggeser topik-topik di dalam forum ini.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Anda harus masuk untuk menghapus post-post di dalam forum ini.',
	'LOGIN_EXPLAIN_POST'		=> 'Anda harus masuk untuk membuat post di dalam forum ini.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Anda harus masuk untuk mengutip post-post di dalam forum ini.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Anda harus masuk untuk membalas topik di dalam forum ini.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Anda hanya bisa menggunakan besar huruf sampai dengan %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Tinggi ukuran file flash anda hanya diperbolehkan sampai %1$d piksel.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Lebar ukuran file flash anda hanya diperbolehkan sampai %1$d piksel.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Tinggi ukuran gambar anda hanya diperbolehkan sampai  %1$d piksel.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Lebar ukuran gambar anda hanya diperbolehkan sampai %1$d piksel.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Masukkan pesan anda disin, pesan anda tidak boleh melebihi <strong>%d</strong> karakter.',
	'MESSAGE_DELETED'			=> 'Pesan ini telah berhasil dihapus.',
	'MORE_SMILIES'				=> 'Lihat tanda senyuman yang lain',

	'NOTIFY_REPLY'				=> 'Beritahukan saya apabila balasan dipostkan',
	'NOT_UPLOADED'				=> 'File tidak dapat diupload.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Anda tidak dapat menghapus pilihan pemungutan suara yang ada.',
	'NO_PM_ICON'				=> 'Tidak ada ikon PM',
	'NO_POLL_TITLE'				=> 'Anda harus memsaukkan judul pemilihan suara.',
	'NO_POST'					=> 'Post yang diminta tidak ada.',
	'NO_POST_MODE'				=> 'Tidak ada mode post yang ditetapkan.',

	'PARTIAL_UPLOAD'			=> 'File yang diupload hanya sebagian saja.',
	'PHP_SIZE_NA'				=> 'File lampiran terlalu besar.<br />Tidak dapat menentukan ukuran maksimum yang ditentukan PHP dalam php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Ukuran file lampiran terlalu besar, ukuran upload maksimum adalah %1$d %2$s.<br />Mohon dicatat bahwa hal ini diatur pada php.ini dan tidak dapat dikesampingkan.',
	'PLACE_INLINE'				=> 'Tempatkan segaris',
	'POLL_DELETE'				=> 'Hapus pemungutan suara',
	'POLL_FOR'					=> 'Jalankan pemungutan suara untuk',
	'POLL_FOR_EXPLAIN'			=> 'Masukkan 0 atau biarkan kosong untuk pemungutan suara yang tanpa batas akhir.',
	'POLL_MAX_OPTIONS'			=> 'Pilihan per pengguna',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Ini adalah jumlah pilihan setiap pengguna yang dapat dipilih oleh pengguna pada saat pemilihan.',
	'POLL_OPTIONS'				=> 'Pilihan-pilihan pemungutan suara',
	'POLL_OPTIONS_EXPLAIN'		=> 'Tempatkan setiap pilihan pada baris baru. Anda hanya dapat memasukkan pilihan sampai <strong>%d</strong> pilihan.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Tempatkan setiap pilihan pada baris baru. Anda hanya dapat memasukkan pilihan sampai <strong>%d</strong> pilihan. Jika anda membuang atau menambah pilihan maka semua suara akan diulangi.',
	'POLL_QUESTION'				=> 'Pertanyaan pemungutan suara',
	'POLL_TITLE_TOO_LONG'		=> 'Judul dari pemungutan suara harus lebih kecil dari 100 karekter.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Ukuran pemungutan suara yang anda pisahkan terlalu besar, pertimbangkan untuk menyingkirkan BBCodes atau simbol senyuman.',
	'POLL_VOTE_CHANGE'			=> 'Ijinkan pemberian suara ulang',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Jika diperbolehkan pengguna dapat mengubah suara mereka.',
	'POSTED_ATTACHMENTS'		=> 'Lampiran-lampiran yang dipost',
	'POST_APPROVAL_NOTIFY'		=> 'Anda akan diberitahukan apabila post anda sudah disetujui.',
	'POST_CONFIRMATION'			=> 'Konfirmasi dari post',
	'POST_CONFIRM_EXPLAIN'		=> 'Untuk mencegah post secara otomatis, halaman berikut membutuhkan anda untuk memasukkan kode konfirmasi. Kodenya ditampilkan di dalam gambar yang anda lihat di bawah ini. Jika anda tidak jelas melihat ataupun membaca kode tersebut, silahkan hubungi %sBoard Administrator%s.',
	'POST_DELETED'				=> 'Pesan ini telah berhasil dihapus.',
	'POST_EDITED'				=> 'Pesan ini telah berhasil diubah.',
	'POST_EDITED_MOD'			=> 'Pesan ini telah berhasil diubah, namun masih membutuhkan persetujuan dari moderator sebelum dipublikasikan.',
	'POST_GLOBAL'				=> 'Umum',
	'POST_ICON'					=> 'Ikon post',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Tinjauan post',
	'POST_REVIEW_EDIT'			=> 'Tinjauan post',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Post ini sudah diubah oleh pengguna lain ketika anda mengubahnya. Anda bisa meninjau versi post sekarang dan atur pengubahan anda.',
	'POST_REVIEW_EXPLAIN'		=> 'Paling sedikitnya satu post telah dibuat di topik ini. Anda boleh meninjau pesan anda.',
	'POST_STORED'				=> 'Pesan ini telah berhasil dipostkan.',
	'POST_STORED_MOD'			=> 'Pesan ini telah berhasil diajukan, namun masih membutuhkan persetujuan dari moderator sebelum dipublikasikan.',
	'POST_TOPIC_AS'				=> 'Post topik sebagai',
	'PROGRESS_BAR'				=> 'Tingkat kemajuan',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Anda hanya boleh menggunakan %1$d kutipan dengan yang lainnya.',

	'SAVE'						=> 'Simpan',
	'SAVE_DATE'					=> 'Disimpan di',
	'SAVE_DRAFT'				=> 'Simpan Naskah',
	'SAVE_DRAFT_CONFIRM'		=> 'Mohon dicatat bahwa naskah-naskah yang disimpan hanya termasuk subjek dan isi pesan, sedangkan unsur yang lain akan disingkirkan. Apakah anda ingin menyimpan naskah anda sekarang?',
	'SMILIES'					=> 'Tanda senyuman',
	'SMILIES_ARE_OFF'			=> 'Tanda-tanda senyuman <em>MATI</em>',
	'SMILIES_ARE_ON'			=> 'Tanda-tanda senyuman <em>HIDUP</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Batas waktu pelekatan/pengumuman',
	'STICK_TOPIC_FOR'			=> 'Sticky topik untuk',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Masukkan angka 0 atau biarkan kosong untuk tidak mengakhiri Sticky/Pengumuman.',
	'STYLES_TIP'				=> 'Tip: Gaya bahasa dapat digunakan secara cepat untuk teks yang dipilih.',

	'TOO_FEW_CHARS'				=> 'Pesan anda mengandung karakter yang terlalu sedikit.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Pesan anda mengandung %1$d karakter. Jumlah minimum karakter yang harus anda masukkan adalah %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Anda harus memasukkan paling sedikitnya dua pilihan pemungutan suara.',
	'TOO_MANY_ATTACHMENTS'		=> 'Tidah dapat menambahkan lapiran yang lain, batas maksimumnya adalah %d.',
	'TOO_MANY_CHARS'			=> 'Pesan anda mengandung karakter yang teralalu banyak.',
	'TOO_MANY_CHARS_POST'		=> 'Pesan anda mengandung %1$d karakter. Jumlah maksimum karekter yang diijinkan adalah %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Tanda tangan anda mengandung %1$d karekter. Jumlah maksimum karekter yang diijinkan adalah %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Anda telah mencoba memasukkan pilihan-pilihan pemungutan suara yang cukup banyak.',
	'TOO_MANY_SMILIES'			=> 'Pesan anda mengandung tanda senyuman yang terlalu banyak. Jumlah maksimum tanda senyuman yang diijinkan adalah %d.',
	'TOO_MANY_URLS'				=> 'Pesan anda mengandung URL yang terlalu banyak. Jumlah maksimum URL yang diijinkan adalah %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Anda tidak boleh menentukan pilihan yang lebih banyak daripada pilihan pemungutan suara yang ada.',
	'TOPIC_BUMPED'				=> 'Topik telah berhasil digeser.',

	'UNAUTHORISED_BBCODE'		=> 'Anda tidak boleh menggunakan beberapa BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Untuk mengganti topik ini yang telah diubah dari topik global menjadi topik normal, anda perlu memilih forum yang anda inginkan untuk menampilkan topik ini.',
	'UPDATE_COMMENT'			=> 'Perbaharui komentar',
	'URL_INVALID'				=> 'URL yang anda masukkan salah.',
	'URL_NOT_FOUND'				=> 'File yang ditentukan tidak dapat ditemukan.',
	'URL_IS_OFF'				=> '[url] <em>MATI</em>',
	'URL_IS_ON'					=> '[url] <em>HIDUP</em>',
	'USER_CANNOT_BUMP'			=> 'Anda tidak dapat menggeser topik-topik di forum ini.',
	'USER_CANNOT_DELETE'		=> 'Anda tidak dapat menghapus post-post difoum ini.',
	'USER_CANNOT_EDIT'			=> 'Anda tidak dapat mengubah post di forum ini.',
	'USER_CANNOT_REPLY'			=> 'Anda tidak dapat membalas di forum ini.',
	'USER_CANNOT_FORUM_POST'	=> 'Anda tidak dapat melakukan kegiatan post di forum ini karena tipe forum ini tidak mendukung untuk itu.',

	'VIEW_MESSAGE'				=> '%sLihat pesan yang anda ajukan%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sLihat pesan pribadi yang anda ajukan%s',

	'WRONG_FILESIZE'			=> 'Ukuran file terlalu besar, ukuran maksimum yang diijinkan adalah %1d %2s.',
	'WRONG_SIZE'				=> 'Ukuran lebar gambar yang paling kecil harus %1$d piksel dengan tinggi %2$d piksel dan ukuran lebar gambar paling besar adalah %3$d piksel dengan tinggi %4$d. Ukuran lebar gambar yang diajukan adalah %5$d piksel dengan tinggi %6$d piksel.',
));

?>