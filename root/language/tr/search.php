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
	'ALL_AVAILABLE'			=> 'Tümü',
	'ALL_RESULTS'			=> 'Tüm sonuçlar',

	'DISPLAY_RESULTS'		=> 'Sonuçları göster',

	'FOUND_SEARCH_MATCH'		=> '%d sonuç bulundu',
	'FOUND_SEARCH_MATCHES'		=> '%d sonuç bulundu',
	'FOUND_MORE_SEARCH_MATCHES'	=> '%d’den daha fazla sonuç bulundu',

	'GLOBAL'				=> 'Genel duyuru',

	'IGNORED_TERMS'			=> 'Görmezden gelindi',
	'IGNORED_TERMS_EXPLAIN'	=> 'Aramanızda bazı kelimeler görmezden gelindi, çünkü bunlar yaygın kelimelerdir: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'İletiye git', // Jump to post

	'LOGIN_EXPLAIN_EGOSEARCH'		=> 'Kendi iletilerinizi görmek için kayıt olmalı ve oturum açmanız gerekmektedir.',
	'LOGIN_EXPLAIN_UNREADSEARCH'	=> 'Kendi okunmamış iletilerinizi görmek için kayıt olmalı ve oturum açmanız gerekmektedir.',
	
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Arama yapmak için çok fazla sayıda kelime tanımladınız. Lütfen %1$d kelimeden fazla yazmayınız.',
	
	'NO_KEYWORDS'			=> 'Aramak için en az bir kelime girmelisiniz. Her kelime en az %d harften oluşmalı ve %d karakteri aşmamalı.',
	'NO_RECENT_SEARCHES'	=> 'Son zamanlarda arama yapılmadı.',
	'NO_SEARCH'				=> 'Üzgünüm, fakat arama sistemini kullanma izniniz bulunmamaktadır.',
	'NO_SEARCH_RESULTS'		=> 'Arama kriterlerinize göre uygun sonuç bulunamadı.',
	'NO_SEARCH_TIME'		=> 'Üzgünüm fakat şu anda aramayı kullanamazsınız. Birkaç dakika içinde tekrar deneyiniz.',
	'WORD_IN_NO_POST'		=> 'Sonuç bulunamadı, <strong>%s</strong> kelimesini içeren herhangi bir ileti yok.',
	'WORDS_IN_NO_POST'		=> 'Sonuç bulunamadı, <strong>%s</strong> kelimelerini içeren herhangi bir ileti yok.',

	'POST_CHARACTERS'		=> 'karakterini göster',

	'RECENT_SEARCHES'		=> 'Son yapılan aramalar',
	'RESULT_DAYS'			=> 'Süre',
	'RESULT_SORT'			=> 'Sıralama',
	'RETURN_FIRST'			=> 'Sonuçların ilk',
	'RETURN_TO_SEARCH_ADV'	=> 'Gelişmiş aramaya geri dön',

	'SEARCHED_FOR'				=> 'Aranan kelime(ler)',
	'SEARCHED_TOPIC'			=> 'Aranan konu',
	'SEARCH_ALL_TERMS'			=> 'Tüm terimler için ara ya da girilen sorguyu kullan',
	'SEARCH_ANY_TERMS'			=> 'Herhangi bir terim için ara',
	'SEARCH_AUTHOR'				=> 'Yazara göre ara',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Kısmi eşleşmeler için, joker olarak * kullanın.',
	'SEARCH_FIRST_POST'			=> 'Konuların sadece ilk iletileri',
	'SEARCH_FORUMS'				=> 'Şu forumlarda ara',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Arama yapmak istediğiniz forum veya forumları seçin. Eğer aşağıdaki “Alt forumlarda ara“ seçeneğini pasif hale getirmezseniz, alt forumlar otomatik olarak aranacaktır.', 
	'SEARCH_IN_RESULTS'			=> 'Sonuçlarda ara',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Bulunması gereken kelimenin başına <strong>+</strong>, bulunmaması gereken kelimenin başına <strong>-</strong> koyunuz. Eğer kelimenin başına <strong>|</strong> koyarsanız tüm sonuçlar bu kelimelerden en az birini içermek zorundadır. Kısmi eşleşmeler için, joker olarak * kullanın.',
	'SEARCH_MSG_ONLY'			=> 'Sadece ileti yazısı',
	'SEARCH_OPTIONS'			=> 'Arama seçenekleri',
	'SEARCH_QUERY'				=> 'Arama sorguları',
	'SEARCH_SUBFORUMS'			=> 'Alt forumlarda ara',
	'SEARCH_TITLE_MSG'			=> 'Konu başlığı ve ileti yazısı',
	'SEARCH_TITLE_ONLY'			=> 'Sadece konu başlıkları',
	'SEARCH_WITHIN'				=> 'Arama yapılacak yer',
	'SORT_ASCENDING'			=> 'Artan',
	'SORT_AUTHOR'				=> 'Yazar',
	'SORT_DESCENDING'			=> 'Azalan',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'İleti konusu',
	'SORT_TIME'					=> 'İleti zamanı',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Yazar adının en azından %d karakterini yazmalısınız.',
));

?>