<?php
/*
*
* memberlist [Turkish]
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
	'ABOUT_USER'			=> 'Kullanıcı hakkında',
	'ACTIVE_IN_FORUM'		=> 'En aktif forum',
	'ACTIVE_IN_TOPIC'		=> 'En aktif konu',
	'ADD_FOE'				=> 'Yasaklı üye ekle',
	'ADD_FRIEND'			=> 'Arkadaş ekle',
	'AFTER'					=> 'Sonra',

	'ALL'					=> 'Hepsi',
	
	'BEFORE'				=> 'Önce',

	'CC_EMAIL'				=> 'Bu e-posta’nın bir kopyasını da kendinize yollayın.',
	'CONTACT_USER'			=> 'İletişim Bilgileri',

	'DEST_LANG'				=> 'Dil',
	'DEST_LANG_EXPLAIN'		=> '(eğer varsa) mesajı alacak kişi için uygun bir dil seçiniz.',

	'EMAIL_BODY_EXPLAIN'	=> 'Bu mesaj düz yazı şeklinde gönderilecektir, hiçbir HTML kodu veya biçim kodu içermeyecektir. Mesajın geri dönüş adresi olarak e-posta adresiniz işlenecektir.',
	'EMAIL_DISABLED'		=> 'Üzgünüz fakat e-posta ile ilgili tüm işlevler durdurulmuştur.',
	'EMAIL_SENT'			=> 'E-Posta gönderildi.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Bu mesaj düz yazı şeklinde gönderilecektir, hiçbir HTML kodu veya biçim kodu içermeyecektir. Lütfen hatırlayınki başlık bilgisi mesaja eklenecektir. Mesajın geri dönüş adresi e-posta adresinize yollanacaktır.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Alıcı için geçerli bir e-posta adresi sağlamalısınız.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Gönderilmesi için bir mesaj yazmalısınız.',
	'EMPTY_MESSAGE_IM'		=> 'Gönderilmesi için bir mesaj yazmalısınız.',
	'EMPTY_NAME_EMAIL'		=> 'Alıcının gerçek adını yazmalısınız.',
	'EMPTY_SUBJECT_EMAIL'	=> 'E-Posta için bir konu belirlemelisiniz.',
	'EQUAL_TO'				=> 'Dengi:',

	'FIND_USERNAME_EXPLAIN'	=> 'Bu form kullanıcıları aramak için kullanılır. Tüm bölümleri doldurmak zorunda değilsiniz. Girdiğiniz metnin bir kısmının eşleşmesi için değişken yerine * kullanabilirsiniz. Tarih girişi yaparken <kbd>YYYY-AA-GG</kbd> (yıl-ay-gün)sıralamasına uyunuz, Örnek: <samp>2004-02-29</samp>. Birden fazla kullanıcı seçmek için işaret kutularını kullanınız. (Doldurduğunuz forma bağlı olarak birden fazla kullanıcı ismi bulunabilir). Alternatif olarak; ihtiyacınız olan kullanıcıları işaretleyip işaretlileri seç butonuna basabilirsiniz.',
	'FLOOD_EMAIL_LIMIT'		=> 'Şu anda başka posta göderemezsiniz. Lütfen daha sonra deneyin.',

	'GROUP_LEADER'			=> 'Grup lideri',

	'HIDE_MEMBER_SEARCH'	=> 'Üye aramasını sakla',

	'IM_ADD_CONTACT'		=> 'Kullanıcı bağlantılarına ekle',
	'IM_AIM'				=> 'Lütfen dikkat: Bu özeliği kullanabilmek için sisteminizde kurulu bir AOL Messenger olmalıdır.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Uygulama yükle',
	'IM_ICQ'				=> 'Unutmayın ki, kullanıcılar rızası olmadan gelen Anlık Mesajları almamayı seçmiş olabilirler.',
	'IM_JABBER'				=> 'Lütfen unutmayın ki kullanıcılar rızası olmadan gelen Anlık Mesajları almamayı seçmiş olabilirler.',
	'IM_JABBER_SUBJECT'		=> 'Bu otomatik bir mesajdır. Lütfen yanıtlamayınız! Gönderen: %1$s Saat: %2$s.',
	'IM_MESSAGE'			=> 'Mesajınız',
	'IM_MSNM'				=> 'Lütfen unutmayın ki bu özelliği kullanabilmek için sisteminizde kurulu bir Windows Messenger olmalıdır.',
	'IM_MSNM_BROWSER'		=> 'Tarayıcınız bunu desteklemiyor.',
	'IM_MSNM_CONNECT'		=> 'MSNM/WLM bağlı değil.\nDevam etmek için MSNM/WLM bağlantısını sağlayın.',		
	'IM_NAME'				=> 'Adınız',
	'IM_NO_DATA'			=> 'Bu kullanıcı için uygun iletişim bilgisi mevcut değil.',
	'IM_NO_JABBER'			=> 'Üzgünüz, bu panoda Jabber’dan direk mesajlaşmasına izin verilmemektedir. Alıcıya ulaşmak için sisteminiz Jabber uygulamasını yüklemeniz gerekecek.',
	'IM_RECIPIENT'			=> 'Alıcı',
	'IM_SEND'				=> 'Mesaj Gönder',
	'IM_SEND_MESSAGE'		=> 'Mesaj Gönder',
	'IM_SENT_JABBER'		=> '%1$s’e yazdığınız mesaj gönderildi.',
	'IM_USER'				=> 'Anlık bir mesaj yolla',

	'LAST_ACTIVE'				=> 'Son aktivite',
	'LESS_THAN'					=> '’dan daha az',
	'LIST_USER'					=> '1 kullanıcı',
	'LIST_USERS'				=> '%d kullanıcı',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Takım listesini görmeniz için kayıtlı üye olmanız ve oturum açmanız isteniyor.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Üye listesini görmeniz için kayıtlı üye olmanız ve oturum açmanız isteniyor.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Kullanıcılar arasında arama yapmanız için kayıtlı üye olmanız ve oturum açmanız isteniyor.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Hesapları görmeniz için kayıtlı üye olmanız ve oturum açmanız isteniyor.',

	'MORE_THAN'				=> '’den daha fazla',

	'NO_EMAIL'				=> 'Bu kullanıcıya e-posta gönderme yetkiniz bulunmamaktadır.',
	'NO_VIEW_USERS'			=> 'Kullanıcı listesini görme izniniz bulunmamaktadır.',

	'ORDER'					=> 'Sıra',
	'OTHER'					=> 'Diğer',

	'POST_IP'				=> 'IP/alan adı',

	'RANK'					=> 'Seviye',
	'REAL_NAME'				=> 'Alıcının adı',
	'RECIPIENT'				=> 'Alıcı',
	'REMOVE_FOE'			=> 'Yasaklı sil',
	'REMOVE_FRIEND'			=> 'Arkadaş sil',

	'SEARCH_USER_POSTS'		=> 'Üyenin iletilerini ara',
	'SELECT_MARKED'			=> 'İşaretlileri seç',
	'SELECT_SORT_METHOD'	=> 'Sıralama türünü seçiniz',
	'SEND_AIM_MESSAGE'		=> 'AIM mesajı gönder',
	'SEND_ICQ_MESSAGE'		=> 'ICQ mesajı gönder',
	'SEND_IM'				=> 'Anlık mesajlaşma',
	'SEND_JABBER_MESSAGE'	=> 'Jabber mesajı gönder',
	'SEND_MESSAGE'			=> 'Mesaj',
	'SEND_MSNM_MESSAGE'		=> 'MSNM/WLM mesajı gönder',
	'SEND_YIM_MESSAGE'		=> 'YIM mesajı gönder',
	'SORT_EMAIL'			=> 'E-posta',
	'SORT_LAST_ACTIVE'		=> 'En son aktif olduğu zaman',
	'SORT_POST_COUNT'		=> 'İletileri say',

	'USERNAME_BEGINS_WITH'	=> 'Kullanıcı adının başladığı harf',
	'USER_ADMIN'			=> 'Kullanıcıyı yönet',
	'USER_BAN'				=> 'Uzaklaştır',
	'USER_FORUM'			=> 'Kullanıcı istatistiği',
	'USER_ONLINE'			=> 'Çevrimiçi',
	'USER_PRESENCE'			=> 'Pano görünüşü',

	'VIEWING_PROFILE'		=> '%s hesap bilgileri',
	'VISITED'				=> 'Son ziyaret',

	'WWW'					=> 'Web sitesi',
));

?>