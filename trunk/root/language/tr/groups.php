<?php
/**
* @version $Id$
* @author Sevdin Filiz <angelside@users.sourceforge.net>
* @copyright (c) 2009, Canver Software <http://www.canversoft.net>
*/

// değiştirmeyin
if (!defined('IN_PHPBB')) { exit; }
if (empty($lang) || !is_array($lang)) { $lang = array(); }

// dil değişkenleri
$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'		=> 'Seçili grup zaten sizin varsayılan grubunuz.',
	'ALREADY_IN_GROUP'			=> 'Bu gruba zaten üyesiniz.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Seçilen gruba tekrar katılma isteğinde bulunuyorsunuz.',
	
	'CANNOT_JOIN_GROUP'			=> 'Bu gruba katılamazsınız. Sadece açık ve izin verilen gruplara katılabilirsiniz.',
	'CANNOT_RESIGN_GROUP'		=> 'Bu gruptan ayrılamazsınız. Sadece açık ve izin verilen gruplardan ayrılabilirsiniz.',
	'CHANGED_DEFAULT_GROUP'		=> 'Varsayılan grup değişti.',
	
	'GROUP_AVATAR'						=> 'Grup resmi',
	'GROUP_CHANGE_DEFAULT'				=> 'Varsayılan üyeliğinizi “%s” grubu ile değiştirmek istediğinizden emin misiniz?',
	'GROUP_CLOSED'						=> 'Kapalı',
	'GROUP_DESC'						=> 'Grup açıklaması',
	'GROUP_HIDDEN'						=> 'Gizli',
	'GROUP_INFORMATION'					=> 'Kullanıcı grubu bilgisi',
	'GROUP_IS_CLOSED'					=> 'Kapalı bir gruptur, yeni üyeler sadece bir grup lideri tarafından davet edilebilirler.',
	'GROUP_IS_FREE'						=> 'Serbest bir gruptur, tüm yeni üyeler hoşgeldiniz.',
	'GROUP_IS_HIDDEN'					=> 'Gizli bir gruptur, bu grubun üyeliklerini sadece grubun üyeleri görebilir.',
	'GROUP_IS_OPEN'						=> 'Açık bir gruptur, üye olabilirsiniz.',
	'GROUP_IS_SPECIAL'					=> 'Özel bir gruptur, özel gruplar pano yöneticisi tarafından yönetilmektedir.',
	'GROUP_JOIN'						=> 'Gruba katıl',
	'GROUP_JOIN_CONFIRM'				=> 'Seçtiğiniz gruba katılmak istediğinizden emin misiniz?',
	'GROUP_JOIN_PENDING'				=> 'Gruba katılmak için başvur.',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Seçtiğiniz gruba katılmak için başvuruda bulunmak istediğinizden emin misiniz?',
	'GROUP_JOINED'						=> 'Seçtiğiniz gruba üye oldunuz.',
	'GROUP_JOINED_PENDING'				=> 'Başvurunuz gönderildi. Grup liderlerinden birinin üyeliğinizi onaylaması için lütfen bekleyiniz.',
	'GROUP_LIST'						=> 'Kullanıcıları yönet',
	'GROUP_MEMBERS'						=> 'Grup üyeleri',
	'GROUP_NAME'						=> 'Grup adı',
	'GROUP_OPEN'						=> 'Aç',
	'GROUP_RANK'						=> 'Grup seviyesi',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Grup üyeliğinizi kaldırın.',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Seçtiğiniz gruptaki üyeliğinizi kaldırmak istediğinizden emin misiniz?',
	'GROUP_RESIGN_PENDING'				=> 'Askıda olan grup üyeliğinizi kaldırın.',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Askıda olan gruptaki üyeliğinizi kaldırmak istediğinizden emin misiniz?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Seçilen gruptan ayrıldınız.',
	'GROUP_RESIGNED_PENDING'			=> 'Üyeliğiniz askıda olan gruptan ayrıldınız.',
	'GROUP_TYPE'						=> 'Grup tipi',
	'GROUP_UNDISCLOSED'					=> 'Gizli grup',
	'FORUM_UNDISCLOSED'					=> 'Gizli forum(ları) yönet',

	'LOGIN_EXPLAIN_GROUP'	=> 'Grup ayrıntılarını görmek için oturum açınız.',

	'NO_LEADERS'					=> 'Hiçbir grubun lideri değilsiniz.',
	'NOT_LEADER_OF_GROUP'			=> 'İstediğiniz işlem gerçekleştirilemiyor, çünkü seçtiğiniz grubun lideri değilsiniz.',
	'NOT_MEMBER_OF_GROUP'			=> 'İstediğiniz işlem gerçekleştirilemiyor, çünkü seçtiğiniz grubun üyesi değilsiniz veya üyeliğiniz henüz onaylanmamış.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Varsayılan grubunuzdan ayrılamazsınız.',
	
	'PRIMARY_GROUP'		=> 'İlk grup',

	'REMOVE_SELECTED'	=> 'Seçileni sil',

	'USER_GROUP_CHANGE'			=> '“%1$s” grubundan “%2$s” grubuna',
	'USER_GROUP_DEMOTE'			=> 'Liderliğini kaldır.',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Seçtiğiniz gruptaki liderliğinizi kaldırmak istediğinizden emin misiniz?',
	'USER_GROUP_DEMOTED'		=> 'Grup liderliğiniz kaldırıldı.',
));

?>