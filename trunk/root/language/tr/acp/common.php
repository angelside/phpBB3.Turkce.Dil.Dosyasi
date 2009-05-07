<?php
/*
*
* acp_common [Turkish]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Yöneticiler',
	'ACP_ADMIN_LOGS'			=> 'Yönetici kayıtları',
	'ACP_ADMIN_ROLES'			=> 'Yönetici rolleri',
	'ACP_ATTACHMENTS'			=> 'Eklentiler',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Eklenti ayarları',
	'ACP_AUTH_SETTINGS'			=> 'Yetkilendirme',
	'ACP_AUTOMATION'			=> 'Otomasyon',
	'ACP_AVATAR_SETTINGS'		=> 'Avatar ayarları',

	'ACP_BACKUP'				=> 'Yedekle',
	'ACP_BAN'					=> 'Uzaklaştırma',
	'ACP_BAN_EMAILS'			=> 'E-posta uzaklaştır',
	'ACP_BAN_IPS'				=> 'IP uzaklaştır',
	'ACP_BAN_USERNAMES'			=> 'Kullanıcı uzaklaştır',
	'ACP_BBCODES'				=> 'Biçim kodları',
	'ACP_BOARD_CONFIGURATION'	=> 'Pano ayarları',
	'ACP_BOARD_FEATURES'		=> 'Pano özellikleri',
	'ACP_BOARD_MANAGEMENT'		=> 'Pano yönetimi',
	'ACP_BOARD_SETTINGS'		=> 'Pano ayarları',
	'ACP_BOTS'					=> 'Arama motoru botları',

	'ACP_CAPTCHA'				=> 'Doğrulama kodu',

	'ACP_CAT_DATABASE'			=> 'Veritabanı',
	'ACP_CAT_DOT_MODS'			=> '.MODs', // tercüme edilmesin
	'ACP_CAT_FORUMS'			=> 'Forumlar',
	'ACP_CAT_GENERAL'			=> 'Genel',
	'ACP_CAT_MAINTENANCE'		=> 'Bakım',
	'ACP_CAT_PERMISSIONS'		=> 'İzinler',
	'ACP_CAT_POSTING'			=> 'Gönderim',
	'ACP_CAT_STYLES'			=> 'Stiller',
	'ACP_CAT_SYSTEM'			=> 'Sistem',
	'ACP_CAT_USERGROUP'			=> 'Kullanıcı ve gruplar',
	'ACP_CAT_USERS'				=> 'Kullanıcılar',
	'ACP_CLIENT_COMMUNICATION'	=> 'İstemci iletişimi',
	'ACP_COOKIE_SETTINGS'		=> 'Çerez ayarları',
	'ACP_CRITICAL_LOGS'			=> 'Hata kayıtları',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Özel profil alanları',
	
	'ACP_DATABASE'				=> 'Veritabanı yönetimi',
	'ACP_DISALLOW'				=> 'Yasakla', // Disallow
	'ACP_DISALLOW_USERNAMES'	=> 'İzin verilmeyen isimler',

	'ACP_EMAIL_SETTINGS'		=> 'E-posta ayarları',
	'ACP_EXTENSION_GROUPS'		=> 'Uzantı gruplarını yönet',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Forum tabanlı izinler',
	'ACP_FORUM_LOGS'				=> 'Forum kayıtları',
	'ACP_FORUM_MANAGEMENT'			=> 'Forum yönetimi',
	'ACP_FORUM_MODERATORS'			=> 'Forum yetkilileri',
	'ACP_FORUM_PERMISSIONS'			=> 'Forum izinleri',
	'ACP_FORUM_ROLES'				=> 'Forum rolleri',

	'ACP_GENERAL_CONFIGURATION'		=> 'Genel ayarlar',
	'ACP_GENERAL_TASKS'				=> 'Genel görevler',
	'ACP_GLOBAL_MODERATORS'			=> 'Genel yetkili',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Genel izinler',
	'ACP_GROUPS'					=> 'Gruplar',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Grup’ forum izinleri',
	'ACP_GROUPS_MANAGE'				=> 'Grup yönetimi',
	'ACP_GROUPS_MANAGEMENT'			=> 'Grup yönetimi',
	'ACP_GROUPS_PERMISSIONS'		=> 'Grup’ izinleri',

	'ACP_ICONS'					=> 'Konu ikonları',
	'ACP_ICONS_SMILIES'			=> 'Konu ikonları/ifadeler',
	'ACP_IMAGESETS'				=> 'Resim setleri',
	'ACP_INACTIVE_USERS'		=> 'Pasif kullanıcılar',
	'ACP_INDEX'					=> 'Yönetim anasayfa',

	'ACP_JABBER_SETTINGS'		=> 'Jabber ayarları',

	'ACP_LANGUAGE'				=> 'Dil yönetimi',
	'ACP_LANGUAGE_PACKS'		=> 'Dil paketleri',
	'ACP_LOAD_SETTINGS'			=> 'Sistem kaynakları',
	'ACP_LOGGING'				=> 'Kayıt tutma',

	'ACP_MAIN'					=> 'Yönetim anasayfası',
	'ACP_MANAGE_EXTENSIONS'		=> 'Uzantıları yönet',
	'ACP_MANAGE_FORUMS'			=> 'Forum yönetimi',
	'ACP_MANAGE_RANKS'			=> 'Seviye yönetimi',
	'ACP_MANAGE_REASONS'		=> 'Rapor yönetimi',
	'ACP_MANAGE_USERS'			=> 'Kullanıcı yönetimi',
	'ACP_MASS_EMAIL'			=> 'Yığın e-posta gönderimi',
	'ACP_MESSAGES'				=> 'Mesajlar',
	'ACP_MESSAGE_SETTINGS'		=> 'Özel mesaj ayarları',
	'ACP_MODULE_MANAGEMENT'		=> 'Modül yönetimi',
	'ACP_MOD_LOGS'				=> 'Yetkili kayıtları',
	'ACP_MOD_ROLES'				=> 'Yetkili rolleri',

	'ACP_NO_ITEMS'				=> 'Burada henüz öğe yok.', // There are no items yet.

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Sahipsiz eklentiler',

	'ACP_PERMISSIONS'			=> 'İzinler',
	'ACP_PERMISSION_MASKS'		=> 'İzin maskeleri',
	'ACP_PERMISSION_ROLES'		=> 'İzin rolleri',
	'ACP_PERMISSION_TRACE'		=> 'İzinleri İzle',
	'ACP_PHP_INFO'				=> 'PHP bilgileri',
	'ACP_POST_SETTINGS'			=> 'Gönderim ayarları',
	'ACP_PRUNE_FORUMS'			=> 'Forum temizliği',
	'ACP_PRUNE_USERS'			=> 'Kullanıcı temizliği',
	'ACP_PRUNING'				=> 'Temizlik',

	'ACP_QUICK_ACCESS'			=> 'Hızlı erişim',

	'ACP_RANKS'					=> 'Seviyeler',
	'ACP_REASONS'				=> 'Rapor/itiraz sebepleri',
	'ACP_REGISTER_SETTINGS'		=> 'Kullanıcı kayıt ayarları',

	'ACP_RESTORE'				=> 'Geri yükle',

	'ACP_SEARCH'				=> 'Arama ayarları',
	'ACP_SEARCH_INDEX'			=> 'Arama indeksi',
	'ACP_SEARCH_SETTINGS'		=> 'Arama ayarları',

	'ACP_SECURITY_SETTINGS'		=> 'Güvenlik ayarları',
	'ACP_SERVER_CONFIGURATION'	=> 'Sunucu ayarları',
	'ACP_SERVER_SETTINGS'		=> 'Sunucu ayarları',
	'ACP_SIGNATURE_SETTINGS'	=> 'İmza ayarları',
	'ACP_SMILIES'				=> 'İfadeler',
	'ACP_STYLE_COMPONENTS'		=> 'Stil bileşenleri',
	'ACP_STYLE_MANAGEMENT'		=> 'Stil yönetimi',
	'ACP_STYLES'				=> 'Stiller',

	'ACP_TEMPLATES'				=> 'Şablonlar', // Templates
	'ACP_THEMES'				=> 'Temalar', // Themes

	'ACP_UPDATE'					=> 'Güncelleme',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Kullanıcı’ forum izinleri',
	'ACP_USERS_LOGS'				=> 'Kullanıcı kayıtları',
	'ACP_USERS_PERMISSIONS'			=> 'Kullanıcı’ izinleri',
	'ACP_USER_ATTACH'				=> 'Mesaj ekleri',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Geri bildirim',
	'ACP_USER_GROUPS'				=> 'Gruplar',
	'ACP_USER_MANAGEMENT'			=> 'Kullanıcı yönetimi',
	'ACP_USER_OVERVIEW'				=> 'Genel görünüm',
	'ACP_USER_PERM'					=> 'İzinler',
	'ACP_USER_PREFS'				=> 'Tercihler',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Seviye',
	'ACP_USER_ROLES'				=> 'Kullanıcı rolleri',
	'ACP_USER_SECURITY'				=> 'Kullanıcı güvenliği',
	'ACP_USER_SIG'					=> 'İmza',

	'ACP_VC_SETTINGS'					=> 'Görsel doğrulama ayarları',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Doğrulama kodu resmi önizleme',
	'ACP_VERSION_CHECK'					=> 'phpBB3 sürüm denetimi',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Yönetici izinleri',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Forum yetkilisi izinleri',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Forum izinleri',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Genel yetkili izinleri',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Kullanıcı izinleri',

	'ACP_WORDS'					=> 'Kelime sansürleme',

	'ACTION'				=> 'İşlem',
	'ACTIONS'				=> 'İşlemler',
	'ACTIVATE'				=> 'Aktif yap',
	'ADD'					=> 'Ekle',
	'ADMIN'					=> 'Yönetim',
	'ADMIN_INDEX'			=> 'Yönetim anasayfası',
	'ADMIN_PANEL'			=> 'Yönetim Paneli',

	'ADM_LOGOUT'			=> 'ACP oturum kapat', // Yönetim paneli oturum kapat -> çok uzun :(
	'ADM_LOGGED_OUT'		=> 'Yönetim paneli oturumu kapatıldı',
	
	'BACK'					=> 'Geri',

	'COLOUR_SWATCH'			=> 'Web tabanlı renk tablosu',
	'CONFIG_UPDATED'		=> 'Ayarlar güncellendi.',

	'DEACTIVATE'				=> 'Kapat', // Deactivate
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Girilen “%s” yolu mevcut değil.',
	'DIRECTORY_NOT_DIR'			=> 'Girilen “%s” yolu bir dizin değil.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Girilen “%s” yolu yazılabilir değil.',
	'DISABLE'					=> 'Kapat', // Disable
	'DOWNLOAD'					=> 'İndir',
	'DOWNLOAD_AS'				=> 'Farklı indir',
	'DOWNLOAD_STORE'			=> 'Dosyayı indir veya depola',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Dosyayı direkt indirebilir veya <samp>store/</samp> dizininize kayıt edebilirsiniz.',

	'EDIT'					=> 'Düzenle',
	'ENABLE'				=> 'Aç', // Enable // izin ver
	'EXPORT_DOWNLOAD'		=> 'İndir',
	'EXPORT_STORE'			=> 'Depola',

	'GENERAL_OPTIONS'		=> 'Genel seçenekler',
	'GENERAL_SETTINGS'		=> 'Genel ayarlar',
	'GLOBAL_MASK'			=> 'Genel izin maskesi',

	'INSTALL'				=> 'Yükle',
	'IP'					=> 'Kullanıcı IP',
	'IP_HOSTNAME'			=> 'IP adresi veya sunucu adı',

	'LOGGED_IN_AS'			=> 'Oturum açma adınız:',
	'LOGIN_ADMIN'			=> 'Panoyu yönetmek için yetkiniz olmalıdır.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Panoyu yönetmek için kimliğinizi tekrar doğrulamalısınız.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Yönetici girişi başarılı, yönetim paneline yönlendiriliyorsunuz.',
	'LOOK_UP_FORUM'			=> 'Bir forum seçiniz',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Birden fazla forum seçebilirsiniz.',

	'MANAGE'				=> 'Yönet',
	'MENU_TOGGLE'			=> 'Yan menüyü göster veya gizle',
	'MOVE_DOWN'				=> 'Aşağı taşı',
	'MOVE_UP'				=> 'Yukarı taşı',

	'NOTIFY'				=> 'Bildiri',
	'NO_ADMIN'				=> 'Bu panoyu yönetmeye yetkili değilsiniz.',
	'NO_EMAILS_DEFINED'		=> 'Geçerli e-posta adresi bulunamadı.',
	'NO_PASSWORD_SUPPLIED'	=> 'Yönetim Paneli’ne erişmek için parolanızı girmelisiniz.',
	
	'OFF'					=> 'Kapalı',
	'ON'					=> 'Açık',

	'PARSE_BBCODE'						=> 'Biçim kodlarını ayrıştır',
	'PARSE_SMILIES'						=> 'İfadeleri ayrıştır',
	'PARSE_URLS'						=> 'Linkleri ayrıştır',
	'PERMISSIONS_TRANSFERRED'			=> 'İzinler transfer edildi',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Şu anda %1$s izinlerine sahipsiniz. Bu kullanıcının izinleri ile panoyu kullanabilirsiniz, fakat yönetim yetki izinleri transfer edilmediğinden dolayı yönetim paneline erişilemeyecektir. İstediğiniz zaman <a href="%2$s"><strong>eski izinlerinize dönebilirsiniz</strong></a>.',
	'PIXEL'								=> 'px',
	'PROCEED_TO_ACP'					=> '%sYönetim Paneline ilerle%s',

	'REMIND'				=> 'Hatırlat',
	'RESYNC'				=> 'Senkronize', // Resynchronise
	'RETURN_TO'				=> 'Geri dön…',

	'SELECT_ANONYMOUS'		=> 'Misafir kullanıcıyı seçin', // Select anonymous user
	'SELECT_OPTION'			=> 'Ayar seç',

	'SETTING_TOO_LOW'		=> 'Ayar için girilen değeri “%1$s” çok düşük. En düşük değer %2$d olabilir.',
	'SETTING_TOO_BIG'		=> 'Ayar için girilen değeri “%1$s” çok büyük. En büyük değer %2$d olabilir.',	
	'SETTING_TOO_LONG'		=> 'Ayar için girilen değeri “%1$s” çok uzun. En uzun değer %2$d olabilir.',
	'SETTING_TOO_SHORT'		=> 'Ayar için girilen değeri “%1$s” çok kısa. En kısa değer %2$d olabilir.',
	
	'UCP'					=> 'Kullanıcı Paneli',
	'USERNAMES_EXPLAIN'		=> 'Farklı kullanıcı adlarını yeni satırlara yazınız.',
	'USER_CONTROL_PANEL'	=> 'Kullanıcı Paneli',

	'WARNING'				=> 'Uyarı',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Bu sayfa sunucunuz tarafından kullanılan PHP sürümüne ilişkin bilgileri listelemektedir. Bu bilgiler, yüklü olan modüllerin içeriğini ve varsayılan ayarlar hakkında verileri de kapsamaktadır. Bu bilgiler, çeşitli problemlerle karşıldığında size yardımcı olabilir. Lütfen unutmayınız ki, bazı servis sağlayıcılar hostunuzla ilgili olan bu gibi bilgileri güvenlik gerekçesi ile tam olarak listelemeyebilmektedir. Burada yer alan bilgileri destek forumu üzerinde <a href="http://www.phpbb.com/about/team/">resmi destek ekibi</a> dışındaki birileri ile paylaşmamanız tavsiye edilmemektir.',
	'NO_PHPINFO_AVAILABLE'	=> 'PHP yapılandırmanız hakkındaki bilgiler alınamadı. phpinfo() bilgileri güvenlik nedeniyle devre dışı bırakılmıştır.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN' 	=> 'Bu liste pano yöneticileri tarafından gerçekleştirilmiş olan hareketleri listeler. Kullanıcı adı, Tarih, IP veya harekete göre sınıflandırabilirsiniz. Eğer uygun izinleriniz var ise kişisel işlemleri temizlemeniz mümkündür.',
	'ACP_CRITICAL_LOGS_EXPLAIN' => 'Bu liste panonun kendisi tarafından gerçekleştirilmiş olan hareketleri listeler. Bu kayıtlardan yararlanarak kimi spesifik problemleri çözebilirsiniz. (örnek; ulaşmayan e-postalar) kullanıcı adı, tarih, IP veya harekete göre sınıflandırabilirsiniz. Eğer uygun izinleriniz var ise her bir işlemi temizlemeniz mümkündür.',
	'ACP_MOD_LOGS_EXPLAIN' 		=> 'Bu liste yetkililer tarafından gerçekleştirilmiş tüm forum, konu ve ileti  hareketlerini listeler. Açılır menüyü kullanarak forum seçimi yapabilirsiniz. Kullanıcı adı, tarih, IP veya harekete göre sınıflandırabilirsiniz. Eğer uygun izinleriniz var ise her bir işlemi temizlemeniz mümkündür.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Buradan kullanıcıların tüm hareketlerini görebilirsiniz (raporlar, uyarılar ve kullanıcı notları).',
	'ALL_ENTRIES'				=> 'Tüm girişler',

	'DISPLAY_LOG'	=> 'Kayıtları öncekilerden başlayarak göster', //entries=  kayıt, adet. girdi sayısı

	'NO_ENTRIES'	=> 'Kayıt yok.', // Bu periot için kayıt yok

	'SORT_IP'		=> 'IP adresi',
	'SORT_DATE'		=> 'Tarih',
	'SORT_ACTION'	=> 'Kayıtlar',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Pano çözümünüz için phpBB’yi seçtiğiniz için teşekkür ederiz. Bu sayfadan panonuz için çeşitli istatistikleri kolayca izleyebilirsiniz. Sayfanın sol tarafındaki bağlantılar tecrübenize göre panonuzu her yönüyle yönetmenizi sağlar. Her sayfada, araçları nasıl kullanacağınıza dair bilgiler içerecektir. Anlamadığınız her ayar, öğrenmek istediğiniz herşey için <a href="http://www.phpbbturkiye.net" title="phpBB3 destek ve geliştirme" onclick="this.target=\'_blank\'">phpBB Türkiye</a> sitemizden yardım isteyebilirsiniz.',
	'ADMIN_LOG'					=> 'Kaydedilen yönetici eylemleri',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Bu pano yöneticisinin son beş hareketinin bir ön izlemesini verir. Bütün yönetici kayıtlarını görmek için ilgili menü seçeneğini ya da aşağıdaki bağlantıyı tıklayın.',
	'AVATAR_DIR_SIZE'			=> 'Avatar dizini boyutu',

	'BOARD_STARTED'		=> 'Pano başlangıcı',
	'BOARD_VERSION'		=> 'Pano sürümü',

	'DATABASE_SERVER_INFO'	=> 'Veritabanı sunucusu',
	'DATABASE_SIZE'			=> 'Veritabanı boyutu',

	'FILES_PER_DAY'		=> 'Gün başına eklenti',
	'FORUM_STATS'		=> 'Pano istatistikleri',

	'GZIP_COMPRESSION'	=> 'Gzip sıkıştırma',

	'NOT_AVAILABLE'		=> 'Mevcut değil',
	'NUMBER_FILES'		=> 'Eklenti sayısı',
	'NUMBER_POSTS'		=> 'İleti sayısı',
	'NUMBER_TOPICS'		=> 'Konu sayısı',
	'NUMBER_USERS'		=> 'Üye sayısı',
	'NUMBER_ORPHAN'		=> 'Sahipsiz eklentiler',

	'POSTS_PER_DAY'		=> 'Gün başına ileti',

	'PURGE_CACHE'			=> 'Önbelleği temizle',
	'PURGE_CACHE_CONFIRM'	=> 'Önbelleği temizlemek istediğinizden emin misiniz?',
	'PURGE_CACHE_EXPLAIN'	=> 'Bütün ilgili önbellek dosyalarını siler. Bu temizlik bir çok önbelleğe alınmış tema dosyasını ve sorgusunu kapsar.',
	
	'RESET_DATE'					=> 'Pano başlangıç tarihini sıfırla',
	'RESET_DATE_CONFIRM'			=> 'Pano başlangıç tarihini sıfırlamak istediğinizden emin misiniz?',
	'RESET_ONLINE'					=> 'En çok çevrimiçi olunan tarihi sıfırla',
	'RESET_ONLINE_CONFIRM'			=> 'En çok çevrimiçi olunan tarih sayacını sıfırlamak istediğinizden emin misiniz?',
	'RESYNC_POSTCOUNTS'				=> 'İleti sayaçlarını senkronize et',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Sadece var olan iletiler hesaba katılacak. Temizlenen iletiler hesaplanmaz.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'İleti hesaplarını yeniden senkronize etmek istediğinizden emin misiniz?',
	'RESYNC_POST_MARKING'			=> 'İşaretli başlıkları yeniden senkronize et',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'İşaretli başlıkları yeniden senkronize etmek istediğinizden emin misiniz?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Öncelikle bütün başlıkların işaretini kaldırır ve sonra düzgünce son altı ay içinde herhangi bir aktivite görülen başlıkları işaretler.',
	'RESYNC_STATS'					=> 'İstatistikleri senkronize et',
	'RESYNC_STATS_CONFIRM'			=> 'İstatistikleri senkronize etmek istediğinizden emin misiniz?',
	'RESYNC_STATS_EXPLAIN'			=> 'Toplam iletileri, konuları, kullanıcı ve dosyaları yeniden hesapla.',
	'RUN'							=> 'Şimdi çalıştır', // Run now

	'STATISTIC'					=> 'İstatistik',
	'STATISTIC_RESYNC_OPTIONS'	=> 'İstatistik senkronize et veya sıfırla',

	'TOPICS_PER_DAY'	=> 'Gün başına konu',

	'UPLOAD_DIR_SIZE'	=> 'Gönderilen eklerin boyutu',
	'USERS_PER_DAY'		=> 'Gün başına kullanıcı',

	'VALUE'					=> 'Değer',
	'VIEW_ADMIN_LOG'		=> 'Yönetim kayıtları',
	'VIEW_INACTIVE_USERS'	=> 'Pasif kullanıcılar',

	'WELCOME_PHPBB'			=> 'phpBB’ye hoşgeldiniz',
	'WRITABLE_CONFIG'		=> 'Ayar dosyanız (config.php) şu an yazılabilir durumdadır. İzinlerinizi 640 veya en azından 644 değerlerine değiştirmenizi öneririz. (örneğin: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Hesabın pasif olma tarihi',
	'INACTIVE_REASON'				=> 'Sebep',
	'INACTIVE_REASON_MANUAL'		=> 'Hesap, pano yöneticisi tarafından pasif yapıldı',
	'INACTIVE_REASON_PROFILE'		=> 'Profil detaylarını değiştirdi',
	'INACTIVE_REASON_REGISTER'		=> 'Yeni kayıtlanmış hesap',
	'INACTIVE_REASON_REMIND'		=> 'Kullanıcı hesabının yeniden aktive edilmesi istendi',
	'INACTIVE_REASON_UNKNOWN'		=> 'Bilinmeyen',
	'INACTIVE_USERS'				=> 'Pasif kullanıcılar',

	'INACTIVE_USERS_EXPLAIN'		=> 'Hesabı aktif olmayan kullanıcıların listesidir. İsterseniz bu kullanıcıları aktif edebilir, silebilir veya kullanıcılara e-posta yolu ile aktivasyon hatırlatması yapabilirsiniz.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Hesabı aktif olmayan son 10 kullanıcının listesidir. Uygun menü seçimi ile, kullanıcıları aktif edebilir, silebililir ya da e-posta yoluyla hatırlatmada bulunabilirsiniz.',

	'NO_INACTIVE_USERS'	=> 'Pasif kullanıcı yok',

	'SORT_INACTIVE'		=> 'Hesabın pasif olma tarihi',
	'SORT_LAST_VISIT'	=> 'Son ziyaret',
	'SORT_REASON'		=> 'Sebep',
	'SORT_REG_DATE'		=> 'Kayıt tarihi',

	'USER_IS_INACTIVE'	=> 'Kullanıcı pasif',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'	=> '<strong>Kullanıcıların kullanıcı izinleri eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'	=> '<strong>Grupların kullanıcı izinleri eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'	=> '<strong>Kullanıcıların genel yetkili izinleri eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'	=> '<strong>Grupların genel yetkili izinleri eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'	=> '<strong>Kullanıcıların yönetici yetkileri eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'	=> '<strong>Grupların yönetici yetkileri eklendi ya da düzenlendi</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'	=> '<strong>Yöneticiler eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'		=> '<strong>Genel Yetkililer eklendi ya da düzenlendi</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'		=> '<strong>Kullanıcıların pano erişimleri eklendi ya da düzenlendi</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'		=> '<strong>Kullanıcıların forum yetkili erişimleri, eklendi ya da düzenlendi</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'	=> '<strong>Grupların forum erişimleri, eklendi ya da düzenlendi</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'	=> '<strong>Grupların forum yetkili erişimleri, eklendi ya da düzenlendi</strong> from %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'		=> '<strong>Yetkililer eklendi ya da düzenlendi</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'	=> '<strong>Forum izinleri eklendi ya da düzenlendi</strong> from %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'	=> '<strong>Yöneticiler silindi</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'		=> '<strong>Genel Yetkililer silindi</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'		=> '<strong>Yetkililer silindi</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'	=> '<strong>Kullanıcı grup forum izinleri iptal edildi</strong> from %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'	=> '<strong>İzinler transfer edildi</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'	=> '<strong>Kullanılan izinler, kendi izinlerine döndürüldü</strong><br />» %s', // Kullanıcı izinlerini test et tikten sonra, eski izinlerine geri döndüğünde 

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Başarısız yönetici girişi denemesi</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Başarılı yönetici girişi</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Kullanıcı eklentileri silindi</strong><br />» %s',
	'LOG_ATTACH_EXT_ADD'		=> '<strong>Eklenti uzantısı eklendi veya düzenlendi</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Eklenti uzantısı silindi</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Eklenti uzantısı güncellendi</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Uzantı grubu eklendi</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Uzantı grubu düzenlendi</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Uzantı grubu silindi</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>İletiye sahipsiz dosya yüklendi</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Sahipsiz dosyalar silindi</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Kullanıcının yasağı kaldırıldı</strong>. Sebep: “<em>%1$s</em>”<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP adresi yasağı kaldırıldı</strong>. Sebep: “<em>%1$s</em>”<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>E-posta adresi yasağı</strong>. Sebep: “<em>%1$s</em>”<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Kullanıcı yasaklandı</strong>. Sebep: “<em>%1$s</em>”<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>IP adresi yasaklandı</strong>. Sebep: “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>E-posta adresi yasaklandı</strong>. Sebep: “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Kullanıcı adı yasağı kaldırıldı</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Ip adresi yasağı kaldırıldı</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>E-posta yasağı kaldırıldı</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Yeni biçim kodu eklendi</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Biçim kodu düzenlendi</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Biçim kodu silindi</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Yeni bot eklendi</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Bot silindi</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Mevcut bot güncellendi</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Yönetim kayıtları temizlendi</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Hata kayıtları temizlendi</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Yetkili kayıtları temizlendi</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Kullanıcı kayıtları temizlendi</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Kullanıcı kayıtları temizlendi</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Mesaj eklentileri ayarları değiştirildi</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Yetkilendirme ayarları değiştirildi</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Avatar ayarları değiştirildi</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Çerez ayarları değiştirildi</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>E-posta ayarları değiştirildi</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Pano özellikleri değiştirildi</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Sistem kaynakları ayarları değiştirildi</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Özel mesaj ayarları değiştirildi</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Gönderim ayarları değiştirildi</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Kullanıcı kayıt ayarları değiştirildi</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Arama ayarları değiştirildi</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Güvenlik ayarları değiştirildi</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Sunucu ayarları değiştirildi</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Pano ayarları değiştirildi</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>İmza ayarları değiştirildi</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Görsel doğrulama ayarları değiştirildi</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Konu onayladı</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Kullanıcı konuyu güncelledi</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>İleti silindi</strong><br />» %s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Konu gölgesi silindi</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Konu silindi</strong><br />» %s',
'LOG_FORK'					=> '<strong>Konu kopyalandı</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Konu kilitlendi</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>İleti kilitlendi</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>İleti birleştirildi</strong> bu başlık ile<br />» %s',
'LOG_MOVE'					=> '<strong>Konu taşındı</strong><br />» from %1$s to %2$s',
	'LOG_POST_APPROVED'			=> '<strong>İleti onaylandı</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>İleti onaylanmadı “%1$s” sebebinden dolayı</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>İleti düzenlendi “%1$s”, yazarı</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Rapor kapatıldı</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Rapor silindi</strong><br />» %s',
'LOG_SPLIT_DESTINATION'		=> '<strong>Bölünen iletiler taşındı</strong><br />» to %s',
'LOG_SPLIT_SOURCE'			=> '<strong>İleti bölündü</strong><br />» from %s',

'LOG_TOPIC_APPROVED'		=> '<strong>Approved topic</strong><br />» %s',
'LOG_TOPIC_DISAPPROVED'		=> '<strong>Disapproved topic “%1$s” with the following reason</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Başlık sayaçları yeniden senkronize edildi</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Konu tipi değiştirildi</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Konunun kiliti açıldı</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>İletinin kiliti açıldı</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>İzin verilmeyen isim eklendi</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>İzin verilmeyen isim silindi</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Veritabanı yedeklendi</strong>',
	'LOG_DB_DELETE'			=> '<strong>Veritabanı yedeği silindi</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Veritabanı yedeği geri yüklendi</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Dosya indirme listesinde hariç tutulacak IP/sunucu</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Dosya indirme listesine IP/sunucu eklendi</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Dosya indirme listesinden IP/sunucu silindi</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber hatası</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-posta hatası</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Yeni forum oluşturuldu</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Forum silindi</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Forum alt forumları ile beraber silindi</strong><br />» %s',
'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Forum silindi ve alt forumları taşındı</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Forum silindi ve iletileri taşındı</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Forum alt forumları ile birlikte silindi, </strong> iletileri taşındı %1$s<br />» %2$s',
'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Forum silindi, iletileri taşındı</strong> ile %1$s <strong>ve alt forumları</strong> to %2$s<br />» %3$s', //'<strong>Deleted forum, moved posts</strong> to %1$s <strong>and subforums</strong> to %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Forum iletileri ile birlikte silindi</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Forum iletileri, alt forumlarıyla birlikte silindi</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Forum iletileri ile birlikte silindi, </strong> alt forumları ise taşındı %1$s<br />» %2$s', //Deleted forum and its messages, moved subforums</strong> "to"
	'LOG_FORUM_EDIT'						=> '<strong>Forum detayları düzenlendi</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Forum taşındı</strong> %1$s <strong>aşağı</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Forum taşındı</strong> %1$s <strong>yukarı</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Forum yeniden senkronize edildi</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Yeni kullanıcı grubu oluşturuldu</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Grup: “%1$s” kullanıcı için varsayılan olarak belirlendi</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Kullanıcı grubu silindi</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Liderlerin kullanıcı grubu rütbesi alındı</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Üyelerin kullanıcı grubu rütbeleri yükseltildi</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Kullanıcı grubundan üyeler silindi</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Kullanıcı grubu bilgileri güncellendi</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Kullanıcı grubuna yeni liderler atandı</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Kullanıcı grubuna katılan üyeler onaylandı</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Kullanıcı grubuna yeni üyeler eklendi</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Veritabanına yeni resim seti eklendi</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Dosya sistemine yeni resim seti eklendi</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Resim seti silindi</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Resim seti detayları düzenlendi</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Resim seti düzenlendi</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Resim seti ihraç edildi</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>“%2$s” resim seti yerinde bulunamıyor</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>“%2$s” resim seti yerleşimi yenilendi</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Resim seti yenilendi</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktif olmayan kullanıcılar aktifleştirildi</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Aktif olmayan kullanıcılar silindi</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Aktif olmayan kullanıcılara hatırlatma e-postası gönderildi</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>%1$s sistemini %2$s sistemine dönüştürüldü</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB %s yüklendi</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Web tarayıcısı oturum IP’si proxy yönlendirmesi= X_FORWARDED_FOR kontrolü başarısız</strong><br />»Kullanıcı IP adresi “<em>%1$s</em>” oturuma karşı kontrol edilen IP “<em>%2$s</em>”, kullanıcı tarayıcısı bağlı “<em>%3$s</em>” oturum tarayıcısına karşı kontrol edilen bağlı “<em>%4$s</em>” ve kullanıcı X_FORWARDED_FOR bağlı “<em>%5$s</em>” oturum tarayıcısına karşı kontrol edilen X_FORWARDED_FOR bağlı “<em>%6$s</em>”.',//Oturum IP/web tarayıcı/X_FORWARDED_FOR kontrolü başarısız

	'LOG_JAB_CHANGED'			=> '<strong>Jabber üyeliği değiştirildi</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber parolası değiştirildi</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber üyeliği oluşturuldu</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber ayarları değiştirildi</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Dil paketi silindi</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Dil paketi yüklendi</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Dil paketi detaylarını güncellendi</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Dil dosyasının üzerine yazıldı</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Dil dosyası eklendi ve <samp>store/</samp> dizinine yerleştirildi</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Yığın e-posta gönderildi</strong><br />» %s',

'LOG_MCP_CHANGE_POSTER'	=> '<strong>“%1$s” konuda ileti yazarı değiştirildi </strong><br />» from %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Modül kapatıldı</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>Modül açıldı</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Modülü aşağı taşındı</strong><br />» %1$s alta %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Modülü yukarı taşındı</strong><br />» %1$s üste %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Modül silindi</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Modül eklendi</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Modül değiştirildi</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Yönetici rolü eklendi</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Yönetici rolü değiştirildi</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Yönetici rolü silindi</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forum rolü eklendi</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forum rolü değiştirildi</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forum rolü silindi</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Yetkili rolü eklendi</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Yetkili rolü değiştirildi</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Yetkili rolü silindi</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Kullanıcı rolü eklendi</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Kullanıcı rolü değiştirildi</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Kullanıcı rolü silindi</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profil alanı aktifleştirildi</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profil alanı eklendi</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profil alanı pasifleştirildi</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profil alanı değiştirildi</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profil alanı kaldırıldı</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Forumlar temizlendi</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Forumlar otomatik temizlendi</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Kullanıcıların hesabını pasifleştirdi</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Kullanıcılar budandı ve ilerileri silindi</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Kullanıcılar silindi ve mesajları tutuldu</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Önbellek temizlendi</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Yeni seviye eklendi</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Seviye silindi</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Seviye güncellendi</strong><br />» %s',
	
	'LOG_REASON_ADDED'		=> '<strong>Rapor/itiraz sebebi eklendi</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Rapor/itiraz sebebi silindi</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Rapor/itiraz sebebi güncellendi</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Gönderen doğrulama başarısız</strong><br />»Gönderen “<em>%1$s</em>”. Talep reddedildi ve oturum sonlandırıldı.',
	'LOG_RESET_DATE'			=> '<strong>Pano başlangıç tarihi sıfırlandı</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>En çok çevrimiçi olanlar sıfırlandı</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Kullanıcı mesaj sayacı yeniden senkronize edildi</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>İşaretli konular yeniden senkronize edildi</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>İleti, konu ve kullanıcı istatistikleri yeniden senkronize edildi</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Arama için indeks oluşturuldu</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Arama indeksi kaldırıldı</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Yeni tema eklendi</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Tema silindi</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Tema düzenlendi</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Tema ihraç edildi</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Veritabanına yeni şablon seti eklendi</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Dosya sistemine yeni şablon seti eklendi</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'    => '<strong>Şablon setinin önbelleğe alınmış sürümünün dosyaları silindi <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Şablon silindi</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Şablon seti düzenlendi <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Şablon detaylarını düzenlendi</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Şablon setini ihraç edildi</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Şablon setini yenilendi</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Veritabanına yeni tema eklendi</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Dosya sistemine yeni tema eklendi</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Tema silindi</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Tema detayları değiştirildi</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Tema değişikliği <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Tema değişikliği <em>%1$s</em></strong><br />» değişen <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Tema ihraç edildi</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Tema yenilendi</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>%1$s olan veritabanı sürümü, %2$s sürümüne güncellendi</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong> %1$s olan phpBB sürümü, %2$s sürümüne güncellendi</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Kullanıcı adı aktif edildi</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Kullanıcı adı, “<em>%1$s</em>” sebebi ile yasaklandı</strong><br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP adresi, “<em>%1$s</em>” sebebi ile yasaklandı</strong><br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>E-posta adresi, “<em>%1$s</em>” sebebi ile yasaklandı</strong><br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Kullanıcı silindi</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Kullanıcıların tüm dosya eklentileri silindi</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Kullanıcı avatarı silindi</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Kullanıcıların tüm iletileri silindi</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Kullanıcı imzası silindi</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Kullanıcı üyeliği pasifleştirildi</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Kullanıcı iletileri taşındı</strong><br />» posts by “%1$s” to forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Kullanıcı parolası değiştirildi</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Kullanıcı hesabı yeniden aktif edilmeye zorlandı</strong><br />» %s',
'LOG_USER_UPDATE_EMAIL'	=> '<strong>Kullanıcı “%1$s” e-posta adresi değiştirildi</strong><br />» from “%2$s” to “%3$s”',
'LOG_USER_UPDATE_NAME'	=> '<strong>kullanıcı adı değiştirildi</strong><br />» from “%1$s” to “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Kullanıcı detayları güncellendi</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Kullanıcı hesabı aktif edildi</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Kullanıcı avatarı silindi</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Kullanıcı imzası silindi</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Kullanıcı geri bildirimi eklendi</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Kayıt eklendi</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Kullanıcı hesabı pasifleştirildi</strong>',
	'LOG_USER_LOCK'				=> '<strong>Kullanıcı kendi konusunu kilitledi</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Forumdan tüm iletiler taşındı</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Kullanıcı hesabı yeniden aktif edilmeye zorlandı</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Kullanıcı kendi konusunun kilidini açtı</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Kullanıcı uyarısı eklendi</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Belirtilen uyarı bu kullanıcıya verildi</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Kullanıcı grubu varsayılan olarak değiştirildi</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Kullanıcının, grubundan liderlik rütbesi düşürüldü</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Kullanıcı gruba katıldı</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Kullanıcı gruba katıldı ve onaylanmayı bekliyor</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Kullanıcı grup üyeliğinden ayrıldı</strong><br />» %s',

	'LOG_WORD_ADD'		=> '<strong>Kelime sansürü eklendi</strong><br />» %s',
	'LOG_WORD_DELETE'	=> '<strong>Kelime sansürü silindi</strong><br />» %s',
	'LOG_WORD_EDIT'		=> '<strong>Kelime sansürü düzenlendi</strong><br />» %s',
));

?>