<?php
/**
*
* acp_attachments [Bahasa Indonesia]
*
* @package language
* @version $Id: attachments.php 2010 Sastra Manurung zourbuth@gmail.com
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Di sini anda dapat mengkonfigurasikan pengaturan utama untuk lampiran dan kategori spesial yang berhubungan.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Di sini anda dapat menambah, menghapus, mengubah, ataupun menonaktifkan ekstensi grup. Pilihan selanjutnya mengikutsertakan penugasan kategori spesial kepada mereka, mengubah mekanisme mendownload dan menetukan icon upload yang akan ditampilkan didepan lampiran yang dimiliki grup tersebut.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Di sini anda dapat mengatur ekstensi yang anda ijinkan. Untuk mengaktifkan ekstensi anda, silahkan tuju ke papan manajemen ekstensi grup. Kami sangat menyarankan agar tidak mengijinkan ekstensi scripting (seperti <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, dan seterusnya…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Di sini anda dapat melihat file-file yang tidak mempunyai pemilik. Ini terjadi apabila kebanyakan pengguna melampirkan file tersebut tetapi tidak mengajukan postnya. Anda dapat menghapus file-file ini atau melampirkannya ke post tersebut. Untuk melampirkan file tersebut ke post, anda harus memiliki identitas post yang sah, anda harus menentukan identitas ini sendiri. Hal ini akan membuat lampiran yang diupload masuk ke dalam post yang dipilih.',
	'ADD_EXTENSION'						=> 'Tambahkan ekstensi',
	'ADD_EXTENSION_GROUP'				=> 'Tambahkan ekstensi grup',
	'ADMIN_UPLOAD_ERROR'				=> 'Terjadi kesalahan pada saat melampirkan file: “%s”.',
	'ALLOWED_FORUMS'					=> 'Semua forum diijinkan',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Dapat mempost ekstensi yang diberikan pada forum atau semua forum yang dipilih.',
	'ALLOWED_IN_PM_POST'				=> 'Diijinkan',
	'ALLOW_ATTACHMENTS'					=> 'Ijinkan lampiran',
	'ALLOW_ALL_FORUMS'					=> 'Ijinkan semua forum',
	'ALLOW_IN_PM'						=> 'Diijinkan di perpesanan pribadi',
	'ALLOW_PM_ATTACHMENTS'				=> 'Ijinkan lampiran di pesan pribadi',
	'ALLOW_SELECTED_FORUMS'				=> 'Hanya forum yang terpilih dibawah ini',
	'ASSIGNED_EXTENSIONS'				=> 'Ekstensi diberikan',
	'ASSIGNED_GROUP'					=> 'Ekstensi grup diberikan',
	'ATTACH_EXTENSIONS_URL'				=> 'Ekstensi-ekstensi',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grup-grup ekstensi',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Ukuran maksimum file',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Ukuran maksimum setiap file, dari 0 ke tak terhingga.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Ukuran maksimum file perpesanan',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Ukuran maksimum setiap file, dari 0 ke tak terhingga, dilampirkan ke pesan pribadi.',
	'ATTACH_ORPHAN_URL'					=> 'Lampiran-lampiran tanpa kepemilikan',
	'ATTACH_POST_ID'					=> 'Post ID',
	'ATTACH_QUOTA'						=> 'Kuota total lampiran',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Ruang maksimum untuk yang tersedia untuk lampiran seluruh halaman, dari 0 ke tak terhingga.',
	'ATTACH_TO_POST'					=> 'Lampirkan file ke post',

	'CAT_FLASH_FILES'			=> 'File-file Flash',
	'CAT_IMAGES'				=> 'Gambar-gambar',
	'CAT_QUICKTIME_FILES'		=> 'File-file media Quicktime',
	'CAT_RM_FILES'				=> 'File-file media RealMedia',
	'CAT_WM_FILES'				=> 'File-file media Windows Media',
	'CHECK_CONTENT'				=> 'Periksa file lampiran',
	'CHECK_CONTENT_EXPLAIN'		=> 'Beberapa browser tidak dapat mengasumsikan mimetype yang salah untuk file yang diupload. Pilihan ini membuat file-file yang tidak dapat diasumsikan tersebut ditolak.',
	'CREATE_GROUP'				=> 'Ciptakan grup baru',
	'CREATE_THUMBNAIL'			=> 'Buat thumbnail',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Buat thumbnail disetiap kondisi yang memungkinkan.',

	'DEFINE_ALLOWED_IPS'			=> 'Masukkan alamat IP/nama host yang diijinkan',
	'DEFINE_DISALLOWED_IPS'			=> 'Masukkan alamat IP/nama host yang tidak diijinkan',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Gunakan baris baru untuk memasukkan beberapa IP/nama host yang berbeda. Gunakan juga tanda sambung (-) dengan memisahkan yang awal dan akhir untuk memasukkan rentang alamat IP), untuk memakai wildcard gunakan tanda “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Anda dapat menyingkirkan beberapa alamat IP untuk sekali perintah dengan menggunakan kombinasi mouse dan keyboard pada komputer dan browser anda. Alamat IP yang disingkirkan berlatar belakang biru.',
	'DISPLAY_INLINED'				=> 'Tampilkan gambar segaris',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Jika diset tidak memiliki gambar maka lampiran akan muncul sebagai link.',
	'DISPLAY_ORDER'					=> 'Pengurutan tampilan lampiran',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Tampilkan urutan lampiran berdasarkan waktu.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Ubah ekstensi grup',
	'EXCLUDE_ENTERED_IP'			=> 'Gunakan ini untuk menyingkirkan alamat IP atau nama host yang dimasukkan.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Singkirkan alamat IP atau nama host yang diijinkan',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Singkirkan alamat IP atau nama host yang tidak diijinkan',
	'EXTENSIONS_UPDATED'			=> 'Ekstensi telah berhasil diperbarui.',
	'EXTENSION_EXIST'				=> 'Ekstensi %s sudah ada.',
	'EXTENSION_GROUP'				=> 'Ekstensi grup',
	'EXTENSION_GROUPS'				=> 'Ekstensi grup',
	'EXTENSION_GROUP_DELETED'		=> 'Ekstensi grup berhasil dihapus.',
	'EXTENSION_GROUP_EXIST'			=> 'Ekstensi grup %s sudah ada.',

	'EXT_GROUP_ARCHIVES'         => 'Arsip',
	'EXT_GROUP_DOCUMENTS'         => 'Dokumen',
	'EXT_GROUP_DOWNLOADABLE_FILES'   => 'File-File Yang Bisa Diunduh',
	'EXT_GROUP_FLASH_FILES'         => 'File Flash',
	'EXT_GROUP_IMAGES'            => 'Gambar',
	'EXT_GROUP_PLAIN_TEXT'         => 'Teks Biasa',
	'EXT_GROUP_QUICKTIME_MEDIA'      => 'Media Quicktime',
	'EXT_GROUP_REAL_MEDIA'         => 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'      => 'Windows Media',
	   
	'GO_TO_EXTENSIONS'		=> 'Pergi ke halaman manajemen ekstensi',
	'GROUP_NAME'			=> 'Nama grup',

	'IMAGE_LINK_SIZE'			=> 'Ukuran dimensi link',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Tampilkan gambar lampiran segaris dengan teks jika besar gambar lebih besar dari ini. Untuk tidak menggunakan fasilitas ini, buat nilainya menjadi 0 piksel dengan 0 piksel.',
	'IMAGICK_PATH'				=> 'Alamat imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Alamat lengkap ke aplikasi konversi imagemagick, sebagai contoh: <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Jumlah maksimum lampiran per post',
	'MAX_ATTACHMENTS_PM'			=> 'Jumlah maksimum lampiran per pesan pribadi',
	'MAX_EXTGROUP_FILESIZE'			=> 'Ukuran maksimum file',
	'MAX_IMAGE_SIZE'				=> 'Ukuran maksimum gambar',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Ukuran maksimum gambar lampiran. Buat nilainya menjadi 0 piksel dengan 0 piksel untuk tidak menggunakan pemeriksaan ukuran.',
	'MAX_THUMB_WIDTH'				=> 'Lebar maksimum ukuran thumbnail dalam piksel',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Thumbnail yang dihasilkan tidak melebihi lebar yang diatur di sini.',
	'MIN_THUMB_FILESIZE'			=> 'Ukuran minimum file thumbnail',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Jangan buat thumbnail untuk gambar yang lebih kecil dari ini.',
	'MODE_INLINE'					=> 'Segaris',
	'MODE_PHYSICAL'					=> 'Fisik',

	'NOT_ALLOWED_IN_PM'			=> 'Ijinkan hanya dipost saja',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Tidak diijinkan',
	'NOT_ASSIGNED'				=> 'Belum ditetapkan',
	'NO_EXT_GROUP'				=> 'Tidak ada',
	'NO_EXT_GROUP_NAME'			=> 'Tidak ada nama grup yang dimasukkan',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Tidak ada ekstensi grup yang ditentukan.',
	'NO_FILE_CAT'				=> 'Tidak ada',
	'NO_IMAGE'					=> 'Tidak ada gambar',
	'NO_THUMBNAIL_SUPPORT'		=> 'Tidak ada fasilitas thumbnail yang bisa digunakan. Untuk memperoleh fungsi yang tepat, setiap ekstensi GD perlu disediakan atau imagemagick sudah terinstal. Namun keduanya tidak ditemukan.',
	'NO_UPLOAD_DIR'				=> 'Direktori untuk upload yang anda tentukan tidak ada.',
	'NO_WRITE_UPLOAD'			=> 'Direktori untuk upload yang anda tentukan tidak bisa ditulis. Silahkan mengubah perijinan agar webserver dapat menulis ke direktori tersebut.',

	'ONLY_ALLOWED_IN_PM'	=> 'Ijinkan hanya di pesan pribadi saja',
	'ORDER_ALLOW_DENY'		=> 'Ijinkan',
	'ORDER_DENY_ALLOW'		=> 'Abaikan',

	'REMOVE_ALLOWED_IPS'		=> 'Singkirkan IP/nama host <em>yang diijinkan</em>',
	'REMOVE_DISALLOWED_IPS'		=> 'Singkirkan IP/nama host <em>yang tidak diijinkan</em>',

	'SEARCH_IMAGICK'				=> 'Cari Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Daftar yang diijinkan/diabaikan',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Ubah sifat default pada saat secure download diijinkan dari daftar yang diijinkan/diabaikan menjadi sebuah <strong>daftar putih</strong> (yang dijinkan) atau <strong>daftar hitam</strong> (yang diabaikan).',
	'SECURE_DOWNLOADS'				=> 'Ijinkan secure download',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Dengan mengijinkan pilihan ini, download dibatasi hanya untuk alamat IP/nama host yang anda tentukan.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Secure Downloads tidak diijinkan. Pengaturan ini hanya berguna setelah mengijinkan secure downloads.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Daftar alamat IP telah berhasil diperbarui.',
	'SECURE_EMPTY_REFERRER'			=> 'Ijinkan referrer kosong',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Secure download didasarkan pada referrer. Apakah anda ingin mengijinkan download untuk referer yang diabaikan?',
	'SETTINGS_CAT_IMAGES'			=> 'Pengaturan kategori gambar',
	'SPECIAL_CATEGORY'				=> 'Kategori spesial',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Kategori spesial berbeda dengan kategori yang diberikan didalam post.',
	'SUCCESSFULLY_UPLOADED'			=> 'Berhasil di upload.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Ekstensi grup berhasil ditambah.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Ekstensi grup berhasil diperbarui.',

	'UPLOADING_FILES'				=> 'Mengupload file-file',
	'UPLOADING_FILE_TO'				=> 'Mengupload file “%1$s” ke nomor post %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Anda tidak memiliki ijin untuk mengupload file-file ke forum “%s”.',
	'UPLOAD_DIR'					=> 'Direktori upload',
	'UPLOAD_DIR_EXPLAIN'			=> 'Path penyimpanan untuk lampiran. Mohon dicatat bahwa dengan mengubah direktori ini pada saat lampiran telah diupload, anda harus menyalin file lampiran tersebut ke lokasi baru yang telah anda ubah.',
	'UPLOAD_ICON'					=> 'Unggah ikon',
	'UPLOAD_NOT_DIR'				=> 'Lokasi upload yang anda tentukan sepertinya bukan merupakan suatu direktori.',
));

?>