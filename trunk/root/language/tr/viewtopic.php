<?php
/**
* @version $Id$
* @author Sevdin Filiz <angelside@users.sourceforge.net>
* @copyright (c) 2009, Canver Software <http://www.canversoft.net>
*/

// değiştirmeyin
if (!defined('IN_PHPBB')) { exit; }
if (empty($lang) || !is_array($lang)) { $lang = array(); }

// dil değişkenleri
$lang = array_merge($lang, array(
	'ATTACHMENT'						=> 'Eklenti',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Eklenti özelliği kapalı.',

	'BOOKMARK_ADDED'		=> 'Konu sık kullanılanlara eklendi.',
	'BOOKMARK_ERR'			=> 'Sık kullanılanlara ekleme başarısız oldu. Lütfen tekrar deneyiniz.',
	'BOOKMARK_REMOVED'		=> 'Konu sık kullanılanlardan silindi.',
	'BOOKMARK_TOPIC'		=> 'Sık kullanılanlara ekle',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Sık kullanılanlardan sil',
	'BUMPED_BY'				=> 'Son güncel tutan %1$s, %2$s.',
	'BUMP_TOPIC'			=> 'Konuyu güncelle',

	'CODE'					=> 'Kod',

	'DELETE_TOPIC'			=> 'Sil',
	'DOWNLOAD_NOTICE'		=> 'Bu iletideki ekleri görmek için gerekli yetkilere sahip değilsiniz.',

	'EDITED_TIMES_TOTAL'	=> 'En son %1$s tarafından, %2$s tarihinde değiştirildi, toplamda %3$d değişiklik yapıldı.',
	'EDITED_TIME_TOTAL'		=> 'En son %1$s tarafından, %2$s tarihinde değiştirildi, toplamda %3$d değişiklik yapıldı.',
	'EMAIL_TOPIC'			=> 'Arkadaşına gönder',
	'ERROR_NO_ATTACHMENT'	=> 'Seçilen eklenti mevcut değil.', // The selected attachment does not exist anymore
	
	'FILE_NOT_FOUND_404'	=> '<strong>%s</strong> dosyası mevcut değil.',
	'FORK_TOPIC'			=> 'Kopyala',

	'LINKAGE_FORBIDDEN'			=> 'Bu panodaki eklentileri görüntülemeye, indirmeye veya link ile bağlanmaya yetkiniz yok.',
	'LOGIN_NOTIFY_TOPIC'		=> 'Bu konu hakkında bilgilendirildiniz, görüntüleyebilmek için oturum açmanız gerekmektedir.',
	'LOGIN_VIEWTOPIC'			=> 'Pano zorunlulukları gereği, konuyu görüntüleyebilmeniz için kayıtlı kullanıcı olmanız ve oturum açmanız gerekmektedir.',

	'MAKE_ANNOUNCE'				=> 'Duyuru yap',
	'MAKE_GLOBAL'				=> 'Genel yap',
	'MAKE_NORMAL'				=> 'Normal yap',
	'MAKE_STICKY'				=> 'Sabit yap',
	'MAX_OPTIONS_SELECT'		=> 'En fazla <strong>%d</strong> seçenek işaretleyebilirsiniz.',
	'MAX_OPTION_SELECT'			=> 'En fazla <strong>1</strong> seçenek işaretleyebilirsiniz.',
	'MISSING_INLINE_ATTACHMENT'	=> '<strong>%s</strong> eklentisi mevcut değil',
	'MOVE_TOPIC'				=> 'Taşı',

	'NO_ATTACHMENT_SELECTED'=> 'İndirmek veya görüntülemek için bir eklenti seçmediniz.',
	'NO_NEWER_TOPICS'		=> 'Bu forumda daha yeni konu mevcut değil.',
	'NO_OLDER_TOPICS'		=> 'Bu forumda daha eski konu mevcut değil.',
	'NO_UNREAD_POSTS'		=> 'Bu konuda okunmamış yeni ileti yok.',
	'NO_VOTE_OPTION'		=> 'Oylamaya katılmak için bir seçenek seçmelisiniz.',
	'NO_VOTES'				=> 'Oy yok',
	
	'POLL_ENDED_AT'			=> 'Oylama bitti: %s',
	'POLL_RUN_TILL'			=> 'Oylama bitiş tarihi: %s',
	'POLL_VOTED_OPTION'		=> 'Bu seçeneğe oy verdiniz',
	'PRINT_TOPIC'			=> 'Yazıcı görüntüsü',

	'QUICK_MOD'				=> 'Yetkili araçları',
	'QUOTE'					=> 'Alıntı',

	'REPLY_TO_TOPIC'		=> 'Konuya cevap yaz',
	'RETURN_POST'			=> '%sİletiye dön%s',

	'SUBMIT_VOTE'			=> 'Oy ekle',

	'TOTAL_VOTES'			=> 'Toplam oy',

	'UNLOCK_TOPIC'			=> 'Kilidi aç',

	'VIEW_INFO'				=> 'İleti detayları',
	'VIEW_NEXT_TOPIC'		=> 'Sonraki konu',
	'VIEW_PREVIOUS_TOPIC'	=> 'Önceki konu',
	'VIEW_RESULTS'			=> 'Sonuçlar',
	'VIEW_TOPIC_POST'		=> '1 ileti',
	'VIEW_TOPIC_POSTS'		=> '%d ileti',
	'VIEW_UNREAD_POST'		=> 'İlk okunmamış ileti',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Oyunuz eklendi.',
	'VOTE_CONVERTED'		=> 'Dönüştürülen anketlerde oyları değiştirme özelliği desteklenmiyor',	
));

?>