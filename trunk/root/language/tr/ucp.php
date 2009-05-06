<?php
/*
*
* ucp [Turkish]
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> '“%1$s” (bu yazıda “biz”, “bize”, “bizim”, “%1$s”, “%2$s” olarak anılacak) kullanım hakkı için, takip eden şartların yasal bağlayıcılığını kabul etmelisiniz. Eğer yasal bağlayıcılığı olan bu şartların tümünü kabul etmiyorsanız lütfen “%1$s” mesaj panosuna erişmeyin ve/veya kullanmayın. Şartları herhangi bir zaman değiştirebilir ve sizi azami derecede bilgilendirebiliriz, ancak siz yasal bağlayıcılığı olan bu şartları düzenli olarak inceleyin, yapılan değişiklik ve güncellemeleri kabul ediyorsanız “%1$s” mesaj panosunu kullanmaya devam edin.<br />
	<br />
	Forumlarımız gücünü “<a href="http://www.phpbbturkiye.net/hakkinda/gpl-lisansi.html" title="General Public License" onclick="this.target=\'_blank\'">Genel Kamu Lisansı</a>” (bu yazıda “GPL” olarak anılacak)’na sahip olan bir mesaj panosu çözümü olan ve <a href="http://www.phpbb.com">www.phpbb.com</a> adresinden indirebileceğiniz phpBB (bu yazıda “onlar”, “onlara”, “onların”, “phpBB yazılımı”, “www.phpbb.com”, “phpBB Grubu”, “phpBB Takımı” olarak anılacak) yazılımından alır. phpBB yazılımı sadece internet tabanlı tartışmaları kolaylaştırır ve GPL nelere izin verilip verilmediğini sert biçimde belirler. phpBB hakkında daha fazla Türkçe bilgi için <a href="http://www.phpbbturkiye.net/" onclick="this.target=\'_blank\'">phpBB Türkiye</a> sitesine göz atın.<br />
	<br />
	Küfür, müstehcen, terbiyesiz, iftira niteliğinde, iğrenç, tehdit edici, cinsel yönü olan iletiler veya ülkenizdeki kanunları, “%1$s” mesaj panosunun barındırıldığı ülkenin veya uluslararası kanunları çiğneyecek herhangi bir içerik göndermeyeceğinizi kabul ediyorsunuz. Aksi halde, hemen ve sürekli olarak yasaklanabileceğiniz gibi eğer tarafımızca uygun görülürse internet servis sağlayıcınız da haberdar edilebilir. Bu koşulları güçlendirmek için tüm iletilerdeki IP adresleri kayıt altına alınır. Uygun görüldüğünde, herhangi bir konunuzun, herhangi bir zamanda “%1$s” tarafından silinebileceğini, değiştirilebileceğini, taşınabileceğini veya kilitlenebileceğini kabul ediyorsunuz. Bir kullanıcı olarak girdiğiniz tüm bilgilerin bir veritabanında saklanacağını kabul ediyorsunuz. İzniniz olmadan bu bilgiler üçüncü şahıslara dağıtılmayacak, ancak yapılacak herhangi bir hack sonucunda bu bilgilerin dağıtılmasından ne “%1$s” ne de phpBB sorumlu tutulamaz.
	',

	'PRIVACY_POLICY'		=> 'Bu gizlilik ilkeleri “%1$s” mesaj panosu, ona bağlı oluşumlar (bu yazıda “biz”, “bize”, “bizim”, “%1$s”, “%2$s” olarak anılacak) ve phpBB yazılımının (bu yazıda “onlar”, “onlara”, “onların”, “phpBB yazılımı”, “www.phpbb.com”, “phpBB Grubu”, “phpBB Takımı” olarak anılacak) oturum açtığınızda toplanan bilgilerin nasıl kullanıldığını açıklar.<br />
	<br />
	Bilgileriniz iki yolla toplanır. Birincisi, “%1$s” mesaj panosuna girdiğinizde phpBB yazılımı tarafından, bilgisayarınızın geçici internet dosyalarına kaydolan küçük metin belgeleri olan çerezler oluşturulacaktır. İlk iki çerez, phpBB yazılımı tarafından otomatik tanımlanan kullanıcı tanımlayıcısını (bundan böyle “user-id” olarak anılacak) ve misafir kullanıcılar için bir oturum tanımlayıcısı (bundan böyle “session-id” olarak anılacak) içerir. Üçüncü çerez ise “%1$s” mesaj panosu içerisinde konu görüntülediğinizde okuduğunuz konuları depolamak, kullanıcı deneyimini geliştirmek içindir.<br />
	<br />
	“%1$s” taranırken phpBB yazılımının dışında bir yerede de çerezleri oluşturabiliriz, ancak bu phpBB yazılımı tarafından kapsanması beklenen dökümanın dış bir alan kapsamına girmesi anlamına gelir. Bu bize verdiğiniz bilgilerinizi toplamamızın ikinci yoludur. Bu mümkündür ve limitlendirilmemiştir: bir misafir ziyaretçi olarak ileti gönderme (bu yazıda “anonymous posts” olarak anılanacak), “%1$s” üzerinden kaydolma (bu yazıda “hesabınız” olarak anılacak) ve kaydolma işlemi ile oturum açma işleminden sonraki iletiler (bu yazıda “iletileriniz” olarak anılancak).<br />
	<br />
	Sizin hesabınız size özel belirleyici bir salt ad (bundan sonra "Kullanıcı adı" olarak anılacaktır), giriş için bir parola (bundan sonra "parolanız" olarak anılacaktır), ve kişisel ve geçerli bir e-posta adresiniz (bundan sonra "e-postanız" olarak anılacaktır) ile sınırlandırılacaktır. “%1$s” mesaj panosu üzerindeki hesabınıza ait bilgiler yaşadığınız ülkenin veri koruma yasalarıyla korunmaktadır. “%1$s” mesaj panosu kayıt olma sürecinde adınız, parolanız ve e-posta gibi gerekli bilgiler dışında kalan ve zorunlu ya da tercihe bağlı olan bilgiler konumuz dışındadır. Dahası, hesabınız içinde, phpBB yazılımı tarafından otomatik olarak oluşturulan e-postalar için opt-in ya da opt-out of seçeneğine de sahipsiniz.<br /> 
	<br />
	Parolanız şifrelenmiştir, yani güvendedir (tek yönlü şifreleme). Ancak yine de, aynı parolayı birden fazla farklı sitede kullanmanız önerilmez. Parolanız  “%1$s” altında bulunan hesabınıza ulaşma yolunuzdur,bu yüzden parolanızı iyi koruyunuz ve hiçbir şart altında “%1$s”, phpBB ya da başka bir üçüncü parti yazılım tarafından talep edilmeyecektir.  Hesabınızın parolasını unuttuğunuzda, “Parolamı unuttum” özelliği phpBB yazılımı tarafından sağlanmaktadır. Bu yöntem sizden e-posta adresinizi ve kullanıcı adınızı doğrulamanızı isteyecektir. Sonrasında, phpBB yazılımı hesabınızı kurtarmak için yeni bir parola oluşturacaktır.<br />
	', //48. satırdaki opt-in opt-out hakkında bir fikrim olmadığı için olduğu gibi bıraktım.
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Hesabınız şimdi aktif edildi. Kayıt olduğunuz için teşekkürler',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Hesabınız şimdi aktif edildi.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Hesabınız yeniden aktif edildi.',
	'ACCOUNT_ADDED'					=> 'Kayıt olduğunuz için teşekkürler, hesabınız oluşturuldu. Kullanıcı adınız ve parolanız ile oturum açabilirsiniz',
	'ACCOUNT_COPPA'					=> 'Hesabınız oluşturuldu, fakat onaylanması gerekmekte. Detaylar için lütfen e-postanızı kontrol edin.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Hesabınız güncellendi. Fakat, bu pano; e-posta değişikliğinde yeniden aktifleştirme istiyor. Sağladığınız yeni e-posta adresine bir aktivasyon kodu gönderildi. Daha fazla bilgi için e-postanızı kontrol edin.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Hesabınız güncellendi. Fakat, bu pano; e-posta değişikliğinde yönetici tarafından yeniden aktifleştirme istiyor. Yöneticilere e-posta gönderildi. Hesabınız yeniden aktifleştirildiğinde e-posta ile bilgilendirileceksiniz.',
	'ACCOUNT_INACTIVE'				=> 'Hesabınız oluşturuldu, fakat bu pano üyelik onayına sahiptir. Sağladığınız e-posta adresine bir tane aktivasyon anahtarı gönderildi. Daha fazla bilgi için e-postanızı kontrol ediniz.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Hesabınız oluşturuldu, fakat pano yönetici tarafından onaylanması gerekmektedir. Yöneticiye bir e-posta gönderildi, hesabınız faaliyete geçirildiği zaman haberdar edileceksiniz',
	'ACTIVATION_EMAIL_SENT'			=> 'Üyelik onay mesajı e-posta adresinize gönderildi.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Aktivasyon e-postası yönetici e-posta adresine gönderildi.',
	'ADD'							=> 'Ekle',
	'ADD_BCC'						=> 'Ekle [k.kopya]',
	'ADD_FOES'						=> 'Yeni yasaklı ekle',
	'ADD_FOES_EXPLAIN'				=> 'Her satıra farklı bir kullanıcı yazabilirsiniz.',
	'ADD_FOLDER'					=> 'Klasör ekle',
	'ADD_FRIENDS'					=> 'Yeni arkadaş ekle',
	'ADD_FRIENDS_EXPLAIN'			=> 'Her satıra farklı bir kullanıcı yazabilirsiniz.',
	'ADD_NEW_RULE'					=> 'Yeni kural ekle',
	'ADD_RULE'						=> 'Kural ekle',
	'ADD_TO'						=> 'Ekle [kime]',
	'ADMIN_EMAIL'					=> 'Yöneticiler bana bilgi e-postaları gönderebilir',
	'AGREE'							=> 'Bu koşulları kabul ediyorum',
	'ALLOW_PM'						=> 'Üyeler bana özel mesaj gönderebilir',
	'ALLOW_PM_EXPLAIN'				=> 'Not: Yönetici ve yetkililer size her zaman mesaj gönderebilecekler.',
	'ALREADY_ACTIVATED'				=> 'Hesabınızı zaten onayladınız.',
	'ATTACHMENTS_EXPLAIN'			=> 'Bu panoda eklediğiniz eklentilerin listesidir.',
	'ATTACHMENTS_DELETED'			=> 'Eklentiler silindi.',
	'ATTACHMENT_DELETED'			=> 'Eklenti silindi.',
	'AVATAR_CATEGORY'				=> 'Kategori',
	'AVATAR_EXPLAIN'				=> 'Maksimum değerler; genişlik %1$d px, yükseklik %2$d px, dosya boyutu %3$.2lf KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Avatar özelliği şu an kapalıdır.',
	'AVATAR_GALLERY'				=> 'Yerel galeri',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Avatar %s yüklenemedi.',
	'AVATAR_PAGE'					=> 'Sayfa',

	'BACK_TO_DRAFTS'			=> 'Kayıtlı taslaklara dön',
	'BACK_TO_LOGIN'				=> 'Oturum açma ekranına dön',
	'BIRTHDAY'					=> 'Doğum günü',
	'BIRTHDAY_EXPLAIN'			=> 'Doğum gününüz olduğunda, yaşınızın listelenmesi için yıl ayarı yapmalısınız.',
	'BOARD_DATE_FORMAT'			=> 'Tarih biçimi',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Sözdizimi PHP’deki <a href="http://www.php.net/date">date()</a> fonksiyonu ile aynıdır.',
	'BOARD_DST'					=> 'Yaz saati/<abbr title="Gün ışığından yararlanma">DST</abbr> etkin',
	'BOARD_LANGUAGE'			=> 'Dil',
	'BOARD_STYLE'				=> 'Pano stili',
	'BOARD_TIMEZONE'			=> 'Saat dilimi',
	'BOOKMARKS'					=> 'Sık kullanılanlar',
	'BOOKMARKS_EXPLAIN'			=> 'Referans yapabilmek için konuları sık kullanılanlara ekleyebilirsiniz. Silmek istediğiniz sık kullanılan öğenin işaret kutusuna işaret koyun, ardından <em>İşaretli olanları sil</em> butonuna basın.',
	'BOOKMARKS_DISABLED'		=> 'Panoda sık kullanılanlar kapatılmıştır.',
	'BOOKMARKS_REMOVED'			=> 'Sık kullanılanlar silindi.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Artık bu mesajı değiştiremez ya da silemezsiniz.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Silmek istediğiniz klasördeki mesajlar taşınamadı.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Mesajlar giden kutusundan taşınamaz.',
	'CANNOT_RENAME_FOLDER'		=> 'Bu dosya yeniden adlandırılamaz.',
	'CANNOT_REMOVE_FOLDER'		=> 'Bu klasör silinemez.',
	'CHANGE_DEFAULT_GROUP'		=> 'Varsayılan grubu değiştir',
	'CHANGE_PASSWORD'			=> 'Parola değiştir',
	'CLICK_RETURN_FOLDER'		=> '%1$s“%3$s” klasörünüze dönün%2$s',
	'CONFIRMATION'				=> 'Kayıt doğrulaması',
	'CONFIRM_CHANGES'			=> 'Değişiklikleri onayla',
	'CONFIRM_EMAIL'				=> 'E-posta adresi (tekrar)',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Sadece e-posta adresinizi değişiyorsanız bunu belirtmelisiniz.',
	'CONFIRM_EXPLAIN'			=> 'Otomatik üyeliklerden korunmak amacıyla kullanılan doğrulama kodunu girmeniz gerekiyor. Kod aşağıdaki resimdedir. Görme bozukluğunuz varsa veya başka bir sebepten kodu okuyamıyorsanız lütfen %spano yöneticisi%s ile irtibata geçiniz. ',
	'VC_REFRESH'				=> 'Doğrulama kodunu yenile',
	'VC_REFRESH_EXPLAIN'		=> 'Eğer kodu okuyamıyorsanız yeni bir tane talep etmek için butonu kullanabilirsiniz.',

	'CONFIRM_PASSWORD'			=> 'Parola (tekrar)',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Değişiklik yaptıysanız onaylamak için lütfen parolanızı yazınız.',
	'COPPA_BIRTHDAY'			=> 'Kayıt işlemine devam etmek için lütfen doğum tarihinizi yazınız.',
	'COPPA_COMPLIANCE'			=> 'COPPA uyumu',
	'COPPA_EXPLAIN'				=> 'Dikkat! Onay butonuna bastığınızda hesabınız oluşturulacaktır. Ancak bir ebeveyniniz ya da vasiniz kaydınızı onaylayana kadar aktifleştirilemez. Gerekli belge size, nereye göndermeniz gerektiği ayrıntısı ile birlikte e-mail yoluyla ulaştırılacaktır.',
	'CREATE_FOLDER'				=> 'Klasör ekle…',
	'CURRENT_IMAGE'				=> 'Geçerli resim',
	'CURRENT_PASSWORD'			=> 'Geçerli parola',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'E-posta adresinizi veya kullanıcı adınızı değiştirmek için mevcut parolanızı yazmalısınız.',
	'CUR_PASSWORD_ERROR'		=> 'Mevcut parolanızı yanlış girdiniz.',
	'CUSTOM_DATEFORMAT'			=> 'Özel…',

	'DEFAULT_ACTION'			=> 'Varsayılan işlem',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Yukarıdakilerin hiçbiri çalışmaz ise bu işlem uygulanacak.',
	'DEFAULT_ADD_SIG'			=> 'İmzamı varsayılan olarak ekle',
	'DEFAULT_BBCODE'			=> 'Biçimleri varsayılan olarak ekle',
	'DEFAULT_NOTIFY'			=> 'Varsayılan olarak beni cevaplardan haberdar et',
	'DEFAULT_SMILIES'			=> 'İfadelere varsayılan olarak izin ver',
	'DEFINED_RULES'				=> 'Tanımlı kurallar',
	'DELETED_TOPIC'				=> 'Konu silindi.',
	'DELETE_ATTACHMENT'			=> 'Eklentiyi sil',
	'DELETE_ATTACHMENTS'		=> 'Eklentileri sil',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Bu eklentiyi silmek istediğinizden emin misiniz?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Bu eklentileri silmek istediğinizden emin misiniz?',
	'DELETE_AVATAR'				=> 'Avatarı sil',
	'DELETE_COOKIES_CONFIRM'	=> 'Pano tarafından ayarlanan tüm çerezleri silmek istediğinizden emin misiniz?',
	'DELETE_MARKED_PM'			=> 'İşaretli mesajları sil',
	'DELETE_MARKED_PM_CONFIRM'	=> 'İşaretli mesajları silmek istediğinizden emin misiniz?',
	'DELETE_OLDEST_MESSAGES'	=> 'En eski mesajları sil',
	'DELETE_MESSAGE'			=> 'Mesajı sil',
	'DELETE_MESSAGE_CONFIRM'	=> 'Bu özel mesajı silmek istediğinizden emin misiniz?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Klasör ile birlikte tüm mesajları sil',
	'DELETE_RULE'				=> 'Kuralı sil',
	'DELETE_RULE_CONFIRM'		=> 'Bu kuralı silmek istediğinizden emin misiniz?',
	'DEMOTE_SELECTED'			=> 'Grup liderliğinden ayrıl', // Seçilenin rütbesini düşür', //kontrol edilecek
	'DISABLE_CENSORS'			=> 'Kelime sansürüne izin ver',
	'DISPLAY_GALLERY'			=> 'Galeriyi göster',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Girilen e-posta alan adının MX kaydı geçerli değil.',
	'DOWNLOADS'					=> 'İndirilme',
	'DRAFTS_DELETED'			=> 'Seçilen tüm taslaklar silindi.',
	'DRAFTS_EXPLAIN'			=> 'Buradan kayıtlı taslaklarınızı görebilir, düzenleyebilir ve silebilirsiniz.',
	'DRAFT_UPDATED'				=> 'Taslak güncellendi.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Buradan taslaklarınızı düzenleyebilirsiniz. Taslaklar eklenti ve anket içeremezler.',
	'EMAIL_BANNED_EMAIL'		=> 'Girdiğiniz e-posta adresinin kullanımına izin verilmiyor.',
	'EMAIL_INVALID_EMAIL'		=> 'Girdiğiniz e-posta adresi geçerli değil.',
	'EMAIL_REMIND'				=> 'Bu hesabınızla ilişkili e-posta adresi olmalı. Eğer kullanıcı panelinizden değiştirmediyseniz, kayıt olurken kullandığınız e-posta adresidir.',
	'EMAIL_TAKEN_EMAIL'			=> 'Girilen e-posta adresi zaten kullanılmaktadır.',
	'EMPTY_DRAFT'				=> 'Değişiklikleri gönderebilmek için bir mesaj yazmalısınız.',
	'EMPTY_DRAFT_TITLE'			=> 'Taslak için bir başlık girmelisiniz',
	'EXPORT_AS_XML'				=> 'XML olarak ihraç et',
	'EXPORT_AS_CSV'				=> 'CSV olarak ihraç et',
	'EXPORT_AS_CSV_EXCEL'		=> 'CSV (Excel) ihraç et',
	'EXPORT_AS_TXT'				=> 'TXT olarak ihraç et',
	'EXPORT_AS_MSG'				=> 'MSG olarak ihraç et',
	'EXPORT_FOLDER'				=> 'Bu görünümü ihraç et',

	'FIELD_REQUIRED'					=> '“%s” alanı tamamlanmalıdır.',
	'FIELD_TOO_SHORT'					=> '“%1$s” alanındaki bilgi çok kısa, en az %2$d karakter yazabilirsiniz.',
	'FIELD_TOO_LONG'					=> '“%1$s” alanındaki bilgi çok uzun, en fazla %2$d karakter yazabilirsiniz.',
	'FIELD_TOO_SMALL'					=> '“%1$s” değeri çok küçük, en az %2$d değerini yazabilirsiniz.',
	'FIELD_TOO_LARGE'					=> '“%1$s” değeri çok büyük, en çok %2$d değerini yazabilirsiniz.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> '“%s” alanı geçersiz karakter içeriyor, sadece rakamlara izin veriliyor.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> '“%s” alanı geçersiz karakter içeriyor, sadece harf ve rakamlara izin veriliyor.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> '“%s” alanı geçersiz karakter içeriyor, sadece harf, rakam, boşluk veya -+_[] karakterlerine izin veriliyor.',
	'FIELD_INVALID_DATE'				=> '“%s” alanındaki tarih geçersiz.',

	'FOE_MESSAGE'				=> 'Yasaklıdan mesaj',
	'FOES_EXPLAIN'				=> 'Yasaklılar genel olarak engellenen kullanıcılardır. Bu kullanıcılardan gelen mesajların içerikleri tam görünür olmayacak. Yasaklı kullanıcılardan gelen özel mesajlara hala izin verilir. Yönetici ve Yetkilileri yasaklayamazsınız.', 
	'FOES_UPDATED'				=> 'Yasaklı listeniz güncellendi.',
	'FOLDER_ADDED'				=> 'Klasör eklendi.',
	'FOLDER_MESSAGE_STATUS'		=> '%2$d mesaj kapasitesi, %1$d mesaj var',
	'FOLDER_NAME_EXIST'			=> '<strong>%s</strong> klasörü zaten mevcut.',
	'FOLDER_OPTIONS'			=> 'Klasör seçenekleri',
	'FOLDER_RENAMED'			=> 'Klasör yeniden adlandırıldı.',
	'FOLDER_REMOVED'			=> 'Klasör silindi.',
	'FOLDER_STATUS_MSG'			=> 'Klasör %1$d%% dolu (%3$d mesaj kapasitesi, %2$d mesaj var)',
	'FORWARD_PM'				=> 'Özel mesajı sevket', // ÖM sevket
	'FORCE_PASSWORD_EXPLAIN'	=> 'Panoyu dolaşmaya devam etmeden önce parolanızı değiştirmelisiniz.',
	'FRIEND_MESSAGE'			=> 'Arkadaştan mesaj',
	'FRIENDS'					=> 'Arkadaşlar',
	'FRIENDS_EXPLAIN'			=> 'Arkadaşlar sıkça iletişim kurduğunuz üyelere hızlıca ulaşmanızı sağlar. Eğer tema desteği mevcut ise arkadaşlarınızdan gelecek olan özel mesajlar farklı bir renkle gösterilecektir.',
	'FRIENDS_OFFLINE'			=> 'Çevrimdışı',
	'FRIENDS_ONLINE'			=> 'Çevrimiçi',
	'FRIENDS_UPDATED'			=> 'Arkadaş listeniz güncellendi.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Klasör dolduğu zaman gerçekleşmesini istediğiniz hareket değiştirildi.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Orijinal Mesaj --------',
	'FWD_SUBJECT'				=> 'Konu: %s',
	'FWD_DATE'					=> 'Tarih: %s',
	'FWD_FROM'					=> 'Kimden: %s',
	'FWD_TO'					=> 'Kime: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Genel duyuru',

	'HIDE_ONLINE'				=> 'Çevrimiçi durumumu gizle',
	'HIDE_ONLINE_EXPLAIN'		=> 'Bu özellikte yapılan değişiklikler panoyu bir dahaki ziyaretinizde etkin olacaktır.',
	'HOLD_NEW_MESSAGES'			=> 'Yeni mesaj kabul etme (Yeni mesajlar yeterli alan sağlanana kadar tutulacaktır.)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Yeni mesajlar kısaltılacak',//New messages will be held back  held=tutmak  short= kısa yeni mesajlar tutulacak

	'IF_FOLDER_FULL'			=> 'Eğer klasör dolu ise',
	'IMPORTANT_NEWS'			=> 'Önemli duyurular',
	'INVALID_USER_BIRTHDAY'		=> 'Girilen doğumgünü geçerli bir tarih değil',
	'INVALID_CHARS_USERNAME'	=> 'Kullanıcı adı geçersiz karakterler içeriyor.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Parola istenilen karakterleri içermiyor.',
	'ITEMS_REQUIRED'			=> 'Doldurulması zorunlu olan alanlar * ile belirtilmiştir.',

	'JOIN_SELECTED'				=> 'Seçilen gruba katıl',

	'LANGUAGE'					=> 'Dil',
	'LINK_REMOTE_AVATAR'		=> 'Site dışı bağlantı',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Bağlantı vermek istediğiniz avatar resminin yerini içeren adresi giriniz.',
	'LINK_REMOTE_SIZE'			=> 'Avatar boyutları',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Avatar genişliğini ve yüksekliğini belirtiniz, otomatik algılama için boş bırakınız.',
	'LOGIN_EXPLAIN_UCP'			=> 'Kullanıcı Paneline ulaşmak için lütfen oturum açınız.',
	'LOGIN_REDIRECT'			=> 'Oturum açma işleminiz gerçekleşti.',
	'LOGOUT_FAILED'				=> 'Oturumunuz kapatılamadı, talebiniz ile oturumunuz uyuşmuyor. Eğer bu problemi yaşamaya devam ederseniz pano yöneticisi ile irtibata geçin.',
	'LOGOUT_REDIRECT'			=> 'Oturum kapatma işleminiz gerçekleşti',

	'MARK_IMPORTANT'				=> 'Önemli olarak işaretle/işareti kaldır',
	'MARKED_MESSAGE'				=> 'İşaretli mesaj',
	'MAX_FOLDER_REACHED'			=> 'Tanımlanmış kullanıcı klasörlerinin maksimum sayısına ulaşıldı.',
	'MESSAGE_BY_AUTHOR'				=> 'Gönderen', // by
	'MESSAGE_COLOURS'				=> 'Mesaj renkleri',
	'MESSAGE_DELETED'				=> 'Mesaj silindi.',
	'MESSAGE_HISTORY'				=> 'Mesaj geçmişi',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Bu mesaj teslim edilmeden önce yazarı tarafından silinmiş.',
	'MESSAGE_SENT_ON'				=> 'Tarih', // on
	'MESSAGE_STORED'				=> 'Mesaj gönderildi.',
	'MESSAGE_TO'					=> 'Kime',
	'MESSAGES_DELETED'				=> 'Mesajlar silindi.',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Silinen klasördeki mesajları taşı', //Move messages from removed folder to
	'MOVE_DOWN'						=> 'Aşağı taşı',
	'MOVE_MARKED_TO_FOLDER'			=> 'İşaretlileri taşı %s',
	'MOVE_PM_ERROR'					=> 'Mesajları yeni klasöre taşırken hata oluştu, %2d mesajın %1d tanesi taşınabildi.', //An error occurred while moving the messages to the new folder, only %1d from %2d messages were moved.
	'MOVE_TO_FOLDER'				=> 'Klasöre taşı',
	'MOVE_UP'						=> 'Yukarı taşı',

	'NEW_EMAIL_ERROR'				=> 'Girdiğiniz e-posta adresleri birbiri ile uyuşmuyor.',
	'NEW_FOLDER_NAME'				=> 'Yeni klasör adı',
	'NEW_PASSWORD'					=> 'Yeni parola',
	'NEW_PASSWORD_ERROR'			=> 'Girdiğiniz parolalar birbiri ile uyuşmuyor.',
	'NOTIFY_METHOD'					=> 'Bildiri metodu',
	'NOTIFY_METHOD_BOTH'			=> 'Her ikisi',
	'NOTIFY_METHOD_EMAIL'			=> 'Sadece e-posta',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Panodan gönderilecek mesajlar için metod.',
	'NOTIFY_METHOD_IM'				=> 'Sadece jabber',
	'NOTIFY_ON_PM'					=> 'Yeni özel mesajlardan beni haberdar et',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Misafir kullanıcıyı arkadaş listenize ekleyemezsiniz.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Yasaklı listenizdeki kişileri arkadaş listenize ekleyemezsiniz.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Kendinizi arkadaş listenize ekleyemezsiniz.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Yönetici ve Yetkilileri yasaklı listenize ekleyemezsiniz.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Misafir kullanıcıyı yasaklı listenize ekleyemezsiniz.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Arkadaş listenizdeki kişileri yasaklı listenize ekleyemezsiniz.',
	'NOT_ADDED_FOES_SELF'			=> 'Kendinizi yasaklı listenize ekleyemezsiniz.',
	'NOT_AGREE'						=> 'Bu koşulları kabul etmiyorum',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Hedef “%s” klasörü dolu görünüyor. Talep edilen işlem gerçekleşmedi.',
	'NOT_MOVED_MESSAGE'				=> 'Klasör dolu olduğu için tutulan 1 özel mesajınız var.',
	'NOT_MOVED_MESSAGES'			=> 'Klasör dolu olduğu için tutulan %d özel mesajınız var.',
	'NO_ACTION_MODE'				=> 'Mesaj işlemi belirtilmedi',
	'NO_AUTHOR'						=> 'Bu mesaj için yazar tanımlanmamış',
	'NO_AVATAR_CATEGORY'			=> 'Yok',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Özel mesaj silmek için yetkiniz yoktur.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Özel mesaj değiştirmek için yetkiniz yoktur.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Özel mesaj sevketmek için izniniz yoktur.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Gruplara özel mesaj göndemek için yetkiniz yoktur.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Yeni bir parola isteme yetkisine sahip değilsiniz.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Tutulan özel mesajları okuma yetkisine sahip değilsiniz.',
	'NO_AUTH_READ_MESSAGE'			=> 'Özel mesaj okumak için izniniz yoktur.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Bu mesajı okuyamazsınız çünkü mesaj yazarı tarafından silinmiş.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Özel mesaj göndermek için izniniz yoktur.',
	'NO_AUTH_SIGNATURE'				=> 'İmza tanımlamak için yetkini yoktur.',

	'NO_BCC_RECIPIENT'			=> 'Yok',
	'NO_BOOKMARKS'				=> 'Sık kullanılan öğe yok.',
	'NO_BOOKMARKS_SELECTED'		=> 'Herhangi bir yer imi seçmediniz.',
	'NO_EDIT_READ_MESSAGE'		=> 'Özel mesaj okunduğu için değiştiremezsiniz.',
	'NO_EMAIL_USER'				=> 'Girdiğiniz e-posta/kullanıcı adı bilgileri bulunamamaktadır.',
	'NO_FOES'					=> 'Hiç yasaklı tanımlamamışsınız',
	'NO_FRIENDS'				=> 'Hiç arkadaş tanımlamamışsınız',
	'NO_FRIENDS_OFFLINE'		=> 'Çevrimdışı arkadaşınız yok',
	'NO_FRIENDS_ONLINE'			=> 'Çevrimiçi arkadaşınız yok',
	'NO_GROUP_SELECTED'			=> 'Hiçbir grup belirtilmedi.',
	'NO_IMPORTANT_NEWS'			=> 'Mevcut önemli duyuru yok.',
	'NO_MESSAGE'				=> 'Özel mesaj bulunamadı.',
	'NO_NEW_FOLDER_NAME'		=> 'Bir klasör adı belirlemelisiniz.',
	'NO_NEWER_PM'				=> 'Yeni mesaj yok.',
	'NO_OLDER_PM'				=> 'Eski mesaj yok.',
	'NO_PASSWORD_SUPPLIED'		=> 'Parolanızı yazmadan oturum açamazsınız.',
	'NO_RECIPIENT'				=> 'Alıcı tanımlanmadı.',
	'NO_RULES_DEFINED'			=> 'Tanımlı kural yok.',
	'NO_SAVED_DRAFTS'			=> 'Kayıtlı taslak yok.',
	'NO_TO_RECIPIENT'			=> 'Yok',
	'NO_WATCHED_FORUMS'			=> 'Herhangi bir foruma abone değilsiniz.', 
	'NO_WATCHED_SELECTED'		=> 'Abone olunmuş herhangi bir konu veya forum seçmediniz.',
	'NO_WATCHED_TOPICS'			=> 'Herhangi bir konuya abone değilsiniz.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Parola %1$d ile %2$d karakter arasında bir uzunlukta olmalı, karmaşık harfler ve numaralar içermelidir.',
	'PASS_TYPE_ANY_EXPLAIN'		=> '%1$d ile %2$d karakter arasında olmalıdır.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Parola %1$d ile %2$d karakter arasında bir uzunlukta olmalı ve karışık durumdaki harfleri içermelidir.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Parola %1$d ile %2$d karakter arasında bir uzunlukta olmalı ve karışık durumdaki harfleri, numaraları ve sembolleri içermelidir.',
	'PASSWORD'					=> 'Parola',
	'PASSWORD_ACTIVATED'		=> 'Yeni parolanız aktif edildi,',
	'PASSWORD_UPDATED'			=> 'Kayıt olurken kullandığınız e-posta adresine yeni bir parola gönderilmiştir.',
	'PERMISSIONS_RESTORED'		=> 'Orijinal izinler geri yüklendi.',
	'PERMISSIONS_TRANSFERRED'	=> 'İzinler <strong>%s</strong> kullanıcısından aktarılmıştır, artık panoyu bu kullanıcının izinleriyle görüntüleyebilirsiniz.<br />Yönetici izinleri aktarılmadı. İstediğiniz zaman izinlerinize geri dönebilirsiniz.',
	'PM_DISABLED'				=> 'Pano genelinde özel mesaj gönderimi kapatılmıştır,',
	'PM_FROM'					=> 'Kimden',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Bu mesaj artık kayıtlı olmayan bir üye tarafından gönderilmiştir.',
	'PM_ICON'					=> 'ÖM ikon',
	'PM_INBOX'					=> 'Gelenler',
	'PM_NO_USERS'				=> 'Eklemek için aranan üye bulunamıyor.',
	'PM_OUTBOX'					=> 'Gönderilenler',
	'PM_SENTBOX'				=> 'Ulaşanlar',
	'PM_SUBJECT'				=> 'Mesaj konusu',
	'PM_TO'						=> 'Alıcılar',
	'PM_USERS_REMOVED_NO_PM'	=> 'Özel mesaj alımı kapatıldığı için bazı üyeler eklenemiyor.',
	'POPUP_ON_PM'				=> 'Yeni özel mesajı pop-up pencerede bildir',
	'POST_EDIT_PM'				=> 'Mesajı değiştir',
	'POST_FORWARD_PM'			=> 'Mesajı sevket',
	'POST_NEW_PM'				=> 'Mesaj yaz',
	'POST_PM_LOCKED'			=> 'Özel mesajlaşma kilitli',
	'POST_PM_POST'				=> 'İletiyi alıntı yap',
	'POST_QUOTE_PM'				=> 'Mesajı alıntı yap',
	'POST_REPLY_PM'				=> 'Mesajı cevapla',
	'PRINT_PM'					=> 'Yazıcı görüntüsü',
	'PREFERENCES_UPDATED'		=> 'Tercihleriniz güncellendi.',
	'PROFILE_INFO_NOTICE'		=> 'Bu bilgilerin diğer üyeler tarafından görülebileceğini unutmayın. Herhangi bir kişisel ayrıntı verirken dikkatli olun. Doldurulması zorunlu olan alanlar * ile işaretlidir.',
	'PROFILE_UPDATED'			=> 'Profiliniz güncellendi.',

	'RECIPIENT'							=> 'Alıcı',
	'RECIPIENTS'						=> 'Alıcılar',
	'REGISTRATION'						=> 'Kayıt',
	'RELEASE_MESSAGES'					=> '%sBütün eski mesajları bırak%s… Eğer yeterli alan sağlanmışsa bunlar uygun klasörde saklanacaktır',
	'REMOVE_ADDRESS'					=> 'Adresi sil',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Seçili sık kullanılan öğeyi sil',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM' => 'Seçilen tüm sık kullanılan öğeleri silmek istediğinizden emin misiniz?',
	'REMOVE_BOOKMARK_MARKED'			=> 'İşaretli olanları sil',
	'REMOVE_FOLDER'						=> 'Klasörü sil',
	'REMOVE_FOLDER_CONFIRM'				=> 'Seçilen bu klasörü silmek istediğinizden emin misiniz?',
	'RENAME'							=> 'Yeniden adlandır',
	'RENAME_FOLDER'						=> 'Klasörü yeniden adlandır',
	'REPLIED_MESSAGE'					=> 'Cevaplanmış mesaj',
	'RESIGN_SELECTED'					=> 'Seçilen gruptan ayrıl',
	'RETURN_FOLDER'						=> '%1$sÖnceki klasöre geri dön%2$s',
	'RETURN_UCP'						=> '%sKullanıcı Paneline geri dön%s',
	'RULE_ADDED'						=> 'Kural eklendi.',
	'RULE_ALREADY_DEFINED'				=> 'Bu kural önceden tanımlanmış.',
	'RULE_DELETED'						=> 'Kural silindi.',
	'RULE_NOT_DEFINED'					=> 'Kural tanımı doğru değil.',
	'RULE_REMOVED_MESSAGE'				=> 'Özel mesaj filtrelerine uyan bir mesaj silindi.',
	'RULE_REMOVED_MESSAGES'				=> 'Özel mesaj filtrelerine uyan %d mesaj silindi.',

	'SAME_PASSWORD_ERROR'		=> 'Oluşturmak istediğiniz parola eskisiyle aynı.',
	'SEARCH_YOUR_POSTS'			=> 'iletilerinize bakın',
	'SEND_PASSWORD'				=> 'Parola gönder',
	'SENT_AT'					=> 'Tarih', // Sent // Used before dates in private messages
	'SHOW_EMAIL'				=> 'Kullanıcılar benimle e-posta ile iletişim kurabilir',
	'SIGNATURE_EXPLAIN'			=> 'Buraya yazacağınız metin iletinize eklenecektir. Kullanabileceğiniz karakter limiti: %d.',
	'SIGNATURE_PREVIEW'			=> 'Gönderdiğiniz mesajlarda imzanız burdaki gibi gösterilecek',
	'SIGNATURE_TOO_LONG'		=> 'İmzanız çok uzun.',
	'SORT'						=> 'Sırala',
	'SORT_COMMENT'				=> 'Dosya açıklaması',
	'SORT_DOWNLOADS'			=> 'İndirilme',
	'SORT_EXTENSION'			=> 'Uzantı',
	'SORT_FILENAME'				=> 'Dosya adı',
	'SORT_POST_TIME'			=> 'Gönderim zamanı',
	'SORT_SIZE'					=> 'Boyutu',

	'TIMEZONE'					=> 'Zaman dilimi',
	'TO'						=> 'Kime',
	'TOO_MANY_RECIPIENTS'		=> 'Çok fazla alıcı için mesaj göndermeyi denediniz.',
	'TOO_MANY_REGISTERS'		=> 'Bu oturum için maksimum kayıt denemesini aştınız. Lütfen daha sonra tekrar deneyin.',

	'UCP'						=> 'Kullanıcı paneli',
	'UCP_ACTIVATE'				=> 'Hesabı aktif et',
	'UCP_ADMIN_ACTIVATE'		=> 'Lütfen hesabınızı aktif hale getirebilmek için geçerli bir e-posta adres girin. Yönetici hesabınızı gözden geçirecek ve eğer uygunsa verdiğiniz adrese bir e-posta gönderecek.',
	'UCP_AIM'					=> 'AOL instant messenger',
	'UCP_ATTACHMENTS'			=> 'Eklentileri',
	'UCP_COPPA_BEFORE'			=> '%s tarihinden önce',
	'UCP_COPPA_ON_AFTER'		=> '%s tarihinden sonra',
	'UCP_EMAIL_ACTIVATE'		=> 'Lütfen hesabınızı aktif hale getirebilmek için geçerli bir e-posta adres girin. Verdiğiniz adrese hesabınızı aktif hale getirmenizi sağlayacak bağlantıyı barındıran bir e-posta gelecektir.',
	'UCP_ICQ'					=> 'ICQ numarası',
	'UCP_JABBER'				=> 'Jabber adresi',

	'UCP_MAIN'					=> 'Genel görünüm',
	'UCP_MAIN_ATTACHMENTS'		=> 'Eklenti yönetimi',
	'UCP_MAIN_BOOKMARKS'		=> 'Sık kullanılanlar',
	'UCP_MAIN_DRAFTS'			=> 'Taslak yönetimi',
	'UCP_MAIN_FRONT'			=> 'Ön sayfa',
	'UCP_MAIN_SUBSCRIBED'		=> 'Abonelikler',

	'UCP_MSNM'					=> 'MSNM/WLM messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Hiç eklenti göndermemişsiniz.',

	'UCP_PREFS'					=> 'Tercihler', // Board preferences
	'UCP_PREFS_PERSONAL'		=> 'Genel ayarlar',
	'UCP_PREFS_POST'			=> 'İleti gönderme',
	'UCP_PREFS_VIEW'			=> 'Görüntüleme seçenekleri',

	'UCP_PM'					=> 'Özel mesajlar',
	'UCP_PM_COMPOSE'			=> 'Mesaj yaz',
	'UCP_PM_DRAFTS'				=> 'Mesaj taslakları',
	'UCP_PM_OPTIONS'			=> 'Seçenekler',
	'UCP_PM_POPUP'				=> 'Özel mesaj',
	'UCP_PM_POPUP_TITLE'		=> 'Özel mesaj penceresi',
	'UCP_PM_UNREAD'				=> 'Okunmamış mesajlar',
	'UCP_PM_VIEW'				=> 'Mesajları görüntüle',

	'UCP_PROFILE'				=> 'Hesap bilgileri',
	'UCP_PROFILE_AVATAR'		=> 'Avatarınız',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Profiliniz',
	'UCP_PROFILE_REG_DETAILS'	=> 'Hesap ayarları',
	'UCP_PROFILE_SIGNATURE'		=> 'İmzanız',

	'UCP_USERGROUPS'			=> 'Kullanıcı grupları',
	'UCP_USERGROUPS_MEMBER'		=> 'Üyelikler',
	'UCP_USERGROUPS_MANAGE'		=> 'Grupları yönet',

	'UCP_REGISTER_DISABLE'					=> 'Yeni bir hesap oluşturmak şu anda mümkün değil',
	'UCP_REMIND'							=> 'Parola gönder',
	'UCP_RESEND'							=> 'Aktivasyon e-postası gönder',
	'UCP_WELCOME'							=> '<strong>Kullanıcı Paneline hoşgeldiniz. </strong><br />Bu sayfa aracılığıyla profilinizi, seçeneklerinizi, abone olduğunuz forum ve konuları görebilir ve değiştirebilirsiniz. Eğer izin veriliyorsa diğer kullanıcılara özel mesajlar gönderebilirsiniz. Devam etmeden önce, eğer mevcut duyuru varsa lütfen bunları okuyunuz.',
	'UCP_YIM'								=> 'Yahoo messenger',
	'UCP_ZEBRA'								=> 'Arkadaş &amp; yasaklılar',
	'UCP_ZEBRA_FOES'						=> 'Yasaklılar',
	'UCP_ZEBRA_FRIENDS'						=> 'Arkadaşlar',
	'UNKNOWN_FOLDER'						=> 'Bilinmeyen klasör',
	'UNWATCH_MARKED'						=> 'İzlemeyi bırak',
	'UPLOAD_AVATAR_FILE'					=> 'Bilgisayarınızdan yükleyin',
	'UPLOAD_AVATAR_URL'						=> 'Başka bir adresten yükleyin',
	'UPLOAD_AVATAR_URL_EXPLAIN'				=> 'Resmin bulunduğu sitenin adresini girin, resim siteye kopyalanacak.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'			=> 'Kullanıcı adı %1$d ile %2$d karakter arasında ve sadece harf ve rakamlardan oluşmalıdır.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'		=> 'Kullanıcı adı  %1$d ile %2$d karakter arasında olmalı ve sadece harf, rakam, boşluk ya da -+_[]’lerden oluşmalıdır.',
	'USERNAME_ASCII_EXPLAIN'				=> 'Kullanıcı adı %1$d ile %2$d karakter arasında olmalı ve sadece ASCII karakterlerden oluşmalıdır, yani herhangi bir özel karakter kullanılmamalıdır.',
	'USERNAME_LETTER_NUM_EXPLAIN'			=> 'Kullanıcı adı %1$d ile %2$d karakter arasında olmalı ve sadece harf ve numara içeren karakterlerden oluşmalıdır.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'	=> 'Kullanıcı adı %1$d ile %2$d karakter uzunluğunda olmalı ve harf, rakam boşluk ya da -+_[] içeren karakterler kullanılmalıdır.',
	'USERNAME_CHARS_ANY_EXPLAIN'			=> 'Uzunluk, %1$d ve %2$d karakter arasında olmalıdır.',
	'USERNAME_TAKEN_USERNAME'				=> 'Girdiğiniz kullanıcı adı bir başkası tarafından kullanılıyor. Lütfen başka bir kullanıcı adı seçiniz.',
	'USERNAME_DISALLOWED_USERNAME'			=> 'Girdiğiniz kullanıcı adına izin verilmiyor veya izin verilmeyen bir kelime içeriyor. Lütfen başka bir kullanıcı adı seçiniz.',
	'USER_NOT_FOUND_OR_INACTIVE'			=> 'Girdiğiniz kullanıcı adları daha önceden bulunmayan ya da aktif hale getirilmemiş olmalıdır.',

	'VIEW_AVATARS'				=> 'Avatarları göster',
	'VIEW_EDIT'					=> 'Göster/Değiştir',
	'VIEW_FLASH'				=> 'Flash animasyonlarını göster',
	'VIEW_IMAGES'				=> 'İletilerdeki resimleri göster',
	'VIEW_NEXT_HISTORY'			=> 'Sonraki mesaj', // Mesaj geçmişindeki sonraki ÖM
	'VIEW_NEXT_PM'				=> 'Sonraki mesaj', // Sonraki ÖM
	'VIEW_PM'					=> 'Mesaja bak',
	'VIEW_PM_INFO'				=> 'Mesaj detayları',
	'VIEW_PM_MESSAGE'			=> '1 mesaj',
	'VIEW_PM_MESSAGES'			=> '%d mesaj',
	'VIEW_PREVIOUS_HISTORY'		=> 'Önceki', // Mesaj geçmişindeki önceki ÖM
	'VIEW_PREVIOUS_PM'			=> 'Önceki mesaj', // Önceki ÖM
	'VIEW_SIGS'					=> 'İmzaları göster',
	'VIEW_SMILIES'				=> 'İfadeleri resim olarak göster',
	'VIEW_TOPICS_DAYS'			=> 'Bir önceki günden bu yana gönderilen başlıkları göster',
	'VIEW_TOPICS_DIR'			=> 'Başlıkların sıralanma düzeni',
	'VIEW_TOPICS_KEY'			=> 'Başlıkların gösterim düzeni',
	'VIEW_POSTS_DAYS'			=> 'Önceki iletileri göster',
	'VIEW_POSTS_DIR'			=> 'İletilerin sıralanma düzeni',
	'VIEW_POSTS_KEY'			=> 'İletilerin gösterim düzeni',

	'WATCHED_EXPLAIN'			=> 'Bu sayfada, abone olup takip ettiğiniz konu ve forumların bir listesi sunulmaktadır. Bir başka deyişle, bu listede yer alan forum ve konulara yeni iletiler yazıldığında sistem tarafından otomatik olarak bilgilendiriliyorsunuz. Eğer listede izlemek istemediğiniz forum ya da başlıklar varsa, bunları işaretleyip, "İzlemeyi bırak" butonuna tıklayarak izlemeyi iptal edebilirsiniz.',
	'WATCHED_FORUMS'			=> 'İzlenen forumlar',
	'WATCHED_TOPICS'			=> 'İzlenen konular',
	'WRONG_ACTIVATION'			=> 'Girmiş olduğunuz aktivasyon kodu veritabınındaki ile uyuşmuyor.',

	'YOUR_DETAILS'				=> 'Aktiviteleriniz',
	'YOUR_FOES'					=> 'Yasaklı listeniz',
	'YOUR_FOES_EXPLAIN'			=> 'Kullanıcı silmek için işaretleyin ve gönder butonuna tıklayın.',
	'YOUR_FRIENDS'				=> 'Arkadaş listeniz',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Kullanıcı silmek için işaretleyin ve gönder butonuna tıklayın.',
	'YOUR_WARNINGS'				=> 'Uyarı seviyeniz',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Klasöre yerleştir',
		'MARK_AS_READ'		=> 'Okundu olarak işaretle',
		'MARK_AS_IMPORTANT'	=> 'Mesajı işaretle',
		'DELETE_MESSAGE'	=> 'Mesajı sil'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Konu',
		'SENDER'	=> 'Gönderen',
		'MESSAGE'	=> 'Mesaj',
		'STATUS'	=> 'Mesaj durumu',
		'TO'		=> 'Alıcı' // Kime
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'benzer ise',
		'IS_NOT_LIKE'	=> 'benzemeyen ise',
		'IS'			=> 'olan ise',
		'IS_NOT'		=> 'olmayan ise',
		'BEGINS_WITH'	=> 'ile başlıyorsa',
		'ENDS_WITH'		=> 'ile bitiyorsa',
		'IS_FRIEND'		=> 'arkadaş ise',
		'IS_FOE'		=> 'yasaklı ise',
		'IS_USER'		=> 'kullanıcı ise',
		'IS_GROUP'		=> 'grupta ise',
		'ANSWERED'		=> 'cevaplanmış',
		'FORWARDED'		=> 'yönlendirilmiş',
		'TO_GROUP'		=> 'varsayılan kullanıcı grubuma',
		'TO_ME'			=> 'bana'
	),

	'GROUPS_EXPLAIN'	=> 'Kullanıcı grupları, kullanıcıları daha iyi yönetmek için pano yöneticisi tarafından aktif edilir. Varsayılan olarak başında işaret olan gruba yerleştirildiniz. Bu grup diğer kullanıcılar arasında nasıl görüneceğini tanımlar, örneğin üye adı renginiz, avatar, rütbe, vb. Yönetici izinlerine bağılı olarak, varsayılan grubunuzu değiştirebilirsiniz. Ayrıca izin verilen diğer gruplara da kayılabilirsiniz. Bazı gruplar size içerik görüntüleme ve diğer bölgeleri görüntüleme gibi ek izinler verebilir.',
	'GROUP_LEADER'		=> 'Liderlik',
	'GROUP_MEMBER'		=> 'Üyelik',
	'GROUP_PENDING'		=> 'Bekleyen üyelikler',
	'GROUP_NONMEMBER'	=> 'Grup üyeliği yok',
	'GROUP_DETAILS'		=> 'Grup detayları',

	'NO_LEADER'		=> 'Grup liderliği yok',
	'NO_MEMBER'		=> 'Grupta üyelik yok',
	'NO_PENDING'	=> 'Bekleyen üyelik yok',
	'NO_NONMEMBER'	=> 'Üyesiz grup yok',
));

?>