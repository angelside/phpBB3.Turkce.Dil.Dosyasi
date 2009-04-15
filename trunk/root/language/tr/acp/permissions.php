<?php
/*
*
* acp_permissions [Turkish]
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>İzinler yüksek derecede taneli ve gruplanmış dört belli başlı bölüme ayrılır:</p>

		<h2>Genel İzinler</h2>
		<p>Bunlar genel düzeye erişimi sağlar ve burada yapılan değişiklikler tüm foruma etki eder. Kullanıcı’ İzinleri, Grup’ İzinleri, Yöneticiler ve Genel Yetkililer olarak kendi içinde ayrılmıştır.</p>
		
		<h2>Forum Tabanlı İzinler</h2>
		<p>Bunlar her bir forum bünyesinde erişime olanak tanır. Forum İzinleri, Forum Yetkilileri, Kullanıcı’ Forum İzinleri ve Grup’ Forum İzinleri olarak kendi arasında ayrılmıştır.</p> 
		
		<h2>İzin Rolleri</h2>
		<p>Bunlar, değişik izin tipleri için rol-tabanlı durumlara daha sonra atanabilecek ayarları hazırlamak için kullanılır. Hazır gelen roller, mesaj panolarının yönetimini kapsamak zorundadır. Rolleri ekleyebilir, düzenleyebilir, silebilirsiniz.</p>
		
		<h2>İzin Maskeleri</h2>
		<p>Bunlar, Yetkililer (Yerel ve Genel), Kullanıcılar, Yöneticiler veya Forumlara atanan efektif izinlerin görülebilmesi için kullanılır.</p>
	
		<br />

		<p>phpBB3 panonuzdaki izinlerin kurulması ve yönetilmesini sağlamak hakkında daha fazla bigi edinmek isterseniz, hızlı başlangıç rehberindeki <a  href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Chapter 1.5 of our Quick Start Guide</a> bölümüne bakınız.</p>
	',

	'ACL_NEVER'				=> 'Asla', // Never
	'ACL_SET'				=> 'İzin ayarları',
	'ACL_SET_EXPLAIN'		=> 'İzinler basit bir <samp>EVET</samp>/<samp>HAYIR</samp> sistem tabanlıdır. Bir kullanıcı veya grup için <samp>ASLA</samp> seçeneği ayarlanırsa, onun için atanan herhangi başka bir değere önem verilmez. Eğer bu değerlerin kullanıcılar ya da kullanıcı gruplarındaki ayarların yerini almasını istemiyorsanız <samp>HAYIR</samp> seçeneğini seçin. Eğer değerler bu seçenek için başka bir yerde ayarlanırsa tercih olarak seçilen kabul edilecektir, aksi takdirde <samp>ASLA</samp> olarak kabul edilecektir. Tüm öğeler (önlerindeki seçme kutusuyla) işaretlendiğinde, belirlediğiniz izin ayarı kopyalanacaktır.',
	'ACL_SETTING'			=> 'Ayarlar',

	'ACL_TYPE_A_'			=> 'Yönetici izinleri',
	'ACL_TYPE_F_'			=> 'Forum izinleri',
	'ACL_TYPE_M_'			=> 'Yetkili izinleri',
	'ACL_TYPE_U_'			=> 'Kullanıcı izinleri',

	'ACL_TYPE_GLOBAL_A_'	=> 'Yönetici izinleri',
	'ACL_TYPE_GLOBAL_U_'	=> 'Kullanıcı izinleri',
	'ACL_TYPE_GLOBAL_M_'	=> 'Genel Yetkili izinleri',
	'ACL_TYPE_LOCAL_M_'		=> 'Forum Yetkilisi izinleri',
	'ACL_TYPE_LOCAL_F_'		=> 'Forum izinleri',
	
	'ACL_NO'				=> 'Hayır',
	'ACL_VIEW'				=> 'Görüntüleme izinleri', // Viewing permissions
	'ACL_VIEW_EXPLAIN'		=> 'Burada kullanıcıların/grupların geçerli izinlerini göreceksiniz. Kırmızı kareler kullanıcıların/grupların izinsiz olduğunu, yeşil kareler ise kullanıcıların/grupların izinli olduğunu belirtir', 
	'ACL_YES'				=> 'Evet',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Buradan kullanıcı ve gruplara yönetici izinleri atayabilirsiniz. Yönetici izinlerine sahip olan herkes yönetici paneline erişebilir.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Buradan kullanıcı ve grupları forum yetkilileri olarak atayabilirsiniz. Forum erişimlerine kullanıcı atamak, genel yetkili izinleri veya yöneticileri tanımlamak için lütfen uygun sayfayı kullanın.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Buradan kullanıcıların/grupların hangi forumlara erişebileceklerini değiştirebilirsiniz. Yetkililer ve yöneticiler için lütfen uygun sayfayı kullanın.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Buradan kullanıcı ve gruplara genel yetkili izinleri atayabilirsiniz. Bu yetkililer sıradan yetkililer gibidir fakat her forumda yetkilileri vardır.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Buradan gruplar için forum izinlerini atayabilirsiniz.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Buradan grupların genel izinlerini atayabilirsiniz - kullanıcı izinleri, genel yetkili izinleri ve yönetim izinleri. Kullanıcı izinleri; avatarların kullanımı, özel mesaj gönderme işlemi, vb. konuları içerir. Genel yetkili izinleri iletilerin onaylanması, forum yönetimi, yasaklama yönetimi, vb. konular ve son olarak yönetim izinleri ise izin değişimleri, özel biçim kodu tanımlama, pano yönetimi vb. konular içerir. Geniş sayıdaki kullanıcılarda bu ayarları değiştirmek için grup izinleri sistemi yöntemi tercih edilir. Kullanıcı izinleri sadece özel durumlarda değiştirilmelidir. Tercih edilmesi gereken yöntem kullanıcıları grup içine yerleştirdikten sonra grup izinlerini tanımlamaktır.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Burası yönetim izinleri için rollerin düzenlendiği yerdir. Roller etkili izinlere sahiptirler, daha önceden işaretlenerek tanımlanmış rolü değiştirmek isterseniz burada bu izinleri değiştirebilirsiniz.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Burası pano izinleri için rollerin düzenlendiği yerdir. Roller etkili izinlere sahiptirler. Daha önceden işaretlenerek tanımlanmış rolü değiştirmek isterseniz burada bu izinleri değiştirebilirsiniz.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Burası yetkili izinleri için rollerin düzenlendiği yerdir. Roller etkili izinlere sahiptirler. Daha önceden işaretlenerek tanımlanmış rolü değiştirmek isterseniz burada bu izinleri değiştirebilirsiniz.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Burası kullanıcı izinleri için rollerin düzenlendiği yerdir. Roller etkili izinlere sahiptirler. Daha önceden işaretlenerek tanımlanmış rolü değiştirmek isterseniz burada bu izinleri değiştirebilirsiniz.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Buradan kullanıcılar için forum izinlerini atayabilirsiniz.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Buradan kullanıcılara - kullanıcı izinleri, Genel yetkili izinleri ve yönetici izinleri şeklinde genel izinler tanımlayabilirsiniz. Kullanıcı izinleri avatarların kullanımı, özel mesaj gönderme işlemi, vb. konular içerir; global moderatör izinleri iletilerin onaylanması, forum yönetimi, yasaklama yönetimi, v.b. konular ve son olarak yönetim izinleri ise izin değişimleri, özel biçim kodu tanımlama, pano yönetimi v.b. konular içerir. Geniş sayıdaki kullanıcılarda bu ayarları değiştirmek için Grup izinleri sistemi yöntemi tercih edilir. Kullanıcı izinleri sadece özel durumlarda değiştirilmelidir, tercih edilmesi gereken yöntem kullanıcıları grup içine yerleştirdikten sonra grup izinlerini tanımlamaktır.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Buradan yönetimsel izinlerine tanımlanmış, seçilen kullanıcı/gruplarını görüntüleyebilirsiniz.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Buradan genel yetkili izinlerine tanımlanmış, seçilen kullanıcı/gruplarını görüntüleyebilirsiniz.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Buradan pano izinlerine tanımlanmış, seçilen kullanıcı/gruplarını görüntüleyebilirsiniz.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Buradan pano Yetkili izinlerine tanımlanmış, seçilen kullanıcı/gruplarını görüntüleyebilirsiniz.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Buradan etkin kullanıcı izinlerine tanımlanmış olan seçilen kullanıcı/gruplarını görüntüleyebilirsiniz.',

	'ADD_GROUPS'				=> 'Grupları ekle',
	'ADD_PERMISSIONS'			=> 'İzinleri ekle',
	'ADD_USERS'					=> 'Kullanıcılar ekle',
	'ADVANCED_PERMISSIONS'		=> 'Gelişmiş İzinler',
	'ALL_GROUPS'				=> 'Tüm grupları seç',
	'ALL_NEVER'					=> 'Tümü <samp>ASLA</samp>',
	'ALL_NO'					=> 'Tümü <samp>HAYIR</samp>',
	'ALL_USERS'					=> 'Tüm kullanıcıları seç',
	'ALL_YES'					=> 'Tümü <samp>EVET</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Tüm izinleri uygula',
	'APPLY_PERMISSIONS'			=> 'İzinleri uygula',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'İzinler ve roller sadece bu öğe için tanımlandı. Bu maddeye uygulanacağı için bütün maddeler kontrol edilecek.',
	'AUTH_UPDATED'				=> 'İzinler güncellendi.',

	'CREATE_ROLE'				=> 'Rol oluştur',
	'CREATE_ROLE_FROM'			=> 'Ayarları formdan kullan…',
	'CUSTOM'					=> 'Özel…',

	'DEFAULT'					=> 'Varsayılan',
	'DELETE_ROLE'				=> 'Rolü sil',
	'DELETE_ROLE_CONFIRM'		=> 'Bu rolü silmek istediğinizden emin misiniz? Bu rol atanmış öğeler kendilerinin izin ayarlarını <strong>kaybetmeyecektir</strong>.',
	'DISPLAY_ROLE_ITEMS'		=> 'Bu rolü kullanan maddeleri göster', //  View items using this role

	'EDIT_PERMISSIONS'			=> 'İzinleri değiştir',
	'EDIT_ROLE'					=> 'Rolü değiştir',

	'GROUPS_NOT_ASSIGNED'		=> 'Bu rol için grup atanmamış',

	'LOOK_UP_GROUP'				=> 'Üye grubuna bak', 
	'LOOK_UP_USER'				=> 'Üye bak',

	'MANAGE_GROUPS'		=> 'Grupları yönet',
	'MANAGE_USERS'		=> 'Üyeleri yönet',

	'NO_AUTH_SETTING_FOUND'		=> 'İzin ayarları tanımlanmamış.',
	'NO_ROLE_ASSIGNED'			=> 'Rol atanmamış…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Bu rol doğru izinleri değiştirmez. Eğer bütün izinleri belirsiz bırakmak/kaldırmak istiyorsanız “Tümüne <samp>HAYIR</samp>” bağlantısını kullanmalısınız.',
	'NO_ROLE_AVAILABLE'			=> 'Mevcut rol yok',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Lütfen role bir isim veriniz.',
	'NO_ROLE_SELECTED'			=> 'Rol bulunamadı.',
	'NO_USER_GROUP_SELECTED'	=> 'Herhangi bir kullanıcı veya grup seçmediniz.',

	'ONLY_FORUM_DEFINED'	=> 'Sadece seçtiğiniz forumları tanımladınız. Lütfen en az bir kullanıcı veya bir grup seçiniz.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'İzinler ve roller bütün kontrol edilmiş nesnelere uygulanacak',
	'PLUS_SUBFORUMS'				=> '+Alt forumlar',

	'REMOVE_PERMISSIONS'			=> 'İzinleri sil',
	'REMOVE_ROLE'					=> 'Rolü sil',
	'RESULTING_PERMISSION'			=> 'İzinleri sonuçlandır',
	'ROLE'							=> 'Rol',
	'ROLE_ADD_SUCCESS'				=> 'Rol eklendi.',
	'ROLE_ASSIGNED_TO'				=> 'Kullanıcılar/Gruplar yapmayı tahsis edildi %s',
	'ROLE_DELETED'					=> 'Rol silindi.',
	'ROLE_DESCRIPTION'				=> 'Rol açıklaması',

	'ROLE_ADMIN_FORUM'			=> 'Forum Yöneticisi', 
	'ROLE_ADMIN_FULL'			=> 'Tam Yönetici',
	'ROLE_ADMIN_STANDARD'		=> 'Standart Yönetici',
	'ROLE_ADMIN_USERGROUP'		=> 'Kullanıcı ve gruplar yöneticisi',
	'ROLE_FORUM_BOT'			=> 'Bot Erişimi',
	'ROLE_FORUM_FULL'			=> 'Tam Erişim',
	'ROLE_FORUM_LIMITED'		=> 'Sınırlı Erişim',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Sınırlı Erişim + Anketler',
	'ROLE_FORUM_NOACCESS'		=> 'Erişim Yok',
	'ROLE_FORUM_ONQUEUE'		=> 'Yetkili Onaylı',
	'ROLE_FORUM_POLLS'			=> 'Standart Erişim + Anketler',
	'ROLE_FORUM_READONLY'		=> 'Sadece Okuma Erişimi',
	'ROLE_FORUM_STANDARD'		=> 'Standart Erişim',
	'ROLE_MOD_FULL'				=> 'Tam Yetkili',
	'ROLE_MOD_QUEUE'			=> 'Onay Yetkilisi',
	'ROLE_MOD_SIMPLE'			=> 'Basit Yetkili',
	'ROLE_MOD_STANDARD'			=> 'Standart Yetkili',
	'ROLE_USER_FULL'			=> 'Tüm Özellikler',
	'ROLE_USER_LIMITED'			=> 'Sınırlı Özellikler',
	'ROLE_USER_NOAVATAR'		=> 'Avatar Yok',
	'ROLE_USER_NOPM'			=> 'Özel Mesajlaşma Yok',
	'ROLE_USER_STANDARD'		=> 'Standart Özellikler',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Forum yönetimine ulaşabilir ve forum izinlerini düzenleyebilir.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Panonun bütün yönetimsel görevlerine erişim hakkına sahip olabilir.<br />Tavsiye edilmez.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Yönetim ile ilgili bir çok erişime sahiptir, sadece sunucu ile ilgili olan ayarları düzenlemeye yetkisi yoktur.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Kullanıcı ve grupları yönetebilir, izinleri değiştirebilir, ayarlar, yasaklama yönetimi ve seviyeleri düzenleyebilir.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Bu rol botlar ve arama örümcekleri için tavsiye edilir.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Panonun tüm özelliklerini kullanabilir. Duyuru yapabilir ve başlıkları sabitleleyebilir. Yığın mesaj sınırlamasını yoksayabilir.<br />Normal kullanıcılar için önerilmez',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Panonun bazı özelliklerini kullanabilir. Eklenti olarak dosya gönderemez, ileti ikonlarını kullanamaz.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Sınırlı erişime rağmen anketler oluşturabilir.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Panoyu ne görebilir nede erişebilir.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Eklentileride kapsayan bir çok pano özelliğini kullanabilir fakat iletiler ve konular bir yetkili tarafından onaylanmadan yayınlanmaz.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Standart erişim gibidir fakat anket oluşturabilir.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Forumları okuyabilir, fakat yeni konu başlatamaz ve ileti cavaplayamaz.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Panonun bir çok özelliğini kullanabilir. Eklentileri ve kendi konularını silebilir fakat kendi konularını kilitleyemez ve anket oluşturamaz.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Yasaklama dahil tüm yetkili özelliklerini kullanabilir.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Onay bekliyen iletileri onaylayabilir, yönetebilir, düzenleyebilir. Bunun haricinde başka herhangi bir işlem yapamaz.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Sadece temel konu işlemlerini kullanabilir. Uyarı yollayamaz, onay işlemlerini yapamaz.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Bir çok yetkili aracını kullanabilir, fakat kullanıcıları uzaklaştıramaz, ileti yazarının ismini değiştiremez.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Kullanıcılar için müsait olan bütün pano özelliklerini kullanabilir, kullanıcı ismini değiştirebilir ve peşpeşe ileti yazma limitini yok sayabilir.<br />Tavsiye edilmez.', // flood limit.
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Kullanıcı özelliklerinin bir kısmına erişebilir. Eklentilere, e-postalara, ve hızlı iletilere izin verilmez.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Sınırlı özelliklere sahiptir, avatar özelliğini kullanamaz.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Sınırlı özelliklere sahiptir, özel mesajlaşmayı kullanamaz.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Bir çok erişime sahiptir fakat bütün kullanıcı özelliklerine değil. Örneğin, kullanıcı ismini değiştiremez ve peş peşe ileti yazmak için yığın mesaj limitini yok sayamaz.', 
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Rolün işlevi hakkında bir açıklama belirtebilir, tanımlayabilirsiniz. Gireceğiniz açıklama izinler ekranında görüntülenecektir.',
	'ROLE_DESCRIPTION_LONG'			=> 'Rol tanımlamazı fazla uzun, lütfen 4000 karakterle sınırlayınız.',
	'ROLE_DETAILS'					=> 'Rol detayları',
	'ROLE_EDIT_SUCCESS'				=> 'Rol değiştirildi.',
	'ROLE_NAME'						=> 'Rol adı',
	'ROLE_NAME_ALREADY_EXIST'		=> '<strong>%s</strong> isimli rol belirtilen izin tipi için zaten mevcut.',
	'ROLE_NOT_ASSIGNED'				=> 'Henüz rol atanmadı.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Seçilen forum(lar) mevcut değil.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Seçilen grup(lar) mevcut değil.',
	'SELECTED_USER_NOT_EXIST'		=> 'Seçilen kullanıcı(lar) mevcut değil.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Buradan seçtiğiniz forum seçimin tüm alt forumlarını da kapsayacaktır.',
	'SELECT_ROLE'					=> 'Rol seçiniz',
	'SELECT_TYPE'					=> 'Tip seçiniz',
	'SET_PERMISSIONS'				=> 'İzinleri ayarla',
	'SET_ROLE_PERMISSIONS'			=> 'Rol izinlerini ayarla',
	'SET_USERS_PERMISSIONS'			=> 'Kullanıcı izinlerini ayarla',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Kullanıcı forum izinlerini ayarla',

	'TRACE_DEFAULT'					=> 'Varsayayılan her izin <samp>HAYIR</samp> olarak ayarlanmıştır. BUndan dolayı diğer ayarlar izinlerin üzerine yazabilir.',
	'TRACE_FOR'						=> 'İzle',
	'TRACE_GLOBAL_SETTING'			=> '%s (genel)',
'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Bu grubun izin toplam sonucu <samp>ASLA</samp> olarak belirlenirse, bundan dolayı eski izinleri kalır.',
'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Bu forumun grubun izin toplam sonucu <samp>ASLA</samp> olarak belirlenirse, bundan dolayı eski izinleri kalır.',
'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Bu grubun izin toplam sonucu <samp>HAYIR</samp> olarak belirlenir, çünkü yeni toplam değeri belirlenmedi (<samp>HAYIR</samp> olarak ayarla).',
'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Bu forumun grubun izin toplam sonucu <samp>ASLA</samp> olarak belirlenir, çünkü yeni toplam değeri belirlenmedi (<samp>HAYIR</samp> olarak ayarla).',
'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Bu grup izinleri <samp>ASLA</samp> olarak belirlenmiştir. Bu, kullanıcı için <samp>EVET</samp> olarak ayarlanmış tüm izinleri <samp>ASLA</samp> olarak çevirir.',
'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Bu forum için, bu grubun izinleri <samp>ASLA</samp> olarak belirlenmiştir.  Bu, kullanıcı için <samp>EVET</samp> seçilmiş tüm izinleri <samp>ASLA</samp> olarak atar.',
'TRACE_GROUP_NO'				=> 'Bu grubun izinleri <samp>HAYIR</samp> belirlenir, bundan dolayı eski izinleri kalır.',
//'TRACE_GROUP_NO' => 'Bu grubun izinlerini şu anda <samp>HAYIR</samp>. Bundan dolayı eski izinleri geçerli kalır. :Agitaous11 
'TRACE_GROUP_NO_LOCAL'			=> 'Forumda ki bu grubun izinleri  <samp>HAYIR</samp> belirlenir, bundan dolayı eski izinleri kalır.',
'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'This group’s permission is set to <samp>EVET</samp> but the total <samp>ASLA</samp> cannot be overwritten.',
//'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Bu grubun ayarları <samp>EVET</samp> olarak düzenlendi ancak varolan bir yekün <samp>ASLA</samp> seçiminin üzerine yazılamaz.', :Agitaous11
'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'This group’s permission for this forum is set to <samp>EVET</samp> but the total <samp>ASLA</samp> cannot be overwritten.',
//'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Bu grubun, bu forum için ayarları <samp>EVET</samp> olarak düzenlendi ancak varolan bir yekün <samp>ASLA</samp> seçiminin üzerine yazılamaz.', : Agitaous11
'TRACE_GROUP_YES_TOTAL_NO'		=> 'Bu grubun izinleri <samp>EVET</samp> olarak ayarlandı. Yekün izini de bu ayar getirdi çünkü, yekün izin henüz ayarlanmadı.(<samp>HAYIR</samp> olarak ayarla).',
'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Bu grubun, bu forum için ayarları <samp>EVET</samp> olarak ayarlandı ve Yekün izinde bu ayarla düzenlendi çünkü henüz varolan bir yekün izin yok.(<samp>HAYIR</samp> olarak ayarla).',

	'TRACE_GROUP_YES_TOTAL_YES'			=> 'Grubun izinleri <samp>EVET</samp> olarak ayarlandı ve tam izinler tekrar <samp>EVET</samp> olarak ayarlandı. Tam sonuçlar korundu.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Bu forum için grubun izinleri <samp>EVET</samp> olarak ayarlandı ve tam izinler tekrar <samp>EVET</samp> olarak ayarlandı. Tam sonuçlar korundu.',
	'TRACE_PERMISSION'					=> 'İzinleri izle - %s',
	'TRACE_RESULT'						=> 'İzleme sonucu',
	'TRACE_SETTING'						=> 'İzleme ayarları',

'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'The forum independent user permission evaluates to <samp>EVET</samp> but the total permission is already set to <samp>YES</samp>, so the total result is kept. %sGenel izinleri izle%s',
'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'The forum independent user permission evaluates to <samp>EVET</samp> which overwrites the current local result <samp>ASLA</samp>. %sGenel izinleri izle%s',
'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'The forum independent user permission evaluates to <samp>ASLA</samp> which doesn’t influence the local permission. %sGenel izinleri izle%s',

'TRACE_USER_FOUNDER'					=> 'The user has the founder type set, therefore admin permissions are set to <samp>EVET</samp> by default.',
'TRACE_USER_KEPT'						=> 'The user’s permission is <samp>HAYIR</samp> so the old total value is kept.',
'TRACE_USER_KEPT_LOCAL'					=> 'The user’s permission for this forum is <samp>EVET</samp> so the old total value is kept.',
'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'The user’s permission is set to <samp>ASLA</samp> and the total value is set to <samp>ASLA</samp>, so nothing is changed.',
'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'The user’s permission for this forum is set to <samp>ASLA</samp> and the total value is set to <samp>ASLA</samp>, so nothing is changed.',
'TRACE_USER_NEVER_TOTAL_NO'				=> 'The user’s permission is set to <samp>ASLA</samp> which becomes the total value because it was set to NO.',
'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'The user’s permission for this forum is set to <samp>ASLA</samp> which becomes the total value because it was set to NO.',
'TRACE_USER_NEVER_TOTAL_YES'			=> 'The user’s permission is set to <samp>ASLA</samp> and overwrites the previous <samp>EVET</samp>.',
'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'The user’s permission for this forum is set to <samp>ASLA</samp> and overwrites the previous <samp>EVET</samp>.',
'TRACE_USER_NO_TOTAL_NO'				=> 'The user’s permission is <samp>EVET</samp> and the total value was set to NO so it defaults to <samp>ASLA</samp>.',
'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'The user’s permission for this forum is <samp>HAYIR</samp> and the total value was set to NO so it defaults to <samp>ASLA</samp>.',
'TRACE_USER_YES_TOTAL_NEVER'			=> 'The user’s permission is set to <samp>EVET</samp> but the total <samp>ASLA</samp> cannot be overwritten.',
'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'The user’s permission for this forum is set to <samp>EVET</samp> but the total <samp>ASLA</samp> cannot be overwritten.',
'TRACE_USER_YES_TOTAL_NO'				=> 'The user’s permission is set to <samp>EVET</samp> which becomes the total value because it was set to <samp>HAYIR</samp>.',
'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'The user’s permission for this forum is set to <samp>EVET</samp> which becomes the total value because it was set to <samp>HAYIR</samp>.',
'TRACE_USER_YES_TOTAL_YES'				=> 'The user’s permission is set to <samp>EVET</samp> and the total value is set to <samp>EVET</samp>, so nothing is changed.',
'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'The user’s permission for this forum is set to <samp>EVET</samp> and the total value is set to <samp>EVET</samp>, so nothing is changed.',
	'TRACE_WHO'								=> 'Kim',
	'TRACE_TOTAL'							=> 'Toplam',

	'USERS_NOT_ASSIGNED'			=> 'Bu rol için kullanıcı atanmadı',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'aşağıdaki ön tanımlı atanan grupların üyesidir', // is a member of the following pre-defined groups
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'aşağıdaki grupların üyesidir', // is a member of the following user defined groups

	'VIEW_ASSIGNED_ITEMS'	=> 'Atanan öğlere bak', // View assigned items
	'VIEW_LOCAL_PERMS'		=> 'Yerel izinler',
	'VIEW_GLOBAL_PERMS'		=> 'Genel izinler',
	'VIEW_PERMISSIONS'		=> 'İzinleri görüntüle', // View permissions

	'WRONG_PERMISSION_TYPE'				=> 'Yanlış izin tipi seçildi.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'İzin ayarları geçersiz bir biçimdedir, phpBB doğru olarak işlem yapmayacaktır.',
));

?>