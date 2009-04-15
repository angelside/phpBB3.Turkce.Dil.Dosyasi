<?php
/*
*
* acp_users [Turkish]
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
	'ADMIN_SIG_PREVIEW'		=> 'İmza önizleme',
	'AT_LEAST_ONE_FOUNDER' 	=> 'Bu kurucu kişiyi normal kullanıcı olarak değiştirmeniz mümkün değildir. Bu pano için en azından bir kurucu olması şarttır. Eğer bu kullanıcının yöneticilik vasfını kaldırmak istiyorsanız, başka bir kullanıcıyı kurucu seviyesine yükseltmeniz gerekmektedir.',

	'BAN_ALREADY_ENTERED'	=> 'Uzaklaştırma bilgisi başarıyla girildi. Uzaklaştırma listesi güncellendi.',
	'BAN_SUCCESSFUL'		=> 'Uzaklaştırma girişi başarılı.', // Ban entered successfully

	'CANNOT_BAN_FOUNDER'			=> 'Kurucu hesabı uzaklaştıramazsınız.',
	'CANNOT_BAN_YOURSELF'			=> 'Kendinizi uzaklaştıramazsınız.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Bot hesabı pasif edemezsiniz. Onun yerine lütfen bot sayfasından botu pasif edin.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Kurucu hesabı pasif edemezsiniz.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Kendi hesabınızı pasif edemezsiniz.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Bot hesaplarını tekrar aktif olmaları için zorlayamazsınız. Onun yerine lütfen bot sayfasından botu pasif edin.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Kurucu hesaplarını tekrar aktif olmaları için zorlayamazsınız.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Kendi hesabınızı tekrar aktif olması için zorlayamazsınız.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Misafir kullanıcı hesabı silemezsiniz.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Kendi kullanıcı hesabınızı silemezsiniz.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Kurucu üye pozisyonundaki yöneticileri terfi ettirmeye yetkiniz yok.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Üyeleri kurucu pozisyonuna terfi ettirmek için bu üyeleri aktif hale getirmiş olmanız gerekiyor. Sadece aktif üyeler terfi ettirilebilir.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Buna sadece kullanıcıların e-posta adreslerini değiştirirken ihtiyaç duyarsınız.',

	'DELETE_POSTS'			=> 'İleti sil',
	'DELETE_USER'			=> 'Kullanıcı sil',
	'DELETE_USER_EXPLAIN'	=> 'Lütfen dikkat edin. Bir üyeyi silme işleminin geri dönüşü yoktur.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Tekrar aktiflik zorlaması başarılı.', // Successfully forced re-activation
	'FOUNDER'						=> 'Kurucu',
	'FOUNDER_EXPLAIN'				=> 'Kurucular tüm yönetimsel yetkilere sahiptirler ve hiçbir zaman uzaklaştırılamazlar, silinemezler veya kurucu olmayan üyeler tarafından değiştirilemezler.',
	
	'GROUP_APPROVE'					=> 'Üyeyi onayla',
	'GROUP_DEFAULT'					=> 'Üye için varsayılan grup yap',
	'GROUP_DELETE'					=> 'Üyeyi gruptan sil',
	'GROUP_DEMOTE'					=> 'Grup liderinin rütbesini sök',
	'GROUP_PROMOTE'					=> 'Grup liderliğine terfi ettir',

	'IP_WHOIS_FOR'			=> '%s için IP bilgisi',

	'LAST_ACTIVE'			=> 'Son aktivite',

	'MOVE_POSTS_EXPLAIN'	=> 'Lütfen, bu kullanıcının oluşturduruğu bütün iletileri taşımak üzere bir forum seçin.',

	'NO_SPECIAL_RANK'		=> 'Tanımlı özel seviye yok',
	'NOT_MANAGE_FOUNDER'	=> 'Kurucu pozisyonunundaki bir üyeyi yönetmeyi denediniz. Sadece kurucular diğer kurucuları yönetmeye yetkilidir.',

	'QUICK_TOOLS'			=> 'Hızlı araçlar',

	'REGISTERED'			=> 'Kayıt',
	'REGISTERED_IP'			=> 'Kayıt olunan IP',
	'RETAIN_POSTS'			=> 'İletileri tut', // sakla

	'SELECT_FORM'			=> 'Form seç',
	'SELECT_USER'			=> 'Kullanıcı seçiniz',

	'USER_ADMIN'					=> 'Kullanıcı yönetimi',
	'USER_ADMIN_ACTIVATE'			=> 'Hesap etkinleştir',
	'USER_ADMIN_ACTIVATED'			=> 'Kullanıcı etkinleştirildi.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar kullanıcı hesabından silindi.',
	'USER_ADMIN_BAN_EMAIL'			=> 'E-postaya göre uzaklaştır',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-posta adresi kullanıcı yönetimi ile uzaklaştırıldı',
	'USER_ADMIN_BAN_IP'				=> 'IP’e göre uzaklaştır', // Ban by IP
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP kullanıcı yönetimi ile uzaklaştırıldı',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Kullanıcı adı kullanıcı yönetimi ile uzaklaştırıldı',
	'USER_ADMIN_BAN_USER'			=> 'Kullanıcı adına göre uzaklaştır',
	'USER_ADMIN_DEACTIVATE'			=> 'Hesabı pasif yap',
	'USER_ADMIN_DEACTIVED'			=> 'Kullanıcı pasif edildi.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Tüm ileti eklerini sil',
	'USER_ADMIN_DEL_AVATAR'			=> 'Avatarı sil',
	'USER_ADMIN_DEL_POSTS'			=> 'Tüm iletileri sil',
	'USER_ADMIN_DEL_SIG'			=> 'İmzayı sil',
	'USER_ADMIN_EXPLAIN'			=> 'Buradan kullanıcı bilgilerini değiştirebilir ve bazı özel ayarlar yapabilirsiniz.',
	'USER_ADMIN_FORCE'				=> 'Tekrar aktivasyon yapmaya zorla',
	'USER_ADMIN_MOVE_POSTS'			=> 'Tüm iletileri taşı',
	'USER_ADMIN_SIG_REMOVED'		=> 'Kullanıcı hesabındaki imza silindi.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Bu kullanıcının tüm eklentileri silindi.',
	'USER_AVATAR_UPDATED'			=> 'Kullanıcı avatarı güncellendi.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Özel profil bilgi alanı',
	'USER_DELETED'					=> 'Kullanıcı silindi.',
	'USER_GROUP_ADD'				=> 'Kullanıcıyı gruba ekle',
	'USER_GROUP_NORMAL'				=> 'Kullanıcı tanımlandı; bir grup kullanıcısı',
	'USER_GROUP_PENDING'			=> 'Gruptaki kullanıcılar bekleme modunda',
	'USER_GROUP_SPECIAL'			=> 'Önceden tanımlanmış bir grup kullanıcısı',
	'USER_NO_ATTACHMENTS'			=> 'Gösterilecek herhangi bir iliştirili dosya yok.',
	'USER_OVERVIEW_UPDATED'			=> 'Kullanıcı detayları güncellendi.',
	'USER_POSTS_DELETED'			=> 'Bu kullanıcının tüm iletileri silindi.',
	'USER_POSTS_MOVED'				=> 'Bu kullanıcının tüm iletileri hedef foruma taşındı.',
	'USER_PREFS_UPDATED'			=> 'Kullanıcı tercihleri güncellendi.',
	'USER_PROFILE'					=> 'Kullanıcı profili',
	'USER_PROFILE_UPDATED'			=> 'Kullanıcı profili güncellendi.',
	'USER_RANK'						=> 'Kullanıcı seviyesi',
	'USER_RANK_UPDATED'				=> 'Kullanıcı seviyesi güncellendi.',
	'USER_SIG_UPDATED'				=> 'Kullanıcı imzası güncellendi.',
	'USER_TOOLS'					=> 'Temel araçlar',
));

?>