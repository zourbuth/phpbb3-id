<?php
/**
*
* acp_permissions [Bahasa Indonesia]
*
* @package language
* @version $Id: permissions.php 2010 Sastra Manurung zourbuth@gmail.com
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Perijinan merupakan butir yang paling tinggi dan dibagi atas empat kelompok utama sebagai berikut:</p>

		<h2>Perijinan Global</h2>
		<p>Perijinan ini digunakan untuk mengatur akses untuk tingkat global dan dipergunakan pada seluruh halaman. Perijinan ini dibagi atas Perijinan Pengguna, Perijinan Grup, Perijinan Administrator dan Perijinan Moderator Global.</p>

		<h2>Perijinan Dasar Forum</h2>
		<p>Perijinan ini digunakan untuk mengatur akses untuk setiap dasar forum. Perijinan ini dibagi atas Perijinan Forum, Perijinan Moderator Forum, Perijinan Forum Pengguna dan Perijinan Forum Grup.</p>

		<h2>Peran Perijinan</h2>
		<p>Perijinan ini digunakan untuk membuat sekumpulan perijinan yang berbeda untuk tipe perijinan yang berbeda yang nantinya diberikan pada sebuah dasar peranan. Peranan default harus melindungi administrator halaman besar dan kecil, meskipun dalam setiap empat bagian besar tersebut, anda dapat menambahkan, mengubah dan menghapus peranan yang anda lihat pantas.</p>

		<h2>Mask Perijinan</h2>
		<p>Perijinan ini digunakan untuk melihat efektifitas peijinan yang diberikan kepada Pengguna, Moderator (Lokal dan Global), Administrator ataupun Forum.</p>
	
		<br />

		<p>Untuk informasi lebih lajut mengenai pengaturan perijinan pada halaman phpBB3 anda, silahkan lihat <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Bab 1.5 dari Panduan Permulaan Cepat</a>.</p>
	',

	'ACL_NEVER'				=> 'Tidak pernah',
	'ACL_SET'				=> 'Pengaturan perijinan',
	'ACL_SET_EXPLAIN'		=> 'Perijinan didasarkan pada sitem sederhana <samp>YA</samp>/<samp>TIDAK</samp>. Setting an option to <samp>NEVER</samp> for a user or usergroup overrides any other value assigned to it. If you do not wish to assign a value for an option for this user or group select <samp>NO</samp>. If values are assigned for this option elsewhere they will be used in preference, else <samp>NEVER</samp> is assumed. All objects marked (with the checkbox in front of them) will copy the permission set you defined.',
	'ACL_SETTING'			=> 'Pengaturan',

	'ACL_TYPE_A_'			=> 'Perijinan administrasi',
	'ACL_TYPE_F_'			=> 'Perijinan forum',
	'ACL_TYPE_M_'			=> 'Perijinan moderasi',
	'ACL_TYPE_U_'			=> 'Perijinan pengguna',

	'ACL_TYPE_GLOBAL_A_'	=> 'Perijinan forum',
	'ACL_TYPE_GLOBAL_U_'	=> 'Perijinan-perijinan pengguna',
	'ACL_TYPE_GLOBAL_M_'	=> 'Perijinan-perijinan Global Moderator',
	'ACL_TYPE_LOCAL_M_'		=> 'Perijinan-perijinan Moderator Forum',
	'ACL_TYPE_LOCAL_F_'		=> 'Perijinan-perijinan Form',
	
	'ACL_NO'				=> 'Tidak',
	'ACL_VIEW'				=> 'Melihat Perijinan',
	'ACL_VIEW_EXPLAIN'		=> 'Di sini anda dapat melihat perijinan yang efektif yang dimiliki pengguna atau grup. Kotak merah menunjukkan bahwa pengguna/grup tidak memiliki perijinan, sedangkan kotak hijau menunjukkan pengguna/grup memiliki perijinan.',
	'ACL_YES'				=> 'Ya',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Di sini anda dapat memberikan perijinan administrator kepada pengguna ataupun grup. Semua pengguna dengan perijinan administrator bisa melihat papan pengaturan administrator.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Di sini anda dapat memberikan perijinan sebagai moderator forum kepada pengguna ataupun grup. Untuk memberikan akses pengguna ke forum, menentukan sebagai perijinan moderasi global atau sebagai perijinan administrasi silahkan menggunakan halaman yang tepat please use the appropriate page.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Di sini anda dapat melakukan perubahan kepada pengguna ataupun grup agar dapat mengakses forum tertentu. Untuk memberikan perijinan moderator atau administrator silahkan menggunakan halaman lain.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Di sini anda dapat menyalin perijinan forum dari satu forum yang satu ke forum atau beberapa forum yang lain.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Di sini anda dapat memberikan perijinan moderator global kepada pengguna ataupun grup. Moderator ini sama halnya seperti moderator biasa tetapi mereka memiliki akses ke semua forum halaman.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Di sini anda dapat memberikan perijinan forum kepada anggota.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Di sini anda dapat memberikan perijinan global kepada grup - perijinan pengguna, perijinan moderator global dan perijinan administrator. Perijinan pengguna mengikutsertakan kemampuan seperti penggunaan avatar, mengirim pesan pribadi, dan sebagainya; perijinan moderator global seperti menyetujui post, mengatur topik, mengatur larangan, dan sebagainya dan terakhir perijinan administrator seperti mengubah perijinan, menentukan  tambahan BBCode, mengatur forum dan sebagainya. Perijinan pengguna seharusnya jarang dilakukan, cara yang lebih baik adalah dengan mengelompokkna pengguna dalam suatu grup dan memberikan perijinan grup tersebut.',
    'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Di sini anda dapat mengatur peranan untuk perijinan administrasi. Peranan adalah perijinan yang efektif, jika anda merubah sebuah peranan, maka item-item yang diberikan peranan ini perijinannya juga akan ikut berubah.',
    'ACP_FORUM_ROLES_EXPLAIN'					=> 'Di sini anda dapat mengatur peranan dan perijinan forum. Peranan adalah perijinan yang efektif, jika anda merubah sebuah peranan, maka item-item yang diberikan peranan ini, perijinannya juga akan ikut berubah.',
    'ACP_MOD_ROLES_EXPLAIN'						=> 'Di sini anda dapat mengatur peranan untuk perijinan moderasi. Peranan adalah perijinan yang efektif, jika anda merubah sebuah peranan, maka item-item yang diberikan peranan ini, perijinannya juga akan ikut berubah.',
    'ACP_USER_ROLES_EXPLAIN'					=> 'Di sini anda dapat mengatur peranan untuk perijinan pengguna. Peranan adalah perijinan yang efektif, jika anda merubah sebuah peranan, maka item-item yang diberikan peranan ini, perijinannya juga akan ikut berubah.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Di sini anda dapat memberikan perijinan forum kepada pengguna.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Di sini anda dapat memberikan perijinan global kepada pengguna - perijinan pengguna, perijinan moderator global dan perijinan administrator. Perijinan pengguna mengikutsertakan kemampuan seperti penggunaan avatar, mengirim pesan pribadi, dan sebagainya; perijinan moderator global seperti menyetujui post, mengatur topik, mengatur larangan, dan sebagainya dan terakhir perijinan administrator seperti mengubah perijinan, menentukan  tambahan BBCode, mengatur forum dan sebagainya. To alter these settings for large numbers of users the Group permissions system is the preferred method. Perijinan pengguna seharusnya jarang dilakukan, cara yang lebih baik adalah dengan mengelompokkna pengguna dalam suatu grup dan memberikan perijinan grup tersebut.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Di sini anda dapat melihat perijinan efektif administrasi yang diberikan kepada pengguna/grup.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Di sini anda dapat melihat perijinan moderasi global yang diberikan kepada pengguna/grup yang dipilih.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Di sini anda dapat melihat perijinan forum yang diberikan kepada pengguna/grup dan forum.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Di sini anda dapat melihat perijinan forum moderasi yang diberikan kepada pengguna/grup dan forum.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Di sini anda dapat melihat perijinan efektif pengguna yang diberikan kepada pengguna/grup.',

	'ADD_GROUPS'				=> 'Tambahkan grup',
	'ADD_PERMISSIONS'			=> 'Tambahkan perijinan',
	'ADD_USERS'					=> 'Tambahkan pengguna',
	'ADVANCED_PERMISSIONS'		=> 'Perijinan Lanjutan',
	'ALL_GROUPS'				=> 'Pilih semua grup',
	'ALL_NEVER'					=> 'Semua <samp>JANGAN</samp>',
	'ALL_NO'					=> 'Semua <samp>TIDAK</samp>',
	'ALL_USERS'					=> 'Pilih semua pengguna',
	'ALL_YES'					=> 'Semua <samp>YA</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Terapkan semua perijinan',
	'APPLY_PERMISSIONS'			=> 'Terapkan perijinan',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Perijinan dan peran ditentukan untuk item ini akan akan selalu diterapkan ke item ini dan semua item yang dicek.',
	'AUTH_UPDATED'				=> 'Perijinan telah diperbarui.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Apakah anda yakin ingin melanjutkan operasi ini? Mohon diperhatikan bahwa tindakan ini akan menimpa semua setiap perijinan yang sudah ada untuk target yang terpilih.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Forum sumber yang anda ingin salin perijinannya dari.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Forum tujuan yang anda ingin salin perijinannya ke.',
	'COPY_PERMISSIONS_FROM'					=> 'Salin perijinan dari',
	'COPY_PERMISSIONS_TO'					=> 'Pergunakan perijinan ke',

	'CREATE_ROLE'				=> 'Ciptakan peranan',
	'CREATE_ROLE_FROM'			=> 'Gunakan pengaturan dari…',
	'CUSTOM'					=> 'Custom…',

	'DEFAULT'					=> 'Default',
	'DELETE_ROLE'				=> 'Hapus peranan',
	'DELETE_ROLE_CONFIRM'		=> 'Apakah anda yakin ingin menyingkirkan peranan ini? Item-item yang memilik peranan ini <strong>tidak</strong> akan kehilangan pengaturan perijinannya.',
	'DISPLAY_ROLE_ITEMS'		=> 'Lihat item menggunakan peranan ini',

	'EDIT_PERMISSIONS'			=> 'Ubah perijinan',
	'EDIT_ROLE'					=> 'Ubah peranan',

	'GROUPS_NOT_ASSIGNED'		=> 'Tidak ada grup yang diberikan kepada grup ini',

	'LOOK_UP_GROUP'				=> 'Cari grup pengguna',
	'LOOK_UP_USER'				=> 'Cari pengguna',

	'MANAGE_GROUPS'		=> 'Atur grup',
	'MANAGE_USERS'		=> 'Atur pengguna',

	'NO_AUTH_SETTING_FOUND'		=> 'Pengaturan perijinan belum ditentukan.',
	'NO_ROLE_ASSIGNED'			=> 'Tidak ada peranan yang diberikan…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Mengubah pengaturan ini tidak akan mengubah perijinan. Jika anda ingin menyingkirkan atau tidak membuat perijinan anda harus menggunakan link “<samp>TIDAK</samp> Semua”.',
	'NO_ROLE_AVAILABLE'			=> 'Tidak ada peranan yang tersedia',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Silahkan berikan nama peranan tersebut.',
	'NO_ROLE_SELECTED'			=> 'Peranan tidak dapat ditemukan.',
	'NO_USER_GROUP_SELECTED'	=> 'Anda belum memilih pengguna ataupun grup.',

	'ONLY_FORUM_DEFINED'	=> 'Anda hanya menentukan forum pada pilihan anda. Silahkan juga pilih paling tidak satu pengguna ataupun grup.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Perijinan dan peranan juga akan diterapkan pada semua objek yang dipilih',
	'PLUS_SUBFORUMS'				=> '+Subforum',

	'REMOVE_PERMISSIONS'			=> 'Singkirkan perijinan',
	'REMOVE_ROLE'					=> 'Singkirkan peranan',
	'RESULTING_PERMISSION'			=> 'Hasil perijinan',
	'ROLE'							=> 'Peranan',
	'ROLE_ADD_SUCCESS'				=> 'Peranan telah berhasil ditambahkan.',
	'ROLE_ASSIGNED_TO'				=> 'Pengguna/grup diserahkan ke %s',
	'ROLE_DELETED'					=> 'Peranan berhasil disingkirkan.',
	'ROLE_DESCRIPTION'				=> 'Keterangan peran',

	'ROLE_ADMIN_FORUM'			=> 'Admin Forum',
	'ROLE_ADMIN_FULL'			=> 'Admin Penuh',
	'ROLE_ADMIN_STANDARD'		=> 'Admin Standar',
	'ROLE_ADMIN_USERGROUP'		=> 'Admin Pengguna dan Grup',
	'ROLE_FORUM_BOT'			=> 'Akses Bot',
	'ROLE_FORUM_FULL'			=> 'Akses Penuh',
	'ROLE_FORUM_LIMITED'		=> 'Akses Terbatas',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Akses Terbatas + Pemungutan Suara',
	'ROLE_FORUM_NOACCESS'		=> 'Tidak ada akses',
	'ROLE_FORUM_ONQUEUE'		=> 'Pada Antrian Moderasi',
	'ROLE_FORUM_POLLS'			=> 'Akses Standart + Pemungutan Suara',
	'ROLE_FORUM_READONLY'		=> 'Hanya Akses Baca',
	'ROLE_FORUM_STANDARD'		=> 'Akses Standar',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Pengguna Baru Terdaftar',
	'ROLE_MOD_FULL'				=> 'Moderator Penuh',
	'ROLE_MOD_QUEUE'			=> 'Moderator Antrian',
	'ROLE_MOD_SIMPLE'			=> 'Moderator Sederhana',
	'ROLE_MOD_STANDARD'			=> 'Moderator Standar',
	'ROLE_USER_FULL'			=> 'Semua Fitur',
	'ROLE_USER_LIMITED'			=> 'Fitur Terbatas',
	'ROLE_USER_NOAVATAR'		=> 'Tidak Ada Avatar',
	'ROLE_USER_NOPM'			=> 'Tidak Ada Pesan Pribadi ',
	'ROLE_USER_STANDARD'		=> 'Fitur Standar',
	'ROLE_USER_NEW_MEMBER'		=> 'Pengguna Baru Terdartar',


	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Bisa mengakses pengaturan forum dan perijinan forum.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Memiliki akses ke semua fungsis administrasi dari halaman ini.<br />Tidak disarankan.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Memiliki akses hampir ke semua fitur administrasi tetapi tidak menggunakan alat-alat yang berhubungan dengan sistem.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Mampu mengatur grup dan pengguna: Dapat mengubah perijinan, pengaturan, mengatur larangan, dan mengatur ranking.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Peran ini disarankan untuk bot dan spider.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Bisa menggunkan semua fitur forum, termasuk membuat post pengumuman dan sticky. Juga mampu untuk mengabaikan batas flood.<br />Tidak disarankan untuk pengguna normal.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Bisa menggunakan beberapa fitur forum, tetapi tidak dapat melampirkan file ataupun menggunkan ikon post.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Seperti halnya Akses Terbatas, tetapi bisa membuat pemungutan suara.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Tidak bisa melihat ataupun mengakses forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Bisa menggunakan kebanyakan fitur forum termasuk lampiran, tetapi post dan topik harus disetujui oleh seorang moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Seperti Akses Standar tetapi juga bisa membuat pemungutan suara.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Bisa membaca forum, tetapi tidak bisa membuar topik ataupun membalas post.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Bisa menggunakan kebanyakan fitur forum termasuk lampiran dan menghapus topik sendiri, tetapi tidak dapat menutup topiknya sendiri, dan tidak dapat membuat pemungutan suara.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Sebuah peran untuk anggota spesial dari grup pengguna baru terdaftar; <samp>TIDAK AKAN</samp> memiliki perijinan fitur pengunci untuk pengguna baru.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Bisa menggunakan semua fitur moderasi, termasuk larangan.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Bisa menggunakan Antrian Moderasi untuk mensahkan dan mengubah post, namun hanya itu saja dan tidak ada yang lain.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Hanya bisa menggunakan alat-alat dasar topik. Tidak dapat mengirimkan peringatan atau menggunakan antrian moderasi.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Bisa menggunakan kebanyakan alat-alat moderasi, tetapi tidak dapat melarang pengguna ataupun mengubah pengarang post.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Bisa menggunakan semua fitur forum yang tersedia untuk pengguna, termasuk mengubah nama pengguna ataupun mengabaikan batas flood.<br />Tidak disarankan.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Bisa mengakses beberap fitur pengguna. Lampiran, e-mail, ataupun pesan singkat tidak diijinkan.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Memiliki sekumpulan fitur-fitur terbatas dan tidak diijinkan untuk menggunakan fitur avatar.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Memiliki sekumpulan fitur-fitur terbatas dan tidak diijinkan untuk menggunakan perpesanan pribadi.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Bisa mengakses hampir semua fitur pengguna. Tidak bisa mengganti nama pengguna ataupun mengabaikan batas flood, sebagai contohnya.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Sebuah peran untuk anggota spesial dari grup pengguna baru terdaftar; <samp>TIDAK AKAN</samp> memiliki perijinan fitur pengunci untuk pengguna baru.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Anda dapat memasukkan penjelasan singkat mengenai peranan apa yang dilakukan ataupun kegunaan dari peran tersebut. Teks yang anda berikan di sini akan ditampilkan di halaman perijinan juga.',
	'ROLE_DESCRIPTION_LONG'			=> 'Karakter keterangan peran terlalu panjang, silahkan batasi sampai 4000 karakter.',
	'ROLE_DETAILS'					=> 'Keterangan peran',
	'ROLE_EDIT_SUCCESS'				=> 'Peran telah berhasil diubah.',
	'ROLE_NAME'						=> 'Nama peran',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Sebuah nama peran <strong>%s</strong> sudah ada untuk tipe perijinan yang ditentukan.',
	'ROLE_NOT_ASSIGNED'				=> 'Peranan belum diberikan.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Forum yang dipilih tidak ada.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Grup yang dipilih tidak ada.',
	'SELECTED_USER_NOT_EXIST'		=> 'Pengguna yang dipilih tidak ada.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Forum yang anda pilih di sini akan mengikutsertakan semua subforum ke dalam pilihan.',
	'SELECT_ROLE'					=> 'Pilih peran…',
	'SELECT_TYPE'					=> 'Pilih tipe',
	'SET_PERMISSIONS'				=> 'Buat perijinan',
	'SET_ROLE_PERMISSIONS'			=> 'Buat peran perijinan',
	'SET_USERS_PERMISSIONS'			=> 'Buat perijinan pengguna',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Buat perijinan forum pengguna',

	'TRACE_DEFAULT'					=> 'Secara defaultnya setiap perijinan adalah <samp>TIDAK</samp> (unset). Sehingga perijinan tersebut dapat dikesampingkan oleh pengaturan yang lain.',
	'TRACE_FOR'						=> 'Lacak',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Perijinan grup ini dibuat menjadi <samp>JANGAN</samp> seperti total hasil sehingga hasil yang lama tetap tersimpan.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Perijinan grup untuk forum ini dibuat menjadi <samp>JANGAN</samp> seperti total hasil sehingga hasil yang lama tetap tersimpan.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Perijinan grup ini dibuat menjadi <samp>JANGAN</samp> yang akan menjadi nilai total baru karena belum dibuat (buat menjadi <samp>TIDAK</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Perijinan grup untuk forum ini dibuat menjadi <samp>JANGAN</samp> yang akan menjadi nilai total baru karena belum dibuat (buat menjadi <samp>TIDAK</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Perijinan grup ini dibuat menjadi <samp>JANGAN</samp> yang akan menuliskan ulang total <samp>YA</samp> menjadi <samp>JANGAN</samp> untuk pengguna ini.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Perijinan grup untuk forum ini dibuat menjadi <samp>JANGAN</samp> yang akan menuliskan ulang total <samp>YA</samp> menjadi <samp>JANGAN</samp> untuk pengguna ini.',
	'TRACE_GROUP_NO'				=> 'Perijinannya adalah <samp>TIDAK</samp> untuk grup ini sehingga nilai total yang lama masih tersimpan.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Perijinannya adalah <samp>TIDAK</samp> untuk grup dalam forum ini sehingga nilai total yang lama masih tersimpan.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Perijinan grup ini dibuat menjadi <samp>YA</samp> tetapi <samp>JANGAN</samp> dapat dituliskan ulang.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Perijinan grup utnuk forum ini dibuat menjadi <samp>YA</samp> tetapi totalnya <samp>JANGAN</samp> dapat dituliskan ulang.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Perijinan grup ini dibuat menjadi <samp>YA</samp> yang menjadi nilai total baru karena nilainya belum dibuat (buat menjadi <samp>TIDAK</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Perijinan grup untuk forum ini dibuat menjadi <samp>YA</samp> yang menjadi nilai total baru karena nilainya belum dibuat (buat menjadi <samp>TIDAK</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Perijinan grup ini dibuat menjadi <samp>YA</samp> dan perijinan total sudah dibuat menjadi <samp>YA</samp>, sehingga hasil totalnya tersimpan.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Perijinan grup untuk forum ini dibuat menjadi <samp>YA</samp> dan perijinan total sudah dibuat menjadi <samp>YA</samp>, sehingga hasil totalnya tersimpan.',
	'TRACE_PERMISSION'				=> 'Lacak perijinan - %s',
	'TRACE_RESULT'					=> 'Lacak hasil',
	'TRACE_SETTING'					=> 'Lacak pengaturan',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Perijinan pengguna forum mandiri mengevaluasikan ke <samp>YA</samp> tetapi perijinan totalnya seudah dibuat menjadi <samp>YA</samp>, sehingga hasil totalnya masih tersimpan. %sLacak perijinan global%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Perijinan pengguna forum mandiri mengevaluasikan ke <samp>YA</samp> yang akan menulisi hasil lokal sekarang <samp>NEVER</samp>. %sLacak perijinan global%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Perijinan pengguna forum mandiri mengevaluasikan ke <samp>JANGAN</samp> yang tidak akan mempengaruhi perijinan lokal. %sLacak perijinan global%s',

	'TRACE_USER_FOUNDER'					=> 'Pengguna memiliki kumpulan tipe pendiri, oleh karena itu perijinan admin dibuat menjadi <samp>YA</samp> secara defaultnya.',
	'TRACE_USER_KEPT'						=> 'Perijinan pengguna adalah <samp>TIDAK</samp> sehingga nilai hasil total yang lama tersimpan.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Perijinan pengguna untuk forum ini adalah <samp>TIDAK</samp> sehingga nilai hasil total yang lama tersimpan.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Perijinan pengguna dibuat menjadi <samp>JANGAN</samp> dan nilai totalnya dibuat menjadi <samp>JANGAN</samp>, sehingga tidak ada yang diubah.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Perijinan pengguna untuk forum ini dibuat menjadi <samp>JANGAN</samp> dan nilai totalnya dibuat menjadi <samp>JANGAN</samp>, sehingga tidak ada yang diubah.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Perijinan pengguna ibuat menjadi <samp>JANGAN</samp> yang menjadi nilai total karena dibuat menjadi TIDAK.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Perijinan pengguna untuk forum ini dibuat menjadi <samp>JANGAN</samp> yang menjadi nilai total karena dibuat menjadi TIDAK.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Perijinan pengguna dibuat menjadi <samp>JANGAN</samp> dan akan menulisi data sebelumnya <samp>YA</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Perijinan pengguna untuk forum ini dibuat menjadi <samp>JANGAN</samp> dan akan menulisi data sebelumnya <samp>YA</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Perijinan pengguna adalah <samp>TIDAK</samp> dan nilai totalnya dibuat menjadi TIDAK sehingga defaultnya menjadi <samp>JANGAN</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Perijinan pengguna untuk forum ini adalah <samp>TIDAK</samp> dan nilai totalnya dibuat menjadi TIDAK sehingga defaultnya menjadi <samp>JANGAN</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Perijinan pengguna dibuat menjadi <samp>YA</samp> tetapi totalnya <samp>JANGAN</samp> tidak dapat ditulisi.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Perijinan pengguna untuk forum ini dibuat menjadi <samp>YA</samp> tetapi totalnya <samp>JANGAN</samp> tidak dapat ditulisi.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Perijinan pengguna dibuat menjadi <samp>YA</samp> yang menjadi nilai total karena dibuat menjadi <samp>TIDAK</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Perijinan pengguna untuk forum ini dibuat menjadi <samp>YA</samp> yang menjadi nilai total karena dibuat menjadi <samp>TIDAK</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Perijinan pengguna dibuat mnjadi <samp>YA</samp> dan nilai totalnya dibaut menjadi <samp>YA</samp>, sehingga tidak ada yang berubah.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Perijinan pengguna untuk forum ini dibuat menjadi <samp>YA</samp> dan nilai totalnya dibaut menjadi <samp>YA</samp>, sehingga tidak ada yang berubah.',
	'TRACE_WHO'								=> 'Siapa',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'Tidak ada pengguna yang dibarikan peranan ini',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'adalah anggota dari grup yang tidak didefenisikan berikut ini',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'adalah anggota dari grup yang tidak didefenisikan berikut ini',

	'VIEW_ASSIGNED_ITEMS'	=> 'Lihat item yang diberikan',
	'VIEW_LOCAL_PERMS'		=> 'Perijinan-perijinan lokal',
	'VIEW_GLOBAL_PERMS'		=> 'Perijinan-perijinan global',
	'VIEW_PERMISSIONS'		=> 'Lihat perijinan',

	'WRONG_PERMISSION_TYPE'				=> 'Tipe perijian yang dipilih salah.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Format pengaturan perijinan salah, phpBB tidak dapat memprosesnya dengan baik.',
));

?>