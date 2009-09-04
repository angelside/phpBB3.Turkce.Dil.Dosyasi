<?php
/*
*
* acp_email [Turkish]
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'Buradan <strong>yığın e-posta almayı kabul eden</strong> tüm kullanıcılarınıza veya istediğiniz bir gruba e-posta iletebilirsiniz. Bunu yapmak için yönetici e-postasından bir posta gönderilecek ve bunun karbon kopyası da tüm alıcılara gidecektir. Varsayılan ayarlar her e-posta da sadece 50 alıcı içerir, daha fazla alıcı için daha fazla e-posta gönderilecektir. Eğer büyük bir gruba e-posta atıyorsanız lütfen sabırlı olunuz ve sayfayı yarıda durdurmayınız. Büyük bir e-posta işleminin uzun sürmesi normaldir, işlem bitince haberdar edileceksiniz.',
	'ALL_USERS'					=> 'Tüm kullanıcılar',

	'COMPOSE'				=> 'Mesaj yaz',

	'EMAIL_SEND_ERROR'		=> 'E-posta gönderilirken bir hata oluştu. Lütfen ayrıntılı hata mesaji için %sHata Kayıtları%s’na göz atın.',
	'EMAIL_SENT'			=> 'E-posta gönderildi.',
	'EMAIL_SENT_QUEUE'		=> 'Mesaj göndermek için kuyruğa atıldı.',

	'LOG_SESSION'			=> 'E-posta kayıtlarını kritik kayıtlara ekle',

	'SEND_IMMEDIATELY'		=> 'Hemen gönder',
	'SEND_TO_GROUP'			=> 'Gruba gönder',
	'SEND_TO_USERS'			=> 'Kullanıcıya gönder',
	'SEND_TO_USERS_EXPLAIN'	=> 'Buraya isim girerseniz seçili grup bilgisinin üzerine yazılır. Her ismi ayrı bir satıra yazınız.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Yüksek',
	'MAIL_LOW_PRIORITY'		=> 'Düşük',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'E-posta önemi',
	'MASS_MESSAGE'			=> 'Mesajınız',
	'MASS_MESSAGE_EXPLAIN'	=> 'Unutmayın ki yalnızca düz yazı girebilirsiniz. Tüm diğer ekler iletilmeden önce silinecektir',
	
	'NO_EMAIL_MESSAGE'		=> 'Lütfen mesajınızı yazınız.',
	'NO_EMAIL_SUBJECT'		=> 'Mesajı göndermek için bir konu girmelisiniz.',
));

?>