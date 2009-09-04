<?php
/*
*
* mcp [Turkish]
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
	'ACTION'				=> 'İşlem',
	'ACTION_NOTE'			=> 'İşlem/Not',
	'ADD_FEEDBACK'			=> 'Geri bildirim ekle',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Bir geri bildirim eklemek için aşağıdaki formu doldurun. Sadece düz yazı kullanın; HTML, biçim kodu, vb. izin yok.',
	'ADD_WARNING'			=> 'Uyarı ekle',
	'ADD_WARNING_EXPLAIN'	=> 'Bu kullanıcıya bir uyarı göndermek için aşağıdaki formu kullanabilirsiniz. Sadece düz yazı kullanın; HTML, biçim kodu, vb. izin yok.',
	'ALL_ENTRIES'			=> 'Tüm kayıtlar',
	'ALL_NOTES_DELETED'		=> 'Tüm kullanıcı notları silindi.',
	'ALL_REPORTS'			=> 'Tüm raporlar',
	'ALREADY_REPORTED'		=> 'Bu ileti zaten rapor edilmiş.',
	'ALREADY_WARNED'		=> 'Bu ileti için bir uyarı zaten yapılmış.',
	'APPROVE'				=> 'Onayla',
	'APPROVE_POST'			=> 'İletiyi onayla',
	'APPROVE_POST_CONFIRM'	=> 'Bu iletiyi onaylamak istediğinizden emin misiniz?',
	'APPROVE_POSTS'			=> 'İletileri onayla',
	'APPROVE_POSTS_CONFIRM'	=> 'Seçilen iletileri onaylamak istediğinizden emin misiniz?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Bir konuyu zaten bulunduğu foruma taşıyamazsınız.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Kayıt olmamış misafir kullanıcılara uyarı veremezsiniz.',
	'CANNOT_WARN_SELF'		=> 'Kendinize uyarı veremezsiniz.',
	'CAN_LEAVE_BLANK'		=> 'Boş bırakabilirsiniz.',
	'CHANGE_POSTER'			=> 'Göndereni değiştir',
	'CLOSE_REPORT'			=> 'Raporu kapat',
	'CLOSE_REPORT_CONFIRM'	=> 'Seçilen raporu kapatmak istediğinizden emin misiniz?',
	'CLOSE_REPORTS'			=> 'Raporları kapat',
	'CLOSE_REPORTS_CONFIRM'	=> 'Seçilen raporları kapatmak istediğinizden emin misiniz?',

	'DELETE_POSTS'				=> 'Seçilen iletileri sil',
	'DELETE_POSTS_CONFIRM'		=> 'Bu iletileri silmek istediğinizden emin misiniz?',
	'DELETE_POST_CONFIRM'		=> 'Bu iletiyi silmek istediğinizden emin misiniz?',
	'DELETE_REPORT'				=> 'Rapor sil',
	'DELETE_REPORT_CONFIRM'		=> 'Seçilen raporu silmek istediğinizden emin misiniz?',
	'DELETE_REPORTS'			=> 'Raporları sil',
	'DELETE_REPORTS_CONFIRM'	=> 'Seçilen raporları silmek istediğinizden emin misiniz?',
	'DELETE_SHADOW_TOPIC'		=> 'Konu gölgesini sil',	
	'DELETE_TOPICS'				=> 'Seçilen konuları sil',
	'DELETE_TOPICS_CONFIRM'		=> 'Bu konuları silmek istediğinizden emin misiniz?',
	'DELETE_TOPIC_CONFIRM'		=> 'Bu konuyu silmek istediğinizden emin misiniz?',
	'DISAPPROVE'				=> 'Onayı kaldır',
	'DISAPPROVE_REASON'			=> 'Onayı kaldırma sebebi',
	'DISAPPROVE_POST'			=> 'İletinin onayını kaldır',
	'DISAPPROVE_POST_CONFIRM'	=> 'Bu iletinin onayını kaldırmak istediğinizden emin misiniz?',
	'DISAPPROVE_POSTS'			=> 'İletilerin onayını kaldır',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Seçilen iletilerin onayını kaldırmak istediğinizden emin misiniz?',
	'DISPLAY_LOG'				=> 'Kayıtları göster',
	'DISPLAY_OPTIONS'			=> 'Tercihler',

	'EMPTY_REPORT'					=> 'Bu sebebi seçerken bir açıklama girmek zorundasınız.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Lütfen dikkat: Bir veya birkaç konu veritabanınından kaldırıldı. Çünkü içlerinde hiç ileti kalmamıştı.',

	'FEEDBACK'				=> 'Geri bildirim',
	'FORK'					=> 'Kopyala',
	'FORK_TOPIC'			=> 'Konu kopyala',
	'FORK_TOPIC_CONFIRM'	=> 'Bu konuyu kopyalamak istediğinizden emin misiniz?',
	'FORK_TOPICS'			=> 'Seçilen konuları kopyala',
	'FORK_TOPICS_CONFIRM'	=> 'Seçilen konuları kopyalamak istediğinizden emin misiniz?',
	'FORUM_DESC'			=> 'Açıklama',
	'FORUM_NAME'			=> 'Forum adı',
	'FORUM_NOT_EXIST'		=> 'Seçtiğiniz forum mevcut değil.',
	'FORUM_NOT_POSTABLE'	=> 'Seçtiğiniz foruma ileti gönderilemiyor.',
	'FORUM_STATUS'			=> 'Forum durumu',
	'FORUM_STYLE'			=> 'Forum stili',

	'GLOBAL_ANNOUNCEMENT'	=> 'Genel duyuru',

	'IP_INFO'				=> 'IP adresi bilgisi',
	'IPS_POSTED_FROM'		=> 'Bu kullanıcının ileti yazdığı ip adresleri',

	'LATEST_LOGS'				=> 'Son kaydedilen 5 işlem',
	'LATEST_REPORTED'			=> 'Son 5 rapor',
	'LATEST_UNAPPROVED'			=> 'Onay bekleyen son 5 ileti',
	'LATEST_WARNING_TIME'		=> 'Son uyarı zamanı',
	'LATEST_WARNINGS'			=> 'Son 5 uyarı',
	'LEAVE_SHADOW'				=> 'Konunun gölgesini bırak',
	'LIST_REPORT'				=> '1 rapor',
	'LIST_REPORTS'				=> '%d rapor',
	'LOCK'						=> 'Kilitle',
	'LOCK_POST_POST'			=> 'İletiyi kilitle',
	'LOCK_POST_POSTS'			=> 'Seçilen iletileri kilitle',
	'LOCK_POST_POST_CONFIRM'	=> 'Seçilen iletinin düzenlenmesini engellemek istediğinizden emin misiniz?',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Seçilen iletilerin düzenlenmesini engellemek istediğinizden emin misiniz?',
	'LOCK_TOPICS'				=> 'Seçilen konuları kilitle',
	'LOCK_TOPIC_CONFIRM'		=> 'Seçilen konuyu kilitlemek istediğinizden emin misiniz?',
	'LOCK_TOPICS_CONFIRM'		=> 'Seçilen tüm konuları kilitlemek istediğinizden emin misiniz?',
	'LOGS_CURRENT_TOPIC'		=> 'Kayıtları görüntülenen konu:',
	'LOGIN_EXPLAIN_MCP'			=> 'Bu forumu yönetmek için oturum açmalısınız.',
	'LOGVIEW_VIEWTOPIC'			=> 'Konuyu görüntüle',
	'LOGVIEW_VIEWLOGS'			=> 'Konu kayıtlarını görüntüle',
	'LOGVIEW_VIEWFORUM'			=> 'Forumu görüntüle',
	'LOOKUP_ALL'				=> 'Tüm IP adreslerine bak',
	'LOOKUP_IP'					=> 'IP adresine bak',

	'MARKED_NOTES_DELETED'		=> 'Seçilen tüm kullanıcı notları silindi.',

	'MCP_ADD'					=> 'Uyarı ekle',

	'MCP_BAN'					=> 'Uzaklaştırma',
	'MCP_BAN_EMAILS'			=> 'E-posta uzaklaştır',
	'MCP_BAN_IPS'				=> 'IP uzaklaştır',
	'MCP_BAN_USERNAMES'			=> 'Kullanıcı uzaklaştır',

	'MCP_LOGS'						=> 'Yetkili kayıtları',
	'MCP_LOGS_FRONT'				=> 'Ön sayfa', 
	'MCP_LOGS_FORUM_VIEW'			=> 'Forum kayıtları',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Konu kayıtları',

	'MCP_MAIN'						=> 'Genel',
	'MCP_MAIN_FORUM_VIEW'			=> 'Forum görünümü',
	'MCP_MAIN_FRONT'				=> 'Ön sayfa',
	'MCP_MAIN_POST_DETAILS'			=> 'İleti detayları',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Konu görünümü',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Duyuru yap',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Seçilen konuyu <strong>duyuru</strong> olarak değiştirmek istediğinizden emin misiniz?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Duyuru yap',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Seçilen konuları <strong>duyuru</strong> olarak değiştirmek istediğinizden emin misiniz?',
	'MCP_MAKE_GLOBAL'				=> 'Genel Duyuru yap',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Seçilen konuyu <strong>genel duyuru</strong> olarak değiştirmek istediğinizden emin misiniz?',
	'MCP_MAKE_GLOBALS'				=> 'Genel Duyuru yap',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Seçilen konuları <strong>genel duyuru</strong> olarak değiştirmek istediğinizden emin misiniz?',
	'MCP_MAKE_STICKY'				=> 'Sabit konu yap',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Seçilen konuyu <strong>sabit konu</strong> olarak değiştirmek istediğinizden emin misiniz?',
	'MCP_MAKE_STICKIES'				=> 'Sabit konu yap',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Seçilen konuları <strong>sabit konu</strong> olarak değiştirmek istediğinizden emin misiniz?',
	'MCP_MAKE_NORMAL'				=> 'Normal konu yap',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Seçilen konuyu <strong>normal konu</strong> olarak değiştirmek istediğinizden emin misiniz?',
	'MCP_MAKE_NORMALS'				=> 'Normal konu yap',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Seçilen konuları <strong>normal konu</strong> olarak değiştirmek istediğinizden emin misiniz?',

	'MCP_NOTES'						=> 'Kullanıcı notları',
	'MCP_NOTES_FRONT'				=> 'Ön sayfa',
	'MCP_NOTES_USER'				=> 'Kullanıcı detayları',
	
	'MCP_POST_REPORTS'				=> 'Bu ileti için gönderilmiş raporlar',

	'MCP_REPORTS'							=> 'İleti raporları',
	'MCP_REPORT_DETAILS'					=> 'Rapor detayları',
	'MCP_REPORTS_CLOSED'					=> 'Çözümlenmiş raporlar',
	'MCP_REPORTS_CLOSED_EXPLAIN'			=> 'Bu liste çözümlenmiş ileti raporlarının bir listesidir.',
	'MCP_REPORTS_OPEN'						=> 'Çözüm bekleyen raporlar',
	'MCP_REPORTS_OPEN_EXPLAIN'				=> 'Bu liste çözüm bekleyen ileti raporlarının bir listesidir.',

	'MCP_QUEUE'								=> 'Onay bekleyenler',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Onaylama detayları',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Onay bekleyen iletiler',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Kullanıcılar tarafından görülebilmesi için bölüm yetkilisi tarafından onaylanması gereken iletilerin listesidir.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Onay bekleyen konular',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Kullanıcılar tarafından görülebilmesi için bölüm yetkilisi tarafından onaylanması gereken konuların listesidir.',

	'MCP_VIEW_USER'			=> 'Belirli bir kullanıcının uyarılarına bak',

	'MCP_WARN'				=> 'Uyarılar',
	'MCP_WARN_FRONT'		=> 'Ön sayfa',
	'MCP_WARN_LIST'			=> 'Uyarı listesi',
	'MCP_WARN_POST'			=> 'Bir iletiden dolayı uyar',
	'MCP_WARN_USER'			=> 'Kullanıcı uyar',

	'MERGE_POSTS'			=> 'Seçilen iletileri birleştir',
	'MERGE_POSTS_CONFIRM'	=> 'Seçilen iletileri birleştirmek istediğinizden emin misiniz?',
	'MERGE_TOPIC_EXPLAIN' 	=> 'Aşağıdaki formu kullanarak, seçmiş olduğunuz iletileri başka bir konu altında birleştirebilirsiniz. Bu iletiler yeniden sıraya konmayacaktır. Lütfen hedef konu id’sini girin veya birini seçmek için “Konu Seç” butonuna tıklayın.',
	'MERGE_TOPIC_ID'		=> 'Birleştirilecek konuya ait id',
	'MERGE_TOPICS'			=> 'Konuları birleştir',
	'MERGE_TOPICS_CONFIRM'	=> 'Seçilen konuları birleştirmek istediğinizden emin misiniz?',
	'MODERATE_FORUM'		=> 'Forumu yönet',
	'MODERATE_TOPIC'		=> 'Konuyu yönet', 
	'MODERATE_POST'			=> 'İletiyi yönet',
	'MOD_OPTIONS'			=> 'Yetkili seçenekleri',
	'MORE_INFO'				=> 'Daha fazla bilgi',
	'MOST_WARNINGS'			=> 'En fazla uyarı alan kullanıcılar',
	'MOVE_TOPIC_CONFIRM'	=> 'Konuyu yeni bir foruma taşımak istediğinizden emin misiniz?',
	'MOVE_TOPICS'			=> 'Seçilen konuları taşı',
	'MOVE_TOPICS_CONFIRM'	=> 'Konuları yeni bir foruma taşımak istediğinizden emin misiniz?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Onaylama hakkında gönderen kullanıcıyı bilgilendir.',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Red hakkında gönderen kullanıcıyı bilgilendir.?',
	'NOTIFY_USER_WARN'				=> 'Uyarı hakkında kullanıcıyı bilgilendir.',
	'NOT_MODERATOR'					=> 'Bu forumun yetkilisi değilsiniz.',
	'NO_DESTINATION_FORUM'			=> 'Taşımak için bir forum seçiniz.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Hedef forum mevcut değil.',
	'NO_ENTRIES'					=> 'Bu aralıkta hiçbir kayıt bulunmuyor',
	'NO_FEEDBACK'					=> 'Bu kullanıcı ile ilgili hiçbir geri bildirim bulunmuyor.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'İletilerin birleştirilmesi için hedef konu seçmelisiniz.',
	'NO_MATCHES_FOUND'				=> 'Hiç bir eşleşme bulunamadı.',
	'NO_POST'						=> 'Kullanıcıyı bir iletiden dolayı uyarmak için ilgili iletiyi seçmelisiniz.',
	'NO_POST_REPORT'				=> 'Bu ileti bildirilmemiş.',
	'NO_POST_SELECTED'				=> 'Bu işlemi gerçekleştirebilmek için en az bir ileti seçmelisiniz.',
	'NO_REASON_DISAPPROVAL'			=> 'Red ile ilgili geçerli bir açıklama yapınız.',
	'NO_REPORT'						=> 'Rapor bulunamadı',
	'NO_REPORTS'					=> 'Rapor bulunamadı',
	'NO_REPORT_SELECTED'			=> 'Bu işlemi gerçekleştirebilmek için en az bir rapor seçmelisiniz.',
	'NO_TOPIC_ICON'					=> 'İkon yok',
	'NO_TOPIC_SELECTED'				=> 'Bu işlemi gerçekleştirebilmek için en az bir ileti seçmelisiniz.',
	'NO_TOPICS_QUEUE'				=> 'Onaylanmayı bekleyen konu yok.',

	'ONLY_TOPIC'					=> 'Yalnızca “%s” konu',
	'OTHER_USERS'					=> 'Bu IP adresinden ileti gönderen diğer kullanıcılar',

	'POSTER'					=> 'Gönderen',
	'POSTS_APPROVED_SUCCESS'	=> 'Seçilen iletiler onaylandı.',
	'POSTS_DELETED_SUCCESS'		=> 'Seçilen iletiler veritabanından silindi.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Seçilen iletiler reddedildi.',
	'POSTS_LOCKED_SUCCESS'		=> 'Seçilen iletiler kilitlendi.',
	'POSTS_MERGED_SUCCESS'		=> 'Seçilen iletiler birleştirildi.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Seçilen iletilerin kilitleri açıldı.',
	'POSTS_PER_PAGE'			=> 'Sayfa başına ileti',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Tüm iletileri görmek istiyorsanız 0 yazın.)',
	'POST_APPROVED_SUCCESS'		=> 'Seçilen ileti onaylandı',
	'POST_DELETED_SUCCESS'		=> 'Seçilen ileti veritabanından silindi.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Seçilen ileti reddedildi.',
	'POST_LOCKED_SUCCESS'		=> 'Seçilen ileti kilitlendi.',
	'POST_NOT_EXIST'			=> 'Talep ettiğiniz ileti bulunmamaktadır.',
	'POST_REPORTED_SUCCESS'		=> 'İleti raporu bildirildi.',
	'POST_UNLOCKED_SUCCESS'		=> 'İleti kilidi açıldı.',

	'READ_USERNOTES'			=> 'Kullanıcı notları',
	'READ_WARNINGS'				=> 'Kullanıcı uyarıları',
	'REPORTER'					=> 'Bildiren',
	'REPORTED'					=> 'Bildiren', // Bildirildi/Bildirilme olası gerek ancak konumu uygun değil
	'REPORTED_BY'				=> 'Bildiren kişi',
	'REPORTED_ON_DATE'			=> 'Tarih',
	'REPORTS_CLOSED_SUCCESS'	=> 'Seçilen raporlar kapatıldı.',
	'REPORTS_DELETED_SUCCESS'	=> 'Seçilen raporlar silindi.',
	'REPORTS_TOTAL'				=> '<strong>%d</strong> adet rapor incelenmek için bekliyor.',
	'REPORTS_ZERO_TOTAL'		=> 'İncelenmek için bekleyen rapor yok.',
	'REPORT_CLOSED'				=> 'Bu rapor zaten kapatılmış.',
	'REPORT_CLOSED_SUCCESS'		=> 'Seçilen rapor kapatıldı.',
	'REPORT_DELETED_SUCCESS'	=> 'Seçilen rapor silindi.',
	'REPORT_DETAILS'			=> 'Rapor detayları',
	'REPORT_MESSAGE'			=> 'Bu iletiyi raporla',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Seçilen iletiyi raporlamak için bu formu kullanın. Rapor yalnızca ileti Forum Kurallarını çiğnediğinde kullanılmalıdır.',
	'REPORT_NOTIFY'				=> 'Beni bilgilendir',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Raporunuz incelendiğinde size haber verilir.',
	'REPORT_POST_EXPLAIN'		=> 'Bu formu seçili iletiyi hem bölüm yetkilisine hem de pano yöneticisine bildirmek için kullanınız. Rapor yalnızca ileti Forum Kurallarını çiğnediğinde kullanılmalıdır.',
	'REPORT_REASON'				=> 'Rapor sebebi',
	'REPORT_TIME'				=> 'Rapor zamanı',
	'REPORT_TOTAL'				=> '<strong>1</strong> adet rapor incelenmek için bekliyor.',
	'RESYNC'					=> 'Uyumlu hale getir',
	'RETURN_MESSAGE'			=> '%sMesaja git%s',
	'RETURN_NEW_FORUM'			=> '%sYeni foruma git%s',
	'RETURN_NEW_TOPIC'			=> '%sYeni konuya git%s',
	'RETURN_POST'				=> '%sİletiye dön%s',
	'RETURN_QUEUE'				=> '%sOnay bekleyenlere dön%s', 
	'RETURN_REPORTS'			=> '%sRaporlara dön%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sKonulara dön%s',

	'SEARCH_POSTS_BY_USER'				=> 'İletiyi arayan kişi',
	'SELECT_ACTION'						=> 'İstediğiniz işlemi seçiniz',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Genel duyurunun gösterileceği forumu seçiniz.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Seçilen konulardan bir ya da daha fazlası genel duyuru. Lütfen bunların gösterileceği forumu seçiniz.', 
	'SELECT_MERGE'						=> 'Birleştirmek için seç',
	'SELECT_TOPICS_FROM'				=> 'Konuları seç', 
	'SELECT_TOPIC'						=> 'Konu seç',
	'SELECT_USER'						=> 'Kullanıcı seç',
	'SORT_ACTION'						=> 'Kayıt işlemi',
	'SORT_DATE'							=> 'Tarih',
	'SORT_IP'							=> 'IP adresi',
	'SORT_WARNINGS'						=> 'Uyarılar',
	'SPLIT_AFTER'						=> 'Seçilen iletiden başlayarak böl', // ileri doğru böl
	'SPLIT_FORUM'						=> 'Yeni konu forumu',
	'SPLIT_POSTS'						=> 'Seçilen iletileri böl',
	'SPLIT_SUBJECT'						=> 'Yeni konu başlığı',
	'SPLIT_TOPIC_ALL'					=> 'Konuyu seçilen iletiden böl',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Bu konuyu bölmek istediğinizden emin misiniz?',
	'SPLIT_TOPIC_BEYOND'				=> 'Konuyu, seçilen iletiden başlayarak böl',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Konuyu, seçilen iletiden başlayarak bölmek istediğinizden emin misiniz?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Bu formu kullanarak konuyu ikiye bölebilirsiniz. Seçilen iletileri bölebileceğiniz gibi, seçilen iletiden başlayarak da bölebilirsiniz.',

	'THIS_POST_IP'				=> 'Bu ileti için IP adresi',
	'TOPICS_APPROVED_SUCCESS'	=> 'Seçilen konular onaylandı.',
	'TOPICS_DELETED_SUCCESS'	=> 'Seçilen konular veritabanından silindi.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Seçilen konular reddedildi',
	'TOPICS_FORKED_SUCCESS'		=> 'Seçilen konular kopyalandı',
	'TOPICS_LOCKED_SUCCESS'		=> 'Seçilen konular kilitlendi',
	'TOPICS_MOVED_SUCCESS'		=> 'Seçilen konular taşındı.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Seçilen konular uyumlu hale getirildi.',
	'TOPICS_TYPE_CHANGED'		=> 'Konu tipi değiştirildi.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Seçilen konuların kilidi açıldı.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Seçilen konu onaylandı.',
	'TOPIC_DELETED_SUCCESS'		=> 'Seçilen konu veritabanından silindi.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Seçilen konu reddedildi.',
	'TOPIC_FORKED_SUCCESS'		=> 'Seçilen konu kopyalandı.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Seçilen konu kilitlendi.',
	'TOPIC_MOVED_SUCCESS'		=> 'Seçilen konu taşındı.',
	'TOPIC_NOT_EXIST'			=> 'Seçtiğiniz konu mevcut değil.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Seçilen konu tekrar uyumlu hale getirildi.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Seçilen konu bölündü.',
	'TOPIC_TIME'				=> 'Konu tarihi',
	'TOPIC_TYPE_CHANGED'		=> 'Konu tipi değiştirildi.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Seçilen konunun kilidi açıldı.',
	'TOTAL_WARNINGS'			=> 'Toplam uyarı',

	'UNAPPROVED_POSTS_TOTAL'		=> '<strong>%d</strong> adet ileti onay için bekliyor.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Onay için bekleyen ileti yok.',
	'UNAPPROVED_POST_TOTAL'			=> '<strong>1</strong> adet ileti onay için bekliyor.',
	'UNLOCK'						=> 'Kilidi aç',
	'UNLOCK_POST'					=> 'İletinin kilidini aç',
	'UNLOCK_POST_EXPLAIN'			=> 'Düzeltmeye izin ver',
	'UNLOCK_POST_POST'				=> 'İletinin kilidini aç',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Bu iletinin düzeltilmesine izin vermek istediğinizden emin misiniz?',
	'UNLOCK_POST_POSTS'				=> 'Seçilen iletilerin kilidini aç',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Seçilen iletilerin düzeltilmesine izin vermek istediğinizden emin misiniz?',
	'UNLOCK_TOPIC'					=> 'Konunun kilidini aç',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Bu konunun kilidini açmak istediğinizden emin misiniz?',
	'UNLOCK_TOPICS'					=> 'Seçilen konuların kilitlerini aç',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Seçilen konuların kilitlerini açmak istediğinizden emin misiniz?',
	'USER_CANNOT_POST'				=> 'Bu foruma ileti gönderemezsiniz.',
	'USER_CANNOT_REPORT'			=> 'Bu forumdaki iletileri yöneticilere bildiremezsiniz.',
	'USER_FEEDBACK_ADDED'			=> 'Kullanıcı geri bildirimi eklendi.',
	'USER_WARNING_ADDED'			=> 'Kullanıcı uyarıldı.',

	'VIEW_DETAILS'			=> 'Detaylar',
	'VIEW_POST'				=> 'İleti',

	'WARNED_USERS'			=> 'Uyarılmış kullanıcılar',
	'WARNED_USERS_EXPLAIN'	=> 'Bu kullanıcıların süresi dolmamış uyarıları ile birlikte bir listesidir.',
	'WARNING_PM_BODY'		=> 'Alttaki mesaj size pano yöneticisi veya bölüm yetkilisi tarafından gönderilmiş bir uyarıdır. [quote]%s[/quote]',  
	'WARNING_PM_SUBJECT'	=> 'Pano uyarısı yayınlandı',
	'WARNING_POST_DEFAULT'	=> 'Bu, tarafınızca yazılan iletiye gelen bir uyarıdır: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'Hiçbir uyarı yok',

	'YOU_SELECTED_TOPIC'	=> 'Seçtiğiniz konu numarası: %d  %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Yazılım korsancılığı',
			'SPAM'		=> 'İstenmeyen ileti',
			'OFF_TOPIC'	=> 'Konu dışı',
			'OTHER'		=> 'Diğer',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'İleti yasal olmayan bir sayfaya veya yazılıma yönlendiriyor.',
			'SPAM'		=> 'İleti bir site veya program reklamından başka birşey içermiyor.',
			'OFF_TOPIC'	=> 'İleti konu dışı.',
			'OTHER'		=> 'Diğer. Lütfen sebebinizi açıklama kısmına yazınız.' 
		)
	),
));

?>