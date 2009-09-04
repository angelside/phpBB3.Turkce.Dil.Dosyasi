<?php
/*
*
* acp_prune [Turkish]
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Buradan, forumunuzdaki kullanıcıları silebilir veya pasif edebilirsiniz. Bunun değişik yolları vardır; ileti sayısına göre, son çevrimiçi olduğu tarihe göre, vs. Her iki kriteri birleştirebilir, kullanıcıları en son 2002-01-01 tahinde çevrimiçi olan ve en az 10 iletisi bulunan diye kısıtlayabilmeniz de mümkündür. Alternatif olarak, direkt yazı kutusuna kullanıcıların bir listesini yazıp, onlar için bazı kriterlerin görmezlikten gelinmesini sağlayabilirsiniz. Burada çok dikkatli olmanız gerekmektedir! Bir kullanıcı silindiği takdirde, bunun bir daha dönüşü olamayacaktır.',

	'DEACTIVATE_DELETE'			=> 'Pasif hale getir veya sil',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Seçenek, kullanıcıları pasif hale getirir veya onları tamamen siler. Bu geri dönüşü olmayan bir işlemdir!',
	'DELETE_USERS'				=> 'Sil',
	'DELETE_USER_POSTS'			=> 'Silinecek kullanıcıların iletilerini temizle',
	'DELETE_USER_POSTS_EXPLAIN' => 'Silinecek kullanıcıların iletilerini siler, eğer kullanıcı pasif ise hiçbir etkisi olmayacaktır.',

	'JOINED_EXPLAIN'			=> '<kbd>YYYY-AA-GG</kbd> biçiminde bir tarih girin.',

	'LAST_ACTIVE_EXPLAIN'		=> '<kbd>YYYY-AA-GG</kbd> biçiminde bir tarih girin.',

	'PRUNE_USERS_LIST'				=> 'Ayrıştırılacak kullanıcılar', // ALEXIS: kullanıcı temizliği olabilir mi ?
	'PRUNE_USERS_LIST_DELETE'		=> 'Ayrıştırılan kullanıcılar ile ilgili olarak seçilen kriterlerle takip eden hesaplar silinecektir.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Ayrıştırılan kullanıcılar ile ilgili olarak seçilen kriterlerle takip eden hesaplar pasif hale gelecektir.',
	
	'SELECT_USERS_EXPLAIN'		=> 'Buraya özel bir kullanıcı ismi yazın, yazdığınız kullanıcılar yukarıdaki kriterlere göre seçeneklendirilecekler.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Seçilen kullanıcılar pasif edildi.',
	'USER_DELETE_SUCCESS'		=> 'Seçilen kullanıcılar silindi.',
	'USER_PRUNE_FAILURE'		=> 'Seçilen kriterlere göre uygun kullanıcı bulunamadı.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Yazılan tarih yanlış, olması gereken biçim <kbd>YYYY-AA-GG</kbd> şeklindedir.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Bu sayfadan, seçtiğiniz rakama göre belirlenen konuları veya belirlenen günde yeterince gösterime ulaşmayan iletileri silebilirsiniz. Eğer bir rakam yazmaziseniz, daha sonra bütün konular silinecektir. Varsayılan olarak şu an kullanılan anketler, sabit konular ve duyurular silinmeyecektir.',

	'FORUM_PRUNE'		=> 'Forum temizliği',

	'NO_PRUNE'			=> 'Hiçbir forum temizlenmedi.',

	'SELECTED_FORUM'	=> 'Seçilmiş forum',
	'SELECTED_FORUMS'	=> 'Seçilmiş forumlar',

	'POSTS_PRUNED'					=> 'İleti temizle',
	'PRUNE_ANNOUNCEMENTS'			=> 'Duyuruları temizle',
	'PRUNE_FINISHED_POLLS'			=> 'Kapalı anketleri temizle',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'İçerisinde sona ermiş anket bulunan konuları siler.',
	'PRUNE_FORUM_CONFIRM'			=> 'Belirlenen ayarları kullanarak seçilen forumları ayrıştırmak istediğinizden emin misiniz? Daha sonra ayrıştırılan ileti ve konuları geri getirmek mümkün olmayacaktır.',
	'PRUNE_NOT_POSTED'				=> 'En son mesajdan beri günler',
	'PRUNE_NOT_VIEWED'				=> 'En son gösterimden beri günler',
	'PRUNE_OLD_POLLS'				=> 'Eski anketleri temizle',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Mesaj günü geçen oylanmamış anket konularını siler.',
	'PRUNE_STICKY'					=> 'Sabit konuları temizle',
	'PRUNE_SUCCESS'					=> 'Forumların temizlenmesi gerçekleştirildi.',

	'TOPICS_PRUNED'		=> 'Konular temizlendi',
));

?>