<?php
/*
*
* acp_forums [Turkish]
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'				=> 'Eski iletileri temizle',
	'AUTO_PRUNE_DAYS_EXPLAIN'		=> 'Konunun temizlenmesi için son iletiden sonra geçmesi gereken süre.',
	'AUTO_PRUNE_FREQ'				=> 'Otomatik temizleme sıklığı',
	'AUTO_PRUNE_FREQ_EXPLAIN'		=> 'Temizleme işlemi ile günler arasındaki zaman.',
	'AUTO_PRUNE_VIEWED'				=> 'Otomatik temizleme için konunun son okunma günü',
	'AUTO_PRUNE_VIEWED_EXPLAIN'		=> 'Konunun temizlenmesi için son izleniminden sonra geçmesi gereken süre.',

	'COPY_PERMISSIONS'				=> 'İzinleri şuradan kopyala',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Bir defa kuralları oluşturduktan sonra yeni oluşturduğunuz forumlarda daha önceden oluşturduğunuz kuralları kullanabilirsiniz. Eğer izinleri kopyalamak için bir forum seçilmezse forum görüntülenmeyecektir.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Eğer, izinleri kopyala seçeneğini işaretlerseniz, bu forum seçtiğiniz forumla ile aynı izinlere sahip olacaktır. Bu işlem daha önce tanımlanmış olan diğer izinlerin üzerine yazacaktır. Eğer hiçbir forum seçilmedi ise geçerli olan izinler aynen korunacaktır.',
	
	'CREATE_FORUM'					=> 'Yeni forum ekle',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'İçeriği sil veya başka bir foruma taşı',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Alt forumu sil veya başka bir foruma taşı',
	'DEFAULT_STYLE'						=> 'Varsayılan stil',
	'DELETE_ALL_POSTS'					=> 'İletileri sil',
	'DELETE_SUBFORUMS'					=> 'Alt forum iletilerini temizle',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Aktif konuları aç',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Eğer evet seçilirse seçili alt forumdaki etkin konular bu kategori altında gösterilecek.',

	'EDIT_FORUM'					=> 'Forumu düzenle',
	'ENABLE_INDEXING'				=> 'Arama arşivlemeyi aç',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Eğer evet seçilirse bu forumdaki iletiler arama için arşivlenecektir.',
	'ENABLE_POST_REVIEW'			=> 'İleti İncelemesini Aktifleştir',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Eğer evet olarak ayarlarsanız, kullanıcılar başlığa yeni ileti eklerken, iletilerini inceleyebileceklerdir. Bu, sohbet forumları için kapalı olmalıdır.',
	'ENABLE_RECENT'					=> 'Aktif konuları göster',
	'ENABLE_RECENT_EXPLAIN'			=> 'Evet olarak seçilirse, aktif başlıkların listesi içinde foruma açılmış olan başlıklar gösterilecektir.',
	'ENABLE_TOPIC_ICONS'			=> 'Konu simgelerini aç',

	'FORUM_ADMIN'						=> 'Forum yönetimi',
	'FORUM_ADMIN_EXPLAIN' 				=> 'Buradan, yeni forumlar ekleyebilir, her bir forum için değiştirme, kitleme, kilit açma, ve bazı önemli ayarlar yapabilmeniz mümkündür. Aynı zamanda buradan forumunuzun senkronizasyonunu yeniden yapılandırabilirsiniz. phpBB3’te kategoriler yoktur, her şey forum tabanlıdır. Her forumun kendine ait sayısız alt-forumu olabilir. Hangisine ileti gönderilip gönderilmeyeceğine karar verebilirsiniz (eğer ileti gönderilmemesini isterseniz kategori gibi davranır). <strong>Yeni açılan forumları göstermek için uygun izin ayarlarını yapmanız veya mevcut izinlerden kopyalamanız gerekmektedir.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Otomatik ileti temizliği',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Zaman aşımına uğramış konuları otomatik olarak temizler.',
	'FORUM_CREATED'						=> 'Forum oluşturuldu.',
	'FORUM_DATA_NEGATIVE'				=> 'Temizleme aralıkları negatif olamaz.',
	'FORUM_DESC_TOO_LONG'				=> 'Forum açıklaması çok uzun, 4000 karakterden daha az olmalıdır.',
	'FORUM_DELETE'						=> 'Forumu sil',
	'FORUM_DELETE_EXPLAIN'				=> 'Aşağıdaki form yardımı ile bir forum silebilirsiniz. Eğer forumda mesaj varsa tüm başlıkları (veya forumları) içeriğini yerleştirmek istediğiniz yere karar verebilirsiniz.',
	'FORUM_DELETED'						=> 'Forum silindi',
	'FORUM_DESC'						=> 'Açıklama',
	'FORUM_DESC_EXPLAIN'				=> 'Buraya girilen herhangi bir biçimlendirme olduğu gibi görünecektir.',
	'FORUM_EDIT_EXPLAIN'				=> 'Aşağıdaki form yardımı ile bu forumu özelleştirebilirsiniz. Değişiklik ve ileti sayaç kontrolleri her grup ve her kullanıcı için forum izinleri yolu ile kurulur.',

	'FORUM_IMAGE'						=> 'Forum resmi',
	'FORUM_IMAGE_EXPLAIN'				=> 'Bu forum için uygun olan resmin phpBB ana dizinine göre göreceli yolu.',
	'FORUM_IMAGE_NO_EXIST'				=> 'Belirtilen forum resmi mevcut değil',	
	'FORUM_LINK_EXPLAIN'				=> 'Tıklandığında kullanıcının yönlendirileceği konumun tam adresi (protokol dahil, örneğin: <samp>http://</samp>).',
	'FORUM_LINK_TRACK'					=> 'Yönlendirmeyi kayıt et',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Forum linklerinin kaç defa ziyaret edildiğini sayar ve gösterir.',
	'FORUM_NAME'						=> 'Forum adı',
	'FORUM_NAME_EMPTY'					=> 'Bu forum için bir isim yazmalısınız.',
	'FORUM_PARENT'						=> 'Üst forum',
	'FORUM_PASSWORD'					=> 'Forum parolası',
	'FORUM_PASSWORD_CONFIRM'			=> 'Forum parolasını tekrar giriniz',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Yalnızca bir forum parolası girilecekse doldurulmalıdır.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Forum için bir parola atar. İzin sistemi içerisindeki tercihten tanımlayın.',
	'FORUM_PASSWORD_UNSET'				=> 'Forum parolasını sil',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Eğer forum parolasını silmek istiyorsanız bu alanı işaretleyin.',
	'FORUM_PASSWORD_OLD'				=> 'Forum parolası eski bir parolayı kullanıyor ve değiştirilmesi gerekiyor.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Girdiğiniz parolalar eşleşmiyor.',
	'FORUM_PRUNE_SETTINGS'				=> 'Forum temizleme ayarları',
	'FORUM_RESYNCED'					=> '“%s” adlı forum senkronize edildi.',
	'FORUM_RULES_EXPLAIN'				=> 'Forum kuralları ilişkilendiği forumun her sayfasında gösterilir.',
	'FORUM_RULES_LINK'					=> 'Forum kurallarına link',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Forum kurallarınızı içeren sayfa, konu veya iletinin linkini buraya yazabilirsiniz. Bu ayarlar sizin daha önceden seçmiş olduğunuz forum kuralları yazısının üzerine yazılır',
	'FORUM_RULES_PREVIEW'				=> 'Forum kuralları önizlemesi',
	'FORUM_RULES_TOO_LONG'				=> 'Forum kuralları 4000 karakterden az olmalıdır.',
	'FORUM_SETTINGS'					=> 'Forum ayarları',
	'FORUM_STATUS'						=> 'Forum durumu',
	'FORUM_STYLE'						=> 'Forum stili',
	'FORUM_TOPICS_PAGE'					=> 'Sayfa başına konu',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Eğer sıfır değilse buraya yazılan değer varsayılan sayfa başına konunun üzerine yazılacaktır.',
	'FORUM_TYPE'						=> 'Forum tipi',
	'FORUM_UPDATED'						=> 'Forum bilgileri güncellendi.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'Altforum linki sayesinde menkul forumunuzu değiştirmek istiyorsunuz. Lütfen devam etmeden önce tüm altforumları bu forumdan taşıyın çünkü, linki değiştirdikten sonra şu anda foruma bağlanan altforumları göremeyeceksiniz.',
	
	'GENERAL_FORUM_SETTINGS'			=> 'Genel Forum Ayarları',

	'LINK'						=> 'Bağlantı',
	'LIST_INDEX'				=> 'Alt forumu, ait olduğu bir üst forum altında listele',
	'LIST_INDEX_EXPLAIN'		=> 'Bu forumu anasayfada göster ve eğer "Alt forumları listele" özelliği etkinse diğer yerlerde bir bağlantı olarak göster.',
	'LIST_SUBFORUMS'			=> 'Alt forumları listele',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Bu forumun alt forumlarını anasayfada göster ve eğer "Alt forumu, ait olduğu bir üst forum altında listele" özelliği etkinse diğer yerlerde bir bağlantı olarak göster.',
	'LOCKED'					=> 'Kilitli',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'İletileri taşımak için seçtiğiniz forum ileti gönderilebilir durumda değil. Lütfen ileti gönderilebilir durumda olan bir forum seçiniz.',
	'MOVE_POSTS_TO'					=> 'İletileri taşı',
	'MOVE_SUBFORUMS_TO'				=> 'Alt forumları taşı',

	'NO_DESTINATION_FORUM'				=> 'İçeriği taşımak için bir forum belirlemediniz.',
	'NO_FORUM_ACTION'					=> 'Forum içeriği ile ne yapılacağına karar vermediniz.',
	'NO_PARENT'							=> 'Üst seviye yok',
	'NO_PERMISSIONS'					=> 'İzinleri kopyalama',
	'NO_PERMISSION_FORUM_ADD'			=> 'Forum eklemek için gerekli izinlere sahip değilsiniz.',
	'NO_PERMISSION_FORUM_DELETE'		=> 'Forum kaldırmak için gerekli izinlere sahip değilsiniz.',

	'PARENT_IS_LINK_FORUM'				=> 'Seçtiğiniz hedef bir forum bağlantısıdır. Bağlantı forumları diğer forumları kontrol altına alamaz, lütfen kaynak olarak bir kategori veya forum belirleyiniz.',
	'PARENT_NOT_EXIST'					=> 'Üst seviye bulunamadı',
	'PRUNE_ANNOUNCEMENTS'				=> 'Duyuruları temizle',
	'PRUNE_STICKY'						=> 'Sabitleri temizle',
	'PRUNE_OLD_POLLS'					=> 'Eski iletileri temizle',
	'PRUNE_OLD_POLLS_EXPLAIN'			=> 'İleti yaşlanma süresi boyunca oylanmamış konuları anketleri ile birlikte sil.',

	'REDIRECT_ACL'				=> 'Şimdi bu forum için %sizinleri ayarlayabilirsiniz%s.',

	'SYNC_IN_PROGRESS'			=> 'Forum senkronize ediliyor',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Geçerli senkronize olan konu sırası %1$d/%2$d.',

	'TYPE_CAT'					=> 'Kategori',
	'TYPE_FORUM'				=> 'Forum',
	'TYPE_LINK'					=> 'Bağlantı',

	'UNLOCKED'					=> 'Kilitli değil',
));

?>