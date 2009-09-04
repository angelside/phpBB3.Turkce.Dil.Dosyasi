<?php
/*
*
* acp_ban [Turkish]
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'					=> '1 saat',
	'30_MINS'					=> '30 dakika',
	'6_HOURS'					=> '6 saat',

	'ACP_BAN_EXPLAIN'			=> 'Buradan kullanıcıları, isim, IP veya e-posta adresine göre uzaklaştırabilirsiniz. Bu metodlar, bir kullanıcının panonuza erişimini engeller. İsteğe bağlı olarak, kısa bir (en fazla 3000 karakter) uzaklaştırma sebebi yazabilirsiniz. Bu, yönetici kayıtlarında gösterilecektir. Uzaklaştırma, zaman olarak ayrıca özelleştirilebilir. Eğer seçilen bir günün sonunda uzaklaştırma süresinin sona ermesini, daha doğrusu ayarlanmış bir zaman periyodu seçiminden <span style="text-decoration: underline;">önce -&gt;</span> uzaklaştırmanın sona ermesini istiyorsanız, uzaklaştırma süresi için bir tarih girmeniz gerekmektedir. Tarih, <kbd>YYYY-AA-GG</kbd> biçiminde olmalıdır.',

	'BAN_EXCLUDE'				=> 'Uzaklaştırmanın dışında tut',
	'BAN_LENGTH'				=> 'Uzaklaştırma süresi',
	'BAN_REASON'				=> 'Uzaklaştırma sebebi',
	'BAN_GIVE_REASON'			=> 'Uzaklaştırma alana gösterilecek sebep',
	'BAN_UPDATE_SUCCESSFUL'		=> 'Uzaklaştırılmış kullanıcı listesi güncellendi.',

	'EMAIL_BAN'					=> 'Bir veya daha fazla e-posta adresi uzaklaştırma',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Girilen e-posta adreslerini geçerli uzaklaştırmaların dışında tut.',
	'EMAIL_BAN_EXPLAIN'			=> 'Birden fazla e-posta adresi belirtmek için, her adresi yeni satıra yazınız. Adreslerde uzantıları belirli bir kısıma denk tutmak için “*” işaretini joker olarak kullanabilirsiniz, örneğin; <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, vs.',
	'EMAIL_NO_BANNED'			=> 'Hiçbir e-posta adresi uzaklaştırılmadı',
	'EMAIL_UNBAN'				=> 'E-posta uzaklaştırması kaldır',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Bilgisayarınız ve web tarayıcınız için fare ve klavyenin uygun bir kombinasyonunu kullanarak, bir çok e-posta adresi için tek seferde uzaklaştırmayı kaldırabilirsiniz. Ayrı tutulan e-posta adresleri arkaplanda işaretlenecektir.',

	'IP_BAN'					=> 'Bir veya daha fazla IP uzaklaştırma',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Bütün geçerli uzaklaştırmalarda girilmiş IP adreslerini, bunun dışında tutmakta kullan.',
	'IP_BAN_EXPLAIN'			=> 'Değişik IP adreslerini belirtmekte veya host isimlerinde, her bir IP adresini yeni satıra giriniz. Bir dizi IP adresini belirtmek için, başlangıçta ve bitişte tire (-) ayracını kullanınız. Joker olarak ise “*” karakterini kullanabilirsiniz.',
	'IP_HOSTNAME'				=> 'IP adresleri veya host isimleri',
	'IP_NO_BANNED'				=> 'Uzaklaştırılmış IP adresi yok',
	'IP_UNBAN'					=> 'IP adresi uzaklaştırması kaldır',
	'IP_UNBAN_EXPLAIN'			=> 'Bilgisayarınız ve tarayıcınız için fare ve klavyenin uygun bir kombinasyonunu kullanarak, bir çok IP adresi için tek seferde uzaklaştırmayı kaldırabilirsiniz. Ayrı tutulan IP adresleri arkaplanda işaretlenecektir.',

	'LENGTH_BAN_INVALID'		=> 'Tarih <kbd>YYYY-MM-DD</kbd> olarak ayarlanmalıdır.',
	
	'PERMANENT'					=> 'Sürekli',
	
	'UNTIL'						=> 'Önce',
	'USER_BAN'					=> 'Bir veya birden fazla kullanıcı uzaklaştırma',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Girilen kullanıcıları geçerli uzaklaştırmanın dışında tut.',
	'USER_BAN_EXPLAIN'			=> 'Bir seferde birden fazla kullanıcıyı uzaklaştırabilmeniz için, herbir isimi yeni satıra giriniz. <span style="text-decoration: underline;">Üye ara</span> kolaylığından yararlanarak bir veya daha fazla kullanıcıyı otomatik olarak ekleyebilirsiniz.',
	'USER_NO_BANNED'			=> 'Uzaklaştırılmış kullanıcı yok',
	'USER_UNBAN'				=> 'Kullanıcı uzaklaştırması kaldır',
	'USER_UNBAN_EXPLAIN'		=> 'Bilgisayarınız ve tarayıcınız için fare ve klavyenin uygun kombinasyonunu kullanarak, birden çok kullanıcı için tek seferde uzaklaştırmayı kaldırabilir veya uzaklaştırma dışı tutabilirsiniz. Ayrı tutulan kullanıcılar arka planda işaretlenecektir.',

));

?>