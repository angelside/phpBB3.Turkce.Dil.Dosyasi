<?php
/**
* @version $Id$
* @author Sevdin Filiz <angelside@users.sourceforge.net>
* @copyright (c) 2009, Canver Software <http://www.canversoft.net>
*/

// değiştirmeyin
if (!defined('IN_PHPBB')) { exit; }
if (empty($lang) || !is_array($lang)) { $lang = array(); }

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