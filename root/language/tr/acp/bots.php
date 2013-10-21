<?php defined('IN_PHPBB') OR die('No direct access allowed.');
/**
 * @author Sevdin Filiz <angelside@users.sourceforge.net>
 *
 * @copyright (c) phpBB Group 		<http://phpbb.com>			[phpBB sistemi]
 * @copyright (c) Canver Software	<http://canversoft.net>		[Tercüme]
 *
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 */

/**
 * DEĞİŞTİRMEYİN
 */
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Bot ayarları
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
	'BOT_STYLE'			=> 'Bot biçimi',
	'BOT_STYLE_EXPLAIN'	=> 'Arama botları tarafından kullanılacak pano biçimi.',
	'BOT_UPDATED'		=> 'Mevcut olan bot başarı ile güncellendi.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Girdiğiniz bot ajanı halihazırda kullandığınız bir başka bot ajanına benziyor. Lütfen ajanı bu bota uyarlayın.',
	'ERR_BOT_NO_IP'				=> 'IP adresiniz geçerli değil veya sunucu ismi çözülemedi.',
	'ERR_BOT_NO_MATCHES'		=> 'Bu bot eşlemesi için en az bir ajan ya da IP adresi girmelisiniz.',

	'NO_BOT'		=> 'Belirtilen ID numarasında bot bulunamadı.',
	'NO_BOT_GROUP'	=> 'Özel bot grubu bulunamadı.',
));
