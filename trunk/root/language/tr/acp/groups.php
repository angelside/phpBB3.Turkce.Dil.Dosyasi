<?php
/*
*
* acp_groups [Turkish]
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Bu panel sayesinde yeni gruplar oluşturabilir, var olanları yönetebilir veya silebilirsiniz. Grup liderlerini seçebilir, grupların açık veya kapalı grup olmasına karar verebilirsiniz. Aynı zamanda grup adı ve açıklamasını da ayarlayabilirsiniz.',
	'ADD_USERS'						=> 'Kullanıcı ekle',
	'ADD_USERS_EXPLAIN'				=> 'Burada gruba yeni kullanıcılar ekleyebilirsiniz. Seçilen kullanıcılar için bu grubun yeni varsayılan grup olup olmayacağını belirleyebilirsiniz. Ayrıca grup liderlerini seçebilirsiniz. Lütfen her kullanıcı adını farklı bir satıra yazınız.',

	'COPY_PERMISSIONS'				=> 'İzinleri şundan kopyala',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Bir defa oluşturduktan sonra, seçtiğiniz grup ile bu grup aynı izinlere sahip olacaktır.',
	'CREATE_GROUP'					=> 'Yeni grup oluştur',

	'GROUPS_NO_MEMBERS'				=> 'Bu grubun henüz üyesi yok',
	'GROUPS_NO_MODS'				=> 'Gruba bir lider atanmadı',

	'GROUP_APPROVE'					=> 'Üyeyi onayla',
	'GROUP_APPROVED'				=> 'Onaylı üyeler',
	'GROUP_AVATAR'					=> 'Grup için resim',
	'GROUP_AVATAR_EXPLAIN'			=> 'Bu resim grup kontrol panelinde görünecektir.',
	'GROUP_CLOSED'					=> 'Kapalı',
	'GROUP_COLOR'					=> 'Grup rengi',
	'GROUP_COLOR_EXPLAIN'			=> 'Kullanıcı isimlerinin görüneceği rengi ayarlar, kullanıcı varsayılanını ayarlamak için boş bırakabilirsiniz.',
	'GROUP_CONFIRM_ADD_USER'		=> '%1$s kullanıcısını gruba eklemek istediğinize emin misiniz?',
	'GROUP_CONFIRM_ADD_USERS'		=> '%1$s kullanıcısını gruba eklemek istediğinize emin misiniz?',
	'GROUP_CREATED'					=> 'Grup oluşturuldu',
	'GROUP_DEFAULT'					=> 'Üye için varsayılan grup',
	'GROUP_DEFS_UPDATED'			=> 'Varsayılan grup tüm üyeleri içine alır',
	'GROUP_DELETE'					=> 'Üyeyi gruptan sil',
	'GROUP_DELETED'					=> 'Grup silindi ve kullanıcıların varsayılan grubu ayarlandı',
	'GROUP_DEMOTE'					=> 'Grup lideri rütbesini sök',
	'GROUP_DESC'					=> 'Grup açıklaması',
	'GROUP_DETAILS'					=> 'Grup detayları',
	'GROUP_EDIT_EXPLAIN'			=> 'Burada var olan bir grubu düzenleyebilirsiniz. Adını, açıklamasını ve (açık, kapalı, vs.) durumunu değiştirebilirsiniz. Ayrıca grubun detaylarına inerek grup rengini seviyesini v.s değiştirebilirsiniz. Burada yaptığınız değişiklikler ayrıca üye kullanıcıların özelliklerinde de yapılacaktır. Eğer kullanıcı izinlerinden ayarlamazsanız grup üyelerinin avatarlarını değiştirebileceklerini unutmayınız.',
	'GROUP_ERR_USERS_EXIST'			=> 'Belirtilen kullanıcılar gruba zaten üye',
	'GROUP_FOUNDER_MANAGE'			=> 'Sadece sahibi değiştirsin',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Sadece kurucular için kısıtlı grup yönetimi. Grup izinlerine sahip olan kullanıcılar da hala bu grubun üyeleri gibi grubu görebilirler.',
	'GROUP_HIDDEN'					=> 'Gizli',
	'GROUP_LANG'					=> 'Grup dili',
	'GROUP_LEAD'					=> 'Grup liderleri',
	'GROUP_LEADERS_ADDED'			=> 'Yeni liderler gruba eklendi.',
	'GROUP_LEGEND'					=> 'Grubu Yetkiler kısmında göster',
	'GROUP_LIST'					=> 'Şu andaki üyeleri',
	'GROUP_LIST_EXPLAIN'			=> 'Listelenen kullanıcılar bu gruba zaten üye olan kullanıcılardır. Var olanları silebilir veya istediklerinizi ekleyebilirsiniz',
	'GROUP_MEMBERS'					=> 'Grup üyeleri',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Bu kullanıcı grubunda varolan üyelerin tam listesidir. Grup liderleri için özel seçenekler barındırır. Kimlerin gruba üye olacağına ve gruptaki rollerine burada karar verebilirsiniz. Grup liderini gruptan silmeksizin liderlikten almak için sil yerine rütbe sökmeyi kullanın. Benzer şekilde lider yapmak için terfî ettirmeyi kullanabilirsiniz.',
	'GROUP_MESSAGE_LIMIT'			=> 'Grup için özel mesaj kutusunda barındırabilecekleri ileti limiti',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Buraya girilen limit varsayılan limitin üzerine yazılacaktır. 0 yazarsanız varsayılan limit geçerli olur.',
	'GROUP_MODS_ADDED'				=> 'Yeni grup yöneticileri eklendi.',
	'GROUP_MODS_DEMOTED'			=> 'Grup liderinin rütbesi söküldü',
	'GROUP_MODS_PROMOTED'			=> 'Grup üyeleri terfi ettirildi',
	'GROUP_NAME'					=> 'Grup adı',
	'GROUP_NAME_TAKEN'				=> 'Yazdığınız grup adı zaten kullanımda, lütfen bir alternatif seçiniz.',
	'GROUP_OPEN'					=> 'Açık',
	'GROUP_PENDING'					=> 'Onay bekleyen üyeler',
	'GROUP_MAX_RECIPIENTS'			=> 'Her özel mesajda izin verilen en fazla alıcı sayısı',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Bir özel mesajda izin verilen en fazla alıcı sayısı. Eğer 0 girilirse, pano genelindeki ayarlar kullanılır.',
	'GROUP_PROMOTE'					=> 'Grup liderliğine terfi ettir',
	'GROUP_RANK'					=> 'Grup seviyesi',
	'GROUP_RECEIVE_PM'				=> 'Grup özel mesaj alabilir',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Unutmayın ki bu ayarlar göz ardı edilerek, gizli gruplara mesaj gönderilemez.',
	'GROUP_REQUEST'					=> 'Talepli',
	'GROUP_SETTINGS_SAVE'			=> 'Grup özel ayarları',
	'GROUP_TYPE'					=> 'Grup tipi',
	'GROUP_TYPE_EXPLAIN'			=> 'Grubu kimlerin görebileceğini ve gruba kimlerin üye olabileceğini ayarlar.',
	'GROUP_UPDATED'					=> 'Grup tercihleri güncellendi.',

	'GROUP_USERS_ADDED'				=> 'Yeni kullanıcılar gruba eklendi.',
	'GROUP_USERS_EXIST'				=> 'Seçilen kullanıcılar zaten üye.',
	'GROUP_USERS_REMOVE'			=> 'Kullanıcı gruptan silindi ve varsayılan gruba kaydedildi',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Her kullanıcı için varsayılan grup olarak belirle',
	'MEMBERS'				=> 'Kullanıcılar',

	'NO_GROUP'					=> 'Hiçbir grup belirtilmedi',
	'NO_GROUPS_CREATED'			=> 'Hiçbir grup eklenmedi.',
	'NO_PERMISSIONS'			=> 'İzinleri kopyalama',
	'NO_USERS'					=> 'Herhangi bir kullanıcı yazmadınız.',
	'NO_USERS_ADDED'			=> 'Gruba hiçbir kullanıcı eklenmedi.',
	'NO_VALID_USERS'			=> 'Bu işlemi yapmaya hakkı olan hiçbir kullanıcı girmediniz.',

	'SPECIAL_GROUPS'			=> 'Önceden belirlenmiş gruplar',
	'SPECIAL_GROUPS_EXPLAIN' 	=> 'Ön tanımlı gruplar özel gruplardır. Bu gruplar silinemez veya direkt olarak modifiye edilemezler. Ancak, isterseniz bu gruba kullanıcılar ekleyebilir ve temel ayarları  yapılandırabilirsiniz.',

	'TOTAL_MEMBERS'				=> 'Üyeler',

	'USERS_APPROVED'				=> 'Kullanıcılar onaylandı.',
	'USER_DEFAULT'					=> 'Kullanıcı varsayılanı',
	'USER_DEF_GROUPS'				=> 'Sonradan açılan gruplar',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Panoda sizin tarafınızdan veya başka bir Yönetici tarafından oluşturulan gruplardır. Grubu düzenleyebilir, ayarları değiştirebilir, hatta silebilirsiniz.',
	'USER_GROUP_DEFAULT'			=> 'Varsayılan Grup olarak ayarla',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Buraya evet derseniz bu grup seçili tüm üyeleri için varsayılan grup olacaktır.',
	'USER_GROUP_LEADER'				=> 'Grup lideri yap',
));

?>