<?php
/**
 * @author Sevdin Filiz <angelside@users.sourceforge.net>
 * @copyright (c) 2005 phpBB Group <http://www.phpbb.com>			[phpBB sistemi]
 * @copyright (c) 2010 Canver Software <http://www.canversoft.net>	[tercüme]
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

// değiştirmeyin
if (!defined('IN_PHPBB')) { exit; }
if (empty($lang) || !is_array($lang)) { $lang = array(); }

// dil değişkenleri
$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'			=> 'tr',
	'RECAPTCHA_NOT_AVAILABLE'	=> 'reCaptcha kullanmak istiyorsanız, <a href="http://recaptcha.net">reCaptcha.net</a> web sitesinden bir hesap açmalısınız.',
	'CAPTCHA_RECAPTCHA'			=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'		=> 'Yazdığınız görsel doğrulama kodu cevabı yanlış',

	'RECAPTCHA_PUBLIC'			=> 'Genel reCaptcha anahtarı (public key)',
	'RECAPTCHA_PUBLIC_EXPLAIN'	=> 'Genel reCaptcha anahtarınız. Anahtarlar <a href="http://recaptcha.net">reCaptcha.net</a> sitesi tarafından sağlanır.',
	'RECAPTCHA_PRIVATE'			=> 'Özel reCaptcha anahtarı (private key)',
	'RECAPTCHA_PRIVATE_EXPLAIN'	=> 'Özel reCaptcha anahtarınız. Anahtarlar <a href="http://recaptcha.net">reCaptcha.net</a> sitesi tarafından sağlanır.',

	'RECAPTCHA_EXPLAIN'			=> 'Otomatik kayıtları engellemek için iki kelime gösterilir ve bu kelimelerin yazı alanına yazılması istenir.',
));

?>