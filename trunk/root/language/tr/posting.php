<?php
/*
*
* posting [Turkish]
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

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Dosya ekle', // Eklenti yükle
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Eğer bir veya daha fazla eklenti göndermek istiyorsanız lütfen detayları giriniz.',
	'ADD_FILE'					=> 'Dosyayı ekle',
	'ADD_POLL'					=> 'Anket oluştur',
	'ADD_POLL_EXPLAIN'			=> 'Eğer konuya anket eklemek istemiyorsanız burayı boş bırakınız.',
	'ALREADY_DELETED'			=> 'Üzgünüz, ama bu ileti zaten silinmiş.',
	'ATTACH_QUOTA_REACHED'		=> 'Üzgünüz, ama izin verilen pano eklenti limitine ulaşıldı.',
	'ATTACH_SIG'				=> 'İmza ekle (imza Kullanıcı Paneli’nden değiştirilebilir)',

	'BBCODE_A_HELP'				=> 'Satır içi yüklenmiş eklenti: [attachment=]dosyaadı.uzt[/attachment]',
	'BBCODE_B_HELP'				=> 'Kalın yazı: [b]yazı[/b]',
	'BBCODE_C_HELP'				=> 'Kod görüntüle: [code]kod[/code]',
	'BBCODE_E_HELP'				=> 'Liste: Liste öğesi ekle',
	'BBCODE_F_HELP'				=> 'Yazı büyüklüğü: [size=85]küçük yazı[/size]',
	'BBCODE_IS_OFF'				=> '%sBiçim kodu%s <em>KAPALI</em>',
	'BBCODE_IS_ON'				=> '%sBiçim kodu%s <em>AÇIK</em>',
	'BBCODE_I_HELP'				=> 'Eğik yazı: [i]yazı[/i]',
	'BBCODE_L_HELP'				=> 'Liste: [list]yazı[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Liste elemanı: [*]yazı[/*]',
	'BBCODE_O_HELP'				=> 'Sıralı liste: [list=]yazı[/list]',
	'BBCODE_P_HELP'				=> 'Resim ekle: [img]http://resim_url[/img]',
	'BBCODE_Q_HELP'				=> 'Alıntı yazı: [quote]yazı[/quote]',
	'BBCODE_S_HELP'				=> 'Yazı rengi: [color=red]yazı[/color] İpucu: color=#FF0000 şeklinde de kullanabilirsiniz',
	'BBCODE_U_HELP'				=> 'Altı çizili yazı: [u]yazı[/u]',
	'BBCODE_W_HELP'				=> 'Bağlantı ekle: [url]http://url[/url] veya [url=http://url]bağlantı bilgisi[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=genişlik,yükseklik]http://url[/flash]',
	'BUMP_ERROR'				=> 'Son iletinizden bu kadar kısa bir süre sonra bu konuyu güncelleyemezsiniz', 

	'CANNOT_DELETE_REPLIED'		=> 'Üzgünüz, sadece <strong>yanıtlanmamış</stron> iletilerinizi silebilirsiniz.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Bu ileti kilitli. Artık değişiklik yapamazsınız.',
	'CANNOT_EDIT_TIME'			=> 'Bu iletiyi artık değiştiremez veya silemezsiniz',
	'CANNOT_POST_ANNOUNCE'		=> 'Üzgünüz, duyuru gönderemezsiniz.',
	'CANNOT_POST_STICKY'		=> 'Üzgünüz, sabit konu gönderemezsiniz.',
	'CHANGE_TOPIC_TO'			=> 'Konu türünü değiştir',
	'CLOSE_TAGS'				=> 'Etiketleri kapat',
	'CURRENT_TOPIC'				=> 'Geçerli konu',

	'DELETE_FILE'				=> 'Dosyayı sil',
	'DELETE_MESSAGE'			=> 'İletiyi sil',
	'DELETE_MESSAGE_CONFIRM'	=> 'Bu iletiyi silmek istediğinizden emin misiniz?',
	'DELETE_OWN_POSTS'			=> 'Üzgünüz ama sadece kendi iletilerinizi silebilirsiniz.',
	'DELETE_POST_CONFIRM'		=> 'Bu iletiyi silmek istediğinizden emin misiniz?',
	'DELETE_POST_WARN'			=> 'Silinen iletinin geri dönüşümü mümkün değildir',
	'DISABLE_BBCODE'			=> 'Biçim kodu kapat',
	'DISABLE_MAGIC_URL'			=> 'Linkleri otomatik ayrıştırma',
	'DISABLE_SMILIES'			=> 'İfadeleri kapat',
	'DISALLOWED_CONTENT'		=> 'Dosya kabul edilmedi, çünkü yüklenmek istenen dosya olası bir saldırı tehdidi olarak algılandı.',
	'DISALLOWED_EXTENSION'		=> '%s uzantısı kabul edilmiyor.',
	'DRAFT_LOADED'				=> 'Taslak, mesaj gönderim alanına yüklendi, dilerseniz şimdi iletinizi tamamlayabilirsiniz.<br />Bu iletiyi gönderdikten sonra taslak otomatik olarak silinecektir.',
	'DRAFT_SAVED'				=> 'Taslak kaydedildi.',
	'DRAFT_TITLE'				=> 'Taslak başlığı',

	'EDIT_REASON'				=> 'İletiyi değiştirme sebebi',
	'EMPTY_FILEUPLOAD'			=> 'Yüklemek istediğiniz dosya boş.',
	'EMPTY_MESSAGE'				=> 'Göndermek için bir ileti yazmalısınız.',
	'EMPTY_REMOTE_DATA'			=> 'Dosya yüklenemedi, lütfen dosyayı el ile yüklemeyi deneyiniz.', // bug track da kayıtlı

	'FLASH_IS_OFF'				=> '[flash] <em>KAPALI</em>',
	'FLASH_IS_ON'				=> '[flash] <em>AÇIK</em>',
	'FLOOD_ERROR'				=> 'Bir iletiden sonra bu kadar çabuk başka bir ileti gönderemezsiniz.',
	'FONT_COLOR'				=> 'Yazı rengi',
	'FONT_COLOR_HIDE'			=> 'Yazı rengini gizle',
	'FONT_HUGE'					=> 'Çok büyük',
	'FONT_LARGE'				=> 'Büyük',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Yazı boyutu',
	'FONT_SMALL'				=> 'Küçük',
	'FONT_TINY'					=> 'Çok küçük',

	'GENERAL_UPLOAD_ERROR'		=> '%s eklentisi yüklenemedi.',

	'IMAGES_ARE_OFF'			=> '[img] <em>KAPALI</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>AÇIK</em>',
	'INVALID_FILENAME'			=> '%s geçersiz bir dosya adıdır.',

	'LOAD'						=> 'Yükle',
	'LOAD_DRAFT'				=> 'Taslaktan yükle',
	'LOAD_DRAFT_EXPLAIN'		=> 'Buradan yazmaya devam etmek istediğiniz taslağı seçebilirsiniz. Geçerli olan tüm içerik silinecek ve ileti iptal edilecektir. Taslakları Kullanıcı Paneli’nden görebilir, değiştirebilir ve silebilirsiniz.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Bu forumdaki konuları güncellemek için oturum açmalısınız.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Bu forumdan ileti silebilmek için oturum açmalısınız.',
	'LOGIN_EXPLAIN_POST'		=> 'Bu foruma ileti yazabilmek için oturum açmalısınız.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Bu forumda alıntı yapabilmek için oturum açmalısınız.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Bu forumda konulara cevap yazabilmek için oturum açmalısınız.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Sadece %1$d boyutuna kadar olan yazı boyutlarını kullanabilirsiniz.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Flash dosyanızın yüksekliği en fazla %1$d px olabilir.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Flash dosyanızın genişliği en fazla %1$d px olabilir.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Resminizin yüksekliği en fazla %1$d px olabilir.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Resminizin genişliği en fazla %1$d px olabilir.',

	'MESSAGE_BODY_EXPLAIN'		=> 'İletinizi buraya yazın, en fazla <strong>%d</strong> karakter yazabilirsiniz.',
	'MESSAGE_DELETED'			=> 'Mesaj silindi.',
	'MORE_SMILIES'				=> 'Daha fazla ifade göster',

	'NOTIFY_REPLY'				=> 'Bu konuya cevap yazıldığında beni uyar',
	'NOT_UPLOADED'				=> 'Dosya yüklenemedi.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Mevcut olan anket seçeneğini silemezsiniz.',
	'NO_PM_ICON'				=> 'İkon yok', // No PM icon
	'NO_POLL_TITLE'				=> 'Anket başlığı yazmalısınız.',
	'NO_POST'					=> 'Talep edilen ileti mevcut değil.',
	'NO_POST_MODE'				=> 'Gönderme metodu belirtilmedi.',

	'PARTIAL_UPLOAD'			=> 'Yüklenen dosya sadece kısmen yüklenebildi.', 
	'PHP_SIZE_NA'				=> 'Eklentinin boyutu çok büyük.<br />PHP tarafından belirlenmiş php.ini dosyasında geçerli olan dosya boyutu aşılamaz.',
	'PHP_SIZE_OVERRUN'			=> 'Eklentinin boyutu çok büyük, gönderilebilecek dosyanın boyutu en fazla %1$d %2$s olabilir.<br />php.ini dosyası tarafından belirlenen bu boyut değiştirilemez.',
	'PLACE_INLINE'				=> 'Satır içine yerleştir',
	'POLL_DELETE'				=> 'Anket sil',
	'POLL_FOR'					=> 'Anketi çalıştır',
	'POLL_FOR_EXPLAIN'			=> 'Hiç sonlanmayacak bir anket için 0 yazın veya boş bırakın.',
	'POLL_MAX_OPTIONS'			=> 'Kullanıcı başına seçenek',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Oy kullanırken kullanıcıların seçebileceği en fazla seçenek sayısı.',
	'POLL_OPTIONS'				=> 'Anket seçenekleri',
	'POLL_OPTIONS_EXPLAIN'		=> 'Her seçeneği ayrı bir satıra yazınız. En fazla <strong>%d</strong> seçenek yazabilirsiniz.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Her bir seçeneği yeni bir satıra yazınız. En fazla <strong>%d</strong> seçenek yazabilirsiniz. Eğer seçenek ekler veya silerseniz, önceki tüm oylamalar sıfırlanacaktır.',
	'POLL_QUESTION'				=> 'Anket sorusu',
	'POLL_TITLE_TOO_LONG'		=> 'Anket başlığı 100 karakterden az olmalıdır.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Anket başlığınız düzenlenmiş haliyle çok uzun, biçim kodu etiketlerinin ve ifadelerin bir kısmını temizleyiniz.',
	'POLL_VOTE_CHANGE'			=> 'Tekrar oylama',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Eğer izin verilirse, kullanıcılar oylarını değiştirebilir.',
	'POSTED_ATTACHMENTS'		=> 'Gönderilmiş eklentiler',
	'POST_APPROVAL_NOTIFY'		=> 'İletiniz onaylandığında haberdar edileceksiniz.',
	'POST_CONFIRMATION'			=> 'Gönderme için doğrulama',
	'POST_CONFIRM_EXPLAIN'		=> 'Otomatik ileti göndermeyi engellemek için pano yöneticisi doğrulama kodu girmenizi zorunlu tutmuş. Kod aşağıdaki resim içinde gösterilmekte. Eğer görsel olarak bozuksa veya kodu okuyamıyorsanız lütfen %spano yöneticisi%s ile irtibata geçin.',
	'POST_DELETED'				=> 'İleti silindi',
	'POST_EDITED'				=> 'İleti değiştirildi',
	'POST_EDITED_MOD'			=> 'İleti değiştirildi, fakat üyeler tarafından okunabilir olması için bir yönetici tarafından onaylanması gerekiyor.',
	'POST_GLOBAL'				=> 'Genel',
	'POST_ICON'					=> 'İleti ikonu',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'			    => 'İletiyi kontrol et',
	'POST_REVIEW_EXPLAIN'		=> 'Bu konuya en az bir yeni ileti yazıldı. İletinizi bu bilgi ışığında gözden geçirebilirsiniz.',
	'POST_STORED'				=> 'İleti gönderildi.',
	'POST_STORED_MOD'			=> 'İleti kayıt edildi, fakat üyeler tarafından okunabilir olması için bir yönetici tarafından onaylanması gerekiyor.',
	'POST_TOPIC_AS'				=> 'Konu türü',
	'PROGRESS_BAR'				=> 'İlerleme çubuğu',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Sadece %1$d alıntıyı iç içe yazabilirsiniz.',

	'SAVE'						=> 'Kaydet',
	'SAVE_DATE'					=> 'Kayıt tarihi',
	'SAVE_DRAFT'				=> 'Taslak olarak kaydet',
	'SAVE_DRAFT_CONFIRM'		=> 'Lütfen dikkat, taslaklar yalnızca ileti konusu ve ileti içeriğini kaydeder, diğer elemanlar silinecektir. Taslağı şimdi kaydetmek istiyor musunuz?',
	'SMILIES'					=> 'İfadeler',
	'SMILIES_ARE_OFF'			=> 'İfadeler <em>KAPALI</em>',
	'SMILIES_ARE_ON'			=> 'İfadeler <em>AÇIK</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Sabit/Duyuru zaman limiti',
	'STICK_TOPIC_FOR'			=> 'Sabit yap',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Hiç sonlanmayacak Sabit/Duyuru için 0 yazın veya boş bırakın.', 
	'STYLES_TIP'				=> 'İpucu: Biçimleri hızlı uygulamak için metinleri seçebilirsiniz.',

	'TOO_FEW_CHARS'				=> 'İletiniz çok az karakter içeriyor.',
	'TOO_FEW_POLL_OPTIONS'		=> 'En az iki tane anket seçeneği yazmalısınız.',
	'TOO_MANY_ATTACHMENTS'		=> 'Başka bir eklenti ekleyemezsiniz, en fazla %d.',
	'TOO_MANY_CHARS'			=> 'İletiniz çok fazla karakter içeriyor.',
	'TOO_MANY_CHARS_POST'		=> 'İletiniz %1$d karakter içermektedir. İzin verilen karakter sayısı en fazla %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'İmzanız %1$d karakter içermektedir. İzin verilen karakter sayısı en fazla %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Çok fazla anket seçeneği yazmayı denediniz.',
	'TOO_MANY_SMILIES'			=> 'İletiniz çok fazla ifade içeriyor. En fazla %d ifade kabul ediliyor.',
	'TOO_MANY_URLS'				=> 'İletiniz çok fazla adres içeriyor. En fazla %d adres kabul ediliyor.',
	'TOO_MANY_USER_OPTIONS'		=> 'Kullanıcı başına verilen seçme hakkı, mevcut olan anket seçeneklerinden fazla olamaz.',
	'TOPIC_BUMPED'				=> 'Konu güncellendi.',

	'UNAUTHORISED_BBCODE'		=> 'Kesin olarak kullanamayacağınız biçimler: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Konuyu genel duyurudan normal konuya çevirmek için konunun görüntüleneceği forumu belirtmek zorundasınız.',
	'UPDATE_COMMENT'			=> 'Yorumu güncelle',
	'URL_INVALID'				=> 'Girdiğiniz bağlantı geçersiz.',
	'URL_NOT_FOUND'				=> 'Belirtilen dosya bulunamadı.',
	'URL_IS_OFF'				=> '[url] <em>KAPALI</em>',
	'URL_IS_ON'					=> '[url] <em>AÇIK</em>',
	'USER_CANNOT_BUMP'			=> 'Bu forumda konuları güncel tutamazsınız.',
	'USER_CANNOT_DELETE'		=> 'Bu forumda ileti silemezsiniz.',
	'USER_CANNOT_EDIT'			=> 'Bu forumda ileti düzenleyemezsiniz.',
	'USER_CANNOT_REPLY'			=> 'Bu forumda iletilere cevap yazamazsınız.',
	'USER_CANNOT_FORUM_POST'	=> 'Bu forum üzerinde ileti gönderemiyor olmanızın olası sebebi forum tipinin iletinizi desteklemiyor olmasıdır.',

	'VIEW_MESSAGE'				=> '%sGönderdiğiniz iletiye bakın%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sGönderdiğiniz özel mesaja bakın%s',

	'WRONG_FILESIZE'			=> 'Dosya çok büyük, en fazla dosya boyutu %1d %2s',
	'WRONG_SIZE'				=> 'Seçtiğiniz resim en az %1$d px genişliğinde, %2$d px yüksekliğinde ve en fazla %3$d px genişliğinde, %4$d px yüksekliğinde olabilir. Seçtiğiniz resim %5$d px genişliğinde ve %6$d px yüksekliğindedir.',
));

?>