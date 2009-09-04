<?php
/*
*
* acp_bots [Turkish]
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Botları yönet',
	'BOTS_EXPLAIN' 		=> '“Bot”, “Örümcek”, genellikle arama motorları tarafından kullanılan otomatik ajanlardır ve web örümcekleri olarak da tanınırlar. Botların amacı siteleri gezerek topladıkları bilgileri bağlı bulundukları arama motorunun veri tabanına iletmektir. Bu sayede arama motorları en son verilerle veritabanlarını güncel tutarlar. Örümcekler; kimi zaman sistemlere ciddi yükler binderebilir ve ziyaretçilerinizin erişimini güçleştirebilir. Bunun yanı sıra; zaman zaman sitenizden bilgi edinmekte de zorlanabilir. Düzgün veri akışı sağlanamaz ise sayfalarınız bu ajanlar tarafından tam indexlenemeyebilir. Bu problemlerin üzerinden gelebilmek için ise buradan özel bir kullanıcı tanımlamanız mümkündür.',
	'BOT_ACTIVATE'		=> 'Aktif yap',
	'BOT_ACTIVE'		=> 'Bot aktif',
	'BOT_ADD'			=> 'Bot ekle',
	'BOT_ADDED'			=> 'Yeni bot başarı ile eklendi.',
	'BOT_AGENT'			=> 'Kullanıcı aracısı bilgisi',
	'BOT_AGENT_EXPLAIN'	=> 'Bot tarayıcı adı ile uyuşan bir dizi, kısmı eşlemeler kullanabilirsiniz.',
	'BOT_DEACTIVATE'	=> 'Pasif yap',
	'BOT_DELETED'		=> 'Bot silindi.',
	'BOT_EDIT'			=> 'Botları düzenle',
	'BOT_EDIT_EXPLAIN' 	=> 'Buradan yeni bir bot bilgisi girişi yapabilir veya mevcut olan bot girdisi üzerinde değişiklik yapabilirsiniz. Bir ajan dizisi veya birden fazla IP adresi tanımlayabilirsiniz. Ip adresi/dizisi eşleme işlemini yaparken lütfen dikkatli olunuz. Bu sizin daha az band tüketmeniz konusunda yardımcı olabilir. Özel bot grubunuz için uygun izinler atamayı da unutmamalısınız.',
	'BOT_LANG'			=> 'Bot dili',
	'BOT_LANG_EXPLAIN'	=> 'Arama botları tarafından kullanılacak pano dili.',
	'BOT_LAST_VISIT'	=> 'Son ziyaret',
	'BOT_IP'			=> 'Bot IP adresi',
	'BOT_IP_EXPLAIN'	=> 'Kısmı eşlemeler kullanabilirsiniz, farklı adresleri virgül ile ayırın.',
	'BOT_NAME'			=> 'Bot adı',
	'BOT_NAME_EXPLAIN'	=> 'Sadece kendi bilgileriniz için kullanılır.',
	'BOT_NEVER'			=> 'Hiç',
	'BOT_NAME_TAKEN'	=> 'İsim panoda zaten kullanımda olduğundan bot için kullanamazsınız.',
	'BOT_STYLE'			=> 'Bot stili',
	'BOT_STYLE_EXPLAIN'	=> 'Arama botları tarafından kullanılacak pano stili.',
	'BOT_UPDATED'		=> 'Mevcut olan bot başarı ile güncellendi.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Girdiğiniz bot ajanı halihazırda kullandığınız bir başka bot ajanına benziyor. Lütfen ajanı bu bota uyarlayın.',
	'ERR_BOT_NO_IP'				=> 'IP adresiniz geçerli değil veya sunucu ismi çözülemedi.',
	'ERR_BOT_NO_MATCHES'		=> 'Bu bot eşlemesi için en az bir ajan ya da IP adresi girmelisiniz.',

	'NO_BOT'		=> 'Belirtilen ID numarasında bot bulunamadı.',
	'NO_BOT_GROUP'	=> 'Özel bot grubu bulunamadı.',
));

?>