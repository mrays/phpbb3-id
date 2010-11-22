<?php
/**
*
* acp_styles [Bahasa Indonesia]
*
* @package language
* @version $Id: styles.php 2010 Sastra Manurung zourbuth@gmail.com
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'Imageset berisikan semua tombol, forum, folder dsb serta gambar spesifik lainnya yang digunakan oleh halaman. Di sini anda dapat mengubah, mengekspor, dan menghapus imageset yang sudah ada serta mengimpor dan mengaktifkan imageset yang baru.',
	'ACP_STYLES_EXPLAIN'	=> 'Di sini anda dapat mengatur semua gaya-gaya yang tersedia pada halaman anda. Sebuah gaya terdiri dari template, thema dan imageset. Anda bisa mengubah gaya-gaya yang sudah ada, menghapus, menonaktifkan, mengaktifkan, membuat atapun mengimport yang baru. Anda juga bisa melihat gaya tersebut dengan fungsi priview. Gaya yang digunakan sekarang ini diperlihatkan dengan tanda bintang (*). Di halaman ini juga ditampilkan total dari jumlah pengguna untuk setiap gaya, dan mohon dicatat bahwa pengesampingan gaya pengguna tidak akan direfleksikan di sini.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Sebuah kumpulan template berisikan semua markup yang digunakan untuk menghasilkan tampilan untuk halaman anda. Di sini anda dapat mengubah kumpulan template, menghapus, mengekspor, mengimpor, dan melihat tampilan template. Anda juga bisa mengubah kode template yang digunakan untuk menghasilkan BBCode.',
	'ACP_THEMES_EXPLAIN'	=> 'Di sini anda dapat membuat, menginstal, mengubah, menghapus dan mengekspot thema. Thema adalah kombinasi dari warna dan gambar yang digunakan pada template anda untuk menentukan tampilan dasar dari halaman anda. Batas pilihan yang tersedia tergantung dari konfigurasi server dan instalasi phpBB anda, silahkan lihat panduan manual untuk informasi lebi lanjut. Mohon dicatat bahwa pada saat menciptakan thema yang baru maka thema yang digunakan sekarang merupakan sebuah pilihan dasar.',
	'ADD_IMAGESET'			=> 'Buat imageset',
	'ADD_IMAGESET_EXPLAIN'	=> 'Di sini anda dapat membuat sebuah imageset yang baru, namun tergantung dari konfigurasi server dan perijinan file maka anda akan memiliki pilihan-pilihan tambahan di sini. Sebagai contoh, anda bisa menjadikan imageset ini sebagai pilihan dasar dari imageset yang sudah ada sebelumnya. Anda juga dapat mengupload ataupun mengimpor (dari direktori penyimpanan) arsip imageset. Jika anda mengupload atau mengimpor sebuah arsip, maka nama imageset tersebut bisa menjadi nama arsipnya (untuk melakukan ini, biarkan nama imageset tersebut kosong).',
	'ADD_STYLE'				=> 'Buat gaya',
	'ADD_STYLE_EXPLAIN'		=> 'Di sini anda dapat membuat gaya yang baru, namun tergantung dari konfigurasi server dan perijinan file maka anda akan memiliki pilihan-pilihan tambahan di sini. Sebagai contoh, anda dapat menjadikan gaya ini sebagai gaya dasar dari gaya yang sudah ada. Anda juga dapat mengupload ataupun mengimpor (dari direktori penyimpanan) arsip gaya. Jika anda mengupload atau mengimpor sebuah arsip maka nama gaya tersebut akan ditentukan secara otomatis.',
	'ADD_TEMPLATE'			=> 'Buat template',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Di sini anda dapat membuat sebuah template yang baru, namun tergantung dari konfigurasi server dan perijinan file maka anda akan memiliki pilihan-pilihan tambahan di sini. Sebagai contoh, anda dapat menjadikan template ini sebagai tempalate dasar dari template yang sudah ada. Anda juga dapat mengupload ataupun mengimpor (dari direktori penyimpanan) arsip template. Jika anda mengupload atau mengimpor sebuah arsip, maka nama template tersebut bisa menjadi nama arsipnya (untuk melakukan ini, biarkan nama template tersebut kosong).',
	'ADD_THEME'				=> 'Buat thema',
	'ADD_THEME_EXPLAIN'		=> 'Di sini anda dapat membuat sebuah thema yang baru, namun tergantung dari konfigurasi server dan perijinan file maka anda akan memiliki pilihan-pilihan tambahan di sini. Sebagai contoh, anda dapat menjadikan thema ini sebagai thema dasar dari thema yang sudah ada. Anda juga dapat mengupload ataupun mengimpor (dari direktori penyimpanan) arsip thema. Jika anda mengupload atau mengimpor sebuah arsip, maka nama thema tersebut bisa menjadi nama arsipnya (untuk melakukan ini, biarkan nama thema tersebut kosong).',
	'ARCHIVE_FORMAT'		=> 'Tipe file arsip',
	'AUTOMATIC_EXPLAIN'		=> 'Biarkan kosong untuk deteksi otomatis.',

	'BACKGROUND'			=> 'Latar belakang',
	'BACKGROUND_COLOUR'		=> 'Warna latar belakan',
	'BACKGROUND_IMAGE'		=> 'Gambar latar belang',
	'BACKGROUND_REPEAT'		=> 'Pengulangan latar belakang',
	'BOLD'					=> 'Tebal',

	'CACHE'							=> 'Cache',
	'CACHE_CACHED'					=> 'Dicache',
	'CACHE_FILENAME'				=> 'File template',
	'CACHE_FILESIZE'				=> 'Ukuran file',
	'CACHE_MODIFIED'				=> 'Dimodifikasi',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Apakah anda yakin ingin melakukan refresh untuk semua data imageset? Pengaturan dari imageset akan menulis ulang semua modifikasi ke imageset tersebut yang telah dibawa dengan editor imageset.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Apakah anda yakin ingin membersihkan semua versi cache dari file template anda?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Apakah anda yakin ingin melakukan refresh untuk semua data template dalam database yang mengandung isi dari file template pada file sistem? Hal ini akan menulis ulang semua modifikasi yang telah dibawa editor template pada saat template disimpan di database.',
	'CONFIRM_THEME_REFRESH'			=> 'Apakah anda yakin ingin melakukan refresh untuk semua data thema dalam database yang mengandung isi dari file thema pada file sistem? Hal ini akan menulis ulang semua modifikasi yang telah dibawa editor thema pada saat thema disimpan di database.',
	'COPYRIGHT'						=> 'Hak cipta',
	'CREATE_IMAGESET'				=> 'Buat imageset baru',
	'CREATE_STYLE'					=> 'Buat gaya baru',
	'CREATE_TEMPLATE'				=> 'Buat kumpulan template baru',
	'CREATE_THEME'					=> 'Buat thema baru',
	'CURRENT_IMAGE'					=> 'Gambar sekarang',

	'DEACTIVATE_DEFAULT'		=> 'Anda tidak dapat menonaktifkan gaya ini.',
	'DELETE_FROM_FS'			=> 'Hapus dari sistem file',
	'DELETE_IMAGESET'			=> 'Hapus imageset',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Di sini anda dapat menyingkirkan imageset yang dipilih dari database. Selain itu, jika anda memiliki perijinan maka anda dapat memilih menyingkirkan kumpulan dari sistem file. Mohon diingat bahwa tidak ada kemampuan mengembalikan tindakan tersebut. Pada saat imageset dihapus, maka akan hilang secara permanen. Sangat disarankan agar anda mengekspornya terlebih dahulu untuk penggunaan dimasa yang akan datang.',
	'DELETE_STYLE'				=> 'Hapus gaya',
	'DELETE_STYLE_EXPLAIN'		=> 'Di sini anda dapat menyingkirkan yang dipilih. Anda tidak dapat menyingkirkan semua elemen gaya dari sini. Penyingkiran atau penghapusan ini harus dilakukan secara manual melalui formulir mereka masing-masing. Berhati-hatilah dengan penghapusan tersebut karena tidak fasilitas untuk mengembalikannya.',
	'DELETE_TEMPLATE'			=> 'Hapus template',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Di sini anda dapat menyingkirkan template yang dipilih dari database. Selain itu, jika anda memiliki perijinan anda dapat memilih untuk menyingkirkannya dari sistem file. Please note that there is no undo capability. Mohon dicatat bahwa tidak ada fasilitas untuk mengembalikan data tersebut. Pada saat template dihapus maka template tersebut akan hilang secara permanen. Sangat disarankan agar anda mengekspor template tersebut terlebih dahulu untuk penggunaan dimasa yang akan datang.',
	'DELETE_THEME'				=> 'Hapus thema',
	'DELETE_THEME_EXPLAIN'		=> 'Di sini anda dapat menyingkirkan thema yang dipilih dari database. Selain itu, jika anda memiliki perijinan anda dapat memilih untuk menyingkirkannya dari sistem file. Mohon dicatat bahwa tidak ada fasilitas untuk mengembalikan data tersebut. Pada saat thema dihapus maka thema tersebut akan hilang secara permanen. Sangat disarankan agar anda mengekspor thema tersebut terlebih dahulu untuk penggunaan dimasa yang akan datang.',
	'DETAILS'					=> 'Keterangan',
	'DIMENSIONS_EXPLAIN'		=> 'Memilih ya berarti akan mengikutsertakan parameter panjang/lebar.',


	'EDIT_DETAILS_IMAGESET'				=> 'Ubah keterangan imageset',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Di sini anda dapat mengubah keterangan imageset tertentu sesuai dengan namanya.',
	'EDIT_DETAILS_STYLE'				=> 'Ubah gaya',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Dengan menggunakan formulir di bawah ini anda dapat mengubah gaya yang sudah ada. Anda bisa melakukan perubahan terhadap kombinasi template, thema dan imageset yang menentukan gayanya sendiri. Anda juga dapat membuatnya sebagai gaya default.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Ubah keterangan template',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Di sini anda dapat mengubah keterangan template tertentu sesuai dengan namanya. Anda juga memiliki pilihan untuk mengganti tempat penyimpanan stylesheet dari sistem file ke database dan sebaliknya. Pilihan ini tergantung atas konfigurasi phpBB anda dan apakah kumpulan template tersebut dapat ditulis oleh web server.',
	'EDIT_DETAILS_THEME'				=> 'Ubah keterangan thema',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Di sini anda dapat mengubah keterangan thema tertentu sesuai dengan namanya. Anda juga memiliki pilihan untuk mengganti tempat penyimpanan stylesheet dari sistem file ke database dan sebaliknya. Pilihan ini tergantung atas konfigurasi phpBB anda dan apakah kumpulan template tersebut dapat ditulis oleh web server.',
	'EDIT_IMAGESET'						=> 'Ubah imageset',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Di sini anda dapat mengubah gambar secara individu yang menentukan imageset. Anda juga dapat menentukan dimensi dari gambar tersebut. Dimensi tersebut adalah opsional, pengubahannya bisa menimbulkan rendering pada beberapa browser. Dengan tidak melakukan perubahan maka anda sedikit mengurangi ukuran database.',
	'EDIT_TEMPLATE'						=> 'Ubah template',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Di sini anda dapat mengubah kumpulan template secara langsung. Mohon diingat bahwa pengubah ini adalah permanen dan tidak dapat dikembalikan setelah dilakukan. Jika PHP dapat menulis ke file-file template di direktori gaya anda, maka semua pengubahan yang dilakukan di sini akan ditulis secara langsung ke file-file tersebut. Jika PHP tidak dapat menulis ke file-file tersebut maka file-file tersebut akan disalin ke database dan semua pengubahan hanya akan direfleksikan di sana. Mohon berhati-hati pada saat melakukan pengubahan kumpulan template anda, ingatlah untuk menutup semua penggantian syarat variabel {XXXX} and pernyataan-pernyataan kondisional.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'File template tersebut tidak dapat ditulis sehingga sekarang file template yang dimodifikasi tersebut disimpan ke dalam database.',
	'EDIT_THEME'						=> 'Ubah thema',
	'EDIT_THEME_EXPLAIN'				=> 'Di sini anda dapat mengubah thema yang dipilih, mengubah warna, gambar-gambar, dan lain sebagainya.',
	'EDIT_THEME_STORED_DB'				=> 'File stylesheet tersebut tidak dapat ditulis, sehingga file yang mengandung midifikasi tersebut akan disimpan ke database.',
	'EDIT_THEME_STORE_PARSED'			=> 'Thema tersebut membutuhkan stylesheet yang terpisah. Hal ini hanya memungkinkan jika tersimpan di database.',
	'EDITOR_DISABLED'					=> 'Editor template tidak aktif.',
	'EXPORT'							=> 'Ekspor',

	'FOREGROUND'			=> 'Foreground',
	'FONT_COLOUR'			=> 'Warna huruf',
	'FONT_FACE'				=> 'Jenis huruf',
	'FONT_FACE_EXPLAIN'		=> 'Anda dapat menentukan banyak huruf yang dipisahkan dengan tanda koma. Jika pengguna tidak memiliki huruf pertama yang diinstal, maka huruf pertama yang bisa digunakan akan dipilih.',
	'FONT_SIZE'				=> 'Ukuran huruf',

	'GLOBAL_IMAGES'			=> 'Global',

	'HIDE_CSS'				=> 'Sembunyikan CSS',

	'IMAGE_WIDTH'				=> 'Lebar gambar',
	'IMAGE_HEIGHT'				=> 'Tinggi gambar',
	'IMAGE'						=> 'Gambar',
	'IMAGE_NAME'				=> 'Nama gambar',
	'IMAGE_PARAMETER'			=> 'Parameter',
	'IMAGE_VALUE'				=> 'Nilai',
	'IMAGESET_ADDED'			=> 'Imageset yang baru ditambahkan sistem file.',
	'IMAGESET_ADDED_DB'			=> 'Imageset yang baru ditambahkan kedalam database.',
	'IMAGESET_DELETED'			=> 'Imageset berhasil dihapus.',
	'IMAGESET_DELETED_FS'		=> 'Imageset disingkirkan dari database, tetapi ada beberapa file yang tertinggal di sitem file.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Keterangan imageset berhasil diperbarui.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Silahkan pilih sebuah metoda arsip.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Hak cipta tidak bisa melebihi dari 60 karakter.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Nama imageset hanya bisa mengandung karakter alphanumerik, -, +, _ dan spasi.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Imageset dengan nama tersebut sudah ada.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Nama imageset tidak bisa melebihi dari 30 karakter.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Arsip yang anda tentukan tidak mengandung imageset yang benar.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Anda harus memeberikan sebuah nama untuk imageset ini.',
	'IMAGESET_EXPORT'			=> 'Ekspor imageset',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Di sini anda dapat mengekspor sebuah imageset dalam bentuk arsip. Arsip ini This archive will contain all the data necessary to install the set of images on another board. You may select whether to download the file directly or to place it in your store folder for download later or via FTP.',
	'IMAGESET_EXPORTED'			=> 'Imageset berhasil di ekspor dan disimpan di %s.',
	'IMAGESET_NAME'				=> 'Nama imageset',
	'IMAGESET_REFRESHED'		=> 'Imageset berhasil direfresh.',
	'IMAGESET_UPDATED'			=> 'Imageset berhasil diperbarui.',
	'ITALIC'					=> 'Huruf miring',

	'IMG_CAT_BUTTONS'		=> 'Tombol',
	'IMG_CAT_CUSTOM'		=> 'Gambar',
	'IMG_CAT_FOLDERS'		=> 'Ikon topik',
	'IMG_CAT_FORUMS'		=> 'Ikon forum',
	'IMG_CAT_ICONS'			=> 'Ikon general',
	'IMG_CAT_LOGOS'			=> 'Logo',
	'IMG_CAT_POLLS'			=> 'Gambar polling',
	'IMG_CAT_UI'			=> 'Elemen tampilan pengguna general',
	'IMG_CAT_USER'			=> 'Gambar tambahan',

	'IMG_SITE_LOGO'			=> 'Logo utama',
	'IMG_UPLOAD_BAR'		=> 'Upload progress bar',
	'IMG_POLL_LEFT'			=> 'Gambar kiri pemungutan suara',
	'IMG_POLL_CENTER'		=> 'Pusat pemungutan suara',
	'IMG_POLL_RIGHT'		=> 'Gambar kanan pemungutan suara',
	'IMG_ICON_FRIEND'		=> 'Tambahkan sebagi teman',
	'IMG_ICON_FOE'			=> 'Tambahkan sebagai lawan',

	'IMG_FORUM_LINK'			=> 'Link forum',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Forum dikunci',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subforum',
	'IMG_FORUM_UNREAD'			=> 'Post baru forum',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Post baru forum dikunci',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Post baru subforum',
	'IMG_SUBFORUM_READ'			=> 'Urutan subforum',
	'IMG_SUBFORUM_UNREAD'		=> 'Urutan post baru subforum',

	'IMG_TOPIC_MOVED'			=> 'Topik disingkirkan',

	'IMG_TOPIC_READ'				=> 'Topik',
	'IMG_TOPIC_READ_MINE'			=> 'Topik dipostkan ke',
	'IMG_TOPIC_READ_HOT'			=> 'Topik populer',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Topik populer dipostkan ke',
	'IMG_TOPIC_READ_LOCKED'			=> 'Topik dikunci',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Topik dikunci dipostkan ke',

	'IMG_TOPIC_UNREAD'				=> 'Topik post baru',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Topik dipostkan baru ',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Topik post baru populer',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Topik populer dipostkan baru',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Topik dikunci baru',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Topik dikunci dipostkan baru',

	'IMG_STICKY_READ'				=> 'Topik sticky',
	'IMG_STICKY_READ_MINE'			=> 'Topik sticky dipostkan ke',
	'IMG_STICKY_READ_LOCKED'		=> 'Topik sticky dikunci',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Topik sticky dikunci dipostkan ke',
	'IMG_STICKY_UNREAD'				=> 'Topik sticky post baru',
	'IMG_STICKY_UNREAD_MINE'		=> 'Topik sticky dipostkan ke baru',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Topik sticky dikunci post baru',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Topik sticky dikunci dipostkan ke baru',

	'IMG_ANNOUNCE_READ'					=> 'Pengumuman',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Pengumuman dipostkan ke',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Pengumuman dikunci',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Pengumuman dikunci dipostkan ke',
	'IMG_ANNOUNCE_UNREAD'				=> 'Pengumuman post baru',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Pengumuman di postkan ke baru',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Pengumuman dikunci post baru',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Pengumuman dikunci dipost baru',

	'IMG_GLOBAL_READ'					=> 'Global',
	'IMG_GLOBAL_READ_MINE'				=> 'Global dipostkan ke',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Global dikunci',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Global dikunci dipostkan ke',
	'IMG_GLOBAL_UNREAD'					=> 'Global post baru',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Global dipostkan baru',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Global dikunci post baru',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Global dikunci dipostkan baru',

	'IMG_PM_READ'		=> 'Baca pesan pribadi',
	'IMG_PM_UNREAD'		=> 'Pesan pribadi tak terbaca',

	'IMG_ICON_BACK_TOP'		=> 'Atas',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Kirim e-mail',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Kirim pesan',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Website',

	'IMG_ICON_POST_DELETE'			=> 'Hapus post',
	'IMG_ICON_POST_EDIT'			=> 'Ubah post',
	'IMG_ICON_POST_INFO'			=> 'Lihat keterangan post',
	'IMG_ICON_POST_QUOTE'			=> 'Kutip post post',
	'IMG_ICON_POST_REPORT'			=> 'Laporkan post',
	'IMG_ICON_POST_TARGET'			=> 'Post mini',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Post mini baru',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Lampiran',
	'IMG_ICON_TOPIC_LATEST'			=> 'Post terakhir',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Pesan terakhir tak terbaca',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Post dilaporkan',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Post tidak disetujui',

	'IMG_ICON_USER_ONLINE'		=> 'Pengguna online',
	'IMG_ICON_USER_OFFLINE'		=> 'Pengguna offline',
	'IMG_ICON_USER_PROFILE'		=> 'Tampilkan profil',
	'IMG_ICON_USER_SEARCH'		=> 'Cari post',
	'IMG_ICON_USER_WARN'		=> 'Peringati pengguna',

	'IMG_BUTTON_PM_FORWARD'		=> 'Alihkan pesan pribadi',
	'IMG_BUTTON_PM_NEW'			=> 'Pesan pribadi baru',
	'IMG_BUTTON_PM_REPLY'		=> 'Balas pesan pribadi',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Topik dikunci',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Topik baru',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Balas topik',

	'IMG_USER_ICON1'		=> 'Gambar yang ditentukan pengguna 1',
	'IMG_USER_ICON2'		=> 'Gambar yang ditentukan pengguna 2',
	'IMG_USER_ICON3'		=> 'Gambar yang ditentukan pengguna 3',
	'IMG_USER_ICON4'		=> 'Gambar yang ditentukan pengguna 4',
	'IMG_USER_ICON5'		=> 'Gambar yang ditentukan pengguna 5',
	'IMG_USER_ICON6'		=> 'Gambar yang ditentukan pengguna 6',
	'IMG_USER_ICON7'		=> 'Gambar yang ditentukan pengguna 7',
	'IMG_USER_ICON8'		=> 'Gambar yang ditentukan pengguna 8',
	'IMG_USER_ICON9'		=> 'Gambar yang ditentukan pengguna 9',
	'IMG_USER_ICON10'		=> 'Gambar yang ditentukan pengguna 10',

	'INCLUDE_DIMENSIONS'		=> 'Ikutkan dimensi',
	'INCLUDE_IMAGESET'			=> 'Ikutkan imageset',
	'INCLUDE_TEMPLATE'			=> 'Ikutkan template',
	'INCLUDE_THEME'				=> 'Ikutkan thema',
	'INHERITING_FROM'			=> 'berasal dari',
	'INSTALL_IMAGESET'			=> 'Instal imageset',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Di sini anda dapat menginstal imageset yang dipilih. Anda bisa mengubah keterangan tertentu jika anda kehendaki ataupun menggunakan default instalasi.',
	'INSTALL_STYLE'				=> 'Instal gaya',
	'INSTALL_STYLE_EXPLAIN'		=> 'Di sini anda dapat menginstal gaya baru dan gaya jika sesuai dengan elemen gaya. Jika anda sudah memiliki elemen gaya yang diinstal, maka tidak akan ditulis ulang lagi. Beberapa gaya membutukan elmemen yang sudah ada sebelumnya diinstal. Jika anda mencoba menginstall sebuah gaya namun tidak memiliki elemen yang dibutuhkan, maka anda akan diberitahukan.',
	'INSTALL_TEMPLATE'			=> 'Instal Template',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Di sini anda dapat menginstal tempalate baru. Anda akan memiliki banyak pilihan tergantung pada konfigurasi server anda.',
	'INSTALL_THEME'				=> 'Instal thema',
	'INSTALL_THEME_EXPLAIN'		=> 'Di sini anda dapat menginstal thema yang dipilih. Anda bisa mengubah keterangan-keterngan tertentu jika diinginkan atau hanya menggunakan instalasi defaultnya saja.',
	'INSTALLED_IMAGESET'		=> 'Imageset diinstal',
	'INSTALLED_STYLE'			=> 'Gaya diinstal',
	'INSTALLED_TEMPLATE'		=> 'Template diinstal',
	'INSTALLED_THEME'			=> 'Thema diinstal',

	'LINE_SPACING'				=> 'Jarak spasi',
	'LOCALISED_IMAGES'			=> 'Dilokalisasikan',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Pengaturan ini sudah tidak dapat diubah lagi.',


	'NO_CLASS'					=> 'Tidak dapat menemukan class di stylesheet.',
	'NO_IMAGESET'				=> 'Tidak dapat menemukan imageset di filesystem.',
	'NO_IMAGE'					=> 'Tidak ada gambar',
	'NO_IMAGE_ERROR'			=> 'Tidak dapat menemukan gambar di filesystem.',
	'NO_STYLE'					=> 'Tidak dapat menemukan gaya di filesystem.',
	'NO_TEMPLATE'				=> 'Tidak dapat menemukan template di filesystem.',
	'NO_THEME'					=> 'Tidak dapat menemukan di filesystem.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Tidak ada imageset yang diuninstal.',
	'NO_UNINSTALLED_STYLE'		=> 'Tidak ada gaya yang diuninstal.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Tidak ada tempalate yang diuninstal.',
	'NO_UNINSTALLED_THEME'		=> 'Tidak ada thema yang diuninstal.',
	'NO_UNIT'					=> 'Kosong',

	'ONLY_IMAGESET'			=> 'Ini adalah satu-satunya imageset yang tertinggal, anda tidak bisa menghapusnya.',
	'ONLY_STYLE'			=> 'Ini adalah satu-satunya gaya yang tertinggal, anda tidak bisa menghapusnya.',
	'ONLY_TEMPLATE'			=> 'Ini adalah satu-satunya template yang tertinggal, anda tidak bisa menghapusnya.',
	'ONLY_THEME'			=> 'Ini adalah satu-satunya thema yang tertinggal, anda tidak bisa menghapusnya.',
	'OPTIONAL_BASIS'		=> 'Optional basis',

	'REFRESH'					=> 'Refresh',
	'REPEAT_NO'					=> 'Kosong',
	'REPEAT_X'					=> 'Hanya horizontal',
	'REPEAT_Y'					=> 'Hanya vertical',
	'REPEAT_ALL'				=> 'Kedua arah',
	'REPLACE_IMAGESET'			=> 'Ganti imageset dengan',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Imageset ini akan menggantikan imageset yang anda hapus untuk semua gaya yang menggunakannya.',
	'REPLACE_STYLE'				=> 'Ganti gaya dengan',
	'REPLACE_STYLE_EXPLAIN'		=> 'Gaya ini akan menggantikan gaya yang sudah dihapus untuk anggota yang menggunakannya.',
	'REPLACE_TEMPLATE'			=> 'Ganti template dengan',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Template ini akan menggantikan template yang sudah anda hapus untuk semua gaya yang menggunakannya.',
	'REPLACE_THEME'				=> 'Gantikan thema dengan',
	'REPLACE_THEME_EXPLAIN'		=> 'Thema ini akan menggantikan thema yang telah anda hapus untuk semua gaya yang menggunakannya.',
	'REQUIRES_IMAGESET'			=> 'Gaya ini membutuhkan imageset %s untuk diinstal.',
	'REQUIRES_TEMPLATE'			=> 'Gaya ini membutuhkan template %s untuk diinstal.',
	'REQUIRES_THEME'			=> 'Gaya ini membutuhkan thema %s untuk diinstal.',

	'SELECT_IMAGE'				=> 'Pilih gambar',
	'SELECT_TEMPLATE'			=> 'Pilih file template',
	'SELECT_THEME'				=> 'Pilih file thema',
	'SELECTED_IMAGE'			=> 'Gambar yang dipilih',
	'SELECTED_IMAGESET'			=> 'Imageset yang dipilih',
	'SELECTED_TEMPLATE'			=> 'Template yang dipilih',
	'SELECTED_TEMPLATE_FILE'	=> 'File template yang dipilih',
	'SELECTED_THEME'			=> 'Thema yang dipilih',
	'SELECTED_THEME_FILE'		=> 'File thema yang dipilih',
	'STORE_DATABASE'			=> 'Database',
	'STORE_FILESYSTEM'			=> 'Filesystem',
	'STYLE_ACTIVATE'			=> 'Aktifkan',
	'STYLE_ACTIVE'				=> 'Aktif',
	'STYLE_ADDED'				=> 'Gaya berhasil ditambahkan.',
	'STYLE_DEACTIVATE'			=> 'Nonaktifkan',
	'STYLE_DEFAULT'				=> 'Jadikan gaya default',
	'STYLE_DELETED'				=> 'Gaya berhasil dihapus.',
	'STYLE_DETAILS_UPDATED'		=> 'Gaya berhasil diubah.',
	'STYLE_ERR_ARCHIVE'			=> 'Silahkan pilih metoda arsip.',
	'STYLE_ERR_COPY_LONG'		=> 'Hak cipta tidak boleh melebihi 60 karakter.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Paling sedikitnya anda harus memilih satu elemen gaya.',
	'STYLE_ERR_NAME_CHARS'		=> 'Nama gaya hanya bisa mengandung karakter alphanumerik, -, +, _ dan spasi.',
	'STYLE_ERR_NAME_EXIST'		=> 'Gaya dengan nama tersebut sudah ada.',
	'STYLE_ERR_NAME_LONG'		=> 'Nama gaya tidak boleh melebihi 30 karakter.',
	'STYLE_ERR_NO_IDS'			=> 'Anda harus memilih sebuah template, thema dan imageset untuk gaya ini.',
	'STYLE_ERR_NOT_STYLE'		=> 'File yang diimport ataupun diupload tidak mengandung arsip gaya yang benar.',
	'STYLE_ERR_STYLE_NAME'		=> 'Anda harus memberikan sebuah nama untuk gaya ini.',
	'STYLE_EXPORT'				=> 'Ekspor gaya',
	'STYLE_EXPORT_EXPLAIN'		=> 'Di sini anda dapat mengekspor gaya dalam bentuk arsip. Sebuah gaya tidak membutuhkan kandungan semua elemen gaya, paling sedikitnya harus satu elemen gaya. Sebagai contoh jika anda menciptakan thema dan imageset baru dari template yang sering digunakan, anda bisa dengan mudah mengekspor thema dan imageset tersebut tanpa mengikutsertakan templatenya. Anda bisa memilih apakah langsung mendownload file tersebut atau menyimpannya di folder untuk didownload nantinya atau melalui FTP.',
	'STYLE_EXPORTED'			=> 'Gaya berhasil diekspor dan disimpan %s.',
	'STYLE_IMAGESET'			=> 'Imageset',
	'STYLE_NAME'				=> 'Nama gaya',
	'STYLE_TEMPLATE'			=> 'Template',
	'STYLE_THEME'				=> 'Thema',
	'STYLE_USED_BY'				=> 'Digunakan oleh (termasuk robot)',

	'TEMPLATE_ADDED'			=> 'Kumpulan template ditambahkan dan disimpan ke filesystem.',
	'TEMPLATE_ADDED_DB'			=> 'Kumpulan template ditambahkan dan disimpan database.',
	'TEMPLATE_CACHE'			=> 'Cache template',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Secara default phpBB melakukan cache versi kompilasi pada templatenya. Ini mengurangi load pada server untuk setiap halaman yang dilihat dan bisa mengurangi waktu untuk menampilkan halaman. Di sini anda dapat melihat status cache untuk setiap file dan hapus file individ atau keseluruhannya.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Cache template berhasil dibersihkan.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Tidak ada template cache.',
	'TEMPLATE_DELETED'			=> 'Kumpulan template berhasil dihapus.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'Kumpulan template tidak bisa dihapus karena masih ada template lain yang menggunakan termplate tersebut:',
	'TEMPLATE_DELETED_FS'		=> 'Kumpulan template disingkirkan dari database, tetapi ada beberap file yang masih tertinggal di filesystem.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Keterangan template berhasil diperbarui.',
	'TEMPLATE_EDITOR'			=> 'Editor Template',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Tinggi editor tempalate',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Silahkan pilih metode arsip.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Direktori cache yang digunakan untuk menyimpan versi cache dari file template tidak dapat dibuka.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Hak cipta tidak bisa melebihi 60 karakter.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Nama template hanya bisa mengandung karakter alphanumerik, -, +, _ dan spasi.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Kumpulan template dengan nama tersebut sudah ada.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Nama template tidak bisa melebihi dari 30 karakter.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Arsip yang anda tentukan tidak mengandung kumpulan template yang benar.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Kumpulan template yang baru membutuhkan template %s untuk diinstal.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Anda harus memberikan sebuah nama untuk template tersebut.',
	'TEMPLATE_EXPORT'			=> 'Ekspor template',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Di sini anda dapat mengekspor sekumpulan template dalam bentuk arsip. Arsip ini akan mengandung semua file yang dibutuhkan untuk menginstal template tersebut di halaman lain. Anda bisa memilih apakah ingin didownload langsung atau menyimpannya di folder penyimpanan anda untuk didownload nantinya atau melalui FTP.',
	'TEMPLATE_EXPORTED'			=> 'Template berhasil diekspor dan disimpan di %s.',
	'TEMPLATE_FILE'				=> 'File template',
	'TEMPLATE_FILE_UPDATED'		=> 'File template berhasil diperbarui.',
	'TEMPLATE_INHERITS'			=> 'Kumpulan-kumpulan template ini berasal dari %s dan tidak bisa memiliki pengaturan tempat penyimpanan yang berbeda dari template atasannya',
	'TEMPLATE_LOCATION'			=> 'Simpan template di',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Gambar aka selelu disimpan di filesystem.',
	'TEMPLATE_NAME'				=> 'Nama template',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Tidak bisa menulis file templat %s. Silahkan periksa perijinan untuk direktori dan fil tersebut.',
	'TEMPLATE_REFRESHED'		=> 'Templat berhasil direfresh.',

	'THEME_ADDED'				=> 'Thema baru ditambahkan di filesystem.',
	'THEME_ADDED_DB'			=> 'Thema baru ditambahkan ke database.',
	'THEME_CLASS_ADDED'			=> 'Custom class berhasil ditambahkan.',
	'THEME_DELETED'				=> 'Thema berhasil dihapus.',
	'THEME_DELETED_FS'			=> 'Thema disingkirkan dari database tetapi file tinggal di filesystem.',
	'THEME_DETAILS_UPDATED'		=> 'Keterangan thema berhasil diperbarui.',
	'THEME_EDITOR'				=> 'Editor thema',
	'THEME_EDITOR_HEIGHT'		=> 'Tinggi editor thema',
	'THEME_ERR_ARCHIVE'			=> 'Silahkan pilih metode arsip.',
	'THEME_ERR_CLASS_CHARS'		=> 'Hanya karakter alphanumerik tambah ., :, -, _ dan # yang benar dalam nama class.',
	'THEME_ERR_COPY_LONG'		=> 'Hak cipta tidak boleh melebihi dari 60 karakter.',
	'THEME_ERR_NAME_CHARS'		=> 'Nama thema hanya bisa menganding karakter alphanumerik, -, +, _ dan spasi.',
	'THEME_ERR_NAME_EXIST'		=> 'Sebuah thema dengan nama tersenut sudah ada.',
	'THEME_ERR_NAME_LONG'		=> 'Nama thema tidak boleh melebihi 30 karakter.',
	'THEME_ERR_NOT_THEME'		=> 'Arsip yang anda tentukan tidak mengandung thema yang benar.',
	'THEME_ERR_REFRESH_FS'		=> 'Thema ini disimpan di filesystem sehingga tidak perlu merefreshnya.',
	'THEME_ERR_STYLE_NAME'		=> 'Anda harus memberikan sebuah nama untuk thema ini.',
	'THEME_FILE'				=> 'File thema',
	'THEME_EXPORT'				=> 'Ekspor thema',
	'THEME_EXPORT_EXPLAIN'		=> 'Di sini anda dapat mengekspor sebuah thema dala, bentuk arsip. Arsip ini akan mengandung semua data yang dibutuhkan untuk diinstal di halaman lain. Anda bisa memilih apakah ingin didownload langsung atau menyimpannya di folder penyimpanan anda untuk didownload nantinya atau melalui FTP.',
	'THEME_EXPORTED'			=> 'Thema berhasil diekspor dan disimpan di %s.',
	'THEME_LOCATION'			=> 'Simpan stylesheet di',
	'THEME_LOCATION_EXPLAIN'	=> 'Gambar selalu disimpan di filesystem.',
	'THEME_NAME'				=> 'Nama thema',
	'THEME_REFRESHED'			=> 'Thema berhasil direfresh.',
	'THEME_UPDATED'				=> 'Theme berhasil diperbarui.',

	'UNDERLINE'				=> 'Garis bawah',
	'UNINSTALLED_IMAGESET'	=> 'Imageset yang diuninstall',
	'UNINSTALLED_STYLE'		=> 'Gaya yang diuninstall',
	'UNINSTALLED_TEMPLATE'	=> 'Templates yang diuninstall',
	'UNINSTALLED_THEME'		=> 'Thema yang diuninstall',
	'UNSET'					=> 'Tidak didefenisikan',

));

?>