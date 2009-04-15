<?php
/*
*
* viewforum [Turkish]
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
	'ACTIVE_TOPICS'			=> 'Aktif Konular',
	'ANNOUNCEMENTS'			=> 'Duyurular',
	
	'FORUM_PERMISSIONS'		=> 'Forum izinleri',
		
	'ICON_ANNOUNCEMENT'		=> 'Duyuru',
	'ICON_STICKY'			=> 'Sabit',

	'LOGIN_NOTIFY_FORUM'	=> 'Bu forum hakkında bilgilendirildiniz, incelemek için lütfen oturum açınız.',

	'MARK_TOPICS_READ'		=> 'Konuları okundu olarak işaretle',

	'NEW_POSTS_HOT'			=> 'Yeni ileti var [ Popüler ]',
	'NEW_POSTS_LOCKED'		=> 'Yeni ileti var [ Kilitli ]',
	'NO_NEW_POSTS_HOT'		=> 'Yeni ileti yok [ Popüler ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Yeni ileti yok [ Kilitli ]',
	'NO_READ_ACCESS'		=> 'Bu forumdaki konuları okuyabilmek için gerekli izniniz yok.',
	
	'POST_FORUM_LOCKED'		=> 'Forum kilitli',

	'TOPICS_MARKED'			=> 'Bu forumdaki tüm konular okundu olarak işaretlendi.',

	'VIEW_FORUM'			=> 'Forumu görüntüle',
	'VIEW_FORUM_TOPIC'		=> '1 konu',
	'VIEW_FORUM_TOPICS'		=> '%d konu',
));

?>