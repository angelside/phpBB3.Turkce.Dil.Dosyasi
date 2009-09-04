<?php
/*
*
* acp_permissions (phpBB Permission Set) [Turkish]
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp 
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Eylemler',
		'content'		=> 'İçerik',
		'forums'		=> 'Forumlar',
		'misc'			=> 'Diğer', // diğer, çeşitli - Misc
		'permissions'	=> 'İzinler',
		'pm'			=> 'Özel mesajlar',
		'polls'			=> 'Anketler',
		'post'			=> 'İleti',
		'post_actions'	=> 'İleti hareketleri',//post action
		'posting'		=> 'İleti gönderme',
		'profile'		=> 'Profil',
		'settings'		=> 'Ayarlar',
		'topic_actions'	=> 'Konu eylemleri',
		'user_group'	=> 'Kullanıcılar &amp; Gruplar',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Kullanıcı izinleri',
		'a_'			=> 'Yönetici izinleri',
		'm_'			=> 'Yetkili izinleri',
		'f_'			=> 'Forum izinleri',
		'global'		=> array(
			'm_'			=> 'Genel yetkili izinleri',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Profilleri görebilir', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Kullanıcı adını değiştirebilir', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Parola değiştirebilir', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'E-posta adresini değiştirebilir', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Avatarını değiştirebilir', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Varsayılan grubunu değiştirebilir', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Dosya ekleyebilir', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Dosya indirebilir', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Taslak kaydedebilir', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Sansürlü kelimeleri geçersiz kılabilir', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'İmza kullanabilir', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Özel mesaj gönderebilir', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Birden fazla kullanıcıya mesaj gönderebilir', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Gruplara mesaj gönderebilir', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Özel mesaj okuyabilir', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Kendi özel mesajlarını değiştirebilir', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Kendi klasörlerinden özel mesajları silebilir', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Özel mesajları yönlendirebilir', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Özel mesajları e-posta ile alabilir', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Özel mesajları yazdırabilir', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Özel mesajlara dosya ekleyebilir', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Özel mesajlardaki dosyaları indirebilir', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Özel mesajlarda biçim kodlarını kullanabilir', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Özel mesajlarda ifade gönderebilir', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Özel mesajlarda resim gönderebilir', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Özel mesajlarda flash gönderebilir', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'E-posta gönderebilir', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Anlık mesaj gönderebilir', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Flood limitini geçersiz kılabilir', 'cat' => 'misc'), // Can ignore flood limit
	'acl_u_hideonline'	=> array('lang' => 'Çevrimiçi durumunu gizleyebilir', 'cat' => 'misc'), // Can hide online status
	'acl_u_viewonline'	=> array('lang' => 'Kimler çevrimiçi listesinde gizlenmiş olanları görebilir', 'cat' => 'misc'), // Can view hidden online users
	'acl_u_search'		=> array('lang' => 'Panoda arama yapabilir', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Forumu görebilir', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Forumu okuyabilir', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Yeni konu açabilir', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Konulara cevap verebilir', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Konu/ileti ikonları gönderebilir', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Duyuru gönderebilir', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Sabit gönderebilir', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Anket oluşturabilir', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Anketlerde oy kullanabilir', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Mevcut oyu değiştirebilir', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Dosya ekleyebilir', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Dosya indirebilir', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'İmza kullanabilir', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Biçim kodlarını kullanabilir', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'İfade gönderebilir', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Resim gönderebilir', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Flash gönderebilir', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Kendi iletilerini değiştirebilir', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Kendi iletilerini silebilir', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Kendi konularını kilitleyebilir', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Konuları güncelleyebilir', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'İletileri rapor edebilir', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Forumlara kayıt olabilir', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Konuları yazdırabilir', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Konuları e-posta olarak gönderebilir', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Arama yapabilir', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Flood limitini kaldırabilir', 'cat' => 'misc'),//can ignore flood limit
	'acl_f_postcount'	=> array('lang' => 'İleti sayacını arttırabilir<br /><em>Lütfen bu seçeneğin sadece yeni iletileri kapsadığını unutmayınız.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Onaylama almadan cevap yazabilir', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'İletileri düzeltebilir', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'İletileri silebilir', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'İletileri onaylayabilir', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Raporları kapatabilir ve silebilir', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'İleti yazarını değiştirebilir', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Konuları taşıyabilir', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Konuları kilitleyebilir', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Konuları bölebilir', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Konuları birleştirebilir', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'İleti detaylarını görebilir', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Kullanıcıları uyarabilir<br /><em>Bu seçim sadece genel olarak tayin edilir. Forum bazında yapılamaz.</em>', 'cat' => 'misc'),
	'acl_m_ban'		=> array('lang' => 'Uzaklaştırmaları yönetebilir<br /><em>Bu seçim sadece genel olarak tayin edilir. Forum bazında yapılamaz.</em>', 'cat' => 'misc'),
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Pano ayarları/güncelleme kontrolünü değiştirebilir', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Sunucu/iletişim ayarlarını değiştirebilir', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Jabber ayarlarını değiştirebilir', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'php ayarlarını görebilir', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Forumları yönetebilir', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Yeni forumlar ekleyebilir', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Forumları silebilir', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Forumları temizleyebilir', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Konu/ileti ikonlarını ve ifadeleri değiştirebilir', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Kelime sansürlerini değiştirebilir', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Biçim kodu tanımlayabilir', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Eklentiler ile ilgili ayarları değiştirebilir', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Kullanıcıları yönetebilir<br /><em>Bu, kimler çevrimiçi listesinin içindeki kullanıcı tarayıcı ajanını görmeyi de kapsar.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Kullanıcıları silebilir/temizleyebilir', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Grupları yönetebilir', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Yeni gruplar ekleyebilir', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Grupları silebilir', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Seviyeleri yönetebilir', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Özel profil alanlarını yönetebilir', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'İzin verilmeyen isimleri yönetebilir', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Uzaklaştırmaları yönetebilir', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'İzin maskelerini görebilir', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Bireysel gruplar için izinleri değiştirebilir', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Bireysel kullanıcılar için izinleri değiştirebilir', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Forum izin sınıfını değiştirebilir', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Yetkili izin sınıfını değiştirebilir', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Yönetici izin sınıfını değiştirebilir', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Kullanıcı izin sınıfını değiştirebilir', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Rolleri yönetebilir', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Diğer yetkileri kullanabilir', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Stilleri yönetebilir', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Kayıtları görebilir', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Kayıtları temizleyebilir', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Modülleri yönetebilir', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Dil paketlerini yönetebilir', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Yığın e-posta gönderebilir', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Botları yönetebilir', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Rapor/itiraz sebeplerini yönetebilir', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Veritabanını yedekleyebilir/geri yükleyebilir', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Arama geçmişlerini ve ayarlarını yönetebilir', 'cat' => 'misc'),
));

?>